<?php
/**
 * Bamenda City Council E-Governance Platform
 * Emergency Resources Page
 */

// Set page metadata
$page_title = 'Emergency Resources | Bamenda City Council';
$page_description = 'Access comprehensive emergency resources, safety guides, emergency preparedness materials, and disaster response information for Bamenda residents.';
$page_keywords = 'emergency resources, safety guides, disaster preparedness, emergency kits, Bamenda emergency information';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Emergency', 'url' => '../index.php'],
    ['title' => 'Safety Resources', 'url' => '#']
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
            <span class="badge badge-tertiary">Emergency Resources</span>
            <h1 class="hero-title">Safety Resources & Guides</h1>
            <p class="hero-subtitle">
                Comprehensive emergency resources including safety guides, preparedness materials, emergency kits, disaster response information, and educational resources for community safety and resilience.
            </p>
            <div class="hero-actions">
                <a href="#safety-guides" class="btn btn-lg btn-tertiary">
                    <span class="material-symbols-outlined">menu_book</span>
                    Safety Guides
                </a>
                <a href="#emergency-kits" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">medical_information</span>
                    Emergency Kits
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Resource Actions</h2>
            <p class="section-subtitle">Quick access to emergency resources</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openSafetyGuides()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">menu_book</span>
                </div>
                <h3 class="action-title">Safety Guides</h3>
                <p class="action-description">Emergency procedures</p>
            </div>

            <div class="action-card" onclick="openEmergencyKits()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">medical_information</span>
                </div>
                <h3 class="action-title">Emergency Kits</h3>
                <p class="action-description">Preparedness supplies</p>
            </div>

            <div class="action-card" onclick="openTraining()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <h3 class="action-title">Training Programs</h3>
                <p class="action-description">Emergency training</p>
            </div>

            <div class="action-card" onclick="openMaps()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">map</span>
                </div>
                <h3 class="action-title">Emergency Maps</h3>
                <p class="action-description">Safety locations</p>
            </div>

            <div class="action-card" onclick="openVideos()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">play_circle</span>
                </div>
                <h3 class="action-title">Video Tutorials</h3>
                <p class="action-description">Visual guides</p>
            </div>

            <div class="action-card" onclick="openDownloads()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">download</span>
                </div>
                <h3 class="action-title">Downloads</h3>
                <p class="action-description">Printable resources</p>
            </div>
        </div>
    </div>
</section>

<!-- Resources Statistics -->
<section class="resources-stats-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Resources Overview</h2>
            <p class="section-subtitle">Available emergency resources</p>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">menu_book</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">156</div>
                    <div class="stat-label">Safety Guides</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+12 new guides</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">medical_information</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">45</div>
                    <div class="stat-label">Emergency Kit Types</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+8 kit types</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">234</div>
                    <div class="stat-label">Training Sessions</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+67 sessions</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">map</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">89</div>
                    <div class="stat-label">Emergency Maps</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+15 maps</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">play_circle</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">345</div>
                    <div class="stat-label">Video Tutorials</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+89 videos</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">download</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">12,345</div>
                    <div class="stat-label">Downloads</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+2,345 downloads</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Safety Guides -->
<section class="safety-guides-section" id="safety-guides">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Safety Guides</h2>
            <p class="section-subtitle">Comprehensive emergency safety procedures</p>
        </div>

        <div class="guides-grid">
            <!-- Fire Safety -->
            <div class="guide-card">
                <div class="guide-header">
                    <div class="guide-icon">
                        <span class="material-symbols-outlined">local_fire_department</span>
                    </div>
                    <div class="guide-badge critical">Critical</div>
                </div>
                <div class="guide-content">
                    <h3 class="guide-title">Fire Safety Guide</h3>
                    <p class="guide-description">Complete fire safety procedures including prevention, evacuation, and response protocols for home and workplace fires.</p>
                    <div class="guide-topics">
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Fire Prevention Tips</span>
                        </div>
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Evacuation Procedures</span>
                        </div>
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Fire Extinguisher Use</span>
                        </div>
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Emergency Exits</span>
                        </div>
                    </div>
                    <div class="guide-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">menu_book</span>
                            <span>25 pages</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">translate</span>
                            <span>English & French</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">update</span>
                            <span>Updated: Dec 2024</span>
                        </div>
                    </div>
                    <div class="guide-actions">
                        <button class="btn btn-sm btn-primary">View Guide</button>
                        <button class="btn btn-sm btn-outline">Download PDF</button>
                    </div>
                </div>
            </div>

            <!-- Flood Safety -->
            <div class="guide-card">
                <div class="guide-header">
                    <div class="guide-icon">
                        <span class="material-symbols-outlined">water</span>
                    </div>
                    <div class="guide-badge urgent">Urgent</div>
                </div>
                <div class="guide-content">
                    <h3 class="guide-title">Flood Safety Guide</h3>
                    <p class="guide-description">Essential flood safety information including early warning signs, evacuation routes, and post-flood recovery procedures.</p>
                    <div class="guide-topics">
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Flood Warning Signs</span>
                        </div>
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Evacuation Planning</span>
                        </div>
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Emergency Supplies</span>
                        </div>
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Post-Flood Safety</span>
                        </div>
                    </div>
                    <div class="guide-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">menu_book</span>
                            <span>30 pages</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">translate</span>
                            <span>English & French</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">update</span>
                            <span>Updated: Dec 2024</span>
                        </div>
                    </div>
                    <div class="guide-actions">
                        <button class="btn btn-sm btn-primary">View Guide</button>
                        <button class="btn btn-sm btn-outline">Download PDF</button>
                    </div>
                </div>
            </div>

            <!-- Earthquake Safety -->
            <div class="guide-card">
                <div class="guide-header">
                    <div class="guide-icon">
                        <span class="material-symbols-outlined">vibration</span>
                    </div>
                    <div class="guide-badge important">Important</div>
                </div>
                <div class="guide-content">
                    <h3 class="guide-title">Earthquake Safety Guide</h3>
                    <p class="guide-description">Comprehensive earthquake safety procedures including drop, cover, and hold techniques, building safety, and recovery steps.</p>
                    <div class="guide-topics">
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Drop, Cover, Hold</span>
                        </div>
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Building Safety</span>
                        </div>
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Emergency Supplies</span>
                        </div>
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Post-Quake Safety</span>
                        </div>
                    </div>
                    <div class="guide-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">menu_book</span>
                            <span>28 pages</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">translate</span>
                            <span>English & French</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">update</span>
                            <span>Updated: Dec 2024</span>
                        </div>
                    </div>
                    <div class="guide-actions">
                        <button class="btn btn-sm btn-primary">View Guide</button>
                        <button class="btn btn-sm btn-outline">Download PDF</button>
                    </div>
                </div>
            </div>

            <!-- Medical Emergency -->
            <div class="guide-card">
                <div class="guide-header">
                    <div class="guide-icon">
                        <span class="material-symbols-outlined">medical_services</span>
                    </div>
                    <div class="guide-badge essential">Essential</div>
                </div>
                <div class="guide-content">
                    <h3 class="guide-title">Medical Emergency Guide</h3>
                    <p class="guide-description">Essential medical emergency procedures including first aid, CPR, and emergency response for common medical situations.</p>
                    <div class="guide-topics">
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Basic First Aid</span>
                        </div>
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>CPR Procedures</span>
                        </div>
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Emergency Calls</span>
                        </div>
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Medical Supplies</span>
                        </div>
                    </div>
                    <div class="guide-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">menu_book</span>
                            <span>35 pages</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">translate</span>
                            <span>English & French</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">update</span>
                            <span>Updated: Dec 2024</span>
                        </div>
                    </div>
                    <div class="guide-actions">
                        <button class="btn btn-sm btn-primary">View Guide</button>
                        <button class="btn btn-sm btn-outline">Download PDF</button>
                    </div>
                </div>
            </div>

            <!-- Storm Safety -->
            <div class="guide-card">
                <div class="guide-header">
                    <div class="guide-icon">
                        <span class="material-symbols-outlined">thunderstorm</span>
                    </div>
                    <div class="guide-badge seasonal">Seasonal</div>
                </div>
                <div class="guide-content">
                    <h3 class="guide-title">Storm Safety Guide</h3>
                    <p class="guide-description">Storm safety procedures including lightning protection, wind safety, and severe weather emergency response.</p>
                    <div class="guide-topics">
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Weather Warnings</span>
                        </div>
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Lightning Safety</span>
                        </div>
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Wind Protection</span>
                        </div>
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Storm Shelters</span>
                        </div>
                    </div>
                    <div class="guide-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">menu_book</span>
                            <span>22 pages</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">translate</span>
                            <span>English & French</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">update</span>
                            <span>Updated: Dec 2024</span>
                        </div>
                    </div>
                    <div class="guide-actions">
                        <button class="btn btn-sm btn-primary">View Guide</button>
                        <button class="btn btn-sm btn-outline">Download PDF</button>
                    </div>
                </div>
            </div>

            <!-- Security Emergency -->
            <div class="guide-card">
                <div class="guide-header">
                    <div class="guide-icon">
                        <span class="material-symbols-outlined">security</span>
                    </div>
                    <div class="guide-badge important">Important</div>
                </div>
                <div class="guide-content">
                    <h3 class="guide-title">Security Emergency Guide</h3>
                    <p class="guide-description">Security procedures including home security, personal safety, and response to security threats and emergencies.</p>
                    <div class="guide-topics">
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Home Security</span>
                        </div>
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Personal Safety</span>
                        </div>
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Emergency Contacts</span>
                        </div>
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Security Planning</span>
                        </div>
                    </div>
                    <div class="guide-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">menu_book</span>
                            <span>26 pages</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">translate</span>
                            <span>English & French</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">update</span>
                            <span>Updated: Dec 2024</span>
                        </div>
                    </div>
                    <div class="guide-actions">
                        <button class="btn btn-sm btn-primary">View Guide</button>
                        <button class="btn btn-sm btn-outline">Download PDF</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Kits -->
<section class="emergency-kits-section" id="emergency-kits">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Emergency Kits</h2>
            <p class="section-subtitle">Essential emergency preparedness kits</p>
        </div>

        <div class="kits-grid">
            <!-- Basic Emergency Kit -->
            <div class="kit-card">
                <div class="kit-header">
                    <div class="kit-icon">
                        <span class="material-symbols-outlined">medical_information</span>
                    </div>
                    <div class="kit-badge basic">Basic</div>
                </div>
                <div class="kit-content">
                    <h3 class="kit-title">Basic Emergency Kit</h3>
                    <p class="kit-description">Essential supplies for 72-hour emergency preparedness including water, food, first aid, and basic necessities.</p>
                    <div class="kit-items">
                        <div class="item-category">
                            <h4 class="category-title">Water & Food</h4>
                            <div class="item-list">
                                <div class="item">
                                    <span class="material-symbols-outlined">water_drop</span>
                                    <span>Water (1 gallon/person/day)</span>
                                </div>
                                <div class="item">
                                    <span class="material-symbols-outlined">restaurant</span>
                                    <span>Non-perishable food (3-day supply)</span>
                                </div>
                                <div class="item">
                                    <span class="material-symbols-outlined">local_cafe</span>
                                    <span>Manual can opener</span>
                                </div>
                            </div>
                        </div>
                        <div class="item-category">
                            <h4 class="category-title">First Aid</h4>
                            <div class="item-list">
                                <div class="item">
                                    <span class="material-symbols-outlined">medical_services</span>
                                    <span>First aid kit</span>
                                </div>
                                <div class="item">
                                    <span class="material-symbols-outlined">medication</span>
                                    <span>Essential medications</span>
                                </div>
                                <div class="item">
                                    <span class="material-symbols-outlined">sanitizer</span>
                                    <span>Hand sanitizer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item-category">
                            <h4 class="category-title">Tools & Supplies</h4>
                            <div class="item-list">
                                <div class="item">
                                    <span class="material-symbols-outlined">flashlight_on</span>
                                    <span>Flashlight & batteries</span>
                                </div>
                                <div class="item">
                                    <span class="material-symbols-outlined">radio</span>
                                    <span>Battery-powered radio</span>
                                </div>
                                <div class="item">
                                    <span class="material-symbols-outlined">build</span>
                                    <span>Multi-tool</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kit-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 72 hours</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">people</span>
                            <span>For: 1-2 people</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Cost: ₣25,000</span>
                        </div>
                    </div>
                    <div class="kit-actions">
                        <button class="btn btn-sm btn-primary">View Details</button>
                        <button class="btn btn-sm btn-outline">Shopping List</button>
                    </div>
                </div>
            </div>

            <!-- Advanced Emergency Kit -->
            <div class="kit-card">
                <div class="kit-header">
                    <div class="kit-icon">
                        <span class="material-symbols-outlined">medical_information</span>
                    </div>
                    <div class="kit-badge advanced">Advanced</div>
                </div>
                <div class="kit-content">
                    <h3 class="kit-title">Advanced Emergency Kit</h3>
                    <p class="kit-description">Comprehensive emergency supplies for 7-day preparedness including advanced medical equipment, communication devices, and survival tools.</p>
                    <div class="kit-items">
                        <div class="item-category">
                            <h4 class="category-title">Extended Supplies</h4>
                            <div class="item-list">
                                <div class="item">
                                    <span class="material-symbols-outlined">water_drop</span>
                                    <span>Water purification system</span>
                                </div>
                                <div class="item">
                                    <span class="material-symbols-outlined">restaurant</span>
                                    <span>7-day food supply</span>
                                </div>
                                <div class="item">
                                    <span class="material-symbols-outlined">local_cafe</span>
                                    <span>Cooking equipment</span>
                                </div>
                            </div>
                        </div>
                        <div class="item-category">
                            <h4 class="category-title">Medical</h4>
                            <div class="item-list">
                                <div class="item">
                                    <span class="material-symbols-outlined">medical_services</span>
                                    <span>Advanced first aid kit</span>
                                </div>
                                <div class="item">
                                    <span class="material-symbols-outlined">medication</span>
                                    <span>Prescription medications</span>
                                </div>
                                <div class="item">
                                    <span class="material-symbols-outlined">healing</span>
                                    <span>Trauma supplies</span>
                                </div>
                            </div>
                        </div>
                        <div class="item-category">
                            <h4 class="category-title">Communication</h4>
                            <div class="item-list">
                                <div class="item">
                                    <span class="material-symbols-outlined">smartphone</span>
                                    <span>Solar charger</span>
                                </div>
                                <div class="item">
                                    <span class="material-symbols-outlined">radio</span>
                                    <span>Emergency radio</span>
                                </div>
                                <div class="item">
                                    <span class="material-symbols-outlined">signal_cellular_alt</span>
                                    <span>Satellite communicator</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kit-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 7 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">people</span>
                            <span>For: 2-4 people</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Cost: ₣75,000</span>
                        </div>
                    </div>
                    <div class="kit-actions">
                        <button class="btn btn-sm btn-primary">View Details</button>
                        <button class="btn btn-sm btn-outline">Shopping List</button>
                    </div>
                </div>
            </div>

            <!-- Vehicle Emergency Kit -->
            <div class="kit-card">
                <div class="kit-header">
                    <div class="kit-icon">
                        <span class="material-symbols-outlined">directions_car</span>
                    </div>
                    <div class="kit-badge specialized">Specialized</div>
                </div>
                <div class="kit-content">
                    <h3 class="kit-title">Vehicle Emergency Kit</h3>
                    <p class="kit-description">Essential vehicle emergency supplies including car repair tools, roadside assistance equipment, and vehicle-specific safety items.</p>
                    <div class="kit-items">
                        <div class="item-category">
                            <h4 class="category-title">Vehicle Tools</h4>
                            <div class="item-list">
                                <div class="item">
                                    <span class="material-symbols-outlined">build</span>
                                    <span>Basic tool kit</span>
                                </div>
                                <div class="item">
                                    <span class="material-symbols-outlined">tire_repair</span>
                                    <span>Tire repair kit</span>
                                </div>
                                <div class="item">
                                    <span class="material-symbols-outlined">battery_charging_full</span>
                                    <span>Jumper cables</span>
                                </div>
                            </div>
                        </div>
                        <div class="item-category">
                            <h4 class="category-title">Safety Equipment</h4>
                            <div class="item-list">
                                <div class="item">
                                    <span class="material-symbols-outlined">warning</span>
                                    <span>Warning triangles</span>
                                </div>
                                <div class="item">
                                    <span class="material-symbols-outlined">flashlight_on</span>
                                    <span>Emergency flares</span>
                                </div>
                                <div class="item">
                                    <span class="material-symbols-outlined">fire_extinguisher</span>
                                    <span>Fire extinguisher</span>
                                </div>
                            </div>
                        </div>
                        <div class="item-category">
                            <h4 class="category-title">Personal Items</h4>
                            <div class="item-list">
                                <div class="item">
                                    <span class="material-symbols-outlined">water_drop</span>
                                    <span>Water bottles</span>
                                </div>
                                <div class="item">
                                    <span class="material-symbols-outlined">restaurant</span>
                                    <span>Energy bars</span>
                                </div>
                                <div class="item">
                                    <span class="material-symbols-outlined">medical_services</span>
                                    <span>First aid kit</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kit-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 48 hours</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">directions_car</span>
                            <span>For: Vehicle use</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Cost: ₣45,000</span>
                        </div>
                    </div>
                    <div class="kit-actions">
                        <button class="btn btn-sm btn-primary">View Details</button>
                        <button class="btn btn-sm btn-outline">Shopping List</button>
                    </div>
                </div>
            </div>

            <!-- Pet Emergency Kit -->
            <div class="kit-card">
                <div class="kit-header">
                    <div class="kit-icon">
                        <span class="material-symbols-outlined">pets</span>
                    </div>
                    <div class="kit-badge specialized">Specialized</div>
                </div>
                <div class="kit-content">
                    <h3 class="kit-title">Pet Emergency Kit</h3>
                    <p class="kit-description">Essential supplies for pet emergency preparedness including pet food, medications, carriers, and comfort items.</p>
                    <div class="kit-items">
                        <div class="item-category">
                            <h4 class="category-title">Pet Supplies</h4>
                            <div class="item-list">
                                <div class="item">
                                    <span class="material-symbols-outlined">restaurant</span>
                                    <span>Pet food (7-day supply)</span>
                                </div>
                                <div class="item">
                                    <span class="material-symbols-outlined">water_drop</span>
                                    <span>Water bowls & water</span>
                                </div>
                                <div class="item">
                                    <span class="material-symbols-outlined">medication</span>
                                    <span>Pet medications</span>
                                </div>
                            </div>
                        </div>
                        <div class="item-category">
                            <h4 class="category-title">Comfort & Safety</h4>
                            <div class="item-list">
                                <div class="item">
                                    <span class="material-symbols-outlined">luggage</span>
                                    <span>Pet carriers</span>
                                </div>
                                <div class="item">
                                    <span class="material-symbols-outlined">cleaning_services</span>
                                    <span>Cleaning supplies</span>
                                </div>
                                <div class="item">
                                    <span class="material-symbols-outlined">favorite</span>
                                    <span>Comfort items</span>
                                </div>
                            </div>
                        </div>
                        <div class="item-category">
                            <h4 class="category-title">Documentation</h4>
                            <div class="item-list">
                                <div class="item">
                                    <span class="material-symbols-outlined">badge</span>
                                    <span>Pet identification</span>
                                </div>
                                <div class="item">
                                    <span class="material-symbols-outlined">description</span>
                                    <span>Medical records</span>
                                </div>
                                <div class="item">
                                    <span class="material-symbols-outlined">photo_camera</span>
                                    <span>Recent photos</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kit-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 7 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">pets</span>
                            <span>For: Dogs, cats, birds</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Cost: ₣35,000</span>
                        </div>
                    </div>
                    <div class="kit-actions">
                        <button class="btn btn-sm btn-primary">View Details</button>
                        <button class="btn btn-sm btn-outline">Shopping List</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Training Programs -->
<section class="training-programs-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Emergency Training Programs</h2>
            <p class="section-subtitle">Professional emergency response training</p>
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
                    <p class="training-description">Comprehensive first aid and CPR training including basic life support, wound care, and emergency medical response.</p>
                    <div class="training-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 2 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">school</span>
                            <span>Level: Beginner</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Cost: ₣15,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">workspace_premium</span>
                            <span>Certificate: Yes</span>
                        </div>
                    </div>
                    <div class="training-topics">
                        <h4 class="topics-title">Topics Covered:</h4>
                        <div class="topics-list">
                            <div class="topic-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>CPR & AED use</span>
                            </div>
                            <div class="topic-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Bleeding control</span>
                            </div>
                            <div class="topic-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Fracture management</span>
                            </div>
                            <div class="topic-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Medical emergencies</span>
                            </div>
                        </div>
                    </div>
                    <div class="training-actions">
                        <button class="btn btn-sm btn-primary">Enroll Now</button>
                        <button class="btn btn-sm btn-outline">View Schedule</button>
                    </div>
                </div>
            </div>

            <!-- Fire Safety Training -->
            <div class="training-card">
                <div class="training-header">
                    <div class="training-icon">
                        <span class="material-symbols-outlined">local_fire_department</span>
                    </div>
                    <div class="training-badge essential">Essential</div>
                </div>
                <div class="training-content">
                    <h3 class="training-title">Fire Safety Training</h3>
                    <p class="training-description">Fire prevention, evacuation procedures, and fire extinguisher use for home and workplace safety.</p>
                    <div class="training-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 1 day</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">school</span>
                            <span>Level: Beginner</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Cost: ₣10,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">workspace_premium</span>
                            <span>Certificate: Yes</span>
                        </div>
                    </div>
                    <div class="training-topics">
                        <h4 class="topics-title">Topics Covered:</h4>
                        <div class="topics-list">
                            <div class="topic-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Fire prevention</span>
                            </div>
                            <div class="topic-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Evacuation planning</span>
                            </div>
                            <div class="topic-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Fire extinguisher use</span>
                            </div>
                            <div class="topic-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Emergency response</span>
                            </div>
                        </div>
                    </div>
                    <div class="training-actions">
                        <button class="btn btn-sm btn-primary">Enroll Now</button>
                        <button class="btn btn-sm btn-outline">View Schedule</button>
                    </div>
                </div>
            </div>

            <!-- Disaster Response Training -->
            <div class="training-card">
                <div class="training-header">
                    <div class="training-icon">
                        <span class="material-symbols-outlined">warning</span>
                    </div>
                    <div class="training-badge advanced">Advanced</div>
                </div>
                <div class="training-content">
                    <h3 class="training-title">Disaster Response Training</h3>
                    <p class="training-description">Advanced disaster response training including search and rescue, damage assessment, and emergency management.</p>
                    <div class="training-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 5 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">school</span>
                            <span>Level: Advanced</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Cost: ₣50,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">workspace_premium</span>
                            <span>Certificate: Yes</span>
                        </div>
                    </div>
                    <div class="training-topics">
                        <h4 class="topics-title">Topics Covered:</h4>
                        <div class="topics-list">
                            <div class="topic-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Search and rescue</span>
                            </div>
                            <div class="topic-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Damage assessment</span>
                            </div>
                            <div class="topic-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Emergency coordination</span>
                            </div>
                            <div class="topic-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Disaster psychology</span>
                            </div>
                        </div>
                    </div>
                    <div class="training-actions">
                        <button class="btn btn-sm btn-primary">Enroll Now</button>
                        <button class="btn btn-sm btn-outline">View Schedule</button>
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
            <p class="section-subtitle">Common questions about emergency resources</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How often should I update my emergency kit?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Review and update your emergency kit every 6 months. Check expiration dates on food, water, medications, and batteries. Replace any expired or used items immediately.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What's the difference between basic and advanced kits?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Basic kits provide 72-hour essentials for 1-2 people. Advanced kits offer 7-day supplies for 2-4 people with additional equipment like water purification, communication devices, and advanced medical supplies.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Are the training programs certified?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, all training programs are certified by national emergency response authorities. Certificates are valid for 2 years and can be renewed through refresher courses.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Can I get assistance building my emergency kit?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, we offer emergency kit assistance programs including free basic kits for low-income families, group discounts, and step-by-step assembly workshops.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How do I access the safety guides?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Safety guides are available online through our website, as downloadable PDFs, and printed copies at community centers. All guides are provided in both English and French.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What if I have specific medical needs?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Customize your emergency kit with specific medications, medical equipment, and supplies for your conditions. Consult with healthcare providers for emergency medical planning.</p>
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
/* Emergency Resources Page Styles */
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

/* Resources Statistics Section */
.resources-stats-section {
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

/* Safety Guides Section */
.safety-guides-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.guides-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.guide-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.guide-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.guide-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.guide-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.guide-icon .material-symbols-outlined {
    font-size: 2rem;
}

.guide-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.guide-badge.critical {
    background-color: var(--error);
    color: var(--on-error);
}

.guide-badge.urgent {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.guide-badge.important {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.guide-badge.essential {
    background-color: var(--primary);
    color: var(--on-primary);
}

.guide-badge.seasonal {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.guide-content {
    padding: var(--spacing-lg);
}

.guide-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.guide-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.guide-topics {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

.topic-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.topic-item .material-symbols-outlined {
    font-size: 1rem;
    color: var(--primary);
}

.guide-details {
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

.guide-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Emergency Kits Section */
.emergency-kits-section {
    padding: var(--spacing-3xl) 0;
}

.kits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.kit-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.kit-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.kit-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.kit-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--tertiary);
    color: var(--on-tertiary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.kit-icon .material-symbols-outlined {
    font-size: 2rem;
}

.kit-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.kit-badge.basic {
    background-color: var(--primary);
    color: var(--on-primary);
}

.kit-badge.advanced {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.kit-badge.specialized {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.kit-content {
    padding: var(--spacing-lg);
}

.kit-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--tertiary);
    margin-bottom: var(--spacing-md);
}

.kit-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.kit-items {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-lg);
    margin-bottom: var(--spacing-lg);
}

.item-category {
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
    padding: var(--spacing-md);
}

.category-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--tertiary);
    margin-bottom: var(--spacing-md);
}

.item-list {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
}

.item {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.item .material-symbols-outlined {
    font-size: 1rem;
    color: var(--tertiary);
}

.kit-details {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

.kit-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Training Programs Section */
.training-programs-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
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
    background-color: var(--tertiary);
    color: var(--on-tertiary);
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

.training-badge.essential {
    background-color: var(--primary);
    color: var(--on-primary);
}

.training-badge.advanced {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.training-content {
    padding: var(--spacing-lg);
}

.training-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--tertiary);
    margin-bottom: var(--spacing-md);
}

.training-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.training-topics {
    margin-bottom: var(--spacing-lg);
}

.topics-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--tertiary);
    margin-bottom: var(--spacing-md);
}

.topics-list {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
}

.training-actions {
    display: flex;
    gap: var(--spacing-sm);
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
    
    .guides-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .kits-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .training-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
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
    
    .guide-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .kit-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
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
    
    .guide-actions {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .guide-actions .btn {
        width: 100%;
    }
    
    .kit-actions {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .kit-actions .btn {
        width: 100%;
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
function openSafetyGuides() {
    document.getElementById('safety-guides').scrollIntoView({ behavior: 'smooth' });
}

function openEmergencyKits() {
    document.getElementById('emergency-kits').scrollIntoView({ behavior: 'smooth' });
}

function openTraining() {
    document.getElementById('training-programs').scrollIntoView({ behavior: 'smooth' });
}

function openMaps() {
    alert('Emergency maps portal would open here. In production, this would show evacuation routes, shelter locations, and emergency facilities.');
}

function openVideos() {
    alert('Video tutorials portal would open here. In production, this would show emergency preparedness videos and training materials.');
}

function openDownloads() {
    alert('Downloads portal would open here. In production, this would show downloadable resources, guides, and emergency materials.');
}

// Guide actions
document.querySelectorAll('.guide-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('View Guide')) {
        button.addEventListener('click', function() {
            const guideTitle = this.closest('.guide-card').querySelector('.guide-title').textContent;
            alert(`Viewing: "${guideTitle}"`);
        });
    }
});

document.querySelectorAll('.guide-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Download PDF')) {
        button.addEventListener('click', function() {
            const guideTitle = this.closest('.guide-card').querySelector('.guide-title').textContent;
            alert(`Downloading PDF: "${guideTitle}"`);
        });
    }
});

// Kit actions
document.querySelectorAll('.kit-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('View Details')) {
        button.addEventListener('click', function() {
            const kitTitle = this.closest('.kit-card').querySelector('.kit-title').textContent;
            alert(`Viewing details for: "${kitTitle}"`);
        });
    }
});

document.querySelectorAll('.kit-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Shopping List')) {
        button.addEventListener('click', function() {
            const kitTitle = this.closest('.kit-card').querySelector('.kit-title').textContent;
            alert(`Generating shopping list for: "${kitTitle}"`);
        });
    }
});

// Training actions
document.querySelectorAll('.training-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Enroll Now')) {
        button.addEventListener('click', function() {
            const trainingTitle = this.closest('.training-card').querySelector('.training-title').textContent;
            alert(`Enrolling in: "${trainingTitle}"`);
        });
    }
});

document.querySelectorAll('.training-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('View Schedule')) {
        button.addEventListener('click', function() {
            const trainingTitle = this.closest('.training-card').querySelector('.training-title').textContent;
            alert(`Viewing schedule for: "${trainingTitle}"`);
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

// Auto-refresh resources statistics
function refreshResourcesStats() {
    // In production, this would fetch real-time resources statistics
    console.log('Refreshing emergency resources statistics...');
    
    // Simulate download count updates
    const downloadElement = document.querySelector('.stat-number');
    if (downloadElement && downloadElement.textContent.includes(',')) {
        // Simulate real-time downloads
        const currentCount = parseInt(downloadElement.textContent.replace(',', ''));
        const increment = Math.floor(Math.random() * 25) + 5;
        const newCount = currentCount + increment;
        downloadElement.textContent = newCount.toLocaleString();
    }
}

// Refresh statistics every 60 seconds for resource monitoring
setInterval(refreshResourcesStats, 60000);
</script>

