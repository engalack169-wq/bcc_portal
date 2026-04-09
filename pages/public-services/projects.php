<?php
/**
 * Bamenda City Council E-Governance Platform
 * Public Services Projects Showcase Page
 */

$page_title = 'Projects Showcase | Bamenda City Council';
$page_description = 'Current and completed development projects in Bamenda City Council.';
$page_keywords = 'development projects, infrastructure, urban development, Bamenda council';

$breadcrumbs = [
    ['title' => 'Public Services', 'url' => 'index.php'],
    ['title' => 'Projects Showcase', 'url' => '#']
];

require_once __DIR__ . '/../../includes/header.php';
?>

<section class="hero projects-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-public-services.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Projects Showcase</span>
            <h1 class="hero-title">Development Projects</h1>
            <p class="hero-subtitle">Explore current and completed infrastructure projects, urban development initiatives, and community improvements across Bamenda City.</p>
            <div class="hero-actions">
                <a href="#current-projects" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">construction</span>
                    Current Projects
                </a>
                <a href="#completed-projects" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">task_alt</span>
                    Completed Projects
                </a>
            </div>
        </div>
    </div>
</section>

<section class="projects-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">construction</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">23</div>
                    <div class="stat-label">Active Projects</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">task_alt</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">156</div>
                    <div class="stat-label">Completed Projects</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">payments</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">₣3.4B</div>
                    <div class="stat-label">Total Investment</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="current-projects-section" id="current-projects">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Current Projects</h2>
            <div class="filter-controls">
                <select class="filter-select">
                    <option value="">All Categories</option>
                    <option value="infrastructure">Infrastructure</option>
                    <option value="health">Healthcare</option>
                    <option value="education">Education</option>
                    <option value="recreation">Recreation</option>
                </select>
            </div>
        </div>
        <div class="projects-grid">
            <div class="project-card">
                <div class="project-image">
                    <img src="/stitch1/assets/images/road-construction-project.jpg" alt="Road Construction Project">
                    <div class="project-progress">
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 75%;"></div>
                        </div>
                        <span class="progress-text">75% Complete</span>
                    </div>
                </div>
                <div class="project-content">
                    <div class="project-header">
                        <h3 class="project-title">Urban Road Network Upgrade</h3>
                        <span class="badge badge-warning">In Progress</span>
                    </div>
                    <p class="project-description">Comprehensive upgrade of 25km urban roads including resurfacing, drainage improvements, and street lighting installation.</p>
                    <div class="project-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">category</span>
                            <span>Infrastructure</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>₣450,000,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Completion: Q2 2025</span>
                        </div>
                    </div>
                    <div class="project-actions">
                        <button class="btn btn-sm btn-primary">View Details</button>
                        <button class="btn btn-sm btn-outline">Progress Report</button>
                    </div>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="/stitch1/assets/images/hospital-construction-project.jpg" alt="Hospital Construction">
                    <div class="project-progress">
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 45%;"></div>
                        </div>
                        <span class="progress-text">45% Complete</span>
                    </div>
                </div>
                <div class="project-content">
                    <div class="project-header">
                        <h3 class="project-title">Regional Hospital Expansion</h3>
                        <span class="badge badge-warning">In Progress</span>
                    </div>
                    <p class="project-description">Major expansion of Bamenda Regional Hospital adding new wings, modern equipment, and increased bed capacity.</p>
                    <div class="project-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">category</span>
                            <span>Healthcare</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>₣850,000,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Completion: Q4 2025</span>
                        </div>
                    </div>
                    <div class="project-actions">
                        <button class="btn btn-sm btn-primary">View Details</button>
                        <button class="btn btn-sm btn-outline">Progress Report</button>
                    </div>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="/stitch1/assets/images/school-construction-project.jpg" alt="School Construction">
                    <div class="project-progress">
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 90%;"></div>
                        </div>
                        <span class="progress-text">90% Complete</span>
                    </div>
                </div>
                <div class="project-content">
                    <div class="project-header">
                        <h3 class="project-title">Modern Secondary School Complex</h3>
                        <span class="badge badge-success">Near Completion</span>
                    </div>
                    <p class="project-description">Construction of a modern secondary school with science labs, library, sports facilities, and digital classrooms.</p>
                    <div class="project-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">category</span>
                            <span>Education</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>₣320,000,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Completion: Jan 2025</span>
                        </div>
                    </div>
                    <div class="project-actions">
                        <button class="btn btn-sm btn-primary">View Details</button>
                        <button class="btn btn-sm btn-outline">Progress Report</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="completed-projects-section" id="completed-projects">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Completed Projects</h2>
            <p class="section-subtitle">Successfully completed development projects</p>
        </div>
        <div class="completed-grid">
            <div class="completed-card">
                <div class="completed-image">
                    <img src="/stitch1/assets/images/completed-water-project.jpg" alt="Water Supply Project">
                    <div class="completion-badge">
                        <span class="material-symbols-outlined">task_alt</span>
                        <span>Completed</span>
                    </div>
                </div>
                <div class="completed-content">
                    <h3 class="completed-title">City Water Supply System</h3>
                    <p class="completed-description">Modern water treatment plant and distribution network serving 200,000 residents.</p>
                    <div class="completed-stats">
                        <div class="stat-item">
                            <span>Completed: Nov 2024</span>
                        </div>
                        <div class="stat-item">
                            <span>Cost: ₣1.2B</span>
                        </div>
                        <div class="stat-item">
                            <span>Beneficiaries: 200,000</span>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-outline">View Impact</button>
                </div>
            </div>
            <div class="completed-card">
                <div class="completed-image">
                    <img src="/stitch1/assets/images/completed-market-project.jpg" alt="Market Renovation">
                    <div class="completion-badge">
                        <span class="material-symbols-outlined">task_alt</span>
                        <span>Completed</span>
                    </div>
                </div>
                <div class="completed-content">
                    <h3 class="completed-title">Central Market Renovation</h3>
                    <p class="completed-description">Complete renovation of the central market with modern facilities and improved vendor spaces.</p>
                    <div class="completed-stats">
                        <div class="stat-item">
                            <span>Completed: Oct 2024</span>
                        </div>
                        <div class="stat-item">
                            <span>Cost: ₣450M</span>
                        </div>
                        <div class="stat-item">
                            <span>Vendors: 500+</span>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-outline">View Impact</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="project-timeline-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Project Timeline</h2>
            <p class="section-subtitle">Upcoming project milestones and completion dates</p>
        </div>
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-date">January 2025</div>
                <div class="timeline-content">
                    <h4>Secondary School Complex Opening</h4>
                    <p>Official opening ceremony of the new modern secondary school.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-date">March 2025</div>
                <div class="timeline-content">
                    <h4>Phase 1 Road Network Completion</h4>
                    <p>First phase of urban road upgrade project completion.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-date">June 2025</div>
                <div class="timeline-content">
                    <h4>Public Park Opening</h4>
                    <p>Opening of new recreational park and green space.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>

<style>
.projects-hero{background:linear-gradient(135deg,var(--tertiary)0,var(--tertiary-container)100%)}
.projects-stats-section{padding:var(--spacing-3xl)0}
.stats-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:var(--spacing-lg)}
.stat-card{display:grid;grid-template-columns:auto 1fr;gap:var(--spacing-lg);align-items:center;background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);padding:var(--spacing-xl);border:1px solid var(--outline-variant)}
.stat-icon{width:3.5rem;height:3.5rem;background-color:var(--tertiary);color:var(--on-tertiary);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center}
.stat-icon .material-symbols-outlined{font-size:2rem}
.stat-content{flex:1}
.stat-number{font-size:2rem;font-weight:800;color:var(--tertiary);margin-bottom:var(--spacing-xs)}
.stat-label{font-size:1rem;color:var(--on-surface-variant);font-weight:500}
.current-projects-section{padding:var(--spacing-3xl)0;background-color:var(--surface-container-low)}
.section-header{display:flex;justify-content:space-between;align-items:center;margin-bottom:var(--spacing-xl);flex-wrap:wrap;gap:var(--spacing-lg)}
.filter-select{padding:var(--spacing-sm) var(--spacing-md);border:1px solid var(--outline-variant);border-radius:var(--radius-md);background-color:var(--surface-container-lowest);color:var(--on-surface);font-size:.875rem}
.projects-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(400px,1fr));gap:var(--spacing-lg)}
.project-card{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);overflow:hidden;border:1px solid var(--outline-variant)}
.project-image{position:relative;height:200px;overflow:hidden}
.project-image img{width:100%;height:100%;object-fit:cover}
.project-progress{position:absolute;bottom:0;left:0;right:0;background-color:rgba(0,0,0,.8);padding:var(--spacing-sm)}
.progress-bar{height:4px;background-color:var(--surface-container);border-radius:var(--radius-full);overflow:hidden;margin-bottom:var(--spacing-xs)}
.progress-fill{height:100%;background-color:var(--tertiary);transition:width .3s ease}
.progress-text{color:var(--on-tertiary);font-size:.75rem;font-weight:600}
.project-content{padding:var(--spacing-lg)}
.project-header{display:flex;justify-content:space-between;align-items:center;margin-bottom:var(--spacing-sm)}
.project-title{font-size:1.25rem;font-weight:700;color:var(--tertiary)}
.badge-warning{background-color:var(--secondary);color:var(--on-secondary)}
.badge-success{background-color:var(--tertiary);color:var(--on-tertiary)}
.project-description{color:var(--on-surface-variant);line-height:1.6;margin-bottom:var(--spacing-lg)}
.project-details{display:flex;flex-direction:column;gap:var(--spacing-sm);margin-bottom:var(--spacing-lg)}
.detail-item{display:flex;align-items:center;gap:var(--spacing-sm);font-size:.875rem;color:var(--on-surface-variant)}
.detail-item .material-symbols-outlined{font-size:1rem}
.project-actions{display:flex;gap:var(--spacing-sm)}
.completed-projects-section{padding:var(--spacing-3xl)0}
.completed-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(350px,1fr));gap:var(--spacing-lg)}
.completed-card{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);overflow:hidden;border:1px solid var(--outline-variant)}
.completed-image{position:relative;height:200px;overflow:hidden}
.completed-image img{width:100%;height:100%;object-fit:cover}
.completion-badge{position:absolute;top:var(--spacing-lg);right:var(--spacing-lg);background-color:var(--tertiary);color:var(--on-tertiary);padding:var(--spacing-xs) var(--spacing-sm);border-radius:var(--radius-full);display:flex;align-items:center;gap:var(--spacing-xs);font-size:.75rem;font-weight:600}
.completed-content{padding:var(--spacing-lg)}
.completed-title{font-size:1.25rem;font-weight:700;color:var(--tertiary);margin-bottom:var(--spacing-sm)}
.completed-description{color:var(--on-surface-variant);line-height:1.6;margin-bottom:var(--spacing-lg)}
.completed-stats{display:flex;flex-direction:column;gap:var(--spacing-xs);margin-bottom:var(--spacing-lg)}
.stat-item{font-size:.875rem;color:var(--on-surface-variant)}
.project-timeline-section{padding:var(--spacing-3xl)0;background-color:var(--surface-container-low)}
.timeline{display:flex;flex-direction:column;gap:var(--spacing-lg)}
.timeline-item{display:flex;gap:var(--spacing-lg);background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);padding:var(--spacing-lg);border:1px solid var(--outline-variant)}
.timeline-date{flex-shrink:0;background-color:var(--tertiary);color:var(--on-tertiary);padding:var(--spacing-sm) var(--spacing-md);border-radius:var(--radius-md);font-weight:600;text-align:center;min-width:120px}
.timeline-content{flex:1}
.timeline-content h4{font-size:1.125rem;font-weight:700;color:var(--tertiary);margin-bottom:var(--spacing-xs)}
.timeline-content p{color:var(--on-surface-variant);font-size:.875rem}
@media (max-width:768px){.section-header{flex-direction:column;align-items:stretch}.projects-grid{grid-template-columns:1fr;gap:var(--spacing-lg)}.completed-grid{grid-template-columns:1fr;gap:var(--spacing-lg)}.project-actions{flex-direction:column;gap:var(--spacing-sm)}.timeline-item{flex-direction:column;gap:var(--spacing-md)}.timeline-date{min-width:auto;text-align:left}}
</style>

<script>
document.querySelectorAll('.project-actions .btn-primary').forEach(button=>{button.addEventListener('click',function(){const projectName=this.closest('.project-card').querySelector('.project-title').textContent;alert(`Loading details for: ${projectName}... In production, this would show comprehensive project information.`})});
document.querySelectorAll('.project-actions .btn-outline').forEach(button=>{button.addEventListener('click',function(){const projectName=this.closest('.project-card').querySelector('.project-title').textContent;alert(`Loading progress report for: ${projectName}... In production, this would show detailed progress reports.`})});
document.querySelectorAll('.completed-card .btn-outline').forEach(button=>{button.addEventListener('click',function(){const projectName=this.closest('.completed-card').querySelector('.completed-title').textContent;alert(`Loading impact report for: ${projectName}... In production, this would show project impact and benefits.`})});
</script>
