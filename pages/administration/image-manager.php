<?php
/**
 * Admin Image Manager Panel
 * Access at: /admin/image-manager.php
 */

// Only allow admin access
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    header('Location: /auth/login.php');
    exit;
}

require_once __DIR__ . '/../core/image-api-manager.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Manager - Administration</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
    <style>
        .image-manager {
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        
        .manager-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        
        .manager-header h1 {
            margin: 0 0 10px 0;
            font-size: 28px;
        }
        
        .manager-header p {
            margin: 0;
            opacity: 0.9;
            font-size: 14px;
        }
        
        .manager-content {
            padding: 30px;
        }
        
        .api-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .api-card {
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            padding: 20px;
            transition: all 0.3s;
        }
        
        .api-card.active {
            border-color: #10b981;
            background: #f0fdf4;
        }
        
        .api-card h3 {
            margin: 0 0 10px 0;
            color: #333;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .api-status {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 15px;
        }
        
        .api-status.configured {
            background: #d1fae5;
            color: #065f46;
        }
        
        .api-status.not-configured {
            background: #fee2e2;
            color: #7f1d1d;
        }
        
        .api-info {
            font-size: 13px;
            color: #666;
            margin-bottom: 15px;
            background: #f9fafb;
            padding: 10px;
            border-radius: 4px;
        }
        
        .api-info strong {
            display: block;
            color: #333;
            margin-bottom: 4px;
        }
        
        .action-buttons {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }
        
        .btn {
            padding: 10px 16px;
            border: none;
            border-radius: 6px;
            font-size: 13px;
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
        
        .btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }
        
        .alert {
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 6px;
            border-left: 4px solid;
        }
        
        .alert-warning {
            background: #fef3c7;
            border-left-color: #f59e0b;
            color: #78350f;
        }
        
        .alert-success {
            background: #d1fae5;
            border-left-color: #10b981;
            color: #065f46;
        }
        
        .alert-error {
            background: #fee2e2;
            border-left-color: #ef4444;
            color: #7f1d1d;
        }
        
        .image-gallery {
            margin-top: 40px;
            padding-top: 30px;
            border-top: 1px solid #e5e7eb;
        }
        
        .gallery-title {
            font-size: 18px;
            font-weight: 600;
            color: #333;
            margin-bottom: 20px;
        }
        
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 15px;
        }
        
        .gallery-item {
            border-radius: 8px;
            overflow: hidden;
            background: #f9fafb;
            border: 1px solid #e5e7eb;
            transition: all 0.3s;
        }
        
        .gallery-item:hover {
            transform: translateY(-4px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        
        .gallery-item img {
            width: 100%;
            height: 120px;
            object-fit: cover;
            display: block;
        }
        
        .gallery-item-info {
            padding: 10px;
            font-size: 12px;
            color: #666;
            text-align: center;
            word-break: break-word;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <aside class="sidebar">
            <!-- Include sidebar from admin section -->
        </aside>
        
        <!-- Main Content -->
        <main class="main-content">
            <div class="image-manager">
                <div class="manager-header">
                    <h1>🎨 Image Manager</h1>
                    <p>Manage automatic image downloads from Unsplash, Pixabay, and Pexels</p>
                </div>
                
                <div class="manager-content">
                    <?php
                    $manager = new ImageAPIManager();
                    $api_keys = $manager->check_api_keys();
                    $any_configured = array_filter($api_keys);
                    
                    if (empty($any_configured)):
                    ?>
                        <div class="alert alert-warning">
                            <strong>⚠️ API Keys Not Configured</strong><br>
                            To download images automatically, you need to set API keys for at least one service.
                            See setup instructions below.
                        </div>
                    <?php endif; ?>
                    
                    <div class="api-grid">
                        <!-- Unsplash Card -->
                        <div class="api-card <?php echo $api_keys['unsplash'] ? 'active' : ''; ?>">
                            <h3>🖼️ Unsplash</h3>
                            <div class="api-status <?php echo $api_keys['unsplash'] ? 'configured' : 'not-configured'; ?>">
                                <?php echo $api_keys['unsplash'] ? '✓ Connected' : '✗ Not Set'; ?>
                            </div>
                            <div class="api-info">
                                <strong>Free Tier:</strong> 50 requests/hour
                                <strong>Quality:</strong> Premium professional photos
                                <strong>License:</strong> Unsplash License (free commercial use)
                            </div>
                            <div class="action-buttons">
                                <form method="POST" style="display: inline;">
                                    <input type="hidden" name="api_source" value="unsplash">
                                    <button type="submit" class="btn btn-primary" 
                                        <?php echo !$api_keys['unsplash'] ? 'disabled' : ''; ?>>
                                        📥 Download Images
                                    </button>
                                </form>
                                <a href="https://unsplash.com/developers" target="_blank" class="btn btn-secondary">Get API Key</a>
                            </div>
                        </div>
                        
                        <!-- Pixabay Card -->
                        <div class="api-card <?php echo $api_keys['pixabay'] ? 'active' : ''; ?>">
                            <h3>🎨 Pixabay</h3>
                            <div class="api-status <?php echo $api_keys['pixabay'] ? 'configured' : 'not-configured'; ?>">
                                <?php echo $api_keys['pixabay'] ? '✓ Connected' : '✗ Not Set'; ?>
                            </div>
                            <div class="api-info">
                                <strong>Free Tier:</strong> 50 requests/hour
                                <strong>Quality:</strong> Diverse stock images
                                <strong>License:</strong> Pixabay License (free commercial use)
                            </div>
                            <div class="action-buttons">
                                <form method="POST" style="display: inline;">
                                    <input type="hidden" name="api_source" value="pixabay">
                                    <button type="submit" class="btn btn-primary" 
                                        <?php echo !$api_keys['pixabay'] ? 'disabled' : ''; ?>>
                                        📥 Download Images
                                    </button>
                                </form>
                                <a href="https://pixabay.com/api/" target="_blank" class="btn btn-secondary">Get API Key</a>
                            </div>
                        </div>
                        
                        <!-- Pexels Card -->
                        <div class="api-card <?php echo $api_keys['pexels'] ? 'active' : ''; ?>">
                            <h3>📷 Pexels</h3>
                            <div class="api-status <?php echo $api_keys['pexels'] ? 'configured' : 'not-configured'; ?>">
                                <?php echo $api_keys['pexels'] ? '✓ Connected' : '✗ Not Set'; ?>
                            </div>
                            <div class="api-info">
                                <strong>Free Tier:</strong> 200 requests/hour
                                <strong>Quality:</strong> High-quality free photos
                                <strong>License:</strong> Pexels License (free commercial use)
                            </div>
                            <div class="action-buttons">
                                <form method="POST" style="display: inline;">
                                    <input type="hidden" name="api_source" value="pexels">
                                    <button type="submit" class="btn btn-primary" 
                                        <?php echo !$api_keys['pexels'] ? 'disabled' : ''; ?>>
                                        📥 Download Images
                                    </button>
                                </form>
                                <a href="https://www.pexels.com/api/" target="_blank" class="btn btn-secondary">Get API Key</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Setup Instructions -->
                    <div class="alert alert-warning" style="margin-top: 30px;">
                        <strong>📋 Setup Instructions:</strong><br><br>
                        
                        <strong>Step 1: Get Free API Keys</strong><br>
                        • Visit <a href="https://unsplash.com/developers" target="_blank">Unsplash Developers</a><br>
                        • Visit <a href="https://pixabay.com/api/" target="_blank">Pixabay API</a><br>
                        • Visit <a href="https://www.pexels.com/api/" target="_blank">Pexels API</a><br><br>
                        
                        <strong>Step 2: Add Keys to .env File</strong><br>
                        Create or edit <code>.env</code> in your project root:<br>
                        <pre style="background: #f3f4f6; padding: 10px; border-radius: 4px; overflow-x: auto;">
UNSPLASH_API_KEY=your_key_here
PIXABAY_API_KEY=your_key_here
PEXELS_API_KEY=your_key_here
                        </pre>
                        
                        <strong>Step 3: Load Environment Variables</strong><br>
                        Add to your <code>config/app/config.php</code>:<br>
                        <pre style="background: #f3f4f6; padding: 10px; border-radius: 4px; overflow-x: auto;">
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../..');
$dotenv->load();
                        </pre>
                        <strong>Step 4: Download Images</strong><br>
                        Click the "Download Images" button above to start!<br>
                    </div>
                    
                    <!-- Current Images -->
                    <div class="image-gallery">
                        <div class="gallery-title">📂 Downloaded Images</div>
                        <div class="gallery-grid">
                            <?php
                            $image_dir = __DIR__ . '/../assets/images';
                            if (is_dir($image_dir)) {
                                $folders = array_filter(glob($image_dir . '/*'), 'is_dir');
                                foreach ($folders as $folder) {
                                    $images = array_filter(glob($folder . '/*.{jpg,jpeg,png,svg}', GLOB_BRACE), 'is_file');
                                    foreach (array_slice($images, 0, 4) as $image) {
                                        $name = basename($image);
                                        $rel_path = str_replace($image_dir, '', $image);
                                        echo '<div class="gallery-item">';
                                        echo '<img src="../assets/images' . $rel_path . '" alt="' . htmlspecialchars($name) . '">';
                                        echo '<div class="gallery-item-info">' . htmlspecialchars(pathinfo($name, PATHINFO_FILENAME)) . '</div>';
                                        echo '</div>';
                                    }
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
