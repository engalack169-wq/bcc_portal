<?php
/**
 * Bamenda City Council E-Governance Platform
 * Business Analytics Page
 */

// Set page metadata
$page_title = 'Business Analytics | Bamenda City Council';
$page_description = 'Access comprehensive business analytics, market insights, and economic data for Bamenda business community.';
$page_keywords = 'business analytics, market insights, economic data, business intelligence, Bamenda business';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Business', 'url' => '../index.php'],
    ['title' => 'Business Analytics', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero business-analytics-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-business-support.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Business Analytics</span>
            <h1 class="hero-title">Business Intelligence Hub</h1>
            <p class="hero-subtitle">
                Access comprehensive business analytics, market insights, and economic data to make informed business decisions in Bamenda.
            </p>
            <div class="hero-actions">
                <a href="#analytics-dashboard" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">analytics</span>
                    Analytics Dashboard
                </a>
                <a href="#reports" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">description</span>
                    Reports
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
            <p class="section-subtitle">Quick access to business analytics and insights</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openDashboard()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">dashboard</span>
                </div>
                <h3 class="action-title">Analytics Dashboard</h3>
                <p class="action-description">View comprehensive business analytics and KPIs</p>
            </div>

            <div class="action-card" onclick="openMarketTrends()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">trending_up</span>
                </div>
                <h3 class="action-title">Market Trends</h3>
                <p class="action-description">Analyze market trends and business patterns</p>
            </div>

            <div class="action-card" onclick="openEconomicData()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">bar_chart</span>
                </div>
                <h3 class="action-title">Economic Data</h3>
                <p class="action-description">Access economic indicators and business metrics</p>
            </div>

            <div class="action-card" onclick="openReports()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <h3 class="action-title">Custom Reports</h3>
                <p class="action-description">Generate custom business reports and insights</p>
            </div>

            <div class="action-card" onclick="openBusinessMetrics()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">assessment</span>
                </div>
                <h3 class="action-title">Business Metrics</h3>
                <p class="action-description">Track key business performance indicators</p>
            </div>

            <div class="action-card" onclick="openCompetitorAnalysis()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">compare_arrows</span>
                </div>
                <h3 class="action-title">Competitor Analysis</h3>
                <p class="action-description">Analyze competitor performance and market share</p>
            </div>
        </div>
    </div>
</section>

<!-- Analytics Statistics -->
<section class="analytics-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">business</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">8,456</div>
                    <div class="stat-label">Active Businesses</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+12% growth</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">trending_up</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">23.4%</div>
                    <div class="stat-label">Market Growth</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+3.2% this quarter</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">payments</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">₣2.3B</div>
                    <div class="stat-label">Total Revenue</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+18% YoY</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">45,678</div>
                    <div class="stat-label">Employment</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+5,234 jobs</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Analytics Dashboard -->
<section class="analytics-dashboard-section" id="analytics-dashboard">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Analytics Dashboard</h2>
            <p class="section-subtitle">Real-time business analytics and performance metrics</p>
        </div>

        <div class="dashboard-content">
            <div class="dashboard-filters">
                <div class="filter-row">
                    <div class="form-group">
                        <label class="form-label">Time Period</label>
                        <select class="form-select" id="timePeriod">
                            <option value="7days">Last 7 Days</option>
                            <option value="30days">Last 30 Days</option>
                            <option value="90days">Last 90 Days</option>
                            <option value="1year">Last Year</option>
                            <option value="custom">Custom Range</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Business Sector</label>
                        <select class="form-select" id="businessSector">
                            <option value="all">All Sectors</option>
                            <option value="retail">Retail</option>
                            <option value="hospitality">Hospitality</option>
                            <option value="manufacturing">Manufacturing</option>
                            <option value="services">Services</option>
                            <option value="technology">Technology</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Business Size</label>
                        <select class="form-select" id="businessSize">
                            <option value="all">All Sizes</option>
                            <option value="small">Small (< 10 employees)</option>
                            <option value="medium">Medium (10-50 employees)</option>
                            <option value="large">Large (> 50 employees)</option>
                        </select>
                    </div>
                    <button class="btn btn-primary" onclick="updateDashboard()">Update Dashboard</button>
                </div>
            </div>

            <div class="dashboard-grid">
                <!-- Revenue Chart -->
                <div class="chart-card">
                    <div class="chart-header">
                        <h3 class="chart-title">Revenue Trends</h3>
                        <div class="chart-actions">
                            <button class="btn btn-sm btn-outline">Export</button>
                            <button class="btn btn-sm btn-outline">Fullscreen</button>
                        </div>
                    </div>
                    <div class="chart-content">
                        <canvas id="revenueChart" width="400" height="200"></canvas>
                    </div>
                    <div class="chart-footer">
                        <div class="chart-summary">
                            <div class="summary-item">
                                <span class="summary-label">Total Revenue:</span>
                                <span class="summary-value">₣45.6M</span>
                            </div>
                            <div class="summary-item">
                                <span class="summary-label">Growth:</span>
                                <span class="summary-value positive">+12.3%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Business Growth Chart -->
                <div class="chart-card">
                    <div class="chart-header">
                        <h3 class="chart-title">Business Growth</h3>
                        <div class="chart-actions">
                            <button class="btn btn-sm btn-outline">Export</button>
                            <button class="btn btn-sm btn-outline">Fullscreen</button>
                        </div>
                    </div>
                    <div class="chart-content">
                        <canvas id="growthChart" width="400" height="200"></canvas>
                    </div>
                    <div class="chart-footer">
                        <div class="chart-summary">
                            <div class="summary-item">
                                <span class="summary-label">New Businesses:</span>
                                <span class="summary-value">234</span>
                            </div>
                            <div class="summary-item">
                                <span class="summary-label">Growth Rate:</span>
                                <span class="summary-value positive">+8.5%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sector Distribution -->
                <div class="chart-card">
                    <div class="chart-header">
                        <h3 class="chart-title">Sector Distribution</h3>
                        <div class="chart-actions">
                            <button class="btn btn-sm btn-outline">Export</button>
                            <button class="btn btn-sm btn-outline">Fullscreen</button>
                        </div>
                    </div>
                    <div class="chart-content">
                        <canvas id="sectorChart" width="400" height="200"></canvas>
                    </div>
                    <div class="chart-footer">
                        <div class="chart-summary">
                            <div class="summary-item">
                                <span class="summary-label">Top Sector:</span>
                                <span class="summary-value">Retail (35%)</span>
                            </div>
                            <div class="summary-item">
                                <span class="summary-label">Total Sectors:</span>
                                <span class="summary-value">12</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Employment Metrics -->
                <div class="chart-card">
                    <div class="chart-header">
                        <h3 class="chart-title">Employment Metrics</h3>
                        <div class="chart-actions">
                            <button class="btn btn-sm btn-outline">Export</button>
                            <button class="btn btn-sm btn-outline">Fullscreen</button>
                        </div>
                    </div>
                    <div class="chart-content">
                        <canvas id="employmentChart" width="400" height="200"></canvas>
                    </div>
                    <div class="chart-footer">
                        <div class="chart-summary">
                            <div class="summary-item">
                                <span class="summary-label">Total Jobs:</span>
                                <span class="summary-value">45,678</span>
                            </div>
                            <div class="summary-item">
                                <span class="summary-label">Unemployment:</span>
                                <span class="summary-value">3.2%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Key Performance Indicators -->
            <div class="kpi-section">
                <h3 class="section-title">Key Performance Indicators</h3>
                <div class="kpi-grid">
                    <div class="kpi-card">
                        <div class="kpi-icon">
                            <span class="material-symbols-outlined">trending_up</span>
                        </div>
                        <div class="kpi-content">
                            <h4 class="kpi-title">Business Growth Rate</h4>
                            <div class="kpi-value">12.3%</div>
                            <div class="kpi-change positive">+2.1% vs last quarter</div>
                        </div>
                    </div>

                    <div class="kpi-card">
                        <div class="kpi-icon">
                            <span class="material-symbols-outlined">payments</span>
                        </div>
                        <div class="kpi-content">
                            <h4 class="kpi-title">Average Revenue</h4>
                            <div class="kpi-value">₣52,000</div>
                            <div class="kpi-change positive">+8.7% vs last quarter</div>
                        </div>
                    </div>

                    <div class="kpi-card">
                        <div class="kpi-icon">
                            <span class="material-symbols-outlined">groups</span>
                        </div>
                        <div class="kpi-content">
                            <h4 class="kpi-title">Jobs Created</h4>
                            <div class="kpi-value">5,234</div>
                            <div class="kpi-change positive">+15.2% vs last quarter</div>
                        </div>
                    </div>

                    <div class="kpi-card">
                        <div class="kpi-icon">
                            <span class="material-symbols-outlined">storefront</span>
                        </div>
                        <div class="kpi-content">
                            <h4 class="kpi-title">Business Survival Rate</h4>
                            <div class="kpi-value">87.5%</div>
                            <div class="kpi-change positive">+3.2% vs last quarter</div>
                        </div>
                    </div>

                    <div class="kpi-card">
                        <div class="kpi-icon">
                            <span class="material-symbols-outlined">account_balance</span>
                        </div>
                        <div class="kpi-content">
                            <h4 class="kpi-title">Investment Attraction</h4>
                            <div class="kpi-value">₣450M</div>
                            <div class="kpi-change positive">+23.5% vs last quarter</div>
                        </div>
                    </div>

                    <div class="kpi-card">
                        <div class="kpi-icon">
                            <span class="material-symbols-outlined">thumb_up</span>
                        </div>
                        <div class="kpi-content">
                            <h4 class="kpi-title">Business Satisfaction</h4>
                            <div class="kpi-value">92%</div>
                            <div class="kpi-change positive">+5.1% vs last quarter</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Market Trends -->
<section class="market-trends-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Market Trends Analysis</h2>
            <p class="section-subtitle">Deep insights into market trends and business patterns</p>
        </div>

        <div class="trends-content">
            <div class="trends-grid">
                <!-- Emerging Sectors -->
                <div class="trend-card">
                    <div class="trend-header">
                        <h3 class="trend-title">Emerging Sectors</h3>
                        <div class="trend-badge growing">Growing Fast</div>
                    </div>
                    <div class="trend-content">
                        <div class="trend-description">
                            <p>Identify and analyze emerging business sectors with high growth potential in Bamenda.</p>
                        </div>
                        <div class="trend-data">
                            <div class="trend-item">
                                <span class="trend-label">Technology</span>
                                <div class="trend-bar">
                                    <div class="trend-fill" style="width: 85%; background-color: var(--primary);"></div>
                                </div>
                                <span class="trend-percentage">85% growth</span>
                            </div>
                            <div class="trend-item">
                                <span class="trend-label">Renewable Energy</span>
                                <div class="trend-bar">
                                    <div class="trend-fill" style="width: 72%; background-color: var(--tertiary);"></div>
                                </div>
                                <span class="trend-percentage">72% growth</span>
                            </div>
                            <div class="trend-item">
                                <span class="trend-label">E-commerce</span>
                                <div class="trend-bar">
                                    <div class="trend-fill" style="width: 68%; background-color: var(--secondary);"></div>
                                </div>
                                <span class="trend-percentage">68% growth</span>
                            </div>
                            <div class="trend-item">
                                <span class="trend-label">Digital Services</span>
                                <div class="trend-bar">
                                    <div class="trend-fill" style="width: 56%; background-color: var(--error);"></div>
                                </div>
                                <span class="trend-percentage">56% growth</span>
                            </div>
                        </div>
                        <div class="trend-insights">
                            <h4>Key Insights:</h4>
                            <ul class="insights-list">
                                <li>Technology sector shows strongest growth at 85%</li>
                                <li>Renewable energy investments increasing significantly</li>
                                <li>Digital transformation driving e-commerce adoption</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Consumer Behavior -->
                <div class="trend-card">
                    <div class="trend-header">
                        <h3 class="trend-title">Consumer Behavior</h3>
                        <div class="trend-badge stable">Stable</div>
                    </div>
                    <div class="trend-content">
                        <div class="trend-description">
                            <p>Analysis of consumer spending patterns and behavior changes in Bamenda market.</p>
                        </div>
                        <div class="trend-data">
                            <div class="trend-item">
                                <span class="trend-label">Online Shopping</span>
                                <div class="trend-bar">
                                    <div class="trend-fill" style="width: 45%; background-color: var(--primary);"></div>
                                </div>
                                <span class="trend-percentage">45% of consumers</span>
                            </div>
                            <div class="trend-item">
                                <span class="trend-label">Local Products</span>
                                <div class="trend-bar">
                                    <div class="trend-fill" style="width: 78%; background-color: var(--tertiary);"></div>
                                </div>
                                <span class="trend-percentage">78% preference</span>
                            </div>
                            <div class="trend-item">
                                <span class="trend-label">Mobile Payments</span>
                                <div class="trend-bar">
                                    <div class="trend-fill" style="width: 62%; background-color: var(--secondary);"></div>
                                </div>
                                <span class="trend-percentage">62% adoption</span>
                            </div>
                            <div class="trend-item">
                                <span class="trend-label">Quality Focus</span>
                                <div class="trend-bar">
                                    <div class="trend-fill" style="width: 89%; background-color: var(--error);"></div>
                                </div>
                                <span class="trend-percentage">89% priority</span>
                            </div>
                        </div>
                        <div class="trend-insights">
                            <h4>Key Insights:</h4>
                            <ul class="insights-list">
                                <li>Strong preference for locally produced goods</li>
                                <li>Quality over price becoming dominant factor</li>
                                <li>Mobile payment adoption growing steadily</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Investment Patterns -->
                <div class="trend-card">
                    <div class="trend-header">
                        <h3 class="trend-title">Investment Patterns</h3>
                        <div class="trend-badge increasing">Increasing</div>
                    </div>
                    <div class="trend-content">
                        <div class="trend-description">
                            <p>Track investment patterns and funding opportunities across different business sectors.</p>
                        </div>
                        <div class="trend-data">
                            <div class="trend-item">
                                <span class="trend-label">Small Business</span>
                                <div class="trend-bar">
                                    <div class="trend-fill" style="width: 65%; background-color: var(--primary);"></div>
                                </div>
                                <span class="trend-percentage">65% of investments</span>
                            </div>
                            <div class="trend-item">
                                <span class="trend-label">Real Estate</span>
                                <div class="trend-bar">
                                    <div class="trend-fill" style="width: 58%; background-color: var(--tertiary);"></div>
                                </div>
                                <span class="trend-percentage">58% of investments</span>
                            </div>
                            <div class="trend-item">
                                <span class="trend-label">Hospitality</span>
                                <div class="trend-bar">
                                    <div class="trend-fill" style="width: 42%; background-color: var(--secondary);"></div>
                                </div>
                                <span class="trend-percentage">42% of investments</span>
                            </div>
                            <div class="trend-item">
                                <span class="trend-label">Technology</span>
                                <div class="trend-bar">
                                    <div class="trend-fill" style="width: 38%; background-color: var(--error);"></div>
                                </div>
                                <span class="trend-percentage">38% of investments</span>
                            </div>
                        </div>
                        <div class="trend-insights">
                            <h4>Key Insights:</h4>
                            <ul class="insights-list">
                                <li>Small businesses receiving majority of investments</li>
                                <li>Real estate remains attractive investment sector</li>
                                <li>Technology sector showing increasing interest</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Market Challenges -->
                <div class="trend-card">
                    <div class="trend-header">
                        <h3 class="trend-title">Market Challenges</h3>
                        <div class="trend-badge monitoring">Monitoring</div>
                    </div>
                    <div class="trend-content">
                        <div class="trend-description">
                            <p>Identify key challenges and barriers affecting business growth in Bamenda.</p>
                        </div>
                        <div class="trend-data">
                            <div class="trend-item">
                                <span class="trend-label">Access to Finance</span>
                                <div class="trend-bar">
                                    <div class="trend-fill" style="width: 72%; background-color: var(--error);"></div>
                                </div>
                                <span class="trend-percentage">72% report challenges</span>
                            </div>
                            <div class="trend-item">
                                <span class="trend-label">Infrastructure</span>
                                <div class="trend-bar">
                                    <div class="trend-fill" style="width: 58%; background-color: var(--error);"></div>
                                </div>
                                <span class="trend-percentage">58% report challenges</span>
                            </div>
                            <div class="trend-item">
                                <span class="trend-label">Regulations</span>
                                <div class="trend-bar">
                                    <div class="trend-fill" style="width: 45%; background-color: var(--error);"></div>
                                </div>
                                <span class="trend-percentage">45% report challenges</span>
                            </div>
                            <div class="trend-item">
                                <span class="trend-label">Skilled Labor</span>
                                <div class="trend-bar">
                                    <div class="trend-fill" style="width: 38%; background-color: var(--error);"></div>
                                </div>
                                <span class="trend-percentage">38% report challenges</span>
                            </div>
                        </div>
                        <div class="trend-insights">
                            <h4>Key Insights:</h4>
                            <ul class="insights-list">
                                <li>Access to finance remains biggest challenge</li>
                                <li>Infrastructure improvements needed for growth</li>
                                <li>Skills development programs showing positive impact</li>
                            </ul>
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
            <h2 class="section-title">Business Reports</h2>
            <p class="section-subtitle">Generate and download comprehensive business reports</p>
        </div>

        <div class="reports-content">
            <div class="reports-filters">
                <div class="filter-row">
                    <div class="form-group">
                        <label class="form-label">Report Type</label>
                        <select class="form-select" id="reportType">
                            <option value="">Select report type</option>
                            <option value="comprehensive">Comprehensive Business Report</option>
                            <option value="sector">Sector Analysis Report</option>
                            <option value="economic">Economic Impact Report</option>
                            <option value="employment">Employment Report</option>
                            <option value="investment">Investment Report</option>
                            <option value="custom">Custom Report</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Date Range</label>
                        <select class="form-select" id="dateRange">
                            <option value="">Select date range</option>
                            <option value="quarter">Last Quarter</option>
                            <option value="half-year">Last 6 Months</option>
                            <option value="year">Last Year</option>
                            <option value="custom">Custom Range</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Format</label>
                        <select class="form-select" id="reportFormat">
                            <option value="pdf">PDF Report</option>
                            <option value="excel">Excel Spreadsheet</option>
                            <option value="csv">CSV Data</option>
                            <option value="json">JSON Data</option>
                        </select>
                    </div>
                    <button class="btn btn-primary" onclick="generateReport()">Generate Report</button>
                </div>
            </div>

            <div class="reports-grid">
                <!-- Comprehensive Report -->
                <div class="report-card">
                    <div class="report-icon">
                        <span class="material-symbols-outlined">description</span>
                    </div>
                    <h3 class="report-title">Comprehensive Business Report</h3>
                    <p class="report-description">Complete analysis of Bamenda business ecosystem including all sectors and metrics.</p>
                    <div class="report-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Generated: Last updated monthly</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">data_usage</span>
                            <span>Data: 45+ metrics, 12 sectors</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">description</span>
                            <span>Format: PDF, Excel</span>
                        </div>
                    </div>
                    <div class="report-actions">
                        <button class="btn btn-sm btn-primary">Generate Now</button>
                        <button class="btn btn-sm btn-outline">Preview</button>
                        <button class="btn btn-sm btn-outline">Schedule</button>
                    </div>
                </div>

                <!-- Sector Analysis Report -->
                <div class="report-card">
                    <div class="report-icon">
                        <span class="material-symbols-outlined">pie_chart</span>
                    </div>
                    <h3 class="report-title">Sector Analysis Report</h3>
                    <p class="report-description">Detailed analysis of specific business sectors with performance metrics and trends.</p>
                    <div class="report-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Generated: Weekly</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">data_usage</span>
                            <span>Data: Sector-specific KPIs</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">description</span>
                            <span>Format: PDF, Excel</span>
                        </div>
                    </div>
                    <div class="report-actions">
                        <button class="btn btn-sm btn-primary">Generate Now</button>
                        <button class="btn btn-sm btn-outline">Preview</button>
                        <button class="btn btn-sm btn-outline">Schedule</button>
                    </div>
                </div>

                <!-- Economic Impact Report -->
                <div class="report-card">
                    <div class="report-icon">
                        <span class="material-symbols-outlined">trending_up</span>
                    </div>
                    <h3 class="report-title">Economic Impact Report</h3>
                    <p class="report-description">Analysis of business economic impact on Bamenda's development and growth.</p>
                    <div class="report-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Generated: Quarterly</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">data_usage</span>
                            <span>Data: GDP, employment, revenue</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">description</span>
                            <span>Format: PDF, Excel</span>
                        </div>
                    </div>
                    <div class="report-actions">
                        <button class="btn btn-sm btn-primary">Generate Now</button>
                        <button class="btn btn-sm btn-outline">Preview</button>
                        <button class="btn btn-sm btn-outline">Schedule</button>
                    </div>
                </div>

                <!-- Employment Report -->
                <div class="report-card">
                    <div class="report-icon">
                        <span class="material-symbols-outlined">groups</span>
                    </div>
                    <h3 class="report-title">Employment Report</h3>
                    <p class="report-description">Comprehensive employment data including job creation, sector distribution, and trends.</p>
                    <div class="report-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Generated: Monthly</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">data_usage</span>
                            <span>Data: Jobs, unemployment, skills</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">description</span>
                            <span>Format: PDF, Excel</span>
                        </div>
                    </div>
                    <div class="report-actions">
                        <button class="btn btn-sm btn-primary">Generate Now</button>
                        <button class="btn btn-sm btn-outline">Preview</button>
                        <button class="btn btn-sm btn-outline">Schedule</button>
                    </div>
                </div>

                <!-- Investment Report -->
                <div class="report-card">
                    <div class="report-icon">
                        <span class="material-symbols-outlined">account_balance</span>
                    </div>
                    <h3 class="report-title">Investment Report</h3>
                    <p class="report-description">Track investment patterns, funding sources, and ROI across business sectors.</p>
                    <div class="report-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Generated: Quarterly</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">data_usage</span>
                            <span>Data: Funding, ROI, projections</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">description</span>
                            <span>Format: PDF, Excel</span>
                        </div>
                    </div>
                    <div class="report-actions">
                        <button class="btn btn-sm btn-primary">Generate Now</button>
                        <button class="btn btn-sm btn-outline">Preview</button>
                        <button class="btn btn-sm btn-outline">Schedule</button>
                    </div>
                </div>

                <!-- Custom Report -->
                <div class="report-card">
                    <div class="report-icon">
                        <span class="material-symbols-outlined">settings</span>
                    </div>
                    <h3 class="report-title">Custom Report</h3>
                    <p class="report-description">Create custom reports with specific metrics and parameters tailored to your needs.</p>
                    <div class="report-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Generated: On-demand</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">data_usage</span>
                            <span>Data: Customizable</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">description</span>
                            <span>Format: PDF, Excel, CSV</span>
                        </div>
                    </div>
                    <div class="report-actions">
                        <button class="btn btn-sm btn-primary">Create Now</button>
                        <button class="btn btn-sm btn-outline">Templates</button>
                        <button class="btn btn-sm btn-outline">Schedule</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Business Metrics -->
<section class="business-metrics-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Business Performance Metrics</h2>
            <p class="section-subtitle">Track and analyze key business performance indicators</p>
        </div>

        <div class="metrics-content">
            <div class="metrics-filters">
                <div class="filter-row">
                    <div class="form-group">
                        <label class="form-label">Metric Category</label>
                        <select class="form-select">
                            <option value="">All Categories</option>
                            <option value="financial">Financial Metrics</option>
                            <option value="operational">Operational Metrics</option>
                            <option value="customer">Customer Metrics</option>
                            <option value="market">Market Metrics</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Business Size</label>
                        <select class="form-select">
                            <option value="">All Sizes</option>
                            <option value="small">Small Business</option>
                            <option value="medium">Medium Business</option>
                            <option value="large">Large Business</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Time Period</label>
                        <select class="form-select">
                            <option value="">All Time</option>
                            <option value="current-month">Current Month</option>
                            <option value="quarter">Current Quarter</option>
                            <option value="year">Current Year</option>
                        </select>
                    </div>
                    <button class="btn btn-primary">Apply Filters</button>
                </div>
            </div>

            <div class="metrics-grid">
                <!-- Financial Metrics -->
                <div class="metric-category">
                    <h3 class="category-title">Financial Metrics</h3>
                    <div class="metrics-list">
                        <div class="metric-item">
                            <div class="metric-header">
                                <h4 class="metric-name">Revenue Growth</h4>
                                <div class="metric-value">+15.3%</div>
                            </div>
                            <div class="metric-details">
                                <div class="metric-chart">
                                    <div class="chart-bar">
                                        <div class="chart-fill" style="width: 75%;"></div>
                                    </div>
                                </div>
                                <div class="metric-info">
                                    <span class="metric-label">vs last quarter</span>
                                    <span class="metric-trend positive">↑ 3.2%</span>
                                </div>
                            </div>
                        </div>

                        <div class="metric-item">
                            <div class="metric-header">
                                <h4 class="metric-name">Profit Margin</h4>
                                <div class="metric-value">18.7%</div>
                            </div>
                            <div class="metric-details">
                                <div class="metric-chart">
                                    <div class="chart-bar">
                                        <div class="chart-fill" style="width: 62%;"></div>
                                    </div>
                                </div>
                                <div class="metric-info">
                                    <span class="metric-label">vs last quarter</span>
                                    <span class="metric-trend positive">↑ 2.1%</span>
                                </div>
                            </div>
                        </div>

                        <div class="metric-item">
                            <div class="metric-header">
                                <h4 class="metric-name">ROI</h4>
                                <div class="metric-value">22.4%</div>
                            </div>
                            <div class="metric-details">
                                <div class="metric-chart">
                                    <div class="chart-bar">
                                        <div class="chart-fill" style="width: 82%;"></div>
                                    </div>
                                </div>
                                <div class="metric-info">
                                    <span class="metric-label">vs last quarter</span>
                                    <span class="metric-trend positive">↑ 4.5%</span>
                                </div>
                            </div>
                        </div>

                        <div class="metric-item">
                            <div class="metric-header">
                                <h4 class="metric-name">Cash Flow</h4>
                                <div class="metric-value">Positive</div>
                            </div>
                            <div class="metric-details">
                                <div class="metric-chart">
                                    <div class="chart-bar">
                                        <div class="chart-fill" style="width: 68%;"></div>
                                    </div>
                                </div>
                                <div class="metric-info">
                                    <span class="metric-label">vs last quarter</span>
                                    <span class="metric-trend positive">↑ 12%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Operational Metrics -->
                <div class="metric-category">
                    <h3 class="category-title">Operational Metrics</h3>
                    <div class="metrics-list">
                        <div class="metric-item">
                            <div class="metric-header">
                                <h4 class="metric-name">Productivity</h4>
                                <div class="metric-value">87.3%</div>
                            </div>
                            <div class="metric-details">
                                <div class="metric-chart">
                                    <div class="chart-bar">
                                        <div class="chart-fill" style="width: 87%;"></div>
                                    </div>
                                </div>
                                <div class="metric-info">
                                    <span class="metric-label">vs last quarter</span>
                                    <span class="metric-trend positive">↑ 5.1%</span>
                                </div>
                            </div>
                        </div>

                        <div class="metric-item">
                            <div class="metric-header">
                                <h4 class="metric-name">Efficiency</h4>
                                <div class="metric-value">92.1%</div>
                            </div>
                            <div class="metric-details">
                                <div class="metric-chart">
                                    <div class="chart-bar">
                                        <div class="chart-fill" style="width: 92%;"></div>
                                    </div>
                                </div>
                                <div class="metric-info">
                                    <span class="metric-label">vs last quarter</span>
                                    <span class="metric-trend positive">↑ 3.8%</span>
                                </div>
                            </div>
                        </div>

                        <div class="metric-item">
                            <div class="metric-header">
                                <h4 class="metric-name">Quality Score</h4>
                                <div class="metric-value">4.6/5</div>
                            </div>
                            <div class="metric-details">
                                <div class="metric-chart">
                                    <div class="chart-bar">
                                        <div class="chart-fill" style="width: 92%;"></div>
                                    </div>
                                </div>
                                <div class="metric-info">
                                    <span class="metric-label">vs last quarter</span>
                                    <span class="metric-trend positive">↑ 0.3</span>
                                </div>
                            </div>
                        </div>

                        <div class="metric-item">
                            <div class="metric-header">
                                <h4 class="metric-name">Inventory Turnover</h4>
                                <div class="metric-value">6.8x</div>
                            </div>
                            <div class="metric-details">
                                <div class="metric-chart">
                                    <div class="chart-bar">
                                        <div class="chart-fill" style="width: 68%;"></div>
                                    </div>
                                </div>
                                <div class="metric-info">
                                    <span class="metric-label">vs last quarter</span>
                                    <span class="metric-trend positive">↑ 0.5x</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Customer Metrics -->
                <div class="metric-category">
                    <h3 class="category-title">Customer Metrics</h3>
                    <div class="metrics-list">
                        <div class="metric-item">
                            <div class="metric-header">
                                <h4 class="metric-name">Customer Satisfaction</h4>
                                <div class="metric-value">94.2%</div>
                            </div>
                            <div class="metric-details">
                                <div class="metric-chart">
                                    <div class="chart-bar">
                                        <div class="chart-fill" style="width: 94%;"></div>
                                    </div>
                                </div>
                                <div class="metric-info">
                                    <span class="metric-label">vs last quarter</span>
                                    <span class="metric-trend positive">↑ 2.3%</span>
                                </div>
                            </div>
                        </div>

                        <div class="metric-item">
                            <div class="metric-header">
                                <h4 class="metric-name">Customer Retention</h4>
                                <div class="metric-value">86.7%</div>
                            </div>
                            <div class="metric-details">
                                <div class="metric-chart">
                                    <div class="chart-fill" style="width: 87%;"></div>
                                    </div>
                                </div>
                                <div class="metric-info">
                                    <span class="metric-label">vs last quarter</span>
                                    <span class="metric-trend positive">↑ 4.1%</span>
                                </div>
                            </div>
                        </div>

                        <div class="metric-item">
                            <div class="metric-header">
                                <h4 class="metric-name">Net Promoter Score</h4>
                                <div class="metric-value">72</div>
                            </div>
                            <div class="metric-details">
                                <div class="metric-chart">
                                    <div class="chart-fill" style="width: 72%;"></div>
                                    </div>
                                </div>
                                <div class="metric-info">
                                    <span class="metric-label">vs last quarter</span>
                                    <span class="metric-trend positive">↑ 5</span>
                                </div>
                            </div>
                        </div>

                        <div class="metric-item">
                            <div class="metric-header">
                                <h4 class="metric-name">Customer Acquisition Cost</h4>
                                <div class="metric-value">₣2,340</div>
                            </div>
                            <div class="metric-details">
                                <div class="metric-chart">
                                    <div class="chart-fill" style="width: 45%;"></div>
                                    </div>
                                </div>
                                <div class="metric-info">
                                    <span class="metric-label">vs last quarter</span>
                                    <span class="metric-trend positive">↓ 12%</span>
                                </div>
                            </div>
                        </div>
                    </div>
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
/* Business Analytics Page Styles */
.business-analytics-hero {
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

/* Analytics Statistics Section */
.analytics-stats-section {
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

/* Analytics Dashboard Section */
.analytics-dashboard-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.dashboard-content {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
}

.dashboard-filters {
    background-color: var(--surface-container);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    margin-bottom: var(--spacing-xl);
}

.filter-row {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: var(--spacing-lg);
    align-items: end;
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
    border-bottom: 1px solid var(--outline-variant);
}

.chart-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin: 0;
}

.chart-actions {
    display: flex;
    gap: var(--spacing-sm);
}

.chart-content {
    padding: var(--spacing-lg);
    text-align: center;
}

.chart-footer {
    padding: var(--spacing-lg);
    border-top: 1px solid var(--outline-variant);
}

.chart-summary {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.summary-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: var(--spacing-xs);
}

.summary-label {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.summary-value {
    font-size: 1rem;
    font-weight: 700;
    color: var(--primary);
}

.summary-value.positive {
    color: var(--tertiary);
}

/* KPI Section */
.kpi-section {
    margin-top: var(--spacing-2xl);
}

.kpi-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: var(--spacing-lg);
}

.kpi-card {
    background-color: var(--surface-container);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    display: flex;
    align-items: center;
    gap: var(--spacing-lg);
    transition: all 0.3s ease;
}

.kpi-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.kpi-icon {
    width: 3rem;
    height: 3rem;
    background-color: var(--secondary);
    color: var(--on-secondary);
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.kpi-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.kpi-content {
    flex: 1;
}

.kpi-title {
    font-size: 1rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-xs);
}

.kpi-value {
    font-size: 1.25rem;
    font-weight: 800;
    color: var(--primary);
    margin-bottom: var(--spacing-xs);
}

.kpi-change {
    font-size: 0.75rem;
    font-weight: 600;
    color: var(--tertiary);
}

/* Market Trends Section */
.market-trends-section {
    padding: var(--spacing-3xl) 0;
}

.trends-content {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xl);
}

.trends-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.trend-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.trend-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.trend-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.trend-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin: 0;
}

.trend-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.trend-badge.growing {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.trend-badge.stable {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.trend-badge.increasing {
    background-color: var(--primary);
    color: var(--on-primary);
}

.trend-badge.monitoring {
    background-color: var(--error);
    color: var(--on-error);
}

.trend-content {
    padding: var(--spacing-lg);
}

.trend-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.trend-data {
    margin-bottom: var(--spacing-lg);
}

.trend-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-md);
    margin-bottom: var(--spacing-sm);
}

.trend-label {
    min-width: 120px;
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    font-weight: 500;
}

.trend-bar {
    flex: 1;
    height: 8px;
    background-color: var(--surface-container);
    border-radius: var(--radius-full);
    overflow: hidden;
    margin-right: var(--spacing-sm);
}

.trend-fill {
    height: 100%;
    border-radius: var(--radius-full);
    transition: width 0.3s ease;
}

.trend-percentage {
    min-width: 3rem;
    font-size: 0.75rem;
    font-weight: 600;
    color: var(--primary);
    text-align: right;
}

.trend-insights {
    margin-top: var(--spacing-lg);
}

.trend-insights h4 {
    font-size: 1rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.insights-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.insights-list li {
    padding: var(--spacing-xs) 0;
    color: var(--on-surface-variant);
    font-size: 0.875rem;
    position: relative;
    padding-left: var(--spacing-lg);
    line-height: 1.5;
}

.insights-list li::before {
    content: '•';
    position: absolute;
    left: 0;
    color: var(--primary);
    font-weight: 700;
}

/* Reports Section */
.reports-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.reports-content {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
}

.reports-filters {
    background-color: var(--surface-container);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    margin-bottom: var(--spacing-xl);
}

.reports-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.report-card {
    background-color: var(--surface-container);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
    text-align: center;
}

.report-card:hover {
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
    color: var(--on-surface-variant);
    font-size: 0.875rem;
}

.detail-item .material-symbols-outlined {
    font-size: 1.25rem;
    color: var(--primary);
}

.report-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Business Metrics Section */
.business-metrics-section {
    padding: var(--spacing-3xl) 0;
}

.metrics-content {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
}

.metrics-filters {
    background-color: var(--surface-container);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    margin-bottom: var(--spacing-xl);
}

.metrics-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.metric-category {
    background-color: var(--surface-container);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
}

.category-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
    text-align: center;
}

.metrics-list {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-lg);
}

.metric-item {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.metric-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.metric-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: var(--spacing-md);
}

.metric-name {
    font-size: 1rem;
    font-weight: 600;
    color: var(--primary);
}

.metric-value {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
}

.metric-details {
    display: flex;
    align-items: center;
    gap: var(--spacing-lg);
}

.metric-chart {
    flex: 1;
    height: 6px;
    background-color: var(--surface-container);
    border-radius: var(--radius-full);
    overflow: hidden;
}

.chart-fill {
    height: 100%;
    border-radius: var(--radius-full);
    transition: width 0.3s ease;
}

.metric-info {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xs);
    min-width: 100px;
}

.metric-label {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.metric-trend {
    font-size: 0.75rem;
    font-weight: 600;
}

.metric-trend.positive {
    color: var(--tertiary);
}

.metric-trend.negative {
    color: var(--error);
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
    
    .filter-row {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .dashboard-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .kpi-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: var(--spacing-lg);
    }
    
    .trends-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .reports-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .metrics-grid {
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
    
    .dashboard-content {
        padding: var(--spacing-lg);
    }
    
    .chart-header {
        flex-direction: column;
        gap: var(--spacing-md);
        align-items: flex-start;
    }
    
    .chart-actions {
        width: 100%;
        justify-content: flex-start;
    }
    
    .kpi-card {
        flex-direction: column;
        text-align: center;
        gap: var(--spacing-md);
    }
    
    .trend-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .report-card {
        padding: var(--spacing-lg);
    }
    
    .report-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .report-icon .material-symbols-outlined {
        font-size: 1.5rem;
    }
    
    .metrics-content {
        padding: var(--spacing-lg);
    }
    
    .metrics-filters {
        padding: var(--spacing-lg);
    }
    
    .metric-details {
        flex-direction: column;
        gap: var(--spacing-md);
    }
    
    .metric-info {
        min-width: auto;
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
    
    .chart-summary {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .summary-item {
        align-items: center;
    }
}
</style>

<script>
// Quick action functions
function openDashboard() {
    document.getElementById('analytics-dashboard').scrollIntoView({ behavior: 'smooth' });
}

function openMarketTrends() {
    document.getElementById('market-trends').scrollIntoView({ behavior: 'smooth' });
}

function openEconomicData() {
    alert('Economic data section would open here. In production, this would show detailed economic indicators and analysis.');
}

function openReports() {
    document.getElementById('reports').scrollIntoView({ behavior: 'smooth' });
}

function openBusinessMetrics() {
    document.getElementById('business-metrics').scrollIntoView({ behavior: 'smooth' });
}

function openCompetitorAnalysis() {
    alert('Competitor analysis would open here. In production, this would show competitor performance and market share analysis.');
}

// Dashboard functions
function updateDashboard() {
    const timePeriod = document.getElementById('timePeriod').value;
    const businessSector = document.getElementById('businessSector').value;
    const businessSize = document.getElementById('businessSize').value;
    
    // In production, this would update the dashboard with new data
    console.log('Updating dashboard with:', { timePeriod, businessSector, businessSize });
    
    alert(`Dashboard updated for: ${timePeriod || 'all'}, ${businessSector || 'all'}, ${businessSize || 'all'}`);
}

// Chart initialization (using Chart.js would be implemented here)
function initializeCharts() {
    // Revenue Chart
    const revenueCtx = document.getElementById('revenueChart');
    if (revenueCtx) {
        // In production, this would initialize Chart.js charts
        console.log('Revenue chart initialized');
    }
    
    // Growth Chart
    const growthCtx = document.getElementById('growthChart');
    if (growthCtx) {
        console.log('Growth chart initialized');
    }
    
    // Sector Chart
    const sectorCtx = document.getElementById('sectorChart');
    if (sectorCtx) {
        console.log('Sector chart initialized');
    }
    
    // Employment Chart
    const employmentCtx = document.getElementById('employmentChart');
    if (employmentCtx) {
        console.log('employment chart initialized');
    }
}

// Report generation
function generateReport() {
    const reportType = document.getElementById('reportType').value;
    const dateRange = document.getElementById('dateRange').value;
    const reportFormat = document.getElementById('reportFormat').value;
    
    if (!reportType || !dateRange || !reportFormat) {
        alert('Please select all required fields to generate a report.');
        return;
    }
    
    alert(`Generating ${reportType} report for ${dateRange} in ${reportFormat} format. In production, this would generate and download the report.`);
}

// Report actions
document.querySelectorAll('.report-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Generate')) {
        button.addEventListener('click', function() {
            const reportTitle = this.closest('.report-card').querySelector('.report-title').textContent;
            alert(`Generating: "${reportTitle}"`);
        });
    }
});

document.querySelectorAll('.report-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Preview')) {
        button.addEventListener('click', function() {
            const reportTitle = this.closest('.report-card').querySelector('.report-title').textContent;
            alert(`Previewing: "${reportTitle}"`);
        });
    }
    
    if (button.textContent.includes('Schedule')) {
        button.addEventListener('click', function() {
            const reportTitle = this.closest('.report-card').querySelector('.report-title').textContent;
            alert(`Scheduling: "${reportTitle}"`);
        });
    }
});

// Metrics filters
document.querySelectorAll('.metrics-filters .btn-primary').forEach(button => {
    button.addEventListener('click', function() {
        // In production, this would apply the filters and update metrics
        alert('Metrics filters applied. Dashboard updated with filtered data.');
    });
});

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

// Initialize charts when page loads
document.addEventListener('DOMContentLoaded', function() {
    initializeCharts();
});

// Auto-refresh analytics data
function refreshAnalyticsData() {
    // In production, this would fetch real-time analytics data
    console.log('Refreshing analytics data...');
}

// Refresh data every 60 seconds
setInterval(refreshAnalyticsData, 60000);
</script>
