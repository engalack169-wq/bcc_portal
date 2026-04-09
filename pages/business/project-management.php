<?php
/**
 * Bamenda City Council E-Governance Platform
 * Business Project Management Page
 */

$page_title = 'Project Management | Bamenda City Council';
$page_description = 'Project management tools and services for businesses in Bamenda City Council.';
$page_keywords = 'project management, business tools, project tracking, Bamenda council';

$breadcrumbs = [
    ['title' => 'Business', 'url' => 'index.php'],
    ['title' => 'Project Management', 'url' => '#']
];

require_once __DIR__ . '/../../includes/header.php';
?>

<section class="hero project-management-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-business-support.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Project Management</span>
            <h1 class="hero-title">Business Project Tools</h1>
            <p class="hero-subtitle">Comprehensive project management platform including planning tools, resource allocation, timeline tracking, and collaboration features for business projects.</p>
            <div class="hero-actions">
                <a href="#project-dashboard" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">dashboard</span>
                    Project Dashboard
                </a>
                <a href="#create-project" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">add_circle</span>
                    New Project
                </a>
            </div>
        </div>
    </div>
</section>

<section class="pm-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">assignment</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">234</div>
                    <div class="stat-label">Active Projects</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">1,234</div>
                    <div class="stat-label">Team Members</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">task_alt</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">89%</div>
                    <div class="stat-label">Completion Rate</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="project-dashboard-section" id="project-dashboard">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Project Dashboard</h2>
            <div class="dashboard-controls">
                <select class="filter-select">
                    <option value="">All Projects</option>
                    <option value="planning">Planning</option>
                    <option value="active">Active</option>
                    <option value="review">Under Review</option>
                    <option value="completed">Completed</option>
                </select>
                <button class="btn btn-primary">Create New Project</button>
            </div>
        </div>
        <div class="projects-grid">
            <div class="project-card">
                <div class="project-header">
                    <h3 class="project-title">Downtown Redevelopment</h3>
                    <span class="badge badge-warning">In Progress</span>
                </div>
                <div class="project-progress">
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 65%;"></div>
                    </div>
                    <span class="progress-text">65% Complete</span>
                </div>
                <div class="project-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Start: Oct 1, 2024</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">event</span>
                        <span>Due: Feb 28, 2025</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">groups</span>
                        <span>12 Team Members</span>
                    </div>
                </div>
                <div class="project-actions">
                    <button class="btn btn-sm btn-primary">View Details</button>
                    <button class="btn btn-sm btn-outline">Update Progress</button>
                </div>
            </div>
            <div class="project-card">
                <div class="project-header">
                    <h3 class="project-title">Market Expansion</h3>
                    <span class="badge badge-success">On Track</span>
                </div>
                <div class="project-progress">
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: 40%;"></div>
                    </div>
                    <span class="progress-text">40% Complete</span>
                </div>
                <div class="project-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Start: Nov 15, 2024</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">event</span>
                        <span>Due: Apr 30, 2025</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">groups</span>
                        <span>8 Team Members</span>
                    </div>
                </div>
                <div class="project-actions">
                    <button class="btn btn-sm btn-primary">View Details</button>
                    <button class="btn btn-sm btn-outline">Update Progress</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="create-project-section" id="create-project">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Create New Project</h2>
            <p class="section-subtitle">Start a new business project with comprehensive planning tools</p>
        </div>
        <form class="project-form">
            <div class="form-section">
                <h3 class="section-title">Project Information</h3>
                <div class="form-group">
                    <label class="form-label">Project Name *</label>
                    <input type="text" class="form-input" placeholder="Enter project name" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Project Description *</label>
                    <textarea class="form-textarea" rows="4" placeholder="Describe your project goals and objectives" required></textarea>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Project Type *</label>
                        <select class="form-select" required>
                            <option value="">Select project type</option>
                            <option value="construction">Construction</option>
                            <option value="technology">Technology</option>
                            <option value="marketing">Marketing</option>
                            <option value="research">Research & Development</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Priority Level *</label>
                        <select class="form-select" required>
                            <option value="">Select priority</option>
                            <option value="high">High</option>
                            <option value="medium">Medium</option>
                            <option value="low">Low</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-section">
                <h3 class="section-title">Timeline & Resources</h3>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Start Date *</label>
                        <input type="date" class="form-input" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Target Completion *</label>
                        <input type="date" class="form-input" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Budget (XAF)</label>
                        <input type="number" class="form-input" placeholder="0" min="0">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Team Size</label>
                        <input type="number" class="form-input" placeholder="0" min="1">
                    </div>
                </div>
            </div>
            <div class="form-section">
                <h3 class="section-title">Team Members</h3>
                <div class="form-group">
                    <label class="form-label">Project Manager *</label>
                    <input type="text" class="form-input" placeholder="Enter project manager name" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Team Members</label>
                    <textarea class="form-textarea" rows="3" placeholder="Enter team member names (one per line)"></textarea>
                </div>
            </div>
            <div class="form-actions">
                <button type="reset" class="btn btn-outline">Reset</button>
                <button type="submit" class="btn btn-primary">Create Project</button>
            </div>
        </form>
    </div>
</section>

<section class="tools-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Project Management Tools</h2>
            <p class="section-subtitle">Advanced tools for efficient project management</p>
        </div>
        <div class="tools-grid">
            <div class="tool-card">
                <div class="tool-icon">
                    <span class="material-symbols-outlined">calendar_month</span>
                </div>
                <h3 class="tool-title">Gantt Charts</h3>
                <p class="tool-description">Visual project timeline with dependencies and milestones.</p>
                <button class="btn btn-sm btn-outline">Launch Tool</button>
            </div>
            <div class="tool-card">
                <div class="tool-icon">
                    <span class="material-symbols-outlined">assessment</span>
                </div>
                <h3 class="tool-title">Resource Planning</h3>
                <p class="tool-description">Allocate and manage project resources efficiently.</p>
                <button class="btn btn-sm btn-outline">Launch Tool</button>
            </div>
            <div class="tool-card">
                <div class="tool-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <h3 class="tool-title">Team Collaboration</h3>
                <p class="tool-description">Real-time collaboration and communication tools.</p>
                <button class="btn btn-sm btn-outline">Launch Tool</button>
            </div>
            <div class="tool-card">
                <div class="tool-icon">
                    <span class="material-symbols-outlined">insights</span>
                </div>
                <h3 class="tool-title">Analytics Dashboard</h3>
                <p class="tool-description">Comprehensive project analytics and reporting.</p>
                <button class="btn btn-sm btn-outline">Launch Tool</button>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>

<style>
.project-management-hero{background:linear-gradient(135deg,var(--primary)0,var(--primary-container)100%)}
.pm-stats-section{padding:var(--spacing-3xl)0}
.stats-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:var(--spacing-lg)}
.stat-card{display:grid;grid-template-columns:auto 1fr;gap:var(--spacing-lg);align-items:center;background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);padding:var(--spacing-xl);border:1px solid var(--outline-variant)}
.stat-icon{width:3.5rem;height:3.5rem;background-color:var(--primary);color:var(--on-primary);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center}
.stat-icon .material-symbols-outlined{font-size:2rem}
.stat-content{flex:1}
.stat-number{font-size:2rem;font-weight:800;color:var(--primary);margin-bottom:var(--spacing-xs)}
.stat-label{font-size:1rem;color:var(--on-surface-variant);font-weight:500}
.project-dashboard-section{padding:var(--spacing-3xl)0;background-color:var(--surface-container-low)}
.section-header{display:flex;justify-content:space-between;align-items:center;margin-bottom:var(--spacing-xl);flex-wrap:wrap;gap:var(--spacing-lg)}
.dashboard-controls{display:flex;gap:var(--spacing-md);align-items:center;flex-wrap:wrap}
.filter-select{padding:var(--spacing-sm) var(--spacing-md);border:1px solid var(--outline-variant);border-radius:var(--radius-md);background-color:var(--surface-container-lowest);color:var(--on-surface);font-size:.875rem}
.projects-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(350px,1fr));gap:var(--spacing-lg)}
.project-card{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);border:1px solid var(--outline-variant);overflow:hidden}
.project-header{display:flex;justify-content:space-between;align-items:center;padding:var(--spacing-lg);background-color:var(--surface-container);border-bottom:1px solid var(--outline-variant)}
.project-title{font-size:1.25rem;font-weight:700;color:var(--primary)}
.badge-warning{background-color:var(--secondary);color:var(--on-secondary)}
.badge-success{background-color:var(--tertiary);color:var(--on-tertiary)}
.project-progress{padding:var(--spacing-lg);background-color:var(--surface-container)}
.progress-bar{height:8px;background-color:var(--surface-container-high);border-radius:var(--radius-full);overflow:hidden;margin-bottom:var(--spacing-sm)}
.progress-fill{height:100%;background-color:var(--primary);transition:width .3s ease}
.progress-text{font-size:.875rem;color:var(--on-surface-variant);font-weight:600}
.project-details{padding:var(--spacing-lg);display:flex;flex-direction:column;gap:var(--spacing-sm)}
.detail-item{display:flex;align-items:center;gap:var(--spacing-sm);font-size:.875rem;color:var(--on-surface-variant)}
.detail-item .material-symbols-outlined{font-size:1rem}
.project-actions{padding:var(--spacing-lg);display:flex;gap:var(--spacing-sm);border-top:1px solid var(--outline-variant)}
.create-project-section{padding:var(--spacing-3xl)0}
.project-form{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);border:1px solid var(--outline-variant);max-width:800px;margin:0 auto;padding:var(--spacing-xl)}
.form-section{padding:var(--spacing-xl);border-bottom:1px solid var(--outline-variant)}
.form-section:last-child{border-bottom:none}
.section-title{font-size:1.25rem;font-weight:700;color:var(--primary);margin-bottom:var(--spacing-lg)}
.form-group{margin-bottom:var(--spacing-lg)}
.form-label{display:block;font-size:.875rem;font-weight:600;color:var(--on-surface);margin-bottom:var(--spacing-sm)}
.form-input,.form-textarea,.form-select{width:100%;padding:var(--spacing-sm) var(--spacing-md);border:1px solid var(--outline-variant);border-radius:var(--radius-md);background-color:var(--surface-container-lowest);color:var(--on-surface);font-size:.875rem;transition:all .2s ease}
.form-input:focus,.form-textarea:focus,.form-select:focus{outline:none;border-color:var(--primary);box-shadow:0 0 0 2px var(--primary-container)}
.form-textarea{resize:vertical;min-height:100px}
.form-row{display:grid;grid-template-columns:1fr 1fr;gap:var(--spacing-lg)}
.form-actions{display:flex;gap:var(--spacing-lg);justify-content:center;margin-top:var(--spacing-xl)}
.tools-section{padding:var(--spacing-3xl)0;background-color:var(--surface-container-low)}
.tools-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:var(--spacing-lg)}
.tool-card{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);padding:var(--spacing-xl);border:1px solid var(--outline-variant);text-align:center}
.tool-icon{width:3.5rem;height:3.5rem;background-color:var(--primary);color:var(--on-primary);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center;margin:0 auto var(--spacing-lg)}
.tool-icon .material-symbols-outlined{font-size:2rem}
.tool-title{font-size:1.25rem;font-weight:700;color:var(--primary);margin-bottom:var(--spacing-sm)}
.tool-description{color:var(--on-surface-variant);line-height:1.6;margin-bottom:var(--spacing-lg)}
@media (max-width:768px){.section-header{flex-direction:column;align-items:stretch}.dashboard-controls{flex-direction:column;gap:var(--spacing-sm)}.projects-grid{grid-template-columns:1fr;gap:var(--spacing-lg)}.form-row{grid-template-columns:1fr;gap:var(--spacing-md)}.tools-grid{grid-template-columns:repeat(2,1fr);gap:var(--spacing-md)}.project-actions{flex-direction:column;gap:var(--spacing-sm)}}
@media (max-width:480px){.tools-grid{grid-template-columns:1fr;gap:var(--spacing-lg)}.form-actions{flex-direction:column;align-items:center}.form-actions .btn{width:100%;max-width:300px}}
</style>

<script>
document.querySelector('.project-form')?.addEventListener('submit',function(e){e.preventDefault();alert('Project created successfully! Your project dashboard is now ready for team collaboration and progress tracking.')});
document.querySelectorAll('.project-actions .btn-primary').forEach(button=>{button.addEventListener('click',function(){const projectName=this.closest('.project-card').querySelector('.project-title').textContent;alert(`Opening project dashboard for: ${projectName}... In production, this would show detailed project management interface.`})});
document.querySelectorAll('.project-actions .btn-outline').forEach(button=>{button.addEventListener('click',function(){const projectName=this.closest('.project-card').querySelector('.project-title').textContent;alert(`Opening progress update for: ${projectName}... In production, this would show progress update tools.`})});
document.querySelectorAll('.tool-card .btn-outline').forEach(button=>{button.addEventListener('click',function(){const toolName=this.closest('.tool-card').querySelector('.tool-title').textContent;alert(`Launching ${toolName}... In production, this would open the actual project management tool.`})});
</script>
