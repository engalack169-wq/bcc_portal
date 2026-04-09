<?php
/**
 * Bamenda City Council E-Governance Platform
 * Market Trader Portal Page
 */

// Set page metadata
$page_title = 'Market Trader Portal | Bamenda City Council';
$page_description = 'Access market trader services, permits, market information, and business support for Bamenda market vendors.';
$page_keywords = 'market trader, market permits, vendor services, market business, Bamenda markets';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Business', 'url' => '../index.php'],
    ['title' => 'Market Trader Portal', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero market-trader-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-business-support.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Market Trader Portal</span>
            <h1 class="hero-title">Market Vendor Services</h1>
            <p class="hero-subtitle">
                Comprehensive services for market traders including permits, stall allocations, market information, and business support.
            </p>
            <div class="hero-actions">
                <a href="#trader-services" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">storefront</span>
                    Trader Services
                </a>
                <a href="#apply-permit" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">how_to_reg</span>
                    Apply for Permit
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Trader Actions</h2>
            <p class="section-subtitle">Quick access to market trader services</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openMarketPermit()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">badge</span>
                </div>
                <h3 class="action-title">Market Permit</h3>
                <p class="action-description">Apply for market trading permits and licenses</p>
            </div>

            <div class="action-card" onclick="openStallAllocation()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">store</span>
                </div>
                <h3 class="action-title">Stall Allocation</h3>
                <p class="action-description">Request market stall allocation and booking</p>
            </div>

            <div class="action-card" onclick="openMarketInformation()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">info</span>
                </div>
                <h3 class="action-title">Market Information</h3>
                <p class="action-description">View market schedules, locations, and regulations</p>
            </div>

            <div class="action-card" onclick="openTraderRegistration()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">how_to_reg</span>
                </div>
                <h3 class="action-title">Trader Registration</h3>
                <p class="action-description">Register as a market trader with the council</p>
            </div>

            <div class="action-card" onclick="openMarketPayments()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">payments</span>
                </div>
                <h3 class="action-title">Market Payments</h3>
                <p class="action-description">Pay market fees, permits, and other charges</p>
            </div>

            <div class="action-card" onclick="openTraderSupport()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">support_agent</span>
                </div>
                <h3 class="action-title">Trader Support</h3>
                <p class="action-description">Get assistance and support for market traders</p>
            </div>
        </div>
    </div>
</section>

<!-- Market Statistics -->
<section class="market-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">3,456</div>
                    <div class="stat-label">Registered Traders</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+234 this month</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">store</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">1,234</div>
                    <div class="stat-label">Market Stalls</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+45 new stalls</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">storefront</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">12</div>
                    <div class="stat-label">Active Markets</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+2 new markets</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">payments</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">₣45M</div>
                    <div class="stat-label">Monthly Revenue</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+12% growth</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trader Services -->
<section class="trader-services-section" id="trader-services">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Trader Services</h2>
            <p class="section-subtitle">Complete market trader support and services</p>
        </div>

        <div class="services-grid">
            <!-- Market Permit Service -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">badge</span>
                </div>
                <h3 class="service-title">Market Trading Permit</h3>
                <p class="service-description">Official market trading permits for vendors and traders operating in Bamenda markets.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Annual Trading Permit</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Temporary Permit</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Permit Renewal</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Permit Transfer</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Processing: 3-5 working days</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">payments</span>
                        <span>Cost: ₣15,000/year</span>
                    </div>
                </div>
                <button class="btn btn-primary">Apply Now</button>
            </div>

            <!-- Stall Allocation Service -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">store</span>
                </div>
                <h3 class="service-title">Stall Allocation</h3>
                <p class="service-description">Market stall allocation and booking services for registered traders.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Permanent Stall Allocation</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Daily Stall Booking</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Stall Transfer Request</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Stall Upgrade Options</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Processing: 2-3 working days</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">payments</span>
                        <span>Cost: ₣5,000/month</span>
                    </div>
                </div>
                <button class="btn btn-primary">Book Stall</button>
            </div>

            <!-- Market Information Service -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">info</span>
                </div>
                <h3 class="service-title">Market Information</h3>
                <p class="service-description">Comprehensive market information including schedules, locations, and trading guidelines.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Market Schedules</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Market Locations</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Trading Guidelines</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Market Regulations</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Real-time Updates</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">payments</span>
                        <span>Free Service</span>
                    </div>
                </div>
                <button class="btn btn-primary">View Markets</button>
            </div>

            <!-- Trader Registration Service -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">how_to_reg</span>
                </div>
                <h3 class="service-title">Trader Registration</h3>
                <p class="service-description">Official registration of market traders with Bamenda City Council.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>New Trader Registration</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Trader Profile Update</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Business Information</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Trader Verification</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Processing: 5-7 working days</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">payments</span>
                        <span>Cost: ₣2,500</span>
                    </div>
                </div>
                <button class="btn btn-primary">Register Now</button>
            </div>

            <!-- Market Payments Service -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">payments</span>
                </div>
                <h3 class="service-title">Market Payments</h3>
                <p class="service-description">Online payment system for market fees, permits, and other charges.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Online Payments</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Mobile Money</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Payment History</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Receipt Generation</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Instant Processing</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">payments</span>
                        <span>Secure Platform</span>
                    </div>
                </div>
                <button class="btn btn-primary">Make Payment</button>
            </div>

            <!-- Trader Support Service -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">support_agent</span>
                </div>
                <h3 class="service-title">Trader Support</h3>
                <p class="service-description">Dedicated support services for market traders including assistance and dispute resolution.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Trader Assistance</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Dispute Resolution</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Business Advisory</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Training Programs</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Available 24/7</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">payments</span>
                        <span>Free Support</span>
                    </div>
                </div>
                <button class="btn btn-primary">Get Support</button>
            </div>
        </div>
    </div>
</section>

<!-- Market Information -->
<section class="market-information-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Market Information</h2>
            <p class="section-subtitle">Details about Bamenda markets and trading facilities</p>
        </div>

        <div class="markets-grid">
            <!-- Central Market -->
            <div class="market-card">
                <div class="market-header">
                    <div class="market-image">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                             alt="central market showing busy trading area">
                    </div>
                    <div class="market-badge primary">Primary Market</div>
                </div>
                <div class="market-content">
                    <h3 class="market-title">Central Market</h3>
                    <p class="market-description">The largest and busiest market in Bamenda, offering a wide variety of goods and services.</p>
                    <div class="market-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>City Center, Bamenda</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Daily: 6 AM - 6 PM</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">store</span>
                            <span>450 Stalls Available</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>1,200+ Traders</span>
                        </div>
                    </div>
                    
                    <div class="market-features">
                        <h4>Market Features:</h4>
                        <div class="features-list">
                            <span class="feature-tag">Fresh Produce</span>
                            <span class="feature-tag">Textiles</span>
                            <span class="feature-tag">Electronics</span>
                            <span class="feature-tag">Food Court</span>
                            <span class="feature-tag">Parking</span>
                            <span class="feature-tag">Security</span>
                        </div>
                    </div>
                    
                    <div class="market-actions">
                        <button class="btn btn-sm btn-primary">Book Stall</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                        <button class="btn btn-sm btn-outline">Get Directions</button>
                    </div>
                </div>
            </div>

            <!-- Nkwen Market -->
            <div class="market-card">
                <div class="market-header">
                    <div class="market-image">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                             alt="nkwen market showing local vendors and traders">
                    </div>
                    <div class="market-badge secondary">Secondary Market</div>
                </div>
                <div class="market-content">
                    <h3 class="market-title">Nkwen Market</h3>
                    <p class="market-description">Popular local market serving the Nkwen community with fresh produce and household items.</p>
                    <div class="market-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Nkwen, Bamenda</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Daily: 7 AM - 5 PM</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">store</span>
                            <span>280 Stalls Available</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>800+ Traders</span>
                        </div>
                    </div>
                    
                    <div class="market-features">
                        <h4>Market Features:</h4>
                        <div class="features-list">
                            <span class="feature-tag">Fresh Produce</span>
                            <span class="feature-tag">Livestock</span>
                            <span class="feature-tag">Household Items</span>
                            <span class="feature-tag">Local Crafts</span>
                            <span class="feature-tag">Storage</span>
                            <span class="feature-tag">Water Supply</span>
                        </div>
                    </div>
                    
                    <div class="market-actions">
                        <button class="btn btn-sm btn-primary">Book Stall</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                        <button class="btn btn-sm btn-outline">Get Directions</button>
                    </div>
                </div>
            </div>

            <!-- Mankon Market -->
            <div class="market-card">
                <div class="market-header">
                    <div class="market-image">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                             alt="mankon market showing traditional market setting">
                    </div>
                    <div class="market-badge secondary">Secondary Market</div>
                </div>
                <div class="market-content">
                    <h3 class="market-title">Mankon Market</h3>
                    <p class="market-description">Traditional market serving Mankon area with focus on local products and cultural items.</p>
                    <div class="market-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Mankon, Bamenda</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Daily: 6:30 AM - 5:30 PM</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">store</span>
                            <span>220 Stalls Available</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>650+ Traders</span>
                        </div>
                    </div>
                    
                    <div class="market-features">
                        <h4>Market Features:</h4>
                        <div class="features-list">
                            <span class="feature-tag">Traditional Foods</span>
                            <span class="feature-tag">Cultural Items</span>
                            <span class="feature-tag">Local Crafts</span>
                            <span class="feature-tag">Medicinal Herbs</span>
                            <span class="feature-tag">Shade Areas</span>
                            <span class="feature-tag">Community Space</span>
                        </div>
                    </div>
                    
                    <div class="market-actions">
                        <button class="btn btn-sm btn-primary">Book Stall</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                        <button class="btn btn-sm btn-outline">Get Directions</button>
                    </div>
                </div>
            </div>

            <!-- Bambili Market -->
            <div class="market-card">
                <div class="market-header">
                    <div class="market-image">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                             alt="bambili market showing modern market facilities">
                    </div>
                    <div class="market-badge tertiary">Tertiary Market</div>
                </div>
                <div class="market-content">
                    <h3 class="market-title">Bambili Market</h3>
                    <p class="market-description">Modern market facility serving Bambili area with improved infrastructure and amenities.</p>
                    <div class="market-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Bambili, Bamenda</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Daily: 7 AM - 5 PM</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">store</span>
                            <span>180 Stalls Available</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>450+ Traders</span>
                        </div>
                    </div>
                    
                    <div class="market-features">
                        <h4>Market Features:</h4>
                        <div class="features-list">
                            <span class="feature-tag">Modern Facilities</span>
                            <span class="feature-tag">Cold Storage</span>
                            <span class="feature-tag">Banking Services</span>
                            <span class="feature-tag">Loading Bay</span>
                            <span class="feature-tag">WiFi</span>
                            <span class="feature-tag">Security</span>
                        </div>
                    </div>
                    
                    <div class="market-actions">
                        <button class="btn btn-sm btn-primary">Book Stall</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                        <button class="btn btn-sm btn-outline">Get Directions</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Market Permit Application -->
<section class="permit-application-section" id="apply-permit">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Market Permit Application</h2>
            <p class="section-subtitle">Apply for market trading permits and stall allocations</p>
        </div>

        <div class="application-form">
            <form id="permitApplicationForm">
                <div class="form-section">
                    <h3 class="section-title">Application Type</h3>
                    
                    <div class="form-group">
                        <label class="form-label">Application Type *</label>
                        <select class="form-select" required>
                            <option value="">Select application type</option>
                            <option value="new-permit">New Market Permit</option>
                            <option value="renewal">Permit Renewal</option>
                            <option value="stall-allocation">Stall Allocation</option>
                            <option value="stall-transfer">Stall Transfer</option>
                            <option value="temporary-permit">Temporary Permit</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Market Preference *</label>
                        <select class="form-select" required>
                            <option value="">Select market</option>
                            <option value="central">Central Market</option>
                            <option value="nkwen">Nkwen Market</option>
                            <option value="mankon">Mankon Market</option>
                            <option value="bambili">Bambili Market</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Trading Category *</label>
                        <select class="form-select" required>
                            <option value="">Select trading category</option>
                            <option value="food">Food & Beverages</option>
                            <option value="clothing">Clothing & Textiles</option>
                            <option value="electronics">Electronics & Appliances</option>
                            <option value="fresh-produce">Fresh Produce</option>
                            <option value="household">Household Items</option>
                            <option value="crafts">Arts & Crafts</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">Trader Information</h3>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Full Name *</label>
                            <input type="text" class="form-input" placeholder="Enter your full name" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Business Name</label>
                            <input type="text" class="form-input" placeholder="Your business name (if applicable)">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Email Address *</label>
                            <input type="email" class="form-input" placeholder="your@email.com" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Phone Number *</label>
                            <input type="tel" class="form-input" placeholder="+237 233 000 000" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Address *</label>
                        <input type="text" class="form-input" placeholder="Your residential address in Bamenda" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Date of Birth *</label>
                            <input type="date" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Gender *</label>
                            <select class="form-select" required>
                                <option value="">Select gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Years in Trading</label>
                        <select class="form-select">
                            <option value="">Select experience</option>
                            <option value="0-1">Less than 1 year</option>
                            <option value="1-3">1-3 years</option>
                            <option value="3-5">3-5 years</option>
                            <option value="5-10">5-10 years</option>
                            <option value="10+">More than 10 years</option>
                        </select>
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">Business Details</h3>
                    
                    <div class="form-group">
                        <label class="form-label">Business Description *</label>
                        <textarea class="form-textarea" rows="3" placeholder="Describe your business and the products you sell" required></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Previous Trading Experience</label>
                        <textarea class="form-textarea" rows="3" placeholder="Describe your previous trading experience (if any)"></textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Stall Type Preference</label>
                            <select class="form-select">
                                <option value="">Select stall type</option>
                                <option value="open">Open Stall</option>
                                <option value="enclosed">Enclosed Stall</option>
                                <option value="semi-enclosed">Semi-Enclosed Stall</option>
                                <option value="food-court">Food Court Stall</option>
                                <option value="no-preference">No Preference</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Stall Size Preference</label>
                            <select class="form-select">
                                <option value="">Select stall size</option>
                                <option value="small">Small (2x2 meters)</option>
                                <option value="medium">Medium (3x3 meters)</option>
                                <option value="large">Large (4x4 meters)</option>
                            <option value="extra-large">Extra Large (5x5 meters)</option>
                                <option value="no-preference">No Preference</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Special Requirements</label>
                        <textarea class="form-textarea" rows="2" placeholder="Any special requirements for your stall (electricity, water, storage, etc.)"></textarea>
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">Document Upload</h3>
                    
                    <div class="form-group">
                        <label class="form-label">Identification Document *</label>
                        <input type="file" class="form-input" accept=".pdf,.jpg,.jpeg,.png" required>
                        <small class="form-help">Upload a clear copy of your valid ID (PDF, JPG, PNG, max 5MB)</small>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Proof of Residence *</label>
                        <input type="file" class="form-input" accept=".pdf,.jpg,.jpeg,.png" required>
                        <small class="form-help">Upload utility bill or lease agreement (PDF, JPG, PNG, max 5MB)</small>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Business Registration (if applicable)</label>
                        <input type="file" class="form-input" accept=".pdf,.jpg,.jpeg,.png">
                        <small class="form-help">Upload business registration documents (PDF, JPG, PNG, max 5MB)</small>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Passport Size Photo *</label>
                        <input type="file" class="form-input" accept=".jpg,.jpeg,.png" required>
                        <small class="form-help">Upload recent passport size photo (JPG, PNG, max 2MB)</small>
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">Declaration</h3>
                    
                    <div class="form-group">
                        <label class="form-label">Declaration *</label>
                        <div class="checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="declaration" required>
                                <span class="checkmark"></span>
                                I declare that all information provided is true and accurate to the best of my knowledge. I understand that providing false information may result in the rejection of my application and possible legal consequences.
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Agreement *</label>
                        <div class="checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="agreement" required>
                                <span class="checkmark"></span>
                                I agree to comply with all market regulations, trading guidelines, and bylaws of Bamenda City Council. I understand that my permit can be revoked if I violate any market rules.
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Payment Terms *</label>
                        <div class="checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="payment" required>
                                <span class="checkmark"></span>
                                I understand that permit fees are non-refundable and must be paid before permit issuance. I agree to pay all applicable fees as outlined by Bamenda City Council.
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
</section>

<!-- Trader Resources -->
<section class="trader-resources-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Trader Resources</h2>
            <p class="section-subtitle">Helpful resources and information for market traders</p>
        </div>

        <div class="resources-grid">
            <div class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">menu_book</span>
                </div>
                <h3 class="resource-title">Trading Guidelines</h3>
                <p class="resource-description">Complete guide to market trading rules, regulations, and best practices.</p>
                <div class="resource-stats">
                    <span class="stat-item">
                        <span class="stat-number">45</span>
                        <span class="stat-label">Guidelines</span>
                    </span>
                </div>
                <button class="btn btn-primary">View Guidelines</button>
            </div>

            <div class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <h3 class="resource-title">Market Forms</h3>
                <p class="resource-description">Downloadable forms for permits, applications, and other market-related documents.</p>
                <div class="resource-stats">
                    <span class="stat-item">
                        <span class="stat-number">23</span>
                        <span class="stat-label">Forms</span>
                    </span>
                </div>
                <button class="btn btn-primary">Download Forms</button>
            </div>

            <div class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <h3 class="resource-title">Training Programs</h3>
                <p class="resource-description">Business training and skill development programs for market traders.</p>
                <div class="resource-stats">
                    <span class="stat-item">
                        <span class="stat-number">12</span>
                        <span class="stat-label">Programs</span>
                    </span>
                </div>
                <button class="btn btn-primary">View Programs</button>
            </div>

            <div class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">support_agent</span>
                </div>
                <h3 class="resource-title">Support Services</h3>
                <p class="resource-description">Contact information for trader support services and assistance programs.</p>
                <div class="resource-stats">
                    <span class="stat-item">
                        <span class="stat-number">24/7</span>
                        <span class="stat-label">Support</span>
                    </span>
                </div>
                <button class="btn btn-primary">Get Support</button>
            </div>

            <div class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">calendar_month</span>
                </div>
                <h3 class="resource-title">Market Calendar</h3>
                <p class="resource-description">Important dates, market events, and trading schedules for all Bamenda markets.</p>
                <div class="resource-stats">
                    <span class="stat-item">
                        <span class="stat-number">365</span>
                        <span class="stat-label">Days</span>
                    </span>
                </div>
                <button class="btn btn-primary">View Calendar</button>
            </div>

            <div class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">notifications</span>
                </div>
                <h3 class="resource-title">Market Alerts</h3>
                <p class="resource-description">Subscribe to market alerts, updates, and important announcements.</p>
                <div class="resource-stats">
                    <span class="stat-item">
                        <span class="stat-number">3,456</span>
                        <span class="stat-label">Subscribers</span>
                    </span>
                </div>
                <button class="btn btn-primary">Subscribe</button>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Common questions about market trader services and permits</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How do I apply for a market trading permit?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>You can apply for a market trading permit online through our portal or visit the market office. You'll need to provide identification, proof of residence, and business information. The processing time is 3-5 working days.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What are the costs for market permits and stalls?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Market permits cost ₣15,000 per year. Stall rental fees vary by market and stall size, ranging from ₣3,000 to ₣8,000 per month. Temporary permits are available for ₣500 per day.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Can I transfer my market permit to someone else?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Market permits are non-transferable. However, you can apply for a permit transfer in special circumstances such as business succession or death of the permit holder. This requires council approval.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What are the market operating hours?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Central Market operates from 6 AM to 6 PM daily. Other markets typically operate from 7 AM to 5 PM. Some markets have special weekend hours. Check specific market schedules for details.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What happens if I violate market regulations?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Violations can result in warnings, fines, temporary suspension, or permit revocation depending on the severity. Repeated violations may lead to permanent ban from market trading.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How do I resolve disputes with other traders?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Contact the market office for dispute resolution services. We have trained mediators who can help resolve conflicts between traders. Serious issues may require council intervention.</p>
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
/* Market Trader Portal Page Styles */
.market-trader-hero {
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-container) 100%);
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

/* Market Statistics Section */
.market-stats-section {
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

/* Trader Services Section */
.trader-services-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
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
    background-color: var(--tertiary);
    color: var(--on-tertiary);
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
    flex-wrap: wrap;
    gap: var(--spacing-sm);
    justify-content: center;
    margin-bottom: var(--spacing-lg);
}

.feature-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.feature-item .material-symbols-outlined {
    font-size: 1rem;
    color: var(--tertiary);
}

.service-details {
    display: flex;
    justify-content: space-between;
    margin-bottom: var(--spacing-lg);
    flex-wrap: wrap;
    gap: var(--spacing-md);
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

/* Market Information Section */
.market-information-section {
    padding: var(--spacing-3xl) 0;
}

.markets-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.market-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
    overflow: hidden;
}

.market-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.market-header {
    position: relative;
}

.market-image {
    height: 200px;
    overflow: hidden;
}

.market-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.market-badge {
    position: absolute;
    top: var(--spacing-lg);
    left: var(--spacing-lg);
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.market-badge.primary {
    background-color: var(--primary);
    color: var(--on-primary);
}

.market-badge.secondary {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.market-badge.tertiary {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.market-content {
    padding: var(--spacing-lg);
}

.market-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.market-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.market-details {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

.market-features h4 {
    font-size: 1rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.features-list {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-sm);
}

.feature-tag {
    background-color: var(--surface-container);
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.market-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Permit Application Section */
.permit-application-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.application-form {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-2xl);
    border: 1px solid var(--outline-variant);
    max-width: 800px;
    margin: 0 auto;
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

/* Trader Resources Section */
.trader-resources-section {
    padding: var(--spacing-3xl) 0;
}

.resources-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: var(--spacing-xl);
}

.resource-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.resource-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.resource-icon {
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

.resource-icon .material-symbols-outlined {
    font-size: 2rem;
}

.resource-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.resource-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.resource-stats {
    display: flex;
    justify-content: center;
    margin-bottom: var(--spacing-lg);
}

.stat-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: var(--spacing-xs);
}

.stat-number {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary);
}

.stat-label {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
    text-transform: uppercase;
}

/* FAQ Section */
.faq-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
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
    
    .services-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .markets-grid {
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
    
    .market-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
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
    
    .service-details {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .market-actions {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .market-actions .btn {
        width: 100%;
    }
}
</style>

<script>
// Quick action functions
function openMarketPermit() {
    document.getElementById('apply-permit').scrollIntoView({ behavior: 'smooth' });
}

function openStallAllocation() {
    alert('Stall allocation service would open here. In production, this would show available stalls and booking options.');
}

function openMarketInformation() {
    document.getElementById('market-information').scrollIntoView({ behavior: 'smooth' });
}

function openTraderRegistration() {
    alert('Trader registration service would open here. In production, this would show the trader registration form.');
}

function openMarketPayments() {
    alert('Market payment portal would open here. In production, this would show payment options and history.');
}

function openTraderSupport() {
    alert('Trader support service would open here. In production, this would show support options and contact information.');
}

// Service actions
document.querySelectorAll('.service-card .btn-primary').forEach(button => {
    button.addEventListener('click', function() {
        const serviceTitle = this.closest('.service-card').querySelector('.service-title').textContent;
        alert(`Opening service for: "${serviceTitle}"`);
    });
});

// Market actions
document.querySelectorAll('.market-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Book')) {
        button.addEventListener('click', function() {
            const marketTitle = this.closest('.market-card').querySelector('.market-title').textContent;
            alert(`Booking stall at: "${marketTitle}"`);
        });
    }
});

document.querySelectorAll('.market-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Details')) {
        button.addEventListener('click', function() {
            const marketTitle = this.closest('.market-card').querySelector('.market-title').textContent;
            alert(`Detailed view for: "${marketTitle}"`);
        });
    }
    
    if (button.textContent.includes('Directions')) {
        button.addEventListener('click', function() {
            const marketTitle = this.closest('.market-card').querySelector('.market-title').textContent;
            alert(`Getting directions to: "${marketTitle}"`);
        });
    }
});

// Resource actions
document.querySelectorAll('.resource-card .btn-primary').forEach(button => {
    button.addEventListener('click', function() {
        const resourceTitle = this.closest('.resource-card').querySelector('.resource-title').textContent;
        alert(`Opening ${resourceTitle}. In production, this would show the relevant resource.`);
    });
});

// Permit application form submission
document.getElementById('permitApplicationForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate required fields
    const applicationType = document.querySelector('select[required]').value;
    const marketPreference = document.querySelectorAll('select[required]')[1].value;
    const tradingCategory = document.querySelectorAll('select[required]')[2].value;
    
    if (!applicationType || !marketPreference || !tradingCategory) {
        alert('Please fill in all required fields.');
        return;
    }
    
    // Validate declarations
    const declaration = document.querySelector('input[name="declaration"]:checked');
    const agreement = document.querySelector('input[name="agreement"]:checked');
    const payment = document.querySelector('input[name="payment"]:checked');
    
    if (!declaration || !agreement || !payment) {
        alert('Please accept all declarations and agreements to proceed.');
        return;
    }
    
    alert('Market permit application submitted successfully! We will review your application and contact you within 5 working days.');
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

// Auto-refresh market data
function refreshMarketData() {
    // In production, this would fetch real-time market data
    console.log('Refreshing market trader data...');
}

// Refresh data every 60 seconds
setInterval(refreshMarketData, 60000);
</script>
