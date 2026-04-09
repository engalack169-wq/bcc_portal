<?php
/**
 * Bamenda City Council E-Governance Platform
 * Business Market Trader Portal Page
 */

$page_title = 'Market Trader Portal | Bamenda City Council';
$page_description = 'Market trader registration, permits, and resources for businesses in Bamenda City Council.';
$page_keywords = 'market trader, business registration, market permits, Bamenda council';

$breadcrumbs = [
    ['title' => 'Business', 'url' => 'index.php'],
    ['title' => 'Market Trader Portal', 'url' => '#']
];

require_once __DIR__ . '/../../includes/header.php';
?>

<section class="hero market-trader-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-business-support.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Market Trader Portal</span>
            <h1 class="hero-title">Market Trading Services</h1>
            <p class="hero-subtitle">Comprehensive market trader services including registration, permits, stall allocation, and business resources for market vendors and traders in Bamenda City.</p>
            <div class="hero-actions">
                <a href="#registration" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">storefront</span>
                    Register as Trader
                </a>
                <a href="#market-info" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">info</span>
                    Market Information
                </a>
            </div>
        </div>
    </div>
</section>

<section class="trader-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">storefront</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">1,234</div>
                    <div class="stat-label">Registered Traders</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">location_city</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">12</div>
                    <div class="stat-label">Markets</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">store</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">456</div>
                    <div class="stat-label">Available Stalls</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="registration-section" id="registration">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Trader Registration</h2>
            <p class="section-subtitle">Register as a market trader and access trading opportunities</p>
        </div>
        <form class="registration-form">
            <div class="form-section">
                <h3 class="section-title">Personal Information</h3>
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
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Email Address *</label>
                        <input type="email" class="form-input" placeholder="email@example.com" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">ID Number *</label>
                        <input type="text" class="form-input" placeholder="National ID number" required>
                    </div>
                </div>
            </div>
            <div class="form-section">
                <h3 class="section-title">Business Information</h3>
                <div class="form-group">
                    <label class="form-label">Business Name</label>
                    <input type="text" class="form-input" placeholder="Your business name (if applicable)">
                </div>
                <div class="form-group">
                    <label class="form-label">Trading Category *</label>
                    <select class="form-select" required>
                        <option value="">Select trading category</option>
                        <option value="food">Food & Beverages</option>
                        <option value="clothing">Clothing & Textiles</option>
                        <option value="electronics">Electronics</option>
                        <option value="crafts">Handicrafts & Arts</option>
                        <option value="agriculture">Agricultural Products</option>
                        <option value="general">General Merchandise</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Products Description *</label>
                    <textarea class="form-textarea" rows="3" placeholder="Describe the products you intend to sell" required></textarea>
                </div>
            </div>
            <div class="form-section">
                <h3 class="section-title">Market Preferences</h3>
                <div class="form-group">
                    <label class="form-label">Preferred Market *</label>
                    <select class="form-select" required>
                        <option value="">Select preferred market</option>
                        <option value="central">Central Market</option>
                        <option value="north">North District Market</option>
                        <option value="south">South District Market</option>
                        <option value="east">East District Market</option>
                        <option value="west">West District Market</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Stall Type Preference *</label>
                    <select class="form-select" required>
                        <option value="">Select stall type</option>
                        <option value="open">Open Stall</option>
                        <option value="covered">Covered Stall</option>
                        <option value="kiosk">Kiosk</option>
                        <option value="shop">Small Shop</option>
                    </select>
                </div>
            </div>
            <div class="form-actions">
                <button type="reset" class="btn btn-outline">Reset</button>
                <button type="submit" class="btn btn-primary">Register as Trader</button>
            </div>
        </form>
    </div>
</section>

<section class="market-info-section" id="market-info">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Market Information</h2>
            <p class="section-subtitle">Details about available markets and trading opportunities</p>
        </div>
        <div class="markets-grid">
            <div class="market-card">
                <div class="market-image">
                    <img src="/stitch1/assets/images/central-market.jpg" alt="Central Market">
                </div>
                <div class="market-content">
                    <h3 class="market-title">Central Market</h3>
                    <p class="market-description">Largest market in Bamenda City with over 500 stalls, high foot traffic, and diverse product categories.</p>
                    <div class="market-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">store</span>
                            <span>500+ Stalls</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Daily: 6AM - 6PM</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Stall Fee: ₣5,000/month</span>
                        </div>
                    </div>
                    <div class="market-actions">
                        <button class="btn btn-sm btn-primary">View Available Stalls</button>
                        <button class="btn btn-sm btn-outline">Market Rules</button>
                    </div>
                </div>
            </div>
            <div class="market-card">
                <div class="market-image">
                    <img src="/stitch1/assets/images/district-market.jpg" alt="District Market">
                </div>
                <div class="market-content">
                    <h3 class="market-title">North District Market</h3>
                    <p class="market-description">Community-focused market serving the northern district with fresh produce and local crafts.</p>
                    <div class="market-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">store</span>
                            <span>150+ Stalls</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Daily: 7AM - 5PM</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Stall Fee: ₣3,000/month</span>
                        </div>
                    </div>
                    <div class="market-actions">
                        <button class="btn btn-sm btn-primary">View Available Stalls</button>
                        <button class="btn btn-sm btn-outline">Market Rules</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="resources-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Trader Resources</h2>
            <p class="section-subtitle">Resources and support for market traders</p>
        </div>
        <div class="resources-grid">
            <div class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <h3 class="resource-title">Trading Guidelines</h3>
                <p class="resource-description">Comprehensive guide to market trading rules, regulations, and best practices.</p>
                <button class="btn btn-sm btn-outline">Download Guide</button>
            </div>
            <div class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">payments</span>
                </div>
                <h3 class="resource-title">Fee Structure</h3>
                <p class="resource-description">Detailed information about stall fees, permits, and payment schedules.</p>
                <button class="btn btn-sm btn-outline">View Fee Schedule</button>
            </div>
            <div class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">support_agent</span>
                </div>
                <h3 class="resource-title">Trader Support</h3>
                <p class="resource-description">Dedicated support services for registered market traders.</p>
                <button class="btn btn-sm btn-outline">Contact Support</button>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>

<style>
.market-trader-hero{background:linear-gradient(135deg,var(--secondary)0,var(--secondary-container)100%)}
.trader-stats-section{padding:var(--spacing-3xl)0}
.stats-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:var(--spacing-lg)}
.stat-card{display:grid;grid-template-columns:auto 1fr;gap:var(--spacing-lg);align-items:center;background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);padding:var(--spacing-xl);border:1px solid var(--outline-variant)}
.stat-icon{width:3.5rem;height:3.5rem;background-color:var(--secondary);color:var(--on-secondary);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center}
.stat-icon .material-symbols-outlined{font-size:2rem}
.stat-content{flex:1}
.stat-number{font-size:2rem;font-weight:800;color:var(--secondary);margin-bottom:var(--spacing-xs)}
.stat-label{font-size:1rem;color:var(--on-surface-variant);font-weight:500}
.registration-section{padding:var(--spacing-3xl)0;background-color:var(--surface-container-low)}
.section-header{text-align:center;margin-bottom:var(--spacing-xl)}
.section-title{font-size:2rem;font-weight:800;color:var(--secondary);margin-bottom:var(--spacing-sm)}
.section-subtitle{color:var(--on-surface-variant);font-size:1.125rem}
.registration-form{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);border:1px solid var(--outline-variant);max-width:800px;margin:0 auto;padding:var(--spacing-xl)}
.form-section{padding:var(--spacing-xl);border-bottom:1px solid var(--outline-variant)}
.form-section:last-child{border-bottom:none}
.form-group{margin-bottom:var(--spacing-lg)}
.form-label{display:block;font-size:.875rem;font-weight:600;color:var(--on-surface);margin-bottom:var(--spacing-sm)}
.form-input,.form-textarea,.form-select{width:100%;padding:var(--spacing-sm) var(--spacing-md);border:1px solid var(--outline-variant);border-radius:var(--radius-md);background-color:var(--surface-container-lowest);color:var(--on-surface);font-size:.875rem;transition:all .2s ease}
.form-input:focus,.form-textarea:focus,.form-select:focus{outline:none;border-color:var(--secondary);box-shadow:0 0 0 2px var(--secondary-container)}
.form-textarea{resize:vertical;min-height:100px}
.form-row{display:grid;grid-template-columns:1fr 1fr;gap:var(--spacing-lg)}
.form-actions{display:flex;gap:var(--spacing-lg);justify-content:center;margin-top:var(--spacing-xl)}
.market-info-section{padding:var(--spacing-3xl)0}
.markets-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(400px,1fr));gap:var(--spacing-lg)}
.market-card{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);overflow:hidden;border:1px solid var(--outline-variant)}
.market-image{height:200px;overflow:hidden}
.market-image img{width:100%;height:100%;object-fit:cover}
.market-content{padding:var(--spacing-lg)}
.market-title{font-size:1.25rem;font-weight:700;color:var(--secondary);margin-bottom:var(--spacing-sm)}
.market-description{color:var(--on-surface-variant);line-height:1.6;margin-bottom:var(--spacing-lg)}
.market-details{display:flex;flex-direction:column;gap:var(--spacing-sm);margin-bottom:var(--spacing-lg)}
.detail-item{display:flex;align-items:center;gap:var(--spacing-sm);font-size:.875rem;color:var(--on-surface-variant)}
.detail-item .material-symbols-outlined{font-size:1rem}
.market-actions{display:flex;gap:var(--spacing-sm)}
.resources-section{padding:var(--spacing-3xl)0;background-color:var(--surface-container-low)}
.resources-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:var(--spacing-lg)}
.resource-card{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);padding:var(--spacing-xl);border:1px solid var(--outline-variant);text-align:center}
.resource-icon{width:3.5rem;height:3.5rem;background-color:var(--secondary);color:var(--on-secondary);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center;margin:0 auto var(--spacing-lg)}
.resource-icon .material-symbols-outlined{font-size:2rem}
.resource-title{font-size:1.25rem;font-weight:700;color:var(--secondary);margin-bottom:var(--spacing-sm)}
.resource-description{color:var(--on-surface-variant);line-height:1.6;margin-bottom:var(--spacing-lg)}
@media (max-width:768px){.form-row{grid-template-columns:1fr;gap:var(--spacing-md)}.markets-grid{grid-template-columns:1fr;gap:var(--spacing-lg)}.market-actions{flex-direction:column;gap:var(--spacing-sm)}.resources-grid{grid-template-columns:repeat(2,1fr);gap:var(--spacing-md)}.form-actions{flex-direction:column;align-items:center}.form-actions .btn{width:100%;max-width:300px}}
@media (max-width:480px){.resources-grid{grid-template-columns:1fr;gap:var(--spacing-lg)}}
</style>

<script>
document.querySelector('.registration-form')?.addEventListener('submit',function(e){e.preventDefault();alert('Trader registration submitted successfully! Your application will be reviewed and you will receive notification within 3 business days.')});
document.querySelectorAll('.market-actions .btn-primary').forEach(button=>{button.addEventListener('click',function(){const marketName=this.closest('.market-card').querySelector('.market-title').textContent;alert(`Viewing available stalls at ${marketName}... In production, this would show the stall allocation system.`})});
document.querySelectorAll('.market-actions .btn-outline').forEach(button=>{button.addEventListener('click',function(){const marketName=this.closest('.market-card').querySelector('.market-title').textContent;alert(`Loading market rules for ${marketName}... In production, this would show detailed market regulations.`})});
document.querySelectorAll('.resource-card .btn-outline').forEach(button=>{button.addEventListener('click',function(){const resourceName=this.closest('.resource-card').querySelector('.resource-title').textContent;alert(`Accessing ${resourceName}... In production, this would download or display the resource.`})});
</script>
