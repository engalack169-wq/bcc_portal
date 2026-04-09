<?php
/**
 * Bamenda City Council E-Governance Platform
 * Admin Dashboard Page
 */

// Include access control
require_once __DIR__ . '/../../core/access-control.php';

// Require admin role to access this page
require_role('admin');

// Set page metadata
$page_title = 'Admin Dashboard | Bamenda City Council';
$page_description = 'Administrative dashboard for managing city services, monitoring analytics, and overseeing municipal operations.';
$page_keywords = 'admin dashboard, municipal management, city administration, analytics, Bamenda council';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Admin', 'url' => '#'],
    ['title' => 'Dashboard', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Admin Dashboard Layout -->
<div class="admin-dashboard">
    <!-- Sidebar Navigation -->
<aside class="admin-sidebar">
    <div class="sidebar-header">
        <div class="admin-profile">
            <img src="../../assets/images/default-profile.jpg" alt="Admin" class="admin-avatar">
            <div class="admin-info">
                <h4>John Administrator</h4>
                <span class="admin-role">System Administrator</span>
            </div>
        </div>
    </div>
    
    <nav class="sidebar-nav">
        <ul class="nav-list">
            <li>
                <a href="#" class="nav-item active">
                    <span class="material-symbols-outlined">dashboard</span>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-item">
                    <span class="material-symbols-outlined">people</span>
                    <span>User Management</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-item">
                    <span class="material-symbols-outlined">description</span>
                    <span>Service Requests</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-item">
                    <span class="material-symbols-outlined">analytics</span>
                    <span>Analytics</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-item">
                    <span class="material-symbols-outlined">payments</span>
                    <span>Financials</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-item">
                    <span class="material-symbols-outlined">campaign</span>
                    <span>Communications</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-item">
                    <span class="material-symbols-outlined">settings</span>
                    <span>Settings</span>
                </a>
            </li>
        </ul>
    </nav>
    
    <div class="sidebar-footer">
        <button class="btn btn-outline btn-sm btn-full">
            <span class="material-symbols-outlined">logout</span>
            Sign Out
        </button>
    </div>
</aside>

<!-- Main Content Area -->
<main class="admin-main">
    <!-- Top Bar -->
    <header class="admin-header">
        <div class="header-left">
            <button class="sidebar-toggle" id="sidebar-toggle">
                <span class="material-symbols-outlined">menu</span>
            </button>
            <h1 class="page-title">Dashboard</h1>
        </div>
        
        <div class="header-right">
            <div class="date-range-selector">
                <select class="form-select">
                    <option>Last 7 days</option>
                    <option>Last 30 days</option>
                    <option>Last 3 months</option>
                    <option>Last year</option>
                </select>
            </div>
            
            <button class="btn btn-primary btn-sm">
                <span class="material-symbols-outlined">download</span>
                Export Report
            </button>
            
            <div class="notification-bell">
                <button class="notification-btn">
                    <span class="material-symbols-outlined">notifications</span>
                    <span class="notification-badge">3</span>
                </button>
            </div>
        </div>
    </header>

    <!-- Dashboard Content -->
    <div class="dashboard-content">
        <!-- Key Metrics -->
        <section class="metrics-section">
            <h2 class="section-title">Key Performance Indicators</h2>
            <div class="metrics-grid">
                <div class="metric-card">
                    <div class="metric-icon blue">
                        <span class="material-symbols-outlined">groups</span>
                    </div>
                    <div class="metric-content">
                        <h3 class="metric-value" id="val-citizens">--</h3>
                        <p class="metric-label">Active Citizens</p>
                        <div class="metric-change positive">
                            <span class="material-symbols-outlined">trending_up</span>
                            <span>+12.5%</span>
                        </div>
                    </div>
                </div>

                <div class="metric-card">
                    <div class="metric-icon green">
                        <span class="material-symbols-outlined">description</span>
                    </div>
                    <div class="metric-content">
                        <h3 class="metric-value" id="val-requests">--</h3>
                        <p class="metric-label">Service Requests</p>
                        <div class="metric-change positive">
                            <span class="material-symbols-outlined">trending_up</span>
                            <span>+8.3%</span>
                        </div>
                    </div>
                </div>

                <div class="metric-card">
                    <div class="metric-icon orange">
                        <span class="material-symbols-outlined">payments</span>
                    </div>
                    <div class="metric-content">
                        <h3 class="metric-value" id="val-revenue">--</h3>
                        <p class="metric-label">Revenue Collected</p>
                        <div class="metric-change positive">
                            <span class="material-symbols-outlined">trending_up</span>
                            <span>+15.7%</span>
                        </div>
                    </div>
                </div>

                <div class="metric-card">
                    <div class="metric-icon purple">
                        <span class="material-symbols-outlined">schedule</span>
                    </div>
                    <div class="metric-content">
                        <h3 class="metric-value" id="val-efficiency">--</h3>
                        <p class="metric-label">Service Efficiency</p>
                        <div class="metric-change positive">
                            <span class="material-symbols-outlined">trending_up</span>
                            <span>+2.1%</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Charts and Analytics -->
        <section class="analytics-section">
            <div class="analytics-grid">
                <!-- Service Requests Chart -->
                <div class="chart-card">
                    <div class="chart-header">
                        <h3 class="chart-title">Service Requests Trend</h3>
                        <div class="chart-actions">
                            <button class="btn btn-outline btn-sm">View Details</button>
                        </div>
                    </div>
                    <div class="chart-container">
                        <canvas id="serviceRequestsChart"></canvas>
                    </div>
                </div>

                <!-- Revenue Chart -->
                <div class="chart-card">
                    <div class="chart-header">
                        <h3 class="chart-title">Revenue Breakdown</h3>
                        <div class="chart-actions">
                            <button class="btn btn-outline btn-sm">View Details</button>
                        </div>
                    </div>
                    <div class="chart-container">
                        <canvas id="revenueChart"></canvas>
                    </div>
                </div>
            </div>
        </section>

        <!-- Recent Activities -->
        <section class="activities-section">
            <div class="activities-header">
                <h2 class="section-title">Recent Activities</h2>
                <button class="btn btn-outline btn-sm">View All</button>
            </div>
            
            <div class="activities-grid">
                <!-- Recent Service Requests -->
                <div class="activity-card">
                    <div class="activity-header">
                        <h3 class="activity-title">Recent Service Requests</h3>
                        <span class="activity-count">24 new</span>
                    </div>
                    <div class="activity-list">
                        <div class="activity-item">
                            <div class="activity-icon pending">
                                <span class="material-symbols-outlined">pending</span>
                            </div>
                            <div class="activity-content">
                                <h4 class="activity-item-title">Business License Application</h4>
                                <p class="activity-description">Sarah Nkwen - Restaurant License</p>
                                <span class="activity-time">2 hours ago</span>
                            </div>
                            <button class="activity-action">Review</button>
                        </div>

                        <div class="activity-item">
                            <div class="activity-icon processing">
                                <span class="material-symbols-outlined">hourglass_empty</span>
                            </div>
                            <div class="activity-content">
                                <h4 class="activity-item-title">Property Registration</h4>
                                <p class="activity-description">Michael Mankon - Land Title Application</p>
                                <span class="activity-time">5 hours ago</span>
                            </div>
                            <button class="activity-action">View</button>
                        </div>

                        <div class="activity-item">
                            <div class="activity-icon completed">
                                <span class="material-symbols-outlined">check_circle</span>
                            </div>
                            <div class="activity-content">
                                <h4 class="activity-item-title">Building Permit Approved</h4>
                                <p class="activity-description">James Bamendakwe - Commercial Construction</p>
                                <span class="activity-time">1 day ago</span>
                            </div>
                            <button class="activity-action">Details</button>
                        </div>
                    </div>
                </div>

                <!-- System Notifications -->
                <div class="activity-card">
                    <div class="activity-header">
                        <h3 class="activity-title">System Notifications</h3>
                        <span class="activity-count">8 new</span>
                    </div>
                    <div class="activity-list">
                        <div class="activity-item">
                            <div class="activity-icon warning">
                                <span class="material-symbols-outlined">warning</span>
                            </div>
                            <div class="activity-content">
                                <h4 class="activity-item-title">High Server Load</h4>
                                <p class="activity-description">Server CPU usage at 85% for 30 minutes</p>
                                <span class="activity-time">15 minutes ago</span>
                            </div>
                            <button class="activity-action">Investigate</button>
                        </div>

                        <div class="activity-item">
                            <div class="activity-icon info">
                                <span class="material-symbols-outlined">info</span>
                            </div>
                            <div class="activity-content">
                                <h4 class="activity-item-title">Backup Completed</h4>
                                <p class="activity-description">Daily database backup successful</p>
                                <span class="activity-time">2 hours ago</span>
                            </div>
                            <button class="activity-action">View</button>
                        </div>

                        <div class="activity-item">
                            <div class="activity-icon error">
                                <span class="material-symbols-outlined">error</span>
                            </div>
                            <div class="activity-content">
                                <h4 class="activity-item-title">Payment Gateway Issue</h4>
                                <p class="activity-description">Mobile payment provider temporarily unavailable</p>
                                <span class="activity-time">4 hours ago</span>
                            </div>
                            <button class="activity-action">Resolve</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Quick Actions -->
        <section class="quick-actions-section">
            <h2 class="section-title">Quick Actions</h2>
            <div class="quick-actions-grid">
                <button class="quick-action-btn">
                    <span class="material-symbols-outlined">person_add</span>
                    <span>Add User</span>
                </button>
                <button class="quick-action-btn">
                    <span class="material-symbols-outlined">campaign</span>
                    <span>Send Alert</span>
                </button>
                <button class="quick-action-btn">
                    <span class="material-symbols-outlined">article</span>
                    <span>Generate Report</span>
                </button>
                <button class="quick-action-btn">
                    <span class="material-symbols-outlined">settings</span>
                    <span>System Settings</span>
                </button>
                <button class="quick-action-btn">
                    <span class="material-symbols-outlined">backup</span>
                    <span>Backup Data</span>
                </button>
                <button class="quick-action-btn">
                    <span class="material-symbols-outlined">support_agent</span>
                    <span>Support Queue</span>
                </button>
            </div>
        </section>
    </div>
</main>
</div>

<?php
// Include footer
require_once __DIR__ . '/../../includes/footer.php';
?>

<style>
/* Admin Dashboard Styles */
.admin-dashboard {
    display: flex;
    min-height: calc(100vh - 80px);
    background-color: var(--surface-container-low);
}

/* Sidebar */
.admin-sidebar {
    width: 280px;
    background-color: var(--surface-container-highest);
    border-right: 1px solid var(--outline-variant);
    display: flex;
    flex-direction: column;
    transition: transform 0.3s ease;
}

.sidebar-header {
    padding: var(--spacing-lg);
    border-bottom: 1px solid var(--outline-variant);
}

.admin-profile {
    display: flex;
    align-items: center;
    gap: var(--spacing-md);
}

.admin-avatar {
    width: 3rem;
    height: 3rem;
    border-radius: 50%;
    object-fit: cover;
}

.admin-info h4 {
    font-size: 1rem;
    font-weight: 600;
    color: var(--on-surface);
    margin-bottom: var(--spacing-xs);
}

.admin-role {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.sidebar-nav {
    flex: 1;
    padding: var(--spacing-md);
}

.nav-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.nav-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-md);
    padding: var(--spacing-md);
    border-radius: var(--radius-md);
    color: var(--on-surface-variant);
    text-decoration: none;
    transition: all 0.2s ease;
    margin-bottom: var(--spacing-xs);
}

.nav-item:hover {
    background-color: var(--surface-container-low);
    color: var(--on-surface);
}

.nav-item.active {
    background-color: var(--primary);
    color: var(--on-primary);
}

.nav-item .material-symbols-outlined {
    font-size: 1.25rem;
}

.sidebar-footer {
    padding: var(--spacing-lg);
    border-top: 1px solid var(--outline-variant);
}

/* Main Content */
.admin-main {
    flex: 1;
    display: flex;
    flex-direction: column;
    overflow-x: hidden;
}

.admin-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--spacing-lg) var(--spacing-xl);
    background-color: var(--surface-container-lowest);
    border-bottom: 1px solid var(--outline-variant);
}

.header-left {
    display: flex;
    align-items: center;
    gap: var(--spacing-lg);
}

.sidebar-toggle {
    display: none;
    background: none;
    border: none;
    cursor: pointer;
    padding: var(--spacing-sm);
    border-radius: var(--radius-sm);
    color: var(--on-surface);
}

.sidebar-toggle:hover {
    background-color: var(--surface-container-low);
}

.page-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--on-surface);
    margin: 0;
}

.header-right {
    display: flex;
    align-items: center;
    gap: var(--spacing-md);
}

.date-range-selector .form-select {
    min-width: 150px;
}

.notification-bell {
    position: relative;
}

.notification-btn {
    position: relative;
    background: none;
    border: none;
    cursor: pointer;
    padding: var(--spacing-sm);
    border-radius: var(--radius-sm);
    color: var(--on-surface);
}

.notification-btn:hover {
    background-color: var(--surface-container-low);
}

.notification-badge {
    position: absolute;
    top: 0;
    right: 0;
    width: 1rem;
    height: 1rem;
    background-color: var(--error);
    color: var(--on-error);
    border-radius: 50%;
    font-size: 0.75rem;
    font-weight: 700;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Dashboard Content */
.dashboard-content {
    flex: 1;
    padding: var(--spacing-xl);
    overflow-y: auto;
}

.section-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--on-surface);
    margin-bottom: var(--spacing-lg);
}

/* Metrics Grid */
.metrics-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: var(--spacing-lg);
    margin-bottom: var(--spacing-2xl);
}

.metric-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    display: flex;
    align-items: center;
    gap: var(--spacing-md);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.metric-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
}

.metric-icon {
    width: 3rem;
    height: 3rem;
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.metric-icon.blue {
    background-color: #2196f3;
    color: white;
}

.metric-icon.green {
    background-color: #4caf50;
    color: white;
}

.metric-icon.orange {
    background-color: #ff9800;
    color: white;
}

.metric-icon.purple {
    background-color: #9c27b0;
    color: white;
}

.metric-content {
    flex: 1;
}

.metric-value {
    font-size: 1.5rem;
    font-weight: 800;
    color: var(--on-surface);
    margin-bottom: var(--spacing-xs);
}

.metric-label {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    margin-bottom: var(--spacing-sm);
}

.metric-change {
    display: flex;
    align-items: center;
    gap: var(--spacing-xs);
    font-size: 0.75rem;
    font-weight: 600;
}

.metric-change.positive {
    color: #4caf50;
}

.metric-change.negative {
    color: #f44336;
}

/* Analytics Section */
.analytics-section {
    margin-bottom: var(--spacing-2xl);
}

.analytics-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    gap: var(--spacing-lg);
}

.chart-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.chart-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: var(--spacing-lg);
}

.chart-title {
    font-size: 1.125rem;
    font-weight: 600;
    color: var(--on-surface);
}

.chart-container {
    height: 300px;
    position: relative;
}

/* Activities Section */
.activities-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: var(--spacing-lg);
}

.activities-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    gap: var(--spacing-lg);
}

.activity-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.activity-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: var(--spacing-lg);
}

.activity-title {
    font-size: 1.125rem;
    font-weight: 600;
    color: var(--on-surface);
}

.activity-count {
    background-color: var(--primary);
    color: var(--on-primary);
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
}

.activity-list {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-md);
}

.activity-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-md);
    padding: var(--spacing-md);
    border-radius: var(--radius-md);
    transition: background-color 0.2s ease;
}

.activity-item:hover {
    background-color: var(--surface-container-low);
}

.activity-icon {
    width: 2.5rem;
    height: 2.5rem;
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.activity-icon.pending {
    background-color: #ff9800;
    color: white;
}

.activity-icon.processing {
    background-color: #2196f3;
    color: white;
}

.activity-icon.completed {
    background-color: #4caf50;
    color: white;
}

.activity-icon.warning {
    background-color: #ff9800;
    color: white;
}

.activity-icon.info {
    background-color: #2196f3;
    color: white;
}

.activity-icon.error {
    background-color: #f44336;
    color: white;
}

.activity-content {
    flex: 1;
}

.activity-item-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--on-surface);
    margin-bottom: var(--spacing-xs);
}

.activity-description {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    margin-bottom: var(--spacing-xs);
}

.activity-time {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.activity-action {
    background: none;
    border: 1px solid var(--outline-variant);
    border-radius: var(--radius-sm);
    padding: var(--spacing-xs) var(--spacing-sm);
    font-size: 0.75rem;
    color: var(--on-surface);
    cursor: pointer;
    transition: all 0.2s ease;
}

.activity-action:hover {
    background-color: var(--primary);
    color: var(--on-primary);
    border-color: var(--primary);
}

/* Quick Actions */
.quick-actions-section {
    margin-bottom: var(--spacing-2xl);
}

.quick-actions-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: var(--spacing-lg);
}

.quick-action-btn {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: var(--spacing-sm);
    padding: var(--spacing-lg);
    background-color: var(--surface-container-lowest);
    border: 1px solid var(--outline-variant);
    border-radius: var(--radius-lg);
    color: var(--on-surface);
    cursor: pointer;
    transition: all 0.2s ease;
    text-align: center;
}

.quick-action-btn:hover {
    background-color: var(--primary);
    color: var(--on-primary);
    border-color: var(--primary);
    transform: translateY(-2px);
}

.quick-action-btn .material-symbols-outlined {
    font-size: 2rem;
}

/* Responsive Design */
@media (max-width: 1024px) {
    .admin-sidebar {
        position: fixed;
        left: 0;
        top: 0;
        bottom: 0;
        z-index: 1000;
        transform: translateX(-100%);
    }
    
    .admin-sidebar.open {
        transform: translateX(0);
    }
    
    .sidebar-toggle {
        display: block;
    }
    
    .analytics-grid,
    .activities-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 768px) {
    .admin-header {
        flex-direction: column;
        gap: var(--spacing-md);
        align-items: flex-start;
    }
    
    .header-right {
        width: 100%;
        justify-content: space-between;
    }
    
    .dashboard-content {
        padding: var(--spacing-lg);
    }
    
    .metrics-grid {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: var(--spacing-md);
    }
    
    .quick-actions-grid {
        grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
        gap: var(--spacing-md);
    }
    
    .activity-item {
        flex-direction: column;
        text-align: center;
        gap: var(--spacing-sm);
    }
}

@media (max-width: 480px) {
    .metric-card {
        flex-direction: column;
        text-align: center;
        gap: var(--spacing-sm);
    }
    
    .chart-container {
        height: 250px;
    }
    
    .quick-action-btn {
        padding: var(--spacing-md);
    }
    
    .quick-action-btn .material-symbols-outlined {
        font-size: 1.5rem;
    }
}
</style>

<script>
// Dashboard JavaScript
document.addEventListener('DOMContentLoaded', function() {
    initializeSidebar();
    initializeCharts();
    initializeNotifications();
    initializeQuickActions();
});

function initializeSidebar() {
    const sidebarToggle = document.getElementById('sidebar-toggle');
    const sidebar = document.querySelector('.admin-sidebar');
    
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('open');
        });
    }
    
    // Close sidebar when clicking outside
    document.addEventListener('click', function(e) {
        if (sidebar && sidebar.classList.contains('open')) {
            if (!sidebar.contains(e.target) && !sidebarToggle.contains(e.target)) {
                sidebar.classList.remove('open');
            }
        }
    });
}

function initializeCharts() {
    // Service Requests Chart
    const serviceRequestsCtx = document.getElementById('serviceRequestsChart');
    if (serviceRequestsCtx) {
        new Chart(serviceRequestsCtx, {
            type: 'line',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                datasets: [{
                    label: 'Service Requests',
                    data: [65, 78, 90, 81, 95, 88, 72],
                    borderColor: '#2196f3',
                    backgroundColor: 'rgba(33, 150, 243, 0.1)',
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }
    
    // Revenue Chart
    const revenueCtx = document.getElementById('revenueChart');
    if (revenueCtx) {
        new Chart(revenueCtx, {
            type: 'doughnut',
            data: {
                labels: ['Business Licenses', 'Property Taxes', 'Permits', 'Services', 'Other'],
                datasets: [{
                    data: [35, 25, 20, 15, 5],
                    backgroundColor: [
                        '#2196f3',
                        '#4caf50',
                        '#ff9800',
                        '#9c27b0',
                        '#f44336'
                    ]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        });
    }
}

function initializeNotifications() {
    const notificationBtn = document.querySelector('.notification-btn');
    if (notificationBtn) {
        notificationBtn.addEventListener('click', function() {
            // Show notification dropdown
            showNotificationDropdown();
        });
    }
}

function showNotificationDropdown() {
    // Implementation for notification dropdown
    console.log('Show notifications');
}

function initializeQuickActions() {
    const quickActionBtns = document.querySelectorAll('.quick-action-btn');
    quickActionBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const action = this.textContent.trim();
            handleQuickAction(action);
        });
    });
}

function handleQuickAction(action) {
    showNotification(`${action} action initiated`, 'info');
}

// Auto-refresh dashboard data
setInterval(function() {
    refreshDashboardData();
}, 60000); // Refresh every minute

function refreshDashboardData() {
    fetch('/stitch1/api/dashboard-stats.php')
        .then(response => response.json())
        .then(res => {
            if (res.success && res.data) {
                document.getElementById('val-citizens').textContent = res.data.active_citizens;
                document.getElementById('val-requests').textContent = res.data.service_requests;
                document.getElementById('val-revenue').textContent = res.data.revenue_collected;
                document.getElementById('val-efficiency').textContent = res.data.service_efficiency;
            }
        })
        .catch(err => console.error("Error fetching live metrics:", err));
}

document.addEventListener('DOMContentLoaded', refreshDashboardData);

// Export functionality
document.querySelector('.admin-header .btn-primary').addEventListener('click', function() {
    exportDashboardReport();
});

function exportDashboardReport() {
    showNotification('Generating report...', 'info');
    
    // Simulate report generation
    setTimeout(function() {
        showNotification('Report exported successfully!', 'success');
    }, 2000);
}
</script>

<!-- Chart.js Library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
