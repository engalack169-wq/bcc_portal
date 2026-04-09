<?php
/**
 * Bamenda City Council E-Governance Platform
 * Emergency Services Page
 */

// Set page metadata
$page_title = 'Emergency Services | Bamenda City Council';
$page_description = 'Access emergency services, medical emergencies, fire services, police response, and disaster management for Bamenda residents.';
$page_keywords = 'emergency services, medical emergency, fire department, police services, disaster management, Bamenda emergency';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Emergency', 'url' => '../index.php'],
    ['title' => 'Services', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero emergency-services-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-emergency-services.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Emergency Services</span>
            <h1 class="hero-title">Emergency Response & Management</h1>
            <p class="hero-subtitle">
                Comprehensive emergency services including medical response, fire services, police assistance, and disaster management for the safety and security of Bamenda residents.
            </p>
            <div class="hero-actions">
                <a href="#emergency-hotlines" class="btn btn-lg btn-danger">
                    <span class="material-symbols-outlined">emergency</span>
                    Emergency Hotlines
                </a>
                <a href="#report-emergency" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">report</span>
                    Report Emergency
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Emergency Actions</h2>
            <p class="section-subtitle">Quick access to emergency services and response</p>
        </div>

        <div class="actions-grid">
            <div class="action-card urgent" onclick="callEmergency()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">emergency</span>
                </div>
                <h3 class="action-title">Emergency Call</h3>
                <p class="action-description">Call 119 for immediate emergency assistance</p>
            </div>

            <div class="action-card medical" onclick="callMedical()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">medical_services</span>
                </div>
                <h3 class="action-title">Medical Emergency</h3>
                <p class="action-description">Request ambulance and medical assistance</p>
            </div>

            <div class="action-card fire" onclick="callFire()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">local_fire_department</span>
                </div>
                <h3 class="action-title">Fire Emergency</h3>
                <p class="action-description">Report fire and request fire department response</p>
            </div>

            <div class="action-card police" onclick="callPolice()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">local_police</span>
                </div>
                <h3 class="action-title">Police Assistance</h3>
                <p class="action-description">Request police assistance for security issues</p>
            </div>

            <div class="action-card disaster" onclick="callDisaster()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">warning</span>
                </div>
                <h3 class="action-title">Disaster Response</h3>
                <p class="action-description">Report natural disasters and emergencies</p>
            </div>

            <div class="action-card non-emergency" onclick="callNonEmergency()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">support_agent</span>
                </div>
                <h3 class="action-title">Non-Emergency</h3>
                <p class="action-description">Non-emergency assistance and information</p>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Statistics -->
<section class="emergency-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">timer</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">8 minutes</div>
                    <div class="stat-label">Average Response Time</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_down</span>
                        <span>-2 minutes faster</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">emergency_share</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">12,456</div>
                    <div class="stat-label">Emergency Calls Monthly</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+15% handled</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">verified</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">98.5%</div>
                    <div class="stat-label">Response Success Rate</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+3% improvement</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">156</div>
                    <div class="stat-label">Emergency Personnel</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+23 new staff</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Hotlines -->
<section class="emergency-hotlines-section" id="emergency-hotlines">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Emergency Hotlines</h2>
            <p class="section-subtitle">24/7 emergency contact numbers for immediate assistance</p>
        </div>

        <div class="hotlines-grid">
            <!-- General Emergency -->
            <div class="hotline-card urgent">
                <div class="hotline-header">
                    <div class="hotline-icon">
                        <span class="material-symbols-outlined">emergency</span>
                    </div>
                    <div class="hotline-badge">24/7</div>
                </div>
                <div class="hotline-content">
                    <h3 class="hotline-title">General Emergency</h3>
                    <div class="hotline-number">
                        <span class="number">119</span>
                        <span class="description">For all emergencies</span>
                    </div>
                    <p class="hotline-description">Main emergency hotline for immediate assistance with any type of emergency situation.</p>
                    <div class="hotline-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Immediate response</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>All emergency services</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Multi-language support</span>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-danger" onclick="callEmergency()">Call 119</button>
                </div>
            </div>

            <!-- Medical Emergency -->
            <div class="hotline-card medical">
                <div class="hotline-header">
                    <div class="hotline-icon">
                        <span class="material-symbols-outlined">medical_services</span>
                    </div>
                    <div class="hotline-badge">24/7</div>
                </div>
                <div class="hotline-content">
                    <h3 class="hotline-title">Medical Emergency</h3>
                    <div class="hotline-number">
                        <span class="number">120</span>
                        <span class="description">Ambulance & Medical</span>
                    </div>
                    <p class="hotline-description">Dedicated medical emergency line for ambulance services and medical assistance.</p>
                    <div class="hotline-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Ambulance dispatch</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Medical guidance</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Hospital coordination</span>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-primary" onclick="callMedical()">Call 120</button>
                </div>
            </div>

            <!-- Fire Emergency -->
            <div class="hotline-card fire">
                <div class="hotline-header">
                    <div class="hotline-icon">
                        <span class="material-symbols-outlined">local_fire_department</span>
                    </div>
                    <div class="hotline-badge">24/7</div>
                </div>
                <div class="hotline-content">
                    <h3 class="hotline-title">Fire Emergency</h3>
                    <div class="hotline-number">
                        <span class="number">121</span>
                        <span class="description">Fire Department</span>
                    </div>
                    <p class="hotline-description">Fire department hotline for fire emergencies, rescue operations, and fire safety.</p>
                    <div class="hotline-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Fire suppression</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Rescue operations</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Fire safety advice</span>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-primary" onclick="callFire()">Call 121</button>
                </div>
            </div>

            <!-- Police Emergency -->
            <div class="hotline-card police">
                <div class="hotline-header">
                    <div class="hotline-icon">
                        <span class="material-symbols-outlined">local_police</span>
                    </div>
                    <div class="hotline-badge">24/7</div>
                </div>
                <div class="hotline-content">
                    <h3 class="hotline-title">Police Emergency</h3>
                    <div class="hotline-number">
                        <span class="number">122</span>
                        <span class="description">Police Services</span>
                    </div>
                    <p class="hotline-description">Police emergency line for crime reporting, security issues, and police assistance.</p>
                    <div class="hotline-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Crime reporting</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Security assistance</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Emergency response</span>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-primary" onclick="callPolice()">Call 122</button>
                </div>
            </div>

            <!-- Disaster Management -->
            <div class="hotline-card disaster">
                <div class="hotline-header">
                    <div class="hotline-icon">
                        <span class="material-symbols-outlined">warning</span>
                    </div>
                    <div class="hotline-badge">24/7</div>
                </div>
                <div class="hotline-content">
                    <h3 class="hotline-title">Disaster Management</h3>
                    <div class="hotline-number">
                        <span class="number">123</span>
                        <span class="description">Disaster Response</span>
                    </div>
                    <p class="hotline-description">Disaster management hotline for natural disasters and large-scale emergencies.</p>
                    <div class="hotline-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Disaster coordination</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Evacuation assistance</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Emergency shelters</span>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-primary" onclick="callDisaster()">Call 123</button>
                </div>
            </div>

            <!-- Non-Emergency -->
            <div class="hotline-card non-emergency">
                <div class="hotline-header">
                    <div class="hotline-icon">
                        <span class="material-symbols-outlined">support_agent</span>
                    </div>
                    <div class="hotline-badge">Business Hours</div>
                </div>
                <div class="hotline-content">
                    <h3 class="hotline-title">Non-Emergency</h3>
                    <div class="hotline-number">
                        <span class="number">124</span>
                        <span class="description">Information & Support</span>
                    </div>
                    <p class="hotline-description">Non-emergency line for information, support, and non-urgent assistance.</p>
                    <div class="hotline-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Information services</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Administrative support</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>General inquiries</span>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-outline" onclick="callNonEmergency()">Call 124</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Services Overview -->
<section class="services-overview-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Emergency Services Overview</h2>
            <p class="section-subtitle">Comprehensive emergency services and response capabilities</p>
        </div>

        <div class="services-grid">
            <!-- Medical Services -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">medical_services</span>
                </div>
                <h3 class="service-title">Medical Emergency Services</h3>
                <p class="service-description">24/7 medical emergency response including ambulance services, emergency medical care, and hospital coordination.</p>
                <div class="service-stats">
                    <div class="stat-item">
                        <span class="stat-number">15</span>
                        <span class="stat-label">Ambulances</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">45</span>
                        <span class="stat-label">Medical Staff</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">6 min</span>
                        <span class="stat-label">Response Time</span>
                    </div>
                </div>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Emergency medical care</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Ambulance transport</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Hospital coordination</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Medical guidance</span>
                    </div>
                </div>
                <button class="btn btn-primary">Request Medical Help</button>
            </div>

            <!-- Fire Services -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">local_fire_department</span>
                </div>
                <h3 class="service-title">Fire & Rescue Services</h3>
                <p class="service-description">Professional fire fighting and rescue services including fire suppression, technical rescue, and fire safety education.</p>
                <div class="service-stats">
                    <div class="stat-item">
                        <span class="stat-number">8</span>
                        <span class="stat-label">Fire Stations</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">56</span>
                        <span class="stat-label">Firefighters</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">5 min</span>
                        <span class="stat-label">Response Time</span>
                    </div>
                </div>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Fire suppression</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Rescue operations</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Hazardous materials</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Fire safety education</span>
                    </div>
                </div>
                <button class="btn btn-primary">Report Fire Emergency</button>
            </div>

            <!-- Police Services -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">local_police</span>
                </div>
                <h3 class="service-title">Police & Security Services</h3>
                <p class="service-description">Law enforcement and security services including crime prevention, emergency response, and community policing.</p>
                <div class="service-stats">
                    <div class="stat-item">
                        <span class="stat-number">12</span>
                        <span class="stat-label">Police Stations</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">234</span>
                        <span class="stat-label">Police Officers</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">7 min</span>
                        <span class="stat-label">Response Time</span>
                    </div>
                </div>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Crime response</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Security assistance</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Traffic control</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Community policing</span>
                    </div>
                </div>
                <button class="btn btn-primary">Request Police Assistance</button>
            </div>

            <!-- Disaster Management -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">warning</span>
                </div>
                <h3 class="service-title">Disaster Management</h3>
                <p class="service-description">Comprehensive disaster management including early warning, evacuation, and emergency shelter coordination.</p>
                <div class="service-stats">
                    <div class="stat-item">
                        <span class="stat-number">5</span>
                        <span class="stat-label">Emergency Shelters</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">34</span>
                        <span class="stat-label">Disaster Staff</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">10 min</span>
                        <span class="stat-label">Response Time</span>
                    </div>
                </div>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Early warning systems</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Evacuation coordination</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Emergency shelters</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Relief distribution</span>
                    </div>
                </div>
                <button class="btn btn-primary">Report Disaster</button>
            </div>
        </div>
    </div>
</section>

<!-- Report Emergency -->
<section class="report-emergency-section" id="report-emergency">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Report Emergency</h2>
            <p class="section-subtitle">Quick emergency reporting and assistance request</p>
        </div>

        <div class="reporting-options">
            <div class="option-card urgent" onclick="reportUrgentEmergency()">
                <div class="option-icon">
                    <span class="material-symbols-outlined">priority_high</span>
                </div>
                <h3 class="option-title">Life-Threatening Emergency</h3>
                <p class="option-description">For immediate life-threatening emergencies requiring urgent assistance</p>
                <div class="option-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">phone</span>
                        <span>Call: 119</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">timer</span>
                        <span>Response: Immediate</span>
                    </div>
                </div>
                <button class="btn btn-lg btn-danger">Call Emergency</button>
            </div>

            <div class="option-card medical" onclick="reportMedicalEmergency()">
                <div class="option-icon">
                    <span class="material-symbols-outlined">medical_services</span>
                </div>
                <h3 class="option-title">Medical Emergency</h3>
                <p class="option-description">For medical emergencies, injuries, and health crises</p>
                <div class="option-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">phone</span>
                        <span>Call: 120</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">timer</span>
                        <span>Response: 5-8 minutes</span>
                    </div>
                </div>
                <button class="btn btn-lg btn-primary">Request Medical Help</button>
            </div>

            <div class="option-card fire" onclick="reportFireEmergency()">
                <div class="option-icon">
                    <span class="material-symbols-outlined">local_fire_department</span>
                </div>
                <h3 class="option-title">Fire Emergency</h3>
                <p class="option-description">For fires, explosions, and fire-related emergencies</p>
                <div class="option-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">phone</span>
                        <span>Call: 121</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">timer</span>
                        <span>Response: 3-5 minutes</span>
                    </div>
                </div>
                <button class="btn btn-lg btn-primary">Report Fire</button>
            </div>

            <div class="option-card police" onclick="reportPoliceEmergency()">
                <div class="option-icon">
                    <span class="material-symbols-outlined">local_police</span>
                </div>
                <h3 class="option-title">Police Emergency</h3>
                <p class="option-description">For crimes, security threats, and police assistance</p>
                <div class="option-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">phone</span>
                        <span>Call: 122</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">timer</span>
                        <span>Response: 5-10 minutes</span>
                    </div>
                </div>
                <button class="btn btn-lg btn-primary">Request Police</button>
            </div>
        </div>

        <!-- Online Emergency Reporting -->
        <div class="online-reporting">
            <h3 class="reporting-title">Online Emergency Reporting</h3>
            <p class="reporting-description">For non-urgent situations or when you cannot call, use our online emergency reporting system</p>
            
            <form id="emergencyReportForm">
                <div class="form-section">
                    <h4 class="section-title">Emergency Details</h4>
                    
                    <div class="form-group">
                        <label class="form-label">Emergency Type *</label>
                        <select class="form-select" required>
                            <option value="">Select emergency type</option>
                            <option value="medical">Medical Emergency</option>
                            <option value="fire">Fire Emergency</option>
                            <option value="police">Police Emergency</option>
                            <option value="disaster">Natural Disaster</option>
                            <option value="accident">Accident</option>
                            <option value="other">Other Emergency</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Emergency Description *</label>
                        <textarea class="form-textarea" rows="4" placeholder="Describe the emergency situation in detail" required></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Severity Level *</label>
                        <select class="form-select" required>
                            <option value="">Select severity level</option>
                            <option value="critical">Critical - Life threatening</option>
                            <option value="serious">Serious - Immediate danger</option>
                            <option value="moderate">Moderate - Urgent attention needed</option>
                            <option value="low">Low - Non-urgent but important</option>
                        </select>
                    </div>
                </div>

                <div class="form-section">
                    <h4 class="section-title">Location Information</h4>
                    
                    <div class="form-group">
                        <label class="form-label">Exact Location *</label>
                        <input type="text" class="form-input" placeholder="Enter the exact location of the emergency" required>
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
                            <label class="form-label">Landmark/Reference Point</label>
                            <input type="text" class="form-input" placeholder="Nearby landmark or reference point">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">GPS Coordinates (if available)</label>
                        <input type="text" class="form-input" placeholder="Latitude, Longitude">
                    </div>
                </div>

                <div class="form-section">
                    <h4 class="section-title">Contact Information</h4>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Your Name *</label>
                            <input type="text" class="form-input" placeholder="Enter your full name" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Phone Number *</label>
                            <input type="tel" class="form-input" placeholder="+237 233 000 000" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-input" placeholder="your@email.com">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Are you at the emergency location? *</label>
                        <select class="form-select" required>
                            <option value="">Select option</option>
                            <option value="yes">Yes, I am at the location</option>
                            <option value="nearby">Yes, I am nearby</option>
                            <option value="no">No, I am reporting from elsewhere</option>
                        </select>
                    </div>
                </div>

                <div class="form-section">
                    <h4 class="section-title">Additional Information</h4>
                    
                    <div class="form-group">
                        <label class="form-label">Number of People Involved</label>
                        <input type="number" class="form-input" placeholder="Enter number of people involved">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Any Injuries Reported?</label>
                        <select class="form-select">
                            <option value="">Select option</option>
                            <option value="none">No injuries</option>
                            <option value="minor">Minor injuries</option>
                            <option value="serious">Serious injuries</option>
                            <option value="critical">Critical injuries</option>
                            <option value="unknown">Unknown</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Additional Details</label>
                        <textarea class="form-textarea" rows="3" placeholder="Any additional information that may help emergency responders"></textarea>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="reset" class="btn btn-outline">Reset</button>
                    <button type="submit" class="btn btn-danger">Submit Emergency Report</button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Emergency Preparedness -->
<section class="preparedness-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Emergency Preparedness</h2>
            <p class="section-subtitle">Be prepared for emergencies with our safety guidelines and resources</p>
        </div>

        <div class="preparedness-content">
            <div class="preparedness-overview">
                <h3 class="overview-title">Emergency Preparedness Guide</h3>
                <p class="overview-description">
                    Being prepared for emergencies can save lives. Learn how to prepare for different types of emergencies 
                    and what to do when they occur.
                </p>
            </div>

            <div class="guides-grid">
                <!-- Medical Emergency Guide -->
                <div class="guide-card">
                    <div class="guide-icon">
                        <span class="material-symbols-outlined">medical_services</span>
                    </div>
                    <h3 class="guide-title">Medical Emergency Preparedness</h3>
                    <p class="guide-description">How to prepare for and respond to medical emergencies.</p>
                    <div class="guide-steps">
                        <div class="step-item">
                            <span class="step-number">1</span>
                            <span class="step-text">Keep emergency contacts visible</span>
                        </div>
                        <div class="step-item">
                            <span class="step-number">2</span>
                            <span class="step-text">Maintain first aid kit</span>
                        </div>
                        <div class="step-item">
                            <span class="step-number">3</span>
                            <span class="step-text">Know basic first aid</span>
                        </div>
                        <div class="step-item">
                            <span class="step-number">4</span>
                            <span class="step-text">Have medical information ready</span>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-primary">View Full Guide</button>
                </div>

                <!-- Fire Safety Guide -->
                <div class="guide-card">
                    <div class="guide-icon">
                        <span class="material-symbols-outlined">local_fire_department</span>
                    </div>
                    <h3 class="guide-title">Fire Safety Preparedness</h3>
                    <p class="guide-description">Essential fire safety tips and emergency response procedures.</p>
                    <div class="guide-steps">
                        <div class="step-item">
                            <span class="step-number">1</span>
                            <span class="step-text">Install smoke detectors</span>
                        </div>
                        <div class="step-item">
                            <span class="step-number">2</span>
                            <span class="step-text">Have fire extinguishers</span>
                        </div>
                        <div class="step-item">
                            <span class="step-number">3</span>
                            <span class="step-text">Create evacuation plan</span>
                        </div>
                        <div class="step-item">
                            <span class="step-number">4</span>
                            <span class="step-text">Practice fire drills</span>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-primary">View Full Guide</button>
                </div>

                <!-- Natural Disaster Guide -->
                <div class="guide-card">
                    <div class="guide-icon">
                        <span class="material-symbols-outlined">warning</span>
                    </div>
                    <h3 class="guide-title">Natural Disaster Preparedness</h3>
                    <p class="guide-description">How to prepare for floods, storms, and other natural disasters.</p>
                    <div class="guide-steps">
                        <div class="step-item">
                            <span class="step-number">1</span>
                            <span class="step-text">Create emergency kit</span>
                        </div>
                        <div class="step-item">
                            <span class="step-number">2</span>
                            <span class="step-text">Know evacuation routes</span>
                        </div>
                        <div class="step-item">
                            <span class="step-number">3</span>
                            <span class="step-text">Secure important documents</span>
                        </div>
                        <div class="step-item">
                            <span class="step-number">4</span>
                            <span class="step-text">Monitor weather alerts</span>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-primary">View Full Guide</button>
                </div>

                <!-- Personal Safety Guide -->
                <div class="guide-card">
                    <div class="guide-icon">
                        <span class="material-symbols-outlined">security</span>
                    </div>
                    <h3 class="guide-title">Personal Safety Preparedness</h3>
                    <p class="guide-description">Personal safety tips and crime prevention strategies.</p>
                    <div class="guide-steps">
                        <div class="step-item">
                            <span class="step-number">1</span>
                            <span class="step-text">Be aware of surroundings</span>
                        </div>
                        <div class="step-item">
                            <span class="step-number">2</span>
                            <span class="step-text">Have emergency contacts</span>
                        </div>
                        <div class="step-item">
                            <span class="step-number">3</span>
                            <span class="step-text">Trust your instincts</span>
                        </div>
                        <div class="step-item">
                            <span class="step-number">4</span>
                            <span class="step-text">Know self-defense basics</span>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-primary">View Full Guide</button>
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
            <p class="section-subtitle">Common questions about emergency services</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What is the main emergency number for Bamenda?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>The main emergency number for Bamenda is 119. This number connects you to all emergency services including medical, fire, and police assistance. For specific services, you can call 120 for medical, 121 for fire, 122 for police, and 123 for disaster management.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How quickly do emergency services respond?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Response times vary by emergency type and location. Medical emergencies typically respond within 6-8 minutes, fire emergencies within 3-5 minutes, and police emergencies within 5-10 minutes. Response times may be longer during major incidents or in remote areas.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What information should I provide when calling emergency services?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>When calling emergency services, provide your name, exact location, type of emergency, number of people involved, any injuries, and stay on the line until instructed to hang up. Be as specific as possible about your location and the situation.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What should I do while waiting for emergency services to arrive?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Stay calm, ensure your safety, follow any instructions given by the emergency operator, clear the area if safe to do so, and prepare to provide additional information. For medical emergencies, perform basic first aid if trained. For fires, evacuate if safe and don't use elevators.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How can I prepare for emergencies?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Prepare by creating an emergency plan, maintaining an emergency kit with water, food, medications, and important documents, keeping emergency contacts accessible, learning basic first aid, and staying informed about local emergency procedures and resources.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What is the difference between emergency and non-emergency numbers?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Emergency numbers (119-123) are for immediate threats to life, safety, or property. Non-emergency number 124 is for information, administrative support, and non-urgent assistance. Using the appropriate number helps ensure critical emergencies get priority response.</p>
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
/* Emergency Services Page Styles */
.emergency-services-hero {
    background: linear-gradient(135deg, var(--error) 0%, var(--error-container) 100%);
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

.action-card.urgent {
    background: linear-gradient(135deg, var(--error-container) 0%, var(--surface-container-lowest) 100%);
    border-color: var(--error);
}

.action-card.medical {
    background: linear-gradient(135deg, var(--tertiary-container) 0%, var(--surface-container-lowest) 100%);
    border-color: var(--tertiary);
}

.action-card.fire {
    background: linear-gradient(135deg, var(--secondary-container) 0%, var(--surface-container-lowest) 100%);
    border-color: var(--secondary);
}

.action-card.police {
    background: linear-gradient(135deg, var(--primary-container) 0%, var(--surface-container-lowest) 100%);
    border-color: var(--primary);
}

.action-card.disaster {
    background: linear-gradient(135deg, var(--outline-variant) 0%, var(--surface-container-lowest) 100%);
    border-color: var(--outline-variant);
}

.action-card.non-emergency {
    background: linear-gradient(135deg, var(--surface-container) 0%, var(--surface-container-lowest) 100%);
    border-color: var(--outline-variant);
}

.action-icon {
    width: 4rem;
    height: 4rem;
    background-color: var(--error);
    color: var(--on-error);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-lg);
}

.action-card.medical .action-icon {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.action-card.fire .action-icon {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.action-card.police .action-icon {
    background-color: var(--primary);
    color: var(--on-primary);
}

.action-card.disaster .action-icon {
    background-color: var(--outline-variant);
    color: var(--on-surface-variant);
}

.action-card.non-emergency .action-icon {
    background-color: var(--surface-container);
    color: var(--on-surface);
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

/* Emergency Statistics Section */
.emergency-stats-section {
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
    background-color: var(--error);
    color: var(--on-error);
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

/* Emergency Hotlines Section */
.emergency-hotlines-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.hotlines-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.hotline-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 2px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.hotline-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.hotline-card.urgent {
    border-color: var(--error);
    background: linear-gradient(135deg, var(--error-container) 0%, var(--surface-container-lowest) 100%);
}

.hotline-card.medical {
    border-color: var(--tertiary);
    background: linear-gradient(135deg, var(--tertiary-container) 0%, var(--surface-container-lowest) 100%);
}

.hotline-card.fire {
    border-color: var(--secondary);
    background: linear-gradient(135deg, var(--secondary-container) 0%, var(--surface-container-lowest) 100%);
}

.hotline-card.police {
    border-color: var(--primary);
    background: linear-gradient(135deg, var(--primary-container) 0%, var(--surface-container-lowest) 100%);
}

.hotline-card.disaster {
    border-color: var(--outline-variant);
    background: linear-gradient(135deg, var(--surface-container) 0%, var(--surface-container-lowest) 100%);
}

.hotline-card.non-emergency {
    border-color: var(--outline-variant);
    background: linear-gradient(135deg, var(--surface-container) 0%, var(--surface-container-lowest) 100%);
}

.hotline-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.hotline-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--error);
    color: var(--on-error);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.hotline-card.medical .hotline-icon {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.hotline-card.fire .hotline-icon {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.hotline-card.police .hotline-icon {
    background-color: var(--primary);
    color: var(--on-primary);
}

.hotline-card.disaster .hotline-icon {
    background-color: var(--outline-variant);
    color: var(--on-surface-variant);
}

.hotline-card.non-emergency .hotline-icon {
    background-color: var(--surface-container);
    color: var(--on-surface);
}

.hotline-icon .material-symbols-outlined {
    font-size: 2rem;
}

.hotline-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.hotline-content {
    padding: var(--spacing-lg);
    text-align: center;
}

.hotline-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.hotline-number {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: var(--spacing-xs);
    margin-bottom: var(--spacing-lg);
}

.number {
    font-size: 3rem;
    font-weight: 800;
    color: var(--primary);
    line-height: 1;
}

.description {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.hotline-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.hotline-features {
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

/* Services Overview Section */
.services-overview-section {
    padding: var(--spacing-3xl) 0;
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
    background-color: var(--error);
    color: var(--on-error);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-lg);
}

.service-card:nth-child(2) .service-icon {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.service-card:nth-child(3) .service-icon {
    background-color: var(--primary);
    color: var(--on-primary);
}

.service-card:nth-child(4) .service-icon {
    background-color: var(--outline-variant);
    color: var(--on-surface-variant);
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

.service-stats {
    display: flex;
    justify-content: center;
    gap: var(--spacing-xl);
    margin-bottom: var(--spacing-lg);
}

.stat-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: var(--spacing-xs);
}

.stat-number {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary);
}

.stat-label {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
    text-transform: uppercase;
}

.service-features {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-sm);
    justify-content: center;
    margin-bottom: var(--spacing-lg);
}

/* Report Emergency Section */
.report-emergency-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.reporting-options {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
    margin-bottom: var(--spacing-2xl);
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

.option-card.medical {
    border-color: var(--tertiary);
    background: linear-gradient(135deg, var(--tertiary-container) 0%, var(--surface-container-lowest) 100%);
}

.option-card.fire {
    border-color: var(--secondary);
    background: linear-gradient(135deg, var(--secondary-container) 0%, var(--surface-container-lowest) 100%);
}

.option-card.police {
    border-color: var(--primary);
    background: linear-gradient(135deg, var(--primary-container) 0%, var(--surface-container-lowest) 100%);
}

.option-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.option-icon {
    width: 4rem;
    height: 4rem;
    background-color: var(--error);
    color: var(--on-error);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-lg);
}

.option-card.medical .option-icon {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.option-card.fire .option-icon {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.option-card.police .option-icon {
    background-color: var(--primary);
    color: var(--on-primary);
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

.online-reporting {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-2xl);
    border: 1px solid var(--outline-variant);
    max-width: 800px;
    margin: 0 auto;
}

.reporting-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
    text-align: center;
}

.reporting-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-xl);
    text-align: center;
}

/* Emergency Preparedness Section */
.preparedness-section {
    padding: var(--spacing-3xl) 0;
}

.preparedness-content {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xl);
}

.preparedness-overview {
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

.guides-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.guide-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.guide-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.guide-icon {
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

.guide-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.guide-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.guide-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.guide-steps {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

.step-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.step-number {
    width: 1.5rem;
    height: 1.5rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 0.75rem;
    flex-shrink: 0;
}

.step-text {
    text-align: left;
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
    
    .hotlines-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .services-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .reporting-options {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .guides-grid {
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
    
    .hotline-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
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
    
    .option-card {
        padding: var(--spacing-lg);
    }
    
    .option-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .option-icon .material-symbols-outlined {
        font-size: 1.5rem;
    }
    
    .online-reporting {
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
    
    .service-features {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .hotline-features {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
}
</style>

<script>
// Quick action functions
function callEmergency() {
    if (confirm('Call 119 for emergency assistance?')) {
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
    if (confirm('Call 122 for police assistance?')) {
        window.location.href = 'tel:122';
    }
}

function callDisaster() {
    if (confirm('Call 123 for disaster management?')) {
        window.location.href = 'tel:123';
    }
}

function callNonEmergency() {
    if (confirm('Call 124 for non-emergency assistance?')) {
        window.location.href = 'tel:124';
    }
}

// Service actions
document.querySelectorAll('.service-card .btn-primary').forEach(button => {
    if (button.textContent.includes('Request')) {
        button.addEventListener('click', function() {
            const serviceTitle = this.closest('.service-card').querySelector('.service-title').textContent;
            alert(`Requesting assistance from: "${serviceTitle}"`);
        });
    }
    
    if (button.textContent.includes('Report')) {
        button.addEventListener('click', function() {
            const serviceTitle = this.closest('.service-card').querySelector('.service-title').textContent;
            alert(`Reporting to: "${serviceTitle}"`);
        });
    }
});

// Reporting functions
function reportUrgentEmergency() {
    if (confirm('Call 119 for urgent emergency assistance?')) {
        window.location.href = 'tel:119';
    }
}

function reportMedicalEmergency() {
    if (confirm('Call 120 for medical emergency assistance?')) {
        window.location.href = 'tel:120';
    }
}

function reportFireEmergency() {
    if (confirm('Call 121 for fire emergency assistance?')) {
        window.location.href = 'tel:121';
    }
}

function reportPoliceEmergency() {
    if (confirm('Call 122 for police emergency assistance?')) {
        window.location.href = 'tel:122';
    }
}

// Online emergency reporting form submission
document.getElementById('emergencyReportForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate required fields
    const emergencyType = document.querySelector('select[required]').value;
    const emergencyDescription = document.querySelector('textarea[required]').value;
    const severityLevel = document.querySelectorAll('select[required]')[1].value;
    const exactLocation = document.querySelector('input[placeholder*="exact location"]').value;
    const area = document.querySelectorAll('select[required]')[2].value;
    const name = document.querySelector('input[placeholder*="name"]').value;
    const phone = document.querySelector('input[placeholder*="phone"]').value;
    const locationStatus = document.querySelectorAll('select[required]')[3].value;
    
    if (!emergencyType || !emergencyDescription || !severityLevel || !exactLocation || !area || !name || !phone || !locationStatus) {
        alert('Please fill in all required fields.');
        return;
    }
    
    // Check if this is a critical emergency
    if (severityLevel === 'critical' || severityLevel === 'serious') {
        if (confirm('This appears to be a serious emergency. We recommend calling 119 immediately. Do you want to continue with the online report?')) {
            alert('Emergency report submitted successfully! Emergency services have been notified and will respond immediately. Stay on the line for further instructions.');
        } else {
            alert('Please call 119 immediately for serious emergencies.');
            return;
        }
    } else {
        alert('Emergency report submitted successfully! Emergency services will respond according to the severity level. For urgent situations, please call the appropriate emergency number.');
    }
    
    // In production, this would submit the emergency report and trigger immediate response
});

// Guide actions
document.querySelectorAll('.guide-card .btn-primary').forEach(button => {
    if (button.textContent.includes('View')) {
        button.addEventListener('click', function() {
            const guideTitle = this.closest('.guide-card').querySelector('.guide-title').textContent;
            alert(`Viewing full guide: "${guideTitle}"`);
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

// Auto-refresh emergency statistics
function refreshEmergencyStats() {
    // In production, this would fetch real-time emergency statistics
    console.log('Refreshing emergency statistics...');
    
    // Update response time
    const responseTimeElement = document.querySelector('.stat-number');
    if (responseTimeElement && responseTimeElement.textContent.includes('minutes')) {
        // Simulate real-time response time updates
        const randomTime = Math.floor(Math.random() * 3) + 6; // 6-8 minutes
        responseTimeElement.textContent = `${randomTime} minutes`;
    }
}

// Refresh statistics every 30 seconds
setInterval(refreshEmergencyStats, 30000);

// Initialize emergency location services
function initializeEmergencyLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            console.log('Emergency location services initialized');
        });
    }
}

// Initialize emergency services
initializeEmergencyLocation();
</script>
