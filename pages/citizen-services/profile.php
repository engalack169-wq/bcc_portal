<?php
/**
 * Bamenda City Council E-Governance Platform
 * Citizen Services Profile Page
 */

// Include access control
require_once __DIR__ . '/../../core/access-control.php';

// Require authentication to access this page
require_authentication();

$page_title = 'User Profile | Bamenda City Council';
$page_description = 'Manage your profile, services, and account settings for Bamenda City Council e-governance platform.';
$page_keywords = 'user profile, account settings, personal information, Bamenda council';

$breadcrumbs = [
    ['title' => 'Services', 'url' => '/stitch1/pages/citizen-services/services.php'],
    ['title' => 'Profile', 'url' => '#']
];

require_once __DIR__ . '/../../includes/header.php';
?>

<section class="hero profile-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-government-building.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">User Profile</span>
            <h1 class="hero-title">My Account</h1>
            <p class="hero-subtitle">Manage your personal information, service history, and account settings for the Bamenda City Council e-governance platform.</p>
            <div class="hero-actions">
                <a href="#personal-info" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">person</span>
                    Personal Information
                </a>
                <a href="#services" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">history</span>
                    Service History
                </a>
            </div>
        </div>
    </div>
</section>

<section class="profile-overview-section">
    <div class="container">
        <div class="profile-overview">
            <div class="profile-avatar">
                <div class="avatar-placeholder">
                    <img src="/stitch1/assets/images/default-profile.jpg" alt="User Profile Picture" class="profile-avatar-image">
                </div>
                <button class="btn btn-sm btn-outline">Change Photo</button>
            </div>
            <div class="profile-info">
                <h2 class="profile-name">John Doe</h2>
                <p class="profile-email">john.doe@example.com</p>
                <p class="profile-phone">+237 233 000 000</p>
                <div class="profile-status">
                    <span class="badge badge-success">Verified Account</span>
                    <span class="member-since">Member since: January 2024</span>
                </div>
            </div>
            <div class="profile-actions">
                <button class="btn btn-primary">Edit Profile</button>
                <button class="btn btn-outline">Account Settings</button>
            </div>
        </div>
    </div>
</section>

<section class="personal-info-section" id="personal-info">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Personal Information</h2>
            <p class="section-subtitle">Update your personal details and contact information</p>
        </div>
        <form class="profile-form">
            <div class="form-section">
                <h3 class="section-title">Basic Information</h3>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">First Name *</label>
                        <input type="text" class="form-input" value="John" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Last Name *</label>
                        <input type="text" class="form-input" value="Doe" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Email Address *</label>
                        <input type="email" class="form-input" value="john.doe@example.com" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Phone Number *</label>
                        <input type="tel" class="form-input" value="+237 233 000 000" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Date of Birth</label>
                    <input type="date" class="form-input" value="1990-01-15">
                </div>
            </div>
            <div class="form-section">
                <h3 class="section-title">Address Information</h3>
                <div class="form-group">
                    <label class="form-label">Residential Address</label>
                    <input type="text" class="form-input" value="123 Main Street, Bamenda">
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">City/District</label>
                        <input type="text" class="form-input" value="Bamenda">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Postal Code</label>
                        <input type="text" class="form-input" value="00000">
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <button type="reset" class="btn btn-outline">Reset</button>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </form>
    </div>
</section>

<section class="services-section" id="services">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Service History</h2>
            <p class="section-subtitle">View your service requests and application history</p>
        </div>
        <div class="services-grid">
            <div class="service-item">
                <div class="service-icon">
                    <span class="material-symbols-outlined">business</span>
                </div>
                <div class="service-content">
                    <h4 class="service-title">Business License Application</h4>
                    <p class="service-description">Applied for small business trading license</p>
                    <div class="service-meta">
                        <span class="status-badge approved">Approved</span>
                        <span class="service-date">Dec 10, 2024</span>
                    </div>
                </div>
                <button class="btn btn-sm btn-outline">View Details</button>
            </div>
            <div class="service-item">
                <div class="service-icon">
                    <span class="material-symbols-outlined">apartment</span>
                </div>
                <div class="service-content">
                    <h4 class="service-title">Property Registration</h4>
                    <p class="service-description">Property ownership registration request</p>
                    <div class="service-meta">
                        <span class="status-badge pending">Pending</span>
                        <span class="service-date">Dec 15, 2024</span>
                    </div>
                </div>
                <button class="btn btn-sm btn-outline">View Details</button>
            </div>
            <div class="service-item">
                <div class="service-icon">
                    <span class="material-symbols-outlined">receipt</span>
                </div>
                <div class="service-content">
                    <h4 class="service-title">Tax Payment</h4>
                    <p class="service-description">Property tax payment for Q4 2024</p>
                    <div class="service-meta">
                        <span class="status-badge completed">Completed</span>
                        <span class="service-date">Nov 30, 2024</span>
                    </div>
                </div>
                <button class="btn btn-sm btn-outline">View Receipt</button>
            </div>
        </div>
    </div>
</section>

<section class="settings-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Account Settings</h2>
            <p class="section-subtitle">Manage your account preferences and security</p>
        </div>
        <div class="settings-grid">
            <div class="setting-card">
                <div class="setting-header">
                    <h3 class="setting-title">Password & Security</h3>
                    <p class="setting-description">Update your password and security settings</p>
                </div>
                <button class="btn btn-sm btn-outline">Change Password</button>
            </div>
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

<style>
.profile-hero{background:linear-gradient(135deg,var(--primary)0,var(--primary-container)100%)}
.profile-overview-section{padding:var(--spacing-3xl)0}
.profile-overview{display:grid;grid-template-columns:auto 1fr auto;gap:var(--spacing-lg);align-items:center;background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);padding:var(--spacing-xl);border:1px solid var(--outline-variant)}
.profile-avatar{text-align:center}
.avatar-placeholder{width:6rem;height:6rem;background-color:var(--primary);color:var(--on-primary);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto var(--spacing-md)}
.avatar-placeholder .material-symbols-outlined{font-size:3rem}
.profile-info{flex:1}
.profile-name{font-size:1.75rem;font-weight:800;color:var(--primary);margin-bottom:var(--spacing-xs)}
.profile-email,.profile-phone{color:var(--on-surface-variant);font-size:1rem;margin-bottom:var(--spacing-xs)}
.profile-status{display:flex;align-items:center;gap:var(--spacing-md);margin-top:var(--spacing-sm)}
.member-since{font-size:.875rem;color:var(--on-surface-variant)}
.profile-actions{display:flex;flex-direction:column;gap:var(--spacing-sm)}
.personal-info-section{padding:var(--spacing-3xl)0;background-color:var(--surface-container-low)}
.section-header{text-align:center;margin-bottom:var(--spacing-xl)}
.section-title{font-size:2rem;font-weight:800;color:var(--primary);margin-bottom:var(--spacing-sm)}
.section-subtitle{color:var(--on-surface-variant);font-size:1.125rem}
.profile-form{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);border:1px solid var(--outline-variant);max-width:800px;margin:0 auto;padding:var(--spacing-xl)}
.form-section{padding:var(--spacing-xl);border-bottom:1px solid var(--outline-variant)}
.form-section:last-child{border-bottom:none}
.form-group{margin-bottom:var(--spacing-lg)}
.form-label{display:block;font-size:.875rem;font-weight:600;color:var(--on-surface);margin-bottom:var(--spacing-sm)}
.form-input{width:100%;padding:var(--spacing-sm) var(--spacing-md);border:1px solid var(--outline-variant);border-radius:var(--radius-md);background-color:var(--surface-container-lowest);color:var(--on-surface);font-size:.875rem;transition:all .2s ease}
.form-input:focus{outline:none;border-color:var(--primary);box-shadow:0 0 0 2px var(--primary-container)}
.form-row{display:grid;grid-template-columns:1fr 1fr;gap:var(--spacing-lg)}
.form-actions{display:flex;gap:var(--spacing-lg);justify-content:center;margin-top:var(--spacing-xl)}
.services-section{padding:var(--spacing-3xl)0}
.services-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(350px,1fr));gap:var(--spacing-lg)}
.service-item{display:flex;gap:var(--spacing-md);background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);padding:var(--spacing-lg);border:1px solid var(--outline-variant);align-items:center}
.service-icon{width:3rem;height:3rem;background-color:var(--primary);color:var(--on-primary);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center;flex-shrink:0}
.service-icon .material-symbols-outlined{font-size:1.5rem}
.service-content{flex:1}
.service-title{font-size:1.125rem;font-weight:600;color:var(--primary);margin-bottom:var(--spacing-xs)}
.service-description{color:var(--on-surface-variant);font-size:.875rem;margin-bottom:var(--spacing-sm)}
.service-meta{display:flex;align-items:center;gap:var(--spacing-md)}
.status-badge{padding:var(--spacing-xs) var(--spacing-sm);border-radius:var(--radius-full);font-size:.75rem;font-weight:600;text-transform:uppercase}
.status-badge.approved{background-color:var(--tertiary);color:var(--on-tertiary)}
.status-badge.pending{background-color:var(--secondary);color:var(--on-secondary)}
.status-badge.completed{background-color:var(--primary);color:var(--on-primary)}
.service-date{font-size:.75rem;color:var(--on-surface-variant)}
.settings-section{padding:var(--spacing-3xl)0;background-color:var(--surface-container-low)}
.settings-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:var(--spacing-lg)}
.setting-card{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);padding:var(--spacing-lg);border:1px solid var(--outline-variant)}
.setting-header{margin-bottom:var(--spacing-md)}
.setting-title{font-size:1.25rem;font-weight:700;color:var(--primary);margin-bottom:var(--spacing-xs)}
.setting-description{color:var(--on-surface-variant);font-size:.875rem}
@media (max-width:768px){.profile-overview{grid-template-columns:1fr;text-align:center;gap:var(--spacing-lg)}.profile-actions{flex-direction:row;justify-content:center}.form-row{grid-template-columns:1fr;gap:var(--spacing-md)}.services-grid{grid-template-columns:1fr;gap:var(--spacing-lg)}.service-item{flex-direction:column;align-items:flex-start;gap:var(--spacing-sm)}.settings-grid{grid-template-columns:1fr;gap:var(--spacing-lg)}.form-actions{flex-direction:column;align-items:center}.form-actions .btn{width:100%;max-width:300px}}
</style>

<script>
document.querySelector('.profile-form')?.addEventListener('submit',function(e){e.preventDefault();alert('Profile updated successfully! Your changes have been saved.')});
document.querySelectorAll('.service-item .btn-outline').forEach(button=>{button.addEventListener('click',function(){const serviceName=this.closest('.service-item').querySelector('.service-title').textContent;alert(`Viewing details for: ${serviceName}... In production, this would show full service information.`})});
document.querySelectorAll('.setting-card .btn-outline').forEach(button=>{button.addEventListener('click',function(){const settingName=this.closest('.setting-card').querySelector('.setting-title').textContent;alert(`Opening ${settingName}... In production, this would show the specific settings interface.`})});
</script>
