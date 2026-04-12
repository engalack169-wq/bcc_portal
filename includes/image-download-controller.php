<?php
/**
 * Image Download Controller
 * CLI and Web interface for downloading images via APIs
 */

require_once __DIR__ . '/../core/image-api-manager.php';

class ImageDownloadController {
    
    private $manager;
    
    public function __construct() {
        $this->manager = new ImageAPIManager();
    }
    
    /**
     * Web interface - show download status
     */
    public function render_web_interface() {
        $api_keys = $this->manager->check_api_keys();
        $log = $this->manager->get_log();
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Image Download Manager</title>
            <style>
                * { margin: 0; padding: 0; box-sizing: border-box; }
                body {
                    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
                    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                    min-height: 100vh;
                    padding: 20px;
                }
                .container {
                    max-width: 900px;
                    margin: 0 auto;
                }
                .header {
                    background: white;
                    padding: 30px;
                    border-radius: 12px 12px 0 0;
                    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
                }
                .header h1 {
                    color: #333;
                    margin-bottom: 10px;
                }
                .header p {
                    color: #666;
                    font-size: 14px;
                }
                .status-section {
                    background: white;
                    padding: 30px;
                    border-bottom: 1px solid #eee;
                }
                .status-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                    gap: 20px;
                    margin-bottom: 30px;
                }
                .status-card {
                    padding: 20px;
                    border-radius: 8px;
                    border-left: 4px solid #ddd;
                    background: #f9f9f9;
                }
                .status-card.configured {
                    border-left-color: #10b981;
                    background: #f0fdf4;
                }
                .status-card h3 {
                    font-size: 14px;
                    color: #666;
                    margin-bottom: 8px;
                    text-transform: uppercase;
                }
                .status-badge {
                    display: inline-block;
                    padding: 4px 12px;
                    border-radius: 20px;
                    font-size: 12px;
                    font-weight: 600;
                    background: #ddd;
                    color: #666;
                }
                .status-badge.active {
                    background: #10b981;
                    color: white;
                }
                .status-badge.inactive {
                    background: #ef4444;
                    color: white;
                }
                .controls {
                    display: flex;
                    gap: 10px;
                    flex-wrap: wrap;
                }
                .btn {
                    padding: 10px 20px;
                    border: none;
                    border-radius: 6px;
                    font-size: 14px;
                    font-weight: 600;
                    cursor: pointer;
                    transition: all 0.3s;
                }
                .btn-primary {
                    background: #667eea;
                    color: white;
                }
                .btn-primary:hover {
                    background: #5568d3;
                    transform: translateY(-2px);
                    box-shadow: 0 4px 12px rgba(102, 126, 234, 0.4);
                }
                .btn-secondary {
                    background: #e5e7eb;
                    color: #333;
                }
                .btn-secondary:hover {
                    background: #d1d5db;
                }
                .btn-danger {
                    background: #ef4444;
                    color: white;
                }
                .btn:disabled {
                    opacity: 0.5;
                    cursor: not-allowed;
                }
                .logs-section {
                    background: white;
                    padding: 30px;
                    border-radius: 0 0 12px 12px;
                    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
                }
                .logs-title {
                    font-size: 16px;
                    font-weight: 600;
                    color: #333;
                    margin-bottom: 15px;
                }
                .log-content {
                    background: #1e1e1e;
                    color: #d4d4d4;
                    padding: 15px;
                    border-radius: 6px;
                    font-family: 'Monaco', 'Courier New', monospace;
                    font-size: 12px;
                    max-height: 400px;
                    overflow-y: auto;
                    line-height: 1.5;
                }
                .log-content .success { color: #10b981; }
                .log-content .error { color: #ef4444; }
                .log-content .warning { color: #f59e0b; }
                .instructions {
                    background: #fffbeb;
                    border-left: 4px solid #f59e0b;
                    padding: 15px;
                    border-radius: 6px;
                    margin-top: 20px;
                    font-size: 14px;
                    color: #78350f;
                }
                .instructions strong {
                    color: #f59e0b;
                }
            </style>
        </head>
        <body>
            <div class="container">
                <div class="header">
                    <h1>🎨 Image Download Manager</h1>
                    <p>Automated image fetching from Unsplash, Pixabay, and Pexels APIs</p>
                </div>
                
                <div class="status-section">
                    <h2 style="margin-bottom: 20px; color: #333;">API Configuration Status</h2>
                    
                    <div class="status-grid">
                        <div class="status-card <?php echo $api_keys['unsplash'] ? 'configured' : ''; ?>">
                            <h3>Unsplash</h3>
                            <span class="status-badge <?php echo $api_keys['unsplash'] ? 'active' : 'inactive'; ?>">
                                <?php echo $api_keys['unsplash'] ? '✓ Configured' : '✗ Not Set'; ?>
                            </span>
                        </div>
                        
                        <div class="status-card <?php echo $api_keys['pixabay'] ? 'configured' : ''; ?>">
                            <h3>Pixabay</h3>
                            <span class="status-badge <?php echo $api_keys['pixabay'] ? 'active' : 'inactive'; ?>">
                                <?php echo $api_keys['pixabay'] ? '✓ Configured' : '✗ Not Set'; ?>
                            </span>
                        </div>
                        
                        <div class="status-card <?php echo $api_keys['pexels'] ? 'configured' : ''; ?>">
                            <h3>Pexels</h3>
                            <span class="status-badge <?php echo $api_keys['pexels'] ? 'active' : 'inactive'; ?>">
                                <?php echo $api_keys['pexels'] ? '✓ Configured' : '✗ Not Set'; ?>
                            </span>
                        </div>
                    </div>
                    
                    <div class="controls">
                        <form method="POST" style="display: inline;">
                            <button type="submit" name="action" value="fetch_unsplash" class="btn btn-primary" 
                                <?php echo !$api_keys['unsplash'] ? 'disabled' : ''; ?>>
                                📥 Fetch from Unsplash
                            </button>
                        </form>
                        
                        <form method="POST" style="display: inline;">
                            <button type="submit" name="action" value="fetch_pixabay" class="btn btn-primary" 
                                <?php echo !$api_keys['pixabay'] ? 'disabled' : ''; ?>>
                                📥 Fetch from Pixabay
                            </button>
                        </form>
                        
                        <form method="POST" style="display: inline;">
                            <button type="submit" name="action" value="fetch_pexels" class="btn btn-primary" 
                                <?php echo !$api_keys['pexels'] ? 'disabled' : ''; ?>>
                                📥 Fetch from Pexels
                            </button>
                        </form>
                        
                        <form method="POST" style="display: inline;">
                            <button type="submit" name="action" value="clear_log" class="btn btn-danger">
                                🗑️ Clear Log
                            </button>
                        </form>
                    </div>
                    
                    <div class="instructions">
                        <strong>⚠️ Setup Required:</strong><br>
                        Set these environment variables in your .env or server config:<br>
                        • UNSPLASH_API_KEY=your_key<br>
                        • PIXABAY_API_KEY=your_key<br>
                        • PEXELS_API_KEY=your_key<br><br>
                        Get FREE API keys at: unsplash.com/developers, pixabay.com/api, pexels.com/api
                    </div>
                </div>
                
                <div class="logs-section">
                    <div class="logs-title">📋 Activity Log</div>
                    <div class="log-content">
                        <?php 
                        echo htmlspecialchars($log, ENT_QUOTES);
                        ?>
                    </div>
                </div>
            </div>
        </body>
        </html>
        <?php
    }
    
    /**
     * CLI interface
     */
    public function run_cli($source = 'unsplash') {
        echo "🚀 Starting image download from {$source}...\n";
        echo str_repeat("=", 60) . "\n\n";
        
        $api_keys = $this->manager->check_api_keys();
        
        if (!$api_keys[$source]) {
            echo "❌ ERROR: {$source} API key not configured!\n";
            echo "Set environment variable: " . strtoupper($source) . "_API_KEY\n";
            return false;
        }
        
        echo "✓ API Key detected for {$source}\n";
        echo "Fetching images...\n\n";
        
        $results = $this->manager->fetch_all_images($source);
        
        $success = 0;
        $failed = 0;
        
        foreach ($results as $folder => $images) {
            foreach ($images as $name => $result) {
                if ($result['success']) {
                    echo "✓ {$folder}/{$name}\n";
                    $success++;
                } else {
                    echo "✗ {$folder}/{$name} - {$result['error']}\n";
                    $failed++;
                }
            }
        }
        
        echo "\n" . str_repeat("=", 60) . "\n";
        echo "Summary: {$success} successful, {$failed} failed\n";
        
        return $failed === 0;
    }
}

// Handle requests
$controller = new ImageDownloadController();

// Check if CLI or Web
if (php_sapi_name() === 'cli') {
    // CLI mode
    $source = isset($argv[1]) ? $argv[1] : 'unsplash';
    $controller->run_cli($source);
} else {
    // Web mode
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $action = $_POST['action'] ?? '';
        
        if ($action === 'fetch_unsplash') {
            $controller->run_cli('unsplash');
        } elseif ($action === 'fetch_pixabay') {
            $controller->run_cli('pixabay');
        } elseif ($action === 'fetch_pexels') {
            $controller->run_cli('pexels');
        } elseif ($action === 'clear_log') {
            $controller->manager->clear_log();
        }
        
        // Redirect to avoid form resubmission
        header('Location: ' . $_SERVER['REQUEST_URI']);
        exit;
    }
    
    $controller->render_web_interface();
}
?>
