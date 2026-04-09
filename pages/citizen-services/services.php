<?php
/**
 * Bamenda City Council E-Governance Platform
 * Citizen Services Page
 */

// Set page metadata
$page_title = 'Citizen Services | Bamenda City Council';
$page_description = 'Access all citizen services including business licenses, permits, property registry, tax portal, and online payments.';
$page_keywords = 'citizen services, business license, permits, property registry, tax portal, online payments, Bamenda';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Services', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero services-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-government-building.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary badge-lg">Digital Services</span>
            <h1 class="hero-title">All Your Civic Needs in One Place</h1>
            <p class="hero-subtitle">
                From business licenses to property registration, access essential municipal services online with ease and convenience.
            </p>
            <div class="hero-actions">
                <a href="#services-grid" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">explore</span>
                    Browse Services
                </a>
                <a href="#quick-actions" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">bolt</span>
                    Quick Actions
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions Section -->
<section class="quick-actions-section" id="quick-actions">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Quick Actions</h2>
            <p class="section-subtitle">Frequently accessed services</p>
        </div>
        
        <div class="quick-actions-grid">
            <a href="business-license.php" class="quick-action-card">
                <div class="action-icon">
                    <span class="material-symbols-outlined">business</span>
                </div>
                <h3 class="action-title">Business License</h3>
                <p class="action-description">Apply for or renew your business license</p>
                <span class="action-arrow">
                    <span class="material-symbols-outlined">arrow_forward</span>
                </span>
            </a>

            <a href="permits.php" class="quick-action-card">
                <div class="action-icon">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <h3 class="action-title">Permits</h3>
                <p class="action-description">Construction, event, and special permits</p>
                <span class="action-arrow">
                    <span class="material-symbols-outlined">arrow_forward</span>
                </span>
            </a>

            <a href="property-registry.php" class="quick-action-card">
                <div class="action-icon">
                    <span class="material-symbols-outlined">apartment</span>
                </div>
                <h3 class="action-title">Property Registry</h3>
                <p class="action-description">Register and search property records</p>
                <span class="action-arrow">
                    <span class="material-symbols-outlined">arrow_forward</span>
                </span>
            </a>

            <a href="tax-portal.php" class="quick-action-card">
                <div class="action-icon">
                    <span class="material-symbols-outlined">receipt</span>
                </div>
                <h3 class="action-title">Tax Portal</h3>
                <p class="action-description">File taxes and view payment history</p>
                <span class="action-arrow">
                    <span class="material-symbols-outlined">arrow_forward</span>
                </span>
            </a>

            <a href="payments.php" class="quick-action-card">
                <div class="action-icon">
                    <span class="material-symbols-outlined">payments</span>
                </div>
                <h3 class="action-title">Online Payments</h3>
                <p class="action-description">Pay bills and fees securely online</p>
                <span class="action-arrow">
                    <span class="material-symbols-outlined">arrow_forward</span>
                </span>
            </a>

            <a href="service-history.php" class="quick-action-card">
                <div class="action-icon">
                    <span class="material-symbols-outlined">history</span>
                </div>
                <h3 class="action-title">Service History</h3>
                <p class="action-description">View your past applications and requests</p>
                <span class="action-arrow">
                    <span class="material-symbols-outlined">arrow_forward</span>
                </span>
            </a>
        </div>
    </div>
</section>

<!-- Services Grid Section -->
<section class="services-grid-section" id="services-grid">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">All Services</h2>
            <p class="section-subtitle">Complete list of available citizen services</p>
        </div>

        <div class="services-categories">
            <!-- Business Services -->
            <div class="service-category">
                <div class="category-header">
                    <span class="material-symbols-outlined">business</span>
                    <h3>Business Services</h3>
                </div>
                <div class="category-services">
                    <a href="business-license.php" class="service-item">
                        <div class="service-info">
                            <h4>Business License Application</h4>
                            <p>Apply for new business licenses or renew existing ones</p>
                        </div>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                    <a href="market-trader-portal.php" class="service-item">
                        <div class="service-info">
                            <h4>Market Trader Portal</h4>
                            <p>Register as a market trader and manage your stall</p>
                        </div>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                    <a href="public-tenders.php" class="service-item">
                        <div class="service-info">
                            <h4>Public Tenders</h4>
                            <p>View and apply for government tender opportunities</p>
                        </div>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </div>
            </div>

            <!-- Property & Land -->
            <div class="service-category">
                <div class="category-header">
                    <span class="material-symbols-outlined">home</span>
                    <h3>Property & Land</h3>
                </div>
                <div class="category-services">
                    <a href="property-registry.php" class="service-item">
                        <div class="service-info">
                            <h4>Property Registry</h4>
                            <p>Register property and search land records</p>
                        </div>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                    <a href="urban-planning-permits.php" class="service-item">
                        <div class="service-info">
                            <h4>Urban Planning Permits</h4>
                            <p>Construction and development permits</p>
                        </div>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                    <a href="land-valuation.php" class="service-item">
                        <div class="service-info">
                            <h4>Land Valuation</h4>
                            <p>Get official land valuation certificates</p>
                        </div>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </div>
            </div>

            <!-- Financial Services -->
            <div class="service-category">
                <div class="category-header">
                    <span class="material-symbols-outlined">account_balance</span>
                    <h3>Financial Services</h3>
                </div>
                <div class="category-services">
                    <a href="tax-portal.php" class="service-item">
                        <div class="service-info">
                            <h4>Tax Portal</h4>
                            <p>File taxes and manage tax payments</p>
                        </div>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                    <a href="payments.php" class="service-item">
                        <div class="service-info">
                            <h4>Online Payments</h4>
                            <p>Pay bills, fees, and fines online</p>
                        </div>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                    <a href="payment-methods.php" class="service-item">
                        <div class="service-info">
                            <h4>Payment Methods</h4>
                            <p>Manage your payment methods and wallets</p>
                        </div>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </div>
            </div>

            <!-- Civil Services -->
            <div class="service-category">
                <div class="category-header">
                    <span class="material-symbols-outlined">badge</span>
                    <h3>Civil Services</h3>
                </div>
                <div class="category-services">
                    <a href="civil-status.php" class="service-item">
                        <div class="service-info">
                            <h4>Civil Status Hub</h4>
                            <p>Birth, marriage, and death certificates</p>
                        </div>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                    <a href="digital-id.php" class="service-item">
                        <div class="service-info">
                            <h4>Digital ID Wallet</h4>
                            <p>Manage your digital identity documents</p>
                        </div>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                    <a href="document-vault.php" class="service-item">
                        <div class="service-info">
                            <h4>Document Vault</h4>
                            <p>Secure storage for important documents</p>
                        </div>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </div>
            </div>

            <!-- Permits & Licenses -->
            <div class="service-category">
                <div class="category-header">
                    <span class="material-symbols-outlined">verified</span>
                    <h3>Permits & Licenses</h3>
                </div>
                <div class="category-services">
                    <a href="permits.php" class="service-item">
                        <div class="service-info">
                            <h4>General Permits</h4>
                            <p>Event, construction, and special permits</p>
                        </div>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                    <a href="health-permits.php" class="service-item">
                        <div class="service-info">
                            <h4>Health Permits</h4>
                            <p>Food service and health-related permits</p>
                        </div>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                    <a href="environmental-permits.php" class="service-item">
                        <div class="service-info">
                            <h4>Environmental Permits</h4>
                            <p>Environmental compliance and waste permits</p>
                        </div>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </div>
            </div>

            <!-- Utilities & Infrastructure -->
            <div class="service-category">
                <div class="category-header">
                    <span class="material-symbols-outlined">power</span>
                    <h3>Utilities & Infrastructure</h3>
                </div>
                <div class="category-services">
                    <a href="water-services.php" class="service-item">
                        <div class="service-info">
                            <h4>Water Services</h4>
                            <p>Water connection and billing services</p>
                        </div>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                    <a href="waste-management.php" class="service-item">
                        <div class="service-info">
                            <h4>Waste Management</h4>
                            <p>Garbage collection and sanitation services</p>
                        </div>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                    <a href="public-transport.php" class="service-item">
                        <div class="service-info">
                            <h4>Public Transport</h4>
                            <p>Transport permits and route information</p>
                        </div>
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Help Section -->
<section class="help-section">
    <div class="container">
        <div class="help-content">
            <div class="help-info">
                <h2 class="help-title">Need Help?</h2>
                <p class="help-description">
                    Our support team is here to help you navigate our services and answer any questions you may have.
                </p>
                <div class="help-actions">
                    <a href="../help/contact.php" class="btn btn-primary">
                        <span class="material-symbols-outlined">support_agent</span>
                        Contact Support
                    </a>
                    <a href="../help/faq.php" class="btn btn-outline">
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
                    <span class="stat-number">< 2hrs</span>
                    <span class="stat-label">Average Response</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">98%</span>
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
/* Services Page Specific Styles */
.services-hero {
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-container) 100%);
}

/* Quick Actions Section */
.quick-actions-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.quick-actions-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-lg);
}

.quick-action-card {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: var(--spacing-xl);
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    text-decoration: none;
    color: var(--on-surface);
    transition: all 0.3s ease;
    border: 1px solid var(--outline-variant);
    position: relative;
    overflow: hidden;
}

.quick-action-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    border-color: var(--primary);
    color: var(--primary);
}

.action-icon {
    width: 4rem;
    height: 4rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: var(--spacing-lg);
    transition: all 0.3s ease;
}

.quick-action-card:hover .action-icon {
    background-color: var(--primary-container);
    transform: scale(1.1);
}

.action-icon .material-symbols-outlined {
    font-size: 2rem;
}

.action-title {
    font-size: 1.25rem;
    font-weight: 700;
    margin-bottom: var(--spacing-sm);
    transition: color 0.3s ease;
}

.action-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-md);
}

.action-arrow {
    position: absolute;
    top: var(--spacing-lg);
    right: var(--spacing-lg);
    opacity: 0;
    transform: translateX(-10px);
    transition: all 0.3s ease;
}

.quick-action-card:hover .action-arrow {
    opacity: 1;
    transform: translateX(0);
}

/* Services Grid Section */
.services-grid-section {
    padding: var(--spacing-3xl) 0;
}

.services-categories {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.service-category {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.service-category:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
}

.category-header {
    display: flex;
    align-items: center;
    gap: var(--spacing-md);
    padding: var(--spacing-lg);
    background-color: var(--primary);
    color: var(--on-primary);
}

.category-header .material-symbols-outlined {
    font-size: 1.5rem;
}

.category-header h3 {
    font-size: 1.125rem;
    font-weight: 700;
    margin: 0;
}

.category-services {
    padding: var(--spacing-md);
}

.service-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: var(--spacing-md);
    border-radius: var(--radius-md);
    text-decoration: none;
    color: var(--on-surface);
    transition: all 0.2s ease;
    margin-bottom: var(--spacing-xs);
}

.service-item:last-child {
    margin-bottom: 0;
}

.service-item:hover {
    background-color: var(--surface-container-low);
    color: var(--primary);
}

.service-info h4 {
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: var(--spacing-xs);
}

.service-info p {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    margin: 0;
}

.service-item .material-symbols-outlined {
    color: var(--on-surface-variant);
    transition: color 0.2s ease;
}

.service-item:hover .material-symbols-outlined {
    color: var(--primary);
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
@media (max-width: 1024px) {
    .services-categories {
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    }
    
    .help-content {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .help-stats {
        flex-direction: row;
        justify-content: center;
    }
}

@media (max-width: 768px) {
    .quick-actions-grid {
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: var(--spacing-md);
    }
    
    .quick-action-card {
        padding: var(--spacing-lg);
    }
    
    .services-categories {
        grid-template-columns: 1fr;
    }
    
    .help-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .help-actions .btn {
        width: 100%;
        max-width: 300px;
    }
    
    .help-stats {
        flex-direction: column;
        gap: var(--spacing-md);
    }
}

@media (max-width: 480px) {
    .section-title {
        font-size: 1.5rem;
    }
    
    .hero-title {
        font-size: 2rem;
    }
    
    .quick-action-card {
        padding: var(--spacing-md);
    }
    
    .action-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .action-icon .material-symbols-outlined {
        font-size: 1.5rem;
    }
    
    .action-title {
        font-size: 1.125rem;
    }
    
    .category-header {
        padding: var(--spacing-md);
    }
    
    .category-header h3 {
        font-size: 1rem;
    }
}
</style>
