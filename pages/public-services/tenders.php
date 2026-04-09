<?php
/**
 * Bamenda City Council E-Governance Platform
 * Public Services Public Tenders Page
 */

$page_title = 'Public Tenders | Bamenda City Council';
$page_description = 'Public procurement tenders and bidding opportunities for Bamenda City Council projects.';
$page_keywords = 'public tenders, procurement, bidding, contracts, Bamenda council';

$breadcrumbs = [
    ['title' => 'Public Services', 'url' => 'index.php'],
    ['title' => 'Public Tenders', 'url' => '#']
];

require_once __DIR__ . '/../../includes/header.php';
?>

<section class="hero tenders-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-public-services.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Public Tenders</span>
            <h1 class="hero-title">Procurement & Bidding</h1>
            <p class="hero-subtitle">Transparent procurement process with public tenders, bidding opportunities, and contract awards for all council projects.</p>
            <div class="hero-actions">
                <a href="#active-tenders" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">gavel</span>
                    Active Tenders
                </a>
                <a href="#submit-bid" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">description</span>
                    Submit Bid
                </a>
            </div>
        </div>
    </div>
</section>

<section class="tenders-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">gavel</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">45</div>
                    <div class="stat-label">Active Tenders</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">payments</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">₣450M</div>
                    <div class="stat-label">Total Contract Value</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">business</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">234</div>
                    <div class="stat-label">Registered Bidders</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="active-tenders-section" id="active-tenders">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Active Tenders</h2>
            <div class="filter-controls">
                <select class="filter-select">
                    <option value="">All Categories</option>
                    <option value="construction">Construction</option>
                    <option value="services">Services</option>
                    <option value="supplies">Supplies</option>
                    <option value="consulting">Consulting</option>
                </select>
                <select class="filter-select">
                    <option value="">All Status</option>
                    <option value="open">Open for Bidding</option>
                    <option value="evaluation">Under Evaluation</option>
                    <option value="closing">Closing Soon</option>
                </select>
            </div>
        </div>
        <div class="tenders-grid">
            <div class="tender-card">
                <div class="tender-header">
                    <div class="tender-id">TDR-2024-045</div>
                    <div class="tender-status open">Open for Bidding</div>
                </div>
                <div class="tender-content">
                    <h3 class="tender-title">City Hall Renovation Project</h3>
                    <p class="tender-description">Comprehensive renovation and modernization of the main city hall building including structural repairs, electrical upgrades, and interior refurbishment.</p>
                    <div class="tender-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">category</span>
                            <span>Construction</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>₣85,000,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Closes: Jan 15, 2025</span>
                        </div>
                    </div>
                </div>
                <div class="tender-actions">
                    <button class="btn btn-sm btn-primary">View Details</button>
                    <button class="btn btn-sm btn-outline">Download Documents</button>
                </div>
            </div>
            <div class="tender-card">
                <div class="tender-header">
                    <div class="tender-id">TDR-2024-046</div>
                    <div class="tender-status closing">Closing Soon</div>
                </div>
                <div class="tender-content">
                    <h3 class="tender-title">IT Infrastructure Upgrade</h3>
                    <p class="tender-description">Complete overhaul of council IT infrastructure including servers, networking equipment, and software systems.</p>
                    <div class="tender-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">category</span>
                            <span>Services</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>₣45,000,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Closes: Dec 25, 2024</span>
                        </div>
                    </div>
                </div>
                <div class="tender-actions">
                    <button class="btn btn-sm btn-primary">View Details</button>
                    <button class="btn btn-sm btn-outline">Download Documents</button>
                </div>
            </div>
            <div class="tender-card">
                <div class="tender-header">
                    <div class="tender-id">TDR-2024-047</div>
                    <div class="tender-status evaluation">Under Evaluation</div>
                </div>
                <div class="tender-content">
                    <h3 class="tender-title">Waste Management Services</h3>
                    <p class="tender-description">Comprehensive waste collection and disposal services for all districts of Bamenda City.</p>
                    <div class="tender-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">category</span>
                            <span>Services</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>₣120,000,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Closed: Dec 10, 2024</span>
                        </div>
                    </div>
                </div>
                <div class="tender-actions">
                    <button class="btn btn-sm btn-primary">View Details</button>
                    <button class="btn btn-sm btn-outline">Evaluation Status</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="submit-bid-section" id="submit-bid">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Submit Bid</h2>
            <p class="section-subtitle">Register and submit your bid for active tenders</p>
        </div>
        <form class="bid-form">
            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">Company Name *</label>
                    <input type="text" class="form-input" placeholder="Enter your company name" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Tender Reference *</label>
                    <input type="text" class="form-input" placeholder="e.g., TDR-2024-045" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">Contact Person *</label>
                    <input type="text" class="form-input" placeholder="Full name" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Email Address *</label>
                    <input type="email" class="form-input" placeholder="company@email.com" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">Phone Number *</label>
                    <input type="tel" class="form-input" placeholder="+237 233 000 000" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Bid Amount (XAF) *</label>
                    <input type="number" class="form-input" placeholder="0" min="0" required>
                </div>
            </div>
            <div class="form-group">
                <label class="form-label">Technical Proposal</label>
                <textarea class="form-textarea" rows="4" placeholder="Describe your technical approach and methodology"></textarea>
            </div>
            <div class="form-group">
                <label class="form-label">Supporting Documents</label>
                <div class="file-upload">
                    <input type="file" id="bidDocuments" multiple accept=".pdf,.doc,.docx,.xls,.xlsx">
                    <label for="bidDocuments" class="file-label">
                        <span class="material-symbols-outlined">upload_file</span>
                        <span>Choose Documents</span>
                    </label>
                </div>
            </div>
            <div class="form-actions">
                <button type="reset" class="btn btn-outline">Reset</button>
                <button type="submit" class="btn btn-primary">Submit Bid</button>
            </div>
        </form>
    </div>
</section>

<section class="awarded-contracts-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Recently Awarded Contracts</h2>
            <p class="section-subtitle">Latest contract awards and successful bidders</p>
        </div>
        <div class="contracts-grid">
            <div class="contract-card">
                <div class="contract-header">
                    <h3>Road Construction Project</h3>
                    <span class="badge badge-success">Awarded</span>
                </div>
                <div class="contract-details">
                    <p>Construction of 5km urban road in Bamenda City Center</p>
                    <div class="contract-meta">
                        <span>Contractor: BuildTech Ltd</span>
                        <span>Value: ₣230,000,000</span>
                        <span>Awarded: Dec 1, 2024</span>
                    </div>
                </div>
                <button class="btn btn-sm btn-outline">View Details</button>
            </div>
            <div class="contract-card">
                <div class="contract-header">
                    <h3>Office Equipment Supply</h3>
                    <span class="badge badge-success">Awarded</span>
                </div>
                <div class="contract-details">
                    <p>Supply and installation of office equipment for council departments</p>
                    <div class="contract-meta">
                        <span>Contractor: Office Solutions Inc</span>
                        <span>Value: ₣45,000,000</span>
                        <span>Awarded: Nov 28, 2024</span>
                    </div>
                </div>
                <button class="btn btn-sm btn-outline">View Details</button>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>

<style>
.tenders-hero{background:linear-gradient(135deg,var(--secondary)0,var(--secondary-container)100%)}
.tenders-stats-section{padding:var(--spacing-3xl)0}
.stats-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:var(--spacing-lg)}
.stat-card{display:grid;grid-template-columns:auto 1fr;gap:var(--spacing-lg);align-items:center;background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);padding:var(--spacing-xl);border:1px solid var(--outline-variant)}
.stat-icon{width:3.5rem;height:3.5rem;background-color:var(--secondary);color:var(--on-secondary);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center}
.stat-icon .material-symbols-outlined{font-size:2rem}
.stat-content{flex:1}
.stat-number{font-size:2rem;font-weight:800;color:var(--secondary);margin-bottom:var(--spacing-xs)}
.stat-label{font-size:1rem;color:var(--on-surface-variant);font-weight:500}
.active-tenders-section{padding:var(--spacing-3xl)0;background-color:var(--surface-container-low)}
.section-header{display:flex;justify-content:space-between;align-items:center;margin-bottom:var(--spacing-xl);flex-wrap:wrap;gap:var(--spacing-lg)}
.filter-controls{display:flex;gap:var(--spacing-md);flex-wrap:wrap}
.filter-select{padding:var(--spacing-sm) var(--spacing-md);border:1px solid var(--outline-variant);border-radius:var(--radius-md);background-color:var(--surface-container-lowest);color:var(--on-surface);font-size:.875rem}
.tenders-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(400px,1fr));gap:var(--spacing-lg)}
.tender-card{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);border:1px solid var(--outline-variant);overflow:hidden}
.tender-header{display:flex;justify-content:space-between;align-items:center;padding:var(--spacing-lg);background-color:var(--surface-container);border-bottom:1px solid var(--outline-variant)}
.tender-id{font-family:monospace;font-weight:600;color:var(--secondary)}
.tender-status{padding:var(--spacing-xs) var(--spacing-sm);border-radius:var(--radius-full);font-size:.75rem;font-weight:600;text-transform:uppercase}
.tender-status.open{background-color:var(--tertiary);color:var(--on-tertiary)}
.tender-status.closing{background-color:var(--secondary);color:var(--on-secondary)}
.tender-status.evaluation{background-color:var(--primary);color:var(--on-primary)}
.tender-content{padding:var(--spacing-lg)}
.tender-title{font-size:1.25rem;font-weight:700;color:var(--secondary);margin-bottom:var(--spacing-sm)}
.tender-description{color:var(--on-surface-variant);line-height:1.6;margin-bottom:var(--spacing-lg)}
.tender-details{display:flex;flex-direction:column;gap:var(--spacing-sm)}
.detail-item{display:flex;align-items:center;gap:var(--spacing-sm);font-size:.875rem;color:var(--on-surface-variant)}
.detail-item .material-symbols-outlined{font-size:1rem}
.tender-actions{padding:var(--spacing-lg);display:flex;gap:var(--spacing-sm);border-top:1px solid var(--outline-variant)}
.submit-bid-section{padding:var(--spacing-3xl)0}
.bid-form{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);border:1px solid var(--outline-variant);max-width:800px;margin:0 auto;padding:var(--spacing-xl)}
.form-row{display:grid;grid-template-columns:1fr 1fr;gap:var(--spacing-lg)}
.form-group{margin-bottom:var(--spacing-lg)}
.form-label{display:block;font-size:.875rem;font-weight:600;color:var(--on-surface);margin-bottom:var(--spacing-sm)}
.form-input,.form-textarea{width:100%;padding:var(--spacing-sm) var(--spacing-md);border:1px solid var(--outline-variant);border-radius:var(--radius-md);background-color:var(--surface-container-lowest);color:var(--on-surface);font-size:.875rem;transition:all .2s ease}
.form-input:focus,.form-textarea:focus{outline:none;border-color:var(--secondary);box-shadow:0 0 0 2px var(--secondary-container)}
.form-textarea{resize:vertical;min-height:100px}
.file-upload{border:2px dashed var(--outline-variant);border-radius:var(--radius-md);padding:var(--spacing-lg);text-align:center;background-color:var(--surface-container)}
.file-upload input[type="file"]{display:none}
.file-label{display:inline-flex;align-items:center;gap:var(--spacing-sm);padding:var(--spacing-sm) var(--spacing-md);background-color:var(--secondary);color:var(--on-secondary);border-radius:var(--radius-md);cursor:pointer;transition:all .2s ease}
.file-label:hover{background-color:var(--secondary-container)}
.form-actions{display:flex;gap:var(--spacing-lg);justify-content:center;margin-top:var(--spacing-xl)}
.awarded-contracts-section{padding:var(--spacing-3xl)0;background-color:var(--surface-container-low)}
.contracts-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(350px,1fr));gap:var(--spacing-lg)}
.contract-card{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);padding:var(--spacing-lg);border:1px solid var(--outline-variant)}
.contract-header{display:flex;justify-content:space-between;align-items:center;margin-bottom:var(--spacing-md)}
.contract-header h3{font-size:1.125rem;font-weight:700;color:var(--secondary)}
.contract-details p{color:var(--on-surface-variant);margin-bottom:var(--spacing-md)}
.contract-meta{display:flex;flex-direction:column;gap:var(--spacing-xs);font-size:.75rem;color:var(--on-surface-variant)}
.badge-success{background-color:var(--tertiary);color:var(--on-tertiary)}
@media (max-width:768px){.section-header{flex-direction:column;align-items:stretch}.filter-controls{flex-direction:column;gap:var(--spacing-sm)}.tenders-grid{grid-template-columns:1fr;gap:var(--spacing-lg)}.form-row{grid-template-columns:1fr;gap:var(--spacing-md)}.contracts-grid{grid-template-columns:1fr;gap:var(--spacing-lg)}.tender-actions{flex-direction:column;gap:var(--spacing-sm)}}
</style>

<script>
document.getElementById('bidDocuments')?.addEventListener('change',function(e){const t=e.target.files,s=document.createElement('div');s.style.marginTop='var(--spacing-md)',Array.from(t).forEach(t=>{const e=document.createElement('div');e.style.padding='var(--spacing-xs)',e.style.color='var(--on-surface-variant)',e.textContent=`Selected: ${t.name}`,s.appendChild(e)}),this.parentNode.appendChild(s)});
document.querySelector('.bid-form')?.addEventListener('submit',function(e){e.preventDefault();alert('Bid submitted successfully! You will receive confirmation email with tracking details.')});
document.querySelectorAll('.tender-actions .btn-primary').forEach(button=>{button.addEventListener('click',function(){const tenderId=this.closest('.tender-card').querySelector('.tender-id').textContent;alert(`Loading details for ${tenderId}... In production, this would show full tender details.`})});
document.querySelectorAll('.tender-actions .btn-outline').forEach(button=>{button.addEventListener('click',function(){const tenderId=this.closest('.tender-card').querySelector('.tender-id').textContent;alert(`Downloading documents for ${tenderId}... In production, this would download tender documents.`})});
document.querySelectorAll('.contract-card .btn-outline').forEach(button=>{button.addEventListener('click',function(){const contractName=this.closest('.contract-card').querySelector('h3').textContent;alert(`Loading contract details for: ${contractName}... In production, this would show full contract information.`})});
</script>
