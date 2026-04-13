<?php
/**
 * Bamenda City Council E-Governance Platform
 * Citizen Dashboard Page
 */

// Include access control
require_once __DIR__ . '/../../core/access-control.php';

// Require authentication to access this page
require_authentication();

// Set page metadata
$page_title = 'Citizen Dashboard | Bamenda City Council';
$page_description = 'Personal dashboard for managing your Bamenda City Council services, applications, and civic activities.';
$page_keywords = 'citizen dashboard, personal dashboard, service management, Bamenda council';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Home', 'url' => '/index.php'],
    ['title' => 'Dashboard', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero dashboard-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-government-building.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Personal Dashboard</span>
            <h1 class="hero-title">Welcome back, <?php echo htmlspecialchars(get_user_display_name()); ?>!</h1>
            <p class="hero-subtitle">
                Manage your services, track applications, and stay engaged with your community.
            </p>
        </div>
    </div>
</section>

<!-- Dashboard Section -->
<section class="dashboard-section">
    <div class="container">
        <div class="dashboard-grid">
            <!-- Welcome Card -->
            <div class="dashboard-card welcome-card">
                <div class="card-header">
                    <h2 class="card-title">
                        <span class="material-symbols-outlined">dashboard</span>
                        Your Dashboard
                    </h2>
                </div>
                <div class="card-content">
                    <div class="welcome-content">
                        <div class="user-avatar">
                            <img src="../../assets/images/default-profile.jpg" alt="User Profile Picture" class="profile-image">
                        </div>
                        <div class="user-info">
                            <h3><?php echo htmlspecialchars(get_user_display_name()); ?></h3>
                            <p><?php echo htmlspecialchars(get_user_email()); ?></p>
                            <span class="user-role"><?php echo ucfirst(get_user_role()); ?></span>
                            <a href="#" data-nav="profile" class="btn btn-sm btn-primary" style="margin-top: 1rem; display: inline-block;">
                                <span class="material-symbols-outlined">person</span>
                                View Profile
                            </a>
                        </div>
                    </div>
                    <div class="quick-stats">
                        <div class="stat-item">
                            <span class="stat-number">5</span>
                            <span class="stat-label">Active Services</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">2</span>
                            <span class="stat-label">Pending Applications</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">12</span>
                            <span class="stat-label">Completed Tasks</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="dashboard-card">
                <div class="card-header">
                    <h2 class="card-title">
                        <span class="material-symbols-outlined">bolt</span>
                        Quick Actions
                    </h2>
                </div>
                <div class="card-content">
                    <div class="action-grid">
                        <a href="#" data-nav="business-license" class="action-item">
                            <div class="action-icon">
                                <span class="material-symbols-outlined">business</span>
                            </div>
                            <h3>Business License</h3>
                            <p>Apply or renew license</p>
                        </a>
                        <a href="#" data-nav="property-registry" class="action-item">
                            <div class="action-icon">
                                <span class="material-symbols-outlined">apartment</span>
                            </div>
                            <h3>Property Registry</h3>
                            <p>Register property</p>
                        </a>
                        <a href="#" data-nav="payments" class="action-item">
                            <div class="action-icon">
                                <span class="material-symbols-outlined">payments</span>
                            </div>
                            <h3>Make Payment</h3>
                            <p>Pay fees online</p>
                        </a>
                        <a href="#" data-nav="service-history" class="action-item">
                            <div class="action-icon">
                                <span class="material-symbols-outlined">history</span>
                            </div>
                            <h3>Service History</h3>
                            <p>View past services</p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="dashboard-card">
                <div class="card-header">
                    <h2 class="card-title">
                        <span class="material-symbols-outlined">activity</span>
                        Recent Activity
                    </h2>
                    <a href="service-history.php" class="view-all">View All</a>
                </div>
                <div class="card-content">
                    <div class="activity-list">
                        <div class="activity-item">
                            <div class="activity-icon success">
                                <span class="material-symbols-outlined">check_circle</span>
                            </div>
                            <div class="activity-content">
                                <h4>Business License Approved</h4>
                                <p>Your business license application has been approved</p>
                                <span class="activity-time">2 days ago</span>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon pending">
                                <span class="material-symbols-outlined">pending</span>
                            </div>
                            <div class="activity-content">
                                <h4>Property Registration Submitted</h4>
                                <p>Your property registration is under review</p>
                                <span class="activity-time">5 days ago</span>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon success">
                                <span class="material-symbols-outlined">payments</span>
                            </div>
                            <div class="activity-content">
                                <h4>Payment Completed</h4>
                                <p>Business license fee payment received</p>
                                <span class="activity-time">1 week ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Notifications -->
            <div class="dashboard-card">
                <div class="card-header">
                    <h2 class="card-title">
                        <span class="material-symbols-outlined">notifications</span>
                        Notifications
                    </h2>
                    <span class="notification-badge">3</span>
                </div>
                <div class="card-content">
                    <div class="notification-list">
                        <div class="notification-item unread">
                            <div class="notification-icon info">
                                <span class="material-symbols-outlined">info</span>
                            </div>
                            <div class="notification-content">
                                <h4>New Service Available</h4>
                                <p>Digital ID registration is now available</p>
                                <span class="notification-time">Today</span>
                            </div>
                        </div>
                        <div class="notification-item unread">
                            <div class="notification-icon success">
                                <span class="material-symbols-outlined">event</span>
                            </div>
                            <div class="notification-content">
                                <h4>Upcoming Event</h4>
                                <p>Community meeting scheduled for next week</p>
                                <span class="notification-time">Yesterday</span>
                            </div>
                        </div>
                        <div class="notification-item">
                            <div class="notification-icon warning">
                                <span class="material-symbols-outlined">warning</span>
                            </div>
                            <div class="notification-content">
                                <h4>Payment Reminder</h4>
                                <p>Market stall fee due next week</p>
                                <span class="notification-time">3 days ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Services Overview -->
            <div class="dashboard-card full-width">
                <div class="card-header">
                    <h2 class="card-title">
                        <span class="material-symbols-outlined">gavel</span>
                        Your Services
                    </h2>
                    <a href="#" data-nav="services" class="view-all">Browse All Services</a>
                </div>
                <div class="card-content">
                    <div class="services-grid">
                        <div class="service-item">
                            <div class="service-icon">
                                <span class="material-symbols-outlined">business</span>
                            </div>
                            <div class="service-info">
                                <h4>Business License</h4>
                                <p>Status: <span class="status-badge active">Active</span></p>
                                <span class="service-date">Expires: Dec 31, 2024</span>
                            </div>
                            <div class="service-actions">
                                <button class="btn btn-sm btn-outline">Renew</button>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-icon">
                                <span class="material-symbols-outlined">apartment</span>
                            </div>
                            <div class="service-info">
                                <h4>Property Registration</h4>
                                <p>Status: <span class="status-badge pending">Pending</span></p>
                                <span class="service-date">Applied: Jan 15, 2024</span>
                            </div>
                            <div class="service-actions">
                                <button class="btn btn-sm btn-outline">View Details</button>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-icon">
                                <span class="material-symbols-outlined">storefront</span>
                            </div>
                            <div class="service-info">
                                <h4>Market Stall</h4>
                                <p>Status: <span class="status-badge active">Active</span></p>
                                <span class="service-date">Stall: B-24, Central Market</span>
                            </div>
                            <div class="service-actions">
                                <button class="btn btn-sm btn-outline">Manage</button>
                            </div>
                        </div>
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

<!-- Dashboard Integration JavaScript -->
<script src="../../assets/js/dashboard-integration.js"></script>

<style>
/* Dashboard Styles */
.dashboard-hero {
    min-height: 300px;
}

.dashboard-hero .hero-background img {
    filter: brightness(0.7);
}

.dashboard-section {
    padding: var(--spacing-2xl) 0;
    background-color: var(--surface-container-low);
}

.dashboard-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
    max-width: 1200px;
    margin: 0 auto;
}

.dashboard-card {
    background: var(--surface);
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-md);
    border: 1px solid var(--outline-variant);
    overflow: hidden;
}

.dashboard-card.full-width {
    grid-column: 1 / -1;
}

.card-header {
    padding: var(--spacing-lg) var(--spacing-xl);
    border-bottom: 1px solid var(--outline-variant);
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.card-title {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    font-size: 1.25rem;
    font-weight: 600;
    color: var(--on-surface);
}

.view-all {
    color: var(--primary);
    text-decoration: none;
    font-size: 0.875rem;
    font-weight: 500;
}

.view-all:hover {
    text-decoration: underline;
}

.card-content {
    padding: var(--spacing-xl);
}

/* Welcome Card */
.welcome-content {
    display: flex;
    align-items: center;
    gap: var(--spacing-lg);
    margin-bottom: var(--spacing-lg);
}

.user-avatar {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: var(--primary);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--on-primary);
    font-size: 2rem;
}

.user-info h3 {
    font-size: 1.25rem;
    font-weight: 600;
    color: var(--on-surface);
    margin-bottom: var(--spacing-xs);
}

.user-info p {
    color: var(--on-surface-variant);
    margin-bottom: var(--spacing-xs);
}

.user-role {
    display: inline-block;
    background: var(--tertiary);
    color: var(--on-tertiary);
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-sm);
    font-size: 0.75rem;
    font-weight: 500;
}

.quick-stats {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--spacing-lg);
}

.stat-item {
    text-align: center;
}

.stat-number {
    display: block;
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-xs);
}

.stat-label {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

/* Action Grid */
.action-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: var(--spacing-lg);
}

.action-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: var(--spacing-lg);
    border-radius: var(--radius-md);
    text-decoration: none;
    color: var(--on-surface);
    transition: all 0.2s ease;
    border: 1px solid var(--outline-variant);
}

.action-item:hover {
    background: var(--surface-container-low);
    transform: translateY(-2px);
    box-shadow: var(--shadow-sm);
}

.action-icon {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: var(--primary);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--on-primary);
    margin-bottom: var(--spacing-md);
}

.action-item h3 {
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: var(--spacing-xs);
}

.action-item p {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

/* Activity List */
.activity-list {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-lg);
}

.activity-item {
    display: flex;
    gap: var(--spacing-md);
    padding-bottom: var(--spacing-lg);
    border-bottom: 1px solid var(--outline-variant);
}

.activity-item:last-child {
    border-bottom: none;
    padding-bottom: 0;
}

.activity-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.activity-icon.success {
    background: rgba(76, 175, 80, 0.1);
    color: var(--success);
}

.activity-icon.pending {
    background: rgba(255, 152, 0, 0.1);
    color: var(--warning);
}

.activity-content h4 {
    font-size: 1rem;
    font-weight: 600;
    color: var(--on-surface);
    margin-bottom: var(--spacing-xs);
}

.activity-content p {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    margin-bottom: var(--spacing-xs);
}

.activity-time {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

/* Notifications */
.notification-badge {
    background: var(--error);
    color: var(--on-error);
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
}

.notification-list {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-md);
}

.notification-item {
    display: flex;
    gap: var(--spacing-md);
    padding: var(--spacing-md);
    border-radius: var(--radius-md);
    transition: background-color 0.2s ease;
}

.notification-item.unread {
    background: var(--surface-container-low);
}

.notification-icon {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.notification-icon.info {
    background: rgba(33, 150, 243, 0.1);
    color: var(--primary);
}

.notification-icon.success {
    background: rgba(76, 175, 80, 0.1);
    color: var(--success);
}

.notification-icon.warning {
    background: rgba(255, 152, 0, 0.1);
    color: var(--warning);
}

.notification-content h4 {
    font-size: 0.875rem;
    font-weight: 600;
    color: var(--on-surface);
    margin-bottom: var(--spacing-xs);
}

.notification-content p {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
    margin-bottom: var(--spacing-xs);
}

.notification-time {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

/* Services Grid */
.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-lg);
}

.service-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-md);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    border-radius: var(--radius-md);
}

.service-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: var(--surface-container-low);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--primary);
    flex-shrink: 0;
}

.service-info {
    flex: 1;
}

.service-info h4 {
    font-size: 1rem;
    font-weight: 600;
    color: var(--on-surface);
    margin-bottom: var(--spacing-xs);
}

.service-info p {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    margin-bottom: var(--spacing-xs);
}

.service-date {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.status-badge {
    display: inline-block;
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-sm);
    font-size: 0.75rem;
    font-weight: 500;
}

.status-badge.active {
    background: rgba(76, 175, 80, 0.1);
    color: var(--success);
}

.status-badge.pending {
    background: rgba(255, 152, 0, 0.1);
    color: var(--warning);
}

.service-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Responsive Design */
@media (max-width: 768px) {
    .dashboard-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .welcome-content {
        flex-direction: column;
        text-align: center;
    }
    
    .quick-stats {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .action-grid {
        grid-template-columns: 1fr;
    }
    
    .services-grid {
        grid-template-columns: 1fr;
    }
    
    .service-item {
        flex-direction: column;
        text-align: center;
    }
    
    .service-actions {
        justify-content: center;
    }
}
</style>

