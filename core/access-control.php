<?php
/**
 * Bamenda City Council E-Governance Platform
 * Access Control System
 */

// Bootstrap application if not already done
if (!defined('_BCC_BOOTSTRAP_LOADED')) {
    require_once __DIR__ . '/../bootstrap.php';
}

// Include database configuration
require_once __DIR__ . '/../config/database/database.php';

// Include security headers
require_once __DIR__ . '/security-headers.php';

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/**
 * Check if user is authenticated
 */
function is_authenticated() {
    return isset($_SESSION['user_id']) && !empty($_SESSION['user_id']);
}

/**
 * Get current user ID
 */
function get_current_user_id() {
    return $_SESSION['user_id'] ?? null;
}

/**
 * Get current user role
 */
function get_current_user_role() {
    return $_SESSION['user_role'] ?? null;
}

/**
 * Get current user role (alias for get_current_user_role)
 */
function get_user_role() {
    return get_current_user_role();
}

/**
 * Get user display name
 */
function get_user_display_name() {
    $user_data = get_user_data();
    if (!$user_data) {
        return 'Guest';
    }

    $name = trim(($user_data['first_name'] ?? '') . ' ' . ($user_data['last_name'] ?? ''));
    if ($name !== '') {
        return $name;
    }

    return $user_data['email'] ?? 'User';
}

/**
 * Get user email
 */
function get_user_email() {
    $user_data = get_user_data();
    return $user_data ? ($user_data['email'] ?? '') : '';
}

/**
 * Require authentication - redirect to login if not authenticated
 */
function require_authentication() {
    if (!is_authenticated()) {
        header('Location: /pages/auth/login.php');
        exit;
    }
}

/**
 * Require authentication - alias for require_authentication
 */
function require_auth() {
    require_authentication();
}

/**
 * Require specific role - redirect to unauthorized if not authorized
 */
function require_role($required_role) {
    require_auth();

    $user_role = get_current_user_role();

    // Define role hierarchy (higher roles can access lower role areas)
    $role_hierarchy = [
        'admin' => 3,
        'staff' => 2,
        'citizen' => 1
    ];

    $required_level = $role_hierarchy[$required_role] ?? 0;
    $user_level = $role_hierarchy[$user_role] ?? 0;

    if ($user_level < $required_level) {
        header('Location: /pages/auth/unauthorized.php');
        exit;
    }
}

/**
 * Check if user has specific role
 */
function has_role($role) {
    if (!is_authenticated()) {
        return false;
    }

    $user_role = get_current_user_role();

    // Define role hierarchy
    $role_hierarchy = [
        'admin' => 3,
        'staff' => 2,
        'citizen' => 1
    ];

    $required_level = $role_hierarchy[$role] ?? 0;
    $user_level = $role_hierarchy[$user_role] ?? 0;

    return $user_level >= $required_level;
}

/**
 * Logout user
 */
function logout() {
    session_destroy();
    header('Location: /pages/auth/login.php');
    exit;
}

/**
 * Get user data from database
 */
function get_user_data($user_id = null) {
    if ($user_id === null) {
        $user_id = get_current_user_id();
    }

    if (!$user_id) {
        return null;
    }

    $db = Database::getInstance();

    $stmt = $db->getConnection()->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    return $result->fetch_assoc();
}

/**
 * Check if current request is for a protected endpoint
 */
function is_protected_endpoint($current_path) {
    $protected_patterns = [
        '/pages/administration/',
        'dashboard.php',
        'profile.php',
        'settings.php',
        'notifications.php',
        'business-license.php',
        'permits.php',
        'property-registry.php',
        'tax-portal.php'
    ];

    foreach ($protected_patterns as $pattern) {
        if (strpos($current_path, $pattern) !== false) {
            return true;
        }
    }

    return false;
}

/**
 * Initialize access control for current request
 */
function init_access_control() {
    $current_path = $_SERVER['REQUEST_URI'] ?? '';

    // Check if current endpoint requires authentication
    if (is_protected_endpoint($current_path)) {
        require_auth();
    }
}

// Initialize access control on include
init_access_control();
