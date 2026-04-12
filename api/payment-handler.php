<?php
/**
 * Bamenda City Council E-Governance Platform
 * Payment Handler - Payment Gateway Integration (Stripe/PayPal)
 */

require_once __DIR__ . '/../config/database/database.php';
require_once __DIR__ . '/../core/access-control.php';

header('Content-Type: application/json');

require_authentication();

$action = $_POST['action'] ?? $_GET['action'] ?? '';
$user_id = $_SESSION['user_id'] ?? null;

if (!$user_id) {
    http_response_code(401);
    echo json_encode(['success' => false, 'message' => 'Unauthorized']);
    exit;
}

// Payment gateway configurations
$config = [
    'stripe' => [
        'enabled' => true,
        'public_key' => getenv('STRIPE_PUBLIC_KEY') ?: 'pk_test_51234567890',
        'secret_key' => getenv('STRIPE_SECRET_KEY') ?: 'sk_test_01234567890'
    ],
    'paypal' => [
        'enabled' => false,
        'client_id' => getenv('PAYPAL_CLIENT_ID') ?: '',
        'secret' => getenv('PAYPAL_SECRET') ?: ''
    ]
];

switch ($action) {
    case 'get_payment_methods':
        get_payment_methods($user_id);
        break;
    case 'create_payment_intent':
        create_payment_intent($user_id, $config);
        break;
    case 'confirm_payment':
        confirm_payment($user_id, $config);
        break;
    case 'get_payment_history':
        get_payment_history($user_id);
        break;
    case 'generate_invoice':
        generate_invoice($user_id);
        break;
    default:
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Invalid action']);
        break;
}

/**
 * Get available payment methods
 */
function get_payment_methods($user_id) {
    echo json_encode([
        'success' => true,
        'payment_methods' => [
            [
                'id' => 'stripe',
                'name' => 'Credit/Debit Card',
                'icon' => 'credit_card',
                'enabled' => true
            ],
            [
                'id' => 'bank_transfer',
                'name' => 'Bank Transfer',
                'icon' => 'account_balance',
                'enabled' => true
            ],
            [
                'id' => 'mobile_money',
                'name' => 'Mobile Money (MTN/Airtel)',
                'icon' => 'phone',
                'enabled' => true
            ]
        ]
    ]);
}

/**
 * Create payment intent for Stripe
 */
function create_payment_intent($user_id, $config) {
    try {
        $amount = (float)($_POST['amount'] ?? 0);
        $reference_id = $_POST['reference_id'] ?? '';
        $description = $_POST['description'] ?? 'Service Payment';
        $payment_method = $_POST['payment_method'] ?? 'stripe';
        
        if ($amount <= 0) {
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => 'Invalid amount']);
            return;
        }
        
        $db = Database::getInstance();
        
        // Create payment record
        $stmt = $db->getConnection()->prepare("
            INSERT INTO payments (user_id, reference_id, description, amount, status)
            VALUES (?, ?, ?, ?, 'pending')
        ");
        
        $stmt->bind_param("issd", $user_id, $reference_id, $description, $amount);
        
        if (!$stmt->execute()) {
            throw new Exception('Failed to create payment record');
        }
        
        $payment_id = $db->getConnection()->insert_id;
        
        if ($payment_method === 'stripe' && $config['stripe']['enabled']) {
            // Create Stripe payment intent
            $stripe_secret = $config['stripe']['secret_key'];
            
            // For demo, return client secret (in production, use Stripe API)
            $client_secret = 'pi_' . bin2hex(random_bytes(16));
            
            // Store Stripe intent ID
            $update_stmt = $db->getConnection()->prepare("
                UPDATE payments 
                SET stripe_intent_id = ?
                WHERE id = ?
            ");
            $update_stmt->bind_param("si", $client_secret, $payment_id);
            $update_stmt->execute();
            
            echo json_encode([
                'success' => true,
                'payment_id' => $payment_id,
                'client_secret' => $client_secret,
                'amount' => $amount,
                'currency' => 'GHS',
                'payment_method' => 'stripe'
            ]);
        } else {
            // Other payment methods
            echo json_encode([
                'success' => true,
                'payment_id' => $payment_id,
                'amount' => $amount,
                'reference' => 'PAY-' . $payment_id . '-' . time(),
                'payment_method' => $payment_method,
                'status' => 'pending'
            ]);
        }
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
}

/**
 * Confirm payment
 */
function confirm_payment($user_id, $config) {
    try {
        $payment_id = $_POST['payment_id'] ?? null;
        $stripe_intent_id = $_POST['stripe_intent_id'] ?? '';
        $payment_method = $_POST['payment_method'] ?? '';
        $transaction_id = $_POST['transaction_id'] ?? '';
        
        if (!$payment_id) {
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => 'Payment ID required']);
            return;
        }
        
        $db = Database::getInstance();
        
        // Update payment status
        $stmt = $db->getConnection()->prepare("
            UPDATE payments 
            SET status = 'paid', payment_date = NOW()
            WHERE id = ? AND user_id = ?
        ");
        
        $stmt->bind_param("ii", $payment_id, $user_id);
        
        if ($stmt->execute()) {
            // Record transaction
            $db->getConnection()->query("
                CREATE TABLE IF NOT EXISTS payment_transactions (
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    payment_id INT,
                    transaction_id VARCHAR(255),
                    payment_method VARCHAR(50),
                    status VARCHAR(50),
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                    FOREIGN KEY (payment_id) REFERENCES payments(id)
                )
            ");
            
            $trans_stmt = $db->getConnection()->prepare("
                INSERT INTO payment_transactions (payment_id, transaction_id, payment_method, status)
                VALUES (?, ?, ?, 'completed')
            ");
            
            $trans_stmt->bind_param("iss", $payment_id, $transaction_id, $payment_method);
            $trans_stmt->execute();
            
            echo json_encode([
                'success' => true,
                'message' => 'Payment confirmed successfully',
                'payment_id' => $payment_id,
                'transaction_id' => $transaction_id
            ]);
        } else {
            throw new Exception('Failed to confirm payment');
        }
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
}

/**
 * Get payment history
 */
function get_payment_history($user_id) {
    try {
        $db = Database::getInstance();
        
        $stmt = $db->getConnection()->prepare("
            SELECT p.*, pt.transaction_id, pt.payment_method
            FROM payments p
            LEFT JOIN payment_transactions pt ON p.id = pt.payment_id
            WHERE p.user_id = ?
            ORDER BY p.created_at DESC
            LIMIT 100
        ");
        
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        $payments = [];
        while ($row = $result->fetch_assoc()) {
            $payments[] = $row;
        }
        
        echo json_encode([
            'success' => true,
            'payments' => $payments,
            'count' => count($payments)
        ]);
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
}

/**
 * Generate invoice
 */
function generate_invoice($user_id) {
    try {
        $payment_id = $_GET['payment_id'] ?? null;
        
        if (!$payment_id) {
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => 'Payment ID required']);
            return;
        }
        
        $db = Database::getInstance();
        
        $stmt = $db->getConnection()->prepare("
            SELECT p.*, u.first_name, u.last_name, u.email, u.phone
            FROM payments p
            JOIN users u ON p.user_id = u.id
            WHERE p.id = ? AND p.user_id = ?
        ");
        
        $stmt->bind_param("ii", $payment_id, $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows === 0) {
            http_response_code(404);
            echo json_encode(['success' => false, 'message' => 'Payment not found']);
            return;
        }
        
        $payment = $result->fetch_assoc();
        
        echo json_encode([
            'success' => true,
            'invoice' => [
                'invoice_number' => 'INV-' . $payment_id . '-' . date('Y'),
                'date' => date('Y-m-d', strtotime($payment['created_at'])),
                'due_date' => $payment['due_date'],
                'amount' => $payment['amount'],
                'status' => $payment['status'],
                'description' => $payment['description'],
                'user' => [
                    'name' => $payment['first_name'] . ' ' . $payment['last_name'],
                    'email' => $payment['email'],
                    'phone' => $payment['phone']
                ]
            ]
        ]);
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
}
?>
