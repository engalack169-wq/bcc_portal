<?php
/**
 * Bamenda City Council E-Governance Platform
 * 403 Unauthorized Access Page
 */

session_start();
require_once __DIR__ . '/../../core/access-control.php';

$page_title = '403 – Access Denied | Bamenda City Council';
$page_description = 'You do not have permission to view this page.';
require_once __DIR__ . '/../../includes/header.php';

$user_role = get_user_role();
$dashboard_url = '/stitch1/pages/citizen-services/dashboard.php';
if ($user_role === 'admin') {
    $dashboard_url = '/stitch1/pages/administration/dashboard.php';
} elseif ($user_role === 'staff') {
    $dashboard_url = '/stitch1/pages/administration/staff-portal.php';
}
?>

<section class="unauthorized-page">
    <div class="container">
        <div class="error-card">
            <div class="error-icon-wrap">
                <span class="material-symbols-outlined error-icon">gpp_bad</span>
            </div>
            <div class="error-code">403</div>
            <h1 class="error-title">Access Denied</h1>
            <p class="error-message">
                You do not have the required clearance level to access this section of the
                Bamenda City Council E-Governance portal. This incident may be logged.
            </p>

            <div class="error-detail">
                <span class="material-symbols-outlined">info</span>
                <span>Your current role: <strong><?php echo ucfirst(htmlspecialchars($user_role)); ?></strong></span>
            </div>

            <div class="error-actions">
                <a href="<?php echo $dashboard_url; ?>" class="btn btn-primary">
                    <span class="material-symbols-outlined">dashboard</span>
                    Go to My Dashboard
                </a>
                <a href="/stitch1/index.php" class="btn btn-outline">
                    <span class="material-symbols-outlined">home</span>
                    Return to Home
                </a>
                <?php if (!is_authenticated()): ?>
                <a href="/stitch1/pages/auth/login.php" class="btn btn-secondary">
                    <span class="material-symbols-outlined">login</span>
                    Sign In
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<style>
.unauthorized-page {
    min-height: 80vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: var(--spacing-2xl) var(--spacing-lg);
}
.error-card {
    max-width: 540px;
    width: 100%;
    text-align: center;
    background: var(--surface-container-low);
    border-radius: var(--radius-xl);
    padding: var(--spacing-3xl) var(--spacing-2xl);
    border: 1px solid var(--outline-variant);
    box-shadow: 0 8px 40px rgba(0,0,0,0.12);
    animation: fadeInUp 0.5s ease;
}
@keyframes fadeInUp {
    from { opacity: 0; transform: translateY(24px); }
    to   { opacity: 1; transform: translateY(0); }
}
.error-icon-wrap {
    width: 88px;
    height: 88px;
    border-radius: 50%;
    background: rgba(211, 47, 47, 0.12);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-lg);
}
.error-icon {
    font-size: 3rem;
    color: var(--error);
}
.error-code {
    font-size: 5rem;
    font-weight: 900;
    color: var(--error);
    line-height: 1;
    margin-bottom: var(--spacing-sm);
    opacity: 0.15;
}
.error-title {
    font-size: 1.75rem;
    font-weight: 700;
    color: var(--on-surface);
    margin-bottom: var(--spacing-md);
}
.error-message {
    color: var(--on-surface-variant);
    line-height: 1.7;
    margin-bottom: var(--spacing-lg);
}
.error-detail {
    display: inline-flex;
    align-items: center;
    gap: var(--spacing-sm);
    background: var(--surface-container);
    border: 1px solid var(--outline-variant);
    border-radius: var(--radius-md);
    padding: var(--spacing-sm) var(--spacing-md);
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    margin-bottom: var(--spacing-xl);
}
.error-actions {
    display: flex;
    gap: var(--spacing-md);
    justify-content: center;
    flex-wrap: wrap;
}
</style>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>
