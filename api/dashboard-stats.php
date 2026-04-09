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
    $database = new Database();
    $db = $database->getConnection();
    
    // 1. Active Citizens
    $stmt = $db->query("SELECT COUNT(*) as count FROM users WHERE status = 'active' AND role = 'citizen'");
    $citizensCount = $stmt->fetch_assoc()['count'] ?? 0;

    // 2. Service Requests
    $stmt = $db->query("SELECT COUNT(*) as count FROM service_applications");
    $serviceCount = $stmt->fetch_assoc()['count'] ?? 0;

    // 3. Revenue Collected
    $stmt = $db->query("SELECT SUM(amount) as total FROM payments WHERE status = 'completed'");
    $revenueTotal = $stmt->fetch_assoc()['total'] ?? 0;

    // 4. Service Efficiency (Example: % of completed over total submitted)
    // Avoid division by zero
    $stmtCompleted = $db->query("SELECT COUNT(*) as count FROM service_applications WHERE status = 'completed'");
    $completedCount = $stmtCompleted->fetch_assoc()['count'] ?? 0;
    
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
