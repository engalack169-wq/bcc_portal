<?php
/**
 * Bamenda City Council E-Governance Platform
 * CSRF Token Protection System
 * Implements CSRF protection using tokens to prevent cross-site request forgery
 */

class CSRFProtection {
    
    const TOKEN_NAME = '_csrf_token';
    const TOKEN_LENGTH = 32;
    const TOKEN_LIFETIME = 3600; // 1 hour
    
    /**
     * Initialize CSRF protection - start session if needed
     */
    public static function init() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }
    
    /**
     * Generate a new CSRF token and store in session
     */
    public static function generateToken() {
        self::init();
        
        // Generate new token
        $token = bin2hex(random_bytes(self::TOKEN_LENGTH));
        
        // Store in session with timestamp
        if (!isset($_SESSION['_csrf_tokens'])) {
            $_SESSION['_csrf_tokens'] = [];
        }
        
        $_SESSION['_csrf_tokens'][$token] = time();
        
        // Clean up old tokens (older than token lifetime)
        self::cleanupOldTokens();
        
        return $token;
    }
    
    /**
     * Get current CSRF token (generate if not exists)
     */
    public static function getToken() {
        self::init();
        
        if (!isset($_SESSION['_csrf_tokens']) || empty($_SESSION['_csrf_tokens'])) {
            return self::generateToken();
        }
        
        // Return the first valid token
        foreach ($_SESSION['_csrf_tokens'] as $token => $timestamp) {
            if ($timestamp > (time() - self::TOKEN_LIFETIME)) {
                return $token;
            }
        }
        
        // If no valid token found, generate new one
        return self::generateToken();
    }
    
    /**
     * Validate CSRF token from request
     */
    public static function validateToken($token) {
        self::init();
        
        if (empty($token)) {
            return false;
        }
        
        // Check if token exists and is not expired
        if (!isset($_SESSION['_csrf_tokens'][$token])) {
            return false;
        }
        
        $timestamp = $_SESSION['_csrf_tokens'][$token];
        
        // Check if token is expired
        if ($timestamp < (time() - self::TOKEN_LIFETIME)) {
            unset($_SESSION['_csrf_tokens'][$token]);
            return false;
        }
        
        // Token is valid - remove it from session (one-time use)
        unset($_SESSION['_csrf_tokens'][$token]);
        
        return true;
    }
    
    /**
     * Validate token from POST request
     */
    public static function validatePostToken() {
        $token = $_POST[self::TOKEN_NAME] ?? '';
        return self::validateToken($token);
    }
    
    /**
     * Validate token from GET request
     */
    public static function validateGetToken() {
        $token = $_GET[self::TOKEN_NAME] ?? '';
        return self::validateToken($token);
    }
    
    /**
     * Clean up expired tokens from session
     */
    private static function cleanupOldTokens() {
        if (!isset($_SESSION['_csrf_tokens'])) {
            return;
        }
        
        $currentTime = time();
        foreach ($_SESSION['_csrf_tokens'] as $token => $timestamp) {
            if ($timestamp < ($currentTime - self::TOKEN_LIFETIME)) {
                unset($_SESSION['_csrf_tokens'][$token]);
            }
        }
    }
    
    /**
     * Get HTML hidden input field for form submission
     */
    public static function getTokenField() {
        $token = self::getToken();
        return sprintf(
            '<input type="hidden" name="%s" value="%s">',
            htmlspecialchars(self::TOKEN_NAME),
            htmlspecialchars($token)
        );
    }
    
    /**
     * Require CSRF token validation for state-changing operations
     * Call this at the start of any POST/PUT/DELETE endpoint
     */
    public static function requireCSRFToken() {
        // Only validate state-changing requests
        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        
        if (!in_array($method, ['POST', 'PUT', 'DELETE', 'PATCH'])) {
            return true;
        }
        
        // Allow API requests with valid CSRF token
        $token = $_POST[self::TOKEN_NAME] ?? $_GET[self::TOKEN_NAME] ?? $_SERVER['HTTP_X_CSRF_TOKEN'] ?? '';
        
        if (!self::validateToken($token)) {
            http_response_code(403);
            header('Content-Type: application/json');
            echo json_encode([
                'success' => false,
                'message' => 'CSRF token validation failed'
            ]);
            exit;
        }
        
        return true;
    }
}

// Initialize CSRF protection on include
CSRFProtection::init();
?>
