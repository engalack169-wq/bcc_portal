/**
 * Bamenda City Council E-Governance Platform
 * Main JavaScript File
 */

// Global Variables
let isDarkMode = false;
let currentLanguage = 'en';

// Performance Optimized Loading
let isInitialized = false;

// Initialize immediately for faster loading
(function() {
    // Critical path optimization - load essentials first
    initializeCriticalFeatures();
    
    // Defer non-critical features
    requestIdleCallback(() => {
        initializeNonCriticalFeatures();
    });
})();

function initializeCriticalFeatures() {
    if (isInitialized) return;
    
    // Load user preferences synchronously
    loadUserPreferences();
    
    // Initialize theme immediately
    initializeTheme();
    
    // Initialize navigation for instant interaction
    initializeNavigation();
    
    isInitialized = true;
    console.log('Bamenda City Council Platform - Critical features loaded');
}

function initializeNonCriticalFeatures() {
    // Initialize less critical features after page is interactive
    setTimeout(() => {
        initializeLanguage();
        initializeForms();
        initializeAnimations();
        initializeAccessibility();
        console.log('Bamenda City Council Platform - All features initialized');
    }, 100);
}

// User Preferences
function loadUserPreferences() {
    // Load theme preference
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark') {
        document.documentElement.classList.add('dark');
        isDarkMode = true;
    }
    
    // Load language preference
    const savedLanguage = localStorage.getItem('language');
    if (savedLanguage) {
        currentLanguage = savedLanguage;
    }
    
    // Load user session
    const userSession = sessionStorage.getItem('userSession');
    if (userSession) {
        updateUserUI(JSON.parse(userSession));
    }
}

function saveUserPreference(key, value) {
    localStorage.setItem(key, value);
}

// Theme Management
function initializeTheme() {
    const themeToggle = document.getElementById('theme-toggle');
    if (themeToggle) {
        themeToggle.addEventListener('click', toggleTheme);
    }
    
    // Update theme toggle icon
    updateThemeIcon();
}

function toggleTheme() {
    isDarkMode = !isDarkMode;
    
    if (isDarkMode) {
        document.documentElement.classList.add('dark');
        saveUserPreference('theme', 'dark');
    } else {
        document.documentElement.classList.remove('dark');
        saveUserPreference('theme', 'light');
    }
    
    updateThemeIcon();
    
    // Add transition effect
    document.body.style.transition = 'background-color 0.3s ease, color 0.3s ease';
}

function updateThemeIcon() {
    const themeToggle = document.getElementById('theme-toggle');
    if (themeToggle) {
        const icon = themeToggle.querySelector('.material-symbols-outlined');
        if (icon) {
            icon.textContent = isDarkMode ? 'light_mode' : 'dark_mode';
        }
    }
}

// Language Management
function initializeLanguage() {
    const languageToggle = document.getElementById('language-toggle');
    if (languageToggle) {
        languageToggle.addEventListener('click', showLanguageModal);
    }
}

function showLanguageModal() {
    // Create language selection modal
    const modal = createModal('Select Language', `
        <div class="language-options">
            <button class="language-option ${currentLanguage === 'en' ? 'active' : ''}" onclick="setLanguage('en')">
                <span class="flag">🇬🇧</span>
                <span>English</span>
            </button>
            <button class="language-option ${currentLanguage === 'fr' ? 'active' : ''}" onclick="setLanguage('fr')">
                <span class="flag">🇫🇷</span>
                <span>Français</span>
            </button>
            <button class="language-option ${currentLanguage === 'pid' ? 'active' : ''}" onclick="setLanguage('pid')">
                <span class="flag">🇨🇲</span>
                <span>Pidgin English</span>
            </button>
        </div>
    `);
    
    document.body.appendChild(modal);
}

function setLanguage(lang) {
    currentLanguage = lang;
    saveUserPreference('language', lang);
    
    // Update UI text based on language
    updateUILanguage(lang);
    
    // Close modal
    closeModal();
    
    // Show notification
    showNotification(`Language changed to ${getLanguageName(lang)}`, 'success');
}

function getLanguageName(lang) {
    const languages = {
        'en': 'English',
        'fr': 'Français',
        'pid': 'Pidgin English'
    };
    return languages[lang] || 'English';
}

function updateUILanguage(lang) {
    // Implementation for multi-language support
    // This would update all text elements based on the selected language
    console.log(`Updating UI to ${lang}`);
}

// Navigation
function initializeNavigation() {
    // Mobile navigation handled in navigation.php
    // Add any additional navigation logic here
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Active navigation highlighting
    updateActiveNavigation();
}

function updateActiveNavigation() {
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll('.nav-link, .mobile-nav-link, .bottom-nav-item');
    
    navLinks.forEach(link => {
        const href = link.getAttribute('href');
        if (href && currentPath.includes(href)) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
}

// Form Handling
function initializeForms() {
    // Add form validation
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', handleFormSubmit);
    });
    
    // Add input validation
    const inputs = document.querySelectorAll('.form-input, .form-select, .form-textarea');
    inputs.forEach(input => {
        input.addEventListener('blur', () => validateInput(input));
        input.addEventListener('input', () => clearInputError(input));
    });
}

function handleFormSubmit(e) {
    e.preventDefault();
    
    const form = e.target;
    const formData = new FormData(form);
    
    // Special handling for login form
    if (form.id === 'loginForm' && !form.hasAttribute('data-ajax-custom')) {
        handleLoginSubmit(form, formData);
        return;
    }
    
    // Skip if form has custom handler
    if (form.hasAttribute('data-ajax-custom')) {
        return;
    }
    
    // Validate form
    if (!validateForm(form)) {
        showNotification('Please fill in all required fields correctly.', 'error');
        return;
    }
    
    // Show loading state
    const submitBtn = form.querySelector('button[type="submit"]');
    if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span class="material-symbols-outlined loading">hourglass_empty</span> Processing...';
    }
    
    // Simulate form submission
    setTimeout(() => {
        showNotification('Form submitted successfully!', 'success');
        form.reset();
        
        if (submitBtn) {
            submitBtn.disabled = false;
            submitBtn.innerHTML = submitBtn.getAttribute('data-original-text') || 'Submit';
        }
    }, 2000);
}

function handleLoginSubmit(form, formData) {
    // Validate form
    if (!validateForm(form)) {
        showNotification('Please fill in all required fields correctly.', 'error');
        return;
    }
    
    // Show loading state
    const submitBtn = form.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    submitBtn.disabled = true;
    submitBtn.innerHTML = '<span class="material-symbols-outlined loading">hourglass_empty</span> Signing In...';
    
    // Submit login via AJAX
    const url = window.location.origin + '/core/auth.php';
    console.log('Submitting to:', url);
    
    fetch(url, {
        method: 'POST',
        body: formData
    })
    .then(async response => {
        console.log('Response status:', response.status);
        const text = await response.text();
        console.log('Response text:', text);
        let data;
        try {
            data = JSON.parse(text);
        } catch (parseError) {
            throw new Error(text || 'Invalid server response');
        }
        return { response, data };
    })
    .then(({ response, data }) => {
        if (!response.ok) {
            throw new Error(data.message || 'Login failed. Please try again.');
        }

        if (data.success) {
            showNotification('Login successful! Redirecting...', 'success');
            // Redirect to dashboard
            setTimeout(() => {
                window.location.href = data.redirect;
            }, 1000);
        } else {
            showNotification(data.message || 'Login failed. Please try again.', 'error');
        }
    })
    .catch(error => {
        console.error('Login error:', error);
        showNotification(error.message || 'Connection error. Please try again.', 'error');
    })
    .finally(() => {
        // Reset button
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalText;
    });
}

function validateForm(form) {
    let isValid = true;
    const requiredFields = form.querySelectorAll('[required]');
    
    requiredFields.forEach(field => {
        if (!validateInput(field)) {
            isValid = false;
        }
    });
    
    return isValid;
}

function validateInput(input) {
    const value = input.value.trim();
    let isValid = true;
    let errorMessage = '';
    
    // Required validation
    if (input.hasAttribute('required') && !value) {
        isValid = false;
        errorMessage = 'This field is required';
    }
    
    // Email validation
    if (input.type === 'email' && value) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(value)) {
            isValid = false;
            errorMessage = 'Please enter a valid email address';
        }
    }
    
    // Phone validation
    if (input.type === 'tel' && value) {
        const phoneRegex = /^\+?[\d\s\-\(\)]+$/;
        if (!phoneRegex.test(value)) {
            isValid = false;
            errorMessage = 'Please enter a valid phone number';
        }
    }
    
    // Number validation
    if (input.type === 'number' && value) {
        const num = parseFloat(value);
        const min = parseFloat(input.getAttribute('min'));
        const max = parseFloat(input.getAttribute('max'));
        
        if (min && num < min) {
            isValid = false;
            errorMessage = `Value must be at least ${min}`;
        }
        if (max && num > max) {
            isValid = false;
            errorMessage = `Value must be at most ${max}`;
        }
    }
    
    // Show or hide error
    if (!isValid) {
        showInputError(input, errorMessage);
    } else {
        clearInputError(input);
    }
    
    return isValid;
}

function showInputError(input, message) {
    input.classList.add('error');
    
    let errorElement = input.parentNode.querySelector('.error-message');
    if (!errorElement) {
        errorElement = document.createElement('span');
        errorElement.className = 'error-message';
        input.parentNode.appendChild(errorElement);
    }
    
    errorElement.textContent = message;
}

function clearInputError(input) {
    input.classList.remove('error');
    
    const errorElement = input.parentNode.querySelector('.error-message');
    if (errorElement) {
        errorElement.remove();
    }
}

// Animations
function initializeAnimations() {
    // Intersection Observer for fade-in animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    // Observe elements for animation
    document.querySelectorAll('.fade-in-on-scroll').forEach(el => {
        observer.observe(el);
    });
}

// Accessibility
function initializeAccessibility() {
    // Keyboard navigation
    document.addEventListener('keydown', handleKeyboardNavigation);
    
    // Focus management
    initializeFocusManagement();
    
    // Screen reader announcements
    initializeScreenReaderSupport();
}

function handleKeyboardNavigation(e) {
    // ESC key to close modals
    if (e.key === 'Escape') {
        closeModal();
    }
    
    // Tab key navigation enhancement
    if (e.key === 'Tab') {
        // Add visual focus indicator
        document.body.classList.add('keyboard-navigation');
    }
}

function initializeFocusManagement() {
    // Add focus indicators
    const focusableElements = document.querySelectorAll('button, a, input, select, textarea, [tabindex]:not([tabindex="-1"])');
    
    focusableElements.forEach(element => {
        element.addEventListener('focus', () => {
            element.classList.add('focused');
        });
        
        element.addEventListener('blur', () => {
            element.classList.remove('focused');
        });
    });
}

function initializeScreenReaderSupport() {
    // Announce dynamic content changes
    const announcer = document.createElement('div');
    announcer.setAttribute('aria-live', 'polite');
    announcer.setAttribute('aria-atomic', 'true');
    announcer.className = 'sr-only';
    document.body.appendChild(announcer);
    
    // Make announcements available globally
    window.announceToScreenReader = function(message) {
        announcer.textContent = message;
        setTimeout(() => {
            announcer.textContent = '';
        }, 1000);
    };
}

// Modal Functions
function createModal(title, content) {
    const modal = document.createElement('div');
    modal.className = 'modal-overlay';
    modal.innerHTML = `
        <div class="modal" role="dialog" aria-modal="true" aria-labelledby="modal-title">
            <div class="modal-header">
                <h2 id="modal-title">${title}</h2>
                <button class="modal-close" onclick="closeModal()" aria-label="Close modal">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            <div class="modal-body">
                ${content}
            </div>
        </div>
    `;
    
    // Close modal on overlay click
    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            closeModal();
        }
    });
    
    return modal;
}

function closeModal() {
    const modal = document.querySelector('.modal-overlay');
    if (modal) {
        modal.remove();
        document.body.style.overflow = '';
    }
}

// Notification System
function showNotification(message, type = 'info', duration = 5000) {
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.innerHTML = `
        <div class="notification-content">
            <span class="material-symbols-outlined">${getNotificationIcon(type)}</span>
            <span class="notification-message">${message}</span>
            <button class="notification-close" onclick="this.parentElement.parentElement.remove()">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>
    `;
    
    // Add to container
    let container = document.querySelector('.notification-container');
    if (!container) {
        container = document.createElement('div');
        container.className = 'notification-container';
        document.body.appendChild(container);
    }
    
    container.appendChild(notification);
    
    // Auto remove
    setTimeout(() => {
        notification.remove();
    }, duration);
    
    // Announce to screen readers
    if (window.announceToScreenReader) {
        window.announceToScreenReader(`${type}: ${message}`);
    }
}

function getNotificationIcon(type) {
    const icons = {
        'success': 'check_circle',
        'error': 'error',
        'warning': 'warning',
        'info': 'info'
    };
    return icons[type] || 'info';
}

// User Management
function updateUserUI(userSession) {
    // Update UI based on user session
    const profileLinks = document.querySelectorAll('[href*="profile"]');
    const loginLinks = document.querySelectorAll('[href*="login"]');
    const registerLinks = document.querySelectorAll('[href*="register"]');
    
    if (userSession && userSession.isLoggedIn) {
        // Show profile, hide login/register
        profileLinks.forEach(link => link.style.display = '');
        loginLinks.forEach(link => link.style.display = 'none');
        registerLinks.forEach(link => link.style.display = 'none');
        
        // Update user name if available
        const userNameElements = document.querySelectorAll('.user-name');
        userNameElements.forEach(el => {
            el.textContent = userSession.name || 'User';
        });
    } else {
        // Show login/register, hide profile
        profileLinks.forEach(link => link.style.display = 'none');
        loginLinks.forEach(link => link.style.display = '');
        registerLinks.forEach(link => link.style.display = '');
    }
}

// Utility Functions
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

function throttle(func, limit) {
    let inThrottle;
    return function() {
        const args = arguments;
        const context = this;
        if (!inThrottle) {
            func.apply(context, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    };
}

// Service Worker Registration (for PWA)
if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        navigator.serviceWorker.register('/sw.js')
            .then(registration => {
                console.log('SW registered: ', registration);
            })
            .catch(registrationError => {
                console.log('SW registration failed: ', registrationError);
            });
    });
}

// Error Handling
window.addEventListener('error', function(e) {
    console.error('JavaScript error:', e.error);
    showNotification('An unexpected error occurred. Please try again.', 'error');
});

window.addEventListener('unhandledrejection', function(e) {
    console.error('Unhandled promise rejection:', e.reason);
    showNotification('A network error occurred. Please check your connection.', 'error');
});

// Performance Monitoring - Optimized for 1s target
window.addEventListener('load', function() {
    if ('performance' in window) {
        const loadTime = performance.timing.loadEventEnd - performance.timing.navigationStart;
        console.log(`Page load time: ${loadTime}ms`);
        
        // Track performance metrics - updated threshold for 1s target
        if (loadTime > 1500) {
            console.warn('Page load time exceeds 1.5s target');
            // Implement performance optimizations
            optimizePagePerformance();
        }
        
        // Log success if under 1s
        if (loadTime <= 1000) {
            console.log('✅ Page loaded within 1s target!');
        }
    }
});

// Performance optimization function
function optimizePagePerformance() {
    // Defer non-critical images
    const images = document.querySelectorAll('img[data-src]');
    images.forEach(img => {
        img.loading = 'lazy';
    });
    
    // Preload critical resources
    const criticalLinks = document.querySelectorAll('link[rel="preload"]');
    criticalLinks.forEach(link => {
        link.rel = 'preload';
    });
}

// Export functions for global access
window.BamendaCouncil = {
    toggleTheme,
    setLanguage,
    showNotification,
    createModal,
    closeModal,
    validateInput,
    announceToScreenReader: window.announceToScreenReader
};
