<?php
/**
 * Bamenda City Council E-Governance Platform
 * Public Utilities Services Page
 */

// Set page metadata
$page_title = 'Public Utilities Services | Bamenda City Council';
$page_description = 'Access public utility services including electricity, water, gas, internet, and waste management for Bamenda residents and businesses.';
$page_keywords = 'public utilities, electricity, water supply, internet services, waste management, Bamenda utilities';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Public Services', 'url' => '../index.php'],
    ['title' => 'Utilities', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero public-utilities-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-public-services.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Public Utilities</span>
            <h1 class="hero-title">Public Utilities Services</h1>
            <p class="hero-subtitle">
                Comprehensive public utility services including electricity, water supply, internet connectivity, gas services, and waste management to ensure quality of life and support economic development in Bamenda.
            </p>
            <div class="hero-actions">
                <a href="#utility-services" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">power</span>
                    Utility Services
                </a>
                <a href="#service-requests" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">support_agent</span>
                    Service Requests
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Utility Actions</h2>
            <p class="section-subtitle">Quick access to public utility services</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openElectricity()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">bolt</span>
                </div>
                <h3 class="action-title">Electricity</h3>
                <p class="action-description">Electricity connection and billing services</p>
            </div>

            <div class="action-card" onclick="openWaterSupply()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">water_drop</span>
                </div>
                <h3 class="action-title">Water Supply</h3>
                <p class="action-description">Water connection and supply services</p>
            </div>

            <div class="action-card" onclick="openInternet()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">wifi</span>
                </div>
                <h3 class="action-title">Internet Services</h3>
                <p class="action-description">Internet and connectivity services</p>
            </div>

            <div class="action-card" onclick="openGas()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">local_fire_department</span>
                </div>
                <h3 class="action-title">Gas Services</h3>
                <p class="action-description">Gas connection and supply services</p>
            </div>

            <div class="action-card" onclick="openWasteManagement()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">delete</span>
                </div>
                <h3 class="action-title">Waste Management</h3>
                <p class="action-description">Waste collection and disposal services</p>
            </div>

            <div class="action-card" onclick="openBilling()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">receipt_long</span>
                </div>
                <h3 class="action-title">Billing & Payments</h3>
                <p class="action-description">Utility billing and payment services</p>
            </div>
        </div>
    </div>
</section>

<!-- Utilities Statistics -->
<section class="utilities-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">home</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">45,678</div>
                    <div class="stat-label">Connected Households</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+1,234 this month</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">power</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">98.5%</div>
                    <div class="stat-label">Service Reliability</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+2.3% improvement</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">support_agent</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">2,345</div>
                    <div class="stat-label">Monthly Service Requests</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_down</span>
                        <span>-156 requests</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">verified</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">94%</div>
                    <div class="stat-label">Customer Satisfaction</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+5% improvement</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Utility Services -->
<section class="utility-services-section" id="utility-services">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Utility Services Overview</h2>
            <p class="section-subtitle">Comprehensive utility services for residents and businesses</p>
        </div>

        <div class="services-grid">
            <!-- Electricity Service -->
            <div class="service-card">
                <div class="service-header">
                    <div class="service-icon">
                        <span class="material-symbols-outlined">bolt</span>
                    </div>
                    <div class="service-badge active">Active</div>
                </div>
                <div class="service-content">
                    <h3 class="service-title">Electricity Services</h3>
                    <p class="service-description">Reliable electricity supply, new connections, meter installation, and maintenance services for residential and commercial customers.</p>
                    <div class="service-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>New electricity connections</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Meter installation and reading</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Power outage reporting</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Electrical maintenance services</span>
                        </div>
                    </div>
                    <div class="service-stats">
                        <div class="stat-item">
                            <span class="stat-number">38,456</span>
                            <span class="stat-label">Connected Customers</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">99.2%</span>
                            <span class="stat-label">Uptime</span>
                        </div>
                    </div>
                    <div class="service-actions">
                        <button class="btn btn-sm btn-primary">Request Connection</button>
                        <button class="btn btn-sm btn-outline">Report Outage</button>
                    </div>
                </div>
            </div>

            <!-- Water Supply Service -->
            <div class="service-card">
                <div class="service-header">
                    <div class="service-icon">
                        <span class="material-symbols-outlined">water_drop</span>
                    </div>
                    <div class="service-badge active">Active</div>
                </div>
                <div class="service-content">
                    <h3 class="service-title">Water Supply Services</h3>
                    <p class="service-description">Clean and safe water supply including new connections, water quality testing, pipeline maintenance, and water conservation programs.</p>
                    <div class="service-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>New water connections</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Water quality monitoring</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Pipeline maintenance</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Leak detection and repair</span>
                        </div>
                    </div>
                    <div class="service-stats">
                        <div class="stat-item">
                            <span class="stat-number">42,123</span>
                            <span class="stat-label">Connected Customers</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">97.8%</span>
                            <span class="stat-label">Service Coverage</span>
                        </div>
                    </div>
                    <div class="service-actions">
                        <button class="btn btn-sm btn-primary">Request Connection</button>
                        <button class="btn btn-sm btn-outline">Report Issue</button>
                    </div>
                </div>
            </div>

            <!-- Internet Services -->
            <div class="service-card">
                <div class="service-header">
                    <div class="service-icon">
                        <span class="material-symbols-outlined">wifi</span>
                    </div>
                    <div class="service-badge expanding">Expanding</div>
                </div>
                <div class="service-content">
                    <h3 class="service-title">Internet & Connectivity</h3>
                    <p class="service-description">High-speed internet services including fiber optic connections, broadband services, and public Wi-Fi hotspots throughout Bamenda.</p>
                    <div class="service-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Fiber optic connections</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>High-speed broadband</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Public Wi-Fi hotspots</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Network maintenance</span>
                        </div>
                    </div>
                    <div class="service-stats">
                        <div class="stat-item">
                            <span class="stat-number">15,678</span>
                            <span class="stat-label">Connected Users</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">85%</span>
                            <span class="stat-label">City Coverage</span>
                        </div>
                    </div>
                    <div class="service-actions">
                        <button class="btn btn-sm btn-primary">Get Connected</button>
                        <button class="btn btn-sm btn-outline">Check Coverage</button>
                    </div>
                </div>
            </div>

            <!-- Gas Services -->
            <div class="service-card">
                <div class="service-header">
                    <div class="service-icon">
                        <span class="material-symbols-outlined">local_fire_department</span>
                    </div>
                    <div class="service-badge new">New</div>
                </div>
                <div class="service-content">
                    <h3 class="service-title">Gas Supply Services</h3>
                    <p class="service-description">Safe and reliable gas supply for cooking and heating including new connections, safety inspections, and emergency response services.</p>
                    <div class="service-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Domestic gas connections</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Safety inspections</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Gas leak detection</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Emergency gas services</span>
                        </div>
                    </div>
                    <div class="service-stats">
                        <div class="stat-item">
                            <span class="stat-number">8,234</span>
                            <span class="stat-label">Connected Customers</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">45%</span>
                            <span class="stat-label">Service Coverage</span>
                        </div>
                    </div>
                    <div class="service-actions">
                        <button class="btn btn-sm btn-primary">Request Connection</button>
                        <button class="btn btn-sm btn-outline">Safety Check</button>
                    </div>
                </div>
            </div>

            <!-- Waste Management -->
            <div class="service-card">
                <div class="service-header">
                    <div class="service-icon">
                        <span class="material-symbols-outlined">delete</span>
                    </div>
                    <div class="service-badge active">Active</div>
                </div>
                <div class="service-content">
                    <h3 class="service-title">Waste Management Services</h3>
                    <p class="service-description">Comprehensive waste collection, recycling programs, and environmental sanitation services for clean and healthy communities.</p>
                    <div class="service-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Residential waste collection</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Commercial waste services</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Recycling programs</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Environmental sanitation</span>
                        </div>
                    </div>
                    <div class="service-stats">
                        <div class="stat-item">
                            <span class="stat-number">156 tons</span>
                            <span class="stat-label">Daily Collection</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">78%</span>
                            <span class="stat-label">Recycling Rate</span>
                        </div>
                    </div>
                    <div class="service-actions">
                        <button class="btn btn-sm btn-primary">Schedule Collection</button>
                        <button class="btn btn-sm btn-outline">Report Issue</button>
                    </div>
                </div>
            </div>

            <!-- Street Lighting -->
            <div class="service-card">
                <div class="service-header">
                    <div class="service-icon">
                        <span class="material-symbols-outlined">lightbulb</span>
                    </div>
                    <div class="service-badge active">Active</div>
                </div>
                <div class="service-content">
                    <h3 class="service-title">Street Lighting Services</h3>
                    <p class="service-description">Installation and maintenance of street lighting systems to ensure safety and security in public spaces throughout Bamenda.</p>
                    <div class="service-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Street light installation</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Regular maintenance</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Bulb replacement</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Energy-efficient upgrades</span>
                        </div>
                    </div>
                    <div class="service-stats">
                        <div class="stat-item">
                            <span class="stat-number">12,456</span>
                            <span class="stat-label">Street Lights</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">98%</span>
                            <span class="stat-label">Operational Rate</span>
                        </div>
                    </div>
                    <div class="service-actions">
                        <button class="btn btn-sm btn-primary">Report Outage</button>
                        <button class="btn btn-sm btn-outline">Request Installation</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Requests -->
<section class="service-requests-section" id="service-requests">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Service Requests</h2>
            <p class="section-subtitle">Submit and track utility service requests online</p>
        </div>

        <div class="requests-content">
            <div class="request-form">
                <h3 class="form-title">Utility Service Request</h3>
                <form id="serviceRequestForm">
                    <div class="form-section">
                        <h4 class="section-title">Request Information</h4>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Service Type *</label>
                                <select class="form-select" required>
                                    <option value="">Select service type</option>
                                    <option value="electricity">Electricity</option>
                                    <option value="water">Water Supply</option>
                                    <option value="internet">Internet Services</option>
                                    <option value="gas">Gas Supply</option>
                                    <option value="waste">Waste Management</option>
                                    <option value="street-lighting">Street Lighting</option>
                                    <option value="billing">Billing & Payment</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Request Type *</label>
                                <select class="form-select" required>
                                    <option value="">Select request type</option>
                                    <option value="new-connection">New Connection</option>
                                    <option value="disconnection">Disconnection</option>
                                    <option value="maintenance">Maintenance/Repair</option>
                                    <option value="complaint">Service Complaint</option>
                                    <option value="emergency">Emergency Service</option>
                                    <option value="billing-issue">Billing Issue</option>
                                    <option value="information">General Information</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Request Details *</label>
                            <textarea class="form-textarea" rows="4" placeholder="Please provide detailed information about your request" required></textarea>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Priority Level *</label>
                                <select class="form-select" required>
                                    <option value="">Select priority</option>
                                    <option value="emergency">Emergency</option>
                                    <option value="high">High</option>
                                    <option value="medium">Medium</option>
                                    <option value="low">Low</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Preferred Date</label>
                                <input type="date" class="form-input">
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Contact Information</h4>
                        
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
                                <label class="form-label">Account Number (if applicable)</label>
                                <input type="text" class="form-input" placeholder="Utility account number">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Service Address *</label>
                            <input type="text" class="form-input" placeholder="Enter service address" required>
                        </div>

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
                                <option value="up-station">Up Station</option>
                                <option value="down-station">Down Station</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Additional Information</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Previous Request Reference (if applicable)</label>
                            <input type="text" class="form-input" placeholder="Reference number of previous request">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Attachments</label>
                            <div class="file-upload">
                                <input type="file" id="requestUpload" accept=".pdf,.jpg,.jpeg,.png" multiple>
                                <label for="requestUpload" class="file-upload-label">
                                    <span class="material-symbols-outlined">upload_file</span>
                                    <span>Upload supporting documents</span>
                                    <small>Photos, documents, or other relevant files (Max 5MB per file)</small>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Preferred Contact Method *</label>
                            <select class="form-select" required>
                                <option value="">Select contact method</option>
                                <option value="phone">Phone Call</option>
                                <option value="sms">SMS Message</option>
                                <option value="email">Email</option>
                                <option value="whatsapp">WhatsApp</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">How did you hear about our services? *</label>
                            <select class="form-select" required>
                                <option value="">Select option</option>
                                <option value="website">City Council Website</option>
                                <option value="social-media">Social Media</option>
                                <option value="friend">Friend/Neighbor</option>
                                <option value="advertisement">Advertisement</option>
                                <option value="office">Utility Office</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="reset" class="btn btn-outline">Reset</button>
                        <button type="submit" class="btn btn-primary">Submit Request</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Billing & Payments -->
<section class="billing-payments-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Billing & Payments</h2>
            <p class="section-subtitle">Manage utility bills and make payments online</p>
        </div>

        <div class="billing-content">
            <div class="billing-overview">
                <h3 class="overview-title">Convenient Billing Solutions</h3>
                <p class="overview-description">
                    Access your utility bills online, view consumption history, and make secure payments through multiple channels including mobile money, bank transfers, and online payment platforms.
                </p>
            </div>

            <div class="billing-options">
                <!-- Online Billing -->
                <div class="billing-card">
                    <div class="billing-icon">
                        <span class="material-symbols-outlined">computer</span>
                    </div>
                    <h3 class="billing-title">Online Billing Portal</h3>
                    <p class="billing-description">Access your bills, view consumption history, and manage your account online.</p>
                    <div class="billing-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>View current and historical bills</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Monitor consumption patterns</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Download billing statements</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Set up automatic payments</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">Access Portal</button>
                </div>

                <!-- Mobile Payments -->
                <div class="billing-card">
                    <div class="billing-icon">
                        <span class="material-symbols-outlined">smartphone</span>
                    </div>
                    <h3 class="billing-title">Mobile Money Payments</h3>
                    <p class="billing-description">Pay your utility bills conveniently using mobile money services.</p>
                    <div class="billing-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>MTN Mobile Money</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Orange Money</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Express Union</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Instant payment confirmation</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">Pay Now</button>
                </div>

                <!-- Bank Payments -->
                <div class="billing-card">
                    <div class="billing-icon">
                        <span class="material-symbols-outlined">account_balance</span>
                    </div>
                    <h3 class="billing-title">Bank Transfer Payments</h3>
                    <p class="billing-description">Make payments through bank transfers and direct deposit options.</p>
                    <div class="billing-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Bank transfers</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Direct deposit</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Standing orders</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Electronic fund transfer</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">View Details</button>
                </div>

                <!-- Payment Centers -->
                <div class="billing-card">
                    <div class="billing-icon">
                        <span class="material-symbols-outlined">storefront</span>
                    </div>
                    <h3 class="billing-title">Payment Centers</h3>
                    <p class="billing-description">Visit our payment centers for cash payments and assistance.</p>
                    <div class="billing-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>City Council main office</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Utility service centers</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Authorized payment agents</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Customer service assistance</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">Find Locations</button>
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
            <p class="section-subtitle">Common questions about public utility services</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How do I apply for a new utility connection?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>To apply for a new utility connection, submit a service request through our online portal or visit our service center. You'll need to provide identification, proof of address, and complete the application form. Processing time varies by service type.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What are the connection fees for utilities?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Connection fees vary by utility type and connection requirements. Electricity connections start from ₣25,000, water connections from ₣15,000, and internet connections from ₣20,000. Commercial connections have different pricing structures.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How can I report a utility emergency?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>For utility emergencies, call our 24/7 emergency hotline at 119 for immediate assistance. You can also submit an emergency service request online, but phone calls are recommended for urgent situations like gas leaks, power outages, or water main breaks.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How often are utility meters read?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Utility meters are read monthly for billing purposes. Smart meters are automatically read remotely, while traditional meters require manual reading. You can also submit meter readings online if needed.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What payment methods are accepted?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>We accept multiple payment methods including mobile money (MTN, Orange), bank transfers, online payments, cash at payment centers, and automatic bank transfers. Payment due dates are clearly indicated on your bills.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How do I report a service complaint?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Submit service complaints through our online portal, call our customer service hotline, or visit any service center. We track all complaints and provide response time estimates based on priority level.</p>
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
/* Public Utilities Page Styles */
.public-utilities-hero {
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

/* Utilities Statistics Section */
.utilities-stats-section {
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
    background-color: var(--tertiary);
    color: var(--on-tertiary);
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
    color: var(--tertiary);
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

/* Utility Services Section */
.utility-services-section {
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
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.service-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.service-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.service-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--tertiary);
    color: var(--on-tertiary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.service-icon .material-symbols-outlined {
    font-size: 2rem;
}

.service-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.service-badge.active {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.service-badge.expanding {
    background-color: var(--primary);
    color: var(--on-primary);
}

.service-badge.new {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.service-content {
    padding: var(--spacing-lg);
}

.service-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--tertiary);
    margin-bottom: var(--spacing-md);
}

.service-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.service-features {
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
    color: var(--tertiary);
}

.service-stats {
    display: flex;
    justify-content: space-around;
    margin-bottom: var(--spacing-lg);
    padding: var(--spacing-md);
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
}

.stat-item {
    text-align: center;
}

.stat-number {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--tertiary);
    display: block;
    margin-bottom: var(--spacing-xs);
}

.stat-label {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
    text-transform: uppercase;
}

.service-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Service Requests Section */
.service-requests-section {
    padding: var(--spacing-3xl) 0;
}

.requests-content {
    display: flex;
    justify-content: center;
}

.request-form {
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
    color: var(--tertiary);
    margin-bottom: var(--spacing-lg);
    text-align: center;
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
    border-color: var(--tertiary);
    box-shadow: 0 0 0 2px var(--tertiary-container);
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

.file-upload {
    position: relative;
    display: inline-block;
    width: 100%;
}

.file-upload input[type="file"] {
    display: none;
}

.file-upload-label {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: var(--spacing-sm);
    padding: var(--spacing-lg);
    border: 2px dashed var(--outline-variant);
    border-radius: var(--radius-lg);
    background-color: var(--surface-container);
    cursor: pointer;
    transition: all 0.2s ease;
}

.file-upload-label:hover {
    border-color: var(--tertiary);
    background-color: var(--tertiary-container);
}

.file-upload-label .material-symbols-outlined {
    font-size: 2rem;
    color: var(--tertiary);
}

.file-upload-label span {
    color: var(--on-surface);
}

.file-upload-label small {
    color: var(--on-surface-variant);
}

.form-actions {
    display: flex;
    gap: var(--spacing-lg);
    justify-content: center;
    margin-top: var(--spacing-xl);
}

/* Billing & Payments Section */
.billing-payments-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.billing-content {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xl);
}

.billing-overview {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.overview-title {
    font-size: 2rem;
    font-weight: 700;
    color: var(--tertiary);
    margin-bottom: var(--spacing-lg);
}

.overview-description {
    font-size: 1.125rem;
    color: var(--on-surface-variant);
    line-height: 1.8;
}

.billing-options {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: var(--spacing-xl);
}

.billing-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.billing-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.billing-icon {
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

.billing-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.billing-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--tertiary);
    margin-bottom: var(--spacing-sm);
}

.billing-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.billing-features {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

.billing-features .feature-item {
    justify-content: center;
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
    
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: var(--spacing-md);
    }
    
    .services-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .billing-options {
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
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .request-form {
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
    
    .service-actions {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .service-actions .btn {
        width: 100%;
    }
}
</style>

<script>
// Quick action functions
function openElectricity() {
    document.getElementById('utility-services').scrollIntoView({ behavior: 'smooth' });
}

function openWaterSupply() {
    document.getElementById('utility-services').scrollIntoView({ behavior: 'smooth' });
}

function openInternet() {
    document.getElementById('utility-services').scrollIntoView({ behavior: 'smooth' });
}

function openGas() {
    document.getElementById('utility-services').scrollIntoView({ behavior: 'smooth' });
}

function openWasteManagement() {
    document.getElementById('utility-services').scrollIntoView({ behavior: 'smooth' });
}

function openBilling() {
    document.querySelector('.billing-payments-section').scrollIntoView({ behavior: 'smooth' });
}

// Service actions
document.querySelectorAll('.service-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Request')) {
        button.addEventListener('click', function() {
            const serviceTitle = this.closest('.service-card').querySelector('.service-title').textContent;
            alert(`Requesting connection for: "${serviceTitle}"`);
        });
    }
    
    if (button.textContent.includes('Get')) {
        button.addEventListener('click', function() {
            const serviceTitle = this.closest('.service-card').querySelector('.service-title').textContent;
            alert(`Getting connected to: "${serviceTitle}"`);
        });
    }
    
    if (button.textContent.includes('Schedule')) {
        button.addEventListener('click', function() {
            const serviceTitle = this.closest('.service-card').querySelector('.service-title').textContent;
            alert(`Scheduling collection for: "${serviceTitle}"`);
        });
    }
    
    if (button.textContent.includes('Pay')) {
        button.addEventListener('click', function() {
            alert('Payment portal would open here. In production, this would show payment options and secure payment processing.');
        });
    }
});

document.querySelectorAll('.service-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Report')) {
        button.addEventListener('click', function() {
            const serviceTitle = this.closest('.service-card').querySelector('.service-title').textContent;
            alert(`Reporting issue with: "${serviceTitle}"`);
        });
    }
    
    if (button.textContent.includes('Check')) {
        button.addEventListener('click', this() {
            alert('Coverage checker would open here. In production, this would show an interactive map with service coverage areas.');
        });
    }
    
    if (button.textContent.includes('Safety')) {
        button.addEventListener('click', function() {
            alert('Safety check appointment would be scheduled here. In production, this would show available appointment times and booking options.');
        });
    }
    
    if (button.textContent.includes('Request')) {
        button.addEventListener('click', function() {
            const serviceTitle = this.closest('.service-card').querySelector('.service-title').textContent;
            alert(`Requesting installation for: "${serviceTitle}"`);
        });
    }
});

// Service request form submission
document.getElementById('serviceRequestForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate required fields
    const serviceType = document.querySelector('select[required]').value;
    const requestType = document.querySelectorAll('select[required]')[1].value;
    const requestDetails = document.querySelector('textarea[required]').value;
    const priority = document.querySelectorAll('select[required]')[2].value;
    const fullName = document.querySelector('input[placeholder*="name"]').value;
    const phone = document.querySelector('input[placeholder*="phone"]').value;
    const serviceAddress = document.querySelector('input[placeholder*="address"]').value;
    const area = document.querySelectorAll('select[required]')[3].value;
    const contactMethod = document.querySelectorAll('select[required]')[4].value;
    const howHeard = document.querySelectorAll('select[required]')[5].value;
    
    if (!serviceType || !requestType || !requestDetails || !priority || !fullName || !phone || !serviceAddress || !area || !contactMethod || !howHeard) {
        alert('Please fill in all required fields.');
        return;
    }
    
    // Validate phone
    const phoneRegex = /^\+237\s\d{3}\s\d{3}\s\d{3}$/;
    if (!phoneRegex.test(phone)) {
        alert('Please enter a valid phone number in the format: +237 233 000 000');
        return;
    }
    
    alert('Service request submitted successfully! We will process your request and contact you within 24 hours with updates. Your reference number will be sent to you via your preferred contact method.');
    // In production, this would submit the service request
});

// Billing actions
document.querySelectorAll('.billing-card .btn-primary').forEach(button => {
    if (button.textContent.includes('Access')) {
        button.addEventListener('click', function() {
            alert('Online billing portal would open here. In production, this would redirect to the secure billing portal with login authentication.');
        });
    }
    
    if (button.textContent.includes('Pay')) {
        button.addEventListener('click', function() {
            alert('Mobile money payment interface would open here. In production, this would show payment options and secure processing.');
        });
    }
    
    if (button.textContent.includes('View')) {
        button.addEventListener('click', function() {
            alert('Bank payment details would be displayed here. In production, this would show bank account information and transfer instructions.');
        });
    }
    
    if (button.textContent.includes('Find')) {
        button.addEventListener('click', this() {
            alert('Payment center locator would open here. In production, this would show an interactive map with all payment center locations and operating hours.');
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

// Auto-refresh utilities statistics
function refreshUtilitiesStats() {
    // In production, this would fetch real-time utilities statistics
    console.log('Refreshing public utilities statistics...');
    
    // Simulate connected households updates
    const householdCountElement = document.querySelector('.stat-number');
    if (householdCountElement && householdCountElement.textContent.includes(',')) {
        // Simulate real-time connections
        const currentCount = parseInt(householdCountElement.textContent.replace(',', ''));
        const increment = Math.floor(Math.random() * 5) + 1;
        const newCount = currentCount + increment;
        householdCountElement.textContent = newCount.toLocaleString();
    }
}

// Refresh statistics every 60 seconds
setInterval(refreshUtilitiesStats, 60000);
</script>
