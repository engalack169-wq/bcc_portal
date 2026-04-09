<?php
/**
 * Bamenda City Council E-Governance Platform
 * Public Housing Services Page
 */

// Set page metadata
$page_title = 'Public Housing Services | Bamenda City Council';
$page_description = 'Access public housing services including affordable housing, rental assistance, housing applications, and urban development programs for Bamenda residents.';
$page_keywords = 'public housing, affordable housing, rental assistance, housing applications, Bamenda housing services';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Public Services', 'url' => '../index.php'],
    ['title' => 'Housing', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero public-housing-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-public-services.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Public Housing Services</span>
            <h1 class="hero-title">Public Housing & Urban Development</h1>
            <p class="hero-subtitle">
                Comprehensive public housing services including affordable housing programs, rental assistance, housing applications, and urban development initiatives to provide quality housing solutions for Bamenda residents.
            </p>
            <div class="hero-actions">
                <a href="#housing-programs" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">home</span>
                    Housing Programs
                </a>
                <a href="#housing-application" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">assignment</span>
                    Apply Now
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Housing Actions</h2>
            <p class="section-subtitle">Quick access to public housing services</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openAffordableHousing()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">home</span>
                </div>
                <h3 class="action-title">Affordable Housing</h3>
                <p class="action-description">Low-cost housing options</p>
            </div>

            <div class="action-card" onclick="openRentalAssistance()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">payments</span>
                </div>
                <h3 class="action-title">Rental Assistance</h3>
                <p class="action-description">Rental support programs</p>
            </div>

            <div class="action-card" onclick="openHousingApplication()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">assignment</span>
                </div>
                <h3 class="action-title">Housing Application</h3>
                <p class="action-description">Apply for housing</p>
            </div>

            <div class="action-card" onclick="openUrbanDevelopment()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">location_city</span>
                </div>
                <h3 class="action-title">Urban Development</h3>
                <p class="action-description">City development projects</p>
            </div>

            <div class="action-card" onclick="openHousingMaintenance()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">build</span>
                </div>
                <h3 class="action-title">Housing Maintenance</h3>
                <p class="action-description">Maintenance services</p>
            </div>

            <div class="action-card" onclick="openHousingSupport()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">support_agent</span>
                </div>
                <h3 class="action-title">Housing Support</h3>
                <p class="action-description">Support services</p>
            </div>
        </div>
    </div>
</section>

<!-- Housing Statistics -->
<section class="housing-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">home</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">3,456</div>
                    <div class="stat-label">Housing Units</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+234 units</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">family_restroom</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">12,456</div>
                    <div class="stat-label">Residents Served</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+1,234 residents</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">payments</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">₣45M</div>
                    <div class="stat-label">Rental Assistance</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+₣8M this year</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">verified</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">96%</div>
                    <div class="stat-label">Occupancy Rate</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+3% improvement</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Housing Programs -->
<section class="housing-programs-section" id="housing-programs">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Housing Programs</h2>
            <p class="section-subtitle">Comprehensive housing programs to meet diverse housing needs</p>
        </div>

        <div class="programs-grid">
            <!-- Affordable Housing -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">home</span>
                    </div>
                    <div class="program-badge flagship">Flagship</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Affordable Housing Program</h3>
                    <p class="program-description">Low-cost housing solutions for low-income families, elderly, and vulnerable populations in Bamenda.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Subsidized rental rates</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Quality housing standards</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Community facilities</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Maintenance services</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">1,234</span>
                            <span class="stat-label">Units Available</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">₣15,000</span>
                            <span class="stat-label">Monthly Rent</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">View Units</button>
                    </div>
                </div>
            </div>

            <!-- Student Housing -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">school</span>
                    </div>
                    <div class="program-badge popular">Popular</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Student Housing Program</h3>
                    <p class="program-description">Dedicated housing for students including dormitories, shared apartments, and study facilities near educational institutions.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Study-friendly environment</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Security services</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Internet access</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Recreation facilities</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">567</span>
                            <span class="stat-label">Student Beds</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">₣8,000</span>
                            <span class="stat-label">Monthly Rent</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">View Facilities</button>
                    </div>
                </div>
            </div>

            <!-- Senior Housing -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">elderly</span>
                    </div>
                    <div class="program-badge active">Active</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Senior Housing Program</h3>
                    <p class="program-description">Specialized housing for elderly residents with accessibility features, healthcare services, and community activities.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Accessibility features</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Healthcare services</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Community activities</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>24/7 support</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">234</span>
                            <span class="stat-label">Senior Units</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">₣12,000</span>
                            <span class="stat-label">Monthly Rent</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">View Services</button>
                    </div>
                </div>
            </div>

            <!-- Emergency Housing -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">emergency</span>
                    </div>
                    <div class="program-badge critical">Critical</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Emergency Housing Program</h3>
                    <p class="program-description">Temporary housing for families facing homelessness, domestic violence, or other emergency situations.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Immediate placement</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Support services</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Counseling services</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Transition assistance</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">89</span>
                            <span class="stat-label">Emergency Units</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">24-48h</span>
                            <span class="stat-label">Placement Time</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Get Help</button>
                        <button class="btn btn-sm btn-outline">24/7 Hotline</button>
                    </div>
                </div>
            </div>

            <!-- Homeownership Program -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">key</span>
                    </div>
                    <div class="program-badge expanding">Expanding</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Homeownership Program</h3>
                    <p class="program-description">Support for first-time homebuyers including down payment assistance, mortgage counseling, and affordable homeownership opportunities.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Down payment assistance</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Mortgage counseling</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Financial education</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Homebuyer workshops</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">156</span>
                            <span class="stat-label">Homeowners Assisted</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">₣2M</span>
                            <span class="stat-label">Assistance Provided</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">View Workshops</button>
                    </div>
                </div>
            </div>

            <!-- Urban Development -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">location_city</span>
                    </div>
                    <div class="program-badge new">New</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Urban Development Program</h3>
                    <p class="program-description">Comprehensive urban development including new housing construction, infrastructure improvement, and community revitalization.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>New housing construction</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Infrastructure development</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Community revitalization</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Sustainable development</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">45</span>
                            <span class="stat-label">Development Projects</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">678</span>
                            <span class="stat-label">New Units Planned</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Learn More</button>
                        <button class="btn btn-sm btn-outline">View Projects</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Housing Application -->
<section class="housing-application-section" id="housing-application">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Housing Application</h2>
            <p class="section-subtitle">Apply for public housing programs and assistance</p>
        </div>

        <div class="application-content">
            <div class="application-form">
                <h3 class="form-title">Public Housing Application</h3>
                <form id="housingApplicationForm">
                    <div class="form-section">
                        <h4 class="section-title">Applicant Information</h4>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Full Name *</label>
                                <input type="text" class="form-input" placeholder="Enter your full name" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Date of Birth *</label>
                                <input type="date" class="form-input" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Gender *</label>
                                <select class="form-select" required>
                                    <option value="">Select gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Marital Status *</label>
                                <select class="form-select" required>
                                    <option value="">Select marital status</option>
                                    <option value="single">Single</option>
                                    <option value="married">Married</option>
                                    <option value="divorced">Divorced</option>
                                    <option value="widowed">Widowed</option>
                                </select>
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

                        <div class="form-group">
                            <label class="form-label">Current Address *</label>
                            <input type="text" class="form-input" placeholder="Enter your current address" required>
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
                                    <option value="up-station">Up Station</option>
                                    <option value="down-station">Down Station</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Length of Residence in Bamenda *</label>
                                <input type="number" class="form-input" placeholder="Years in Bamenda" min="0" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Household Information</h4>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Household Size *</label>
                                <input type="number" class="form-input" placeholder="Number of people in household" min="1" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Number of Children *</label>
                                <input type="number" class="form-input" placeholder="Number of children under 18" min="0" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Number of Elderly *</label>
                                <input type="number" class="form-input" placeholder="Number of people over 60" min="0" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Number of Disabled *</label>
                                <input type="number" class="form-input" placeholder="Number of disabled persons" min="0" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Household Income (Monthly) *</label>
                            <input type="number" class="form-input" placeholder="Total monthly household income in FCFA" min="0" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Current Housing Situation *</label>
                            <select class="form-select" required>
                                <option value="">Select current situation</option>
                                <option value="renting">Renting</option>
                                <option value="living-with-family">Living with family</option>
                                <option value="homeless">Homeless</option>
                                <option value="subletting">Subletting</option>
                                <option value="temporary">Temporary housing</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Current Monthly Rent *</label>
                            <input type="number" class="form-input" placeholder="Current monthly rent in FCFA" min="0" required>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Housing Preferences</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Housing Program *</label>
                            <select class="form-select" required>
                                <option value="">Select housing program</option>
                                <option value="affordable">Affordable Housing</option>
                                <option value="student">Student Housing</option>
                                <option value="senior">Senior Housing</option>
                                <option value="emergency">Emergency Housing</option>
                                <option value="homeownership">Homeownership Program</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Housing Type Preference *</label>
                            <select class="form-select" required>
                                <option value="">Select housing type</option>
                                <option value="apartment">Apartment</option>
                                <option value="house">House</option>
                                <option value="studio">Studio</option>
                                <option value="shared">Shared accommodation</option>
                                <option value="dormitory">Dormitory</option>
                            </select>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Bedrooms Required *</label>
                                <select class="form-select" required>
                                    <option value="">Select bedrooms</option>
                                    <option value="studio">Studio</option>
                                    <option value="1">1 Bedroom</option>
                                    <option value="2">2 Bedrooms</option>
                                    <option value="3">3 Bedrooms</option>
                                    <option value="4+">4+ Bedrooms</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Preferred Area *</label>
                                <select class="form-select" required>
                                    <option value="">Select preferred area</option>
                                    <option value="city-center">City Center</option>
                                    <option value="nkwen">Nkwen</option>
                                    <option value="mankon">Mankon</option>
                                    <option value="bambili">Bambili</option>
                                    <option value="bambui">Bambui</option>
                                    <option value="any">Any area</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Special Requirements</label>
                            <textarea class="form-textarea" rows="3" placeholder="Any special housing requirements (accessibility, proximity to services, etc.)"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Reason for Housing Application *</label>
                            <textarea class="form-textarea" rows="4" placeholder="Explain why you need housing assistance" required></textarea>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Supporting Documents</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Required Documents *</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="documents" value="id" required>
                                    <span class="checkmark"></span>
                                    Valid ID Card (National ID, Passport)
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="documents" value="birth" required>
                                    <span class="checkmark"></span>
                                    Birth Certificates (for all household members)
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="documents" value="income" required>
                                    <span class="checkmark"></span>
                                    Proof of Income (Salary slips, Bank statements)
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="documents" value="residence" required>
                                    <span class="checkmark"></span>
                                    Proof of Residence (Utility bills, Rent receipts)
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Upload Documents</label>
                            <div class="file-upload">
                                <input type="file" id="housingUpload" accept=".pdf,.jpg,.jpeg,.png" multiple>
                                <label for="housingUpload" class="file-upload-label">
                                    <span class="material-symbols-outlined">upload_file</span>
                                    <span>Upload required documents</span>
                                    <small>PDF, JPG, PNG files (Max 5MB per file)</small>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Additional Information</h4>
                        
                        <div class="form-group">
                            <label class="form-label">How did you hear about our housing programs? *</label>
                            <select class="form-select" required>
                                <option value="">Select option</option>
                                <option value="website">City Council Website</option>
                                <option value="social-media">Social Media</option>
                                <option value="friend">Friend/Neighbor</option>
                                <option value="office">City Council Office</option>
                                <option value="community-center">Community Center</option>
                                <option value="advertisement">Advertisement</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Declaration *</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="declaration" required>
                                    <span class="checkmark"></span>
                                    I declare that all information provided is true and accurate. I understand that false information may result in the rejection of my application and possible legal action. I authorize the City Council to verify all information provided.
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

<!-- Housing Support Services -->
<section class="housing-support-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Housing Support Services</h2>
            <p class="section-subtitle">Additional support services for housing residents</p>
        </div>

        <div class="support-grid">
            <!-- Housing Counseling -->
            <div class="support-card">
                <div class="support-icon">
                    <span class="material-symbols-outlined">support_agent</span>
                </div>
                <h3 class="support-title">Housing Counseling</h3>
                <p class="support-description">Professional counseling services for housing-related issues including budget management, tenancy rights, and housing stability.</p>
                <div class="support-services">
                    <div class="service-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Budget counseling</span>
                    </div>
                    <div class="service-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Tenancy rights education</span>
                    </div>
                    <div class="service-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Housing stability planning</span>
                    </div>
                    <div class="service-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Financial literacy training</span>
                    </div>
                </div>
                <button class="btn btn-primary">Get Counseling</button>
            </div>

            <!-- Legal Assistance -->
            <div class="support-card">
                <div class="support-icon">
                    <span class="material-symbols-outlined">gavel</span>
                </div>
                <h3 class="support-title">Legal Assistance</h3>
                <p class="support-description">Legal support for housing-related matters including landlord-tenant disputes, eviction prevention, and housing rights.</p>
                <div class="support-services">
                    <div class="service-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Landlord-tenant mediation</span>
                    </div>
                    <div class="service-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Eviction prevention</span>
                    </div>
                    <div class="service-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Housing rights advocacy</span>
                    </div>
                    <div class="service-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Legal document assistance</span>
                    </div>
                </div>
                <button class="btn btn-primary">Get Legal Help</button>
            </div>

            <!-- Employment Services -->
            <div class="support-card">
                <div class="support-icon">
                    <span class="material-symbols-outlined">work</span>
                </div>
                <h3 class="support-title">Employment Services</h3>
                <p class="support-description">Employment assistance and job training programs to help residents achieve financial independence and housing stability.</p>
                <div class="support-services">
                    <div class="service-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Job placement services</span>
                    </div>
                    <div class="service-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Vocational training</span>
                    </div>
                    <div class="service-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Resume building</span>
                    </div>
                    <div class="service-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Entrepreneurship support</span>
                    </div>
                </div>
                <button class="btn btn-primary">Get Employment Help</button>
            </div>

            <!-- Health Services -->
            <div class="support-card">
                <div class="support-icon">
                    <span class="material-symbols-outlined">health_and_safety</span>
                </div>
                <h3 class="support-title">Health Services</h3>
                <p class="support-description">Healthcare support and wellness programs to ensure residents' physical and mental well-being.</p>
                <div class="support-services">
                    <div class="service-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Health screenings</span>
                    </div>
                    <div class="service-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Mental health support</span>
                    </div>
                    <div class="service-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Wellness programs</span>
                    </div>
                    <div class="service-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Health education</span>
                    </div>
                </div>
                <button class="btn btn-primary">Get Health Support</button>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Common questions about public housing services</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Who is eligible for public housing?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Eligibility varies by program but generally includes low-income families, elderly persons, students, people with disabilities, and those facing homelessness. Specific income limits and residency requirements apply.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How long is the waiting list?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Waiting list times vary by program and housing type. Emergency housing has immediate availability, while affordable housing may have waiting periods of 6-18 months depending on demand.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What documents are required?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Required documents typically include valid ID, birth certificates, proof of income, proof of residence, and any special needs documentation. Additional documents may be required for specific programs.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How is rent calculated?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Rent is typically calculated as a percentage of household income, usually 30% for affordable housing programs. Specific rates vary by program and household size.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Can I transfer to a different unit?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <span>Transfers may be possible based on changing household needs, unit availability, and program requirements. Contact your housing case worker for transfer options.</span>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What happens if my income changes?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>You must report any income changes to the housing authority. Significant income increases may affect your eligibility or rent amount, while decreases may qualify you for additional assistance.</p>
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
/* Public Housing Page Styles */
.public-housing-hero {
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

/* Housing Statistics Section */
.housing-stats-section {
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

/* Housing Programs Section */
.housing-programs-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.programs-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.program-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.program-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.program-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.program-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.program-icon .material-symbols-outlined {
    font-size: 2rem;
}

.program-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.program-badge.flagship {
    background-color: var(--primary);
    color: var(--on-primary);
}

.program-badge.popular {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.program-badge.active {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.program-badge.critical {
    background-color: var(--error);
    color: var(--on-error);
}

.program-badge.expanding {
    background-color: var(--surface-variant);
    color: var(--on-surface-variant);
}

.program-badge.new {
    background-color: var(--error);
    color: var(--on-error);
}

.program-content {
    padding: var(--spacing-lg);
}

.program-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.program-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.program-features {
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

.program-stats {
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
    color: var(--primary);
    display: block;
    margin-bottom: var(--spacing-xs);
}

.stat-label {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
    text-transform: uppercase;
}

.program-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Housing Application Section */
.housing-application-section {
    padding: var(--spacing-3xl) 0;
}

.application-content {
    display: flex;
    justify-content: center;
}

.application-form {
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
    border-color: var(--primary);
    background-color: var(--primary-container);
}

.file-upload-label .material-symbols-outlined {
    font-size: 2rem;
    color: var(--primary);
}

.file-upload-label span {
    color: var(--on-surface);
}

.file-upload-label small {
    color: var(--on-surface-variant);
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

/* Housing Support Section */
.housing-support-section {
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

.support-services {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

.service-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    justify-content: center;
}

.service-item .material-symbols-outlined {
    font-size: 1rem;
    color: var(--tertiary);
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
    
    .programs-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
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
    
    .program-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .application-form {
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
    
    .program-actions {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .program-actions .btn {
        width: 100%;
    }
}
</style>

<script>
// Quick action functions
function openAffordableHousing() {
    document.getElementById('housing-programs').scrollIntoView({ behavior: 'smooth' });
}

function openRentalAssistance() {
    document.getElementById('housing-programs').scrollIntoView({ behavior: 'smooth' });
}

function openHousingApplication() {
    document.getElementById('housing-application').scrollIntoView({ behavior: 'smooth' });
}

function openUrbanDevelopment() {
    document.getElementById('housing-programs').scrollIntoView({ behavior: 'smooth' });
}

function openHousingMaintenance() {
    alert('Housing maintenance portal would open here. In production, this would show maintenance request forms, service schedules, and maintenance tracking.');
}

function openHousingSupport() {
    document.querySelector('.housing-support-section').scrollIntoView({ behavior: 'smooth' });
}

// Program actions
document.querySelectorAll('.program-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Apply')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
            alert(`Applying for: "${programTitle}"`);
        });
    }
    
    if (button.textContent.includes('Get')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent);
            alert(`Getting help from: "${programTitle}"`);
        });
    }
    
    if (button.textContent.includes('Learn')) {
        button.addEventListener('click', function() {
            alert('Homeownership program information would open here. In production, this would show detailed program information, eligibility requirements, and application process.');
        });
    }
});

document.querySelectorAll('.program-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('View')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
            alert(`Viewing details for: "${programTitle}"`);
        });
    }
    
    if (button.textContent.includes('24/7')) {
        button.addEventListener('click', function() {
            alert('Emergency housing hotline: 119 - Available 24/7 for emergency housing assistance');
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
});

// Housing application form submission
document.getElementById('housingApplicationForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate required fields
    const fullName = document.querySelector('input[placeholder*="name"]').value;
    const dateOfBirth = document.querySelector('input[type="date"]').value;
    const gender = document.querySelector('select[required]').value;
    const maritalStatus = document.querySelectorAll('select[required]')[1].value;
    const phone = document.querySelector('input[placeholder*="phone"]').value;
    const email = document.querySelector('input[placeholder*="email"]').value;
    const address = document.querySelector('input[placeholder*="address"]').value;
    const area = document.querySelectorAll('select[required]')[2].value;
    const residence = document.querySelector('input[type="number"]').value;
    const householdSize = document.querySelectorAll('input[type="number"]')[1].value;
    const children = document.querySelectorAll('input[type="number"]')[2].value;
    const elderly = document.querySelectorAll('input[type="number"]')[3].value;
    const disabled = document.querySelectorAll('input[type="number"]')[4].value;
    const income = document.querySelector('input[placeholder*="income"]').value;
    const currentSituation = document.querySelectorAll('select[required]')[3].value;
    const currentRent = document.querySelector('input[placeholder*="rent"]').value;
    const program = document.querySelectorAll('select[required]')[4].value;
    const housingType = document.querySelectorAll('select[required]')[5].value;
    const bedrooms = document.querySelectorAll('select[required]')[6].value;
    const preferredArea = document.querySelectorAll('select[required]')[7].value;
    const reason = document.querySelector('textarea[required]').value;
    const documents = document.querySelectorAll('input[name="documents"]:checked');
    const howHeard = document.querySelectorAll('select[required]')[8].value;
    const declaration = document.querySelector('input[name="declaration"]:checked');
    
    if (!fullName || !dateOfBirth || !gender || !maritalStatus || !phone || !email || !address || !area || !residence || !householdSize || !children || !elderly || !disabled || !income || !currentSituation || !currentRent || !program || !housingType || !bedrooms || !preferredArea || !reason || documents.length !== 4 || !howHeard || !declaration) {
        alert('Please fill in all required fields and upload all required documents.');
        return;
    }
    
    // Validate age requirement
    const age = calculateAge(dateOfBirth);
    if (age < 18) {
        alert('Applicants must be at least 18 years old to apply for housing programs.');
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
        alert('Please enter a valid phone number in the format: +237 233 000 000');
        return;
    }
    
    alert('Housing application submitted successfully! We will review your application and contact you within 14-21 business days regarding your application status and next steps.');
    // In production, this would submit the housing application
});

// Calculate age from date of birth
function calculateAge(dob) {
    const today = new Date();
    const birthDate = new Date(dob);
    let age = today.getFullYear() - birthDate.getFullYear();
    const monthDiff = today.getMonth() - birthDate.getMonth();
    
    if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
    
    return age;
}

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

// Auto-refresh housing statistics
function refreshHousingStats() {
    // In production, this would fetch real-time housing statistics
    console.log('Refreshing public housing statistics...');
    
    // Simulate housing unit updates
    const unitCountElement = document.querySelector('.stat-number');
    if (unitCountElement && unitCountElement.textContent.includes(',')) {
        // Simulate real-time housing units
        const currentCount = parseInt(unitCountElement.textContent.replace(',', ''));
        const increment = Math.floor(Math.random() * 3) + 1;
        const newCount = currentCount + increment;
        unitCountElement.textContent = newCount.toLocaleString();
    }
}

// Refresh statistics every 60 seconds
setInterval(refreshHousingStats, 60000);
</script>
