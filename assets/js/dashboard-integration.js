/**
 * Bamenda City Council E-Governance Platform
 * Dashboard Integration JavaScript
 * Real-time data loading and dashboard functionality
 */

const DASHBOARD_API = '/stitch1/api';
const DASHBOARD_CORE = '/stitch1/core';

// ===== DASHBOARD STATE =====
const dashboardState = {
    user: null,
    applications: [],
    payments: [],
    notifications: [],
    services: [],
    loading: true
};

// ===== NOTIFICATION SYSTEM =====
function showDashboardNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `dashboard-notification notification-${type}`;
    notification.innerHTML = `
        <span>${message}</span>
        <button class="close-btn">&times;</button>
    `;
    document.body.appendChild(notification);
    
    notification.querySelector('.close-btn').addEventListener('click', () => {
        notification.remove();
    });
    
    setTimeout(() => notification.remove(), 5000);
}

// ===== LOADER =====
function showDashboardLoader(show = true) {
    let loader = document.getElementById('dashboardLoader');
    if (!loader) {
        loader = document.createElement('div');
        loader.id = 'dashboardLoader';
        loader.className = 'dashboard-loader';
        loader.innerHTML = '<div class="spinner"></div>';
        document.body.appendChild(loader);
    }
    loader.style.display = show ? 'flex' : 'none';
}

// ===== API CALLS =====
async function fetchDashboardAPI(endpoint) {
    try {
        const response = await fetch(endpoint);
        if (!response.ok) throw new Error(`HTTP Error: ${response.status}`);
        return await response.json();
    } catch (error) {
        console.error('API Error:', error);
        showDashboardNotification('Failed to load data. Please refresh the page.', 'error');
        return null;
    }
}

// ===== LOAD DASHBOARD DATA =====
async function loadDashboardData() {
    showDashboardLoader(true);
    
    // Load all data in parallel
    const [profileData, applicationsData, paymentsData, notificationsData] = await Promise.all([
        fetchDashboardAPI(`${DASHBOARD_API}/profile-handler.php?action=get_profile`),
        fetchDashboardAPI(`${DASHBOARD_API}/profile-handler.php?action=get_applications`),
        fetchDashboardAPI(`${DASHBOARD_API}/profile-handler.php?action=get_payments`),
        fetchDashboardAPI(`${DASHBOARD_API}/profile-handler.php?action=get_notifications`)
    ]);
    
    if (profileData?.success) {
        dashboardState.user = profileData.data;
        updateUserProfile(profileData.data);
    }
    
    if (applicationsData?.success) {
        dashboardState.applications = applicationsData.data || [];
        updateApplicationsOverview(dashboardState.applications);
        updateRecentActivity(dashboardState.applications);
    }
    
    if (paymentsData?.success) {
        dashboardState.payments = paymentsData.data || [];
        updatePaymentsSummary(dashboardState.payments);
    }
    
    if (notificationsData?.success) {
        dashboardState.notifications = notificationsData.data || [];
        updateNotifications(dashboardState.notifications);
    }
    
    showDashboardLoader(false);
    dashboardState.loading = false;
}

// ===== UPDATE USER PROFILE SECTION =====
function updateUserProfile(user) {
    const userNameEl = document.querySelector('.user-info h3');
    const userEmailEl = document.querySelector('.user-info p');
    const userAvatarEl = document.querySelector('.profile-image');
    
    if (userNameEl) userNameEl.textContent = `${user.first_name} ${user.last_name}`;
    if (userEmailEl) userEmailEl.textContent = user.email;
    if (userAvatarEl) userAvatarEl.src = user.avatar_path || '/stitch1/assets/images/default-profile.jpg';
}

// ===== UPDATE QUICK STATS =====
function updateQuickStats(applications, payments) {
    const statsContainer = document.querySelector('.quick-stats');
    if (!statsContainer) return;
    
    const activeServices = applications.filter(a => a.status !== 'rejected').length;
    const pendingApps = applications.filter(a => a.status === 'pending' || a.status === 'under_review').length;
    const completedTasks = applications.filter(a => a.status === 'completed').length;
    
    const stats = statsContainer.querySelectorAll('.stat-item');
    if (stats[0]) stats[0].querySelector('.stat-number').textContent = activeServices;
    if (stats[1]) stats[1].querySelector('.stat-number').textContent = pendingApps;
    if (stats[2]) stats[2].querySelector('.stat-number').textContent = completedTasks;
}

// ===== UPDATE APPLICATIONS OVERVIEW =====
function updateApplicationsOverview(applications) {
    const servicesGrid = document.querySelector('.services-grid');
    if (!servicesGrid || applications.length === 0) return;
    
    servicesGrid.innerHTML = '';
    
    applications.slice(0, 3).forEach(app => {
        const statusClass = app.status === 'completed' ? 'active' : 
                           app.status === 'pending' || app.status === 'under_review' ? 'pending' : 'error';
        
        const serviceItem = document.createElement('div');
        serviceItem.className = 'service-item';
        serviceItem.innerHTML = `
            <div class="service-icon">
                <span class="material-symbols-outlined">assignment</span>
            </div>
            <div class="service-info">
                <h4>${app.title}</h4>
                <p>Status: <span class="status-badge ${statusClass}">${app.status}</span></p>
                <span class="service-date">Ref: ${app.reference_id}</span>
            </div>
            <div class="service-actions">
                <a href="profile.php" class="btn btn-sm btn-outline">View Details</a>
                ${app.status === 'completed' ? `<a href="/stitch1/api/export-handler.php?action=export_certificate&app_id=${app.id}" class="btn btn-sm btn-primary" download>Export</a>` : ''}
            </div>
        `;
        servicesGrid.appendChild(serviceItem);
    });
}

// ===== UPDATE RECENT ACTIVITY =====
function updateRecentActivity(applications) {
    const activityList = document.querySelector('.activity-list');
    if (!activityList || applications.length === 0) return;
    
    activityList.innerHTML = '';
    
    // Sort by submitted date (most recent first)
    const sortedApps = [...applications].sort((a, b) => 
        new Date(b.submitted_at) - new Date(a.submitted_at)
    ).slice(0, 5);
    
    sortedApps.forEach(app => {
        const iconClass = app.status === 'completed' ? 'success' : 
                         app.status === 'rejected' ? 'error' : 'pending';
        const icon = app.status === 'completed' ? 'check_circle' : 
                    app.status === 'rejected' ? 'cancel' : 'pending';
        
        const activityItem = document.createElement('div');
        activityItem.className = 'activity-item';
        activityItem.innerHTML = `
            <div class="activity-icon ${iconClass}">
                <span class="material-symbols-outlined">${icon}</span>
            </div>
            <div class="activity-content">
                <h4>${app.title}</h4>
                <p>${app.description || 'No description provided'}</p>
                <span class="activity-time">${formatTimeAgo(new Date(app.submitted_at))}</span>
            </div>
        `;
        activityList.appendChild(activityItem);
    });
}

// ===== UPDATE NOTIFICATIONS =====
function updateNotifications(notifications) {
    const notificationList = document.querySelector('.notification-list');
    const badgeEl = document.querySelector('.notification-badge');
    
    if (!notificationList) return;
    
    notificationList.innerHTML = '';
    const unreadCount = notifications.filter(n => !n.read_at).length;
    
    if (badgeEl) badgeEl.textContent = unreadCount;
    
    notifications.slice(0, 3).forEach(notif => {
        const notificationItem = document.createElement('div');
        notificationItem.className = `notification-item ${notif.read_at ? '' : 'unread'}`;
        
        const iconMap = {
            'info': 'info',
            'success': 'check_circle',
            'warning': 'warning',
            'error': 'error'
        };
        const icon = iconMap[notif.type] || 'notifications';
        
        notificationItem.innerHTML = `
            <div class="notification-icon ${notif.type || 'info'}">
                <span class="material-symbols-outlined">${icon}</span>
            </div>
            <div class="notification-content">
                <h4>${notif.title}</h4>
                <p>${notif.message}</p>
                <span class="notification-time">${formatTimeAgo(new Date(notif.created_at))}</span>
            </div>
            <button class="btn-close" onclick="dismissNotification(${notif.id})">&times;</button>
        `;
        notificationList.appendChild(notificationItem);
    });
}

// ===== UPDATE PAYMENTS SUMMARY =====
function updatePaymentsSummary(payments) {
    if (payments.length === 0) return;
    
    const totalPaid = payments
        .filter(p => p.status === 'paid')
        .reduce((sum, p) => sum + parseFloat(p.amount), 0);
    
    const outstanding = payments
        .filter(p => p.status !== 'paid')
        .reduce((sum, p) => sum + parseFloat(p.amount), 0);
    
    console.log(`Total Paid: GHS ${totalPaid}, Outstanding: GHS ${outstanding}`);
}

// ===== UTILITY FUNCTIONS =====
function formatTimeAgo(date) {
    const now = new Date();
    const diff = now - date;
    const seconds = Math.floor(diff / 1000);
    const minutes = Math.floor(seconds / 60);
    const hours = Math.floor(minutes / 60);
    const days = Math.floor(hours / 24);
    
    if (days > 0) return `${days} day${days > 1 ? 's' : ''} ago`;
    if (hours > 0) return `${hours} hour${hours > 1 ? 's' : ''} ago`;
    if (minutes > 0) return `${minutes} minute${minutes > 1 ? 's' : ''} ago`;
    return 'Just now';
}

// ===== QUICK ACTION HANDLERS =====
function setupQuickActions() {
    const actionItems = document.querySelectorAll('.action-item, [data-nav]');
    actionItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            const navKey = this.getAttribute('data-nav');
            if (navKey && window.navigateTo) {
                window.navigateTo(navKey);
            }
        });
    });
}

// ===== NOTIFICATION ACTIONS =====
async function dismissNotification(notifId) {
    // In production, would call API to mark as read
    const item = document.querySelector(`[data-notification-id="${notifId}"]`);
    if (item) item.remove();
}

// ===== PROFILE LINK =====
function setupProfileLink() {
    const profileLink = document.querySelector('[data-action="go-to-profile"]');
    if (profileLink) {
        profileLink.addEventListener('click', (e) => {
            e.preventDefault();
            window.location.href = '/stitch1/pages/citizen-services/profile.php';
        });
    }
}

// ===== AUTO-REFRESH =====
function setupAutoRefresh() {
    // Refresh every 5 minutes
    setInterval(() => {
        console.log('Auto-refreshing dashboard data...');
        loadDashboardData();
    }, 5 * 60 * 1000);
}

// ===== INITIALIZATION =====
document.addEventListener('DOMContentLoaded', () => {
    loadDashboardData();
    setupQuickActions();
    setupProfileLink();
    setupAutoRefresh();
    addDashboardStyles();
});

// ===== ADD DASHBOARD STYLES =====
function addDashboardStyles() {
    const style = document.createElement('style');
    style.textContent = `
        .dashboard-notification {
            position: fixed;
            top: 20px;
            right: 20px;
            background: var(--surface);
            border: 1px solid var(--outline);
            padding: 1rem 1.5rem;
            border-radius: 0.5rem;
            box-shadow: var(--shadow-lg);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            z-index: 1000;
            animation: slideIn 0.3s ease;
            max-width: 500px;
        }
        
        .dashboard-notification-success {
            background: var(--success-container);
            color: var(--on-success-container);
            border-color: var(--success);
        }
        
        .dashboard-notification-error {
            background: var(--error-container);
            color: var(--on-error-container);
            border-color: var(--error);
        }
        
        .dashboard-notification-warning {
            background: var(--warning-container);
            color: var(--on-warning-container);
            border-color: var(--warning);
        }
        
        @keyframes slideIn {
            from {
                transform: translateX(400px);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        
        .dashboard-loader {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 999;
        }
        
        .spinner {
            width: 50px;
            height: 50px;
            border: 4px solid var(--outline);
            border-top-color: var(--primary);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        
        .btn-close {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--on-surface-variant);
            padding: 0;
            margin: 0;
        }
        
        .status-badge {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 0.25rem;
            font-size: 0.75rem;
            font-weight: 600;
        }
        
        .status-badge.active {
            background: var(--success-container);
            color: var(--on-success-container);
        }
        
        .status-badge.pending {
            background: var(--warning-container);
            color: var(--on-warning-container);
        }
        
        .status-badge.error,
        .status-badge.rejected {
            background: var(--error-container);
            color: var(--on-error-container);
        }
        
        .activity-icon,
        .notification-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-size: 1.25rem;
        }
        
        .activity-icon.success,
        .notification-icon.success {
            background: var(--success-container);
            color: var(--on-success-container);
        }
        
        .activity-icon.pending,
        .notification-icon.pending,
        .notification-icon.warning {
            background: var(--warning-container);
            color: var(--on-warning-container);
        }
        
        .activity-icon.error,
        .notification-icon.error {
            background: var(--error-container);
            color: var(--on-error-container);
        }
        
        .notification-icon.info {
            background: var(--primary-container);
            color: var(--on-primary-container);
        }
    `;
    document.head.appendChild(style);
}
