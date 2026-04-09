<?php
/**
 * Bamenda City Council E-Governance Platform
 * Administration Staff Portal Page
 */

// Include access control
require_once __DIR__ . '/../../core/access-control.php';

// Require staff role or higher to access this page
require_role('staff');

// Set page metadata
$page_title = 'Staff Portal | Bamenda City Council';
$page_description = 'Access staff portal for Bamenda City Council employees including work management, resources, and administrative tools.';
$page_keywords = 'staff portal, employee portal, work management, staff resources, Bamenda staff administration';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Administration', 'url' => '../index.php'],
    ['title' => 'Staff Portal', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero staff-portal-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-government-building.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Staff Portal</span>
            <h1 class="hero-title">Employee Work Portal</h1>
            <p class="hero-subtitle">
                Comprehensive staff management system including work assignments, resource access, performance tracking, and administrative tools for Bamenda City Council employees.
            </p>
            <div class="hero-actions">
                <a href="#dashboard" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">dashboard</span>
                    Staff Dashboard
                </a>
                <a href="#resources" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">inventory_2</span>
                    Staff Resources
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Staff Actions</h2>
            <p class="section-subtitle">Quick access to staff functions</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openDashboard()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">dashboard</span>
                </div>
                <h3 class="action-title">My Dashboard</h3>
                <p class="action-description">Personal workspace</p>
            </div>

            <div class="action-card" onclick="openTasks()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">assignment</span>
                </div>
                <h3 class="action-title">My Tasks</h3>
                <p class="action-description">Work assignments</p>
            </div>

            <div class="action-card" onclick="openSchedule()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">schedule</span>
                </div>
                <h3 class="action-title">Work Schedule</h3>
                <p class="action-description">Shift management</p>
            </div>

            <div class="action-card" onclick="openResources()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">inventory_2</span>
                </div>
                <h3 class="action-title">Resources</h3>
                <p class="action-description">Staff materials</p>
            </div>

            <div class="action-card" onclick="openReports()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <h3 class="action-title">Reports</h3>
                <p class="action-description">Work reports</p>
            </div>

            <div class="action-card" onclick="openCommunication()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">forum</span>
                </div>
                <h3 class="action-title">Communication</h3>
                <p class="action-description">Staff messaging</p>
            </div>
        </div>
    </div>
</section>

<!-- Staff Statistics -->
<section class="staff-stats-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Staff Overview</h2>
            <p class="section-subtitle">Real-time staff statistics</p>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">456</div>
                    <div class="stat-label">Active Staff</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+12 new hires</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">assignment</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">1,234</div>
                    <div class="stat-label">Active Tasks</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+234 tasks</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">schedule</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">89%</div>
                    <div class="stat-label">Attendance Rate</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+3% improvement</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">task_alt</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">92%</div>
                    <div class="stat-label">Task Completion</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+5% efficiency</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">psychology</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">4.2/5</div>
                    <div class="stat-label">Staff Satisfaction</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+0.3 rating</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">67</div>
                    <div class="stat-label">Training Sessions</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+15 sessions</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Staff Dashboard -->
<section class="dashboard-section" id="dashboard">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Staff Dashboard</h2>
            <p class="section-subtitle">Personal workspace overview</p>
        </div>

        <div class="dashboard-grid">
            <!-- Personal Info Card -->
            <div class="dashboard-card personal-info">
                <div class="card-header">
                    <h3 class="card-title">Personal Information</h3>
                    <button class="btn btn-sm btn-outline">Edit</button>
                </div>
                <div class="card-content">
                    <div class="profile-section">
                        <div class="profile-avatar">
                            <img src="/stitch1/assets/images/staff-avatar-placeholder.png" alt="Staff Profile">
                        </div>
                        <div class="profile-info">
                            <h4 class="staff-name">John Doe</h4>
                            <p class="staff-position">Senior Administrative Officer</p>
                            <p class="staff-department">Administration Department</p>
                            <div class="staff-details">
                                <div class="detail-item">
                                    <span class="material-symbols-outlined">badge</span>
                                    <span>Staff ID: STF2024001</span>
                                </div>
                                <div class="detail-item">
                                    <span class="material-symbols-outlined">email</span>
                                    <span>john.doe@bamenda.gov</span>
                                </div>
                                <div class="detail-item">
                                    <span class="material-symbols-outlined">phone</span>
                                    <span>+237 233 000 001</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Stats Card -->
            <div class="dashboard-card quick-stats">
                <div class="card-header">
                    <h3 class="card-title">My Performance</h3>
                    <span class="badge badge-success">Good</span>
                </div>
                <div class="card-content">
                    <div class="performance-grid">
                        <div class="performance-item">
                            <div class="performance-icon">
                                <span class="material-symbols-outlined">assignment</span>
                            </div>
                            <div class="performance-content">
                                <div class="performance-number">24</div>
                                <div class="performance-label">Active Tasks</div>
                            </div>
                        </div>
                        <div class="performance-item">
                            <div class="performance-icon">
                                <span class="material-symbols-outlined">task_alt</span>
                            </div>
                            <div class="performance-content">
                                <div class="performance-number">156</div>
                                <div class="performance-label">Completed</div>
                            </div>
                        </div>
                        <div class="performance-item">
                            <div class="performance-icon">
                                <span class="material-symbols-outlined">schedule</span>
                            </div>
                            <div class="performance-content">
                                <div class="performance-number">95%</div>
                                <div class="performance-label">On Time</div>
                            </div>
                        </div>
                        <div class="performance-item">
                            <div class="performance-icon">
                                <span class="material-symbols-outlined">star</span>
                            </div>
                            <div class="performance-content">
                                <div class="performance-number">4.5</div>
                                <div class="performance-label">Rating</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activities Card -->
            <div class="dashboard-card recent-activities">
                <div class="card-header">
                    <h3 class="card-title">Recent Activities</h3>
                    <button class="btn btn-sm btn-outline">View All</button>
                </div>
                <div class="card-content">
                    <div class="activity-list">
                        <div class="activity-item">
                            <div class="activity-icon">
                                <span class="material-symbols-outlined">assignment_turned_in</span>
                            </div>
                            <div class="activity-content">
                                <div class="activity-title">Completed Report Submission</div>
                                <div class="activity-description">Monthly administrative report submitted</div>
                                <div class="activity-time">2 hours ago</div>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon">
                                <span class="material-symbols-outlined">event</span>
                            </div>
                            <div class="activity-content">
                                <div class="activity-title">Meeting Scheduled</div>
                                <div class="activity-description">Department meeting for tomorrow</div>
                                <div class="activity-time">4 hours ago</div>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon">
                                <span class="material-symbols-outlined">assignment</span>
                            </div>
                            <div class="activity-content">
                                <div class="activity-title">New Task Assigned</div>
                                <div class="activity-description">Budget review task assigned</div>
                                <div class="activity-time">6 hours ago</div>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon">
                                <span class="material-symbols-outlined">school</span>
                            </div>
                            <div class="activity-content">
                                <div class="activity-title">Training Completed</div>
                                <div class="activity-description">Advanced administrative skills training</div>
                                <div class="activity-time">Yesterday</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Upcoming Events Card -->
            <div class="dashboard-card upcoming-events">
                <div class="card-header">
                    <h3 class="card-title">Upcoming Events</h3>
                    <button class="btn btn-sm btn-outline">Calendar</button>
                </div>
                <div class="card-content">
                    <div class="events-list">
                        <div class="event-item">
                            <div class="event-date">
                                <div class="date-day">15</div>
                                <div class="date-month">Dec</div>
                            </div>
                            <div class="event-content">
                                <div class="event-title">Department Meeting</div>
                                <div class="event-time">10:00 AM - 12:00 PM</div>
                                <div class="event-location">Conference Room A</div>
                            </div>
                        </div>
                        <div class="event-item">
                            <div class="event-date">
                                <div class="date-day">18</div>
                                <div class="date-month">Dec</div>
                            </div>
                            <div class="event-content">
                                <div class="event-title">Training Session</div>
                                <div class="event-time">2:00 PM - 4:00 PM</div>
                                <div class="event-location">Training Room B</div>
                            </div>
                        </div>
                        <div class="event-item">
                            <div class="event-date">
                                <div class="date-day">20</div>
                                <div class="date-month">Dec</div>
                            </div>
                            <div class="event-content">
                                <div class="event-title">Performance Review</div>
                                <div class="event-time">11:00 AM - 12:00 PM</div>
                                <div class="event-location">HR Office</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Staff Resources -->
<section class="resources-section" id="resources">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Staff Resources</h2>
            <p class="section-subtitle">Available staff materials and tools</p>
        </div>

        <div class="resources-grid">
            <!-- Documents -->
            <div class="resource-card">
                <div class="resource-header">
                    <div class="resource-icon">
                        <span class="material-symbols-outlined">description</span>
                    </div>
                    <div class="resource-badge popular">Popular</div>
                </div>
                <div class="resource-content">
                    <h3 class="resource-title">Staff Documents</h3>
                    <p class="resource-description">Access important staff documents including policies, procedures, forms, and administrative guidelines.</p>
                    <div class="resource-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Staff handbook</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Policy documents</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Administrative forms</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Procedure manuals</span>
                        </div>
                    </div>
                    <div class="resource-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">folder</span>
                            <span>245 documents</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">update</span>
                            <span>Updated weekly</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">download</span>
                            <span>PDF & Word formats</span>
                        </div>
                    </div>
                    <div class="resource-actions">
                        <button class="btn btn-sm btn-primary">Access Documents</button>
                        <button class="btn btn-sm btn-outline">Request Access</button>
                    </div>
                </div>
            </div>

            <!-- Training Materials -->
            <div class="resource-card">
                <div class="resource-header">
                    <div class="resource-icon">
                        <span class="material-symbols-outlined">school</span>
                    </div>
                    <div class="resource-badge essential">Essential</div>
                </div>
                <div class="resource-content">
                    <h3 class="resource-title">Training Materials</h3>
                    <p class="resource-description">Comprehensive training resources including video tutorials, guides, and certification materials.</p>
                    <div class="resource-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Video tutorials</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Training guides</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Assessment tools</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Certification programs</span>
                        </div>
                    </div>
                    <div class="resource-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">play_circle</span>
                            <span>156 videos</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">menu_book</span>
                            <span>89 guides</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">workspace_premium</span>
                            <span>12 certifications</span>
                        </div>
                    </div>
                    <div class="resource-actions">
                        <button class="btn btn-sm btn-primary">Access Training</button>
                        <button class="btn btn-sm btn-outline">My Progress</button>
                    </div>
                </div>
            </div>

            <!-- Software Tools -->
            <div class="resource-card">
                <div class="resource-header">
                    <div class="resource-icon">
                        <span class="material-symbols-outlined">computer</span>
                    </div>
                    <div class="resource-badge new">New</div>
                </div>
                <div class="resource-content">
                    <h3 class="resource-title">Software Tools</h3>
                    <p class="resource-description">Access essential software tools and applications for administrative work and productivity.</p>
                    <div class="resource-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Office suite</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Project management</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Communication tools</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Security software</span>
                        </div>
                    </div>
                    <div class="resource-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">apps</span>
                            <span>45 applications</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">security</span>
                            <span>Secure access</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">support</span>
                            <span>24/7 support</span>
                        </div>
                    </div>
                    <div class="resource-actions">
                        <button class="btn btn-sm btn-primary">Access Tools</button>
                        <button class="btn btn-sm btn-outline">Get Help</button>
                    </div>
                </div>
            </div>

            <!-- Communication Hub -->
            <div class="resource-card">
                <div class="resource-header">
                    <div class="resource-icon">
                        <span class="material-symbols-outlined">forum</span>
                    </div>
                    <div class="resource-badge active">Active</div>
                </div>
                <div class="resource-content">
                    <h3 class="resource-title">Communication Hub</h3>
                    <p class="resource-description">Staff communication platform including messaging, announcements, and collaboration tools.</p>
                    <div class="resource-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Staff messaging</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Announcements</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Team collaboration</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Video conferencing</span>
                        </div>
                    </div>
                    <div class="resource-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">chat</span>
                            <span>Real-time messaging</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>Team channels</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">video_call</span>
                            <span>Meeting rooms</span>
                        </div>
                    </div>
                    <div class="resource-actions">
                        <button class="btn btn-sm btn-primary">Open Hub</button>
                        <button class="btn btn-sm btn-outline">Settings</button>
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
            <p class="section-subtitle">Common questions about staff portal</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How do I update my personal information?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Click the "Edit" button in your Personal Information card on the dashboard. You can update contact details, emergency contacts, and profile information. Changes are reviewed by HR before approval.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How do I request time off?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Navigate to the Work Schedule section and click "Request Leave". Select the type of leave, dates, and provide a reason. Your request will be sent to your supervisor for approval.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Where can I find training materials?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Access training materials through the Staff Resources section. All training videos, guides, and certification programs are available there. You can also track your training progress.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How do I report technical issues?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Use the "Get Help" button in any resource section or contact IT support through the Communication Hub. Technical issues are typically resolved within 24 hours.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Can I access the portal from home?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, the staff portal is accessible from any internet-connected device. Use your staff credentials to log in securely. VPN access may be required for certain resources.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How often should I update my tasks?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Update your task status daily, preferably at the end of each workday. This helps supervisors track progress and ensures accurate performance evaluations.</p>
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
/* Staff Portal Page Styles */
.staff-portal-hero {
    background: linear-gradient(135deg, var(--secondary) 0%, var(--secondary-container) 100%);
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
    background-color: var(--secondary);
    color: var(--on-secondary);
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
    color: var(--secondary);
    margin-bottom: var(--spacing-md);
}

.action-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
}

/* Staff Statistics Section */
.staff-stats-section {
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
    background-color: var(--secondary);
    color: var(--on-secondary);
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
    color: var(--secondary);
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

/* Dashboard Section */
.dashboard-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.dashboard-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.dashboard-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.dashboard-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.card-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--secondary);
}

.card-content {
    padding: var(--spacing-lg);
}

/* Personal Info Card */
.profile-section {
    display: flex;
    gap: var(--spacing-lg);
    align-items: flex-start;
}

.profile-avatar {
    width: 6rem;
    height: 6rem;
    border-radius: var(--radius-lg);
    overflow: hidden;
    flex-shrink: 0;
}

.profile-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.profile-info h4 {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--secondary);
    margin-bottom: var(--spacing-xs);
}

.profile-info p {
    color: var(--on-surface-variant);
    margin-bottom: var(--spacing-sm);
}

.staff-details {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-top: var(--spacing-lg);
}

.detail-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.detail-item .material-symbols-outlined {
    font-size: 1.25rem;
    color: var(--secondary);
}

/* Performance Grid */
.performance-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: var(--spacing-lg);
}

.performance-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-md);
}

.performance-icon {
    width: 3rem;
    height: 3rem;
    background-color: var(--secondary);
    color: var(--on-secondary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.performance-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.performance-content {
    flex: 1;
}

.performance-number {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--secondary);
    margin-bottom: var(--spacing-xs);
}

.performance-label {
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
    align-items: flex-start;
}

.activity-icon {
    width: 2.5rem;
    height: 2.5rem;
    background-color: var(--secondary);
    color: var(--on-secondary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.activity-icon .material-symbols-outlined {
    font-size: 1.25rem;
}

.activity-content {
    flex: 1;
}

.activity-title {
    font-weight: 600;
    color: var(--secondary);
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
    opacity: 0.7;
}

/* Events List */
.events-list {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-lg);
}

.event-item {
    display: flex;
    gap: var(--spacing-md);
    align-items: flex-start;
}

.event-date {
    width: 3rem;
    height: 3rem;
    background-color: var(--secondary);
    color: var(--on-secondary);
    border-radius: var(--radius-lg);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.date-day {
    font-size: 1.25rem;
    font-weight: 700;
    line-height: 1;
}

.date-month {
    font-size: 0.75rem;
    text-transform: uppercase;
}

.event-content {
    flex: 1;
}

.event-title {
    font-weight: 600;
    color: var(--secondary);
    margin-bottom: var(--spacing-xs);
}

.event-time,
.event-location {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

/* Resources Section */
.resources-section {
    padding: var(--spacing-3xl) 0;
}

.resources-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.resource-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.resource-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.resource-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.resource-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--secondary);
    color: var(--on-secondary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.resource-icon .material-symbols-outlined {
    font-size: 2rem;
}

.resource-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.resource-badge.popular {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.resource-badge.essential {
    background-color: var(--primary);
    color: var(--on-primary);
}

.resource-badge.new {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.resource-badge.active {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.resource-content {
    padding: var(--spacing-lg);
}

.resource-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--secondary);
    margin-bottom: var(--spacing-md);
}

.resource-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.resource-features {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

.feature-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.feature-item .material-symbols-outlined {
    font-size: 1rem;
    color: var(--secondary);
}

.resource-details {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

.resource-actions {
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
    color: var(--secondary);
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
    
    .dashboard-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .resources-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .profile-section {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    
    .performance-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
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
    
    .dashboard-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .resource-card {
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
    
    .resource-actions {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .resource-actions .btn {
        width: 100%;
    }
}
</style>

<script>
// Quick action functions
function openDashboard() {
    document.getElementById('dashboard').scrollIntoView({ behavior: 'smooth' });
}

function openTasks() {
    alert('Task management portal would open here. In production, this would show your assigned tasks, deadlines, and progress tracking.');
}

function openSchedule() {
    alert('Work schedule portal would open here. In production, this would show your shift schedule, leave requests, and calendar.');
}

function openResources() {
    document.getElementById('resources').scrollIntoView({ behavior: 'smooth' });
}

function openReports() {
    alert('Reports portal would open here. In production, this would show your work reports, performance metrics, and analytics.');
}

function openCommunication() {
    alert('Communication hub would open here. In production, this would show staff messaging, announcements, and team collaboration tools.');
}

// Resource actions
document.querySelectorAll('.resource-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Access')) {
        button.addEventListener('click', function() {
            const resourceTitle = this.closest('.resource-card').querySelector('.resource-title').textContent;
            alert(`Accessing: "${resourceTitle}"`);
        });
    } else if (button.textContent.includes('Open')) {
        button.addEventListener('click', function() {
            const resourceTitle = this.closest('.resource-card').querySelector('.resource-title').textContent;
            alert(`Opening: "${resourceTitle}"`);
        });
    }
});

document.querySelectorAll('.resource-actions .btn-outline').forEach(button => {
    button.addEventListener('click', function() {
        const resourceTitle = this.closest('.resource-card').querySelector('.resource-title').textContent;
        const action = button.textContent;
        alert(`${action} for: "${resourceTitle}"`);
    });
});

// Dashboard card actions
document.querySelectorAll('.card-header .btn-outline').forEach(button => {
    button.addEventListener('click', function() {
        const cardTitle = this.closest('.dashboard-card').querySelector('.card-title').textContent;
        alert(`${button.textContent} ${cardTitle}`);
    });
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

// Auto-refresh staff statistics
function refreshStaffStats() {
    // In production, this would fetch real-time staff statistics
    console.log('Refreshing staff statistics...');
    
    // Simulate task count updates
    const taskElement = document.querySelectorAll('.stat-number')[1];
    if (taskElement && taskElement.textContent.includes(',')) {
        const currentCount = parseInt(taskElement.textContent.replace(',', ''));
        const increment = Math.floor(Math.random() * 20) + 5;
        const newCount = currentCount + increment;
        taskElement.textContent = newCount.toLocaleString();
    }
}

// Refresh statistics every 30 seconds for real-time monitoring
setInterval(refreshStaffStats, 30000);
</script>
