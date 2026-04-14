<?php
/**
 * Bamenda E-Governance Platform
 * Security Manager
 * Input validation, sanitization, and protection
 */

class SecurityManager {
    
    private static $instance = null;
    
    /**
     * Singleton instance
     */
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    /**
     * Sanitize string input
     */
    public static function sanitizeString($input) {
        if (!is_string($input)) {
            return '';
        }
        return trim(htmlspecialchars($input, ENT_QUOTES, 'UTF-8'));
    }
    
    /**
     * Sanitize email
     */
    public static function sanitizeEmail($email) {
        $email = trim($email);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $email;
        }
        return false;
    }
    
    /**
     * Sanitize number/integer
     */
    public static function sanitizeNumber($input, $type = 'int') {
        if ($type === 'float') {
            return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        }
        return filter_var($input, FILTER_SANITIZE_NUMBER_INT);
    }
    
    /**
     * Sanitize URL
     */
    public static function sanitizeUrl($url) {
        return filter_var($url, FILTER_SANITIZE_URL);
    }
    
    /**
     * Hash password securely
     */
    public static function hashPassword($password) {
        if (strlen($password) < 8) {
            return false;
        }
        return password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);
    }
    
    /**
     * Verify password
     */
    public static function verifyPassword($password, $hash) {
        return password_verify($password, $hash);
    }
    
    /**
     * Validate password strength
     */
    public static function validatePasswordStrength($password) {
        $errors = [];
        
        // if (strlen($password) < 8) {
        //     $errors[] = 'Password must be at least 8 characters';
        // }
        
        // if (!preg_match('/[A-Z]/', $password)) {
        //     $errors[] = 'Password must contain at least one uppercase letter';
        // }
        
        // if (!preg_match('/[a-z]/', $password)) {
        //     $errors[] = 'Password must contain at least one lowercase letter';
        // }
        
        // if (!preg_match('/[0-9]/', $password)) {
        //     $errors[] = 'Password must contain at least one number';
        // }
        
        // if (!preg_match('/[!@#$%^&*]/', $password)) {
        //     $errors[] = 'Password must contain at least one special character (!@#$%^&*)';
        // }
        
        return empty($errors) ? ['valid' => true] : ['valid' => false, 'errors' => $errors];
    }
    
    /**
     * Generate CSRF token
     */
    public static function generateCSRFToken() {
        if (!isset($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
        return $_SESSION['csrf_token'];
    }
    
    /**
     * Verify CSRF token
     */
    public static function verifyCSRFToken($token) {
        if (!isset($_SESSION['csrf_token'])) {
            return false;
        }
        return hash_equals($_SESSION['csrf_token'], $token);
    }
    
    /**
     * Check for XSS attempt
     */
    public static function isXSSAttempt($input) {
        $dangerous_patterns = [
            '/<script[\s\S]*?<\/script>/i',
            '/javascript:/i',
            '/on\w+\s*=/i',
            '/<iframe/i',
            '/<object/i',
            '/<embed/i',
        ];
        
        foreach ($dangerous_patterns as $pattern) {
            if (preg_match($pattern, $input)) {
                return true;
            }
        }
        return false;
    }
    
    /**
     * Check for SQL injection attempt
     */
    public static function isSQLInjectionAttempt($input) {
        $dangerous_keywords = [
            'UNION',
            'SELECT',
            'INSERT',
            'UPDATE',
            'DELETE',
            'DROP',
            'EXEC',
            'EXECUTE',
            ';',
            '--',
            '/*',
            '*/',
        ];
        
        $input_upper = strtoupper($input);
        foreach ($dangerous_keywords as $keyword) {
            if (strpos($input_upper, $keyword) !== false) {
                return true;
            }
        }
        return false;
    }
    
    /**
     * Validate file upload
     */
    public static function validateFileUpload($file, $allowed_types = [], $max_size = 5242880) {
        if (!isset($file['tmp_name']) || empty($file['tmp_name'])) {
            return ['valid' => false, 'error' => 'No file uploaded'];
        }
        
        // Check file size
        if ($file['size'] > $max_size) {
            return ['valid' => false, 'error' => 'File size exceeds maximum allowed'];
        }
        
        // Check file type
        $file_type = mime_content_type($file['tmp_name']);
        if (!empty($allowed_types) && !in_array($file_type, $allowed_types)) {
            return ['valid' => false, 'error' => 'File type not allowed'];
        }
        
        return ['valid' => true];
    }
    
    /**
     * Generate secure random token
     */
    public static function generateToken($length = 32) {
        return bin2hex(random_bytes($length / 2));
    }
    
    /**
     * Rate limiting check
     */
    public static function checkRateLimit($identifier, $max_attempts = 5, $window = 300) {
        $key = "rate_limit_{$identifier}";
        
        if (!isset($_SESSION[$key])) {
            $_SESSION[$key] = ['attempts' => 0, 'first_attempt' => time()];
        }
        
        $data = $_SESSION[$key];
        $current_time = time();
        
        // Reset if window has passed
        if ($current_time - $data['first_attempt'] > $window) {
            $_SESSION[$key] = ['attempts' => 0, 'first_attempt' => $current_time];
            return true;
        }
        
        // Check if limit exceeded
        if ($data['attempts'] >= $max_attempts) {
            return false;
        }
        
        // Increment attempts
        $_SESSION[$key]['attempts']++;
        return true;
    }
    
    /**
     * Sanitize array of data
     */
    public static function sanitizeArray($data, $fields = []) {
        $sanitized = [];
        
        foreach ($data as $key => $value) {
            if (isset($fields[$key])) {
                $type = $fields[$key];
                
                switch ($type) {
                    case 'email':
                        $sanitized[$key] = self::sanitizeEmail($value);
                        break;
                    case 'number':
                    case 'int':
                        $sanitized[$key] = self::sanitizeNumber($value, 'int');
                        break;
                    case 'float':
                        $sanitized[$key] = self::sanitizeNumber($value, 'float');
                        break;
                    case 'url':
                        $sanitized[$key] = self::sanitizeUrl($value);
                        break;
                    case 'string':
                    default:
                        $sanitized[$key] = self::sanitizeString($value);
                        break;
                }
            }
        }
        
        return $sanitized;
    }
    
    /**
     * Encode for HTML output
     */
    public static function encodeHtml($string) {
        return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    }
    
    /**
     * Encode for JavaScript
     */
    public static function encodeJs($string) {
        return json_encode($string);
    }
    
    /**
     * Generate session fingerprint
     */
    public static function generateSessionFingerprint() {
        return hash('sha256', $_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR']);
    }
    
    /**
     * Verify session fingerprint
     */
    public static function verifySessionFingerprint() {
        if (!isset($_SESSION['fingerprint'])) {
            $_SESSION['fingerprint'] = self::generateSessionFingerprint();
            return true;
        }
        
        return hash_equals($_SESSION['fingerprint'], self::generateSessionFingerprint());
    }
}

// Create global instance
$security = SecurityManager::getInstance();
?>
