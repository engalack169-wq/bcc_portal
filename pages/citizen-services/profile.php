<?php
/**
 * Bamenda City Council E-Governance Platform
 * Citizen Services Profile Page - Enhanced Version
 */

// Include access control
require_once __DIR__ . '/../../core/access-control.php';

// Require authentication to access this page
require_authentication();

$page_title = 'My Profile | Bamenda City Council';
$page_description = 'Manage your profile, services, documents, and account settings for Bamenda City Council e-governance platform.';
$page_keywords = 'user profile, account settings, personal information, documents, Bamenda council';

$breadcrumbs = [
    ['title' => 'Dashboard', 'url' => '/stitch1/pages/citizen-services/dashboard.php'],
    ['title' => 'My Profile', 'url' => '#']
];

// Get session user info (replace with database queries in production)
$user = [
    'id' => $_SESSION['user_id'] ?? 1,
    'first_name' => $_SESSION['user_name'] ?? 'John',
    'last_name' => $_SESSION['user_name'] ? explode(' ', $_SESSION['user_name'])[1] ?? 'Doe' : 'Doe',
    'email' => $_SESSION['user_email'] ?? 'john.doe@example.com',
    'phone' => '+237 233 000 000',
    'date_of_birth' => '1990-01-15',
    'gender' => 'Male',
    'address' => '123 Main Street, Bamenda',
    'city' => 'Bamenda',
    'postal_code' => '00000',
    'joined_date' => 'January 2024',
    'verified' => true,
    'profile_completion' => 85
];

require_once __DIR__ . '/../../includes/header.php';
?>


<!-- Profile Hero Section -->
<section class="profile-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-government-building.jpg" alt="Bamenda City Council">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="profile-header-top">
            <div>
                <h1 class="hero-title">My Profile</h1>
                <p class="hero-subtitle">Manage your personal information, documents, and account preferences</p>
            </div>
            <div class="profile-quick-stats">
                <div class="stat">
                    <span class="stat-value">5</span>
                    <span class="stat-label">Active Services</span>
                </div>
                <div class="stat">
                    <span class="stat-value">12</span>
                    <span class="stat-label">Applications</span>
                </div>
                <div class="stat">
                    <span class="stat-value">100%</span>
                    <span class="stat-label">Verified</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Profile Container with Sidebar -->
<section class="profile-container-section">
    <div class="container">
        <!-- Profile Sidebar Navigation -->
        <aside class="profile-sidebar">
            <div class="profile-card profile-summary">
                <div class="profile-avatar-section">
                    <div class="avatar-image">
                        <img src="/stitch1/assets/images/default-profile.jpg" alt="Profile Picture">
                    </div>
                    <button class="btn btn-sm btn-outline btn-upload" id="uploadPhotoBtn">
                        <span class="material-symbols-outlined">camera_alt</span>
                        Change Photo
                    </button>
                </div>
                <div class="profile-summary-info">
                    <h2 class="profile-full-name"><?php echo $user['first_name'] . ' ' . $user['last_name']; ?></h2>
                    <p class="profile-email"><?php echo $user['email']; ?></p>
                    <div class="profile-badges">
                        <?php if($user['verified']): ?>
                            <span class="badge badge-success">
                                <span class="material-symbols-outlined">verified</span>
                                Verified
                            </span>
                        <?php endif; ?>
                        <span class="badge badge-secondary">
                            <span class="material-symbols-outlined">language</span>
                            Citizen
                        </span>
                    </div>
                </div>
                <div class="profile-completion">
                    <div class="completion-label">
                        <span>Profile Completion</span>
                        <span class="completion-percent"><?php echo $user['profile_completion']; ?>%</span>
                    </div>
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: <?php echo $user['profile_completion']; ?>%"></div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Navigation Menu -->
            <nav class="profile-nav">
                <button class="profile-nav-item active" data-section="overview">
                    <span class="material-symbols-outlined">dashboard</span>
                    <span>Overview</span>
                </button>
                <button class="profile-nav-item" data-section="personal">
                    <span class="material-symbols-outlined">person</span>
                    <span>Personal Info</span>
                </button>
                <button class="profile-nav-item" data-section="documents">
                    <span class="material-symbols-outlined">description</span>
                    <span>Documents</span>
                </button>
                <button class="profile-nav-item" data-section="services">
                    <span class="material-symbols-outlined">receipt_long</span>
                    <span>Applications</span>
                </button>
                <button class="profile-nav-item" data-section="payments">
                    <span class="material-symbols-outlined">payment</span>
                    <span>Payments</span>
                </button>
                <button class="profile-nav-item" data-section="notifications">
                    <span class="material-symbols-outlined">notifications</span>
                    <span>Notifications</span>
                    <span class="badge-counter">3</span>
                </button>
                <button class="profile-nav-item" data-section="settings">
                    <span class="material-symbols-outlined">settings</span>
                    <span>Settings</span>
                </button>
            </nav>

            <!-- Member Info -->
            <div class="profile-card profile-member-info">
                <div class="member-stat">
                    <span class="stat-label">Member Since</span>
                    <span class="stat-value"><?php echo $user['joined_date']; ?></span>
                </div>
                <div class="member-stat">
                    <span class="stat-label">Account Status</span>
                    <span class="stat-badge">Active</span>
                </div>
            </div>
        </aside>

        <!-- Profile Content Area -->
        <main class="profile-content">
            <!-- Overview Section -->
            <section class="profile-section active" data-section="overview">
                <div class="section-header">
                    <h2 class="section-title">Welcome Back, <?php echo $user['first_name']; ?>!</h2>
                    <p class="section-subtitle">Here's a quick overview of your account and recent activities</p>
                </div>

                <!-- Dashboard Cards -->
                <div class="dashboard-cards">
                    <div class="dashboard-card">
                        <div class="card-icon">
                            <span class="material-symbols-outlined">assignment</span>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Pending Applications</h3>
                            <p class="card-value">3</p>
                            <p class="card-description">You have 3 applications awaiting review</p>
                        </div>
                        <a href="#services" class="card-link btn btn-sm btn-outline">View</a>
                    </div>

                    <div class="dashboard-card">
                        <div class="card-icon">
                            <span class="material-symbols-outlined">document_scanner</span>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Documents Needed</h3>
                            <p class="card-value">1</p>
                            <p class="card-description">Please upload missing documents</p>
                        </div>
                        <a href="#documents" class="card-link btn btn-sm btn-outline">Upload</a>
                    </div>

                    <div class="dashboard-card">
                        <div class="card-icon">
                            <span class="material-symbols-outlined">account_balance_wallet</span>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Outstanding Payments</h3>
                            <p class="card-value">GHS 250</p>
                            <p class="card-description">Tax and service fees due</p>
                        </div>
                        <a href="#payments" class="card-link btn btn-sm btn-outline">Pay Now</a>
                    </div>
                </div>

                <!-- Recent Activity Section -->
                <div class="activity-section">
                    <div class="section-header">
                        <h3 class="section-title">Recent Activity</h3>
                    </div>
                    <div class="activity-timeline">
                        <div class="activity-item">
                            <div class="activity-dot"></div>
                            <div class="activity-content">
                                <h4 class="activity-title">Business License Application Approved</h4>
                                <p class="activity-description">Your application for a small business trading license was approved</p>
                                <span class="activity-date">2024-12-15</span>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-dot"></div>
                            <div class="activity-content">
                                <h4 class="activity-title">Property Tax Payment Received</h4>
                                <p class="activity-description">Your Q4 property tax payment has been processed</p>
                                <span class="activity-date">2024-12-10</span>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-dot"></div>
                            <div class="activity-content">
                                <h4 class="activity-title">New Document Request</h4>
                                <p class="activity-description">Your property registration request requires additional documentation</p>
                                <span class="activity-date">2024-12-05</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Personal Information Section -->
            <section class="profile-section" data-section="personal">
                <div class="section-header">
                    <h2 class="section-title">Personal Information</h2>
                    <p class="section-subtitle">Update your personal details and contact information</p>
                </div>

                <form class="profile-form" id="personalInfoForm">
                    <!-- Basic Information -->
                    <div class="form-card">
                        <h3 class="form-section-title">
                            <span class="material-symbols-outlined">person</span>
                            Basic Information
                        </h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">First Name *</label>
                                <input type="text" name="first_name" class="form-input" value="<?php echo $user['first_name']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Last Name *</label>
                                <input type="text" name="last_name" class="form-input" value="<?php echo $user['last_name']; ?>" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Date of Birth</label>
                                <input type="date" name="date_of_birth" class="form-input" value="<?php echo $user['date_of_birth']; ?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Gender</label>
                                <select name="gender" class="form-input">
                                    <option value="male" <?php echo $user['gender'] === 'Male' ? 'selected' : ''; ?>>Male</option>
                                    <option value="female" <?php echo $user['gender'] === 'Female' ? 'selected' : ''; ?>>Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="form-card">
                        <h3 class="form-section-title">
                            <span class="material-symbols-outlined">mail</span>
                            Contact Information
                        </h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Email Address *</label>
                                <input type="email" name="email" class="form-input" value="<?php echo $user['email']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Phone Number *</label>
                                <input type="tel" name="phone" class="form-input" value="<?php echo $user['phone']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <!-- Address Information -->
                    <div class="form-card">
                        <h3 class="form-section-title">
                            <span class="material-symbols-outlined">home</span>
                            Address Information
                        </h3>
                        <div class="form-group">
                            <label class="form-label">Residential Address</label>
                            <input type="text" name="address" class="form-input" value="<?php echo $user['address']; ?>">
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">City/District</label>
                                <input type="text" name="city" class="form-input" value="<?php echo $user['city']; ?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Postal Code</label>
                                <input type="text" name="postal_code" class="form-input" value="<?php echo $user['postal_code']; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="reset" class="btn btn-outline">
                            <span class="material-symbols-outlined">refresh</span>
                            Reset
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <span class="material-symbols-outlined">check</span>
                            Save Changes
                        </button>
                    </div>
                </form>
            </section>

            <!-- Documents Section -->
            <section class="profile-section" data-section="documents">
                <div class="section-header">
                    <h2 class="section-title">My Documents</h2>
                    <p class="section-subtitle">Upload and manage your important documents</p>
                </div>

                <div class="documents-upload">
                    <div class="upload-area">
                        <span class="material-symbols-outlined">cloud_upload</span>
                        <h3>Upload Documents</h3>
                        <p>Drag and drop files here or click to browse</p>
                        <input type="file" id="docUpload" multiple hidden>
                        <button type="button" class="btn btn-sm btn-outline" onclick="document.getElementById('docUpload').click();">
                            <span class="material-symbols-outlined">folder_open</span>
                            Select Files
                        </button>
                    </div>
                </div>

                <div class="documents-list">
                    <div class="documents-header">
                        <h3 class="section-title">Uploaded Documents</h3>
                        <span class="badge"><?php echo rand(3, 8); ?> Documents</span>
                    </div>
                    <div class="document-item">
                        <div class="doc-icon">
                            <span class="material-symbols-outlined">description</span>
                        </div>
                        <div class="doc-info">
                            <h4 class="doc-name">National ID Card Scans</h4>
                            <p class="doc-date">Uploaded: 2024-12-10</p>
                        </div>
                        <div class="doc-status">
                            <span class="badge badge-success">Verified</span>
                        </div>
                        <button class="btn btn-sm btn-outline">
                            <span class="material-symbols-outlined">download</span>
                        </button>
                    </div>
                    <div class="document-item">
                        <div class="doc-icon">
                            <span class="material-symbols-outlined">description</span>
                        </div>
                        <div class="doc-info">
                            <h4 class="doc-name">Proof of Residence</h4>
                            <p class="doc-date">Uploaded: 2024-12-05</p>
                        </div>
                        <div class="doc-status">
                            <span class="badge badge-warning">Pending Review</span>
                        </div>
                        <button class="btn btn-sm btn-outline">
                            <span class="material-symbols-outlined">download</span>
                        </button>
                    </div>
                    <div class="document-item">
                        <div class="doc-icon">
                            <span class="material-symbols-outlined">description</span>
                        </div>
                        <div class="doc-info">
                            <h4 class="doc-name">Business Registration Certificate</h4>
                            <p class="doc-date">Uploaded: 2024-11-20</p>
                        </div>
                        <div class="doc-status">
                            <span class="badge badge-success">Verified</span>
                        </div>
                        <button class="btn btn-sm btn-outline">
                            <span class="material-symbols-outlined">download</span>
                        </button>
                    </div>
                </div>
            </section>

            <!-- Applications/Services Section -->
            <section class="profile-section" data-section="services">
                <div class="section-header">
                    <h2 class="section-title">My Applications</h2>
                    <p class="section-subtitle">Track the status of your service requests and applications</p>
                </div>

                <div class="applications-grid">
                    <div class="application-card">
                        <div class="app-header">
                            <div class="app-icon">
                                <span class="material-symbols-outlined">business</span>
                            </div>
                            <div>
                                <h3 class="app-title">Business License Application</h3>
                                <p class="app-id">Ref: BLA-2024-12045</p>
                            </div>
                        </div>
                        <div class="app-body">
                            <div class="app-timeline">
                                <div class="timeline-step completed">
                                    <span class="material-symbols-outlined">check_circle</span>
                                    <span>Submitted</span>
                                </div>
                                <div class="timeline-step completed">
                                    <span class="material-symbols-outlined">check_circle</span>
                                    <span>Reviewed</span>
                                </div>
                                <div class="timeline-step completed">
                                    <span class="material-symbols-outlined">check_circle</span>
                                    <span>Approved</span>
                                </div>
                            </div>
                            <div class="app-meta">
                                <span class="meta-item">
                                    <span class="material-symbols-outlined">calendar_today</span>
                                    Submitted: 2024-11-15
                                </span>
                                <span class="meta-item">
                                    <span class="material-symbols-outlined">access_time</span>
                                    Approved: 2024-12-10
                                </span>
                            </div>
                        </div>
                        <div class="app-footer">
                            <span class="badge badge-success">Approved</span>
                            <button class="btn btn-sm btn-outline">View Details</button>
                        </div>
                    </div>

                    <div class="application-card">
                        <div class="app-header">
                            <div class="app-icon">
                                <span class="material-symbols-outlined">apartment</span>
                            </div>
                            <div>
                                <h3 class="app-title">Property Registration</h3>
                                <p class="app-id">Ref: PRP-2024-12067</p>
                            </div>
                        </div>
                        <div class="app-body">
                            <div class="app-timeline">
                                <div class="timeline-step completed">
                                    <span class="material-symbols-outlined">check_circle</span>
                                    <span>Submitted</span>
                                </div>
                                <div class="timeline-step active">
                                    <span class="material-symbols-outlined">hourglass_empty</span>
                                    <span>Under Review</span>
                                </div>
                                <div class="timeline-step">
                                    <span class="material-symbols-outlined">schedule</span>
                                    <span>Completion</span>
                                </div>
                            </div>
                            <div class="app-meta">
                                <span class="meta-item">
                                    <span class="material-symbols-outlined">calendar_today</span>
                                    Submitted: 2024-12-05
                                </span>
                            </div>
                        </div>
                        <div class="app-footer">
                            <span class="badge badge-warning">Pending</span>
                            <button class="btn btn-sm btn-outline">View Details</button>
                        </div>
                    </div>

                    <div class="application-card">
                        <div class="app-header">
                            <div class="app-icon">
                                <span class="material-symbols-outlined">assignment</span>
                            </div>
                            <div>
                                <h3 class="app-title">Building Permit Application</h3>
                                <p class="app-id">Ref: BPA-2024-12089</p>
                            </div>
                        </div>
                        <div class="app-body">
                            <div class="app-timeline">
                                <div class="timeline-step completed">
                                    <span class="material-symbols-outlined">check_circle</span>
                                    <span>Submitted</span>
                                </div>
                                <div class="timeline-step">
                                    <span class="material-symbols-outlined">schedule</span>
                                    <span>Review</span>
                                </div>
                                <div class="timeline-step">
                                    <span class="material-symbols-outlined">schedule</span>
                                    <span>Approval</span>
                                </div>
                            </div>
                            <div class="app-meta">
                                <span class="meta-item">
                                    <span class="material-symbols-outlined">calendar_today</span>
                                    Submitted: 2024-12-12
                                </span>
                            </div>
                        </div>
                        <div class="app-footer">
                            <span class="badge badge-secondary">In Queue</span>
                            <button class="btn btn-sm btn-outline">View Details</button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Payments Section -->
            <section class="profile-section" data-section="payments">
                <div class="section-header">
                    <h2 class="section-title">Payment History</h2>
                    <p class="section-subtitle">View and manage your payments and invoices</p>
                </div>

                <div class="payments-summary">
                    <div class="summary-card">
                        <h3 class="summary-label">Outstanding Balance</h3>
                        <p class="summary-value text-error">GHS 250.00</p>
                        <button class="btn btn-sm btn-primary">Pay Now</button>
                    </div>
                    <div class="summary-card">
                        <h3 class="summary-label">Total Paid (2024)</h3>
                        <p class="summary-value">GHS 2,450.00</p>
                    </div>
                    <div class="summary-card">
                        <h3 class="summary-label">Next Due Date</h3>
                        <p class="summary-value">2025-03-31</p>
                    </div>
                </div>

                <div class="payments-table">
                    <div class="table-header">
                        <div class="col-date">Date</div>
                        <div class="col-description">Description</div>
                        <div class="col-amount">Amount</div>
                        <div class="col-status">Status</div>
                        <div class="col-action">Action</div>
                    </div>
                    <div class="table-row">
                        <div class="col-date">2024-12-01</div>
                        <div class="col-description">Property Tax Q4 2024</div>
                        <div class="col-amount">GHS 500.00</div>
                        <div class="col-status"><span class="badge badge-success">Paid</span></div>
                        <div class="col-action">
                            <button class="btn btn-xs btn-outline">Invoice</button>
                        </div>
                    </div>
                    <div class="table-row">
                        <div class="col-date">2024-09-15</div>
                        <div class="col-description">Business Renewal Fee</div>
                        <div class="col-amount">GHS 250.00</div>
                        <div class="col-status"><span class="badge badge-error">Unpaid</span></div>
                        <div class="col-action">
                            <button class="btn btn-xs btn-primary">Pay</button>
                        </div>
                    </div>
                    <div class="table-row">
                        <div class="col-date">2024-06-10</div>
                        <div class="col-description">Annual Service Fee</div>
                        <div class="col-amount">GHS 100.00</div>
                        <div class="col-status"><span class="badge badge-success">Paid</span></div>
                        <div class="col-action">
                            <button class="btn btn-xs btn-outline">Invoice</button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Notifications Section -->
            <section class="profile-section" data-section="notifications">
                <div class="section-header">
                    <h2 class="section-title">Notifications</h2>
                    <p class="section-subtitle">Manage your notification preferences and view recent alerts</p>
                </div>

                <div class="notifications-list">
                    <div class="notification-item unread">
                        <div class="notification-icon">
                            <span class="material-symbols-outlined">info</span>
                        </div>
                        <div class="notification-content">
                            <h3 class="notification-title">Missing Document Required</h3>
                            <p class="notification-message">Your property registration application requires additional proof of residence</p>
                            <span class="notification-date">Today at 10:30 AM</span>
                        </div>
                        <button class="btn btn-xs btn-outline">Dismiss</button>
                    </div>

                    <div class="notification-item unread">
                        <div class="notification-icon">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                        <div class="notification-content">
                            <h3 class="notification-title">Application Approved</h3>
                            <p class="notification-message">Your business license application has been approved. You can now pick up your certificate</p>
                            <span class="notification-date">Yesterday at 2:45 PM</span>
                        </div>
                        <button class="btn btn-xs btn-outline">Dismiss</button>
                    </div>

                    <div class="notification-item">
                        <div class="notification-icon">
                            <span class="material-symbols-outlined">warning</span>
                        </div>
                        <div class="notification-content">
                            <h3 class="notification-title">Payment Due Soon</h3>
                            <p class="notification-message">Your property tax payment is due on March 31, 2025. Click to pay online now</p>
                            <span class="notification-date">3 days ago</span>
                        </div>
                        <button class="btn btn-xs btn-outline">Dismiss</button>
                    </div>
                </div>

                <div class="notification-settings">
                    <h3 class="section-title">Notification Preferences</h3>
                    <div class="settings-list">
                        <div class="setting-item">
                            <div class="setting-info">
                                <h4 class="setting-name">Email Notifications</h4>
                                <p class="setting-description">Receive important updates via email</p>
                            </div>
                            <div class="toggle-switch">
                                <input type="checkbox" id="emailNotif" checked>
                                <label for="emailNotif"></label>
                            </div>
                        </div>
                        <div class="setting-item">
                            <div class="setting-info">
                                <h4 class="setting-name">SMS Alerts</h4>
                                <p class="setting-description">Get critical alerts via text message</p>
                            </div>
                            <div class="toggle-switch">
                                <input type="checkbox" id="smsNotif" checked>
                                <label for="smsNotif"></label>
                            </div>
                        </div>
                        <div class="setting-item">
                            <div class="setting-info">
                                <h4 class="setting-name">In-App Notifications</h4>
                                <p class="setting-description">Show notifications within the application</p>
                            </div>
                            <div class="toggle-switch">
                                <input type="checkbox" id="appNotif" checked>
                                <label for="appNotif"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Settings Section -->
            <section class="profile-section" data-section="settings">
                <div class="section-header">
                    <h2 class="section-title">Account Settings</h2>
                    <p class="section-subtitle">Manage your account preferences and security</p>
                </div>

                <div class="settings-cards">
                    <div class="settings-card">
                        <div class="setting-icon">
                            <span class="material-symbols-outlined">lock</span>
                        </div>
                        <div class="setting-content">
                            <h3 class="setting-title">Password & Security</h3>
                            <p class="setting-description">Change your password and manage security settings</p>
                            <div class="setting-details">
                                <span class="detail-item">Last changed: 3 months ago</span>
                                <span class="detail-item">Two-Factor Auth: Disabled</span>
                            </div>
                        </div>
                        <button class="btn btn-sm btn-primary" data-action="change-password">Change Password</button>
                    </div>

                    <div class="settings-card">
                        <div class="setting-icon">
                            <span class="material-symbols-outlined">lock</span>
                        </div>
                        <div class="setting-content">
                            <h3 class="setting-title">Two-Factor Authentication</h3>
                            <p class="setting-description">Enable 2FA for enhanced account security</p>
                            <div class="setting-details">
                                <span class="detail-item">Status: Not Enabled</span>
                                <span class="detail-item">Methods: Authenticator, Email, SMS</span>
                            </div>
                        </div>
                        <button class="btn btn-sm btn-primary" data-action="setup-2fa">Enable 2FA</button>

                    <div class="settings-card">
                        <div class="setting-icon">
                            <span class="material-symbols-outlined">privacy_tip</span>
                        </div>
                        <div class="setting-content">
                            <h3 class="setting-title">Privacy Settings</h3>
                            <p class="setting-description">Control who can see your information</p>
                            <div class="setting-details">
                                <span class="detail-item">Profile visibility: Public</span>
                                <span class="detail-item">Data sharing: Limited</span>
                            </div>
                        </div>
                        <button class="btn btn-sm btn-outline" data-action="manage-privacy">Manage Privacy</button>
                    </div>

                    <div class="settings-card">
                        <div class="setting-icon">
                            <span class="material-symbols-outlined">devices</span>
                        </div>
                        <div class="setting-content">
                            <h3 class="setting-title">Connected Devices</h3>
                            <p class="setting-description">View and manage devices accessing your account</p>
                            <div class="setting-details">
                                <span class="detail-item">Active sessions: 2</span>
                                <span class="detail-item">Last login: Today at 9:15 AM</span>
                            </div>
                        </div>
                        <button class="btn btn-sm btn-outline" data-action="manage-devices">Manage Devices</button>
                    </div>

                    <div class="settings-card">
                        <div class="setting-icon">
                            <span class="material-symbols-outlined">delete</span>
                        </div>
                        <div class="setting-content">
                            <h3 class="setting-title">Delete Account</h3>
                            <p class="setting-description">Permanently delete your account and all data</p>
                            <div class="setting-details">
                                <span class="detail-item">Cannot be undone</span>
                                <span class="detail-item">Data will be retained for 30 days</span>
                            </div>
                        </div>
                        <button class="btn btn-sm btn-error" data-action="delete-account">Delete Account</button>
                    </div>
                </div>
            </section>
        </main>
    </div>
</section>

            <div class="setting-card">
                <div class="setting-header">
                    <h3 class="setting-title">Notification Preferences</h3>
                    <p class="setting-description">Manage email and SMS notifications</p>
                </div>
                <button class="btn btn-sm btn-outline">Manage Notifications</button>
            </div>
            <div class="setting-card">
                <div class="setting-header">
                    <h3 class="setting-title">Privacy Settings</h3>
                    <p class="setting-description">Control your data privacy and sharing preferences</p>
                </div>
                <button class="btn btn-sm btn-outline">Privacy Settings</button>
            </div>
            <div class="setting-card">
                <div class="setting-header">
                    <h3 class="setting-title">Connected Accounts</h3>
                    <p class="setting-description">Manage linked accounts and services</p>
                </div>
                <button class="btn btn-sm btn-outline">Manage Accounts</button>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>

<!-- Profile API Integration JavaScript -->
<script src="../../assets/js/profile-integration.js"></script>

<style>
/* ===== PROFILE HERO SECTION ===== */
.profile-hero {
    min-height: 350px;
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-container) 100%);
    padding: var(--spacing-xl) 0;
    position: relative;
    overflow: hidden;
}

.profile-hero .hero-background {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    opacity: 0.3;
}

.profile-hero .hero-overlay {
    background: rgba(0, 0, 0, 0.4);
}

.profile-header-top {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: var(--spacing-xl);
    position: relative;
    z-index: 1;
}

.profile-header-top h1 {
    color: var(--on-primary);
    font-size: 2.5rem;
    font-weight: 800;
    margin-bottom: var(--spacing-md);
}

.profile-header-top .hero-subtitle {
    color: rgba(255, 255, 255, 0.9);
    font-size: 1.125rem;
}

.profile-quick-stats {
    display: flex;
    gap: var(--spacing-xl);
}

.profile-quick-stats .stat {
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(10px);
    padding: var(--spacing-lg);
    border-radius: var(--radius-lg);
    border: 1px solid rgba(255, 255, 255, 0.2);
    text-align: center;
    min-width: 120px;
    color: white;
}

.stat-value {
    display: block;
    font-size: 1.875rem;
    font-weight: 700;
    margin-bottom: var(--spacing-xs);
}

.stat-label {
    display: block;
    font-size: 0.875rem;
    opacity: 0.9;
}

/* ===== PROFILE CONTAINER ===== */
.profile-container-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.container > .profile-container-section {
    display: grid;
    grid-template-columns: 280px 1fr;
    gap: var(--spacing-xl);
}

.profile-container-section .container {
    display: grid;
    grid-template-columns: 280px 1fr;
    gap: var(--spacing-xl);
}

/* ===== PROFILE SIDEBAR ===== */
.profile-sidebar {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-lg);
    height: fit-content;
    position: sticky;
    top: var(--spacing-lg);
}

.profile-card {
    background: var(--surface);
    border: 1px solid var(--outline-variant);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    box-shadow: var(--shadow-sm);
}

.profile-summary {
    text-align: center;
}

.profile-avatar-section {
    margin-bottom: var(--spacing-lg);
}

.avatar-image {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    overflow: hidden;
    margin: 0 auto var(--spacing-md);
    border: 4px solid var(--primary);
    background: var(--surface-container);
}

.avatar-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.btn-upload {
    width: 100%;
}

.profile-full-name {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--on-surface);
    margin-bottom: var(--spacing-xs);
}

.profile-email {
    color: var(--on-surface-variant);
    font-size: 0.875rem;
    margin-bottom: var(--spacing-md);
    word-break: break-all;
}

.profile-badges {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

.profile-badges .badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: var(--spacing-xs);
    font-size: 0.75rem;
}

.profile-completion {
    margin-top: var(--spacing-lg);
    padding-top: var(--spacing-lg);
    border-top: 1px solid var(--outline-variant);
}

.completion-label {
    display: flex;
    justify-content: space-between;
    font-size: 0.875rem;
    margin-bottom: var(--spacing-sm);
    color: var(--on-surface-variant);
}

.completion-percent {
    font-weight: 600;
    color: var(--primary);
}

.progress-bar {
    height: 6px;
    background: var(--surface-container);
    border-radius: 3px;
    overflow: hidden;
}

.progress-fill {
    height: 100%;
    background: linear-gradient(90deg, var(--primary), var(--secondary));
    transition: width 0.3s ease;
}

/* Profile Navigation */
.profile-nav {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xs);
    background: var(--surface);
    border: 1px solid var(--outline-variant);
    border-radius: var(--radius-lg);
    padding: var(--spacing-sm);
    box-shadow: var(--shadow-sm);
}

.profile-nav-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-md);
    padding: var(--spacing-md) var(--spacing-lg);
    border: none;
    background: none;
    cursor: pointer;
    border-radius: var(--radius-md);
    color: var(--on-surface-variant);
    font-size: 0.95rem;
    font-weight: 500;
    transition: all 0.3s ease;
    position: relative;
    text-align: left;
}

.profile-nav-item:hover {
    background: var(--surface-container-low);
    color: var(--primary);
}

.profile-nav-item.active {
    background: var(--primary-container);
    color: var(--on-primary-container);
    font-weight: 600;
}

.profile-nav-item .material-symbols-outlined {
    font-size: 1.25rem;
}

.profile-nav-item .badge-counter {
    margin-left: auto;
    background: var(--error);
    color: white;
    border-radius: 50%;
    width: 24px;
    height: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.75rem;
    font-weight: 700;
}

.profile-member-info {
    display: grid;
    gap: var(--spacing-md);
}

.member-stat {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--spacing-md) 0;
    border-bottom: 1px solid var(--outline-variant);
}

.member-stat:last-child {
    border-bottom: none;
}

.stat-label {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.stat-badge {
    background: var(--tertiary-container);
    color: var(--on-tertiary-container);
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-sm);
    font-size: 0.75rem;
    font-weight: 600;
}

/* ===== PROFILE CONTENT ===== */
.profile-content {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-3xl);
}

.profile-section {
    display: none;
    animation: fadeIn 0.3s ease-in-out;
}

.profile-section.active {
    display: block;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.section-header {
    margin-bottom: var(--spacing-xl);
}

.section-title {
    font-size: 1.875rem;
    font-weight: 800;
    color: var(--on-surface);
    margin-bottom: var(--spacing-sm);
}

.section-subtitle {
    color: var(--on-surface-variant);
    font-size: 1rem;
}

/* ===== DASHBOARD CARDS ===== */
.dashboard-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: var(--spacing-lg);
    margin-bottom: var(--spacing-3xl);
}

.dashboard-card {
    background: var(--surface);
    border: 1px solid var(--outline-variant);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    display: flex;
    flex-direction: column;
    gap: var(--spacing-md);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.dashboard-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--primary), var(--secondary));
    opacity: 0;
    transition: opacity 0.3s ease;
}

.dashboard-card:hover {
    border-color: var(--primary);
    box-shadow: var(--shadow-md);
}

.dashboard-card:hover::before {
    opacity: 1;
}

.card-icon {
    width: 48px;
    height: 48px;
    border-radius: var(--radius-lg);
    background: var(--primary-container);
    color: var(--on-primary-container);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
}

.card-content {
    flex: 1;
}

.card-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--on-surface);
    margin-bottom: var(--spacing-xs);
}

.card-value {
    font-size: 1.75rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-xs);
}

.card-description {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.card-link {
    align-self: flex-start;
}

/* ===== ACTIVITY SECTION ===== */
.activity-section {
    background: var(--surface);
    border: 1px solid var(--outline-variant);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
}

.activity-timeline {
    display: grid;
    gap: var(--spacing-lg);
    margin-top: var(--spacing-lg);
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

.activity-dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: var(--primary);
    margin-top: 6px;
    flex-shrink: 0;
    position: relative;
}

.activity-dot::before {
    content: '';
    position: absolute;
    width: 18px;
    height: 18px;
    border: 2px solid var(--primary);
    border-radius: 50%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    opacity: 0.2;
}

.activity-content {
    flex: 1;
}

.activity-title {
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

.activity-date {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

/* ===== FORM STYLING ===== */
.profile-form {
    display: grid;
    gap: 0;
}

.form-card {
    background: var(--surface);
    border: 1px solid var(--outline-variant);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    margin-bottom: var(--spacing-lg);
}

.form-section-title {
    display: flex;
    align-items: center;
    gap: var(--spacing-md);
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--on-surface);
    margin-bottom: var(--spacing-lg);
    padding-bottom: var(--spacing-lg);
    border-bottom: 2px solid var(--primary-container);
}

.form-section-title .material-symbols-outlined {
    font-size: 1.5rem;
    color: var(--primary);
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--spacing-lg);
    margin-bottom: var(--spacing-lg);
}

.form-group {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
}

.form-label {
    font-size: 0.875rem;
    font-weight: 600;
    color: var(--on-surface);
}

.form-input {
    padding: var(--spacing-md) var(--spacing-lg);
    border: 1px solid var(--outline);
    border-radius: var(--radius-md);
    background: var(--surface-container);
    color: var(--on-surface);
    font-size: 1rem;
    transition: all 0.3s ease;
    font-family: inherit;
}

.form-input:focus {
    outline: none;
    border-color: var(--primary);
    background: var(--surface);
    box-shadow: 0 0 0 3px var(--primary-container);
}

.form-input:disabled {
    background: var(--surface-container-low);
    color: var(--on-surface-variant);
    cursor: not-allowed;
}

.form-actions {
    display: flex;
    gap: var(--spacing-lg);
    justify-content: center;
    margin-top: var(--spacing-xl);
}

/* ===== DOCUMENTS SECTION ===== */
.documents-upload {
    margin-bottom: var(--spacing-xl);
}

.upload-area {
    border: 2px dashed var(--primary);
    border-radius: var(--radius-lg);
    padding: var(--spacing-3xl);
    text-align: center;
    background: var(--primary-container);
    color: var(--on-primary-container);
    cursor: pointer;
    transition: all 0.3s ease;
}

.upload-area:hover {
    background: var(--primary);
    color: var(--on-primary);
}

.upload-area .material-symbols-outlined {
    font-size: 3rem;
    display: block;
    margin-bottom: var(--spacing-md);
}

.upload-area h3 {
    font-size: 1.125rem;
    font-weight: 600;
    margin-bottom: var(--spacing-sm);
}

.upload-area p {
    font-size: 0.875rem;
    margin-bottom: var(--spacing-md);
    opacity: 0.9;
}

.documents-list {
    background: var(--surface);
    border: 1px solid var(--outline-variant);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
}

.documents-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: var(--spacing-lg);
    padding-bottom: var(--spacing-lg);
    border-bottom: 1px solid var(--outline-variant);
}

.document-item {
    display: grid;
    grid-template-columns: auto 1fr auto auto;
    align-items: center;
    gap: var(--spacing-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    border-radius: var(--radius-md);
    margin-bottom: var(--spacing-md);
    transition: all 0.3s ease;
}

.document-item:hover {
    border-color: var(--primary);
    background: var(--surface-container-low);
}

.doc-icon {
    width: 48px;
    height: 48px;
    background: var(--secondary-container);
    color: var(--on-secondary-container);
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
}

.doc-info {
    flex: 1;
}

.doc-name {
    font-size: 1rem;
    font-weight: 600;
    color: var(--on-surface);
    margin-bottom: var(--spacing-xs);
}

.doc-date {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.doc-status {
    display: flex;
    gap: var(--spacing-sm);
}

/* ===== APPLICATIONS SECTION ===== */
.applications-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: var(--spacing-lg);
}

.application-card {
    background: var(--surface);
    border: 1px solid var(--outline-variant);
    border-radius: var(--radius-lg);
    overflow: hidden;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
}

.application-card:hover {
    border-color: var(--primary);
    box-shadow: var(--shadow-lg);
}

.app-header {
    display: flex;
    align-items: flex-start;
    gap: var(--spacing-md);
    padding: var(--spacing-lg);
    border-bottom: 1px solid var(--outline-variant);
}

.app-icon {
    width: 48px;
    height: 48px;
    background: linear-gradient(135deg, var(--primary), var(--secondary));
    color: white;
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    font-size: 1.5rem;
}

.app-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--on-surface);
    margin-bottom: var(--spacing-xs);
}

.app-id {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.app-body {
    padding: var(--spacing-lg);
    flex: 1;
}

.app-timeline {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: var(--spacing-lg);
    padding-bottom: var(--spacing-lg);
    border-bottom: 1px solid var(--outline-variant);
}

.timeline-step {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: var(--spacing-xs);
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.timeline-step .material-symbols-outlined {
    font-size: 1.5rem;
}

.timeline-step.completed {
    color: var(--primary);
}

.timeline-step.active {
    color: var(--secondary);
}

.app-meta {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
}

.meta-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.meta-item .material-symbols-outlined {
    font-size: 1.125rem;
}

.app-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: var(--spacing-lg);
    border-top: 1px solid var(--outline-variant);
    background: var(--surface-container-low);
}

/* ===== PAYMENTS SECTION ===== */
.payments-summary {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: var(--spacing-lg);
    margin-bottom: var(--spacing-xl);
}

.summary-card {
    background: linear-gradient(135deg, var(--primary-container) 0%, var(--secondary-container) 100%);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    color: var(--on-primary-container);
    border: 1px solid var(--outline-variant);
}

.summary-label {
    font-size: 0.875rem;
    opacity: 0.9;
    margin-bottom: var(--spacing-sm);
}

.summary-value {
    font-size: 1.875rem;
    font-weight: 700;
    margin-bottom: var(--spacing-md);
}

.summary-value.text-error {
    color: var(--error);
}

.payments-table {
    background: var(--surface);
    border: 1px solid var(--outline-variant);
    border-radius: var(--radius-lg);
    overflow: auto;
}

.table-header,
.table-row {
    display: grid;
    grid-template-columns: 100px 1fr 120px 100px auto;
    gap: var(--spacing-lg);
    padding: var(--spacing-lg);
    align-items: center;
    border-bottom: 1px solid var(--outline-variant);
}

.table-header {
    background: var(--surface-container);
    font-weight: 700;
    color: var(--on-surface);
    font-size: 0.875rem;
    padding: var(--spacing-md) var(--spacing-lg);
}

.table-row:last-child {
    border-bottom: none;
}

.table-row:hover {
    background: var(--surface-container-low);
}

.col-date,
.col-description,
.col-amount,
.col-status,
.col-action {
    display: flex;
    align-items: center;
}

.col-description {
    font-weight: 500;
}

.col-amount {
    font-weight: 600;
    color: var(--primary);
}

/* ===== NOTIFICATIONS SECTION ===== */
.notifications-list {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-lg);
    margin-bottom: var(--spacing-xl);
}

.notification-item {
    display: grid;
    grid-template-columns: auto 1fr auto;
    gap: var(--spacing-lg);
    align-items: flex-start;
    background: var(--surface);
    border: 1px solid var(--outline-variant);
    border-left: 4px solid var(--outline-variant);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    transition: all 0.3s ease;
}

.notification-item.unread {
    border-left-color: var(--primary);
    background: var(--primary-container);
}

.notification-item:hover {
    box-shadow: var(--shadow-md);
}

.notification-icon {
    width: 48px;
    height: 48px;
    background: var(--surface-container);
    color: var(--primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    font-size: 1.5rem;
}

.notification-item.unread .notification-icon {
    background: var(--primary);
    color: var(--on-primary);
}

.notification-content {
    flex: 1;
}

.notification-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--on-surface);
    margin-bottom: var(--spacing-xs);
}

.notification-message {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    margin-bottom: var(--spacing-sm);
}

.notification-date {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.notification-settings {
    background: var(--surface);
    border: 1px solid var(--outline-variant);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
}

.notification-settings .section-title {
    margin-bottom: var(--spacing-lg);
}

.settings-list {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-lg);
}

.setting-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    border-radius: var(--radius-md);
    transition: all 0.3s ease;
}

.setting-item:hover {
    background: var(--surface-container-low);
    border-color: var(--primary);
}

.setting-info {
    flex: 1;
}

.setting-name {
    font-size: 1rem;
    font-weight: 600;
    color: var(--on-surface);
    margin-bottom: var(--spacing-xs);
}

.setting-description {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.toggle-switch {
    position: relative;
    display: inline-block;
    width: 50px;
    height: 26px;
}

.toggle-switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

.toggle-switch label {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: var(--outline);
    transition: all 0.3s ease;
    border-radius: 34px;
}

.toggle-switch label::before {
    content: '';
    position: absolute;
    height: 20px;
    width: 20px;
    left: 3px;
    bottom: 3px;
    background-color: white;
    transition: all 0.3s ease;
    border-radius: 50%;
}

.toggle-switch input:checked + label {
    background-color: var(--primary);
}

.toggle-switch input:checked + label::before {
    transform: translateX(24px);
}

/* ===== SETTINGS CARDS ===== */
.settings-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-lg);
}

.settings-card {
    background: var(--surface);
    border: 1px solid var(--outline-variant);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    display: flex;
    gap: var(--spacing-lg);
    align-items: flex-start;
    transition: all 0.3s ease;
}

.settings-card:hover {
    border-color: var(--primary);
    box-shadow: var(--shadow-md);
}

.setting-icon {
    width: 56px;
    height: 56px;
    border-radius: var(--radius-lg);
    background: linear-gradient(135deg, var(--primary-container), var(--secondary-container));
    color: var(--on-primary-container);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    font-size: 1.75rem;
}

.setting-content {
    flex: 1;
}

.setting-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--on-surface);
    margin-bottom: var(--spacing-xs);
}

.setting-description {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    margin-bottom: var(--spacing-md);
}

.setting-details {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xs);
    margin-bottom: var(--spacing-md);
}

.detail-item {
    font-size: 0.8rem;
    color: var(--on-surface-variant);
}

/* ===== RESPONSIVE DESIGN ===== */
@media (max-width: 1024px) {
    .profile-container-section .container,
    .container > .profile-container-section {
        grid-template-columns: 1fr;
    }

    .profile-sidebar {
        display: none;
    }

    .profile-header-top {
        flex-direction: column;
        align-items: flex-start;
    }

    .profile-quick-stats {
        width: 100%;
    }

    .applications-grid {
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    }
}

@media (max-width: 768px) {
    .profile-hero {
        min-height: 250px;
    }

    .profile-header-top {
        flex-direction: column;
    }

    .profile-header-top h1 {
        font-size: 1.875rem;
    }

    .profile-quick-stats {
        flex-wrap: wrap;
        width: 100%;
    }

    .profile-quick-stats .stat {
        flex: 1;
        min-width: 100px;
    }

    .dashboard-cards {
        grid-template-columns: 1fr;
    }

    .form-row {
        grid-template-columns: 1fr;
    }

    .form-actions {
        flex-direction: column;
    }

    .form-actions .btn {
        width: 100%;
    }

    .table-header,
    .table-row {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }

    .notification-item {
        grid-template-columns: auto 1fr;
    }

    .settings-cards {
        grid-template-columns: 1fr;
    }

    .section-title {
        font-size: 1.5rem;
    }
}

@media (max-width: 480px) {
    .profile-quick-stats {
        gap: var(--spacing-md);
    }

    .profile-quick-stats .stat {
        padding: var(--spacing-md);
        min-width: auto;
    }

    .stat-value {
        font-size: 1.5rem;
    }

    .applications-grid {
        grid-template-columns: 1fr;
    }

    .app-timeline {
        flex-wrap: wrap;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Profile Navigation
    const navItems = document.querySelectorAll('.profile-nav-item');
    const sections = document.querySelectorAll('.profile-section');

    navItems.forEach(item => {
        item.addEventListener('click', function() {
            const sectionName = this.getAttribute('data-section');
            
            // Remove active class from all nav items and sections
            navItems.forEach(nav => nav.classList.remove('active'));
            sections.forEach(section => section.classList.remove('active'));
            
            // Add active class to clicked item and corresponding section
            this.classList.add('active');
            document.querySelector(`[data-section="${sectionName}"]`).classList.add('active');
        });
    });

    // Personal Info Form Submission
    const personalForm = document.getElementById('personalInfoForm');
    if (personalForm) {
        personalForm.addEventListener('submit', function(e) {
            e.preventDefault();
            showNotification('Profile updated successfully!', 'success');
            setTimeout(() => this.style.opacity = '0.8', 500);
            setTimeout(() => this.style.opacity = '1', 1000);
        });
    }

    // Edit Profile Button
    document.getElementById('uploadPhotoBtn')?.addEventListener('click', function() {
        showNotification('Photo upload feature coming soon!', 'info');
    });

    // Notification Dismiss
    document.querySelectorAll('.notification-item .btn-outline').forEach(btn => {
        btn.addEventListener('click', function() {
            const item = this.closest('.notification-item');
            item.style.opacity = '0';
            item.style.transform = 'translateX(100px)';
            setTimeout(() => item.remove(), 300);
        });
    });

    // Settings Toggle Switches
    document.querySelectorAll('.toggle-switch input').forEach(toggle => {
        toggle.addEventListener('change', function() {
            const label = this.parentElement.querySelector('label');
            const isChecked = this.checked;
            console.log(`Setting ${label.textContent} to ${isChecked}`);
        });
    });

    // Pay Button
    document.querySelectorAll('.col-action .btn-primary').forEach(btn => {
        btn.addEventListener('click', function() {
            showNotification('Redirecting to payment gateway...', 'info');
        });
    });

    // Helper function to show notifications
    function showNotification(message, type = 'success') {
        const notification = document.createElement('div');
        notification.className = `notification notification-${type}`;
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: ${type === 'success' ? 'var(--primary)' : 'var(--secondary)'};
            color: white;
            padding: var(--spacing-lg);
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-lg);
            z-index: 1000;
            max-width: 400px;
            animation: slideIn 0.3s ease-out;
        `;
        notification.innerHTML = `
            <div style="display: flex; align-items: center; gap: var(--spacing-md);">
                <span class="material-symbols-outlined">${type === 'success' ? 'check_circle' : 'info'}</span>
                <span>${message}</span>
            </div>
        `;
        document.body.appendChild(notification);
        
        setTimeout(() => {
            notification.style.opacity = '0';
            setTimeout(() => notification.remove(), 300);
        }, 3000);
    }
});
</script>
