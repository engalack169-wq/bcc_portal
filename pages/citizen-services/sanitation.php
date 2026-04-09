<?php
/**
 * Bamenda City Council E-Governance Platform
 * Sanitation Services Page
 */

// Set page metadata
$page_title = 'Sanitation Services | Bamenda City Council';
$page_description = 'Access waste management, sanitation services, and environmental cleanliness programs in Bamenda.';
$page_keywords = 'sanitation, waste management, environmental services, cleanliness, Bamenda sanitation';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Services', 'url' => 'services.php'],
    ['title' => 'Sanitation', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero sanitation-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-government-building.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Sanitation Services</span>
            <h1 class="hero-title">Clean Bamenda Initiative</h1>
            <p class="hero-subtitle">
                Comprehensive waste management and sanitation services to keep Bamenda clean, healthy, and environmentally sustainable.
            </p>
            <div class="hero-actions">
                <a href="#waste-collection" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">delete</span>
                    Waste Collection
                </a>
                <a href="#report-issue" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">report_problem</span>
                    Report Issue
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Sanitation Actions -->
<section class="quick-sanitation-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Quick Sanitation Actions</h2>
            <p class="section-subtitle">Essential sanitation services at your fingertips</p>
        </div>

        <div class="quick-actions-grid">
            <div class="action-card urgent" onclick="emergencyCleanup()">
                <div class="action-icon urgent">
                    <span class="material-symbols-outlined">emergency</span>
                </div>
                <h3 class="action-title">Emergency Cleanup</h3>
                <p class="action-description">Report urgent sanitation issues requiring immediate attention</p>
                <div class="emergency-number">119</div>
            </div>

            <div class="action-card" onclick="scheduleCollection()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">event</span>
                </div>
                <h3 class="action-title">Schedule Collection</h3>
                <p class="action-description">Schedule special waste collection for your area</p>
            </div>

            <div class="action-card" onclick="collectionSchedule()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">schedule</span>
                </div>
                <h3 class="action-title">Collection Schedule</h3>
                <p class="action-description">View waste collection schedule for your area</p>
            </div>

            <div class="action-card" onclick="recyclingInfo()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">recycling</span>
                </div>
                <h3 class="action-title">Recycling Program</h3>
                <p class="action-description">Learn about recycling and waste segregation</p>
            </div>

            <div class="action-card" onclick="compostingGuide()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">compost</span>
                </div>
                <h3 class="action-title">Composting Guide</h3>
                <p class="action-description">Guide to home composting and organic waste management</p>
            </div>

            <div class="action-card" onclick="sanitationReport()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">assessment</span>
                </div>
                <h3 class="action-title">Sanitation Report</h3>
                <p class="action-description">View city sanitation performance and statistics</p>
            </div>
        </div>
    </div>
</section>

<!-- Sanitation Statistics -->
<section class="sanitation-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">delete</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">450 tons</div>
                    <div class="stat-label">Daily Waste Collection</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+12% this month</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">recycling</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">68%</div>
                    <div class="stat-label">Recycling Rate</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+8% improvement</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">location_city</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">95%</div>
                    <div class="stat-label">Clean Areas</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+5% improvement</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">320</div>
                    <div class="stat-label">Sanitation Workers</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+25 new hires</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Waste Collection Services -->
<section class="waste-collection-section" id="waste-collection">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Waste Collection Services</h2>
            <p class="section-subtitle">Regular and special waste collection services across Bamenda</p>
        </div>

        <div class="collection-filters">
            <div class="filter-row">
                <div class="form-group">
                    <label class="form-label">Service Type</label>
                    <select class="form-select" id="collectionType">
                        <option value="">All Services</option>
                        <option value="residential">Residential</option>
                        <option value="commercial">Commercial</option>
                        <option value="industrial">Industrial</option>
                        <option value="special">Special Collection</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Area</label>
                    <select class="form-select" id="collectionArea">
                        <option value="">All Areas</option>
                        <option value="city-center">City Center</option>
                        <option value="nkwen">Nkwen</option>
                        <option value="mankon">Mankon</option>
                        <option value="bambili">Bambili</option>
                        <option value="bambui">Bambui</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Waste Type</label>
                    <select class="form-select" id="wasteType">
                        <option value="">All Types</option>
                        <option value="general">General Waste</option>
                        <option value="recyclable">Recyclable</option>
                        <option value="organic">Organic</option>
                        <option value="hazardous">Hazardous</option>
                    </select>
                </div>
                <button class="btn btn-primary" onclick="filterCollection()">Filter</button>
            </div>
        </div>

        <div class="collection-grid">
            <!-- Residential Collection -->
            <div class="collection-card">
                <div class="collection-header">
                    <div class="collection-icon">
                        <span class="material-symbols-outlined">home</span>
                    </div>
                    <div class="collection-badge residential">Residential</div>
                </div>
                <div class="collection-content">
                    <h3 class="collection-title">Residential Waste Collection</h3>
                    <p class="collection-description">Regular waste collection for households and residential areas with scheduled pickups.</p>
                    <div class="collection-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Frequency: 3 times per week</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">access_time</span>
                            <span>Time: 6:00 AM - 8:00 AM</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Cost: ₣2,500/month</span>
                        </div>
                    </div>
                    <div class="collection-schedule">
                        <h4>Collection Days:</h4>
                        <div class="schedule-list">
                            <span class="schedule-day">Monday</span>
                            <span class="schedule-day">Wednesday</span>
                            <span class="schedule-day">Friday</span>
                        </div>
                    </div>
                    <div class="collection-actions">
                        <button class="btn btn-sm btn-primary">View Schedule</button>
                        <button class="btn btn-sm btn-outline">Request Service</button>
                    </div>
                </div>
            </div>

            <!-- Commercial Collection -->
            <div class="collection-card">
                <div class="collection-header">
                    <div class="collection-icon">
                        <span class="material-symbols-outlined">store</span>
                    </div>
                    <div class="collection-badge commercial">Commercial</div>
                </div>
                <div class="collection-content">
                    <h3 class="collection-title">Commercial Waste Collection</h3>
                    <p class="collection-description">Specialized waste collection for businesses, shops, and commercial establishments.</p>
                    <div class="collection-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Frequency: Daily</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">access_time</span>
                            <span>Time: 10:00 PM - 2:00 AM</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Cost: Based on volume</span>
                        </div>
                    </div>
                    <div class="collection-schedule">
                        <h4>Service Features:</h4>
                        <div class="schedule-list">
                            <span class="schedule-day">Daily Collection</span>
                            <span class="schedule-day">Large Capacity</span>
                            <span class="schedule-day">Flexible Timing</span>
                        </div>
                    </div>
                    <div class="collection-actions">
                        <button class="btn btn-sm btn-primary">View Schedule</button>
                        <button class="btn btn-sm btn-outline">Request Service</button>
                    </div>
                </div>
            </div>

            <!-- Recycling Collection -->
            <div class="collection-card">
                <div class="collection-header">
                    <div class="collection-icon">
                        <span class="material-symbols-outlined">recycling</span>
                    </div>
                    <div class="collection-badge recycling">Recycling</div>
                </div>
                <div class="collection-content">
                    <h3 class="collection-title">Recycling Collection</h3>
                    <p class="collection-description">Dedicated collection service for recyclable materials including plastics, paper, glass, and metals.</p>
                    <div class="collection-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Frequency: Weekly</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">access_time</span>
                            <span>Time: 7:00 AM - 11:00 AM</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Cost: Free Service</span>
                        </div>
                    </div>
                    <div class="collection-schedule">
                        <h4>Recyclable Materials:</h4>
                        <div class="schedule-list">
                            <span class="schedule-day">Plastics</span>
                            <span class="schedule-day">Paper & Cardboard</span>
                            <span class="schedule-day">Glass & Metals</span>
                        </div>
                    </div>
                    <div class="collection-actions">
                        <button class="btn btn-sm btn-primary">View Schedule</button>
                        <button class="btn btn-sm btn-outline">Request Service</button>
                    </div>
                </div>
            </div>

            <!-- Hazardous Waste -->
            <div class="collection-card">
                <div class="collection-header">
                    <div class="collection-icon">
                        <span class="material-symbols-outlined">warning</span>
                    </div>
                    <div class="collection-badge hazardous">Hazardous</div>
                </div>
                <div class="collection-content">
                    <h3 class="collection-title">Hazardous Waste Collection</h3>
                    <p class="collection-description">Special collection service for hazardous and medical waste requiring special handling.</p>
                    <div class="collection-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Frequency: By Appointment</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">access_time</span>
                            <span>Time: Scheduled</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Cost: Based on type</span>
                        </div>
                    </div>
                    <div class="collection-schedule">
                        <h4>Hazardous Types:</h4>
                        <div class="schedule-list">
                            <span class="schedule-day">Medical Waste</span>
                            <span class="schedule-day">Chemicals</span>
                            <span class="schedule-day">Batteries</span>
                        </div>
                    </div>
                    <div class="collection-actions">
                        <button class="btn btn-sm btn-primary">Book Collection</button>
                        <button class="btn btn-sm btn-outline">Guidelines</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Collection Schedule -->
<section class="collection-schedule-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Collection Schedule</h2>
            <p class="section-subtitle">View waste collection schedule by area and service type</p>
        </div>

        <div class="schedule-controls">
            <div class="control-row">
                <div class="form-group">
                    <label class="form-label">Select Area</label>
                    <select class="form-select" id="scheduleAreaSelect">
                        <option value="">Choose your area</option>
                        <option value="city-center">City Center</option>
                        <option value="nkwen">Nkwen</option>
                        <option value="mankon">Mankon</option>
                        <option value="bambili">Bambili</option>
                        <option value="bambui">Bambui</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Service Type</label>
                    <select class="form-select" id="scheduleService">
                        <option value="residential">Residential</option>
                        <option value="commercial">Commercial</option>
                        <option value="recycling">Recycling</option>
                    </select>
                </div>
                <button class="btn btn-primary" onclick="updateCollectionSchedule()">View Schedule</button>
            </div>
        </div>

        <div class="schedule-calendar">
            <div class="calendar-legend">
                <div class="legend-item">
                    <span class="legend-dot regular"></span>
                    <span>Regular Collection</span>
                </div>
                <div class="legend-item">
                    <span class="legend-dot recycling"></span>
                    <span>Recycling Collection</span>
                </div>
                <div class="legend-item">
                    <span class="legend-dot special"></span>
                    <span>Special Collection</span>
                </div>
            </div>

            <div class="week-schedule">
                <div class="day-schedule">
                    <div class="day-header">
                        <h4>Monday</h4>
                    </div>
                    <div class="day-content">
                        <div class="collection-item regular">
                            <span class="collection-time">6:00 AM - 8:00 AM</span>
                            <span class="collection-service">Residential - City Center</span>
                        </div>
                        <div class="collection-item recycling">
                            <span class="collection-time">7:00 AM - 11:00 AM</span>
                            <span class="collection-service">Recycling - All Areas</span>
                        </div>
                    </div>
                </div>

                <div class="day-schedule">
                    <div class="day-header">
                        <h4>Tuesday</h4>
                    </div>
                    <div class="day-content">
                        <div class="collection-item regular">
                            <span class="collection-time">6:00 AM - 8:00 AM</span>
                            <span class="collection-service">Residential - Nkwen</span>
                        </div>
                        <div class="collection-item regular">
                            <span class="collection-time">6:00 AM - 8:00 AM</span>
                            <span class="collection-service">Residential - Mankon</span>
                        </div>
                    </div>
                </div>

                <div class="day-schedule">
                    <div class="day-header">
                        <h4>Wednesday</h4>
                    </div>
                    <div class="day-content">
                        <div class="collection-item regular">
                            <span class="collection-time">6:00 AM - 8:00 AM</span>
                            <span class="collection-service">Residential - City Center</span>
                        </div>
                        <div class="collection-item special">
                            <span class="collection-time">9:00 AM - 12:00 PM</span>
                            <span class="collection-service">Special - Bambili</span>
                        </div>
                    </div>
                </div>

                <div class="day-schedule">
                    <div class="day-header">
                        <h4>Thursday</h4>
                    </div>
                    <div class="day-content">
                        <div class="collection-item regular">
                            <span class="collection-time">6:00 AM - 8:00 AM</span>
                            <span class="collection-service">Residential - Bambui</span>
                        </div>
                        <div class="collection-item regular">
                            <span class="collection-time">6:00 AM - 8:00 AM</span>
                            <span class="collection-service">Residential - Bambili</span>
                        </div>
                    </div>
                </div>

                <div class="day-schedule">
                    <div class="day-header">
                        <h4>Friday</h4>
                    </div>
                    <div class="day-content">
                        <div class="collection-item regular">
                            <span class="collection-time">6:00 AM - 8:00 AM</span>
                            <span class="collection-service">Residential - City Center</span>
                        </div>
                        <div class="collection-item recycling">
                            <span class="collection-time">7:00 AM - 11:00 AM</span>
                            <span class="collection-service">Recycling - All Areas</span>
                        </div>
                    </div>
                </div>

                <div class="day-schedule">
                    <div class="day-header">
                        <h4>Saturday</h4>
                    </div>
                    <div class="day-content">
                        <div class="collection-item special">
                            <span class="collection-time">8:00 AM - 2:00 PM</span>
                            <span class="collection-service">Commercial - All Areas</span>
                        </div>
                        <div class="collection-item special">
                            <span class="collection-time">3:00 PM - 6:00 PM</span>
                            <span class="collection-service">Market Cleanup - City Center</span>
                        </div>
                    </div>
                </div>

                <div class="day-schedule">
                    <div class="day-header">
                        <h4>Sunday</h4>
                    </div>
                    <div class="day-content">
                        <div class="collection-item special">
                            <span class="collection-time">7:00 AM - 12:00 PM</span>
                            <span class="collection-service">Emergency Collection</span>
                        </div>
                        <div class="no-collection">
                            <span>No regular collection</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Recycling Program -->
<section class="recycling-program-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Recycling Program</h2>
            <p class="section-subtitle">Learn about recycling, waste segregation, and environmental sustainability</p>
        </div>

        <div class="recycling-grid">
            <div class="recycling-card">
                <div class="recycling-icon plastics">
                    <span class="material-symbols-outlined">local_drink</span>
                </div>
                <h3 class="recycling-title">Plastics</h3>
                <p class="recycling-description">Recycle plastic bottles, containers, and packaging materials to reduce environmental impact.</p>
                <div class="recycling-guidelines">
                    <h4>Acceptable Items:</h4>
                    <ul class="guidelines-list">
                        <li>PET bottles</li>
                        <li>HDPE containers</li>
                        <li>Plastic bags</li>
                        <li>Food containers</li>
                    </ul>
                </div>
                <button class="btn btn-primary">Learn More</button>
            </div>

            <div class="recycling-card">
                <div class="recycling-icon paper">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <h3 class="recycling-title">Paper & Cardboard</h3>
                <p class="recycling-description">Recycle paper, cardboard, newspapers, and magazines to save trees and reduce waste.</p>
                <div class="recycling-guidelines">
                    <h4>Acceptable Items:</h4>
                    <ul class="guidelines-list">
                        <li>Newspapers</li>
                        <li>Cardboard boxes</li>
                        <li>Office paper</li>
                        <li>Magazines</li>
                    </ul>
                </div>
                <button class="btn btn-primary">Learn More</button>
            </div>

            <div class="recycling-card">
                <div class="recycling-icon glass">
                    <span class="material-symbols-outlined">wine_bar</span>
                </div>
                <h3 class="recycling-title">Glass</h3>
                <p class="recycling-description">Recycle glass bottles, jars, and containers to reduce landfill waste and conserve resources.</p>
                <div class="recycling-guidelines">
                    <h4>Acceptable Items:</h4>
                    <ul class="guidelines-list">
                        <li>Glass bottles</li>
                        <li>Jars and containers</li>
                        <li>Window glass</li>
                        <li>Mirrors</li>
                    </ul>
                </div>
                <button class="btn btn-primary">Learn More</button>
            </div>

            <div class="recycling-card">
                <div class="recycling-icon metal">
                    <span class="material-symbols-outlined">construction</span>
                </div>
                <h3 class="recycling-title">Metals</h3>
                <p class="recycling-description">Recycle metal cans, appliances, and scrap metal to reduce mining and energy consumption.</p>
                <div class="recycling-guidelines">
                    <h4>Acceptable Items:</h4>
                    <ul class="guidelines-list">
                        <li>Aluminum cans</li>
                        <li>Steel cans</li>
                        <li>Copper wires</li>
                        <li>Scrap metal</li>
                    </ul>
                </div>
                <button class="btn btn-primary">Learn More</button>
            </div>

            <div class="recycling-card">
                <div class="recycling-icon organic">
                    <span class="material-symbols-outlined">compost</span>
                </div>
                <h3 class="recycling-title">Organic Waste</h3>
                <p class="recycling-description">Compost organic waste including food scraps, yard waste, and biodegradable materials.</p>
                <div class="recycling-guidelines">
                    <h4>Acceptable Items:</h4>
                    <ul class="guidelines-list">
                        <li>Food scraps</li>
                        <li>Yard waste</li>
                        <li>Leaves and grass</li>
                        <li>Biodegradable materials</li>
                    </ul>
                </div>
                <button class="btn btn-primary">Learn More</button>
            </div>

            <div class="recycling-card">
                <div class="recycling-icon electronic">
                    <span class="material-symbols-outlined">devices</span>
                </div>
                <h3 class="recycling-title">E-Waste</h3>
                <p class="recycling-description">Properly dispose of electronic waste including computers, phones, and batteries.</p>
                <div class="recycling-guidelines">
                    <h4>Acceptable Items:</h4>
                    <ul class="guidelines-list">
                        <li>Computers</li>
                        <li>Mobile phones</li>
                        <li>Batteries</li>
                        <li>Electronic devices</li>
                    </ul>
                </div>
                <button class="btn btn-primary">Learn More</button>
            </div>
        </div>
    </div>
</section>

<!-- Report Issue -->
<section class="report-issue-section" id="report-issue">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Report Sanitation Issue</h2>
            <p class="section-subtitle">Help keep Bamenda clean by reporting sanitation issues</p>
        </div>

        <div class="report-form">
            <form id="sanitationReportForm">
                <div class="form-section">
                    <h3 class="section-title">Issue Details</h3>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Issue Type *</label>
                            <select class="form-select" required>
                                <option value="">Select issue type</option>
                                <option value="missed-collection">Missed Collection</option>
                                <option value="illegal-dumping">Illegal Dumping</option>
                                <option value="overflowing-bin">Overflowing Bin</option>
                                <option value="street-cleaning">Street Cleaning</option>
                                <option value="drainage">Drainage Issue</option>
                                <option value="pest-control">Pest Control</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Priority *</label>
                            <select class="form-select" required>
                                <option value="">Select priority</option>
                                <option value="emergency">Emergency</option>
                                <option value="high">High</option>
                                <option value="medium">Medium</option>
                                <option value="low">Low</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Location *</label>
                        <input type="text" class="form-input" placeholder="Enter the specific location or address" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Description *</label>
                        <textarea class="form-textarea" rows="4" placeholder="Describe the sanitation issue in detail" required></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Upload Photo</label>
                        <input type="file" class="form-input" accept="image/*">
                        <small class="form-help">Upload a photo of the issue (optional but recommended)</small>
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
                    <button type="submit" class="btn btn-primary">Submit Report</button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Environmental Initiatives -->
<section class="environmental-initiatives-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Environmental Initiatives</h2>
            <p class="section-subtitle">Programs and initiatives to promote environmental sustainability</p>
        </div>

        <div class="initiatives-grid">
            <div class="initiative-card">
                <div class="initiative-icon">
                    <span class="material-symbols-outlined">park</span>
                </div>
                <h3 class="initiative-title">Green Spaces Development</h3>
                <p class="initiative-description">Creating and maintaining green spaces, parks, and recreational areas for environmental benefits.</p>
                <div class="initiative-stats">
                    <span class="stat-item">
                        <span class="stat-number">12</span>
                        <span class="stat-label">New Parks</span>
                    </span>
                    <span class="stat-item">
                        <span class="stat-number">5,000</span>
                        <span class="stat-label">Trees Planted</span>
                    </span>
                </div>
                <button class="btn btn-primary">Learn More</button>
            </div>

            <div class="initiative-card">
                <div class="initiative-icon">
                    <span class="material-symbols-outlined">water_drop</span>
                </div>
                <h3 class="initiative-title">Water Conservation</h3>
                <p class="initiative-description">Water conservation programs including rainwater harvesting and efficient water management.</p>
                <div class="initiative-stats">
                    <span class="stat-item">
                        <span class="stat-number">25%</span>
                        <span class="stat-label">Water Saved</span>
                    </span>
                    <span class="stat-item">
                        <span class="stat-number">50</span>
                        <span class="stat-label">Harvesting Systems</span>
                    </span>
                </div>
                <button class="btn btn-primary">Learn More</button>
            </div>

            <div class="initiative-card">
                <div class="initiative-icon">
                    <span class="material-symbols-outlined">energy_savings_leaf</span>
                </div>
                <h3 class="initiative-title">Clean Energy</h3>
                <p class="initiative-description">Promoting clean energy solutions including solar power and renewable energy sources.</p>
                <div class="initiative-stats">
                    <span class="stat-item">
                        <span class="stat-number">100</span>
                        <span class="stat-label">Solar Installations</span>
                    </span>
                    <span class="stat-item">
                        <span class="stat-number">30%</span>
                        <span class="stat-label">Clean Energy</span>
                    </span>
                </div>
                <button class="btn btn-primary">Learn More</button>
            </div>

            <div class="initiative-card">
                <div class="initiative-icon">
                    <span class="material-symbols-outlined">campaign</span>
                </div>
                <h3 class="initiative-title">Environmental Education</h3>
                <p class="initiative-description">Educational programs to raise awareness about environmental protection and sustainability.</p>
                <div class="initiative-stats">
                    <span class="stat-item">
                        <span class="stat-number">50</span>
                        <span class="stat-label">School Programs</span>
                    </span>
                    <span class="stat-item">
                        <span class="stat-number">10,000</span>
                        <span class="stat-label">People Reached</span>
                    </span>
                </div>
                <button class="btn btn-primary">Learn More</button>
            </div>
        </div>
    </div>
</section>

<?php
// Include footer
require_once __DIR__ . '/../../includes/footer.php';
?>

<style>
/* Sanitation Page Styles */
.sanitation-hero {
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-container) 100%);
}

/* Quick Sanitation Actions Section */
.quick-sanitation-actions-section {
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

/* Sanitation Statistics Section */
.sanitation-stats-section {
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

/* Waste Collection Section */
.waste-collection-section {
    padding: var(--spacing-3xl) 0;
}

.collection-filters {
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

.collection-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.collection-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.collection-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.collection-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.collection-icon {
    width: 3rem;
    height: 3rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
}

.collection-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.collection-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.collection-badge.residential {
    background-color: var(--primary);
    color: var(--on-primary);
}

.collection-badge.commercial {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.collection-badge.recycling {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.collection-badge.hazardous {
    background-color: var(--error);
    color: var(--on-error);
}

.collection-content {
    padding: var(--spacing-lg);
}

.collection-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.collection-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.collection-details {
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

.collection-schedule {
    margin-bottom: var(--spacing-lg);
}

.collection-schedule h4 {
    font-size: 1rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.schedule-list {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-sm);
}

.schedule-day {
    background-color: var(--surface-container);
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.collection-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Collection Schedule Section */
.collection-schedule-section {
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

.schedule-calendar {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
}

.calendar-legend {
    display: flex;
    justify-content: center;
    gap: var(--spacing-lg);
    margin-bottom: var(--spacing-xl);
    flex-wrap: wrap;
}

.legend-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    font-size: 0.875rem;
}

.legend-dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
}

.legend-dot.regular {
    background-color: var(--primary);
}

.legend-dot.recycling {
    background-color: var(--tertiary);
}

.legend-dot.special {
    background-color: var(--secondary);
}

.week-schedule {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: var(--spacing-lg);
}

.day-schedule {
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
    padding: var(--spacing-lg);
}

.day-header {
    text-align: center;
    margin-bottom: var(--spacing-md);
}

.day-header h4 {
    color: var(--primary);
    margin: 0;
    font-weight: 700;
}

.day-content {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
}

.collection-item {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xs);
    padding: var(--spacing-sm);
    border-radius: var(--radius-md);
    font-size: 0.75rem;
}

.collection-item.regular {
    background-color: var(--primary-container);
    color: var(--on-primary-container);
}

.collection-item.recycling {
    background-color: var(--tertiary-container);
    color: var(--on-tertiary-container);
}

.collection-item.special {
    background-color: var(--secondary-container);
    color: var(--on-secondary-container);
}

.collection-time {
    font-weight: 600;
}

.collection-service {
    font-size: 0.75rem;
}

.no-collection {
    text-align: center;
    color: var(--on-surface-variant);
    font-style: italic;
    padding: var(--spacing-sm);
}

/* Recycling Program Section */
.recycling-program-section {
    padding: var(--spacing-3xl) 0;
}

.recycling-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.recycling-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.recycling-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.recycling-icon {
    width: 4rem;
    height: 4rem;
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-lg);
}

.recycling-icon.plastics {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.recycling-icon.paper {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.recycling-icon.glass {
    background-color: var(--primary);
    color: var(--on-primary);
}

.recycling-icon.metal {
    background-color: var(--outline);
    color: var(--on-surface);
}

.recycling-icon.organic {
    background-color: var(--error);
    color: var(--on-error);
}

.recycling-icon.electronic {
    background-color: var(--primary-container);
    color: var(--on-primary-container);
}

.recycling-icon .material-symbols-outlined {
    font-size: 2rem;
}

.recycling-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.recycling-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.recycling-guidelines {
    text-align: left;
    margin-bottom: var(--spacing-lg);
}

.recycling-guidelines h4 {
    font-size: 1rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.guidelines-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.guidelines-list li {
    padding: var(--spacing-xs) 0;
    color: var(--on-surface-variant);
    font-size: 0.875rem;
    position: relative;
    padding-left: var(--spacing-lg);
}

.guidelines-list li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--tertiary);
    font-weight: 700;
}

/* Report Issue Section */
.report-issue-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.report-form {
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

/* Environmental Initiatives Section */
.environmental-initiatives-section {
    padding: var(--spacing-3xl) 0;
}

.initiatives-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.initiative-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.initiative-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.initiative-icon {
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

.initiative-icon .material-symbols-outlined {
    font-size: 2rem;
}

.initiative-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.initiative-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.initiative-stats {
    display: flex;
    justify-content: space-around;
    margin-bottom: var(--spacing-lg);
}

.stat-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: var(--spacing-xs);
}

.stat-number {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
}

.stat-label {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
    text-transform: uppercase;
}

/* Responsive Design */
@media (max-width: 768px) {
    .quick-actions-grid {
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: var(--spacing-lg);
    }
    
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: var(--spacing-md);
    }
    
    .filter-row {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .collection-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .control-row {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .week-schedule {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .recycling-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .initiatives-grid {
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
    
    .collection-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .recycling-card {
        padding: var(--spacing-lg);
    }
    
    .recycling-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .recycling-icon .material-symbols-outlined {
        font-size: 1.5rem;
    }
    
    .report-form {
        padding: var(--spacing-lg);
    }
    
    .initiative-card {
        padding: var(--spacing-lg);
    }
    
    .initiative-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .initiative-icon .material-symbols-outlined {
        font-size: 1.5rem;
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
    
    .calendar-legend {
        flex-direction: column;
        align-items: center;
        gap: var(--spacing-sm);
    }
}
</style>

<script>
// Collection filtering
function filterCollection() {
    const type = document.getElementById('collectionType').value;
    const area = document.getElementById('collectionArea').value;
    const waste = document.getElementById('wasteType').value;
    
    // In production, this would filter the collection services
    alert(`Filtering collection services by: ${type || 'All Types'}, ${area || 'All Areas'}, ${waste || 'All Waste Types'}`);
}

// Quick action functions
function emergencyCleanup() {
    alert('Emergency cleanup service: Call 119 for immediate sanitation assistance');
}

function scheduleCollection() {
    alert('Special collection scheduling would open here. In production, this would show a booking form.');
}

function collectionSchedule() {
    document.getElementById('collection-schedule').scrollIntoView({ behavior: 'smooth' });
}

function recyclingInfo() {
    document.getElementById('recycling-program').scrollIntoView({ behavior: 'smooth' });
}

function compostingGuide() {
    alert('Composting guide would open here. In production, this would show detailed composting instructions.');
}

function sanitationReport() {
    alert('Sanitation performance report would be displayed here. In production, this would show detailed statistics.');
}

// Collection schedule update
function updateCollectionSchedule() {
    const area = document.getElementById('scheduleAreaSelect').value;
    const service = document.getElementById('scheduleService').value;
    
    // In production, this would update the schedule based on selection
    alert(`Updating schedule for: ${area || 'All Areas'}, ${service || 'All Services'}`);
}

// Collection actions
document.querySelectorAll('.collection-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Schedule')) {
        button.addEventListener('click', function() {
            const collectionTitle = this.closest('.collection-card').querySelector('.collection-title').textContent;
            alert(`Viewing detailed schedule for: "${collectionTitle}"`);
        });
    }
});

document.querySelectorAll('.collection-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Request')) {
        button.addEventListener('click', function() {
            const collectionTitle = this.closest('.collection-card').querySelector('.collection-title').textContent;
            alert(`Service request form for: "${collectionTitle}"`);
        });
    }
    
    if (button.textContent.includes('Book')) {
        button.addEventListener('click', function() {
            alert('Hazardous waste booking form would open here. In production, this would show special booking interface.');
        });
    }
    
    if (button.textContent.includes('Guidelines')) {
        button.addEventListener('click', function() {
            alert('Hazardous waste disposal guidelines would be displayed here.');
        });
    }
});

// Recycling actions
document.querySelectorAll('.recycling-card .btn-primary').forEach(button => {
    if (button.textContent.includes('Learn More')) {
        button.addEventListener('click', function() {
            const recyclingTitle = this.closest('.recycling-card').querySelector('.recycling-title').textContent;
            alert(`More information about: "${recyclingTitle}" recycling`);
        });
    }
});

// Initiative actions
document.querySelectorAll('.initiative-card .btn-primary').forEach(button => {
    if (button.textContent.includes('Learn More')) {
        button.addEventListener('click', function() {
            const initiativeTitle = this.closest('.initiative-card').querySelector('.initiative-title').textContent;
            alert(`More information about: "${initiativeTitle}" initiative`);
        });
    }
});

// Report form submission
document.getElementById('sanitationReportForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Sanitation issue report submitted successfully! We will address the issue promptly.');
    // In production, this would submit the report
});

// Auto-refresh collection schedule
function refreshCollectionSchedule() {
    // In production, this would fetch real-time schedule data
    console.log('Refreshing collection schedule...');
}

// Refresh schedule every 5 minutes
setInterval(refreshCollectionSchedule, 300000);
</script>
