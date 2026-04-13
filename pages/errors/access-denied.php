<?php
/**
 * Bamenda City Council E-Governance Platform
 * Access Denied Page
 */

// Set page metadata
$page_title = 'Access Denied | Bamenda City Council';
$page_description = 'Access denied - you do not have permission to access this page.';
$page_keywords = 'access denied, permission, Bamenda City Council, e-governance';

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero error-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda_hills_city_1775529316149.png">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-error">Access Denied</span>
            <h1 class="hero-title">You Don't Have Permission</h1>
            <p class="hero-subtitle">
                This page requires special permissions that your current account doesn't have. Please contact an administrator if you believe this is an error.
            </p>
        </div>
    </div>
</section>

<!-- Error Content Section -->
<section class="error-section">
    <div class="container">
        <div class="error-container">
            <div class="error-card">
                <div class="error-icon">
                    <span class="material-symbols-outlined">gavel</span>
                </div>
                <h2 class="error-title">Access Restricted</h2>
                <p class="error-message">
                    The page you're trying to access requires administrative privileges that are not available with your current account role.
                </p>
                
                <div class="error-details">
                    <h3>What does this mean?</h3>
                    <ul>
                        <li>You're trying to access an administrative area</li>
                        <li>Your current account doesn't have the required permissions</li>
                        <li>This is a security measure to protect sensitive information</li>
                    </ul>
                </div>
                
                <div class="error-actions">
                    <?php if (is_authenticated()): ?>
                        <?php 
                        $user_role = get_user_role();
                        $dashboard_url = '/pages/citizen-services/dashboard.php';
                        if ($user_role === 'staff') {
                            $dashboard_url = '/pages/administration/staff-portal.php';
                        }
                        ?>
                        <a href="<?php echo $dashboard_url; ?>" class="btn btn-primary btn-lg">
                            <span class="material-symbols-outlined">dashboard</span>
                            Go to Your Dashboard
                        </a>
                        <a href="/index.php" class="btn btn-outline btn-lg">
                            <span class="material-symbols-outlined">home</span>
                            Return Home
                        </a>
                    <?php else: ?>
                        <a href="/pages/auth/login.php" class="btn btn-primary btn-lg">
                            <span class="material-symbols-outlined">login</span>
                            Sign In
                        </a>
                        <a href="/index.php" class="btn btn-outline btn-lg">
                            <span class="material-symbols-outlined">home</span>
                            Return Home
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            
            <div class="help-card">
                <h3 class="help-title">
                    <span class="material-symbols-outlined">help</span>
                    Need Help?
                </h3>
                <div class="help-content">
                    <p>If you believe you should have access to this page, please contact:</p>
                    <ul>
                        <li><strong>System Administrator:</strong> admin@bamendacity.gov.cm</li>
                        <li><strong>IT Support:</strong> +237 233 123 456</li>
                        <li><strong>City Council Office:</strong> Visit in person during business hours</li>
                    </ul>
                    
                    <div class="help-info">
                        <h4>Request Access</h4>
                        <p>To request access to administrative features, please submit a formal request to the City Council with:</p>
                        <ul>
                            <li>Your full name and contact information</li>
                            <li>Your current role in the organization</li>
                            <li>Specific features you need access to</li>
                            <li>Justification for the access request</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Include footer
require_once __DIR__ . '/../../includes/footer.php';
?>

<style>
/* Error Page Styles */
.error-hero {
    min-height: 400px;
}

.error-hero .hero-background img {
    filter: brightness(0.6);
}

.error-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.error-container {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: var(--spacing-3xl);
    max-width: 1200px;
    margin: 0 auto;
}

.error-card {
    background: var(--surface);
    border-radius: var(--radius-lg);
    padding: var(--spacing-2xl);
    box-shadow: var(--shadow-md);
    border: 1px solid var(--outline-variant);
    text-align: center;
}

.error-icon {
    width: 80px;
    height: 80px;
    background: var(--error);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-xl);
    color: var(--on-error);
    font-size: 2.5rem;
}

.error-title {
    font-size: 2rem;
    font-weight: 700;
    color: var(--on-surface);
    margin-bottom: var(--spacing-lg);
}

.error-message {
    font-size: 1.125rem;
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-xl);
}

.error-details {
    background: var(--surface-container-low);
    border-radius: var(--radius-md);
    padding: var(--spacing-lg);
    margin-bottom: var(--spacing-xl);
    text-align: left;
}

.error-details h3 {
    font-size: 1.125rem;
    font-weight: 600;
    color: var(--on-surface);
    margin-bottom: var(--spacing-md);
}

.error-details ul {
    list-style: none;
    padding: 0;
}

.error-details li {
    padding: var(--spacing-xs) 0;
    color: var(--on-surface-variant);
    position: relative;
    padding-left: var(--spacing-lg);
}

.error-details li::before {
    content: '•';
    position: absolute;
    left: 0;
    color: var(--error);
    font-weight: bold;
}

.error-actions {
    display: flex;
    gap: var(--spacing-lg);
    justify-content: center;
    flex-wrap: wrap;
}

.help-card {
    background: var(--surface);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    box-shadow: var(--shadow-md);
    border: 1px solid var(--outline-variant);
    border-left: 4px solid var(--primary);
    height: fit-content;
}

.help-title {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    font-size: 1.25rem;
    font-weight: 600;
    color: var(--on-surface);
    margin-bottom: var(--spacing-lg);
}

.help-content p {
    color: var(--on-surface-variant);
    line-height: 1.5;
    margin-bottom: var(--spacing-lg);
}

.help-content ul {
    list-style: none;
    padding: 0;
    margin-bottom: var(--spacing-lg);
}

.help-content li {
    padding: var(--spacing-xs) 0;
    color: var(--on-surface-variant);
}

.help-content strong {
    color: var(--on-surface);
    font-weight: 600;
}

.help-info {
    background: var(--surface-container-low);
    border-radius: var(--radius-md);
    padding: var(--spacing-lg);
    margin-top: var(--spacing-lg);
}

.help-info h4 {
    font-size: 1rem;
    font-weight: 600;
    color: var(--on-surface);
    margin-bottom: var(--spacing-sm);
}

.help-info p {
    margin-bottom: var(--spacing-md);
}

.help-info ul {
    list-style: none;
    padding: 0;
}

.help-info li {
    padding: var(--spacing-xs) 0;
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

/* Responsive Design */
@media (max-width: 768px) {
    .error-container {
        grid-template-columns: 1fr;
        gap: var(--spacing-2xl);
    }
    
    .error-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .error-card {
        padding: var(--spacing-xl);
    }
    
    .error-icon {
        width: 60px;
        height: 60px;
        font-size: 2rem;
    }
}
</style>

