<?php
/**
 * Bamenda City Council E-Governance Platform
 * Export Handler - Invoices & Certificates (PDF)
 */

require_once __DIR__ . '/../config/database/database.php';
require_once __DIR__ . '/../core/access-control.php';

require_authentication();

$user_id = $_SESSION['user_id'] ?? null;

if (!$user_id) {
    http_response_code(401);
    echo json_encode(['success' => false, 'message' => 'Unauthorized']);
    exit;
}

$action = $_GET['action'] ?? '';
$db = Database::getInstance();

switch ($action) {
    case 'export_invoice':
        export_invoice($db, $user_id);
        break;
    case 'export_certificate':
        export_certificate($db, $user_id);
        break;
    case 'export_application':
        export_application_summary($db, $user_id);
        break;
    case 'export_all_documents':
        export_all_documents($db, $user_id);
        break;
    default:
        http_response_code(400);
        header('Content-Type: application/json');
        echo json_encode(['success' => false, 'message' => 'Invalid action']);
        break;
}

/**
 * Export invoice as PDF
 */
function export_invoice($db, $user_id) {
    try {
        $payment_id = (int)($_GET['payment_id'] ?? 0);
        
        if ($payment_id === 0) {
            http_response_code(400);
            header('Content-Type: application/json');
            echo json_encode(['success' => false, 'message' => 'Payment ID required']);
            return;
        }
        
        $stmt = $db->getConnection()->prepare("
            SELECT p.*, u.first_name, u.last_name, u.email, u.phone, u.address
            FROM payments p
            JOIN users u ON p.user_id = u.id
            WHERE p.id = ? AND p.user_id = ?
        ");
        
        $stmt->bind_param("ii", $payment_id, $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows === 0) {
            http_response_code(404);
            header('Content-Type: application/json');
            echo json_encode(['success' => false, 'message' => 'Payment not found']);
            return;
        }
        
        $payment = $result->fetch_assoc();
        
        $html = generate_invoice_html($payment);
        
        // Export as HTML (can be printed as PDF)
        header('Content-Type: text/html; charset=utf-8');
        header('Content-Disposition: attachment; filename="invoice_' . $payment_id . '.html"');
        
        echo $html;
    } catch (Exception $e) {
        http_response_code(500);
        header('Content-Type: application/json');
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
}

/**
 * Export certificate
 */
function export_certificate($db, $user_id) {
    try {
        $app_id = (int)($_GET['app_id'] ?? 0);
        
        if ($app_id === 0) {
            http_response_code(400);
            header('Content-Type: application/json');
            echo json_encode(['success' => false, 'message' => 'Application ID required']);
            return;
        }
        
        $stmt = $db->getConnection()->prepare("
            SELECT a.*, u.first_name, u.last_name
            FROM applications a
            JOIN users u ON a.user_id = u.id
            WHERE a.id = ? AND a.user_id = ? AND a.status = 'completed'
        ");
        
        $stmt->bind_param("ii", $app_id, $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows === 0) {
            http_response_code(404);
            header('Content-Type: application/json');
            echo json_encode(['success' => false, 'message' => 'Application not found or not completed']);
            return;
        }
        
        $application = $result->fetch_assoc();
        
        $html = generate_certificate_html($application);
        
        header('Content-Type: text/html; charset=utf-8');
        header('Content-Disposition: attachment; filename="certificate_' . $app_id . '.html"');
        
        echo $html;
    } catch (Exception $e) {
        http_response_code(500);
        header('Content-Type: application/json');
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
}

/**
 * Export application summary
 */
function export_application_summary($db, $user_id) {
    try {
        $app_id = (int)($_GET['app_id'] ?? 0);
        
        if ($app_id === 0) {
            http_response_code(400);
            header('Content-Type: application/json');
            echo json_encode(['success' => false, 'message' => 'Application ID required']);
            return;
        }
        
        $stmt = $db->getConnection()->prepare("
            SELECT a.*, u.first_name, u.last_name, u.email, u.phone
            FROM applications a
            JOIN users u ON a.user_id = u.id
            WHERE a.id = ? AND a.user_id = ?
        ");
        
        $stmt->bind_param("ii", $app_id, $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows === 0) {
            http_response_code(404);
            header('Content-Type: application/json');
            echo json_encode(['success' => false, 'message' => 'Application not found']);
            return;
        }
        
        $application = $result->fetch_assoc();
        
        // Get related documents
        $doc_stmt = $db->getConnection()->prepare("
            SELECT document_name, document_type, status, uploaded_at
            FROM documents
            WHERE user_id = ? AND document_type = ?
        ");
        
        $doc_stmt->bind_param("is", $user_id, $application['application_type']);
        $doc_stmt->execute();
        $doc_result = $doc_stmt->get_result();
        
        $documents = [];
        while ($doc = $doc_result->fetch_assoc()) {
            $documents[] = $doc;
        }
        
        $html = generate_application_summary_html($application, $documents);
        
        header('Content-Type: text/html; charset=utf-8');
        header('Content-Disposition: attachment; filename="application_summary_' . $app_id . '.html"');
        
        echo $html;
    } catch (Exception $e) {
        http_response_code(500);
        header('Content-Type: application/json');
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
}

/**
 * Export all documents as ZIP
 */
function export_all_documents($db, $user_id) {
    try {
        $stmt = $db->getConnection()->prepare("
            SELECT id, file_path, document_name
            FROM documents
            WHERE user_id = ?
        ");
        
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        $documents = [];
        while ($row = $result->fetch_assoc()) {
            $documents[] = $row;
        }
        
        if (empty($documents)) {
            http_response_code(404);
            header('Content-Type: application/json');
            echo json_encode(['success' => false, 'message' => 'No documents found']);
            return;
        }
        
        // Create ZIP file
        $zip_file = '/tmp/documents_' . $user_id . '_' . time() . '.zip';
        $zip = new ZipArchive();
        
        if ($zip->open($zip_file, ZipArchive::CREATE) !== true) {
            throw new Exception('Failed to create ZIP file');
        }
        
        foreach ($documents as $doc) {
            $file_path = __DIR__ . '/..' . $doc['file_path'];
            if (file_exists($file_path)) {
                $zip->addFile($file_path, $doc['document_name']);
            }
        }
        
        $zip->close();
        
        header('Content-Type: application/zip');
        header('Content-Disposition: attachment; filename="documents_export_' . date('Y-m-d') . '.zip"');
        header('Content-Length: ' . filesize($zip_file));
        
        readfile($zip_file);
        unlink($zip_file);
        exit;
    } catch (Exception $e) {
        http_response_code(500);
        header('Content-Type: application/json');
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
}

/**
 * Generate invoice HTML
 */
function generate_invoice_html($payment) {
    $invoice_date = date('Y-m-d', strtotime($payment['created_at']));
    $due_date = $payment['due_date'] ?? date('Y-m-d', strtotime('+30 days', strtotime($payment['created_at'])));
    $reference = 'INV-' . $payment['id'] . '-' . date('Y', strtotime($payment['created_at']));
    
    return <<<HTML
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Invoice</title>
        <style>
            * { margin: 0; padding: 0; box-sizing: border-box; }
            body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #333; line-height: 1.6; }
            .container { max-width: 800px; margin: 0 auto; padding: 40px; }
            .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 40px; border-bottom: 2px solid #1976d2; padding-bottom: 20px; }
            .logo { font-size: 28px; font-weight: 700; color: #1976d2; }
            .invoice-title { font-size: 24px; color: #1976d2; }
            .details { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-bottom: 40px; }
            .detail-section h3 { color: #1976d2; font-size: 12px; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px; }
            .detail-section p { font-size: 14px; margin-bottom: 5px; }
            .invoice-table { width: 100%; border-collapse: collapse; margin-bottom: 40px; }
            .invoice-table thead { background: #f5f5f5; border-top: 2px solid #1976d2; border-bottom: 2px solid #1976d2; }
            .invoice-table th { padding: 15px; text-align: left; font-weight: 600; color: #333; }
            .invoice-table td { padding: 15px; border-bottom: 1px solid #ddd; }
            .invoice-table tbody tr:hover { background: #fafafa; }
            .total-section { display: flex; justify-content: flex-end; margin-bottom: 40px; }
            .total-box { width: 300px; }
            .total-row { display: flex; justify-content: space-between; padding: 10px 0; border-bottom: 1px solid #ddd; }
            .total-amount { display: flex; justify-content: space-between; padding: 15px; background: #1976d2; color: white; font-weight: 700; font-size: 18px; }
            .footer { text-align: center; color: #666; font-size: 12px; padding-top: 20px; border-top: 1px solid #ddd; }
            .status { display: inline-block; padding: 5px 10px; border-radius: 4px; font-size: 12px; font-weight: 600; }
            .status.paid { background: #c8e6c9; color: #2e7d32; }
            .status.pending { background: #fff9c4; color: #f57f17; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <div class="logo">🏛️ Bamenda City Council</div>
                <div>
                    <div class="invoice-title">INVOICE</div>
                    <p style="font-size: 12px; color: #666;">{$reference}</p>
                </div>
            </div>
            
            <div class="details">
                <div class="detail-section">
                    <h3>Bill From</h3>
                    <p>Bamenda City Council</p>
                    <p>Finance Department</p>
                    <p>Bamenda, Cameroon</p>
                    <p>finance@bamendacity.gov.cm</p>
                </div>
                <div class="detail-section">
                    <h3>Bill To</h3>
                    <p>{$payment['first_name']} {$payment['last_name']}</p>
                    <p>{$payment['email']}</p>
                    <p>{$payment['phone']}</p>
                    <p>{$payment['address']}</p>
                </div>
            </div>
            
            <div class="details">
                <div class="detail-section">
                    <h3>Invoice Details</h3>
                    <p><strong>Invoice Date:</strong> {$invoice_date}</p>
                    <p><strong>Due Date:</strong> {$due_date}</p>
                    <p><strong>Reference:</strong> {$payment['reference_id']}</p>
                </div>
                <div class="detail-section">
                    <h3>Status</h3>
                    <p><span class="status {$payment['status']}">{$payment['status']}</span></p>
                </div>
            </div>
            
            <table class="invoice-table">
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{$payment['description']}</td>
                        <td>GHS {$payment['amount']}</td>
                        <td><span class="status {$payment['status']}">{$payment['status']}</span></td>
                    </tr>
                </tbody>
            </table>
            
            <div class="total-section">
                <div class="total-box">
                    <div class="total-row">
                        <span>Subtotal:</span>
                        <span>GHS {$payment['amount']}</span>
                    </div>
                    <div class="total-amount">
                        <span>Total Due:</span>
                        <span>GHS {$payment['amount']}</span>
                    </div>
                </div>
            </div>
            
            <div class="footer">
                <p>Generated on {date('Y-m-d H:i:s')} | © 2026 Bamenda City Council. All rights reserved.</p>
            </div>
        </div>
    </body>
    </html>
    HTML;
}

/**
 * Generate certificate HTML
 */
function generate_certificate_html($application) {
    $date = date('d F Y', strtotime($application['completed_at']));
    
    return <<<HTML
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Certificate</title>
        <style>
            * { margin: 0; padding: 0; box-sizing: border-box; }
            body { font-family: 'Georgia', serif; background: #f5f5f5; }
            .container { max-width: 900px; margin: 40px auto; background: white; padding: 60px; text-align: center; border: 3px solid #1976d2; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
            .header { margin-bottom: 40px; }
            .seal { font-size: 60px; margin-bottom: 20px; }
            .title { font-size: 48px; font-weight: 700; color: #1976d2; margin-bottom: 10px; letter-spacing: 2px; }
            .subtitle { font-size: 18px; color: #666; text-transform: uppercase; letter-spacing: 3px; }
            .divider { height: 2px; background: #1976d2; margin: 40px 0; }
            .content { margin: 40px 0; }
            .intro { font-size: 16px; margin-bottom: 30px; }
            .name { font-size: 32px; font-weight: 700; color: #1976d2; margin: 30px 0; border-bottom: 2px solid #1976d2; padding-bottom: 10px; }
            .details { font-size: 14px; margin: 30px 0; }
            .date { font-size: 14px; margin-top: 40px; font-style: italic; }
            .signatures { display: flex; justify-content: space-around; margin-top: 60px; }
            .signature { width: 150px; text-align: center; }
            .sig-line { border-top: 2px solid #333; margin: 40px 0 5px; }
            .sig-name { font-size: 12px; font-weight: 600; }
            .footer { font-size: 12px; color: #999; margin-top: 40px; border-top: 1px solid #ddd; padding-top: 20px; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <div class="seal">🎖️</div>
                <div class="title">Certificate of Completion</div>
                <div class="subtitle">Bamenda City Council</div>
            </div>
            
            <div class="divider"></div>
            
            <div class="content">
                <p class="intro">This is to certify that</p>
                <div class="name">{$application['first_name']} {$application['last_name']}</div>
                <p class="details">Has successfully completed the application for:</p>
                <p class="details" style="font-weight: 600; font-size: 16px;">{$application['title']}</p>
                <p class="details">{$application['description']}</p>
                <p class="date">Date: {$date}</p>
                <p class="date">Ref: {$application['reference_id']}</p>
            </div>
            
            <div class="signatures">
                <div class="signature">
                    <div class="sig-line"></div>
                    <div class="sig-name">Director</div>
                    <div class="sig-name">Bamenda City Council</div>
                </div>
                <div class="signature">
                    <div class="sig-line"></div>
                    <div class="sig-name">Official Seal</div>
                </div>
            </div>
            
            <div class="footer">
                <p>Generated on {date('Y-m-d H:i:s')} | Certificate ID: {$application['reference_id']}</p>
            </div>
        </div>
    </body>
    </html>
    HTML;
}

/**
 * Generate application summary HTML
 */
function generate_application_summary_html($application, $documents) {
    $doc_list = '';
    foreach ($documents as $doc) {
        $status_color = $doc['status'] === 'verified' ? 'green' : ($doc['status'] === 'rejected' ? 'red' : 'orange');
        $doc_list .= "<tr><td>{$doc['document_name']}</td><td>{$doc['document_type']}</td><td><span style='color: {$status_color}; font-weight: 600;'>{$doc['status']}</span></td></tr>";
    }
    
    return <<<HTML
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Application Summary</title>
        <style>
            * { margin: 0; padding: 0; box-sizing: border-box; }
            body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #333; }
            .container { max-width: 900px; margin: 40px auto; padding: 40px; }
            h1 { color: #1976d2; margin-bottom: 30px; border-bottom: 2px solid #1976d2; padding-bottom: 10px; }
            h2 { color: #1976d2; margin: 30px 0 15px; font-size: 18px; }
            .info-section { background: #f9f9f9; padding: 20px; margin-bottom: 20px; border-left: 4px solid #1976d2; }
            .info-row { margin: 10px 0; }
            .label { font-weight: 600; color: #555; }
            .value { color: #333; }
            table { width: 100%; border-collapse: collapse; margin: 20px 0; }
            th { background: #1976d2; color: white; padding: 12px; text-align: left; }
            td { padding: 10px; border-bottom: 1px solid #ddd; }
            tr:hover { background: #f9f9f9; }
            .status { display: inline-block; padding: 4px 8px; border-radius: 3px; font-size: 12px; font-weight: 600; }
            .status.submitted { background: #bbdefb; color: #1565c0; }
            .status.under_review { background: #fff9c4; color: #f57f17; }
            .status.approved { background: #c8e6c9; color: #2e7d32; }
            .status.completed { background: #c8e6c9; color: #2e7d32; }
            .footer { text-align: center; margin-top: 40px; font-size: 12px; color: #666; }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Application Summary Report</h1>
            
            <h2>Applicant Information</h2>
            <div class="info-section">
                <div class="info-row"><span class="label">Name:</span> <span class="value">{$application['first_name']} {$application['last_name']}</span></div>
                <div class="info-row"><span class="label">Email:</span> <span class="value">{$application['email']}</span></div>
                <div class="info-row"><span class="label">Phone:</span> <span class="value">{$application['phone']}</span></div>
            </div>
            
            <h2>Application Details</h2>
            <div class="info-section">
                <div class="info-row"><span class="label">Reference ID:</span> <span class="value">{$application['reference_id']}</span></div>
                <div class="info-row"><span class="label">Type:</span> <span class="value">{$application['application_type']}</span></div>
                <div class="info-row"><span class="label">Title:</span> <span class="value">{$application['title']}</span></div>
                <div class="info-row"><span class="label">Status:</span> <span class="value"><span class="status {$application['status']}">{$application['status']}</span></span></div>
                <div class="info-row"><span class="label">Submitted:</span> <span class="value">{$application['submitted_at']}</span></div>
                {$( !empty($application['completed_at']) ? "<div class='info-row'><span class='label'>Completed:</span> <span class='value'>{$application['completed_at']}</span></div>" : '')}
            </div>
            
            <h2>Description</h2>
            <div class="info-section">
                <p>{$application['description']}</p>
            </div>
            
            {$( !empty($documents) ? "
            <h2>Related Documents</h2>
            <table>
                <thead>
                    <tr>
                        <th>Document Name</th>
                        <th>Type</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    {$doc_list}
                </tbody>
            </table>
            " : '')}
            
            <div class="footer">
                <p>Generated on {date('Y-m-d H:i:s')}</p>
                <p>© 2026 Bamenda City Council. Confidential document.</p>
            </div>
        </div>
    </body>
    </html>
    HTML;
}
?>
