<?php
/**
 * Bamenda City Council E-Governance Platform
 * Applications Search & Filtering API
 */

require_once __DIR__ . '/../config/database/database.php';
require_once __DIR__ . '/../core/access-control.php';

header('Content-Type: application/json');

require_authentication();

$user_id = $_SESSION['user_id'] ?? null;

if (!$user_id) {
    http_response_code(401);
    echo json_encode(['success' => false, 'message' => 'Unauthorized']);
    exit;
}

$action = $_GET['action'] ?? 'search';
$db = Database::getInstance();

switch ($action) {
    case 'search':
        search_applications($db, $user_id);
        break;
    case 'filter':
        filter_applications($db, $user_id);
        break;
    case 'get_details':
        get_application_details($db, $user_id);
        break;
    case 'get_stats':
        get_application_stats($db, $user_id);
        break;
    case 'export':
        export_applications($db, $user_id);
        break;
    default:
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Invalid action']);
        break;
}

/**
 * Search applications by keyword
 */
function search_applications($db, $user_id) {
    try {
        $query = trim($_GET['q'] ?? '');
        $limit = (int)($_GET['limit'] ?? 20);
        $offset = (int)($_GET['offset'] ?? 0);
        
        if (empty($query)) {
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => 'Search query required']);
            return;
        }
        
        $search_term = '%' . $query . '%';
        
        // Search in applications
        $stmt = $db->getConnection()->prepare("
            SELECT a.*, 
                   COUNT(*) OVER() as total_count
            FROM applications a
            WHERE a.user_id = ?
            AND (
                a.title LIKE ?
                OR a.description LIKE ?
                OR a.reference_id LIKE ?
                OR a.application_type LIKE ?
            )
            ORDER BY a.submitted_at DESC
            LIMIT ? OFFSET ?
        ");
        
        $stmt->bind_param(
            "issssii",
            $user_id, $search_term, $search_term, $search_term, $search_term,
            $limit, $offset
        );
        
        $stmt->execute();
        $result = $stmt->get_result();
        
        $applications = [];
        $total = 0;
        
        while ($row = $result->fetch_assoc()) {
            $total = $row['total_count'];
            unset($row['total_count']);
            $applications[] = $row;
        }
        
        echo json_encode([
            'success' => true,
            'applications' => $applications,
            'total' => $total,
            'count' => count($applications),
            'limit' => $limit,
            'offset' => $offset
        ]);
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
}

/**
 * Filter applications by multiple criteria
 */
function filter_applications($db, $user_id) {
    try {
        $status = $_GET['status'] ?? '';
        $type = $_GET['type'] ?? '';
        $date_from = $_GET['date_from'] ?? '';
        $date_to = $_GET['date_to'] ?? '';
        $sort_by = $_GET['sort_by'] ?? 'submitted_at';
        $sort_order = strtoupper($_GET['sort_order'] ?? 'DESC');
        $limit = (int)($_GET['limit'] ?? 20);
        $offset = (int)($_GET['offset'] ?? 0);
        
        // Validate sort order
        if (!in_array($sort_order, ['ASC', 'DESC'])) {
            $sort_order = 'DESC';
        }
        
        // Validate sort field
        $allowed_sorts = ['submitted_at', 'status', 'title', 'completed_at'];
        if (!in_array($sort_by, $allowed_sorts)) {
            $sort_by = 'submitted_at';
        }
        
        $query = "
            SELECT a.*,
                   COUNT(*) OVER() as total_count
            FROM applications a
            WHERE a.user_id = ?
        ";
        
        $params = [$user_id];
        $types = 'i';
        
        // Add status filter
        if (!empty($status)) {
            $query .= " AND a.status = ?";
            $params[] = $status;
            $types .= 's';
        }
        
        // Add type filter
        if (!empty($type)) {
            $query .= " AND a.application_type = ?";
            $params[] = $type;
            $types .= 's';
        }
        
        // Add date range filter
        if (!empty($date_from)) {
            $query .= " AND DATE(a.submitted_at) >= ?";
            $params[] = $date_from;
            $types .= 's';
        }
        
        if (!empty($date_to)) {
            $query .= " AND DATE(a.submitted_at) <= ?";
            $params[] = $date_to;
            $types .= 's';
        }
        
        $query .= " ORDER BY a.$sort_by $sort_order LIMIT ? OFFSET ?";
        $params[] = $limit;
        $params[] = $offset;
        $types .= 'ii';
        
        $stmt = $db->getConnection()->prepare($query);
        $stmt->bind_param($types, ...$params);
        $stmt->execute();
        $result = $stmt->get_result();
        
        $applications = [];
        $total = 0;
        
        while ($row = $result->fetch_assoc()) {
            $total = $row['total_count'];
            unset($row['total_count']);
            $applications[] = $row;
        }
        
        echo json_encode([
            'success' => true,
            'applications' => $applications,
            'total' => $total,
            'count' => count($applications),
            'filters' => [
                'status' => $status,
                'type' => $type,
                'date_from' => $date_from,
                'date_to' => $date_to,
                'sort_by' => $sort_by,
                'sort_order' => $sort_order
            ]
        ]);
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
}

/**
 * Get single application details
 */
function get_application_details($db, $user_id) {
    try {
        $app_id = (int)($_GET['app_id'] ?? 0);
        
        if ($app_id === 0) {
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => 'Application ID required']);
            return;
        }
        
        $stmt = $db->getConnection()->prepare("
            SELECT a.*
            FROM applications a
            WHERE a.id = ? AND a.user_id = ?
        ");
        
        $stmt->bind_param("ii", $app_id, $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows === 0) {
            http_response_code(404);
            echo json_encode(['success' => false, 'message' => 'Application not found']);
            return;
        }
        
        $application = $result->fetch_assoc();
        
        // Get related documents
        $doc_stmt = $db->getConnection()->prepare("
            SELECT id, document_name, document_type, status, uploaded_at
            FROM documents
            WHERE user_id = ? AND document_type = ?
            LIMIT 20
        ");
        
        $doc_stmt->bind_param("is", $user_id, $application['application_type']);
        $doc_stmt->execute();
        $doc_result = $doc_stmt->get_result();
        
        $documents = [];
        while ($doc = $doc_result->fetch_assoc()) {
            $documents[] = $doc;
        }
        
        $application['documents'] = $documents;
        
        echo json_encode([
            'success' => true,
            'application' => $application
        ]);
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
}

/**
 * Get application statistics
 */
function get_application_stats($db, $user_id) {
    try {
        // Overall status stats
        $status_query = "
            SELECT 
                status,
                COUNT(*) as count
            FROM applications
            WHERE user_id = ?
            GROUP BY status
        ";
        
        $stmt = $db->getConnection()->prepare($status_query);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $status_result = $stmt->get_result();
        
        $stats_by_status = [];
        $total_applications = 0;
        
        while ($row = $status_result->fetch_assoc()) {
            $stats_by_status[$row['status']] = (int)$row['count'];
            $total_applications += (int)$row['count'];
        }
        
        // Type statistics
        $type_query = "
            SELECT 
                application_type,
                COUNT(*) as count,
                SUM(CASE WHEN status = 'completed' THEN 1 ELSE 0 END) as completed
            FROM applications
            WHERE user_id = ?
            GROUP BY application_type
        ";
        
        $type_stmt = $db->getConnection()->prepare($type_query);
        $type_stmt->bind_param("i", $user_id);
        $type_stmt->execute();
        $type_result = $type_stmt->get_result();
        
        $stats_by_type = [];
        
        while ($row = $type_result->fetch_assoc()) {
            $stats_by_type[] = [
                'type' => $row['application_type'],
                'total' => (int)$row['count'],
                'completed' => (int)$row['completed'],
                'completion_rate' => $row['count'] > 0 ? round(($row['completed'] / $row['count']) * 100) : 0
            ];
        }
        
        // Timeline stats (applications by month)
        $timeline_query = "
            SELECT 
                DATE_FORMAT(submitted_at, '%Y-%m') as month,
                COUNT(*) as count
            FROM applications
            WHERE user_id = ?
            GROUP BY DATE_FORMAT(submitted_at, '%Y-%m')
            ORDER BY month DESC
            LIMIT 12
        ";
        
        $timeline_stmt = $db->getConnection()->prepare($timeline_query);
        $timeline_stmt->bind_param("i", $user_id);
        $timeline_stmt->execute();
        $timeline_result = $timeline_stmt->get_result();
        
        $timeline_stats = [];
        
        while ($row = $timeline_result->fetch_assoc()) {
            $timeline_stats[] = $row;
        }
        
        echo json_encode([
            'success' => true,
            'statistics' => [
                'total_applications' => $total_applications,
                'by_status' => $stats_by_status,
                'by_type' => $stats_by_type,
                'timeline' => $timeline_stats,
                'approval_rate' => $total_applications > 0 
                    ? round((($stats_by_status['approved'] ?? 0) / $total_applications) * 100)
                    : 0
            ]
        ]);
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
}

/**
 * Export applications to CSV
 */
function export_applications($db, $user_id) {
    try {
        $format = $_GET['format'] ?? 'csv'; // csv or json
        
        $stmt = $db->getConnection()->prepare("
            SELECT *
            FROM applications
            WHERE user_id = ?
            ORDER BY submitted_at DESC
        ");
        
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        $applications = [];
        while ($row = $result->fetch_assoc()) {
            $applications[] = $row;
        }
        
        if ($format === 'csv') {
            header('Content-Type: text/csv; charset=utf-8');
            header('Content-Disposition: attachment; filename="applications_' . date('Y-m-d') . '.csv"');
            
            $output = fopen('php://output', 'w');
            
            // Header row
            if (!empty($applications)) {
                fputcsv($output, array_keys($applications[0]));
            }
            
            // Data rows
            foreach ($applications as $app) {
                fputcsv($output, $app);
            }
            
            fclose($output);
        } else {
            header('Content-Type: application/json');
            header('Content-Disposition: attachment; filename="applications_' . date('Y-m-d') . '.json"');
            
            echo json_encode([
                'success' => true,
                'exported_at' => date('Y-m-d H:i:s'),
                'count' => count($applications),
                'applications' => $applications
            ], JSON_PRETTY_PRINT);
        }
        exit;
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
}
?>
