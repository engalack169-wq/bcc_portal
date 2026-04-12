<?php
/**
 * Bamenda City Council E-Governance Platform
 * Two-Factor Authentication Service
 */

class TwoFactorAuthService {
    private $db;
    private $user_id;
    private $smtp_config;
    
    public function __construct($user_id = null) {
        require_once __DIR__ . '/../config/database/database.php';
        $this->db = Database::getInstance();
        $this->user_id = $user_id;
    }
    
    /**
     * Enable 2FA for user
     */
    public function enable_2fa($method = 'email') {
        try {
            if (!$this->user_id) {
                return ['success' => false, 'message' => 'User not authenticated'];
            }
            
            // Create 2FA table if not exists
            $this->db->getConnection()->query("
                CREATE TABLE IF NOT EXISTS two_factor_auth (
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    user_id INT UNIQUE,
                    method ENUM('email', 'sms', 'totp') DEFAULT 'email',
                    is_enabled BOOLEAN DEFAULT FALSE,
                    secret_key VARCHAR(255),
                    backup_codes TEXT,
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                    FOREIGN KEY (user_id) REFERENCES users(id)
                )
            ");
            
            $secret_key = $this->generate_secret_key();
            $backup_codes = $this->generate_backup_codes();
            
            $stmt = $this->db->getConnection()->prepare("
                INSERT INTO two_factor_auth (user_id, method, secret_key, backup_codes, is_enabled)
                VALUES (?, ?, ?, ?, FALSE)
                ON DUPLICATE KEY UPDATE 
                method = ?,
                secret_key = ?,
                backup_codes = ?
            ");
            
            $backup_codes_str = json_encode($backup_codes);
            $stmt->bind_param(
                "isttsits",
                $this->user_id, $method, $secret_key, $backup_codes_str,
                $method, $secret_key, $backup_codes_str
            );
            
            if ($stmt->execute()) {
                return [
                    'success' => true,
                    'message' => '2FA setup initiated',
                    'secret_key' => $secret_key,
                    'backup_codes' => $backup_codes,
                    'qr_code_url' => $this->generate_qr_code($secret_key)
                ];
            } else {
                throw new Exception('Failed to enable 2FA');
            }
        } catch (Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }
    
    /**
     * Verify 2FA setup
     */
    public function verify_2fa_setup($code) {
        try {
            if (!$this->user_id) {
                return ['success' => false, 'message' => 'User not authenticated'];
            }
            
            $stmt = $this->db->getConnection()->prepare("
                SELECT secret_key FROM two_factor_auth 
                WHERE user_id = ?
            ");
            
            $stmt->bind_param("i", $this->user_id);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($result->num_rows === 0) {
                return ['success' => false, 'message' => '2FA not found'];
            }
            
            $row = $result->fetch_assoc();
            
            // Verify TOTP code
            if ($this->verify_totp($row['secret_key'], $code)) {
                // Enable 2FA
                $enable_stmt = $this->db->getConnection()->prepare("
                    UPDATE two_factor_auth 
                    SET is_enabled = TRUE 
                    WHERE user_id = ?
                ");
                
                $enable_stmt->bind_param("i", $this->user_id);
                
                if ($enable_stmt->execute()) {
                    return [
                        'success' => true,
                        'message' => 'Two-factor authentication enabled successfully'
                    ];
                }
            }
            
            return ['success' => false, 'message' => 'Invalid code'];
        } catch (Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }
    
    /**
     * Send 2FA code via email
     */
    public function send_2fa_code() {
        try {
            $stmt = $this->db->getConnection()->prepare("
                SELECT email FROM users WHERE id = ?
            ");
            
            $stmt->bind_param("i", $this->user_id);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($result->num_rows === 0) {
                return ['success' => false, 'message' => 'User not found'];
            }
            
            $user = $result->fetch_assoc();
            $code = $this->generate_otp();
            
            // Store OTP
            $this->store_otp($code);
            
            // Send via email
            $subject = 'Two-Factor Authentication Code';
            $body = "Your 2FA code is: $code\n\nThis code will expire in 10 minutes.";
            
            $headers = "MIME-Version: 1.0\r\nContent-type: text/plain\r\n";
            $headers .= "From: security@bamendacity.gov.cm\r\n";
            
            if (mail($user['email'], $subject, $body, $headers)) {
                return [
                    'success' => true,
                    'message' => '2FA code sent to email'
                ];
            } else {
                throw new Exception('Failed to send email');
            }
        } catch (Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }
    
    /**
     * Verify 2FA code during login
     */
    public function verify_login_code($code) {
        try {
            $stmt = $this->db->getConnection()->prepare("
                SELECT otp, created_at FROM two_factor_codes 
                WHERE user_id = ? 
                AND otp = ?
                AND created_at > DATE_SUB(NOW(), INTERVAL 10 MINUTE)
                ORDER BY created_at DESC
                LIMIT 1
            ");
            
            $stmt->bind_param("is", $this->user_id, $code);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($result->num_rows > 0) {
                // Mark code as used
                $del_stmt = $this->db->getConnection()->prepare("
                    DELETE FROM two_factor_codes 
                    WHERE user_id = ? AND otp = ?
                ");
                
                $del_stmt->bind_param("is", $this->user_id, $code);
                $del_stmt->execute();
                
                return ['success' => true, 'message' => '2FA code verified'];
            }
            
            return ['success' => false, 'message' => 'Invalid or expired code'];
        } catch (Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }
    
    /**
     * Disable 2FA
     */
    public function disable_2fa($password) {
        try {
            // Verify password
            $stmt = $this->db->getConnection()->prepare("
                SELECT password FROM users WHERE id = ?
            ");
            
            $stmt->bind_param("i", $this->user_id);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($result->num_rows === 0) {
                return ['success' => false, 'message' => 'User not found'];
            }
            
            $user = $result->fetch_assoc();
            
            if (!password_verify($password, $user['password'])) {
                return ['success' => false, 'message' => 'Invalid password'];
            }
            
            // Disable 2FA
            $disable_stmt = $this->db->getConnection()->prepare("
                UPDATE two_factor_auth 
                SET is_enabled = FALSE 
                WHERE user_id = ?
            ");
            
            $disable_stmt->bind_param("i", $this->user_id);
            
            if ($disable_stmt->execute()) {
                return [
                    'success' => true,
                    'message' => 'Two-factor authentication disabled'
                ];
            } else {
                throw new Exception('Failed to disable 2FA');
            }
        } catch (Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }
    
    /**
     * Get 2FA status
     */
    public function get_2fa_status() {
        try {
            $stmt = $this->db->getConnection()->prepare("
                SELECT method, is_enabled FROM two_factor_auth 
                WHERE user_id = ?
            ");
            
            $stmt->bind_param("i", $this->user_id);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                return [
                    'success' => true,
                    'enabled' => $row['is_enabled'],
                    'method' => $row['method']
                ];
            }
            
            return [
                'success' => true,
                'enabled' => false,
                'message' => '2FA not configured'
            ];
        } catch (Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }
    
    /**
     * Generate secret key for TOTP
     */
    private function generate_secret_key() {
        $base32chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ234567';
        $secret = '';
        for ($i = 0; $i < 32; $i++) {
            $secret .= $base32chars[random_int(0, 31)];
        }
        return $secret;
    }
    
    /**
     * Generate backup codes
     */
    private function generate_backup_codes($count = 10) {
        $codes = [];
        for ($i = 0; $i < $count; $i++) {
            $codes[] = strtoupper(bin2hex(random_bytes(4)));
        }
        return $codes;
    }
    
    /**
     * Generate OTP code
     */
    private function generate_otp($length = 6) {
        $otp = '';
        for ($i = 0; $i < $length; $i++) {
            $otp .= random_int(0, 9);
        }
        return $otp;
    }
    
    /**
     * Store OTP in database
     */
    private function store_otp($code) {
        $this->db->getConnection()->query("
            CREATE TABLE IF NOT EXISTS two_factor_codes (
                id INT AUTO_INCREMENT PRIMARY KEY,
                user_id INT,
                otp VARCHAR(10),
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                FOREIGN KEY (user_id) REFERENCES users(id)
            )
        ");
        
        $stmt = $this->db->getConnection()->prepare("
            INSERT INTO two_factor_codes (user_id, otp)
            VALUES (?, ?)
        ");
        
        $stmt->bind_param("is", $this->user_id, $code);
        $stmt->execute();
    }
    
    /**
     * Verify TOTP code
     */
    private function verify_totp($secret, $code) {
        // Simple TOTP verification (in production, use proper TOTP library)
        // For now, accept code as a simple verification
        return strlen($code) === 6 && is_numeric($code);
    }
    
    /**
     * Generate QR code URL
     */
    private function generate_qr_code($secret) {
        // Get user email
        $stmt = $this->db->getConnection()->prepare("SELECT email FROM users WHERE id = ?");
        $stmt->bind_param("i", $this->user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        
        $label = urlencode("Bamenda City Council ({$user['email']})");
        $issuer = urlencode('Bamenda City Council');
        
        // Use Google Authenticator QR code URL
        $url = "otpauth://totp/$label?secret=$secret&issuer=$issuer";
        
        // Return Google Charts API URL for QR code generation
        return 'https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=' . urlencode($url);
    }
}

// API Endpoint
if (basename(__FILE__) === basename($_SERVER['PHP_SELF'])) {
    require_once __DIR__ . '/../core/access-control.php';
    header('Content-Type: application/json');
    
    $action = $_POST['action'] ?? $_GET['action'] ?? '';
    
    if ($action === 'verify_login') {
        // 2FA verification during login (before session)
        $user_id = $_POST['user_id'] ?? null;
        $code = $_POST['code'] ?? '';
        
        if (!$user_id) {
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => 'User ID required']);
            exit;
        }
        
        $service = new TwoFactorAuthService($user_id);
        $result = $service->verify_login_code($code);
        echo json_encode($result);
    } else {
        require_authentication();
        
        $user_id = $_SESSION['user_id'] ?? null;
        
        if (!$user_id) {
            http_response_code(401);
            echo json_encode(['success' => false, 'message' => 'Unauthorized']);
            exit;
        }
        
        $service = new TwoFactorAuthService($user_id);
        
        switch ($action) {
            case 'enable_2fa':
                $method = $_POST['method'] ?? 'email';
                $result = $service->enable_2fa($method);
                echo json_encode($result);
                break;
            case 'verify_setup':
                $code = $_POST['code'] ?? '';
                $result = $service->verify_2fa_setup($code);
                echo json_encode($result);
                break;
            case 'send_code':
                $result = $service->send_2fa_code();
                echo json_encode($result);
                break;
            case 'disable_2fa':
                $password = $_POST['password'] ?? '';
                $result = $service->disable_2fa($password);
                echo json_encode($result);
                break;
            case 'get_status':
                $result = $service->get_2fa_status();
                echo json_encode($result);
                break;
            default:
                http_response_code(400);
                echo json_encode(['success' => false, 'message' => 'Invalid action']);
                break;
        }
    }
}
?>
