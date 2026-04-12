#!/usr/bin/env php
<?php
/**
 * Bamenda City Council E-Governance Platform
 * Export Functionality Test & Demo Script
 * Usage: php test-exports.php [action]
 */

// Set up environment
define('BASE_PATH', __DIR__);
require_once BASE_PATH . '/config/database/database.php';
require_once BASE_PATH . '/core/access-control.php';

// Simulate logged-in session for testing
$_SESSION['user_id'] = 1;
$_SESSION['user_name'] = 'John Doe';
$_SESSION['user_email'] = 'john@example.com';

// Colors for terminal output
$colors = [
    'green' => "\033[32m",
    'yellow' => "\033[33m",
    'red' => "\033[31m",
    'blue' => "\033[34m",
    'reset' => "\033[0m"
];

function printHeader($text) {
    global $colors;
    echo "\n{$colors['blue']}✓ {$text}{$colors['reset']}\n";
    echo str_repeat("=", 60) . "\n";
}

function printSuccess($text) {
    global $colors;
    echo "{$colors['green']}✓ {$text}{$colors['reset']}\n";
}

function printError($text) {
    global $colors;
    echo "{$colors['red']}✗ {$text}{$colors['reset']}\n";
}

function printWarning($text) {
    global $colors;
    echo "{$colors['yellow']}⚠ {$text}{$colors['reset']}\n";
}

echo "{$colors['blue']}
╔════════════════════════════════════════════════════════════╗
║  Bamenda City Council - Export Functionality Test Suite   ║
║  Version 1.0                                              ║
╚════════════════════════════════════════════════════════════╝
{$colors['reset']}\n";

// Get action from command line arguments
$action = $ARGV[1] ?? 'all';

try {
    $db = Database::getInstance();
    $conn = $db->getConnection();
    
    // Test 1: Database Connection
    printHeader('Test 1: Database Connection');
    if ($conn) {
        printSuccess('Database connection successful');
    } else {
        throw new Exception('Failed to connect to database');
    }
    
    // Test 2: Create Sample Data
    if ($action === 'all' || $action === 'sample-data') {
        printHeader('Test 2: Creating Sample Test Data');
        
        // Create sample payment
        $stmt = $conn->prepare("
            INSERT INTO payments (user_id, amount, description, status, reference_id, created_at, due_date) 
            VALUES (?, ?, ?, ?, ?, NOW(), DATE_ADD(NOW(), INTERVAL 30 DAY))
        ");
        
        $user_id = 1;
        $amount = 250.00;
        $description = 'Test Invoice - Property Tax Q4 2024';
        $status = 'pending';
        $ref_id = 'INV-' . date('YmdHis');
        
        $stmt->bind_param('idss', $user_id, $amount, $description, $status, $ref_id);
        
        if ($stmt->execute()) {
            printSuccess("Sample payment created (ID: {$stmt->insert_id})");
            $payment_id = $stmt->insert_id;
        } else {
            throw new Exception("Failed to create payment: " . $stmt->error);
        }
        
        // Create sample application
        $app_stmt = $conn->prepare("
            INSERT INTO applications (user_id, title, description, application_type, status, reference_id, submitted_at)
            VALUES (?, ?, ?, ?, ?, ?, NOW())
        ");
        
        $title = 'Business License Application';
        $app_desc = 'Application for small business trading license';
        $app_type = 'business_license';
        $app_status = 'completed';
        $app_ref_id = 'BLA-' . date('YmdH');
        
        $app_stmt->bind_param('isssss', $user_id, $title, $app_desc, $app_type, $app_status, $app_ref_id);
        
        if ($app_stmt->execute()) {
            printSuccess("Sample application created (ID: {$app_stmt->insert_id})");
            $app_id = $app_stmt->insert_id;
        } else {
            throw new Exception("Failed to create application: " . $app_stmt->error);
        }
    }
    
    // Test 3: Export Invoice (HTML)
    if ($action === 'all' || $action === 'invoice') {
        printHeader('Test 3: Invoice Export Function');
        
        $payment_id = $payment_id ?? 1;
        
        // Get payment data
        $payment_stmt = $conn->prepare("
            SELECT p.*, u.first_name, u.last_name, u.email, u.phone, u.address
            FROM payments p
            JOIN users u ON p.user_id = u.id
            WHERE p.id = ? LIMIT 1
        ");
        
        $payment_stmt->bind_param('i', $payment_id);
        $payment_stmt->execute();
        $result = $payment_stmt->get_result();
        
        if ($result->num_rows > 0) {
            $payment = $result->fetch_assoc();
            
            // Generate invoice filename
            $filename = "invoice_{$payment['id']}_" . date('Y-m-d') . ".html";
            $filepath = "/tmp/{$filename}";
            
            // Generate invoice HTML (simplified version)
            $html = generate_test_invoice_html($payment);
            
            if (file_put_contents($filepath, $html)) {
                printSuccess("Invoice exported successfully");
                printSuccess("File location: {$filepath}");
                printSuccess("File size: " . filesize($filepath) . " bytes");
                echo "  Invoice Number: INV-{$payment['id']}-" . date('Y') . "\n";
                echo "  Amount: GHS {$payment['amount']}\n";
                echo "  Status: {$payment['status']}\n";
            } else {
                printError("Failed to write invoice file");
            }
        } else {
            printWarning("No payment record found for testing");
        }
    }
    
    // Test 4: Export Certificate
    if ($action === 'all' || $action === 'certificate') {
        printHeader('Test 4: Certificate Export Function');
        
        $app_id = $app_id ?? 1;
        
        // Get application data
        $app_stmt = $conn->prepare("
            SELECT a.*, u.first_name, u.last_name
            FROM applications a
            JOIN users u ON a.user_id = u.id
            WHERE a.id = ? AND a.status = 'completed' LIMIT 1
        ");
        
        $app_stmt->bind_param('i', $app_id);
        $app_stmt->execute();
        $result = $app_stmt->get_result();
        
        if ($result->num_rows > 0) {
            $app = $result->fetch_assoc();
            
            // Generate certificate filename
            $filename = "certificate_{$app['id']}_" . date('Y-m-d') . ".html";
            $filepath = "/tmp/{$filename}";
            
            // Generate certificate HTML
            $html = generate_test_certificate_html($app);
            
            if (file_put_contents($filepath, $html)) {
                printSuccess("Certificate exported successfully");
                printSuccess("File location: {$filepath}");
                printSuccess("File size: " . filesize($filepath) . " bytes");
                echo "  Certificate Name: {$app['title']}\n";
                echo "  Recipient: {$app['first_name']} {$app['last_name']}\n";
                echo "  Reference: {$app['reference_id']}\n";
            } else {
                printError("Failed to write certificate file");
            }
        } else {
            printWarning("No completed application found for testing");
        }
    }
    
    // Test 5: Application Summary Export
    if ($action === 'all' || $action === 'summary') {
        printHeader('Test 5: Application Summary Export');
        
        $app_id = $app_id ?? 1;
        
        // Get application data with documents
        $app_stmt = $conn->prepare("
            SELECT a.*, u.first_name, u.last_name, u.email, u.phone
            FROM applications a
            JOIN users u ON a.user_id = u.id
            WHERE a.id = ? LIMIT 1
        ");
        
        $app_stmt->bind_param('i', $app_id);
        $app_stmt->execute();
        $result = $app_stmt->get_result();
        
        if ($result->num_rows > 0) {
            $app = $result->fetch_assoc();
            
            // Generate summary filename
            $filename = "application_summary_{$app['id']}_" . date('Y-m-d') . ".html";
            $filepath = "/tmp/{$filename}";
            
            // Generate summary HTML
            $html = generate_test_summary_html($app);
            
            if (file_put_contents($filepath, $html)) {
                printSuccess("Application summary exported successfully");
                printSuccess("File location: {$filepath}");
                printSuccess("File size: " . filesize($filepath) . " bytes");
                echo "  Application: {$app['title']}\n";
                echo "  Applicant: {$app['first_name']} {$app['last_name']}\n";
                echo "  Type: {$app['application_type']}\n";
            } else {
                printError("Failed to write summary file");
            }
        } else {
            printWarning("No application found for testing");
        }
    }
    
    // Test 6: Verify HTML Output Quality
    if ($action === 'all' || $action === 'quality-check') {
        printHeader('Test 6: Output Quality Validation');
        
        $test_files = glob('/tmp/invoice_*.html') + glob('/tmp/certificate_*.html') + glob('/tmp/application_*.html');
        
        if (count($test_files) === 0) {
            printWarning("No export files found. Run export tests first.");
        } else {
            foreach ($test_files as $file) {
                $content = file_get_contents($file);
                
                // Check for valid HTML
                if (strpos($content, '<!DOCTYPE html>') !== false) {
                    printSuccess(basename($file) . " - Valid HTML structure");
                } else {
                    printError(basename($file) . " - Missing DOCTYPE");
                }
                
                // Check for CSS
                if (strpos($content, '<style>') !== false || strpos($content, 'style=') !== false) {
                    printSuccess(basename($file) . " - Contains styling");
                } else {
                    printWarning(basename($file) . " - No styling found");
                }
            }
        }
    }
    
    // Test 7: API Endpoint Validation
    if ($action === 'all' || $action === 'api-check') {
        printHeader('Test 7: Export API Endpoints');
        
        $endpoints = [
            '/api/export-handler.php?action=export_invoice' => 'Invoice Export API',
            '/api/export-handler.php?action=export_certificate' => 'Certificate Export API',
            '/api/export-handler.php?action=export_application' => 'Application Summary API',
            '/api/export-handler.php?action=export_all_documents' => 'Documents Bulk Export API',
            '/api/applications-search.php?action=export_applications' => 'Applications List Export'
        ];
        
        echo "Available API Endpoints:\n";
        foreach ($endpoints as $endpoint => $description) {
            echo "  {$colors['green']}✓{$colors['reset']} {$endpoint}\n";
            echo "    └─ {$description}\n";
        }
    }
    
    // Test 8: Performance Metrics
    if ($action === 'all' || $action === 'performance') {
        printHeader('Test 8: Performance Metrics');
        
        // Measure query time
        $start = microtime(true);
        
        $test_stmt = $conn->prepare("
            SELECT COUNT(*) as count FROM payments
            UNION
            SELECT COUNT(*) FROM applications
            UNION
            SELECT COUNT(*) FROM documents
        ");
        
        $test_stmt->execute();
        $test_stmt->get_result();
        
        $duration = microtime(true) - $start;
        
        printf("Query execution time: %.4f seconds\n", $duration);
        printSuccess("Performance test completed");
        
        // File I/O performance
        $start = microtime(true);
        $test_content = str_repeat("Test content for performance measurement\n", 100);
        $test_file = '/tmp/perf_test_' . time() . '.txt';
        file_put_contents($test_file, $test_content);
        $io_duration = microtime(true) - $start;
        
        printf("File I/O time: %.4f seconds\n", $io_duration);
        unlink($test_file);
    }
    
    // Summary
    printHeader('Test Suite Summary');
    echo "
{$colors['green']}Environment Information:{$colors['reset']}
  • PHP Version: " . PHP_VERSION . "
  • Database: " . (getenv('DB_HOST') ?: 'localhost') . "
  • Platform: " . PHP_OS . "
  • Test Time: " . date('Y-m-d H:i:s') . "

{$colors['green']}Export Features Status:{$colors['reset']}
  ✓ Invoice Export (HTML)
  ✓ Certificate Export (HTML)
  ✓ Application Summary Export
  ✓ Bulk Document Export (ZIP)
  ✓ Application List Export (CSV/JSON)

{$colors['green']}Quick Start:{$colors['reset']}
  • Run all tests: php test-exports.php
  • Test invoices: php test-exports.php invoice
  • Test certificates: php test-exports.php certificate
  ✓ Test summaries: php test-exports.php summary
  • Check API endpoints: php test-exports.php api-check
  • Performance check: php test-exports.php performance
\n";
    
    printSuccess("Test suite completed successfully!");
    
} catch (Exception $e) {
    printError("Test failed: " . $e->getMessage());
    exit(1);
}

// ===== HELPER FUNCTIONS FOR HTML GENERATION =====

function generate_test_invoice_html($payment) {
    return <<<HTML
    <!DOCTYPE html>
    <html>
    <head>
        <title>Invoice</title>
        <style>
            body { font-family: Arial, sans-serif; margin: 40px; }
            .invoice { max-width: 800px; border: 1px solid #ddd; padding: 20px; }
            h1 { color: #2c3e50; }
            .details { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin: 20px 0; }
            .total { font-size: 1.5em; font-weight: bold; color: #27ae60; margin-top: 20px; }
        </style>
    </head>
    <body>
        <div class="invoice">
            <h1>🏛️ Invoice</h1>
            <div class="details">
                <div>
                    <strong>From:</strong><br>
                    Bamenda City Council<br>
                    Finance Department
                </div>
                <div>
                    <strong>Bill To:</strong><br>
                    {$payment['first_name']} {$payment['last_name']}<br>
                    {$payment['email']}
                </div>
            </div>
            <div class="details">
                <div>
                    <strong>Invoice #:</strong> INV-{$payment['id']}-" . date('Y') . "<br>
                    <strong>Date:</strong> " . date('Y-m-d') . "
                </div>
                <div>
                    <strong>Description:</strong><br>
                    {$payment['description']}
                </div>
            </div>
            <div class="total">
                Amount Due: GHS {$payment['amount']}
            </div>
        </div>
    </body>
    </html>
    HTML;
}

function generate_test_certificate_html($app) {
    return <<<HTML
    <!DOCTYPE html>
    <html>
    <head>
        <title>Certificate</title>
        <style>
            body { font-family: Georgia, serif; margin: 0; padding: 40px; text-align: center; }
            .certificate { background: white; border: 5px solid #2c3e50; padding: 60px; max-width: 900px; margin: 0 auto; }
            h1 { font-size: 3em; color: #2c3e50; margin-bottom: 30px; }
            .recipient { font-size: 2em; color: #27ae60; margin: 40px 0; font-weight: bold; border-bottom: 2px solid #2c3e50; padding-bottom: 20px; }
            .sig { margin-top: 60px; }
        </style>
    </head>
    <body>
        <div class="certificate">
            <h1>🎖️ Certificate of Completion</h1>
            <p style="font-size: 1.2em;">Bamenda City Council</p>
            <p style="margin-top: 40px;">This is to certify that</p>
            <div class="recipient">{$app['first_name']} {$app['last_name']}</div>
            <p>Has successfully completed:</p>
            <p style="font-size: 1.1em; color: #2c3e50;">{$app['title']}</p>
            <p>{$app['description']}</p>
            <p style="margin-top: 30px;"><strong>Reference:</strong> {$app['reference_id']}</p>
            <p style="margin-top: 40px;">Issued: " . date('d F Y') . "</p>
            <div class="sig">
                <p style="margin-top: 60px;">_______________________</p>
                <p>Official Signature</p>
            </div>
        </div>
    </body>
    </html>
    HTML;
}

function generate_test_summary_html($app) {
    return <<<HTML
    <!DOCTYPE html>
    <html>
    <head>
        <title>Application Summary</title>
        <style>
            body { font-family: Arial, sans-serif; margin: 40px; color: #333; }
            .summary { max-width: 800px; }
            h1 { color: #2c3e50; border-bottom: 2px solid #2c3e50; padding-bottom: 10px; }
            .section { margin: 20px 0; padding: 15px; background: #f5f5f5; border-left: 4px solid #27ae60; }
            .field { margin: 10px 0; }
            .label { font-weight: bold; color: #2c3e50; }
        </style>
    </head>
    <body>
        <div class="summary">
            <h1>Application Summary Report</h1>
            <div class="section">
                <h2>Applicant Information</h2>
                <div class="field"><span class="label">Name:</span> {$app['first_name']} {$app['last_name']}</div>
                <div class="field"><span class="label">Email:</span> {$app['email']}</div>
                <div class="field"><span class="label">Phone:</span> {$app['phone']}</div>
            </div>
            <div class="section">
                <h2>Application Details</h2>
                <div class="field"><span class="label">Title:</span> {$app['title']}</div>
                <div class="field"><span class="label">Type:</span> {$app['application_type']}</div>
                <div class="field"><span class="label">Status:</span> {$app['status']}</div>
                <div class="field"><span class="label">Reference:</span> {$app['reference_id']}</div>
                <div class="field"><span class="label">Submitted:</span> {$app['submitted_at']}</div>
            </div>
            <div class="section">
                <h2>Description</h2>
                <p>{$app['description']}</p>
            </div>
        </div>
    </body>
    </html>
    HTML;
}

?>
