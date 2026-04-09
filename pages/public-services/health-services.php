<?php
/**
 * Bamenda City Council E-Governance Platform
 * Public Health Services Page
 */

// Set page metadata
$page_title = 'Public Health Services | Bamenda City Council';
$page_description = 'Access public health services, medical facilities, health programs, and wellness initiatives for Bamenda residents.';
$page_keywords = 'public health services, medical facilities, health programs, wellness initiatives, Bamenda healthcare';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Public Services', 'url' => '../index.php'],
    ['title' => 'Health Services', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero health-services-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-public-services.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Public Health Services</span>
            <h1 class="hero-title">Public Health & Medical Services</h1>
            <p class="hero-subtitle">
                Comprehensive public health services including medical facilities, health programs, preventive care, and wellness initiatives for the health and well-being of Bamenda residents.
            </p>
            <div class="hero-actions">
                <a href="#medical-facilities" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">local_hospital</span>
                    Medical Facilities
                </a>
                <a href="#health-programs" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">health_and_safety</span>
                    Health Programs
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Health Services Actions</h2>
            <p class="section-subtitle">Quick access to public health services and medical care</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openMedicalFacilities()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">local_hospital</span>
                </div>
                <h3 class="action-title">Medical Facilities</h3>
                <p class="action-description">Find hospitals, clinics, and health centers</p>
            </div>

            <div class="action-card" onclick="openEmergencyServices()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">emergency</span>
                </div>
                <h3 class="action-title">Emergency Services</h3>
                <p class="action-description">Access emergency medical care and ambulance services</p>
            </div>

            <div class="action-card" onclick="openHealthPrograms()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">health_and_safety</span>
                </div>
                <h3 class="action-title">Health Programs</h3>
                <p class="action-description">Join community health and wellness programs</p>
            </div>

            <div class="action-card" onclick="openVaccination()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">vaccines</span>
                </div>
                <h3 class="action-title">Vaccination Services</h3>
                <p class="action-description">Get vaccinated and access immunization services</p>
            </div>

            <div class="action-card" onclick="openMaternalHealth()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">pregnant_woman</span>
                </div>
                <h3 class="action-title">Maternal Health</h3>
                <p class="action-description">Maternal and child health services</p>
            </div>

            <div class="action-card" onclick="openHealthInsurance()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">health_insurance</span>
                </div>
                <h3 class="action-title">Health Insurance</h3>
                <p class="action-description">Access health insurance and coverage options</p>
            </div>
        </div>
    </div>
</section>

<!-- Health Services Statistics -->
<section class="health-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">local_hospital</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">12</div>
                    <div class="stat-label">Public Health Facilities</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+2 new clinics</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">medical_services</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">156</div>
                    <div class="stat-label">Healthcare Professionals</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+23 new staff</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">people</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">45,000+</div>
                    <div class="stat-label">Monthly Patients Served</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+15% increase</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">verified</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">92%</div>
                    <div class="stat-label">Service Satisfaction</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+8% improvement</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Medical Facilities -->
<section class="medical-facilities-section" id="medical-facilities">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Medical Facilities</h2>
            <p class="section-subtitle">Public hospitals, clinics, and health centers serving Bamenda residents</p>
        </div>

        <div class="facilities-grid">
            <!-- Regional Hospital -->
            <div class="facility-card">
                <div class="facility-header">
                    <div class="facility-icon">
                        <span class="material-symbols-outlined">local_hospital</span>
                    </div>
                    <div class="facility-badge primary">Primary</div>
                </div>
                <div class="facility-content">
                    <h3 class="facility-title">Bamenda Regional Hospital</h3>
                    <p class="facility-description">Main regional hospital providing comprehensive medical services including emergency care, surgery, maternity, and specialized treatments.</p>
                    <div class="facility-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>City Center, Bamenda</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">phone</span>
                            <span>+237 233 456 789</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>24/7 Emergency Services</span>
                        </div>
                    </div>
                    <div class="facility-services">
                        <h4 class="services-title">Key Services:</h4>
                        <div class="services-list">
                            <div class="service-item">Emergency Medicine</div>
                            <div class="service-item">General Surgery</div>
                            <div class="service-item">Maternity & Pediatrics</div>
                            <div class="service-item">Laboratory & Diagnostics</div>
                        </div>
                    </div>
                    <div class="facility-actions">
                        <button class="btn btn-sm btn-primary">Book Appointment</button>
                        <button class="btn btn-sm btn-outline">Get Directions</button>
                    </div>
                </div>
            </div>

            <!-- District Hospital -->
            <div class="facility-card">
                <div class="facility-header">
                    <div class="facility-icon">
                        <span class="material-symbols-outlined">local_hospital</span>
                    </div>
                    <div class="facility-badge secondary">Secondary</div>
                </div>
                <div class="facility-content">
                    <h3 class="facility-title">Nkwen District Hospital</h3>
                    <p class="facility-description">District hospital providing primary and secondary healthcare services to the Nkwen community and surrounding areas.</p>
                    <div class="facility-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Nkwen, Bamenda</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">phone</span>
                            <span>+237 233 456 790</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>8:00 AM - 8:00 PM</span>
                        </div>
                    </div>
                    <div class="facility-services">
                        <h4 class="services-title">Key Services:</h4>
                        <div class="services-list">
                            <div class="service-item">Outpatient Care</div>
                            <div class="service-item">Inpatient Services</div>
                            <div class="service-item">Maternal Health</div>
                            <div class="service-item">Child Health</div>
                        </div>
                    </div>
                    <div class="facility-actions">
                        <button class="btn btn-sm btn-primary">Book Appointment</button>
                        <button class="btn btn-sm btn-outline">Get Directions</button>
                    </div>
                </div>
            </div>

            <!-- Health Center -->
            <div class="facility-card">
                <div class="facility-header">
                    <div class="facility-icon">
                        <span class="material-symbols-outlined">medical_services</span>
                    </div>
                    <div class="facility-badge tertiary">Tertiary</div>
                </div>
                <div class="facility-content">
                    <h3 class="facility-title">Mankon Health Center</h3>
                    <p class="facility-description">Community health center providing primary healthcare, preventive services, and health education to the Mankon community.</p>
                    <div class="facility-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Mankon, Bamenda</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">phone</span>
                            <span>+237 233 456 791</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>8:00 AM - 6:00 PM</span>
                        </div>
                    </div>
                    <div class="facility-services">
                        <h4 class="services-title">Key Services:</h4>
                        <div class="services-list">
                            <div class="service-item">Primary Care</div>
                            <div class="service-item">Vaccination</div>
                            <div class="service-item">Health Education</div>
                            <div class="service-item">Family Planning</div>
                        </div>
                    </div>
                    <div class="facility-actions">
                        <button class="btn btn-sm btn-primary">Book Appointment</button>
                        <button class="btn btn-sm btn-outline">Get Directions</button>
                    </div>
                </div>
            </div>

            <!-- Rural Health Post -->
            <div class="facility-card">
                <div class="facility-header">
                    <div class="facility-icon">
                        <span class="material-symbols-outlined">health_and_safety</span>
                    </div>
                    <div class="facility-badge rural">Rural</div>
                </div>
                <div class="facility-content">
                    <h3 class="facility-title">Bambili Rural Health Post</h3>
                    <p class="facility-description">Rural health post providing basic healthcare services, maternal care, and health outreach programs to rural communities.</p>
                    <div class="facility-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Bambili, Bamenda</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">phone</span>
                            <span>+237 233 456 792</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>8:00 AM - 4:00 PM</span>
                        </div>
                    </div>
                    <div class="facility-services">
                        <h4 class="services-title">Key Services:</h4>
                        <div class="services-list">
                            <div class="service-item">Basic Medical Care</div>
                            <div class="service-item">Maternal Services</div>
                            <div class="service-item">Child Health</div>
                            <div class="service-item">Health Outreach</div>
                        </div>
                    </div>
                    <div class="facility-actions">
                        <button class="btn btn-sm btn-primary">Book Appointment</button>
                        <button class="btn btn-sm btn-outline">Get Directions</button>
                    </div>
                </div>
            </div>

            <!-- Specialized Clinic -->
            <div class="facility-card">
                <div class="facility-header">
                    <div class="facility-icon">
                        <span class="material-symbols-outlined">medical_information</span>
                    </div>
                    <div class="facility-badge specialized">Specialized</div>
                </div>
                <div class="facility-content">
                    <h3 class="facility-title">City Center Dental Clinic</h3>
                    <p class="facility-description">Specialized dental clinic providing comprehensive oral healthcare services including preventive, restorative, and cosmetic dentistry.</p>
                    <div class="facility-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>City Center, Bamenda</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">phone</span>
                            <span>+237 233 456 793</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>9:00 AM - 6:00 PM</span>
                        </div>
                    </div>
                    <div class="facility-services">
                        <h4 class="services-title">Key Services:</h4>
                        <div class="services-list">
                            <div class="service-item">General Dentistry</div>
                            <div class="service-item">Oral Surgery</div>
                            <div class="service-item">Orthodontics</div>
                            <div class="service-item">Dental Education</div>
                        </div>
                    </div>
                    <div class="facility-actions">
                        <button class="btn btn-sm btn-primary">Book Appointment</button>
                        <button class="btn btn-sm btn-outline">Get Directions</button>
                    </div>
                </div>
            </div>

            <!-- Mental Health Center -->
            <div class="facility-card">
                <div class="facility-header">
                    <div class="facility-icon">
                        <span class="material-symbols-outlined">psychology</span>
                    </div>
                    <div class="facility-badge mental">Mental Health</div>
                </div>
                <div class="facility-content">
                    <h3 class="facility-title">Mental Health & Counseling Center</h3>
                    <p class="facility-description">Specialized mental health facility providing counseling, psychiatric services, and mental health support programs.</p>
                    <div class="facility-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Mile Four, Bamenda</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">phone</span>
                            <span>+237 233 456 794</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>8:00 AM - 5:00 PM</span>
                        </div>
                    </div>
                    <div class="facility-services">
                        <h4 class="services-title">Key Services:</h4>
                        <div class="services-list">
                            <div class="service-item">Counseling Services</div>
                            <div class="service-item">Psychiatric Care</div>
                            <div class="service-item">Group Therapy</div>
                            <div class="service-item">Crisis Intervention</div>
                        </div>
                    </div>
                    <div class="facility-actions">
                        <button class="btn btn-sm btn-primary">Book Appointment</button>
                        <button class="btn btn-sm btn-outline">Get Directions</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Health Programs -->
<section class="health-programs-section" id="health-programs">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Health Programs & Initiatives</h2>
            <p class="section-subtitle">Community health programs and wellness initiatives for Bamenda residents</p>
        </div>

        <div class="programs-grid">
            <!-- Maternal Health Program -->
            <div class="program-card">
                <div class="program-icon">
                    <span class="material-symbols-outlined">pregnant_woman</span>
                </div>
                <h3 class="program-title">Maternal & Child Health</h3>
                <p class="program-description">Comprehensive maternal and child health services including prenatal care, safe delivery, immunization, and nutrition programs.</p>
                <div class="program-stats">
                    <div class="stat-item">
                        <span class="stat-number">2,500+</span>
                        <span class="stat-label">Mothers Served</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">5,000+</span>
                        <span class="stat-label">Children Immunized</span>
                    </div>
                </div>
                <div class="program-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Prenatal Care</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Safe Delivery</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Postnatal Care</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Child Growth Monitoring</span>
                    </div>
                </div>
                <button class="btn btn-primary">Join Program</button>
            </div>

            <!-- Vaccination Program -->
            <div class="program-card">
                <div class="program-icon">
                    <span class="material-symbols-outlined">vaccines</span>
                </div>
                <h3 class="program-title">Vaccination & Immunization</h3>
                <p class="program-description">Free vaccination services for children and adults including routine immunizations, COVID-19 vaccines, and disease prevention.</p>
                <div class="program-stats">
                    <div class="stat-item">
                        <span class="stat-number">10,000+</span>
                        <span class="stat-label">People Vaccinated</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">15</span>
                        <span class="stat-label">Vaccine Types</span>
                    </div>
                </div>
                <div class="program-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Child Immunization</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>COVID-19 Vaccines</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Travel Vaccines</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Disease Prevention</span>
                    </div>
                </div>
                <button class="btn btn-primary">Get Vaccinated</button>
            </div>

            <!-- Chronic Disease Management -->
            <div class="program-card">
                <div class="program-icon">
                    <span class="material-symbols-outlined">monitor_heart</span>
                </div>
                <h3 class="program-title">Chronic Disease Management</h3>
                <p class="program-description">Management and support for chronic diseases including diabetes, hypertension, asthma, and other long-term health conditions.</p>
                <div class="program-stats">
                    <div class="stat-item">
                        <span class="stat-number">1,200+</span>
                        <span class="stat-label">Patients Enrolled</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">8</span>
                        <span class="stat-label">Disease Areas</span>
                    </div>
                </div>
                <div class="program-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Diabetes Care</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Hypertension Management</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Asthma Support</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Regular Monitoring</span>
                    </div>
                </div>
                <button class="btn btn-primary">Enroll Now</button>
            </div>

            <!-- Health Education -->
            <div class="program-card">
                <div class="program-icon">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <h3 class="program-title">Health Education & Awareness</h3>
                <p class="program-description">Community health education programs covering nutrition, hygiene, disease prevention, and healthy lifestyle promotion.</p>
                <div class="program-stats">
                    <div class="stat-item">
                        <span class="stat-number">50+</span>
                        <span class="stat-label">Monthly Workshops</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">3,000+</span>
                        <span class="stat-label">People Reached</span>
                    </div>
                </div>
                <div class="program-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Nutrition Education</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Hygiene Promotion</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Disease Prevention</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Healthy Lifestyle</span>
                    </div>
                </div>
                <button class="btn btn-primary">Join Workshop</button>
            </div>

            <!-- Mental Health Support -->
            <div class="program-card">
                <div class="program-icon">
                    <span class="material-symbols-outlined">psychology</span>
                </div>
                <h3 class="program-title">Mental Health & Wellness</h3>
                <p class="program-description">Mental health support services including counseling, stress management, depression support, and community wellness programs.</p>
                <div class="program-stats">
                    <div class="stat-item">
                        <span class="stat-number">800+</span>
                        <span class="stat-label">People Supported</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">12</span>
                        <span class="stat-label">Support Groups</span>
                    </div>
                </div>
                <div class="program-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Counseling Services</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Stress Management</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Support Groups</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Wellness Programs</span>
                    </div>
                </div>
                <button class="btn btn-primary">Get Support</button>
            </div>

            <!-- Elderly Care -->
            <div class="program-card">
                <div class="program-icon">
                    <span class="material-symbols-outlined">elderly</span>
                </div>
                <div class="program-title">Elderly Care Services</h3>
                <p class="program-description">Specialized healthcare services for elderly citizens including geriatric care, home visits, and age-related disease management.</p>
                <div class="program-stats">
                    <div class="stat-item">
                        <span class="stat-number">600+</span>
                        <span class="stat-label">Elderly Served</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">150</span>
                        <span class="stat-label">Home Visits Monthly</span>
                    </div>
                </div>
                <div class="program-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Geriatric Care</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Home Visits</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Health Screening</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Social Support</span>
                    </div>
                </div>
                <button class="btn btn-primary">Register Elderly</button>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Medical Services -->
<section class="emergency-medical-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Emergency Medical Services</h2>
            <p class="section-subtitle">24/7 emergency medical care and ambulance services</p>
        </div>

        <div class="emergency-content">
            <div class="emergency-overview">
                <h3 class="overview-title">Emergency Response</h3>
                <p class="overview-description">
                    Our emergency medical services provide rapid response to medical emergencies with trained professionals 
                    and equipped ambulances serving all areas of Bamenda.
                </p>
            </div>

            <div class="emergency-services-grid">
                <!-- Ambulance Service -->
                <div class="emergency-service-card">
                    <div class="service-icon">
                        <span class="material-symbols-outlined">emergency</span>
                    </div>
                    <h3 class="service-title">Ambulance Service</h3>
                    <p class="service-description">24/7 ambulance service for emergency medical transportation and basic life support.</p>
                    <div class="service-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">phone</span>
                            <span>Emergency: 120</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Response Time: 8-12 minutes</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">local_shipping</span>
                            <span>5 Ambulances Available</span>
                        </div>
                    </div>
                    <button class="btn btn-danger">Call Ambulance</button>
                </div>

                <!-- Emergency Room -->
                <div class="emergency-service-card">
                    <div class="service-icon">
                        <span class="material-symbols-outlined">local_hospital</span>
                    </div>
                    <h3 class="service-title">Emergency Room</h3>
                    <p class="service-description">Fully equipped emergency rooms at regional and district hospitals for urgent medical care.</p>
                    <div class="service-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Regional Hospital</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>24/7 Services</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">medical_services</span>
                            <span>Emergency Physicians</span>
                        </div>
                    </div>
                    <button class="btn btn-danger">Go to ER</button>
                </div>

                <!-- First Aid Training -->
                <div class="emergency-service-card">
                    <div class="service-icon">
                        <span class="material-symbols-outlined">healing</span>
                    </div>
                    <h3 class="service-title">First Aid Training</h3>
                    <p class="service-description">Community first aid training programs to equip residents with life-saving skills.</p>
                    <div class="service-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">school</span>
                            <span>Monthly Training</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>2-Day Course</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">verified</span>
                            <span>Certified Training</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">Join Training</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Health Insurance -->
<section class="health-insurance-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Health Insurance & Coverage</h2>
            <p class="section-subtitle">Access affordable health insurance options and coverage plans</p>
        </div>

        <div class="insurance-content">
            <div class="insurance-overview">
                <h3 class="overview-title">Health Coverage Options</h3>
                <p class="overview-description">
                    We partner with various health insurance providers to offer affordable coverage options 
                    for individuals, families, and businesses in Bamenda.
                </p>
            </div>

            <div class="insurance-plans">
                <!-- Basic Plan -->
                <div class="insurance-card">
                    <div class="plan-header">
                        <h3 class="plan-title">Basic Health Plan</h3>
                        <div class="plan-price">
                            <span class="price">₣2,000</span>
                            <span class="period">per month</span>
                        </div>
                    </div>
                    <div class="plan-content">
                        <p class="plan-description">Essential health coverage for individuals and families with basic medical needs.</p>
                        <div class="plan-features">
                            <div class="feature-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Primary Care Visits</span>
                            </div>
                            <div class="feature-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Emergency Services</span>
                            </div>
                            <div class="feature-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Basic Laboratory Tests</span>
                            </div>
                            <div class="feature-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Prescription Coverage</span>
                            </div>
                        </div>
                        <button class="btn btn-primary">Enroll Now</button>
                    </div>
                </div>

                <!-- Standard Plan -->
                <div class="insurance-card">
                    <div class="plan-header">
                        <h3 class="plan-title">Standard Health Plan</h3>
                        <div class="plan-price">
                            <span class="price">₣5,000</span>
                            <span class="period">per month</span>
                        </div>
                    </div>
                    <div class="plan-content">
                        <p class="plan-description">Comprehensive health coverage with additional benefits for growing families.</p>
                        <div class="plan-features">
                            <div class="feature-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>All Basic Benefits</span>
                            </div>
                            <div class="feature-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Specialist Consultations</span>
                            </div>
                            <div class="feature-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Diagnostic Imaging</span>
                            </div>
                            <div class="feature-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Maternity Coverage</span>
                            </div>
                        </div>
                        <button class="btn btn-primary">Enroll Now</button>
                    </div>
                </div>

                <!-- Premium Plan -->
                <div class="insurance-card">
                    <div class="plan-header">
                        <h3 class="plan-title">Premium Health Plan</h3>
                        <div class="plan-price">
                            <span class="price">₣10,000</span>
                            <span class="period">per month</span>
                        </div>
                    </div>
                    <div class="plan-content">
                        <p class="plan-description">Complete health coverage with premium benefits and comprehensive care options.</p>
                        <div class="plan-features">
                            <div class="feature-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>All Standard Benefits</span>
                            </div>
                            <div class="feature-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Private Hospital Coverage</span>
                            </div>
                            <div class="feature-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Dental & Vision Care</span>
                            </div>
                            <div class="feature-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>International Coverage</span>
                            </div>
                        </div>
                        <button class="btn btn-primary">Enroll Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Health Appointment Booking -->
<section class="appointment-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Book Health Appointment</h2>
            <p class="section-subtitle">Schedule appointments with healthcare providers online</p>
        </div>

        <div class="appointment-content">
            <div class="appointment-form">
                <h3 class="form-title">Health Appointment Booking</h3>
                <form id="appointmentForm">
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
                            <label class="form-label">Date of Birth *</label>
                            <input type="date" class="form-input" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Service Type *</label>
                            <select class="form-select" required>
                                <option value="">Select service type</option>
                                <option value="general">General Consultation</option>
                                <option value="specialist">Specialist Consultation</option>
                                <option value="emergency">Emergency Care</option>
                                <option value="maternal">Maternal Health</option>
                                <option value="child">Child Health</option>
                                <option value="dental">Dental Care</option>
                                <option value="mental">Mental Health</option>
                                <option value="vaccination">Vaccination</option>
                                <option value="screening">Health Screening</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Preferred Facility *</label>
                            <select class="form-select" required>
                                <option value="">Select facility</option>
                                <option value="regional">Bamenda Regional Hospital</option>
                                <option value="nkwen">Nkwen District Hospital</option>
                                <option value="mankon">Mankon Health Center</option>
                                <option value="bambili">Bambili Rural Health Post</option>
                                <option value="dental">City Center Dental Clinic</option>
                                <option value="mental">Mental Health Center</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Preferred Date *</label>
                        <input type="date" class="form-input" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Preferred Time *</label>
                        <select class="form-select" required>
                            <option value="">Select preferred time</option>
                            <option value="morning">Morning (8:00 AM - 12:00 PM)</option>
                            <option value="afternoon">Afternoon (1:00 PM - 5:00 PM)</option>
                            <option value="evening">Evening (5:00 PM - 8:00 PM)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Reason for Visit *</label>
                        <textarea class="form-textarea" rows="4" placeholder="Describe your symptoms or reason for visit" required></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Previous Medical Conditions</label>
                        <textarea class="form-textarea" rows="3" placeholder="List any existing medical conditions or allergies"></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Insurance Coverage</label>
                        <select class="form-select">
                            <option value="">Select insurance status</option>
                            <option value="none">No Insurance</option>
                            <option value="basic">Basic Health Plan</option>
                            <option value="standard">Standard Health Plan</option>
                            <option value="premium">Premium Health Plan</option>
                            <option value="private">Private Insurance</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-actions">
                        <button type="reset" class="btn btn-outline">Reset</button>
                        <button type="submit" class="btn btn-primary">Book Appointment</button>
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
            <p class="section-subtitle">Common questions about public health services</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How do I book a medical appointment?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>You can book medical appointments online through our health services portal, by calling the facility directly, or visiting in person. Online booking is available for most services except emergencies.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What should I do in a medical emergency?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>In a medical emergency, call 120 for ambulance services or go directly to the nearest emergency room. For life-threatening emergencies, call 119 for general emergency services which will coordinate medical response.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Are health services free for residents?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Some basic health services are subsidized or free for residents, including certain vaccinations, maternal health services, and primary care for vulnerable populations. However, most services require payment or health insurance coverage.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What health insurance options are available?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>We offer various health insurance plans including Basic (₣2,000/month), Standard (₣5,000/month), and Premium (₣10,000/month) options. We also partner with private insurance companies to provide additional coverage choices.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How can I access mental health services?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Mental health services are available at our Mental Health & Counseling Center in Mile Four. You can book appointments online or call directly. We also offer confidential counseling and support groups for various mental health conditions.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What vaccination services are available?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>We offer comprehensive vaccination services including routine childhood immunizations, COVID-19 vaccines, travel vaccines, and disease-specific vaccinations. Most vaccinations are free or heavily subsidized through public health programs.</p>
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
/* Health Services Page Styles */
.health-services-hero {
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
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.action-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
}

/* Health Statistics Section */
.health-stats-section {
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

/* Medical Facilities Section */
.medical-facilities-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.facilities-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.facility-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.facility-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.facility-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.facility-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--tertiary);
    color: var(--on-tertiary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.facility-icon .material-symbols-outlined {
    font-size: 2rem;
}

.facility-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.facility-badge.primary {
    background-color: var(--primary);
    color: var(--on-primary);
}

.facility-badge.secondary {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.facility-badge.tertiary {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.facility-badge.rural {
    background-color: var(--outline-variant);
    color: var(--on-surface);
}

.facility-badge.specialized {
    background-color: var(--surface-variant);
    color: var(--on-surface-variant);
}

.facility-badge.mental {
    background-color: var(--error);
    color: var(--on-error);
}

.facility-content {
    padding: var(--spacing-lg);
}

.facility-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.facility-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.facility-details {
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

.facility-services {
    margin-bottom: var(--spacing-lg);
}

.services-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.services-list {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-sm);
}

.service-item {
    padding: var(--spacing-xs) var(--spacing-sm);
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.facility-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Health Programs Section */
.health-programs-section {
    padding: var(--spacing-3xl) 0;
}

.programs-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.program-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.program-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.program-icon {
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

.program-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.program-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.program-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.program-stats {
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
    justify-content: center;
}

.feature-item .material-symbols-outlined {
    font-size: 1rem;
    color: var(--tertiary);
}

/* Emergency Medical Section */
.emergency-medical-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.emergency-content {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xl);
}

.emergency-overview {
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

.emergency-services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.emergency-service-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.emergency-service-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.service-icon {
    width: 3rem;
    height: 3rem;
    background-color: var(--error);
    color: var(--on-error);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-md);
}

.emergency-service-card:nth-child(3) .service-icon {
    background-color: var(--primary);
    color: var(--on-primary);
}

.service-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.service-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.service-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.service-details {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

/* Health Insurance Section */
.health-insurance-section {
    padding: var(--spacing-3xl) 0;
}

.insurance-content {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xl);
}

.insurance-overview {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.insurance-plans {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.insurance-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.insurance-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.plan-header {
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
    text-align: center;
}

.plan-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.plan-price {
    margin-bottom: var(--spacing-sm);
}

.price {
    font-size: 2rem;
    font-weight: 800;
    color: var(--primary);
    display: block;
}

.period {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.plan-content {
    padding: var(--spacing-lg);
    text-align: center;
}

.plan-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.plan-features {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

/* Appointment Section */
.appointment-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.appointment-content {
    display: flex;
    justify-content: center;
}

.appointment-form {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-2xl);
    border: 1px solid var(--outline-variant);
    max-width: 600px;
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
    
    .facilities-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .programs-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .emergency-services-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .insurance-plans {
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
    
    .facility-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .appointment-form {
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
    
    .facility-actions {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .facility-actions .btn {
        width: 100%;
    }
    
    .program-stats {
        flex-direction: column;
        gap: var(--spacing-md);
    }
}
</style>

<script>
// Quick action functions
function openMedicalFacilities() {
    document.getElementById('medical-facilities').scrollIntoView({ behavior: 'smooth' });
}

function openEmergencyServices() {
    document.querySelector('.emergency-medical-section').scrollIntoView({ behavior: 'smooth' });
}

function openHealthPrograms() {
    document.getElementById('health-programs').scrollIntoView({ behavior: 'smooth' });
}

function openVaccination() {
    alert('Vaccination services portal would open here. In production, this would show vaccination schedules, locations, and appointment booking.');
}

function openMaternalHealth() {
    alert('Maternal health services portal would open here. In production, this would show prenatal care, delivery services, and postnatal support.');
}

function openHealthInsurance() {
    document.querySelector('.health-insurance-section').scrollIntoView({ behavior: 'smooth' });
}

// Facility actions
document.querySelectorAll('.facility-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Book')) {
        button.addEventListener('click', function() {
            const facilityTitle = this.closest('.facility-card').querySelector('.facility-title').textContent;
            alert(`Booking appointment at: "${facilityTitle}"`);
        });
    }
});

document.querySelectorAll('.facility-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Directions')) {
        button.addEventListener('click', function() {
            const facilityTitle = this.closest('.facility-card').querySelector('.facility-title').textContent;
            alert(`Getting directions to: "${facilityTitle}"`);
        });
    }
});

// Program actions
document.querySelectorAll('.program-card .btn-primary').forEach(button => {
    if (button.textContent.includes('Join')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
            alert(`Joining: "${programTitle}"`);
        });
    }
    
    if (button.textContent.includes('Get')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
            alert(`Getting: "${programTitle}"`);
        });
    }
    
    if (button.textContent.includes('Enroll')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
            alert(`Enrolling in: "${programTitle}"`);
        });
    }
    
    if (button.textContent.includes('Register')) {
        button.addEventListener('click', this() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
            alert(`Registering for: "${programTitle}"`);
        });
    }
});

// Emergency service actions
document.querySelectorAll('.emergency-service-card .btn-danger').forEach(button => {
    if (button.textContent.includes('Call')) {
        button.addEventListener('click', function() {
            if (confirm('Call 120 for ambulance service?')) {
                window.location.href = 'tel:120';
            }
        });
    }
    
    if (button.textContent.includes('Go')) {
        button.addEventListener('click', function() {
            alert('Emergency room directions would open here. In production, this would show the nearest ER location and directions.');
        });
    }
});

document.querySelectorAll('.emergency-service-card .btn-primary').forEach(button => {
    if (button.textContent.includes('Join')) {
        button.addEventListener('click', function() {
            alert('First aid training enrollment would open here. In production, this would show training schedules and registration.');
        });
    }
});

// Insurance actions
document.querySelectorAll('.insurance-card .btn-primary').forEach(button => {
    if (button.textContent.includes('Enroll')) {
        button.addEventListener('click', function() {
            const planTitle = this.closest('.insurance-card').querySelector('.plan-title').textContent;
            alert(`Enrolling in: "${planTitle}"`);
        });
    }
});

// Appointment form submission
document.getElementById('appointmentForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate required fields
    const fullName = document.querySelector('input[placeholder*="name"]').value;
    const phone = document.querySelector('input[placeholder*="phone"]').value;
    const dateOfBirth = document.querySelector('input[type="date"]').value;
    const serviceType = document.querySelector('select[required]').value;
    const facility = document.querySelectorAll('select[required]')[1].value;
    const preferredDate = document.querySelector('input[type="date"]').value;
    const preferredTime = document.querySelectorAll('select[required]')[2].value;
    const reason = document.querySelector('textarea[required]').value;
    
    if (!fullName || !phone || !dateOfBirth || !serviceType || !facility || !preferredDate || !preferredTime || !reason) {
        alert('Please fill in all required fields.');
        return;
    }
    
    alert('Appointment booking submitted successfully! We will contact you within 24 hours to confirm your appointment details and provide any necessary preparation instructions.');
    // In production, this would submit the appointment booking
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

// Auto-refresh health statistics
function refreshHealthStats() {
    // In production, this would fetch real-time health statistics
    console.log('Refreshing health services statistics...');
}

// Refresh statistics every 60 seconds
setInterval(refreshHealthStats, 60000);
</script>
