<?php
/**
 * Bamenda City Council E-Governance Platform
 * Notification Service - Email & SMS
 */

class NotificationService {
    private $db;
    private $user_id;
    
    // Email configuration
    private $email_config = [
        'from' => 'notifications@bamendacity.gov.cm',
        'from_name' => 'Bamenda City Council',
        'smtp_host' => 'smtp.gmail.com',
        'smtp_port' => 587,
        'smtp_user' => '', // Set via environment
        'smtp_pass' => ''  // Set via environment
    ];
    
    // SMS configuration (Twilio or local provider)
    private $sms_config = [
        'provider' => 'twilio', // twilio, nexmo, or local
        'account_sid' => getenv('TWILIO_ACCOUNT_SID'),
        'auth_token' => getenv('TWILIO_AUTH_TOKEN'),
        'from_number' => '+1234567890'
    ];
    
    public function __construct($user_id = null) {
        require_once __DIR__ . '/../config/database/database.php';
        $this->db = Database::getInstance();
        $this->user_id = $user_id;
        
        // Load environment variables
        $this->email_config['smtp_user'] = getenv('SMTP_USER') ?: '';
        $this->email_config['smtp_pass'] = getenv('SMTP_PASS') ?: '';
    }
    
    /**
     * Send email notification
     */
    public function send_email($recipient_email, $subject, $template, $data = []) {
        try {
            $html_content = $this->render_template($template, $data);
            
            // Use PHP mail for simplicity (production: use PHPMailer or SwiftMailer)
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=UTF-8\r\n";
            $headers .= "From: {$this->email_config['from_name']} <{$this->email_config['from']}>\r\n";
            
            $result = mail($recipient_email, $subject, $html_content, $headers);
            
            if ($result) {
                $this->log_notification('email', $recipient_email, $subject, 'sent');
                return ['success' => true, 'message' => 'Email sent successfully'];
            } else {
                throw new Exception('Failed to send email');
            }
        } catch (Exception $e) {
            error_log("Email notification error: " . $e->getMessage());
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }
    
    /**
     * Send SMS notification
     */
    public function send_sms($phone_number, $message) {
        try {
            $provider = $this->sms_config['provider'];
            
            switch ($provider) {
                case 'twilio':
                    return $this->send_twilio_sms($phone_number, $message);
                case 'nexmo':
                    return $this->send_nexmo_sms($phone_number, $message);
                default:
                    return $this->send_local_sms($phone_number, $message);
            }
        } catch (Exception $e) {
            error_log("SMS notification error: " . $e->getMessage());
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }
    
    /**
     * Send notification to user
     */
    public function notify($type, $title, $message, $data = []) {
        try {
            // Store in database
            $stmt = $this->db->getConnection()->prepare("
                INSERT INTO notifications (user_id, type, title, message, is_read)
                VALUES (?, ?, ?, ?, FALSE)
            ");
            
            $stmt->bind_param("isss", $this->user_id, $type, $title, $message);
            $stmt->execute();
            
            // Get user preferences
            $user = $this->get_user_preferences();
            
            if (!$user) {
                return ['success' => false, 'message' => 'User not found'];
            }
            
            // Send based on user preferences
            $results = [];
            
            // Email notification
            if ($user['email_notifications']) {
                $email_result = $this->send_email(
                    $user['email'],
                    $title,
                    'notification',
                    ['title' => $title, 'message' => $message, 'data' => $data]
                );
                $results['email'] = $email_result;
            }
            
            // SMS notification
            if ($user['sms_notifications'] && !empty($user['phone'])) {
                $sms_result = $this->send_sms($user['phone'], $message);
                $results['sms'] = $sms_result;
            }
            
            return [
                'success' => true,
                'message' => 'Notification sent',
                'results' => $results
            ];
        } catch (Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }
    
    /**
     * Send application status notification
     */
    public function notify_application_status($application_id, $new_status) {
        try {
            $messages = [
                'submitted' => [
                    'title' => 'Application Submitted',
                    'message' => 'Your application has been submitted successfully and is now under review.'
                ],
                'under_review' => [
                    'title' => 'Application Under Review',
                    'message' => 'Your application is currently being reviewed by our team.'
                ],
                'approved' => [
                    'title' => 'Application Approved',
                    'message' => 'Congratulations! Your application has been approved. You can now proceed with the next steps.'
                ],
                'rejected' => [
                    'title' => 'Application Rejected',
                    'message' => 'Unfortunately, your application was not approved. Please check details and reapply if applicable.'
                ],
                'completed' => [
                    'title' => 'Application Completed',
                    'message' => 'Your application process is complete. You can download your certificate or documents.'
                ]
            ];
            
            if (!isset($messages[$new_status])) {
                return ['success' => false, 'message' => 'Unknown status'];
            }
            
            $msg = $messages[$new_status];
            return $this->notify('application', $msg['title'], $msg['message'], [
                'application_id' => $application_id,
                'status' => $new_status
            ]);
        } catch (Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }
    
    /**
     * Send payment notification
     */
    public function notify_payment($payment_id, $amount, $status) {
        try {
            $messages = [
                'pending' => 'Payment of GHS ' . $amount . ' is pending. Please complete the payment to proceed.',
                'paid' => 'Payment of GHS ' . $amount . ' has been received successfully. Thank you!',
                'failed' => 'Payment of GHS ' . $amount . ' failed. Please try again.',
                'refunded' => 'Refund of GHS ' . $amount . ' has been processed.'
            ];
            
            $title = ucfirst($status) . ' Payment Notice';
            $message = $messages[$status] ?? 'Payment update';
            
            return $this->notify('payment', $title, $message, [
                'payment_id' => $payment_id,
                'amount' => $amount,
                'status' => $status
            ]);
        } catch (Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }
    
    /**
     * Send document verification notification
     */
    public function notify_document_status($document_id, $document_name, $status) {
        try {
            $messages = [
                'verified' => 'Your document "' . $document_name . '" has been verified.',
                'rejected' => 'Your document "' . $document_name . '" was rejected. Please reupload a corrected version.',
                'pending' => 'Your document "' . $document_name . '" is pending review.'
            ];
            
            $title = 'Document ' . ucfirst($status);
            $message = $messages[$status] ?? 'Document update';
            
            return $this->notify('document', $title, $message, [
                'document_id' => $document_id,
                'status' => $status
            ]);
        } catch (Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }
    
    /**
     * Get user notification preferences
     */
    private function get_user_preferences() {
        try {
            $stmt = $this->db->getConnection()->prepare("
                SELECT u.id, u.email, u.phone, 
                       COALESCE(up.email_notifications, TRUE) as email_notifications,
                       COALESCE(up.sms_notifications, TRUE) as sms_notifications
                FROM users u
                LEFT JOIN user_notification_preferences up ON u.id = up.user_id
                WHERE u.id = ?
            ");
            
            $stmt->bind_param("i", $this->user_id);
            $stmt->execute();
            $result = $stmt->get_result();
            
            return $result->num_rows > 0 ? $result->fetch_assoc() : null;
        } catch (Exception $e) {
            error_log("Error getting user preferences: " . $e->getMessage());
            return null;
        }
    }
    
    /**
     * Send Twilio SMS
     */
    private function send_twilio_sms($phone, $message) {
        try {
            $account_sid = $this->sms_config['account_sid'];
            $auth_token = $this->sms_config['auth_token'];
            $from_number = $this->sms_config['from_number'];
            
            // Simulate Twilio API call (in production, use actual Twilio SDK)
            // For now, just log it
            error_log("SMS via Twilio to $phone: $message");
            
            $this->log_notification('sms', $phone, $message, 'sent');
            return ['success' => true, 'message' => 'SMS sent successfully'];
        } catch (Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }
    
    /**
     * Send Nexmo SMS
     */
    private function send_nexmo_sms($phone, $message) {
        try {
            // Simulate Nexmo API call
            error_log("SMS via Nexmo to $phone: $message");
            
            $this->log_notification('sms', $phone, $message, 'sent');
            return ['success' => true, 'message' => 'SMS sent successfully'];
        } catch (Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }
    
    /**
     * Send local SMS (mock)
     */
    private function send_local_sms($phone, $message) {
        try {
            error_log("SMS to $phone: $message");
            $this->log_notification('sms', $phone, $message, 'sent');
            return ['success' => true, 'message' => 'SMS sent successfully'];
        } catch (Exception $e) {
            return ['success' => false, 'message' => $e->getMessage()];
        }
    }
    
    /**
     * Render email template
     */
    private function render_template($template, $data = []) {
        ob_start();
        
        $template_file = __DIR__ . '/../includes/email-templates/' . $template . '.php';
        
        if (file_exists($template_file)) {
            extract($data);
            include $template_file;
        } else {
            // Default template
            echo "<h2>{$data['title']}</h2>";
            echo "<p>{$data['message']}</p>";
        }
        
        return ob_get_clean();
    }
    
    /**
     * Log notification
     */
    private function log_notification($type, $recipient, $content, $status) {
        try {
            $stmt = $this->db->getConnection()->prepare("
                CREATE TABLE IF NOT EXISTS notification_logs (
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    user_id INT,
                    type VARCHAR(50),
                    recipient VARCHAR(255),
                    content TEXT,
                    status VARCHAR(50),
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                )
            ");
            $stmt->execute();
            
            $log_stmt = $this->db->getConnection()->prepare("
                INSERT INTO notification_logs (user_id, type, recipient, content, status)
                VALUES (?, ?, ?, ?, ?)
            ");
            
            $log_stmt->bind_param("issss", $this->user_id, $type, $recipient, $content, $status);
            $log_stmt->execute();
        } catch (Exception $e) {
            error_log("Error logging notification: " . $e->getMessage());
        }
    }
}

// API Endpoint
if (basename(__FILE__) === basename($_SERVER['PHP_SELF'])) {
    require_once __DIR__ . '/../core/access-control.php';
    require_authentication();
    
    header('Content-Type: application/json');
    
    $action = $_POST['action'] ?? '';
    $user_id = $_SESSION['user_id'] ?? null;
    
    if (!$user_id) {
        http_response_code(401);
        echo json_encode(['success' => false, 'message' => 'Unauthorized']);
        exit;
    }
    
    $service = new NotificationService($user_id);
    
    switch ($action) {
        case 'send_test':
            $result = $service->notify(
                'test',
                'Test Notification',
                'This is a test notification message.'
            );
            echo json_encode($result);
            break;
        case 'update_preferences':
            update_notification_preferences($user_id);
            break;
        case 'get_notifications':
            get_notifications($user_id);
            break;
        default:
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => 'Invalid action']);
            break;
    }
    
    function update_notification_preferences($user_id) {
        require_once __DIR__ . '/../config/database/database.php';
        $db = Database::getInstance();
        
        $email_notifications = $_POST['email_notifications'] === '1' ? 1 : 0;
        $sms_notifications = $_POST['sms_notifications'] === '1' ? 1 : 0;
        $in_app_notifications = $_POST['in_app_notifications'] === '1' ? 1 : 0;
        
        $db->getConnection()->query("
            CREATE TABLE IF NOT EXISTS user_notification_preferences (
                user_id INT PRIMARY KEY,
                email_notifications BOOLEAN DEFAULT TRUE,
                sms_notifications BOOLEAN DEFAULT TRUE,
                in_app_notifications BOOLEAN DEFAULT TRUE,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )
        ");
        
        $stmt = $db->getConnection()->prepare("
            INSERT INTO user_notification_preferences (user_id, email_notifications, sms_notifications, in_app_notifications)
            VALUES (?, ?, ?, ?)
            ON DUPLICATE KEY UPDATE 
            email_notifications = ?, 
            sms_notifications = ?,
            in_app_notifications = ?
        ");
        
        $stmt->bind_param("iiiiiii", $user_id, $email_notifications, $sms_notifications, $in_app_notifications,
                         $email_notifications, $sms_notifications, $in_app_notifications);
        
        if ($stmt->execute()) {
            echo json_encode([
                'success' => true,
                'message' => 'Notification preferences updated'
            ]);
        } else {
            http_response_code(500);
            echo json_encode(['success' => false, 'message' => 'Failed to update preferences']);
        }
    }
    
    function get_notifications($user_id) {
        require_once __DIR__ . '/../config/database/database.php';
        $db = Database::getInstance();
        
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
            'unread_count' => $unread_count
        ]);
    }
}
?>
