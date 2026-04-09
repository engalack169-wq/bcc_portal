<?php
/**
 * Bamenda City Council E-Governance Platform
 * Emergency Alerts Page
 */

// Set page metadata
$page_title = 'Emergency Alerts | Bamenda City Council';
$page_description = 'Real-time emergency alerts, crisis management, and recovery support for Bamenda citizens. Stay informed during emergencies.';
$page_keywords = 'emergency alerts, crisis management, safety, disaster response, Bamenda emergency';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Crisis', 'url' => '#'],
    ['title' => 'Emergency Alerts', 'url' => '#']
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
            <span class="badge badge-tertiary">Emergency Services</span>
            <h1 class="hero-title">Stay Safe, Stay Informed</h1>
            <p class="hero-subtitle">
                Real-time emergency alerts and critical information to keep you and your family safe during crisis situations.
            </p>
            <div class="hero-actions">
                <button class="btn btn-lg btn-tertiary" onclick="subscribeToAlerts()">
                    <span class="material-symbols-outlined">notifications_active</span>
                    Subscribe to Alerts
                </button>
                <a href="#emergency-contacts" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">phone</span>
                    Emergency Contacts
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Active Alerts Section -->
<section class="active-alerts-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Active Alerts</h2>
            <p class="section-subtitle">Current emergency notifications in your area</p>
            <div class="alert-filters">
                <button class="filter-btn active" data-severity="all">All Alerts</button>
                <button class="filter-btn" data-severity="critical">Critical</button>
                <button class="filter-btn" data-severity="warning">Warning</button>
                <button class="filter-btn" data-severity="info">Information</button>
            </div>
        </div>

        <div class="alerts-container" id="alerts-container">
            <!-- Critical Alert -->
            <div class="alert-card critical" data-severity="critical">
                <div class="alert-header">
                    <div class="alert-icon critical">
                        <span class="material-symbols-outlined">warning</span>
                    </div>
                    <div class="alert-meta">
                        <span class="alert-severity">CRITICAL</span>
                        <span class="alert-time">5 minutes ago</span>
                    </div>
                    <button class="alert-expand" onclick="toggleAlert(this)">
                        <span class="material-symbols-outlined">expand_more</span>
                    </button>
                </div>
                <div class="alert-content">
                    <h3 class="alert-title">Flash Flood Warning - Bamenda II</h3>
                    <p class="alert-description">
                        Heavy rainfall has caused flash flooding in low-lying areas of Bamenda II. Residents near River Noun should evacuate immediately.
                    </p>
                    <div class="alert-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Affected Areas: Nkwen, Mankon, Bamendakwe</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: Next 6-12 hours</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">directions</span>
                            <span>Action: Evacuate to higher ground immediately</span>
                        </div>
                    </div>
                    <div class="alert-actions">
                        <button class="btn btn-error btn-sm">View Evacuation Centers</button>
                        <button class="btn btn-outline btn-sm">Share Alert</button>
                    </div>
                </div>
            </div>

            <!-- Warning Alert -->
            <div class="alert-card warning" data-severity="warning">
                <div class="alert-header">
                    <div class="alert-icon warning">
                        <span class="material-symbols-outlined">report_problem</span>
                    </div>
                    <div class="alert-meta">
                        <span class="alert-severity">WARNING</span>
                        <span class="alert-time">2 hours ago</span>
                    </div>
                    <button class="alert-expand" onclick="toggleAlert(this)">
                        <span class="material-symbols-outlined">expand_more</span>
                    </button>
                </div>
                <div class="alert-content">
                    <h3 class="alert-title">Road Closure - Commercial Avenue</h3>
                    <p class="alert-description">
                        Commercial Avenue is closed due to emergency road repairs. Use alternative routes via Up Station.
                    </p>
                    <div class="alert-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Location: Commercial Avenue, Bamenda I</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Expected reopening: Tomorrow 6:00 PM</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">directions</span>
                            <span>Alternative: Up Station Route</span>
                        </div>
                    </div>
                    <div class="alert-actions">
                        <button class="btn btn-primary btn-sm">View Alternative Routes</button>
                        <button class="btn btn-outline btn-sm">Share Alert</button>
                    </div>
                </div>
            </div>

            <!-- Information Alert -->
            <div class="alert-card info" data-severity="info">
                <div class="alert-header">
                    <div class="alert-icon info">
                        <span class="material-symbols-outlined">info</span>
                    </div>
                    <div class="alert-meta">
                        <span class="alert-severity">INFORMATION</span>
                        <span class="alert-time">4 hours ago</span>
                    </div>
                    <button class="alert-expand" onclick="toggleAlert(this)">
                        <span class="material-symbols-outlined">expand_more</span>
                    </button>
                </div>
                <div class="alert-content">
                    <h3 class="alert-title">Community Health Outreach - Free Vaccinations</h3>
                    <p class="alert-description">
                        Free vaccination drive available at all health centers. COVID-19 and routine immunizations for all ages.
                    </p>
                    <div class="alert-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Locations: All Bamenda Health Centers</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Time: 8:00 AM - 4:00 PM daily</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">medical_services</span>
                            <span>Services: COVID-19, Polio, Measles vaccines</span>
                        </div>
                    </div>
                    <div class="alert-actions">
                        <button class="btn btn-secondary btn-sm">Find Nearest Center</button>
                        <button class="btn btn-outline btn-sm">Share Alert</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Contacts Section -->
<section class="emergency-contacts-section" id="emergency-contacts">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Emergency Contacts</h2>
            <p class="section-subtitle">Quick access to essential emergency services</p>
        </div>

        <div class="contacts-grid">
            <!-- Critical Services -->
            <div class="contact-category">
                <h3 class="category-title">Critical Services</h3>
                <div class="contact-list">
                    <div class="contact-item critical">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <span class="material-symbols-outlined">local_hospital</span>
                            </div>
                            <div class="contact-details">
                                <h4>Emergency Medical Services</h4>
                                <p>Ambulance and emergency medical response</p>
                            </div>
                        </div>
                        <div class="contact-number">
                            <a href="tel:119" class="emergency-number">119</a>
                            <span class="number-label">24/7 Available</span>
                        </div>
                    </div>

                    <div class="contact-item critical">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <span class="material-symbols-outlined">local_fire_department</span>
                            </div>
                            <div class="contact-details">
                                <h4>Fire Services</h4>
                                <p>Fire suppression and rescue operations</p>
                            </div>
                        </div>
                        <div class="contact-number">
                            <a href="tel:110" class="emergency-number">110</a>
                            <span class="number-label">24/7 Available</span>
                        </div>
                    </div>

                    <div class="contact-item critical">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <span class="material-symbols-outlined">policy</span>
                            </div>
                            <div class="contact-details">
                                <h4>Police Emergency</h4>
                                <p>Police response and security emergencies</p>
                            </div>
                        </div>
                        <div class="contact-number">
                            <a href="tel:117" class="emergency-number">117</a>
                            <span class="number-label">24/7 Available</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Municipal Services -->
            <div class="contact-category">
                <h3 class="category-title">Municipal Services</h3>
                <div class="contact-list">
                    <div class="contact-item">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <span class="material-symbols-outlined">emergency_home</span>
                            </div>
                            <div class="contact-details">
                                <h4>Disaster Management</h4>
                                <p>Crisis response and disaster relief</p>
                            </div>
                        </div>
                        <div class="contact-number">
                            <a href="tel:+237233001122" class="contact-phone">+237 233 001 122</a>
                            <span class="number-label">24/7 Hotline</span>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <span class="material-symbols-outlined">water_drop</span>
                            </div>
                            <div class="contact-details">
                                <h4>Water Emergency</h4>
                                <p>Water supply issues and pipe bursts</p>
                            </div>
                        </div>
                        <div class="contact-number">
                            <a href="tel:+237233001133" class="contact-phone">+237 233 001 133</a>
                            <span class="number-label">6 AM - 10 PM</span>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <span class="material-symbols-outlined">power</span>
                            </div>
                            <div class="contact-details">
                                <h4>Electrical Emergency</h4>
                                <p>Power outages and electrical hazards</p>
                            </div>
                        </div>
                        <div class="contact-number">
                            <a href="tel:+237233001144" class="contact-phone">+237 233 001 144</a>
                            <span class="number-label">24/7 Available</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Health Services -->
            <div class="contact-category">
                <h3 class="category-title">Health Services</h3>
                <div class="contact-list">
                    <div class="contact-item">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <span class="material-symbols-outlined">medical_services</span>
                            </div>
                            <div class="contact-details">
                                <h4>Regional Hospital</h4>
                                <p>Main referral hospital emergency room</p>
                            </div>
                        </div>
                        <div class="contact-number">
                            <a href="tel:+237233421234" class="contact-phone">+237 233 421 234</a>
                            <span class="number-label">24/7 Emergency</span>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <span class="material-symbols-outlined">coronavirus</span>
                            </div>
                            <div class="contact-details">
                                <h4>COVID-19 Hotline</h4>
                                <p>COVID-19 information and testing</p>
                            </div>
                        </div>
                        <div class="contact-number">
                            <a href="tel:1510" class="contact-phone">1510</a>
                            <span class="number-label">Toll Free</span>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <span class="material-symbols-outlined">psychology</span>
                            </div>
                            <div class="contact-details">
                                <h4>Mental Health Crisis</h4>
                                <p>24/7 mental health support line</p>
                            </div>
                        </div>
                        <div class="contact-number">
                            <a href="tel:+237233001155" class="contact-phone">+237 233 001 155</a>
                            <span class="number-label">24/7 Confidential</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Safety Resources Section -->
<section class="safety-resources-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Safety Resources</h2>
            <p class="section-subtitle">Guides and resources to help you prepare for emergencies</p>
        </div>

        <div class="resources-grid">
            <div class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">flood</span>
                </div>
                <h3 class="resource-title">Flood Preparedness</h3>
                <p class="resource-description">Learn how to prepare for and respond to flooding in your area.</p>
                <a href="#" class="resource-link">
                    <span>View Guide</span>
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>

            <div class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">local_fire_department</span>
                </div>
                <h3 class="resource-title">Fire Safety</h3>
                <p class="resource-description">Essential fire prevention tips and emergency response procedures.</p>
                <a href="#" class="resource-link">
                    <span>View Guide</span>
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>

            <div class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">health_and_safety</span>
                </div>
                <h3 class="resource-title">First Aid Basics</h3>
                <p class="resource-description">Basic first aid techniques everyone should know.</p>
                <a href="#" class="resource-link">
                    <span>View Guide</span>
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>

            <div class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">family_restroom</span>
                </div>
                <h3 class="resource-title">Family Emergency Plan</h3>
                <p class="resource-description">Create and practice an emergency plan with your family.</p>
                <a href="#" class="resource-link">
                    <span>View Guide</span>
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>

            <div class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">inventory_2</span>
                </div>
                <h3 class="resource-title">Emergency Kit</h3>
                <p class="resource-description">What to include in your emergency preparedness kit.</p>
                <a href="#" class="resource-link">
                    <span>View Guide</span>
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>

            <div class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">phone_in_talk</span>
                </div>
                <h3 class="resource-title">Communication Plan</h3>
                <p class="resource-description">Stay connected with family during emergencies.</p>
                <a href="#" class="resource-link">
                    <span>View Guide</span>
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Alert Subscription Modal -->
<div class="modal-overlay" id="alert-subscription-modal" style="display: none;">
    <div class="modal">
        <div class="modal-header">
            <h2>Subscribe to Emergency Alerts</h2>
            <button class="modal-close" onclick="closeModal()">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>
        <div class="modal-body">
            <p class="modal-description">
                Get real-time emergency alerts delivered directly to your phone and email.
            </p>
            <form class="subscription-form" id="alert-subscription-form">
                <div class="form-group">
                    <label class="form-label" for="alert-name">Full Name</label>
                    <input type="text" id="alert-name" class="form-input" placeholder="John Doe" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="alert-phone">Phone Number</label>
                    <input type="tel" id="alert-phone" class="form-input" placeholder="+237 233 000 000" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="alert-email">Email Address</label>
                    <input type="email" id="alert-email" class="form-input" placeholder="john@example.com" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Alert Types</label>
                    <div class="checkbox-group">
                        <label class="checkbox-item">
                            <input type="checkbox" name="alert-types" value="critical" checked>
                            <span>Critical Alerts</span>
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="alert-types" value="warning" checked>
                            <span>Warning Alerts</span>
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="alert-types" value="info">
                            <span>Information Alerts</span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Delivery Methods</label>
                    <div class="checkbox-group">
                        <label class="checkbox-item">
                            <input type="checkbox" name="delivery-methods" value="sms" checked>
                            <span>SMS</span>
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="delivery-methods" value="email" checked>
                            <span>Email</span>
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="delivery-methods" value="push">
                            <span>Push Notifications</span>
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-full">
                    Subscribe to Alerts
                </button>
            </form>
        </div>
    </div>
</div>

<?php
// Include footer
require_once __DIR__ . '/../../includes/footer.php';
?>

<style>
/* Emergency Alerts Page Styles */
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

/* Active Alerts Section */
.active-alerts-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.alert-filters {
    display: flex;
    gap: var(--spacing-sm);
    flex-wrap: wrap;
}

.filter-btn {
    padding: var(--spacing-sm) var(--spacing-md);
    background-color: var(--surface-container-lowest);
    border: 1px solid var(--outline-variant);
    border-radius: var(--radius-full);
    color: var(--on-surface-variant);
    font-size: 0.875rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s ease;
}

.filter-btn:hover {
    background-color: var(--surface-container-low);
}

.filter-btn.active {
    background-color: var(--primary);
    color: var(--on-primary);
    border-color: var(--primary);
}

.alerts-container {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-lg);
}

.alert-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.alert-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
}

.alert-card.critical {
    border-left: 4px solid var(--error);
}

.alert-card.warning {
    border-left: 4px solid #f57c00;
}

.alert-card.info {
    border-left: 4px solid var(--primary);
}

.alert-header {
    display: flex;
    align-items: center;
    gap: var(--spacing-md);
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
}

.alert-icon {
    width: 3rem;
    height: 3rem;
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.alert-icon.critical {
    background-color: var(--error);
    color: var(--on-error);
}

.alert-icon.warning {
    background-color: #f57c00;
    color: white;
}

.alert-icon.info {
    background-color: var(--primary);
    color: var(--on-primary);
}

.alert-meta {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xs);
}

.alert-severity {
    font-size: 0.75rem;
    font-weight: 700;
    letter-spacing: 0.1em;
    text-transform: uppercase;
}

.alert-card.critical .alert-severity {
    color: var(--error);
}

.alert-card.warning .alert-severity {
    color: #f57c00;
}

.alert-card.info .alert-severity {
    color: var(--primary);
}

.alert-time {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.alert-expand {
    background: none;
    border: none;
    cursor: pointer;
    padding: var(--spacing-sm);
    border-radius: var(--radius-sm);
    transition: all 0.2s ease;
}

.alert-expand:hover {
    background-color: var(--surface-container-low);
}

.alert-content {
    padding: var(--spacing-lg);
    display: none;
}

.alert-card.expanded .alert-content {
    display: block;
}

.alert-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--on-surface);
    margin-bottom: var(--spacing-md);
}

.alert-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.alert-details {
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
    color: var(--primary);
}

.alert-actions {
    display: flex;
    gap: var(--spacing-md);
    flex-wrap: wrap;
}

/* Emergency Contacts Section */
.emergency-contacts-section {
    padding: var(--spacing-3xl) 0;
}

.contacts-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.contact-category {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.category-title {
    padding: var(--spacing-lg);
    background-color: var(--primary);
    color: var(--on-primary);
    font-size: 1.125rem;
    font-weight: 700;
    margin: 0;
}

.contact-list {
    padding: var(--spacing-md);
}

.contact-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: var(--spacing-lg);
    border-radius: var(--radius-md);
    margin-bottom: var(--spacing-sm);
    transition: all 0.2s ease;
}

.contact-item:last-child {
    margin-bottom: 0;
}

.contact-item:hover {
    background-color: var(--surface-container-low);
}

.contact-item.critical {
    border-left: 3px solid var(--error);
}

.contact-info {
    display: flex;
    align-items: center;
    gap: var(--spacing-md);
    flex: 1;
}

.contact-icon {
    width: 2.5rem;
    height: 2.5rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.contact-item.critical .contact-icon {
    background-color: var(--error);
}

.contact-details h4 {
    font-size: 1rem;
    font-weight: 600;
    color: var(--on-surface);
    margin-bottom: var(--spacing-xs);
}

.contact-details p {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    margin: 0;
}

.contact-number {
    text-align: right;
    flex-shrink: 0;
}

.emergency-number {
    display: block;
    font-size: 1.5rem;
    font-weight: 800;
    color: var(--error);
    text-decoration: none;
    margin-bottom: var(--spacing-xs);
}

.contact-phone {
    display: block;
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    text-decoration: none;
    margin-bottom: var(--spacing-xs);
}

.number-label {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

/* Safety Resources Section */
.safety-resources-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.resources-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-lg);
}

.resource-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    text-align: center;
    transition: all 0.3s ease;
    border: 1px solid var(--outline-variant);
}

.resource-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    border-color: var(--primary);
}

.resource-icon {
    width: 4rem;
    height: 4rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-lg);
}

.resource-icon .material-symbols-outlined {
    font-size: 2rem;
}

.resource-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.resource-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.resource-link {
    display: inline-flex;
    align-items: center;
    gap: var(--spacing-xs);
    color: var(--primary);
    font-weight: 600;
    text-decoration: none;
    transition: gap 0.2s ease;
}

.resource-link:hover {
    gap: var(--spacing-sm);
}

/* Modal Styles */
.modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: var(--spacing-lg);
}

.modal {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    max-width: 500px;
    width: 100%;
    max-height: 90vh;
    overflow-y: auto;
}

.modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--spacing-lg);
    border-bottom: 1px solid var(--outline-variant);
}

.modal-header h2 {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--on-surface);
    margin: 0;
}

.modal-close {
    background: none;
    border: none;
    cursor: pointer;
    padding: var(--spacing-sm);
    border-radius: var(--radius-sm);
    color: var(--on-surface-variant);
}

.modal-close:hover {
    background-color: var(--surface-container-low);
}

.modal-body {
    padding: var(--spacing-lg);
}

.modal-description {
    color: var(--on-surface-variant);
    margin-bottom: var(--spacing-lg);
}

.checkbox-group {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
}

.checkbox-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    cursor: pointer;
}

.checkbox-item input[type="checkbox"] {
    accent-color: var(--primary);
}

/* Responsive Design */
@media (max-width: 768px) {
    .alert-filters {
        justify-content: center;
    }
    
    .alert-header {
        flex-direction: column;
        text-align: center;
        gap: var(--spacing-sm);
    }
    
    .alert-meta {
        align-items: center;
    }
    
    .alert-actions {
        justify-content: center;
    }
    
    .contacts-grid {
        grid-template-columns: 1fr;
    }
    
    .contact-item {
        flex-direction: column;
        text-align: center;
        gap: var(--spacing-md);
    }
    
    .contact-number {
        text-align: center;
    }
    
    .resources-grid {
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    }
    
    .modal {
        margin: var(--spacing-md);
        max-height: calc(100vh - 2rem);
    }
}

@media (max-width: 480px) {
    .section-title {
        font-size: 1.5rem;
    }
    
    .hero-title {
        font-size: 2rem;
    }
    
    .alert-title {
        font-size: 1.125rem;
    }
    
    .emergency-number {
        font-size: 1.25rem;
    }
    
    .contact-phone {
        font-size: 1rem;
    }
}
</style>

<script>
// Alert System
document.addEventListener('DOMContentLoaded', function() {
    initializeAlertFilters();
    initializeAlertSubscription();
});

function initializeAlertFilters() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const alertCards = document.querySelectorAll('.alert-card');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Update active state
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            // Filter alerts
            const severity = this.getAttribute('data-severity');
            filterAlerts(severity);
        });
    });
}

function filterAlerts(severity) {
    const alertCards = document.querySelectorAll('.alert-card');
    
    alertCards.forEach(card => {
        if (severity === 'all') {
            card.style.display = 'block';
        } else {
            const cardSeverity = card.getAttribute('data-severity');
            card.style.display = cardSeverity === severity ? 'block' : 'none';
        }
    });
}

function toggleAlert(button) {
    const alertCard = button.closest('.alert-card');
    const isExpanded = alertCard.classList.contains('expanded');
    
    // Toggle expanded state
    alertCard.classList.toggle('expanded');
    
    // Update button icon
    const icon = button.querySelector('.material-symbols-outlined');
    icon.textContent = isExpanded ? 'expand_more' : 'expand_less';
}

function initializeAlertSubscription() {
    const form = document.getElementById('alert-subscription-form');
    if (form) {
        form.addEventListener('submit', handleAlertSubscription);
    }
}

function subscribeToAlerts() {
    const modal = document.getElementById('alert-subscription-modal');
    modal.style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function handleAlertSubscription(e) {
    e.preventDefault();
    
    const formData = new FormData(e.target);
    const phone = formData.get('alert-phone');
    const email = formData.get('alert-email');
    
    // Validate phone number
    if (!validatePhoneNumber(phone)) {
        showNotification('Please enter a valid phone number', 'error');
        return;
    }
    
    // Validate email
    if (!validateEmail(email)) {
        showNotification('Please enter a valid email address', 'error');
        return;
    }
    
    // Simulate subscription
    showNotification('Successfully subscribed to emergency alerts!', 'success');
    closeModal();
    e.target.reset();
}

function validatePhoneNumber(phone) {
    const phoneRegex = /^\+?[\d\s\-\(\)]+$/;
    return phoneRegex.test(phone) && phone.replace(/\D/g, '').length >= 10;
}

function validateEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function closeModal() {
    const modal = document.getElementById('alert-subscription-modal');
    modal.style.display = 'none';
    document.body.style.overflow = '';
}

// Close modal on outside click
document.getElementById('alert-subscription-modal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeModal();
    }
});

// Auto-refresh alerts
setInterval(function() {
    // In production, this would fetch new alerts from the server
    console.log('Checking for new alerts...');
}, 30000); // Check every 30 seconds

// Geolocation-based alerts
if ('geolocation' in navigator) {
    navigator.geolocation.getCurrentPosition(function(position) {
        // Use location to provide area-specific alerts
        console.log('User location:', position.coords);
    }, function(error) {
        console.log('Location access denied:', error);
    });
}
</script>

