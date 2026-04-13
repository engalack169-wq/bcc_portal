<?php
/**
 * Bamenda City Council E-Governance Platform
 * Login Page
 */

// Set page metadata
$page_title = 'Login | Bamenda City Council';
$page_description = 'Login to access your Bamenda City Council e-governance account and access digital services.';
$page_keywords = 'login, sign in, Bamenda City Council, e-governance, digital services';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Home', 'url' => '../index.php'],
    ['title' => 'Login', 'url' => '#']
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
            <span class="badge badge-secondary">Secure Access</span>
            <h1 class="hero-title">Welcome Back</h1>
            <p class="hero-subtitle">
                Access your Bamenda City Council account to manage services, participate in civic activities, and engage with your community.
            </p>
        </div>
    </div>
</section>

<!-- Login Section -->
<section class="auth-section">
    <div class="container">
        <div class="auth-container">
            <div class="auth-card">
                <div class="auth-header">
                    <div class="auth-icon">
                        <span class="material-symbols-outlined">login</span>
                    </div>
                    <h2 class="auth-title">Sign In</h2>
                    <p class="auth-subtitle">Enter your credentials to access your account</p>
                </div>

                <form class="auth-form" id="loginForm" method="POST" action="/core/auth.php">
                    <input type="hidden" name="action" value="login">
                    
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
                            placeholder="Enter your email address"
                            required
                            autocomplete="email"
                        >
                        <span class="form-error" id="email-error"></span>
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">
                            <span class="material-symbols-outlined">password</span>
                            Password
                        </label>
                        <div class="password-input-container">
                            <input 
                                type="password" 
                                id="password" 
                                name="password" 
                                class="form-input" 
                                placeholder="Enter your password"
                                required
                                autocomplete="current-password"
                            >
                            <button type="button" class="password-toggle" id="togglePassword">
                                <span class="material-symbols-outlined">visibility</span>
                            </button>
                        </div>
                        <span class="form-error" id="password-error"></span>
                    </div>

                    <div class="form-group checkbox-group">
                        <label class="checkbox-label">
                            <input type="checkbox" id="remember" name="remember" value="1">
                            <span class="checkbox-custom"></span>
                            Remember me for 30 days
                        </label>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary btn-lg btn-full" id="loginBtn">
                            <span class="material-symbols-outlined">login</span>
                            Sign In
                        </button>
                    </div>

                    <div class="auth-links">
                        <a href="forgot-password.php" class="auth-link">
                            <span class="material-symbols-outlined">help</span>
                            Forgot Password?
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
                        Account Security
                    </h3>
                    <ul class="info-list">
                        <li>Use your registered email address</li>
                        <li>Password must be at least 8 characters</li>
                        <li>Enable two-factor authentication for extra security</li>
                        <li>Never share your login credentials</li>
                    </ul>
                </div>

                <div class="info-card">
                    <h3 class="info-title">
                        <span class="material-symbols-outlined">support_agent</span>
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
        <p>Signing in...</p>
    </div>
</div>

<?php
// Include footer
require_once __DIR__ . '/../../includes/footer.php';
?>

<style>
/* Auth Page Styles */
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
    background: var(--primary);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-lg);
    color: var(--on-primary);
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

.password-input-container {
    position: relative;
}

.password-toggle {
    position: absolute;
    right: var(--spacing-md);
    top: 50%;
    transform: translateY(-50%);
    background: none;
    border: none;
    color: var(--on-surface-variant);
    cursor: pointer;
    padding: var(--spacing-xs);
}

.checkbox-group {
    margin-bottom: var(--spacing-xl);
}

.checkbox-label {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    cursor: pointer;
    font-size: 0.875rem;
    color: var(--on-surface);
}

.checkbox-custom {
    width: 20px;
    height: 20px;
    border: 2px solid var(--outline);
    border-radius: var(--radius-sm);
    margin-right: var(--spacing-sm);
    position: relative;
}

.checkbox-label input:checked + .checkbox-custom {
    background: var(--primary);
    border-color: var(--primary);
}

.checkbox-label input:checked + .checkbox-custom::after {
    content: '✓';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: var(--on-primary);
    font-size: 0.75rem;
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
    border-left: 4px solid var(--primary);
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
    const loginForm = document.getElementById('loginForm');
    const loginBtn = document.getElementById('loginBtn');
    const loadingOverlay = document.getElementById('loadingOverlay');
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');

    // Password visibility toggle
    togglePassword.addEventListener('click', function() {
        const type = passwordInput.type === 'password' ? 'text' : 'password';
        passwordInput.type = type;
        togglePassword.innerHTML = type === 'password' ? 
            '<span class="material-symbols-outlined">visibility</span>' : 
            '<span class="material-symbols-outlined">visibility_off</span>';
    });

    // Form submission
    loginForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Clear previous errors
        document.querySelectorAll('.form-error').forEach(error => {
            error.style.display = 'none';
        });

        // Get form data
        const email = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value;
        const remember = document.getElementById('remember').checked;

        console.log('Login attempt:', { email, passwordLength: password.length });

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

        // Password validation
        if (!password) {
            document.getElementById('password-error').textContent = 'Password is required';
            document.getElementById('password-error').style.display = 'block';
            hasError = true;
        }

        if (hasError) return;

        // Show loading
        loadingOverlay.style.display = 'flex';
        loginBtn.disabled = true;
        loginBtn.innerHTML = '<span class="material-symbols-outlined">hourglass_empty</span> Signing in...';

        // Create form data
        const formData = new FormData();
        formData.append('action', 'login');
        formData.append('email', email);
        formData.append('password', password);
        formData.append('remember', remember ? '1' : '0');

        // Submit form
        fetch('/core/auth.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            loadingOverlay.style.display = 'none';
            loginBtn.disabled = false;
            loginBtn.innerHTML = '<span class="material-symbols-outlined">login</span> Sign In';

            if (data.success) {
                // Show success message and redirect to role-based dashboard
                showSuccessMessage('Login successful! Redirecting to your dashboard...');
                setTimeout(() => {
                    // If user was trying to access a specific page, send them there
                    const params = new URLSearchParams(window.location.search);
                    const intended = params.get('redirect');
                    if (intended) {
                        window.location.href = decodeURIComponent(intended);
                    } else {
                        window.location.href = data.redirect || '/pages/citizen-services/dashboard.php';
                    }
                }, 1500);
            } else {
                // Show error
                if (data.message) {
                    document.getElementById('password-error').textContent = data.message;
                    document.getElementById('password-error').style.display = 'block';
                }
            }
        })
        .catch(error => {
            loadingOverlay.style.display = 'none';
            loginBtn.disabled = false;
            loginBtn.innerHTML = '<span class="material-symbols-outlined">login</span> Sign In';
            document.getElementById('password-error').textContent = 'Connection error. Please try again.';
            document.getElementById('password-error').style.display = 'block';
        });
    });

    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    function showEmailVerificationPopup(email, token) {
        // Create popup modal
        const modalHtml = `
            <div class="email-verification-modal" id="emailVerificationModal">
                <div class="modal-backdrop"></div>
                <div class="modal-container">
                    <div class="modal-header">
                        <div class="modal-icon">
                            <span class="material-symbols-outlined">email</span>
                        </div>
                        <h3 class="modal-title">Email Verification Required</h3>
                        <button class="modal-close" onclick="closeEmailVerificationPopup()">
                            <span class="material-symbols-outlined">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="verification-message">
                            <p><strong>Your email address needs verification!</strong></p>
                            <p>We've sent a verification email to:</p>
                            <div class="email-display">
                                <span class="material-symbols-outlined">mark_email_unread</span>
                                <span>${email}</span>
                            </div>
                            <p>Please check your inbox and click the verification link to activate your account.</p>
                        </div>
                        
                        <div class="verification-options">
                            <div class="option-item">
                                <span class="material-symbols-outlined">search_in_page</span>
                                <div>
                                    <strong>Check your spam folder</strong>
                                    <p>Sometimes verification emails end up in spam</p>
                                </div>
                            </div>
                            <div class="option-item">
                                <span class="material-symbols-outlined">refresh</span>
                                <div>
                                    <strong>Resend verification email</strong>
                                    <p>Didn't receive it? We can send it again</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="verification-actions">
                            <button class="btn btn-primary" onclick="resendVerificationEmail('${email}')">
                                <span class="material-symbols-outlined">send</span>
                                Resend Verification Email
                            </button>
                            <button class="btn btn-outline" onclick="openEmailClient('${email}')">
                                <span class="material-symbols-outlined">open_in_new</span>
                                Open Email App
                            </button>
                        </div>
                        
                        <div class="verification-help">
                            <p class="help-text">
                                <span class="material-symbols-outlined">help_outline</span>
                                If you need help, contact our support team at 
                                <a href="mailto:support@bamendacity.gov.cm">support@bamendacity.gov.cm</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        `;

        // Add modal to page
        document.body.insertAdjacentHTML('beforeend', modalHtml);
        
        // Add styles
        if (!document.getElementById('emailVerificationStyles')) {
            const styles = `
                <style id="emailVerificationStyles">
                    .email-verification-modal {
                        position: fixed;
                        top: 0;
                        left: 0;
                        right: 0;
                        bottom: 0;
                        z-index: 10000;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    }
                    
                    .modal-backdrop {
                        position: absolute;
                        top: 0;
                        left: 0;
                        right: 0;
                        bottom: 0;
                        background: rgba(0, 0, 0, 0.6);
                        backdrop-filter: blur(4px);
                    }
                    
                    .modal-container {
                        position: relative;
                        background: var(--surface);
                        border-radius: var(--radius-lg);
                        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
                        max-width: 500px;
                        width: 90%;
                        max-height: 90vh;
                        overflow-y: auto;
                        animation: modalSlideIn 0.3s ease-out;
                    }
                    
                    @keyframes modalSlideIn {
                        from {
                            opacity: 0;
                            transform: translateY(-20px) scale(0.95);
                        }
                        to {
                            opacity: 1;
                            transform: translateY(0) scale(1);
                        }
                    }
                    
                    .modal-header {
                        display: flex;
                        align-items: center;
                        justify-content: space-between;
                        padding: var(--spacing-xl);
                        border-bottom: 1px solid var(--outline-variant);
                    }
                    
                    .modal-icon {
                        width: 48px;
                        height: 48px;
                        background: var(--tertiary);
                        color: var(--on-tertiary);
                        border-radius: 50%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        font-size: 24px;
                    }
                    
                    .modal-title {
                        font-size: 1.25rem;
                        font-weight: 600;
                        color: var(--on-surface);
                        margin: 0;
                    }
                    
                    .modal-close {
                        background: none;
                        border: none;
                        color: var(--on-surface-variant);
                        cursor: pointer;
                        padding: var(--spacing-sm);
                        border-radius: var(--radius-md);
                        transition: all 0.2s ease;
                    }
                    
                    .modal-close:hover {
                        background: var(--surface-container-low);
                        color: var(--on-surface);
                    }
                    
                    .modal-body {
                        padding: var(--spacing-xl);
                    }
                    
                    .verification-message {
                        text-align: center;
                        margin-bottom: var(--spacing-xl);
                    }
                    
                    .verification-message p {
                        color: var(--on-surface);
                        margin-bottom: var(--spacing-md);
                        line-height: 1.5;
                    }
                    
                    .verification-message strong {
                        color: var(--error);
                    }
                    
                    .email-display {
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        gap: var(--spacing-sm);
                        background: var(--surface-container-low);
                        padding: var(--spacing-md) var(--spacing-lg);
                        border-radius: var(--radius-md);
                        margin: var(--spacing-lg) 0;
                        font-weight: 500;
                        color: var(--primary);
                    }
                    
                    .verification-options {
                        margin-bottom: var(--spacing-xl);
                    }
                    
                    .option-item {
                        display: flex;
                        align-items: flex-start;
                        gap: var(--spacing-md);
                        margin-bottom: var(--spacing-lg);
                        padding: var(--spacing-md);
                        background: var(--surface-container-low);
                        border-radius: var(--radius-md);
                    }
                    
                    .option-item .material-symbols-outlined {
                        color: var(--primary);
                        font-size: 20px;
                        flex-shrink: 0;
                    }
                    
                    .option-item strong {
                        color: var(--on-surface);
                        font-size: 0.875rem;
                        display: block;
                        margin-bottom: var(--spacing-xs);
                    }
                    
                    .option-item p {
                        color: var(--on-surface-variant);
                        font-size: 0.75rem;
                        margin: 0;
                    }
                    
                    .verification-actions {
                        display: flex;
                        flex-direction: column;
                        gap: var(--spacing-md);
                        margin-bottom: var(--spacing-xl);
                    }
                    
                    .verification-actions .btn {
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        gap: var(--spacing-sm);
                        width: 100%;
                    }
                    
                    .verification-help {
                        text-align: center;
                        padding-top: var(--spacing-lg);
                        border-top: 1px solid var(--outline-variant);
                    }
                    
                    .help-text {
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        gap: var(--spacing-sm);
                        color: var(--on-surface-variant);
                        font-size: 0.875rem;
                        margin: 0;
                    }
                    
                    .help-text .material-symbols-outlined {
                        font-size: 16px;
                        color: var(--primary);
                    }
                    
                    .help-text a {
                        color: var(--primary);
                        text-decoration: none;
                        font-weight: 500;
                    }
                    
                    .help-text a:hover {
                        text-decoration: underline;
                    }
                    
                    @media (max-width: 640px) {
                        .modal-container {
                            width: 95%;
                            margin: var(--spacing-md);
                        }
                        
                        .modal-header,
                        .modal-body {
                            padding: var(--spacing-lg);
                        }
                        
                        .verification-actions {
                            flex-direction: column;
                        }
                    }
                </style>
            `;
            document.head.insertAdjacentHTML('beforeend', styles);
        }
    }

    function closeEmailVerificationPopup() {
        const modal = document.getElementById('emailVerificationModal');
        if (modal) {
            modal.remove();
        }
    }

    function resendVerificationEmail(email) {
        // Show loading state
        const btn = event.target;
        const originalContent = btn.innerHTML;
        btn.disabled = true;
        btn.innerHTML = '<span class="material-symbols-outlined">hourglass_empty</span> Sending...';

        // Send request to resend verification
        fetch('/core/auth.php', {
            method: 'POST',
            body: JSON.stringify({
                action: 'resend_verification',
                email: email
            }),
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            btn.disabled = false;
            btn.innerHTML = originalContent;
            
            if (data.success) {
                // Show success message
                showNotification('Verification email sent successfully! Please check your inbox.', 'success');
            } else {
                showNotification('Failed to send verification email. Please try again.', 'error');
            }
        })
        .catch(error => {
            btn.disabled = false;
            btn.innerHTML = originalContent;
            showNotification('Connection error. Please try again.', 'error');
        });
    }

    function openEmailClient(email) {
        // Open default email client
        window.location.href = `mailto:${email}?subject=Email Verification Required&body=Please verify your email address for your Bamenda City Council account.`;
    }

    function showNotification(message, type) {
        // Create notification element
        const notification = document.createElement('div');
        notification.className = `notification notification-${type}`;
        notification.innerHTML = `
            <span class="material-symbols-outlined">${type === 'success' ? 'check_circle' : 'error'}</span>
            <span>${message}</span>
        `;
        
        // Add styles if not already present
        if (!document.getElementById('notificationStyles')) {
            const notificationStyles = `
                <style id="notificationStyles">
                    .notification {
                        position: fixed;
                        top: 20px;
                        right: 20px;
                        display: flex;
                        align-items: center;
                        gap: var(--spacing-sm);
                        padding: var(--spacing-md) var(--spacing-lg);
                        border-radius: var(--radius-md);
                        box-shadow: var(--shadow-md);
                        z-index: 10001;
                        animation: slideInRight 0.3s ease-out;
                    }
                    
                    .notification-success {
                        background: var(--tertiary);
                        color: var(--on-tertiary);
                    }
                    
                    .notification-error {
                        background: var(--error);
                        color: var(--on-error);
                    }
                    
                    @keyframes slideInRight {
                        from {
                            opacity: 0;
                            transform: translateX(100%);
                        }
                        to {
                            opacity: 1;
                            transform: translateX(0);
                        }
                    }
                </style>
            `;
            document.head.insertAdjacentHTML('beforeend', notificationStyles);
        }
        
        document.body.appendChild(notification);
        
        // Remove after 3 seconds
        setTimeout(() => {
            notification.remove();
        }, 3000);
    }
});
</script>


