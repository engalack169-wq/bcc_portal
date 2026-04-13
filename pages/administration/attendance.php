<?php
/**
 * Bamenda City Council E-Governance Platform
 * Administration Staff Attendance Page
 */

$page_title = 'Staff Attendance | Bamenda City Council';
$page_description = 'Staff attendance tracking and management system for Bamenda City Council.';
$page_keywords = 'staff attendance, time tracking, leave management, Bamenda council administration';

$breadcrumbs = [
    ['title' => 'Administration', 'url' => '../index.php'],
    ['title' => 'Staff Attendance', 'url' => '#']
];

require_once __DIR__ . '/../../includes/header.php';
?>

<section class="hero attendance-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-government-building.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Staff Attendance</span>
            <h1 class="hero-title">Time & Attendance Tracking</h1>
            <p class="hero-subtitle">Comprehensive attendance management system including time tracking, leave requests, and performance monitoring.</p>
            <div class="hero-actions">
                <a href="#attendance-board" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">schedule</span>
                    Attendance Board
                </a>
                <a href="#leave-request" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">event_available</span>
                    Leave Request
                </a>
            </div>
        </div>
    </div>
</section>

<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Attendance Actions</h2>
            <p class="section-subtitle">Quick access to attendance functions</p>
        </div>
        <div class="actions-grid">
            <div class="action-card" onclick="openAttendance()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">schedule</span>
                </div>
                <h3 class="action-title">Attendance Board</h3>
                <p class="action-description">View attendance</p>
            </div>
            <div class="action-card" onclick="openLeave()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">event_available</span>
                </div>
                <h3 class="action-title">Leave Management</h3>
                <p class="action-description">Leave requests</p>
            </div>
            <div class="action-card" onclick="openReports()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">assessment</span>
                </div>
                <h3 class="action-title">Attendance Reports</h3>
                <p class="action-description">Analytics</p>
            </div>
            <div class="action-card" onclick="openCalendar()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">calendar_month</span>
                </div>
                <h3 class="action-title">Work Calendar</h3>
                <p class="action-description">Schedule view</p>
            </div>
        </div>
    </div>
</section>

<section class="attendance-stats-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Attendance Overview</h2>
            <p class="section-subtitle">Real-time attendance statistics</p>
        </div>
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">389</div>
                    <div class="stat-label">Present Today</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+12 on time</span>
                    </div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">event_busy</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">45</div>
                    <div class="stat-label">On Leave</div>
                    <div class="stat-change neutral">
                        <span class="material-symbols-outlined">remove</span>
                        <span>0 change</span>
                    </div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">late</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">12</div>
                    <div class="stat-label">Late Today</div>
                    <div class="stat-change negative">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+3 late</span>
                    </div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">schedule</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">95%</div>
                    <div class="stat-label">Attendance Rate</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+2% improvement</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="attendance-board-section" id="attendance-board">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Today's Attendance</h2>
            <p class="section-subtitle">Real-time attendance tracking</p>
        </div>
        <div class="attendance-controls">
            <input type="date" class="date-filter" value="<?= date('Y-m-d') ?>">
            <select class="department-filter">
                <option value="">All Departments</option>
                <option value="admin">Administration</option>
                <option value="business">Business Services</option>
                <option value="public">Public Services</option>
            </select>
            <button class="btn btn-primary">Refresh</button>
        </div>
        <div class="attendance-table">
            <table>
                <thead>
                    <tr>
                        <th>Staff Name</th>
                        <th>Department</th>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>Status</th>
                        <th>Hours</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="staff-info">
                                <img src="/assets/images/user-avatar-placeholder.png" alt="Staff">
                                <span>John Doe</span>
                            </div>
                        </td>
                        <td>Administration</td>
                        <td>8:00 AM</td>
                        <td>-</td>
                        <td><span class="status-badge present">Present</span></td>
                        <td>4.5</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="staff-info">
                                <img src="/assets/images/user-avatar-placeholder.png" alt="Staff">
                                <span>Jane Smith</span>
                            </div>
                        </td>
                        <td>Business Services</td>
                        <td>8:15 AM</td>
                        <td>-</td>
                        <td><span class="status-badge late">Late</span></td>
                        <td>4.25</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="leave-request-section" id="leave-request">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Leave Request</h2>
            <p class="section-subtitle">Submit leave application</p>
        </div>
        <form class="leave-form">
            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">Leave Type</label>
                    <select class="form-select">
                        <option value="annual">Annual Leave</option>
                        <option value="sick">Sick Leave</option>
                        <option value="emergency">Emergency Leave</option>
                        <option value="maternity">Maternity Leave</option>
                        <option value="paternity">Paternity Leave</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Duration</label>
                    <div class="date-range">
                        <input type="date" class="form-input" placeholder="Start Date">
                        <input type="date" class="form-input" placeholder="End Date">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="form-label">Reason</label>
                <textarea class="form-textarea" rows="3" placeholder="Provide reason for leave request"></textarea>
            </div>
            <div class="form-actions">
                <button type="reset" class="btn btn-outline">Reset</button>
                <button type="submit" class="btn btn-primary">Submit Request</button>
            </div>
        </form>
    </div>
</section>

<section class="faq-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Common questions about attendance</p>
        </div>
        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How do I check in/out?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Use the attendance board to check in/out with your staff ID. You can also use the mobile app for remote check-in when working off-site.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What if I forget to check out?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Contact your supervisor immediately to report the issue. The system will automatically check you out at standard working hours if no manual check-out is recorded.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>

<style>
.attendance-hero{background:linear-gradient(135deg,var(--tertiary)0,var(--tertiary-container)100%)}
.quick-actions-section{padding:var(--spacing-3xl)0;background-color:var(--surface-container-low)}
.actions-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:var(--spacing-xl)}
.action-card{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);padding:var(--spacing-xl);border:1px solid var(--outline-variant);text-align:center;cursor:pointer;transition:all .3s ease}
.action-card:hover{transform:translateY(-4px);box-shadow:0 8px 25px rgba(0,0,0,.15)}
.action-icon{width:4rem;height:4rem;background-color:var(--tertiary);color:var(--on-tertiary);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center;margin:0 auto var(--spacing-lg)}
.action-icon .material-symbols-outlined{font-size:2rem}
.action-title{font-size:1.25rem;font-weight:700;color:var(--tertiary);margin-bottom:var(--spacing-md)}
.action-description{color:var(--on-surface-variant);line-height:1.6}
.attendance-stats-section{padding:var(--spacing-3xl)0}
.stats-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:var(--spacing-lg)}
.stat-card{display:grid;grid-template-columns:auto 1fr;gap:var(--spacing-lg);align-items:center;background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);padding:var(--spacing-xl);border:1px solid var(--outline-variant);transition:all .3s ease}
.stat-card:hover{transform:translateY(-4px);box-shadow:0 8px 25px rgba(0,0,0,.15)}
.stat-icon{width:3.5rem;height:3.5rem;background-color:var(--tertiary);color:var(--on-tertiary);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center;flex-shrink:0}
.stat-icon .material-symbols-outlined{font-size:2rem}
.stat-content{flex:1}
.stat-number{font-size:2rem;font-weight:800;color:var(--tertiary);margin-bottom:var(--spacing-xs);line-height:1}
.stat-label{font-size:1rem;color:var(--on-surface-variant);font-weight:500;margin-bottom:var(--spacing-sm)}
.stat-change{display:flex;align-items:center;gap:var(--spacing-xs);font-size:.75rem;font-weight:600}
.stat-change.positive{color:var(--tertiary)}
.stat-change.negative{color:var(--error)}
.stat-change.neutral{color:var(--on-surface-variant)}
.stat-change .material-symbols-outlined{font-size:1rem}
.attendance-board-section{padding:var(--spacing-3xl)0;background-color:var(--surface-container-low)}
.attendance-controls{display:flex;gap:var(--spacing-md);margin-bottom:var(--spacing-xl);align-items:center}
.date-filter,.department-filter{padding:var(--spacing-sm) var(--spacing-md);border:1px solid var(--outline-variant);border-radius:var(--radius-md);background-color:var(--surface-container-lowest);color:var(--on-surface);font-size:.875rem}
.attendance-table{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);border:1px solid var(--outline-variant);overflow:hidden}
.attendance-table table{width:100%;border-collapse:collapse}
.attendance-table th{background-color:var(--surface-container);padding:var(--spacing-md);text-align:left;font-weight:600;color:var(--tertiary);border-bottom:1px solid var(--outline-variant)}
.attendance-table td{padding:var(--spacing-md);border-bottom:1px solid var(--outline-variant)}
.staff-info{display:flex;align-items:center;gap:var(--spacing-sm)}
.staff-info img{width:2rem;height:2rem;border-radius:50%;object-fit:cover}
.status-badge{padding:var(--spacing-xs) var(--spacing-sm);border-radius:var(--radius-full);font-size:.75rem;font-weight:600;text-transform:uppercase}
.status-badge.present{background-color:var(--tertiary);color:var(--on-tertiary)}
.status-badge.late{background-color:var(--secondary);color:var(--on-secondary)}
.leave-request-section{padding:var(--spacing-3xl)0}
.leave-form{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);border:1px solid var(--outline-variant);max-width:600px;margin:0 auto;padding:var(--spacing-xl)}
.form-row{display:grid;grid-template-columns:1fr 1fr;gap:var(--spacing-lg)}
.form-group{margin-bottom:var(--spacing-lg)}
.form-label{display:block;font-size:.875rem;font-weight:600;color:var(--on-surface);margin-bottom:var(--spacing-sm)}
.form-input,.form-select,.form-textarea{width:100%;padding:var(--spacing-sm) var(--spacing-md);border:1px solid var(--outline-variant);border-radius:var(--radius-md);background-color:var(--surface-container-lowest);color:var(--on-surface);font-size:.875rem;transition:all .2s ease}
.form-input:focus,.form-select:focus,.form-textarea:focus{outline:none;border-color:var(--tertiary);box-shadow:0 0 0 2px var(--tertiary-container)}
.date-range{display:flex;gap:var(--spacing-md)}
.form-textarea{resize:vertical;min-height:80px}
.form-actions{display:flex;gap:var(--spacing-lg);justify-content:center;margin-top:var(--spacing-xl)}
.faq-section{padding:var(--spacing-3xl)0}
.faq-list{max-width:800px;margin:0 auto}
.faq-item{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);border:1px solid var(--outline-variant);margin-bottom:var(--spacing-md);overflow:hidden}
.faq-question{display:flex;justify-content:space-between;align-items:center;cursor:pointer;padding:var(--spacing-lg);font-weight:600;color:var(--tertiary);transition:background-color .2s ease}
.faq-question:hover{background-color:var(--surface-container)}
.faq-toggle{font-size:1.25rem;transition:transform .2s ease}
.faq-item.active .faq-toggle{transform:rotate(45deg)}
.faq-answer{display:none;padding:0 var(--spacing-lg) var(--spacing-lg);color:var(--on-surface-variant);line-height:1.6}
.faq-item.active .faq-answer{display:block}
@media (max-width:768px){.actions-grid{grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:var(--spacing-lg)}.stats-grid{grid-template-columns:repeat(2,1fr);gap:var(--spacing-md)}.attendance-controls{flex-direction:column;align-items:stretch;gap:var(--spacing-sm)}.form-row{grid-template-columns:1fr;gap:var(--spacing-md)}.leave-form{margin:0 -var(--spacing-md);border-radius:0}}
@media (max-width:480px){.action-card{padding:var(--spacing-lg)}.action-icon{width:3rem;height:3rem}.action-icon .material-symbols-outlined{font-size:1.5rem}.stats-grid{grid-template-columns:1fr;gap:var(--spacing-md)}.stat-card{grid-template-columns:1fr;text-align:center;gap:var(--spacing-md)}.attendance-table{margin:0 -var(--spacing-md);border-radius:0}.form-actions{flex-direction:column;align-items:center}.form-actions .btn{width:100%;max-width:300px}}
</style>

<script>
function openAttendance(){document.getElementById('attendance-board').scrollIntoView({behavior:'smooth'})}
function openLeave(){document.getElementById('leave-request').scrollIntoView({behavior:'smooth'})}
function openReports(){alert('Attendance reports portal would open here. In production, this would show detailed attendance analytics and reports.')}
function openCalendar(){alert('Work calendar portal would open here. In production, this would show monthly calendar with attendance patterns.')}
function toggleFAQ(e){const t=e.parentElement;t.classList.toggle('active')}
document.querySelector('.leave-form')?.addEventListener('submit',function(e){e.preventDefault();alert('Leave request submitted successfully! Your request will be reviewed by your supervisor.')});
</script>
