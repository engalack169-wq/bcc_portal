<?php
/**
 * Bamenda City Council E-Governance Platform
 * Public Services Environmental Zones Page
 */

$page_title = 'Environmental Zones | Bamenda City Council';
$page_description = 'Environmental zones and green spaces management for Bamenda City Council public services.';
$page_keywords = 'environmental zones, green spaces, environmental protection, public services, Bamenda council';

$breadcrumbs = [
    ['title' => 'Public Services', 'url' => 'index.php'],
    ['title' => 'Environmental Zones', 'url' => '#']
];

require_once __DIR__ . '/../../includes/header.php';
?>

<section class="hero environmental-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-public-services.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Environmental Zones</span>
            <h1 class="hero-title">Green Spaces & Environment</h1>
            <p class="hero-subtitle">Explore environmental zones, green spaces, and conservation areas for sustainable urban development.</p>
            <div class="hero-actions">
                <a href="#zones-map" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">map</span>
                    View Zones Map
                </a>
                <a href="#green-spaces" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">park</span>
                    Green Spaces
                </a>
            </div>
        </div>
    </div>
</section>

<section class="environmental-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">park</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">45</div>
                    <div class="stat-label">Green Spaces</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">nature</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">230 ha</div>
                    <div class="stat-label">Protected Areas</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">eco</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">12</div>
                    <div class="stat-label">Conservation Zones</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="zones-map-section" id="zones-map">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Environmental Zones Map</h2>
            <p class="section-subtitle">Interactive map of environmental zones and protected areas</p>
        </div>
        <div class="map-container">
            <div class="map-placeholder">
                <div class="map-content">
                    <span class="material-symbols-outlined">map</span>
                    <p>Interactive environmental zones map</p>
                    <button class="btn btn-primary">Load Map</button>
                </div>
            </div>
            <div class="map-legend">
                <h4>Zone Types</h4>
                <div class="legend-items">
                    <div class="legend-item">
                        <div class="legend-color green"></div>
                        <span>Parks & Recreation</span>
                    </div>
                    <div class="legend-item">
                        <div class="legend-color blue"></div>
                        <span>Water Conservation</span>
                    </div>
                    <div class="legend-item">
                        <div class="legend-color yellow"></div>
                        <span>Agricultural Zones</span>
                    </div>
                    <div class="legend-item">
                        <div class="legend-color red"></div>
                        <span>Protected Areas</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="green-spaces-section" id="green-spaces">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Green Spaces</h2>
            <p class="section-subtitle">Explore parks, gardens, and recreational areas</p>
        </div>
        <div class="spaces-grid">
            <div class="space-card">
                <div class="space-image">
                    <img src="/assets/images/park-placeholder.png" alt="Central Park">
                </div>
                <div class="space-content">
                    <h3>Central Park</h3>
                    <p>Urban park with walking trails, playgrounds, and picnic areas.</p>
                    <div class="space-details">
                        <span class="detail-item">
                            <span class="material-symbols-outlined">landscape</span>
                            <span>25 hectares</span>
                        </span>
                        <span class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>City Center</span>
                        </span>
                    </div>
                    <div class="space-actions">
                        <button class="btn btn-sm btn-primary">Visit</button>
                        <button class="btn btn-sm btn-outline">Activities</button>
                    </div>
                </div>
            </div>
            <div class="space-card">
                <div class="space-image">
                    <img src="/assets/images/garden-placeholder.png" alt="Botanical Garden">
                </div>
                <div class="space-content">
                    <h3>Botanical Garden</h3>
                    <p>Native plant species collection with educational programs and guided tours.</p>
                    <div class="space-details">
                        <span class="detail-item">
                            <span class="material-symbols-outlined">landscape</span>
                            <span>15 hectares</span>
                        </span>
                        <span class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>North District</span>
                        </span>
                    </div>
                    <div class="space-actions">
                        <button class="btn btn-sm btn-primary">Visit</button>
                        <button class="btn btn-sm btn-outline">Tour Schedule</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="conservation-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Conservation Initiatives</h2>
            <p class="section-subtitle">Environmental protection and sustainability programs</p>
        </div>
        <div class="initiatives-grid">
            <div class="initiative-card">
                <div class="initiative-icon">
                    <span class="material-symbols-outlined">recycling</span>
                </div>
                <h3>Recycling Program</h3>
                <p>Comprehensive waste reduction and recycling initiative across all districts.</p>
                <button class="btn btn-sm btn-outline">Learn More</button>
            </div>
            <div class="initiative-card">
                <div class="initiative-icon">
                    <span class="material-symbols-outlined">water_drop</span>
                </div>
                <h3>Water Conservation</h3>
                <p>Water resource management and conservation programs for sustainable usage.</p>
                <button class="btn btn-sm btn-outline">Learn More</button>
            </div>
            <div class="initiative-card">
                <div class="initiative-icon">
                    <span class="material-symbols-outlined">energy_savings_leaf</span>
                </div>
                <h3>Green Energy</h3>
                <p>Renewable energy projects and carbon footprint reduction initiatives.</p>
                <button class="btn btn-sm btn-outline">Learn More</button>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>

<style>
.environmental-hero{background:linear-gradient(135deg,var(--tertiary)0,var(--tertiary-container)100%)}
.environmental-stats-section{padding:var(--spacing-3xl)0}
.stats-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:var(--spacing-lg)}
.stat-card{display:grid;grid-template-columns:auto 1fr;gap:var(--spacing-lg);align-items:center;background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);padding:var(--spacing-xl);border:1px solid var(--outline-variant)}
.stat-icon{width:3.5rem;height:3.5rem;background-color:var(--tertiary);color:var(--on-tertiary);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center}
.stat-icon .material-symbols-outlined{font-size:2rem}
.stat-content{flex:1}
.stat-number{font-size:2rem;font-weight:800;color:var(--tertiary);margin-bottom:var(--spacing-xs)}
.stat-label{font-size:1rem;color:var(--on-surface-variant);font-weight:500}
.zones-map-section{padding:var(--spacing-3xl)0;background-color:var(--surface-container-low)}
.map-container{display:grid;grid-template-columns:2fr 1fr;gap:var(--spacing-lg)}
.map-placeholder{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);height:400px;display:flex;align-items:center;justify-content:center;border:1px solid var(--outline-variant)}
.map-content{text-align:center}
.map-content .material-symbols-outlined{font-size:4rem;color:var(--tertiary);margin-bottom:var(--spacing-md)}
.map-content p{color:var(--on-surface-variant);margin-bottom:var(--spacing-lg)}
.map-legend{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);padding:var(--spacing-lg);border:1px solid var(--outline-variant)}
.map-legend h4{font-size:1.25rem;font-weight:700;color:var(--tertiary);margin-bottom:var(--spacing-md)}
.legend-items{display:flex;flex-direction:column;gap:var(--spacing-sm)}
.legend-item{display:flex;align-items:center;gap:var(--spacing-sm)}
.legend-color{width:1rem;height:1rem;border-radius:var(--radius-xs)}
.legend-color.green{background-color:#4caf50}
.legend-color.blue{background-color:#2196f3}
.legend-color.yellow{background-color:#ff9800}
.legend-color.red{background-color:#f44336}
.green-spaces-section{padding:var(--spacing-3xl)0}
.spaces-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(350px,1fr));gap:var(--spacing-lg)}
.space-card{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);overflow:hidden;border:1px solid var(--outline-variant)}
.space-image{height:200px;overflow:hidden}
.space-image img{width:100%;height:100%;object-fit:cover}
.space-content{padding:var(--spacing-lg)}
.space-content h3{font-size:1.25rem;font-weight:700;color:var(--tertiary);margin-bottom:var(--spacing-sm)}
.space-content p{color:var(--on-surface-variant);margin-bottom:var(--spacing-md)}
.space-details{display:flex;gap:var(--spacing-lg);margin-bottom:var(--spacing-md)}
.detail-item{display:flex;align-items:center;gap:var(--spacing-xs);font-size:.875rem;color:var(--on-surface-variant)}
.detail-item .material-symbols-outlined{font-size:1rem}
.space-actions{display:flex;gap:var(--spacing-sm)}
.conservation-section{padding:var(--spacing-3xl)0;background-color:var(--surface-container-low)}
.initiatives-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:var(--spacing-lg)}
.initiative-card{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);padding:var(--spacing-lg);border:1px solid var(--outline-variant);text-align:center}
.initiative-icon{width:3.5rem;height:3.5rem;background-color:var(--tertiary);color:var(--on-tertiary);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center;margin:0 auto var(--spacing-md)}
.initiative-icon .material-symbols-outlined{font-size:2rem}
.initiative-card h3{font-size:1.25rem;font-weight:700;color:var(--tertiary);margin-bottom:var(--spacing-sm)}
.initiative-card p{color:var(--on-surface-variant);margin-bottom:var(--spacing-lg)}
@media (max-width:768px){.map-container{grid-template-columns:1fr;gap:var(--spacing-md)}.map-placeholder{height:300px}.spaces-grid{grid-template-columns:1fr;gap:var(--spacing-lg)}.initiatives-grid{grid-template-columns:1fr;gap:var(--spacing-lg)}}
</style>

<script>
document.querySelector('.map-placeholder .btn-primary')?.addEventListener('click',function(){alert('Loading interactive environmental zones map... In production, this would load the actual map interface.')});
document.querySelectorAll('.space-actions .btn-primary').forEach(button=>{button.addEventListener('click',function(){const spaceName=this.closest('.space-card').querySelector('h3').textContent;alert(`Getting directions to ${spaceName}... In production, this would show map directions.`})});
document.querySelectorAll('.space-actions .btn-outline').forEach(button=>{button.addEventListener('click',function(){const spaceName=this.closest('.space-card').querySelector('h3').textContent;alert(`Loading activities for ${spaceName}... In production, this would show available activities.`})});
document.querySelectorAll('.initiative-card .btn-outline').forEach(button=>{button.addEventListener('click',function(){const initiative=this.closest('.initiative-card').querySelector('h3').textContent;alert(`Loading details for ${initiative}... In production, this would show program details.`})});
</script>
