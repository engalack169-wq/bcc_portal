<?php
/**
 * Bamenda City Council E-Governance Platform
 * Administration Settings Page
 */

// Include access control
require_once __DIR__ . '/../../core/access-control.php';

// Require admin role to access this page
require_role('admin');

// Set page metadata
$page_title = 'Administration Settings | Bamenda City Council';
$page_description = 'Access system administration settings, configuration, and platform management tools.';
$page_keywords = 'administration, settings, system configuration, platform management, Bamenda admin';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Administration', 'url' => '../index.php'],
    ['title' => 'Settings', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero admin-settings-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-government-building.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Administration Settings</span>
            <h1 class="hero-title">System Configuration & Management</h1>
            <p class="hero-subtitle">
                Comprehensive administration settings for system configuration, user management, security, and platform optimization.
            </p>
            <div class="hero-actions">
                <a href="#system-settings" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">settings</span>
                    System Settings
                </a>
                <a href="#user-management" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">people</span>
                    User Management
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Admin Actions</h2>
            <p class="section-subtitle">Quick access to administration and management functions</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openSystemSettings()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">settings</span>
                </div>
                <h3 class="action-title">System Settings</h3>
                <p class="action-description">Configure system parameters and platform settings</p>
            </div>

            <div class="action-card" onclick="openUserManagement()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">people</span>
                </div>
                <h3 class="action-title">User Management</h3>
                <p class="action-description">Manage users, roles, and permissions</p>
            </div>

            <div class="action-card" onclick="openSecuritySettings()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">security</span>
                </div>
                <h3 class="action-title">Security Settings</h3>
                <p class="action-description">Configure security policies and access controls</p>
            </div>

            <div class="action-card" onclick="openSystemMaintenance()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">build</span>
                </div>
                <h3 class="action-title">System Maintenance</h3>
                <p class="action-description">Perform system maintenance and updates</p>
            </div>

            <div class="action-card" onclick="openSystemLogs()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">history</span>
                </div>
                <h3 class="action-title">System Logs</h3>
                <p class="action-description">View system logs and audit trails</p>
            </div>

            <div class="action-card" onclick="openBackupRestore()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">backup</span>
                </div>
                <h3 class="action-title">Backup & Restore</h3>
                <p class="action-description">Manage system backups and data restoration</p>
            </div>
        </div>
    </div>
</section>

<!-- System Status -->
<section class="system-status-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">System Status</h2>
            <p class="section-subtitle">Real-time system performance and health monitoring</p>
        </div>

        <div class="status-grid">
            <div class="status-card">
                <div class="status-icon">
                    <span class="material-symbols-outlined">memory</span>
                </div>
                <div class="status-content">
                    <div class="status-number">68%</div>
                    <div class="status-label">Memory Usage</div>
                    <div class="status-change normal">
                        <span class="material-symbols-outlined">horizontal_rule</span>
                        <span>Normal</span>
                    </div>
                </div>
                <div class="status-bar">
                    <div class="status-fill" style="width: 68%;"></div>
                </div>
            </div>

            <div class="status-card">
                <div class="status-icon">
                    <span class="material-symbols-outlined">storage</span>
                </div>
                <div class="status-content">
                    <div class="status-number">42%</div>
                    <div class="status-label">Disk Usage</div>
                    <div class="status-change good">
                        <span class="material-symbols-outlined">trending_down</span>
                        <span>Good</span>
                    </div>
                </div>
                <div class="status-bar">
                    <div class="status-fill" style="width: 42%;"></div>
                </div>
            </div>

            <div class="status-card">
                <div class="status-icon">
                    <span class="material-symbols-outlined">speed</span>
                </div>
                <div class="status-content">
                    <div class="status-number">92%</div>
                    <div class="status-label">CPU Usage</div>
                    <div class="status-change warning">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>High</span>
                    </div>
                </div>
                <div class="status-bar">
                    <div class="status-fill" style="width: 92%; background-color: var(--secondary);"></div>
                </div>
            </div>

            <div class="status-card">
                <div class="status-icon">
                    <span class="material-symbols-outlined">network_check</span>
                </div>
                <div class="status-content">
                    <div class="status-number">100%</div>
                    <div class="status-label">Network Status</div>
                    <div class="status-change good">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Online</span>
                    </div>
                </div>
                <div class="status-bar">
                    <div class="status-fill" style="width: 100%; background-color: var(--tertiary);"></div>
                </div>
            </div>
        </div>

        <div class="system-health">
            <h3 class="health-title">System Health</h3>
            <div class="health-metrics">
                <div class="metric-item">
                    <span class="metric-label">Overall Status:</span>
                    <span class="metric-value good">Operational</span>
                </div>
                <div class="metric-item">
                    <span class="metric-label">Uptime:</span>
                    <span class="metric-value">99.9%</span>
                </div>
                <div class="metric-item">
                    <span class="metric-label">Response Time:</span>
                    <span class="metric-value">125ms</span>
                </div>
                <div class="metric-item">
                    <span class="metric-label">Active Users:</span>
                    <span class="metric-value">1,234</span>
                </div>
                <div class="metric-item">
                    <span class="metric-label">Last Update:</span>
                    <span class="metric-value">2 minutes ago</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- System Settings -->
<section class="system-settings-section" id="system-settings">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">System Configuration</h2>
            <p class="section-subtitle">Configure system parameters and platform settings</p>
        </div>

        <div class="settings-content">
            <div class="settings-tabs">
                <div class="tab-navigation">
                    <button class="tab-btn active" onclick="switchTab('general')">General Settings</button>
                    <button class="tab-btn" onclick="switchTab('email')">Email Configuration</button>
                    <button class="tab-btn" onclick="switchTab('database')">Database Settings</button>
                    <button class="tab-btn" onclick="switchTab('performance')">Performance</button>
                    <button class="tab-btn" onclick="switchTab('notifications')">Notifications</button>
                </div>

                <!-- General Settings Tab -->
                <div class="tab-content active" id="general-tab">
                    <form id="generalSettingsForm">
                        <div class="settings-section">
                            <h3 class="section-title">Platform Configuration</h3>
                            
                            <div class="form-group">
                                <label class="form-label">Platform Name *</label>
                                <input type="text" class="form-input" value="Bamenda City Council E-Governance Platform" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Platform URL *</label>
                                <input type="url" class="form-input" value="https://bamenda.gov.cm" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Default Language</label>
                                <select class="form-select">
                                    <option value="en" selected>English</option>
                                    <option value="fr">French</option>
                                    <option value="es">Spanish</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Time Zone *</label>
                                <select class="form-select" required>
                                    <option value="UTC+1" selected>UTC+1 (West Africa Time)</option>
                                    <option value="UTC">UTC</option>
                                    <option value="UTC+2">UTC+2</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Maintenance Mode</label>
                                <div class="switch-group">
                                    <label class="switch">
                                        <input type="checkbox" id="maintenanceMode">
                                        <span class="slider"></span>
                                    </label>
                                    <span class="switch-label">Enable maintenance mode to temporarily disable the platform</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Debug Mode</label>
                                <div class="switch-group">
                                    <label class="switch">
                                        <input type="checkbox" id="debugMode">
                                        <span class="slider"></span>
                                    </label>
                                    <span class="switch-label">Enable debug mode for development and troubleshooting</span>
                                </div>
                            </div>
                        </div>

                        <div class="settings-section">
                            <h3 class="section-title">File Upload Settings</h3>
                            
                            <div class="form-group">
                                <label class="form-label">Maximum File Size (MB)</label>
                                <input type="number" class="form-input" value="10" min="1" max="100">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Allowed File Types</label>
                                <div class="checkbox-group">
                                    <label class="checkbox-label">
                                        <input type="checkbox" name="fileTypes" value="pdf" checked>
                                        <span class="checkmark"></span>
                                        PDF Documents
                                    </label>
                                    <label class="checkbox-label">
                                        <input type="checkbox" name="fileTypes" value="jpg" checked>
                                        <span class="checkmark"></span>
                                        JPG Images
                                    </label>
                                    <label class="checkbox-label">
                                        <input type="checkbox" name="fileTypes" value="png" checked>
                                        <span class="checkmark"></span>
                                        PNG Images
                                    </label>
                                    <label class="checkbox-label">
                                        <input type="checkbox" name="fileTypes" value="doc" checked>
                                        <span class="checkmark"></span>
                                        Word Documents
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Storage Location</label>
                                <select class="form-select">
                                    <option value="local" selected>Local Storage</option>
                                    <option value="cloud">Cloud Storage</option>
                                    <option value="hybrid">Hybrid Storage</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="reset" class="btn btn-outline">Reset</button>
                            <button type="submit" class="btn btn-primary">Save Settings</button>
                        </div>
                    </form>
                </div>

                <!-- Email Configuration Tab -->
                <div class="tab-content" id="email-tab">
                    <form id="emailSettingsForm">
                        <div class="settings-section">
                            <h3 class="section-title">SMTP Configuration</h3>
                            
                            <div class="form-group">
                                <label class="form-label">SMTP Server *</label>
                                <input type="text" class="form-input" placeholder="smtp.gmail.com" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">SMTP Port *</label>
                                <input type="number" class="form-input" value="587" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Email Address *</label>
                                <input type="email" class="form-input" placeholder="noreply@bamenda.gov.cm" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Password *</label>
                                <input type="password" class="form-input" placeholder="Enter SMTP password" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Encryption</label>
                                <select class="form-select">
                                    <option value="tls" selected>TLS</option>
                                    <option value="ssl">SSL</option>
                                    <option value="none">None</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Test Email</label>
                                <div class="test-email-group">
                                    <input type="email" class="form-input" placeholder="Enter test email address">
                                    <button type="button" class="btn btn-primary" onclick="testEmail()">Send Test</button>
                                </div>
                            </div>
                        </div>

                        <div class="settings-section">
                            <h3 class="section-title">Email Templates</h3>
                            
                            <div class="form-group">
                                <label class="form-label">Welcome Email Subject</label>
                                <input type="text" class="form-input" value="Welcome to Bamenda City Council Platform">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Password Reset Subject</label>
                                <input type="text" class="form-input" value="Password Reset Request">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Notification Subject</label>
                                <input type="text" class="form-input" value="Bamenda City Council Notification">
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="reset" class="btn btn-outline">Reset</button>
                            <button type="submit" class="btn btn-primary">Save Settings</button>
                        </div>
                    </form>
                </div>

                <!-- Database Settings Tab -->
                <div class="tab-content" id="database-tab">
                    <form id="databaseSettingsForm">
                        <div class="settings-section">
                            <h3 class="section-title">Database Configuration</h3>
                            
                            <div class="form-group">
                                <label class="form-label">Database Host *</label>
                                <input type="text" class="form-input" value="localhost" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Database Name *</label>
                                <input type="text" class="form-input" value="bamenda_council" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Database Username *</label>
                                <input type="text" class="form-input" value="admin" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Database Password *</label>
                                <input type="password" class="form-input" placeholder="Enter database password" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Database Port</label>
                                <input type="number" class="form-input" value="3306">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Connection Timeout (seconds)</label>
                                <input type="number" class="form-input" value="30" min="5" max="300">
                            </div>
                        </div>

                        <div class="settings-section">
                            <h3 class="section-title">Database Optimization</h3>
                            
                            <div class="form-group">
                                <label class="form-label">Enable Query Caching</label>
                                <div class="switch-group">
                                    <label class="switch">
                                        <input type="checkbox" id="queryCache" checked>
                                        <span class="slider"></span>
                                    </label>
                                    <span class="switch-label">Cache frequently executed queries for better performance</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Cache Duration (minutes)</label>
                                <input type="number" class="form-input" value="60" min="1" max="1440">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Enable Connection Pooling</label>
                                <div class="switch-group">
                                    <label class="switch">
                                        <input type="checkbox" id="connectionPool" checked>
                                        <span class="slider"></span>
                                    </label>
                                    <span class="switch-label">Reuse database connections for better performance</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Max Connections</label>
                                <input type="number" class="form-input" value="100" min="10" max="1000">
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="reset" class="btn btn-outline">Reset</button>
                            <button type="submit" class="btn btn-primary">Save Settings</button>
                        </div>
                    </form>
                </div>

                <!-- Performance Tab -->
                <div class="tab-content" id="performance-tab">
                    <form id="performanceSettingsForm">
                        <div class="settings-section">
                            <h3 class="section-title">Performance Optimization</h3>
                            
                            <div class="form-group">
                                <label class="form-label">Enable Page Caching</label>
                                <div class="switch-group">
                                    <label class="switch">
                                        <input type="checkbox" id="pageCache" checked>
                                        <span class="slider"></span>
                                    </label>
                                    <span class="switch-label">Cache rendered pages for faster delivery</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Cache Duration (minutes)</label>
                                <input type="number" class="form-input" value="30" min="1" max="1440">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Enable Asset Minification</label>
                                <div class="switch-group">
                                    <label class="switch">
                                        <input type="checkbox" id="assetMinification" checked>
                                        <span class="slider"></span>
                                    </label>
                                    <span class="switch-label">Minify CSS and JavaScript files for faster loading</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Enable Gzip Compression</label>
                                <div class="switch-group">
                                    <label class="switch">
                                        <input type="checkbox" id="gzipCompression" checked>
                                        <span class="slider"></span>
                                    </label>
                                    <span class="switch-label">Compress responses for faster transfer</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Enable CDN</label>
                                <div class="switch-group">
                                    <label class="switch">
                                        <input type="checkbox" id="cdn">
                                        <span class="slider"></span>
                                    </label>
                                    <span class="switch-label">Use Content Delivery Network for static assets</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">CDN URL</label>
                                <input type="url" class="form-input" placeholder="https://cdn.bamenda.gov.cm">
                            </div>
                        </div>

                        <div class="settings-section">
                            <h3 class="section-title">Resource Limits</h3>
                            
                            <div class="form-group">
                                <label class="form-label">Memory Limit (MB)</label>
                                <input type="number" class="form-input" value="512" min="64" max="2048">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Execution Time Limit (seconds)</label>
                                <input type="number" class="form-input" value="300" min="30" max="3600">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Max Upload Size (MB)</label>
                                <input type="number" class="form-input" value="64" min="1" max="512">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Max Concurrent Requests</label>
                                <input type="number" class="form-input" value="1000" min="100" max="10000">
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="reset" class="btn btn-outline">Reset</button>
                            <button type="submit" class="btn btn-primary">Save Settings</button>
                        </div>
                    </form>
                </div>

                <!-- Notifications Tab -->
                <div class="tab-content" id="notifications-tab">
                    <form id="notificationsSettingsForm">
                        <div class="settings-section">
                            <h3 class="section-title">System Notifications</h3>
                            
                            <div class="form-group">
                                <label class="form-label">Enable Email Notifications</label>
                                <div class="switch-group">
                                    <label class="switch">
                                        <input type="checkbox" id="emailNotifications" checked>
                                        <span class="slider"></span>
                                    </label>
                                    <span class="switch-label">Send system notifications via email</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Enable SMS Notifications</label>
                                <div class="switch-group">
                                    <label class="switch">
                                        <input type="checkbox" id="smsNotifications">
                                        <span class="slider"></span>
                                    </label>
                                    <span class="switch-label">Send critical notifications via SMS</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Enable Push Notifications</label>
                                <div class="switch-group">
                                    <label class="switch">
                                        <input type="checkbox" id="pushNotifications">
                                        <span class="slider"></span>
                                    </label>
                                    <span class="switch-label">Send push notifications to mobile devices</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Notification Email Address</label>
                                <input type="email" class="form-input" placeholder="admin@bamenda.gov.cm">
                            </div>

                            <div class="form-group">
                                <label class="form-label">SMS Phone Number</label>
                                <input type="tel" class="form-input" placeholder="+237 233 000 000">
                            </div>
                        </div>

                        <div class="settings-section">
                            <h3 class="section-title">Alert Thresholds</h3>
                            
                            <div class="form-group">
                                <label class="form-label">CPU Alert Threshold (%)</label>
                                <input type="number" class="form-input" value="80" min="50" max="100">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Memory Alert Threshold (%)</label>
                                <input type="number" class="form-input" value="85" min="50" max="100">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Disk Alert Threshold (%)</label>
                                <input type="number" class="form-input" value="90" min="50" max="100">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Response Time Alert (ms)</label>
                                <input type="number" class="form-input" value="500" min="100" max="5000">
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="reset" class="btn btn-outline">Reset</button>
                            <button type="submit" class="btn btn-primary">Save Settings</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- User Management -->
<section class="user-management-section" id="user-management">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">User Management</h2>
            <p class="section-subtitle">Manage users, roles, and permissions</p>
        </div>

        <div class="user-management-content">
            <div class="management-tabs">
                <div class="tab-navigation">
                    <button class="tab-btn active" onclick="switchUserTab('users')">Users</button>
                    <button class="tab-btn" onclick="switchUserTab('roles')">Roles</button>
                    <button class="tab-btn" onclick="switchUserTab('permissions')">Permissions</button>
                    <button class="tab-btn" onclick="switchUserTab('sessions')">Active Sessions</button>
                </div>

                <!-- Users Tab -->
                <div class="tab-content active" id="users-tab">
                    <div class="users-header">
                        <div class="header-title">
                            <h3>User Accounts</h3>
                            <p class="header-description">Manage system users and their access</p>
                        </div>
                        <div class="header-actions">
                            <button class="btn btn-primary" onclick="addNewUser()">Add New User</button>
                            <button class="btn btn-outline" onclick="exportUsers()">Export Users</button>
                        </div>
                    </div>

                    <div class="users-filters">
                        <div class="filter-row">
                            <div class="form-group">
                                <input type="text" class="form-input" placeholder="Search users...">
                            </div>
                            <div class="form-group">
                                <select class="form-select">
                                    <option value="">All Roles</option>
                                    <option value="admin">Administrator</option>
                                    <option value="staff">Staff</option>
                                    <option value="citizen">Citizen</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-select">
                                    <option value="">All Status</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                    <option value="suspended">Suspended</option>
                                </select>
                            </div>
                            <button class="btn btn-primary">Apply Filters</button>
                        </div>
                    </div>

                    <div class="users-table">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Last Login</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="user-info">
                                            <div class="user-avatar">
                                                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                                                     alt="User avatar">
                                            </div>
                                            <div class="user-details">
                                                <span class="user-name">John Doe</span>
                                                <span class="user-id">ID: 1001</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>john.doe@bamenda.gov.cm</td>
                                    <td><span class="role-badge admin">Administrator</span></td>
                                    <td><span class="status-badge active">Active</span></td>
                                    <td>2024-03-20 10:30 AM</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn btn-sm btn-outline" onclick="editUser(1001)">Edit</button>
                                            <button class="btn btn-sm btn-outline" onclick="viewUser(1001)">View</button>
                                            <button class="btn btn-sm btn-danger" onclick="suspendUser(1001)">Suspend</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="user-info">
                                            <div class="user-avatar">
                                                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                                                     alt="User avatar">
                                            </div>
                                            <div class="user-details">
                                                <span class="user-name">Jane Smith</span>
                                                <span class="user-id">ID: 1002</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>jane.smith@bamenda.gov.cm</td>
                                    <td><span class="role-badge staff">Staff</span></td>
                                    <td><span class="status-badge active">Active</span></td>
                                    <td>2024-03-19 2:45 PM</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn btn-sm btn-outline" onclick="editUser(1002)">Edit</button>
                                            <button class="btn btn-sm btn-outline" onclick="viewUser(1002)">View</button>
                                            <button class="btn btn-sm btn-danger" onclick="suspendUser(1002)">Suspend</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="user-info">
                                            <div class="user-avatar">
                                                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                                                     alt="User avatar">
                                            </div>
                                            <div class="user-details">
                                                <span class="user-name">Robert Johnson</span>
                                                <span class="user-id">ID: 1003</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>robert.johnson@bamenda.gov.cm</td>
                                    <td><span class="role-badge citizen">Citizen</span></td>
                                    <td><span class="status-badge inactive">Inactive</span></td>
                                    <td>2024-03-15 9:15 AM</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn btn-sm btn-outline" onclick="editUser(1003)">Edit</button>
                                            <button class="btn btn-sm btn-outline" onclick="viewUser(1003)">View</button>
                                            <button class="btn btn-sm btn-success" onclick="activateUser(1003)">Activate</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="pagination">
                        <button class="btn btn-outline">Previous</button>
                        <span class="page-info">Page 1 of 10</span>
                        <button class="btn btn-outline">Next</button>
                    </div>
                </div>

                <!-- Roles Tab -->
                <div class="tab-content" id="roles-tab">
                    <div class="roles-header">
                        <div class="header-title">
                            <h3>User Roles</h3>
                            <p class="header-description">Define user roles and their permissions</p>
                        </div>
                        <div class="header-actions">
                            <button class="btn btn-primary" onclick="addNewRole()">Add New Role</button>
                        </div>
                    </div>

                    <div class="roles-grid">
                        <div class="role-card">
                            <div class="role-header">
                                <h4 class="role-name">Administrator</h4>
                                <div class="role-badge admin">System Admin</div>
                            </div>
                            <div class="role-description">
                                Full system access with all permissions including user management and system configuration.
                            </div>
                            <div class="role-stats">
                                <span class="stat-item">5 users</span>
                                <span class="stat-item">45 permissions</span>
                            </div>
                            <div class="role-actions">
                                <button class="btn btn-sm btn-outline">Edit Role</button>
                                <button class="btn btn-sm btn-outline">View Permissions</button>
                            </div>
                        </div>

                        <div class="role-card">
                            <div class="role-header">
                                <h4 class="role-name">Staff</h4>
                                <div class="role-badge staff">Staff</div>
                            </div>
                            <div class="role-description">
                                Access to staff functions including service management and citizen support.
                            </div>
                            <div class="role-stats">
                                <span class="stat-item">23 users</span>
                                <span class="stat-item">28 permissions</span>
                            </div>
                            <div class="role-actions">
                                <button class="btn btn-sm btn-outline">Edit Role</button>
                                <button class="btn btn-sm btn-outline">View Permissions</button>
                            </div>
                        </div>

                        <div class="role-card">
                            <div class="role-header">
                                <h4 class="role-name">Citizen</h4>
                                <div class="role-badge citizen">Citizen</div>
                            </div>
                            <div class="role-description">
                                Basic access for citizens to use public services and access their personal information.
                            </div>
                            <div class="role-stats">
                                <span class="stat-item">1,234 users</span>
                                <span class="stat-item">12 permissions</span>
                            </div>
                            <div class="role-actions">
                                <button class="btn btn-sm btn-outline">Edit Role</button>
                                <button class="btn btn-sm btn-outline">View Permissions</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Permissions Tab -->
                <div class="tab-content" id="permissions-tab">
                    <div class="permissions-header">
                        <div class="header-title">
                            <h3>System Permissions</h3>
                            <p class="header-description">Manage system permissions and access controls</p>
                        </div>
                        <div class="header-actions">
                            <button class="btn btn-primary" onclick="addNewPermission()">Add New Permission</button>
                        </div>
                    </div>

                    <div class="permissions-table">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>Permission Name</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>Assigned To</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>user.create</strong></td>
                                    <td><span class="category-badge user">User Management</span></td>
                                    <td>Create new user accounts</td>
                                    <td>Administrator</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn btn-sm btn-outline">Edit</button>
                                            <button class="btn btn-sm btn-outline">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>service.manage</strong></td>
                                    <td><span class="category-badge service">Services</span></td>
                                    <td>Manage public services and applications</td>
                                    <td>Administrator, Staff</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn btn-sm btn-outline">Edit</button>
                                            <button class="btn btn-sm btn-outline">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>system.config</strong></td>
                                    <td><span class="category-badge system">System</span></td>
                                    <td>Configure system settings and parameters</td>
                                    <td>Administrator</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn btn-sm btn-outline">Edit</button>
                                            <button class="btn btn-sm btn-outline">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Active Sessions Tab -->
                <div class="tab-content" id="sessions-tab">
                    <div class="sessions-header">
                        <div class="header-title">
                            <h3>Active Sessions</h3>
                            <p class="header-description">Monitor and manage active user sessions</p>
                        </div>
                        <div class="header-actions">
                            <button class="btn btn-danger" onclick="terminateAllSessions()">Terminate All Sessions</button>
                        </div>
                    </div>

                    <div class="sessions-table">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Session ID</th>
                                    <th>IP Address</th>
                                    <th>Started</th>
                                    <th>Last Activity</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="user-info">
                                            <div class="user-avatar">
                                                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                                                     alt="User avatar">
                                            </div>
                                            <div class="user-details">
                                                <span class="user-name">John Doe</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><code>sess_abc123def456</code></td>
                                    <td>192.168.1.100</td>
                                    <td>2024-03-20 10:30 AM</td>
                                    <td>2024-03-20 11:45 AM</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn btn-sm btn-outline">View Details</button>
                                            <button class="btn btn-sm btn-danger">Terminate</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="user-info">
                                            <div class="user-avatar">
                                                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                                                     alt="User avatar">
                                            </div>
                                            <div class="user-details">
                                                <span class="user-name">Jane Smith</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><code>sess_xyz789abc456</code></td>
                                    <td>192.168.1.101</td>
                                    <td>2024-03-19 2:45 PM</td>
                                    <td>2024-03-19 3:15 PM</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn btn-sm btn-outline">View Details</button>
                                            <button class="btn btn-sm btn-danger">Terminate</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Security Settings -->
<section class="security-settings-section" id="security-settings">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Security Configuration</h2>
            <p class="section-subtitle">Configure security policies and access controls</p>
        </div>

        <div class="security-content">
            <div class="security-tabs">
                <div class="tab-navigation">
                    <button class="tab-btn active" onclick="switchSecurityTab('authentication')">Authentication</button>
                    <button class="tab-btn" onclick="switchSecurityTab('passwords')">Password Policy</button>
                    <button class="tab-btn" onclick="switchSecurityTab('access')">Access Control</button>
                    <button class="tab-btn" onclick="switchSecurityTab('audit')">Audit Trail</button>
                </div>

                <!-- Authentication Tab -->
                <div class="tab-content active" id="authentication-tab">
                    <form id="authenticationSettingsForm">
                        <div class="settings-section">
                            <h3 class="section-title">Authentication Settings</h3>
                            
                            <div class="form-group">
                                <label class="form-label">Enable Two-Factor Authentication</label>
                                <div class="switch-group">
                                    <label class="switch">
                                        <input type="checkbox" id="twoFactorAuth" checked>
                                        <span class="slider"></span>
                                    </label>
                                    <span class="switch-label">Require 2FA for all administrative accounts</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Session Timeout (minutes)</label>
                                <input type="number" class="form-input" value="30" min="5" max="480">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Maximum Login Attempts</label>
                                <input type="number" class="form-input" value="5" min="3" max="10">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Lockout Duration (minutes)</label>
                                <input type="number" class="form-input" value="15" min="5" max="1440">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Enable IP Whitelist</label>
                                <div class="switch-group">
                                    <label class="switch">
                                        <input type="checkbox" id="ipWhitelist">
                                        <span class="slider"></span>
                                    </label>
                                    <span class="switch-label">Restrict access to whitelisted IP addresses only</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Whitelisted IP Addresses</label>
                                <textarea class="form-textarea" rows="4" placeholder="Enter IP addresses, one per line"></textarea>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="reset" class="btn btn-outline">Reset</button>
                            <button type="submit" class="btn btn-primary">Save Settings</button>
                        </div>
                    </form>
                </div>

                <!-- Password Policy Tab -->
                <div class="tab-content" id="passwords-tab">
                    <form id="passwordPolicyForm">
                        <div class="settings-section">
                            <h3 class="section-title">Password Requirements</h3>
                            
                            <div class="form-group">
                                <label class="form-label">Minimum Password Length</label>
                                <input type="number" class="form-input" value="8" min="6" max="32">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Require Uppercase Letters</label>
                                <div class="switch-group">
                                    <label class="switch">
                                        <input type="checkbox" id="requireUppercase" checked>
                                        <span class="slider"></span>
                                    </label>
                                    <span class="switch-label">Passwords must contain uppercase letters</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Require Lowercase Letters</label>
                                <div class="switch-group">
                                    <label class="switch">
                                        <input type="checkbox" id="requireLowercase" checked>
                                        <span class="slider"></span>
                                    </label>
                                    <span class="switch-label">Passwords must contain lowercase letters</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Require Numbers</label>
                                <div class="switch-group">
                                    <label class="switch">
                                        <input type="checkbox" id="requireNumbers" checked>
                                        <span class="slider"></span>
                                    </label>
                                    <span class="switch-label">Passwords must contain numbers</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Require Special Characters</label>
                                <div class="switch-group">
                                    <label class="switch">
                                        <input type="checkbox" id="requireSpecial" checked>
                                        <span class="slider"></span>
                                    </label>
                                    <span class="switch-label">Passwords must contain special characters</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Password Expiry (days)</label>
                                <input type="number" class="form-input" value="90" min="30" max="365">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Password History</label>
                                <input type="number" class="form-input" value="5" min="3" max="20">
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="reset" class="btn btn-outline">Reset</button>
                            <button type="submit" class="btn btn-primary">Save Settings</button>
                        </div>
                    </form>
                </div>

                <!-- Access Control Tab -->
                <div class="tab-content" id="access-tab">
                    <form id="accessControlForm">
                        <div class="settings-section">
                            <h3 class="section-title">Access Control Settings</h3>
                            
                            <div class="form-group">
                                <label class="form-label">Enable Role-Based Access Control</label>
                                <div class="switch-group">
                                    <label class="switch">
                                        <input type="checkbox" id="rbac" checked>
                                        <span class="slider"></span>
                                    </label>
                                    <span class="switch-label">Use role-based access control for permissions</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Default User Role</label>
                                <select class="form-select">
                                    <option value="citizen" selected>Citizen</option>
                                    <option value="staff">Staff</option>
                                    <option value="admin">Administrator</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Enable IP-Based Restrictions</label>
                                <div class="switch-group">
                                    <label class="switch">
                                        <input type="checkbox" id="ipRestrictions">
                                        <span class="slider"></span>
                                    </label>
                                    <span class="switch-label">Restrict access based on IP address and location</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Enable Time-Based Restrictions</label>
                                <div class="switch-group">
                                    <label class="switch">
                                        <input type="checkbox" id="timeRestrictions">
                                        <span class="slider"></span>
                                    </label>
                                    <span class="switch-label">Restrict access during specific hours</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Allowed Access Hours</label>
                                <div class="time-range">
                                    <input type="time" class="form-input" value="08:00">
                                    <span>to</span>
                                    <input type="time" class="form-input" value="18:00">
                                </div>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="reset" class="btn btn-outline">Reset</button>
                            <button type="submit" class="btn btn-primary">Save Settings</button>
                        </div>
                    </form>
                </div>

                <!-- Audit Trail Tab -->
                <div class="tab-content" id="audit-tab">
                    <div class="audit-header">
                        <div class="header-title">
                            <h3>Audit Trail Configuration</h3>
                            <p class="header-description">Configure audit logging and monitoring</p>
                        </div>
                        <div class="header-actions">
                            <button class="btn btn-outline" onclick="exportAuditLog()">Export Log</button>
                            <button class="btn btn-outline" onclick="clearAuditLog()">Clear Log</button>
                        </div>
                    </div>

                    <form id="auditSettingsForm">
                        <div class="settings-section">
                            <h3 class="section-title">Audit Logging</h3>
                            
                            <div class="form-group">
                                <label class="form-label">Enable Audit Logging</label>
                                <div class="switch-group">
                                    <label class="switch">
                                        <input type="checkbox" id="auditLogging" checked>
                                        <span class="slider"></span>
                                    </label>
                                    <span class="switch-label">Log all system activities and user actions</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Log Retention Period (days)</label>
                                <input type="number" class="form-input" value="90" min="30" max="365">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Log Level</label>
                                <select class="form-select">
                                    <option value="debug">Debug</option>
                                    <option value="info" selected>Info</option>
                                    <option value="warning">Warning</option>
                                    <option value="error">Error</option>
                                    <option value="critical">Critical</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Events to Log</label>
                                <div class="checkbox-group">
                                    <label class="checkbox-label">
                                        <input type="checkbox" name="auditEvents" value="login" checked>
                                        <span class="checkmark"></span>
                                        User Login/Logout
                                    </label>
                                    <label class="checkbox-label">
                                        <input type="checkbox" name="auditEvents" value="create" checked>
                                        <span class="checkmark"></span>
                                        Create Operations
                                    </label>
                                    <label class="checkbox-label">
                                        <input type="checkbox" name="auditEvents" value="update" checked>
                                        <span class="checkmark"></span>
                                        Update Operations
                                    </label>
                                    <label class="checkbox-label">
                                        <input type="checkbox" name="auditEvents" value="delete" checked>
                                        <span class="checkmark"></span>
                                        Delete Operations
                                    </label>
                                    <label class="checkbox-label">
                                        <input type="checkbox" name="auditEvents" value="system">
                                        <span class="checkmark"></span>
                                        System Changes
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="reset" class="btn btn-outline">Reset</button>
                            <button type="submit" class="btn btn-primary">Save Settings</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Include footer
require_once __DIR__ . '/../../includes/footer.php';
?>

<style>
/* Administration Settings Page Styles */
.admin-settings-hero {
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-container) 100%);
}

/* Quick Actions Section */
.quick-actions-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.actions-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: var(--spacing-xl);
}

.action-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
    cursor: pointer;
    transition: all 0.3s ease;
}

.action-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.action-icon {
    width: 4rem;
    height: 4rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-lg);
}

.action-icon .material-symbols-outlined {
    font-size: 2rem;
}

.action-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.action-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
}

/* System Status Section */
.system-status-section {
    padding: var(--spacing-3xl) 0;
}

.status-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: var(--spacing-lg);
}

.status-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.status-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.status-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: var(--spacing-lg);
}

.status-icon .material-symbols-outlined {
    font-size: 2rem;
}

.status-content {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

.status-number {
    font-size: 2rem;
    font-weight: 800;
    color: var(--primary);
}

.status-label {
    font-size: 1rem;
    color: var(--on-surface-variant);
    font-weight: 500;
}

.status-change {
    display: flex;
    align-items: center;
    gap: var(--spacing-xs);
    font-size: 0.75rem;
    font-weight: 600;
}

.status-change.normal {
    color: var(--on-surface-variant);
}

.status-change.good {
    color: var(--tertiary);
}

.status-change.warning {
    color: var(--secondary);
}

.status-change.critical {
    color: var(--error);
}

.status-bar {
    height: 8px;
    background-color: var(--surface-container);
    border-radius: var(--radius-full);
    overflow: hidden;
}

.status-fill {
    height: 100%;
    background-color: var(--primary);
    border-radius: var(--radius-full);
    transition: width 0.3s ease;
}

.system-health {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    margin-top: var(--spacing-xl);
}

.health-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
}

.health-metrics {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: var(--spacing-lg);
}

.metric-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--spacing-sm);
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
}

.metric-label {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.metric-value {
    font-size: 0.875rem;
    font-weight: 600;
    color: var(--primary);
}

.metric-value.good {
    color: var(--tertiary);
}

/* System Settings Section */
.system-settings-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.settings-content {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    overflow: hidden;
}

.settings-tabs {
    display: flex;
    flex-direction: column;
}

.tab-navigation {
    display: flex;
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.tab-btn {
    flex: 1;
    padding: var(--spacing-lg);
    border: none;
    background: none;
    color: var(--on-surface-variant);
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s ease;
    border-bottom: 3px solid transparent;
}

.tab-btn:hover {
    color: var(--primary);
    background-color: var(--surface-container-high);
}

.tab-btn.active {
    color: var(--primary);
    border-bottom-color: var(--primary);
    background-color: var(--surface-container-high);
}

.tab-content {
    display: none;
    padding: var(--spacing-2xl);
}

.tab-content.active {
    display: block;
}

.settings-section {
    margin-bottom: var(--spacing-2xl);
    padding-bottom: var(--spacing-xl);
    border-bottom: 1px solid var(--outline-variant);
}

.settings-section:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
}

.section-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
}

/* Form Styles */
.form-group {
    margin-bottom: var(--spacing-lg);
}

.form-label {
    display: block;
    font-size: 0.875rem;
    font-weight: 600;
    color: var(--on-surface);
    margin-bottom: var(--spacing-sm);
}

.form-input,
.form-select,
.form-textarea {
    width: 100%;
    padding: var(--spacing-sm) var(--spacing-md);
    border: 1px solid var(--outline-variant);
    border-radius: var(--radius-md);
    background-color: var(--surface-container-lowest);
    color: var(--on-surface);
    font-size: 0.875rem;
    transition: all 0.2s ease;
}

.form-input:focus,
.form-select:focus,
.form-textarea:focus {
    outline: none;
    border-color: var(--primary);
    box-shadow: 0 0 0 2px var(--primary-container);
}

.form-textarea {
    resize: vertical;
}

/* Switch Styles */
.switch-group {
    display: flex;
    align-items: center;
    gap: var(--spacing-md);
}

.switch {
    position: relative;
    display: inline-block;
    width: 3rem;
    height: 1.5rem;
}

.switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: var(--outline-variant);
    transition: 0.2s;
    border-radius: var(--radius-full);
}

.slider:before {
    position: absolute;
    content: "";
    height: 1.125rem;
    width: 1.125rem;
    left: 0.1875rem;
    bottom: 0.1875rem;
    background-color: white;
    transition: 0.2s;
    border-radius: var(--radius-full);
}

input:checked + .slider {
    background-color: var(--primary);
}

input:checked + .slider:before {
    transform: translateX(1.5rem);
}

.switch-label {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

/* Checkbox Styles */
.checkbox-group {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
}

.checkbox-label {
    display: flex;
    align-items: flex-start;
    gap: var(--spacing-sm);
    cursor: pointer;
    color: var(--on-surface);
    line-height: 1.5;
}

.checkbox-label input[type="checkbox"] {
    display: none;
    margin-top: 2px;
}

.checkmark {
    width: 1.25rem;
    height: 1.25rem;
    border: 2px solid var(--outline-variant);
    border-radius: var(--radius-xs);
    position: relative;
    transition: all 0.2s ease;
    flex-shrink: 0;
    margin-top: 2px;
}

.checkbox-label input[type="checkbox"]:checked + .checkmark {
    background-color: var(--primary);
    border-color: var(--primary);
}

.checkbox-label input[type="checkbox"]:checked + .checkmark::after {
    content: '✓';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: var(--on-primary);
    font-size: 0.875rem;
    font-weight: 700;
}

/* Test Email Group */
.test-email-group {
    display: flex;
    gap: var(--spacing-md);
}

.test-email-group .form-input {
    flex: 1;
}

/* Time Range */
.time-range {
    display: flex;
    align-items: center;
    gap: var(--spacing-md);
}

.time-range span {
    color: var(--on-surface-variant);
    font-weight: 500;
}

/* Form Actions */
.form-actions {
    display: flex;
    gap: var(--spacing-lg);
    justify-content: flex-end;
    margin-top: var(--spacing-xl);
}

/* User Management Section */
.user-management-section {
    padding: var(--spacing-3xl) 0;
}

.user-management-content {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    overflow: hidden;
}

.management-tabs {
    display: flex;
    flex-direction: column;
}

.users-header,
.roles-header,
.permissions-header,
.sessions-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--spacing-xl);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.header-title h3 {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-xs);
}

.header-description {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.header-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Users Filters */
.users-filters {
    padding: var(--spacing-lg);
    background-color: var(--surface-container-high);
    border-bottom: 1px solid var(--outline-variant);
}

.filter-row {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: var(--spacing-md);
    align-items: end;
}

/* Data Table */
.users-table,
.permissions-table,
.sessions-table {
    padding: var(--spacing-lg);
}

.data-table {
    width: 100%;
    border-collapse: collapse;
}

.data-table th,
.data-table td {
    padding: var(--spacing-md);
    text-align: left;
    border-bottom: 1px solid var(--outline-variant);
}

.data-table th {
    font-weight: 600;
    color: var(--on-surface);
    background-color: var(--surface-container);
}

.data-table tr:hover {
    background-color: var(--surface-container);
}

/* User Info */
.user-info {
    display: flex;
    align-items: center;
    gap: var(--spacing-md);
}

.user-avatar {
    width: 2.5rem;
    height: 2.5rem;
    border-radius: var(--radius-full);
    overflow: hidden;
}

.user-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.user-details {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xs);
}

.user-name {
    font-weight: 600;
    color: var(--primary);
}

.user-id {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

/* Badges */
.role-badge,
.status-badge,
.category-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.role-badge.admin {
    background-color: var(--error);
    color: var(--on-error);
}

.role-badge.staff {
    background-color: var(--primary);
    color: var(--on-primary);
}

.role-badge.citizen {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.status-badge.active {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.status-badge.inactive {
    background-color: var(--outline-variant);
    color: var(--on-surface-variant);
}

.status-badge.suspended {
    background-color: var(--error);
    color: var(--on-error);
}

.category-badge.user {
    background-color: var(--primary);
    color: var(--on-primary);
}

.category-badge.service {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.category-badge.system {
    background-color: var(--error);
    color: var(--on-error);
}

/* Action Buttons */
.action-buttons {
    display: flex;
    gap: var(--spacing-sm);
}

/* Roles Grid */
.roles-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
    padding: var(--spacing-lg);
}

.role-card {
    background-color: var(--surface-container);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.role-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.role-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: var(--spacing-md);
}

.role-name {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
}

.role-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.role-stats {
    display: flex;
    gap: var(--spacing-lg);
    margin-bottom: var(--spacing-lg);
}

.stat-item {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.role-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Pagination */
.pagination {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--spacing-lg);
    border-top: 1px solid var(--outline-variant);
}

.page-info {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

/* Security Settings Section */
.security-settings-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.security-content {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    overflow: hidden;
}

.security-tabs {
    display: flex;
    flex-direction: column;
}

.audit-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--spacing-xl);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

/* Responsive Design */
@media (max-width: 768px) {
    .actions-grid {
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: var(--spacing-lg);
    }
    
    .status-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: var(--spacing-md);
    }
    
    .tab-navigation {
        flex-wrap: wrap;
    }
    
    .tab-btn {
        flex: 1;
        min-width: 120px;
        font-size: 0.75rem;
        padding: var(--spacing-sm);
    }
    
    .filter-row {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .roles-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .health-metrics {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .test-email-group {
        flex-direction: column;
        gap: var(--spacing-md);
    }
    
    .time-range {
        flex-direction: column;
        align-items: flex-start;
        gap: var(--spacing-sm);
    }
    
    .form-actions {
        flex-direction: column;
        align-items: stretch;
    }
    
    .header-actions {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .action-buttons {
        flex-direction: column;
        gap: var(--spacing-xs);
    }
}

@media (max-width: 480px) {
    .action-card {
        padding: var(--spacing-lg);
    }
    
    .action-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .action-icon .material-symbols-outlined {
        font-size: 1.5rem;
    }
    
    .status-card {
        padding: var(--spacing-lg);
    }
    
    .status-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .status-icon .material-symbols-outlined {
        font-size: 1.5rem;
    }
    
    .tab-content {
        padding: var(--spacing-lg);
    }
    
    .settings-section {
        margin-bottom: var(--spacing-lg);
        padding-bottom: var(--spacing-md);
    }
    
    .data-table {
        font-size: 0.75rem;
    }
    
    .data-table th,
    .data-table td {
        padding: var(--spacing-sm);
    }
    
    .user-info {
        flex-direction: column;
        align-items: flex-start;
        gap: var(--spacing-sm);
    }
    
    .role-card {
        padding: var(--spacing-md);
    }
    
    .system-health {
        padding: var(--spacing-lg);
    }
    
    .status-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .metric-item {
        flex-direction: column;
        align-items: flex-start;
        gap: var(--spacing-xs);
    }
}
</style>

<script>
// Quick action functions
function openSystemSettings() {
    document.getElementById('system-settings').scrollIntoView({ behavior: 'smooth' });
}

function openUserManagement() {
    document.getElementById('user-management').scrollIntoView({ behavior: 'smooth' });
}

function openSecuritySettings() {
    document.getElementById('security-settings').scrollIntoView({ behavior: 'smooth' });
}

function openSystemMaintenance() {
    alert('System maintenance tools would open here. In production, this would show maintenance options and system updates.');
}

function openSystemLogs() {
    alert('System logs viewer would open here. In production, this would show detailed system logs and audit trails.');
}

function openBackupRestore() {
    alert('Backup and restore interface would open here. In production, this would show backup management and data restoration options.');
}

// Tab switching functions
function switchTab(tabName) {
    // Hide all tab contents
    document.querySelectorAll('.tab-content').forEach(content => {
        content.classList.remove('active');
    });
    
    // Remove active class from all tab buttons
    document.querySelectorAll('.tab-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    
    // Show selected tab content
    document.getElementById(tabName + '-tab').classList.add('active');
    
    // Add active class to clicked button
    event.target.classList.add('active');
}

function switchUserTab(tabName) {
    // Hide all tab contents
    document.querySelectorAll('#user-management .tab-content').forEach(content => {
        content.classList.remove('active');
    });
    
    // Remove active class from all tab buttons
    document.querySelectorAll('#user-management .tab-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    
    // Show selected tab content
    document.getElementById(tabName + '-tab').classList.add('active');
    
    // Add active class to clicked button
    event.target.classList.add('active');
}

function switchSecurityTab(tabName) {
    // Hide all tab contents
    document.querySelectorAll('#security-settings .tab-content').forEach(content => {
        content.classList.remove('active');
    });
    
    // Remove active class from all tab buttons
    document.querySelectorAll('#security-settings .tab-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    
    // Show selected tab content
    document.getElementById(tabName + '-tab').classList.add('active');
    
    // Add active class to clicked button
    event.target.classList.add('active');
}

// Form submission handlers
document.getElementById('generalSettingsForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('General settings saved successfully!');
});

document.getElementById('emailSettingsForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Email configuration saved successfully!');
});

document.getElementById('databaseSettingsForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Database settings saved successfully!');
});

document.getElementById('performanceSettingsForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Performance settings saved successfully!');
});

document.getElementById('notificationsSettingsForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Notification settings saved successfully!');
});

document.getElementById('authenticationSettingsForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Authentication settings saved successfully!');
});

document.getElementById('passwordPolicyForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Password policy saved successfully!');
});

document.getElementById('accessControlForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Access control settings saved successfully!');
});

document.getElementById('auditSettingsForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Audit settings saved successfully!');
});

// Test email function
function testEmail() {
    const emailInput = document.querySelector('#email-tab input[type="email"]');
    const email = emailInput.value;
    
    if (!email) {
        alert('Please enter a test email address.');
        return;
    }
    
    alert(`Test email sent to: ${email}`);
}

// User management functions
function addNewUser() {
    alert('Add new user form would open here. In production, this would show a user creation form.');
}

function exportUsers() {
    alert('Exporting user data... In production, this would generate and download a user export file.');
}

function editUser(userId) {
    alert(`Editing user ID: ${userId}. In production, this would open the user edit form.`);
}

function viewUser(userId) {
    alert(`Viewing user ID: ${userId}. In production, this would show detailed user information.`);
}

function suspendUser(userId) {
    if (confirm(`Are you sure you want to suspend user ID: ${userId}?`)) {
        alert(`User ID: ${userId} suspended successfully.`);
    }
}

function activateUser(userId) {
    alert(`User ID: ${userId} activated successfully.`);
}

function addNewRole() {
    alert('Add new role form would open here. In production, this would show a role creation form.');
}

function addNewPermission() {
    alert('Add new permission form would open here. In production, this would show a permission creation form.');
}

function terminateAllSessions() {
    if (confirm('Are you sure you want to terminate all active sessions?')) {
        alert('All active sessions terminated successfully.');
    }
}

function exportAuditLog() {
    alert('Exporting audit log... In production, this would generate and download the audit log file.');
}

function clearAuditLog() {
    if (confirm('Are you sure you want to clear the audit log? This action cannot be undone.')) {
        alert('Audit log cleared successfully.');
    }
}

// Progress animation on scroll
window.addEventListener('scroll', function() {
    const statusCards = document.querySelectorAll('.status-card');
    statusCards.forEach(card => {
        const rect = card.getBoundingClientRect();
        const isVisible = rect.top < window.innerHeight && rect.bottom > 0;
        if (isVisible) {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            setTimeout(() => {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, 100);
        }
    });
});

// Auto-refresh system status
function refreshSystemStatus() {
    // In production, this would fetch real-time system status
    console.log('Refreshing system status...');
    
    // Update system health timestamp
    const lastUpdateElement = document.querySelector('.metric-item:last-child .metric-value');
    if (lastUpdateElement) {
        lastUpdateElement.textContent = 'Just now';
    }
}

// Refresh system status every 30 seconds
setInterval(refreshSystemStatus, 30000);

// Initialize tooltips and other UI elements
document.addEventListener('DOMContentLoaded', function() {
    // Add hover effects to interactive elements
    document.querySelectorAll('.btn, .action-card, .role-card').forEach(element => {
        element.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.02)';
        });
        
        element.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });
});
</script>
