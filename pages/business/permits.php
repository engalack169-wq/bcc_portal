<?php
/**
 * Bamenda City Council E-Governance Platform
 * Business Permits Page
 */

// Set page metadata
$page_title = 'Business Permits | Bamenda City Council';
$page_description = 'Access business permit applications, licensing services, regulatory compliance, and business registration for operating in Bamenda.';
$page_keywords = 'business permits, business licenses, regulatory compliance, business registration, Bamenda business permits';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Business', 'url' => '../index.php'],
    ['title' => 'Permits', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero business-permits-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-business-support.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Business Permits</span>
            <h1 class="hero-title">Business Permits & Licensing</h1>
            <p class="hero-subtitle">
                Comprehensive business permit and licensing services including regulatory compliance, business registration, and permit management for operating legally in Bamenda.
            </p>
            <div class="hero-actions">
                <a href="#permit-types" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">description</span>
                    Permit Types
                </a>
                <a href="#apply-permit" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">how_to_reg</span>
                    Apply for Permit
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Permit Actions</h2>
            <p class="section-subtitle">Quick access to business permit and licensing services</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openPermitTypes()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <h3 class="action-title">Permit Types</h3>
                <p class="action-description">Explore different business permit types and requirements</p>
            </div>

            <div class="action-card" onclick="openPermitApplication()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">how_to_reg</span>
                </div>
                <h3 class="action-title">Apply for Permit</h3>
                <p class="action-description">Submit your business permit application online</p>
            </div>

            <div class="action-card" onclick="openPermitStatus()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">search</span>
                </div>
                <h3 class="action-title">Check Status</h3>
                <p class="action-description">Track your permit application status</p>
            </div>

            <div class="action-card" onclick="openPermitRenewal()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">refresh</span>
                </div>
                <h3 class="action-title">Renew Permit</h3>
                <p class="action-description">Renew your existing business permits</p>
            </div>

            <div class="action-card" onclick="openCompliance()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">gavel</span>
                </div>
                <h3 class="action-title">Compliance Check</h3>
                <p class="action-description">Verify business compliance and regulations</p>
            </div>

            <div class="action-card" onclick="openPermitGuides()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">menu_book</span>
                </div>
                <h3 class="action-title">Permit Guides</h3>
                <p class="action-description">Access guides and resources for permits</p>
            </div>
        </div>
    </div>
</section>

<!-- Permit Statistics -->
<section class="permit-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">3,456</div>
                    <div class="stat-label">Active Business Permits</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+234 this year</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">pending_actions</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">156</div>
                    <div class="stat-label">Pending Applications</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_down</span>
                        <span>-12% processing time</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">verified</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">89%</div>
                    <div class="stat-label">Compliance Rate</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+5% improvement</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">schedule</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">5 days</div>
                    <div class="stat-label">Average Processing Time</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_down</span>
                        <span>-2 days faster</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Permit Types -->
<section class="permit-types-section" id="permit-types">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Business Permit Types</h2>
            <p class="section-subtitle">Different types of business permits and their requirements</p>
        </div>

        <div class="types-grid">
            <!-- Trading Permit -->
            <div class="permit-card">
                <div class="permit-header">
                    <div class="permit-icon">
                        <span class="material-symbols-outlined">storefront</span>
                    </div>
                    <div class="permit-badge popular">Popular</div>
                </div>
                <div class="permit-content">
                    <h3 class="permit-title">Trading Permit</h3>
                    <p class="permit-description">Required for all retail businesses, shops, and trading activities within Bamenda.</p>
                    <div class="permit-requirements">
                        <h4 class="requirements-title">Requirements:</h4>
                        <ul class="requirements-list">
                            <li>Business registration certificate</li>
                            <li>Proof of address/lease agreement</li>
                            <li>Valid identification</li>
                            <li>Tax clearance certificate</li>
                        </ul>
                    </div>
                    <div class="permit-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Fee: ₣15,000 - ₣50,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Processing: 3-5 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">update</span>
                            <span>Renewal: Annual</span>
                        </div>
                    </div>
                    <div class="permit-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Manufacturing Permit -->
            <div class="permit-card">
                <div class="permit-header">
                    <div class="permit-icon">
                        <span class="material-symbols-outlined">factory</span>
                    </div>
                    <div class="permit-badge industrial">Industrial</div>
                </div>
                <div class="permit-content">
                    <h3 class="permit-title">Manufacturing Permit</h3>
                    <p class="permit-description">Required for manufacturing, processing, and industrial production facilities.</p>
                    <div class="permit-requirements">
                        <h4 class="requirements-title">Requirements:</h4>
                        <ul class="requirements-list">
                            <li>Environmental impact assessment</li>
                            <li>Health and safety compliance</li>
                            <li>Zoning approval</li>
                            <li>Waste management plan</li>
                        </ul>
                    </div>
                    <div class="permit-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Fee: ₣50,000 - ₣200,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Processing: 7-14 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">update</span>
                            <span>Renewal: Annual</span>
                        </div>
                    </div>
                    <div class="permit-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Service Permit -->
            <div class="permit-card">
                <div class="permit-header">
                    <div class="permit-icon">
                        <span class="material-symbols-outlined">support_agent</span>
                    </div>
                    <div class="permit-badge service">Service</div>
                </div>
                <div class="permit-content">
                    <h3 class="permit-title">Service Permit</h3>
                    <p class="permit-description">Required for service providers, consultants, and professional services.</p>
                    <div class="permit-requirements">
                        <h4 class="requirements-title">Requirements:</h4>
                        <ul class="requirements-list">
                            <li>Professional qualifications</li>
                            <li>Business registration</li>
                            <li>Office premises proof</li>
                            <li>Professional liability insurance</li>
                        </ul>
                    </div>
                    <div class="permit-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Fee: ₣20,000 - ₣75,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Processing: 5-7 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">update</span>
                            <span>Renewal: Annual</span>
                        </div>
                    </div>
                    <div class="permit-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Food Service Permit -->
            <div class="permit-card">
                <div class="permit-header">
                    <div class="permit-icon">
                        <span class="material-symbols-outlined">restaurant</span>
                    </div>
                    <div class="permit-badge food">Food Service</div>
                </div>
                <div class="permit-content">
                    <h3 class="permit-title">Food Service Permit</h3>
                    <p class="permit-description">Required for restaurants, cafes, food vendors, and food processing businesses.</p>
                    <div class="permit-requirements">
                        <h4 class="requirements-title">Requirements:</h4>
                        <ul class="requirements-list">
                            <li>Food handler's certificates</li>
                            <li>Health inspection certificate</li>
                            <li>Kitchen facility inspection</li>
                            <li>Food safety management plan</li>
                        </ul>
                    </div>
                    <div class="permit-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Fee: ₣25,000 - ₣100,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Processing: 5-10 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">update</span>
                            <span>Renewal: Annual</span>
                        </div>
                    </div>
                    <div class="permit-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Construction Permit -->
            <div class="permit-card">
                <div class="permit-header">
                    <div class="permit-icon">
                        <span class="material-symbols-outlined">construction</span>
                    </div>
                    <div class="permit-badge construction">Construction</div>
                </div>
                <div class="permit-content">
                    <h3 class="permit-title">Construction Permit</h3>
                    <p class="permit-description">Required for construction, renovation, and building development projects.</p>
                    <div class="permit-requirements">
                        <h4 class="requirements-title">Requirements:</h4>
                        <ul class="requirements-list">
                            <li>Architectural plans</li>
                            <li>Building permits from relevant authorities</li>
                            <li>Environmental clearance</li>
                            <li>Safety compliance certificates</li>
                        </ul>
                    </div>
                    <div class="permit-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Fee: ₣30,000 - ₣150,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Processing: 10-21 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">update</span>
                            <span>Renewal: Project-based</span>
                        </div>
                    </div>
                    <div class="permit-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Event Permit -->
            <div class="permit-card">
                <div class="permit-header">
                    <div class="permit-icon">
                        <span class="material-symbols-outlined">event</span>
                    </div>
                    <div class="permit-badge event">Event</div>
                </div>
                <div class="permit-content">
                    <h3 class="permit-title">Event Permit</h3>
                    <p class="permit-description">Required for organizing public events, concerts, festivals, and gatherings.</p>
                    <div class="permit-requirements">
                        <h4 class="requirements-title">Requirements:</h4>
                        <ul class="requirements-list">
                            <li>Event plan and schedule</li>
                            <li>Security arrangement details</li>
                            <li>Public liability insurance</li>
                            <li>Noise pollution control plan</li>
                        </ul>
                    </div>
                    <div class="permit-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Fee: ₣10,000 - ₣50,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Processing: 3-7 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">update</span>
                            <span>Renewal: Event-based</span>
                        </div>
                    </div>
                    <div class="permit-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Permit Application -->
<section class="permit-application-section" id="apply-permit">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Business Permit Application</h2>
            <p class="section-subtitle">Apply for your business permit online</p>
        </div>

        <div class="application-content">
            <div class="application-info">
                <h3 class="info-title">Application Process</h3>
                <div class="process-steps">
                    <div class="step-item">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h4 class="step-title">Complete Application Form</h4>
                            <p class="step-description">Fill out the permit application form with accurate business information</p>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h4 class="step-title">Submit Required Documents</h4>
                            <p class="step-description">Upload all necessary documents and supporting materials</p>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h4 class="step-title">Pay Application Fee</h4>
                            <p class="step-description">Pay the required application fee based on permit type</p>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h4 class="step-title">Review & Processing</h4>
                            <p class="step-description">Our team reviews your application and conducts necessary inspections</p>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-number">5</div>
                        <div class="step-content">
                            <h4 class="step-title">Permit Issuance</h4>
                            <p class="step-description">Receive your approved permit and compliance requirements</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="application-form">
                <h3 class="form-title">Business Permit Application Form</h3>
                <form id="permitApplicationForm">
                    <div class="form-section">
                        <h4 class="section-title">Business Information</h4>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Business Name *</label>
                                <input type="text" class="form-input" placeholder="Enter registered business name" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Business Registration Number *</label>
                                <input type="text" class="form-input" placeholder="Enter registration number" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Business Type *</label>
                                <select class="form-select" required>
                                    <option value="">Select business type</option>
                                    <option value="sole-proprietorship">Sole Proprietorship</option>
                                    <option value="partnership">Partnership</option>
                                    <option value="limited-company">Limited Company</option>
                                    <option value="cooperative">Cooperative</option>
                                    <option value="ngo">NGO/Association</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Industry Sector *</label>
                                <select class="form-select" required>
                                    <option value="">Select industry sector</option>
                                    <option value="retail">Retail Trade</option>
                                    <option value="manufacturing">Manufacturing</option>
                                    <option value="services">Professional Services</option>
                                    <option value="food">Food & Hospitality</option>
                                    <option value="construction">Construction</option>
                                    <option value="technology">Technology</option>
                                    <option value="agriculture">Agriculture</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Business Description *</label>
                            <textarea class="form-textarea" rows="3" placeholder="Describe your business activities and operations" required></textarea>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Number of Employees *</label>
                                <input type="number" class="form-input" placeholder="Enter number of employees" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Annual Revenue (XAF) *</label>
                                <input type="number" class="form-input" placeholder="Enter estimated annual revenue" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Permit Details</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Permit Type *</label>
                            <select class="form-select" required>
                                <option value="">Select permit type</option>
                                <option value="trading">Trading Permit</option>
                                <option value="manufacturing">Manufacturing Permit</option>
                                <option value="service">Service Permit</option>
                                <option value="food-service">Food Service Permit</option>
                                <option value="construction">Construction Permit</option>
                                <option value="event">Event Permit</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Permit Duration *</label>
                            <select class="form-select" required>
                                <option value="">Select duration</option>
                                <option value="1-year">1 Year</option>
                                <option value="2-years">2 Years</option>
                                <option value="3-years">3 Years</option>
                                <option value="5-years">5 Years</option>
                                <option value="custom">Custom Duration</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Business Address *</label>
                            <input type="text" class="form-input" placeholder="Enter complete business address" required>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Business Area *</label>
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
                                <label class="form-label">Premises Size (sq meters)</label>
                                <input type="number" class="form-input" placeholder="Enter premises size">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Business Start Date *</label>
                            <input type="date" class="form-input" required>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Owner/Representative Information</h4>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Full Name *</label>
                                <input type="text" class="form-input" placeholder="Enter full name" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Position in Business *</label>
                                <input type="text" class="form-input" placeholder="e.g., Owner, Manager, Director" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Phone Number *</label>
                                <input type="tel" class="form-input" placeholder="+237 233 000 000" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email Address *</label>
                                <input type="email" class="form-input" placeholder="your@email.com" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">ID Type *</label>
                                <select class="form-select" required>
                                    <option value="">Select ID type</option>
                                    <option value="national">National ID</option>
                                    <option value="passport">Passport</option>
                                    <option value="driver">Driver's License</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">ID Number *</label>
                                <input type="text" class="form-input" placeholder="Enter ID number" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Additional Information</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Previous Permits</label>
                            <select class="form-select">
                                <option value="">Select option</option>
                                <option value="first-time">First-time Applicant</option>
                                <option value="renewal">Permit Renewal</option>
                                <option value="transfer">Permit Transfer</option>
                                <option value="upgrade">Permit Upgrade</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Special Requirements</label>
                            <textarea class="form-textarea" rows="3" placeholder="Any special requirements or considerations for your permit"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">How did you hear about our permit services? *</label>
                            <select class="form-select" required>
                                <option value="">Select option</option>
                                <option value="website">City Council Website</option>
                                <option value="office">Permit Office</option>
                                <option value="referral">Business Referral</option>
                                <option value="advertisement">Advertisement</option>
                                <option value="social-media">Social Media</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Declaration *</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="declaration" required>
                                    <span class="checkmark"></span>
                                    I declare that all information provided is accurate and complete. I understand that false information may result in the rejection of this application and possible legal action. I agree to comply with all relevant regulations and permit conditions.
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

<!-- Permit Status Tracking -->
<section class="permit-status-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Permit Status Tracking</h2>
            <p class="section-subtitle">Track your permit application status online</p>
        </div>

        <div class="status-content">
            <div class="status-search">
                <h3 class="search-title">Check Application Status</h3>
                <form id="statusSearchForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Application ID *</label>
                            <input type="text" class="form-input" placeholder="Enter your application ID" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Phone Number *</label>
                            <input type="tel" class="form-input" placeholder="Enter registered phone number" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Check Status</button>
                </form>
            </div>

            <div class="status-stages">
                <h3 class="stages-title">Application Processing Stages</h3>
                <div class="stages-timeline">
                    <div class="stage-item completed">
                        <div class="stage-marker">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                        <div class="stage-content">
                            <h4 class="stage-title">Application Submitted</h4>
                            <p class="stage-description">Your application has been received and is being reviewed.</p>
                        </div>
                    </div>

                    <div class="stage-item completed">
                        <div class="stage-marker">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                        <div class="stage-content">
                            <h4 class="stage-title">Document Verification</h4>
                            <p class="stage-description">All submitted documents have been verified and approved.</p>
                        </div>
                    </div>

                    <div class="stage-item active">
                        <div class="stage-marker">
                            <span class="material-symbols-outlined">pending</span>
                        </div>
                        <div class="stage-content">
                            <h4 class="stage-title">Site Inspection</h4>
                            <p class="stage-description">Physical inspection of business premises is scheduled.</p>
                            <div class="stage-date">Scheduled: March 25, 2024</div>
                        </div>
                    </div>

                    <div class="stage-item">
                        <div class="stage-marker">
                            <span class="material-symbols-outlined">radio_button_unchecked</span>
                        </div>
                        <div class="stage-content">
                            <h4 class="stage-title">Final Review</h4>
                            <p class="stage-description">Final review and approval process.</p>
                        </div>
                    </div>

                    <div class="stage-item">
                        <div class="stage-marker">
                            <span class="material-symbols-outlined">radio_button_unchecked</span>
                        </div>
                        <div class="stage-content">
                            <h4 class="stage-title">Permit Issuance</h4>
                            <p class="stage-description">Permit will be issued and delivered.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Compliance & Regulations -->
<section class="compliance-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Compliance & Regulations</h2>
            <p class="section-subtitle">Business compliance requirements and regulatory information</p>
        </div>

        <div class="compliance-content">
            <div class="compliance-overview">
                <h3 class="overview-title">Business Compliance Requirements</h3>
                <p class="overview-description">
                    All businesses operating in Bamenda must comply with local regulations and maintain proper permits. 
                    Our compliance programs help businesses understand and meet their legal obligations.
                </p>
            </div>

            <div class="compliance-grid">
                <!-- Tax Compliance -->
                <div class="compliance-card">
                    <div class="compliance-icon">
                        <span class="material-symbols-outlined">receipt_long</span>
                    </div>
                    <h3 class="compliance-title">Tax Compliance</h3>
                    <p class="compliance-description">Requirements for business tax registration and regular tax filings.</p>
                    <div class="compliance-items">
                        <div class="item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Business tax registration</span>
                        </div>
                        <div class="item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Monthly/quarterly filings</span>
                        </div>
                        <div class="item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Tax clearance certificates</span>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-primary">Learn More</button>
                </div>

                <!-- Health & Safety -->
                <div class="compliance-card">
                    <div class="compliance-icon">
                        <span class="material-symbols-outlined">health_and_safety</span>
                    </div>
                    <h3 class="compliance-title">Health & Safety</h3>
                    <p class="compliance-description">Workplace health and safety requirements for employee protection.</p>
                    <div class="compliance-items">
                        <div class="item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Safety equipment standards</span>
                        </div>
                        <div class="item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Emergency procedures</span>
                        </div>
                        <div class="item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Regular safety inspections</span>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-primary">Learn More</button>
                </div>

                <!-- Environmental Compliance -->
                <div class="compliance-card">
                    <div class="compliance-icon">
                        <span class="material-symbols-outlined">eco</span>
                    </div>
                    <h3 class="compliance-title">Environmental Compliance</h3>
                    <p class="compliance-description">Environmental protection and waste management requirements.</p>
                    <div class="compliance-items">
                        <div class="item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Waste management plans</span>
                        </div>
                        <div class="item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Pollution control measures</span>
                        </div>
                        <div class="item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Environmental impact assessments</span>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-primary">Learn More</button>
                </div>

                <!-- Labor Compliance -->
                <div class="compliance-card">
                    <div class="compliance-icon">
                        <span class="material-symbols-outlined">groups</span>
                    </div>
                    <h3 class="compliance-title">Labor Compliance</h3>
                    <p class="compliance-description">Employment law compliance and worker rights protection.</p>
                    <div class="compliance-items">
                        <div class="item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Employment contracts</span>
                        </div>
                        <div class="item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Minimum wage compliance</span>
                        </div>
                        <div class="item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Working hour regulations</span>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-primary">Learn More</button>
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
            <p class="section-subtitle">Common questions about business permits and licensing</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How long does it take to process a business permit application?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Processing time varies by permit type. Trading permits typically take 3-5 days, manufacturing permits 7-14 days, and construction permits 10-21 days. Processing may take longer if additional inspections or documentation are required.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What documents are required for a business permit?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Basic requirements include business registration certificate, valid identification, proof of address, and tax clearance. Additional documents may be required based on permit type, such as environmental assessments for manufacturing or health certificates for food services.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How much do business permits cost?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Permit fees vary by type and business size. Trading permits range from ₣15,000-₣50,000, manufacturing permits ₣50,000-₣200,000, and service permits ₣20,000-₣75,000. Exact fees depend on business size, location, and specific requirements.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Do I need to renew my business permit annually?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Most business permits require annual renewal. Construction permits are project-based, and event permits are event-specific. Renewal reminders are sent 30 days before expiration, and late renewals may incur penalties.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Can I transfer my business permit to a new location?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, permits can be transferred to new locations within Bamenda. You'll need to submit a transfer application with the new address details and pay a transfer fee. The new location must comply with zoning and business requirements.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What happens if I operate without a proper permit?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Operating without proper permits is illegal and may result in fines, business closure, and legal action. It's important to obtain all necessary permits before starting operations to avoid penalties and ensure compliance.</p>
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
/* Business Permits Page Styles */
.business-permits-hero {
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

/* Permit Statistics Section */
.permit-stats-section {
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

/* Permit Types Section */
.permit-types-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.types-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.permit-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.permit-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.permit-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.permit-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.permit-icon .material-symbols-outlined {
    font-size: 2rem;
}

.permit-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.permit-badge.popular {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.permit-badge.industrial {
    background-color: var(--error);
    color: var(--on-error);
}

.permit-badge.service {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.permit-badge.food {
    background-color: var(--primary);
    color: var(--on-primary);
}

.permit-badge.construction {
    background-color: var(--outline-variant);
    color: var(--on-surface);
}

.permit-badge.event {
    background-color: var(--surface-variant);
    color: var(--on-surface-variant);
}

.permit-content {
    padding: var(--spacing-lg);
}

.permit-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.permit-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.permit-requirements {
    margin-bottom: var(--spacing-lg);
}

.requirements-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.requirements-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.requirements-list li {
    padding: var(--spacing-xs) 0;
    color: var(--on-surface-variant);
    position: relative;
    padding-left: var(--spacing-lg);
    line-height: 1.5;
}

.requirements-list li::before {
    content: '•';
    position: absolute;
    left: 0;
    color: var(--primary);
    font-weight: 700;
}

.permit-details {
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

.permit-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Permit Application Section */
.permit-application-section {
    padding: var(--spacing-3xl) 0;
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

/* Permit Status Section */
.permit-status-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.status-content {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xl);
}

.status-search {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    max-width: 600px;
    margin: 0 auto;
}

.search-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
    text-align: center;
}

.status-stages {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
}

.stages-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
    text-align: center;
}

.stages-timeline {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-lg);
}

.stage-item {
    display: flex;
    gap: var(--spacing-lg);
    align-items: flex-start;
}

.stage-marker {
    width: 2.5rem;
    height: 2.5rem;
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    transition: all 0.3s ease;
}

.stage-item.completed .stage-marker {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.stage-item.active .stage-marker {
    background-color: var(--primary);
    color: var(--on-primary);
}

.stage-item:not(.completed):not(.active) .stage-marker {
    background-color: var(--surface-container);
    color: var(--on-surface-variant);
}

.stage-marker .material-symbols-outlined {
    font-size: 1.25rem;
}

.stage-content {
    flex: 1;
}

.stage-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.stage-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-sm);
}

.stage-date {
    font-size: 0.875rem;
    color: var(--primary);
    font-weight: 600;
}

/* Compliance Section */
.compliance-section {
    padding: var(--spacing-3xl) 0;
}

.compliance-content {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xl);
}

.compliance-overview {
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

.compliance-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.compliance-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.compliance-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.compliance-icon {
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

.compliance-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.compliance-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.compliance-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.compliance-items {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

.item {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.item .material-symbols-outlined {
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
    background-color: var(--surface-container-low);
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
    
    .types-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .application-content {
        grid-template-columns: 1fr;
        gap: var(--spacing-xl);
    }
    
    .compliance-grid {
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
    
    .permit-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
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
    
    .permit-actions {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .permit-actions .btn {
        width: 100%;
    }
    
    .stages-timeline {
        gap: var(--spacing-md);
    }
    
    .stage-item {
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: var(--spacing-md);
    }
}
</style>

<script>
// Quick action functions
function openPermitTypes() {
    document.getElementById('permit-types').scrollIntoView({ behavior: 'smooth' });
}

function openPermitApplication() {
    document.getElementById('apply-permit').scrollIntoView({ behavior: 'smooth' });
}

function openPermitStatus() {
    document.querySelector('.permit-status-section').scrollIntoView({ behavior: 'smooth' });
}

function openPermitRenewal() {
    alert('Permit renewal portal would open here. In production, this would show renewal options and requirements.');
}

function openCompliance() {
    document.querySelector('.compliance-section').scrollIntoView({ behavior: 'smooth' });
}

function openPermitGuides() {
    alert('Permit guides and resources would open here. In production, this would show detailed guides and documentation.');
}

// Permit type actions
document.querySelectorAll('.permit-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Apply')) {
        button.addEventListener('click', function() {
            const permitTitle = this.closest('.permit-card').querySelector('.permit-title').textContent;
            alert(`Applying for: "${permitTitle}"`);
        });
    }
});

document.querySelectorAll('.permit-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Details')) {
        button.addEventListener('click', function() {
            const permitTitle = this.closest('.permit-card').querySelector('.permit-title').textContent;
            alert(`Viewing details for: "${permitTitle}"`);
        });
    }
});

// Permit application form submission
document.getElementById('permitApplicationForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate required fields
    const businessName = document.querySelector('input[placeholder*="business name"]').value;
    const registrationNumber = document.querySelector('input[placeholder*="registration number"]').value;
    const businessType = document.querySelector('select[required]').value;
    const industrySector = document.querySelectorAll('select[required]')[1].value;
    const businessDescription = document.querySelector('textarea[required]').value;
    const employees = document.querySelector('input[placeholder*="employees"]').value;
    const revenue = document.querySelector('input[placeholder*="revenue"]').value;
    const permitType = document.querySelectorAll('select[required]')[2].value;
    const permitDuration = document.querySelectorAll('select[required]')[3].value;
    const businessAddress = document.querySelector('input[placeholder*="business address"]').value;
    const businessArea = document.querySelectorAll('select[required]')[4].value;
    const startDate = document.querySelector('input[type="date"]').value;
    const fullName = document.querySelectorAll('input[placeholder*="name"]')[1].value;
    const position = document.querySelectorAll('input[placeholder*="name"]')[2].value;
    const phone = document.querySelector('input[placeholder*="phone"]').value;
    const email = document.querySelector('input[placeholder*="email"]').value;
    const idType = document.querySelectorAll('select[required]')[5].value;
    const idNumber = document.querySelectorAll('input[placeholder*="ID"]')[0].value;
    const howHeard = document.querySelectorAll('select[required]')[6].value;
    
    if (!businessName || !registrationNumber || !businessType || !industrySector || !businessDescription || !employees || !revenue || !permitType || !permitDuration || !businessAddress || !businessArea || !startDate || !fullName || !position || !phone || !email || !idType || !idNumber || !howHeard) {
        alert('Please fill in all required fields.');
        return;
    }
    
    // Validate declaration
    const declaration = document.querySelector('input[name="declaration"]:checked');
    if (!declaration) {
        alert('Please accept the declaration to proceed with the application.');
        return;
    }
    
    alert('Permit application submitted successfully! We will review your application and contact you within 5 business days for next steps and inspection scheduling.');
    // In production, this would submit the application
});

// Status search form submission
document.getElementById('statusSearchForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const applicationId = document.querySelector('#statusSearchForm input[placeholder*="application ID"]').value;
    const phoneNumber = document.querySelector('#statusSearchForm input[placeholder*="phone number"]').value;
    
    if (!applicationId || !phoneNumber) {
        alert('Please fill in both Application ID and Phone Number.');
        return;
    }
    
    alert(`Checking status for Application ID: ${applicationId}. In production, this would display the current status and processing timeline.`);
    // In production, this would fetch and display the application status
});

// Compliance actions
document.querySelectorAll('.compliance-card .btn-primary').forEach(button => {
    if (button.textContent.includes('Learn')) {
        button.addEventListener('click', function() {
            const complianceTitle = this.closest('.compliance-card').querySelector('.compliance-title').textContent;
            alert(`Learning more about: "${complianceTitle}"`);
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

// Auto-refresh permit statistics
function refreshPermitStats() {
    // In production, this would fetch real-time permit statistics
    console.log('Refreshing permit statistics...');
}

// Refresh statistics every 60 seconds
setInterval(refreshPermitStats, 60000);
</script>
