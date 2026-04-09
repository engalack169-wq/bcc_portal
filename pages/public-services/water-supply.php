<?php
/**
 * Bamenda City Council E-Governance Platform
 * Water Supply Services Page
 */

// Set page metadata
$page_title = 'Water Supply Services | Bamenda City Council';
$page_description = 'Access water supply services, water quality monitoring, connection applications, and water management solutions for Bamenda residents.';
$page_keywords = 'water supply, water services, water quality, water connection, Bamenda water management';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Public Services', 'url' => '../index.php'],
    ['title' => 'Water Supply', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero water-supply-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-public-services.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Water Supply Services</span>
            <h1 class="hero-title">Water Supply & Management</h1>
            <p class="hero-subtitle">
                Comprehensive water supply services including water connections, quality monitoring, infrastructure management, and sustainable water solutions for Bamenda residents.
            </p>
            <div class="hero-actions">
                <a href="#water-services" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">water_drop</span>
                    Water Services
                </a>
                <a href="#apply-connection" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">plumbing</span>
                    Apply for Connection
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Water Supply Actions</h2>
            <p class="section-subtitle">Quick access to water supply services and information</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openWaterServices()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">water_drop</span>
                </div>
                <h3 class="action-title">Water Services</h3>
                <p class="action-description">Access water supply and distribution services</p>
            </div>

            <div class="action-card" onclick="openWaterQuality()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">science</span>
                </div>
                <h3 class="action-title">Water Quality</h3>
                <p class="action-description">View water quality reports and monitoring data</p>
            </div>

            <div class="action-card" onclick="openConnectionApplication()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">plumbing</span>
                </div>
                <h3 class="action-title">New Connection</h3>
                <p class="action-description">Apply for new water connection services</p>
            </div>

            <div class="action-card" onclick="openWaterBilling()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">receipt_long</span>
                </div>
                <h3 class="action-title">Water Billing</h3>
                <p class="action-description">View and pay water bills online</p>
            </div>

            <div class="action-card" onclick="openWaterConservation()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">eco</span>
                </div>
                <h3 class="action-title">Water Conservation</h3>
                <p class="action-description">Learn about water conservation tips and programs</p>
            </div>

            <div class="action-card" onclick="openWaterIssues()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">report_problem</span>
                </div>
                <h3 class="action-title">Report Issues</h3>
                <p class="action-description">Report water supply problems and leaks</p>
            </div>
        </div>
    </div>
</section>

<!-- Water Supply Statistics -->
<section class="water-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">water_drop</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">45,000</div>
                    <div class="stat-label">Connected Households</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+1,200 this year</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">verified</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">98.5%</div>
                    <div class="stat-label">Water Quality Compliance</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+2.3% improvement</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">plumbing</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">234 km</div>
                    <div class="stat-label">Pipeline Network</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+15 km expanded</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">water</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">12.5M</div>
                    <div class="stat-label">Liters Supplied Daily</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+8% capacity</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Water Services -->
<section class="water-services-section" id="water-services">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Water Supply Services</h2>
            <p class="section-subtitle">Comprehensive water supply and distribution services</p>
        </div>

        <div class="services-grid">
            <!-- Residential Water Supply -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">home</span>
                </div>
                <h3 class="service-title">Residential Water Supply</h3>
                <p class="service-description">Reliable and clean water supply for residential households throughout Bamenda.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>24/7 Water Supply</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Potable Drinking Water</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Regular Quality Testing</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Emergency Supply</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">payments</span>
                        <span>Connection Fee: ₣25,000</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Service: Continuous</span>
                    </div>
                </div>
                <button class="btn btn-primary">Apply for Service</button>
            </div>

            <!-- Commercial Water Supply -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">storefront</span>
                </div>
                <h3 class="service-title">Commercial Water Supply</h3>
                <p class="service-description">High-volume water supply services for businesses, industries, and commercial establishments.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>High-Pressure Supply</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Large Diameter Pipes</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Priority Service</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Custom Solutions</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">payments</span>
                        <span>Connection Fee: Based on size</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Service: Continuous</span>
                    </div>
                </div>
                <button class="btn btn-primary">Apply for Service</button>
            </div>

            <!-- Industrial Water Supply -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">factory</span>
                </div>
                <h3 class="service-title">Industrial Water Supply</h3>
                <p class="service-description">Specialized water supply solutions for industrial facilities and manufacturing plants.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Industrial-Grade Water</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>High-Volume Capacity</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Backup Systems</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Technical Support</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">payments</span>
                        <span>Connection Fee: Custom Quote</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Service: 24/7</span>
                    </div>
                </div>
                <button class="btn btn-primary">Apply for Service</button>
            </div>

            <!-- Public Water Points -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">location_on</span>
                </div>
                <h3 class="service-title">Public Water Points</h3>
                <p class="service-description">Public water access points and standpipes for communities without individual connections.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Strategic Locations</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Free Access</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Regular Maintenance</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Quality Assured</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">payments</span>
                        <span>Cost: Free Service</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Service: 6:00 AM - 8:00 PM</span>
                    </div>
                </div>
                <button class="btn btn-primary">Find Water Points</button>
            </div>

            <!-- Emergency Water Supply -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">emergency</span>
                </div>
                <h3 class="service-title">Emergency Water Supply</h3>
                <p class="service-description">Emergency water supply services during disruptions, maintenance, or crisis situations.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Rapid Response</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Mobile Water Tankers</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Bottled Water Distribution</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Priority Areas</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">phone</span>
                        <span>Emergency: 119</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Response: Within 2 hours</span>
                    </div>
                </div>
                <button class="btn btn-primary">Request Emergency Supply</button>
            </div>

            <!-- Water Infrastructure -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">construction</span>
                </div>
                <h3 class="service-title">Infrastructure Development</h3>
                <p class="service-description">Water infrastructure development, maintenance, and upgrade services.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Pipeline Installation</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Treatment Plant Upgrades</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Storage Tank Installation</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>System Modernization</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">payments</span>
                        <span>Cost: Project-based</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Timeline: Project-specific</span>
                    </div>
                </div>
                <button class="btn btn-primary">Request Infrastructure</button>
            </div>
        </div>
    </div>
</section>

<!-- Water Quality Monitoring -->
<section class="water-quality-section" id="water-quality">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Water Quality Monitoring</h2>
            <p class="section-subtitle">Real-time water quality monitoring and safety assurance</p>
        </div>

        <div class="quality-content">
            <div class="quality-overview">
                <h3 class="overview-title">Water Quality Standards</h3>
                <p class="overview-description">
                    Bamenda City Council maintains strict water quality standards in accordance with national and international guidelines. 
                    Our water undergoes comprehensive testing and treatment to ensure it's safe for consumption.
                </p>
            </div>

            <div class="quality-metrics">
                <div class="metric-card">
                    <div class="metric-header">
                        <div class="metric-icon">
                            <span class="material-symbols-outlined">water_drop</span>
                        </div>
                        <div class="metric-status good">Good</div>
                    </div>
                    <div class="metric-content">
                        <h4 class="metric-title">pH Level</h4>
                        <div class="metric-value">7.2</div>
                        <div class="metric-range">Optimal: 6.5 - 8.5</div>
                        <div class="metric-description">Water pH is within optimal range for safe consumption</div>
                    </div>
                </div>

                <div class="metric-card">
                    <div class="metric-header">
                        <div class="metric-icon">
                            <span class="material-symbols-outlined">science</span>
                        </div>
                        <div class="metric-status good">Good</div>
                    </div>
                    <div class="metric-content">
                        <h4 class="metric-title">Chlorine Residual</h4>
                        <div class="metric-value">0.5 mg/L</div>
                        <div class="metric-range">Optimal: 0.2 - 1.0 mg/L</div>
                        <div class="metric-description">Adequate chlorine levels for disinfection</div>
                    </div>
                </div>

                <div class="metric-card">
                    <div class="metric-header">
                        <div class="metric-icon">
                            <span class="material-symbols-outlined">bacteria</span>
                        </div>
                        <div class="metric-status good">Good</div>
                    </div>
                    <div class="metric-content">
                        <h4 class="metric-title">Bacterial Count</h4>
                        <div class="metric-value">0 CFU/mL</div>
                        <div class="metric-range">Standard: < 1 CFU/mL</div>
                        <div class="metric-description">No harmful bacteria detected in water supply</div>
                    </div>
                </div>

                <div class="metric-card">
                    <div class="metric-header">
                        <div class="metric-icon">
                            <span class="material-symbols-outlined">opacity</span>
                        </div>
                        <div class="metric-status good">Good</div>
                    </div>
                    <div class="metric-content">
                        <h4 class="metric-title">Turbidity</h4>
                        <div class="metric-value">0.3 NTU</div>
                        <div class="metric-range">Standard: < 1 NTU</div>
                        <div class="metric-description">Water clarity meets drinking water standards</div>
                    </div>
                </div>
            </div>

            <div class="quality-reports">
                <h3 class="reports-title">Water Quality Reports</h3>
                <div class="reports-grid">
                    <div class="report-card">
                        <div class="report-header">
                            <h4 class="report-title">Daily Water Quality Report</h4>
                            <div class="report-date">March 20, 2024</div>
                        </div>
                        <div class="report-summary">
                            <p>All water quality parameters are within acceptable limits. Water is safe for consumption.</p>
                        </div>
                        <div class="report-details">
                            <div class="detail-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>All parameters normal</span>
                            </div>
                            <div class="detail-item">
                                <span class="material-symbols-outlined">schedule</span>
                                <span>Tested at 8:00 AM</span>
                            </div>
                        </div>
                        <button class="btn btn-sm btn-outline">View Full Report</button>
                    </div>

                    <div class="report-card">
                        <div class="report-header">
                            <h4 class="report-title">Weekly Water Quality Summary</h4>
                            <div class="report-date">March 18-24, 2024</div>
                        </div>
                        <div class="report-summary">
                            <p>Consistent water quality throughout the week with all parameters meeting standards.</p>
                        </div>
                        <div class="report-details">
                            <div class="detail-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>100% compliance rate</span>
                            </div>
                            <div class="detail-item">
                                <span class="material-symbols-outlined">location_on</span>
                                <span>All zones tested</span>
                            </div>
                        </div>
                        <button class="btn btn-sm btn-outline">View Full Report</button>
                    </div>

                    <div class="report-card">
                        <div class="report-header">
                            <h4 class="report-title">Monthly Water Quality Analysis</h4>
                            <div class="report-date">March 2024</div>
                        </div>
                        <div class="report-summary">
                            <p>Comprehensive monthly analysis showing excellent water quality across all distribution zones.</p>
                        </div>
                        <div class="report-details">
                            <div class="detail-item">
                                <span class="material-symbols-outlined">trending_up</span>
                                <span>Quality improvement noted</span>
                            </div>
                            <div class="detail-item">
                                <span class="material-symbols-outlined">verified</span>
                                <span>WHO standards met</span>
                            </div>
                        </div>
                        <button class="btn btn-sm btn-outline">View Full Report</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Water Connection Application -->
<section class="connection-application-section" id="apply-connection">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Water Connection Application</h2>
            <p class="section-subtitle">Apply for new water connection services</p>
        </div>

        <div class="application-content">
            <div class="application-info">
                <h3 class="info-title">Connection Process</h3>
                <div class="process-steps">
                    <div class="step-item">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h4 class="step-title">Submit Application</h4>
                            <p class="step-description">Complete the water connection application form with required documents</p>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h4 class="step-title">Site Assessment</h4>
                            <p class="step-description">Our team will visit your location to assess connection feasibility</p>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h4 class="step-title">Connection Fee Payment</h4>
                            <p class="step-description">Pay the connection fee based on your service type and location</p>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h4 class="step-title">Installation</h4>
                            <p class="step-description">Professional installation of water connection and meter</p>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-number">5</div>
                        <div class="step-content">
                            <h4 class="step-title">Service Activation</h4>
                            <p class="step-description">Water supply activated and customer account created</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="application-form">
                <h3 class="form-title">Water Connection Application Form</h3>
                <form id="waterConnectionForm">
                    <div class="form-section">
                        <h4 class="section-title">Applicant Information</h4>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Full Name *</label>
                                <input type="text" class="form-input" placeholder="Enter your full name" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Phone Number *</label>
                                <input type="tel" class="form-input" placeholder="+237 233 000 000" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-input" placeholder="your@email.com">
                            </div>
                            <div class="form-group">
                                <label class="form-label">ID Type *</label>
                                <select class="form-select" required>
                                    <option value="">Select ID type</option>
                                    <option value="national">National ID</option>
                                    <option value="passport">Passport</option>
                                    <option value="driver">Driver's License</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">ID Number *</label>
                                <input type="text" class="form-input" placeholder="Enter ID number" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Customer Type *</label>
                                <select class="form-select" required>
                                    <option value="">Select customer type</option>
                                    <option value="residential">Residential</option>
                                    <option value="commercial">Commercial</option>
                                    <option value="industrial">Industrial</option>
                                    <option value="institutional">Institutional</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Connection Details</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Service Address *</label>
                            <input type="text" class="form-input" placeholder="Enter complete service address" required>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Area/Neighborhood *</label>
                                <select class="form-select" required>
                                    <option value="">Select area</option>
                                    <option value="city-center">City Center</option>
                                    <option value="nkwen">Nkwen</option>
                                    <option value="mankon">Mankon</option>
                                    <option value="bambili">Bambili</option>
                                    <option value="bambui">Bambui</option>
                                    <option value="mile-four">Mile Four</option>
                                    <option value="mile-three">Mile Three</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Property Type *</label>
                                <select class="form-select" required>
                                    <option value="">Select property type</option>
                                    <option value="house">House</option>
                                    <option value="apartment">Apartment</option>
                                    <option value="business">Business</option>
                                    <option value="office">Office</option>
                                    <option value="factory">Factory</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Connection Type *</label>
                                <select class="form-select" required>
                                    <option value="">Select connection type</option>
                                    <option value="new">New Connection</option>
                                    <option value="reconnection">Reconnection</option>
                                    <option value="transfer">Transfer of Service</option>
                                    <option value="upgrade">Service Upgrade</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Pipe Size Required</label>
                                <select class="form-select">
                                    <option value="">Select pipe size</option>
                                    <option value="half">1/2 inch</option>
                                    <option value="three-quarters">3/4 inch</option>
                                    <option value="one">1 inch</option>
                                    <option value="one-and-half">1.5 inch</option>
                                    <option value="two">2 inch</option>
                                    <option value="larger">Larger (specify)</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Estimated Monthly Water Usage</label>
                            <select class="form-select">
                                <option value="">Select usage estimate</option>
                                <option value="low">Low (0-5,000 liters)</option>
                                <option value="medium">Medium (5,000-15,000 liters)</option>
                                <option value="high">High (15,000-50,000 liters)</option>
                                <option value="very-high">Very High (50,000+ liters)</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Additional Information</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Reason for Connection *</label>
                            <textarea class="form-textarea" rows="3" placeholder="Describe why you need water connection" required></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Special Requirements</label>
                            <textarea class="form-textarea" rows="3" placeholder="Any special requirements or considerations"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Preferred Installation Date</label>
                            <input type="date" class="form-input">
                        </div>

                        <div class="form-group">
                            <label class="form-label">How did you hear about our services? *</label>
                            <select class="form-select" required>
                                <option value="">Select option</option>
                                <option value="neighbor">Neighbor/Friend</option>
                                <option value="advertisement">Advertisement</option>
                                <option value="website">City Council Website</option>
                                <option value="office">Water Office</option>
                                <option value="event">Community Event</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Declaration *</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="declaration" required>
                                    <span class="checkmark"></span>
                                    I declare that all information provided is accurate and complete. I understand that any false information may result in the rejection of this application. I agree to abide by the water supply regulations and terms of service.
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="reset" class="btn btn-outline">Reset</button>
                        <button type="submit" class="btn btn-primary">Submit Application</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Water Conservation -->
<section class="water-conservation-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Water Conservation Programs</h2>
            <p class="section-subtitle">Join our water conservation initiatives and help preserve this precious resource</p>
        </div>

        <div class="conservation-content">
            <div class="conservation-overview">
                <h3 class="overview-title">Why Water Conservation Matters</h3>
                <p class="overview-description">
                    Water is a precious resource that requires careful management. Our conservation programs help reduce water waste, 
                    promote efficient usage, and ensure sustainable water supply for future generations.
                </p>
            </div>

            <div class="conservation-tips">
                <h3 class="tips-title">Water Conservation Tips</h3>
                <div class="tips-grid">
                    <div class="tip-card">
                        <div class="tip-icon">
                            <span class="material-symbols-outlined">shower</span>
                        </div>
                        <h4 class="tip-title">Shorter Showers</h4>
                        <p class="tip-description">Reduce shower time to 5 minutes to save up to 50 liters per shower.</p>
                    </div>

                    <div class="tip-card">
                        <div class="tip-icon">
                            <span class="material-symbols-outlined">faucet</span>
                        </div>
                        <h4 class="tip-title">Fix Leaks</h4>
                        <p class="tip-description">Repair leaking taps and pipes immediately to prevent water waste.</p>
                    </div>

                    <div class="tip-card">
                        <div class="tip-icon">
                            <span class="material-symbols-outlined">local_drink</span>
                        </div>
                        <h4 class="tip-title">Reuse Water</h4>
                        <p class="tip-description">Reuse water from washing clothes or dishes for gardening and cleaning.</p>
                    </div>

                    <div class="tip-card">
                        <div class="tip-icon">
                            <span class="material-symbols-outlined">wash</span>
                        </div>
                        <h4 class="tip-title">Full Loads Only</h4>
                        <p class="tip-description">Run washing machines and dishwashers only with full loads.</p>
                    </div>

                    <div class="tip-card">
                        <div class="tip-icon">
                            <span class="material-symbols-outlined">yard</span>
                        </div>
                        <h4 class="tip-title">Smart Gardening</h4>
                        <p class="tip-description">Water plants early morning or late evening to reduce evaporation.</p>
                    </div>

                    <div class="tip-card">
                        <div class="tip-icon">
                            <span class="material-symbols-outlined">water_drop</span>
                        </div>
                        <h4 class="tip-title">Collect Rainwater</h4>
                        <p class="tip-description">Install rainwater harvesting systems for non-potable water needs.</p>
                    </div>
                </div>
            </div>

            <div class="conservation-programs">
                <h3 class="programs-title">Conservation Programs</h3>
                <div class="programs-grid">
                    <div class="program-card">
                        <div class="program-icon">
                            <span class="material-symbols-outlined">school</span>
                        </div>
                        <h4 class="program-title">School Water Education</h4>
                        <p class="program-description">Educational programs in schools to teach children about water conservation.</p>
                        <div class="program-stats">
                            <span class="stat-item">45 schools participating</span>
                            <span class="stat-item">12,000 students reached</span>
                        </div>
                        <button class="btn btn-sm btn-primary">Join Program</button>
                    </div>

                    <div class="program-card">
                        <div class="program-icon">
                            <span class="material-symbols-outlined">home</span>
                        </div>
                        <h4 class="program-title">Household Water Audit</h4>
                        <p class="program-description">Free water usage audits for households to identify conservation opportunities.</p>
                        <div class="program-stats">
                            <span class="stat-item">500+ households audited</span>
                            <span class="stat-item">30% average savings</span>
                        </div>
                        <button class="btn btn-sm btn-primary">Request Audit</button>
                    </div>

                    <div class="program-card">
                        <div class="program-icon">
                            <span class="material-symbols-outlined">eco</span>
                        </div>
                        <h4 class="program-title">Green Building Certification</h4>
                        <p class="program-description">Certification program for water-efficient buildings and developments.</p>
                        <div class="program-stats">
                            <span class="stat-item">23 buildings certified</span>
                            <span class="stat-item">40% water reduction</span>
                        </div>
                        <button class="btn btn-sm btn-primary">Apply for Certification</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Report Water Issues -->
<section class="report-water-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Report Water Supply Issues</h2>
            <p class="section-subtitle">Report water supply problems, leaks, and service disruptions</p>
        </div>

        <div class="reporting-options">
            <div class="option-card urgent" onclick="reportUrgentIssue()">
                <div class="option-icon">
                    <span class="material-symbols-outlined">priority_high</span>
                </div>
                <h3 class="option-title">Emergency Water Issue</h3>
                <p class="option-description">Report urgent water supply problems requiring immediate attention</p>
                <div class="option-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">phone</span>
                        <span>Call: 119 (Emergency)</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">timer</span>
                        <span>Response: Within 2 hours</span>
                    </div>
                </div>
                <button class="btn btn-lg btn-danger">Report Emergency</button>
            </div>

            <div class="option-card standard" onclick="reportStandardIssue()">
                <div class="option-icon">
                    <span class="material-symbols-outlined">report_problem</span>
                </div>
                <h3 class="option-title">Standard Issue</h3>
                <p class="option-description">Report regular water supply problems and service issues</p>
                <div class="option-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">phone</span>
                        <span>Call: 121 (Water Services)</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">timer</span>
                        <span>Response: Within 24 hours</span>
                    </div>
                </div>
                <button class="btn btn-lg btn-primary">Report Issue</button>
            </div>

            <div class="option-card online" onclick="openOnlineReporting()">
                <div class="option-icon">
                    <span class="material-symbols-outlined">computer</span>
                </div>
                <h3 class="option-title">Online Reporting</h3>
                <p class="option-description">Submit detailed water issue reports online with photos</p>
                <div class="option-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">language</span>
                        <span>Website: water.bamenda.gov.cm</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">timer</span>
                        <span>Response: Within 48 hours</span>
                    </div>
                </div>
                <button class="btn btn-lg btn-outline">Report Online</button>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Common questions about water supply services</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How do I apply for a new water connection?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>You can apply for a new water connection by filling out our online application form or visiting the Water Services office. You'll need to provide identification, proof of address, and pay the connection fee. The process typically takes 5-7 working days.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What are the water connection fees?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Connection fees vary by service type: Residential connections cost ₣25,000, commercial connections are priced based on pipe size and usage requirements, and industrial connections require custom quotes. Fees include installation and meter costs.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How often is water quality tested?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Water quality is tested daily at treatment plants and weekly at distribution points. We test for pH, chlorine residual, bacterial count, turbidity, and other parameters. Results are published on our website and available at water offices.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What should I do during water supply disruptions?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>During disruptions, check our website or call the water hotline for updates. Store emergency water supplies and report issues immediately. For extended outages, we provide emergency water tankers at designated locations.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How can I conserve water at home?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>You can conserve water by fixing leaks, taking shorter showers, using water-efficient appliances, collecting rainwater, and following our water conservation tips. We also offer free household water audits to help identify savings opportunities.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How do I report water leaks or supply issues?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Report urgent issues by calling 119, standard issues by calling 121, or submit online reports through our website. Provide location details, description of the issue, and contact information. Emergency issues are responded to within 2 hours.</p>
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
/* Water Supply Page Styles */
.water-supply-hero {
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

/* Water Statistics Section */
.water-stats-section {
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

/* Water Services Section */
.water-services-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.service-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.service-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.service-icon {
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

.service-icon .material-symbols-outlined {
    font-size: 2rem;
}

.service-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.service-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.service-features {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-sm);
    justify-content: center;
    margin-bottom: var(--spacing-lg);
}

.feature-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.feature-item .material-symbols-outlined {
    font-size: 1rem;
    color: var(--tertiary);
}

.service-details {
    display: flex;
    justify-content: space-between;
    margin-bottom: var(--spacing-lg);
    flex-wrap: wrap;
    gap: var(--spacing-md);
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

/* Water Quality Section */
.water-quality-section {
    padding: var(--spacing-3xl) 0;
}

.quality-content {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xl);
}

.quality-overview {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.overview-title {
    font-size: 2rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
}

.overview-description {
    font-size: 1.125rem;
    color: var(--on-surface-variant);
    line-height: 1.8;
}

.quality-metrics {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: var(--spacing-xl);
}

.metric-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.metric-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.metric-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: var(--spacing-lg);
}

.metric-icon {
    width: 3rem;
    height: 3rem;
    background-color: var(--tertiary);
    color: var(--on-tertiary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.metric-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.metric-status {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.metric-status.good {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.metric-status.warning {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.metric-status.critical {
    background-color: var(--error);
    color: var(--on-error);
}

.metric-content {
    text-align: center;
}

.metric-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.metric-value {
    font-size: 2rem;
    font-weight: 800;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.metric-range {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    margin-bottom: var(--spacing-sm);
}

.metric-description {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    line-height: 1.5;
}

.quality-reports {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
}

.reports-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
    text-align: center;
}

.reports-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-lg);
}

.report-card {
    background-color: var(--surface-container);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.report-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.report-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: var(--spacing-md);
}

.report-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
}

.report-date {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.report-summary {
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

/* Connection Application Section */
.connection-application-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.application-content {
    display: grid;
    grid-template-columns: 1fr 2fr;
    gap: var(--spacing-2xl);
}

.application-info {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
}

.info-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
}

.process-steps {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-lg);
}

.step-item {
    display: flex;
    gap: var(--spacing-lg);
    align-items: flex-start;
}

.step-number {
    width: 2.5rem;
    height: 2.5rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    flex-shrink: 0;
}

.step-content {
    flex: 1;
}

.step-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.step-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
}

.application-form {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-2xl);
    border: 1px solid var(--outline-variant);
}

.form-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
    text-align: center;
}

/* Water Conservation Section */
.water-conservation-section {
    padding: var(--spacing-3xl) 0;
}

.conservation-content {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xl);
}

.conservation-overview {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.tips-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
    text-align: center;
}

.tips-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-lg);
}

.tip-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.tip-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.tip-icon {
    width: 3rem;
    height: 3rem;
    background-color: var(--tertiary);
    color: var(--on-tertiary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-md);
}

.tip-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.tip-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.tip-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
}

.programs-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
    text-align: center;
}

.programs-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-lg);
}

.program-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.program-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.program-icon {
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

.program-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.program-card h4 {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.program-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-md);
}

.program-stats {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xs);
    margin-bottom: var(--spacing-md);
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

/* Report Water Section */
.report-water-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.reporting-options {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.option-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 2px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
    cursor: pointer;
}

.option-card.urgent {
    border-color: var(--error);
    background: linear-gradient(135deg, var(--error-container) 0%, var(--surface-container-lowest) 100%);
}

.option-card.standard {
    border-color: var(--primary);
    background: linear-gradient(135deg, var(--primary-container) 0%, var(--surface-container-lowest) 100%);
}

.option-card.online {
    border-color: var(--tertiary);
    background: linear-gradient(135deg, var(--tertiary-container) 0%, var(--surface-container-lowest) 100%);
}

.option-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.option-icon {
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

.option-card.urgent .option-icon {
    background-color: var(--error);
    color: var(--on-error);
}

.option-card.standard .option-icon {
    background-color: var(--primary);
    color: var(--on-primary);
}

.option-card.online .option-icon {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.option-icon .material-symbols-outlined {
    font-size: 2rem;
}

.option-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.option-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.option-details {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
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
    
    .services-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .quality-metrics {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .reports-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .application-content {
        grid-template-columns: 1fr;
        gap: var(--spacing-xl);
    }
    
    .tips-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .programs-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .reporting-options {
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
    
    .service-card {
        padding: var(--spacing-lg);
    }
    
    .service-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .service-icon .material-symbols-outlined {
        font-size: 1.5rem;
    }
    
    .metric-card {
        padding: var(--spacing-lg);
    }
    
    .metric-icon {
        width: 2.5rem;
        height: 2.5rem;
    }
    
    .metric-icon .material-symbols-outlined {
        font-size: 1.25rem;
    }
    
    .application-form {
        padding: var(--spacing-lg);
    }
    
    .process-steps {
        gap: var(--spacing-md);
    }
    
    .step-item {
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: var(--spacing-md);
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
    
    .service-features {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .service-details {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
}
</style>

<script>
// Quick action functions
function openWaterServices() {
    document.getElementById('water-services').scrollIntoView({ behavior: 'smooth' });
}

function openWaterQuality() {
    document.getElementById('water-quality').scrollIntoView({ behavior: 'smooth' });
}

function openConnectionApplication() {
    document.getElementById('apply-connection').scrollIntoView({ behavior: 'smooth' });
}

function openWaterBilling() {
    alert('Water billing portal would open here. In production, this would show billing history, payment options, and account management.');
}

function openWaterConservation() {
    document.querySelector('.water-conservation-section').scrollIntoView({ behavior: 'smooth' });
}

function openWaterIssues() {
    document.querySelector('.report-water-section').scrollIntoView({ behavior: 'smooth' });
}

// Service actions
document.querySelectorAll('.service-card .btn-primary').forEach(button => {
    if (button.textContent.includes('Apply')) {
        button.addEventListener('click', function() {
            const serviceTitle = this.closest('.service-card').querySelector('.service-title').textContent;
            alert(`Applying for: "${serviceTitle}"`);
        });
    }
    
    if (button.textContent.includes('Find')) {
        button.addEventListener('click', function() {
            alert('Finding public water points near you... In production, this would show a map of water points.');
        });
    }
    
    if (button.textContent.includes('Request')) {
        button.addEventListener('click', function() {
            const serviceTitle = this.closest('.service-card').querySelector('.service-title').textContent;
            alert(`Requesting: "${serviceTitle}"`);
        });
    }
});

// Water connection form submission
document.getElementById('waterConnectionForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate required fields
    const fullName = document.querySelector('input[placeholder*="name"]').value;
    const phone = document.querySelector('input[placeholder*="phone"]').value;
    const idType = document.querySelector('select[required]').value;
    const idNumber = document.querySelectorAll('input[required]')[1].value;
    const customerType = document.querySelectorAll('select[required]')[1].value;
    const serviceAddress = document.querySelector('input[placeholder*="address"]').value;
    const area = document.querySelectorAll('select[required]')[2].value;
    const propertyType = document.querySelectorAll('select[required]')[3].value;
    const connectionType = document.querySelectorAll('select[required]')[4].value;
    const reason = document.querySelector('textarea[required]').value;
    const howHeard = document.querySelectorAll('select[required]')[5].value;
    
    if (!fullName || !phone || !idType || !idNumber || !customerType || !serviceAddress || !area || !propertyType || !connectionType || !reason || !howHeard) {
        alert('Please fill in all required fields.');
        return;
    }
    
    // Validate declaration
    const declaration = document.querySelector('input[name="declaration"]:checked');
    if (!declaration) {
        alert('Please accept the declaration to proceed with the application.');
        return;
    }
    
    alert('Water connection application submitted successfully! We will review your application and contact you within 3 business days for site assessment and next steps.');
    // In production, this would submit the application
});

// Conservation program actions
document.querySelectorAll('.program-card .btn-primary').forEach(button => {
    if (button.textContent.includes('Join')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('h4').textContent;
            alert(`Joining: "${programTitle}"`);
        });
    }
    
    if (button.textContent.includes('Request')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('h4').textContent;
            alert(`Requesting: "${programTitle}"`);
        });
    }
    
    if (button.textContent.includes('Apply')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('h4').textContent;
            alert(`Applying for: "${programTitle}"`);
        });
    }
});

// Water issue reporting functions
function reportUrgentIssue() {
    if (confirm('Call 119 for urgent water issues?')) {
        window.location.href = 'tel:119';
    }
}

function reportStandardIssue() {
    if (confirm('Call 121 for standard water issues?')) {
        window.location.href = 'tel:121';
    }
}

function openOnlineReporting() {
    alert('Online water issue reporting would open here. In production, this would show a detailed reporting form with photo upload capability.');
}

// Report viewing actions
document.querySelectorAll('.report-card .btn-outline').forEach(button => {
    if (button.textContent.includes('View')) {
        button.addEventListener('click', function() {
            const reportTitle = this.closest('.report-card').querySelector('.report-title').textContent;
            alert(`Viewing full report: "${reportTitle}"`);
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

// Auto-refresh water quality data
function refreshWaterQualityData() {
    // In production, this would fetch real-time water quality data
    console.log('Refreshing water quality data...');
    
    // Update timestamp
    const reportDate = document.querySelector('.report-date');
    if (reportDate) {
        const now = new Date();
        reportDate.textContent = now.toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric' });
    }
}

// Refresh water quality data every 5 minutes
setInterval(refreshWaterQualityData, 300000);

// Initialize water quality monitoring
refreshWaterQualityData();
</script>
