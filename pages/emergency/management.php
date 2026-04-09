<?php
/**
 * Bamenda City Council E-Governance Platform
 * Emergency Management Page
 */

// Set page metadata
$page_title = 'Emergency Management | Bamenda City Council';
$page_description = 'Access emergency management services, disaster response coordination, and crisis management resources for Bamenda.';
$page_keywords = 'emergency management, disaster response, crisis management, emergency services, Bamenda emergency';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Emergency', 'url' => '../index.php'],
    ['title' => 'Emergency Management', 'url' => '#']
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
            <span class="badge badge-tertiary">Emergency Management</span>
            <h1 class="hero-title">Disaster Response & Crisis Management</h1>
            <p class="hero-subtitle">
                Comprehensive emergency management services including disaster response coordination, crisis management, and emergency preparedness for Bamenda.
            </p>
            <div class="hero-actions">
                <a href="#emergency-services" class="btn btn-lg btn-tertiary">
                    <span class="material-symbols-outlined">emergency</span>
                    Emergency Services
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
            <p class="section-subtitle">Quick access to emergency management services</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openEmergencyServices()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">emergency</span>
                </div>
                <h3 class="action-title">Emergency Services</h3>
                <p class="action-description">Access all emergency response services and resources</p>
            </div>

            <div class="action-card" onclick="openDisasterResponse()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">crisis_alert</span>
                </div>
                <h3 class="action-title">Disaster Response</h3>
                <p class="action-description">Coordinate disaster response and recovery efforts</p>
            </div>

            <div class="action-card" onclick="openEmergencyAlerts()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">notifications_active</span>
                </div>
                <h3 class="action-title">Emergency Alerts</h3>
                <p class="action-description">View and manage emergency alerts and notifications</p>
            </div>

            <div class="action-card" onclick="openEmergencyResources()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">inventory</span>
                </div>
                <h3 class="action-title">Emergency Resources</h3>
                <p class="action-description">Access emergency equipment, supplies, and facilities</p>
            </div>

            <div class="action-card" onclick="openEmergencyTraining()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <h3 class="action-title">Emergency Training</h3>
                <p class="action-description">Emergency preparedness training and certification</p>
            </div>

            <div class="action-card" onclick="openEmergencyPlanning()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">assignment</span>
                </div>
                <h3 class="action-title">Emergency Planning</h3>
                <p class="action-description">Emergency response planning and coordination</p>
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
                    <span class="material-symbols-outlined">emergency</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">456</div>
                    <div class="stat-label">Emergencies Handled</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+12 this month</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">89</div>
                    <div class="stat-label">Response Teams</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+5 new teams</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">timer</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">8.5 min</div>
                    <div class="stat-label">Average Response Time</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_down</span>
                        <span>-1.2 min faster</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">verified</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">96%</div>
                    <div class="stat-label">Success Rate</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+3% improvement</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Services -->
<section class="emergency-services-section" id="emergency-services">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Emergency Response Services</h2>
            <p class="section-subtitle">Comprehensive emergency response and management services</p>
        </div>

        <div class="services-grid">
            <!-- Medical Emergency Service -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">medical_services</span>
                </div>
                <h3 class="service-title">Medical Emergency Response</h3>
                <p class="service-description">Rapid medical emergency response including ambulance services, first aid, and medical coordination.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Ambulance Dispatch</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>First Response Teams</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Medical Coordination</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Emergency Treatment</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Response Time: 5-8 minutes</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">phone</span>
                        <span>Hotline: 120</span>
                    </div>
                </div>
                <button class="btn btn-primary">Request Medical Help</button>
            </div>

            <!-- Fire Emergency Service -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">local_fire_department</span>
                </div>
                <h3 class="service-title">Fire Emergency Response</h3>
                <p class="service-description">Fire suppression, rescue operations, and fire safety emergency response services.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Fire Suppression</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Rescue Operations</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Fire Investigation</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Fire Prevention</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Response Time: 3-6 minutes</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">phone</span>
                        <span>Hotline: 121</span>
                    </div>
                </div>
                <button class="btn btn-primary">Report Fire Emergency</button>
            </div>

            <!-- Police Emergency Service -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">local_police</span>
                </div>
                <h3 class="service-title">Police Emergency Response</h3>
                <p class="service-description">Law enforcement emergency response including crime prevention and public safety.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Emergency Response</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Crime Prevention</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Public Safety</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Traffic Control</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Response Time: 4-7 minutes</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">phone</span>
                        <span>Hotline: 122</span>
                    </div>
                </div>
                <button class="btn btn-primary">Request Police Assistance</button>
            </div>

            <!-- Search and Rescue Service -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">search</span>
                </div>
                <h3 class="service-title">Search and Rescue</h3>
                <p class="service-description">Specialized search and rescue operations for missing persons and disaster situations.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Search Operations</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Rescue Teams</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Missing Persons</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Disaster Rescue</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Response Time: 10-15 minutes</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">phone</span>
                        <span>Hotline: 119</span>
                    </div>
                </div>
                <button class="btn btn-primary">Request Search & Rescue</button>
            </div>

            <!-- Natural Disaster Response -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">flood</span>
                </div>
                <h3 class="service-title">Natural Disaster Response</h3>
                <p class="service-description">Coordination of response to natural disasters including floods, earthquakes, and storms.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Disaster Assessment</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Evacuation Support</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Relief Distribution</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Recovery Assistance</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Response Time: 15-30 minutes</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">phone</span>
                        <span>Hotline: 119</span>
                    </div>
                </div>
                <button class="btn btn-primary">Report Natural Disaster</button>
            </div>

            <!-- Crisis Management Service -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">crisis_alert</span>
                </div>
                <h3 class="service-title">Crisis Management</h3>
                <p class="service-description">Comprehensive crisis management coordination and emergency response planning.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Crisis Coordination</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Emergency Planning</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Resource Management</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Communication Center</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Response Time: Immediate</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">phone</span>
                        <span>Hotline: 119</span>
                    </div>
                </div>
                <button class="btn btn-primary">Contact Crisis Management</button>
            </div>
        </div>
    </div>
</section>

<!-- Report Emergency -->
<section class="report-emergency-section" id="report-emergency">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Report Emergency</h2>
            <p class="section-subtitle">Quick emergency reporting and request for assistance</p>
        </div>

        <div class="emergency-reporting">
            <div class="reporting-options">
                <div class="option-card urgent" onclick="reportUrgentEmergency()">
                    <div class="option-icon">
                        <span class="material-symbols-outlined">priority_high</span>
                    </div>
                    <h3 class="option-title">Urgent Emergency</h3>
                    <p class="option-description">Life-threatening emergencies requiring immediate response</p>
                    <div class="option-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">phone</span>
                            <span>Call 119 immediately</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">timer</span>
                            <span>Immediate response</span>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-danger">Call 119 Now</button>
                </div>

                <div class="option-card non-urgent" onclick="reportNonUrgentEmergency()">
                    <div class="option-icon">
                        <span class="material-symbols-outlined">info</span>
                    </div>
                    <h3 class="option-title">Non-Urgent Emergency</h3>
                    <p class="option-description">Emergencies that require attention but are not life-threatening</p>
                    <div class="option-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">phone</span>
                            <span>Call appropriate service</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">timer</span>
                            <span>Response within 15 minutes</span>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-primary">Report Online</button>
                </div>

                <div class="option-card information" onclick="reportInformation()">
                    <div class="option-icon">
                        <span class="material-symbols-outlined">help</span>
                    </div>
                    <h3 class="option-title">Information Request</h3>
                    <p class="option-description">Request information or report non-emergency situations</p>
                    <div class="option-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">phone</span>
                            <span>Call information line</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">timer</span>
                            <span>Response within 1 hour</span>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-outline">Request Information</button>
                </div>
            </div>

            <!-- Online Reporting Form -->
            <div class="reporting-form">
                <div class="form-header">
                    <h3 class="form-title">Online Emergency Reporting</h3>
                    <p class="form-description">For non-urgent emergencies and information requests</p>
                </div>

                <form id="emergencyReportForm">
                    <div class="form-section">
                        <h4 class="section-title">Emergency Information</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Emergency Type *</label>
                            <select class="form-select" required>
                                <option value="">Select emergency type</option>
                                <option value="medical">Medical Emergency</option>
                                <option value="fire">Fire Emergency</option>
                                <option value="police">Police Emergency</option>
                                <option value="search-rescue">Search & Rescue</option>
                                <option value="natural-disaster">Natural Disaster</option>
                                <option value="accident">Accident</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Urgency Level *</label>
                            <select class="form-select" required>
                                <option value="">Select urgency level</option>
                                <option value="critical">Critical - Life threatening</option>
                                <option value="urgent">Urgent - Immediate attention needed</option>
                                <option value="moderate">Moderate - Attention needed soon</option>
                                <option value="low">Low - Information request</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Emergency Description *</label>
                            <textarea class="form-textarea" rows="4" placeholder="Describe the emergency situation in detail" required></textarea>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Number of People Involved</label>
                                <input type="number" class="form-input" placeholder="Estimated number">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Injuries (if known)</label>
                                <select class="form-select">
                                    <option value="">Unknown</option>
                                    <option value="none">No injuries</option>
                                    <option value="minor">Minor injuries</option>
                                    <option value="serious">Serious injuries</option>
                                    <option value="critical">Critical injuries</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Location Information</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Emergency Location *</label>
                            <input type="text" class="form-input" placeholder="Enter the exact location of the emergency" required>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Landmark</label>
                                <input type="text" class="form-input" placeholder="Nearby landmark or reference point">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Area</label>
                                <select class="form-select">
                                    <option value="">Select area</option>
                                    <option value="city-center">City Center</option>
                                    <option value="nkwen">Nkwen</option>
                                    <option value="mankon">Mankon</option>
                                    <option value="bambili">Bambili</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">GPS Coordinates (if available)</label>
                            <input type="text" class="form-input" placeholder="Latitude, Longitude">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Location Description</label>
                            <textarea class="form-textarea" rows="2" placeholder="Additional details about the location"></textarea>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Contact Information</h4>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Your Name *</label>
                                <input type="text" class="form-input" placeholder="Your full name" required>
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
                            <label class="form-label">Relationship to Emergency</label>
                            <select class="form-select">
                                <option value="">Select relationship</option>
                                <option value="witness">Witness</option>
                                <option value="victim">Victim</option>
                                <option value="family">Family Member</option>
                                <option value="bystander">Bystander</option>
                                <option value="first-responder">First Responder</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Are you at the emergency location?</label>
                            <select class="form-select">
                                <option value="">Select option</option>
                                <option value="yes">Yes, I'm at the location</option>
                                <option value="nearby">Yes, I'm nearby</option>
                                <option value="no">No, I'm reporting remotely</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Additional Information</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Additional Details</label>
                            <textarea class="form-textarea" rows="3" placeholder="Any additional information that may help emergency responders"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Photos/Videos (if available)</label>
                            <input type="file" class="form-input" accept="image/*,video/*" multiple>
                            <small class="form-help">Upload photos or videos that may help emergency services</small>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Consent to Contact *</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="consent" required>
                                    <span class="checkmark"></span>
                                    I consent to be contacted by emergency services for follow-up information about this report.
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="reset" class="btn btn-outline">Reset</button>
                        <button type="submit" class="btn btn-primary">Submit Report</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Resources -->
<section class="emergency-resources-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Emergency Resources</h2>
            <p class="section-subtitle">Emergency equipment, supplies, and facilities</p>
        </div>

        <div class="resources-grid">
            <!-- Emergency Equipment -->
            <div class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">construction</span>
                </div>
                <h3 class="resource-title">Emergency Equipment</h3>
                <p class="resource-description">Access to emergency equipment including rescue tools, medical supplies, and safety gear.</p>
                <div class="resource-stats">
                    <span class="stat-item">
                        <span class="stat-number">156</span>
                        <span class="stat-label">Equipment Items</span>
                    </span>
                </div>
                <div class="resource-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Rescue Tools</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Medical Supplies</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Safety Equipment</span>
                    </div>
                </div>
                <button class="btn btn-primary">Request Equipment</button>
            </div>

            <!-- Emergency Supplies -->
            <div class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">inventory</span>
                </div>
                <h3 class="resource-title">Emergency Supplies</h3>
                <p class="resource-description">Emergency supplies including food, water, blankets, and essential items for disaster response.</p>
                <div class="resource-stats">
                    <span class="stat-item">
                        <span class="stat-number">2,345</span>
                        <span class="stat-label">Supply Items</span>
                    </span>
                </div>
                <div class="resource-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Food & Water</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Blankets & Clothing</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Essential Items</span>
                    </div>
                </div>
                <button class="btn btn-primary">Request Supplies</button>
            </div>

            <!-- Emergency Facilities -->
            <div class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">location_city</span>
                </div>
                <h3 class="resource-title">Emergency Facilities</h3>
                <p class="resource-description">Emergency facilities including shelters, medical centers, and command posts.</p>
                <div class="resource-stats">
                    <span class="stat-item">
                        <span class="stat-number">23</span>
                        <span class="stat-label">Facilities</span>
                    </span>
                </div>
                <div class="resource-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Emergency Shelters</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Medical Centers</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Command Posts</span>
                    </div>
                </div>
                <button class="btn btn-primary">Find Facilities</button>
            </div>

            <!-- Emergency Vehicles -->
            <div class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">directions_car</span>
                </div>
                <h3 class="resource-title">Emergency Vehicles</h3>
                <p class="resource-description">Emergency vehicles including ambulances, fire trucks, and rescue vehicles.</p>
                <div class="resource-stats">
                    <span class="stat-item">
                        <span class="stat-number">45</span>
                        <span class="stat-label">Vehicles</span>
                    </span>
                </div>
                <div class="resource-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Ambulances</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Fire Trucks</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Rescue Vehicles</span>
                    </div>
                </div>
                <button class="btn btn-primary">Request Vehicle</button>
            </div>

            <!-- Communication Equipment -->
            <div class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">wifi_tethering</span>
                </div>
                <h3 class="resource-title">Communication Equipment</h3>
                <p class="resource-description">Communication equipment for emergency coordination and response.</p>
                <div class="resource-stats">
                    <span class="stat-item">
                        <span class="stat-number">89</span>
                        <span class="stat-label">Communication Devices</span>
                    </span>
                </div>
                <div class="resource-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Radio Systems</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Satellite Phones</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Emergency Alerts</span>
                    </div>
                </div>
                <button class="btn btn-primary">Request Communication</button>
            </div>

            <!-- Specialized Equipment -->
            <div class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">engineering</span>
                </div>
                <h3 class="resource-title">Specialized Equipment</h3>
                <p class="resource-description">Specialized equipment for specific emergency situations and disaster response.</p>
                <div class="resource-stats">
                    <span class="stat-item">
                        <span class="stat-number">67</span>
                        <span class="stat-label">Specialized Items</span>
                    </span>
                </div>
                <div class="resource-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Diving Equipment</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Mountain Rescue</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Hazardous Materials</span>
                    </div>
                </div>
                <button class="btn btn-primary">Request Specialized</button>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Training -->
<section class="emergency-training-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Emergency Training Programs</h2>
            <p class="section-subtitle">Emergency preparedness training and certification programs</p>
        </div>

        <div class="training-grid">
            <!-- First Aid Training -->
            <div class="training-card">
                <div class="training-header">
                    <div class="training-icon">
                        <span class="material-symbols-outlined">medical_services</span>
                    </div>
                    <div class="training-badge popular">Popular</div>
                </div>
                <div class="training-content">
                    <h3 class="training-title">First Aid Training</h3>
                    <p class="training-description">Comprehensive first aid training including CPR, basic life support, and emergency medical response.</p>
                    <div class="training-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 2 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>Class Size: 20 participants</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">verified</span>
                            <span>Certification: Yes</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Cost: ₣5,000</span>
                        </div>
                    </div>
                    <div class="training-topics">
                        <h4>Topics Covered:</h4>
                        <div class="topics-list">
                            <span class="topic-tag">CPR</span>
                            <span class="topic-tag">Basic Life Support</span>
                            <span class="topic-tag">Wound Care</span>
                            <span class="topic-tag">Emergency Response</span>
                        </div>
                    </div>
                    <div class="training-actions">
                        <button class="btn btn-sm btn-primary">Enroll Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Fire Safety Training -->
            <div class="training-card">
                <div class="training-header">
                    <div class="training-icon">
                        <span class="material-symbols-outlined">local_fire_department</span>
                    </div>
                    <div class="training-badge new">New</div>
                </div>
                <div class="training-content">
                    <h3 class="training-title">Fire Safety Training</h3>
                    <p class="training-description">Fire prevention, safety procedures, and emergency evacuation training for individuals and organizations.</p>
                    <div class="training-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 1 day</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>Class Size: 25 participants</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">verified</span>
                            <span>Certification: Yes</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Cost: ₣3,000</span>
                        </div>
                    </div>
                    <div class="training-topics">
                        <h4>Topics Covered:</h4>
                        <div class="topics-list">
                            <span class="topic-tag">Fire Prevention</span>
                            <span class="topic-tag">Evacuation</span>
                            <span class="topic-tag">Fire Extinguishers</span>
                            <span class="topic-tag">Safety Procedures</span>
                        </div>
                    </div>
                    <div class="training-actions">
                        <button class="btn btn-sm btn-primary">Enroll Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Emergency Response Training -->
            <div class="training-card">
                <div class="training-header">
                    <div class="training-icon">
                        <span class="material-symbols-outlined">emergency</span>
                    </div>
                    <div class="training-badge advanced">Advanced</div>
                </div>
                <div class="training-content">
                    <h3 class="training-title">Emergency Response Training</h3>
                    <p class="training-description">Advanced emergency response training for community volunteers and emergency responders.</p>
                    <div class="training-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 5 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>Class Size: 15 participants</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">verified</span>
                            <span>Certification: Yes</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Cost: ₣10,000</span>
                        </div>
                    </div>
                    <div class="training-topics">
                        <h4>Topics Covered:</h4>
                        <div class="topics-list">
                            <span class="topic-tag">Emergency Assessment</span>
                            <span class="topic-tag">Triage</span>
                            <span class="topic-tag">Rescue Operations</span>
                            <span class="topic-tag">Coordination</span>
                        </div>
                    </div>
                    <div class="training-actions">
                        <button class="btn btn-sm btn-primary">Enroll Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Disaster Preparedness -->
            <div class="training-card">
                <div class="training-header">
                    <div class="training-icon">
                        <span class="material-symbols-outlined">crisis_alert</span>
                    </div>
                    <div class="training-badge essential">Essential</div>
                </div>
                <div class="training-content">
                    <h3 class="training-title">Disaster Preparedness</h3>
                    <p class="training-description">Community disaster preparedness training including planning, response, and recovery strategies.</p>
                    <div class="training-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 3 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>Class Size: 30 participants</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">verified</span>
                            <span>Certification: Yes</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Cost: ₣7,500</span>
                        </div>
                    </div>
                    <div class="training-topics">
                        <h4>Topics Covered:</h4>
                        <div class="topics-list">
                            <span class="topic-tag">Disaster Planning</span>
                            <span class="topic-tag">Emergency Kits</span>
                            <span class="topic-tag">Evacuation Plans</span>
                            <span class="topic-tag">Community Response</span>
                        </div>
                    </div>
                    <div class="training-actions">
                        <button class="btn btn-sm btn-primary">Enroll Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
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
            <p class="section-subtitle">Common questions about emergency management services</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What number should I call in an emergency?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>For life-threatening emergencies, call 119 immediately. For specific emergencies: Medical (120), Fire (121), Police (122). For non-urgent situations, you can use our online reporting system.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How long does it take for emergency services to respond?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Response times vary by emergency type and location. Average response times: Medical (5-8 minutes), Fire (3-6 minutes), Police (4-7 minutes), Search & Rescue (10-15 minutes).</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What information should I provide when reporting an emergency?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Provide the exact location, type of emergency, number of people involved, any injuries, your name and contact number, and stay on the line for additional instructions.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How can I prepare for emergencies?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Create an emergency plan, prepare an emergency kit, know your evacuation routes, keep important documents safe, and participate in emergency training programs.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What emergency training programs are available?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>We offer First Aid Training, Fire Safety Training, Emergency Response Training, and Disaster Preparedness programs. All programs include certification.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How can I volunteer for emergency services?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Contact our emergency management office to inquire about volunteer opportunities. Volunteers must complete required training and background checks.</p>
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
/* Emergency Management Page Styles */
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

/* Emergency Services Section */
.emergency-services-section {
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

/* Report Emergency Section */
.report-emergency-section {
    padding: var(--spacing-3xl) 0;
}

.emergency-reporting {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xl);
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

.option-card.non-urgent {
    border-color: var(--primary);
    background: linear-gradient(135deg, var(--primary-container) 0%, var(--surface-container-lowest) 100%);
}

.option-card.information {
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

.option-card.non-urgent .option-icon {
    background-color: var(--primary);
    color: var(--on-primary);
}

.option-card.information .option-icon {
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

.reporting-form {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-2xl);
    border: 1px solid var(--outline-variant);
    max-width: 800px;
    margin: 0 auto;
}

.form-header {
    text-align: center;
    margin-bottom: var(--spacing-xl);
}

.form-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.form-description {
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

/* Emergency Resources Section */
.emergency-resources-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.resources-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.resource-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.resource-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.resource-icon {
    width: 4rem;
    height: 4rem;
    background-color: var(--secondary);
    color: var(--on-secondary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-lg);
}

.resource-icon .material-symbols-outlined {
    font-size: 2rem;
}

.resource-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.resource-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.resource-stats {
    display: flex;
    justify-content: center;
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

.resource-features {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-sm);
    justify-content: center;
    margin-bottom: var(--spacing-lg);
}

/* Emergency Training Section */
.emergency-training-section {
    padding: var(--spacing-3xl) 0;
}

.training-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.training-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.training-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.training-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.training-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.training-icon .material-symbols-outlined {
    font-size: 2rem;
}

.training-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.training-badge.popular {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.training-badge.new {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.training-badge.advanced {
    background-color: var(--error);
    color: var(--on-error);
}

.training-badge.essential {
    background-color: var(--primary);
    color: var(--on-primary);
}

.training-content {
    padding: var(--spacing-lg);
}

.training-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.training-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.training-details {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

.training-topics {
    margin-bottom: var(--spacing-lg);
}

.training-topics h4 {
    font-size: 1rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.topics-list {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-sm);
}

.topic-tag {
    background-color: var(--surface-container);
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.training-actions {
    display: flex;
    gap: var(--spacing-sm);
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
    
    .services-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .reporting-options {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .resources-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .training-grid {
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
    
    .reporting-form {
        padding: var(--spacing-lg);
    }
    
    .resource-card {
        padding: var(--spacing-lg);
    }
    
    .resource-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .resource-icon .material-symbols-outlined {
        font-size: 1.5rem;
    }
    
    .training-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
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
    
    .service-details {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .training-actions {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .training-actions .btn {
        width: 100%;
    }
}
</style>

<script>
// Quick action functions
function openEmergencyServices() {
    document.getElementById('emergency-services').scrollIntoView({ behavior: 'smooth' });
}

function openDisasterResponse() {
    alert('Disaster response coordination would open here. In production, this would show disaster response planning and coordination tools.');
}

function openEmergencyAlerts() {
    alert('Emergency alerts system would open here. In production, this would show active alerts and notification management.');
}

function openEmergencyResources() {
    document.getElementById('emergency-resources').scrollIntoView({ behavior: 'smooth' });
}

function openEmergencyTraining() {
    document.getElementById('emergency-training').scrollIntoView({ behavior: 'smooth' });
}

function openEmergencyPlanning() {
    alert('Emergency planning tools would open here. In production, this would show emergency response planning and coordination tools.');
}

// Service actions
document.querySelectorAll('.service-card .btn-primary').forEach(button => {
    button.addEventListener('click', function() {
        const serviceTitle = this.closest('.service-card').querySelector('.service-title').textContent;
        alert(`Requesting: "${serviceTitle}"`);
    });
});

// Reporting options
function reportUrgentEmergency() {
    if (confirm('Call 119 for urgent emergency assistance?')) {
        window.location.href = 'tel:119';
    }
}

function reportNonUrgentEmergency() {
    document.getElementById('emergencyReportForm').scrollIntoView({ behavior: 'smooth' });
}

function reportInformation() {
    alert('Information request system would open here. In production, this would show information request forms and contact options.');
}

// Emergency report form submission
document.getElementById('emergencyReportForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate required fields
    const emergencyType = document.querySelector('select[required]').value;
    const urgencyLevel = document.querySelectorAll('select[required]')[1].value;
    const emergencyDescription = document.querySelector('textarea[required]').value;
    const emergencyLocation = document.querySelector('input[required]').value;
    
    if (!emergencyType || !urgencyLevel || !emergencyDescription || !emergencyLocation) {
        alert('Please fill in all required fields.');
        return;
    }
    
    // Validate consent
    const consent = document.querySelector('input[name="consent"]:checked');
    if (!consent) {
        alert('Please consent to be contacted for follow-up information.');
        return;
    }
    
    alert('Emergency report submitted successfully! Emergency services have been notified and will respond accordingly.');
    // In production, this would submit the report and trigger emergency response
});

// Resource actions
document.querySelectorAll('.resource-card .btn-primary').forEach(button => {
    button.addEventListener('click', function() {
        const resourceTitle = this.closest('.resource-card').querySelector('.resource-title').textContent;
        alert(`Requesting: "${resourceTitle}"`);
    });
});

// Training actions
document.querySelectorAll('.training-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Enroll')) {
        button.addEventListener('click', function() {
            const trainingTitle = this.closest('.training-card').querySelector('.training-title').textContent;
            alert(`Enrolling in: "${trainingTitle}"`);
        });
    }
});

document.querySelectorAll('.training-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Details')) {
        button.addEventListener('click', function() {
            const trainingTitle = this.closest('.training-card').querySelector('.training-title').textContent;
            alert(`Viewing details for: "${trainingTitle}"`);
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

// Auto-refresh emergency data
function refreshEmergencyData() {
    // In production, this would fetch real-time emergency data
    console.log('Refreshing emergency management data...');
}

// Refresh data every 60 seconds
setInterval(refreshEmergencyData, 60000);

// Location services for emergency reporting
function getLocationForEmergency() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            const lat = position.coords.latitude;
            const lon = position.coords.longitude;
            
            // In production, this would populate the location field with GPS coordinates
            console.log('Emergency location:', lat, lon);
        });
    }
}

// Initialize location services
getLocationForEmergency();
</script>

