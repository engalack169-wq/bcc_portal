<?php
/**
 * Bamenda City Council E-Governance Platform
 * Administration Reports Page
 */

// Set page metadata
$page_title = 'Administration Reports | Bamenda City Council';
$page_description = 'Access administrative reports, performance metrics, and analytics for Bamenda City Council operations and services.';
$page_keywords = 'administration reports, performance metrics, analytics, city council reports, Bamenda administration';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Administration', 'url' => '../index.php'],
    ['title' => 'Reports', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero administration-reports-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-government-building.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Administration Reports</span>
            <h1 class="hero-title">Reports & Analytics</h1>
            <p class="hero-subtitle">
                Comprehensive administrative reports and analytics providing insights into city council operations, service performance, citizen engagement, and governance metrics for data-driven decision making.
            </p>
            <div class="hero-actions">
                <a href="#performance-reports" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">analytics</span>
                    Performance Reports
                </a>
                <a href="#custom-reports" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">summarize</span>
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
            <h2 class="section-title">Reports Actions</h2>
            <p class="section-subtitle">Quick access to administrative reports and analytics</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openPerformanceReports()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">analytics</span>
                </div>
                <h3 class="action-title">Performance Reports</h3>
                <p class="action-description">View departmental and service performance metrics</p>
            </div>

            <div class="action-card" onclick="openFinancialReports()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">account_balance</span>
                </div>
                <h3 class="action-title">Financial Reports</h3>
                <p class="action-description">Access budget and financial analysis reports</p>
            </div>

            <div class="action-card" onclick="openServiceReports()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">support_agent</span>
                </div>
                <h3 class="action-title">Service Reports</h3>
                <p class="action-description">Review public service delivery and citizen satisfaction</p>
            </div>

            <div class="action-card" onclick="openCitizenReports()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <h3 class="action-title">Citizen Engagement</h3>
                <p class="action-description">Analyze citizen participation and feedback data</p>
            </div>

            <div class="action-card" onclick="openCustomReports()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">summarize</span>
                </div>
                <h3 class="action-title">Custom Reports</h3>
                <p class="action-description">Generate customized reports and analytics</p>
            </div>

            <div class="action-card" onclick="openDataExport()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">download</span>
                </div>
                <h3 class="action-title">Data Export</h3>
                <p class="action-description">Export reports and data in various formats</p>
            </div>
        </div>
    </div>
</section>

<!-- Reports Statistics -->
<section class="reports-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">234</div>
                    <div class="stat-label">Reports Generated</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+45 this month</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">insights</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">89%</div>
                    <div class="stat-label">Data Accuracy</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+3% improvement</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">schedule</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">2.5 min</div>
                    <div class="stat-label">Avg. Report Generation</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_down</span>
                        <span>-30 seconds faster</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">verified</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">156</div>
                    <div class="stat-label">Active Users</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+23 new users</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Performance Reports -->
<section class="performance-reports-section" id="performance-reports">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Performance Reports</h2>
            <p class="section-subtitle">Departmental and service performance metrics and analytics</p>
        </div>

        <div class="reports-grid">
            <!-- Department Performance -->
            <div class="report-card">
                <div class="report-header">
                    <div class="report-icon">
                        <span class="material-symbols-outlined">business</span>
                    </div>
                    <div class="report-badge monthly">Monthly</div>
                </div>
                <div class="report-content">
                    <h3 class="report-title">Department Performance Overview</h3>
                    <p class="report-description">Comprehensive performance metrics across all city council departments including productivity, efficiency, and service delivery.</p>
                    <div class="report-metrics">
                        <div class="metric-item">
                            <span class="metric-label">Overall Performance Score</span>
                            <span class="metric-value">87%</span>
                            <div class="metric-bar">
                                <div class="metric-fill" style="width: 87%"></div>
                            </div>
                        </div>
                        <div class="metric-item">
                            <span class="metric-label">Service Delivery Efficiency</span>
                            <span class="metric-value">92%</span>
                            <div class="metric-bar">
                                <div class="metric-fill" style="width: 92%"></div>
                            </div>
                        </div>
                        <div class="metric-item">
                            <span class="metric-label">Citizen Satisfaction</span>
                            <span class="metric-value">85%</span>
                            <div class="metric-bar">
                                <div class="metric-fill" style="width: 85%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="report-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">calendar_today</span>
                            <span>Generated: November 15, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">update</span>
                            <span>Updated: Daily</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">data_usage</span>
                            <span>Data Source: 12 departments</span>
                        </div>
                    </div>
                    <div class="report-actions">
                        <button class="btn btn-sm btn-primary">View Full Report</button>
                        <button class="btn btn-sm btn-outline">Download PDF</button>
                    </div>
                </div>
            </div>

            <!-- Service Delivery Metrics -->
            <div class="report-card">
                <div class="report-header">
                    <div class="report-icon">
                        <span class="material-symbols-outlined">support_agent</span>
                    </div>
                    <div class="report-badge weekly">Weekly</div>
                </div>
                <div class="report-content">
                    <h3 class="report-title">Service Delivery Metrics</h3>
                    <p class="report-description">Detailed analysis of public service delivery including response times, completion rates, and quality indicators.</p>
                    <div class="report-metrics">
                        <div class="metric-item">
                            <span class="metric-label">Average Response Time</span>
                            <span class="metric-value">2.3 days</span>
                            <div class="metric-bar">
                                <div class="metric-fill" style="width: 77%"></div>
                            </div>
                        </div>
                        <div class="metric-item">
                            <span class="metric-label">Service Completion Rate</span>
                            <span class="metric-value">94%</span>
                            <div class="metric-bar">
                                <div class="metric-fill" style="width: 94%"></div>
                            </div>
                        </div>
                        <div class="metric-item">
                            <span class="metric-label">Quality Score</span>
                            <span class="metric-value">89%</span>
                            <div class="metric-bar">
                                <div class="metric-fill" style="width: 89%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="report-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">calendar_today</span>
                            <span>Generated: November 18, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">update</span>
                            <span>Updated: Weekly</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">data_usage</span>
                            <span>Data Source: Service systems</span>
                        </div>
                    </div>
                    <div class="report-actions">
                        <button class="btn btn-sm btn-primary">View Full Report</button>
                        <button class="btn btn-sm btn-outline">Download PDF</button>
                    </div>
                </div>
            </div>

            <!-- Citizen Engagement Analytics -->
            <div class="report-card">
                <div class="report-header">
                    <div class="report-icon">
                        <span class="material-symbols-outlined">groups</span>
                    </div>
                    <div class="report-badge monthly">Monthly</div>
                </div>
                <div class="report-content">
                    <h3 class="report-title">Citizen Engagement Analytics</h3>
                    <p class="report-description">Analysis of citizen participation across digital platforms, public consultations, and community engagement initiatives.</p>
                    <div class="report-metrics">
                        <div class="metric-item">
                            <span class="metric-label">Digital Platform Usage</span>
                            <span class="metric-value">78%</span>
                            <div class="metric-bar">
                                <div class="metric-fill" style="width: 78%"></div>
                            </div>
                        </div>
                        <div class="metric-item">
                            <span class="metric-label">Participation Rate</span>
                            <span class="metric-value">65%</span>
                            <div class="metric-bar">
                                <div class="metric-fill" style="width: 65%"></div>
                            </div>
                        </div>
                        <div class="metric-item">
                            <span class="metric-label">Engagement Score</span>
                            <span class="metric-value">82%</span>
                            <div class="metric-bar">
                                <div class="metric-fill" style="width: 82%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="report-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">calendar_today</span>
                            <span>Generated: November 16, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">update</span>
                            <span>Updated: Monthly</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">data_usage</span>
                            <span>Data Source: Engagement platforms</span>
                        </div>
                    </div>
                    <div class="report-actions">
                        <button class="btn btn-sm btn-primary">View Full Report</button>
                        <button class="btn btn-sm btn-outline">Download PDF</button>
                    </div>
                </div>
            </div>

            <!-- Operational Efficiency -->
            <div class="report-card">
                <div class="report-header">
                    <div class="report-icon">
                        <span class="material-symbols-outlined">speed</span>
                    </div>
                    <div class="report-badge quarterly">Quarterly</div>
                </div>
                <div class="report-content">
                    <h3 class="report-title">Operational Efficiency Report</h3>
                    <p class="report-description">Quarterly analysis of operational efficiency including process optimization, resource utilization, and cost-effectiveness.</p>
                    <div class="report-metrics">
                        <div class="metric-item">
                            <span class="metric-label">Process Efficiency</span>
                            <span class="metric-value">91%</span>
                            <div class="metric-bar">
                                <div class="metric-fill" style="width: 91%"></div>
                            </div>
                        </div>
                        <div class="metric-item">
                            <span class="metric-label">Resource Utilization</span>
                            <span class="metric-value">83%</span>
                            <div class="metric-bar">
                                <div class="metric-fill" style="width: 83%"></div>
                            </div>
                        </div>
                        <div class="metric-item">
                            <span class="metric-label">Cost Effectiveness</span>
                            <span class="metric-value">88%</span>
                            <div class="metric-bar">
                                <div class="metric-fill" style="width: 88%"></div>
                            </div>
                        </div>
                    </div>
                    <div class="report-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">calendar_today</span>
                            <span>Generated: November 1, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">update</span>
                            <span>Updated: Quarterly</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">data_usage</span>
                            <span>Data Source: Operations data</span>
                        </div>
                    </div>
                    <div class="report-actions">
                        <button class="btn btn-sm btn-primary">View Full Report</button>
                        <button class="btn btn-sm btn-outline">Download PDF</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Financial Reports -->
<section class="financial-reports-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Financial Reports</h2>
            <p class="section-subtitle">Budget analysis, financial performance, and expenditure reports</p>
        </div>

        <div class="financial-grid">
            <!-- Budget Performance -->
            <div class="financial-card">
                <div class="financial-header">
                    <div class="financial-icon">
                        <span class="material-symbols-outlined">account_balance</span>
                    </div>
                    <div class="financial-badge monthly">Monthly</div>
                </div>
                <div class="financial-content">
                    <h3 class="financial-title">Budget Performance Analysis</h3>
                    <p class="financial-description">Monthly budget tracking including revenue collection, expenditure analysis, and variance reporting.</p>
                    <div class="financial-metrics">
                        <div class="metric-row">
                            <span class="metric-label">Total Budget</span>
                            <span class="metric-value">₣450M</span>
                        </div>
                        <div class="metric-row">
                            <span class="metric-label">Revenue Collected</span>
                            <span class="metric-value positive">₣387M (86%)</span>
                        </div>
                        <div class="metric-row">
                            <span class="metric-label">Expenditure</span>
                            <span class="metric-value">₣345M (77%)</span>
                        </div>
                        <div class="metric-row">
                            <span class="metric-label">Budget Variance</span>
                            <span class="metric-value positive">+₣42M</span>
                        </div>
                    </div>
                    <div class="financial-chart">
                        <div class="chart-placeholder">
                            <span class="material-symbols-outlined">bar_chart</span>
                            <span>Budget vs Actual Chart</span>
                        </div>
                    </div>
                    <div class="financial-actions">
                        <button class="btn btn-sm btn-primary">View Details</button>
                        <button class="btn btn-sm btn-outline">Export Data</button>
                    </div>
                </div>
            </div>

            <!-- Revenue Analysis -->
            <div class="financial-card">
                <div class="financial-header">
                    <div class="financial-icon">
                        <span class="material-symbols-outlined">payments</span>
                    </div>
                    <div class="financial-badge quarterly">Quarterly</div>
                </div>
                <div class="financial-content">
                    <h3 class="financial-title">Revenue Analysis Report</h3>
                    <p class="financial-description">Quarterly revenue analysis including tax collection, service fees, and other income sources.</p>
                    <div class="financial-metrics">
                        <div class="metric-row">
                            <span class="metric-label">Tax Revenue</span>
                            <span class="metric-value">₣285M</span>
                        </div>
                        <div class="metric-row">
                            <span class="metric-label">Service Fees</span>
                            <span class="metric-value">₣67M</span>
                        </div>
                        <div class="metric-row">
                            <span class="metric-label">Other Income</span>
                            <span class="metric-value">₣35M</span>
                        </div>
                        <div class="metric-row">
                            <span class="metric-label">Growth Rate</span>
                            <span class="metric-value positive">+12.3%</span>
                        </div>
                    </div>
                    <div class="financial-chart">
                        <div class="chart-placeholder">
                            <span class="material-symbols-outlined">pie_chart</span>
                            <span>Revenue Distribution Chart</span>
                        </div>
                    </div>
                    <div class="financial-actions">
                        <button class="btn btn-sm btn-primary">View Details</button>
                        <button class="btn btn-sm btn-outline">Export Data</button>
                    </div>
                </div>
            </div>

            <!-- Expenditure Tracking -->
            <div class="financial-card">
                <div class="financial-header">
                    <div class="financial-icon">
                        <span class="material-symbols-outlined">receipt_long</span>
                    </div>
                    <div class="financial-badge monthly">Monthly</div>
                </div>
                <div class="financial-content">
                    <h3 class="financial-title">Expenditure Tracking</h3>
                    <p class="financial-description">Monthly expenditure tracking across departments, projects, and operational costs.</p>
                    <div class="financial-metrics">
                        <div class="metric-row">
                            <span class="metric-label">Personnel Costs</span>
                            <span class="metric-value">₣156M</span>
                        </div>
                        <div class="metric-row">
                            <span class="metric-label">Operations</span>
                            <span class="metric-value">₣89M</span>
                        </div>
                        <div class="metric-row">
                            <span class="metric-label">Projects</span>
                            <span class="metric-value">₣67M</span>
                        </div>
                        <div class="metric-row">
                            <span class="metric-label">Administration</span>
                            <span class="metric-value">₣33M</span>
                        </div>
                    </div>
                    <div class="financial-chart">
                        <div class="chart-placeholder">
                            <span class="material-symbols-outlined">stacked_bar_chart</span>
                            <span>Expenditure Breakdown Chart</span>
                        </div>
                    </div>
                    <div class="financial-actions">
                        <button class="btn btn-sm btn-primary">View Details</button>
                        <button class="btn btn-sm btn-outline">Export Data</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Custom Reports Generator -->
<section class="custom-reports-section" id="custom-reports">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Custom Report Generator</h2>
            <p class="section-subtitle">Create customized reports based on your specific requirements</p>
        </div>

        <div class="custom-content">
            <div class="custom-form">
                <h3 class="form-title">Generate Custom Report</h3>
                <form id="customReportForm">
                    <div class="form-section">
                        <h4 class="section-title">Report Configuration</h4>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Report Name *</label>
                                <input type="text" class="form-input" placeholder="Enter report name" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Report Type *</label>
                                <select class="form-select" required>
                                    <option value="">Select report type</option>
                                    <option value="performance">Performance Report</option>
                                    <option value="financial">Financial Report</option>
                                    <option value="service">Service Delivery Report</option>
                                    <option value="citizen">Citizen Engagement Report</option>
                                    <option value="operational">Operational Report</option>
                                    <option value="custom">Custom Analysis</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Date Range *</label>
                                <select class="form-select" required>
                                    <option value="">Select date range</option>
                                    <option value="today">Today</option>
                                    <option value="week">This Week</option>
                                    <option value="month">This Month</option>
                                    <option value="quarter">This Quarter</option>
                                    <option value="year">This Year</option>
                                    <option value="custom">Custom Range</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Report Format *</label>
                                <select class="form-select" required>
                                    <option value="">Select format</option>
                                    <option value="pdf">PDF Document</option>
                                    <option value="excel">Excel Spreadsheet</option>
                                    <option value="csv">CSV Data</option>
                                    <option value="html">HTML Report</option>
                                    <option value="json">JSON Data</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Data Sources</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Select Data Sources *</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="datasources" value="departments">
                                    <span class="checkmark"></span>
                                    Department Performance Data
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="datasources" value="services">
                                    <span class="checkmark"></span>
                                    Service Delivery Systems
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="datasources" value="financial">
                                    <span class="checkmark"></span>
                                    Financial Systems
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="datasources" value="citizen">
                                    <span class="checkmark"></span>
                                    Citizen Engagement Platforms
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="datasources" value="operations">
                                    <span class="checkmark"></span>
                                    Operational Data
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Metrics & KPIs</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Select Metrics to Include *</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="metrics" value="performance">
                                    <span class="checkmark"></span>
                                    Performance Scores
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="metrics" value="efficiency">
                                    <span class="checkmark"></span>
                                    Efficiency Metrics
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="metrics" value="satisfaction">
                                    <span class="checkmark"></span>
                                    Satisfaction Scores
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="metrics" value="financial">
                                    <span class="checkmark"></span>
                                    Financial KPIs
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="metrics" value="engagement">
                                    <span class="checkmark"></span>
                                    Engagement Metrics
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="metrics" value="quality">
                                    <span class="checkmark"></span>
                                    Quality Indicators
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Visualization Options</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Chart Types</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="charts" value="bar">
                                    <span class="checkmark"></span>
                                    Bar Charts
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="charts" value="line">
                                    <span class="checkmark"></span>
                                    Line Charts
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="charts" value="pie">
                                    <span class="checkmark"></span>
                                    Pie Charts
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="charts" value="area">
                                    <span class="checkmark"></span>
                                    Area Charts
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="charts" value="scatter">
                                    <span class="checkmark"></span>
                                    Scatter Plots
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Additional Options</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="options" value="summary">
                                    <span class="checkmark"></span>
                                    Include Executive Summary
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="options" value="trends">
                                    <span class="checkmark"></span>
                                    Show Trend Analysis
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="options" value="comparisons">
                                    <span class="checkmark"></span>
                                    Include Period Comparisons
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="options" value="recommendations">
                                    <span class="checkmark"></span>
                                    Generate Recommendations
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Delivery Options</h4>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Delivery Method *</label>
                                <select class="form-select" required>
                                    <option value="">Select delivery method</option>
                                    <option value="download">Immediate Download</option>
                                    <option value="email">Email Delivery</option>
                                    <option value="schedule">Scheduled Generation</option>
                                    <option value="dashboard">Dashboard Integration</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Recipients (if email)</label>
                                <input type="email" class="form-input" placeholder="Enter email addresses (comma-separated)">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Schedule (if scheduled)</label>
                            <select class="form-select">
                                <option value="">Select frequency</option>
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
        </div>
    </div>
</section>

<!-- Data Export Section -->
<section class="data-export-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Data Export Center</h2>
            <p class="section-subtitle">Export reports and data in various formats for analysis and sharing</p>
        </div>

        <div class="export-content">
            <div class="export-options">
                <!-- Quick Export -->
                <div class="export-card">
                    <div class="export-icon">
                        <span class="material-symbols-outlined">download</span>
                    </div>
                    <h3 class="export-title">Quick Export</h3>
                    <p class="export-description">Export commonly requested reports and datasets quickly.</p>
                    <div class="export-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Monthly Performance Reports</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Financial Summaries</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Service Statistics</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">Quick Export</button>
                </div>

                <!-- Bulk Export -->
                <div class="export-card">
                    <div class="export-icon">
                        <span class="material-symbols-outlined">inventory</span>
                    </div>
                    <h3 class="export-title">Bulk Export</h3>
                    <p class="export-description">Export multiple reports or complete datasets in bulk.</p>
                    <div class="export-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Multiple Report Selection</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Complete Dataset Export</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Archived Data Access</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">Bulk Export</button>
                </div>

                <!-- API Access -->
                <div class="export-card">
                    <div class="export-icon">
                        <span class="material-symbols-outlined">api</span>
                    </div>
                    <h3 class="export-title">API Access</h3>
                    <p class="export-description">Programmatic access to reports and data through APIs.</p>
                    <div class="export-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>REST API Endpoints</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Real-time Data Access</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Automated Integration</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">API Documentation</button>
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
            <p class="section-subtitle">Common questions about administrative reports and analytics</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How often are reports updated?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Report update frequency varies by type: Performance reports are updated daily, financial reports monthly, citizen engagement reports monthly, and operational efficiency reports quarterly. Custom reports can be scheduled according to your needs.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Can I export data in different formats?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, reports can be exported in multiple formats including PDF, Excel, CSV, HTML, and JSON. You can choose the format that best suits your needs during the report generation process or through the data export center.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How do I create custom reports?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Use the Custom Report Generator to create personalized reports. Select your data sources, metrics, visualization options, and delivery preferences. The system will generate a report tailored to your specific requirements.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Is there a limit on data export?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Standard users can export up to 1GB of data per month. Premium users have higher limits based on their subscription. For large data requests, contact the administration team for special arrangements.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How do I access historical data?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Historical data is available through the bulk export feature or API access. Most reports include historical comparisons, and you can specify custom date ranges when generating reports to access archived data.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Can reports be automated?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, reports can be scheduled for automatic generation and delivery. Set the frequency (daily, weekly, monthly, quarterly) and delivery method (download, email, dashboard) in the custom report generator to automate your reporting workflow.</p>
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
/* Administration Reports Page Styles */
.administration-reports-hero {
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

/* Reports Statistics Section */
.reports-stats-section {
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

/* Performance Reports Section */
.performance-reports-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.reports-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.report-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.report-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.report-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
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
}

.report-icon .material-symbols-outlined {
    font-size: 2rem;
}

.report-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.report-badge.monthly {
    background-color: var(--primary);
    color: var(--on-primary);
}

.report-badge.weekly {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.report-badge.quarterly {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.report-content {
    padding: var(--spacing-lg);
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

.report-metrics {
    margin-bottom: var(--spacing-lg);
}

.metric-item {
    margin-bottom: var(--spacing-md);
}

.metric-label {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    display: block;
    margin-bottom: var(--spacing-xs);
}

.metric-value {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    display: block;
    margin-bottom: var(--spacing-xs);
}

.metric-bar {
    width: 100%;
    height: 8px;
    background-color: var(--surface-container);
    border-radius: var(--radius-full);
    overflow: hidden;
}

.metric-fill {
    height: 100%;
    background-color: var(--primary);
    border-radius: var(--radius-full);
    transition: width 0.3s ease;
}

.report-details {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
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
    color: var(--primary);
}

.report-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Financial Reports Section */
.financial-reports-section {
    padding: var(--spacing-3xl) 0;
}

.financial-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.financial-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.financial-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.financial-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.financial-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--tertiary);
    color: var(--on-tertiary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.financial-icon .material-symbols-outlined {
    font-size: 2rem;
}

.financial-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.financial-badge.monthly {
    background-color: var(--primary);
    color: var(--on-primary);
}

.financial-badge.quarterly {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.financial-content {
    padding: var(--spacing-lg);
}

.financial-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.financial-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.financial-metrics {
    margin-bottom: var(--spacing-lg);
}

.metric-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--spacing-xs) 0;
    border-bottom: 1px solid var(--outline-variant);
}

.metric-row:last-child {
    border-bottom: none;
}

.metric-value {
    font-weight: 700;
    color: var(--primary);
}

.metric-value.positive {
    color: var(--tertiary);
}

.financial-chart {
    margin-bottom: var(--spacing-lg);
}

.chart-placeholder {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 150px;
    background-color: var(--surface-container);
    border-radius: var(--radius-lg);
    color: var(--on-surface-variant);
}

.chart-placeholder .material-symbols-outlined {
    font-size: 2rem;
    margin-bottom: var(--spacing-sm);
}

.financial-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Custom Reports Section */
.custom-reports-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.custom-content {
    display: flex;
    justify-content: center;
}

.custom-form {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-2xl);
    border: 1px solid var(--outline-variant);
    max-width: 800px;
    width: 100%;
}

.form-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
    text-align: center;
}

/* Data Export Section */
.data-export-section {
    padding: var(--spacing-3xl) 0;
}

.export-content {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xl);
}

.export-options {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.export-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.export-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.export-icon {
    width: 3rem;
    height: 3rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-md);
}

.export-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.export-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.export-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.export-features {
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
    justify-content: center;
}

.feature-item .material-symbols-outlined {
    font-size: 1rem;
    color: var(--tertiary);
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

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--spacing-lg);
}

.form-section {
    margin-bottom: var(--spacing-2xl);
    padding-bottom: var(--spacing-xl);
    border-bottom: 1px solid var(--outline-variant);
}

.form-section:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
}

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

.form-actions {
    display: flex;
    gap: var(--spacing-lg);
    justify-content: center;
    margin-top: var(--spacing-xl);
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
    
    .reports-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .financial-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .export-options {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .form-row {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .form-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .form-actions .btn {
        width: 100%;
        max-width: 300px;
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
    
    .report-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .custom-form {
        padding: var(--spacing-lg);
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
    
    .report-actions {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .report-actions .btn {
        width: 100%;
    }
    
    .financial-actions {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .financial-actions .btn {
        width: 100%;
    }
}
</style>

<script>
// Quick action functions
function openPerformanceReports() {
    document.getElementById('performance-reports').scrollIntoView({ behavior: 'smooth' });
}

function openFinancialReports() {
    document.querySelector('.financial-reports-section').scrollIntoView({ behavior: 'smooth' });
}

function openServiceReports() {
    alert('Service reports portal would open here. In production, this would show detailed service delivery reports, citizen satisfaction metrics, and service performance analytics.');
}

function openCitizenReports() {
    alert('Citizen engagement reports would open here. In production, this would show citizen participation data, feedback analysis, and engagement metrics.');
}

function openCustomReports() {
    document.getElementById('custom-reports').scrollIntoView({ behavior: 'smooth' });
}

function openDataExport() {
    document.querySelector('.data-export-section').scrollIntoView({ behavior: 'smooth' });
}

// Report actions
document.querySelectorAll('.report-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('View')) {
        button.addEventListener('click', function() {
            const reportTitle = this.closest('.report-card').querySelector('.report-title').textContent;
            alert(`Viewing full report: "${reportTitle}"`);
        });
    }
});

document.querySelectorAll('.report-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Download')) {
        button.addEventListener('click', function() {
            const reportTitle = this.closest('.report-card').querySelector('.report-title').textContent;
            alert(`Downloading PDF: "${reportTitle}"`);
        });
    }
});

// Financial actions
document.querySelectorAll('.financial-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('View')) {
        button.addEventListener('click', function() {
            const financialTitle = this.closest('.financial-card').querySelector('.financial-title').textContent;
            alert(`Viewing details: "${financialTitle}"`);
        });
    }
});

document.querySelectorAll('.financial-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Export')) {
        button.addEventListener('click', function() {
            const financialTitle = this.closest('.financial-card').querySelector('.financial-title').textContent;
            alert(`Exporting data: "${financialTitle}"`);
        });
    }
});

// Export actions
document.querySelectorAll('.export-card .btn-primary').forEach(button => {
    if (button.textContent.includes('Quick')) {
        button.addEventListener('click', function() {
            alert('Quick export wizard would open here. In production, this would show a list of commonly exported reports and datasets.');
        });
    }
    
    if (button.textContent.includes('Bulk')) {
        button.addEventListener('click', function() {
            alert('Bulk export interface would open here. In production, this would allow selection and export of multiple reports or complete datasets.');
        });
    }
    
    if (button.textContent.includes('API')) {
        button.addEventListener('click', function() {
            alert('API documentation would open here. In production, this would show API endpoints, authentication methods, and integration examples.');
        });
    }
});

// Custom report form submission
document.getElementById('customReportForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate required fields
    const reportName = document.querySelector('input[placeholder*="report name"]').value;
    const reportType = document.querySelector('select[required]').value;
    const dateRange = document.querySelectorAll('select[required]')[1].value;
    const reportFormat = document.querySelectorAll('select[required]')[2].value;
    const deliveryMethod = document.querySelectorAll('select[required]')[3].value;
    
    // Validate checkboxes
    const dataSources = document.querySelectorAll('input[name="datasources"]:checked');
    const metrics = document.querySelectorAll('input[name="metrics"]:checked');
    
    if (!reportName || !reportType || !dateRange || !reportFormat || !deliveryMethod || dataSources.length === 0 || metrics.length === 0) {
        alert('Please fill in all required fields and select at least one data source and metric.');
        return;
    }
    
    alert('Custom report configuration saved! Your report will be generated according to your specifications. You will receive a notification when the report is ready for download.');
    // In production, this would submit the custom report configuration
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

// Auto-refresh reports statistics
function refreshReportsStats() {
    // In production, this would fetch real-time reports statistics
    console.log('Refreshing administrative reports statistics...');
    
    // Simulate report count updates
    const reportCountElement = document.querySelector('.stat-number');
    if (reportCountElement && !isNaN(reportCountElement.textContent)) {
        // Simulate real-time report generation
        const currentCount = parseInt(reportCountElement.textContent);
        const increment = Math.floor(Math.random() * 3) + 1;
        const newCount = currentCount + increment;
        reportCountElement.textContent = newCount;
    }
}

// Refresh statistics every 30 seconds
setInterval(refreshReportsStats, 30000);
</script>
