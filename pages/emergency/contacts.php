<?php
/**
 * Bamenda City Council E-Governance Platform
 * Emergency Contacts Page
 */

// Set page metadata
$page_title = 'Emergency Contacts | Bamenda City Council';
$page_description = 'Access emergency contact numbers, hotlines, and crisis response services for immediate assistance in Bamenda.';
$page_keywords = 'emergency contacts, crisis numbers, emergency services, hotlines, Bamenda emergency';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Emergency', 'url' => '../index.php'],
    ['title' => 'Emergency Contacts', 'url' => '#']
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
            <span class="badge badge-tertiary">Emergency Contacts</span>
            <h1 class="hero-title">Emergency Assistance</h1>
            <p class="hero-subtitle">
                Quick access to emergency contacts, hotlines, and crisis response services for immediate assistance in Bamenda.
            </p>
            <div class="hero-actions">
                <a href="#emergency-numbers" class="btn btn-lg btn-tertiary">
                    <span class="material-symbols-outlined">emergency</span>
                    Emergency Numbers
                </a>
                <a href="#quick-dial" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">call</span>
                    Quick Dial
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Alert Banner -->
<section class="emergency-alert-banner">
    <div class="container">
        <div class="alert-content">
            <div class="alert-icon">
                <span class="material-symbols-outlined">warning</span>
            </div>
            <div class="alert-text">
                <strong>Emergency:</strong> For immediate life-threatening emergencies, call 119 or go to the nearest hospital emergency room.
            </div>
            <button class="btn btn-sm btn-primary" onclick="callEmergency()">Call 119 Now</button>
        </div>
    </div>
</section>

<!-- Quick Emergency Numbers -->
<section class="quick-emergency-section" id="emergency-numbers">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Emergency Numbers</h2>
            <p class="section-subtitle">Critical emergency contacts for immediate assistance</p>
        </div>

        <div class="emergency-numbers-grid">
            <div class="emergency-number-card urgent">
                <div class="number-icon">
                    <span class="material-symbols-outlined">emergency</span>
                </div>
                <div class="number-content">
                    <h3 class="number-title">General Emergency</h3>
                    <div class="number-display">119</div>
                    <p class="number-description">For all life-threatening emergencies, fires, accidents, and immediate police assistance.</p>
                    <div class="number-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>24/7 Available</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Bamenda Wide</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">priority_high</span>
                            <span>Highest Priority</span>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-primary" onclick="callEmergency()">Call 119</button>
                </div>
            </div>

            <div class="emergency-number-card medical">
                <div class="number-icon">
                    <span class="material-symbols-outlined">medical_services</span>
                </div>
                <div class="number-content">
                    <h3 class="number-title">Medical Emergency</h3>
                    <div class="number-display">120</div>
                    <p class="number-description">For medical emergencies, ambulance services, and hospital emergency coordination.</p>
                    <div class="number-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>24/7 Available</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">local_hospital</span>
                            <span>Ambulance Dispatch</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">health_and_safety</span>
                            <span>Medical Staff</span>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-primary" onclick="callMedical()">Call 120</button>
                </div>
            </div>

            <div class="emergency-number-card fire">
                <div class="number-icon">
                    <span class="material-symbols-outlined">local_fire_department</span>
                </div>
                <div class="number-content">
                    <h3 class="number-title">Fire Emergency</h3>
                    <div class="number-display">121</div>
                    <p class="number-description">For fires, fire prevention, and fire safety emergencies throughout Bamenda.</p>
                    <div class="number-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>24/7 Available</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">local_fire_department</span>
                            <span>Fire Department</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">water_drop</span>
                            <span>Fire Trucks</span>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-primary" onclick="callFire()">Call 121</button>
                </div>
            </div>

            <div class="emergency-number-card police">
                <div class="number-icon">
                    <span class="material-symbols-outlined">local_police</span>
                </div>
                <div class="number-content">
                    <h3 class="number-title">Police Emergency</h3>
                    <div class="number-display">122</div>
                    <p class="number-description">For police assistance, crimes in progress, and public safety concerns.</p>
                    <div class="number-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>24/7 Available</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">security</span>
                            <span>Police Response</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">gavel</span>
                            <span>Law Enforcement</span>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-primary" onclick="callPolice()">Call 122</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Essential Services -->
<section class="essential-services-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Essential Services</h2>
            <p class="section-subtitle">Important non-emergency contacts for essential services</p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">local_hospital</span>
                </div>
                <h3 class="service-title">Regional Hospital</h3>
                <div class="service-number">+237 233 123 456</div>
                <p class="service-description">Main hospital for medical care, emergencies, and specialized treatments.</p>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">location_on</span>
                        <span>Bamenda Regional Hospital</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>24/7 Emergency</span>
                    </div>
                </div>
                <div class="service-actions">
                    <button class="btn btn-sm btn-primary">Call Now</button>
                    <button class="btn btn-sm btn-outline">Get Directions</button>
                </div>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">bloodtype</span>
                </div>
                <h3 class="service-title">Blood Bank</h3>
                <div class="service-number">+237 233 124 567</div>
                <p class="service-description">Blood donation services and emergency blood supply for hospitals.</p>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">location_on</span>
                        <span>Regional Hospital Campus</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>8 AM - 6 PM Daily</span>
                    </div>
                </div>
                <div class="service-actions">
                    <button class="btn btn-sm btn-primary">Call Now</button>
                    <button class="btn btn-sm btn-outline">Get Directions</button>
                </div>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">medication</span>
                </div>
                <h3 class="service-title">Pharmacy Emergency</h3>
                <div class="service-number">+237 233 125 678</div>
                <p class="service-description">24-hour pharmacy services for emergency medications and prescriptions.</p>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">location_on</span>
                        <span>City Center Pharmacy</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>24/7 Service</span>
                    </div>
                </div>
                <div class="service-actions">
                    <button class="btn btn-sm btn-primary">Call Now</button>
                    <button class="btn btn-sm btn-outline">Get Directions</button>
                </div>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">plumbing</span>
                </div>
                <h3 class="service-title">Water Emergency</h3>
                <div class="service-number">+237 233 126 789</div>
                <p class="service-description">Emergency water supply issues, pipe bursts, and water contamination reports.</p>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">location_on</span>
                        <span>Water Utility Office</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>24/7 Emergency Line</span>
                    </div>
                </div>
                <div class="service-actions">
                    <button class="btn btn-sm btn-primary">Call Now</button>
                    <button class="btn btn-sm btn-outline">Report Issue</button>
                </div>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">electrical_services</span>
                </div>
                <h3 class="service-title">Power Emergency</h3>
                <div class="service-number">+237 233 127 890</div>
                <p class="service-description">Electrical emergencies, power outages, and electrical safety concerns.</p>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">location_on</span>
                        <span>Power Company Office</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>24/7 Emergency Line</span>
                    </div>
                </div>
                <div class="service-actions">
                    <button class="btn btn-sm btn-primary">Call Now</button>
                    <button class="btn btn-sm btn-outline">Report Outage</button>
                </div>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">gas_meter</span>
                </div>
                <h3 class="service-title">Gas Emergency</h3>
                <div class="service-number">+237 233 128 901</div>
                <p class="service-description">Gas leaks, propane emergencies, and gas safety concerns.</p>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">location_on</span>
                        <span>Gas Company Office</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>24/7 Emergency Line</span>
                    </div>
                </div>
                <div class="service-actions">
                    <button class="btn btn-sm btn-primary">Call Now</button>
                    <button class="btn btn-sm btn-outline">Report Leak</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Specialized Emergency Services -->
<section class="specialized-services-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Specialized Emergency Services</h2>
            <p class="section-subtitle">Specialized emergency contacts for specific situations</p>
        </div>

        <div class="specialized-grid">
            <div class="specialized-card">
                <div class="specialized-icon">
                    <span class="material-symbols-outlined">psychology</span>
                </div>
                <h3 class="specialized-title">Mental Health Crisis</h3>
                <div class="specialized-number">+237 233 234 567</div>
                <p class="specialized-description">24/7 mental health crisis support, counseling, and intervention services.</p>
                <div class="specialized-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">support_agent</span>
                        <span>Crisis Counselors</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>24/7 Available</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">privacy_tip</span>
                        <span>Confidential Support</span>
                    </div>
                </div>
                <button class="btn btn-primary">Call Now</button>
            </div>

            <div class="specialized-card">
                <div class="specialized-icon">
                    <span class="material-symbols-outlined">family_restroom</span>
                </div>
                <h3 class="specialized-title">Child Protection</h3>
                <div class="specialized-number">+237 233 235 678</div>
                <p class="specialized-description">Child abuse reporting, child protection services, and family emergency assistance.</p>
                <div class="specialized-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">child_care</span>
                        <span>Child Welfare</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>24/7 Hotline</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">security</span>
                        <span>Protection Services</span>
                    </div>
                </div>
                <button class="btn btn-primary">Call Now</button>
            </div>

            <div class="specialized-card">
                <div class="specialized-icon">
                    <span class="material-symbols-outlined">elderly</span>
                </div>
                <h3 class="specialized-title">Elderly Care</h3>
                <div class="specialized-number">+237 233 236 789</div>
                <p class="specialized-description">Emergency assistance for elderly residents, home care emergencies, and senior support services.</p>
                <div class="specialized-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">elderly_woman</span>
                        <span>Senior Support</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>24/7 Available</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">home_health</span>
                        <span>Home Care</span>
                    </div>
                </div>
                <button class="btn btn-primary">Call Now</button>
            </div>

            <div class="specialized-card">
                <div class="specialized-icon">
                    <span class="material-symbols-outlined">diversity_3</span>
                </div>
                <h3 class="specialized-title">Domestic Violence</h3>
                <div class="specialized-number">+237 233 237 890</div>
                <p class="specialized-description">Domestic violence support, shelter services, and victim assistance programs.</p>
                <div class="specialized-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">security</span>
                        <span>Protection Services</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>24/7 Hotline</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">home</span>
                        <span>Shelter Services</span>
                    </div>
                </div>
                <button class="btn btn-primary">Call Now</button>
            </div>

            <div class="specialized-card">
                <div class="specialized-icon">
                    <span class="material-symbols-outlined">medication_liquid</span>
                </div>
                <h3 class="specialized-title">Poison Control</h3>
                <div class="specialized-number">+237 233 238 901</div>
                <p class="specialized-description">Poison emergencies, overdose situations, and toxic substance exposure.</p>
                <div class="specialized-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">science</span>
                        <span>Toxicology Experts</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>24/7 Available</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">medical_services</span>
                        <span>Medical Advice</span>
                    </div>
                </div>
                <button class="btn btn-primary">Call Now</button>
            </div>

            <div class="specialized-card">
                <div class="specialized-icon">
                    <span class="material-symbols-outlined">crisis_alert</span>
                </div>
                <h3 class="specialized-title">Suicide Prevention</h3>
                <div class="specialized-number">+237 233 239 012</div>
                <p class="specialized-description">Suicide prevention hotline, crisis intervention, and mental health emergency support.</p>
                <div class="specialized-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">support_agent</span>
                        <span>Trained Counselors</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>24/7 Available</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">privacy_tip</span>
                        <span>Completely Confidential</span>
                    </div>
                </div>
                <button class="btn btn-primary">Call Now</button>
            </div>
        </div>
    </div>
</section>

<!-- Government Emergency Contacts -->
<section class="government-contacts-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Government Emergency Contacts</h2>
            <p class="section-subtitle">Official government emergency contacts and administrative services</p>
        </div>

        <div class="government-grid">
            <div class="government-card">
                <div class="government-icon">
                    <span class="material-symbols-outlined">account_balance</span>
                </div>
                <h3 class="government-title">City Council Emergency</h3>
                <div class="government-number">+237 233 345 678</div>
                <p class="government-description">City council emergency line for municipal services, infrastructure emergencies, and administrative issues.</p>
                <div class="government-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>24/7 Available</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">location_city</span>
                        <span>Municipal Services</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">engineering</span>
                        <span>Infrastructure</span>
                    </div>
                </div>
                <button class="btn btn-primary">Call Now</button>
            </div>

            <div class="government-card">
                <div class="government-icon">
                    <span class="material-symbols-outlined">gavel</span>
                </div>
                <h3 class="government-title">Legal Aid Emergency</h3>
                <div class="government-number">+237 233 346 789</div>
                <p class="government-description">Emergency legal assistance, human rights violations, and legal crisis intervention.</p>
                <div class="government-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>24/7 Available</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">balance</span>
                        <span>Legal Support</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">security</span>
                        <span>Human Rights</span>
                    </div>
                </div>
                <button class="btn btn-primary">Call Now</button>
            </div>

            <div class="government-card">
                <div class="government-icon">
                    <span class="material-symbols-outlined">coronavirus</span>
                </div>
                <h3 class="government-title">Public Health Emergency</h3>
                <div class="government-number">+237 233 347 890</div>
                <p class="government-description">Public health emergencies, disease outbreaks, epidemic response, and health crisis management.</p>
                <div class="government-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>24/7 Available</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">health_and_safety</span>
                        <span>Health Officials</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">biotech</span>
                        <span>Disease Control</span>
                    </div>
                </div>
                <button class="btn btn-primary">Call Now</button>
            </div>

            <div class="government-card">
                <div class="government-icon">
                    <span class="material-symbols-outlined">flood</span>
                </div>
                <h3 class="government-title">Disaster Response</h3>
                <div class="government-number">+237 233 348 901</div>
                <p class="government-description">Natural disasters, flood response, earthquake assistance, and disaster management coordination.</p>
                <div class="government-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>24/7 Available</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">warning</span>
                        <span>Disaster Management</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">groups</span>
                        <span>Rescue Teams</span>
                    </div>
                </div>
                <button class="btn btn-primary">Call Now</button>
            </div>
        </div>
    </div>
</section>

<!-- Quick Dial Feature -->
<section class="quick-dial-section" id="quick-dial">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Quick Dial</h2>
            <p class="section-subtitle">Fast access to frequently used emergency numbers</p>
        </div>

        <div class="quick-dial-interface">
            <div class="dial-pad">
                <div class="dial-display">
                    <input type="tel" id="dialNumber" placeholder="Enter number" readonly>
                    <div class="dial-actions">
                        <button class="btn btn-sm btn-outline" onclick="clearDial()">Clear</button>
                        <button class="btn btn-sm btn-outline" onclick="deleteDigit()">Delete</button>
                    </div>
                </div>
                
                <div class="dial-buttons">
                    <div class="dial-row">
                        <button class="dial-btn" onclick="addDigit('1')">1</button>
                        <button class="dial-btn" onclick="addDigit('2')">2</button>
                        <button class="dial-btn" onclick="addDigit('3')">3</button>
                    </div>
                    <div class="dial-row">
                        <button class="dial-btn" onclick="addDigit('4')">4</button>
                        <button class="dial-btn" onclick="addDigit('5')">5</button>
                        <button class="dial-btn" onclick="addDigit('6')">6</button>
                    </div>
                    <div class="dial-row">
                        <button class="dial-btn" onclick="addDigit('7')">7</button>
                        <button class="dial-btn" onclick="addDigit('8')">8</button>
                        <button class="dial-btn" onclick="addDigit('9')">9</button>
                    </div>
                    <div class="dial-row">
                        <button class="dial-btn" onclick="addDigit('*')">*</button>
                        <button class="dial-btn" onclick="addDigit('0')">0</button>
                        <button class="dial-btn" onclick="addDigit('#')">#</button>
                    </div>
                </div>
                
                <button class="btn btn-lg btn-primary call-btn" onclick="makeCall()">
                    <span class="material-symbols-outlined">call</span>
                    Call
                </button>
            </div>

            <div class="speed-dial">
                <h3>Speed Dial</h3>
                <div class="speed-dial-grid">
                    <div class="speed-dial-item" onclick="quickCall('119')">
                        <div class="speed-icon urgent">
                            <span class="material-symbols-outlined">emergency</span>
                        </div>
                        <div class="speed-info">
                            <div class="speed-number">119</div>
                            <div class="speed-label">Emergency</div>
                        </div>
                    </div>

                    <div class="speed-dial-item" onclick="quickCall('120')">
                        <div class="speed-icon medical">
                            <span class="material-symbols-outlined">medical_services</span>
                        </div>
                        <div class="speed-info">
                            <div class="speed-number">120</div>
                            <div class="speed-label">Medical</div>
                        </div>
                    </div>

                    <div class="speed-dial-item" onclick="quickCall('121')">
                        <div class="speed-icon fire">
                            <span class="material-symbols-outlined">local_fire_department</span>
                        </div>
                        <div class="speed-info">
                            <div class="speed-number">121</div>
                            <div class="speed-label">Fire</div>
                        </div>
                    </div>

                    <div class="speed-dial-item" onclick="quickCall('122')">
                        <div class="speed-icon police">
                            <span class="material-symbols-outlined">local_police</span>
                        </div>
                        <div class="speed-info">
                            <div class="speed-number">122</div>
                            <div class="speed-label">Police</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Guidelines -->
<section class="emergency-guidelines-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Emergency Guidelines</h2>
            <p class="section-subtitle">Important information for handling emergency situations</p>
        </div>

        <div class="guidelines-grid">
            <div class="guideline-card">
                <div class="guideline-icon">
                    <span class="material-symbols-outlined">priority_high</span>
                </div>
                <h3 class="guideline-title">Stay Calm</h3>
                <p class="guideline-description">Remain calm and focused. Take deep breaths and assess the situation before taking action.</p>
            </div>

            <div class="guideline-card">
                <div class="guideline-icon">
                    <span class="material-symbols-outlined">location_searching</span>
                </div>
                <h3 class="guideline-title">Know Your Location</h3>
                <p class="guideline-description">Be aware of your exact location, nearby landmarks, and address to provide clear information.</p>
            </div>

            <div class="guideline-card">
                <div class="guideline-icon">
                    <span class="material-symbols-outlined">call</span>
                </div>
                <h3 class="guideline-title">Call Emergency Services</h3>
                <p class="guideline-description">Call the appropriate emergency number immediately and provide clear, concise information.</p>
            </div>

            <div class="guideline-card">
                <div class="guideline-icon">
                    <span class="material-symbols-outlined">info</span>
                </div>
                <h3 class="guideline-title">Provide Clear Information</h3>
                <p class="guideline-description">State your name, location, nature of emergency, and number of people involved.</p>
            </div>

            <div class="guideline-card">
                <div class="guideline-icon">
                    <span class="material-symbols-outlined">security</span>
                </div>
                <h3 class="guideline-title">Ensure Safety</h3>
                <p class="guideline-description">Move to a safe location if possible and follow instructions from emergency responders.</p>
            </div>

            <div class="guideline-card">
                <div class="guideline-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <h3 class="guideline-title">Help Others</h3>
                <p class="guideline-description">Assist others if it's safe to do so, but prioritize your own safety first.</p>
            </div>
        </div>

        <div class="emergency-tips">
            <h3>Important Tips</h3>
            <div class="tips-list">
                <div class="tip-item">
                    <span class="tip-icon">
                        <span class="material-symbols-outlined">phone_iphone</span>
                    </span>
                    <div class="tip-content">
                        <h4>Keep Phone Charged</h4>
                        <p>Always keep your phone charged and carry a portable charger for emergency situations.</p>
                    </div>
                </div>

                <div class="tip-item">
                    <span class="tip-icon">
                        <span class="material-symbols-outlined">contact_phone</span>
                    </span>
                    <div class="tip-content">
                        <h4>Save Emergency Numbers</h4>
                        <p>Save important emergency numbers in your phone contacts for quick access.</p>
                    </div>
                </div>

                <div class="tip-item">
                    <span class="tip-icon">
                        <span class="material-symbols-outlined">medical_information</span>
                    </span>
                    <div class="tip-content">
                        <h4>Medical Information</h4>
                        <p>Keep important medical information readily available for emergency responders.</p>
                    </div>
                </div>

                <div class="tip-item">
                    <span class="tip-icon">
                        <span class="material-symbols-outlined">family_restroom</span>
                    </span>
                    <div class="tip-content">
                        <h4>Emergency Contacts</h4>
                        <p>Inform family members about your location and activities when in potentially risky situations.</p>
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
/* Emergency Contacts Page Styles */
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

/* Emergency Alert Banner */
.emergency-alert-banner {
    background-color: var(--error);
    color: var(--on-error);
    padding: var(--spacing-md) 0;
}

.alert-content {
    display: flex;
    align-items: center;
    gap: var(--spacing-lg);
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 var(--spacing-lg);
}

.alert-icon {
    width: 2.5rem;
    height: 2.5rem;
    background-color: var(--on-error);
    color: var(--error);
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
}

.alert-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.alert-text {
    flex: 1;
    font-weight: 600;
}

/* Quick Emergency Section */
.quick-emergency-section {
    padding: var(--spacing-3xl) 0;
}

.emergency-numbers-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.emergency-number-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 2px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.emergency-number-card.urgent {
    border-color: var(--error);
    background: linear-gradient(135deg, var(--error-container) 0%, var(--surface-container-lowest) 100%);
}

.emergency-number-card.medical {
    border-color: var(--tertiary);
    background: linear-gradient(135deg, var(--tertiary-container) 0%, var(--surface-container-lowest) 100%);
}

.emergency-number-card.fire {
    border-color: var(--secondary);
    background: linear-gradient(135deg, var(--secondary-container) 0%, var(--surface-container-lowest) 100%);
}

.emergency-number-card.police {
    border-color: var(--primary);
    background: linear-gradient(135deg, var(--primary-container) 0%, var(--surface-container-lowest) 100%);
}

.emergency-number-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.number-icon {
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

.emergency-number-card.urgent .number-icon {
    background-color: var(--error);
    color: var(--on-error);
}

.emergency-number-card.medical .number-icon {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.emergency-number-card.fire .number-icon {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.emergency-number-card.police .number-icon {
    background-color: var(--primary);
    color: var(--on-primary);
}

.number-icon .material-symbols-outlined {
    font-size: 2rem;
}

.number-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.number-display {
    font-size: 3rem;
    font-weight: 800;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
    line-height: 1;
}

.emergency-number-card.urgent .number-display {
    color: var(--error);
}

.emergency-number-card.medical .number-display {
    color: var(--tertiary);
}

.emergency-number-card.fire .number-display {
    color: var(--secondary);
}

.emergency-number-card.police .number-display {
    color: var(--primary);
}

.number-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.number-features {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-sm);
    justify-content: center;
    margin-bottom: var(--spacing-lg);
}

.feature-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-xs);
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.feature-item .material-symbols-outlined {
    font-size: 1rem;
    color: var(--primary);
}

/* Essential Services Section */
.essential-services-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.service-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.service-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.service-icon {
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

.service-icon .material-symbols-outlined {
    font-size: 2rem;
}

.service-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
    text-align: center;
}

.service-number {
    font-size: 1.5rem;
    font-weight: 800;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
    text-align: center;
}

.service-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
    text-align: center;
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
    color: var(--on-surface-variant);
    font-size: 0.875rem;
}

.detail-item .material-symbols-outlined {
    font-size: 1.25rem;
    color: var(--primary);
}

.service-actions {
    display: flex;
    gap: var(--spacing-sm);
    justify-content: center;
}

/* Specialized Services Section */
.specialized-services-section {
    padding: var(--spacing-3xl) 0;
}

.specialized-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.specialized-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.specialized-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.specialized-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--tertiary);
    color: var(--on-tertiary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-lg);
}

.specialized-icon .material-symbols-outlined {
    font-size: 2rem;
}

.specialized-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.specialized-number {
    font-size: 1.5rem;
    font-weight: 800;
    color: var(--tertiary);
    margin-bottom: var(--spacing-md);
}

.specialized-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.specialized-features {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-sm);
    justify-content: center;
    margin-bottom: var(--spacing-lg);
}

/* Government Contacts Section */
.government-contacts-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.government-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.government-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.government-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.government-icon {
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

.government-icon .material-symbols-outlined {
    font-size: 2rem;
}

.government-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.government-number {
    font-size: 1.5rem;
    font-weight: 800;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.government-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.government-features {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-sm);
    justify-content: center;
    margin-bottom: var(--spacing-lg);
}

/* Quick Dial Section */
.quick-dial-section {
    padding: var(--spacing-3xl) 0;
}

.quick-dial-interface {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--spacing-2xl);
    max-width: 800px;
    margin: 0 auto;
}

.dial-pad {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
}

.dial-display {
    margin-bottom: var(--spacing-lg);
}

.dial-display input {
    width: 100%;
    padding: var(--spacing-lg);
    font-size: 1.5rem;
    font-weight: 700;
    text-align: center;
    border: 2px solid var(--outline-variant);
    border-radius: var(--radius-md);
    background-color: var(--surface-container);
    color: var(--primary);
}

.dial-actions {
    display: flex;
    gap: var(--spacing-sm);
    margin-top: var(--spacing-md);
}

.dial-buttons {
    margin-bottom: var(--spacing-lg);
}

.dial-row {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--spacing-md);
    margin-bottom: var(--spacing-md);
}

.dial-btn {
    padding: var(--spacing-lg);
    font-size: 1.25rem;
    font-weight: 700;
    background-color: var(--surface-container);
    border: 2px solid var(--outline-variant);
    border-radius: var(--radius-md);
    color: var(--primary);
    cursor: pointer;
    transition: all 0.2s ease;
}

.dial-btn:hover {
    background-color: var(--primary);
    color: var(--on-primary);
    border-color: var(--primary);
}

.dial-btn:active {
    transform: scale(0.95);
}

.call-btn {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: var(--spacing-sm);
}

.speed-dial {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
}

.speed-dial h3 {
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
    text-align: center;
}

.speed-dial-grid {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-md);
}

.speed-dial-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-lg);
    padding: var(--spacing-md);
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
    cursor: pointer;
    transition: all 0.2s ease;
}

.speed-dial-item:hover {
    background-color: var(--surface-container-high);
    transform: translateX(4px);
}

.speed-icon {
    width: 3rem;
    height: 3rem;
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
}

.speed-icon.urgent {
    background-color: var(--error);
    color: var(--on-error);
}

.speed-icon.medical {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.speed-icon.fire {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.speed-icon.police {
    background-color: var(--primary);
    color: var(--on-primary);
}

.speed-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.speed-info {
    flex: 1;
}

.speed-number {
    font-size: 1.25rem;
    font-weight: 800;
    color: var(--primary);
}

.speed-label {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

/* Emergency Guidelines Section */
.emergency-guidelines-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.guidelines-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: var(--spacing-xl);
}

.guideline-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.guideline-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.guideline-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--error);
    color: var(--on-error);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-lg);
}

.guideline-icon .material-symbols-outlined {
    font-size: 2rem;
}

.guideline-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.guideline-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
}

.emergency-tips {
    margin-top: var(--spacing-2xl);
}

.emergency-tips h3 {
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
    text-align: center;
}

.tips-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-lg);
}

.tip-item {
    display: flex;
    gap: var(--spacing-lg);
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
}

.tip-icon {
    width: 3rem;
    height: 3rem;
    background-color: var(--tertiary);
    color: var(--on-tertiary);
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.tip-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.tip-content {
    flex: 1;
}

.tip-content h4 {
    font-size: 1rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.tip-content p {
    color: var(--on-surface-variant);
    font-size: 0.875rem;
    line-height: 1.5;
}

/* Responsive Design */
@media (max-width: 768px) {
    .emergency-numbers-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .services-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .specialized-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .government-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .quick-dial-interface {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .guidelines-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .tips-list {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .alert-content {
        flex-direction: column;
        text-align: center;
        gap: var(--spacing-md);
    }
}

@media (max-width: 480px) {
    .emergency-number-card {
        padding: var(--spacing-lg);
    }
    
    .number-display {
        font-size: 2.5rem;
    }
    
    .service-card {
        padding: var(--spacing-lg);
    }
    
    .specialized-card {
        padding: var(--spacing-lg);
    }
    
    .government-card {
        padding: var(--spacing-lg);
    }
    
    .dial-pad {
        padding: var(--spacing-lg);
    }
    
    .speed-dial {
        padding: var(--spacing-lg);
    }
    
    .guideline-card {
        padding: var(--spacing-lg);
    }
    
    .tip-item {
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: var(--spacing-md);
    }
    
    .dial-btn {
        padding: var(--spacing-md);
        font-size: 1.125rem;
    }
    
    .speed-dial-item {
        padding: var(--spacing-sm);
    }
    
    .speed-icon {
        width: 2.5rem;
        height: 2.5rem;
    }
    
    .speed-icon .material-symbols-outlined {
        font-size: 1.25rem;
    }
}
</style>

<script>
// Emergency call functions
function callEmergency() {
    if (confirm('Call 119 for emergency services?')) {
        window.location.href = 'tel:119';
    }
}

function callMedical() {
    if (confirm('Call 120 for medical emergency?')) {
        window.location.href = 'tel:120';
    }
}

function callFire() {
    if (confirm('Call 121 for fire emergency?')) {
        window.location.href = 'tel:121';
    }
}

function callPolice() {
    if (confirm('Call 122 for police emergency?')) {
        window.location.href = 'tel:122';
    }
}

// Service call functions
document.querySelectorAll('.service-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Call')) {
        button.addEventListener('click', function() {
            const serviceNumber = this.closest('.service-card').querySelector('.service-number').textContent;
            if (confirm(`Call ${serviceNumber}?`)) {
                window.location.href = `tel:${serviceNumber.replace(/[^\d+]/g, '')}`;
            }
        });
    }
});

// Specialized service call functions
document.querySelectorAll('.specialized-card .btn-primary').forEach(button => {
    if (button.textContent.includes('Call')) {
        button.addEventListener('click', function() {
            const serviceNumber = this.closest('.specialized-card').querySelector('.specialized-number').textContent;
            if (confirm(`Call ${serviceNumber}?`)) {
                window.location.href = `tel:${serviceNumber.replace(/[^\d+]/g, '')}`;
            }
        });
    }
});

// Government service call functions
document.querySelectorAll('.government-card .btn-primary').forEach(button => {
    if (button.textContent.includes('Call')) {
        button.addEventListener('click', function() {
            const serviceNumber = this.closest('.government-card').querySelector('.government-number').textContent;
            if (confirm(`Call ${serviceNumber}?`)) {
                window.location.href = `tel:${serviceNumber.replace(/[^\d+]/g, '')}`;
            }
        });
    }
});

// Quick dial functions
function addDigit(digit) {
    const dialNumber = document.getElementById('dialNumber');
    dialNumber.value += digit;
}

function deleteDigit() {
    const dialNumber = document.getElementById('dialNumber');
    dialNumber.value = dialNumber.value.slice(0, -1);
}

function clearDial() {
    const dialNumber = document.getElementById('dialNumber');
    dialNumber.value = '';
}

function makeCall() {
    const dialNumber = document.getElementById('dialNumber');
    const number = dialNumber.value;
    
    if (number) {
        if (confirm(`Call ${number}?`)) {
            window.location.href = `tel:${number}`;
        }
    } else {
        alert('Please enter a phone number');
    }
}

function quickCall(number) {
    if (confirm(`Call ${number} for emergency?`)) {
        window.location.href = `tel:${number}`;
    }
}

// Service action functions
document.querySelectorAll('.service-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Directions')) {
        button.addEventListener('click', function() {
            const serviceName = this.closest('.service-card').querySelector('.service-title').textContent;
            alert(`Getting directions to ${serviceName}. In production, this would open maps with directions.`);
        });
    }
    
    if (button.textContent.includes('Report')) {
        button.addEventListener('click', function() {
            const serviceName = this.closest('.service-card').querySelector('.service-title').textContent;
            alert(`Opening report form for ${serviceName}. In production, this would show a reporting interface.`);
        });
    }
});

// Keyboard support for dial pad
document.addEventListener('keydown', function(e) {
    const dialNumber = document.getElementById('dialNumber');
    if (e.target === dialNumber) return;
    
    if (e.key >= '0' && e.key <= '9') {
        addDigit(e.key);
    } else if (e.key === '*' || e.key === '#') {
        addDigit(e.key);
    } else if (e.key === 'Backspace' || e.key === 'Delete') {
        deleteDigit();
    } else if (e.key === 'Escape') {
        clearDial();
    } else if (e.key === 'Enter') {
        makeCall();
    }
});

// Auto-refresh emergency data
function refreshEmergencyData() {
    // In production, this would fetch real-time emergency data
    console.log('Refreshing emergency contact data...');
}

// Refresh data every 5 minutes
setInterval(refreshEmergencyData, 300000);

// Location-based emergency services (if geolocation is available)
function getLocationBasedEmergency() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            // In production, this would show location-specific emergency services
            console.log('Location detected:', position.coords.latitude, position.coords.longitude);
        });
    }
}

// Initialize location-based services
getLocationBasedEmergency();
</script>

