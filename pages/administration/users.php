<?php
/**
 * Bamenda City Council E-Governance Platform
 * Administration User Management Page
 */

// Include access control
require_once __DIR__ . '/../../core/access-control.php';

// Require admin role to access this page
require_role('admin');

// Set page metadata
$page_title = 'User Management | Bamenda City Council';
$page_description = 'Comprehensive user management system for Bamenda City Council including staff accounts, permissions, roles, and access control.';
$page_keywords = 'user management, staff accounts, permissions, roles, access control, Bamenda council administration';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Administration', 'url' => '../index.php'],
    ['title' => 'User Management', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero users-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-government-building.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">User Management</span>
            <h1 class="hero-title">Staff Accounts & Permissions</h1>
            <p class="hero-subtitle">
                Comprehensive user management system including staff account administration, role-based access control, permission management, and security monitoring for Bamenda City Council personnel.
            </p>
            <div class="hero-actions">
                <a href="#user-directory" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">people</span>
                    User Directory
                </a>
                <a href="#add-user" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">person_add</span>
                    Add User
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">User Management Actions</h2>
            <p class="section-subtitle">Quick access to user administration</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openDirectory()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">people</span>
                </div>
                <h3 class="action-title">User Directory</h3>
                <p class="action-description">View all users</p>
            </div>

            <div class="action-card" onclick="openAddUser()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">person_add</span>
                </div>
                <h3 class="action-title">Add User</h3>
                <p class="action-description">Create account</p>
            </div>

            <div class="action-card" onclick="openRoles()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">admin_panel_settings</span>
                </div>
                <h3 class="action-title">Roles & Permissions</h3>
                <p class="action-description">Manage access</p>
            </div>

            <div class="action-card" onclick="openSecurity()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">security</span>
                </div>
                <h3 class="action-title">Security</h3>
                <p class="action-description">Access monitoring</p>
            </div>

            <div class="action-card" onclick="openBulk()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">upload_file</span>
                </div>
                <h3 class="action-title">Bulk Operations</h3>
                <p class="action-description">Batch management</p>
            </div>

            <div class="action-card" onclick="openAudit()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">history</span>
                </div>
                <h3 class="action-title">Audit Logs</h3>
                <p class="action-description">Activity tracking</p>
            </div>
        </div>
    </div>
</section>

<!-- User Statistics -->
<section class="user-stats-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">User Overview</h2>
            <p class="section-subtitle">Real-time user statistics</p>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">456</div>
                    <div class="stat-label">Total Users</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+12 new users</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">login</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">389</div>
                    <div class="stat-label">Active Today</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+23 active users</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">admin_panel_settings</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">45</div>
                    <div class="stat-label">Admin Users</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+3 new admins</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">pending_actions</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">12</div>
                    <div class="stat-label">Pending Approvals</div>
                    <div class="stat-change negative">
                        <span class="material-symbols-outlined">trending_down</span>
                        <span>-5 pending</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">block</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">3</div>
                    <div class="stat-label">Blocked Users</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_down</span>
                        <span>-2 blocked</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">schedule</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">98%</div>
                    <div class="stat-label">System Uptime</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+0.2% stability</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- User Directory -->
<section class="user-directory-section" id="user-directory">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">User Directory</h2>
            <p class="section-subtitle">Browse and manage user accounts</p>
        </div>

        <div class="directory-controls">
            <div class="search-bar">
                <input type="text" class="search-input" placeholder="Search users by name, email, or department...">
                <button class="btn btn-primary">
                    <span class="material-symbols-outlined">search</span>
                    Search
                </button>
            </div>
            <div class="filter-controls">
                <select class="filter-select">
                    <option value="">All Departments</option>
                    <option value="admin">Administration</option>
                    <option value="business">Business Services</option>
                    <option value="public">Public Services</option>
                    <option value="emergency">Emergency Services</option>
                    <option value="civic">Civic Engagement</option>
                    <option value="youth">Youth Services</option>
                </select>
                <select class="filter-select">
                    <option value="">All Roles</option>
                    <option value="admin">Administrator</option>
                    <option value="manager">Manager</option>
                    <option value="staff">Staff</option>
                    <option value="supervisor">Supervisor</option>
                </select>
                <select class="filter-select">
                    <option value="">All Status</option>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                    <option value="pending">Pending</option>
                    <option value="blocked">Blocked</option>
                </select>
            </div>
        </div>

        <div class="users-table">
            <div class="table-header">
                <div class="table-actions">
                    <button class="btn btn-sm btn-primary">Add New User</button>
                    <button class="btn btn-sm btn-outline">Export Users</button>
                </div>
                <div class="table-info">
                    <span>Showing 1-10 of 456 users</span>
                </div>
            </div>
            <div class="table-content">
                <table class="users-table-data">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Department</th>
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
                                        <img src="/assets/images/user-avatar-placeholder.png" alt="User">
                                    </div>
                                    <div class="user-details">
                                        <div class="user-name">John Doe</div>
                                        <div class="user-email">john.doe@bamenda.gov</div>
                                    </div>
                                </div>
                            </td>
                            <td>Administration</td>
                            <td>Administrator</td>
                            <td><span class="status-badge active">Active</span></td>
                            <td>2 hours ago</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-icon" title="Edit">
                                        <span class="material-symbols-outlined">edit</span>
                                    </button>
                                    <button class="btn-icon" title="View">
                                        <span class="material-symbols-outlined">visibility</span>
                                    </button>
                                    <button class="btn-icon" title="Permissions">
                                        <span class="material-symbols-outlined">admin_panel_settings</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="user-info">
                                    <div class="user-avatar">
                                        <img src="/assets/images/user-avatar-placeholder.png" alt="User">
                                    </div>
                                    <div class="user-details">
                                        <div class="user-name">Jane Smith</div>
                                        <div class="user-email">jane.smith@bamenda.gov</div>
                                    </div>
                                </div>
                            </td>
                            <td>Business Services</td>
                            <td>Manager</td>
                            <td><span class="status-badge active">Active</span></td>
                            <td>1 hour ago</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-icon" title="Edit">
                                        <span class="material-symbols-outlined">edit</span>
                                    </button>
                                    <button class="btn-icon" title="View">
                                        <span class="material-symbols-outlined">visibility</span>
                                    </button>
                                    <button class="btn-icon" title="Permissions">
                                        <span class="material-symbols-outlined">admin_panel_settings</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="user-info">
                                    <div class="user-avatar">
                                        <img src="/assets/images/user-avatar-placeholder.png" alt="User">
                                    </div>
                                    <div class="user-details">
                                        <div class="user-name">Michael Johnson</div>
                                        <div class="user-email">michael.j@bamenda.gov</div>
                                    </div>
                                </div>
                            </td>
                            <td>Public Services</td>
                            <td>Staff</td>
                            <td><span class="status-badge active">Active</span></td>
                            <td>30 minutes ago</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-icon" title="Edit">
                                        <span class="material-symbols-outlined">edit</span>
                                    </button>
                                    <button class="btn-icon" title="View">
                                        <span class="material-symbols-outlined">visibility</span>
                                    </button>
                                    <button class="btn-icon" title="Permissions">
                                        <span class="material-symbols-outlined">admin_panel_settings</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="user-info">
                                    <div class="user-avatar">
                                        <img src="/assets/images/user-avatar-placeholder.png" alt="User">
                                    </div>
                                    <div class="user-details">
                                        <div class="user-name">Sarah Williams</div>
                                        <div class="user-email">sarah.w@bamenda.gov</div>
                                    </div>
                                </div>
                            </td>
                            <td>Emergency Services</td>
                            <td>Supervisor</td>
                            <td><span class="status-badge active">Active</span></td>
                            <td>5 minutes ago</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-icon" title="Edit">
                                        <span class="material-symbols-outlined">edit</span>
                                    </button>
                                    <button class="btn-icon" title="View">
                                        <span class="material-symbols-outlined">visibility</span>
                                    </button>
                                    <button class="btn-icon" title="Permissions">
                                        <span class="material-symbols-outlined">admin_panel_settings</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="user-info">
                                    <div class="user-avatar">
                                        <img src="/assets/images/user-avatar-placeholder.png" alt="User">
                                    </div>
                                    <div class="user-details">
                                        <div class="user-name">Robert Brown</div>
                                        <div class="user-email">robert.b@bamenda.gov</div>
                                    </div>
                                </div>
                            </td>
                            <td>Civic Engagement</td>
                            <td>Staff</td>
                            <td><span class="status-badge pending">Pending</span></td>
                            <td>Never</td>
                            <td>
                                <div class="action-buttons">
                                    <button class="btn-icon" title="Edit">
                                        <span class="material-symbols-outlined">edit</span>
                                    </button>
                                    <button class="btn-icon" title="View">
                                        <span class="material-symbols-outlined">visibility</span>
                                    </button>
                                    <button class="btn-icon" title="Permissions">
                                        <span class="material-symbols-outlined">admin_panel_settings</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="table-footer">
                <div class="pagination">
                    <button class="btn btn-outline" disabled>Previous</button>
                    <button class="btn btn-primary">1</button>
                    <button class="btn btn-outline">2</button>
                    <button class="btn btn-outline">3</button>
                    <button class="btn btn-outline">Next</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Add User Form -->
<section class="add-user-section" id="add-user">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Add New User</h2>
            <p class="section-subtitle">Create a new staff account</p>
        </div>

        <div class="form-container">
            <form id="addUserForm">
                <div class="form-section">
                    <h3 class="section-title">Personal Information</h3>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">First Name *</label>
                            <input type="text" class="form-input" placeholder="Enter first name" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Last Name *</label>
                            <input type="text" class="form-input" placeholder="Enter last name" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Email Address *</label>
                            <input type="email" class="form-input" placeholder="user@bamenda.gov" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Phone Number *</label>
                            <input type="tel" class="form-input" placeholder="+237 233 000 000" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Employee ID *</label>
                            <input type="text" class="form-input" placeholder="STF2024001" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Job Title *</label>
                            <input type="text" class="form-input" placeholder="Administrative Officer" required>
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">Account Configuration</h3>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Department *</label>
                            <select class="form-select" required>
                                <option value="">Select department</option>
                                <option value="admin">Administration</option>
                                <option value="business">Business Services</option>
                                <option value="public">Public Services</option>
                                <option value="emergency">Emergency Services</option>
                                <option value="civic">Civic Engagement</option>
                                <option value="youth">Youth Services</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Role *</label>
                            <select class="form-select" required>
                                <option value="">Select role</option>
                                <option value="admin">Administrator</option>
                                <option value="manager">Manager</option>
                                <option value="supervisor">Supervisor</option>
                                <option value="staff">Staff</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Username *</label>
                        <input type="text" class="form-input" placeholder="johndoe" required>
                        <small class="form-help">Username will be used for login. Must be unique.</small>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Password *</label>
                            <input type="password" class="form-input" placeholder="Enter password" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Confirm Password *</label>
                            <input type="password" class="form-input" placeholder="Confirm password" required>
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">Permissions & Access</h3>
                    
                    <div class="form-group">
                        <label class="form-label">Account Status</label>
                        <div class="radio-group">
                            <label class="radio-label">
                                <input type="radio" name="status" value="active" checked>
                                <span class="radio-mark"></span>
                                <span>Active</span>
                            </label>
                            <label class="radio-label">
                                <input type="radio" name="status" value="pending">
                                <span class="radio-mark"></span>
                                <span>Pending Approval</span>
                            </label>
                            <label class="radio-label">
                                <input type="radio" name="status" value="inactive">
                                <span class="radio-mark"></span>
                                <span>Inactive</span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Access Permissions</label>
                        <div class="checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="permissions" value="dashboard" checked>
                                <span class="checkmark"></span>
                                <span>Dashboard Access</span>
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="permissions" value="reports">
                                <span class="checkmark"></span>
                                <span>View Reports</span>
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="permissions" value="users">
                                <span class="checkmark"></span>
                                <span>User Management</span>
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="permissions" value="settings">
                                <span class="checkmark"></span>
                                <span>System Settings</span>
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="permissions" value="export">
                                <span class="checkmark"></span>
                                <span>Data Export</span>
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="permissions" value="audit">
                                <span class="checkmark"></span>
                                <span>Audit Logs</span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Security Settings</label>
                        <div class="checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="security" value="2fa" checked>
                                <span class="checkmark"></span>
                                <span>Require Two-Factor Authentication</span>
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="security" value="session_timeout" checked>
                                <span class="checkmark"></span>
                                <span>Auto-logout after inactivity</span>
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="security" value="password_expiry">
                                <span class="checkmark"></span>
                                <span>Force password change every 90 days</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="reset" class="btn btn-outline">Reset</button>
                    <button type="submit" class="btn btn-primary">Create User</button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Roles & Permissions -->
<section class="roles-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Roles & Permissions</h2>
            <p class="section-subtitle">Manage user roles and access permissions</p>
        </div>

        <div class="roles-grid">
            <!-- Administrator Role -->
            <div class="role-card">
                <div class="role-header">
                    <div class="role-icon">
                        <span class="material-symbols-outlined">admin_panel_settings</span>
                    </div>
                    <div class="role-badge admin">Administrator</div>
                </div>
                <div class="role-content">
                    <h3 class="role-title">Administrator</h3>
                    <p class="role-description">Full system access with all permissions including user management, system settings, and administrative functions.</p>
                    <div class="role-stats">
                        <div class="stat-item">
                            <span class="stat-number">45</span>
                            <span class="stat-label">Users</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">Full</span>
                            <span class="stat-label">Access</span>
                        </div>
                    </div>
                    <div class="role-permissions">
                        <h4 class="permissions-title">Key Permissions:</h4>
                        <div class="permissions-list">
                            <div class="permission-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>User Management</span>
                            </div>
                            <div class="permission-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>System Settings</span>
                            </div>
                            <div class="permission-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Security Configuration</span>
                            </div>
                            <div class="permission-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Data Export & Import</span>
                            </div>
                        </div>
                    </div>
                    <div class="role-actions">
                        <button class="btn btn-sm btn-primary">Edit Role</button>
                        <button class="btn btn-sm btn-outline">View Users</button>
                    </div>
                </div>
            </div>

            <!-- Manager Role -->
            <div class="role-card">
                <div class="role-header">
                    <div class="role-icon">
                        <span class="material-symbols-outlined">supervisor_account</span>
                    </div>
                    <div class="role-badge manager">Manager</div>
                </div>
                <div class="role-content">
                    <h3 class="role-title">Manager</h3>
                    <p class="role-description">Department-level access with management permissions for team oversight, reporting, and departmental administration.</p>
                    <div class="role-stats">
                        <div class="stat-item">
                            <span class="stat-number">89</span>
                            <span class="stat-label">Users</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">Dept</span>
                            <span class="stat-label">Access</span>
                        </div>
                    </div>
                    <div class="role-permissions">
                        <h4 class="permissions-title">Key Permissions:</h4>
                        <div class="permissions-list">
                            <div class="permission-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Team Management</span>
                            </div>
                            <div class="permission-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Department Reports</span>
                            </div>
                            <div class="permission-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Task Assignment</span>
                            </div>
                            <div class="permission-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Performance Reviews</span>
                            </div>
                        </div>
                    </div>
                    <div class="role-actions">
                        <button class="btn btn-sm btn-primary">Edit Role</button>
                        <button class="btn btn-sm btn-outline">View Users</button>
                    </div>
                </div>
            </div>

            <!-- Staff Role -->
            <div class="role-card">
                <div class="role-header">
                    <div class="role-icon">
                        <span class="material-symbols-outlined">person</span>
                    </div>
                    <div class="role-badge staff">Staff</div>
                </div>
                <div class="role-content">
                    <h3 class="role-title">Staff</h3>
                    <p class="role-description">Basic access for day-to-day operations including service management, customer support, and standard administrative tasks.</p>
                    <div class="role-stats">
                        <div class="stat-item">
                            <span class="stat-number">322</span>
                            <span class="stat-label">Users</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">Basic</span>
                            <span class="stat-label">Access</span>
                        </div>
                    </div>
                    <div class="role-permissions">
                        <h4 class="permissions-title">Key Permissions:</h4>
                        <div class="permissions-list">
                            <div class="permission-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Service Management</span>
                            </div>
                            <div class="permission-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Customer Support</span>
                            </div>
                            <div class="permission-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Basic Reporting</span>
                            </div>
                            <div class="permission-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Task Management</span>
                            </div>
                        </div>
                    </div>
                    <div class="role-actions">
                        <button class="btn btn-sm btn-primary">Edit Role</button>
                        <button class="btn btn-sm btn-outline">View Users</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Common questions about user management</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How do I reset a user's password?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Navigate to the User Directory, find the user, and click the "Edit" button. In the user edit form, you can reset the password or send a password reset link to the user's email.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Can I customize user permissions?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, you can customize permissions by editing individual user accounts or creating custom roles. Navigate to Roles & Permissions to modify existing roles or create new ones with specific access levels.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How do I bulk import users?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Use the Bulk Operations feature to import multiple users from a CSV file. The template includes required fields like name, email, department, and role. Ensure data validation before import.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What happens when I block a user?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Blocked users cannot access the system and their sessions are terminated immediately. They receive a notification about the account block. You can unblock users at any time.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How are audit logs maintained?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>All user actions are automatically logged in the audit system including login attempts, permission changes, and administrative actions. Logs are retained for 7 years and can be exported for compliance.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Can users request access to additional permissions?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, users can submit permission requests through their profile. These requests are routed to their department manager or system administrator for approval based on the access level requested.</p>
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
/* User Management Page Styles */
.users-hero {
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

/* User Statistics Section */
.user-stats-section {
    padding: var(--spacing-3xl) 0;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: var(--spacing-lg);
}

.stat-card {
    display: grid;
    grid-template-columns: auto 1fr;
    gap: var(--spacing-lg);
    align-items: center;
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.stat-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.stat-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.stat-icon .material-symbols-outlined {
    font-size: 2rem;
}

.stat-content {
    flex: 1;
}

.stat-number {
    font-size: 2rem;
    font-weight: 800;
    color: var(--primary);
    margin-bottom: var(--spacing-xs);
    line-height: 1;
}

.stat-label {
    font-size: 1rem;
    color: var(--on-surface-variant);
    font-weight: 500;
    margin-bottom: var(--spacing-sm);
}

.stat-change {
    display: flex;
    align-items: center;
    gap: var(--spacing-xs);
    font-size: 0.75rem;
    font-weight: 600;
}

.stat-change.positive {
    color: var(--tertiary);
}

.stat-change.negative {
    color: var(--error);
}

.stat-change .material-symbols-outlined {
    font-size: 1rem;
}

/* User Directory Section */
.user-directory-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.directory-controls {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-lg);
    margin-bottom: var(--spacing-xl);
}

.search-bar {
    display: flex;
    gap: var(--spacing-md);
}

.search-input {
    flex: 1;
    padding: var(--spacing-sm) var(--spacing-md);
    border: 1px solid var(--outline-variant);
    border-radius: var(--radius-md);
    background-color: var(--surface-container-lowest);
    color: var(--on-surface);
    font-size: 0.875rem;
}

.filter-controls {
    display: flex;
    gap: var(--spacing-md);
    flex-wrap: wrap;
}

.filter-select {
    padding: var(--spacing-sm) var(--spacing-md);
    border: 1px solid var(--outline-variant);
    border-radius: var(--radius-md);
    background-color: var(--surface-container-lowest);
    color: var(--on-surface);
    font-size: 0.875rem;
}

.users-table {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    overflow: hidden;
}

.table-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.table-actions {
    display: flex;
    gap: var(--spacing-sm);
}

.table-info {
    color: var(--on-surface-variant);
    font-size: 0.875rem;
}

.table-content {
    overflow-x: auto;
}

.users-table-data {
    width: 100%;
    border-collapse: collapse;
}

.users-table-data th {
    background-color: var(--surface-container);
    padding: var(--spacing-md);
    text-align: left;
    font-weight: 600;
    color: var(--primary);
    border-bottom: 1px solid var(--outline-variant);
}

.users-table-data td {
    padding: var(--spacing-md);
    border-bottom: 1px solid var(--outline-variant);
}

.user-info {
    display: flex;
    align-items: center;
    gap: var(--spacing-md);
}

.user-avatar {
    width: 2.5rem;
    height: 2.5rem;
    border-radius: var(--radius-lg);
    overflow: hidden;
    flex-shrink: 0;
}

.user-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.user-name {
    font-weight: 600;
    color: var(--primary);
}

.user-email {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.status-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.status-badge.active {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.status-badge.pending {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.status-badge.inactive {
    background-color: var(--outline);
    color: var(--on-outline);
}

.status-badge.blocked {
    background-color: var(--error);
    color: var(--on-error);
}

.action-buttons {
    display: flex;
    gap: var(--spacing-xs);
}

.btn-icon {
    width: 2rem;
    height: 2rem;
    border: none;
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.2s ease;
}

.btn-icon:hover {
    background-color: var(--surface-container-high);
}

.btn-icon .material-symbols-outlined {
    font-size: 1rem;
    color: var(--on-surface);
}

.table-footer {
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-top: 1px solid var(--outline-variant);
}

.pagination {
    display: flex;
    gap: var(--spacing-sm);
    justify-content: center;
}

/* Add User Form Section */
.add-user-section {
    padding: var(--spacing-3xl) 0;
}

.form-container {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    max-width: 800px;
    margin: 0 auto;
}

/* Form Styles */
.form-section {
    padding: var(--spacing-xl);
    border-bottom: 1px solid var(--outline-variant);
}

.form-section:last-child {
    border-bottom: none;
}

.section-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
}

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
.form-select {
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
.form-select:focus {
    outline: none;
    border-color: var(--primary);
    box-shadow: 0 0 0 2px var(--primary-container);
}

.form-help {
    display: block;
    font-size: 0.75rem;
    color: var(--on-surface-variant);
    margin-top: var(--spacing-xs);
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--spacing-lg);
}

.radio-group {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-md);
}

.radio-label,
.checkbox-label {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    cursor: pointer;
    color: var(--on-surface);
    font-size: 0.875rem;
}

.radio-label input[type="radio"],
.checkbox-label input[type="checkbox"] {
    display: none;
}

.radio-mark,
.checkmark {
    width: 1.25rem;
    height: 1.25rem;
    border: 2px solid var(--outline-variant);
    border-radius: var(--radius-xs);
    position: relative;
    transition: all 0.2s ease;
    flex-shrink: 0;
}

.radio-mark {
    border-radius: 50%;
}

.radio-label input[type="radio"]:checked + .radio-mark,
.checkbox-label input[type="checkbox"]:checked + .checkmark {
    background-color: var(--primary);
    border-color: var(--primary);
}

.radio-label input[type="radio"]:checked + .radio-mark::after,
.checkbox-label input[type="checkbox"]:checked + .checkmark::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 6px;
    height: 6px;
    background-color: var(--on-primary);
    border-radius: 50%;
}

.checkbox-label input[type="checkbox"]:checked + .checkmark::after {
    content: '✓';
    width: auto;
    height: auto;
    color: var(--on-primary);
    font-size: 0.875rem;
    font-weight: 700;
}

.checkbox-group {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: var(--spacing-sm);
}

.form-actions {
    display: flex;
    gap: var(--spacing-lg);
    justify-content: center;
    padding: var(--spacing-xl);
}

/* Roles Section */
.roles-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.roles-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.role-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.role-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.role-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.role-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.role-icon .material-symbols-outlined {
    font-size: 2rem;
}

.role-badge {
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

.role-badge.manager {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.role-badge.staff {
    background-color: var(--primary);
    color: var(--on-primary);
}

.role-content {
    padding: var(--spacing-lg);
}

.role-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
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
    text-align: center;
}

.stat-number {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-xs);
}

.stat-label {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.role-permissions {
    margin-bottom: var(--spacing-lg);
}

.permissions-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.permissions-list {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
}

.permission-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.permission-item .material-symbols-outlined {
    font-size: 1rem;
    color: var(--primary);
}

.role-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* FAQ Section */
.faq-section {
    padding: var(--spacing-3xl) 0;
}

.faq-list {
    max-width: 800px;
    margin: 0 auto;
}

.faq-item {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    margin-bottom: var(--spacing-md);
    overflow: hidden;
}

.faq-question {
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
    padding: var(--spacing-lg);
    font-weight: 600;
    color: var(--primary);
    transition: background-color 0.2s ease;
}

.faq-question:hover {
    background-color: var(--surface-container);
}

.faq-toggle {
    font-size: 1.25rem;
    transition: transform 0.2s ease;
}

.faq-item.active .faq-toggle {
    transform: rotate(45deg);
}

.faq-answer {
    display: none;
    padding: 0 var(--spacing-lg) var(--spacing-lg);
    color: var(--on-surface-variant);
    line-height: 1.6;
}

.faq-item.active .faq-answer {
    display: block;
}

/* Responsive Design */
@media (max-width: 768px) {
    .actions-grid {
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: var(--spacing-lg);
    }
    
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: var(--spacing-md);
    }
    
    .directory-controls {
        flex-direction: column;
        gap: var(--spacing-md);
    }
    
    .search-bar {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .filter-controls {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .form-row {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .checkbox-group {
        grid-template-columns: 1fr;
        gap: var(--spacing-sm);
    }
    
    .roles-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
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
    
    .users-table {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .form-container {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .role-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .stats-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .stat-card {
        grid-template-columns: 1fr;
        text-align: center;
        gap: var(--spacing-md);
    }
    
    .table-actions {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .table-actions .btn {
        width: 100%;
    }
    
    .pagination {
        flex-wrap: wrap;
        justify-content: center;
    }
    
    .user-info {
        flex-direction: column;
        align-items: flex-start;
        gap: var(--spacing-sm);
    }
}
</style>

<script>
// Quick action functions
function openDirectory() {
    document.getElementById('user-directory').scrollIntoView({ behavior: 'smooth' });
}

function openAddUser() {
    document.getElementById('add-user').scrollIntoView({ behavior: 'smooth' });
}

function openRoles() {
    document.getElementById('roles').scrollIntoView({ behavior: 'smooth' });
}

function openSecurity() {
    alert('Security monitoring portal would open here. In production, this would show security alerts, access logs, and threat detection.');
}

function openBulk() {
    alert('Bulk operations portal would open here. In production, this would show bulk user import, export, and management tools.');
}

function openAudit() {
    alert('Audit logs portal would open here. In production, this would show detailed user activity logs and compliance reports.');
}

// User search functionality
document.querySelector('.search-input')?.addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    console.log('Searching for:', searchTerm);
    // In production, this would filter the user table
});

// Filter functionality
document.querySelectorAll('.filter-select').forEach(select => {
    select.addEventListener('change', function() {
        console.log('Filter changed:', this.value);
        // In production, this would filter the user table
    });
});

// Add user form submission
document.getElementById('addUserForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate required fields
    const firstName = document.querySelector('input[placeholder*="first name"]').value;
    const lastName = document.querySelector('input[placeholder*="last name"]').value;
    const email = document.querySelector('input[type="email"]').value;
    const phone = document.querySelector('input[type="tel"]').value;
    const employeeId = document.querySelector('input[placeholder*="STF"]').value;
    const jobTitle = document.querySelector('input[placeholder*="Administrative"]').value;
    const department = document.querySelector('select[required]').value;
    const role = document.querySelectorAll('select[required]')[1].value;
    const username = document.querySelector('input[placeholder*="johndoe"]').value;
    const password = document.querySelectorAll('input[type="password"]')[0].value;
    const confirmPassword = document.querySelectorAll('input[type="password"]')[1].value;
    const permissions = document.querySelectorAll('input[name="permissions"]:checked');
    
    if (!firstName || !lastName || !email || !phone || !employeeId || !jobTitle || !department || !role || !username || !password || !confirmPassword) {
        alert('Please fill in all required fields.');
        return;
    }
    
    // Validate email
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert('Please enter a valid email address.');
        return;
    }
    
    // Validate phone
    const phoneRegex = /^\+237\s\d{3}\s\d{3}\s\d{3}$/;
    if (!phoneRegex.test(phone)) {
        alert('Please enter a valid phone number in format: +237 233 000 000');
        return;
    }
    
    // Validate password match
    if (password !== confirmPassword) {
        alert('Passwords do not match.');
        return;
    }
    
    // Validate permissions
    if (permissions.length === 0) {
        alert('Please select at least one permission.');
        return;
    }
    
    alert(`User account created successfully for ${firstName} ${lastName}! The user will receive login credentials via email.`);
    // In production, this would submit the user creation request
});

// Table action buttons
document.querySelectorAll('.btn-icon').forEach(button => {
    button.addEventListener('click', function() {
        const action = this.getAttribute('title');
        const userName = this.closest('tr').querySelector('.user-name').textContent;
        console.log(`${action} user: ${userName}`);
        // In production, this would perform the respective action
    });
});

// Role actions
document.querySelectorAll('.role-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Edit Role')) {
        button.addEventListener('click', function() {
            const roleTitle = this.closest('.role-card').querySelector('.role-title').textContent;
            alert(`Editing role: ${roleTitle}`);
        });
    }
});

document.querySelectorAll('.role-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('View Users')) {
        button.addEventListener('click', function() {
            const roleTitle = this.closest('.role-card').querySelector('.role-title').textContent;
            alert(`Viewing users with role: ${roleTitle}`);
        });
    }
});

// FAQ toggle function
function toggleFAQ(element) {
    const faqItem = element.parentElement;
    faqItem.classList.toggle('active');
}

// Progress animation on scroll
window.addEventListener('scroll', function() {
    const statCards = document.querySelectorAll('.stat-card');
    statCards.forEach(card => {
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

// Auto-refresh user statistics
function refreshUserStats() {
    // In production, this would fetch real-time user statistics
    console.log('Refreshing user statistics...');
    
    // Simulate active user updates
    const activeElement = document.querySelectorAll('.stat-number')[1];
    if (activeElement) {
        const currentCount = parseInt(activeElement.textContent);
        const change = Math.floor(Math.random() * 10) - 5; // -5 to +5
        const newCount = Math.max(0, currentCount + change);
        activeElement.textContent = newCount;
    }
}

// Refresh statistics every 45 seconds for real-time monitoring
setInterval(refreshUserStats, 45000);
</script>
