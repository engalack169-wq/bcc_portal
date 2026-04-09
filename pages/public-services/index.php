<?php
/**
 * Bamenda City Council E-Governance Platform
 * Public Services Index Page
 */

// Set page metadata
$page_title = 'Public Services | Bamenda City Council';
$page_description = 'Access essential public services including civil status, digital ID, document vault, health services, and environmental information.';
$page_keywords = 'public services, civil status, digital ID, health services, environmental services, Bamenda';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Public Services', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero public-services-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-public-services.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Public Services</span>
            <h1 class="hero-title">Essential Services for Citizens</h1>
            <p class="hero-subtitle">
                Access comprehensive public services designed to meet your daily needs and support your civic responsibilities.
            </p>
            <div class="hero-actions">
                <a href="civil-status.php" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">badge</span>
                    Civil Status Services
                </a>
                <a href="digital-id.php" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">credit_card</span>
                    Digital ID Wallet
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="services-overview">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Public Services</h2>
            <p class="section-subtitle">Comprehensive services for all citizens</p>
        </div>

        <div class="services-grid">
            <a href="civil-status.php" class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">badge</span>
                </div>
                <h3 class="service-title">Civil Status Hub</h3>
                <p class="service-description">Birth, marriage, and death certificates. Official civil documentation services.</p>
                <div class="service-features">
                    <span class="feature">Birth Certificates</span>
                    <span class="feature">Marriage Licenses</span>
                    <span class="feature">Death Certificates</span>
                </div>
            </a>

            <a href="digital-id.php" class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">credit_card</span>
                </div>
                <h3 class="service-title">Digital ID Wallet</h3>
                <p class="service-description">Secure digital identity management and verification services.</p>
                <div class="service-features">
                    <span class="feature">Digital ID Cards</span>
                    <span class="feature">Identity Verification</span>
                    <span class="feature">Secure Storage</span>
                </div>
            </a>

            <a href="document-vault.php" class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">folder</span>
                </div>
                <h3 class="service-title">Document Vault</h3>
                <p class="service-description">Secure storage and management of important personal documents.</p>
                <div class="service-features">
                    <span class="feature">Cloud Storage</span>
                    <span class="feature">Document Sharing</span>
                    <span class="feature">Digital Copies</span>
                </div>
            </a>

            <a href="health.php" class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">health_and_safety</span>
                </div>
                <h3 class="service-title">Public Health Hub</h3>
                <p class="service-description">Health services, vaccination programs, and public health information.</p>
                <div class="service-features">
                    <span class="feature">Vaccination Programs</span>
                    <span class="feature">Health Records</span>
                    <span class="feature">Health Education</span>
                </div>
            </a>

            <a href="environmental.php" class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">park</span>
                </div>
                <h3 class="service-title">Environmental Zones</h3>
                <p class="service-description">Environmental protection, green spaces, and sustainability initiatives.</p>
                <div class="service-features">
                    <span class="feature">Green Zones</span>
                    <span class="feature">Environmental Reports</span>
                    <span class="feature">Conservation</span>
                </div>
            </a>

            <a href="city-map.php" class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">map</span>
                </div>
                <h3 class="service-title">Interactive City Map</h3>
                <p class="service-description">Navigate Bamenda with our interactive map showing services and facilities.</p>
                <div class="service-features">
                    <span class="feature">Service Locations</span>
                    <span class="feature">Navigation</span>
                    <span class="feature">Real-time Updates</span>
                </div>
            </a>

            <a href="tenders.php" class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">gavel</span>
                </div>
                <h3 class="service-title">Public Tenders</h3>
                <p class="service-description">Government procurement opportunities and tender announcements.</p>
                <div class="service-features">
                    <span class="feature">Active Tenders</span>
                    <span class="feature">Bid Submission</span>
                    <span class="feature">Award Notices</span>
                </div>
            </a>

            <a href="projects.php" class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">view_in_ar</span>
                </div>
                <h3 class="service-title">Projects Showcase</h3>
                <p class="service-description">Current and completed infrastructure and development projects.</p>
                <div class="service-features">
                    <span class="feature">Ongoing Projects</span>
                    <span class="feature">Completed Projects</span>
                    <span class="feature">Project Timeline</span>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Service Statistics -->
<section class="service-stats">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Service Performance</h2>
            <p class="section-subtitle">Real-time statistics for public services</p>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">12,456</div>
                    <div class="stat-label">Documents Processed</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+12% this month</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">people</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">45,678</div>
                    <div class="stat-label">Citizens Served</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+8% this month</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">schedule</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">98.5%</div>
                    <div class="stat-label">Service Efficiency</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+2.3% improvement</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">star</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">4.8/5</div>
                    <div class="stat-label">Citizen Satisfaction</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+0.3 this quarter</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Recent Updates -->
<section class="recent-updates">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Recent Updates</h2>
            <p class="section-subtitle">Latest news and updates from public services</p>
        </div>

        <div class="updates-grid">
            <div class="update-card">
                <div class="update-category health">
                    <span class="material-symbols-outlined">medical_services</span>
                    <span>Health</span>
                </div>
                <h3 class="update-title">New Vaccination Campaign Launched</h3>
                <p class="update-description">
                    Comprehensive vaccination program now available at all health centers for children and adults.
                </p>
                <div class="update-meta">
                    <span class="date">2 days ago</span>
                    <span class="read-time">3 min read</span>
                </div>
            </div>

            <div class="update-card">
                <div class="update-category environmental">
                    <span class="material-symbols-outlined">park</span>
                    <span>Environmental</span>
                </div>
                <h3 class="update-title">Green Zone Expansion Project</h3>
                <p class="update-description">
                    New green spaces being developed across Bamenda to improve environmental quality and community wellbeing.
                </p>
                <div class="update-meta">
                    <span class="date">5 days ago</span>
                    <span class="read-time">5 min read</span>
                </div>
            </div>

            <div class="update-card">
                <div class="update-category digital">
                    <span class="material-symbols-outlined">credit_card</span>
                    <span>Digital Services</span>
                </div>
                <h3 class="update-title">Digital ID System Upgrade</h3>
                <p class="update-description">
                    Enhanced security features and improved user experience for the digital ID wallet system.
                </p>
                <div class="update-meta">
                    <span class="date">1 week ago</span>
                    <span class="read-time">4 min read</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Access -->
<section class="quick-access">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Quick Access</h2>
            <p class="section-subtitle">Most frequently requested services</p>
        </div>

        <div class="quick-links">
            <a href="civil-status.php#birth" class="quick-link">
                <span class="material-symbols-outlined">child_care</span>
                <span>Birth Certificate</span>
            </a>
            <a href="civil-status.php#marriage" class="quick-link">
                <span class="material-symbols-outlined">favorite</span>
                <span>Marriage License</span>
            </a>
            <a href="health.php#vaccination" class="quick-link">
                <span class="material-symbols-outlined">vaccines</span>
                <span>Vaccination</span>
            </a>
            <a href="digital-id.php#apply" class="quick-link">
                <span class="material-symbols-outlined">app_registration</span>
                <span>Apply for ID</span>
            </a>
            <a href="document-vault.php#upload" class="quick-link">
                <span class="material-symbols-outlined">upload_file</span>
                <span>Upload Document</span>
            </a>
            <a href="city-map.php#services" class="quick-link">
                <span class="material-symbols-outlined">location_searching</span>
                <span>Find Services</span>
            </a>
        </div>
    </div>
</section>

<!-- Help Section -->
<section class="help-section">
    <div class="container">
        <div class="help-content">
            <div class="help-info">
                <h2 class="help-title">Need Assistance?</h2>
                <p class="help-description">
                    Our support team is here to help you navigate our public services and answer any questions you may have.
                </p>
                <div class="help-actions">
                    <a href="../../help/contact.php" class="btn btn-primary">
                        <span class="material-symbols-outlined">support_agent</span>
                        Contact Support
                    </a>
                    <a href="../../help/faq.php" class="btn btn-outline">
                        <span class="material-symbols-outlined">help</span>
                        View FAQ
                    </a>
                </div>
            </div>
            <div class="help-stats">
                <div class="stat-item">
                    <span class="stat-number">24/7</span>
                    <span class="stat-label">Support Available</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">< 1hr</span>
                    <span class="stat-label">Average Response</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">97%</span>
                    <span class="stat-label">Satisfaction Rate</span>
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
/* Public Services Page Styles */
.public-services-hero {
    position: relative;
    overflow: hidden;
}

.public-services-hero .hero-background img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}

/* Services Overview */
.services-overview {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.service-card {
    display: block;
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    text-decoration: none;
    color: var(--on-surface);
    transition: all 0.3s ease;
    border: 1px solid var(--outline-variant);
    position: relative;
    overflow: hidden;
}

.service-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--primary) 0%, var(--primary-container) 100%);
    transform: scaleX(0);
    transition: transform 0.3s ease;
}

.service-card:hover::before {
    transform: scaleX(1);
}

.service-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    border-color: var(--primary);
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
}

.service-card:hover .service-icon {
    background-color: var(--primary-container);
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
}

.feature {
    background-color: var(--surface-container);
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    color: var(--on-surface-variant);
    font-weight: 500;
}

/* Service Statistics */
.service-stats {
    padding: var(--spacing-3xl) 0;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
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

.stat-change .material-symbols-outlined {
    font-size: 1rem;
}

/* Recent Updates */
.recent-updates {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.updates-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.update-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.update-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
}

.update-category {
    display: flex;
    align-items: center;
    gap: var(--spacing-xs);
    margin-bottom: var(--spacing-md);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.update-category.health {
    color: var(--error);
}

.update-category.environmental {
    color: var(--tertiary);
}

.update-category.digital {
    color: var(--primary);
}

.update-category .material-symbols-outlined {
    font-size: 1rem;
}

.update-title {
    font-size: 1.125rem;
    font-weight: 600;
    color: var(--on-surface);
    margin-bottom: var(--spacing-sm);
}

.update-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-md);
}

.update-meta {
    display: flex;
    gap: var(--spacing-lg);
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

/* Quick Access */
.quick-access {
    padding: var(--spacing-3xl) 0;
}

.quick-links {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: var(--spacing-lg);
}

.quick-link {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: var(--spacing-md);
    padding: var(--spacing-xl);
    background-color: var(--surface-container-lowest);
    border: 1px solid var(--outline-variant);
    border-radius: var(--radius-lg);
    color: var(--on-surface);
    text-decoration: none;
    transition: all 0.3s ease;
}

.quick-link:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    border-color: var(--primary);
    color: var(--primary);
}

.quick-link .material-symbols-outlined {
    font-size: 2rem;
}

/* Help Section */
.help-section {
    padding: var(--spacing-3xl) 0;
    background: linear-gradient(135deg, var(--surface-container) 0%, var(--surface-container-high) 100%);
}

.help-content {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: var(--spacing-xl);
    align-items: center;
}

.help-title {
    font-size: 2rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.help-description {
    font-size: 1.125rem;
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-xl);
}

.help-actions {
    display: flex;
    gap: var(--spacing-lg);
    flex-wrap: wrap;
}

.help-stats {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-lg);
}

.stat-item {
    text-align: center;
    padding: var(--spacing-lg);
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
}

.stat-number {
    display: block;
    font-size: 1.5rem;
    font-weight: 800;
    color: var(--primary);
    margin-bottom: var(--spacing-xs);
}

.stat-label {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

/* Responsive Design */
@media (max-width: 768px) {
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
    
    .updates-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .quick-links {
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: var(--spacing-md);
    }
    
    .help-content {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .help-stats {
        flex-direction: row;
        justify-content: center;
    }
    
    .help-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .help-actions .btn {
        width: 100%;
        max-width: 300px;
    }
}

@media (max-width: 480px) {
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
    
    .stat-number {
        font-size: 1.5rem;
    }
    
    .quick-link {
        padding: var(--spacing-lg);
    }
    
    .quick-link .material-symbols-outlined {
        font-size: 1.5rem;
    }
    
    .help-title {
        font-size: 1.5rem;
    }
}
</style>
