<?php
/**
 * Bamenda City Council E-Governance Platform
 * Email Verification Page
 */

// Set page metadata
$page_title = 'Verify Email | Bamenda City Council';
$page_description = 'Verify your email address to activate your Bamenda City Council e-governance account.';
$page_keywords = 'email verification, verify account, Bamenda City Council, e-governance, activate account';

// Get token from URL
$token = $_GET['token'] ?? '';

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero auth-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda_hills_city_1775529316149.png">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Account Activation</span>
            <h1 class="hero-title">Verify Your Email</h1>
            <p class="hero-subtitle">
                Confirm your email address to activate your Bamenda City Council account and access all services.
            </p>
        </div>
    </div>
</section>

<!-- Verification Section -->
<section class="auth-section">
    <div class="container">
        <div class="verification-container">
            <?php if (!empty($token)): ?>
                <!-- Token provided - show verification form -->
                <div class="auth-card">
                    <div class="auth-header">
                        <div class="auth-icon">
                            <span class="material-symbols-outlined">verified_user</span>
                        </div>
                        <h2 class="auth-title">Email Verification</h2>
                        <p class="auth-subtitle">Click the button below to verify your email address</p>
                    </div>
                    
                    <!-- Debug info (remove in production) -->
                    <div style="background: #f0f0f0; padding: 10px; margin: 10px 0; border-radius: 5px; font-size: 12px;">
                        <strong>Debug Info:</strong><br>
                        Token: <?php echo htmlspecialchars($token); ?><br>
                        Token Length: <?php echo strlen($token); ?><br>
                        Token Empty: <?php echo empty($token) ? 'YES' : 'NO'; ?>
                    </div>

                    <form class="auth-form" id="verifyForm" method="POST" action="/core/auth.php">
                        <input type="hidden" name="action" value="verify_email">
                        <input type="hidden" name="token" value="<?php echo htmlspecialchars($token); ?>">
                        
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary btn-lg btn-full" id="verifyBtn">
                                <span class="material-symbols-outlined">check_circle</span>
                                Verify Email Address
                            </button>
                        </div>
                    </form>
                </div>
            <?php else: ?>
                <!-- No token - show error -->
                <div class="auth-card">
                    <div class="auth-header">
                        <div class="auth-icon error-icon">
                            <span class="material-symbols-outlined">error</span>
                        </div>
                        <h2 class="auth-title">Verification Failed</h2>
                        <p class="auth-subtitle">Invalid or missing verification token</p>
                    </div>

                    <div class="auth-actions">
                        <a href="register.php" class="btn btn-outline btn-lg">
                            <span class="material-symbols-outlined">person_add</span>
                            Create New Account
                        </a>
                        <a href="login.php" class="btn btn-secondary btn-lg">
                            <span class="material-symbols-outlined">login</span>
                            Go to Login
                        </a>
                    </div>
                </div>
            <?php endif; ?>

            <div class="auth-info">
                <div class="info-card">
                    <h3 class="info-title">
                        <span class="material-symbols-outlined">help</span>
                        Verification Help
                    </h3>
                    <ul class="info-list">
                        <li>Check your email inbox for the verification message</li>
                        <li>Look in spam/junk folders if not found</li>
                        <li>Click the verification link or button</li>
                        <li>Link expires in 24 hours</li>
                        <li>Contact support if issues persist</li>
                    </ul>
                </div>

                <div class="info-card">
                    <h3 class="info-title">
                        <span class="material-symbols-outlined">support_agent</span>
                        Need Assistance?
                    </h3>
                    <ul class="info-list">
                        <li><a href="../citizen-services/help.php">Visit Help Center</a></li>
                        <li><a href="mailto:support@bamendacity.gov.cm">Email Support</a></li>
                        <li><a href="tel:+237233123456">Call: +237 233 123 456</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Loading Overlay -->
<div class="loading-overlay" id="loadingOverlay">
    <div class="loading-spinner">
        <div class="spinner"></div>
        <p>Verifying...</p>
    </div>
</div>

<?php
// Include footer
require_once __DIR__ . '/../../includes/footer.php';
?>

<style>
/* Verification Page Styles */
.auth-hero {
    min-height: 400px;
}

.auth-hero .hero-background img {
    filter: brightness(0.7);
}

.auth-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.verification-container {
    max-width: 800px;
    margin: 0 auto;
}

.auth-card {
    background: var(--surface);
    border-radius: var(--radius-lg);
    padding: var(--spacing-2xl);
    box-shadow: var(--shadow-md);
    border: 1px solid var(--outline-variant);
    margin-bottom: var(--spacing-2xl);
}

.auth-header {
    text-align: center;
    margin-bottom: var(--spacing-2xl);
}

.auth-icon {
    width: 64px;
    height: 64px;
    background: var(--primary);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-lg);
    color: var(--on-primary);
    font-size: 2rem;
}

.auth-icon.error-icon {
    background: var(--error);
    color: var(--on-error);
}

.auth-title {
    font-size: 1.875rem;
    font-weight: 700;
    color: var(--on-surface);
    margin-bottom: var(--spacing-sm);
}

.auth-subtitle {
    color: var(--on-surface-variant);
    font-size: 1rem;
    line-height: 1.5;
}

.auth-form {
    margin-top: var(--spacing-xl);
}

.form-actions {
    margin-bottom: var(--spacing-xl);
}

.auth-actions {
    display: flex;
    gap: var(--spacing-lg);
    justify-content: center;
    flex-wrap: wrap;
}

.auth-info {
    display: flex;
    gap: var(--spacing-xl);
}

.info-card {
    background: var(--surface-container-low);
    border-radius: var(--radius-md);
    padding: var(--spacing-lg);
    border-left: 4px solid var(--primary);
    flex: 1;
}

.info-title {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    font-weight: 600;
    color: var(--on-surface);
    margin-bottom: var(--spacing-md);
    font-size: 1rem;
}

.info-list {
    list-style: none;
    padding: 0;
}

.info-list li {
    padding: var(--spacing-xs) 0;
    color: var(--on-surface-variant);
    font-size: 0.875rem;
    line-height: 1.5;
}

.info-list a {
    color: var(--primary);
    text-decoration: none;
}

.info-list a:hover {
    text-decoration: underline;
}

.loading-overlay {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.8);
    display: none;
    align-items: center;
    justify-content: center;
    z-index: 9999;
}

.loading-spinner {
    text-align: center;
    color: white;
}

.spinner {
    width: 40px;
    height: 40px;
    border: 4px solid rgba(255, 255, 255, 0.3);
    border-top: 4px solid white;
    border-radius: 50%;
    animation: spin 1s linear infinite;
    margin: 0 auto var(--spacing-lg);
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

/* Responsive Design */
@media (max-width: 768px) {
    .verification-container {
        padding: 0 var(--spacing-lg);
    }
    
    .auth-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .auth-info {
        flex-direction: column;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const verifyForm = document.getElementById('verifyForm');
    const verifyBtn = document.getElementById('verifyBtn');
    const loadingOverlay = document.getElementById('loadingOverlay');

    if (verifyForm) {
        // Form submission
        verifyForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // Show loading
            loadingOverlay.style.display = 'flex';
            verifyBtn.disabled = true;
            verifyBtn.innerHTML = '<span class="material-symbols-outlined">hourglass_empty</span> Verifying...';

            // Create form data
            const formData = new FormData(verifyForm);
            
            // Debug logging
            console.log('Form data:');
            for (let [key, value] of formData.entries()) {
                console.log(key + ':', value);
            }

            // Submit form
            fetch('/core/auth.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                console.log('Response status:', response.status);
                console.log('Response headers:', response.headers);
                return response.json();
            })
            .then(data => {
                console.log('Response data:', data);
                loadingOverlay.style.display = 'none';
                verifyBtn.disabled = false;
                verifyBtn.innerHTML = '<span class="material-symbols-outlined">check_circle</span> Verify Email Address';

                if (data.success) {
                    // Show success message
                    showSuccessMessage('Email verified successfully! Redirecting to login...');
                    // Redirect to login after delay
                    setTimeout(() => {
                        window.location.href = 'login.php';
                    }, 2000);
                } else {
                    // Show error
                    showErrorMessage(data.message || 'Verification failed. Please try again.');
                }
            })
            .catch(error => {
                console.error('Fetch error:', error);
                loadingOverlay.style.display = 'none';
                verifyBtn.disabled = false;
                verifyBtn.innerHTML = '<span class="material-symbols-outlined">check_circle</span> Verify Email Address';
                showErrorMessage('Connection error. Please try again.');
            });
        });
    }

    function showSuccessMessage(message) {
        const successDiv = document.createElement('div');
        successDiv.className = 'success-message';
        successDiv.innerHTML = `
            <div class="success-content">
                <span class="material-symbols-outlined">check_circle</span>
                <p>${message}</p>
            </div>
        `;
        successDiv.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: var(--primary);
            color: var(--on-primary);
            padding: var(--spacing-lg);
            border-radius: var(--radius-md);
            z-index: 10000;
            max-width: 400px;
            box-shadow: var(--shadow-lg);
        `;
        
        document.body.appendChild(successDiv);
        
        setTimeout(() => {
            if (successDiv.parentNode) {
                successDiv.parentNode.removeChild(successDiv);
            }
        }, 5000);
    }

    function showErrorMessage(message) {
        const errorDiv = document.createElement('div');
        errorDiv.className = 'error-message';
        errorDiv.innerHTML = `
            <div class="error-content">
                <span class="material-symbols-outlined">error</span>
                <p>${message}</p>
            </div>
        `;
        errorDiv.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: var(--error);
            color: var(--on-error);
            padding: var(--spacing-lg);
            border-radius: var(--radius-md);
            z-index: 10000;
            max-width: 400px;
            box-shadow: var(--shadow-lg);
        `;
        
        document.body.appendChild(errorDiv);
        
        setTimeout(() => {
            if (errorDiv.parentNode) {
                errorDiv.parentNode.removeChild(errorDiv);
            }
        }, 5000);
    }
});
</script>


