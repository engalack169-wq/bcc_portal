<?php
/**
 * Bamenda City Council E-Governance Platform
 * Emergency Recovery Page
 */

// Set page metadata
$page_title = 'Emergency Recovery Support | Bamenda City Council';
$page_description = 'Access emergency recovery services, disaster relief programs, and post-emergency support for affected communities and individuals in Bamenda.';
$page_keywords = 'emergency recovery, disaster relief, post-emergency support, recovery services, Bamenda disaster assistance';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Emergency', 'url' => '../index.php'],
    ['title' => 'Recovery Support', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero emergency-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-emergency-services.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-tertiary">Emergency Recovery</span>
            <h1 class="hero-title">Disaster Recovery & Relief</h1>
            <p class="hero-subtitle">
                Comprehensive emergency recovery services including disaster relief programs, post-emergency support, rehabilitation assistance, and community recovery resources for affected individuals and families.
            </p>
            <div class="hero-actions">
                <a href="#recovery-services" class="btn btn-lg btn-tertiary">
                    <span class="material-symbols-outlined">healing</span>
                    Recovery Services
                </a>
                <a href="#assistance-form" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">support</span>
                    Request Help
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Recovery Actions</h2>
            <p class="section-subtitle">Quick access to recovery services</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openShelter()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">home</span>
                </div>
                <h3 class="action-title">Emergency Shelter</h3>
                <p class="action-description">Temporary housing</p>
            </div>

            <div class="action-card" onclick="openFood()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">restaurant</span>
                </div>
                <h3 class="action-title">Food Assistance</h3>
                <p class="action-description">Emergency meals</p>
            </div>

            <div class="action-card" onclick="openMedical()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">medical_services</span>
                </div>
                <h3 class="action-title">Medical Support</h3>
                <p class="action-description">Healthcare services</p>
            </div>

            <div class="action-card" onclick="openFinancial()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">payments</span>
                </div>
                <h3 class="action-title">Financial Aid</h3>
                <p class="action-description">Emergency funds</p>
            </div>

            <div class="action-card" onclick="openCounseling()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">psychology</span>
                </div>
                <h3 class="action-title">Counseling</h3>
                <p class="action-description">Mental health support</p>
            </div>

            <div class="action-card" onclick="openReconstruction()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">home_repair_service</span>
                </div>
                <h3 class="action-title">Reconstruction</h3>
                <p class="action-description">Home repairs</p>
            </div>
        </div>
    </div>
</section>

<!-- Recovery Statistics -->
<section class="recovery-stats-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Recovery Overview</h2>
            <p class="section-subtitle">Real-time recovery assistance statistics</p>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">3,456</div>
                    <div class="stat-label">People Assisted</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+892 this month</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">home</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">234</div>
                    <div class="stat-label">Shelters Provided</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+45 shelters</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">restaurant</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">12,345</div>
                    <div class="stat-label">Meals Distributed</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+2,345 meals</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">payments</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">₣450M</div>
                    <div class="stat-label">Financial Aid Distributed</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+₣89M this month</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">home_repair_service</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">567</div>
                    <div class="stat-label">Homes Repaired</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+123 homes</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">schedule</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">48 hours</div>
                    <div class="stat-label">Avg Response Time</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_down</span>
                        <span>-12 hours improvement</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Recovery Services -->
<section class="recovery-services-section" id="recovery-services">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Recovery Services</h2>
            <p class="section-subtitle">Available recovery and relief programs</p>
        </div>

        <div class="services-grid">
            <!-- Emergency Shelter -->
            <div class="service-card">
                <div class="service-header">
                    <div class="service-icon">
                        <span class="material-symbols-outlined">home</span>
                    </div>
                    <div class="service-badge urgent">Urgent</div>
                </div>
                <div class="service-content">
                    <h3 class="service-title">Emergency Shelter</h3>
                    <p class="service-description">Safe temporary housing for displaced individuals and families during and after emergencies.</p>
                    <div class="service-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Temporary accommodation</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Basic necessities provided</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Family-friendly facilities</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Security and safety</span>
                        </div>
                    </div>
                    <div class="service-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>Capacity: 500+ people</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>24/7 availability</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>8 locations citywide</span>
                        </div>
                    </div>
                    <div class="service-actions">
                        <button class="btn btn-sm btn-primary">Find Shelter</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- Food Assistance -->
            <div class="service-card">
                <div class="service-header">
                    <div class="service-icon">
                        <span class="material-symbols-outlined">restaurant</span>
                    </div>
                    <div class="service-badge active">Active</div>
                </div>
                <div class="service-content">
                    <h3 class="service-title">Food Assistance</h3>
                    <p class="service-description">Emergency food distribution, meal programs, and nutritional support for affected communities.</p>
                    <div class="service-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Daily meal distribution</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Emergency food packages</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Nutrition counseling</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Special dietary needs</span>
                        </div>
                    </div>
                    <div class="service-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">restaurant</span>
                            <span>3,000+ meals daily</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Multiple distribution points</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">local_shipping</span>
                            <span>Mobile distribution units</span>
                        </div>
                    </div>
                    <div class="service-actions">
                        <button class="btn btn-sm btn-primary">Get Food Aid</button>
                        <button class="btn btn-sm btn-outline">Find Locations</button>
                    </div>
                </div>
            </div>

            <!-- Medical Support -->
            <div class="service-card">
                <div class="service-header">
                    <div class="service-icon">
                        <span class="material-symbols-outlined">medical_services</span>
                    </div>
                    <div class="service-badge expanding">Expanding</div>
                </div>
                <div class="service-content">
                    <h3 class="service-title">Medical Support</h3>
                    <p class="service-description">Emergency medical care, health services, and medical supplies for disaster-affected individuals.</p>
                    <div class="service-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Emergency medical treatment</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Mobile medical clinics</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Medication distribution</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Follow-up care</span>
                        </div>
                    </div>
                    <div class="service-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">local_hospital</span>
                            <span>15 medical facilities</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">medical_services</span>
                            <span>50+ medical staff</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">medication</span>
                            <span>Free medications</span>
                        </div>
                    </div>
                    <div class="service-actions">
                        <button class="btn btn-sm btn-primary">Get Medical Help</button>
                        <button class="btn btn-sm btn-outline">Find Clinics</button>
                    </div>
                </div>
            </div>

            <!-- Financial Assistance -->
            <div class="service-card">
                <div class="service-header">
                    <div class="service-icon">
                        <span class="material-symbols-outlined">payments</span>
                    </div>
                    <div class="service-badge popular">Popular</div>
                </div>
                <div class="service-content">
                    <h3 class="service-title">Financial Assistance</h3>
                    <p class="service-description">Emergency financial aid, grants, and support for individuals and businesses affected by disasters.</p>
                    <div class="service-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Emergency cash assistance</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Business recovery grants</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Housing support funds</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Quick approval process</span>
                        </div>
                    </div>
                    <div class="service-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">savings</span>
                            <span>Up to ₣500,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>24-48 hour processing</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">account_balance</span>
                            <span>No repayment required</span>
                        </div>
                    </div>
                    <div class="service-actions">
                        <button class="btn btn-sm btn-primary">Apply for Aid</button>
                        <button class="btn btn-sm btn-outline">Check Eligibility</button>
                    </div>
                </div>
            </div>

            <!-- Counseling Services -->
            <div class="service-card">
                <div class="service-header">
                    <div class="service-icon">
                        <span class="material-symbols-outlined">psychology</span>
                    </div>
                    <div class="service-badge new">New</div>
                </div>
                <div class="service-content">
                    <h3 class="service-title">Counseling Services</h3>
                    <p class="service-description">Mental health support, trauma counseling, and psychological services for disaster survivors.</p>
                    <div class="service-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Trauma counseling</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Group therapy sessions</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Child psychology support</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>24/7 crisis line</span>
                        </div>
                    </div>
                    <div class="service-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">psychology</span>
                            <span>25+ counselors</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Free sessions</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">support_agent</span>
                            <span>Confidential support</span>
                        </div>
                    </div>
                    <div class="service-actions">
                        <button class="btn btn-sm btn-primary">Get Counseling</button>
                        <button class="btn btn-sm btn-outline">Schedule Session</button>
                    </div>
                </div>
            </div>

            <!-- Reconstruction Support -->
            <div class="service-card">
                <div class="service-header">
                    <div class="service-icon">
                        <span class="material-symbols-outlined">home_repair_service</span>
                    </div>
                    <div class="service-badge expanding">Expanding</div>
                </div>
                <div class="service-content">
                    <h3 class="service-title">Reconstruction Support</h3>
                    <p class="service-description">Home repair, reconstruction assistance, and infrastructure restoration for damaged properties.</p>
                    <div class="service-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Home repair services</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Construction assistance</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Material provision</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Technical supervision</span>
                        </div>
                    </div>
                    <div class="service-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">engineering</span>
                            <span>50+ construction teams</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Rapid deployment</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">home_repair_service</span>
                            <span>Quality assured</span>
                        </div>
                    </div>
                    <div class="service-actions">
                        <button class="btn btn-sm btn-primary">Request Repairs</button>
                        <button class="btn btn-sm btn-outline">Get Assessment</button>
                    </div>
                </div>
            </div>

            <!-- Legal Assistance -->
            <div class="service-card">
                <div class="service-header">
                    <div class="service-icon">
                        <span class="material-symbols-outlined">gavel</span>
                    </div>
                    <div class="service-badge important">Important</div>
                </div>
                <div class="service-content">
                    <h3 class="service-title">Legal Assistance</h3>
                    <p class="service-description">Legal aid, documentation assistance, and rights protection for disaster-affected individuals.</p>
                    <div class="service-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Free legal consultation</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Document replacement</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Insurance claims help</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Rights advocacy</span>
                        </div>
                    </div>
                    <div class="service-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">gavel</span>
                            <span>15+ lawyers</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">description</span>
                            <span>Document processing</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">security</span>
                            <span>Confidential service</span>
                        </div>
                    </div>
                    <div class="service-actions">
                        <button class="btn btn-sm btn-primary">Get Legal Help</button>
                        <button class="btn btn-sm btn-outline">Document Services</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Assistance Form -->
<section class="assistance-form-section" id="assistance-form">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Request Recovery Assistance</h2>
            <p class="section-subtitle">Apply for emergency recovery support</p>
        </div>

        <div class="form-content">
            <div class="assistance-form">
                <h3 class="form-title">Emergency Recovery Assistance Form</h3>
                <form id="recoveryAssistanceForm">
                    <div class="form-section">
                        <h4 class="section-title">Personal Information</h4>
                        
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
                                <label class="form-label">Email Address *</label>
                                <input type="email" class="form-input" placeholder="your@email.com" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">ID Number *</label>
                                <input type="text" class="form-input" placeholder="Enter your ID number" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Current Address *</label>
                            <input type="text" class="form-input" placeholder="Enter your current address" required>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Family Members Affected *</label>
                                <input type="number" class="form-input" placeholder="Number of family members" min="1" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Children Under 18 *</label>
                                <input type="number" class="form-input" placeholder="Number of children" min="0" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Emergency Details</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Type of Emergency *</label>
                            <select class="form-select" required>
                                <option value="">Select emergency type</option>
                                <option value="flood">Flood</option>
                                <option value="fire">Fire</option>
                                <option value="storm">Storm/Heavy Rain</option>
                                <option value="landslide">Landslide</option>
                                <option value="earthquake">Earthquake</option>
                                <option value="accident">Accident</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Date of Emergency *</label>
                                <input type="date" class="form-input" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Time of Emergency *</label>
                                <input type="time" class="form-input" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Location of Emergency *</label>
                            <input type="text" class="form-input" placeholder="Specific location where emergency occurred" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Emergency Description *</label>
                            <textarea class="form-textarea" rows="4" placeholder="Describe the emergency situation and immediate needs" required></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Immediate Needs *</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="needs" value="shelter">
                                    <span class="checkmark"></span>
                                    Emergency Shelter
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="needs" value="food">
                                    <span class="checkmark"></span>
                                    Food/Water
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="needs" value="medical">
                                    <span class="checkmark"></span>
                                    Medical Care
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="needs" value="financial">
                                    <span class="checkmark"></span>
                                    Financial Assistance
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="needs" value="clothing">
                                    <span class="checkmark"></span>
                                    Clothing/Blankets
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="needs" value="counseling">
                                    <span class="checkmark"></span>
                                    Counseling Support
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Property Damage Assessment</label>
                            <select class="form-select">
                                <option value="">Select damage level</option>
                                <option value="none">No Damage</option>
                                <option value="minor">Minor Damage</option>
                                <option value="moderate">Moderate Damage</option>
                                <option value="severe">Severe Damage</option>
                                <option value="destroyed">Completely Destroyed</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Additional Information</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Special Requirements</label>
                            <textarea class="form-textarea" rows="3" placeholder="Any special medical needs, dietary requirements, or other important information"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Current Location</label>
                            <select class="form-select">
                                <option value="">Select current location</option>
                                <option value="home">At Home</option>
                                <option value="shelter">In Emergency Shelter</option>
                                <option value="relatives">With Relatives/Friends</option>
                                <option value="temporary">Temporary Housing</option>
                                <option value="unknown">Unknown/Displaced</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Contact Preference *</label>
                            <select class="form-select" required>
                                <option value="">Select preference</option>
                                <option value="phone">Phone Call</option>
                                <option value="sms">SMS Message</option>
                                <option value="email">Email</option>
                                <option value="whatsapp">WhatsApp</option>
                                <option value="in-person">In-Person Visit</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Consent for Contact *</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="consent" required>
                                    <span class="checkmark"></span>
                                    I consent to be contacted by recovery assistance teams and understand that false information may result in legal consequences.
                                </label>
                            </div>
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

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Common questions about emergency recovery</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Who is eligible for recovery assistance?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Anyone affected by disasters or emergencies in Bamenda is eligible for recovery assistance. This includes residents, business owners, and visitors who have suffered losses or displacement.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How quickly can I get help?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Emergency response teams aim to contact applicants within 24-48 hours. Urgent cases like medical emergencies or lack of shelter are prioritized for immediate response.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What documents do I need?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>You'll need valid ID, proof of residence, and documentation of the emergency impact. If documents were lost in the disaster, alternative verification methods are available.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Is financial assistance repayable?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Most emergency financial assistance is provided as grants and does not require repayment. However, some business recovery loans may be available with favorable terms.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How long does recovery support last?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Recovery support duration varies based on needs and damage level. Emergency shelter is typically provided for 3-7 days, while financial assistance and reconstruction support may extend for several months.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Can I appeal if my application is denied?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, you can appeal decisions within 7 days of notification. The appeals process includes review by a different team and consideration of additional information.</p>
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
/* Emergency Recovery Page Styles */
.emergency-hero {
    position: relative;
    overflow: hidden;
}

.emergency-hero .hero-background img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
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

/* Recovery Statistics Section */
.recovery-stats-section {
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

/* Recovery Services Section */
.recovery-services-section {
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

.service-badge.urgent {
    background-color: var(--error);
    color: var(--on-error);
}

.service-badge.active {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.service-badge.popular {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.service-badge.expanding {
    background-color: var(--primary);
    color: var(--on-primary);
}

.service-badge.new {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.service-badge.important {
    background-color: var(--primary);
    color: var(--on-primary);
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

.service-details {
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
    color: var(--tertiary);
}

.service-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Assistance Form Section */
.assistance-form-section {
    padding: var(--spacing-3xl) 0;
}

.form-content {
    display: flex;
    justify-content: center;
}

.assistance-form {
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

.checkbox-group {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-md);
}

.checkbox-label {
    display: flex;
    align-items: flex-start;
    gap: var(--spacing-sm);
    cursor: pointer;
    color: var(--on-surface);
    line-height: 1.5;
    min-width: 200px;
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
    background-color: var(--tertiary);
    border-color: var(--tertiary);
}

.checkbox-label input[type="checkbox"]:checked + .checkmark::after {
    content: '✓';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: var(--on-tertiary);
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
    
    .assistance-form {
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
    
    .checkbox-group {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .checkbox-label {
        min-width: auto;
    }
}
</style>

<script>
// Quick action functions
function openShelter() {
    document.getElementById('recovery-services').scrollIntoView({ behavior: 'smooth' });
}

function openFood() {
    alert('Food assistance portal would open here. In production, this would show food distribution points, meal schedules, and nutrition programs.');
}

function openMedical() {
    alert('Medical support portal would open here. In production, this would show medical facilities, mobile clinics, and health services.');
}

function openFinancial() {
    alert('Financial assistance portal would open here. In production, this would show aid programs, grant applications, and financial support options.');
}

function openCounseling() {
    alert('Counseling services portal would open here. In production, this would show mental health support, trauma counseling, and therapy services.');
}

function openReconstruction() {
    alert('Reconstruction support portal would open here. In production, this would show home repair services, construction assistance, and rebuilding programs.');
}

// Service actions
document.querySelectorAll('.service-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Get') || button.textContent.includes('Request')) {
        button.addEventListener('click', function() {
            const serviceTitle = this.closest('.service-card').querySelector('.service-title').textContent;
            alert(`Accessing: "${serviceTitle}"`);
        });
    }
});

document.querySelectorAll('.service-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Find') || button.textContent.includes('Learn') || button.textContent.includes('Schedule') || button.textContent.includes('Get Assessment') || button.textContent.includes('Document Services')) {
        button.addEventListener('click', function() {
            const serviceTitle = this.closest('.service-card').querySelector('.service-title').textContent;
            alert(`Learning more about: "${serviceTitle}"`);
        });
    }
});

// Recovery assistance form submission
document.getElementById('recoveryAssistanceForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate required fields
    const fullName = document.querySelector('input[placeholder*="full name"]').value;
    const phone = document.querySelector('input[placeholder*="phone"]').value;
    const email = document.querySelector('input[placeholder*="email"]').value;
    const idNumber = document.querySelector('input[placeholder*="ID number"]').value;
    const address = document.querySelector('input[placeholder*="address"]').value;
    const familyMembers = document.querySelector('input[placeholder*="family members"]').value;
    const children = document.querySelector('input[placeholder*="children"]').value;
    const emergencyType = document.querySelector('select[required]').value;
    const emergencyDate = document.querySelector('input[type="date"]').value;
    const emergencyTime = document.querySelector('input[type="time"]').value;
    const location = document.querySelector('input[placeholder*="location where emergency"]').value;
    const description = document.querySelector('textarea[required]').value;
    const needs = document.querySelectorAll('input[name="needs"]:checked');
    const contactPreference = document.querySelectorAll('select[required]')[1].value;
    const consent = document.querySelector('input[name="consent"]:checked');
    
    if (!fullName || !phone || !email || !idNumber || !address || !familyMembers || !children || !emergencyType || !emergencyDate || !emergencyTime || !location || !description || needs.length === 0 || !contactPreference || !consent) {
        alert('Please fill in all required fields and select at least one immediate need.');
        return;
    }
    
    // Validate email
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert('Please enter a valid email address.');
        return;
    }
    
    // Validate phone
    const phoneRegex = /^\+237\s\d{3}\s\d{3}\s\d{3}$/;
    if (!phoneRegex.test(phone)) {
        alert('Please enter a valid phone number in format: +237 233 000 000');
        return;
    }
    
    alert('Recovery assistance request submitted successfully! Your request ID is #REC2024001234. Emergency response teams will contact you within 24-48 hours to assess your needs and provide assistance.');
    // In production, this would submit the assistance request
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

// Auto-refresh recovery statistics
function refreshRecoveryStats() {
    // In production, this would fetch real-time recovery statistics
    console.log('Refreshing emergency recovery statistics...');
    
    // Simulate people assisted updates
    const peopleElement = document.querySelector('.stat-number');
    if (peopleElement && peopleElement.textContent.includes(',')) {
        // Simulate real-time assistance
        const currentCount = parseInt(peopleElement.textContent.replace(',', ''));
        const increment = Math.floor(Math.random() * 10) + 1;
        const newCount = currentCount + increment;
        peopleElement.textContent = newCount.toLocaleString();
    }
}

// Refresh statistics every 45 seconds for recovery monitoring
setInterval(refreshRecoveryStats, 45000);
</script>

