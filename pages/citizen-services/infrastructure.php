<?php
/**
 * Bamenda City Council E-Governance Platform
 * Infrastructure Development Page
 */

// Set page metadata
$page_title = 'Infrastructure Development | Bamenda City Council';
$page_description = 'Track infrastructure projects, road development, and public works in Bamenda.';
$page_keywords = 'infrastructure, public works, road development, construction, Bamenda infrastructure';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Services', 'url' => 'services.php'],
    ['title' => 'Infrastructure', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero infrastructure-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-government-building.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Infrastructure</span>
            <h1 class="hero-title">Building Bamenda's Future</h1>
            <p class="hero-subtitle">
                Track infrastructure development projects, road construction, and public works that are shaping Bamenda's growth.
            </p>
            <div class="hero-actions">
                <a href="#current-projects" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">construction</span>
                    View Projects
                </a>
                <a href="#project-tracker" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">insights</span>
                    Track Progress
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Project Statistics -->
<section class="project-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">engineering</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">24</div>
                    <div class="stat-label">Active Projects</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+4 this quarter</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">straighten</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">156 km</div>
                    <div class="stat-label">Roads Completed</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+23 km this year</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">water_drop</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">87%</div>
                    <div class="stat-label">Water Coverage</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+12% improvement</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">power</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">92%</div>
                    <div class="stat-label">Electricity Access</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+8% improvement</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Current Projects -->
<section class="current-projects-section" id="current-projects">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Current Projects</h2>
            <p class="section-subtitle">Major infrastructure developments underway in Bamenda</p>
        </div>

        <div class="projects-filter">
            <div class="filter-row">
                <div class="form-group">
                    <label class="form-label">Project Type</label>
                    <select class="form-select" id="projectType">
                        <option value="">All Projects</option>
                        <option value="roads">Road Construction</option>
                        <option value="water">Water Supply</option>
                        <option value="electricity">Electricity</option>
                        <option value="buildings">Public Buildings</option>
                        <option value="parks">Parks & Recreation</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Status</label>
                    <select class="form-select" id="projectStatus">
                        <option value="">All Status</option>
                        <option value="planning">Planning</option>
                        <option value="in-progress">In Progress</option>
                        <option value="near-completion">Near Completion</option>
                        <option value="completed">Completed</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Location</label>
                    <select class="form-select" id="projectLocation">
                        <option value="">All Locations</option>
                        <option value="city-center">City Center</option>
                        <option value="nkwen">Nkwen</option>
                        <option value="mankon">Mankon</option>
                        <option value="bambili">Bambili</option>
                        <option value="bambui">Bambui</option>
                    </select>
                </div>
                <button class="btn btn-primary" onclick="filterProjects()">Filter</button>
            </div>
        </div>

        <div class="projects-grid">
            <!-- Bamenda Ring Road Project -->
            <div class="project-card">
                <div class="project-header">
                    <div class="project-image">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                             alt="Bamenda Ring Road construction showing workers and heavy machinery">
                        <div class="project-status in-progress">In Progress</div>
                    </div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">Bamenda Ring Road Project</h3>
                    <p class="project-description">Major ring road construction to improve traffic flow and connect all major areas of Bamenda.</p>
                    <div class="project-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">straighten</span>
                            <span>Length: 45 km</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Budget: ₣2.5 Billion</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 18 months</span>
                        </div>
                    </div>
                    <div class="project-progress">
                        <div class="progress-header">
                            <span class="progress-label">Progress</span>
                            <span class="progress-percentage">65%</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 65%"></div>
                        </div>
                        <div class="progress-details">
                            <span>Started: Jan 2024</span>
                            <span>Expected: Jun 2025</span>
                        </div>
                    </div>
                    <div class="project-actions">
                        <button class="btn btn-sm btn-primary">View Details</button>
                        <button class="btn btn-sm btn-outline">Track Progress</button>
                    </div>
                </div>
            </div>

            <!-- Nkwen Water Supply Project -->
            <div class="project-card">
                <div class="project-header">
                    <div class="project-image">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                             alt="Water supply infrastructure showing water treatment plant and pipelines">
                        <div class="project-status near-completion">Near Completion</div>
                    </div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">Nkwen Water Supply Enhancement</h3>
                    <p class="project-description">Upgrading water supply infrastructure to serve 50,000 additional residents in Nkwen area.</p>
                    <div class="project-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>Beneficiaries: 50,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Budget: ₣850 Million</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 12 months</span>
                        </div>
                    </div>
                    <div class="project-progress">
                        <div class="progress-header">
                            <span class="progress-label">Progress</span>
                            <span class="progress-percentage">85%</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 85%"></div>
                        </div>
                        <div class="progress-details">
                            <span>Started: Apr 2023</span>
                            <span>Expected: Apr 2024</span>
                        </div>
                    </div>
                    <div class="project-actions">
                        <button class="btn btn-sm btn-primary">View Details</button>
                        <button class="btn btn-sm btn-outline">Track Progress</button>
                    </div>
                </div>
            </div>

            <!-- City Market Renovation -->
            <div class="project-card">
                <div class="project-header">
                    <div class="project-image">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                             alt="City market renovation showing modern market facilities and improved infrastructure">
                        <div class="project-status in-progress">In Progress</div>
                    </div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">City Market Modernization</h3>
                    <p class="project-description">Complete renovation of Bamenda Central Market with modern facilities and improved infrastructure.</p>
                    <div class="project-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">store</span>
                            <span>Stalls: 500+</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Budget: ₣1.2 Billion</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 15 months</span>
                        </div>
                    </div>
                    <div class="project-progress">
                        <div class="progress-header">
                            <span class="progress-label">Progress</span>
                            <span class="progress-percentage">45%</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 45%"></div>
                        </div>
                        <div class="progress-details">
                            <span>Started: Oct 2023</span>
                            <span>Expected: Jan 2025</span>
                        </div>
                    </div>
                    <div class="project-actions">
                        <button class="btn btn-sm btn-primary">View Details</button>
                        <button class="btn btn-sm btn-outline">Track Progress</button>
                    </div>
                </div>
            </div>

            <!-- Public Transport Hub -->
            <div class="project-card">
                <div class="project-header">
                    <div class="project-image">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                             alt="Public transport hub showing modern bus station and transport facilities">
                        <div class="project-status planning">Planning</div>
                    </div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">Integrated Transport Hub</h3>
                    <p class="project-description">Modern transport hub integrating bus, taxi, and future railway services for seamless connectivity.</p>
                    <div class="project-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">directions_bus</span>
                            <span>Capacity: 10,000 daily</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Budget: ₣1.8 Billion</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 24 months</span>
                        </div>
                    </div>
                    <div class="project-progress">
                        <div class="progress-header">
                            <span class="progress-label">Progress</span>
                            <span class="progress-percentage">15%</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 15%"></div>
                        </div>
                        <div class="progress-details">
                            <span>Planning: Completed</span>
                            <span>Construction: Jul 2024</span>
                        </div>
                    </div>
                    <div class="project-actions">
                        <button class="btn btn-sm btn-primary">View Details</button>
                        <button class="btn btn-sm btn-outline">Track Progress</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="load-more-container">
            <button class="btn btn-outline" onclick="loadMoreProjects()">Load More Projects</button>
        </div>
    </div>
</section>

<!-- Project Tracker -->
<section class="project-tracker-section" id="project-tracker">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Infrastructure Tracker</h2>
            <p class="section-subtitle">Real-time monitoring of infrastructure development progress</p>
        </div>

        <div class="tracker-dashboard">
            <div class="tracker-overview">
                <div class="overview-card">
                    <h3 class="overview-title">Overall Progress</h3>
                    <div class="circular-progress">
                        <svg class="progress-ring" width="120" height="120">
                            <circle class="progress-ring-background" stroke="#e0e0e0" stroke-width="8" fill="transparent" r="52" cx="60" cy="60"/>
                            <circle class="progress-ring-fill" stroke="#004d27" stroke-width="8" fill="transparent" r="52" cx="60" cy="60" stroke-dasharray="326.73" stroke-dashoffset="98.02"/>
                        </svg>
                        <div class="progress-text">70%</div>
                    </div>
                    <p class="overview-description">17 of 24 projects on schedule</p>
                </div>

                <div class="overview-card">
                    <h3 class="overview-title">Budget Utilization</h3>
                    <div class="budget-stats">
                        <div class="budget-item">
                            <span class="budget-label">Allocated</span>
                            <span class="budget-value">₣8.5B</span>
                        </div>
                        <div class="budget-item">
                            <span class="budget-label">Spent</span>
                            <span class="budget-value">₣5.9B</span>
                        </div>
                        <div class="budget-item">
                            <span class="budget-label">Remaining</span>
                            <span class="budget-value">₣2.6B</span>
                        </div>
                    </div>
                    <div class="budget-progress">
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 69%"></div>
                        </div>
                        <span class="budget-percentage">69% Used</span>
                    </div>
                </div>

                <div class="overview-card">
                    <h3 class="overview-title">Timeline</h3>
                    <div class="timeline-stats">
                        <div class="timeline-item">
                            <span class="timeline-label">On Schedule</span>
                            <span class="timeline-value">17 Projects</span>
                        </div>
                        <div class="timeline-item">
                            <span class="timeline-label">Delayed</span>
                            <span class="timeline-value">4 Projects</span>
                        </div>
                        <div class="timeline-item">
                            <span class="timeline-label">Ahead</span>
                            <span class="timeline-value">3 Projects</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tracker-map">
                <h3 class="map-title">Project Locations</h3>
                <div class="map-container">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                         alt="Map of Bamenda showing infrastructure project locations">
                    <div class="map-legend">
                        <div class="legend-item">
                            <span class="legend-icon in-progress"></span>
                            <span>In Progress</span>
                        </div>
                        <div class="legend-item">
                            <span class="legend-icon planning"></span>
                            <span>Planning</span>
                        </div>
                        <div class="legend-item">
                            <span class="legend-icon completed"></span>
                            <span>Completed</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Infrastructure Services -->
<section class="infrastructure-services-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Infrastructure Services</h2>
            <p class="section-subtitle">Public works and infrastructure maintenance services</p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">straighten</span>
                </div>
                <h3 class="service-title">Road Maintenance</h3>
                <p class="service-description">Regular road maintenance, pothole repairs, and street cleaning services.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>24/7 Emergency Repairs</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Regular Maintenance</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Street Lighting</span>
                    </div>
                </div>
                <button class="btn btn-primary">Request Service</button>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">water_drop</span>
                </div>
                <h3 class="service-title">Water Supply</h3>
                <p class="service-description">Water pipeline maintenance, leak detection, and water quality monitoring.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Pipeline Repairs</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Leak Detection</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Quality Testing</span>
                    </div>
                </div>
                <button class="btn btn-primary">Request Service</button>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">power</span>
                </div>
                <h3 class="service-title">Electrical Services</h3>
                <p class="service-description">Street lighting maintenance, electrical repairs, and power infrastructure support.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Street Lighting</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Electrical Repairs</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Infrastructure Support</span>
                    </div>
                </div>
                <button class="btn btn-primary">Request Service</button>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">cleaning_services</span>
                </div>
                <h3 class="service-title">Sanitation Services</h3>
                <p class="service-description">Waste collection, drainage maintenance, and environmental sanitation services.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Waste Collection</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Drainage Cleaning</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Environmental Services</span>
                    </div>
                </div>
                <button class="btn btn-primary">Request Service</button>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">park</span>
                </div>
                <h3 class="service-title">Parks & Recreation</h3>
                <p class="service-description">Park maintenance, playground safety checks, and recreational facility upkeep.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Park Maintenance</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Playground Safety</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Facility Upkeep</span>
                    </div>
                </div>
                <button class="btn btn-primary">Request Service</button>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">report_problem</span>
                </div>
                <h3 class="service-title">Issue Reporting</h3>
                <p class="service-description">Report infrastructure issues, track complaints, and monitor resolution progress.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Issue Reporting</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Complaint Tracking</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Resolution Monitoring</span>
                    </div>
                </div>
                <button class="btn btn-primary">Report Issue</button>
            </div>
        </div>
    </div>
</section>

<!-- Service Request -->
<section class="service-request-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Request Infrastructure Service</h2>
            <p class="section-subtitle">Report issues and request maintenance services</p>
        </div>

        <div class="request-form">
            <form id="serviceRequestForm">
                <div class="form-section">
                    <h3 class="section-title">Service Details</h3>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Service Type *</label>
                            <select class="form-select" required>
                                <option value="">Select service type</option>
                                <option value="road">Road Maintenance</option>
                                <option value="water">Water Supply Issue</option>
                                <option value="electrical">Electrical Problem</option>
                                <option value="sanitation">Sanitation Issue</option>
                                <option value="park">Park Maintenance</option>
                                <option value="other">Other</option>
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
                        <textarea class="form-textarea" rows="4" placeholder="Describe the issue in detail" required></textarea>
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
                        <label class="form-label">Preferred Contact Time</label>
                        <select class="form-select">
                            <option value="">Any time</option>
                            <option value="morning">Morning (8AM-12PM)</option>
                            <option value="afternoon">Afternoon (12PM-5PM)</option>
                            <option value="evening">Evening (5PM-8PM)</option>
                        </select>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="reset" class="btn btn-outline">Reset</button>
                    <button type="submit" class="btn btn-primary">Submit Request</button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Development Plans -->
<section class="development-plans-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Future Development Plans</h2>
            <p class="section-subtitle">Upcoming infrastructure projects and long-term development vision</p>
        </div>

        <div class="plans-timeline">
            <div class="timeline-item">
                <div class="timeline-marker">
                    <span class="material-symbols-outlined">flag</span>
                </div>
                <div class="timeline-content">
                    <h3 class="timeline-title">2024-2025: Major Road Network Expansion</h3>
                    <p class="timeline-description">Expansion of major road networks including the Bamenda Ring Road and connecting highways to neighboring towns.</p>
                    <div class="timeline-meta">
                        <span class="timeline-budget">Budget: ₣3.2 Billion</span>
                        <span class="timeline-duration">Duration: 24 months</span>
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-marker">
                    <span class="material-symbols-outlined">flag</span>
                </div>
                <div class="timeline-content">
                    <h3 class="timeline-title">2025-2026: Smart City Infrastructure</h3>
                    <p class="timeline-description">Implementation of smart city technologies including traffic management systems and digital infrastructure.</p>
                    <div class="timeline-meta">
                        <span class="timeline-budget">Budget: ₣1.8 Billion</span>
                        <span class="timeline-duration">Duration: 18 months</span>
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-marker">
                    <span class="material-symbols-outlined">flag</span>
                </div>
                <div class="timeline-content">
                    <h3 class="timeline-title">2026-2027: Public Transport System</h3>
                    <p class="timeline-description">Development of comprehensive public transport system with bus routes, taxi stands, and future railway connectivity.</p>
                    <div class="timeline-meta">
                        <span class="timeline-budget">Budget: ₣2.5 Billion</span>
                        <span class="timeline-duration">Duration: 24 months</span>
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-marker">
                    <span class="material-symbols-outlined">flag</span>
                </div>
                <div class="timeline-content">
                    <h3 class="timeline-title">2027-2028: Green Infrastructure</h3>
                    <p class="timeline-description">Development of green spaces, parks, and environmental infrastructure to support sustainable urban growth.</p>
                    <div class="timeline-meta">
                        <span class="timeline-budget">Budget: ₣1.2 Billion</span>
                        <span class="timeline-duration">Duration: 18 months</span>
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
/* Infrastructure Page Styles */
.infrastructure-hero {
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-container) 100%);
}

/* Project Statistics Section */
.project-stats-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
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

/* Current Projects Section */
.current-projects-section {
    padding: var(--spacing-3xl) 0;
}

.projects-filter {
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

.projects-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.project-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    overflow: hidden;
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.project-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.project-header {
    position: relative;
}

.project-image {
    height: 200px;
    overflow: hidden;
}

.project-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.project-status {
    position: absolute;
    top: var(--spacing-lg);
    right: var(--spacing-lg);
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.project-status.in-progress {
    background-color: var(--primary);
    color: var(--on-primary);
}

.project-status.near-completion {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.project-status.planning {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.project-content {
    padding: var(--spacing-lg);
}

.project-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.project-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.project-details {
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

.project-progress {
    margin-bottom: var(--spacing-lg);
}

.progress-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: var(--spacing-xs);
}

.progress-label {
    font-weight: 600;
    color: var(--on-surface);
}

.progress-percentage {
    font-weight: 700;
    color: var(--primary);
}

.progress-bar {
    height: 8px;
    background-color: var(--surface-container);
    border-radius: var(--radius-full);
    overflow: hidden;
    margin-bottom: var(--spacing-xs);
}

.progress-fill {
    height: 100%;
    background-color: var(--tertiary);
    transition: width 0.3s ease;
}

.progress-details {
    display: flex;
    justify-content: space-between;
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.project-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Project Tracker Section */
.project-tracker-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.tracker-dashboard {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--spacing-xl);
}

.overview-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
}

.overview-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
}

.circular-progress {
    position: relative;
    margin: 0 auto var(--spacing-lg);
}

.progress-ring {
    transform: rotate(-90deg);
}

.progress-ring-fill {
    transition: stroke-dashoffset 0.3s ease;
}

.progress-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 1.5rem;
    font-weight: 800;
    color: var(--primary);
}

.overview-description {
    color: var(--on-surface-variant);
    margin-top: var(--spacing-md);
}

.budget-stats {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

.budget-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.budget-label {
    font-weight: 500;
    color: var(--on-surface-variant);
}

.budget-value {
    font-weight: 700;
    color: var(--primary);
}

.budget-progress {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
}

.budget-percentage {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.timeline-stats {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
}

.timeline-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.timeline-label {
    font-weight: 500;
    color: var(--on-surface-variant);
}

.timeline-value {
    font-weight: 700;
    color: var(--primary);
}

.tracker-map {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
}

.map-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
}

.map-container {
    position: relative;
    border-radius: var(--radius-md);
    overflow: hidden;
}

.map-container img {
    width: 100%;
    height: 300px;
    object-fit: cover;
}

.map-legend {
    position: absolute;
    bottom: var(--spacing-lg);
    right: var(--spacing-lg);
    background-color: rgba(255, 255, 255, 0.9);
    padding: var(--spacing-sm);
    border-radius: var(--radius-md);
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xs);
}

.legend-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    font-size: 0.75rem;
}

.legend-icon {
    width: 12px;
    height: 12px;
    border-radius: 50%;
}

.legend-icon.in-progress {
    background-color: var(--primary);
}

.legend-icon.planning {
    background-color: var(--secondary);
}

.legend-icon.completed {
    background-color: var(--tertiary);
}

/* Infrastructure Services Section */
.infrastructure-services-section {
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

/* Service Request Section */
.service-request-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.request-form {
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

/* Development Plans Section */
.development-plans-section {
    padding: var(--spacing-3xl) 0;
}

.plans-timeline {
    max-width: 800px;
    margin: 0 auto;
    position: relative;
}

.plans-timeline::before {
    content: '';
    position: absolute;
    left: 2rem;
    top: 0;
    bottom: 0;
    width: 2px;
    background-color: var(--outline-variant);
}

.timeline-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: var(--spacing-2xl);
    position: relative;
}

.timeline-marker {
    width: 3rem;
    height: 3rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    z-index: 2;
    flex-shrink: 0;
    margin: 0 var(--spacing-lg) 0 0;
}

.timeline-marker .material-symbols-outlined {
    font-size: 1.5rem;
}

.timeline-content {
    flex: 1;
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
}

.timeline-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.timeline-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-md);
}

.timeline-meta {
    display: flex;
    gap: var(--spacing-lg);
    font-size: 0.875rem;
}

.timeline-budget {
    font-weight: 600;
    color: var(--primary);
}

.timeline-duration {
    color: var(--on-surface-variant);
}

/* Responsive Design */
@media (max-width: 768px) {
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: var(--spacing-md);
    }
    
    .filter-row {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .projects-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .tracker-dashboard {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .services-grid {
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
    .stats-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .stat-card {
        grid-template-columns: 1fr;
        text-align: center;
        gap: var(--spacing-md);
    }
    
    .project-card {
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
    
    .request-form {
        padding: var(--spacing-lg);
    }
    
    .overview-card {
        padding: var(--spacing-lg);
    }
    
    .progress-text {
        font-size: 1.25rem;
    }
    
    .timeline-item {
        flex-direction: column;
        align-items: flex-start;
        gap: var(--spacing-md);
    }
    
    .timeline-marker {
        margin: 0 0 var(--spacing-md) 0;
    }
    
    .timeline-content {
        width: 100%;
    }
}
</style>

<script>
// Project filtering
function filterProjects() {
    const type = document.getElementById('projectType').value;
    const status = document.getElementById('projectStatus').value;
    const location = document.getElementById('projectLocation').value;
    
    // In production, this would filter the projects
    alert(`Filtering projects by: ${type || 'All Types'}, ${status || 'All Status'}, ${location || 'All Locations'}`);
}

// Load more projects
function loadMoreProjects() {
    // In production, this would load more projects from the server
    alert('Loading more projects...');
}

// Project actions
document.querySelectorAll('.project-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Details')) {
        button.addEventListener('click', function() {
            const projectTitle = this.closest('.project-card').querySelector('.project-title').textContent;
            alert(`Detailed view for: "${projectTitle}"`);
        });
    }
});

document.querySelectorAll('.project-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Track')) {
        button.addEventListener('click', function() {
            const projectTitle = this.closest('.project-card').querySelector('.project-title').textContent;
            alert(`Tracking progress for: "${projectTitle}"`);
        });
    }
});

// Service actions
document.querySelectorAll('.service-card .btn-primary').forEach(button => {
    if (button.textContent.includes('Request')) {
        button.addEventListener('click', function() {
            const serviceTitle = this.closest('.service-card').querySelector('.service-title').textContent;
            alert(`Service request form for: "${serviceTitle}"`);
        });
    }
});

// Service request form submission
document.getElementById('serviceRequestForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Service request submitted successfully! You will receive a confirmation call shortly.');
    // In production, this would submit the service request
});

// Progress animation on scroll
window.addEventListener('scroll', function() {
    const progressBars = document.querySelectorAll('.progress-fill');
    progressBars.forEach(bar => {
        const rect = bar.getBoundingClientRect();
        const isVisible = rect.top < window.innerHeight && rect.bottom > 0;
        if (isVisible) {
            const width = bar.style.width;
            bar.style.width = '0';
            setTimeout(() => {
                bar.style.width = width;
            }, 100);
        }
    });
});
</script>
