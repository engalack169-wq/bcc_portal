<?php
/**
 * Bamenda City Council E-Governance Platform
 * Export Applications Ledger to CSV
 */

session_start();

// Quick role check - only admin or staff should call this
if (!isset($_SESSION['user_id']) || !in_array($_SESSION['user_role'], ['admin', 'staff'])) {
    http_response_code(403);
    echo "Unauthorized entry";
    exit;
}

require_once '../config/app/config.php';
require_once '../config/database/database.php';

try {
    $database = new Database();
    $db = $database->getConnection();

    // Get filters
    $statusFilter = $_GET['status'] ?? '';
    $startDate = $_GET['start_date'] ?? '';
    $endDate = $_GET['end_date'] ?? '';

    // Build Query dynamically
    $query = "SELECT sa.id, u.first_name, u.last_name, sa.service_type, sa.status, sa.priority, sa.created_at 
              FROM service_applications sa 
              JOIN users u ON sa.user_id = u.id 
              WHERE 1=1";
    
    $params = [];
    $types = '';

    if (!empty($statusFilter)) {
        $query .= " AND sa.status = ?";
        $params[] = $statusFilter;
        $types .= 's';
    }

    if (!empty($startDate)) {
        $query .= " AND DATE(sa.created_at) >= ?";
        $params[] = $startDate;
        $types .= 's';
    }

    if (!empty($endDate)) {
        $query .= " AND DATE(sa.created_at) <= ?";
        $params[] = $endDate;
        $types .= 's';
    }

    $query .= " ORDER BY sa.created_at DESC";

    $stmt = $db->prepare($query);
    if (!empty($params)) {
        $stmt->bind_param($types, ...$params);
    }
    
    $stmt->execute();
    $result = $stmt->get_result();

    // Generate CSV output stream
    $filename = "applications_ledger_" . date('Y-m-d') . ".csv";

    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename="' . $filename . '"');

    $output = fopen('php://output', 'w');
    
    // Add CSV Headers
    fputcsv($output, ['Application ID', 'Applicant Name', 'Service Type', 'Status', 'Priority', 'Date Submitted']);

    // Add Rows
    while ($row = $result->fetch_assoc()) {
        fputcsv($output, [
            "APP-" . str_pad($row['id'], 5, '0', STR_PAD_LEFT),
            $row['first_name'] . ' ' . $row['last_name'],
            $row['service_type'],
            ucfirst($row['status']),
            ucfirst($row['priority']),
            date('Y-m-d H:i', strtotime($row['created_at']))
        ]);
    }

    fclose($output);
    exit;

} catch (Exception $e) {
    http_response_code(500);
    echo "System error generating export.";
}
?>
