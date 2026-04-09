<?php
/**
 * Bamenda City Council E-Governance Platform
 * Administration Archives Page
 */

$page_title = 'Archives | Bamenda City Council';
$page_description = 'Document archives and records management system for Bamenda City Council.';
$page_keywords = 'archives, records management, document storage, Bamenda council administration';

$breadcrumbs = [
    ['title' => 'Administration', 'url' => '../index.php'],
    ['title' => 'Archives', 'url' => '#']
];

require_once __DIR__ . '/../../includes/header.php';
?>

<section class="hero archives-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-government-building.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Archives</span>
            <h1 class="hero-title">Document Archives & Records</h1>
            <p class="hero-subtitle">Comprehensive document management system including archives, records storage, and document retrieval.</p>
            <div class="hero-actions">
                <a href="#document-search" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">search</span>
                    Search Archives
                </a>
                <a href="#upload-document" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">upload_file</span>
                    Upload Document
                </a>
            </div>
        </div>
    </div>
</section>

<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Archive Actions</h2>
            <p class="section-subtitle">Quick access to archive functions</p>
        </div>
        <div class="actions-grid">
            <div class="action-card" onclick="openSearch()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">search</span>
                </div>
                <h3 class="action-title">Search Archives</h3>
                <p class="action-description">Find documents</p>
            </div>
            <div class="action-card" onclick="openUpload()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">upload_file</span>
                </div>
                <h3 class="action-title">Upload Document</h3>
                <p class="action-description">Add to archive</p>
            </div>
            <div class="action-card" onclick="openCategories()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">folder</span>
                </div>
                <h3 class="action-title">Document Categories</h3>
                <p class="action-description">Browse by type</p>
            </div>
            <div class="action-card" onclick="openReports()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">assessment</span>
                </div>
                <h3 class="action-title">Archive Reports</h3>
                <p class="action-description">Usage statistics</p>
            </div>
        </div>
    </div>
</section>

<section class="archive-stats-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Archive Overview</h2>
            <p class="section-subtitle">Document storage statistics</p>
        </div>
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">45,678</div>
                    <div class="stat-label">Total Documents</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+1,234 new</span>
                    </div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">storage</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">2.3 TB</div>
                    <div class="stat-label">Storage Used</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+120 GB</span>
                    </div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">folder_special</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">156</div>
                    <div class="stat-label">Categories</div>
                    <div class="stat-change neutral">
                        <span class="material-symbols-outlined">remove</span>
                        <span>No change</span>
                    </div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">download</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">12,345</div>
                    <div class="stat-label">Downloads</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+567 today</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="document-search-section" id="document-search">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Search Archives</h2>
            <p class="section-subtitle">Find documents quickly</p>
        </div>
        <div class="search-container">
            <div class="search-bar">
                <input type="text" class="search-input" placeholder="Search by document name, type, or reference...">
                <button class="btn btn-primary">
                    <span class="material-symbols-outlined">search</span>
                    Search
                </button>
            </div>
            <div class="search-filters">
                <select class="filter-select">
                    <option value="">All Categories</option>
                    <option value="administrative">Administrative</option>
                    <option value="financial">Financial</option>
                    <option value="legal">Legal</option>
                    <option value="meeting">Meeting Minutes</option>
                </select>
                <select class="filter-select">
                    <option value="">All Years</option>
                    <option value="2024">2024</option>
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                </select>
                <select class="filter-select">
                    <option value="">All Formats</option>
                    <option value="pdf">PDF</option>
                    <option value="doc">Word</option>
                    <option value="xls">Excel</option>
                    <option value="img">Image</option>
                </select>
            </div>
        </div>
        <div class="search-results">
            <div class="result-item">
                <div class="result-icon">
                    <span class="material-symbols-outlined">picture_as_pdf</span>
                </div>
                <div class="result-content">
                    <h4 class="result-title">Annual Report 2024</h4>
                    <p class="result-description">Comprehensive annual report for fiscal year 2024</p>
                    <div class="result-meta">
                        <span class="meta-item">PDF • 2.3 MB</span>
                        <span class="meta-item">Uploaded: Dec 15, 2024</span>
                        <span class="meta-item">Category: Administrative</span>
                    </div>
                </div>
                <div class="result-actions">
                    <button class="btn btn-sm btn-primary">Download</button>
                    <button class="btn btn-sm btn-outline">View</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="upload-document-section" id="upload-document">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Upload Document</h2>
            <p class="section-subtitle">Add documents to archive</p>
        </div>
        <form class="upload-form">
            <div class="form-group">
                <label class="form-label">Document Title</label>
                <input type="text" class="form-input" placeholder="Enter document title">
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">Category</label>
                    <select class="form-select">
                        <option value="administrative">Administrative</option>
                        <option value="financial">Financial</option>
                        <option value="legal">Legal</option>
                        <option value="meeting">Meeting Minutes</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Reference Number</label>
                    <input type="text" class="form-input" placeholder="e.g., ADM-2024-001">
                </div>
            </div>
            <div class="form-group">
                <label class="form-label">Description</label>
                <textarea class="form-textarea" rows="3" placeholder="Brief description of the document"></textarea>
            </div>
            <div class="form-group">
                <label class="form-label">Select Files</label>
                <div class="file-upload">
                    <input type="file" id="archiveFiles" multiple accept=".pdf,.doc,.docx,.xls,.xlsx">
                    <label for="archiveFiles" class="file-label">
                        <span class="material-symbols-outlined">upload_file</span>
                        <span>Choose Files</span>
                    </label>
                    <div class="file-list" id="fileList"></div>
                </div>
            </div>
            <div class="form-actions">
                <button type="reset" class="btn btn-outline">Reset</button>
                <button type="submit" class="btn btn-primary">Upload Document</button>
            </div>
        </form>
    </div>
</section>

<section class="faq-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Common questions about archives</p>
        </div>
        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What file formats are supported?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>We support PDF, Word, Excel, PowerPoint, and image formats (JPG, PNG). Maximum file size is 50MB per document.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How long are documents archived?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Documents are archived for 7 years by default. Critical documents are retained for 10 years as per legal requirements.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>

<style>
.archives-hero{background:linear-gradient(135deg,var(--primary)0,var(--primary-container)100%)}
.quick-actions-section{padding:var(--spacing-3xl)0;background-color:var(--surface-container-low)}
.actions-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:var(--spacing-xl)}
.action-card{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);padding:var(--spacing-xl);border:1px solid var(--outline-variant);text-align:center;cursor:pointer;transition:all .3s ease}
.action-card:hover{transform:translateY(-4px);box-shadow:0 8px 25px rgba(0,0,0,.15)}
.action-icon{width:4rem;height:4rem;background-color:var(--primary);color:var(--on-primary);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center;margin:0 auto var(--spacing-lg)}
.action-icon .material-symbols-outlined{font-size:2rem}
.action-title{font-size:1.25rem;font-weight:700;color:var(--primary);margin-bottom:var(--spacing-md)}
.action-description{color:var(--on-surface-variant);line-height:1.6}
.archive-stats-section{padding:var(--spacing-3xl)0}
.stats-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:var(--spacing-lg)}
.stat-card{display:grid;grid-template-columns:auto 1fr;gap:var(--spacing-lg);align-items:center;background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);padding:var(--spacing-xl);border:1px solid var(--outline-variant);transition:all .3s ease}
.stat-card:hover{transform:translateY(-4px);box-shadow:0 8px 25px rgba(0,0,0,.15)}
.stat-icon{width:3.5rem;height:3.5rem;background-color:var(--primary);color:var(--on-primary);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center;flex-shrink:0}
.stat-icon .material-symbols-outlined{font-size:2rem}
.stat-content{flex:1}
.stat-number{font-size:2rem;font-weight:800;color:var(--primary);margin-bottom:var(--spacing-xs);line-height:1}
.stat-label{font-size:1rem;color:var(--on-surface-variant);font-weight:500;margin-bottom:var(--spacing-sm)}
.stat-change{display:flex;align-items:center;gap:var(--spacing-xs);font-size:.75rem;font-weight:600}
.stat-change.positive{color:var(--tertiary)}
.stat-change.neutral{color:var(--on-surface-variant)}
.stat-change .material-symbols-outlined{font-size:1rem}
.document-search-section{padding:var(--spacing-3xl)0;background-color:var(--surface-container-low)}
.search-container{margin-bottom:var(--spacing-xl)}
.search-bar{display:flex;gap:var(--spacing-md);margin-bottom:var(--spacing-lg)}
.search-input{flex:1;padding:var(--spacing-sm) var(--spacing-md);border:1px solid var(--outline-variant);border-radius:var(--radius-md);background-color:var(--surface-container-lowest);color:var(--on-surface);font-size:.875rem}
.search-filters{display:flex;gap:var(--spacing-md);flex-wrap:wrap}
.filter-select{padding:var(--spacing-sm) var(--spacing-md);border:1px solid var(--outline-variant);border-radius:var(--radius-md);background-color:var(--surface-container-lowest);color:var(--on-surface);font-size:.875rem}
.search-results{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);border:1px solid var(--outline-variant)}
.result-item{display:flex;gap:var(--spacing-md);padding:var(--spacing-lg);border-bottom:1px solid var(--outline-variant);align-items:center}
.result-item:last-child{border-bottom:none}
.result-icon{width:3rem;height:3rem;background-color:var(--primary);color:var(--on-primary);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center;flex-shrink:0}
.result-content{flex:1}
.result-title{font-size:1.125rem;font-weight:600;color:var(--primary);margin-bottom:var(--spacing-xs)}
.result-description{color:var(--on-surface-variant);font-size:.875rem;margin-bottom:var(--spacing-sm)}
.result-meta{display:flex;gap:var(--spacing-md);font-size:.75rem;color:var(--on-surface-variant)}
.result-actions{display:flex;gap:var(--spacing-sm)}
.upload-document-section{padding:var(--spacing-3xl)0}
.upload-form{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);border:1px solid var(--outline-variant);max-width:600px;margin:0 auto;padding:var(--spacing-xl)}
.form-row{display:grid;grid-template-columns:1fr 1fr;gap:var(--spacing-lg)}
.form-group{margin-bottom:var(--spacing-lg)}
.form-label{display:block;font-size:.875rem;font-weight:600;color:var(--on-surface);margin-bottom:var(--spacing-sm)}
.form-input,.form-select,.form-textarea{width:100%;padding:var(--spacing-sm) var(--spacing-md);border:1px solid var(--outline-variant);border-radius:var(--radius-md);background-color:var(--surface-container-lowest);color:var(--on-surface);font-size:.875rem;transition:all .2s ease}
.form-input:focus,.form-select:focus,.form-textarea:focus{outline:none;border-color:var(--primary);box-shadow:0 0 0 2px var(--primary-container)}
.form-textarea{resize:vertical;min-height:80px}
.file-upload{border:2px dashed var(--outline-variant);border-radius:var(--radius-md);padding:var(--spacing-lg);text-align:center;background-color:var(--surface-container)}
.file-upload input[type="file"]{display:none}
.file-label{display:inline-flex;align-items:center;gap:var(--spacing-sm);padding:var(--spacing-sm) var(--spacing-md);background-color:var(--primary);color:var(--on-primary);border-radius:var(--radius-md);cursor:pointer;transition:all .2s ease}
.file-label:hover{background-color:var(--primary-container)}
.file-list{margin-top:var(--spacing-md);text-align:left}
.form-actions{display:flex;gap:var(--spacing-lg);justify-content:center;margin-top:var(--spacing-xl)}
.faq-section{padding:var(--spacing-3xl)0}
.faq-list{max-width:800px;margin:0 auto}
.faq-item{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);border:1px solid var(--outline-variant);margin-bottom:var(--spacing-md);overflow:hidden}
.faq-question{display:flex;justify-content:space-between;align-items:center;cursor:pointer;padding:var(--spacing-lg);font-weight:600;color:var(--primary);transition:background-color .2s ease}
.faq-question:hover{background-color:var(--surface-container)}
.faq-toggle{font-size:1.25rem;transition:transform .2s ease}
.faq-item.active .faq-toggle{transform:rotate(45deg)}
.faq-answer{display:none;padding:0 var(--spacing-lg) var(--spacing-lg);color:var(--on-surface-variant);line-height:1.6}
.faq-item.active .faq-answer{display:block}
@media (max-width:768px){.actions-grid{grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:var(--spacing-lg)}.stats-grid{grid-template-columns:repeat(2,1fr);gap:var(--spacing-md)}.search-bar{flex-direction:column;gap:var(--spacing-sm)}.search-filters{flex-direction:column;gap:var(--spacing-sm)}.form-row{grid-template-columns:1fr;gap:var(--spacing-md)}.upload-form{margin:0 -var(--spacing-md);border-radius:0}}
@media (max-width:480px){.action-card{padding:var(--spacing-lg)}.action-icon{width:3rem;height:3rem}.action-icon .material-symbols-outlined{font-size:1.5rem}.stats-grid{grid-template-columns:1fr;gap:var(--spacing-md)}.stat-card{grid-template-columns:1fr;text-align:center;gap:var(--spacing-md)}.result-item{flex-direction:column;align-items:flex-start;gap:var(--spacing-sm)}.result-actions{width:100%;justify-content:space-between}.form-actions{flex-direction:column;align-items:center}.form-actions .btn{width:100%;max-width:300px}}
</style>

<script>
function openSearch(){document.getElementById('document-search').scrollIntoView({behavior:'smooth'})}
function openUpload(){document.getElementById('upload-document').scrollIntoView({behavior:'smooth'})}
function openCategories(){alert('Document categories portal would open here. In production, this would show organized document folders.')}
function openReports(){alert('Archive reports portal would open here. In production, this would show storage and usage statistics.')}
function toggleFAQ(e){const t=e.parentElement;t.classList.toggle('active')}
document.getElementById('archiveFiles')?.addEventListener('change',function(e){const t=e.target.files,s=document.getElementById('fileList');s.innerHTML='',Array.from(t).forEach(t=>{const e=document.createElement('div');e.className='file-item',e.innerHTML=`<span class="material-symbols-outlined">attach_file</span><span>${t.name}</span>`,s.appendChild(e)})});
document.querySelector('.upload-form')?.addEventListener('submit',function(e){e.preventDefault();alert('Document uploaded successfully! Your document has been added to the archive.')});
</script>
