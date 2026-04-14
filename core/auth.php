<?php
/**
 */

// Include required files
require_once __DIR__ . '/../config/database/database.php';
require_once __DIR__ . '/access-control.php';
require_once __DIR__ . '/csrf-protection.php';

// Set content type to JSON for AJAX responses
header('Content-Type: application/json');

// Handle different actions
$action = $_POST['action'] ?? $_GET['action'] ?? '';

// Validate CSRF token for state-changing operations
if (in_array($action, ['login', 'register', 'logout'])) {
    $csrf_token = $_POST['_csrf_token'] ?? $_GET['_csrf_token'] ?? '';
    if (!CSRFProtection::validateToken($csrf_token)) {
        echo json_encode(['success' => false, 'message' => 'Invalid security token. Please try again.']);
        exit;
    }
}

switch ($action) {
    case 'login':
        handle_login();
        break;
    case 'register':
        handle_register();
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
 * Handle user registration
 */
function handle_register() {
    // Collect and trim inputs
    $first_name = trim($_POST['first_name'] ?? '');
    $last_name = trim($_POST['last_name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $date_of_birth = $_POST['date_of_birth'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $address = trim($_POST['address'] ?? '');
    $role = $_POST['role'] ?? 'citizen';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    $terms = $_POST['terms'] ?? '';

    // Validate required fields
    if (empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($confirm_password)) {
        echo json_encode(['success' => false, 'message' => 'Please fill in all required fields']);
        return;
    }

    // Validate terms agreement
    if ($terms !== '1') {
        echo json_encode(['success' => false, 'message' => 'You must agree to the Terms and Conditions']);
        return;
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'message' => 'Invalid email format']);
        return;
    }

    // Validate password match
    if ($password !== $confirm_password) {
        echo json_encode(['success' => false, 'message' => 'Passwords do not match']);
        return;
    }

    // Validate password strength (minimum 8 chars, at least one uppercase, one lowercase, one number and one special char)
    if (strlen($password) < 8) {
        echo json_encode(['success' => false, 'message' => 'Password must be at least 8 characters long']);
        return;
    }

    // if (!preg_match('/[A-Z]/', $password)) {
    //     echo json_encode(['success' => false, 'message' => 'Password must contain at least one uppercase letter']);
    //     return;
    // }

    // if (!preg_match('/[a-z]/', $password)) {
    //     echo json_encode(['success' => false, 'message' => 'Password must contain at least one lowercase letter']);
    //     return;
    // }

    // if (!preg_match('/[0-9]/', $password)) {
    //     echo json_encode(['success' => false, 'message' => 'Password must contain at least one number']);
    //     return;
    // }

    // if (!preg_match('/[!@#$%^&*()_+\-=\[\]{};:\'",.<>?\/\\|`~]/', $password)) {
    //     echo json_encode(['success' => false, 'message' => 'Password must contain at least one special character']);
    //     return;
    // }

    // Validate age (must be 18 or older)
    if (!empty($date_of_birth)) {
        try {
            $config = require __DIR__ . '/../config/app/config.php';
            $timezone = new DateTimeZone($config['app']['timezone'] ?? 'Africa/Douala');
            $birth_date = new DateTime($date_of_birth, $timezone);
            $today = new DateTime('now', $timezone);
            $age = $today->diff($birth_date)->y;
            
            if ($age < 18) {
                echo json_encode(['success' => false, 'message' => 'You must be at least 18 years old to create an account']);
                return;
            }
        } catch (Exception $e) {
            echo json_encode(['success' => false, 'message' => 'Invalid date of birth format']);
            return;
        }
    }

    // Only allow citizen role for self-registration
    if ($role !== 'citizen') {
        $role = 'citizen'; // Force citizen role for security
    }

    try {
        $db = Database::getInstance();

        // Check if email already exists
        $check_stmt = $db->getConnection()->prepare("SELECT id FROM users WHERE email = ?");
        $check_stmt->bind_param("s", $email);
        $check_stmt->execute();
        $check_result = $check_stmt->get_result();

        if ($check_result->num_rows > 0) {
            echo json_encode(['success' => false, 'message' => 'Email already registered']);
            return;
        }

        // Hash password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $status = 'active';

        // Insert new user
        $insert_stmt = $db->getConnection()->prepare("
            INSERT INTO users (
                first_name, last_name, email, phone, date_of_birth, gender, 
                address, role, password, status
            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
        ");

        $insert_stmt->bind_param(
            "ssssssssss",
            $first_name, $last_name, $email, $phone, $date_of_birth, $gender,
            $address, $role, $hashed_password, $status
        );

        if ($insert_stmt->execute()) {
            // Set session for new user (auto-login)
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            
            $user_id = $db->getConnection()->insert_id;
            $display_name = trim($first_name . ' ' . $last_name);
            $_SESSION['user_id'] = $user_id;
            $_SESSION['user_email'] = $email;
            $_SESSION['user_role'] = $role;
            $_SESSION['user_name'] = $display_name;

            echo json_encode([
                'success' => true,
                'message' => 'Account created successfully',
                'redirect' => get_dashboard_url($role)
            ]);
        } else {
            throw new Exception('Failed to create account: ' . $insert_stmt->error);
        }

    } catch (Throwable $e) {
        error_log("Registration error: " . $e->getMessage());
        $config = require __DIR__ . '/../config/app/config.php';
        $responseMessage = 'Unable to create account. Please try again.';
        if (!empty($config['app']['debug'])) {
            $responseMessage = $e->getMessage();
        }
        echo json_encode(['success' => false, 'message' => $responseMessage]);
    }
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
            return '/pages/administration/dashboard.php';
        case 'staff':
            return '/pages/administration/staff-portal.php';
        case 'citizen':
        default:
            return '/pages/citizen-services/dashboard.php';
    }
}
