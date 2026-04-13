<?php
/**
 * Bamenda City Council E-Governance Platform
 * File Upload Handler - Documents & Profile Pictures
 */

require_once __DIR__ . '/../config/database/database.php';
require_once __DIR__ . '/../core/access-control.php';
require_once __DIR__ . '/../core/csrf-protection.php';

header('Content-Type: application/json');

// Require authentication
require_authentication();

$action = $_POST['action'] ?? '';
$user_id = $_SESSION['user_id'] ?? null;

if (!$user_id) {
    http_response_code(401);
    echo json_encode(['success' => false, 'message' => 'Unauthorized']);
    exit;
}

// Validate CSRF token for file upload operations
if (in_array($action, ['upload_document', 'upload_avatar', 'delete_document'])) {
    $csrf_token = $_POST['_csrf_token'] ?? '';
    if (!CSRFProtection::validateToken($csrf_token)) {
        http_response_code(403);
        echo json_encode(['success' => false, 'message' => 'Invalid security token']);
        exit;
    }
}

// Configure upload directories
$upload_dirs = [
    'documents' => __DIR__ . '/../uploads/documents/',
    'avatars' => __DIR__ . '/../uploads/avatars/'
];

// Create directories if they don't exist
foreach ($upload_dirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

switch ($action) {
    case 'upload_document':
        upload_document($user_id, $upload_dirs['documents']);
        break;
    case 'upload_avatar':
        upload_avatar($user_id, $upload_dirs['avatars']);
        break;
    case 'delete_document':
        delete_document($user_id);
        break;
    default:
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Invalid action']);
        break;
}

/**
 * Upload document file
 */
function upload_document($user_id, $upload_dir) {
    try {
        // Validate file upload
        if (!isset($_FILES['file'])) {
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => 'No file provided']);
            return;
        }
        
        $file = $_FILES['file'];
        $document_name = $_POST['document_name'] ?? 'Untitled Document';
        $document_type = $_POST['document_type'] ?? 'other';
        
        // Allowed file types
        $allowed_types = ['pdf', 'jpg', 'jpeg', 'png', 'doc', 'docx', 'txt'];
        $file_ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        
        if (!in_array($file_ext, $allowed_types)) {
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => 'File type not allowed']);
            return;
        }
        
        // Max file size: 10MB
        $max_size = 10 * 1024 * 1024;
        if ($file['size'] > $max_size) {
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => 'File size exceeds 10MB limit']);
            return;
        }
        
        // Generate unique filename
        $filename = $user_id . '_' . time() . '_' . bin2hex(random_bytes(4)) . '.' . $file_ext;
        $file_path = $upload_dir . $filename;
        
        // Move uploaded file
        if (!move_uploaded_file($file['tmp_name'], $file_path)) {
            throw new Exception('Failed to move uploaded file');
        }
        
        // Store in database
        $db = Database::getInstance();
        $stmt = $db->getConnection()->prepare("
            INSERT INTO documents (user_id, document_name, document_type, file_path, file_size, status)
            VALUES (?, ?, ?, ?, ?, 'pending')
        ");
        
        $relative_path = '/uploads/documents/' . $filename;
        $stmt->bind_param("isssi", $user_id, $document_name, $document_type, $relative_path, $file['size']);
        
        if ($stmt->execute()) {
            $doc_id = $db->getConnection()->insert_id;
            echo json_encode([
                'success' => true,
                'message' => 'Document uploaded successfully',
                'document_id' => $doc_id,
                'file_path' => $relative_path
            ]);
        } else {
            throw new Exception('Failed to save document record');
        }
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
}

/**
 * Upload profile picture
 */
function upload_avatar($user_id, $upload_dir) {
    try {
        // Validate file upload
        if (!isset($_FILES['avatar'])) {
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => 'No file provided']);
            return;
        }
        
        $file = $_FILES['avatar'];
        
        // Only allow image files
        $allowed_types = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
        $file_ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        
        if (!in_array($file_ext, $allowed_types)) {
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => 'Only image files are allowed']);
            return;
        }
        
        // Max file size: 5MB
        $max_size = 5 * 1024 * 1024;
        if ($file['size'] > $max_size) {
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => 'Image file cannot exceed 5MB']);
            return;
        }
        
        // Validate image
        $image_info = getimagesize($file['tmp_name']);
        if (!$image_info) {
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => 'Invalid image file']);
            return;
        }
        
        // Delete old avatar if exists
        $db = Database::getInstance();
        $old_stmt = $db->getConnection()->prepare("SELECT avatar_path FROM user_profiles WHERE user_id = ?");
        $old_stmt->bind_param("i", $user_id);
        $old_stmt->execute();
        $old_result = $old_stmt->get_result();
        
        if ($old_result->num_rows > 0) {
            $old_avatar = $old_result->fetch_assoc()['avatar_path'];
            if ($old_avatar && file_exists(__DIR__ . '/..' . $old_avatar)) {
                unlink(__DIR__ . '/..' . $old_avatar);
            }
        }
        
        // Generate unique filename
        $filename = 'avatar_' . $user_id . '_' . time() . '.' . $file_ext;
        $file_path = $upload_dir . $filename;
        
        // Move uploaded file
        if (!move_uploaded_file($file['tmp_name'], $file_path)) {
            throw new Exception('Failed to move uploaded file');
        }
        
        // Resize image to optimize
        resize_image($file_path, 300, 300);
        
        // Store in database
        $relative_path = '/uploads/avatars/' . $filename;
        
        // Create user_profiles table if not exists
        $db->getConnection()->query("
            CREATE TABLE IF NOT EXISTS user_profiles (
                user_id INT PRIMARY KEY,
                avatar_path VARCHAR(255),
                bio TEXT,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                FOREIGN KEY (user_id) REFERENCES users(id)
            )
        ");
        
        // Insert or update user profile
        $profile_stmt = $db->getConnection()->prepare("
            INSERT INTO user_profiles (user_id, avatar_path)
            VALUES (?, ?)
            ON DUPLICATE KEY UPDATE avatar_path = ?, updated_at = NOW()
        ");
        
        $profile_stmt->bind_param("iss", $user_id, $relative_path, $relative_path);
        
        if ($profile_stmt->execute()) {
            echo json_encode([
                'success' => true,
                'message' => 'Profile picture updated successfully',
                'avatar_path' => $relative_path
            ]);
        } else {
            throw new Exception('Failed to save profile picture');
        }
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
}

/**
 * Delete document
 */
function delete_document($user_id) {
    try {
        $document_id = $_POST['document_id'] ?? null;
        
        if (!$document_id) {
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => 'Document ID required']);
            return;
        }
        
        $db = Database::getInstance();
        
        // Get document info
        $stmt = $db->getConnection()->prepare("
            SELECT file_path FROM documents 
            WHERE id = ? AND user_id = ?
        ");
        $stmt->bind_param("ii", $document_id, $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows === 0) {
            http_response_code(404);
            echo json_encode(['success' => false, 'message' => 'Document not found']);
            return;
        }
        
        $document = $result->fetch_assoc();
        
        // Delete file
        $file_path = __DIR__ . '/..' . $document['file_path'];
        if (file_exists($file_path)) {
            unlink($file_path);
        }
        
        // Delete from database
        $del_stmt = $db->getConnection()->prepare("
            DELETE FROM documents WHERE id = ? AND user_id = ?
        ");
        $del_stmt->bind_param("ii", $document_id, $user_id);
        
        if ($del_stmt->execute()) {
            echo json_encode([
                'success' => true,
                'message' => 'Document deleted successfully'
            ]);
        } else {
            throw new Exception('Failed to delete document');
        }
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
}

/**
 * Resize image
 */
function resize_image($file_path, $width, $height) {
    try {
        $image_info = getimagesize($file_path);
        $image_type = $image_info[2];
        
        // Load image based on type
        switch ($image_type) {
            case IMAGETYPE_JPEG:
                $image = imagecreatefromjpeg($file_path);
                break;
            case IMAGETYPE_PNG:
                $image = imagecreatefrompng($file_path);
                break;
            case IMAGETYPE_GIF:
                $image = imagecreatefromgif($file_path);
                break;
            case IMAGETYPE_WEBP:
                $image = imagecreatefromwebp($file_path);
                break;
            default:
                return;
        }
        
        $original_width = $image_info[0];
        $original_height = $image_info[1];
        
        // Calculate new dimensions (maintain aspect ratio)
        $ratio = $original_width / $original_height;
        if ($ratio > 1) {
            $new_width = $width;
            $new_height = $width / $ratio;
        } else {
            $new_height = $height;
            $new_width = $height * $ratio;
        }
        
        // Create new image
        $new_image = imagecreatetruecolor((int)$new_width, (int)$new_height);
        imagecopyresampled($new_image, $image, 0, 0, 0, 0, (int)$new_width, (int)$new_height, $original_width, $original_height);
        
        // Save resized image
        switch ($image_type) {
            case IMAGETYPE_JPEG:
                imagejpeg($new_image, $file_path, 85);
                break;
            case IMAGETYPE_PNG:
                imagepng($new_image, $file_path);
                break;
            case IMAGETYPE_GIF:
                imagegif($new_image, $file_path);
                break;
            case IMAGETYPE_WEBP:
                imagewebp($new_image, $file_path);
                break;
        }
        
        imagedestroy($image);
        imagedestroy($new_image);
    } catch (Exception $e) {
        error_log("Image resize error: " . $e->getMessage());
    }
}
?>
