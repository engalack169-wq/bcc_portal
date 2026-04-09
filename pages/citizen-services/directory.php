<?php
/**
 * Bamenda City Council E-Governance Platform
 * City Directory Page
 */

// Set page metadata
$page_title = 'City Directory | Bamenda City Council';
$page_description = 'Find contact information for city departments, services, and officials in Bamenda.';
$page_keywords = 'city directory, contact information, government offices, Bamenda services, council contacts';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Services', 'url' => 'services.php'],
    ['title' => 'City Directory', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero directory-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-government-building.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">City Directory</span>
            <h1 class="hero-title">Bamenda City Directory</h1>
            <p class="hero-subtitle">
                Find contact information, addresses, and services for all Bamenda City Council departments and facilities.
            </p>
            <div class="hero-actions">
                <a href="#directory-search" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">search</span>
                    Search Directory
                </a>
                <a href="#emergency-contacts" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">emergency</span>
                    Emergency Contacts
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Directory Search -->
<section class="directory-search-section" id="directory-search">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Search Directory</h2>
            <p class="section-subtitle">Find departments, services, and contacts</p>
        </div>

        <div class="search-form">
            <div class="search-input-group">
                <input type="text" class="search-input" id="directorySearch" placeholder="Search for departments, services, or personnel...">
                <button class="btn btn-primary" onclick="searchDirectory()">
                    <span class="material-symbols-outlined">search</span>
                    Search
                </button>
            </div>

            <div class="search-filters">
                <div class="filter-group">
                    <label class="form-label">Category</label>
                    <select class="form-select" id="categoryFilter">
                        <option value="">All Categories</option>
                        <option value="administrative">Administrative</option>
                        <option value="technical">Technical Services</option>
                        <option value="health">Health Services</option>
                        <option value="education">Education</option>
                        <option value="emergency">Emergency Services</option>
                        <option value="community">Community Services</option>
                    </select>
                </div>
                <div class="filter-group">
                    <label class="form-label">Location</label>
                    <select class="form-select" id="locationFilter">
                        <option value="">All Locations</option>
                        <option value="city-center">City Center</option>
                        <option value="nkwen">Nkwen</option>
                        <option value="mankon">Mankon</option>
                        <option value="bamendakwe">Bamendakwe</option>
                        <option value="bambili">Bambili</option>
                        <option value="bambui">Bambui</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="search-results" id="searchResults" style="display: none;">
            <h3>Search Results</h3>
            <div class="results-grid">
                <!-- Results will be populated dynamically -->
            </div>
        </div>
    </div>
</section>

<!-- Quick Categories -->
<section class="quick-categories-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Browse by Category</h2>
            <p class="section-subtitle">Quick access to major service categories</p>
        </div>

        <div class="categories-grid">
            <div class="category-card" onclick="browseCategory('administrative')">
                <div class="category-icon">
                    <span class="material-symbols-outlined">account_balance</span>
                </div>
                <h3 class="category-title">Administrative</h3>
                <p class="category-description">City council, mayor's office, administrative departments</p>
                <div class="category-count">12 Departments</div>
            </div>

            <div class="category-card" onclick="browseCategory('technical')">
                <div class="category-icon">
                    <span class="material-symbols-outlined">engineering</span>
                </div>
                <h3 class="category-title">Technical Services</h3>
                <p class="category-description">Public works, infrastructure, utilities, planning</p>
                <div class="category-count">8 Departments</div>
            </div>

            <div class="category-card" onclick="browseCategory('health')">
                <div class="category-icon">
                    <span class="material-symbols-outlined">medical_services</span>
                </div>
                <h3 class="category-title">Health Services</h3>
                <p class="category-description">Hospitals, clinics, health centers, medical services</p>
                <div class="category-count">15 Facilities</div>
            </div>

            <div class="category-card" onclick="browseCategory('education')">
                <div class="category-icon">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <h3 class="category-title">Education</h3>
                <p class="category-description">Schools, colleges, universities, educational services</p>
                <div class="category-count">24 Institutions</div>
            </div>

            <div class="category-card" onclick="browseCategory('emergency')">
                <div class="category-icon">
                    <span class="material-symbols-outlined">emergency_home</span>
                </div>
                <h3 class="category-title">Emergency Services</h3>
                <p class="category-description">Police, fire, ambulance, emergency response</p>
                <div class="category-count">6 Services</div>
            </div>

            <div class="category-card" onclick="browseCategory('community')">
                <div class="category-icon">
                    <span class="material-symbols-outlined">diversity_3</span>
                </div>
                <h3 class="category-title">Community Services</h3>
                <p class="category-description">Social services, community centers, youth programs</p>
                <div class="category-count">10 Services</div>
            </div>
        </div>
    </div>
</section>

<!-- Department Listings -->
<section class="department-listings-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">City Council Departments</h2>
            <p class="section-subtitle">Complete list of all Bamenda City Council departments</p>
        </div>

        <div class="departments-grid">
            <!-- Mayor's Office -->
            <div class="department-card">
                <div class="department-header">
                    <div class="department-icon">
                        <span class="material-symbols-outlined">account_balance</span>
                    </div>
                    <div class="department-info">
                        <h3 class="department-title">Mayor's Office</h3>
                        <span class="department-type">Administrative</span>
                    </div>
                </div>
                <div class="department-details">
                    <p class="department-description">Executive office responsible for city governance and policy implementation.</p>
                    <div class="department-contact">
                        <div class="contact-item">
                            <span class="material-symbols-outlined">phone</span>
                            <span>+237 233 123 456</span>
                        </div>
                        <div class="contact-item">
                            <span class="material-symbols-outlined">email</span>
                            <span>mayor@bamendacity.gov.cm</span>
                        </div>
                        <div class="contact-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>City Hall, Bamenda</span>
                        </div>
                    </div>
                    <div class="department-hours">
                        <strong>Office Hours:</strong> Mon-Fri: 8:00 AM - 5:00 PM
                    </div>
                </div>
                <div class="department-actions">
                    <button class="btn btn-sm btn-outline">View Details</button>
                    <button class="btn btn-sm btn-primary">Contact</button>
                </div>
            </div>

            <!-- Finance Department -->
            <div class="department-card">
                <div class="department-header">
                    <div class="department-icon">
                        <span class="material-symbols-outlined">payments</span>
                    </div>
                    <div class="department-info">
                        <h3 class="department-title">Finance Department</h3>
                        <span class="department-type">Administrative</span>
                    </div>
                </div>
                <div class="department-details">
                    <p class="department-description">Manages city finances, budget, revenue collection, and financial planning.</p>
                    <div class="department-contact">
                        <div class="contact-item">
                            <span class="material-symbols-outlined">phone</span>
                            <span>+237 233 123 457</span>
                        </div>
                        <div class="contact-item">
                            <span class="material-symbols-outlined">email</span>
                            <span>finance@bamendacity.gov.cm</span>
                        </div>
                        <div class="contact-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>City Hall, 2nd Floor</span>
                        </div>
                    </div>
                    <div class="department-hours">
                        <strong>Office Hours:</strong> Mon-Fri: 8:00 AM - 5:00 PM
                    </div>
                </div>
                <div class="department-actions">
                    <button class="btn btn-sm btn-outline">View Details</button>
                    <button class="btn btn-sm btn-primary">Contact</button>
                </div>
            </div>

            <!-- Public Works -->
            <div class="department-card">
                <div class="department-header">
                    <div class="department-icon">
                        <span class="material-symbols-outlined">construction</span>
                    </div>
                    <div class="department-info">
                        <h3 class="department-title">Public Works</h3>
                        <span class="department-type">Technical</span>
                    </div>
                </div>
                <div class="department-details">
                    <p class="department-description">Responsible for infrastructure development, road maintenance, and public facilities.</p>
                    <div class="department-contact">
                        <div class="contact-item">
                            <span class="material-symbols-outlined">phone</span>
                            <span>+237 233 123 458</span>
                        </div>
                        <div class="contact-item">
                            <span class="material-symbols-outlined">email</span>
                            <span>publicworks@bamendacity.gov.cm</span>
                        </div>
                        <div class="contact-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Public Works Yard, Nkwen</span>
                        </div>
                    </div>
                    <div class="department-hours">
                        <strong>Office Hours:</strong> Mon-Fri: 7:30 AM - 4:30 PM
                    </div>
                </div>
                <div class="department-actions">
                    <button class="btn btn-sm btn-outline">View Details</button>
                    <button class="btn btn-sm btn-primary">Contact</button>
                </div>
            </div>

            <!-- Health Services -->
            <div class="department-card">
                <div class="department-header">
                    <div class="department-icon">
                        <span class="material-symbols-outlined">medical_services</span>
                    </div>
                    <div class="department-info">
                        <h3 class="department-title">Health Services</h3>
                        <span class="department-type">Health</span>
                    </div>
                </div>
                <div class="department-details">
                    <p class="department-description">Oversees public health initiatives, health facilities, and medical services.</p>
                    <div class="department-contact">
                        <div class="contact-item">
                            <span class="material-symbols-outlined">phone</span>
                            <span>+237 233 123 459</span>
                        </div>
                        <div class="contact-item">
                            <span class="material-symbols-outlined">email</span>
                            <span>health@bamendacity.gov.cm</span>
                        </div>
                        <div class="contact-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Health Department, City Hall</span>
                        </div>
                    </div>
                    <div class="department-hours">
                        <strong>Office Hours:</strong> Mon-Fri: 8:00 AM - 5:00 PM
                    </div>
                </div>
                <div class="department-actions">
                    <button class="btn btn-sm btn-outline">View Details</button>
                    <button class="btn btn-sm btn-primary">Contact</button>
                </div>
            </div>

            <!-- Urban Planning -->
            <div class="department-card">
                <div class="department-header">
                    <div class="department-icon">
                        <span class="material-symbols-outlined">map</span>
                    </div>
                    <div class="department-info">
                        <h3 class="department-title">Urban Planning</h3>
                        <span class="department-type">Technical</span>
                    </div>
                </div>
                <div class="department-details">
                    <p class="department-description">Manages city planning, zoning, building permits, and urban development.</p>
                    <div class="department-contact">
                        <div class="contact-item">
                            <span class="material-symbols-outlined">phone</span>
                            <span>+237 233 123 460</span>
                        </div>
                        <div class="contact-item">
                            <span class="material-symbols-outlined">email</span>
                            <span>planning@bamendacity.gov.cm</span>
                        </div>
                        <div class="contact-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Planning Office, City Hall</span>
                        </div>
                    </div>
                    <div class="department-hours">
                        <strong>Office Hours:</strong> Mon-Fri: 8:00 AM - 5:00 PM
                    </div>
                </div>
                <div class="department-actions">
                    <button class="btn btn-sm btn-outline">View Details</button>
                    <button class="btn btn-sm btn-primary">Contact</button>
                </div>
            </div>

            <!-- Social Services -->
            <div class="department-card">
                <div class="department-header">
                    <div class="department-icon">
                        <span class="material-symbols-outlined">diversity_3</span>
                    </div>
                    <div class="department-info">
                        <h3 class="department-title">Social Services</h3>
                        <span class="department-type">Community</span>
                    </div>
                </div>
                <div class="department-details">
                    <p class="department-description">Provides social welfare programs, community support, and youth services.</p>
                    <div class="department-contact">
                        <div class="contact-item">
                            <span class="material-symbols-outlined">phone</span>
                            <span>+237 233 123 461</span>
                        </div>
                        <div class="contact-item">
                            <span class="material-symbols-outlined">email</span>
                            <span>social@bamendacity.gov.cm</span>
                        </div>
                        <div class="contact-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Social Services Center</span>
                        </div>
                    </div>
                    <div class="department-hours">
                        <strong>Office Hours:</strong> Mon-Fri: 8:00 AM - 5:00 PM
                    </div>
                </div>
                <div class="department-actions">
                    <button class="btn btn-sm btn-outline">View Details</button>
                    <button class="btn btn-sm btn-primary">Contact</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Contacts -->
<section class="emergency-contacts-section" id="emergency-contacts">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Emergency Contacts</h2>
            <p class="section-subtitle">Important emergency numbers and services</p>
        </div>

        <div class="emergency-grid">
            <div class="emergency-card">
                <div class="emergency-icon urgent">
                    <span class="material-symbols-outlined">emergency</span>
                </div>
                <h3 class="emergency-title">Emergency Services</h3>
                <div class="emergency-number">
                    <span class="number">119</span>
                    <span class="label">General Emergency</span>
                </div>
                <p class="emergency-description">For all emergency situations requiring immediate assistance</p>
            </div>

            <div class="emergency-card">
                <div class="emergency-icon police">
                    <span class="material-symbols-outlined">local_police</span>
                </div>
                <h3 class="emergency-title">Police</h3>
                <div class="emergency-number">
                    <span class="number">117</span>
                    <span class="label">Police Emergency</span>
                </div>
                <p class="emergency-description">For police assistance and crime reporting</p>
            </div>

            <div class="emergency-card">
                <div class="emergency-icon fire">
                    <span class="material-symbols-outlined">local_fire_department</span>
                </div>
                <h3 class="emergency-title">Fire Service</h3>
                <div class="emergency-number">
                    <span class="number">118</span>
                    <span class="label">Fire Emergency</span>
                </div>
                <p class="emergency-description">For fire emergencies and rescue services</p>
            </div>

            <div class="emergency-card">
                <div class="emergency-icon medical">
                    <span class="material-symbols-outlined">emergency</span>
                </div>
                <h3 class="emergency-title">Ambulance</h3>
                <div class="emergency-number">
                    <span class="number">120</span>
                    <span class="label">Medical Emergency</span>
                </div>
                <p class="emergency-description">For medical emergencies and ambulance services</p>
            </div>
        </div>
    </div>
</section>

<!-- Important Numbers -->
<section class="important-numbers-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Important Numbers</h2>
            <p class="section-subtitle">Frequently contacted services and hotlines</p>
        </div>

        <div class="numbers-grid">
            <div class="number-item">
                <div class="number-icon">
                    <span class="material-symbols-outlined">support_agent</span>
                </div>
                <div class="number-info">
                    <h4 class="number-title">City Council Helpline</h4>
                    <div class="number-contact">
                        <span class="number">+237 233 000 000</span>
                        <span class="available">24/7</span>
                    </div>
                    <p class="number-description">General inquiries and customer service</p>
                </div>
            </div>

            <div class="number-item">
                <div class="number-icon">
                    <span class="material-symbols-outlined">water_drop</span>
                </div>
                <div class="number-info">
                    <h4 class="number-title">Water Supply</h4>
                    <div class="number-contact">
                        <span class="number">+237 233 111 111</span>
                        <span class="available">Mon-Fri 8AM-5PM</span>
                    </div>
                    <p class="number-description">Water supply issues and service requests</p>
                </div>
            </div>

            <div class="number-item">
                <div class="number-icon">
                    <span class="material-symbols-outlined">power</span>
                </div>
                <div class="number-info">
                    <h4 class="number-title">Electricity</h4>
                    <div class="number-contact">
                        <span class="number">+237 233 222 222</span>
                        <span class="available">24/7</span>
                    </div>
                    <p class="number-description">Power outages and electrical emergencies</p>
                </div>
            </div>

            <div class="number-item">
                <div class="number-icon">
                    <span class="material-symbols-outlined">cleaning_services</span>
                </div>
                <div class="number-info">
                    <h4 class="number-title">Waste Management</h4>
                    <div class="number-contact">
                        <span class="number">+237 233 333 333</span>
                        <span class="available">Mon-Sat 7AM-4PM</span>
                    </div>
                    <p class="number-description">Waste collection and sanitation services</p>
                </div>
            </div>

            <div class="number-item">
                <div class="number-icon">
                    <span class="material-symbols-outlined">report_problem</span>
                </div>
                <div class="number-info">
                    <h4 class="number-title">Report Issues</h4>
                    <div class="number-contact">
                        <span class="number">+237 233 444 444</span>
                        <span class="available">Mon-Fri 8AM-5PM</span>
                    </div>
                    <p class="number-description">Report infrastructure problems and service issues</p>
                </div>
            </div>

            <div class="number-item">
                <div class="number-icon">
                    <span class="material-symbols-outlined">info</span>
                </div>
                <div class="number-info">
                    <h4 class="number-title">Information Desk</h4>
                    <div class="number-contact">
                        <span class="number">+237 233 555 555</span>
                        <span class="available">Mon-Fri 8AM-5PM</span>
                    </div>
                    <p class="number-description">General information and city services</p>
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
/* Directory Page Styles */
.directory-hero {
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-container) 100%);
}

/* Directory Search Section */
.directory-search-section {
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

.search-input-group {
    display: flex;
    gap: var(--spacing-md);
    margin-bottom: var(--spacing-lg);
}

.search-input {
    flex: 1;
    padding: var(--spacing-md) var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    border-radius: var(--radius-md);
    background-color: var(--surface-container-lowest);
    color: var(--on-surface);
    font-size: 1rem;
}

.search-input:focus {
    outline: none;
    border-color: var(--primary);
    box-shadow: 0 0 0 2px rgba(0, 77, 39, 0.2);
}

.search-filters {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--spacing-lg);
}

.filter-group {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
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

/* Quick Categories Section */
.quick-categories-section {
    padding: var(--spacing-3xl) 0;
}

.categories-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: var(--spacing-xl);
}

.category-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
    cursor: pointer;
    transition: all 0.3s ease;
}

.category-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.category-icon {
    width: 4rem;
    height: 4rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-lg);
}

.category-icon .material-symbols-outlined {
    font-size: 2rem;
}

.category-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.category-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.category-count {
    font-size: 0.875rem;
    color: var(--primary);
    font-weight: 600;
}

/* Department Listings Section */
.department-listings-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.departments-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.department-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
    overflow: hidden;
}

.department-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.department-header {
    display: grid;
    grid-template-columns: auto 1fr;
    gap: var(--spacing-lg);
    align-items: center;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.department-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.department-icon .material-symbols-outlined {
    font-size: 2rem;
}

.department-info {
    flex: 1;
}

.department-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-xs);
}

.department-type {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    font-weight: 500;
}

.department-details {
    padding: var(--spacing-lg);
}

.department-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.department-contact {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

.contact-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    color: var(--on-surface);
}

.contact-item .material-symbols-outlined {
    font-size: 1.25rem;
    color: var(--primary);
}

.department-hours {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    margin-bottom: var(--spacing-lg);
}

.department-actions {
    display: flex;
    gap: var(--spacing-sm);
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-top: 1px solid var(--outline-variant);
}

/* Emergency Contacts Section */
.emergency-contacts-section {
    padding: var(--spacing-3xl) 0;
}

.emergency-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: var(--spacing-xl);
}

.emergency-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.emergency-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.emergency-icon {
    width: 4rem;
    height: 4rem;
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-lg);
}

.emergency-icon.urgent {
    background-color: var(--error);
    color: var(--on-error);
}

.emergency-icon.police {
    background-color: var(--primary);
    color: var(--on-primary);
}

.emergency-icon.fire {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.emergency-icon.medical {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.emergency-icon .material-symbols-outlined {
    font-size: 2rem;
}

.emergency-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.emergency-number {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: var(--spacing-lg);
}

.number {
    font-size: 2rem;
    font-weight: 800;
    color: var(--primary);
    line-height: 1;
}

.label {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    font-weight: 500;
}

.emergency-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
}

/* Important Numbers Section */
.important-numbers-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.numbers-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-lg);
}

.number-item {
    display: grid;
    grid-template-columns: auto 1fr;
    gap: var(--spacing-lg);
    align-items: center;
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.number-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.number-icon {
    width: 3rem;
    height: 3rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.number-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.number-info {
    flex: 1;
}

.number-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-xs);
}

.number-contact {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-sm);
}

.number-contact .number {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
}

.available {
    font-size: 0.75rem;
    color: var(--tertiary);
    font-weight: 600;
    background-color: var(--tertiary-container);
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
}

.number-description {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    line-height: 1.4;
}

/* Responsive Design */
@media (max-width: 768px) {
    .search-input-group {
        flex-direction: column;
    }
    
    .search-filters {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .categories-grid {
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: var(--spacing-lg);
    }
    
    .departments-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .emergency-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .numbers-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .number-item {
        grid-template-columns: 1fr;
        text-align: center;
        gap: var(--spacing-md);
    }
    
    .department-actions {
        flex-direction: column;
    }
}

@media (max-width: 480px) {
    .category-card {
        padding: var(--spacing-lg);
    }
    
    .category-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .category-icon .material-symbols-outlined {
        font-size: 1.5rem;
    }
    
    .department-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .emergency-card {
        padding: var(--spacing-lg);
    }
    
    .emergency-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .emergency-icon .material-symbols-outlined {
        font-size: 1.5rem;
    }
    
    .number {
        font-size: 1.125rem;
    }
}
</style>

<script>
// Search functionality
function searchDirectory() {
    const searchTerm = document.getElementById('directorySearch').value;
    const category = document.getElementById('categoryFilter').value;
    const location = document.getElementById('locationFilter').value;
    
    if (!searchTerm && !category && !location) {
        alert('Please enter a search term or select filters');
        return;
    }
    
    // Show search results
    const searchResults = document.getElementById('searchResults');
    searchResults.style.display = 'block';
    
    // Mock search results
    const resultsGrid = searchResults.querySelector('.results-grid');
    resultsGrid.innerHTML = `
        <div class="department-card">
            <div class="department-header">
                <div class="department-icon">
                    <span class="material-symbols-outlined">search</span>
                </div>
                <div class="department-info">
                    <h3 class="department-title">Search Result: ${searchTerm}</h3>
                    <span class="department-type">Found in ${category || 'All Categories'}</span>
                </div>
            </div>
            <div class="department-details">
                <p class="department-description">Search results for "${searchTerm}" would appear here with matching departments and services.</p>
            </div>
        </div>
    `;
    
    // Scroll to results
    searchResults.scrollIntoView({ behavior: 'smooth' });
}

// Browse category
function browseCategory(category) {
    document.getElementById('categoryFilter').value = category;
    searchDirectory();
}

// Enter key search
document.getElementById('directorySearch').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        searchDirectory();
    }
});

// Filter change search
document.getElementById('categoryFilter').addEventListener('change', function() {
    if (this.value) {
        searchDirectory();
    }
});

document.getElementById('locationFilter').addEventListener('change', function() {
    if (this.value) {
        searchDirectory();
    }
});

// Contact functionality
document.querySelectorAll('.department-actions .btn-primary').forEach(button => {
    button.addEventListener('click', function() {
        const departmentName = this.closest('.department-card').querySelector('.department-title').textContent;
        alert(`Contact form for ${departmentName} would open here. In production, this would open a contact form or show contact details.`);
    });
});

// View details functionality
document.querySelectorAll('.department-actions .btn-outline').forEach(button => {
    button.addEventListener('click', function() {
        const departmentName = this.closest('.department-card').querySelector('.department-title').textContent;
        alert(`Detailed view for ${departmentName} would open here. In production, this would navigate to a detailed department page.`);
    });
});
</script>
