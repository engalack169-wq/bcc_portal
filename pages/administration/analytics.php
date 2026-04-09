<?php
/**
 * Bamenda City Council E-Governance Platform
 * Administration Analytics Page
 */

// Set page metadata
$page_title = 'Analytics & Reports | Bamenda City Council';
$page_description = 'Access comprehensive analytics, performance metrics, and detailed reports for Bamenda City Council operations and services.';
$page_keywords = 'analytics, reports, performance metrics, data analysis, Bamenda council statistics';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Administration', 'url' => '../index.php'],
    ['title' => 'Analytics & Reports', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero analytics-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-government-building.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Analytics & Reports</span>
            <h1 class="hero-title">Performance Analytics & Reports</h1>
            <p class="hero-subtitle">
                Comprehensive analytics platform including real-time performance metrics, detailed service reports, data visualization, and operational insights for informed decision-making.
            </p>
            <div class="hero-actions">
                <a href="#dashboard" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">dashboard</span>
                    Analytics Dashboard
                </a>
                <a href="#reports" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">description</span>
                    Generate Reports
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Analytics Actions</h2>
            <p class="section-subtitle">Quick access to analytics functions</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openDashboard()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">dashboard</span>
                </div>
                <h3 class="action-title">Analytics Dashboard</h3>
                <p class="action-description">Real-time metrics</p>
            </div>

            <div class="action-card" onclick="openReports()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <h3 class="action-title">Generate Reports</h3>
                <p class="action-description">Custom reports</p>
            </div>

            <div class="action-card" onclick="openCharts()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">bar_chart</span>
                </div>
                <h3 class="action-title">Data Visualization</h3>
                <p class="action-description">Charts & graphs</p>
            </div>

            <div class="action-card" onclick="openExport()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">download</span>
                </div>
                <h3 class="action-title">Export Data</h3>
                <p class="action-description">Download reports</p>
            </div>

            <div class="action-card" onclick="openInsights()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">lightbulb</span>
                </div>
                <h3 class="action-title">AI Insights</h3>
                <p class="action-description">Smart analysis</p>
            </div>

            <div class="action-card" onclick="openSchedule()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">schedule</span>
                </div>
                <h3 class="action-title">Scheduled Reports</h3>
                <p class="action-description">Automated reports</p>
            </div>
        </div>
    </div>
</section>

<!-- Analytics Overview -->
<section class="analytics-overview-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Analytics Overview</h2>
            <p class="section-subtitle">Real-time performance metrics</p>
        </div>

        <div class="overview-grid">
            <div class="overview-card">
                <div class="overview-header">
                    <h3 class="overview-title">Service Performance</h3>
                    <span class="badge badge-success">Excellent</span>
                </div>
                <div class="overview-content">
                    <div class="metric-grid">
                        <div class="metric-item">
                            <div class="metric-value">94%</div>
                            <div class="metric-label">Service Efficiency</div>
                            <div class="metric-change positive">
                                <span class="material-symbols-outlined">trending_up</span>
                                <span>+5% this month</span>
                            </div>
                        </div>
                        <div class="metric-item">
                            <div class="metric-value">2.3 hours</div>
                            <div class="metric-label">Avg Response Time</div>
                            <div class="metric-change positive">
                                <span class="material-symbols-outlined">trending_down</span>
                                <span>-30 minutes</span>
                            </div>
                        </div>
                        <div class="metric-item">
                            <div class="metric-value">89%</div>
                            <div class="metric-label">User Satisfaction</div>
                            <div class="metric-change positive">
                                <span class="material-symbols-outlined">trending_up</span>
                                <span>+3% rating</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="overview-card">
                <div class="overview-header">
                    <h3 class="overview-title">Operations Metrics</h3>
                    <span class="badge badge-warning">Good</span>
                </div>
                <div class="overview-content">
                    <div class="metric-grid">
                        <div class="metric-item">
                            <div class="metric-value">12,456</div>
                            <div class="metric-label">Daily Transactions</div>
                            <div class="metric-change positive">
                                <span class="material-symbols-outlined">trending_up</span>
                                <span>+1,234 today</span>
                            </div>
                        </div>
                        <div class="metric-item">
                            <div class="metric-value">99.7%</div>
                            <div class="metric-label">System Uptime</div>
                            <div class="metric-change positive">
                                <span class="material-symbols-outlined">trending_up</span>
                                <span>+0.2% stability</span>
                            </div>
                        </div>
                        <div class="metric-item">
                            <div class="metric-value">456</div>
                            <div class="metric-label">Active Staff</div>
                            <div class="metric-change positive">
                                <span class="material-symbols-outlined">trending_up</span>
                                <span>+12 new hires</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="overview-card">
                <div class="overview-header">
                    <h3 class="overview-title">Financial Analytics</h3>
                    <span class="badge badge-success">Strong</span>
                </div>
                <div class="overview-content">
                    <div class="metric-grid">
                        <div class="metric-item">
                            <div class="metric-value">₣2.3B</div>
                            <div class="metric-label">Annual Revenue</div>
                            <div class="metric-change positive">
                                <span class="material-symbols-outlined">trending_up</span>
                                <span>+18% growth</span>
                            </div>
                        </div>
                        <div class="metric-item">
                            <div class="metric-value">78%</div>
                            <div class="metric-label">Budget Utilization</div>
                            <div class="metric-change positive">
                                <span class="material-symbols-outlined">trending_up</span>
                                <span>+5% efficiency</span>
                            </div>
                        </div>
                        <div class="metric-item">
                            <div class="metric-value">₣450M</div>
                            <div class="metric-label">Cost Savings</div>
                            <div class="metric-change positive">
                                <span class="material-symbols-outlined">trending_up</span>
                                <span>+₣89M saved</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Analytics Dashboard -->
<section class="dashboard-section" id="dashboard">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Analytics Dashboard</h2>
            <p class="section-subtitle">Comprehensive data visualization</p>
        </div>

        <div class="dashboard-grid">
            <!-- Service Usage Chart -->
            <div class="chart-card">
                <div class="chart-header">
                    <h3 class="chart-title">Service Usage Trends</h3>
                    <select class="chart-filter">
                        <option value="week">Last Week</option>
                        <option value="month" selected>Last Month</option>
                        <option value="quarter">Last Quarter</option>
                        <option value="year">Last Year</option>
                    </select>
                </div>
                <div class="chart-content">
                    <div class="chart-placeholder">
                        <div class="chart-bars">
                            <div class="bar" style="height: 70%; background: var(--primary);"></div>
                            <div class="bar" style="height: 85%; background: var(--secondary);"></div>
                            <div class="bar" style="height: 60%; background: var(--tertiary);"></div>
                            <div class="bar" style="height: 90%; background: var(--primary);"></div>
                            <div class="bar" style="height: 75%; background: var(--secondary);"></div>
                            <div class="bar" style="height: 95%; background: var(--tertiary);"></div>
                            <div class="bar" style="height: 80%; background: var(--primary);"></div>
                        </div>
                        <div class="chart-labels">
                            <span>Mon</span>
                            <span>Tue</span>
                            <span>Wed</span>
                            <span>Thu</span>
                            <span>Fri</span>
                            <span>Sat</span>
                            <span>Sun</span>
                        </div>
                    </div>
                    <div class="chart-legend">
                        <div class="legend-item">
                            <div class="legend-color" style="background: var(--primary);"></div>
                            <span>Business Services</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-color" style="background: var(--secondary);"></div>
                            <span>Public Services</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-color" style="background: var(--tertiary);"></div>
                            <span>Emergency Services</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- User Engagement Chart -->
            <div class="chart-card">
                <div class="chart-header">
                    <h3 class="chart-title">User Engagement</h3>
                    <select class="chart-filter">
                        <option value="today">Today</option>
                        <option value="week" selected>This Week</option>
                        <option value="month">This Month</option>
                    </select>
                </div>
                <div class="chart-content">
                    <div class="engagement-metrics">
                        <div class="engagement-item">
                            <div class="engagement-icon">
                                <span class="material-symbols-outlined">person</span>
                            </div>
                            <div class="engagement-data">
                                <div class="engagement-number">45,678</div>
                                <div class="engagement-label">Active Users</div>
                                <div class="engagement-change positive">+12% growth</div>
                            </div>
                        </div>
                        <div class="engagement-item">
                            <div class="engagement-icon">
                                <span class="material-symbols-outlined">schedule</span>
                            </div>
                            <div class="engagement-data">
                                <div class="engagement-number">8.5 min</div>
                                <div class="engagement-label">Avg Session</div>
                                <div class="engagement-change positive">+1.2 min</div>
                            </div>
                        </div>
                        <div class="engagement-item">
                            <div class="engagement-icon">
                                <span class="material-symbols-outlined">repeat</span>
                            </div>
                            <div class="engagement-data">
                                <div class="engagement-number">78%</div>
                                <div class="engagement-label">Return Rate</div>
                                <div class="engagement-change positive">+5% retention</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Performance Metrics -->
            <div class="chart-card">
                <div class="chart-header">
                    <h3 class="chart-title">Performance Metrics</h3>
                    <button class="btn btn-sm btn-outline">Export</button>
                </div>
                <div class="chart-content">
                    <div class="performance-list">
                        <div class="performance-item">
                            <div class="performance-label">Response Time</div>
                            <div class="performance-bar">
                                <div class="bar-fill" style="width: 85%; background: var(--tertiary);"></div>
                            </div>
                            <div class="performance-value">85%</div>
                        </div>
                        <div class="performance-item">
                            <div class="performance-label">System Uptime</div>
                            <div class="performance-bar">
                                <div class="bar-fill" style="width: 99.7%; background: var(--primary);"></div>
                            </div>
                            <div class="performance-value">99.7%</div>
                        </div>
                        <div class="performance-item">
                            <div class="performance-label">User Satisfaction</div>
                            <div class="performance-bar">
                                <div class="bar-fill" style="width: 92%; background: var(--secondary);"></div>
                            </div>
                            <div class="performance-value">92%</div>
                        </div>
                        <div class="performance-item">
                            <div class="performance-label">Task Completion</div>
                            <div class="performance-bar">
                                <div class="bar-fill" style="width: 88%; background: var(--tertiary);"></div>
                            </div>
                            <div class="performance-value">88%</div>
                        </div>
                        <div class="performance-item">
                            <div class="performance-label">Cost Efficiency</div>
                            <div class="performance-bar">
                                <div class="bar-fill" style="width: 76%; background: var(--primary);"></div>
                            </div>
                            <div class="performance-value">76%</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Revenue Analytics -->
            <div class="chart-card">
                <div class="chart-header">
                    <h3 class="chart-title">Revenue Analytics</h3>
                    <select class="chart-filter">
                        <option value="quarter" selected>Q4 2024</option>
                        <option value="year">2024</option>
                    </select>
                </div>
                <div class="chart-content">
                    <div class="revenue-summary">
                        <div class="revenue-total">
                            <div class="revenue-amount">₣2.3B</div>
                            <div class="revenue-label">Total Revenue</div>
                            <div class="revenue-change positive">+18% YoY</div>
                        </div>
                        <div class="revenue-breakdown">
                            <div class="breakdown-item">
                                <div class="breakdown-label">Business Services</div>
                                <div class="breakdown-value">₣890M (38%)</div>
                            </div>
                            <div class="breakdown-item">
                                <div class="breakdown-label">Public Services</div>
                                <div class="breakdown-value">₣670M (29%)</div>
                            </div>
                            <div class="breakdown-item">
                                <div class="breakdown-label">Property Taxes</div>
                                <div class="breakdown-value">₣450M (20%)</div>
                            </div>
                            <div class="breakdown-item">
                                <div class="breakdown-label">Other Revenue</div>
                                <div class="breakdown-value">₣290M (13%)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Reports Section -->
<section class="reports-section" id="reports">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Report Generator</h2>
            <p class="section-subtitle">Create custom reports and analytics</p>
        </div>

        <div class="reports-grid">
            <!-- Report Form -->
            <div class="report-form-card">
                <div class="form-header">
                    <h3 class="form-title">Generate Custom Report</h3>
                    <p class="form-description">Create detailed reports with custom parameters and filters</p>
                </div>
                <form id="reportGeneratorForm">
                    <div class="form-section">
                        <h4 class="section-title">Report Configuration</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Report Type *</label>
                            <select class="form-select" required>
                                <option value="">Select report type</option>
                                <option value="performance">Performance Report</option>
                                <option value="financial">Financial Report</option>
                                <option value="service">Service Analytics</option>
                                <option value="user">User Activity Report</option>
                                <option value="operational">Operational Metrics</option>
                                <option value="custom">Custom Report</option>
                            </select>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Date Range *</label>
                                <select class="form-select" required>
                                    <option value="">Select period</option>
                                    <option value="today">Today</option>
                                    <option value="week">This Week</option>
                                    <option value="month">This Month</option>
                                    <option value="quarter">This Quarter</option>
                                    <option value="year">This Year</option>
                                    <option value="custom">Custom Range</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Department</label>
                                <select class="form-select">
                                    <option value="">All Departments</option>
                                    <option value="admin">Administration</option>
                                    <option value="business">Business Services</option>
                                    <option value="public">Public Services</option>
                                    <option value="emergency">Emergency Services</option>
                                    <option value="civic">Civic Engagement</option>
                                    <option value="youth">Youth Services</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Report Format</label>
                            <div class="format-options">
                                <label class="radio-label">
                                    <input type="radio" name="format" value="pdf" checked>
                                    <span class="radio-mark"></span>
                                    <span>PDF Report</span>
                                </label>
                                <label class="radio-label">
                                    <input type="radio" name="format" value="excel">
                                    <span class="radio-mark"></span>
                                    <span>Excel Spreadsheet</span>
                                </label>
                                <label class="radio-label">
                                    <input type="radio" name="format" value="csv">
                                    <span class="radio-mark"></span>
                                    <span>CSV Data</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Data Filters</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Include Metrics</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="metrics" value="performance" checked>
                                    <span class="checkmark"></span>
                                    <span>Performance Metrics</span>
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="metrics" value="financial" checked>
                                    <span class="checkmark"></span>
                                    <span>Financial Data</span>
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="metrics" value="usage">
                                    <span class="checkmark"></span>
                                    <span>Usage Statistics</span>
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="metrics" value="trends">
                                    <span class="checkmark"></span>
                                    <span>Trend Analysis</span>
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="metrics" value="comparisons">
                                    <span class="checkmark"></span>
                                    <span>Comparisons</span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Visualization Options</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="visualizations" value="charts" checked>
                                    <span class="checkmark"></span>
                                    <span>Charts & Graphs</span>
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="visualizations" value="tables" checked>
                                    <span class="checkmark"></span>
                                    <span>Data Tables</span>
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="visualizations" value="heatmaps">
                                    <span class="checkmark"></span>
                                    <span>Heat Maps</span>
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="visualizations" value="infographics">
                                    <span class="checkmark"></span>
                                    <span>Infographics</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Delivery Options</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Delivery Method</label>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input type="radio" name="delivery" value="download" checked>
                                    <span class="radio-mark"></span>
                                    <span>Download Now</span>
                                </label>
                                <label class="radio-label">
                                    <input type="radio" name="delivery" value="email">
                                    <span class="radio-mark"></span>
                                    <span>Email Report</span>
                                </label>
                                <label class="radio-label">
                                    <input type="radio" name="delivery" value="schedule">
                                    <span class="radio-mark"></span>
                                    <span>Schedule Generation</span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Email Address (if applicable)</label>
                            <input type="email" class="form-input" placeholder="your.email@bamenda.gov">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Schedule (if applicable)</label>
                            <select class="form-select">
                                <option value="">Select schedule</option>
                                <option value="daily">Daily</option>
                                <option value="weekly">Weekly</option>
                                <option value="monthly">Monthly</option>
                                <option value="quarterly">Quarterly</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="reset" class="btn btn-outline">Reset</button>
                        <button type="submit" class="btn btn-primary">Generate Report</button>
                    </div>
                </form>
            </div>

            <!-- Recent Reports -->
            <div class="recent-reports-card">
                <div class="reports-header">
                    <h3 class="reports-title">Recent Reports</h3>
                    <button class="btn btn-sm btn-outline">View All</button>
                </div>
                <div class="reports-content">
                    <div class="reports-list">
                        <div class="report-item">
                            <div class="report-icon">
                                <span class="material-symbols-outlined">description</span>
                            </div>
                            <div class="report-info">
                                <h4 class="report-title">Monthly Performance Report</h4>
                                <p class="report-description">Comprehensive performance metrics for December 2024</p>
                                <div class="report-meta">
                                    <span class="report-date">Generated: Dec 15, 2024</span>
                                    <span class="report-size">2.3 MB</span>
                                    <span class="report-format">PDF</span>
                                </div>
                            </div>
                            <div class="report-actions">
                                <button class="btn btn-sm btn-primary">Download</button>
                                <button class="btn btn-sm btn-outline">View</button>
                            </div>
                        </div>

                        <div class="report-item">
                            <div class="report-icon">
                                <span class="material-symbols-outlined">description</span>
                            </div>
                            <div class="report-info">
                                <h4 class="report-title">Q4 Financial Analysis</h4>
                                <p class="report-description">Quarterly financial performance and revenue analysis</p>
                                <div class="report-meta">
                                    <span class="report-date">Generated: Dec 10, 2024</span>
                                    <span class="report-size">1.8 MB</span>
                                    <span class="report-format">Excel</span>
                                </div>
                            </div>
                            <div class="report-actions">
                                <button class="btn btn-sm btn-primary">Download</button>
                                <button class="btn btn-sm btn-outline">View</button>
                            </div>
                        </div>

                        <div class="report-item">
                            <div class="report-icon">
                                <span class="material-symbols-outlined">description</span>
                            </div>
                            <div class="report-info">
                                <h4 class="report-title">Service Usage Analytics</h4>
                                <p class="report-description">Detailed service usage patterns and trends</p>
                                <div class="report-meta">
                                    <span class="report-date">Generated: Dec 8, 2024</span>
                                    <span class="report-size">3.1 MB</span>
                                    <span class="report-format">PDF</span>
                                </div>
                            </div>
                            <div class="report-actions">
                                <button class="btn btn-sm btn-primary">Download</button>
                                <button class="btn btn-sm btn-outline">View</button>
                            </div>
                        </div>

                        <div class="report-item">
                            <div class="report-icon">
                                <span class="material-symbols-outlined">description</span>
                            </div>
                            <div class="report-info">
                                <h4 class="report-title">User Engagement Report</h4>
                                <p class="report-description">User activity and engagement metrics analysis</p>
                                <div class="report-meta">
                                    <span class="report-date">Generated: Dec 5, 2024</span>
                                    <span class="report-size">1.5 MB</span>
                                    <span class="report-format">CSV</span>
                                </div>
                            </div>
                            <div class="report-actions">
                                <button class="btn btn-sm btn-primary">Download</button>
                                <button class="btn btn-sm btn-outline">View</button>
                            </div>
                        </div>
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
            <p class="section-subtitle">Common questions about analytics and reports</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How often are analytics updated?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Analytics data is updated in real-time for most metrics. Financial data is updated daily, while performance metrics refresh every 5 minutes to provide current insights.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Can I export data in different formats?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, you can export data in PDF, Excel, CSV, and JSON formats. Each format is optimized for different use cases - PDF for reports, Excel for analysis, CSV for data integration, and JSON for API consumption.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How long are reports archived?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Reports are archived for 7 years by default. Critical financial and compliance reports are kept for 10 years. You can request extended retention for specific reports if needed.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Can I schedule automated reports?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, you can schedule reports to be generated automatically daily, weekly, monthly, or quarterly. Scheduled reports can be delivered via email or saved to your report library.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What data sources are included?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Analytics includes data from all council services, user interactions, financial systems, operational logs, and external data sources. Data is aggregated and anonymized for privacy protection.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How do I access historical data?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Historical data is available through the analytics dashboard with date range filters. You can access up to 5 years of historical data for trend analysis and comparative reporting.</p>
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
/* Analytics Page Styles */
.analytics-hero {
    background: linear-gradient(135deg, var(--tertiary) 0%, var(--tertiary-container) 100%);
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
    background-color: var(--tertiary);
    color: var(--on-tertiary);
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
    color: var(--tertiary);
    margin-bottom: var(--spacing-md);
}

.action-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
}

/* Analytics Overview Section */
.analytics-overview-section {
    padding: var(--spacing-3xl) 0;
}

.overview-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.overview-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.overview-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.overview-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.overview-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--tertiary);
}

.overview-content {
    padding: var(--spacing-lg);
}

.metric-grid {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-lg);
}

.metric-item {
    text-align: center;
}

.metric-value {
    font-size: 2rem;
    font-weight: 800;
    color: var(--tertiary);
    margin-bottom: var(--spacing-xs);
}

.metric-label {
    font-size: 1rem;
    color: var(--on-surface-variant);
    font-weight: 500;
    margin-bottom: var(--spacing-sm);
}

.metric-change {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: var(--spacing-xs);
    font-size: 0.75rem;
    font-weight: 600;
}

.metric-change.positive {
    color: var(--tertiary);
}

.metric-change.negative {
    color: var(--error);
}

.metric-change .material-symbols-outlined {
    font-size: 1rem;
}

/* Dashboard Section */
.dashboard-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.dashboard-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    gap: var(--spacing-xl);
}

.chart-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.chart-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.chart-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.chart-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--tertiary);
}

.chart-filter {
    padding: var(--spacing-xs) var(--spacing-sm);
    border: 1px solid var(--outline-variant);
    border-radius: var(--radius-md);
    background-color: var(--surface-container-lowest);
    color: var(--on-surface);
    font-size: 0.875rem;
}

.chart-content {
    padding: var(--spacing-lg);
}

/* Chart Placeholder */
.chart-placeholder {
    margin-bottom: var(--spacing-lg);
}

.chart-bars {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    height: 150px;
    margin-bottom: var(--spacing-sm);
}

.bar {
    width: 30px;
    border-radius: var(--radius-xs) var(--radius-xs) 0 0;
    transition: all 0.3s ease;
}

.bar:hover {
    opacity: 0.8;
    transform: scaleY(1.05);
}

.chart-labels {
    display: flex;
    justify-content: space-between;
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.chart-legend {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-md);
    justify-content: center;
}

.legend-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-xs);
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.legend-color {
    width: 12px;
    height: 12px;
    border-radius: var(--radius-xs);
}

/* Engagement Metrics */
.engagement-metrics {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-lg);
}

.engagement-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-md);
    padding: var(--spacing-md);
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
}

.engagement-icon {
    width: 3rem;
    height: 3rem;
    background-color: var(--tertiary);
    color: var(--on-tertiary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.engagement-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.engagement-data {
    flex: 1;
}

.engagement-number {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--tertiary);
    margin-bottom: var(--spacing-xs);
}

.engagement-label {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    margin-bottom: var(--spacing-xs);
}

.engagement-change {
    font-size: 0.75rem;
    font-weight: 600;
}

.engagement-change.positive {
    color: var(--tertiary);
}

/* Performance List */
.performance-list {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-lg);
}

.performance-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-md);
}

.performance-label {
    flex: 1;
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    font-weight: 500;
}

.performance-bar {
    flex: 2;
    height: 8px;
    background-color: var(--surface-container);
    border-radius: var(--radius-full);
    overflow: hidden;
}

.bar-fill {
    height: 100%;
    border-radius: var(--radius-full);
    transition: width 0.3s ease;
}

.performance-value {
    flex: 0 0 50px;
    text-align: right;
    font-size: 0.875rem;
    font-weight: 600;
    color: var(--tertiary);
}

/* Revenue Summary */
.revenue-summary {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-lg);
}

.revenue-total {
    text-align: center;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
}

.revenue-amount {
    font-size: 2rem;
    font-weight: 800;
    color: var(--tertiary);
    margin-bottom: var(--spacing-xs);
}

.revenue-label {
    font-size: 1rem;
    color: var(--on-surface-variant);
    margin-bottom: var(--spacing-sm);
}

.revenue-change {
    font-size: 0.875rem;
    font-weight: 600;
}

.revenue-change.positive {
    color: var(--tertiary);
}

.revenue-breakdown {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
}

.breakdown-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--spacing-sm);
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
}

.breakdown-label {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.breakdown-value {
    font-size: 0.875rem;
    font-weight: 600;
    color: var(--tertiary);
}

/* Reports Section */
.reports-section {
    padding: var(--spacing-3xl) 0;
}

.reports-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: var(--spacing-xl);
}

.report-form-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
}

.form-header {
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.form-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--tertiary);
    margin-bottom: var(--spacing-sm);
}

.form-description {
    color: var(--on-surface-variant);
    font-size: 0.875rem;
}

/* Form Styles */
.form-section {
    padding: var(--spacing-lg);
    border-bottom: 1px solid var(--outline-variant);
}

.form-section:last-child {
    border-bottom: none;
}

.section-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--tertiary);
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
    border-color: var(--tertiary);
    box-shadow: 0 0 0 2px var(--tertiary-container);
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--spacing-lg);
}

.format-options,
.radio-group {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
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
    background-color: var(--tertiary);
    border-color: var(--tertiary);
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
    background-color: var(--on-tertiary);
    border-radius: 50%;
}

.checkbox-label input[type="checkbox"]:checked + .checkmark::after {
    content: '✓';
    width: auto;
    height: auto;
    color: var(--on-tertiary);
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
    padding: var(--spacing-lg);
}

/* Recent Reports Card */
.recent-reports-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
}

.reports-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.reports-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--tertiary);
}

.reports-content {
    padding: var(--spacing-lg);
}

.reports-list {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-lg);
}

.report-item {
    display: flex;
    gap: var(--spacing-md);
    align-items: flex-start;
    padding: var(--spacing-md);
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
    transition: all 0.2s ease;
}

.report-item:hover {
    background-color: var(--surface-container-high);
}

.report-icon {
    width: 2.5rem;
    height: 2.5rem;
    background-color: var(--tertiary);
    color: var(--on-tertiary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.report-icon .material-symbols-outlined {
    font-size: 1.25rem;
}

.report-info {
    flex: 1;
}

.report-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--tertiary);
    margin-bottom: var(--spacing-xs);
}

.report-description {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    margin-bottom: var(--spacing-sm);
}

.report-meta {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-md);
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.report-actions {
    display: flex;
    flex-direction: column;
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
    color: var(--tertiary);
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
    
    .overview-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .dashboard-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .reports-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .form-row {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .checkbox-group {
        grid-template-columns: 1fr;
        gap: var(--spacing-sm);
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
    
    .chart-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .report-form-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .recent-reports-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .form-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .form-actions .btn {
        width: 100%;
        max-width: 300px;
    }
    
    .report-actions {
        flex-direction: row;
        gap: var(--spacing-xs);
    }
    
    .report-actions .btn {
        padding: var(--spacing-xs) var(--spacing-sm);
        font-size: 0.75rem;
    }
}
</style>

<script>
// Quick action functions
function openDashboard() {
    document.getElementById('dashboard').scrollIntoView({ behavior: 'smooth' });
}

function openReports() {
    document.getElementById('reports').scrollIntoView({ behavior: 'smooth' });
}

function openCharts() {
    alert('Data visualization portal would open here. In production, this would show interactive charts, graphs, and advanced visualization tools.');
}

function openExport() {
    alert('Data export portal would open here. In production, this would show export options for various data formats and bulk downloads.');
}

function openInsights() {
    alert('AI insights portal would open here. In production, this would show AI-powered analytics, predictive insights, and smart recommendations.');
}

function openSchedule() {
    alert('Scheduled reports portal would open here. In production, this would show automated report scheduling and management.');
}

// Report form submission
document.getElementById('reportGeneratorForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate required fields
    const reportType = document.querySelector('select[required]').value;
    const dateRange = document.querySelectorAll('select[required]')[1].value;
    
    if (!reportType || !dateRange) {
        alert('Please fill in all required fields.');
        return;
    }
    
    // Get selected metrics
    const metrics = Array.from(document.querySelectorAll('input[name="metrics"]:checked'))
        .map(cb => cb.value);
    
    if (metrics.length === 0) {
        alert('Please select at least one metric to include.');
        return;
    }
    
    alert('Report generation started! Your report will be ready in 2-3 minutes. You will receive a notification when it\'s ready for download.');
    // In production, this would submit the report generation request
});

// Chart filter change handlers
document.querySelectorAll('.chart-filter').forEach(filter => {
    filter.addEventListener('change', function() {
        const chartTitle = this.closest('.chart-card').querySelector('.chart-title').textContent;
        const selectedValue = this.value;
        console.log(`Updating ${chartTitle} to show: ${selectedValue}`);
        // In production, this would update the chart data
    });
});

// Recent report actions
document.querySelectorAll('.report-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Download')) {
        button.addEventListener('click', function() {
            const reportTitle = this.closest('.report-item').querySelector('.report-title').textContent;
            alert(`Downloading: "${reportTitle}"`);
        });
    }
});

document.querySelectorAll('.report-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('View')) {
        button.addEventListener('click', function() {
            const reportTitle = this.closest('.report-item').querySelector('.report-title').textContent;
            alert(`Viewing: "${reportTitle}"`);
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
    const overviewCards = document.querySelectorAll('.overview-card');
    overviewCards.forEach(card => {
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

// Auto-refresh analytics data
function refreshAnalyticsData() {
    // In production, this would fetch real-time analytics data
    console.log('Refreshing analytics data...');
    
    // Simulate metric updates
    const metricElements = document.querySelectorAll('.metric-value');
    metricElements.forEach(element => {
        if (element.textContent.includes('%')) {
            // Simulate percentage changes
            const currentValue = parseFloat(element.textContent);
            const change = (Math.random() - 0.5) * 2; // -1 to +1
            const newValue = Math.max(0, Math.min(100, currentValue + change));
            element.textContent = newValue.toFixed(1) + '%';
        }
    });
}

// Refresh analytics data every 60 seconds for real-time monitoring
setInterval(refreshAnalyticsData, 60000);
</script>
