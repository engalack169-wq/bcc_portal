<?php
/**
 * Bamenda City Council E-Governance Platform
 * Health Services Page
 */

// Set page metadata
$page_title = 'Health Services | Bamenda City Council';
$page_description = 'Access comprehensive healthcare services, hospitals, clinics, and medical facilities in Bamenda.';
$page_keywords = 'health services, healthcare, hospitals, clinics, medical services, Bamenda health';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Services', 'url' => 'services.php'],
    ['title' => 'Health Services', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero health-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-government-building.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Health Services</span>
            <h1 class="hero-title">Healthcare & Wellness</h1>
            <p class="hero-subtitle">
                Access comprehensive healthcare services, find medical facilities, and connect with health professionals in Bamenda.
            </p>
            <div class="hero-actions">
                <a href="#health-facilities" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">local_hospital</span>
                    Find Facilities
                </a>
                <a href="#health-services" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">medical_services</span>
                    View Services
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Health Actions -->
<section class="quick-health-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Quick Health Actions</h2>
            <p class="section-subtitle">Essential health services at your fingertips</p>
        </div>

        <div class="quick-actions-grid">
            <div class="action-card urgent" onclick="openEmergencyServices()">
                <div class="action-icon urgent">
                    <span class="material-symbols-outlined">emergency</span>
                </div>
                <h3 class="action-title">Emergency Services</h3>
                <p class="action-description">24/7 emergency medical services and ambulance</p>
                <div class="emergency-number">120</div>
            </div>

            <div class="action-card" onclick="findHospital()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">local_hospital</span>
                </div>
                <h3 class="action-title">Find Hospital</h3>
                <p class="action-description">Locate nearest hospitals and medical centers</p>
            </div>

            <div class="action-card" onclick="bookAppointment()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">calendar_month</span>
                </div>
                <h3 class="action-title">Book Appointment</h3>
                <p class="action-description">Schedule appointments with healthcare providers</p>
            </div>

            <div class="action-card" onclick="accessTelemedicine()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">video_call</span>
                </div>
                <h3 class="action-title">Telemedicine</h3>
                <p class="action-description">Consult with doctors remotely via video call</p>
            </div>

            <div class="action-card" onclick="findPharmacy()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">medication</span>
                </div>
                <h3 class="action-title">Find Pharmacy</h3>
                <p class="action-description">Locate nearby pharmacies and medication availability</p>
            </div>

            <div class="action-card" onclick="healthInsurance()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">health_and_safety</span>
                </div>
                <h3 class="action-title">Health Insurance</h3>
                <p class="action-description">Information about health coverage and insurance</p>
            </div>
        </div>
    </div>
</section>

<!-- Health Facilities -->
<section class="health-facilities-section" id="health-facilities">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Health Facilities</h2>
            <p class="section-subtitle">Hospitals, clinics, and healthcare centers in Bamenda</p>
        </div>

        <div class="facilities-filters">
            <div class="filter-row">
                <div class="form-group">
                    <label class="form-label">Facility Type</label>
                    <select class="form-select" id="facilityType">
                        <option value="">All Facilities</option>
                        <option value="hospital">Hospitals</option>
                        <option value="clinic">Clinics</option>
                        <option value="health-center">Health Centers</option>
                        <option value="specialized">Specialized Centers</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Location</label>
                    <select class="form-select" id="facilityLocation">
                        <option value="">All Locations</option>
                        <option value="city-center">City Center</option>
                        <option value="nkwen">Nkwen</option>
                        <option value="mankon">Mankon</option>
                        <option value="bambili">Bambili</option>
                        <option value="bambui">Bambui</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Services</label>
                    <select class="form-select" id="facilityServices">
                        <option value="">All Services</option>
                        <option value="emergency">Emergency Care</option>
                        <option value="maternity">Maternity</option>
                        <option value="pediatrics">Pediatrics</option>
                        <option value="surgery">Surgery</option>
                    </select>
                </div>
                <button class="btn btn-primary" onclick="filterFacilities()">Filter</button>
            </div>
        </div>

        <div class="facilities-grid">
            <!-- Regional Hospital -->
            <div class="facility-card">
                <div class="facility-header">
                    <div class="facility-image">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                             alt="Bamenda Regional Hospital building">
                    </div>
                    <div class="facility-badge">Regional Hospital</div>
                </div>
                <div class="facility-content">
                    <h3 class="facility-name">Bamenda Regional Hospital</h3>
                    <p class="facility-description">Major referral hospital providing comprehensive medical services including emergency care, surgery, and specialized treatments.</p>
                    <div class="facility-services">
                        <span class="service-tag emergency">Emergency</span>
                        <span class="service-tag surgery">Surgery</span>
                        <span class="service-tag maternity">Maternity</span>
                        <span class="service-tag pediatrics">Pediatrics</span>
                    </div>
                    <div class="facility-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>City Center, Bamenda</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">phone</span>
                            <span>+237 233 123 410</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>24/7 Emergency</span>
                        </div>
                    </div>
                    <div class="facility-rating">
                        <div class="stars">
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star_half</span>
                        </div>
                        <span class="rating-text">4.5 (324 reviews)</span>
                    </div>
                    <div class="facility-actions">
                        <button class="btn btn-sm btn-primary">Get Directions</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                        <button class="btn btn-sm btn-outline">Call Now</button>
                    </div>
                </div>
            </div>

            <!-- Bamenda General Hospital -->
            <div class="facility-card">
                <div class="facility-header">
                    <div class="facility-image">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                             alt="Bamenda General Hospital building">
                    </div>
                    <div class="facility-badge">General Hospital</div>
                </div>
                <div class="facility-content">
                    <h3 class="facility-name">Bamenda General Hospital</h3>
                    <p class="facility-description">Full-service hospital offering general medical care, diagnostic services, and inpatient facilities.</p>
                    <div class="facility-services">
                        <span class="service-tag general">General Care</span>
                        <span class="service-tag diagnostic">Diagnostics</span>
                        <span class="service-tag inpatient">Inpatient</span>
                    </div>
                    <div class="facility-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Nkwen, Bamenda</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">phone</span>
                            <span>+237 233 123 420</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>24/7 Emergency</span>
                        </div>
                    </div>
                    <div class="facility-rating">
                        <div class="stars">
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star_border</span>
                        </div>
                        <span class="rating-text">4.0 (256 reviews)</span>
                    </div>
                    <div class="facility-actions">
                        <button class="btn btn-sm btn-primary">Get Directions</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                        <button class="btn btn-sm btn-outline">Call Now</button>
                    </div>
                </div>
            </div>

            <!-- Mankon District Hospital -->
            <div class="facility-card">
                <div class="facility-header">
                    <div class="facility-image">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                             alt="Mankon District Hospital building">
                    </div>
                    <div class="facility-badge">District Hospital</div>
                </div>
                <div class="facility-content">
                    <h3 class="facility-name">Mankon District Hospital</h3>
                    <p class="facility-description">Community hospital providing primary healthcare, maternal services, and basic surgical procedures.</p>
                    <div class="facility-services">
                        <span class="service-tag primary">Primary Care</span>
                        <span class="service-tag maternity">Maternity</span>
                        <span class="service-tag basic-surgery">Basic Surgery</span>
                    </div>
                    <div class="facility-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Mankon, Bamenda</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">phone</span>
                            <span>+237 233 123 430</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>8:00 AM - 8:00 PM</span>
                        </div>
                    </div>
                    <div class="facility-rating">
                        <div class="stars">
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star_half</span>
                        </div>
                        <span class="rating-text">4.2 (189 reviews)</span>
                    </div>
                    <div class="facility-actions">
                        <button class="btn btn-sm btn-primary">Get Directions</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                        <button class="btn btn-sm btn-outline">Call Now</button>
                    </div>
                </div>
            </div>

            <!-- Bamenda Health Center -->
            <div class="facility-card">
                <div class="facility-header">
                    <div class="facility-image">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                             alt="Bamenda Health Center building">
                    </div>
                    <div class="facility-badge">Health Center</div>
                </div>
                <div class="facility-content">
                    <h3 class="facility-name">Bamenda Health Center</h3>
                    <p class="facility-description">Primary health center offering preventive care, vaccinations, and basic medical services.</p>
                    <div class="facility-services">
                        <span class="service-tag preventive">Preventive Care</span>
                        <span class="service-tag vaccination">Vaccination</span>
                        <span class="service-tag basic-care">Basic Care</span>
                    </div>
                    <div class="facility-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Bambili, Bamenda</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">phone</span>
                            <span>+237 233 123 440</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>8:00 AM - 5:00 PM</span>
                        </div>
                    </div>
                    <div class="facility-rating">
                        <div class="stars">
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star_border</span>
                        </div>
                        <span class="rating-text">3.8 (145 reviews)</span>
                    </div>
                    <div class="facility-actions">
                        <button class="btn btn-sm btn-primary">Get Directions</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                        <button class="btn btn-sm btn-outline">Call Now</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="load-more-container">
            <button class="btn btn-outline" onclick="loadMoreFacilities()">Load More Facilities</button>
        </div>
    </div>
</section>

<!-- Health Services -->
<section class="health-services-section" id="health-services">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Health Services</h2>
            <p class="section-subtitle">Comprehensive healthcare services available in Bamenda</p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">emergency</span>
                </div>
                <h3 class="service-title">Emergency Care</h3>
                <p class="service-description">24/7 emergency medical services including trauma care, cardiac emergencies, and critical care.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>24/7 Availability</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Ambulance Services</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Trauma Center</span>
                    </div>
                </div>
                <button class="btn btn-primary">Learn More</button>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">pregnant_woman</span>
                </div>
                <h3 class="service-title">Maternity & Child Health</h3>
                <p class="service-description">Complete maternal and child healthcare including prenatal care, delivery, and pediatric services.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Prenatal Care</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Delivery Services</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Child Vaccination</span>
                    </div>
                </div>
                <button class="btn btn-primary">Learn More</button>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">medical_services</span>
                </div>
                <h3 class="service-title">Specialized Care</h3>
                <p class="service-description">Specialized medical services including cardiology, oncology, neurology, and orthopedics.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Cardiology</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Oncology</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Neurology</span>
                    </div>
                </div>
                <button class="btn btn-primary">Learn More</button>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">healing</span>
                </div>
                <h3 class="service-title">Mental Health</h3>
                <p class="service-description">Comprehensive mental health services including counseling, therapy, and psychiatric care.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Counseling</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Therapy Sessions</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Psychiatric Care</span>
                    </div>
                </div>
                <button class="btn btn-primary">Learn More</button>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">vaccines</span>
                </div>
                <h3 class="service-title">Preventive Care</h3>
                <p class="service-description">Preventive healthcare services including vaccinations, health screenings, and wellness programs.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Vaccinations</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Health Screenings</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Wellness Programs</span>
                    </div>
                </div>
                <button class="btn btn-primary">Learn More</button>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">medication</span>
                </div>
                <h3 class="service-title">Pharmacy Services</h3>
                <p class="service-description">Pharmaceutical services including prescription fulfillment and medication management.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Prescription Drugs</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Medication Counseling</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Home Delivery</span>
                    </div>
                </div>
                <button class="btn btn-primary">Learn More</button>
            </div>
        </div>
    </div>
</section>

<!-- Health Statistics -->
<section class="health-statistics-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Health Statistics</h2>
            <p class="section-subtitle">Key healthcare metrics for Bamenda</p>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">local_hospital</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">12</div>
                    <div class="stat-label">Health Facilities</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+2 this year</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">medical_services</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">450+</div>
                    <div class="stat-label">Healthcare Professionals</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+15% this year</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">85%</div>
                    <div class="stat-label">Vaccination Coverage</div>
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
                    <div class="stat-number">15 min</div>
                    <div class="stat-label">Avg. Response Time</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_down</span>
                        <span>-3 min faster</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Appointment Booking -->
<section class="appointment-booking-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Book Appointment</h2>
            <p class="section-subtitle">Schedule your medical appointment online</p>
        </div>

        <div class="booking-form">
            <form id="appointmentForm">
                <div class="form-section">
                    <h3 class="section-title">Appointment Details</h3>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Facility *</label>
                            <select class="form-select" required>
                                <option value="">Select facility</option>
                                <option value="regional">Bamenda Regional Hospital</option>
                                <option value="general">Bamenda General Hospital</option>
                                <option value="mankon">Mankon District Hospital</option>
                                <option value="health-center">Bamenda Health Center</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Department *</label>
                            <select class="form-select" required>
                                <option value="">Select department</option>
                                <option value="general">General Medicine</option>
                                <option value="emergency">Emergency</option>
                                <option value="maternity">Maternity</option>
                                <option value="pediatrics">Pediatrics</option>
                                <option value="surgery">Surgery</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Preferred Date *</label>
                            <input type="date" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Preferred Time *</label>
                            <select class="form-select" required>
                                <option value="">Select time</option>
                                <option value="morning">Morning (8AM-12PM)</option>
                                <option value="afternoon">Afternoon (12PM-4PM)</option>
                                <option value="evening">Evening (4PM-8PM)</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Reason for Visit *</label>
                        <textarea class="form-textarea" rows="3" placeholder="Describe your symptoms or reason for appointment" required></textarea>
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">Personal Information</h3>
                    
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

                    <div class="form-group">
                        <label class="form-label">Medical History</label>
                        <textarea class="form-textarea" rows="3" placeholder="Any relevant medical history or conditions"></textarea>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="reset" class="btn btn-outline">Reset</button>
                    <button type="submit" class="btn btn-primary">Book Appointment</button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Health Tips -->
<section class="health-tips-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Health & Wellness Tips</h2>
            <p class="section-subtitle">Stay healthy with these practical tips</p>
        </div>

        <div class="tips-grid">
            <div class="tip-card">
                <div class="tip-icon">
                    <span class="material-symbols-outlined">water_drop</span>
                </div>
                <h3 class="tip-title">Stay Hydrated</h3>
                <p class="tip-description">Drink at least 8 glasses of water daily to maintain proper body function and overall health.</p>
            </div>

            <div class="tip-card">
                <div class="tip-icon">
                    <span class="material-symbols-outlined">directions_run</span>
                </div>
                <h3 class="tip-title">Regular Exercise</h3>
                <p class="tip-description">Engage in at least 30 minutes of moderate physical activity daily for better health.</p>
            </div>

            <div class="tip-card">
                <div class="tip-icon">
                    <span class="material-symbols-outlined">nutrition</span>
                </div>
                <h3 class="tip-title">Balanced Diet</h3>
                <p class="tip-description">Eat a variety of foods including fruits, vegetables, and whole grains for optimal nutrition.</p>
            </div>

            <div class="tip-card">
                <div class="tip-icon">
                    <span class="material-symbols-outlined">nightlight</span>
                </div>
                <h3 class="tip-title">Adequate Sleep</h3>
                <p class="tip-description">Get 7-9 hours of quality sleep each night to support physical and mental health.</p>
            </div>

            <div class="tip-card">
                <div class="tip-icon">
                    <span class="material-symbols-outlined">psychology</span>
                </div>
                <h3 class="tip-title">Mental Wellness</h3>
                <p class="tip-description">Practice stress management techniques and seek help when needed for mental health.</p>
            </div>

            <div class="tip-card">
                <div class="tip-icon">
                    <span class="material-symbols-outlined">vaccines</span>
                </div>
                <h3 class="tip-title">Preventive Care</h3>
                <p class="tip-description">Stay up-to-date with vaccinations and regular health check-ups for disease prevention.</p>
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
.health-hero {
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-container) 100%);
}

/* Quick Health Actions Section */
.quick-health-actions-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.quick-actions-grid {
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
    position: relative;
}

.action-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.action-card.urgent {
    background: linear-gradient(135deg, var(--error) 0%, var(--error-container) 100%);
    color: var(--on-error);
}

.action-card.urgent .action-icon {
    background-color: var(--on-error);
    color: var(--error);
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

.action-card.urgent .action-title {
    color: var(--on-error);
}

.action-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.action-card.urgent .action-description {
    color: rgba(255, 255, 255, 0.9);
}

.emergency-number {
    font-size: 2rem;
    font-weight: 800;
    color: var(--error);
    margin-top: var(--spacing-md);
}

.action-card.urgent .emergency-number {
    color: var(--on-error);
}

/* Health Facilities Section */
.health-facilities-section {
    padding: var(--spacing-3xl) 0;
}

.facilities-filters {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    margin-bottom: var(--spacing-xl);
}

.filter-row {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: var(--spacing-lg);
    align-items: end;
}

.facilities-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.facility-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    overflow: hidden;
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.facility-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.facility-header {
    position: relative;
}

.facility-image {
    height: 200px;
    overflow: hidden;
}

.facility-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.facility-badge {
    position: absolute;
    top: var(--spacing-lg);
    right: var(--spacing-lg);
    background-color: var(--primary);
    color: var(--on-primary);
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.facility-content {
    padding: var(--spacing-lg);
}

.facility-name {
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

.facility-services {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

.service-tag {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.service-tag.emergency {
    background-color: var(--error-container);
    color: var(--on-error-container);
}

.service-tag.surgery {
    background-color: var(--primary-container);
    color: var(--on-primary-container);
}

.service-tag.maternity {
    background-color: var(--tertiary-container);
    color: var(--on-tertiary-container);
}

.service-tag.pediatrics {
    background-color: var(--secondary-container);
    color: var(--on-secondary-container);
}

.service-tag.general {
    background-color: var(--surface-container);
    color: var(--on-surface);
}

.service-tag.diagnostic {
    background-color: var(--outline-variant);
    color: var(--on-surface-variant);
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
    color: var(--on-surface-variant);
    font-size: 0.875rem;
}

.detail-item .material-symbols-outlined {
    font-size: 1.25rem;
    color: var(--primary);
}

.facility-rating {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

.stars {
    display: flex;
    gap: 2px;
}

.stars .material-symbols-outlined {
    font-size: 1rem;
    color: var(--secondary);
}

.rating-text {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.facility-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Health Services Section */
.health-services-section {
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
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

.feature-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    color: var(--on-surface-variant);
    font-size: 0.875rem;
}

.feature-item .material-symbols-outlined {
    font-size: 1rem;
    color: var(--tertiary);
}

/* Health Statistics Section */
.health-statistics-section {
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

/* Appointment Booking Section */
.appointment-booking-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.booking-form {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-2xl);
    border: 1px solid var(--outline-variant);
    max-width: 800px;
    margin: 0 auto;
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

/* Health Tips Section */
.health-tips-section {
    padding: var(--spacing-3xl) 0;
}

.tips-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: var(--spacing-xl);
}

.tip-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.tip-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.tip-icon {
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

.tip-icon .material-symbols-outlined {
    font-size: 2rem;
}

.tip-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.tip-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
}

/* Responsive Design */
@media (max-width: 768px) {
    .quick-actions-grid {
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: var(--spacing-lg);
    }
    
    .filter-row {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .facilities-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .services-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
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
    
    .tips-grid {
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
    
    .booking-form {
        padding: var(--spacing-lg);
    }
    
    .tip-card {
        padding: var(--spacing-lg);
    }
    
    .tip-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .tip-icon .material-symbols-outlined {
        font-size: 1.5rem;
    }
    
    .stat-number {
        font-size: 1.5rem;
    }
}
</style>

<script>
// Facility filtering
function filterFacilities() {
    const type = document.getElementById('facilityType').value;
    const location = document.getElementById('facilityLocation').value;
    const services = document.getElementById('facilityServices').value;
    
    // In production, this would filter the facilities
    alert(`Filtering facilities by: ${type || 'All Types'}, ${location || 'All Locations'}, ${services || 'All Services'}`);
}

// Load more facilities
function loadMoreFacilities() {
    // In production, this would load more facilities from the server
    alert('Loading more facilities...');
}

// Quick action functions
function openEmergencyServices() {
    alert('Emergency Services: Call 120 for immediate medical assistance');
}

function findHospital() {
    document.getElementById('health-facilities').scrollIntoView({ behavior: 'smooth' });
}

function bookAppointment() {
    document.getElementById('appointment-booking').scrollIntoView({ behavior: 'smooth' });
}

function accessTelemedicine() {
    alert('Telemedicine service would open here. In production, this would connect to video consultation platform.');
}

function findPharmacy() {
    alert('Pharmacy finder would open here. In production, this would show nearby pharmacies on a map.');
}

function healthInsurance() {
    alert('Health insurance information would be displayed here. In production, this would show coverage options and plans.');
}

// Facility actions
document.querySelectorAll('.facility-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Directions')) {
        button.addEventListener('click', function() {
            const facilityName = this.closest('.facility-card').querySelector('.facility-name').textContent;
            alert(`Getting directions to: "${facilityName}"`);
        });
    }
});

document.querySelectorAll('.facility-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Details')) {
        button.addEventListener('click', function() {
            const facilityName = this.closest('.facility-card').querySelector('.facility-name').textContent;
            alert(`Detailed view for: "${facilityName}"`);
        });
    }
    
    if (button.textContent.includes('Call')) {
        button.addEventListener('click', function() {
            const facilityName = this.closest('.facility-card').querySelector('.facility-name').textContent;
            alert(`Calling: "${facilityName}"`);
        });
    }
});

// Service actions
document.querySelectorAll('.service-card .btn-primary').forEach(button => {
    if (button.textContent.includes('Learn More')) {
        button.addEventListener('click', function() {
            const serviceName = this.closest('.service-card').querySelector('.service-title').textContent;
            alert(`More information about: "${serviceName}"`);
        });
    }
});

// Appointment form submission
document.getElementById('appointmentForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Appointment booking request submitted successfully! You will receive a confirmation call shortly.');
    // In production, this would submit the appointment request
});
</script>
