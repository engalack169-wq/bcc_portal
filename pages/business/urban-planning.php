<?php
/**
 * Bamenda City Council E-Governance Platform
 * Business Urban Planning Permits Page
 */

$page_title = 'Urban Planning Permits | Bamenda City Council';
$page_description = 'Urban planning permits and development applications for businesses in Bamenda City Council.';
$page_keywords = 'urban planning, development permits, construction approvals, Bamenda council';

$breadcrumbs = [
    ['title' => 'Business', 'url' => 'index.php'],
    ['title' => 'Urban Planning Permits', 'url' => '#']
];

require_once __DIR__ . '/../../includes/header.php';
?>

<section class="hero urban-planning-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-business-support.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary badge-lg">Urban Planning</span>
            <h1 class="hero-title">Development Permits</h1>
            <p class="hero-subtitle">Comprehensive urban planning permit system including construction approvals, zoning permits, development applications, and building regulations for sustainable city development.</p>
            <div class="hero-actions">
                <a href="#permit-application" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">description</span>
                    Apply for Permit
                </a>
                <a href="#permit-status" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">search</span>
                    Check Status
                </a>
            </div>
        </div>
    </div>
</section>

<section class="permit-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">456</div>
                    <div class="stat-label">Applications This Year</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">construction</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">89%</div>
                    <div class="stat-label">Approval Rate</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">schedule</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">14 days</div>
                    <div class="stat-label">Average Processing Time</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="permit-types-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Permit Types</h2>
            <p class="section-subtitle">Different types of urban planning permits available</p>
        </div>
        <div class="permits-grid">
            <div class="permit-card">
                <div class="permit-icon">
                    <span class="material-symbols-outlined">location_city</span>
                </div>
                <h3 class="permit-title">Construction Permit</h3>
                <p class="permit-description">Required for new construction, major renovations, and structural modifications.</p>
                <div class="permit-details">
                    <span>Processing: 14-21 days</span>
                    <span>Fee: ₣50,000</span>
                </div>
                <button class="btn btn-sm btn-primary">Apply Now</button>
            </div>
            <div class="permit-card">
                <div class="permit-icon">
                    <span class="material-symbols-outlined">store</span>
                </div>
                <h3 class="permit-title">Commercial Development</h3>
                <p class="permit-description">For commercial buildings, shopping centers, and business complexes.</p>
                <div class="permit-details">
                    <span>Processing: 21-30 days</span>
                    <span>Fee: ₣100,000</span>
                </div>
                <button class="btn btn-sm btn-primary">Apply Now</button>
            </div>
            <div class="permit-card">
                <div class="permit-icon">
                    <span class="material-symbols-outlined">apartment</span>
                </div>
                <h3 class="permit-title">Residential Development</h3>
                <p class="permit-description">For housing projects, apartment buildings, and residential complexes.</p>
                <div class="permit-details">
                    <span>Processing: 14-21 days</span>
                    <span>Fee: ₣75,000</span>
                </div>
                <button class="btn btn-sm btn-primary">Apply Now</button>
            </div>
            <div class="permit-card">
                <div class="permit-icon">
                    <span class="material-symbols-outlined">factory</span>
                </div>
                <h3 class="permit-title">Industrial Development</h3>
                <p class="permit-description">For factories, warehouses, and industrial facilities.</p>
                <div class="permit-details">
                    <span>Processing: 30-45 days</span>
                    <span>Fee: ₣150,000</span>
                </div>
                <button class="btn btn-sm btn-primary">Apply Now</button>
            </div>
        </div>
    </div>
</section>

<section class="permit-application-section" id="permit-application">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Permit Application</h2>
            <p class="section-subtitle">Submit your urban planning permit application</p>
        </div>
        <form class="permit-form">
            <div class="form-section">
                <h3 class="section-title">Project Information</h3>
                <div class="form-group">
                    <label class="form-label">Permit Type *</label>
                    <select class="form-select" required>
                        <option value="">Select permit type</option>
                        <option value="construction">Construction Permit</option>
                        <option value="commercial">Commercial Development</option>
                        <option value="residential">Residential Development</option>
                        <option value="industrial">Industrial Development</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Project Title *</label>
                    <input type="text" class="form-input" placeholder="Enter project title" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Project Description *</label>
                    <textarea class="form-textarea" rows="4" placeholder="Describe your project in detail" required></textarea>
                </div>
            </div>
            <div class="form-section">
                <h3 class="section-title">Location Details</h3>
                <div class="form-group">
                    <label class="form-label">Project Address *</label>
                    <input type="text" class="form-input" placeholder="Enter complete project address" required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Land Size (sqm) *</label>
                        <input type="number" class="form-input" placeholder="0" min="1" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Building Size (sqm) *</label>
                        <input type="number" class="form-input" placeholder="0" min="1" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Zoning Category *</label>
                    <select class="form-select" required>
                        <option value="">Select zoning category</option>
                        <option value="residential">Residential</option>
                        <option value="commercial">Commercial</option>
                        <option value="industrial">Industrial</option>
                        <option value="mixed">Mixed Use</option>
                    </select>
                </div>
            </div>
            <div class="form-section">
                <h3 class="section-title">Applicant Information</h3>
                <div class="form-group">
                    <label class="form-label">Company/Individual Name *</label>
                    <input type="text" class="form-input" placeholder="Enter your name or company name" required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Contact Person *</label>
                        <input type="text" class="form-input" placeholder="Contact person name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Phone Number *</label>
                        <input type="tel" class="form-input" placeholder="+237 233 000 000" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Email Address *</label>
                    <input type="email" class="form-input" placeholder="email@example.com" required>
                </div>
            </div>
            <div class="form-section">
                <h3 class="section-title">Required Documents</h3>
                <div class="form-group">
                    <label class="form-label">Upload Documents</label>
                    <div class="file-upload">
                        <input type="file" id="permitDocuments" multiple accept=".pdf,.doc,.docx,.dwg,.jpg,.png">
                        <label for="permitDocuments" class="file-label">
                            <span class="material-symbols-outlined">upload_file</span>
                            <span>Choose Files</span>
                        </label>
                        <div class="document-requirements">
                            <p><strong>Required documents:</strong></p>
                            <ul>
                                <li>Site plan (PDF/DWG)</li>
                                <li>Architectural drawings</li>
                                <li>Structural calculations</li>
                                <li>Environmental impact assessment</li>
                                <li>Proof of ownership</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <button type="reset" class="btn btn-outline">Reset</button>
                <button type="submit" class="btn btn-primary">Submit Application</button>
            </div>
        </form>
    </div>
</section>

<section class="permit-status-section" id="permit-status">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Check Application Status</h2>
            <p class="section-subtitle">Track your permit application progress</p>
        </div>
        <div class="status-check">
            <div class="search-bar">
                <input type="text" class="search-input" placeholder="Enter application reference number">
                <button class="btn btn-primary">
                    <span class="material-symbols-outlined">search</span>
                    Check Status
                </button>
            </div>
            <div class="status-timeline">
                <div class="timeline-step completed">
                    <div class="step-icon">
                        <span class="material-symbols-outlined">check_circle</span>
                    </div>
                    <div class="step-content">
                        <h4>Application Submitted</h4>
                        <p>Dec 10, 2024 - 10:30 AM</p>
                    </div>
                </div>
                <div class="timeline-step completed">
                    <div class="step-icon">
                        <span class="material-symbols-outlined">check_circle</span>
                    </div>
                    <div class="step-content">
                        <h4>Initial Review</h4>
                        <p>Dec 12, 2024 - 2:15 PM</p>
                    </div>
                </div>
                <div class="timeline-step active">
                    <div class="step-icon">
                        <span class="material-symbols-outlined">pending</span>
                    </div>
                    <div class="step-content">
                        <h4>Technical Review</h4>
                        <p>In Progress - Estimated completion: Dec 18, 2024</p>
                    </div>
                </div>
                <div class="timeline-step">
                    <div class="step-icon">
                        <span class="material-symbols-outlined">radio_button_unchecked</span>
                    </div>
                    <div class="step-content">
                        <h4>Final Approval</h4>
                        <p>Pending</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>

<style>
.urban-planning-hero{background:linear-gradient(135deg,var(--secondary)0,var(--secondary-container)100%)}
.permit-stats-section{padding:var(--spacing-3xl)0}
.stats-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:var(--spacing-lg)}
.stat-card{display:grid;grid-template-columns:auto 1fr;gap:var(--spacing-lg);align-items:center;background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);padding:var(--spacing-xl);border:1px solid var(--outline-variant)}
.stat-icon{width:3.5rem;height:3.5rem;background-color:var(--secondary);color:var(--on-secondary);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center}
.stat-icon .material-symbols-outlined{font-size:2rem}
.stat-content{flex:1}
.stat-number{font-size:2rem;font-weight:800;color:var(--secondary);margin-bottom:var(--spacing-xs)}
.stat-label{font-size:1rem;color:var(--on-surface-variant);font-weight:500}
.permit-types-section{padding:var(--spacing-3xl)0;background-color:var(--surface-container-low)}
.permits-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:var(--spacing-lg)}
.permit-card{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);padding:var(--spacing-xl);border:1px solid var(--outline-variant);text-align:center}
.permit-icon{width:3.5rem;height:3.5rem;background-color:var(--secondary);color:var(--on-secondary);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center;margin:0 auto var(--spacing-lg)}
.permit-icon .material-symbols-outlined{font-size:2rem}
.permit-title{font-size:1.25rem;font-weight:700;color:var(--secondary);margin-bottom:var(--spacing-sm)}
.permit-description{color:var(--on-surface-variant);line-height:1.6;margin-bottom:var(--spacing-lg)}
.permit-details{display:flex;flex-direction:column;gap:var(--spacing-xs);font-size:.875rem;color:var(--on-surface-variant);margin-bottom:var(--spacing-lg)}
.permit-application-section{padding:var(--spacing-3xl)0}
.permit-form{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);border:1px solid var(--outline-variant);max-width:800px;margin:0 auto;padding:var(--spacing-xl)}
.form-section{padding:var(--spacing-xl);border-bottom:1px solid var(--outline-variant)}
.form-section:last-child{border-bottom:none}
.section-title{font-size:1.25rem;font-weight:700;color:var(--secondary);margin-bottom:var(--spacing-lg)}
.form-group{margin-bottom:var(--spacing-lg)}
.form-label{display:block;font-size:.875rem;font-weight:600;color:var(--on-surface);margin-bottom:var(--spacing-sm)}
.form-input,.form-textarea,.form-select{width:100%;padding:var(--spacing-sm) var(--spacing-md);border:1px solid var(--outline-variant);border-radius:var(--radius-md);background-color:var(--surface-container-lowest);color:var(--on-surface);font-size:.875rem;transition:all .2s ease}
.form-input:focus,.form-textarea:focus,.form-select:focus{outline:none;border-color:var(--secondary);box-shadow:0 0 0 2px var(--secondary-container)}
.form-textarea{resize:vertical;min-height:100px}
.form-row{display:grid;grid-template-columns:1fr 1fr;gap:var(--spacing-lg)}
.file-upload{border:2px dashed var(--outline-variant);border-radius:var(--radius-md);padding:var(--spacing-lg);text-align:center;background-color:var(--surface-container)}
.file-upload input[type="file"]{display:none}
.file-label{display:inline-flex;align-items:center;gap:var(--spacing-sm);padding:var(--spacing-sm) var(--spacing-md);background-color:var(--secondary);color:var(--on-secondary);border-radius:var(--radius-md);cursor:pointer;transition:all .2s ease}
.file-label:hover{background-color:var(--secondary-container)}
.document-requirements{text-align:left;margin-top:var(--spacing-lg);font-size:.875rem;color:var(--on-surface-variant)}
.document-requirements ul{margin:var(--spacing-sm)0;padding-left:var(--spacing-lg)}
.document-requirements li{margin-bottom:var(--spacing-xs)}
.form-actions{display:flex;gap:var(--spacing-lg);justify-content:center;margin-top:var(--spacing-xl)}
.permit-status-section{padding:var(--spacing-3xl)0;background-color:var(--surface-container-low)}
.status-check{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);padding:var(--spacing-xl);border:1px solid var(--outline-variant)}
.search-bar{display:flex;gap:var(--spacing-md);margin-bottom:var(--spacing-xl)}
.search-input{flex:1;padding:var(--spacing-sm) var(--spacing-md);border:1px solid var(--outline-variant);border-radius:var(--radius-md);background-color:var(--surface-container-lowest);color:var(--on-surface);font-size:.875rem}
.status-timeline{display:flex;flex-direction:column;gap:var(--spacing-lg)}
.timeline-step{display:flex;gap:var(--spacing-lg);align-items:flex-start}
.step-icon{width:2.5rem;height:2.5rem;border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center;flex-shrink:0}
.step-icon.completed{background-color:var(--tertiary);color:var(--on-tertiary)}
.step-icon.active{background-color:var(--secondary);color:var(--on-secondary)}
.step-icon:not(.completed):not(.active){background-color:var(--surface-container);color:var(--on-surface-variant)}
.step-content{flex:1}
.step-content h4{font-size:1.125rem;font-weight:700;color:var(--secondary);margin-bottom:var(--spacing-xs)}
.step-content p{font-size:.875rem;color:var(--on-surface-variant)}
@media (max-width:768px){.permits-grid{grid-template-columns:repeat(2,1fr);gap:var(--spacing-md)}.form-row{grid-template-columns:1fr;gap:var(--spacing-md)}.search-bar{flex-direction:column;gap:var(--spacing-sm)}.timeline-step{flex-direction:column;align-items:center;gap:var(--spacing-sm);text-align:center}}
@media (max-width:480px){.permits-grid{grid-template-columns:1fr;gap:var(--spacing-lg)}.form-actions{flex-direction:column;align-items:center}.form-actions .btn{width:100%;max-width:300px}}
</style>

<script>
document.getElementById('permitDocuments')?.addEventListener('change',function(e){const t=e.target.files,s=document.createElement('div');s.style.marginTop='var(--spacing-md)',Array.from(t).forEach(t=>{const e=document.createElement('div');e.style.padding='var(--spacing-xs)',e.style.color='var(--on-surface-variant)',e.textContent=`Selected: ${t.name}`,s.appendChild(e)}),this.parentNode.appendChild(s)});
document.querySelector('.permit-form')?.addEventListener('submit',function(e){e.preventDefault();alert('Permit application submitted successfully! Your reference number is URP-2024-1234. You will receive updates via email.')});
document.querySelectorAll('.permit-card .btn-primary').forEach(button=>{button.addEventListener('click',function(){const permitType=this.closest('.permit-card').querySelector('.permit-title').textContent;alert(`Starting application for: ${permitType}... In production, this would load the specific application form.`})});
document.querySelector('.search-bar .btn-primary')?.addEventListener('click',function(){const searchValue=document.querySelector('.search-input').value;if(searchValue){alert(`Checking status for application: ${searchValue}... In production, this would show the actual application status.`)}else{alert('Please enter an application reference number.')}});
</script>
