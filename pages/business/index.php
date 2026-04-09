<?php
/**
 * Bamenda City Council E-Governance Platform
 * Business Services Index Page
 */

// Set page metadata
$page_title = 'Business Services | Bamenda City Council';
$page_description = 'Comprehensive business services including market trader portal, business analytics, project management, and urban planning permits.';
$page_keywords = 'business services, market trader, business analytics, project management, urban planning, Bamenda business';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Business Services', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero business-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-business-support.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Business Services</span>
            <h1 class="hero-title">Grow Your Business</h1>
            <p class="hero-subtitle">
                Access comprehensive business services, market trading opportunities, analytics, and development resources for entrepreneurs and businesses in Bamenda.
            </p>
            <div class="hero-actions">
                <a href="market-trader.php" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">storefront</span>
                    Market Trader Portal
                </a>
                <a href="analytics.php" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">analytics</span>
                    Business Analytics
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Business Services Overview -->
<section class="business-services-sidebar">
    <div class="container">
        <div class="services-grid-sidebar">
            <!-- Market Trader Portal -->
            <div class="service-card">
                <div class="card-header">
                    <h3 class="card-title">
                        <span class="material-symbols-outlined">storefront</span>
                        Market Trader Portal
                    </h3>
                    <p class="card-description">
                        Buy, sell, and trade goods in the official Bamenda City Council marketplace.
                    </p>
                </div>
                <div class="card-content">
                    <div class="feature-list">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">shopping_cart</span>
                            <span class="feature-title">Buy & Sell</span>
                            <p>Access marketplace for trading goods and services</p>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">store</span>
                            <span class="feature-title">Market Analytics</span>
                            <p>Track sales, inventory, and customer insights</p>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span class="feature-title">Secure Payments</span>
                            <p>Safe and secure payment processing</p>
                        </div>
                    </div>
                    <div class="card-actions">
                        <a href="market-trader-portal.php" class="btn btn-primary">
                            <span class="material-symbols-outlined">storefront</span>
                            Access Portal
                        </a>
                    </div>
                </div>
            </div>

            <!-- Business Analytics -->
            <div class="service-card">
                <div class="card-header">
                    <h3 class="card-title">
                        <span class="material-symbols-outlined">analytics</span>
                        Business Analytics
                    </h3>
                    <p class="card-description">
                        Comprehensive analytics dashboard for business insights and performance tracking.
                    </p>
                </div>
                <div class="card-content">
                    <div class="feature-list">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">trending_up</span>
                            <span class="feature-title">Revenue Tracking</span>
                            <p>Monitor business revenue and financial performance</p>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">insights</span>
                            <span class="feature-title">Customer Analytics</span>
                            <p>Understand customer behavior and preferences</p>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">assessment</span>
                            <span class="feature-title">Performance Metrics</span>
                            <p>Track key business KPIs and growth indicators</p>
                        </div>
                    </div>
                    <div class="card-actions">
                        <a href="analytics.php" class="btn btn-primary">
                            <span class="material-symbols-outlined">analytics</span>
                            View Analytics
                        </a>
                    </div>
                </div>
            </div>

            <!-- Business Directory -->
            <div class="service-card">
                <div class="card-header">
                    <h3 class="card-title">
                        <span class="material-symbols-outlined">store</span>
                        Business Directory
                    </h3>
                    <p class="card-description">
                        Search and discover registered businesses in Bamenda City Council area.
                    </p>
                </div>
                <div class="card-content">
                    <div class="feature-list">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">search</span>
                            <span class="feature-title">Business Search</span>
                            <p>Find businesses by category, location, or name</p>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">contacts</span>
                            <span class="feature-title">Contact Directory</span>
                            <p>Get contact information for registered businesses</p>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">verified</span>
                            <span class="feature-title">Verified Listings</span>
                            <p>View verified and licensed businesses</p>
                        </div>
                    </div>
                    <div class="card-actions">
                        <a href="directory.php" class="btn btn-primary">
                            <span class="material-symbols-outlined">store</span>
                            Browse Directory
                        </a>
                    </div>
                </div>
            </div>

            <!-- Business Licensing -->
            <div class="service-card">
                <div class="card-header">
                    <h3 class="card-title">
                        <span class="material-symbols-outlined">verified</span>
                        Business Licensing
                    </h3>
                    <p class="card-description">
                        Apply for and manage business licenses, permits, and regulatory compliance.
                    </p>
                </div>
                <div class="card-content">
                    <div class="feature-list">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">app_registration</span>
                            <span class="feature-title">License Application</span>
                            <p>Submit new business license applications online</p>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">description</span>
                            <span class="feature-title">License Renewal</span>
                            <p>Renew existing business licenses quickly</p>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">history</span>
                            <span class="feature-title">Application Status</span>
                            <p>Track license application progress and status</p>
                        </div>
                    </div>
                    <div class="card-actions">
                        <a href="licensing.php" class="btn btn-primary">
                            <span class="material-symbols-outlined">verified</span>
                            Manage Licenses
                        </a>
                    </div>
                </div>
            </div>

            <!-- Business Permits -->
            <div class="service-card">
                <div class="card-header">
                    <h3 class="card-title">
                        <span class="material-symbols-outlined">description</span>
                        Business Permits
                    </h3>
                    <p class="card-description">
                        Apply for various business permits including construction, operation, and event permits.
                    </p>
                </div>
                <div class="card-content">
                    <div class="feature-list">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">gavel</span>
                            <span class="feature-title">Permit Application</span>
                            <p>Submit permit applications online</p>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">history</span>
                            <span class="feature-title">Permit Status</span>
                            <p>Check application status and requirements</p>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">assignment</span>
                            <span class="feature-title">Inspection Schedule</span>
                            <p>Schedule and track business inspections</p>
                        </div>
                    </div>
                    <div class="card-actions">
                        <a href="permits.php" class="btn btn-primary">
                            <span class="material-symbols-outlined">description</span>
                            Apply for Permits
                        </a>
                    </div>
                </div>
            </div>

            <!-- Business Registration -->
            <div class="service-card">
                <div class="card-header">
                    <h3 class="card-title">
                        <span class="material-symbols-outlined">app_registration</span>
                        Business Registration
                    </h3>
                    <p class="card-description">
                        Register new businesses and manage business profiles online.
                    </p>
                </div>
                <div class="card-content">
                    <div class="feature-list">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">business</span>
                            <span class="feature-title">New Registration</span>
                            <p>Register a new business with the council</p>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">edit</span>
                            <span class="feature-title">Update Profile</span>
                            <p>Update business information and details</p>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">history</span>
                            <span class="feature-title">Registration History</span>
                            <p>View past business registrations</p>
                        </div>
                    </div>
                    <div class="card-actions">
                        <a href="registration.php" class="btn btn-primary">
                            <span class="material-symbols-outlined">app_registration</span>
                            Register Business
                        </a>
                    </div>
                </div>
            </div>

            <!-- Urban Planning -->
            <div class="service-card">
                <div class="card-header">
                    <h3 class="card-title">
                        <span class="material-symbols-outlined">location_city</span>
                        Urban Planning
                    </h3>
                    <p class="card-description">
                        Access urban planning services, zoning information, and development guidelines.
                    </p>
                </div>
                <div class="card-content">
                    <div class="feature-list">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">map</span>
                            <span class="feature-title">Zoning Information</span>
                            <p>View zoning maps and regulations</p>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">domain</span>
                            <span class="feature-title">Development Plans</span>
                            <p>Submit urban development applications</p>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">architecture</span>
                            <span class="feature-title">Building Codes</span>
                            <p>Access building code requirements and permits</p>
                        </div>
                    </div>
                    <div class="card-actions">
                        <a href="urban-planning.php" class="btn btn-primary">
                            <span class="material-symbols-outlined">location_city</span>
                            Planning Services
                        </a>
                    </div>
                </div>
            </div>

            <!-- Business Support -->
            <div class="service-card">
                <div class="card-header">
                    <h3 class="card-title">
                        <span class="material-symbols-outlined">support_agent</span>
                        Business Support
                    </h3>
                    <p class="card-description">
                        Get help with business services, applications, and technical support.
                    </p>
                </div>
                <div class="card-content">
                    <div class="feature-list">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">help_center</span>
                            <span class="feature-title">Help Center</span>
                            <p>Access business guides and FAQs</p>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">contact_support</span>
                            <span class="feature-title">Contact Support</span>
                            <p>Get technical assistance and support</p>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span class="feature-title">Support Hours</span>
                            <p>View support availability and contact times</p>
                        </div>
                    </div>
                    <div class="card-actions">
                        <a href="support.php" class="btn btn-primary">
                            <span class="material-symbols-outlined">support_agent</span>
                            Get Support
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        </div>
    </div>
</section>

<!-- Business Services Overview -->
<section class="business-services">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Business Services</h2>
            <p class="section-subtitle">Comprehensive support for business growth and development</p>
        </div>

        <div class="services-grid">
            <a href="market-trader.php" class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">storefront</span>
                </div>
                <h3 class="service-title">Market Trader Portal</h3>
                <p class="service-description">Register as a market trader, manage your stall, and access market resources and support.</p>
                <div class="service-stats">
                    <span class="stat">456 Traders</span>
                    <span class="stat">12 Markets</span>
                </div>
            </a>

            <a href="analytics.php" class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">analytics</span>
                </div>
                <h3 class="service-title">Business Analytics</h3>
                <p class="service-description">Access market insights, business intelligence, and performance analytics.</p>
                <div class="service-stats">
                    <span class="stat">Real-time Data</span>
                    <span class="stat">Custom Reports</span>
                </div>
            </a>

            <a href="project-management.php" class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">assignment</span>
                </div>
                <h3 class="service-title">Project Management</h3>
                <p class="service-description">Manage business projects, track progress, and collaborate with team members.</p>
                <div class="service-stats">
                    <span class="stat">89 Projects</span>
                    <span class="stat">234 Teams</span>
                </div>
            </a>

            <a href="urban-planning.php" class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">location_city</span>
                </div>
                <h3 class="service-title">Urban Planning Permits</h3>
                <p class="service-description">Apply for construction, development, and urban planning permits online.</p>
                <div class="service-stats">
                    <span class="stat">Online Application</span>
                    <span class="stat">Fast Processing</span>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Business Statistics -->
<section class="business-stats">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Business Ecosystem</h2>
            <p class="section-subtitle">Key metrics and performance indicators</p>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">business</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">3,456</div>
                    <div class="stat-label">Active Businesses</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+12% this year</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">storefront</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">892</div>
                    <div class="stat-label">Market Traders</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+23% this quarter</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">work</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">12,456</div>
                    <div class="stat-label">Jobs Created</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+456 this month</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">trending_up</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">87%</div>
                    <div class="stat-label">Business Growth Rate</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+5% improvement</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Success Stories -->
<section class="success-stories">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Success Stories</h2>
            <p class="section-subtitle">Businesses thriving with our support</p>
        </div>

        <div class="stories-grid">
            <div class="story-card">
                <div class="story-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                         alt="Successful market trader who expanded their business through council support">
                </div>
                <div class="story-content">
                    <h3 class="story-title">From Stall to Store</h3>
                    <p class="story-description">
                        John Mankon started as a market trader and now owns a successful retail store employing 8 people.
                    </p>
                    <div class="story-meta">
                        <span class="business-type">Retail</span>
                        <span class="growth">300% Growth</span>
                    </div>
                </div>
            </div>

            <div class="story-card">
                <div class="story-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                         alt="Tech entrepreneur who leveraged business analytics to grow their startup">
                </div>
                <div class="story-content">
                    <h3 class="story-title">Data-Driven Success</h3>
                    <p class="story-description">
                        Sarah Nkwen used our business analytics platform to optimize operations and grow her tech startup.
                    </p>
                    <div class="story-meta">
                        <span class="business-type">Technology</span>
                        <span class="growth">500% Growth</span>
                    </div>
                </div>
            </div>

            <div class="story-card">
                <div class="story-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                         alt="Construction company that streamlined project management with council tools">
                </div>
                <div class="story-content">
                    <h3 class="story-title">Building Excellence</h3>
                    <p class="story-description">
                        Michael Bamendakwe streamlined his construction business using our project management tools.
                    </p>
                    <div class="story-meta">
                        <span class="business-type">Construction</span>
                        <span class="growth">200% Growth</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Business Resources -->
<section class="business-resources">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Business Resources</h2>
            <p class="section-subtitle">Tools and resources to help your business succeed</p>
        </div>

        <div class="resources-grid">
            <a href="#" class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <h3 class="resource-title">Business Templates</h3>
                <p class="resource-description">Download business plans, financial templates, and legal documents.</p>
                <div class="resource-action">
                    <span>Download</span>
                    <span class="material-symbols-outlined">download</span>
                </div>
            </a>

            <a href="#" class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <h3 class="resource-title">Training Programs</h3>
                <p class="resource-description">Business training workshops and online courses for skill development.</p>
                <div class="resource-action">
                    <span>Enroll</span>
                    <span class="material-symbols-outlined">arrow_forward</span>
                </div>
            </a>

            <a href="#" class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">handshake</span>
                </div>
                <h3 class="resource-title">Networking Events</h3>
                <p class="resource-description">Connect with other business owners and potential partners.</p>
                <div class="resource-action">
                    <span>Join</span>
                    <span class="material-symbols-outlined">arrow_forward</span>
                </div>
            </a>

            <a href="#" class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">savings</span>
                </div>
                <h3 class="resource-title">Funding Opportunities</h3>
                <p class="resource-description">Access grants, loans, and investment opportunities for your business.</p>
                <div class="resource-action">
                    <span>Apply</span>
                    <span class="material-symbols-outlined">arrow_forward</span>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Upcoming Events -->
<section class="upcoming-events">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Business Events</h2>
            <p class="section-subtitle">Networking and learning opportunities</p>
        </div>

        <div class="events-list">
            <div class="event-item">
                <div class="event-date">
                    <span class="day">18</span>
                    <span class="month">APR</span>
                </div>
                <div class="event-content">
                    <h3 class="event-title">Business Networking Mixer</h3>
                    <p class="event-description">Connect with local business owners and potential partners in a relaxed networking environment.</p>
                    <div class="event-meta">
                        <span class="location">City Hall Conference Room</span>
                        <span class="time">5:00 PM - 8:00 PM</span>
                    </div>
                </div>
                <button class="btn btn-primary btn-sm">Register</button>
            </div>

            <div class="event-item">
                <div class="event-date">
                    <span class="day">25</span>
                    <span class="month">APR</span>
                </div>
                <div class="event-content">
                    <h3 class="event-title">Digital Marketing Workshop</h3>
                    <p class="event-description">Learn effective digital marketing strategies to grow your online presence and customer base.</p>
                    <div class="event-meta">
                        <span class="location">Business Development Center</span>
                        <span class="time">9:00 AM - 1:00 PM</span>
                    </div>
                </div>
                <button class="btn btn-primary btn-sm">Register</button>
            </div>

            <div class="event-item">
                <div class="event-date">
                    <span class="day">30</span>
                    <span class="month">APR</span>
                </div>
                <div class="event-content">
                    <h3 class="event-title">Market Trader Forum</h3>
                    <p class="event-description">Monthly forum for market traders to discuss challenges, opportunities, and best practices.</p>
                    <div class="event-meta">
                        <span class="location">Main Market Hall</span>
                        <span class="time">10:00 AM - 12:00 PM</span>
                    </div>
                </div>
                <button class="btn btn-outline btn-sm">Attend</button>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Ready to Grow Your Business?</h2>
            <p class="cta-description">
                Join thousands of businesses that are thriving with our comprehensive support services and resources.
            </p>
            <div class="cta-actions">
                <a href="market-trader.php" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">storefront</span>
                    Start Trading
                </a>
                <a href="analytics.php" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">analytics</span>
                    Access Analytics
                </a>
            </div>
        </div>
    </div>
</section>

<?php
// Include footer
require_once __DIR__ . '/../../includes/footer.php';
?>

<style>
/* Business Services Page Styles */
.business-hero {
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-container) 100%);
}

/* Business Services Overview */
.business-services {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.services-grid-sidebar {
    display: flex;
    gap: var(--spacing-xl);
    align-items: start;
}

.service-card {
    flex: 1;
    min-width: 0;
}

@media (max-width: 1023px) {
    .services-grid-sidebar {
        flex-direction: column;
    }
    
    .service-card {
        width: 100%;
    }
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

.service-stats {
    display: flex;
    gap: var(--spacing-lg);
}

.stat {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    font-weight: 500;
}

/* Business Statistics */
.business-stats {
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

/* Success Stories */
.success-stories {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.stories-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.story-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    border: 1px solid var(--outline-variant);
}

.story-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
}

.story-image {
    height: 200px;
    overflow: hidden;
}

.story-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.story-card:hover .story-image img {
    transform: scale(1.05);
}

.story-content {
    padding: var(--spacing-lg);
}

.story-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.story-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-md);
}

.story-meta {
    display: flex;
    justify-content: space-between;
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.business-type {
    font-weight: 600;
}

.growth {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-weight: 600;
}

/* Business Resources */
.business-resources {
    padding: var(--spacing-3xl) 0;
}

.resources-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: var(--spacing-lg);
}

.resource-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
    text-decoration: none;
    color: var(--on-surface);
}

.resource-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    border-color: var(--primary);
}

.resource-icon {
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

.resource-action {
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-size: 0.875rem;
    font-weight: 600;
    color: var(--primary);
}

.resource-action .material-symbols-outlined {
    font-size: 1rem;
}

/* Upcoming Events */
.upcoming-events {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.events-list {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-lg);
    max-width: 800px;
    margin: 0 auto;
}

.event-item {
    display: grid;
    grid-template-columns: auto 1fr auto;
    gap: var(--spacing-lg);
    align-items: center;
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.2s ease;
}

.event-item:hover {
    background-color: var(--surface-container-low);
    transform: translateX(4px);
}

.event-date {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 4rem;
    height: 4rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    flex-shrink: 0;
}

.day {
    font-size: 1.5rem;
    font-weight: 800;
    line-height: 1;
}

.month {
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.event-content {
    flex: 1;
}

.event-title {
    font-size: 1.125rem;
    font-weight: 600;
    color: var(--on-surface);
    margin-bottom: var(--spacing-sm);
}

.event-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-sm);
}

.event-meta {
    display: flex;
    gap: var(--spacing-lg);
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

/* Call to Action */
.cta-section {
    padding: var(--spacing-3xl) 0;
    background: linear-gradient(135deg, var(--primary-container) 0%, var(--primary) 100%);
}

.cta-content {
    text-align: center;
    max-width: 600px;
    margin: 0 auto;
}

.cta-title {
    font-size: 2rem;
    font-weight: 700;
    color: var(--on-primary);
    margin-bottom: var(--spacing-md);
}

.cta-description {
    font-size: 1.125rem;
    color: var(--on-primary);
    line-height: 1.6;
    margin-bottom: var(--spacing-xl);
}

.cta-actions {
    display: flex;
    gap: var(--spacing-lg);
    justify-content: center;
    flex-wrap: wrap;
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
    
    .stories-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .resources-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .event-item {
        grid-template-columns: auto 1fr;
        gap: var(--spacing-md);
    }
    
    .event-item .btn {
        grid-column: 2;
        justify-self: start;
        margin-top: var(--spacing-sm);
    }
    
    .cta-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .cta-actions .btn {
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
    
    .resource-card {
        padding: var(--spacing-lg);
    }
    
    .resource-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .resource-icon .material-symbols-outlined {
        font-size: 1.5rem;
    }
    
    .event-date {
        width: 3rem;
        height: 3rem;
    }
    
    .day {
        font-size: 1.25rem;
    }
    
    .cta-title {
        font-size: 1.5rem;
    }
}
</style>
