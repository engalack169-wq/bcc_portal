<?php
/**
 * Bamenda City Council E-Governance Platform
 * Service History Page
 */

// Set page metadata
$page_title = 'Service History | Bamenda City Council';
$page_description = 'View your complete service history, applications, and transactions with Bamenda City Council.';
$page_keywords = 'service history, application history, transaction history, council services, Bamenda';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Services', 'url' => 'services.php'],
    ['title' => 'Service History', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero service-history-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-government-building.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary badge-lg">Service History</span>
            <h1 class="hero-title">Your Service Dashboard</h1>
            <p class="hero-subtitle">
                Track all your applications, payments, and interactions with Bamenda City Council services in one place.
            </p>
            <div class="hero-actions">
                <a href="#service-timeline" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">history</span>
                    View Timeline
                </a>
                <a href="#download-reports" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">download</span>
                    Download Reports
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Stats -->
<section class="quick-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">24</div>
                    <div class="stat-label">Total Applications</div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">payments</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">18</div>
                    <div class="stat-label">Completed Payments</div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">pending</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">3</div>
                    <div class="stat-label">Pending Applications</div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">check_circle</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">21</div>
                    <div class="stat-label">Completed Services</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Timeline -->
<section class="service-timeline-section" id="service-timeline">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Service Timeline</h2>
            <p class="section-subtitle">Chronological view of all your service interactions</p>
        </div>

        <div class="timeline-filters">
            <div class="filter-row">
                <div class="form-group">
                    <label class="form-label">Service Type</label>
                    <select class="form-select" id="filterServiceType">
                        <option value="">All Services</option>
                        <option value="business-license">Business License</option>
                        <option value="permits">Permits</option>
                        <option value="property">Property Registry</option>
                        <option value="tax">Tax Portal</option>
                        <option value="payments">Online Payments</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Status</label>
                    <select class="form-select" id="filterStatus">
                        <option value="">All Status</option>
                        <option value="completed">Completed</option>
                        <option value="pending">Pending</option>
                        <option value="in-progress">In Progress</option>
                        <option value="rejected">Rejected</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Date Range</label>
                    <select class="form-select" id="filterDateRange">
                        <option value="">All Time</option>
                        <option value="week">This Week</option>
                        <option value="month">This Month</option>
                        <option value="quarter">This Quarter</option>
                        <option value="year">This Year</option>
                    </select>
                </div>
                <button class="btn btn-primary" onclick="filterTimeline()">Filter</button>
            </div>
        </div>

        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-marker completed">
                    <span class="material-symbols-outlined">check_circle</span>
                </div>
                <div class="timeline-content">
                    <div class="timeline-header">
                        <h3 class="timeline-title">Business License Renewed</h3>
                        <span class="timeline-date">March 15, 2024</span>
                    </div>
                    <p class="timeline-description">Successfully renewed business license for retail store operation.</p>
                    <div class="timeline-details">
                        <span class="badge badge-success">Completed</span>
                        <span class="timeline-id">Ref: BIZ-2024-0456</span>
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-marker pending">
                    <span class="material-symbols-outlined">pending</span>
                </div>
                <div class="timeline-content">
                    <div class="timeline-header">
                        <h3 class="timeline-title">Building Permit Application</h3>
                        <span class="timeline-date">March 10, 2024</span>
                    </div>
                    <p class="timeline-description">Applied for building permit for commercial property construction.</p>
                    <div class="timeline-details">
                        <span class="badge badge-warning badge-lg">In Progress</span>
                        <span class="timeline-id">Ref: PER-2024-0789</span>
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-marker completed">
                    <span class="material-symbols-outlined">check_circle</span>
                </div>
                <div class="timeline-content">
                    <div class="timeline-header">
                        <h3 class="timeline-title">Property Tax Payment</h3>
                        <span class="timeline-date">February 28, 2024</span>
                    </div>
                    <p class="timeline-description">Paid annual property tax for residential property.</p>
                    <div class="timeline-details">
                        <span class="badge badge-success">Completed</span>
                        <span class="timeline-id">Ref: TAX-2024-0234</span>
                        <span class="timeline-amount">₣25,000</span>
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-marker completed">
                    <span class="material-symbols-outlined">check_circle</span>
                </div>
                <div class="timeline-content">
                    <div class="timeline-header">
                        <h3 class="timeline-title">Property Registration</h3>
                        <span class="timeline-date">January 20, 2024</span>
                    </div>
                    <p class="timeline-description">Successfully registered property ownership with land registry.</p>
                    <div class="timeline-details">
                        <span class="badge badge-success">Completed</span>
                        <span class="timeline-id">Ref: REG-2024-0123</span>
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-marker rejected">
                    <span class="material-symbols-outlined">cancel</span>
                </div>
                <div class="timeline-content">
                    <div class="timeline-header">
                        <h3 class="timeline-title">Event Permit Application</h3>
                        <span class="timeline-date">January 15, 2024</span>
                    </div>
                    <p class="timeline-description">Event permit application rejected due to insufficient documentation.</p>
                    <div class="timeline-details">
                        <span class="badge badge-danger">Rejected</span>
                        <span class="timeline-id">Ref: PER-2024-0056</span>
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-marker completed">
                    <span class="material-symbols-outlined">check_circle</span>
                </div>
                <div class="timeline-content">
                    <div class="timeline-header">
                        <h3 class="timeline-title">Market Stall Registration</h3>
                        <span class="timeline-date">January 5, 2024</span>
                    </div>
                    <p class="timeline-description">Registered market stall at Central Market for monthly trading.</p>
                    <div class="timeline-details">
                        <span class="badge badge-success">Completed</span>
                        <span class="timeline-id">Ref: MKT-2024-0001</span>
                        <span class="timeline-amount">₣15,000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Detailed Service Records -->
<section class="service-records-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Service Records</h2>
            <p class="section-subtitle">Detailed view of all your service applications and transactions</p>
        </div>

        <div class="records-tabs">
            <button class="records-tab active" data-tab="applications">Applications</button>
            <button class="records-tab" data-tab="payments">Payments</button>
            <button class="records-tab" data-tab="certificates">Certificates</button>
            <button class="records-tab" data-tab="correspondence">Correspondence</button>
        </div>

        <div class="records-content">
            <!-- Applications Tab -->
            <div class="records-panel active" id="applications">
                <div class="records-table">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Application ID</th>
                                <th>Service Type</th>
                                <th>Date Submitted</th>
                                <th>Status</th>
                                <th>Last Updated</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>BIZ-2024-0456</td>
                                <td>Business License</td>
                                <td>Mar 10, 2024</td>
                                <td><span class="badge badge-success">Completed</span></td>
                                <td>Mar 15, 2024</td>
                                <td>
                                    <button class="btn btn-sm btn-outline">View Details</button>
                                    <button class="btn btn-sm btn-primary">Download</button>
                                </td>
                            </tr>
                            <tr>
                                <td>PER-2024-0789</td>
                                <td>Building Permit</td>
                                <td>Mar 10, 2024</td>
                                <td><span class="badge badge-warning badge-lg">In Progress</span></td>
                                <td>Mar 12, 2024</td>
                                <td>
                                    <button class="btn btn-sm btn-outline">View Details</button>
                                    <button class="btn btn-sm btn-outline">Track Status</button>
                                </td>
                            </tr>
                            <tr>
                                <td>REG-2024-0123</td>
                                <td>Property Registration</td>
                                <td>Jan 15, 2024</td>
                                <td><span class="badge badge-success">Completed</span></td>
                                <td>Jan 20, 2024</td>
                                <td>
                                    <button class="btn btn-sm btn-outline">View Details</button>
                                    <button class="btn btn-sm btn-primary">Download</button>
                                </td>
                            </tr>
                            <tr>
                                <td>PER-2024-0056</td>
                                <td>Event Permit</td>
                                <td>Jan 10, 2024</td>
                                <td><span class="badge badge-danger">Rejected</span></td>
                                <td>Jan 15, 2024</td>
                                <td>
                                    <button class="btn btn-sm btn-outline">View Details</button>
                                    <button class="btn btn-sm btn-primary">Reapply</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Payments Tab -->
            <div class="records-panel" id="payments">
                <div class="records-table">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Payment ID</th>
                                <th>Payment Type</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Method</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PMT-2024-0456</td>
                                <td>Business License</td>
                                <td>₣75,000</td>
                                <td>Mar 15, 2024</td>
                                <td>Mobile Money</td>
                                <td><span class="badge badge-success">Completed</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline">View Receipt</button>
                                    <button class="btn btn-sm btn-primary">Download</button>
                                </td>
                            </tr>
                            <tr>
                                <td>PMT-2024-0234</td>
                                <td>Property Tax</td>
                                <td>₣25,000</td>
                                <td>Feb 28, 2024</td>
                                <td>Card Payment</td>
                                <td><span class="badge badge-success">Completed</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline">View Receipt</button>
                                    <button class="btn btn-sm btn-primary">Download</button>
                                </td>
                            </tr>
                            <tr>
                                <td>PMT-2024-0001</td>
                                <td>Market Stall</td>
                                <td>₣15,000</td>
                                <td>Jan 5, 2024</td>
                                <td>Mobile Money</td>
                                <td><span class="badge badge-success">Completed</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline">View Receipt</button>
                                    <button class="btn btn-sm btn-primary">Download</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Certificates Tab -->
            <div class="records-panel" id="certificates">
                <div class="certificates-grid">
                    <div class="certificate-card">
                        <div class="certificate-icon">
                            <span class="material-symbols-outlined">description</span>
                        </div>
                        <h3 class="certificate-title">Business License</h3>
                        <p class="certificate-description">Valid until: Dec 31, 2024</p>
                        <div class="certificate-details">
                            <span class="certificate-id">BIZ-2024-0456</span>
                            <span class="certificate-status">Active</span>
                        </div>
                        <div class="certificate-actions">
                            <button class="btn btn-sm btn-primary">Download PDF</button>
                            <button class="btn btn-sm btn-outline">Verify</button>
                        </div>
                    </div>

                    <div class="certificate-card">
                        <div class="certificate-icon">
                            <span class="material-symbols-outlined">apartment</span>
                        </div>
                        <h3 class="certificate-title">Property Registration</h3>
                        <p class="certificate-description">Issued: Jan 20, 2024</p>
                        <div class="certificate-details">
                            <span class="certificate-id">REG-2024-0123</span>
                            <span class="certificate-status">Active</span>
                        </div>
                        <div class="certificate-actions">
                            <button class="btn btn-sm btn-primary">Download PDF</button>
                            <button class="btn btn-sm btn-outline">Verify</button>
                        </div>
                    </div>

                    <div class="certificate-card">
                        <div class="certificate-icon">
                            <span class="material-symbols-outlined">receipt</span>
                        </div>
                        <h3 class="certificate-title">Tax Clearance</h3>
                        <p class="certificate-description">Valid until: Mar 31, 2024</p>
                        <div class="certificate-details">
                            <span class="certificate-id">TAX-2024-0234</span>
                            <span class="certificate-status">Active</span>
                        </div>
                        <div class="certificate-actions">
                            <button class="btn btn-sm btn-primary">Download PDF</button>
                            <button class="btn btn-sm btn-outline">Verify</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Correspondence Tab -->
            <div class="records-panel" id="correspondence">
                <div class="correspondence-list">
                    <div class="correspondence-item">
                        <div class="correspondence-header">
                            <h4 class="correspondence-title">Business License Approval</h4>
                            <span class="correspondence-date">Mar 15, 2024</span>
                        </div>
                        <p class="correspondence-preview">Your business license application has been approved. You can now download your certificate...</p>
                        <div class="correspondence-type">
                            <span class="badge badge-success">Official Communication</span>
                        </div>
                        <button class="btn btn-sm btn-outline">Read Full Message</button>
                    </div>

                    <div class="correspondence-item">
                        <div class="correspondence-header">
                            <h4 class="correspondence-title">Building Permit Review Update</h4>
                            <span class="correspondence-date">Mar 12, 2024</span>
                        </div>
                        <p class="correspondence-preview">Your building permit application is currently under review. We require additional documentation...</p>
                        <div class="correspondence-type">
                            <span class="badge badge-warning">Action Required</span>
                        </div>
                        <button class="btn btn-sm btn-outline">Read Full Message</button>
                    </div>

                    <div class="correspondence-item">
                        <div class="correspondence-header">
                            <h4 class="correspondence-title">Event Permit Rejection</h4>
                            <span class="correspondence-date">Jan 15, 2024</span>
                        </div>
                        <p class="correspondence-preview">We regret to inform you that your event permit application has been rejected due to...</p>
                        <div class="correspondence-type">
                            <span class="badge badge-danger">Rejection Notice</span>
                        </div>
                        <button class="btn btn-sm btn-outline">Read Full Message</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Download Reports -->
<section class="download-reports-section" id="download-reports">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Download Reports</h2>
            <p class="section-subtitle">Generate and download comprehensive reports of your service history</p>
        </div>

        <div class="reports-options">
            <div class="report-option">
                <div class="report-icon">
                    <span class="material-symbols-outlined">summarize</span>
                </div>
                <h3 class="report-title">Complete Service History</h3>
                <p class="report-description">Download a comprehensive report of all your service interactions</p>
                <div class="report-formats">
                    <button class="btn btn-outline" onclick="downloadReport('pdf', 'complete')">PDF</button>
                    <button class="btn btn-outline" onclick="downloadReport('excel', 'complete')">Excel</button>
                </div>
            </div>

            <div class="report-option">
                <div class="report-icon">
                    <span class="material-symbols-outlined">receipt_long</span>
                </div>
                <h3 class="report-title">Payment History</h3>
                <p class="report-description">Detailed report of all payments and transactions</p>
                <div class="report-formats">
                    <button class="btn btn-outline" onclick="downloadReport('pdf', 'payments')">PDF</button>
                    <button class="btn btn-outline" onclick="downloadReport('excel', 'payments')">Excel</button>
                </div>
            </div>

            <div class="report-option">
                <div class="report-icon">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <h3 class="report-title">Application Status</h3>
                <p class="report-description">Current status of all pending and completed applications</p>
                <div class="report-formats">
                    <button class="btn btn-outline" onclick="downloadReport('pdf', 'applications')">PDF</button>
                    <button class="btn btn-outline" onclick="downloadReport('excel', 'applications')">Excel</button>
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
/* Service History Page Styles */
.service-history-hero {
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-container) 100%);
}

/* Quick Stats Section */
.quick-stats-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
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
}

/* Timeline Section */
.service-timeline-section {
    padding: var(--spacing-3xl) 0;
}

.timeline-filters {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    margin-bottom: var(--spacing-xl);
}

.filter-row {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: var(--spacing-lg);
    align-items: end;
}

.timeline {
    position: relative;
    max-width: 800px;
    margin: 0 auto;
}

.timeline::before {
    content: '';
    position: absolute;
    left: 50%;
    top: 0;
    bottom: 0;
    width: 2px;
    background-color: var(--outline-variant);
    transform: translateX(-50%);
}

.timeline-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: var(--spacing-2xl);
    position: relative;
}

.timeline-item:nth-child(odd) {
    flex-direction: row-reverse;
}

.timeline-marker {
    width: 3rem;
    height: 3rem;
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    z-index: 2;
    flex-shrink: 0;
    margin: 0 var(--spacing-lg);
}

.timeline-marker.completed {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.timeline-marker.pending {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.timeline-marker.rejected {
    background-color: var(--error);
    color: var(--on-error);
}

.timeline-content {
    flex: 1;
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    max-width: 350px;
}

.timeline-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: var(--spacing-md);
}

.timeline-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin: 0;
}

.timeline-date {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    white-space: nowrap;
}

.timeline-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-md);
}

.timeline-details {
    display: flex;
    align-items: center;
    gap: var(--spacing-md);
    flex-wrap: wrap;
}

.timeline-id {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
    font-family: monospace;
}

.timeline-amount {
    font-weight: 600;
    color: var(--primary);
}

/* Service Records Section */
.service-records-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.records-tabs {
    display: flex;
    gap: var(--spacing-md);
    margin-bottom: var(--spacing-lg);
    border-bottom: 2px solid var(--outline-variant);
}

.records-tab {
    padding: var(--spacing-md) var(--spacing-lg);
    background: none;
    border: none;
    color: var(--on-surface-variant);
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s ease;
    border-bottom: 2px solid transparent;
}

.records-tab.active {
    color: var(--primary);
    border-bottom-color: var(--primary);
}

.records-tab:hover {
    color: var(--primary);
}

.records-content {
    margin-top: var(--spacing-lg);
}

.records-panel {
    display: none;
}

.records-panel.active {
    display: block;
}

.records-table {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    overflow: hidden;
}

.data-table {
    width: 100%;
    border-collapse: collapse;
}

.data-table th {
    background-color: var(--surface-container);
    padding: var(--spacing-md);
    text-align: left;
    font-weight: 600;
    color: var(--primary);
    border-bottom: 1px solid var(--outline-variant);
}

.data-table td {
    padding: var(--spacing-md);
    border-bottom: 1px solid var(--outline-variant);
}

.data-table tr:hover {
    background-color: var(--surface-container);
}

/* Certificates Grid */
.certificates-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-lg);
}

.certificate-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.certificate-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.certificate-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-lg);
}

.certificate-icon .material-symbols-outlined {
    font-size: 2rem;
}

.certificate-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.certificate-description {
    color: var(--on-surface-variant);
    margin-bottom: var(--spacing-md);
}

.certificate-details {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: var(--spacing-lg);
}

.certificate-id {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
    font-family: monospace;
}

.certificate-status {
    font-size: 0.75rem;
    color: var(--tertiary);
    font-weight: 600;
}

.certificate-actions {
    display: flex;
    gap: var(--spacing-sm);
    justify-content: center;
}

/* Correspondence List */
.correspondence-list {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-lg);
}

.correspondence-item {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.correspondence-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.correspondence-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: var(--spacing-md);
}

.correspondence-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin: 0;
}

.correspondence-date {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.correspondence-preview {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-md);
}

.correspondence-type {
    margin-bottom: var(--spacing-md);
}

/* Download Reports Section */
.download-reports-section {
    padding: var(--spacing-3xl) 0;
}

.reports-options {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.report-option {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.report-option:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.report-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-lg);
}

.report-icon .material-symbols-outlined {
    font-size: 2rem;
}

.report-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.report-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.report-formats {
    display: flex;
    gap: var(--spacing-sm);
    justify-content: center;
}

/* Responsive Design */
@media (max-width: 768px) {
    .stats-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .filter-row {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .timeline::before {
        left: 2rem;
    }
    
    .timeline-item {
        flex-direction: column !important;
        align-items: flex-start !important;
    }
    
    .timeline-marker {
        margin: 0 0 var(--spacing-md) 0;
    }
    
    .timeline-content {
        max-width: 100%;
    }
    
    .records-tabs {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .records-tab {
        text-align: center;
        border-bottom: 1px solid var(--outline-variant);
    }
    
    .records-tab.active {
        border-bottom-color: var(--primary);
    }
    
    .certificates-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .reports-options {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .data-table {
        font-size: 0.875rem;
    }
    
    .data-table th,
    .data-table td {
        padding: var(--spacing-sm);
    }
}

@media (max-width: 480px) {
    .stat-card {
        grid-template-columns: 1fr;
        text-align: center;
        gap: var(--spacing-md);
    }
    
    .timeline-content {
        padding: var(--spacing-md);
    }
    
    .certificate-card {
        padding: var(--spacing-lg);
    }
    
    .correspondence-item {
        padding: var(--spacing-md);
    }
    
    .report-option {
        padding: var(--spacing-lg);
    }
    
    .report-formats {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
}
</style>

<script>
// Records tabs functionality
document.querySelectorAll('.records-tab').forEach(tab => {
    tab.addEventListener('click', () => {
        // Remove active class from all tabs and panels
        document.querySelectorAll('.records-tab').forEach(t => t.classList.remove('active'));
        document.querySelectorAll('.records-panel').forEach(p => p.classList.remove('active'));
        
        // Add active class to clicked tab and corresponding panel
        tab.classList.add('active');
        const panelId = tab.getAttribute('data-tab');
        document.getElementById(panelId).classList.add('active');
    });
});

// Filter timeline
function filterTimeline() {
    const serviceType = document.getElementById('filterServiceType').value;
    const status = document.getElementById('filterStatus').value;
    const dateRange = document.getElementById('filterDateRange').value;
    
    // In production, this would filter the timeline items
    alert(`Filtering by: ${serviceType || 'All Services'}, ${status || 'All Status'}, ${dateRange || 'All Time'}`);
}

// Download report
function downloadReport(format, type) {
    alert(`Downloading ${format.toUpperCase()} report: ${type}`);
    // In production, this would generate and download the report
}

// Simulate real-time updates
function updateStats() {
    // In production, this would fetch real data from the server
    const stats = {
        applications: Math.floor(Math.random() * 5) + 20,
        payments: Math.floor(Math.random() * 3) + 15,
        pending: Math.floor(Math.random() * 3) + 1,
        completed: Math.floor(Math.random() * 5) + 18
    };
    
    // Update DOM with new stats
    document.querySelectorAll('.stat-number').forEach((element, index) => {
        const values = Object.values(stats);
        element.textContent = values[index];
    });
}

// Initialize
updateStats();
</script>
