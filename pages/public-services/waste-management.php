<?php
/**
 * Bamenda City Council E-Governance Platform
 * Waste Management Services Page
 */

// Set page metadata
$page_title = 'Waste Management Services | Bamenda City Council';
$page_description = 'Access waste collection services, recycling programs, environmental sanitation, and waste management solutions for Bamenda.';
$page_keywords = 'waste management, waste collection, recycling, environmental sanitation, Bamenda waste services';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Public Services', 'url' => '../index.php'],
    ['title' => 'Waste Management', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero waste-management-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-public-services.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Waste Management Services</span>
            <h1 class="hero-title">Environmental Sanitation & Waste Management</h1>
            <p class="hero-subtitle">
                Comprehensive waste management solutions including waste collection, recycling programs, and environmental sanitation services for a cleaner Bamenda.
            </p>
            <div class="hero-actions">
                <a href="#waste-services" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">delete</span>
                    Waste Services
                </a>
                <a href="#report-waste" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">report</span>
                    Report Issue
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Waste Management Actions</h2>
            <p class="section-subtitle">Quick access to waste management services and programs</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openWasteServices()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">delete</span>
                </div>
                <h3 class="action-title">Waste Collection</h3>
                <p class="action-description">Schedule waste collection and view collection schedules</p>
            </div>

            <div class="action-card" onclick="openRecyclingPrograms()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">recycling</span>
                </div>
                <h3 class="action-title">Recycling Programs</h3>
                <p class="action-description">Join recycling initiatives and waste reduction programs</p>
            </div>

            <div class="action-card" onclick="openCollectionSchedule()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">calendar_month</span>
                </div>
                <h3 class="action-title">Collection Schedule</h3>
                <p class="action-description">View waste collection schedules for your area</p>
            </div>

            <div class="action-card" onclick="openWasteReporting()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">report_problem</span>
                </div>
                <h3 class="action-title">Report Waste Issues</h3>
                <p class="action-description">Report waste collection problems and illegal dumping</p>
            </div>

            <div class="action-card" onclick="openEnvironmentalServices()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">eco</span>
                </div>
                <h3 class="action-title">Environmental Services</h3>
                <p class="action-description">Access environmental sanitation and cleaning services</p>
            </div>

            <div class="action-card" onclick="openWasteEducation()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <h3 class="action-title">Waste Education</h3>
                <p class="action-description">Learn about waste management and environmental protection</p>
            </div>
        </div>
    </div>
</section>

<!-- Waste Management Statistics -->
<section class="waste-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">delete</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">234 tons</div>
                    <div class="stat-label">Waste Collected Monthly</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+12% efficiency</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">recycling</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">45%</div>
                    <div class="stat-label">Recycling Rate</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+8% improvement</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">location_on</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">89</div>
                    <div class="stat-label">Collection Points</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+15 new points</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">156</div>
                    <div class="stat-label">Sanitation Workers</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+23 new workers</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Waste Services -->
<section class="waste-services-section" id="waste-services">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Waste Management Services</h2>
            <p class="section-subtitle">Comprehensive waste collection and management solutions</p>
        </div>

        <div class="services-grid">
            <!-- Residential Waste Collection -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">home</span>
                </div>
                <h3 class="service-title">Residential Waste Collection</h3>
                <p class="service-description">Regular waste collection services for households and residential areas in Bamenda.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Weekly Collection</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Door-to-Door Service</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Segregated Collection</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Special Collection</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Collection: Monday, Wednesday, Friday</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">payments</span>
                        <span>Cost: ₣2,000/month</span>
                    </div>
                </div>
                <button class="btn btn-primary">Request Service</button>
            </div>

            <!-- Commercial Waste Collection -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">storefront</span>
                </div>
                <h3 class="service-title">Commercial Waste Collection</h3>
                <p class="service-description">Specialized waste collection services for businesses, shops, and commercial establishments.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Daily Collection</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Large Volume Handling</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Custom Schedules</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Waste Sorting</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Collection: Daily/Custom</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">payments</span>
                        <span>Cost: Based on volume</span>
                    </div>
                </div>
                <button class="btn btn-primary">Request Service</button>
            </div>

            <!-- Industrial Waste Management -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">factory</span>
                </div>
                <h3 class="service-title">Industrial Waste Management</h3>
                <p class="service-description">Comprehensive waste management solutions for industrial facilities and manufacturing plants.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Hazardous Waste Handling</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Chemical Waste Disposal</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Compliance Management</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Environmental Monitoring</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Collection: Custom Schedule</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">payments</span>
                        <span>Cost: Custom Quote</span>
                    </div>
                </div>
                <button class="btn btn-primary">Request Service</button>
            </div>

            <!-- Medical Waste Disposal -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">medical_services</span>
                </div>
                <h3 class="service-title">Medical Waste Disposal</h3>
                <p class="service-description">Safe and compliant medical waste disposal services for healthcare facilities and clinics.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Biohazard Handling</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Sharps Disposal</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Infectious Waste</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Pharmaceutical Waste</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Collection: 3 times/week</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">payments</span>
                        <span>Cost: Based on volume</span>
                    </div>
                </div>
                <button class="btn btn-primary">Request Service</button>
            </div>

            <!-- Construction Waste -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">construction</span>
                </div>
                <h3 class="service-title">Construction Waste</h3>
                <p class="service-description">Collection and disposal of construction and demolition waste materials.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Debris Removal</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Concrete Recycling</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Metal Recovery</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Site Cleanup</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Collection: On-demand</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">payments</span>
                        <span>Cost: Per ton</span>
                    </div>
                </div>
                <button class="btn btn-primary">Request Service</button>
            </div>

            <!-- Green Waste Collection -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">nature</span>
                </div>
                <h3 class="service-title">Green Waste Collection</h3>
                <p class="service-description">Collection and composting of garden waste, leaves, and organic materials.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Garden Waste</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Tree Trimmings</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Composting</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Mulch Production</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Collection: Bi-weekly</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">payments</span>
                        <span>Cost: Free service</span>
                    </div>
                </div>
                <button class="btn btn-primary">Request Service</button>
            </div>
        </div>
    </div>
</section>

<!-- Collection Schedule -->
<section class="collection-schedule-section" id="collection-schedule">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Waste Collection Schedule</h2>
            <p class="section-subtitle">View and manage waste collection schedules for your area</p>
        </div>

        <div class="schedule-content">
            <div class="schedule-filters">
                <div class="filter-row">
                    <div class="form-group">
                        <label class="form-label">Select Area</label>
                        <select class="form-select" id="areaSelect">
                            <option value="">Select your area</option>
                            <option value="city-center">City Center</option>
                            <option value="nkwen">Nkwen</option>
                            <option value="mankon">Mankon</option>
                            <option value="bambili">Bambili</option>
                            <option value="bambui">Bambui</option>
                            <option value="mile-four">Mile Four</option>
                            <option value="mile-three">Mile Three</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Service Type</label>
                        <select class="form-select" id="serviceType">
                            <option value="">All services</option>
                            <option value="residential">Residential</option>
                            <option value="commercial">Commercial</option>
                            <option value="recycling">Recycling</option>
                            <option value="green">Green Waste</option>
                        </select>
                    </div>
                    <button class="btn btn-primary" onclick="updateSchedule()">View Schedule</button>
                </div>
            </div>

            <div class="schedule-calendar">
                <div class="calendar-header">
                    <h3 class="calendar-title">Collection Schedule - City Center</h3>
                    <div class="calendar-navigation">
                        <button class="btn btn-sm btn-outline" onclick="previousWeek()">Previous Week</button>
                        <span class="date-range">March 18 - March 24, 2024</span>
                        <button class="btn btn-sm btn-outline" onclick="nextWeek()">Next Week</button>
                    </div>
                </div>

                <div class="calendar-grid">
                    <div class="day-card">
                        <div class="day-header">
                            <h4 class="day-name">Monday</h4>
                            <span class="day-date">March 18</span>
                        </div>
                        <div class="day-schedule">
                            <div class="schedule-item residential">
                                <span class="service-type">Residential</span>
                                <span class="time-slot">6:00 AM - 12:00 PM</span>
                                <span class="status">Completed</span>
                            </div>
                            <div class="schedule-item recycling">
                                <span class="service-type">Recycling</span>
                                <span class="time-slot">2:00 PM - 6:00 PM</span>
                                <span class="status">Completed</span>
                            </div>
                        </div>
                    </div>

                    <div class="day-card">
                        <div class="day-header">
                            <h4 class="day-name">Tuesday</h4>
                            <span class="day-date">March 19</span>
                        </div>
                        <div class="day-schedule">
                            <div class="schedule-item commercial">
                                <span class="service-type">Commercial</span>
                                <span class="time-slot">5:00 AM - 10:00 AM</span>
                                <span class="status">Completed</span>
                            </div>
                            <div class="schedule-item green">
                                <span class="service-type">Green Waste</span>
                                <span class="time-slot">1:00 PM - 5:00 PM</span>
                                <span class="status">Completed</span>
                            </div>
                        </div>
                    </div>

                    <div class="day-card">
                        <div class="day-header">
                            <h4 class="day-name">Wednesday</h4>
                            <span class="day-date">March 20</span>
                        </div>
                        <div class="day-schedule">
                            <div class="schedule-item residential">
                                <span class="service-type">Residential</span>
                                <span class="time-slot">6:00 AM - 12:00 PM</span>
                                <span class="status">In Progress</span>
                            </div>
                            <div class="schedule-item medical">
                                <span class="service-type">Medical</span>
                                <span class="time-slot">3:00 PM - 7:00 PM</span>
                                <span class="status">Scheduled</span>
                            </div>
                        </div>
                    </div>

                    <div class="day-card">
                        <div class="day-header">
                            <h4 class="day-name">Thursday</h4>
                            <span class="day-date">March 21</span>
                        </div>
                        <div class="day-schedule">
                            <div class="schedule-item commercial">
                                <span class="service-type">Commercial</span>
                                <span class="time-slot">5:00 AM - 10:00 AM</span>
                                <span class="status">Scheduled</span>
                            </div>
                            <div class="schedule-item industrial">
                                <span class="service-type">Industrial</span>
                                <span class="time-slot">1:00 PM - 6:00 PM</span>
                                <span class="status">Scheduled</span>
                            </div>
                        </div>
                    </div>

                    <div class="day-card">
                        <div class="day-header">
                            <h4 class="day-name">Friday</h4>
                            <span class="day-date">March 22</span>
                        </div>
                        <div class="day-schedule">
                            <div class="schedule-item residential">
                                <span class="service-type">Residential</span>
                                <span class="time-slot">6:00 AM - 12:00 PM</span>
                                <span class="status">Scheduled</span>
                            </div>
                            <div class="schedule-item recycling">
                                <span class="service-type">Recycling</span>
                                <span class="time-slot">2:00 PM - 6:00 PM</span>
                                <span class="status">Scheduled</span>
                            </div>
                        </div>
                    </div>

                    <div class="day-card">
                        <div class="day-header">
                            <h4 class="day-name">Saturday</h4>
                            <span class="day-date">March 23</span>
                        </div>
                        <div class="day-schedule">
                            <div class="schedule-item construction">
                                <span class="service-type">Construction</span>
                                <span class="time-slot">8:00 AM - 4:00 PM</span>
                                <span class="status">Scheduled</span>
                            </div>
                            <div class="schedule-item special">
                                <span class="service-type">Special Collection</span>
                                <span class="time-slot">On-demand</span>
                                <span class="status">Available</span>
                            </div>
                        </div>
                    </div>

                    <div class="day-card">
                        <div class="day-header">
                            <h4 class="day-name">Sunday</h4>
                            <span class="day-date">March 24</span>
                        </div>
                        <div class="day-schedule">
                            <div class="schedule-item emergency">
                                <span class="service-type">Emergency Only</span>
                                <span class="time-slot">24/7</span>
                                <span class="status">Available</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="schedule-legend">
                <h4 class="legend-title">Service Types</h4>
                <div class="legend-items">
                    <div class="legend-item residential">
                        <span class="legend-color"></span>
                        <span class="legend-label">Residential</span>
                    </div>
                    <div class="legend-item commercial">
                        <span class="legend-color"></span>
                        <span class="legend-label">Commercial</span>
                    </div>
                    <div class="legend-item recycling">
                        <span class="legend-color"></span>
                        <span class="legend-label">Recycling</span>
                    </div>
                    <div class="legend-item green">
                        <span class="legend-color"></span>
                        <span class="legend-label">Green Waste</span>
                    </div>
                    <div class="legend-item medical">
                        <span class="legend-color"></span>
                        <span class="legend-label">Medical</span>
                    </div>
                    <div class="legend-item industrial">
                        <span class="legend-color"></span>
                        <span class="legend-label">Industrial</span>
                    </div>
                    <div class="legend-item construction">
                        <span class="legend-color"></span>
                        <span class="legend-label">Construction</span>
                    </div>
                    <div class="legend-item emergency">
                        <span class="legend-color"></span>
                        <span class="legend-label">Emergency</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Recycling Programs -->
<section class="recycling-programs-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Recycling & Waste Reduction Programs</h2>
            <p class="section-subtitle">Join our recycling initiatives and help create a sustainable Bamenda</p>
        </div>

        <div class="recycling-content">
            <div class="recycling-overview">
                <h3 class="overview-title">Our Recycling Initiatives</h3>
                <p class="overview-description">
                    Bamenda City Council is committed to reducing waste and promoting recycling through various programs 
                    and initiatives. Join us in creating a cleaner, more sustainable environment for future generations.
                </p>
            </div>

            <div class="programs-grid">
                <!-- Plastic Recycling -->
                <div class="program-card">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">recycling</span>
                    </div>
                    <h3 class="program-title">Plastic Recycling Program</h3>
                    <p class="program-description">Comprehensive plastic waste recycling program for households and businesses.</p>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">45 tons</span>
                            <span class="stat-label">Plastic recycled monthly</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">23</span>
                            <span class="stat-label">Collection points</span>
                        </div>
                    </div>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>PET bottle collection</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Plastic bag recycling</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Container recycling</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">Join Program</button>
                </div>

                <!-- Paper Recycling -->
                <div class="program-card">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">description</span>
                    </div>
                    <h3 class="program-title">Paper Recycling Initiative</h3>
                    <p class="program-description">Paper and cardboard recycling program for offices, schools, and households.</p>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">28 tons</span>
                            <span class="stat-label">Paper recycled monthly</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">15</span>
                            <span class="stat-label">Collection bins</span>
                        </div>
                    </div>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Office paper collection</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Newspaper recycling</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Cardboard collection</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">Join Program</button>
                </div>

                <!-- Glass Recycling -->
                <div class="program-card">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">local_bar</span>
                    </div>
                    <h3 class="program-title">Glass Recycling Project</h3>
                    <p class="program-description">Glass bottle and container recycling program for restaurants and households.</p>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">12 tons</span>
                            <span class="stat-label">Glass recycled monthly</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">8</span>
                            <span class="stat-label">Drop-off points</span>
                        </div>
                    </div>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Bottle collection</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Container recycling</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Jar recycling</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">Join Program</button>
                </div>

                <!-- Metal Recycling -->
                <div class="program-card">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">hardware</span>
                    </div>
                    <h3 class="program-title">Metal Recovery Program</h3>
                    <p class="program-description">Metal and aluminum recycling program for industrial and household waste.</p>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">18 tons</span>
                            <span class="stat-label">Metal recycled monthly</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">12</span>
                            <span class="stat-label">Collection sites</span>
                        </div>
                    </div>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Aluminum recycling</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Steel collection</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Copper recovery</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">Join Program</button>
                </div>

                <!-- Composting Program -->
                <div class="program-card">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">compost</span>
                    </div>
                    <h3 class="program-title">Organic Composting</h3>
                    <p class="program-description">Organic waste composting program for households and agricultural waste.</p>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">35 tons</span>
                            <span class="stat-label">Compost produced monthly</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">6</span>
                            <span class="stat-label">Composting sites</span>
                        </div>
                    </div>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Kitchen waste composting</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Garden waste recycling</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Agricultural composting</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">Join Program</button>
                </div>

                <!-- E-Waste Recycling -->
                <div class="program-card">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">devices</span>
                    </div>
                    <h3 class="program-title">E-Waste Recycling</h3>
                    <p class="program-description">Electronic waste recycling program for safe disposal of electronic devices.</p>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">8 tons</span>
                            <span class="stat-label">E-waste recycled monthly</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">4</span>
                            <span class="stat-label">Collection centers</span>
                        </div>
                    </div>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Computer recycling</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Phone disposal</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Battery recycling</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">Join Program</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Report Waste Issues -->
<section class="report-waste-section" id="report-waste">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Report Waste Management Issues</h2>
            <p class="section-subtitle">Report waste collection problems, illegal dumping, and environmental concerns</p>
        </div>

        <div class="reporting-content">
            <div class="reporting-options">
                <div class="option-card urgent" onclick="reportUrgentIssue()">
                    <div class="option-icon">
                        <span class="material-symbols-outlined">priority_high</span>
                    </div>
                    <h3 class="option-title">Urgent Issue</h3>
                    <p class="option-description">Report urgent waste management problems requiring immediate attention</p>
                    <div class="option-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">phone</span>
                            <span>Call: 119 (Emergency)</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">timer</span>
                            <span>Response: Within 2 hours</span>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-danger">Report Urgent Issue</button>
                </div>

                <div class="option-card standard" onclick="reportStandardIssue()">
                    <div class="option-icon">
                        <span class="material-symbols-outlined">report_problem</span>
                    </div>
                    <h3 class="option-title">Standard Issue</h3>
                    <p class="option-description">Report regular waste collection problems and service issues</p>
                    <div class="option-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">phone</span>
                            <span>Call: 120 (Waste Management)</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">timer</span>
                            <span>Response: Within 24 hours</span>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-primary">Report Standard Issue</button>
                </div>

                <div class="option-card suggestion" onclick="submitSuggestion()">
                    <div class="option-icon">
                        <span class="material-symbols-outlined">lightbulb</span>
                    </div>
                    <h3 class="option-title">Suggestion</h3>
                    <p class="option-description">Submit suggestions for improving waste management services</p>
                    <div class="option-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">email</span>
                            <span>Email: waste@bamenda.gov.cm</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">timer</span>
                            <span>Response: Within 48 hours</span>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-outline">Submit Suggestion</button>
                </div>
            </div>

            <!-- Online Reporting Form -->
            <div class="reporting-form">
                <div class="form-header">
                    <h3 class="form-title">Online Waste Issue Reporting</h3>
                    <p class="form-description">Fill out the form below to report waste management issues</p>
                </div>

                <form id="wasteReportForm">
                    <div class="form-section">
                        <h4 class="section-title">Issue Information</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Issue Type *</label>
                            <select class="form-select" required>
                                <option value="">Select issue type</option>
                                <option value="missed-collection">Missed Collection</option>
                                <option value="illegal-dumping">Illegal Dumping</option>
                                <option value="overflowing-bin">Overflowing Bin</option>
                                <option value="damaged-bin">Damaged Bin</option>
                                <option value="blocked-access">Blocked Access</option>
                                <option value="hazardous-waste">Hazardous Waste</option>
                                <option value="other">Other Issue</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Priority Level *</label>
                            <select class="form-select" required>
                                <option value="">Select priority level</option>
                                <option value="critical">Critical - Health hazard</option>
                                <option value="high">High - Major inconvenience</option>
                                <option value="medium">Medium - Minor issue</option>
                                <option value="low">Low - Informational</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Issue Description *</label>
                            <textarea class="form-textarea" rows="4" placeholder="Describe the waste management issue in detail" required></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Photos (if available)</label>
                            <input type="file" class="form-input" accept="image/*" multiple>
                            <small class="form-help">Upload photos to help us understand the issue better</small>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Location Information</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Location Address *</label>
                            <input type="text" class="form-input" placeholder="Enter the exact location of the issue" required>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Area *</label>
                                <select class="form-select" required>
                                    <option value="">Select area</option>
                                    <option value="city-center">City Center</option>
                                    <option value="nkwen">Nkwen</option>
                                    <option value="mankon">Mankon</option>
                                    <option value="bambili">Bambili</option>
                                    <option value="bambui">Bambui</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Landmark</label>
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
                            <label class="form-label">Preferred Contact Method *</label>
                            <select class="form-select" required>
                                <option value="">Select contact method</option>
                                <option value="phone">Phone Call</option>
                                <option value="sms">SMS Message</option>
                                <option value="email">Email</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Would you like updates on this issue?</label>
                            <select class="form-select">
                                <option value="yes">Yes, please keep me updated</option>
                                <option value="no">No, thank you</option>
                            </select>
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

<!-- Environmental Services -->
<section class="environmental-services-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Environmental Sanitation Services</h2>
            <p class="section-subtitle">Comprehensive environmental cleaning and sanitation services</p>
        </div>

        <div class="services-grid">
            <!-- Street Cleaning -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">cleaning_services</span>
                </div>
                <h3 class="service-title">Street Cleaning</h3>
                <p class="service-description">Regular street cleaning and sweeping services for public roads and walkways.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Daily Cleaning</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Mechanical Sweeping</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Manual Cleaning</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Waste Removal</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Daily: 5:00 AM - 8:00 AM</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">location_on</span>
                        <span>All major streets</span>
                    </div>
                </div>
                <button class="btn btn-primary">Request Service</button>
            </div>

            <!-- Drainage Cleaning -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">water</span>
                </div>
                <h3 class="service-title">Drainage Cleaning</h3>
                <p class="service-description">Drainage system cleaning and maintenance to prevent flooding and water blockage.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Drain Clearing</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Debris Removal</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Maintenance</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Flood Prevention</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Weekly: Before rainy season</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">location_on</span>
                        <span>All drainage systems</span>
                    </div>
                </div>
                <button class="btn btn-primary">Request Service</button>
            </div>

            <!-- Public Toilet Cleaning -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">wc</span>
                </div>
                <h3 class="service-title">Public Toilet Cleaning</h3>
                <p class="service-description">Regular cleaning and maintenance of public toilets and sanitation facilities.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Daily Cleaning</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Disinfection</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Supply Management</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Maintenance</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>3 times daily</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">location_on</span>
                        <span>All public facilities</span>
                    </div>
                </div>
                <button class="btn btn-primary">Request Service</button>
            </div>

            <!-- Market Cleaning -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">store</span>
                </div>
                <h3 class="service-title">Market Cleaning</h3>
                <p class="service-description">Specialized cleaning services for markets and commercial areas.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Daily Cleaning</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Waste Collection</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Sanitization</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Deep Cleaning</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Daily: After market hours</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">location_on</span>
                        <span>All markets</span>
                    </div>
                </div>
                <button class="btn btn-primary">Request Service</button>
            </div>

            <!-- Park Maintenance -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">park</span>
                </div>
                <h3 class="service-title">Park Maintenance</h3>
                <p class="service-description">Maintenance and cleaning of public parks and green spaces.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Lawn Maintenance</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Tree Care</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Litter Collection</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Facility Upkeep</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Weekly maintenance</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">location_on</span>
                        <span>All public parks</span>
                    </div>
                </div>
                <button class="btn btn-primary">Request Service</button>
            </div>

            <!-- Beach Cleaning -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">beach_access</span>
                </div>
                <h3 class="service-title">Water Body Cleaning</h3>
                <p class="service-description">Cleaning and maintenance of rivers, streams, and water bodies in Bamenda.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Water Body Cleaning</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Pollution Control</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Waste Removal</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Environmental Protection</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Monthly cleaning</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">location_on</span>
                        <span>All water bodies</span>
                    </div>
                </div>
                <button class="btn btn-primary">Request Service</button>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Common questions about waste management services</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What days are waste collection services available?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Waste collection schedules vary by area and service type. Residential waste is typically collected on Monday, Wednesday, and Friday. Commercial waste is collected daily. Check your specific area schedule on our collection calendar.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How do I report missed waste collection?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>You can report missed collection by calling our waste management hotline at 120, using our online reporting form, or visiting our service center. We typically resolve missed collection issues within 24 hours.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What items can be recycled?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>We accept paper, cardboard, plastic bottles, glass containers, aluminum cans, and metal for recycling. We also have special programs for e-waste, batteries, and hazardous materials. Check our recycling guide for detailed information.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How do I request special waste collection?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Special waste collection for large items, hazardous materials, or construction debris can be requested by calling our hotline or submitting an online request. Special collections are typically scheduled within 48-72 hours.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What should I do if I see illegal dumping?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Report illegal dumping immediately by calling our emergency hotline at 119 or using our online reporting system. Provide the location, description of dumped materials, and any photos if possible. We respond to illegal dumping within 2 hours.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How can I join recycling programs?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>You can join our recycling programs by signing up online, calling our recycling hotline, or visiting our recycling centers. We provide recycling bins, collection schedules, and educational materials to help you get started.</p>
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
/* Waste Management Page Styles */
.waste-management-hero {
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

/* Waste Statistics Section */
.waste-stats-section {
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

/* Waste Services Section */
.waste-services-section {
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
    background-color: var(--tertiary);
    color: var(--on-tertiary);
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

/* Collection Schedule Section */
.collection-schedule-section {
    padding: var(--spacing-3xl) 0;
}

.schedule-content {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xl);
}

.schedule-filters {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
}

.filter-row {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: var(--spacing-lg);
    align-items: end;
}

.schedule-calendar {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
}

.calendar-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: var(--spacing-lg);
    flex-wrap: wrap;
    gap: var(--spacing-md);
}

.calendar-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary);
}

.calendar-navigation {
    display: flex;
    align-items: center;
    gap: var(--spacing-md);
}

.date-range {
    font-size: 1rem;
    color: var(--on-surface-variant);
    font-weight: 500;
}

.calendar-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: var(--spacing-lg);
}

.day-card {
    background-color: var(--surface-container);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.day-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.day-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: var(--spacing-lg);
    padding-bottom: var(--spacing-sm);
    border-bottom: 1px solid var(--outline-variant);
}

.day-name {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
}

.day-date {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.day-schedule {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
}

.schedule-item {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xs);
    padding: var(--spacing-sm);
    border-radius: var(--radius-md);
    font-size: 0.75rem;
}

.schedule-item.residential {
    background-color: var(--primary-container);
    color: var(--on-primary-container);
}

.schedule-item.commercial {
    background-color: var(--secondary-container);
    color: var(--on-secondary-container);
}

.schedule-item.recycling {
    background-color: var(--tertiary-container);
    color: var(--on-tertiary-container);
}

.schedule-item.green {
    background-color: var(--surface-container-high);
    color: var(--on-surface);
}

.schedule-item.medical {
    background-color: var(--error-container);
    color: var(--on-error-container);
}

.schedule-item.industrial {
    background-color: var(--outline-variant);
    color: var(--on-surface);
}

.schedule-item.construction {
    background-color: var(--surface-variant);
    color: var(--on-surface-variant);
}

.schedule-item.emergency {
    background-color: var(--error);
    color: var(--on-error);
}

.schedule-item.special {
    background-color: var(--primary);
    color: var(--on-primary);
}

.service-type {
    font-weight: 600;
}

.time-slot {
    opacity: 0.8;
}

.status {
    font-weight: 600;
    text-align: right;
}

.schedule-legend {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    margin-top: var(--spacing-lg);
}

.legend-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
}

.legend-items {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: var(--spacing-sm);
}

.legend-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
}

.legend-color {
    width: 1rem;
    height: 1rem;
    border-radius: var(--radius-xs);
}

.legend-item.residential .legend-color {
    background-color: var(--primary-container);
}

.legend-item.commercial .legend-color {
    background-color: var(--secondary-container);
}

.legend-item.recycling .legend-color {
    background-color: var(--tertiary-container);
}

.legend-item.green .legend-color {
    background-color: var(--surface-container-high);
}

.legend-item.medical .legend-color {
    background-color: var(--error-container);
}

.legend-item.industrial .legend-color {
    background-color: var(--outline-variant);
}

.legend-item.construction .legend-color {
    background-color: var(--surface-variant);
}

.legend-item.emergency .legend-color {
    background-color: var(--error);
}

.legend-label {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

/* Recycling Programs Section */
.recycling-programs-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.recycling-content {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xl);
}

.recycling-overview {
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

.programs-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
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

.program-icon .material-symbols-outlined {
    font-size: 2rem;
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
    flex-wrap: wrap;
    gap: var(--spacing-sm);
    justify-content: center;
    margin-bottom: var(--spacing-lg);
}

/* Report Waste Section */
.report-waste-section {
    padding: var(--spacing-3xl) 0;
}

.reporting-content {
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

.option-card.standard {
    border-color: var(--primary);
    background: linear-gradient(135deg, var(--primary-container) 0%, var(--surface-container-lowest) 100%);
}

.option-card.suggestion {
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

.option-card.standard .option-icon {
    background-color: var(--primary);
    color: var(--on-primary);
}

.option-card.suggestion .option-icon {
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

/* Environmental Services Section */
.environmental-services-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
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

.form-help {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
    margin-top: var(--spacing-xs);
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
    
    .filter-row {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .calendar-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .programs-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .reporting-options {
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
    
    .calendar-header {
        flex-direction: column;
        gap: var(--spacing-md);
        align-items: flex-start;
    }
    
    .calendar-navigation {
        width: 100%;
        justify-content: space-between;
    }
    
    .program-card {
        padding: var(--spacing-lg);
    }
    
    .program-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .program-icon .material-symbols-outlined {
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
    
    .program-features {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .legend-items {
        grid-template-columns: 1fr;
        gap: var(--spacing-sm);
    }
}
</style>

<script>
// Quick action functions
function openWasteServices() {
    document.getElementById('waste-services').scrollIntoView({ behavior: 'smooth' });
}

function openRecyclingPrograms() {
    document.getElementById('recycling-programs').scrollIntoView({ behavior: 'smooth' });
}

function openCollectionSchedule() {
    document.getElementById('collection-schedule').scrollIntoView({ behavior: 'smooth' });
}

function openWasteReporting() {
    document.getElementById('report-waste').scrollIntoView({ behavior: 'smooth' });
}

function openEnvironmentalServices() {
    alert('Environmental services section would open here. In production, this would show detailed environmental sanitation services.');
}

function openWasteEducation() {
    alert('Waste education programs would open here. In production, this would show educational resources about waste management.');
}

// Service actions
document.querySelectorAll('.service-card .btn-primary').forEach(button => {
    if (button.textContent.includes('Request')) {
        button.addEventListener('click', function() {
            const serviceTitle = this.closest('.service-card').querySelector('.service-title').textContent;
            alert(`Requesting: "${serviceTitle}"`);
        });
    }
});

// Collection schedule functions
function updateSchedule() {
    const area = document.getElementById('areaSelect').value;
    const serviceType = document.getElementById('serviceType').value;
    
    if (!area) {
        alert('Please select an area to view the schedule.');
        return;
    }
    
    alert(`Updating schedule for: ${area || 'all areas'}, ${serviceType || 'all services'}`);
    // In production, this would update the schedule display
}

function previousWeek() {
    alert('Loading previous week schedule... In production, this would show the previous week\'s collection schedule.');
}

function nextWeek() {
    alert('Loading next week schedule... In production, this would show the next week\'s collection schedule.');
}

// Program actions
document.querySelectorAll('.program-card .btn-primary').forEach(button => {
    if (button.textContent.includes('Join')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
            alert(`Joining: "${programTitle}"`);
        });
    }
});

// Reporting functions
function reportUrgentIssue() {
    if (confirm('Call 119 for urgent waste management issues?')) {
        window.location.href = 'tel:119';
    }
}

function reportStandardIssue() {
    if (confirm('Call 120 for standard waste management issues?')) {
        window.location.href = 'tel:120';
    }
}

function submitSuggestion() {
    document.getElementById('wasteReportForm').scrollIntoView({ behavior: 'smooth' });
}

// Waste report form submission
document.getElementById('wasteReportForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate required fields
    const issueType = document.querySelector('select[required]').value;
    const priorityLevel = document.querySelectorAll('select[required]')[1].value;
    const issueDescription = document.querySelector('textarea[required]').value;
    const locationAddress = document.querySelector('input[placeholder*="location"]').value;
    const area = document.querySelectorAll('select[required]')[2].value;
    const name = document.querySelector('input[placeholder*="name"]').value;
    const phone = document.querySelector('input[placeholder*="phone"]').value;
    
    if (!issueType || !priorityLevel || !issueDescription || !locationAddress || !area || !name || !phone) {
        alert('Please fill in all required fields.');
        return;
    }
    
    alert('Waste management issue reported successfully! We will address this issue within the specified timeframe and contact you with updates.');
    // In production, this would submit the report
});

// Environmental service actions
document.querySelectorAll('.environmental-services-section .btn-primary').forEach(button => {
    if (button.textContent.includes('Request')) {
        button.addEventListener('click', function() {
            const serviceTitle = this.closest('.service-card').querySelector('.service-title').textContent;
            alert(`Requesting: "${serviceTitle}"`);
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

// Auto-refresh waste data
function refreshWasteData() {
    // In production, this would fetch real-time waste management data
    console.log('Refreshing waste management data...');
}

// Refresh data every 60 seconds
setInterval(refreshWasteData, 60000);

// Location services for waste reporting
function getLocationForReport() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            const lat = position.coords.latitude;
            const lon = position.coords.longitude;
            
            // In production, this would populate the location field with GPS coordinates
            console.log('Report location:', lat, lon);
        });
    }
}

// Initialize location services
getLocationForReport();
</script>
