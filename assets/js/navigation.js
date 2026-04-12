/**
 * Bamenda City Council E-Governance Platform
 * Navigation & Links Manager
 * Centralizes all internal navigation links
 */

const LINKS = {
    // Authentication
    login: '/stitch1/pages/auth/login.php',
    register: '/stitch1/pages/auth/register.php',
    logout: '/stitch1/pages/auth/logout.php',
    
    // Dashboard & Profile
    dashboard: '/stitch1/pages/citizen-services/dashboard.php',
    profile: '/stitch1/pages/citizen-services/profile.php',
    
    // Citizen Services
    services: '/stitch1/pages/citizen-services/services.php',
    businessLicense: '/stitch1/pages/citizen-services/business-license.php',
    propertyRegistry: '/stitch1/pages/citizen-services/property-registry.php',
    permits: '/stitch1/pages/citizen-services/permits.php',
    payments: '/stitch1/pages/citizen-services/payments.php',
    taxPortal: '/stitch1/pages/citizen-services/tax-portal.php',
    serviceHistory: '/stitch1/pages/citizen-services/service-history.php',
    applications: '/stitch1/pages/citizen-services/business-license-application.php',
    
    // Business Services
    businessDirectory: '/stitch1/pages/business/directory.php',
    marketTrader: '/stitch1/pages/business/market-trader.php',
    businessAnalytics: '/stitch1/pages/business/analytics.php',
    
    // Civic Engagement
    communityForum: '/stitch1/pages/civic-engagement/community.php',
    petitions: '/stitch1/pages/civic-engagement/petitions.php',
    consultations: '/stitch1/pages/civic-engagement/consultations.php',
    feedback: '/stitch1/pages/civic-engagement/feedback.php',
    
    // Emergency Services
    emergency: '/stitch1/pages/emergency/emergency.php',
    
    // Administration
    adminDashboard: '/stitch1/pages/administration/dashboard.php',
    analytics: '/stitch1/pages/administration/analytics.php',
    users: '/stitch1/pages/administration/users.php',
    settings: '/stitch1/pages/administration/settings.php',
    
    // APIs
    profileAPI: '/stitch1/api/profile-handler.php',
    uploadAPI: '/stitch1/api/file-upload-handler.php',
    paymentAPI: '/stitch1/api/payment-handler.php',
    searchAPI: '/stitch1/api/applications-search.php',
    exportAPI: '/stitch1/api/export-handler.php'
};

/**
 * Navigate to a page
 */
function navigateTo(pageName) {
    const url = LINKS[pageName];
    if (!url) {
        console.error(`Page not found: ${pageName}`);
        return;
    }
    window.location.href = url;
}

/**
 * Open page in new tab
 */
function openInNewTab(pageName) {
    const url = LINKS[pageName];
    if (!url) {
        console.error(`Page not found: ${pageName}`);
        return;
    }
    window.open(url, '_blank');
}

/**
 * Get link URL
 */
function getLink(pageName) {
    return LINKS[pageName] || '#';
}

/**
 * Setup navigation links for dashboard
 */
function setupDashboardNavigation() {
    // Dashboard to Profile
    const profileBtn = document.querySelector('[data-nav="profile"]');
    if (profileBtn) {
        profileBtn.addEventListener('click', () => navigateTo('profile'));
        profileBtn.setAttribute('href', getLink('profile'));
    }
    
    // Dashboard to Services
    const servicesBtn = document.querySelector('[data-nav="services"]');
    if (servicesBtn) {
        servicesBtn.addEventListener('click', () => navigateTo('services'));
        servicesBtn.setAttribute('href', getLink('services'));
    }
    
    // Dashboard to Payments
    const paymentsBtn = document.querySelector('[data-nav="payments"]');
    if (paymentsBtn) {
        paymentsBtn.addEventListener('click', () => navigateTo('payments'));
        paymentsBtn.setAttribute('href', getLink('payments'));
    }
    
    // All quick action items
    const quickActions = document.querySelectorAll('.action-item');
    quickActions.forEach(action => {
        const href = action.getAttribute('href');
        if (href && !href.startsWith('http')) {
            action.addEventListener('click', (e) => {
                e.preventDefault();
                navigateTo(camelCase(href.replace('.php', '')));
            });
        }
    });
}

/**
 * Setup navigation links in header
 */
function setupHeaderNavigation() {
    // Profile link in user menu
    const profileMenu = document.querySelector('[data-menu="profile"]');
    if (profileMenu) {
        profileMenu.addEventListener('click', () => navigateTo('profile'));
    }
    
    // Settings link
    const settingsMenu = document.querySelector('[data-menu="settings"]');
    if (settingsMenu) {
        settingsMenu.addEventListener('click', () => navigateTo('settings'));
    }
    
    // Logout link
    const logoutMenu = document.querySelector('[data-menu="logout"]');
    if (logoutMenu) {
        logoutMenu.addEventListener('click', () => navigateTo('logout'));
    }
}

/**
 * Setup breadcrumb navigation
 */
function setupBreadcrumbs() {
    const breadcrumbs = document.querySelector('.breadcrumbs');
    if (!breadcrumbs) return;
    
    const items = breadcrumbs.querySelectorAll('a');
    items.forEach(item => {
        const text = item.textContent.toLowerCase();
        item.addEventListener('click', (e) => {
            e.preventDefault();
            
            // Match link text to page
            if (text.includes('dashboard')) navigateTo('dashboard');
            if (text.includes('profile')) navigateTo('profile');
            if (text.includes('services')) navigateTo('services');
            if (text.includes('payment')) navigateTo('payments');
            if (text.includes('license')) navigateTo('businessLicense');
        });
    });
}

/**
 * Convert kebab-case to camelCase
 */
function camelCase(str) {
    return str.replace(/-([a-z])/g, g => g[1].toUpperCase());
}

/**
 * Create breadcrumb trail
 */
function createBreadcrumb(pageName, pageTitle) {
    const breadcrumb = document.querySelector('.breadcrumbs');
    if (!breadcrumb) return;
    
    const item = document.createElement('span');
    item.className = 'breadcrumb-item';
    item.innerHTML = `
        <a href="${getLink(pageName)}">${pageTitle}</a>
        <span class="separator">/</span>
    `;
    breadcrumb.appendChild(item);
}

/**
 * Highlight current page in navigation
 */
function highlightCurrentPage() {
    const currentPage = window.location.pathname;
    
    document.querySelectorAll('[data-nav]').forEach(item => {
        const href = item.getAttribute('href');
        if (href && currentPage.includes(href)) {
            item.classList.add('active');
        }
    });
}

/**
 * Setup notification click handlers
 */
function setupNotificationLinks() {
    const notifications = document.querySelectorAll('.notification-item');
    
    notifications.forEach(notif => {
        notif.addEventListener('click', function() {
            const type = this.getAttribute('data-type');
            const id = this.getAttribute('data-id');
            
            // Navigate based on notification type
            if (type === 'application') {
                navigateTo('profile');
            } else if (type === 'payment') {
                navigateTo('payments');
            } else if (type === 'service') {
                navigateTo('services');
            }
        });
    });
}

/**
 * Setup external document links
 */
function setupExternalLinks() {
    const externalLinks = document.querySelectorAll('[data-external="true"]');
    
    externalLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            if (!e.metaKey && !e.ctrlKey && !e.shiftKey) {
                e.preventDefault();
                openInNewTab(link.getAttribute('data-page'));
            }
        });
    });
}

/**
 * Generate sitemap for navigation
 */
function generateSitemap() {
    return {
        pages: Object.keys(LINKS).length,
        categories: {
            auth: ['login', 'register', 'logout'],
            dashboard: ['dashboard', 'profile'],
            citizenServices: ['services', 'businessLicense', 'propertyRegistry', 'permits', 'payments'],
            business: ['businessDirectory', 'marketTrader'],
            civic: ['communityForum', 'petitions', 'consultations', 'feedback'],
            admin: ['adminDashboard', 'analytics', 'users', 'settings'],
            apis: ['profileAPI', 'uploadAPI', 'paymentAPI', 'searchAPI', 'exportAPI']
        }
    };
}

/**
 * Initialize all navigation on page load
 */
document.addEventListener('DOMContentLoaded', () => {
    setupDashboardNavigation();
    setupHeaderNavigation();
    setupBreadcrumbs();
    setupNotificationLinks();
    setupExternalLinks();
    highlightCurrentPage();
    
    console.log('Navigation initialized', generateSitemap());
});

/**
 * Global functions for inline onclick handlers
 */
window.navigateTo = navigateTo;
window.openInNewTab = openInNewTab;
window.getLink = getLink;

// Export for testing
if (typeof module !== 'undefined' && module.exports) {
    module.exports = {
        LINKS,
        navigateTo,
        openInNewTab,
        getLink,
        generateSitemap
    };
}
