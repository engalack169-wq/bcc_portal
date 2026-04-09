<?php
/**
 * Bamenda City Council E-Governance Platform
 * Civic Engagement Transparency Hub Page
 */

$page_title = 'Transparency Hub | Bamenda City Council';
$page_description = 'Access transparency reports, budget information, and open data from Bamenda City Council.';
$page_keywords = 'transparency, open data, budget reports, civic accountability, Bamenda council';

$breadcrumbs = [
    ['title' => 'Civic Engagement', 'url' => 'index.php'],
    ['title' => 'Transparency Hub', 'url' => '#']
];

require_once __DIR__ . '/../../includes/header.php';
?>

<section class="hero transparency-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-civic-engagement.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Transparency Hub</span>
            <h1 class="hero-title">Open Government Data</h1>
            <p class="hero-subtitle">Access comprehensive transparency reports, budget information, and open data for complete civic accountability.</p>
            <div class="hero-actions">
                <a href="#budget-reports" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">account_balance</span>
                    Budget Reports
                </a>
                <a href="#open-data" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">dataset</span>
                    Open Data
                </a>
            </div>
        </div>
    </div>
</section>

<section class="transparency-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">1,234</div>
                    <div class="stat-label">Public Documents</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">account_balance</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">₣2.3B</div>
                    <div class="stat-label">Annual Budget</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">visibility</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">45,678</div>
                    <div class="stat-label">Data Downloads</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="budget-reports-section" id="budget-reports">
    <div class="container">
        <h2 class="section-title">Budget Reports</h2>
        <div class="reports-grid">
            <div class="report-card">
                <div class="report-header">
                    <h3>Q4 2024 Budget Report</h3>
                    <span class="badge">Latest</span>
                </div>
                <p>Comprehensive quarterly financial analysis and budget performance metrics.</p>
                <div class="report-actions">
                    <button class="btn btn-sm btn-primary">Download PDF</button>
                    <button class="btn btn-sm btn-outline">View Online</button>
                </div>
            </div>
            <div class="report-card">
                <div class="report-header">
                    <h3>Annual Budget 2024</h3>
                    <span class="badge">Annual</span>
                </div>
                <p>Complete annual budget breakdown and allocation across all departments.</p>
                <div class="report-actions">
                    <button class="btn btn-sm btn-primary">Download PDF</button>
                    <button class="btn btn-sm btn-outline">View Online</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="open-data-section" id="open-data">
    <div class="container">
        <h2 class="section-title">Open Data Portal</h2>
        <div class="data-categories">
            <div class="category-card">
                <div class="category-icon">
                    <span class="material-symbols-outlined">apartment</span>
                </div>
                <h3>Property Data</h3>
                <p>Property records, ownership information, and tax assessments.</p>
                <button class="btn btn-sm btn-outline">Explore Dataset</button>
            </div>
            <div class="category-card">
                <div class="category-icon">
                    <span class="material-symbols-outlined">business</span>
                </div>
                <h3>Business Registry</h3>
                <p>Business licenses, permits, and commercial activity data.</p>
                <button class="btn btn-sm btn-outline">Explore Dataset</button>
            </div>
            <div class="category-card">
                <div class="category-icon">
                    <span class="material-symbols-outlined">construction</span>
                </div>
                <h3>Infrastructure Projects</h3>
                <p>Development projects, construction permits, and urban planning data.</p>
                <button class="btn btn-sm btn-outline">Explore Dataset</button>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>

<style>
.transparency-hero{background:linear-gradient(135deg,var(--tertiary)0,var(--tertiary-container)100%)}
.transparency-stats-section{padding:var(--spacing-3xl)0}
.stats-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:var(--spacing-lg)}
.stat-card{display:grid;grid-template-columns:auto 1fr;gap:var(--spacing-lg);align-items:center;background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);padding:var(--spacing-xl);border:1px solid var(--outline-variant)}
.stat-icon{width:3.5rem;height:3.5rem;background-color:var(--tertiary);color:var(--on-tertiary);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center}
.stat-icon .material-symbols-outlined{font-size:2rem}
.stat-content{flex:1}
.stat-number{font-size:2rem;font-weight:800;color:var(--tertiary);margin-bottom:var(--spacing-xs)}
.stat-label{font-size:1rem;color:var(--on-surface-variant);font-weight:500}
.budget-reports-section{padding:var(--spacing-3xl)0;background-color:var(--surface-container-low)}
.reports-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(350px,1fr));gap:var(--spacing-lg)}
.report-card{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);padding:var(--spacing-lg);border:1px solid var(--outline-variant)}
.report-header{display:flex;justify-content:space-between;align-items:center;margin-bottom:var(--spacing-md)}
.report-header h3{font-size:1.25rem;font-weight:700;color:var(--tertiary)}
.report-actions{display:flex;gap:var(--spacing-sm);margin-top:var(--spacing-md)}
.open-data-section{padding:var(--spacing-3xl)0}
.data-categories{display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:var(--spacing-lg)}
.category-card{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);padding:var(--spacing-lg);border:1px solid var(--outline-variant);text-align:center}
.category-icon{width:3.5rem;height:3.5rem;background-color:var(--tertiary);color:var(--on-tertiary);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center;margin:0 auto var(--spacing-md)}
.category-icon .material-symbols-outlined{font-size:2rem}
.category-card h3{font-size:1.25rem;font-weight:700;color:var(--tertiary);margin-bottom:var(--spacing-sm)}
.category-card p{color:var(--on-surface-variant);margin-bottom:var(--spacing-lg)}
</style>

<script>
document.querySelectorAll('.report-actions .btn-primary').forEach(button=>{button.addEventListener('click',function(){alert('Downloading budget report... In production, this would download the actual PDF file.')})});
document.querySelectorAll('.category-card .btn-outline').forEach(button=>{button.addEventListener('click',function(){alert('Opening dataset explorer... In production, this would show the interactive data portal.')})});
</script>
