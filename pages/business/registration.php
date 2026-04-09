<?php
/**
 * Bamenda City Council E-Governance Platform
 * Business Registration Page
 */

// Set page metadata
$page_title = 'Business Registration | Bamenda City Council';
$page_description = 'Register your business, obtain business licenses, and access comprehensive business registration services for operating legally in Bamenda.';
$page_keywords = 'business registration, business licenses, company registration, Bamenda business services';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Business', 'url' => '../index.php'],
    ['title' => 'Registration', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero business-registration-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-business-support.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary badge-xl">Business Registration</span>
            <h1 class="hero-title">Business Registration Services</h1>
            <p class="hero-subtitle">
                Complete business registration solution including company formation, licensing, tax registration, and compliance services for establishing and operating businesses in Bamenda.
            </p>
            <div class="hero-actions">
                <a href="#registration-types" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">business</span>
                    Registration Types
                </a>
                <a href="#register-business" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">how_to_reg</span>
                    Register Business
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Registration Actions</h2>
            <p class="section-subtitle">Quick access to business registration and licensing services</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openRegistrationTypes()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">business</span>
                </div>
                <h3 class="action-title">Registration Types</h3>
                <p class="action-description">Explore different business registration options</p>
            </div>

            <div class="action-card" onclick="openBusinessRegistration()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">how_to_reg</span>
                </div>
                <h3 class="action-title">Register Business</h3>
                <p class="action-description">Start your business registration process</p>
            </div>

            <div class="action-card" onclick="openLicenseApplication()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <h3 class="action-title">Business License</h3>
                <p class="action-description">Apply for business operating licenses</p>
            </div>

            <div class="action-card" onclick="openTaxRegistration()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">receipt_long</span>
                </div>
                <h3 class="action-title">Tax Registration</h3>
                <p class="action-description">Register for tax identification and compliance</p>
            </div>

            <div class="action-card" onclick="openComplianceServices()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">gavel</span>
                </div>
                <h3 class="action-title">Compliance Services</h3>
                <p class="action-description">Ensure business compliance and regulations</p>
            </div>

            <div class="action-card" onclick="openBusinessSupport()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">support_agent</span>
                </div>
                <h3 class="action-title">Business Support</h3>
                <p class="action-description">Get guidance and support for your business</p>
            </div>
        </div>
    </div>
</section>

<!-- Business Registration Statistics -->
<section class="registration-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">business</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">2,456</div>
                    <div class="stat-label">Registered Businesses</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+345 this year</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">pending_actions</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">89</div>
                    <div class="stat-label">Pending Applications</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_down</span>
                        <span>-15% processing time</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">verified</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">95%</div>
                    <div class="stat-label">Approval Rate</div>
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
                    <div class="stat-number">7 days</div>
                    <div class="stat-label">Average Processing Time</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_down</span>
                        <span>-3 days faster</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Registration Types -->
<section class="registration-types-section" id="registration-types">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Business Registration Types</h2>
            <p class="section-subtitle">Choose the right business structure for your needs</p>
        </div>

        <div class="types-grid">
            <!-- Sole Proprietorship -->
            <div class="type-card">
                <div class="type-header">
                    <div class="type-icon">
                        <span class="material-symbols-outlined">person</span>
                    </div>
                    <div class="type-badge popular">Popular</div>
                </div>
                <div class="type-content">
                    <h3 class="type-title">Sole Proprietorship</h3>
                    <p class="type-description">Simplest business structure where one person owns and runs the entire business.</p>
                    <div class="type-features">
                        <h4 class="features-title">Key Features:</h4>
                        <ul class="features-list">
                            <li>Easy and inexpensive to establish</li>
                            <li>Complete control over business decisions</li>
                            <li>Simple tax reporting</li>
                            <li>Personal liability for business debts</li>
                        </ul>
                    </div>
                    <div class="type-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Registration Fee: ₣15,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Processing: 3-5 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">person</span>
                            <span>Owner: Single individual</span>
                        </div>
                    </div>
                    <div class="type-actions">
                        <button class="btn btn-sm btn-primary">Register Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Partnership -->
            <div class="type-card">
                <div class="type-header">
                    <div class="type-icon">
                        <span class="material-symbols-outlined">groups</span>
                    </div>
                    <div class="type-badge active">Active</div>
                </div>
                <div class="type-content">
                    <h3 class="type-title">Partnership</h3>
                    <p class="type-description">Business owned by two or more individuals who share profits and responsibilities.</p>
                    <div class="type-features">
                        <h4 class="features-title">Key Features:</h4>
                        <ul class="features-list">
                            <li>Shared ownership and management</li>
                            <li>Combined resources and expertise</li>
                            <li>Simple structure compared to corporations</li>
                            <li>Joint liability for business debts</li>
                        </ul>
                    </div>
                    <div class="type-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Registration Fee: ₣25,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Processing: 5-7 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>Partners: 2-20 individuals</span>
                        </div>
                    </div>
                    <div class="type-actions">
                        <button class="btn btn-sm btn-primary">Register Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Limited Company -->
            <div class="type-card">
                <div class="type-header">
                    <div class="type-icon">
                        <span class="material-symbols-outlined">business</span>
                    </div>
                    <div class="type-badge recommended">Recommended</div>
                </div>
                <div class="type-content">
                    <h3 class="type-title">Limited Company (Ltd)</h3>
                    <p class="type-description">Separate legal entity that protects owners from personal liability for business debts.</p>
                    <div class="type-features">
                        <h4 class="features-title">Key Features:</h4>
                        <ul class="features-list">
                            <li>Limited liability protection</li>
                            <li>Separate legal entity status</li>
                            <li>Perpetual existence</li>
                            <li>Easier to raise capital</li>
                        </ul>
                    </div>
                    <div class="type-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Registration Fee: ₣50,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Processing: 7-14 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">shield</span>
                            <span>Liability: Limited</span>
                        </div>
                    </div>
                    <div class="type-actions">
                        <button class="btn btn-sm btn-primary">Register Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Cooperative -->
            <div class="type-card">
                <div class="type-header">
                    <div class="type-icon">
                        <span class="material-symbols-outlined">diversity_3</span>
                    </div>
                    <div class="type-badge community">Community</div>
                </div>
                <div class="type-content">
                    <h3 class="type-title">Cooperative Society</h3>
                    <p class="type-description">Business owned and operated by members for their mutual benefit and community development.</p>
                    <div class="type-features">
                        <h4 class="features-title">Key Features:</h4>
                        <ul class="features-list">
                            <li>Member-owned and controlled</li>
                            <li>Democratic decision-making</li>
                            <li>Profit sharing among members</li>
                            <li>Community-focused operations</li>
                        </ul>
                    </div>
                    <div class="type-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Registration Fee: ₣30,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Processing: 7-10 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">diversity_3</span>
                            <span>Members: Minimum 10</span>
                        </div>
                    </div>
                    <div class="type-actions">
                        <button class="btn btn-sm btn-primary">Register Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- NGO/Association -->
            <div class="type-card">
                <div class="type-header">
                    <div class="type-icon">
                        <span class="material-symbols-outlined">volunteer_activism</span>
                    </div>
                    <div class="type-badge nonprofit">Non-Profit</div>
                </div>
                <div class="type-content">
                    <h3 class="type-title">NGO/Association</h3>
                    <p class="type-description">Non-profit organization registered for charitable, educational, or social purposes.</p>
                    <div class="type-features">
                        <h4 class="features-title">Key Features:</h4>
                        <ul class="features-list">
                            <li>Tax-exempt status</li>
                            <li>Eligible for grants and donations</li>
                            <li>Mission-driven operations</li>
                            <li>Board governance structure</li>
                        </ul>
                    </div>
                    <div class="type-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Registration Fee: ₣20,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Processing: 10-14 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">volunteer_activism</span>
                            <span>Purpose: Non-profit</span>
                        </div>
                    </div>
                    <div class="type-actions">
                        <button class="btn btn-sm btn-primary">Register Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Branch Office -->
            <div class="type-card">
                <div class="type-header">
                    <div class="type-icon">
                        <span class="material-symbols-outlined">storefront</span>
                    </div>
                    <div class="type-badge active">Active</div>
                </div>
                <div class="type-content">
                    <h3 class="type-title">Branch Office Registration</h3>
                    <p class="type-description">Register a branch office of an existing company operating outside Bamenda.</p>
                    <div class="type-features">
                        <h4 class="features-title">Key Features:</h4>
                        <ul class="features-list">
                            <li>Extension of parent company</li>
                            <li>Local operational autonomy</li>
                            <li>Separate tax registration</li>
                            <li>Brand consistency maintained</li>
                        </ul>
                    </div>
                    <div class="type-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Registration Fee: ₣35,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Processing: 5-7 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">storefront</span>
                            <span>Type: Branch operation</span>
                        </div>
                    </div>
                    <div class="type-actions">
                        <button class="btn btn-sm btn-primary">Register Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Business Registration Application -->
<section class="registration-application-section" id="register-business">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Business Registration Application</h2>
            <p class="section-subtitle">Complete your business registration online with our streamlined process</p>
        </div>

        <div class="application-content">
            <div class="application-info">
                <h3 class="info-title">Registration Process</h3>
                <div class="process-steps">
                    <div class="step-item">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h4 class="step-title">Choose Business Type</h4>
                            <p class="step-description">Select the appropriate business structure for your needs</p>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h4 class="step-title">Complete Application</h4>
                            <p class="step-description">Fill out the registration form with business details</p>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h4 class="step-title">Submit Documents</h4>
                            <p class="step-description">Upload required documents and identification</p>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h4 class="step-title">Pay Registration Fee</h4>
                            <p class="step-description">Pay the registration fee based on business type</p>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-number">5</div>
                        <div class="step-content">
                            <h4 class="step-title">Receive Certificate</h4>
                            <p class="step-description">Get your business registration certificate and tax ID</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="application-form">
                <h3 class="form-title">Business Registration Form</h3>
                <form id="businessRegistrationForm">
                    <div class="form-section">
                        <h4 class="section-title">Business Information</h4>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Business Name *</label>
                                <input type="text" class="form-input" placeholder="Enter your business name" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Business Type *</label>
                                <select class="form-select" required>
                                    <option value="">Select business type</option>
                                    <option value="sole-proprietorship">Sole Proprietorship</option>
                                    <option value="partnership">Partnership</option>
                                    <option value="limited-company">Limited Company</option>
                                    <option value="cooperative">Cooperative Society</option>
                                    <option value="ngo">NGO/Association</option>
                                    <option value="branch">Branch Office</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Business Category *</label>
                                <select class="form-select" required>
                                    <option value="">Select category</option>
                                    <option value="retail">Retail Trade</option>
                                    <option value="manufacturing">Manufacturing</option>
                                    <option value="services">Professional Services</option>
                                    <option value="hospitality">Hospitality & Tourism</option>
                                    <option value="technology">Technology & IT</option>
                                    <option value="agriculture">Agriculture & Agro-processing</option>
                                    <option value="construction">Construction & Real Estate</option>
                                    <option value="education">Education & Training</option>
                                    <option value="health">Healthcare & Medical</option>
                                    <option value="transport">Transportation & Logistics</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Business Description *</label>
                                <input type="text" class="form-input" placeholder="Brief description of your business activities" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Detailed Business Activities *</label>
                            <textarea class="form-textarea" rows="4" placeholder="Provide detailed information about your business activities, products, or services" required></textarea>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Proposed Start Date *</label>
                                <input type="date" class="form-input" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Expected Annual Revenue (XAF) *</label>
                                <input type="number" class="form-input" placeholder="Enter expected annual revenue" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Business Address</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Business Address *</label>
                            <input type="text" class="form-input" placeholder="Enter complete business address" required>
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
                                <label class="form-label">Business Premises Type *</label>
                                <select class="form-select" required>
                                    <option value="">Select premises type</option>
                                    <option value="owned">Owned Property</option>
                                    <option value="rented">Rented Property</option>
                                    <option value="home-based">Home-based</option>
                                    <option value="shared">Shared Office Space</option>
                                    <option value="virtual">Virtual/Online</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Business Phone *</label>
                                <input type="tel" class="form-input" placeholder="+237 233 000 000" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Business Email *</label>
                                <input type="email" class="form-input" placeholder="business@email.com" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Business Website (if any)</label>
                            <input type="url" class="form-input" placeholder="https://www.yourbusiness.com">
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Owner/Partner Information</h4>
                        
                        <div id="ownersSection">
                            <div class="owner-row">
                                <div class="form-row">
                                    <div class="form-group">
                                        <label class="form-label">Full Name *</label>
                                        <input type="text" class="form-input" placeholder="Enter full name" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Position in Business *</label>
                                        <input type="text" class="form-input" placeholder="e.g., Owner, Partner, Director" required>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group">
                                        <label class="form-label">Phone Number *</label>
                                        <input type="tel" class="form-input" placeholder="+237 233 000 000" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Email Address *</label>
                                        <input type="email" class="form-input" placeholder="owner@email.com" required>
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

                                <div class="form-row">
                                    <div class="form-group">
                                        <label class="form-label">Residential Address *</label>
                                        <input type="text" class="form-input" placeholder="Enter residential address" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Ownership Percentage (%) *</label>
                                        <input type="number" class="form-input" placeholder="Enter ownership percentage" min="1" max="100" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="button" class="btn btn-outline" onclick="addOwner()">Add Another Owner/Partner</button>
                    </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Additional Information</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Number of Employees</label>
                            <input type="number" class="form-input" placeholder="Enter number of employees">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Previous Business Experience</label>
                            <select class="form-select">
                                <option value="">Select experience level</option>
                                <option value="none">No previous experience</option>
                                <option value="less-2">Less than 2 years</option>
                                <option value="2-5">2-5 years</option>
                                <option value="5-10">5-10 years</option>
                                <option value="more-10">More than 10 years</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Source of Capital</label>
                            <select class="form-select">
                                <option value="">Select source</option>
                                <option value="personal">Personal Savings</option>
                                <option value="family">Family Support</option>
                                <option value="loan">Bank Loan</option>
                                <option value="investors">Investors</option>
                                <option value="government">Government Grant</option>
                                <option value="other">Other Sources</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">How did you hear about our services? *</label>
                            <select class="form-select" required>
                                <option value="">Select option</option>
                                <option value="website">City Council Website</option>
                                <option value="office">Business Registration Office</option>
                                <option value="referral">Business Referral</option>
                                <option value="advertisement">Advertisement</option>
                                <option value="social-media">Social Media</option>
                                <option value="workshop">Business Workshop</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Additional Comments</label>
                            <textarea class="form-textarea" rows="3" placeholder="Any additional information or special requirements"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Declaration *</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="declaration" required>
                                    <span class="checkmark"></span>
                                    I declare that all information provided is accurate and complete. I understand that false information may result in the rejection of this application and possible legal action. I agree to comply with all business registration regulations and requirements.
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="reset" class="btn btn-outline">Reset</button>
                        <button type="submit" class="btn btn-primary">Submit Registration</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Business Support Services -->
<section class="business-support-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Business Support Services</h2>
            <p class="section-subtitle">Comprehensive support services for registered businesses</p>
        </div>

        <div class="support-grid">
            <!-- Business Advisory -->
            <div class="support-card">
                <div class="support-icon">
                    <span class="material-symbols-outlined">lightbulb</span>
                </div>
                <h3 class="support-title">Business Advisory</h3>
                <p class="support-description">Professional business advisory services including planning, strategy, and growth consulting.</p>
                <div class="support-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Business Planning</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Market Analysis</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Growth Strategy</span>
                    </div>
                </div>
                <button class="btn btn-sm btn-primary">Get Advisory</button>
            </div>

            <!-- Financial Services -->
            <div class="support-card">
                <div class="support-icon">
                    <span class="material-symbols-outlined">account_balance</span>
                </div>
                <h3 class="support-title">Financial Services</h3>
                <p class="support-description">Access to financial services including loans, grants, and investment opportunities.</p>
                <div class="support-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Business Loans</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Grant Applications</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Investment Matching</span>
                    </div>
                </div>
                <button class="btn btn-sm btn-primary">Explore Options</button>
            </div>

            <!-- Training & Development -->
            <div class="support-card">
                <div class="support-icon">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <h3 class="support-title">Training & Development</h3>
                <p class="support-description">Business training programs, workshops, and skill development for entrepreneurs.</p>
                <div class="support-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Entrepreneurship Training</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Management Skills</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Digital Literacy</span>
                    </div>
                </div>
                <button class="btn btn-sm btn-primary">View Programs</button>
            </div>

            <!-- Legal & Compliance -->
            <div class="support-card">
                <div class="support-icon">
                    <span class="material-symbols-outlined">gavel</span>
                </div>
                <h3 class="support-title">Legal & Compliance</h3>
                <p class="support-description">Legal services and compliance assistance for business operations and regulations.</p>
                <div class="support-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Legal Documentation</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Compliance Audit</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Contract Review</span>
                    </div>
                </div>
                <button class="btn btn-sm btn-primary">Get Legal Help</button>
            </div>

            <!-- Marketing Support -->
            <div class="support-card">
                <div class="support-icon">
                    <span class="material-symbols-outlined">campaign</span>
                </div>
                <h3 class="support-title">Marketing Support</h3>
                <p class="support-description">Marketing and promotional services to help businesses reach their target audience.</p>
                <div class="support-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Digital Marketing</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Brand Development</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Promotional Campaigns</span>
                    </div>
                </div>
                <button class="btn btn-sm btn-primary">Marketing Services</button>
            </div>

            <!-- Networking Opportunities -->
            <div class="support-card">
                <div class="support-icon">
                    <span class="material-symbols-outlined">handshake</span>
                </div>
                <h3 class="support-title">Networking Opportunities</h3>
                <p class="support-description">Business networking events, trade shows, and partnership opportunities.</p>
                <div class="support-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Business Meetups</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Trade Shows</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Partnership Programs</span>
                    </div>
                </div>
                <button class="btn btn-sm btn-primary">Join Network</button>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Common questions about business registration and services</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What documents are required for business registration?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Required documents include valid identification (national ID, passport, or driver's license), proof of address, business name reservation certificate, and depending on business type, additional documents such as partnership agreements, memorandum of association, or articles of incorporation.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How long does business registration take?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Processing time varies by business type: Sole proprietorship (3-5 days), Partnership (5-7 days), Limited Company (7-14 days), Cooperative (7-10 days), and NGO/Association (10-14 days). Processing may take longer if additional documentation is required.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What are the registration fees?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Registration fees vary by business type: Sole proprietorship (₣15,000), Partnership (₣25,000), Limited Company (₣50,000), Cooperative Society (₣30,000), NGO/Association (₣20,000), and Branch Office (₣35,000). Additional fees may apply for special services or expedited processing.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Can I register a business online?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, you can start the registration process online through our platform. You'll need to complete the application form, upload documents, and pay the registration fee online. However, some final verification may require in-person visits.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What business structure should I choose?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>The best structure depends on your business goals, liability concerns, and growth plans. Sole proprietorship is simplest but offers no liability protection. Limited companies offer liability protection but have more requirements. Consult with our business advisors for personalized recommendations.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Do I need a business license after registration?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, business registration is different from business licensing. After registration, you'll need to obtain specific operating licenses based on your business type and activities. Some businesses may require multiple licenses from different regulatory bodies.</p>
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
/* Business Registration Page Styles */
.business-registration-hero {
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

/* Registration Statistics Section */
.registration-stats-section {
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

/* Registration Types Section */
.registration-types-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.types-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.type-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.type-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.type-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.type-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.type-icon .material-symbols-outlined {
    font-size: 2rem;
}

.type-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.type-badge.popular {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.type-badge.active {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.type-badge.recommended {
    background-color: var(--primary);
    color: var(--on-primary);
}

.type-badge.community {
    background-color: var(--outline-variant);
    color: var(--on-surface);
}

.type-badge.nonprofit {
    background-color: var(--surface-variant);
    color: var(--on-surface-variant);
}

.type-content {
    padding: var(--spacing-lg);
}

.type-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.type-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.type-features {
    margin-bottom: var(--spacing-lg);
}

.features-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.features-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.features-list li {
    padding: var(--spacing-xs) 0;
    color: var(--on-surface-variant);
    position: relative;
    padding-left: var(--spacing-lg);
    line-height: 1.5;
}

.features-list li::before {
    content: '•';
    position: absolute;
    left: 0;
    color: var(--primary);
    font-weight: 700;
}

.type-details {
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

.type-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Registration Application Section */
.registration-application-section {
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

.owner-row {
    background-color: var(--surface-container);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    margin-bottom: var(--spacing-lg);
    position: relative;
}

.owner-row:not(:last-child)::after {
    content: '';
    position: absolute;
    bottom: -1rem;
    left: 50%;
    transform: translateX(-50%);
    width: 2rem;
    height: 2rem;
    background-color: var(--primary);
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--on-primary);
    font-size: 1rem;
    font-weight: 700;
}

.owner-row:not(:last-child)::after::before {
    content: '+';
}

/* Business Support Section */
.business-support-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.support-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.support-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.support-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.support-icon {
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

.support-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.support-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.support-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.support-features {
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
    
    .types-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .application-content {
        grid-template-columns: 1fr;
        gap: var(--spacing-xl);
    }
    
    .support-grid {
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
    
    .type-card {
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
    
    .type-actions {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .type-actions .btn {
        width: 100%;
    }
}
</style>

<script>
// Quick action functions
function openRegistrationTypes() {
    document.getElementById('registration-types').scrollIntoView({ behavior: 'smooth' });
}

function openBusinessRegistration() {
    document.getElementById('register-business').scrollIntoView({ behavior: 'smooth' });
}

function openLicenseApplication() {
    alert('Business license application would open here. In production, this would show license application forms for specific business activities.');
}

function openTaxRegistration() {
    alert('Tax registration portal would open here. In production, this would show tax ID registration and compliance services.');
}

function openComplianceServices() {
    alert('Business compliance services would open here. In production, this would show compliance audit, reporting, and regulatory services.');
}

function openBusinessSupport() {
    document.querySelector('.business-support-section').scrollIntoView({ behavior: 'smooth' });
}

// Type actions
document.querySelectorAll('.type-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Register')) {
        button.addEventListener('click', function() {
            const typeTitle = this.closest('.type-card').querySelector('.type-title').textContent;
            alert(`Registering as: "${typeTitle}"`);
        });
    }
});

document.querySelectorAll('.type-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Details')) {
        button.addEventListener('click', function() {
            const typeTitle = this.closest('.type-card').querySelector('.type-title').textContent;
            alert(`Viewing details for: "${typeTitle}"`);
        });
    }
});

// Support actions
document.querySelectorAll('.support-card .btn-primary').forEach(button => {
    if (button.textContent.includes('Get')) {
        button.addEventListener('click', function() {
            const supportTitle = this.closest('.support-card').querySelector('.support-title').textContent;
            alert(`Getting: "${supportTitle}"`);
        });
    }
    
    if (button.textContent.includes('Explore')) {
        button.addEventListener('click', function() {
            const supportTitle = this.closest('.support-card').querySelector('.support-title').textContent;
            alert(`Exploring: "${supportTitle}"`);
        });
    }
    
    if (button.textContent.includes('View')) {
        button.addEventListener('click', function() {
            const supportTitle = this.closest('.support-card').querySelector('.support-title').textContent;
            alert(`Viewing: "${supportTitle}"`);
        });
    }
    
    if (button.textContent.includes('Marketing')) {
        button.addEventListener('click', function() {
            alert('Marketing services portal would open here. In production, this would show marketing packages and services.');
        });
    }
    
    if (button.textContent.includes('Join')) {
        button.addEventListener('click', function() {
            alert('Business networking portal would open here. In production, this would show networking events and opportunities.');
        });
    }
});

// Add owner functionality
function addOwner() {
    const ownersSection = document.getElementById('ownersSection');
    const ownerCount = ownersSection.querySelectorAll('.owner-row').length;
    
    if (ownerCount >= 10) {
        alert('Maximum of 10 owners/partners allowed.');
        return;
    }
    
    const newOwnerRow = document.createElement('div');
    newOwnerRow.className = 'owner-row';
    newOwnerRow.innerHTML = `
        <div class="form-row">
            <div class="form-group">
                <label class="form-label">Full Name *</label>
                <input type="text" class="form-input" placeholder="Enter full name" required>
            </div>
            <div class="form-group">
                <label class="form-label">Position in Business *</label>
                <input type="text" class="form-input" placeholder="e.g., Owner, Partner, Director" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label class="form-label">Phone Number *</label>
                <input type="tel" class="form-input" placeholder="+237 233 000 000" required>
            </div>
            <div class="form-group">
                <label class="form-label">Email Address *</label>
                <input type="email" class="form-input" placeholder="owner@email.com" required>
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

        <div class="form-row">
            <div class="form-group">
                <label class="form-label">Residential Address *</label>
                <input type="text" class="form-input" placeholder="Enter residential address" required>
            </div>
            <div class="form-group">
                <label class="form-label">Ownership Percentage (%) *</label>
                <input type="number" class="form-input" placeholder="Enter ownership percentage" min="1" max="100" required>
            </div>
        </div>
        
        <button type="button" class="btn btn-danger btn-sm" onclick="removeOwner(this)">Remove Owner</button>
    `;
    
    ownersSection.appendChild(newOwnerRow);
}

// Remove owner functionality
function removeOwner(button) {
    const ownerRow = button.closest('.owner-row');
    const ownersSection = document.getElementById('ownersSection');
    
    if (ownersSection.querySelectorAll('.owner-row').length > 1) {
        ownerRow.remove();
    } else {
        alert('At least one owner/partner is required.');
    }
}

// Business registration form submission
document.getElementById('businessRegistrationForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate required fields
    const businessName = document.querySelector('input[placeholder*="business name"]').value;
    const businessType = document.querySelector('select[required]').value;
    const businessCategory = document.querySelectorAll('select[required]')[1].value;
    const businessDescription = document.querySelector('input[placeholder*="description"]').value;
    const businessActivities = document.querySelector('textarea[required]').value;
    const startDate = document.querySelector('input[type="date"]').value;
    const revenue = document.querySelector('input[placeholder*="revenue"]').value;
    const businessAddress = document.querySelector('input[placeholder*="business address"]').value;
    const area = document.querySelectorAll('select[required]')[2].value;
    const premisesType = document.querySelectorAll('select[required]')[3].value;
    const businessPhone = document.querySelector('input[placeholder*="phone"]').value;
    const businessEmail = document.querySelector('input[placeholder*="business@email"]').value;
    const howHeard = document.querySelectorAll('select[required]')[4].value;
    const declaration = document.querySelector('input[name="declaration"]:checked');
    
    // Validate owners
    const ownerRows = document.querySelectorAll('.owner-row');
    let ownersValid = true;
    ownerRows.forEach((row, index) => {
        const fullName = row.querySelector('input[placeholder*="full name"]').value;
        const position = row.querySelector('input[placeholder*="Position"]').value;
        const phone = row.querySelector('input[placeholder*="phone"]').value;
        const email = row.querySelector('input[placeholder*="owner@email"]').value;
        const idType = row.querySelector('select[required]').value;
        const idNumber = row.querySelector('input[placeholder*="ID number"]').value;
        const address = row.querySelector('input[placeholder*="residential address"]').value;
        const ownership = row.querySelector('input[placeholder*="ownership"]').value;
        
        if (!fullName || !position || !phone || !email || !idType || !idNumber || !address || !ownership) {
            ownersValid = false;
        }
    });
    
    if (!businessName || !businessType || !businessCategory || !businessDescription || !businessActivities || !startDate || !revenue || !businessAddress || !area || !premisesType || !businessPhone || !businessEmail || !howHeard || !declaration || !ownersValid) {
        alert('Please fill in all required fields and ensure all owner information is complete.');
        return;
    }
    
    // Validate ownership percentages
    let totalOwnership = 0;
    ownerRows.forEach(row => {
        const ownership = parseFloat(row.querySelector('input[placeholder*="ownership"]').value) || 0;
        totalOwnership += ownership;
    });
    
    if (totalOwnership !== 100) {
        alert(`Total ownership percentage must equal 100%. Current total: ${totalOwnership}%`);
        return;
    }
    
    alert('Business registration submitted successfully! We will review your application and contact you within 7 business days for next steps and document verification.');
    // In production, this would submit the registration
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

// Auto-refresh registration statistics
function refreshRegistrationStats() {
    // In production, this would fetch real-time registration statistics
    console.log('Refreshing business registration statistics...');
}

// Refresh statistics every 60 seconds
setInterval(refreshRegistrationStats, 60000);
</script>
