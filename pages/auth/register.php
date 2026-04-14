<?php
/**
 * Bamenda City Council E-Governance Platform
 * Registration Page
 */

// Set page metadata
$page_title = 'Register | Bamenda City Council';
$page_description = 'Create your Bamenda City Council e-governance account to access digital services and participate in civic activities.';
$page_keywords = 'register, sign up, Bamenda City Council, e-governance, digital services, create account';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Home', 'url' => '../index.php'],
    ['title' => 'Register', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
require_once __DIR__ . '/../../core/csrf-protection.php';
?>

<!-- Hero Section -->
<section class="hero auth-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda_hills_city_1775529316149.png">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Join Our Community</span>
            <h1 class="hero-title">Create Your Account</h1>
            <p class="hero-subtitle">
                Join the Bamenda City Council e-governance platform to access services, participate in decisions, and engage with your community.
            </p>
        </div>
    </div>
</section>

<!-- Registration Section -->
<section class="auth-section">
    <div class="container">
        <div class="auth-container">
            <div class="auth-card">
                <div class="auth-header">
                    <div class="auth-icon">
                        <span class="material-symbols-outlined">person_add</span>
                    </div>
                    <h2 class="auth-title">Create Account</h2>
                    <p class="auth-subtitle">Fill in your information to get started</p>
                </div>

                <form class="auth-form" id="registerForm" method="POST" action="/core/auth.php" data-ajax-custom="true">
                    <input type="hidden" name="action" value="register">
                    <?php echo CSRFProtection::getTokenField(); ?>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="first_name" class="form-label">
                                <span class="material-symbols-outlined">person</span>
                                First Name
                            </label>
                            <input 
                                type="text" 
                                id="first_name" 
                                name="first_name" 
                                class="form-input" 
                                placeholder="Enter your first name"
                                required
                                autocomplete="given-name"
                            >
                            <span class="form-error" id="first_name-error"></span>
                        </div>

                        <div class="form-group">
                            <label for="last_name" class="form-label">
                                <span class="material-symbols-outlined">person</span>
                                Last Name
                            </label>
                            <input 
                                type="text" 
                                id="last_name" 
                                name="last_name" 
                                class="form-input" 
                                placeholder="Enter your last name"
                                required
                                autocomplete="family-name"
                            >
                            <span class="form-error" id="last_name-error"></span>
                        </div>
                    </div>

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
                        <label for="phone" class="form-label">
                            <span class="material-symbols-outlined">phone</span>
                            Phone Number
                        </label>
                        <input 
                            type="tel" 
                            id="phone" 
                            name="phone" 
                            class="form-input" 
                            placeholder="+237 XXX XXX XXX"
                            autocomplete="tel"
                        >
                        <span class="form-error" id="phone-error"></span>
                    </div>

                    <div class="form-group">
                        <label for="date_of_birth" class="form-label">
                            <span class="material-symbols-outlined">cake</span>
                            Date of Birth
                        </label>
                        <input 
                            type="date" 
                            id="date_of_birth" 
                            name="date_of_birth" 
                            class="form-input"
                            autocomplete="bday"
                        >
                        <span class="form-error" id="date_of_birth-error"></span>
                    </div>

                    <div class="form-group">
                        <label for="gender" class="form-label">
                            <span class="material-symbols-outlined">wc</span>
                            Gender
                        </label>
                        <select id="gender" name="gender" class="form-input">
                            <option value="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                        <span class="form-error" id="gender-error"></span>
                    </div>

                    <div class="form-group">
                        <label for="nationality" class="form-label">
                            <span class="material-symbols-outlined">flag</span>
                            Nationality
                        </label>
                        <input 
                            type="text" 
                            id="nationality" 
                            name="nationality" 
                            class="form-input" 
                            placeholder="Enter your nationality"
                            autocomplete="country-name"
                        >
                        <span class="form-error" id="nationality-error"></span>
                    </div>

                    <div class="form-group">
                        <label for="id_number" class="form-label">
                            <span class="material-symbols-outlined">badge</span>
                            National ID Number
                        </label>
                        <input 
                            type="text" 
                            id="id_number" 
                            name="id_number" 
                            class="form-input" 
                            placeholder="Enter your national ID number"
                            autocomplete="off"
                        >
                        <span class="form-error" id="id_number-error"></span>
                    </div>

                    <div class="form-group">
                        <label for="address" class="form-label">
                            <span class="material-symbols-outlined">home</span>
                            Address
                        </label>
                        <textarea 
                            id="address" 
                            name="address" 
                            class="form-input" 
                            rows="3"
                            placeholder="Enter your residential address"
                            autocomplete="street-address"
                        ></textarea>
                        <span class="form-error" id="address-error"></span>
                    </div>

                    <div class="form-group">
                        <label for="role" class="form-label">
                            <span class="material-symbols-outlined">account_balance</span>
                            Account Type
                        </label>
                        <select id="role" name="role" class="form-input" required>
                            <option value="">Select Account Type</option>
                            <option value="citizen">Citizen - Access public services</option>
                            <option value="staff">Staff - Municipal employee access</option>
                            <option value="admin">Administrator - Full system access</option>
                        </select>
                        <div class="form-help" id="role-help">
                            Select your account type based on your relationship with Bamenda City Council
                        </div>
                        <span class="form-error" id="role-error"></span>
                    </div>

                    <div class="form-row">
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
                                    placeholder="Create a strong password"
                                    required
                                    autocomplete="new-password"
                                >
                                <button type="button" class="password-toggle" id="togglePassword">
                                    <span class="material-symbols-outlined">visibility</span>
                                </button>
                            </div>
                            <span class="form-error" id="password-error"></span>
                            <div class="password-strength" id="passwordStrength">
                                <div class="strength-bar"></div>
                                <span class="strength-text">Enter a password</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="confirm_password" class="form-label">
                                <span class="material-symbols-outlined">password</span>
                                Confirm Password
                            </label>
                            <div class="password-input-container">
                                <input 
                                    type="password" 
                                    id="confirm_password" 
                                    name="confirm_password" 
                                    class="form-input" 
                                    placeholder="Confirm your password"
                                    required
                                    autocomplete="new-password"
                                >
                                <button type="button" class="password-toggle" id="toggleConfirmPassword">
                                    <span class="material-symbols-outlined">visibility</span>
                                </button>
                            </div>
                            <span class="form-error" id="confirm_password-error"></span>
                        </div>
                    </div>

                    <div class="form-group checkbox-group">
                        <label class="checkbox-label">
                            <input type="checkbox" id="terms" name="terms" value="1" required>
                            <span class="checkbox-custom"></span>
                            I agree to the <a href="../pages/citizen-services/terms.php" target="_blank">Terms and Conditions</a> and <a href="../pages/citizen-services/privacy.php" target="_blank">Privacy Policy</a>
                        </label>
                        <span class="form-error" id="terms-error"></span>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary btn-lg btn-full" id="registerBtn">
                            <span class="material-symbols-outlined">person_add</span>
                            Create Account
                        </button>
                    </div>

                    <div class="auth-links">
                        <a href="login.php" class="auth-link">
                            <span class="material-symbols-outlined">login</span>
                            Already have an account? Sign In
                        </a>
                    </div>
                </form>
            </div>

            <div class="auth-info">
                <div class="info-card">
                    <h3 class="info-title">
                        <span class="material-symbols-outlined">security</span>
                        Account Requirements
                    </h3>
                    <ul class="info-list">
                        <li>Must be 18 years or older</li>
                        <li>Valid email address required</li>
                        <li>Cameroonian national ID recommended</li>
                        <li>Strong password (8+ characters)</li>
                        <li>One account per person</li>
                    </ul>
                </div>

                <div class="info-card">
                    <h3 class="info-title">
                        <span class="material-symbols-outlined">verified_user</span>
                        Benefits
                    </h3>
                    <ul class="info-list">
                        <li>Access all municipal services</li>
                        <li>Participate in civic decisions</li>
                        <li>Apply for permits and licenses</li>
                        <li>Join youth programs</li>
                        <li>Receive emergency alerts</li>
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
        <p>Creating account...</p>
    </div>
</div>

<?php
// Include footer
require_once __DIR__ . '/../../includes/footer.php';
?>

<style>
/* Registration Page Styles */
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
    grid-template-columns: 1.5fr 1fr;
    gap: var(--spacing-3xl);
    max-width: 1400px;
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

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--spacing-lg);
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

.password-strength {
    margin-top: var(--spacing-sm);
}

.strength-bar {
    height: 4px;
    background: var(--outline);
    border-radius: 2px;
    margin-bottom: var(--spacing-xs);
    transition: all 0.3s ease;
}

.strength-text {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.checkbox-group {
    margin-bottom: var(--spacing-xl);
}

.checkbox-label {
    display: flex;
    align-items: flex-start;
    gap: var(--spacing-sm);
    cursor: pointer;
    font-size: 0.875rem;
    color: var(--on-surface);
    line-height: 1.4;
}

.checkbox-custom {
    width: 20px;
    height: 20px;
    border: 2px solid var(--outline);
    border-radius: var(--radius-sm);
    margin-right: var(--spacing-sm);
    margin-top: 2px;
    position: relative;
    flex-shrink: 0;
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
    justify-content: center;
    align-items: center;
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
@media (max-width: 1024px) {
    .auth-container {
        grid-template-columns: 1fr;
        gap: var(--spacing-2xl);
    }
    
    .form-row {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
}

@media (max-width: 768px) {
    .auth-info {
        order: -1;
    }
    
    .auth-card {
        padding: var(--spacing-xl);
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const registerForm = document.getElementById('registerForm');
    const registerBtn = document.getElementById('registerBtn');
    const loadingOverlay = document.getElementById('loadingOverlay');
    const togglePassword = document.getElementById('togglePassword');
    const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirm_password');
    const passwordStrength = document.getElementById('passwordStrength');

    // Password visibility toggles
    togglePassword.addEventListener('click', function() {
        const type = passwordInput.type === 'password' ? 'text' : 'password';
        passwordInput.type = type;
        togglePassword.innerHTML = type === 'password' ? 
            '<span class="material-symbols-outlined">visibility</span>' : 
            '<span class="material-symbols-outlined">visibility_off</span>';
    });

    toggleConfirmPassword.addEventListener('click', function() {
        const type = confirmPasswordInput.type === 'password' ? 'text' : 'password';
        confirmPasswordInput.type = type;
        toggleConfirmPassword.innerHTML = type === 'password' ? 
            '<span class="material-symbols-outlined">visibility</span>' : 
            '<span class="material-symbols-outlined">visibility_off</span>';
    });

    // Password strength checker
    passwordInput.addEventListener('input', function() {
        const password = passwordInput.value;
        const strength = calculatePasswordStrength(password);
        updatePasswordStrength(strength);
    });

    // Form submission
    registerForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Clear previous errors
        document.querySelectorAll('.form-error').forEach(error => {
            error.style.display = 'none';
        });

        // Validate form
        const formData = new FormData(registerForm);
        let hasError = false;

        // Required fields validation
        const requiredFields = ['first_name', 'last_name', 'email', 'role', 'password', 'confirm_password', 'terms'];
        requiredFields.forEach(field => {
            const value = formData.get(field);
            if (!value || value.trim() === '') {
                const errorElement = document.getElementById(field + '-error');
                if (errorElement) {
                    errorElement.textContent = field === 'role' ? 'Please select an account type' : 'This field is required';
                    errorElement.style.display = 'block';
                }
                hasError = true;
            }
        });

        // Role validation
        const role = formData.get('role');
        if (role && !['citizen', 'staff', 'admin'].includes(role)) {
            document.getElementById('role-error').textContent = 'Invalid account type selected';
            document.getElementById('role-error').style.display = 'block';
            hasError = true;
        }

        // Email validation
        const email = formData.get('email').trim();
        if (email && !isValidEmail(email)) {
            document.getElementById('email-error').textContent = 'Please enter a valid email address';
            document.getElementById('email-error').style.display = 'block';
            hasError = true;
        }

        // Password validation
        const password = formData.get('password');
        const confirmPassword = formData.get('confirm_password');
        
        if (password && password.length < 8) {
            document.getElementById('password-error').textContent = 'Password must be at least 8 characters long';
            document.getElementById('password-error').style.display = 'block';
            hasError = true;
        }

        if (password !== confirmPassword) {
            document.getElementById('confirm_password-error').textContent = 'Passwords do not match';
            document.getElementById('confirm_password-error').style.display = 'block';
            hasError = true;
        }

        // Date of birth validation (must be 18+)
        const dateOfBirth = formData.get('date_of_birth');
        if (dateOfBirth) {
            const birthDate = new Date(dateOfBirth);
            const today = new Date();
            const age = today.getFullYear() - birthDate.getFullYear();
            const monthDiff = today.getMonth() - birthDate.getMonth();
            const dayDiff = today.getDate() - birthDate.getDate();
            const actualAge = monthDiff < 0 || (monthDiff === 0 && dayDiff < 0) ? age - 1 : age;
            
            if (actualAge < 18) {
                document.getElementById('date_of_birth-error').textContent = 'You must be at least 18 years old';
                document.getElementById('date_of_birth-error').style.display = 'block';
                hasError = true;
            }
        }

        if (hasError) return;

        // Show loading
        loadingOverlay.style.display = 'flex';
        registerBtn.disabled = true;
        registerBtn.innerHTML = '<span class="material-symbols-outlined">hourglass_empty</span> Creating account...';
        // Submit form
        fetch('/core/auth.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            loadingOverlay.style.display = 'none';
            registerBtn.disabled = false;
            registerBtn.innerHTML = '<span class="material-symbols-outlined">person_add</span> Create Account';

            if (data.success) {
                // Show success message
                showSuccessMessage('Account created successfully! Redirecting to login...');
                // Redirect to login after delay
                setTimeout(() => {
                    window.location.href = data.redirect || 'login.php';
                }, 2000);
            } else {
                // Show error
                if (data.message) {
                    const errorField = data.field || 'email';
                    document.getElementById(errorField + '-error').textContent = data.message;
                    document.getElementById(errorField + '-error').style.display = 'block';
                }
            }
        })
        .catch(error => {
            loadingOverlay.style.display = 'none';
            registerBtn.disabled = false;
            registerBtn.innerHTML = '<span class="material-symbols-outlined">person_add</span> Create Account';
            document.getElementById('email-error').textContent = 'Connection error. Please try again.';
            document.getElementById('email-error').style.display = 'block';
        });
    });

    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    function calculatePasswordStrength(password) {
        let strength = 0;
        
        // Length check
        if (password.length >= 8) strength += 25;
        if (password.length >= 12) strength += 25;
        
        // Complexity checks
        if (/[a-z]/.test(password)) strength += 10;
        if (/[A-Z]/.test(password)) strength += 10;
        if (/[0-9]/.test(password)) strength += 10;
        if (/[^a-zA-Z0-9]/.test(password)) strength += 20;
        
        return Math.min(strength, 100);
    }

    function updatePasswordStrength(strength) {
        const strengthBar = passwordStrength.querySelector('.strength-bar');
        const strengthText = passwordStrength.querySelector('.strength-text');
        
        strengthBar.style.width = strength + '%';
        
        if (strength < 30) {
            strengthBar.style.background = 'var(--error)';
            strengthText.textContent = 'Weak password';
        } else if (strength < 60) {
            strengthBar.style.background = 'var(--warning)';
            strengthText.textContent = 'Fair password';
        } else if (strength < 80) {
            strengthBar.style.background = 'var(--tertiary)';
            strengthText.textContent = 'Good password';
        } else {
            strengthBar.style.background = 'var(--primary)';
            strengthText.textContent = 'Strong password';
        }
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
});
</script>


