<?php
/**
 * Bamenda City Council E-Governance Platform
 * Property Registry Page
 */

// Set page metadata
$page_title = 'Property Registry | Bamenda City Council';
$page_description = 'Search and manage property records, land registration, and property tax information in Bamenda.';
$page_keywords = 'property registry, land registration, property tax, property records, Bamenda';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Services', 'url' => 'services.php'],
    ['title' => 'Property Registry', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero property-registry-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-government-building.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Property Registry</span>
            <h1 class="hero-title">Property & Land Registry</h1>
            <p class="hero-subtitle">
                Search property records, register land, and manage property tax information for all properties in Bamenda.
            </p>
            <div class="hero-actions">
                <a href="#property-search" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">search</span>
                    Search Property
                </a>
                <a href="#registration-form" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">app_registration</span>
                    Register Property
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Property Search Section -->
<section class="property-search-section" id="property-search">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Property Search</h2>
            <p class="section-subtitle">Find property information by various search criteria</p>
        </div>

        <div class="search-form">
            <div class="search-tabs">
                <button class="search-tab active" data-tab="by-id">Search by ID</button>
                <button class="search-tab" data-tab="by-address">Search by Address</button>
                <button class="search-tab" data-tab="by-owner">Search by Owner</button>
            </div>

            <div class="search-content">
                <!-- Search by ID -->
                <div class="search-panel active" id="by-id">
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Property ID</label>
                            <input type="text" class="form-input" placeholder="Enter Property ID">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Land Certificate Number</label>
                            <input type="text" class="form-input" placeholder="Enter Certificate Number">
                        </div>
                    </div>
                    <button class="btn btn-primary">Search Property</button>
                </div>

                <!-- Search by Address -->
                <div class="search-panel" id="by-address">
                    <div class="form-group">
                        <label class="form-label">Street Address</label>
                        <input type="text" class="form-input" placeholder="Enter street address">
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Area/Quarter</label>
                            <select class="form-select">
                                <option value="">Select area</option>
                                <option value="nkwen">Nkwen</option>
                                <option value="mankon">Mankon</option>
                                <option value="bamendakwe">Bamendakwe</option>
                                <option value="bambili">Bambili</option>
                                <option value="bambui">Bambui</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Postal Code</label>
                            <input type="text" class="form-input" placeholder="Enter postal code">
                        </div>
                    </div>
                    <button class="btn btn-primary">Search Property</button>
                </div>

                <!-- Search by Owner -->
                <div class="search-panel" id="by-owner">
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Owner Name</label>
                            <input type="text" class="form-input" placeholder="Enter owner's full name">
                        </div>
                        <div class="form-group">
                            <label class="form-label">ID Number</label>
                            <input type="text" class="form-input" placeholder="Enter owner's ID number">
                        </div>
                    </div>
                    <button class="btn btn-primary">Search Property</button>
                </div>
            </div>
        </div>

        <!-- Search Results -->
        <div class="search-results" id="searchResults" style="display: none;">
            <h3>Search Results</h3>
            <div class="results-grid">
                <!-- Results will be populated dynamically -->
            </div>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="services-overview">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Registry Services</h2>
            <p class="section-subtitle">Comprehensive property management services</p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">search</span>
                </div>
                <h3 class="service-title">Property Search</h3>
                <p class="service-description">Search property records, ownership details, and tax information.</p>
                <ul class="service-features">
                    <li>Property ownership verification</li>
                    <li>Tax payment history</li>
                    <li>Property boundaries and maps</li>
                </ul>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">app_registration</span>
                </div>
                <h3 class="service-title">Land Registration</h3>
                <p class="service-description">Register new land acquisitions and property transfers.</p>
                <ul class="service-features">
                    <li>New land registration</li>
                    <li>Property transfer processing</li>
                    <li>Title deed issuance</li>
                </ul>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">receipt</span>
                </div>
                <h3 class="service-title">Property Tax</h3>
                <p class="service-description">Calculate and manage property tax payments and assessments.</p>
                <ul class="service-features">
                    <li>Tax calculation</li>
                    <li>Online payment</li>
                    <li>Tax certificates</li>
                </ul>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">map</span>
                </div>
                <h3 class="service-title">Property Mapping</h3>
                <p class="service-description">Access property maps and geographical information.</p>
                <ul class="service-features">
                    <li>Interactive property maps</li>
                    <li>Boundary surveys</li>
                    <li>Zoning information</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Registration Form -->
<section class="registration-section" id="registration-form">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Property Registration</h2>
            <p class="section-subtitle">Register your property with the Bamenda City Council</p>
        </div>

        <div class="registration-form">
            <form id="propertyRegistrationForm">
                <div class="form-section">
                    <h3 class="section-title">Property Information</h3>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Property Type *</label>
                            <select class="form-select" required>
                                <option value="">Select property type</option>
                                <option value="residential">Residential</option>
                                <option value="commercial">Commercial</option>
                                <option value="industrial">Industrial</option>
                                <option value="agricultural">Agricultural</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Property Size (m²) *</label>
                            <input type="number" class="form-input" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Property Address *</label>
                        <input type="text" class="form-input" placeholder="Enter complete property address" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Area/Quarter *</label>
                            <select class="form-select" required>
                                <option value="">Select area</option>
                                <option value="nkwen">Nkwen</option>
                                <option value="mankon">Mankon</option>
                                <option value="bamendakwe">Bamendakwe</option>
                                <option value="bambili">Bambili</option>
                                <option value="bambui">Bambui</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Postal Code</label>
                            <input type="text" class="form-input" placeholder="Enter postal code">
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">Owner Information</h3>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Owner Name *</label>
                            <input type="text" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Phone Number *</label>
                            <input type="tel" class="form-input" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Email Address</label>
                            <input type="email" class="form-input">
                        </div>
                        <div class="form-group">
                            <label class="form-label">ID Number *</label>
                            <input type="text" class="form-input" required>
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">Supporting Documents</h3>
                    
                    <div class="form-group">
                        <label class="form-label">Proof of Ownership *</label>
                        <input type="file" class="form-input" accept=".pdf,.jpg,.jpeg,.png" required>
                        <small class="form-help">Upload deed, sale agreement, or inheritance documents</small>
                    </div>

                    <div class="form-group">
                        <label class="form-label">ID Document *</label>
                        <input type="file" class="form-input" accept=".pdf,.jpg,.jpeg,.png" required>
                        <small class="form-help">Upload national ID, passport, or driver's license</small>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Property Photos</label>
                        <input type="file" class="form-input" accept=".jpg,.jpeg,.png" multiple>
                        <small class="form-help">Upload recent photos of the property</small>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="reset" class="btn btn-outline">Reset Form</button>
                    <button type="submit" class="btn btn-primary">Submit Registration</button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Statistics -->
<section class="statistics-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Registry Statistics</h2>
            <p class="section-subtitle">Key metrics from the property registry</p>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">apartment</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">45,678</div>
                    <div class="stat-label">Registered Properties</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+12% this year</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">person</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">32,456</div>
                    <div class="stat-label">Property Owners</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+8% this year</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">receipt</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">₣2.5B</div>
                    <div class="stat-label">Annual Tax Revenue</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+15% this year</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">schedule</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">5 days</div>
                    <div class="stat-label">Average Processing Time</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_down</span>
                        <span>-2 days improvement</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Include footer
require_once __DIR__ . '/../../includes/footer.php';
?>

<style>
/* Property Registry Page Styles */
.property-registry-hero {
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-container) 100%);
}

/* Property Search Section */
.property-search-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.search-form {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-2xl);
    border: 1px solid var(--outline-variant);
    max-width: 800px;
    margin: 0 auto;
}

.search-tabs {
    display: flex;
    gap: var(--spacing-md);
    margin-bottom: var(--spacing-lg);
    border-bottom: 2px solid var(--outline-variant);
}

.search-tab {
    padding: var(--spacing-md) var(--spacing-lg);
    background: none;
    border: none;
    color: var(--on-surface-variant);
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s ease;
    border-bottom: 2px solid transparent;
}

.search-tab.active {
    color: var(--primary);
    border-bottom-color: var(--primary);
}

.search-tab:hover {
    color: var(--primary);
}

.search-content {
    margin-top: var(--spacing-lg);
}

.search-panel {
    display: none;
}

.search-panel.active {
    display: block;
}

.search-results {
    margin-top: var(--spacing-2xl);
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
}

.results-grid {
    display: grid;
    gap: var(--spacing-lg);
    margin-top: var(--spacing-lg);
}

.result-card {
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
}

/* Services Overview */
.services-overview {
    padding: var(--spacing-3xl) 0;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: var(--spacing-xl);
}

.service-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.service-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.service-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: var(--spacing-lg);
}

.service-icon .material-symbols-outlined {
    font-size: 2rem;
}

.service-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.service-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.service-features {
    list-style: none;
    padding: 0;
}

.service-features li {
    padding: var(--spacing-xs) 0;
    color: var(--on-surface-variant);
    font-size: 0.875rem;
    position: relative;
    padding-left: var(--spacing-lg);
}

.service-features li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--tertiary);
    font-weight: 700;
}

/* Registration Section */
.registration-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.registration-form {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-2xl);
    border: 1px solid var(--outline-variant);
    max-width: 800px;
    margin: 0 auto;
}

.form-section {
    margin-bottom: var(--spacing-2xl);
    padding-bottom: var(--spacing-xl);
    border-bottom: 1px solid var(--outline-variant);
}

.form-section:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
}

.form-actions {
    display: flex;
    gap: var(--spacing-lg);
    justify-content: center;
    margin-top: var(--spacing-xl);
}

/* Statistics Section */
.statistics-section {
    padding: var(--spacing-3xl) 0;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: var(--spacing-lg);
}

.stat-card {
    display: grid;
    grid-template-columns: auto 1fr;
    gap: var(--spacing-lg);
    align-items: center;
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.stat-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.stat-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.stat-icon .material-symbols-outlined {
    font-size: 2rem;
}

.stat-content {
    flex: 1;
}

.stat-number {
    font-size: 2rem;
    font-weight: 800;
    color: var(--primary);
    margin-bottom: var(--spacing-xs);
    line-height: 1;
}

.stat-label {
    font-size: 1rem;
    color: var(--on-surface-variant);
    font-weight: 500;
    margin-bottom: var(--spacing-sm);
}

.stat-change {
    display: flex;
    align-items: center;
    gap: var(--spacing-xs);
    font-size: 0.75rem;
    font-weight: 600;
}

.stat-change.positive {
    color: var(--tertiary);
}

.stat-change.negative {
    color: var(--error);
}

.stat-change .material-symbols-outlined {
    font-size: 1rem;
}

/* Responsive Design */
@media (max-width: 768px) {
    .search-tabs {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .search-tab {
        text-align: center;
        border-bottom: 1px solid var(--outline-variant);
    }
    
    .search-tab.active {
        border-bottom-color: var(--primary);
    }
    
    .services-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .form-row {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .form-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .form-actions .btn {
        width: 100%;
        max-width: 300px;
    }
    
    .stats-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .stat-card {
        grid-template-columns: 1fr;
        text-align: center;
        gap: var(--spacing-md);
    }
}

@media (max-width: 480px) {
    .search-form {
        padding: var(--spacing-lg);
    }
    
    .service-card {
        padding: var(--spacing-lg);
    }
    
    .service-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .service-icon .material-symbols-outlined {
        font-size: 1.5rem;
    }
    
    .registration-form {
        padding: var(--spacing-lg);
    }
    
    .stat-number {
        font-size: 1.5rem;
    }
}
</style>

<script>
// Search tabs functionality
document.querySelectorAll('.search-tab').forEach(tab => {
    tab.addEventListener('click', () => {
        // Remove active class from all tabs and panels
        document.querySelectorAll('.search-tab').forEach(t => t.classList.remove('active'));
        document.querySelectorAll('.search-panel').forEach(p => p.classList.remove('active'));
        
        // Add active class to clicked tab and corresponding panel
        tab.classList.add('active');
        const panelId = tab.getAttribute('data-tab');
        document.getElementById(panelId).classList.add('active');
    });
});

// Form submission
document.getElementById('propertyRegistrationForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Property registration submitted successfully! You will receive a confirmation email shortly.');
    // In production, this would submit the form data to the server
});

// Search functionality (mock)
document.querySelectorAll('.search-form button').forEach(button => {
    if (button.textContent.includes('Search')) {
        button.addEventListener('click', () => {
            const searchResults = document.getElementById('searchResults');
            searchResults.style.display = 'block';
            
            // Mock search results
            const resultsGrid = searchResults.querySelector('.results-grid');
            resultsGrid.innerHTML = `
                <div class="result-card">
                    <h4>Property ID: BRG-2023-0456</h4>
                    <p><strong>Address:</strong> 123 Commercial Avenue, Nkwen</p>
                    <p><strong>Owner:</strong> John Doe</p>
                    <p><strong>Type:</strong> Commercial</p>
                    <p><strong>Size:</strong> 450 m²</p>
                    <p><strong>Tax Status:</strong> Paid</p>
                </div>
                <div class="result-card">
                    <h4>Property ID: BRG-2023-0789</h4>
                    <p><strong>Address:</strong> 456 Residential Street, Mankon</p>
                    <p><strong>Owner:</strong> Jane Smith</p>
                    <p><strong>Type:</strong> Residential</p>
                    <p><strong>Size:</strong> 250 m²</p>
                    <p><strong>Tax Status:</strong> Pending</p>
                </div>
            `;
        });
    }
});
</script>
