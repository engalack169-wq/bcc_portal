<?php
/**
 * Bamenda City Council E-Governance Platform
 * Public Services Document Vault Page
 */

$page_title = 'Document Vault | Bamenda City Council';
$page_description = 'Secure document storage and management system for Bamenda City Council public services.';
$page_keywords = 'document vault, secure storage, document management, public services, Bamenda council';

$breadcrumbs = [
    ['title' => 'Public Services', 'url' => 'index.php'],
    ['title' => 'Document Vault', 'url' => '#']
];

require_once __DIR__ . '/../../includes/header.php';
?>

<section class="hero vault-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-public-services.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Document Vault</span>
            <h1 class="hero-title">Secure Document Storage</h1>
            <p class="hero-subtitle">Advanced document management system with secure storage, version control, and easy access to important documents.</p>
            <div class="hero-actions">
                <a href="#my-documents" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">folder</span>
                    My Documents
                </a>
                <a href="#upload" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">upload_file</span>
                    Upload Document
                </a>
            </div>
        </div>
    </div>
</section>

<section class="vault-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">1,234</div>
                    <div class="stat-label">Stored Documents</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">storage</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">5.6 GB</div>
                    <div class="stat-label">Storage Used</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">security</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">256-bit</div>
                    <div class="stat-label">Encryption Level</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="my-documents-section" id="my-documents">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">My Documents</h2>
            <div class="document-controls">
                <input type="text" class="search-input" placeholder="Search documents...">
                <select class="filter-select">
                    <option value="">All Types</option>
                    <option value="pdf">PDF</option>
                    <option value="doc">Word</option>
                    <option value="xls">Excel</option>
                </select>
            </div>
        </div>
        <div class="documents-grid">
            <div class="document-card">
                <div class="document-icon">
                    <span class="material-symbols-outlined">picture_as_pdf</span>
                </div>
                <div class="document-info">
                    <h4>Birth Certificate</h4>
                    <p>Official birth certificate document</p>
                    <div class="document-meta">
                        <span>PDF • 2.3 MB</span>
                        <span>Updated: Dec 15, 2024</span>
                    </div>
                </div>
                <div class="document-actions">
                    <button class="btn-icon" title="Download">
                        <span class="material-symbols-outlined">download</span>
                    </button>
                    <button class="btn-icon" title="Share">
                        <span class="material-symbols-outlined">share</span>
                    </button>
                </div>
            </div>
            <div class="document-card">
                <div class="document-icon">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <div class="document-info">
                    <h4>Property Deed</h4>
                    <p>Property ownership documentation</p>
                    <div class="document-meta">
                        <span>PDF • 4.5 MB</span>
                        <span>Updated: Dec 10, 2024</span>
                    </div>
                </div>
                <div class="document-actions">
                    <button class="btn-icon" title="Download">
                        <span class="material-symbols-outlined">download</span>
                    </button>
                    <button class="btn-icon" title="Share">
                        <span class="material-symbols-outlined">share</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="upload-section" id="upload">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Upload Document</h2>
            <p class="section-subtitle">Add new documents to your secure vault</p>
        </div>
        <form class="upload-form">
            <div class="form-group">
                <label class="form-label">Document Title</label>
                <input type="text" class="form-input" placeholder="Enter document title">
            </div>
            <div class="form-group">
                <label class="form-label">Category</label>
                <select class="form-select">
                    <option value="personal">Personal Documents</option>
                    <option value="property">Property Documents</option>
                    <option value="business">Business Documents</option>
                    <option value="legal">Legal Documents</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label">Select Files</label>
                <div class="file-upload">
                    <input type="file" id="vaultFiles" multiple accept=".pdf,.doc,.docx,.xls,.xlsx">
                    <label for="vaultFiles" class="file-label">
                        <span class="material-symbols-outlined">upload_file</span>
                        <span>Choose Files</span>
                    </label>
                </div>
            </div>
            <div class="form-actions">
                <button type="reset" class="btn btn-outline">Reset</button>
                <button type="submit" class="btn btn-primary">Upload Documents</button>
            </div>
        </form>
    </div>
</section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>

<style>
.vault-hero{background:linear-gradient(135deg,var(--primary)0,var(--primary-container)100%)}
.vault-stats-section{padding:var(--spacing-3xl)0}
.stats-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:var(--spacing-lg)}
.stat-card{display:grid;grid-template-columns:auto 1fr;gap:var(--spacing-lg);align-items:center;background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);padding:var(--spacing-xl);border:1px solid var(--outline-variant)}
.stat-icon{width:3.5rem;height:3.5rem;background-color:var(--primary);color:var(--on-primary);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center}
.stat-icon .material-symbols-outlined{font-size:2rem}
.stat-content{flex:1}
.stat-number{font-size:2rem;font-weight:800;color:var(--primary);margin-bottom:var(--spacing-xs)}
.stat-label{font-size:1rem;color:var(--on-surface-variant);font-weight:500}
.my-documents-section{padding:var(--spacing-3xl)0;background-color:var(--surface-container-low)}
.section-header{display:flex;justify-content:space-between;align-items:center;margin-bottom:var(--spacing-xl);flex-wrap:wrap;gap:var(--spacing-lg)}
.document-controls{display:flex;gap:var(--spacing-md);align-items:center}
.search-input{padding:var(--spacing-sm) var(--spacing-md);border:1px solid var(--outline-variant);border-radius:var(--radius-md);background-color:var(--surface-container-lowest);color:var(--on-surface);font-size:.875rem}
.filter-select{padding:var(--spacing-sm) var(--spacing-md);border:1px solid var(--outline-variant);border-radius:var(--radius-md);background-color:var(--surface-container-lowest);color:var(--on-surface);font-size:.875rem}
.documents-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(350px,1fr));gap:var(--spacing-lg)}
.document-card{display:flex;gap:var(--spacing-md);background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);padding:var(--spacing-lg);border:1px solid var(--outline-variant);align-items:center}
.document-icon{width:3rem;height:3rem;background-color:var(--primary);color:var(--on-primary);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center;flex-shrink:0}
.document-icon .material-symbols-outlined{font-size:1.5rem}
.document-info{flex:1}
.document-info h4{font-size:1.125rem;font-weight:600;color:var(--primary);margin-bottom:var(--spacing-xs)}
.document-info p{color:var(--on-surface-variant);font-size:.875rem;margin-bottom:var(--spacing-sm)}
.document-meta{display:flex;gap:var(--spacing-md);font-size:.75rem;color:var(--on-surface-variant)}
.document-actions{display:flex;gap:var(--spacing-xs)}
.btn-icon{width:2rem;height:2rem;border:none;background-color:var(--surface-container);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;cursor:pointer;transition:all .2s ease}
.btn-icon:hover{background-color:var(--surface-container-high)}
.btn-icon .material-symbols-outlined{font-size:1rem;color:var(--on-surface)}
.upload-section{padding:var(--spacing-3xl)0}
.upload-form{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);border:1px solid var(--outline-variant);max-width:600px;margin:0 auto;padding:var(--spacing-xl)}
.form-group{margin-bottom:var(--spacing-lg)}
.form-label{display:block;font-size:.875rem;font-weight:600;color:var(--on-surface);margin-bottom:var(--spacing-sm)}
.form-input,.form-select{width:100%;padding:var(--spacing-sm) var(--spacing-md);border:1px solid var(--outline-variant);border-radius:var(--radius-md);background-color:var(--surface-container-lowest);color:var(--on-surface);font-size:.875rem;transition:all .2s ease}
.form-input:focus,.form-select:focus{outline:none;border-color:var(--primary);box-shadow:0 0 0 2px var(--primary-container)}
.file-upload{border:2px dashed var(--outline-variant);border-radius:var(--radius-md);padding:var(--spacing-lg);text-align:center;background-color:var(--surface-container)}
.file-upload input[type="file"]{display:none}
.file-label{display:inline-flex;align-items:center;gap:var(--spacing-sm);padding:var(--spacing-sm) var(--spacing-md);background-color:var(--primary);color:var(--on-primary);border-radius:var(--radius-md);cursor:pointer;transition:all .2s ease}
.file-label:hover{background-color:var(--primary-container)}
.form-actions{display:flex;gap:var(--spacing-lg);justify-content:center;margin-top:var(--spacing-xl)}
@media (max-width:768px){.section-header{flex-direction:column;align-items:stretch}.document-controls{flex-direction:column;gap:var(--spacing-sm)}.document-card{flex-direction:column;align-items:flex-start;gap:var(--spacing-sm)}.document-actions{width:100%;justify-content:space-between}.upload-form{margin:0 -var(--spacing-md);border-radius:0}}
</style>

<script>
document.getElementById('vaultFiles')?.addEventListener('change',function(e){const t=e.target.files,s=document.createElement('div');s.style.marginTop='var(--spacing-md)',Array.from(t).forEach(t=>{const e=document.createElement('div');e.style.padding='var(--spacing-xs)',e.style.color='var(--on-surface-variant)',e.textContent=`Selected: ${t.name}`,s.appendChild(e)}),this.parentNode.appendChild(s)});
document.querySelector('.upload-form')?.addEventListener('submit',function(e){e.preventDefault();alert('Documents uploaded successfully! Your files are now stored securely in your vault.')});
document.querySelectorAll('.document-actions .btn-icon').forEach(button=>{button.addEventListener('click',function(){const action=this.getAttribute('title'),docName=this.closest('.document-card').querySelector('h4').textContent;alert(`${action}: ${docName}`)})});
</script>
