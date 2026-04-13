<?php
/**
 * Bamenda City Council E-Governance Platform
 * Live JSON Dashboard Statistics Endpoint
 */

session_start();
header('Content-Type: application/json');

// Include access control and database
require_once '../config/app/config.php';
require_once '../config/database/database.php';

// Quick role check - only admin or staff should call this
if (!isset($_SESSION['user_id']) || !in_array($_SESSION['user_role'], ['admin', 'staff'])) {
    echo json_encode(['success' => false, 'message' => 'Unauthorized entry']);
    exit;
}

try {
    // Use singleton pattern for database
    $db = Database::getInstance()->getConnection();
    
    // 1. Active Citizens (using prepared statement)
    $status = 'active';
    $role = 'citizen';
    $stmt = $db->prepare("SELECT COUNT(*) as count FROM users WHERE status = ? AND role = ?");
    if (!$stmt) {
        throw new Exception("Prepare failed: " . $db->error);
    }
    $stmt->bind_param("ss", $status, $role);
    $stmt->execute();
    $citizensCount = $stmt->get_result()->fetch_assoc()['count'] ?? 0;

    // 2. Service Requests (using prepared statement)
    $stmt = $db->prepare("SELECT COUNT(*) as count FROM service_applications");
    if (!$stmt) {
        throw new Exception("Prepare failed: " . $db->error);
    }
    $stmt->execute();
    $serviceCount = $stmt->get_result()->fetch_assoc()['count'] ?? 0;

    // 3. Revenue Collected (using prepared statement)
    $completed_status = 'completed';
    $stmt = $db->prepare("SELECT COALESCE(SUM(amount), 0) as total FROM payments WHERE status = ?");
    if (!$stmt) {
        throw new Exception("Prepare failed: " . $db->error);
    }
    $stmt->bind_param("s", $completed_status);
    $stmt->execute();
    $revenueTotal = $stmt->get_result()->fetch_assoc()['total'] ?? 0;

    // 4. Service Efficiency (using prepared statement)
    $completedStatus = 'completed';
    $stmt = $db->prepare("SELECT COUNT(*) as count FROM service_applications WHERE status = ?");
    if (!$stmt) {
        throw new Exception("Prepare failed: " . $db->error);
    }
    $stmt->bind_param("s", $completedStatus);
    $stmt->execute();
    $completedCount = $stmt->get_result()->fetch_assoc()['count'] ?? 0;
    
    $efficiency = 0;
    if ($serviceCount > 0) {
        $efficiency = round(($completedCount / $serviceCount) * 100, 1);
    } else {
        $efficiency = 100.0; // Perfect if zero requests
    }

    echo json_encode([
        'success' => true,
        'data' => [
            'active_citizens' => number_format($citizensCount),
            'service_requests' => number_format($serviceCount),
            'revenue_collected' => '₣' . number_format($revenueTotal),
            'service_efficiency' => $efficiency . '%'
        ]
    ]);

} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => 'System error fetching dashboard metrics.']);
}
?>
