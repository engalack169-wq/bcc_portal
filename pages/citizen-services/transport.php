<?php
/**
 * Bamenda City Council E-Governance Platform
 * Public Transport Page
 */

// Set page metadata
$page_title = 'Public Transport | Bamenda City Council';
$page_description = 'Access public transportation information, routes, schedules, and transport services in Bamenda.';
$page_keywords = 'public transport, bus routes, taxi services, transportation, Bamenda transport';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Services', 'url' => 'services.php'],
    ['title' => 'Public Transport', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero transport-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-government-building.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary badge-lg">Public Transport</span>
            <h1 class="hero-title">Getting Around Bamenda</h1>
            <p class="hero-subtitle">
                Comprehensive public transportation information including bus routes, taxi services, schedules, and real-time updates.
            </p>
            <div class="hero-actions">
                <a href="#transport-routes" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">map</span>
                    View Routes
                </a>
                <a href="#transport-schedule" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">schedule</span>
                    View Schedules
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Transport Actions -->
<section class="quick-transport-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Quick Transport Actions</h2>
            <p class="section-subtitle">Essential transport services at your fingertips</p>
        </div>

        <div class="quick-actions-grid">
            <div class="action-card" onclick="openRoutePlanner()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">route</span>
                </div>
                <h3 class="action-title">Route Planner</h3>
                <p class="action-description">Plan your journey with optimal routes and connections</p>
            </div>

            <div class="action-card" onclick="openRealTimeUpdates()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">update</span>
                </div>
                <h3 class="action-title">Live Updates</h3>
                <p class="action-description">Real-time transport updates and delays</p>
            </div>

            <div class="action-card" onclick="openFareCalculator()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">calculate</span>
                </div>
                <h3 class="action-title">Fare Calculator</h3>
                <p class="action-description">Calculate transport fares for your journey</p>
            </div>

            <div class="action-card" onclick="openTransportPass()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">contactless</span>
                </div>
                <h3 class="action-title">Transport Pass</h3>
                <p class="action-description">Apply for monthly transport passes</p>
            </div>

            <div class="action-card" onclick="openAccessibility()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">accessible</span>
                </div>
                <h3 class="action-title">Accessibility</h3>
                <p class="action-description">Special transport services for persons with disabilities</p>
            </div>

            <div class="action-card" onclick="openTransportFeedback()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">feedback</span>
                </div>
                <h3 class="action-title">Feedback</h3>
                <p class="action-description">Report issues and provide feedback on transport services</p>
            </div>
        </div>
    </div>
</section>

<!-- Transport Routes -->
<section class="transport-routes-section" id="transport-routes">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Transport Routes</h2>
            <p class="section-subtitle">Bus and taxi routes covering Bamenda and surrounding areas</p>
        </div>

        <div class="routes-filters">
            <div class="filter-row">
                <div class="form-group">
                    <label class="form-label">Route Type</label>
                    <select class="form-select" id="routeType">
                        <option value="">All Routes</option>
                        <option value="bus">Bus Routes</option>
                        <option value="taxi">Taxi Routes</option>
                        <option value="express">Express Services</option>
                        <option value="night">Night Services</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Area</label>
                    <select class="form-select" id="routeArea">
                        <option value="">All Areas</option>
                        <option value="city-center">City Center</option>
                        <option value="nkwen">Nkwen</option>
                        <option value="mankon">Mankon</option>
                        <option value="bambili">Bambili</option>
                        <option value="bambui">Bambui</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Service Type</label>
                    <select class="form-select" id="routeService">
                        <option value="">All Services</option>
                        <option value="regular">Regular</option>
                        <option value="express">Express</option>
                        <option value="feeder">Feeder</option>
                        <option value="intercity">Intercity</option>
                    </select>
                </div>
                <button class="btn btn-primary" onclick="filterRoutes()">Filter</button>
            </div>
        </div>

        <div class="routes-grid">
            <!-- Route 1: City Center - Nkwen -->
            <div class="route-card">
                <div class="route-header">
                    <div class="route-number">Route 1</div>
                    <div class="route-type bus">Bus</div>
                </div>
                <div class="route-content">
                    <h3 class="route-title">City Center ↔ Nkwen</h3>
                    <p class="route-description">Main route connecting City Center to Nkwen via Commercial Avenue and Hospital Road.</p>
                    <div class="route-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">straighten</span>
                            <span>Distance: 12 km</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 35 min</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Fare: ₣250</span>
                        </div>
                    </div>
                    <div class="route-stops">
                        <h4>Major Stops:</h4>
                        <div class="stops-list">
                            <span class="stop">City Hall</span>
                            <span class="stop">Market Square</span>
                            <span class="stop">Regional Hospital</span>
                            <span class="stop">Nkwen Junction</span>
                        </div>
                    </div>
                    <div class="route-schedule">
                        <div class="schedule-item">
                            <span class="schedule-label">Frequency:</span>
                            <span class="schedule-value">Every 15 minutes</span>
                        </div>
                        <div class="schedule-item">
                            <span class="schedule-label">Operating Hours:</span>
                            <span class="schedule-value">5:30 AM - 9:00 PM</span>
                        </div>
                    </div>
                    <div class="route-actions">
                        <button class="btn btn-sm btn-primary">View Map</button>
                        <button class="btn btn-sm btn-outline">View Schedule</button>
                        <button class="btn btn-sm btn-outline">Live Tracking</button>
                    </div>
                </div>
            </div>

            <!-- Route 2: City Center - Mankon -->
            <div class="route-card">
                <div class="route-header">
                    <div class="route-number">Route 2</div>
                    <div class="route-type express">Express</div>
                </div>
                <div class="route-content">
                    <h3 class="route-title">City Center ↔ Mankon</h3>
                    <p class="route-description">Express service with limited stops for faster travel between City Center and Mankon.</p>
                    <div class="route-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">straighten</span>
                            <span>Distance: 8 km</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 20 min</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Fare: ₣200</span>
                        </div>
                    </div>
                    <div class="route-stops">
                        <h4>Major Stops:</h4>
                        <div class="stops-list">
                            <span class="stop">City Hall</span>
                            <span class="stop">University Junction</span>
                            <span class="stop">Mankon Market</span>
                        </div>
                    </div>
                    <div class="route-schedule">
                        <div class="schedule-item">
                            <span class="schedule-label">Frequency:</span>
                            <span class="schedule-value">Every 20 minutes</span>
                        </div>
                        <div class="schedule-item">
                            <span class="schedule-label">Operating Hours:</span>
                            <span class="schedule-value">6:00 AM - 8:00 PM</span>
                        </div>
                    </div>
                    <div class="route-actions">
                        <button class="btn btn-sm btn-primary">View Map</button>
                        <button class="btn btn-sm btn-outline">View Schedule</button>
                        <button class="btn btn-sm btn-outline">Live Tracking</button>
                    </div>
                </div>
            </div>

            <!-- Route 3: Nkwen - Bambili -->
            <div class="route-card">
                <div class="route-header">
                    <div class="route-number">Route 3</div>
                    <div class="route-type bus">Bus</div>
                </div>
                <div class="route-content">
                    <h3 class="route-title">Nkwen ↔ Bambili</h3>
                    <p class="route-description">Connecting route between Nkwen and Bambili serving residential and educational areas.</p>
                    <div class="route-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">straighten</span>
                            <span>Distance: 15 km</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 40 min</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Fare: ₣300</span>
                        </div>
                    </div>
                    <div class="route-stops">
                        <h4>Major Stops:</h4>
                        <div class="stops-list">
                            <span class="stop">Nkwen Junction</span>
                            <span class="stop">Technical School</span>
                            <span class="stop">Bambili Market</span>
                            <span class="stop">University Campus</span>
                        </div>
                    </div>
                    <div class="route-schedule">
                        <div class="schedule-item">
                            <span class="schedule-label">Frequency:</span>
                            <span class="schedule-value">Every 25 minutes</span>
                        </div>
                        <div class="schedule-item">
                            <span class="schedule-label">Operating Hours:</span>
                            <span class="schedule-value">6:30 AM - 7:30 PM</span>
                        </div>
                    </div>
                    <div class="route-actions">
                        <button class="btn btn-sm btn-primary">View Map</button>
                        <button class="btn btn-sm btn-outline">View Schedule</button>
                        <button class="btn btn-sm btn-outline">Live Tracking</button>
                    </div>
                </div>
            </div>

            <!-- Route 4: City Center - Bambui -->
            <div class="route-card">
                <div class="route-header">
                    <div class="route-number">Route 4</div>
                    <div class="route-type taxi">Taxi</div>
                </div>
                <div class="route-content">
                    <h3 class="route-title">City Center ↔ Bambui</h3>
                    <p class="route-description">Shared taxi service providing flexible transportation between City Center and Bambui.</p>
                    <div class="route-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">straighten</span>
                            <span>Distance: 10 km</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 25 min</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Fare: ₣350 (per seat)</span>
                        </div>
                    </div>
                    <div class="route-stops">
                        <h4>Major Stops:</h4>
                        <div class="stops-list">
                            <span class="stop">City Hall</span>
                            <span class="stop">Police Station</span>
                            <span class="stop">Bambui Junction</span>
                        </div>
                    </div>
                    <div class="route-schedule">
                        <div class="schedule-item">
                            <span class="schedule-label">Frequency:</span>
                            <span class="schedule-value">On demand</span>
                        </div>
                        <div class="schedule-item">
                            <span class="schedule-label">Operating Hours:</span>
                            <span class="schedule-value">6:00 AM - 10:00 PM</span>
                        </div>
                    </div>
                    <div class="route-actions">
                        <button class="btn btn-sm btn-primary">View Map</button>
                        <button class="btn btn-sm btn-outline">Book Taxi</button>
                        <button class="btn btn-sm btn-outline">Call Taxi</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="load-more-container">
            <button class="btn btn-outline" onclick="loadMoreRoutes()">Load More Routes</button>
        </div>
    </div>
</section>

<!-- Transport Schedule -->
<section class="transport-schedule-section" id="transport-schedule">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Transport Schedule</h2>
            <p class="section-subtitle">Detailed schedules and timetables for all transport services</p>
        </div>

        <div class="schedule-controls">
            <div class="control-row">
                <div class="form-group">
                    <label class="form-label">Select Route</label>
                    <select class="form-select" id="scheduleRoute">
                        <option value="">Choose a route</option>
                        <option value="route1">Route 1: City Center - Nkwen</option>
                        <option value="route2">Route 2: City Center - Mankon</option>
                        <option value="route3">Route 3: Nkwen - Bambili</option>
                        <option value="route4">Route 4: City Center - Bambui</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Day Type</label>
                    <select class="form-select" id="scheduleDay">
                        <option value="weekday">Weekday</option>
                        <option value="saturday">Saturday</option>
                        <option value="sunday">Sunday</option>
                        <option value="holiday">Public Holiday</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Direction</label>
                    <select class="form-select" id="scheduleDirection">
                        <option value="outbound">Outbound</option>
                        <option value="inbound">Inbound</option>
                    </select>
                </div>
                <button class="btn btn-primary" onclick="updateSchedule()">Update Schedule</button>
            </div>
        </div>

        <div class="schedule-table">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Time</th>
                        <th>Route</th>
                        <th>Major Stops</th>
                        <th>Duration</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>5:30 AM</td>
                        <td>Route 1</td>
                        <td>City Hall → Market → Hospital → Nkwen</td>
                        <td>35 min</td>
                        <td><span class="badge badge-success">On Time</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline">Track</button>
                        </td>
                    </tr>
                    <tr>
                        <td>5:45 AM</td>
                        <td>Route 2</td>
                        <td>City Hall → University → Mankon</td>
                        <td>20 min</td>
                        <td><span class="badge badge-success">On Time</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline">Track</button>
                        </td>
                    </tr>
                    <tr>
                        <td>6:00 AM</td>
                        <td>Route 1</td>
                        <td>City Hall → Market → Hospital → Nkwen</td>
                        <td>35 min</td>
                        <td><span class="badge badge-warning badge-lg">Delayed (5 min)</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline">Track</button>
                        </td>
                    </tr>
                    <tr>
                        <td>6:00 AM</td>
                        <td>Route 3</td>
                        <td>Nkwen → Technical School → Bambili</td>
                        <td>40 min</td>
                        <td><span class="badge badge-success">On Time</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline">Track</button>
                        </td>
                    </tr>
                    <tr>
                        <td>6:15 AM</td>
                        <td>Route 2</td>
                        <td>City Hall → University → Mankon</td>
                        <td>20 min</td>
                        <td><span class="badge badge-success">On Time</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline">Track</button>
                        </td>
                    </tr>
                    <tr>
                        <td>6:30 AM</td>
                        <td>Route 1</td>
                        <td>City Hall → Market → Hospital → Nkwen</td>
                        <td>35 min</td>
                        <td><span class="badge badge-success">On Time</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline">Track</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Transport Services -->
<section class="transport-services-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Transport Services</h2>
            <p class="section-subtitle">Additional transportation services and facilities</p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <h3 class="service-title">Student Transport</h3>
                <p class="service-description">Specialized transport services for students with discounted fares and dedicated routes.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>50% Discount</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Dedicated Routes</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Student ID Required</span>
                    </div>
                </div>
                <button class="btn btn-primary">Learn More</button>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">elderly</span>
                </div>
                <h3 class="service-title">Senior Citizen Services</h3>
                <p class="service-description">Priority seating and special assistance for elderly passengers on all routes.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Priority Seating</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>30% Discount</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Assistance Available</span>
                    </div>
                </div>
                <button class="btn btn-primary">Learn More</button>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">accessible</span>
                </div>
                <h3 class="service-title">Accessible Transport</h3>
                <p class="service-description">Wheelchair-accessible vehicles and special transport for persons with disabilities.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Wheelchair Access</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Door-to-Door Service</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Advanced Booking</span>
                    </div>
                </div>
                <button class="btn btn-primary">Learn More</button>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">nightlight</span>
                </div>
                <h3 class="service-title">Night Services</h3>
                <p class="service-description">Late-night transport services for shift workers and late travelers.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>9 PM - 2 AM</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Limited Routes</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Higher Fares</span>
                    </div>
                </div>
                <button class="btn btn-primary">Learn More</button>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">luggage</span>
                </div>
                <h3 class="service-title">Airport Shuttle</h3>
                <p class="service-description">Shuttle services to and from Bamenda Airport with comfortable seating.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Every 2 Hours</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Luggage Allowance</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Reservation Required</span>
                    </div>
                </div>
                <button class="btn btn-primary">Learn More</button>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">tour</span>
                </div>
                <h3 class="service-title">Tourist Transport</h3>
                <p class="service-description">Special transport services for tourists with city tours and attraction visits.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>City Tours</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Multi-Day Pass</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Guide Available</span>
                    </div>
                </div>
                <button class="btn btn-primary">Learn More</button>
            </div>
        </div>
    </div>
</section>

<!-- Transport Statistics -->
<section class="transport-statistics-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Transport Statistics</h2>
            <p class="section-subtitle">Key metrics for Bamenda's public transportation system</p>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">directions_bus</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">45</div>
                    <div class="stat-label">Active Routes</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+8 this year</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">125,000</div>
                    <div class="stat-label">Daily Passengers</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+15% this year</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">local_taxi</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">850</div>
                    <div class="stat-label">Registered Vehicles</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+50 this year</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">schedule</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">95%</div>
                    <div class="stat-label">On-Time Performance</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+3% improvement</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Fare Information -->
<section class="fare-information-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Fare Information</h2>
            <p class="section-subtitle">Current fare structure and payment options</p>
        </div>

        <div class="fare-grid">
            <div class="fare-card">
                <div class="fare-header">
                    <h3 class="fare-title">Bus Fares</h3>
                </div>
                <div class="fare-content">
                    <div class="fare-item">
                        <span class="fare-route">Standard Route</span>
                        <span class="fare-amount">₣250</span>
                    </div>
                    <div class="fare-item">
                        <span class="fare-route">Express Route</span>
                        <span class="fare-amount">₣200</span>
                    </div>
                    <div class="fare-item">
                        <span class="fare-route">Long Distance</span>
                        <span class="fare-amount">₣350</span>
                    </div>
                    <div class="fare-item">
                        <span class="fare-route">Student Discount</span>
                        <span class="fare-amount">50% off</span>
                    </div>
                </div>
            </div>

            <div class="fare-card">
                <div class="fare-header">
                    <h3 class="fare-title">Taxi Fares</h3>
                </div>
                <div class="fare-content">
                    <div class="fare-item">
                        <span class="fare-route">Short Distance</span>
                        <span class="fare-amount">₣300</span>
                    </div>
                    <div class="fare-item">
                        <span class="fare-route">Medium Distance</span>
                        <span class="fare-amount">₣350</span>
                    </div>
                    <div class="fare-item">
                        <span class="fare-route">Long Distance</span>
                        <span class="fare-amount">₣450</span>
                    </div>
                    <div class="fare-item">
                        <span class="fare-route">Night Surcharge</span>
                        <span class="fare-amount">+50%</span>
                    </div>
                </div>
            </div>

            <div class="fare-card">
                <div class="fare-header">
                    <h3 class="fare-title">Monthly Pass</h3>
                </div>
                <div class="fare-content">
                    <div class="fare-item">
                        <span class="fare-route">Regular Pass</span>
                        <span class="fare-amount">₣8,000</span>
                    </div>
                    <div class="fare-item">
                        <span class="fare-route">Student Pass</span>
                        <span class="fare-amount">₣4,000</span>
                    </div>
                    <div class="fare-item">
                        <span class="fare-route">Senior Pass</span>
                        <span class="fare-amount">₣5,600</span>
                    </div>
                    <div class="fare-item">
                        <span class="fare-route">Premium Pass</span>
                        <span class="fare-amount">₣12,000</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="payment-methods">
            <h3>Payment Methods</h3>
            <div class="payment-options">
                <div class="payment-option">
                    <span class="payment-icon">
                        <span class="material-symbols-outlined">payments</span>
                    </span>
                    <span class="payment-name">Cash</span>
                </div>
                <div class="payment-option">
                    <span class="payment-icon">
                        <span class="material-symbols-outlined">contactless</span>
                    </span>
                    <span class="payment-name">Transport Card</span>
                </div>
                <div class="payment-option">
                    <span class="payment-icon">
                        <span class="material-symbols-outlined">smartphone</span>
                    </span>
                    <span class="payment-name">Mobile Payment</span>
                </div>
                <div class="payment-option">
                    <span class="payment-icon">
                        <span class="material-symbols-outlined">credit_card</span>
                    </span>
                    <span class="payment-name">Card Payment</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Transport Feedback -->
<section class="transport-feedback-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Transport Feedback</h2>
            <p class="section-subtitle">Help us improve our transport services with your feedback</p>
        </div>

        <div class="feedback-form">
            <form id="transportFeedbackForm">
                <div class="form-section">
                    <h3 class="section-title">Feedback Details</h3>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Feedback Type *</label>
                            <select class="form-select" required>
                                <option value="">Select feedback type</option>
                                <option value="compliment">Compliment</option>
                                <option value="complaint">Complaint</option>
                                <option value="suggestion">Suggestion</option>
                                <option value="issue">Service Issue</option>
                                <option value="safety">Safety Concern</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Route/Service *</label>
                            <select class="form-select" required>
                                <option value="">Select route or service</option>
                                <option value="route1">Route 1: City Center - Nkwen</option>
                                <option value="route2">Route 2: City Center - Mankon</option>
                                <option value="route3">Route 3: Nkwen - Bambili</option>
                                <option value="route4">Route 4: City Center - Bambui</option>
                                <option value="general">General Service</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Subject *</label>
                        <input type="text" class="form-input" placeholder="Brief subject of your feedback" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Detailed Feedback *</label>
                        <textarea class="form-textarea" rows="4" placeholder="Please provide detailed feedback" required></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Rating</label>
                        <div class="rating-stars">
                            <span class="star" data-rating="1">★</span>
                            <span class="star" data-rating="2">★</span>
                            <span class="star" data-rating="3">★</span>
                            <span class="star" data-rating="4">★</span>
                            <span class="star" data-rating="5">★</span>
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">Contact Information</h3>
                    
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

                    <div class="form-group">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-input" placeholder="your@email.com">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Prefer to remain anonymous</label>
                        <div class="checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="anonymous">
                                <span class="checkmark"></span>
                                Yes, I prefer to remain anonymous
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="reset" class="btn btn-outline">Reset</button>
                    <button type="submit" class="btn btn-primary">Submit Feedback</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php
// Include footer
require_once __DIR__ . '/../../includes/footer.php';
?>

<style>
/* Transport Page Styles */
.transport-hero {
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-container) 100%);
}

/* Quick Transport Actions Section */
.quick-transport-actions-section {
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

/* Transport Routes Section */
.transport-routes-section {
    padding: var(--spacing-3xl) 0;
}

.routes-filters {
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
    font-size: 1.5rem;
    font-weight: 800;
    color: var(--primary);
}

.route-type {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.route-type.bus {
    background-color: var(--primary);
    color: var(--on-primary);
}

.route-type.express {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.route-type.taxi {
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
    color: var(--on-surface-variant);
    font-size: 0.875rem;
}

.detail-item .material-symbols-outlined {
    font-size: 1.25rem;
    color: var(--primary);
}

.route-stops {
    margin-bottom: var(--spacing-lg);
}

.route-stops h4 {
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

.stop {
    background-color: var(--surface-container);
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.route-schedule {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

.schedule-item {
    display: flex;
    justify-content: space-between;
    font-size: 0.875rem;
}

.schedule-label {
    color: var(--on-surface-variant);
}

.schedule-value {
    font-weight: 600;
    color: var(--primary);
}

.route-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Transport Schedule Section */
.transport-schedule-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.schedule-controls {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    margin-bottom: var(--spacing-xl);
}

.control-row {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: var(--spacing-lg);
    align-items: end;
}

.schedule-table {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    overflow: hidden;
}

.data-table {
    width: 100%;
    border-collapse: collapse;
}

.data-table th {
    background-color: var(--surface-container);
    padding: var(--spacing-md);
    text-align: left;
    font-weight: 600;
    color: var(--primary);
    border-bottom: 1px solid var(--outline-variant);
}

.data-table td {
    padding: var(--spacing-md);
    border-bottom: 1px solid var(--outline-variant);
}

.data-table tr:hover {
    background-color: var(--surface-container);
}

.badge-success {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.badge-warning {
    background-color: var(--secondary-container);
    color: var(--on-secondary-container);
}

/* Transport Services Section */
.transport-services-section {
    padding: var(--spacing-3xl) 0;
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

/* Transport Statistics Section */
.transport-statistics-section {
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

/* Fare Information Section */
.fare-information-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.fare-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.fare-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    overflow: hidden;
}

.fare-header {
    background-color: var(--primary);
    color: var(--on-primary);
    padding: var(--spacing-lg);
    text-align: center;
}

.fare-title {
    font-size: 1.25rem;
    font-weight: 700;
    margin: 0;
}

.fare-content {
    padding: var(--spacing-lg);
}

.fare-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--spacing-sm) 0;
    border-bottom: 1px solid var(--outline-variant);
}

.fare-item:last-child {
    border-bottom: none;
}

.fare-route {
    color: var(--on-surface-variant);
    font-weight: 500;
}

.fare-amount {
    font-weight: 700;
    color: var(--primary);
}

.payment-methods {
    margin-top: var(--spacing-xl);
    text-align: center;
}

.payment-methods h3 {
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
}

.payment-options {
    display: flex;
    justify-content: center;
    gap: var(--spacing-lg);
    flex-wrap: wrap;
}

.payment-option {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: var(--spacing-sm);
}

.payment-icon {
    width: 3rem;
    height: 3rem;
    background-color: var(--surface-container);
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
}

.payment-icon .material-symbols-outlined {
    font-size: 1.5rem;
    color: var(--primary);
}

.payment-name {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

/* Transport Feedback Section */
.transport-feedback-section {
    padding: var(--spacing-3xl) 0;
}

.feedback-form {
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

.rating-stars {
    display: flex;
    gap: var(--spacing-sm);
    font-size: 2rem;
}

.star {
    color: var(--outline-variant);
    cursor: pointer;
    transition: color 0.2s ease;
}

.star:hover,
.star.active {
    color: var(--secondary);
}

.checkbox-group {
    display: flex;
    align-items: center;
}

.checkbox-label {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    cursor: pointer;
    color: var(--on-surface);
}

.checkbox-label input[type="checkbox"] {
    display: none;
}

.checkmark {
    width: 1.25rem;
    height: 1.25rem;
    border: 2px solid var(--outline-variant);
    border-radius: var(--radius-xs);
    position: relative;
    transition: all 0.2s ease;
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
    
    .routes-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .route-actions {
        flex-direction: column;
    }
    
    .control-row {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .services-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: var(--spacing-md);
    }
    
    .fare-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .payment-options {
        flex-direction: column;
        align-items: center;
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
    
    .stat-card {
        grid-template-columns: 1fr;
        text-align: center;
        gap: var(--spacing-md);
    }
    
    .feedback-form {
        padding: var(--spacing-lg);
    }
    
    .data-table {
        font-size: 0.875rem;
    }
    
    .data-table th,
    .data-table td {
        padding: var(--spacing-sm);
    }
}
</style>

<script>
// Route filtering
function filterRoutes() {
    const type = document.getElementById('routeType').value;
    const area = document.getElementById('routeArea').value;
    const service = document.getElementById('routeService').value;
    
    // In production, this would filter the routes
    alert(`Filtering routes by: ${type || 'All Types'}, ${area || 'All Areas'}, ${service || 'All Services'}`);
}

// Load more routes
function loadMoreRoutes() {
    // In production, this would load more routes from the server
    alert('Loading more routes...');
}

// Quick action functions
function openRoutePlanner() {
    alert('Route planner would open here. In production, this would show an interactive route planning tool.');
}

function openRealTimeUpdates() {
    alert('Real-time transport updates would be displayed here. In production, this would show live vehicle tracking.');
}

function openFareCalculator() {
    alert('Fare calculator would open here. In production, this would calculate fares based on distance and service type.');
}

function openTransportPass() {
    alert('Transport pass application would open here. In production, this would show pass options and application form.');
}

function openAccessibility() {
    alert('Accessibility services information would be displayed here. In production, this would show special transport services.');
}

function openTransportFeedback() {
    document.getElementById('transport-feedback').scrollIntoView({ behavior: 'smooth' });
}

// Schedule update
function updateSchedule() {
    const route = document.getElementById('scheduleRoute').value;
    const day = document.getElementById('scheduleDay').value;
    const direction = document.getElementById('scheduleDirection').value;
    
    // In production, this would update the schedule table
    alert(`Updating schedule for: ${route || 'All Routes'}, ${day}, ${direction}`);
}

// Route actions
document.querySelectorAll('.route-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Map')) {
        button.addEventListener('click', function() {
            const routeTitle = this.closest('.route-card').querySelector('.route-title').textContent;
            alert(`Viewing map for: "${routeTitle}"`);
        });
    }
});

document.querySelectorAll('.route-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Schedule')) {
        button.addEventListener('click', function() {
            const routeTitle = this.closest('.route-card').querySelector('.route-title').textContent;
            alert(`Viewing schedule for: "${routeTitle}"`);
        });
    }
    
    if (button.textContent.includes('Tracking')) {
        button.addEventListener('click', function() {
            const routeTitle = this.closest('.route-card').querySelector('.route-title').textContent;
            alert(`Live tracking for: "${routeTitle}"`);
        });
    }
    
    if (button.textContent.includes('Book')) {
        button.addEventListener('click', function() {
            alert('Taxi booking form would open here. In production, this would show booking interface.');
        });
    }
    
    if (button.textContent.includes('Call')) {
        button.addEventListener('click', function() {
            alert('Calling taxi service...');
        });
    }
});

// Service actions
document.querySelectorAll('.service-card .btn-primary').forEach(button => {
    if (button.textContent.includes('Learn More')) {
        button.addEventListener('click', function() {
            const serviceTitle = this.closest('.service-card').querySelector('.service-title').textContent;
            alert(`More information about: "${serviceTitle}"`);
        });
    }
});

// Track buttons in schedule table
document.querySelectorAll('.data-table .btn-outline').forEach(button => {
    if (button.textContent.includes('Track')) {
        button.addEventListener('click', function() {
            const time = this.closest('tr').querySelector('td:first-child').textContent;
            const route = this.closest('tr').querySelector('td:nth-child(2)').textContent;
            alert(`Tracking vehicle for ${route} at ${time}`);
        });
    }
});

// Rating stars
document.querySelectorAll('.star').forEach((star, index) => {
    star.addEventListener('click', function() {
        document.querySelectorAll('.star').forEach((s, i) => {
            if (i <= index) {
                s.classList.add('active');
            } else {
                s.classList.remove('active');
            }
        });
    });
});

// Feedback form submission
document.getElementById('transportFeedbackForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Feedback submitted successfully! Thank you for helping us improve our transport services.');
    // In production, this would submit the feedback
});

// Schedule table refresh simulation
function refreshScheduleTable() {
    // In production, this would fetch real-time schedule data
    console.log('Refreshing schedule table...');
}

// Auto-refresh schedule every 30 seconds
setInterval(refreshScheduleTable, 30000);
</script>
