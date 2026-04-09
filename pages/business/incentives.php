<?php
/**
 * Bamenda City Council E-Governance Platform
 * Business Incentives Page
 */

// Set page metadata
$page_title = 'Business Incentives | Bamenda City Council';
$page_description = 'Access business incentives, tax benefits, investment opportunities, and support programs for businesses in Bamenda.';
$page_keywords = 'business incentives, tax benefits, investment opportunities, business support, Bamenda business programs';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Business', 'url' => '../index.php'],
    ['title' => 'Incentives', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero business-incentives-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-business-support.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Business Incentives</span>
            <h1 class="hero-title">Business Incentives & Investment</h1>
            <p class="hero-subtitle">
                Comprehensive business incentives including tax benefits, investment opportunities, grants, and support programs to attract and retain businesses in Bamenda.
            </p>
            <div class="hero-actions">
                <a href="#incentive-programs" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">savings</span>
                    Incentive Programs
                </a>
                <a href="#investment-opportunities" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">trending_up</span>
                    Investment
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Incentive Actions</h2>
            <p class="section-subtitle">Quick access to business incentive programs</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openTaxIncentives()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">receipt_long</span>
                </div>
                <h3 class="action-title">Tax Incentives</h3>
                <p class="action-description">Tax relief and benefits</p>
            </div>

            <div class="action-card" onclick="openInvestment()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">account_balance</span>
                </div>
                <h3 class="action-title">Investment Support</h3>
                <p class="action-description">Investment opportunities</p>
            </div>

            <div class="action-card" onclick="openGrants()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">card_giftcard</span>
                </div>
                <h3 class="action-title">Business Grants</h3>
                <p class="action-description">Grant funding programs</p>
            </div>

            <div class="action-card" onclick="openInfrastructure()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">domain</span>
                </div>
                <h3 class="action-title">Infrastructure Support</h3>
                <p class="action-description">Business infrastructure</p>
            </div>

            <div class="action-card" onclick="openTraining()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <h3 class="action-title">Training Grants</h3>
                <p class="action-description">Workforce development</p>
            </div>

            <div class="action-card" onclick="openExport()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">language</span>
                </div>
                <h3 class="action-title">Export Support</h3>
                <p class="action-description">International trade</p>
            </div>
        </div>
    </div>
</section>

<!-- Incentives Statistics -->
<section class="incentives-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">business</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">1,234</div>
                    <div class="stat-label">Businesses Supported</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+156 this year</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">savings</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">₣125M</div>
                    <div class="stat-label">Incentives Disbursed</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+₣25M this year</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">trending_up</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">₣450M</div>
                    <div class="stat-label">Investment Attracted</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+₣89M this year</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">verified</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">87%</div>
                    <div class="stat-label">Success Rate</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+12% improvement</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Incentive Programs -->
<section class="incentive-programs-section" id="incentive-programs">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Business Incentive Programs</h2>
            <p class="section-subtitle">Comprehensive incentive programs to support business growth and investment</p>
        </div>

        <div class="programs-grid">
            <!-- Tax Incentives -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">receipt_long</span>
                    </div>
                    <div class="program-badge flagship">Flagship</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Tax Incentive Program</h3>
                    <p class="program-description">Comprehensive tax relief programs including reduced tax rates, tax holidays, and special tax incentives for qualifying businesses.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Corporate tax reduction (up to 50%)</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Tax holidays (2-5 years)</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Import duty exemptions</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>VAT relief programs</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">234</span>
                            <span class="stat-label">Businesses Benefited</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">₣45M</span>
                            <span class="stat-label">Tax Savings</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Investment Support -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">account_balance</span>
                    </div>
                    <div class="program-badge popular">Popular</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Investment Support Program</h3>
                    <p class="program-description">Financial support and investment facilitation for businesses looking to expand, modernize, or establish operations in Bamenda.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Investment facilitation</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Capital investment grants</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Low-interest financing</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Investor matching services</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">156</span>
                            <span class="stat-label">Investments Supported</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">₣234M</span>
                            <span class="stat-label">Total Investment</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- SME Development -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">store</span>
                    </div>
                    <div class="program-badge active">Active</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">SME Development Program</h3>
                    <p class="program-description">Specialized support for small and medium enterprises including grants, training, and business development services.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Business development grants</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Technical assistance</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Market access support</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Capacity building programs</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">456</span>
                            <span class="stat-label">SMEs Supported</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">₣67M</span>
                            <span class="stat-label">Support Value</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Export Promotion -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">language</span>
                    </div>
                    <div class="program-badge expanding">Expanding</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Export Promotion Program</h3>
                    <p class="program-description">Support for businesses looking to export products and services including market research, trade missions, and export financing.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Export market research</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Trade mission support</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Export financing</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>International certification</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">89</span>
                            <span class="stat-label">Exporters Supported</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">₣34M</span>
                            <span class="stat-label">Export Revenue</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Infrastructure Support -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">domain</span>
                    </div>
                    <div class="program-badge active">Active</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Infrastructure Support Program</h3>
                    <p class="program-description">Support for business infrastructure development including utilities, roads, and communication facilities.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Utility connection subsidies</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Infrastructure development</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Industrial park access</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Technology infrastructure</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">123</span>
                            <span class="stat-label">Projects Supported</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">₣89M</span>
                            <span class="stat-label">Infrastructure Value</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Innovation Grants -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">lightbulb</span>
                    </div>
                    <div class="program-badge new">New</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Innovation & Technology Grants</h3>
                    <p class="program-description">Grants and support for businesses investing in innovation, technology adoption, and research and development.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>R&D funding</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Technology adoption grants</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Innovation incubation</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Patent support</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">67</span>
                            <span class="stat-label">Innovation Projects</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">₣23M</span>
                            <span class="stat-label">Grant Funding</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Investment Opportunities -->
<section class="investment-opportunities-section" id="investment-opportunities">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Investment Opportunities</h2>
            <p class="section-subtitle">Explore investment opportunities in Bamenda's growing economy</p>
        </div>

        <div class="investment-grid">
            <!-- Manufacturing Investment -->
            <div class="investment-card">
                <div class="investment-header">
                    <div class="investment-icon">
                        <span class="material-symbols-outlined">factory</span>
                    </div>
                    <div class="investment-badge high-potential">High Potential</div>
                </div>
                <div class="investment-content">
                    <h3 class="investment-title">Manufacturing & Processing</h3>
                    <p class="investment-description">Investment opportunities in agro-processing, manufacturing, and industrial development with favorable incentives and market access.</p>
                    <div class="investment-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">trending_up</span>
                            <span>Growth Rate: 15% annually</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Investment Range: ₣5M - ₣100M</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>ROI Period: 3-5 years</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">savings</span>
                            <span>Available Incentives: Tax holidays, land subsidies</span>
                        </div>
                    </div>
                    <div class="investment-sectors">
                        <h4 class="sectors-title">Key Sectors:</h4>
                        <div class="sectors-list">
                            <div class="sector-item">Agro-processing</div>
                            <div class="sector-item">Textile manufacturing</div>
                            <div class="sector-item">Food processing</div>
                            <div class="sector-item">Construction materials</div>
                        </div>
                    </div>
                    <div class="investment-actions">
                        <button class="btn btn-sm btn-primary">Invest Now</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- Technology Investment -->
            <div class="investment-card">
                <div class="investment-header">
                    <div class="investment-icon">
                        <span class="material-symbols-outlined">computer</span>
                    </div>
                    <div class="investment-badge emerging">Emerging</div>
                </div>
                <div class="investment-content">
                    <h3 class="investment-title">Technology & Digital Services</h3>
                    <p class="investment-description">Growing technology sector with opportunities in software development, IT services, and digital innovation.</p>
                    <div class="investment-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">trending_up</span>
                            <span>Growth Rate: 25% annually</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Investment Range: ₣2M - ₣50M</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>ROI Period: 2-4 years</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">savings</span>
                            <span>Available Incentives: Innovation grants, tax relief</span>
                        </div>
                    </div>
                    <div class="investment-sectors">
                        <h4 class="sectors-title">Key Sectors:</h4>
                        <div class="sectors-list">
                            <div class="sector-item">Software development</div>
                            <div class="sector-item">IT services</div>
                            <div class="sector-item">Digital marketing</div>
                            <div class="sector-item">E-commerce platforms</div>
                        </div>
                    </div>
                    <div class="investment-actions">
                        <button class="btn btn-sm btn-primary">Invest Now</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- Agriculture Investment -->
            <div class="investment-card">
                <div class="investment-header">
                    <div class="investment-icon">
                        <span class="material-symbols-outlined">agriculture</span>
                    </div>
                    <div class="investment-badge established">Established</div>
                </div>
                <div class="investment-content">
                    <h3 class="investment-title">Agriculture & Agribusiness</h3>
                    <p class="investment-description">Strong agricultural sector with opportunities in modern farming, agribusiness, and value-added processing.</p>
                    <div class="investment-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">trending_up</span>
                            <span>Growth Rate: 12% annually</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Investment Range: ₣3M - ₣75M</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>ROI Period: 3-6 years</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">savings</span>
                            <span>Available Incentives: Land access, equipment subsidies</span>
                        </div>
                    </div>
                    <div class="investment-sectors">
                        <h4 class="sectors-title">Key Sectors:</h4>
                        <div class="sectors-list">
                            <div class="sector-item">Commercial farming</div>
                            <div class="sector-item">Livestock production</div>
                            <div class="sector-item">Agro-processing</div>
                            <div class="sector-item">Organic agriculture</div>
                        </div>
                    </div>
                    <div class="investment-actions">
                        <button class="btn btn-sm btn-primary">Invest Now</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- Tourism Investment -->
            <div class="investment-card">
                <div class="investment-header">
                    <div class="investment-icon">
                        <span class="material-symbols-outlined">hotel</span>
                    </div>
                    <div class="investment-badge growing">Growing</div>
                </div>
                <div class="investment-content">
                    <h3 class="investment-title">Tourism & Hospitality</h3>
                    <p class="investment-description">Developing tourism sector with opportunities in hospitality, eco-tourism, and cultural tourism.</p>
                    <div class="investment-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">trending_up</span>
                            <span>Growth Rate: 18% annually</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Investment Range: ₣4M - ₣60M</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>ROI Period: 4-7 years</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">savings</span>
                            <span>Available Incentives: Tourism tax relief, marketing support</span>
                        </div>
                    </div>
                    <div class="investment-sectors">
                        <h4 class="sectors-title">Key Sectors:</h4>
                        <div class="sectors-list">
                            <div class="sector-item">Hotels & resorts</div>
                            <div class="sector-item">Restaurants</div>
                            <div class="sector-item">Tour operators</div>
                            <div class="sector-item">Cultural tourism</div>
                        </div>
                    </div>
                    <div class="investment-actions">
                        <button class="btn btn-sm btn-primary">Invest Now</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Incentive Application -->
<section class="incentive-application-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Business Incentive Application</h2>
            <p class="section-subtitle">Apply for business incentives and investment support</p>
        </div>

        <div class="application-content">
            <div class="application-form">
                <h3 class="form-title">Incentive Program Application</h3>
                <form id="incentiveApplicationForm">
                    <div class="form-section">
                        <h4 class="section-title">Business Information</h4>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Business Name *</label>
                                <input type="text" class="form-input" placeholder="Enter your business name" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Business Registration Number *</label>
                                <input type="text" class="form-input" placeholder="Enter registration number" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Business Type *</label>
                                <select class="form-select" required>
                                    <option value="">Select business type</option>
                                    <option value="startup">Startup</option>
                                    <option value="sme">Small/Medium Enterprise</option>
                                    <option value="large">Large Enterprise</option>
                                    <option value="investment">New Investment</option>
                                    <option value="expansion">Business Expansion</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Industry Sector *</label>
                                <select class="form-select" required>
                                    <option value="">Select industry</option>
                                    <option value="manufacturing">Manufacturing</option>
                                    <option value="technology">Technology</option>
                                    <option value="agriculture">Agriculture</option>
                                    <option value="tourism">Tourism & Hospitality</option>
                                    <option value="services">Professional Services</option>
                                    <option value="retail">Retail & Trade</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Years in Operation *</label>
                                <input type="number" class="form-input" placeholder="Number of years" min="0" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Number of Employees *</label>
                                <input type="number" class="form-input" placeholder="Number of employees" min="1" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Business Description *</label>
                            <textarea class="form-textarea" rows="4" placeholder="Describe your business, products, and services" required></textarea>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Incentive Requirements</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Incentive Program *</label>
                            <select class="form-select" required>
                                <option value="">Select incentive program</option>
                                <option value="tax-incentives">Tax Incentive Program</option>
                                <option value="investment-support">Investment Support Program</option>
                                <option value="sme-development">SME Development Program</option>
                                <option value="export-promotion">Export Promotion Program</option>
                                <option value="infrastructure">Infrastructure Support Program</option>
                                <option value="innovation">Innovation & Technology Grants</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Investment Amount *</label>
                            <input type="number" class="form-input" placeholder="Enter investment amount in FCFA" min="0" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Project Timeline *</label>
                            <textarea class="form-textarea" rows="3" placeholder="Describe your project timeline and milestones" required></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Expected Outcomes *</label>
                            <textarea class="form-textarea" rows="3" placeholder="Describe expected outcomes and impact" required></textarea>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Contact Information</h4>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Contact Person *</label>
                                <input type="text" class="form-input" placeholder="Full name of contact person" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Position *</label>
                                <input type="text" class="form-input" placeholder="Position in business" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Phone Number *</label>
                                <input type="tel" class="form-input" placeholder="+237 233 000 000" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email Address *</label>
                                <input type="email" class="form-input" placeholder="business@email.com" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Business Address *</label>
                            <input type="text" class="form-input" placeholder="Enter your business address" required>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Additional Information</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Supporting Documents</label>
                            <div class="file-upload">
                                <input type="file" id="incentiveUpload" accept=".pdf,.doc,.docx,.xls,.xlsx" multiple>
                                <label for="incentiveUpload" class="file-upload-label">
                                    <span class="material-symbols-outlined">upload_file</span>
                                    <span>Upload supporting documents</span>
                                    <small>Business plan, financial statements, project proposal (PDF, DOC, XLS)</small>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">How did you hear about our incentive programs? *</label>
                            <select class="form-select" required>
                                <option value="">Select option</option>
                                <option value="website">City Council Website</option>
                                <option value="social-media">Social Media</option>
                                <option value="friend">Business Colleague</option>
                                <option value="workshop">Business Workshop</option>
                                <option value="event">Business Event</option>
                                <option value="advertisement">Advertisement</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Declaration *</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="declaration" required>
                                    <span class="checkmark"></span>
                                    I declare that all information provided is accurate and complete. I understand that false information may result in the rejection of my application. I agree to comply with all program requirements and reporting obligations.
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="reset" class="btn btn-outline">Reset</button>
                        <button type="submit" class="btn btn-primary">Submit Application</button>
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
            <p class="section-subtitle">Common questions about business incentives</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Who is eligible for business incentives?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Eligibility varies by program but generally includes registered businesses operating in Bamenda, new investors, expanding businesses, and SMEs. Specific criteria may include minimum investment amounts, job creation targets, and sector requirements.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What types of incentives are available?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>We offer various incentives including tax relief, grants, low-interest financing, infrastructure support, training grants, and investment facilitation. The specific incentives depend on the program and business type.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How long does the application process take?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Application processing typically takes 4-6 weeks. Complex investment proposals may take 8-12 weeks. We provide regular updates and may request additional information during the review process.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Are there any obligations for receiving incentives?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, recipients must meet specific obligations including job creation targets, investment commitments, reporting requirements, and compliance with program terms. Failure to meet obligations may result in incentive repayment.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Can I apply for multiple incentive programs?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, businesses can apply for multiple programs if they meet the eligibility criteria. However, some incentives may be mutually exclusive, and we'll work with you to optimize the incentive package.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What support is available for foreign investors?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>We offer specialized support for foreign investors including investment facilitation, regulatory assistance, visa support, and access to special economic zones with enhanced incentives.</p>
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
/* Business Incentives Page Styles */
.business-incentives-hero {
    background: linear-gradient(135deg, var(--tertiary) 0%, var(--tertiary-container) 100%);
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
    background-color: var(--tertiary);
    color: var(--on-tertiary);
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
    color: var(--tertiary);
    margin-bottom: var(--spacing-md);
}

.action-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
}

/* Incentives Statistics Section */
.incentives-stats-section {
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
    background-color: var(--tertiary);
    color: var(--on-tertiary);
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
    color: var(--tertiary);
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

/* Incentive Programs Section */
.incentive-programs-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.programs-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.program-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.program-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.program-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.program-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--tertiary);
    color: var(--on-tertiary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.program-icon .material-symbols-outlined {
    font-size: 2rem;
}

.program-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.program-badge.flagship {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.program-badge.popular {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.program-badge.active {
    background-color: var(--primary);
    color: var(--on-primary);
}

.program-badge.expanding {
    background-color: var(--error);
    color: var(--on-error);
}

.program-badge.new {
    background-color: var(--surface-variant);
    color: var(--on-surface-variant);
}

.program-content {
    padding: var(--spacing-lg);
}

.program-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--tertiary);
    margin-bottom: var(--spacing-md);
}

.program-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.program-features {
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
}

.feature-item .material-symbols-outlined {
    font-size: 1rem;
    color: var(--tertiary);
}

.program-stats {
    display: flex;
    justify-content: space-around;
    margin-bottom: var(--spacing-lg);
    padding: var(--spacing-md);
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
}

.stat-item {
    text-align: center;
}

.stat-number {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--tertiary);
    display: block;
    margin-bottom: var(--spacing-xs);
}

.stat-label {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
    text-transform: uppercase;
}

.program-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Investment Opportunities Section */
.investment-opportunities-section {
    padding: var(--spacing-3xl) 0;
}

.investment-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.investment-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.investment-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.investment-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.investment-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--tertiary);
    color: var(--on-tertiary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.investment-icon .material-symbols-outlined {
    font-size: 2rem;
}

.investment-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.investment-badge.high-potential {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.investment-badge.emerging {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.investment-badge.established {
    background-color: var(--primary);
    color: var(--on-primary);
}

.investment-badge.growing {
    background-color: var(--error);
    color: var(--on-error);
}

.investment-content {
    padding: var(--spacing-lg);
}

.investment-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--tertiary);
    margin-bottom: var(--spacing-md);
}

.investment-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.investment-details {
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
    color: var(--tertiary);
}

.investment-sectors {
    margin-bottom: var(--spacing-lg);
}

.sectors-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--tertiary);
    margin-bottom: var(--spacing-sm);
}

.sectors-list {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-sm);
}

.sector-item {
    padding: var(--spacing-xs) var(--spacing-sm);
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.investment-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Incentive Application Section */
.incentive-application-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.application-content {
    display: flex;
    justify-content: center;
}

.application-form {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-2xl);
    border: 1px solid var(--outline-variant);
    max-width: 800px;
    width: 100%;
}

.form-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--tertiary);
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
    border-color: var(--tertiary);
    box-shadow: 0 0 0 2px var(--tertiary-container);
}

.form-textarea {
    resize: vertical;
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--spacing-lg);
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

.file-upload {
    position: relative;
    display: inline-block;
    width: 100%;
}

.file-upload input[type="file"] {
    display: none;
}

.file-upload-label {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: var(--spacing-sm);
    padding: var(--spacing-lg);
    border: 2px dashed var(--outline-variant);
    border-radius: var(--radius-lg);
    background-color: var(--surface-container);
    cursor: pointer;
    transition: all 0.2s ease;
}

.file-upload-label:hover {
    border-color: var(--tertiary);
    background-color: var(--tertiary-container);
}

.file-upload-label .material-symbols-outlined {
    font-size: 2rem;
    color: var(--tertiary);
}

.file-upload-label span {
    color: var(--on-surface);
}

.file-upload-label small {
    color: var(--on-surface-variant);
}

.checkbox-group {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
}

.checkbox-label {
    display: flex;
    align-items: flex-start;
    gap: var(--spacing-sm);
    cursor: pointer;
    color: var(--on-surface);
    line-height: 1.5;
}

.checkbox-label input[type="checkbox"] {
    display: none;
    margin-top: 2px;
}

.checkmark {
    width: 1.25rem;
    height: 1.25rem;
    border: 2px solid var(--outline-variant);
    border-radius: var(--radius-xs);
    position: relative;
    transition: all 0.2s ease;
    flex-shrink: 0;
    margin-top: 2px;
}

.checkbox-label input[type="checkbox"]:checked + .checkmark {
    background-color: var(--tertiary);
    border-color: var(--tertiary);
}

.checkbox-label input[type="checkbox"]:checked + .checkmark::after {
    content: '✓';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: var(--on-tertiary);
    font-size: 0.875rem;
    font-weight: 700;
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
    color: var(--tertiary);
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
    
    .programs-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .investment-grid {
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
    
    .program-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .investment-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .application-form {
        padding: var(--spacing-lg);
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
    
    .program-actions {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .program-actions .btn {
        width: 100%;
    }
    
    .investment-actions {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .investment-actions .btn {
        width: 100%;
    }
}
</style>

<script>
// Quick action functions
function openTaxIncentives() {
    document.getElementById('incentive-programs').scrollIntoView({ behavior: 'smooth' });
}

function openInvestment() {
    document.getElementById('investment-opportunities').scrollIntoView({ behavior: 'smooth' });
}

function openGrants() {
    document.getElementById('incentive-programs').scrollIntoView({ behavior: 'smooth' });
}

function openInfrastructure() {
    document.getElementById('incentive-programs').scrollIntoView({ behavior: 'smooth' });
}

function openTraining() {
    alert('Training grants portal would open here. In production, this would show workforce development programs, training opportunities, and skill development grants.');
}

function openExport() {
    document.getElementById('incentive-programs').scrollIntoView({ behavior: 'smooth' });
}

// Program actions
document.querySelectorAll('.program-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Apply')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
            alert(`Applying for: "${programTitle}"`);
        });
    }
});

document.querySelectorAll('.program-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('View')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
            alert(`Viewing details for: "${programTitle}"`);
        });
    }
});

// Investment actions
document.querySelectorAll('.investment-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Invest')) {
        button.addEventListener('click', function() {
            const investmentTitle = this.closest('.investment-card').querySelector('.investment-title').textContent;
            alert(`Investing in: "${investmentTitle}"`);
        });
    }
});

document.querySelectorAll('.investment-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Learn')) {
        button.addEventListener('click', function() {
            const investmentTitle = this.closest('.investment-card').querySelector('.investment-title').textContent;
            alert(`Learning more about: "${investmentTitle}"`);
        });
    }
});

// Incentive application form submission
document.getElementById('incentiveApplicationForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate required fields
    const businessName = document.querySelector('input[placeholder*="business name"]').value;
    const registrationNumber = document.querySelector('input[placeholder*="registration number"]').value;
    const businessType = document.querySelector('select[required]').value;
    const industry = document.querySelectorAll('select[required]')[1].value;
    const years = document.querySelector('input[type="number"]').value;
    const employees = document.querySelectorAll('input[type="number"]')[1].value;
    const description = document.querySelector('textarea[required]').value;
    const program = document.querySelectorAll('select[required]')[2].value;
    const investment = document.querySelector('input[placeholder*="investment"]').value;
    const timeline = document.querySelector('textarea[required]:not(:placeholder-shown)').value;
    const outcomes = document.querySelectorAll('textarea[required]:not(:placeholder-shown)')[1].value;
    const contactPerson = document.querySelector('input[placeholder*="contact person"]').value;
    const position = document.querySelector('input[placeholder*="position"]').value;
    const phone = document.querySelector('input[placeholder*="phone"]').value;
    const email = document.querySelector('input[placeholder*="email"]').value;
    const address = document.querySelector('input[placeholder*="address"]').value;
    const howHeard = document.querySelectorAll('select[required]')[3].value;
    const declaration = document.querySelector('input[name="declaration"]:checked');
    
    if (!businessName || !registrationNumber || !businessType || !industry || !years || !employees || !description || !program || !investment || !timeline || !outcomes || !contactPerson || !position || !phone || !email || !address || !howHeard || !declaration) {
        alert('Please fill in all required fields.');
        return;
    }
    
    // Validate email
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert('Please enter a valid email address.');
        return;
    }
    
    // Validate phone
    const phoneRegex = /^\+237\s\d{3}\s\d{3}\s\d{3}$/;
    if (!phoneRegex.test(phone)) {
        alert('Please enter a valid phone number in the format: +237 233 000 000');
        return;
    }
    
    alert('Business incentive application submitted successfully! We will review your application and contact you within 7-10 business days regarding the next steps in the approval process.');
    // In production, this would submit the application
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

// Auto-refresh incentives statistics
function refreshIncentivesStats() {
    // In production, this would fetch real-time incentives statistics
    console.log('Refreshing business incentives statistics...');
    
    // Simulate business count updates
    const businessCountElement = document.querySelector('.stat-number');
    if (businessCountElement && businessCountElement.textContent.includes(',')) {
        // Simulate real-time business support
        const currentCount = parseInt(businessCountElement.textContent.replace(',', ''));
        const increment = Math.floor(Math.random() * 3) + 1;
        const newCount = currentCount + increment;
        businessCountElement.textContent = newCount.toLocaleString();
    }
}

// Refresh statistics every 60 seconds
setInterval(refreshIncentivesStats, 60000);
</script>
