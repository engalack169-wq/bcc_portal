<?php
/**
 * Bamenda City Council E-Governance Platform
 * Emergency Services Index Page
 */

// Set page metadata
$page_title = 'Emergency Services | Bamenda City Council';
$page_description = 'Access emergency alerts, crisis management, recovery support, and safety resources for Bamenda citizens.';
$page_keywords = 'emergency services, crisis management, safety alerts, disaster response, Bamenda emergency';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Emergency Services', 'url' => '#']
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
                <a href="alerts.php" class="btn btn-lg btn-tertiary">
                    <span class="material-symbols-outlined">notifications_active</span>
                    View Active Alerts
                </a>
                <a href="contacts.php" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">phone</span>
                    Emergency Contacts
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Services Overview -->
<section class="emergency-services">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Emergency Services</h2>
            <p class="section-subtitle">Quick access to critical emergency resources</p>
        </div>

        <div class="services-grid">
            <a href="alerts.php" class="service-card critical">
                <div class="service-icon">
                    <span class="material-symbols-outlined">notifications_active</span>
                </div>
                <h3 class="service-title">Emergency Alerts</h3>
                <p class="service-description">Real-time alerts for floods, fires, health emergencies, and other critical situations.</p>
                <div class="service-status">
                    <span class="status-indicator active"></span>
                    <span>3 Active Alerts</span>
                </div>
            </a>

            <a href="contacts.php" class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">contact_phone</span>
                </div>
                <h3 class="service-title">Emergency Contacts</h3>
                <p class="service-description">Essential phone numbers for police, fire, medical, and utility emergencies.</p>
                <div class="service-status">
                    <span class="status-indicator available"></span>
                    <span>24/7 Available</span>
                </div>
            </a>

            <a href="management.php" class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">health_and_safety</span>
                </div>
                <h3 class="service-title">Crisis Management</h3>
                <p class="service-description">Coordination and response strategies for large-scale emergencies and disasters.</p>
                <div class="service-status">
                    <span class="status-indicator available"></span>
                    <span>Active Response Team</span>
                </div>
            </a>

            <a href="recovery.php" class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">healing</span>
                </div>
                <h3 class="service-title">Recovery Support</h3>
                <p class="service-description">Assistance and resources for recovery after emergencies and natural disasters.</p>
                <div class="service-status">
                    <span class="status-indicator available"></span>
                    <span>Support Programs</span>
                </div>
            </a>

            <a href="resources.php" class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">medical_information</span>
                </div>
                <h3 class="service-title">Safety Resources</h3>
                <p class="service-description">Guides, tips, and training materials for emergency preparedness and response.</p>
                <div class="service-status">
                    <span class="status-indicator available"></span>
                    <span>Updated Resources</span>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Current Alert Status -->
<section class="alert-status">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Current Alert Status</h2>
            <p class="section-subtitle">Live emergency information for Bamenda</p>
        </div>

        <div class="status-dashboard">
            <div class="alert-summary">
                <div class="summary-item critical">
                    <div class="summary-icon">
                        <span class="material-symbols-outlined">warning</span>
                    </div>
                    <div class="summary-content">
                        <span class="summary-number">1</span>
                        <span class="summary-label">Critical Alert</span>
                    </div>
                </div>

                <div class="summary-item warning">
                    <div class="summary-icon">
                        <span class="material-symbols-outlined">report_problem</span>
                    </div>
                    <div class="summary-content">
                        <span class="summary-number">2</span>
                        <span class="summary-label">Warning</span>
                    </div>
                </div>

                <div class="summary-item info">
                    <div class="summary-icon">
                        <span class="material-symbols-outlined">info</span>
                    </div>
                    <div class="summary-content">
                        <span class="summary-number">4</span>
                        <span class="summary-label">Information</span>
                    </div>
                </div>

                <div class="summary-item all-clear">
                    <div class="summary-icon">
                        <span class="material-symbols-outlined">check_circle</span>
                    </div>
                    <div class="summary-content">
                        <span class="summary-number">12</span>
                        <span class="summary-label">Areas Clear</span>
                    </div>
                </div>
            </div>

            <div class="latest-alert">
                <div class="alert-header">
                    <div class="alert-severity critical">
                        <span class="material-symbols-outlined">warning</span>
                        <span>CRITICAL</span>
                    </div>
                    <span class="alert-time">Updated 5 minutes ago</span>
                </div>
                <h3 class="alert-title">Flash Flood Warning - Bamenda II</h3>
                <p class="alert-description">
                    Heavy rainfall has caused flash flooding in low-lying areas. Residents near River Noun should evacuate immediately to designated centers.
                </p>
                <div class="alert-areas">
                    <span class="area-badge">Nkwen</span>
                    <span class="area-badge">Mankon</span>
                    <span class="area-badge">Bamendakwe</span>
                </div>
                <a href="alerts.php" class="btn btn-primary btn-sm">View Full Details</a>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Preparedness -->
<section class="preparedness">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Be Prepared</h2>
            <p class="section-subtitle">Steps to take before, during, and after emergencies</p>
        </div>

        <div class="preparedness-grid">
            <div class="prep-card">
                <div class="prep-icon">
                    <span class="material-symbols-outlined">inventory_2</span>
                </div>
                <h3 class="prep-title">Emergency Kit</h3>
                <p class="prep-description">Prepare an emergency kit with essential supplies including water, food, medications, and important documents.</p>
                <a href="resources.php#emergency-kit" class="prep-link">
                    <span>Learn More</span>
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>

            <div class="prep-card">
                <div class="prep-icon">
                    <span class="material-symbols-outlined">family_restroom</span>
                </div>
                <h3 class="prep-title">Family Plan</h3>
                <p class="prep-description">Create and practice a family emergency plan including meeting points and communication strategies.</p>
                <a href="resources.php#family-plan" class="prep-link">
                    <span>Learn More</span>
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>

            <div class="prep-card">
                <div class="prep-icon">
                    <span class="material-symbols-outlined">phone_in_talk</span>
                </div>
                <h3 class="prep-title">Communication Plan</h3>
                <p class="prep-description">Establish multiple ways to stay connected with family members during emergencies.</p>
                <a href="resources.php#communication" class="prep-link">
                    <span>Learn More</span>
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Quick Actions</h2>
            <p class="section-subtitle">Immediate emergency response options</p>
        </div>

        <div class="actions-grid">
            <button class="action-btn emergency" onclick="callEmergency()">
                <span class="material-symbols-outlined">emergency</span>
                <span>Call Emergency</span>
            </button>

            <button class="action-btn report" onclick="reportIncident()">
                <span class="material-symbols-outlined">report_problem</span>
                <span>Report Incident</span>
            </button>

            <button class="action-btn locate" onclick="findShelter()">
                <span class="material-symbols-outlined">location_on</span>
                <span>Find Shelter</span>
            </button>

            <button class="action-btn alert" onclick="sendAlert()">
                <span class="material-symbols-outlined">notifications</span>
                <span>Send Alert</span>
            </button>
        </div>
    </div>
</section>

<!-- Contact Information -->
<section class="emergency-contacts">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Critical Contacts</h2>
            <p class="section-subtitle">Save these numbers for emergency situations</p>
        </div>

        <div class="contacts-grid">
            <div class="contact-item critical">
                <div class="contact-icon">
                    <span class="material-symbols-outlined">local_hospital</span>
                </div>
                <div class="contact-info">
                    <h3>Emergency Medical Services</h3>
                    <p>Ambulance and emergency medical response</p>
                </div>
                <div class="contact-number">
                    <a href="tel:119">119</a>
                    <span>24/7 Available</span>
                </div>
            </div>

            <div class="contact-item critical">
                <div class="contact-icon">
                    <span class="material-symbols-outlined">local_fire_department</span>
                </div>
                <div class="contact-info">
                    <h3>Fire Services</h3>
                    <p>Fire suppression and rescue operations</p>
                </div>
                <div class="contact-number">
                    <a href="tel:110">110</a>
                    <span>24/7 Available</span>
                </div>
            </div>

            <div class="contact-item critical">
                <div class="contact-icon">
                    <span class="material-symbols-outlined">policy</span>
                </div>
                <div class="contact-info">
                    <h3>Police Emergency</h3>
                    <p>Police response and security emergencies</p>
                </div>
                <div class="contact-number">
                    <a href="tel:117">117</a>
                    <span>24/7 Available</span>
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
/* Emergency Services Page Styles */
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

/* Emergency Services Overview */
.emergency-services {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: var(--spacing-xl);
    margin-top: var(--spacing-xl);
}

.service-card {
    display: flex;
    flex-direction: column;
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    text-decoration: none;
    color: var(--on-surface);
    transition: all 0.3s ease;
    border: 1px solid var(--outline-variant);
    position: relative;
    overflow: hidden;
    min-height: 280px;
}

.service-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.service-card.critical {
    border-left: 4px solid var(--error);
}

.service-card.critical:hover {
    border-color: var(--error);
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
    margin-bottom: var(--spacing-lg);
    transition: all 0.3s ease;
    flex-shrink: 0;
}

.service-card.critical .service-icon {
    background-color: var(--error);
}

.service-card:hover .service-icon {
    transform: scale(1.1);
}

.service-icon .material-symbols-outlined {
    font-size: 2rem;
}

.service-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
    line-height: 1.3;
    flex-shrink: 0;
}

.service-card.critical .service-title {
    color: var(--error);
}

.service-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
    flex-grow: 1;
    font-size: 0.95rem;
}

.service-status {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    flex-shrink: 0;
    margin-top: auto;
}

.status-indicator {
    width: 0.5rem;
    height: 0.5rem;
    border-radius: 50%;
    background-color: var(--tertiary);
}

.status-indicator.active {
    background-color: var(--error);
    animation: pulse 2s infinite;
}

.status-indicator.available {
    background-color: var(--tertiary);
}

@keyframes pulse {
    0% { opacity: 1; }
    50% { opacity: 0.5; }
    100% { opacity: 1; }
}

/* Alert Status */
.alert-status {
    padding: var(--spacing-3xl) 0;
}

.status-dashboard {
    display: grid;
    grid-template-columns: 1fr 2fr;
    gap: var(--spacing-xl);
    align-items: start;
}

.alert-summary {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: var(--spacing-lg);
}

.summary-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-md);
    padding: var(--spacing-lg);
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.summary-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.summary-icon {
    width: 3rem;
    height: 3rem;
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.summary-item.critical .summary-icon {
    background-color: var(--error);
    color: white;
}

.summary-item.warning .summary-icon {
    background-color: #f57c00;
    color: white;
}

.summary-item.info .summary-icon {
    background-color: var(--primary);
    color: var(--on-primary);
}

.summary-item.all-clear .summary-icon {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.summary-content {
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}

.summary-number {
    font-size: 1.75rem;
    font-weight: 800;
    line-height: 1;
    margin-bottom: var(--spacing-xs);
}

.summary-label {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.025em;
}

.latest-alert {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border-left: 4px solid var(--error);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.latest-alert:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.alert-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: var(--spacing-md);
}

.alert-severity {
    display: flex;
    align-items: center;
    gap: var(--spacing-xs);
    font-size: 0.75rem;
    font-weight: 700;
    letter-spacing: 0.05em;
    text-transform: uppercase;
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
}

.alert-severity.critical {
    background-color: var(--error);
    color: var(--on-error);
}

.alert-severity.warning {
    background-color: #f57c00;
    color: white;
}

.alert-severity.info {
    background-color: var(--primary);
    color: var(--on-primary);
}

.alert-time {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    font-weight: 500;
}

.alert-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--on-surface);
    margin-bottom: var(--spacing-sm);
    line-height: 1.3;
}

.alert-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
    font-size: 0.95rem;
}

.alert-areas {
    display: flex;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
    flex-wrap: wrap;
}

.area-badge {
    background-color: var(--surface-container);
    padding: var(--spacing-xs) var(--spacing-md);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    color: var(--on-surface-variant);
    font-weight: 500;
    white-space: nowrap;
    letter-spacing: 0.025em;
    line-height: 1.2;
}

/* Emergency Preparedness */
.preparedness {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.preparedness-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.prep-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.prep-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.prep-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: var(--spacing-lg);
}

.prep-icon .material-symbols-outlined {
    font-size: 2rem;
}

.prep-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.prep-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.prep-link {
    display: inline-flex;
    align-items: center;
    gap: var(--spacing-xs);
    color: var(--primary);
    font-weight: 600;
    text-decoration: none;
    transition: gap 0.2s ease;
}

.prep-link:hover {
    gap: var(--spacing-sm);
}

/* Quick Actions */
.quick-actions {
    padding: var(--spacing-3xl) 0;
}

.actions-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: var(--spacing-lg);
}

.action-btn {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: var(--spacing-md);
    padding: var(--spacing-xl);
    background-color: var(--surface-container-lowest);
    border: 1px solid var(--outline-variant);
    border-radius: var(--radius-lg);
    color: var(--on-surface);
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 1rem;
    font-weight: 600;
}

.action-btn:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.action-btn.emergency:hover {
    background-color: var(--error);
    color: var(--on-error);
    border-color: var(--error);
}

.action-btn .material-symbols-outlined {
    font-size: 2.5rem;
}

/* Emergency Contacts */
.emergency-contacts {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.contacts-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-lg);
}

.contact-item {
    display: grid;
    grid-template-columns: auto 1fr auto;
    gap: var(--spacing-md);
    align-items: center;
    padding: var(--spacing-lg);
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.2s ease;
}

.contact-item:hover {
    background-color: var(--surface-container-low);
}

.contact-item.critical {
    border-left: 3px solid var(--error);
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

.contact-info h3 {
    font-size: 1rem;
    font-weight: 600;
    color: var(--on-surface);
    margin-bottom: var(--spacing-xs);
}

.contact-info p {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    margin: 0;
}

.contact-number {
    text-align: right;
    flex-shrink: 0;
}

.contact-number a {
    display: block;
    font-size: 1.25rem;
    font-weight: 800;
    color: var(--error);
    text-decoration: none;
    margin-bottom: var(--spacing-xs);
}

.contact-number span {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

/* Responsive Design */
@media (max-width: 1024px) {
    .services-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: var(--spacing-lg);
    }
    
    .status-dashboard {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
}

@media (max-width: 768px) {
    .services-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .service-card {
        padding: var(--spacing-lg);
        min-height: 240px;
    }
    
    .status-dashboard {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .alert-summary {
        grid-template-columns: repeat(2, 1fr);
        gap: var(--spacing-md);
    }
    
    .preparedness-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .actions-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: var(--spacing-md);
    }
    
    .contacts-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .contact-item {
        grid-template-columns: 1fr;
        text-align: center;
        gap: var(--spacing-sm);
    }
    
    .summary-number {
        font-size: 1.5rem;
    }
    
    .service-title {
        font-size: 1.1rem;
    }
    
    .service-description {
        font-size: 0.9rem;
    }
}

@media (max-width: 480px) {
    .services-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .service-card {
        min-height: 220px;
        padding: var(--spacing-md);
    }
    
    .service-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .service-icon .material-symbols-outlined {
        font-size: 1.5rem;
    }
    
    .service-title {
        font-size: 1rem;
    }
    
    .service-description {
        font-size: 0.875rem;
    }
    
    .alert-summary {
        grid-template-columns: 1fr;
        gap: var(--spacing-sm);
    }
    
    .status-dashboard {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .preparedness-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .actions-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-sm);
    }
    
    .contacts-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-sm);
    }
    
    .contact-item {
        grid-template-columns: 1fr;
        text-align: center;
        gap: var(--spacing-xs);
    }
    
    .summary-number {
        font-size: 1.25rem;
    }
    
    .summary-icon {
        width: 2.5rem;
        height: 2.5rem;
    }
    
    .alert-header {
        flex-direction: column;
        gap: var(--spacing-sm);
        align-items: flex-start;
    }
    
    .alert-areas {
        flex-direction: column;
        gap: var(--spacing-xs);
    }
    
    .action-btn {
        padding: var(--spacing-md);
        font-size: 0.875rem;
    }
    
    .latest-alert {
        padding: var(--spacing-lg);
    }
    
    .alert-title {
        font-size: 1.1rem;
    }
    
    .alert-description {
        font-size: 0.875rem;
    }
    
    .area-badge {
        font-size: 0.7rem;
        padding: var(--spacing-xs) var(--spacing-sm);
    }
        font-size: 2rem;
    }
}
</style>

<script>
// Emergency Actions
function callEmergency() {
    if (confirm('Call Emergency Services (119)?')) {
        window.location.href = 'tel:119';
    }
}

function reportIncident() {
    // Redirect to incident reporting form
    window.location.href = 'alerts.php?report=true';
}

function findShelter() {
    // Open map with shelter locations
    window.location.href = 'resources.php#shelters';
}

function sendAlert() {
    // Open alert sending interface
    window.location.href = 'alerts.php?send=true';
}

// Auto-refresh alerts every 30 seconds
setInterval(function() {
    // In production, this would fetch new alerts from the server
    console.log('Checking for new emergency alerts...');
}, 30000);
</script>
