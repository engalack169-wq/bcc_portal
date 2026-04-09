<?php
/**
 * Bamenda City Council E-Governance Platform
 * Public Services Interactive City Map Page
 */

$page_title = 'Interactive City Map | Bamenda City Council';
$page_description = 'Interactive map of Bamenda City with services, facilities, and points of interest.';
$page_keywords = 'city map, interactive map, services locator, urban navigation, Bamenda council';

$breadcrumbs = [
    ['title' => 'Public Services', 'url' => 'index.php'],
    ['title' => 'Interactive City Map', 'url' => '#']
];

require_once __DIR__ . '/../../includes/header.php';
?>

<section class="hero map-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-public-services.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Interactive City Map</span>
            <h1 class="hero-title">Navigate Bamenda City</h1>
            <p class="hero-subtitle">Interactive map with real-time navigation, service locations, and points of interest for easy city navigation.</p>
            <div class="hero-actions">
                <a href="#map-interface" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">map</span>
                    Open Map
                </a>
                <a href="#services" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">place</span>
                    Find Services
                </a>
            </div>
        </div>
    </div>
</section>

<section class="map-features-section">
    <div class="container">
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <span class="material-symbols-outlined">location_on</span>
                </div>
                <h3>Service Locator</h3>
                <p>Find government offices, hospitals, schools, and public services.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <span class="material-symbols-outlined">directions</span>
                </div>
                <h3>Turn-by-Turn Navigation</h3>
                <p>Get detailed directions to any location in Bamenda City.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <span class="material-symbols-outlined">traffic</span>
                </div>
                <h3>Live Traffic Updates</h3>
                <p>Real-time traffic conditions and route optimization.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <span class="material-symbols-outlined">info</span>
                </div>
                <h3>Points of Interest</h3>
                <p>Discover landmarks, attractions, and cultural sites.</p>
            </div>
        </div>
    </div>
</section>

<section class="map-interface-section" id="map-interface">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Interactive Map</h2>
            <div class="map-controls">
                <div class="search-bar">
                    <input type="text" class="search-input" placeholder="Search locations...">
                    <button class="btn btn-primary">
                        <span class="material-symbols-outlined">search</span>
                    </button>
                </div>
                <div class="layer-controls">
                    <select class="layer-select">
                        <option value="all">All Layers</option>
                        <option value="services">Public Services</option>
                        <option value="transport">Transportation</option>
                        <option value="health">Healthcare</option>
                        <option value="education">Education</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="map-container">
            <div class="map-main">
                <div class="map-placeholder">
                    <div class="map-content">
                        <span class="material-symbols-outlined">map</span>
                        <p>Interactive Bamenda City Map</p>
                        <div class="map-toolbar">
                            <button class="btn-icon" title="Zoom In">
                                <span class="material-symbols-outlined">add</span>
                            </button>
                            <button class="btn-icon" title="Zoom Out">
                                <span class="material-symbols-outlined">remove</span>
                            </button>
                            <button class="btn-icon" title="Current Location">
                                <span class="material-symbols-outlined">my_location</span>
                            </button>
                            <button class="btn-icon" title="Fullscreen">
                                <span class="material-symbols-outlined">fullscreen</span>
                            </button>
                        </div>
                        <button class="btn btn-primary">Load Interactive Map</button>
                    </div>
                </div>
            </div>
            <div class="map-sidebar">
                <div class="sidebar-section">
                    <h3>Quick Locations</h3>
                    <div class="location-list">
                        <div class="location-item">
                            <div class="location-icon">
                                <span class="material-symbols-outlined">gavel</span>
                            </div>
                            <div class="location-info">
                                <h4>City Council Office</h4>
                                <p>Central Administration</p>
                            </div>
                            <button class="btn-icon" title="Navigate">
                                <span class="material-symbols-outlined">directions</span>
                            </button>
                        </div>
                        <div class="location-item">
                            <div class="location-icon">
                                <span class="material-symbols-outlined">local_hospital</span>
                            </div>
                            <div class="location-info">
                                <h4>Regional Hospital</h4>
                                <p>Emergency Services</p>
                            </div>
                            <button class="btn-icon" title="Navigate">
                                <span class="material-symbols-outlined">directions</span>
                            </button>
                        </div>
                        <div class="location-item">
                            <div class="location-icon">
                                <span class="material-symbols-outlined">school</span>
                            </div>
                            <div class="location-info">
                                <h4>Central High School</h4>
                                <p>Education Facility</p>
                            </div>
                            <button class="btn-icon" title="Navigate">
                                <span class="material-symbols-outlined">directions</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="sidebar-section">
                    <h3>Map Legend</h3>
                    <div class="legend-items">
                        <div class="legend-item">
                            <div class="legend-color blue"></div>
                            <span>Government Offices</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-color red"></div>
                            <span>Healthcare Facilities</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-color green"></div>
                            <span>Educational Institutions</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-color orange"></div>
                            <span>Public Services</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services-section" id="services">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Service Categories</h2>
            <p class="section-subtitle">Browse services by category on the map</p>
        </div>
        <div class="services-grid">
            <div class="service-category">
                <div class="category-icon">
                    <span class="material-symbols-outlined">gavel</span>
                </div>
                <h3>Government Offices</h3>
                <div class="category-stats">
                    <span>23 locations</span>
                </div>
                <button class="btn btn-sm btn-outline">View on Map</button>
            </div>
            <div class="service-category">
                <div class="category-icon">
                    <span class="material-symbols-outlined">local_hospital</span>
                </div>
                <h3>Healthcare</h3>
                <div class="category-stats">
                    <span>15 facilities</span>
                </div>
                <button class="btn btn-sm btn-outline">View on Map</button>
            </div>
            <div class="service-category">
                <div class="category-icon">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <h3>Education</h3>
                <div class="category-stats">
                    <span>45 schools</span>
                </div>
                <button class="btn btn-sm btn-outline">View on Map</button>
            </div>
            <div class="service-category">
                <div class="category-icon">
                    <span class="material-symbols-outlined">directions_bus</span>
                </div>
                <h3>Transportation</h3>
                <div class="category-stats">
                    <span>12 stations</span>
                </div>
                <button class="btn btn-sm btn-outline">View on Map</button>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../../includes/footer.php'; ?>

<style>
.map-hero{background:linear-gradient(135deg,var(--primary)0,var(--primary-container)100%)}
.map-features-section{padding:var(--spacing-3xl)0}
.features-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:var(--spacing-lg)}
.feature-card{text-align:center;background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);padding:var(--spacing-xl);border:1px solid var(--outline-variant)}
.feature-icon{width:3.5rem;height:3.5rem;background-color:var(--primary);color:var(--on-primary);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center;margin:0 auto var(--spacing-lg)}
.feature-icon .material-symbols-outlined{font-size:2rem}
.feature-card h3{font-size:1.25rem;font-weight:700;color:var(--primary);margin-bottom:var(--spacing-sm)}
.feature-card p{color:var(--on-surface-variant);line-height:1.6}
.map-interface-section{padding:var(--spacing-3xl)0;background-color:var(--surface-container-low)}
.section-header{display:flex;justify-content:space-between;align-items:center;margin-bottom:var(--spacing-xl);flex-wrap:wrap;gap:var(--spacing-lg)}
.map-controls{display:flex;gap:var(--spacing-lg);align-items:center;flex-wrap:wrap}
.search-bar{display:flex;gap:var(--spacing-md)}
.search-input{padding:var(--spacing-sm) var(--spacing-md);border:1px solid var(--outline-variant);border-radius:var(--radius-md);background-color:var(--surface-container-lowest);color:var(--on-surface);font-size:.875rem}
.layer-select{padding:var(--spacing-sm) var(--spacing-md);border:1px solid var(--outline-variant);border-radius:var(--radius-md);background-color:var(--surface-container-lowest);color:var(--on-surface);font-size:.875rem}
.map-container{display:grid;grid-template-columns:1fr 300px;gap:var(--spacing-lg)}
.map-main{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);overflow:hidden;border:1px solid var(--outline-variant)}
.map-placeholder{position:relative;height:500px;display:flex;align-items:center;justify-content:center}
.map-content{text-align:center}
.map-content .material-symbols-outlined{font-size:4rem;color:var(--primary);margin-bottom:var(--spacing-md)}
.map-content p{color:var(--on-surface-variant);margin-bottom:var(--spacing-lg)}
.map-toolbar{position:absolute;top:var(--spacing-lg);right:var(--spacing-lg);display:flex;flex-direction:column;gap:var(--spacing-xs)}
.btn-icon{width:2.5rem;height:2.5rem;border:none;background-color:var(--surface-container);border-radius:var(--radius-md);display:flex;align-items:center;justify-content:center;cursor:pointer;transition:all .2s ease;border:1px solid var(--outline-variant)}
.btn-icon:hover{background-color:var(--surface-container-high)}
.btn-icon .material-symbols-outlined{font-size:1.25rem;color:var(--on-surface)}
.map-sidebar{display:flex;flex-direction:column;gap:var(--spacing-lg)}
.sidebar-section{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);padding:var(--spacing-lg);border:1px solid var(--outline-variant)}
.sidebar-section h3{font-size:1.125rem;font-weight:700;color:var(--primary);margin-bottom:var(--spacing-md)}
.location-list{display:flex;flex-direction:column;gap:var(--spacing-sm)}
.location-item{display:flex;align-items:center;gap:var(--spacing-md);padding:var(--spacing-sm);border-radius:var(--radius-md);transition:background-color .2s ease}
.location-item:hover{background-color:var(--surface-container)}
.location-icon{width:2.5rem;height:2.5rem;background-color:var(--primary);color:var(--on-primary);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center;flex-shrink:0}
.location-icon .material-symbols-outlined{font-size:1.25rem}
.location-info{flex:1}
.location-info h4{font-size:1rem;font-weight:600;color:var(--primary);margin-bottom:var(--spacing-xs)}
.location-info p{font-size:.875rem;color:var(--on-surface-variant)}
.legend-items{display:flex;flex-direction:column;gap:var(--spacing-xs)}
.legend-item{display:flex;align-items:center;gap:var(--spacing-sm)}
.legend-color{width:1rem;height:1rem;border-radius:var(--radius-xs)}
.legend-color.blue{background-color:#2196f3}
.legend-color.red{background-color:#f44336}
.legend-color.green{background-color:#4caf50}
.legend-color.orange{background-color:#ff9800}
.services-section{padding:var(--spacing-3xl)0}
.services-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:var(--spacing-lg)}
.service-category{background-color:var(--surface-container-lowest);border-radius:var(--radius-lg);padding:var(--spacing-lg);border:1px solid var(--outline-variant);text-align:center}
.service-category .category-icon{width:3rem;height:3rem;background-color:var(--primary);color:var(--on-primary);border-radius:var(--radius-lg);display:flex;align-items:center;justify-content:center;margin:0 auto var(--spacing-md)}
.service-category .category-icon .material-symbols-outlined{font-size:1.5rem}
.service-category h3{font-size:1.125rem;font-weight:700;color:var(--primary);margin-bottom:var(--spacing-xs)}
.category-stats{color:var(--on-surface-variant);font-size:.875rem;margin-bottom:var(--spacing-md)}
@media (max-width:768px){.section-header{flex-direction:column;align-items:stretch}.map-controls{flex-direction:column;gap:var(--spacing-sm)}.search-bar{flex-direction:column}.map-container{grid-template-columns:1fr;gap:var(--spacing-lg)}.map-placeholder{height:300px}.map-toolbar{top:var(--spacing-md);right:var(--spacing-md);flex-direction:row}.services-grid{grid-template-columns:repeat(2,1fr);gap:var(--spacing-md)}}
@media (max-width:480px){.features-grid{grid-template-columns:1fr;gap:var(--spacing-md)}.services-grid{grid-template-columns:1fr;gap:var(--spacing-md)}}
</style>

<script>
document.querySelector('.map-placeholder .btn-primary')?.addEventListener('click',function(){alert('Loading interactive map... In production, this would load the actual map interface with real data.')});
document.querySelectorAll('.location-item .btn-icon').forEach(button=>{button.addEventListener('click',function(){const location=this.closest('.location-item').querySelector('h4').textContent;alert(`Getting directions to ${location}... In production, this would show turn-by-turn navigation.`})});
document.querySelectorAll('.service-category .btn-outline').forEach(button=>{button.addEventListener('click',function(){const category=this.closest('.service-category').querySelector('h3').textContent;alert(`Showing ${category} on map... In production, this would filter the map to show relevant locations.`})});
document.querySelector('.search-bar .btn-primary')?.addEventListener('click',function(){const searchValue=document.querySelector('.search-input').value;if(searchValue){alert(`Searching for: ${searchValue}... In production, this would search the map.`}else{alert('Please enter a location to search.')}});
</script>
