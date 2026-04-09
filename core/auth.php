<?php
/**
 * Bamenda City Council E-Governance Platform
 * Authentication Handler
 */

// Include required files
require_once __DIR__ . '/../config/database/database.php';
require_once __DIR__ . '/access-control.php';

// Set content type to JSON for AJAX responses
header('Content-Type: application/json');

// Handle different actions
$action = $_POST['action'] ?? $_GET['action'] ?? '';

switch ($action) {
    case 'login':
        handle_login();
        break;
    case 'logout':
        handle_logout();
        break;
    case 'check_session':
        check_session();
        break;
    default:
        echo json_encode(['success' => false, 'message' => 'Invalid action']);
        break;
}

/**
 * Handle user login
 */
function handle_login() {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $remember = isset($_POST['remember']) && $_POST['remember'] == '1';

    // Validate input
    if (empty($email) || empty($password)) {
        echo json_encode(['success' => false, 'message' => 'Email and password are required']);
        return;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'message' => 'Invalid email format']);
        return;
    }

    try {
        $db = Database::getInstance();

        // Get user by email
        $stmt = $db->getConnection()->prepare("SELECT id, email, password, role, status, first_name, last_name FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 0) {
            echo json_encode(['success' => false, 'message' => 'Invalid email or password']);
            return;
        }

        $user = $result->fetch_assoc();
        $user['display_name'] = trim(($user['first_name'] ?? '') . ' ' . ($user['last_name'] ?? '')) ?: $user['email'];

        // Check if account is active
        if ($user['status'] !== 'active') {
            echo json_encode(['success' => false, 'message' => 'Account is not active']);
            return;
        }

        // Verify password (assuming passwords are hashed with password_hash)
        if (!password_verify($password, $user['password'])) {
            echo json_encode(['success' => false, 'message' => 'Invalid email or password']);
            return;
        }

        // Start session and set user data
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_email'] = $user['email'];
        $_SESSION['user_role'] = $user['role'];
        $_SESSION['user_name'] = $user['display_name'];

        // Set session lifetime if remember me is checked
        if ($remember) {
            $config = require __DIR__ . '/../config/app/config.php';
            $lifetime = $config['app']['session_lifetime'] ?? 7200;
            session_set_cookie_params($lifetime);
        }

        // Update last login
        $update_stmt = $db->getConnection()->prepare("UPDATE users SET last_login = NOW() WHERE id = ?");
        $update_stmt->bind_param("i", $user['id']);
        $update_stmt->execute();

        echo json_encode([
            'success' => true,
            'message' => 'Login successful',
            'redirect' => get_dashboard_url($user['role'])
        ]);

    } catch (Throwable $e) {
        error_log("Login error: " . $e->getMessage());
        $config = require __DIR__ . '/../config/app/config.php';
        $responseMessage = 'Connection error. Please try again.';
        if (!empty($config['app']['debug'])) {
            $responseMessage = $e->getMessage();
        }
        echo json_encode(['success' => false, 'message' => $responseMessage]);
    }
}

/**
 * Handle user logout
 */
function handle_logout() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    session_destroy();

    echo json_encode(['success' => true, 'message' => 'Logged out successfully']);
}

/**
 * Check if user session is valid
 */
function check_session() {
    if (is_authenticated()) {
        echo json_encode([
            'success' => true,
            'user' => [
                'id' => get_current_user_id(),
                'role' => get_current_user_role(),
                'name' => get_user_display_name(),
                'email' => get_user_email()
            ]
        ]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Not authenticated']);
    }
}

/**
 * Get dashboard URL based on user role
 */
function get_dashboard_url($role) {
    switch ($role) {
        case 'admin':
            return '/stitch1/pages/administration/dashboard.php';
        case 'staff':
            return '/stitch1/pages/administration/staff-portal.php';
        case 'citizen':
        default:
            return '/stitch1/pages/citizen-services/dashboard.php';
    }
}
?>