<?php
/**
 * Bamenda City Council E-Governance Platform
 * Forgot Password Page
 */

// Set page metadata
$page_title = 'Forgot Password | Bamenda City Council';
$page_description = 'Reset your Bamenda City Council e-governance account password if you have forgotten it.';
$page_keywords = 'forgot password, reset password, Bamenda City Council, e-governance, account recovery';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Home', 'url' => '../index.php'],
    ['title' => 'Login', 'url' => 'login.php'],
    ['title' => 'Forgot Password', 'url' => '#']
];

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
            <span class="badge badge-secondary">Account Recovery</span>
            <h1 class="hero-title">Reset Your Password</h1>
            <p class="hero-subtitle">
                Enter your email address and we'll send you instructions to reset your password.
            </p>
        </div>
    </div>
</section>

<!-- Forgot Password Section -->
<section class="auth-section">
    <div class="container">
        <div class="auth-container">
            <div class="auth-card">
                <div class="auth-header">
                    <div class="auth-icon">
                        <span class="material-symbols-outlined">lock_reset</span>
                    </div>
                    <h2 class="auth-title">Forgot Password</h2>
                    <p class="auth-subtitle">We'll help you get back into your account</p>
                </div>

                <form class="auth-form" id="forgotForm" method="POST" action="/core/auth.php">
                    <input type="hidden" name="action" value="forgot_password">
                    
                    <div class="form-group">
                        <label for="email" class="form-label">
                            <span class="material-symbols-outlined">email</span>
                            Email Address
                        </label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            class="form-input" 
                            placeholder="Enter your registered email address"
                            required
                            autocomplete="email"
                        >
                        <span class="form-error" id="email-error"></span>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary btn-lg btn-full" id="resetBtn">
                            <span class="material-symbols-outlined">send</span>
                            Send Reset Link
                        </button>
                    </div>

                    <div class="auth-links">
                        <a href="login.php" class="auth-link">
                            <span class="material-symbols-outlined">arrow_back</span>
                            Back to Login
                        </a>
                        <a href="register.php" class="auth-link">
                            <span class="material-symbols-outlined">person_add</span>
                            Create Account
                        </a>
                    </div>
                </form>
            </div>

            <div class="auth-info">
                <div class="info-card">
                    <h3 class="info-title">
                        <span class="material-symbols-outlined">security</span>
                        Password Reset Process
                    </h3>
                    <ul class="info-list">
                        <li>Enter your registered email address</li>
                        <li>Check your email for reset instructions</li>
                        <li>Click the reset link in the email</li>
                        <li>Create a new password</li>
                        <li>Link expires in 24 hours</li>
                    </ul>
                </div>

                <div class="info-card">
                    <h3 class="info-title">
                        <span class="material-symbols-outlined">help</span>
                        Need Help?
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
        <p>Sending reset link...</p>
    </div>
</div>

<?php
// Include footer
require_once __DIR__ . '/../../includes/footer.php';
?>

<style>
/* Forgot Password Page Styles */
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

.auth-container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--spacing-3xl);
    max-width: 1200px;
    margin: 0 auto;
}

.auth-card {
    background: var(--surface);
    border-radius: var(--radius-lg);
    padding: var(--spacing-2xl);
    box-shadow: var(--shadow-md);
    border: 1px solid var(--outline-variant);
}

.auth-header {
    text-align: center;
    margin-bottom: var(--spacing-2xl);
}

.auth-icon {
    width: 64px;
    height: 64px;
    background: var(--tertiary);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-lg);
    color: var(--on-tertiary);
    font-size: 2rem;
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

.form-group {
    margin-bottom: var(--spacing-lg);
}

.form-label {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    font-weight: 500;
    color: var(--on-surface);
    margin-bottom: var(--spacing-sm);
    font-size: 0.875rem;
}

.form-input {
    width: 100%;
    padding: var(--spacing-md) var(--spacing-lg);
    border: 2px solid var(--outline);
    border-radius: var(--radius-md);
    font-size: 1rem;
    transition: all 0.3s ease;
    background: var(--surface-container);
    color: var(--on-surface);
}

.form-input:focus {
    outline: none;
    border-color: var(--primary);
    box-shadow: 0 0 0 3px rgba(25, 118, 210, 0.1);
}

.form-actions {
    margin-bottom: var(--spacing-xl);
}

.auth-links {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: var(--spacing-md);
}

.auth-link {
    display: flex;
    align-items: center;
    gap: var(--spacing-xs);
    color: var(--primary);
    text-decoration: none;
    font-size: 0.875rem;
    transition: color 0.3s ease;
}

.auth-link:hover {
    color: var(--primary-dark);
}

.form-error {
    color: var(--error);
    font-size: 0.75rem;
    margin-top: var(--spacing-xs);
    display: none;
}

.auth-info {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xl);
}

.info-card {
    background: var(--surface-container-low);
    border-radius: var(--radius-md);
    padding: var(--spacing-lg);
    border-left: 4px solid var(--tertiary);
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
    .auth-container {
        grid-template-columns: 1fr;
        gap: var(--spacing-2xl);
    }
    
    .auth-links {
        flex-direction: column;
        align-items: center;
        gap: var(--spacing-sm);
    }
    
    .auth-info {
        order: -1;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const forgotForm = document.getElementById('forgotForm');
    const resetBtn = document.getElementById('resetBtn');
    const loadingOverlay = document.getElementById('loadingOverlay');

    // Form submission
    forgotForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Clear previous errors
        document.querySelectorAll('.form-error').forEach(error => {
            error.style.display = 'none';
        });

        // Validate form
        const email = document.getElementById('email').value.trim();

        let hasError = false;

        // Email validation
        if (!email) {
            document.getElementById('email-error').textContent = 'Email is required';
            document.getElementById('email-error').style.display = 'block';
            hasError = true;
        } else if (!isValidEmail(email)) {
            document.getElementById('email-error').textContent = 'Please enter a valid email address';
            document.getElementById('email-error').style.display = 'block';
            hasError = true;
        }

        if (hasError) return;

        // Show loading
        loadingOverlay.style.display = 'flex';
        resetBtn.disabled = true;
        resetBtn.innerHTML = '<span class="material-symbols-outlined">hourglass_empty</span> Sending...';

        // Create form data
        const formData = new FormData();
        formData.append('action', 'forgot_password');
        formData.append('email', email);

        // Submit form
        fetch('/core/auth.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            loadingOverlay.style.display = 'none';
            resetBtn.disabled = false;
            resetBtn.innerHTML = '<span class="material-symbols-outlined">send</span> Send Reset Link';

            if (data.success) {
                // Show success message
                showSuccessMessage('Password reset link sent! Please check your email.');
                // Redirect to login after delay
                setTimeout(() => {
                    window.location.href = 'login.php';
                }, 3000);
            } else {
                // Show error
                if (data.message) {
                    document.getElementById('email-error').textContent = data.message;
                    document.getElementById('email-error').style.display = 'block';
                }
            }
        })
        .catch(error => {
            loadingOverlay.style.display = 'none';
            resetBtn.disabled = false;
            resetBtn.innerHTML = '<span class="material-symbols-outlined">send</span> Send Reset Link';
            document.getElementById('email-error').textContent = 'Connection error. Please try again.';
            document.getElementById('email-error').style.display = 'block';
        });
    });

    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
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
            background: var(--tertiary);
            color: var(--on-tertiary);
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
});
</script>


