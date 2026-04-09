<?php
/**
 * Bamenda City Council E-Governance Platform
 * Business Support Page
 */

// Set page metadata
$page_title = 'Business Support | Bamenda City Council';
$page_description = 'Access comprehensive business support services including mentorship, funding, training, and resources for entrepreneurs and businesses in Bamenda.';
$page_keywords = 'business support, entrepreneurship, funding, mentorship, business training, Bamenda business services';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Business', 'url' => '../index.php'],
    ['title' => 'Support', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero business-support-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-business-support.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary badge-lg">Business Support</span>
            <h1 class="hero-title">Business Support Services</h1>
            <p class="hero-subtitle">
                Comprehensive business support services including mentorship programs, funding opportunities, business training, and resources to help entrepreneurs and businesses in Bamenda thrive and grow.
            </p>
            <div class="hero-actions">
                <a href="#support-programs" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">support_agent</span>
                    Support Programs
                </a>
                <a href="#funding-opportunities" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">account_balance</span>
                    Funding Options
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Support Actions</h2>
            <p class="section-subtitle">Quick access to business support services</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openMentorship()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">psychology</span>
                </div>
                <h3 class="action-title">Business Mentorship</h3>
                <p class="action-description">Get guidance from experienced business mentors</p>
            </div>

            <div class="action-card" onclick="openFunding()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">account_balance</span>
                </div>
                <h3 class="action-title">Funding Support</h3>
                <p class="action-description">Access funding opportunities and financial assistance</p>
            </div>

            <div class="action-card" onclick="openTraining()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <h3 class="action-title">Business Training</h3>
                <p class="action-description">Develop skills through business training programs</p>
            </div>

            <div class="action-card" onclick="openConsulting()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">business_center</span>
                </div>
                <h3 class="action-title">Business Consulting</h3>
                <p class="action-description">Get professional business advice and consulting</p>
            </div>

            <div class="action-card" onclick="openIncubator()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">rocket_launch</span>
                </div>
                <h3 class="action-title">Business Incubator</h3>
                <p class="action-description">Join our startup incubator program</p>
            </div>

            <div class="action-card" onclick="openResources()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">library_books</span>
                </div>
                <h3 class="action-title">Business Resources</h3>
                <p class="action-description">Access business tools, templates, and guides</p>
            </div>
        </div>
    </div>
</section>

<!-- Support Statistics -->
<section class="support-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">support_agent</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">1,234</div>
                    <div class="stat-label">Businesses Supported</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+156 this month</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">psychology</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">89</div>
                    <div class="stat-label">Active Mentors</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+12 new mentors</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">account_balance</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">₣45M</div>
                    <div class="stat-label">Funding Disbursed</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+₣8M this quarter</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">verified</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">78%</div>
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

<!-- Support Programs -->
<section class="support-programs-section" id="support-programs">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Business Support Programs</h2>
            <p class="section-subtitle">Comprehensive programs to support business growth and development</p>
        </div>

        <div class="programs-grid">
            <!-- Mentorship Program -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">psychology</span>
                    </div>
                    <div class="program-badge active">Active</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Business Mentorship Program</h3>
                    <p class="program-description">Connect with experienced business mentors who provide guidance, advice, and support to help you navigate business challenges and achieve your goals.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>1-on-1 mentoring sessions</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Industry-specific guidance</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Business strategy development</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Networking opportunities</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">234</span>
                            <span class="stat-label">Active Mentees</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">89</span>
                            <span class="stat-label">Mentors Available</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">View Mentors</button>
                    </div>
                </div>
            </div>

            <!-- Startup Incubator -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">rocket_launch</span>
                    </div>
                    <div class="program-badge popular">Popular</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Startup Incubator Program</h3>
                    <p class="program-description">Comprehensive incubation program for early-stage startups providing workspace, mentorship, funding connections, and business development support.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Co-working space access</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Business development support</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Investor connections</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Legal and accounting support</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">45</span>
                            <span class="stat-label">Active Startups</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">6</span>
                            <span class="stat-label">Months Duration</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- Business Training -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">school</span>
                    </div>
                    <div class="program-badge active">Active</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Business Skills Training</h3>
                    <p class="program-description">Practical training programs covering essential business skills including financial management, marketing, operations, and leadership.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Financial management</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Digital marketing</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Business planning</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Leadership development</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">156</span>
                            <span class="stat-label">Training Sessions</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">2,345</span>
                            <span class="stat-label">Participants</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Enroll Now</button>
                        <button class="btn btn-sm btn-outline">View Schedule</button>
                    </div>
                </div>
            </div>

            <!-- Business Consulting -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">business_center</span>
                    </div>
                    <div class="program-badge active">Active</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Business Consulting Services</h3>
                    <p class="program-description">Professional consulting services providing expert advice on business strategy, operations, marketing, and growth planning.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Business strategy consulting</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Operations optimization</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Market analysis</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Growth planning</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">89</span>
                            <span class="stat-label">Consulting Projects</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">12</span>
                            <span class="stat-label">Expert Consultants</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Book Consultation</button>
                        <button class="btn btn-sm btn-outline">View Services</button>
                    </div>
                </div>
            </div>

            <!-- Market Access -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">storefront</span>
                    </div>
                    <div class="program-badge new">New</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Market Access Program</h3>
                    <p class="program-description">Help businesses access new markets, customers, and distribution channels through market research, networking, and promotional support.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Market research</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Trade show participation</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Distribution network</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Promotional campaigns</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">67</span>
                            <span class="stat-label">Businesses Helped</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">23</span>
                            <span class="stat-label">New Markets Accessed</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- Technology Support -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">computer</span>
                    </div>
                    <div class="program-badge active">Active</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Technology Adoption Support</h3>
                    <p class="program-description">Support businesses in adopting modern technology solutions including digital transformation, automation, and IT infrastructure development.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Digital transformation</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>IT infrastructure setup</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Software implementation</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Cybersecurity support</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">123</span>
                            <span class="stat-label">Businesses Digitized</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">45</span>
                            <span class="stat-label">Tech Solutions Implemented</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Get Support</button>
                        <button class="btn btn-sm btn-outline">View Solutions</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Funding Opportunities -->
<section class="funding-opportunities-section" id="funding-opportunities">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Funding Opportunities</h2>
            <p class="section-subtitle">Access various funding options and financial support for your business</p>
        </div>

        <div class="funding-grid">
            <!-- Business Grants -->
            <div class="funding-card">
                <div class="funding-header">
                    <div class="funding-icon">
                        <span class="material-symbols-outlined">card_giftcard</span>
                    </div>
                    <div class="funding-badge grant">Grant</div>
                </div>
                <div class="funding-content">
                    <h3 class="funding-title">Business Development Grants</h3>
                    <p class="funding-description">Non-repayable grants for business development, expansion, and innovation projects.</p>
                    <div class="funding-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Amount: ₣50,000 - ₣500,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Application Deadline: Monthly</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">business</span>
                            <span>Target: SMEs and Startups</span>
                        </div>
                    </div>
                    <div class="funding-requirements">
                        <h4 class="requirements-title">Requirements:</h4>
                        <ul class="requirements-list">
                            <li>Registered business in Bamenda</li>
                            <li>Minimum 6 months operation</li>
                            <li>Clear business development plan</li>
                            <li>Demonstrated growth potential</li>
                        </ul>
                    </div>
                    <div class="funding-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Business Loans -->
            <div class="funding-card">
                <div class="funding-header">
                    <div class="funding-icon">
                        <span class="material-symbols-outlined">account_balance</span>
                    </div>
                    <div class="funding-badge loan">Loan</div>
                </div>
                <div class="funding-content">
                    <h3 class="funding-title">Business Growth Loans</h3>
                    <p class="funding-description">Low-interest business loans for expansion, equipment purchase, and working capital needs.</p>
                    <div class="funding-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Amount: ₣100,000 - ₣5,000,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">percent</span>
                            <span>Interest Rate: 5-8% annually</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Repayment: 1-5 years</span>
                        </div>
                    </div>
                    <div class="funding-requirements">
                        <h4 class="requirements-title">Requirements:</h4>
                        <ul class="requirements-list">
                            <li>Minimum 1 year business operation</li>
                            <li>Positive cash flow</li>
                            <li>Collateral or guarantee</li>
                            <li>Business registration documents</li>
                        </ul>
                    </div>
                    <div class="funding-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Startup Investment -->
            <div class="funding-card">
                <div class="funding-header">
                    <div class="funding-icon">
                        <span class="material-symbols-outlined">trending_up</span>
                    </div>
                    <div class="funding-badge investment">Investment</div>
                </div>
                <div class="funding-content">
                    <h3 class="funding-title">Startup Investment Fund</h3>
                    <p class="funding-description">Equity investment for high-potential startups with innovative ideas and strong growth prospects.</p>
                    <div class="funding-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Investment: ₣500,000 - ₣10,000,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">pie_chart</span>
                            <span>Equity: 10-30% stake</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">rocket_launch</span>
                            <span>Focus: Tech and Innovation</span>
                        </div>
                    </div>
                    <div class="funding-requirements">
                        <h4 class="requirements-title">Requirements:</h4>
                        <ul class="requirements-list">
                            <li>Innovative business model</li>
                            <li>Scalable product/service</li>
                            <li>Strong team and vision</li>
                            <li>Market validation</li>
                        </ul>
                    </div>
                    <div class="funding-actions">
                        <button class="btn btn-sm btn-primary">Pitch Your Idea</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Microfinance -->
            <div class="funding-card">
                <div class="funding-header">
                    <div class="funding-icon">
                        <span class="material-symbols-outlined">account_balance_wallet</span>
                    </div>
                    <div class="funding-badge micro">Microfinance</div>
                </div>
                <div class="funding-content">
                    <h3 class="funding-title">Microfinance Support</h3>
                    <p class="funding-description">Small loans and financial support for micro-enterprises and informal businesses.</p>
                    <div class="funding-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Amount: ₣10,000 - ₣100,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">percent</span>
                            <span>Interest Rate: 3-5% monthly</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Repayment: 3-12 months</span>
                        </div>
                    </div>
                    <div class="funding-requirements">
                        <h4 class="requirements-title">Requirements:</h4>
                        <ul class="requirements-list">
                            <li>Business registration (optional)</li>
                            <li>Proof of business activity</li>
                            <li>Group guarantee (for groups)</li>
                            <li>Basic business records</li>
                        </ul>
                    </div>
                    <div class="funding-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Equipment Financing -->
            <div class="funding-card">
                <div class="funding-header">
                    <div class="funding-icon">
                        <span class="material-symbols-outlined">construction</span>
                    </div>
                    <div class="funding-badge equipment">Equipment</div>
                </div>
                <div class="funding-content">
                    <h3 class="funding-title">Equipment Financing</h3>
                    <p class="funding-description">Specialized financing for business equipment, machinery, and tools acquisition.</p>
                    <div class="funding-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Amount: ₣50,000 - ₣2,000,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">percent</span>
                            <span>Interest Rate: 6-10% annually</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Repayment: 1-3 years</span>
                        </div>
                    </div>
                    <div class="funding-requirements">
                        <h4 class="requirements-title">Requirements:</h4>
                        <ul class="requirements-list">
                            <li>Equipment quotation</li>
                            <li>Business registration</li>
                            <li>Down payment (20-30%)</li>
                            <li>Business financial statements</li>
                        </ul>
                    </div>
                    <div class="funding-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Crowdfunding -->
            <div class="funding-card">
                <div class="funding-header">
                    <div class="funding-icon">
                        <span class="material-symbols-outlined">groups</span>
                    </div>
                    <div class="funding-badge crowd">Crowdfunding</div>
                </div>
                <div class="funding-content">
                    <h3 class="funding-title">Crowdfunding Platform</h3>
                    <p class="funding-description">Platform to raise funds from the community for business projects and initiatives.</p>
                    <div class="funding-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Target: ₣10,000 - ₣1,000,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">percent</span>
                            <span>Platform Fee: 5% of funds raised</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Campaign Duration: 30-90 days</span>
                        </div>
                    </div>
                    <div class="funding-requirements">
                        <h4 class="requirements-title">Requirements:</h4>
                        <ul class="requirements-list">
                            <li>Compelling project story</li>
                            <li>Clear funding goals</li>
                            <li>Rewards for backers</li>
                            <li>Marketing plan</li>
                        </ul>
                    </div>
                    <div class="funding-actions">
                        <button class="btn btn-sm btn-primary">Start Campaign</button>
                        <button class="btn btn-sm btn-outline">View Projects</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Business Resources -->
<section class="business-resources-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Business Resources</h2>
            <p class="section-subtitle">Access valuable business tools, templates, and guides</p>
        </div>

        <div class="resources-grid">
            <!-- Business Planning -->
            <div class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <h3 class="resource-title">Business Planning Tools</h3>
                <p class="resource-description">Templates and guides for creating comprehensive business plans, financial projections, and strategic documents.</p>
                <div class="resource-items">
                    <div class="resource-item">
                        <span class="material-symbols-outlined">file_download</span>
                        <span>Business Plan Template</span>
                    </div>
                    <div class="resource-item">
                        <span class="material-symbols-outlined">file_download</span>
                        <span>Financial Projection Model</span>
                    </div>
                    <div class="resource-item">
                        <span class="material-symbols-outlined">file_download</span>
                        <span>Marketing Plan Template</span>
                    </div>
                    <div class="resource-item">
                        <span class="material-symbols-outlined">file_download</span>
                        <span>SWOT Analysis Guide</span>
                    </div>
                </div>
                <button class="btn btn-primary">Access Resources</button>
            </div>

            <!-- Legal Templates -->
            <div class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">gavel</span>
                </div>
                <h3 class="resource-title">Legal & Compliance</h3>
                <p class="resource-description">Legal templates, compliance guides, and regulatory information for businesses operating in Bamenda.</p>
                <div class="resource-items">
                    <div class="resource-item">
                        <span class="material-symbols-outlined">file_download</span>
                        <span>Partnership Agreement</span>
                    </div>
                    <div class="resource-item">
                        <span class="material-symbols-outlined">file_download</span>
                        <span>Employment Contract</span>
                    </div>
                    <div class="resource-item">
                        <span class="material-symbols-outlined">file_download</span>
                        <span>Terms of Service</span>
                    </div>
                    <div class="resource-item">
                        <span class="material-symbols-outlined">file_download</span>
                        <span>Privacy Policy</span>
                    </div>
                </div>
                <button class="btn btn-primary">Access Resources</button>
            </div>

            <!-- Financial Tools -->
            <div class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">calculate</span>
                </div>
                <h3 class="resource-title">Financial Management</h3>
                <p class="resource-description">Financial templates, budgeting tools, and accounting guides for effective financial management.</p>
                <div class="resource-items">
                    <div class="resource-item">
                        <span class="material-symbols-outlined">file_download</span>
                        <span>Budget Template</span>
                    </div>
                    <div class="resource-item">
                        <span class="material-symbols-outlined">file_download</span>
                        <span>Cash Flow Statement</span>
                    </div>
                    <div class="resource-item">
                        <span class="material-symbols-outlined">file_download</span>
                        <span>Invoice Template</span>
                    </div>
                    <div class="resource-item">
                        <span class="material-symbols-outlined">file_download</span>
                        <span>Expense Tracker</span>
                    </div>
                </div>
                <button class="btn btn-primary">Access Resources</button>
            </div>

            <!-- Marketing Resources -->
            <div class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">campaign</span>
                </div>
                <h3 class="resource-title">Marketing & Sales</h3>
                <p class="resource-description">Marketing templates, sales strategies, and promotional materials to grow your customer base.</p>
                <div class="resource-items">
                    <div class="resource-item">
                        <span class="material-symbols-outlined">file_download</span>
                        <span>Marketing Calendar</span>
                    </div>
                    <div class="resource-item">
                        <span class="material-symbols-outlined">file_download</span>
                        <span>Sales Proposal Template</span>
                    </div>
                    <div class="resource-item">
                        <span class="material-symbols-outlined">file_download</span>
                        <span>Social Media Plan</span>
                    </div>
                    <div class="resource-item">
                        <span class="material-symbols-outlined">file_download</span>
                        <span>Email Marketing Template</span>
                    </div>
                </div>
                <button class="btn btn-primary">Access Resources</button>
            </div>

            <!-- Operations -->
            <div class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">settings</span>
                </div>
                <h3 class="resource-title">Operations Management</h3>
                <p class="resource-description">Operational templates, process guides, and efficiency tools for smooth business operations.</p>
                <div class="resource-items">
                    <div class="resource-item">
                        <span class="material-symbols-outlined">file_download</span>
                        <span>Operations Manual</span>
                    </div>
                    <div class="resource-item">
                        <span class="material-symbols-outlined">file_download</span>
                        <span>Inventory Management</span>
                    </div>
                    <div class="resource-item">
                        <span class="material-symbols-outlined">file_download</span>
                        <span>Quality Control Checklist</span>
                    </div>
                    <div class="resource-item">
                        <span class="material-symbols-outlined">file_download</span>
                        <span>Project Plan Template</span>
                    </div>
                </div>
                <button class="btn btn-primary">Access Resources</button>
            </div>

            <!-- HR Resources -->
            <div class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">people</span>
                </div>
                <h3 class="resource-title">Human Resources</h3>
                <p class="resource-description">HR templates, employee management tools, and workplace policies for effective team management.</p>
                <div class="resource-items">
                    <div class="resource-item">
                        <span class="material-symbols-outlined">file_download</span>
                        <span>Employee Handbook</span>
                    </div>
                    <div class="resource-item">
                        <span class="material-symbols-outlined">file_download</span>
                        <span>Performance Review Form</span>
                    </div>
                    <div class="resource-item">
                        <span class="material-symbols-outlined">file_download</span>
                        <span>Job Description Template</span>
                    </div>
                    <div class="resource-item">
                        <span class="material-symbols-outlined">file_download</span>
                        <span>Onboarding Checklist</span>
                    </div>
                </div>
                <button class="btn btn-primary">Access Resources</button>
            </div>
        </div>
    </div>
</section>

<!-- Support Application -->
<section class="support-application-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Apply for Business Support</h2>
            <p class="section-subtitle">Submit your application for business support services</p>
        </div>

        <div class="application-content">
            <div class="application-form">
                <h3 class="form-title">Business Support Application</h3>
                <form id="supportApplicationForm">
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
                                    <option value="micro">Micro-enterprise</option>
                                    <option value="informal">Informal Business</option>
                                    <option value="social">Social Enterprise</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Industry Sector *</label>
                                <select class="form-select" required>
                                    <option value="">Select industry</option>
                                    <option value="technology">Technology</option>
                                    <option value="manufacturing">Manufacturing</option>
                                    <option value="agriculture">Agriculture</option>
                                    <option value="services">Services</option>
                                    <option value="retail">Retail</option>
                                    <option value="healthcare">Healthcare</option>
                                    <option value="education">Education</option>
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
                        <h4 class="section-title">Support Requirements</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Support Services Needed *</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="services" value="mentorship">
                                    <span class="checkmark"></span>
                                    Business Mentorship
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="services" value="funding">
                                    <span class="checkmark"></span>
                                    Funding/Financial Support
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="services" value="training">
                                    <span class="checkmark"></span>
                                    Business Training
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="services" value="consulting">
                                    <span class="checkmark"></span>
                                    Business Consulting
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="services" value="incubator">
                                    <span class="checkmark"></span>
                                    Incubator Program
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="services" value="technology">
                                    <span class="checkmark"></span>
                                    Technology Support
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Specific Challenges *</label>
                            <textarea class="form-textarea" rows="4" placeholder="Describe the specific challenges your business is facing" required></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Expected Outcomes *</label>
                            <textarea class="form-textarea" rows="3" placeholder="What do you hope to achieve through our support programs?" required></textarea>
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
                            <label class="form-label">How did you hear about our support programs? *</label>
                            <select class="form-select" required>
                                <option value="">Select option</option>
                                <option value="website">City Council Website</option>
                                <option value="social-media">Social Media</option>
                                <option value="friend">Friend/Colleague</option>
                                <option value="workshop">Business Workshop</option>
                                <option value="event">Business Event</option>
                                <option value="advertisement">Advertisement</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Support Documents</label>
                            <div class="file-upload">
                                <input type="file" id="supportUpload" accept=".pdf,.doc,.docx" multiple>
                                <label for="supportUpload" class="file-upload-label">
                                    <span class="material-symbols-outlined">upload_file</span>
                                    <span>Upload supporting documents</span>
                                    <small>Business registration, financial statements, business plan (PDF, DOC, DOCX)</small>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Declaration *</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="declaration" required>
                                    <span class="checkmark"></span>
                                    I declare that all information provided is accurate and complete. I understand that false information may result in the rejection of my application. I agree to participate in program evaluation and provide feedback on the support received.
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
            <p class="section-subtitle">Common questions about business support services</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Who is eligible for business support services?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Any registered business or entrepreneur operating in Bamenda is eligible. Priority is given to startups, SMEs, and businesses with high growth potential. Some programs may have specific eligibility criteria based on business size, industry, or stage of development.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Are the support services free?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Many of our support services are free or heavily subsidized through government partnerships. Some specialized services like advanced consulting or premium incubator programs may require a fee. Scholarships and payment plans are available for businesses that cannot afford the fees.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How long does it take to get support?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Processing time varies by program. Basic support services can be accessed within 1-2 weeks. Mentorship matching takes 2-3 weeks. Funding applications may take 4-6 weeks for review and approval. Incubator programs have specific intake periods with defined timelines.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What types of funding are available?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>We offer various funding options including grants (non-repayable), low-interest loans, equity investments, microfinance, equipment financing, and crowdfunding support. The best option depends on your business stage, funding needs, and growth potential.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How are mentors selected and matched?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Mentors are experienced business professionals and entrepreneurs who volunteer their time. We match mentors based on industry expertise, business stage, and specific needs. The matching process considers your business challenges, goals, and mentor availability.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Can I apply for multiple support programs?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, you can apply for multiple support programs as long as you meet the eligibility criteria for each. However, some programs may have exclusivity requirements or limited capacity. Our team will help you choose the most appropriate combination of services for your business needs.</p>
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
/* Business Support Page Styles */
.business-support-hero {
    background: linear-gradient(135deg, var(--secondary) 0%, var(--secondary-container) 100%);
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
    background-color: var(--secondary);
    color: var(--on-secondary);
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
    color: var(--secondary);
    margin-bottom: var(--spacing-md);
}

.action-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
}

/* Support Statistics Section */
.support-stats-section {
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
    background-color: var(--secondary);
    color: var(--on-secondary);
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
    color: var(--secondary);
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

/* Support Programs Section */
.support-programs-section {
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
    background-color: var(--secondary);
    color: var(--on-secondary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.program-icon .material-symbols-outlined {
    font-size: 2rem;
}

.program-badge {
    padding: var(--spacing-xs) var(--spacing-md);
    border-radius: var(--radius-full);
    font-size: 0.7rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.025em;
    white-space: nowrap;
    line-height: 1.2;
}

.program-badge.active {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.program-badge.popular {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.program-badge.new {
    background-color: var(--primary);
    color: var(--on-primary);
}

.program-content {
    padding: var(--spacing-lg);
}

.program-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--secondary);
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
    color: var(--secondary);
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

/* Funding Opportunities Section */
.funding-opportunities-section {
    padding: var(--spacing-3xl) 0;
}

.funding-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.funding-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.funding-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.funding-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.funding-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--tertiary);
    color: var(--on-tertiary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.funding-icon .material-symbols-outlined {
    font-size: 2rem;
}

.funding-badge {
    padding: var(--spacing-xs) var(--spacing-md);
    border-radius: var(--radius-full);
    font-size: 0.65rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.01em;
    white-space: nowrap;
    line-height: 1.2;
}

.funding-badge.grant {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.funding-badge.loan {
    background-color: var(--primary);
    color: var(--on-primary);
}

.funding-badge.investment {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.funding-badge.micro {
    background-color: var(--surface-variant);
    color: var(--on-surface-variant);
}

.funding-badge.equipment {
    background-color: var(--outline-variant);
    color: var(--on-surface);
}

.funding-badge.crowd {
    background-color: var(--error);
    color: var(--on-error);
}

.funding-content {
    padding: var(--spacing-lg);
}

.funding-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--tertiary);
    margin-bottom: var(--spacing-md);
}

.funding-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.funding-details {
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

.funding-requirements {
    margin-bottom: var(--spacing-lg);
}

.requirements-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--tertiary);
    margin-bottom: var(--spacing-sm);
}

.requirements-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.requirements-list li {
    padding: var(--spacing-xs) 0;
    color: var(--on-surface-variant);
    position: relative;
    padding-left: var(--spacing-lg);
    line-height: 1.5;
}

.requirements-list li::before {
    content: '•';
    position: absolute;
    left: 0;
    color: var(--tertiary);
    font-weight: 700;
}

.funding-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Business Resources Section */
.business-resources-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.resources-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.resource-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.resource-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.resource-icon {
    width: 3rem;
    height: 3rem;
    background-color: var(--secondary);
    color: var(--on-secondary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-md);
}

.resource-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.resource-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--secondary);
    margin-bottom: var(--spacing-sm);
}

.resource-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.resource-items {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

.resource-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    justify-content: flex-start;
}

.resource-item .material-symbols-outlined {
    font-size: 1rem;
    color: var(--tertiary);
}

/* Support Application Section */
.support-application-section {
    padding: var(--spacing-3xl) 0;
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
    color: var(--secondary);
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
    border-color: var(--secondary);
    box-shadow: 0 0 0 2px var(--secondary-container);
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
    border-color: var(--secondary);
    background-color: var(--secondary-container);
}

.file-upload-label .material-symbols-outlined {
    font-size: 2rem;
    color: var(--secondary);
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
    background-color: var(--secondary);
    border-color: var(--secondary);
}

.checkbox-label input[type="checkbox"]:checked + .checkmark::after {
    content: '✓';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: var(--on-secondary);
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
    color: var(--secondary);
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
    
    .funding-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .resources-grid {
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
    
    .funding-actions {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .funding-actions .btn {
        width: 100%;
    }
}
</style>

<script>
// Quick action functions
function openMentorship() {
    document.getElementById('support-programs').scrollIntoView({ behavior: 'smooth' });
}

function openFunding() {
    document.getElementById('funding-opportunities').scrollIntoView({ behavior: 'smooth' });
}

function openTraining() {
    alert('Business training portal would open here. In production, this would show available training programs, schedules, and enrollment forms.');
}

function openConsulting() {
    alert('Business consulting portal would open here. In production, this would show consulting services, expert profiles, and booking forms.');
}

function openIncubator() {
    alert('Business incubator portal would open here. In production, this would show incubator program details, application forms, and success stories.');
}

function openResources() {
    document.querySelector('.business-resources-section').scrollIntoView({ behavior: 'smooth' });
}

// Program actions
document.querySelectorAll('.program-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Apply')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
            alert(`Applying for: "${programTitle}"`);
        });
    }
    
    if (button.textContent.includes('Book')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
            alert(`Booking consultation for: "${programTitle}"`);
        });
    }
    
    if (button.textContent.includes('Enroll')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
            alert(`Enrolling in: "${programTitle}"`);
        });
    }
    
    if (button.textContent.includes('Get')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
            alert(`Getting support from: "${programTitle}"`);
        });
    }
    
    if (button.textContent.includes('Start')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
            alert(`Starting campaign with: "${programTitle}"`);
        });
    }
    
    if (button.textContent.includes('Pitch')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
            alert(`Pitching to: "${programTitle}"`);
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
    
    if (button.textContent.includes('Learn')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
            alert(`Learning more about: "${programTitle}"`);
        });
    }
    
    if (button.textContent.includes('Schedule')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
            alert(`Viewing schedule for: "${programTitle}"`);
        });
    }
    
    if (button.textContent.includes('Services')) {
        button.addEventListener('click', this() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
            alert(`Viewing services for: "${programTitle}"`);
        });
    }
    
    if (button.textContent.includes('Solutions')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
            alert(`Viewing solutions for: "${programTitle}"`);
        });
    }
    
    if (button.textContent.includes('Projects')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
            alert(`Viewing projects for: "${programTitle}"`);
        });
    }
});

// Funding actions
document.querySelectorAll('.funding-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Apply')) {
        button.addEventListener('click', function() {
            const fundingTitle = this.closest('.funding-card').querySelector('.funding-title').textContent;
            alert(`Applying for: "${fundingTitle}"`);
        });
    }
});

document.querySelectorAll('.funding-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('View')) {
        button.addEventListener('click', function() {
            const fundingTitle = this.closest('.funding-card').querySelector('.funding-title').textContent;
            alert(`Viewing details for: "${fundingTitle}"`);
        });
    }
});

// Resource actions
document.querySelectorAll('.resource-card .btn-primary').forEach(button => {
    if (button.textContent.includes('Access')) {
        button.addEventListener('click', function() {
            const resourceTitle = this.closest('.resource-card').querySelector('.resource-title').textContent;
            alert(`Accessing: "${resourceTitle}"`);
        });
    }
});

// Support application form submission
document.getElementById('supportApplicationForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate required fields
    const businessName = document.querySelector('input[placeholder*="business name"]').value;
    const registrationNumber = document.querySelector('input[placeholder*="registration number"]').value;
    const businessType = document.querySelector('select[required]').value;
    const industry = document.querySelectorAll('select[required]')[1].value;
    const years = document.querySelector('input[type="number"]').value;
    const employees = document.querySelectorAll('input[type="number"]')[1].value;
    const description = document.querySelector('textarea[required]').value;
    const services = document.querySelectorAll('input[name="services"]:checked');
    const challenges = document.querySelectorAll('textarea[required]')[1].value;
    const outcomes = document.querySelectorAll('textarea[required]')[2].value;
    const contactPerson = document.querySelector('input[placeholder*="contact person"]').value;
    const position = document.querySelector('input[placeholder*="position"]').value;
    const phone = document.querySelector('input[placeholder*="phone"]').value;
    const email = document.querySelector('input[placeholder*="email"]').value;
    const address = document.querySelector('input[placeholder*="address"]').value;
    const howHeard = document.querySelector('select[required]:last-of-type').value;
    const declaration = document.querySelector('input[name="declaration"]:checked');
    
    if (!businessName || !registrationNumber || !businessType || !industry || !years || !employees || !description || services.length === 0 || !challenges || !outcomes || !contactPerson || !position || !phone || !email || !address || !howHeard || !declaration) {
        alert('Please fill in all required fields and select at least one support service.');
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
    
    alert('Business support application submitted successfully! We will review your application and contact you within 5-7 business days to discuss the next steps and match you with appropriate support programs.');
    // In production, this would submit the support application
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

// Auto-refresh support statistics
function refreshSupportStats() {
    // In production, this would fetch real-time support statistics
    console.log('Refreshing business support statistics...');
    
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
setInterval(refreshSupportStats, 60000);
</script>

