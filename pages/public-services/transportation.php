<?php
/**
 * Bamenda City Council E-Governance Platform
 * Public Transportation Services Page
 */

// Set page metadata
$page_title = 'Public Transportation | Bamenda City Council';
$page_description = 'Access public transportation services, bus routes, transport permits, and mobility solutions for Bamenda residents.';
$page_keywords = 'public transportation, bus services, transport permits, mobility solutions, Bamenda transport';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Public Services', 'url' => '../index.php'],
    ['title' => 'Transportation', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero transportation-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-public-services.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Public Transportation</span>
            <h1 class="hero-title">Public Transportation Services</h1>
            <p class="hero-subtitle">
                Comprehensive public transportation system including bus services, route planning, transport permits, and sustainable mobility solutions for efficient travel within Bamenda.
            </p>
            <div class="hero-actions">
                <a href="#bus-routes" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">directions_bus</span>
                    Bus Routes
                </a>
                <a href="#transport-permits" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">description</span>
                    Transport Permits
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Transportation Actions</h2>
            <p class="section-subtitle">Quick access to public transportation services and information</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openBusRoutes()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">route</span>
                </div>
                <h3 class="action-title">Bus Routes</h3>
                <p class="action-description">View bus routes and schedules</p>
            </div>

            <div class="action-card" onclick="openFares()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">payments</span>
                </div>
                <h3 class="action-title">Fares & Tickets</h3>
                <p class="action-description">Check fares and buy tickets</p>
            </div>

            <div class="action-card" onclick="openTransportPermits()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <h3 class="action-title">Transport Permits</h3>
                <p class="action-description">Apply for transport permits</p>
            </div>

            <div class="action-card" onclick="openRealTimeTracking()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">gps_fixed</span>
                </div>
                <h3 class="action-title">Live Tracking</h3>
                <p class="action-description">Track buses in real-time</p>
            </div>

            <div class="action-card" onclick="openAccessibility()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">accessible</span>
                </div>
                <h3 class="action-title">Accessibility</h3>
                <p class="action-description">Accessible transport options</p>
            </div>

            <div class="action-card" onclick="openFeedback()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">feedback</span>
                </div>
                <h3 class="action-title">Feedback</h3>
                <p class="action-description">Report issues and suggestions</p>
            </div>
        </div>
    </div>
</section>

<!-- Transportation Statistics -->
<section class="transport-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">directions_bus</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">45</div>
                    <div class="stat-label">Active Bus Routes</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+5 new routes</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">45,000</div>
                    <div class="stat-label">Daily Passengers</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+12% ridership</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">schedule</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">15 min</div>
                    <div class="stat-label">Average Wait Time</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_down</span>
                        <span>-3 minutes faster</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">verified</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">92%</div>
                    <div class="stat-label">Service Reliability</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+5% improvement</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bus Routes -->
<section class="bus-routes-section" id="bus-routes">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Bus Routes & Schedules</h2>
            <p class="section-subtitle">Comprehensive bus network covering all areas of Bamenda</p>
        </div>

        <div class="routes-grid">
            <!-- Route 1 -->
            <div class="route-card">
                <div class="route-header">
                    <div class="route-number">Route 1</div>
                    <div class="route-status active">Active</div>
                </div>
                <div class="route-content">
                    <h3 class="route-title">City Center - Nkwen</h3>
                    <p class="route-description">Main route connecting City Center to Nkwen area with multiple stops along the way.</p>
                    <div class="route-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Frequency: Every 15 minutes</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">access_time</span>
                            <span>Duration: 25 minutes</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Fare: ₣200</span>
                        </div>
                    </div>
                    <div class="route-stops">
                        <h4 class="stops-title">Major Stops:</h4>
                        <div class="stops-list">
                            <div class="stop-item">City Center Market</div>
                            <div class="stop-item">Hospital Junction</div>
                            <div class="stop-item">Commercial Avenue</div>
                            <div class="stop-item">Nkwen Roundabout</div>
                            <div class="stop-item">Nkwen Market</div>
                        </div>
                    </div>
                    <div class="route-timing">
                        <h4 class="timing-title">Operating Hours:</h4>
                        <div class="timing-schedule">
                            <div class="schedule-item">
                                <span class="day">Weekdays:</span>
                                <span class="time">5:30 AM - 9:00 PM</span>
                            </div>
                            <div class="schedule-item">
                                <span class="day">Weekends:</span>
                                <span class="time">6:00 AM - 10:00 PM</span>
                            </div>
                        </div>
                    </div>
                    <div class="route-actions">
                        <button class="btn btn-sm btn-primary">View Schedule</button>
                        <button class="btn btn-sm btn-outline">Live Tracking</button>
                    </div>
                </div>
            </div>

            <!-- Route 2 -->
            <div class="route-card">
                <div class="route-header">
                    <div class="route-number">Route 2</div>
                    <div class="route-status active">Active</div>
                </div>
                <div class="route-content">
                    <h3 class="route-title">City Center - Mankon</h3>
                    <p class="route-description">Express route connecting City Center to Mankon with limited stops for faster travel.</p>
                    <div class="route-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Frequency: Every 20 minutes</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">access_time</span>
                            <span>Duration: 30 minutes</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Fare: ₣250</span>
                        </div>
                    </div>
                    <div class="route-stops">
                        <h4 class="stops-title">Major Stops:</h4>
                        <div class="stops-list">
                            <div class="stop-item">City Center Bus Station</div>
                            <div class="stop-item">Government Offices</div>
                            <div class="stop-item">University Gate</div>
                            <div class="stop-item">Mankon Junction</div>
                            <div class="stop-item">Mankon Palace</div>
                        </div>
                    </div>
                    <div class="route-timing">
                        <h4 class="timing-title">Operating Hours:</h4>
                        <div class="timing-schedule">
                            <div class="schedule-item">
                                <span class="day">Weekdays:</span>
                                <span class="time">6:00 AM - 8:30 PM</span>
                            </div>
                            <div class="schedule-item">
                                <span class="day">Weekends:</span>
                                <span class="time">6:30 AM - 9:30 PM</span>
                            </div>
                        </div>
                    </div>
                    <div class="route-actions">
                        <button class="btn btn-sm btn-primary">View Schedule</button>
                        <button class="btn btn-sm btn-outline">Live Tracking</button>
                    </div>
                </div>
            </div>

            <!-- Route 3 -->
            <div class="route-card">
                <div class="route-header">
                    <div class="route-number">Route 3</div>
                    <div class="route-status active">Active</div>
                </div>
                <div class="route-content">
                    <h3 class="route-title">Bambili - Bambui Circular</h3>
                    <p class="route-description">Circular route connecting Bambili and Bambui areas with educational institutions.</p>
                    <div class="route-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Frequency: Every 25 minutes</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">access_time</span>
                            <span>Duration: 35 minutes</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Fare: ₣300</span>
                        </div>
                    </div>
                    <div class="route-stops">
                        <h4 class="stops-title">Major Stops:</h4>
                        <div class="stops-list">
                            <div class="stop-item">Bambili Market</div>
                            <div class="stop-item">Bambili University</div>
                            <div class="stop-item">Technical School</div>
                            <div class="stop-item">Bambui Town</div>
                            <div class="stop-item">Bambui Market</div>
                        </div>
                    </div>
                    <div class="route-timing">
                        <h4 class="timing-title">Operating Hours:</h4>
                        <div class="timing-schedule">
                            <div class="schedule-item">
                                <span class="day">Weekdays:</span>
                                <span class="time">5:00 AM - 8:00 PM</span>
                            </div>
                            <div class="schedule-item">
                                <span class="day">Weekends:</span>
                                <span class="time">6:00 AM - 9:00 PM</span>
                            </div>
                        </div>
                    </div>
                    <div class="route-actions">
                        <button class="btn btn-sm btn-primary">View Schedule</button>
                        <button class="btn btn-sm btn-outline">Live Tracking</button>
                    </div>
                </div>
            </div>

            <!-- Route 4 -->
            <div class="route-card">
                <div class="route-header">
                    <div class="route-number">Route 4</div>
                    <div class="route-status active">Active</div>
                </div>
                <div class="route-content">
                    <h3 class="route-title">Mile Four - Mile Three Express</h3>
                    <p class="route-description">Express service connecting Mile Four and Mile Three residential areas to City Center.</p>
                    <div class="route-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Frequency: Every 30 minutes</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">access_time</span>
                            <span>Duration: 20 minutes</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Fare: ₣150</span>
                        </div>
                    </div>
                    <div class="route-stops">
                        <h4 class="stops-title">Major Stops:</h4>
                        <div class="stops-list">
                            <div class="stop-item">Mile Four Junction</div>
                            <div class="stop-item">Mile Four Market</div>
                            <div class="stop-item">Sports Complex</div>
                            <div class="stop-item">Mile Three Center</div>
                            <div class="stop-item">City Center</div>
                        </div>
                    </div>
                    <div class="route-timing">
                        <h4 class="timing-title">Operating Hours:</h4>
                        <div class="timing-schedule">
                            <div class="schedule-item">
                                <span class="day">Weekdays:</span>
                                <span class="time">5:30 AM - 9:30 PM</span>
                            </div>
                            <div class="schedule-item">
                                <span class="day">Weekends:</span>
                                <span class="time">6:00 AM - 10:00 PM</span>
                            </div>
                        </div>
                    </div>
                    <div class="route-actions">
                        <button class="btn btn-sm btn-primary">View Schedule</button>
                        <button class="btn btn-sm btn-outline">Live Tracking</button>
                    </div>
                </div>
            </div>

            <!-- Route 5 -->
            <div class="route-card">
                <div class="route-header">
                    <div class="route-number">Route 5</div>
                    <div class="route-status active">Active</div>
                </div>
                <div class="route-content">
                    <h3 class="route-title">Airport Shuttle</h3>
                    <p class="route-description">Special shuttle service connecting City Center to Bamenda Airport.</p>
                    <div class="route-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Frequency: Every 45 minutes</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">access_time</span>
                            <span>Duration: 40 minutes</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Fare: ₣500</span>
                        </div>
                    </div>
                    <div class="route-stops">
                        <h4 class="stops-title">Major Stops:</h4>
                        <div class="stops-list">
                            <div class="stop-item">City Center Bus Station</div>
                            <div class="stop-item">Hotel District</div>
                            <div class="stop-item">Industrial Area</div>
                            <div class="stop-item">Airport Road</div>
                            <div class="stop-item">Bamenda Airport</div>
                        </div>
                    </div>
                    <div class="route-timing">
                        <h4 class="timing-title">Operating Hours:</h4>
                        <div class="timing-schedule">
                            <div class="schedule-item">
                                <span class="day">Daily:</span>
                                <span class="time">4:00 AM - 11:00 PM</span>
                            </div>
                        </div>
                    </div>
                    <div class="route-actions">
                        <button class="btn btn-sm btn-primary">View Schedule</button>
                        <button class="btn btn-sm btn-outline">Live Tracking</button>
                    </div>
                </div>
            </div>

            <!-- Route 6 -->
            <div class="route-card">
                <div class="route-header">
                    <div class="route-number">Route 6</div>
                    <div class="route-status active">Active</div>
                </div>
                <div class="route-content">
                    <h3 class="route-title">Night Service</h3>
                    <p class="route-description">Late-night service covering major routes for night-time travelers.</p>
                    <div class="route-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Frequency: Every 60 minutes</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">access_time</span>
                            <span>Duration: Varies by route</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Fare: ₣350</span>
                        </div>
                    </div>
                    <div class="route-stops">
                        <h4 class="stops-title">Major Stops:</h4>
                        <div class="stops-list">
                            <div class="stop-item">City Center</div>
                            <div class="stop-item">Hospital</div>
                            <div class="stop-item">Entertainment District</div>
                            <div class="stop-item">Major Hotels</div>
                            <div class="stop-item">Residential Areas</div>
                        </div>
                    </div>
                    <div class="route-timing">
                        <h4 class="timing-title">Operating Hours:</h4>
                        <div class="timing-schedule">
                            <div class="schedule-item">
                                <span class="day">Daily:</span>
                                <span class="time">10:00 PM - 4:00 AM</span>
                            </div>
                        </div>
                    </div>
                    <div class="route-actions">
                        <button class="btn btn-sm btn-primary">View Schedule</button>
                        <button class="btn btn-sm btn-outline">Live Tracking</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Fares and Tickets -->
<section class="fares-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Fares & Ticketing</h2>
            <p class="section-subtitle">Affordable fares and convenient ticketing options</p>
        </div>

        <div class="fares-content">
            <div class="fare-overview">
                <h3 class="overview-title">Ticket Options</h3>
                <p class="overview-description">
                    Choose from various ticket options including single tickets, day passes, and monthly passes for convenient and affordable travel.
                </p>
            </div>

            <div class="fare-cards">
                <!-- Single Ticket -->
                <div class="fare-card">
                    <div class="fare-icon">
                        <span class="material-symbols-outlined">confirmation_number</span>
                    </div>
                    <h3 class="fare-title">Single Ticket</h3>
                    <div class="fare-price">
                        <span class="price">₣150 - ₣500</span>
                        <span class="description">Per trip</span>
                    </div>
                    <div class="fare-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Valid for one trip</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Route-specific pricing</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Valid for 2 hours</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">Buy Ticket</button>
                </div>

                <!-- Day Pass -->
                <div class="fare-card">
                    <div class="fare-icon">
                        <span class="material-symbols-outlined">today</span>
                    </div>
                    <h3 class="fare-title">Day Pass</h3>
                    <div class="fare-price">
                        <span class="price">₣1,000</span>
                        <span class="description">Unlimited daily travel</span>
                    </div>
                    <div class="fare-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Unlimited rides</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>All routes included</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Valid until midnight</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">Buy Pass</button>
                </div>

                <!-- Weekly Pass -->
                <div class="fare-card">
                    <div class="fare-icon">
                        <span class="material-symbols-outlined">date_range</span>
                    </div>
                    <h3 class="fare-title">Weekly Pass</h3>
                    <div class="fare-price">
                        <span class="price">₣5,000</span>
                        <span class="description">7 days unlimited travel</span>
                    </div>
                    <div class="fare-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Unlimited rides</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>All routes included</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>7 consecutive days</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">Buy Pass</button>
                </div>

                <!-- Monthly Pass -->
                <div class="fare-card">
                    <div class="fare-icon">
                        <span class="material-symbols-outlined">calendar_month</span>
                    </div>
                    <h3 class="fare-title">Monthly Pass</h3>
                    <div class="fare-price">
                        <span class="price">₣15,000</span>
                        <span class="description">30 days unlimited travel</span>
                    </div>
                    <div class="fare-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Unlimited rides</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>All routes included</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Best value option</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">Buy Pass</button>
                </div>

                <!-- Student Pass -->
                <div class="fare-card">
                    <div class="fare-icon">
                        <span class="material-symbols-outlined">school</span>
                    </div>
                    <h3 class="fare-title">Student Pass</h3>
                    <div class="fare-price">
                        <span class="price">₣8,000</span>
                        <span class="description">30 days student discount</span>
                    </div>
                    <div class="fare-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>50% discount</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Student ID required</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>All routes included</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">Buy Pass</button>
                </div>

                <!-- Senior Pass -->
                <div class="fare-card">
                    <div class="fare-icon">
                        <span class="material-symbols-outlined">elderly</span>
                    </div>
                    <h3 class="fare-title">Senior Pass</h3>
                    <div class="fare-price">
                        <span class="price">₣7,500</span>
                        <span class="description">30 days senior discount</span>
                    </div>
                    <div class="fare-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>60% discount</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>ID required (60+)</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>All routes included</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">Buy Pass</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Transport Permits -->
<section class="transport-permits-section" id="transport-permits">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Transport Permits & Licensing</h2>
            <p class="section-subtitle">Apply for transport permits and vehicle licensing services</p>
        </div>

        <div class="permits-content">
            <div class="permits-overview">
                <h3 class="overview-title">Transport Services</h3>
                <p class="overview-description">
                    Comprehensive transport permit services for commercial vehicles, private transport operators, and logistics companies operating in Bamenda.
                </p>
            </div>

            <div class="permits-grid">
                <!-- Commercial Vehicle Permit -->
                <div class="permit-card">
                    <div class="permit-icon">
                        <span class="material-symbols-outlined">local_shipping</span>
                    </div>
                    <h3 class="permit-title">Commercial Vehicle Permit</h3>
                    <p class="permit-description">Permit for commercial vehicles including buses, trucks, and delivery vehicles operating within Bamenda.</p>
                    <div class="permit-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Fee: ₣25,000 - ₣100,000</span>
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
                    <div class="permit-requirements">
                        <h4 class="requirements-title">Requirements:</h4>
                        <ul class="requirements-list">
                            <li>Vehicle registration documents</li>
                            <li>Insurance certificate</li>
                            <li>Driver's license</li>
                            <li>Vehicle inspection report</li>
                        </ul>
                    </div>
                    <button class="btn btn-primary">Apply Now</button>
                </div>

                <!-- Bus Operator Permit -->
                <div class="permit-card">
                    <div class="permit-icon">
                        <span class="material-symbols-outlined">directions_bus</span>
                    </div>
                    <h3 class="permit-title">Bus Operator Permit</h3>
                    <p class="permit-description">Permit for bus operators and public transport companies providing passenger services.</p>
                    <div class="permit-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Fee: ₣50,000 - ₣200,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Processing: 7-10 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">update</span>
                            <span>Renewal: Annual</span>
                        </div>
                    </div>
                    <div class="permit-requirements">
                        <h4 class="requirements-title">Requirements:</h4>
                        <ul class="requirements-list">
                            <li>Company registration</li>
                            <li>Fleet documentation</li>
                            <li>Driver certifications</li>
                            <li>Safety compliance certificate</li>
                        </ul>
                    </div>
                    <button class="btn btn-primary">Apply Now</button>
                </div>

                <!-- Taxi Permit -->
                <div class="permit-card">
                    <div class="permit-icon">
                        <span class="material-symbols-outlined">local_taxi</span>
                    </div>
                    <h3 class="permit-title">Taxi Operating Permit</h3>
                    <p class="permit-description">Permit for taxi operators providing taxi services within Bamenda municipality.</p>
                    <div class="permit-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Fee: ₣15,000 - ₣30,000</span>
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
                    <div class="permit-requirements">
                        <h4 class="requirements-title">Requirements:</h4>
                        <ul class="requirements-list">
                            <li>Taxi license</li>
                            <li>Vehicle inspection</li>
                            <li>Insurance coverage</li>
                            <li>Driver's credentials</li>
                        </ul>
                    </div>
                    <button class="btn btn-primary">Apply Now</button>
                </div>

                <!-- Logistics Permit -->
                <div class="permit-card">
                    <div class="permit-icon">
                        <span class="material-symbols-outlined">inventory</span>
                    </div>
                    <h3 class="permit-title">Logistics & Delivery Permit</h3>
                    <p class="permit-description">Permit for logistics companies and delivery services operating within Bamenda.</p>
                    <div class="permit-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Fee: ₣30,000 - ₣150,000</span>
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
                    <div class="permit-requirements">
                        <h4 class="requirements-title">Requirements:</h4>
                        <ul class="requirements-list">
                            <li>Business registration</li>
                            <li>Fleet documentation</li>
                            <li>Warehouse compliance</li>
                            <li>Delivery permits</li>
                        </ul>
                    </div>
                    <button class="btn btn-primary">Apply Now</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Real-time Tracking -->
<section class="tracking-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Real-time Bus Tracking</h2>
            <p class="section-subtitle">Track buses in real-time and get accurate arrival information</p>
        </div>

        <div class="tracking-content">
            <div class="tracking-demo">
                <div class="demo-map">
                    <div class="map-placeholder">
                        <div class="map-icon">
                            <span class="material-symbols-outlined">map</span>
                        </div>
                        <h3 class="map-title">Live Bus Tracking Map</h3>
                        <p class="map-description">Interactive map showing real-time bus positions and routes</p>
                        <div class="demo-buses">
                            <div class="bus-marker active">
                                <span class="bus-number">1</span>
                                <span class="bus-status">On Time</span>
                            </div>
                            <div class="bus-marker delayed">
                                <span class="bus-number">2</span>
                                <span class="bus-status">5 min delay</span>
                            </div>
                            <div class="bus-marker approaching">
                                <span class="bus-number">3</span>
                                <span class="bus-status">2 min away</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tracking-features">
                    <h3 class="features-title">Tracking Features</h3>
                    <div class="features-list">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <span class="material-symbols-outlined">gps_fixed</span>
                            </div>
                            <div class="feature-content">
                                <h4 class="feature-title">Live GPS Tracking</h4>
                                <p class="feature-description">Real-time bus positions updated every 30 seconds</p>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="feature-icon">
                                <span class="material-symbols-outlined">schedule</span>
                            </div>
                            <div class="feature-content">
                                <h4 class="feature-title">Accurate ETAs</h4>
                                <p class="feature-description">Predicted arrival times based on current traffic conditions</p>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="feature-icon">
                                <span class="material-symbols-outlined">notifications</span>
                            </div>
                            <div class="feature-content">
                                <h4 class="feature-title">Service Alerts</h4>
                                <p class="feature-description">Instant notifications for delays and service changes</p>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="feature-icon">
                                <span class="material-symbols-outlined">phone_android</span>
                            </div>
                            <div class="feature-content">
                                <h4 class="feature-title">Mobile App</h4>
                                <p class="feature-description">Track buses on your smartphone with our mobile app</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tracking-actions">
                <button class="btn btn-lg btn-primary">Open Live Tracking</button>
                <button class="btn btn-lg btn-outline">Download Mobile App</button>
            </div>
        </div>
    </div>
</section>

<!-- Accessibility Services -->
<section class="accessibility-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Accessibility Services</h2>
            <p class="section-subtitle">Accessible transportation options for passengers with special needs</p>
        </div>

        <div class="accessibility-content">
            <div class="accessibility-overview">
                <h3 class="overview-title">Inclusive Transportation</h3>
                <p class="overview-description">
                    We are committed to providing accessible transportation services for all passengers, including those with disabilities, elderly passengers, and families with young children.
                </p>
            </div>

            <div class="accessibility-services">
                <div class="service-card">
                    <div class="service-icon">
                        <span class="material-symbols-outlined">accessible</span>
                    </div>
                    <h3 class="service-title">Wheelchair Accessible Buses</h3>
                    <p class="service-description">All major routes include wheelchair accessible buses with ramps and dedicated spaces.</p>
                    <div class="service-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Wheelchair ramps</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Priority seating</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Audio announcements</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">View Accessible Routes</button>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <span class="material-symbols-outlined">elderly</span>
                    </div>
                    <h3 class="service-title">Senior Citizen Services</h3>
                    <p class="service-description">Special services and discounts for elderly passengers aged 60 and above.</p>
                    <div class="service-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Discounted fares</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Priority seating</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Assistance services</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">Learn More</button>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <span class="material-symbols-outlined">family_restroom</span>
                    </div>
                    <h3 class="service-title">Family Services</h3>
                    <p class="service-description">Family-friendly services including stroller accessibility and child safety features.</p>
                    <div class="service-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Stroller accessible</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Family seating areas</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Child fare discounts</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">View Family Options</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Transport Feedback -->
<section class="feedback-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Transport Feedback & Support</h2>
            <p class="section-subtitle">Report issues, provide feedback, and get support for transportation services</p>
        </div>

        <div class="feedback-content">
            <div class="feedback-options">
                <div class="option-card" onclick="reportIssue()">
                    <div class="option-icon">
                        <span class="material-symbols-outlined">report_problem</span>
                    </div>
                    <h3 class="option-title">Report Service Issue</h3>
                    <p class="option-description">Report problems with bus services, routes, or facilities</p>
                    <button class="btn btn-primary">Report Issue</button>
                </div>

                <div class="option-card" onclick="submitFeedback()">
                    <div class="option-icon">
                        <span class="material-symbols-outlined">feedback</span>
                    </div>
                    <h3 class="option-title">Submit Feedback</h3>
                    <p class="option-description">Share your experience and suggestions for improvement</p>
                    <button class="btn btn-primary">Submit Feedback</button>
                </div>

                <div class="option-card" onclick="contactSupport()">
                    <div class="option-icon">
                        <span class="material-symbols-outlined">support_agent</span>
                    </div>
                    <h3 class="option-title">Customer Support</h3>
                    <p class="option-description">Get help with tickets, passes, and transport services</p>
                    <button class="btn btn-primary">Contact Support</button>
                </div>
            </div>

            <!-- Feedback Form -->
            <div class="feedback-form">
                <h3 class="form-title">Quick Feedback Form</h3>
                <form id="feedbackForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Feedback Type *</label>
                            <select class="form-select" required>
                                <option value="">Select type</option>
                                <option value="compliment">Compliment</option>
                                <option value="complaint">Complaint</option>
                                <option value="suggestion">Suggestion</option>
                                <option value="issue">Service Issue</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Route (if applicable)</label>
                            <select class="form-select">
                                <option value="">Select route</option>
                                <option value="route-1">Route 1 - City Center/Nkwen</option>
                                <option value="route-2">Route 2 - City Center/Mankon</option>
                                <option value="route-3">Route 3 - Bambili/Bambui</option>
                                <option value="route-4">Route 4 - Mile Four/Mile Three</option>
                                <option value="route-5">Route 5 - Airport Shuttle</option>
                                <option value="route-6">Route 6 - Night Service</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Your Feedback *</label>
                        <textarea class="form-textarea" rows="4" placeholder="Please describe your feedback in detail" required></textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-input" placeholder="Your name (optional)">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Contact</label>
                            <input type="text" class="form-input" placeholder="Phone or email (optional)">
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="reset" class="btn btn-outline">Reset</button>
                        <button type="submit" class="btn btn-primary">Submit Feedback</button>
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
            <p class="section-subtitle">Common questions about public transportation services</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How do I buy bus tickets?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>You can buy tickets from bus drivers, at ticket counters at major bus stations, through our mobile app, or online. Single tickets can be purchased on board, while passes are available at designated sales points and online.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What are the operating hours for buses?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Most routes operate from 5:30 AM to 9:00 PM on weekdays and 6:00 AM to 10:00 PM on weekends. We also have a night service operating from 10:00 PM to 4:00 AM on selected routes. The airport shuttle runs daily from 4:00 AM to 11:00 PM.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Are buses wheelchair accessible?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, all major routes include wheelchair accessible buses equipped with ramps, priority seating, and audio announcements. Look for the wheelchair symbol on bus schedules and at bus stops.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How can I track buses in real-time?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>You can track buses in real-time using our mobile app, website, or SMS service. Simply enter your route number or current location to see live bus positions and estimated arrival times.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What discounts are available?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>We offer various discounts including 50% off for students with valid ID, 60% off for senior citizens (60+), and family discounts for children under 12. Monthly and weekly passes also provide significant savings for regular commuters.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How do I report lost items?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Report lost items by calling our customer service hotline, visiting the lost and found office at the main bus station, or using the lost item form on our website. Please provide details about the item, route, and time of travel.</p>
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
/* Transportation Page Styles */
.transportation-hero {
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

/* Transport Statistics Section */
.transport-stats-section {
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

/* Bus Routes Section */
.bus-routes-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.routes-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.route-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.route-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.route-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.route-number {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    padding: var(--spacing-xs) var(--spacing-sm);
    background-color: var(--primary-container);
    border-radius: var(--radius-md);
}

.route-status {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.route-status.active {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.route-content {
    padding: var(--spacing-lg);
}

.route-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.route-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.route-details {
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

.route-stops {
    margin-bottom: var(--spacing-lg);
}

.stops-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.stops-list {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-sm);
}

.stop-item {
    padding: var(--spacing-xs) var(--spacing-sm);
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.route-timing {
    margin-bottom: var(--spacing-lg);
}

.timing-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.timing-schedule {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xs);
}

.schedule-item {
    display: flex;
    justify-content: space-between;
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.day {
    font-weight: 600;
}

.time {
    color: var(--primary);
}

.route-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Fares Section */
.fares-section {
    padding: var(--spacing-3xl) 0;
}

.fares-content {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xl);
}

.fare-overview {
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

.fare-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: var(--spacing-xl);
}

.fare-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.fare-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.fare-icon {
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

.fare-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.fare-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.fare-price {
    margin-bottom: var(--spacing-lg);
}

.price {
    font-size: 1.5rem;
    font-weight: 800;
    color: var(--primary);
    display: block;
    margin-bottom: var(--spacing-xs);
}

.description {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.fare-features {
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

/* Transport Permits Section */
.transport-permits-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.permits-content {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xl);
}

.permits-overview {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.permits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.permit-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.permit-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.permit-icon {
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

.permit-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.permit-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
    text-align: center;
}

.permit-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
    text-align: center;
}

.permit-details {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
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

/* Tracking Section */
.tracking-section {
    padding: var(--spacing-3xl) 0;
}

.tracking-content {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xl);
}

.tracking-demo {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: var(--spacing-xl);
}

.demo-map {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    min-height: 400px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.map-placeholder {
    text-align: center;
}

.map-icon {
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

.map-icon .material-symbols-outlined {
    font-size: 2rem;
}

.map-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.map-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.demo-buses {
    display: flex;
    justify-content: center;
    gap: var(--spacing-lg);
}

.bus-marker {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: var(--spacing-xs);
    padding: var(--spacing-sm);
    border-radius: var(--radius-md);
    background-color: var(--surface-container);
}

.bus-marker.active {
    background-color: var(--tertiary-container);
}

.bus-marker.delayed {
    background-color: var(--error-container);
}

.bus-marker.approaching {
    background-color: var(--primary-container);
}

.bus-number {
    font-weight: 700;
    color: var(--primary);
    font-size: 1.125rem;
}

.bus-status {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.tracking-features {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
}

.features-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
}

.features-list {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-lg);
}

.feature-item {
    display: flex;
    gap: var(--spacing-lg);
    align-items: flex-start;
}

.feature-icon {
    width: 2.5rem;
    height: 2.5rem;
    background-color: var(--tertiary);
    color: var(--on-tertiary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.feature-icon .material-symbols-outlined {
    font-size: 1.25rem;
}

.feature-content {
    flex: 1;
}

.feature-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: var(--spacing-xs);
}

.feature-description {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    line-height: 1.5;
}

.tracking-actions {
    display: flex;
    justify-content: center;
    gap: var(--spacing-lg);
}

/* Accessibility Section */
.accessibility-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.accessibility-content {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xl);
}

.accessibility-overview {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.accessibility-services {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.service-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.service-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.service-icon {
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

.service-features {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

/* Feedback Section */
.feedback-section {
    padding: var(--spacing-3xl) 0;
}

.feedback-content {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xl);
}

.feedback-options {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.option-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.option-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.option-icon {
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

.option-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.option-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.option-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.feedback-form {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    max-width: 600px;
    margin: 0 auto;
}

.form-title {
    font-size: 1.25rem;
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
    
    .routes-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .fare-cards {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .permits-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .tracking-demo {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .accessibility-services {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .feedback-options {
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
    
    .route-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .fare-card {
        padding: var(--spacing-lg);
    }
    
    .demo-buses {
        flex-direction: column;
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
    
    .route-actions {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .route-actions .btn {
        width: 100%;
    }
    
    .tracking-actions {
        flex-direction: column;
        gap: var(--spacing-md);
    }
    
    .tracking-actions .btn {
        width: 100%;
    }
}
</style>

<script>
// Quick action functions
function openBusRoutes() {
    document.getElementById('bus-routes').scrollIntoView({ behavior: 'smooth' });
}

function openFares() {
    document.querySelector('.fares-section').scrollIntoView({ behavior: 'smooth' });
}

function openTransportPermits() {
    document.getElementById('transport-permits').scrollIntoView({ behavior: 'smooth' });
}

function openRealTimeTracking() {
    document.querySelector('.tracking-section').scrollIntoView({ behavior: 'smooth' });
}

function openAccessibility() {
    document.querySelector('.accessibility-section').scrollIntoView({ behavior: 'smooth' });
}

function openFeedback() {
    document.querySelector('.feedback-section').scrollIntoView({ behavior: 'smooth' });
}

// Route actions
document.querySelectorAll('.route-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Schedule')) {
        button.addEventListener('click', function() {
            const routeTitle = this.closest('.route-card').querySelector('.route-title').textContent;
            alert(`Viewing schedule for: "${routeTitle}"`);
        });
    }
});

document.querySelectorAll('.route-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Tracking')) {
        button.addEventListener('click', function() {
            const routeTitle = this.closest('.route-card').querySelector('.route-title').textContent;
            alert(`Opening live tracking for: "${routeTitle}"`);
        });
    }
});

// Fare card actions
document.querySelectorAll('.fare-card .btn-primary').forEach(button => {
    if (button.textContent.includes('Buy')) {
        button.addEventListener('click', function() {
            const fareTitle = this.closest('.fare-card').querySelector('.fare-title').textContent;
            alert(`Purchasing: "${fareTitle}"`);
        });
    }
});

// Permit actions
document.querySelectorAll('.permit-card .btn-primary').forEach(button => {
    if (button.textContent.includes('Apply')) {
        button.addEventListener('click', function() {
            const permitTitle = this.closest('.permit-card').querySelector('.permit-title').textContent;
            alert(`Applying for: "${permitTitle}"`);
        });
    }
});

// Accessibility service actions
document.querySelectorAll('.service-card .btn-primary').forEach(button => {
    if (button.textContent.includes('View')) {
        button.addEventListener('click', function() {
            const serviceTitle = this.closest('.service-card').querySelector('.service-title').textContent;
            alert(`Viewing: "${serviceTitle}"`);
        });
    }
    
    if (button.textContent.includes('Learn')) {
        button.addEventListener('click', function() {
            const serviceTitle = this.closest('.service-card').querySelector('.service-title').textContent;
            alert(`Learning more about: "${serviceTitle}"`);
        });
    }
});

// Feedback functions
function reportIssue() {
    alert('Service issue reporting would open here. In production, this would show a detailed issue reporting form with categories and priority levels.');
}

function submitFeedback() {
    document.querySelector('.feedback-form').scrollIntoView({ behavior: 'smooth' });
}

function contactSupport() {
    alert('Customer support contact would open here. In production, this would show support options including phone, email, and live chat.');
}

// Feedback form submission
document.getElementById('feedbackForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate required fields
    const feedbackType = document.querySelector('select[required]').value;
    const feedbackText = document.querySelector('textarea[required]').value;
    
    if (!feedbackType || !feedbackText) {
        alert('Please fill in all required fields.');
        return;
    }
    
    alert('Thank you for your feedback! We will review your submission and respond within 48 hours. Your feedback helps us improve our transportation services.');
    // In production, this would submit the feedback
});

// Tracking actions
document.querySelectorAll('.tracking-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Open')) {
        button.addEventListener('click', function() {
            alert('Opening live bus tracking map. In production, this would show a real-time map with bus positions and arrival times.');
        });
    }
    
    if (button.textContent.includes('Download')) {
        button.addEventListener('click', function() {
            alert('Mobile app download would start here. In production, this would redirect to app store or direct download.');
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

// Auto-refresh transport statistics
function refreshTransportStats() {
    // In production, this would fetch real-time transport statistics
    console.log('Refreshing transport statistics...');
    
    // Simulate passenger count updates
    const passengerElement = document.querySelector('.stat-number');
    if (passengerElement && passengerElement.textContent.includes(',')) {
        // Simulate real-time passenger count
        const currentCount = parseInt(passengerElement.textContent.replace(',', ''));
        const increment = Math.floor(Math.random() * 100) + 50;
        const newCount = currentCount + increment;
        passengerElement.textContent = newCount.toLocaleString();
    }
}

// Refresh statistics every 30 seconds
setInterval(refreshTransportStats, 30000);

// Initialize transport tracking simulation
function initializeTransportTracking() {
    // Simulate bus position updates
    const busMarkers = document.querySelectorAll('.bus-marker');
    busMarkers.forEach((marker, index) => {
        setTimeout(() => {
            // Simulate status changes
            const statuses = ['On Time', '2 min away', '5 min delay', 'Approaching'];
            const randomStatus = statuses[Math.floor(Math.random() * statuses.length)];
            const statusElement = marker.querySelector('.bus-status');
            if (statusElement) {
                statusElement.textContent = randomStatus;
            }
        }, index * 2000);
    });
}

// Initialize transport tracking
initializeTransportTracking();
</script>
