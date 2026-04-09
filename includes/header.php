<?php
/**
 * Bamenda City Council E-Governance Platform
 * Header Component
 */

// Include access control system
require_once __DIR__ . '/../core/access-control.php';

// Define endpoints that strictly require security clearance
$protected_patterns = [
    '/pages/administration/',
    'dashboard.php',
    'profile.php',
    'settings.php',
    'notifications.php',
    'business-license.php',
    'permits.php',
    'property-registry.php',
    'tax-portal.php',
    'payments.php',
    'service-history.php',
    'market-trader.php',
    'analytics.php',
    'project-management.php',
    'application.php',
    'applications-ledger.php',
    'create-alert.php',
    'staff-portal.php',
    'staff-tasks.php',
    'attendance.php',
    'archives.php',
    'backup.php',
    'users.php'
];

$requires_auth = false;
foreach ($protected_patterns as $pattern) {
    if (strpos($_SERVER['PHP_SELF'], $pattern) !== false) {
        $requires_auth = true;
        break;
    }
}

// Enforce authentication exclusively for matched operational endpoints
if ($requires_auth) {
    require_authentication();
}

// Set page title and meta description
$page_title = $page_title ?? 'Bamenda City Council | E-Governance Platform';
$page_description = $page_description ?? 'Access digital services, civic engagement tools, and youth programs for Bamenda City Council';
$page_keywords = $page_keywords ?? 'Bamenda, City Council, e-governance, digital services, civic engagement, Cameroon';

// Determine current section for body class
$current_section = 'main';
if (strpos($_SERVER['PHP_SELF'], 'citizen-services') !== false) {
    $current_section = 'citizen-services';
} elseif (strpos($_SERVER['PHP_SELF'], 'civic-engagement') !== false) {
    $current_section = 'civic-engagement';
} elseif (strpos($_SERVER['PHP_SELF'], 'emergency') !== false) {
    $current_section = 'emergency';
} elseif (strpos($_SERVER['PHP_SELF'], 'youth') !== false) {
    $current_section = 'youth';
} elseif (strpos($_SERVER['PHP_SELF'], 'administration') !== false) {
    $current_section = 'administration';
}
?>
<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($page_keywords); ?>">
    <meta name="author" content="Bamenda City Council">
    <meta name="theme-color" content="#004d27">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://bamendacity.gov.cm/assets/images/og-image.jpg">
    <meta property="og:url" content="https://bamendacity.gov.cm<?php echo $_SERVER['REQUEST_URI']; ?>">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="twitter:image" content="https://bamendacity.gov.cm/assets/images/twitter-card.jpg">
    
    <title><?php echo htmlspecialchars($page_title); ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/stitch1/assets/images/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/stitch1/assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/stitch1/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/stitch1/assets/images/favicon-16x16.png">
    
    <!-- Preconnect to external domains -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://lh3.googleusercontent.com">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700;800;900&family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/stitch1/assets/css/styles.css">
    
    <!-- Main JS -->
    <script src="/stitch1/assets/js/main.js" defer></script>

    <!-- Service Worker for PWA -->
    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function() {
                navigator.serviceWorker.register('sw.js')
                    .then(function(registration) {
                        console.log('ServiceWorker registration successful');
                    })
                    .catch(function(err) {
                        console.log('ServiceWorker registration failed: ', err);
                    });
            });
        }
    </script>
    
    <!-- Analytics (placeholder) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
    </script>
</head>
<body class="<?php echo $current_section; ?> bg-surface text-on-surface min-h-screen">
    
    <!-- Skip to main content for accessibility -->
    <a href="#main-content" class="sr-only focus-ring">Skip to main content</a>

<?php
// Include navigation
require_once __DIR__ . '/navigation.php';
?>

<main id="main-content" class="main-content">
    
    <!-- Breadcrumb Navigation -->
    <?php if (isset($breadcrumbs) && !empty($breadcrumbs)): ?>
    <nav class="breadcrumb-nav" aria-label="Breadcrumb">
        <div class="container">
            <ol class="breadcrumb-list">
                <li>
                    <a href="/stitch1/index.php" class="breadcrumb-link">
                        <span class="material-symbols-outlined">home</span>
                        <span>Home</span>
                    </a>
                </li>
                <?php foreach ($breadcrumbs as $index => $crumb): ?>
                    <li>
                        <?php if ($index < count($breadcrumbs) - 1): ?>
                            <a href="/stitch1/<?php echo ltrim($crumb['url'], '/'); ?>" class="breadcrumb-link">
                                <?php echo htmlspecialchars($crumb['title']); ?>
                            </a>
                        <?php else: ?>
                            <span class="breadcrumb-current"><?php echo htmlspecialchars($crumb['title']); ?></span>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ol>
        </div>
    </nav>
    <?php endif; ?>

<style>
/* Breadcrumb Styles */
.breadcrumb-nav {
    background-color: var(--surface-container-low);
    border-bottom: 1px solid var(--outline-variant);
    padding: var(--spacing-sm) 0;
}

.breadcrumb-list {
    display: flex;
    align-items: center;
    list-style: none;
    gap: var(--spacing-sm);
    flex-wrap: wrap;
}

.breadcrumb-list li {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
}

.breadcrumb-list li:not(:last-child)::after {
    content: '/';
    color: var(--on-surface-variant);
}

.breadcrumb-link {
    display: flex;
    align-items: center;
    gap: var(--spacing-xs);
    color: var(--on-surface-variant);
    text-decoration: none;
    font-size: 0.875rem;
    transition: color 0.2s ease;
}

.breadcrumb-link:hover {
    color: var(--primary);
}

.breadcrumb-current {
    color: var(--on-surface);
    font-weight: 500;
    font-size: 0.875rem;
}

/* Main Content */
.main-content {
    flex: 1;
    padding-bottom: 5rem; /* Space for bottom nav on mobile */
}

@media (min-width: 769px) {
    .main-content {
        padding-bottom: 0;
    }
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .breadcrumb-list {
        font-size: 0.75rem;
    }
    
    .breadcrumb-link .material-symbols-outlined {
        font-size: 1rem;
    }
}
</style>

<!-- Enhanced Logout Script -->
<?php if (is_authenticated()): ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Add click handlers to all logout links
    const logoutLinks = document.querySelectorAll('a[href*="action=logout"]');
    
    logoutLinks.forEach(function(link) {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Show confirmation dialog
            if (confirm('Are you sure you want to logout?')) {
                // Show loading state
                const originalContent = link.innerHTML;
                link.innerHTML = '<span class="material-symbols-outlined">hourglass_empty</span> Logging out...';
                link.style.pointerEvents = 'none';
                
                // Perform logout via AJAX for smoother experience
                fetch('/stitch1/core/auth.php?action=logout', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: 'action=logout'
                })
                .then(response => {
                    // Redirect regardless of response
                    window.location.href = '/stitch1/pages/auth/login.php';
                })
                .catch(error => {
                    // Fallback to direct navigation if AJAX fails
                    window.location.href = link.href;
                });
            }
        });
    });
});
</script>
<?php endif; ?>
