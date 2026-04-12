<?php
/**
 * Bamenda City Council E-Governance Platform
 * Profile Backend Handler - Save/Fetch Profile Data
 */

require_once __DIR__ . '/../config/database/database.php';
require_once __DIR__ . '/../core/access-control.php';

header('Content-Type: application/json');

// Require authentication
require_authentication();

$action = $_POST['action'] ?? $_GET['action'] ?? '';
$user_id = $_SESSION['user_id'] ?? null;

if (!$user_id) {
    http_response_code(401);
    echo json_encode(['success' => false, 'message' => 'Unauthorized']);
    exit;
}

switch ($action) {
    case 'get_profile':
        get_profile($user_id);
        break;
    case 'update_profile':
        update_profile($user_id);
        break;
    case 'get_documents':
        get_documents($user_id);
        break;
    case 'get_applications':
        get_applications($user_id);
        break;
    case 'get_payments':
        get_payments($user_id);
        break;
    case 'get_notifications':
        get_notifications($user_id);
        break;
    default:
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Invalid action']);
        break;
}

/**
 * Get user profile information
 */
function get_profile($user_id) {
    try {
        $db = Database::getInstance();
        $stmt = $db->getConnection()->prepare("
            SELECT id, first_name, last_name, email, phone, date_of_birth, 
                   gender, address, created_at, status
            FROM users 
            WHERE id = ?
        ");
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows === 0) {
            http_response_code(404);
            echo json_encode(['success' => false, 'message' => 'User not found']);
            return;
        }
        
        $user = $result->fetch_assoc();
        echo json_encode([
            'success' => true,
            'profile' => $user
        ]);
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
}

/**
 * Update user profile information
 */
function update_profile($user_id) {
    try {
        $db = Database::getInstance();
        
        // Get and sanitize input
        $first_name = trim($_POST['first_name'] ?? '');
        $last_name = trim($_POST['last_name'] ?? '');
        $phone = trim($_POST['phone'] ?? '');
        $date_of_birth = $_POST['date_of_birth'] ?? '';
        $gender = $_POST['gender'] ?? '';
        $address = trim($_POST['address'] ?? '');
        
        // Validate required fields
        if (empty($first_name) || empty($last_name)) {
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => 'First name and last name are required']);
            return;
        }
        
        // Update user
        $stmt = $db->getConnection()->prepare("
            UPDATE users 
            SET first_name = ?, last_name = ?, phone = ?, date_of_birth = ?,
                gender = ?, address = ?, updated_at = NOW()
            WHERE id = ?
        ");
        
        $stmt->bind_param("ssssssi", $first_name, $last_name, $phone, $date_of_birth, $gender, $address, $user_id);
        
        if ($stmt->execute()) {
            echo json_encode([
                'success' => true,
                'message' => 'Profile updated successfully'
            ]);
        } else {
            throw new Exception('Failed to update profile');
        }
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
}

/**
 * Get user documents
 */
function get_documents($user_id) {
    try {
        $db = Database::getInstance();
        
        // Create table if not exists
        $db->getConnection()->query("
            CREATE TABLE IF NOT EXISTS documents (
                id INT AUTO_INCREMENT PRIMARY KEY,
                user_id INT NOT NULL,
                document_name VARCHAR(255) NOT NULL,
                document_type VARCHAR(100),
                file_path VARCHAR(255),
                file_size INT,
                status ENUM('pending', 'verified', 'rejected') DEFAULT 'pending',
                uploaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                verified_at TIMESTAMP NULL,
                INDEX idx_user_id (user_id)
            )
        ");
        
        $stmt = $db->getConnection()->prepare("
            SELECT id, document_name, document_type, file_size, status, uploaded_at, verified_at
            FROM documents
            WHERE user_id = ?
            ORDER BY uploaded_at DESC
        ");
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        $documents = [];
        while ($row = $result->fetch_assoc()) {
            $documents[] = $row;
        }
        
        echo json_encode([
            'success' => true,
            'documents' => $documents,
            'count' => count($documents)
        ]);
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
}

/**
 * Get user applications
 */
function get_applications($user_id) {
    try {
        $db = Database::getInstance();
        
        // Create table if not exists
        $db->getConnection()->query("
            CREATE TABLE IF NOT EXISTS applications (
                id INT AUTO_INCREMENT PRIMARY KEY,
                user_id INT NOT NULL,
                application_type VARCHAR(100),
                reference_id VARCHAR(50),
                title VARCHAR(255),
                description TEXT,
                status ENUM('submitted', 'under_review', 'approved', 'rejected', 'completed') DEFAULT 'submitted',
                submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                completed_at TIMESTAMP NULL,
                notes TEXT,
                INDEX idx_user_id (user_id),
                INDEX idx_status (status)
            )
        ");
        
        $stmt = $db->getConnection()->prepare("
            SELECT id, application_type, reference_id, title, description, status, 
                   submitted_at, completed_at
            FROM applications
            WHERE user_id = ?
            ORDER BY submitted_at DESC
        ");
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        $applications = [];
        while ($row = $result->fetch_assoc()) {
            $applications[] = $row;
        }
        
        echo json_encode([
            'success' => true,
            'applications' => $applications,
            'count' => count($applications)
        ]);
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
}

/**
 * Get user payments
 */
function get_payments($user_id) {
    try {
        $db = Database::getInstance();
        
        // Create table if not exists
        $db->getConnection()->query("
            CREATE TABLE IF NOT EXISTS payments (
                id INT AUTO_INCREMENT PRIMARY KEY,
                user_id INT NOT NULL,
                reference_id VARCHAR(50),
                description VARCHAR(255),
                amount DECIMAL(10, 2),
                status ENUM('pending', 'paid', 'failed', 'refunded') DEFAULT 'pending',
                payment_date TIMESTAMP NULL,
                due_date DATE NULL,
                invoice_path VARCHAR(255),
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                INDEX idx_user_id (user_id),
                INDEX idx_status (status)
            )
        ");
        
        $stmt = $db->getConnection()->prepare("
            SELECT id, reference_id, description, amount, status, payment_date, 
                   due_date, created_at
            FROM payments
            WHERE user_id = ?
            ORDER BY created_at DESC
        ");
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        $payments = [];
        $total_paid = 0;
        $total_pending = 0;
        
        while ($row = $result->fetch_assoc()) {
            $payments[] = $row;
            if ($row['status'] === 'paid') {
                $total_paid += (float)$row['amount'];
            } elseif ($row['status'] === 'pending') {
                $total_pending += (float)$row['amount'];
            }
        }
        
        echo json_encode([
            'success' => true,
            'payments' => $payments,
            'total_paid' => $total_paid,
            'total_pending' => $total_pending,
            'count' => count($payments)
        ]);
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
}

/**
 * Get user notifications
 */
function get_notifications($user_id) {
    try {
        $db = Database::getInstance();
        
        // Create table if not exists
        $db->getConnection()->query("
            CREATE TABLE IF NOT EXISTS notifications (
                id INT AUTO_INCREMENT PRIMARY KEY,
                user_id INT NOT NULL,
                type VARCHAR(50),
                title VARCHAR(255),
                message TEXT,
                is_read BOOLEAN DEFAULT FALSE,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                INDEX idx_user_id (user_id),
                INDEX idx_is_read (is_read)
            )
        ");
        
        $stmt = $db->getConnection()->prepare("
            SELECT id, type, title, message, is_read, created_at
            FROM notifications
            WHERE user_id = ?
            ORDER BY created_at DESC
            LIMIT 50
        ");
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        $notifications = [];
        $unread_count = 0;
        
        while ($row = $result->fetch_assoc()) {
            $notifications[] = $row;
            if (!$row['is_read']) {
                $unread_count++;
            }
        }
        
        echo json_encode([
            'success' => true,
            'notifications' => $notifications,
            'unread_count' => $unread_count,
            'count' => count($notifications)
        ]);
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
}
?>
