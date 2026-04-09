<?php
/**
 * Bamenda City Council E-Governance Platform
 * Administration Index Page
 */

$page_title = 'Administration | Bamenda City Council';
$page_description = 'Administrative services and management portal for Bamenda City Council.';
$page_keywords = 'administration, management, council services, Bamenda council';

$breadcrumbs = [
    ['title' => 'Administration', 'url' => '#']
];

require_once __DIR__ . '/../../includes/header.php';
?>

<section class="hero admin-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-government-building.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Administration</span>
            <h1 class="hero-title">Council Administration</h1>
            <p class="hero-subtitle">Comprehensive administrative services including staff management, analytics, reporting, and system administration for Bamenda City Council operations.</p>
            <div class="hero-actions">
                <a href="#services" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">dashboard</span>
                    Admin Services
                </a>
                <a href="#dashboard" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">analytics</span>
                    Dashboard
                </a>
            </div>
        </div>
    </div>
</section>

<section class="admin-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">456</div>
                    <div class="stat-label">Staff Members</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">assignment</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">1,234</div>
                    <div class="stat-label">Active Tasks</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">89%</div>
                    <div class="stat-label">Process Efficiency</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services-section" id="services">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Administrative Services</h2>
            <p class="section-subtitle">Access all administrative tools and services</p>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">dashboard</span>
                </div>
                <h3 class="service-title">Dashboard</h3>
                <p class="service-description">Centralized administrative dashboard with real-time metrics and system overview.</p>
                <a href="dashboard.php" class="btn btn-primary">Access Dashboard</a>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">analytics</span>
                </div>
                <h3 class="service-title">Analytics & Reports</h3>
                <p class="service-description">Comprehensive analytics, performance metrics, and detailed reporting system.</p>
                <a href="analytics.php" class="btn btn-primary">View Analytics</a>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">people</span>
                </div>
                <h3 class="service-title">User Management</h3>
                <p class="service-description">Staff account administration, permissions, and access control management.</p>
                <a href="users.php" class="btn btn-primary">Manage Users</a>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">assignment_turned_in</span>
                </div>
                <h3 class="service-title">Staff Tasks</h3>
                <p class="service-description">Work assignments, task tracking, and performance monitoring for staff.</p>
                <a href="staff-tasks.php" class="btn btn-primary">View Tasks</a>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">event_available</span>
                </div>
                <h3 class="service-title">Staff Attendance</h3>
                <p class="service-description">Time tracking, attendance management, and leave request processing.</p>
                <a href="attendance.php" class="btn btn-primary">Manage Attendance</a>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">badge</span>
                </div>
                <h3 class="service-title">Staff Portal</h3>
                <p class="service-description">Personal staff dashboard with work assignments and resources.</p>
                <a href="staff-portal.php" class="btn btn-primary">Staff Portal</a>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">settings</span>
                </div>
                <h3 class="service-title">System Settings</h3>
                <p class="service-description">System configuration, preferences, and administrative settings.</p>
                <a href="settings.php" class="btn btn-primary">System Settings</a>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">archive</span>
                </div>
                <h3 class="service-title">Archives</h3>
                <p class="service-description">Document archiving, records management, and historical data storage.</p>
                <a href="archives.php" class="btn btn-primary">Access Archives</a>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">backup</span>
                </div>
                <h3 class="service-title">Backup & Restore</h3>
                <p class="service-description">System backup management, data recovery, and restoration tools.</p>
                <a href="backup.php" class="btn btn-primary">Backup System</a>
            </div>
        </div>
    </div>
</section>

<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Quick Actions</h2>
            <p class="section-subtitle">Frequently used administrative functions</p>
        </div>
        <div class="actions-grid">
            <div class="action-card" onclick="window.location.href='dashboard.php'">
                <div class="action-icon">
                    <span class="material-symbols-outlined">dashboard</span>
                </div>
                <h3 class="action-title">Dashboard</h3>
                <p class="action-description">View overview</p>
            </div>
            <div class="action-card" onclick="window.location.href='users.php'">
                <div class="action-icon">
                    <span class="material-symbols-outlined">person_add</span>
                </div>
                <h3 class="action-title">Add User</h3>
                <p class="action-description">Create account</p>
            </div>
            <div class="action-card" onclick="window.location.href='staff-tasks.php'">
                <div class="action-icon">
                    <span class="material-symbols-outlined">add_task</span>
                </div>
                <h3 class="action-title">Create Task</h3>
                <p class="action-description">New assignment</p>
            </div>
            <div class="action-card" onclick="window.location.href='analytics.php'">
                <div class="action-icon">
                    <span class="material-symbols-outlined">assessment</span>
                </div>
                <h3 class="action-title">Reports</h3>
                <p class="action-description">View analytics</p>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>

<style>
.admin-hero{background:linear-gradient(135deg,var(--primary)0,var(--primary-container)100%)}
.admin-stats-section{padding:var(--spacing-3xl)0}
.stats-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:var(--spacing-lg)}
.stat-card{display:grid;grid-template-columns:auto 1fr;gap:var(--spacing-lg);align-items:center;background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);padding:var(--spacing-xl);border:1px solid var(--outline-variant)}
.stat-icon{width:3.5rem;height:3.5rem;background-color:var(--primary);color:var(--on-primary);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center}
.stat-icon .material-symbols-outlined{font-size:2rem}
.stat-content{flex:1}
.stat-number{font-size:2rem;font-weight:800;color:var(--primary);margin-bottom:var(--spacing-xs)}
.stat-label{font-size:1rem;color:var(--on-surface-variant);font-weight:500}
.services-section{padding:var(--spacing-3xl)0;background-color:var(--surface-container-low)}
.section-header{text-align:center;margin-bottom:var(--spacing-xl)}
.section-title{font-size:2rem;font-weight:800;color:var(--primary);margin-bottom:var(--spacing-sm)}
.section-subtitle{color:var(--on-surface-variant);font-size:1.125rem}
.services-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:var(--spacing-lg)}
.service-card{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);padding:var(--spacing-xl);border:1px solid var(--outline-variant);text-align:center;transition:all .3s ease}
.service-card:hover{transform:translateY(-4px);box-shadow:0 8px 25px rgba(0,0,0,.15)}
.service-icon{width:3.5rem;height:3.5rem;background-color:var(--primary);color:var(--on-primary);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center;margin:0 auto var(--spacing-lg)}
.service-icon .material-symbols-outlined{font-size:2rem}
.service-title{font-size:1.25rem;font-weight:700;color:var(--primary);margin-bottom:var(--spacing-sm)}
.service-description{color:var(--on-surface-variant);line-height:1.6;margin-bottom:var(--spacing-lg)}
.quick-actions-section{padding:var(--spacing-3xl)0}
.actions-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:var(--spacing-lg)}
.action-card{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);padding:var(--spacing-xl);border:1px solid var(--outline-variant);text-align:center;cursor:pointer;transition:all .3s ease}
.action-card:hover{transform:translateY(-4px);box-shadow:0 8px 25px rgba(0,0,0,.15)}
.action-icon{width:3.5rem;height:3.5rem;background-color:var(--primary);color:var(--on-primary);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center;margin:0 auto var(--spacing-lg)}
.action-icon .material-symbols-outlined{font-size:2rem}
.action-title{font-size:1.25rem;font-weight:700;color:var(--primary);margin-bottom:var(--spacing-sm)}
.action-description{color:var(--on-surface-variant);line-height:1.6}
@media (max-width:768px){.services-grid{grid-template-columns:repeat(2,1fr);gap:var(--spacing-md)}.actions-grid{grid-template-columns:repeat(2,1fr);gap:var(--spacing-md)}}
@media (max-width:480px){.services-grid{grid-template-columns:1fr;gap:var(--spacing-lg)}.actions-grid{grid-template-columns:1fr;gap:var(--spacing-lg)}}
</style>

<script>
// Quick action handlers are inline onclick events
</script>
