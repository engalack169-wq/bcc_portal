<?php
/**
 * Bamenda City Council E-Governance Platform
 * Business Directory Page
 */

// Include access control
require_once __DIR__ . '/../../core/access-control.php';

// Require authentication to access this page
require_authentication();

// Set page metadata
$page_title = 'Business Directory | Bamenda City Council';
$page_description = 'Browse and search registered businesses in Bamenda. Find local businesses, services, and commercial establishments with detailed information and contact details.';
$page_keywords = 'business directory, local businesses, Bamenda commerce, business listings, commercial services';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Business', 'url' => '../index.php'],
    ['title' => 'Directory', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero business-directory-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-business-support.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Business Directory</span>
            <h1 class="hero-title">Business Directory</h1>
            <p class="hero-subtitle">
                Comprehensive directory of registered businesses in Bamenda featuring local enterprises, commercial services, and business establishments with detailed information, contact details, and service descriptions.
            </p>
            <div class="hero-actions">
                <a href="#search-directory" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">search</span>
                    Search Businesses
                </a>
                <a href="#business-categories" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">category</span>
                    Browse Categories
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Directory Actions</h2>
            <p class="section-subtitle">Quick access to business directory features</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openSearch()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">search</span>
                </div>
                <h3 class="action-title">Search Businesses</h3>
                <p class="action-description">Find businesses by name, category, or location</p>
            </div>

            <div class="action-card" onclick="openCategories()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">category</span>
                </div>
                <h3 class="action-title">Browse Categories</h3>
                <p class="action-description">Explore businesses by industry and service type</p>
            </div>

            <div class="action-card" onclick="openFeatured()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">star</span>
                </div>
                <h3 class="action-title">Featured Businesses</h3>
                <p class="action-description">View highlighted and recommended businesses</p>
            </div>

            <div class="action-card" onclick="openNewBusinesses()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">new_releases</span>
                </div>
                <h3 class="action-title">New Businesses</h3>
                <p class="action-description">Discover recently registered businesses</p>
            </div>

            <div class="action-card" onclick="openTopRated()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">verified</span>
                </div>
                <h3 class="action-title">Top Rated</h3>
                <p class="action-description">Find highly-rated businesses and services</p>
            </div>

            <div class="action-card" onclick="openRegisterBusiness()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">add_business</span>
                </div>
                <h3 class="action-title">Register Business</h3>
                <p class="action-description">Add your business to the directory</p>
            </div>
        </div>
    </div>
</section>

<!-- Directory Statistics -->
<section class="directory-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">store</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">2,456</div>
                    <div class="stat-label">Registered Businesses</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+156 this month</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">category</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">45</div>
                    <div class="stat-label">Business Categories</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+8 new categories</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">visibility</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">15,000+</div>
                    <div class="stat-label">Monthly Searches</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+23% increase</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">reviews</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">3,456</div>
                    <div class="stat-label">Customer Reviews</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+456 reviews</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Search Directory -->
<section class="search-directory-section" id="search-directory">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Search Business Directory</h2>
            <p class="section-subtitle">Find businesses by name, category, location, or keywords</p>
        </div>

        <div class="search-content">
            <div class="search-form">
                <form id="businessSearchForm">
                    <div class="search-row">
                        <div class="search-field">
                            <div class="search-icon">
                                <span class="material-symbols-outlined">search</span>
                            </div>
                            <input type="text" class="search-input" placeholder="Search business name, service, or keyword...">
                        </div>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                    
                    <div class="search-filters">
                        <div class="filter-group">
                            <label class="filter-label">Category</label>
                            <select class="filter-select">
                                <option value="">All Categories</option>
                                <option value="restaurants">Restaurants & Food</option>
                                <option value="retail">Retail & Shopping</option>
                                <option value="services">Professional Services</option>
                                <option value="healthcare">Healthcare & Medical</option>
                                <option value="education">Education & Training</option>
                                <option value="technology">Technology & IT</option>
                                <option value="construction">Construction & Building</option>
                                <option value="transportation">Transportation & Logistics</option>
                                <option value="hospitality">Hospitality & Tourism</option>
                                <option value="finance">Finance & Banking</option>
                                <option value="agriculture">Agriculture & Farming</option>
                                <option value="manufacturing">Manufacturing</option>
                            </select>
                        </div>
                        
                        <div class="filter-group">
                            <label class="filter-label">Location</label>
                            <select class="filter-select">
                                <option value="">All Locations</option>
                                <option value="city-center">City Center</option>
                                <option value="nkwen">Nkwen</option>
                                <option value="mankon">Mankon</option>
                                <option value="bambili">Bambili</option>
                                <option value="bambui">Bambui</option>
                                <option value="mile-four">Mile Four</option>
                                <option value="mile-three">Mile Three</option>
                                <option value="up-station">Up Station</option>
                                <option value="down-station">Down Station</option>
                            </select>
                        </div>
                        
                        <div class="filter-group">
                            <label class="filter-label">Rating</label>
                            <select class="filter-select">
                                <option value="">All Ratings</option>
                                <option value="5">5 Stars</option>
                                <option value="4">4+ Stars</option>
                                <option value="3">3+ Stars</option>
                                <option value="2">2+ Stars</option>
                            </select>
                        </div>
                        
                        <div class="filter-group">
                            <label class="filter-label">Business Size</label>
                            <select class="filter-select">
                                <option value="">All Sizes</option>
                                <option value="small">Small (1-10 employees)</option>
                                <option value="medium">Medium (11-50 employees)</option>
                                <option value="large">Large (50+ employees)</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Business Categories -->
<section class="business-categories-section" id="business-categories">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Business Categories</h2>
            <p class="section-subtitle">Browse businesses by industry and service type</p>
        </div>

        <div class="categories-grid">
            <!-- Restaurants & Food -->
            <div class="category-card">
                <div class="category-icon">
                    <span class="material-symbols-outlined">restaurant</span>
                </div>
                <h3 class="category-title">Restaurants & Food</h3>
                <p class="category-description">Restaurants, cafes, bakeries, food services, and catering businesses.</p>
                <div class="category-stats">
                    <span class="stat-item">234 businesses</span>
                    <span class="stat-item">4.5 avg rating</span>
                </div>
                <button class="btn btn-primary">Browse Category</button>
            </div>

            <!-- Retail & Shopping -->
            <div class="category-card">
                <div class="category-icon">
                    <span class="material-symbols-outlined">shopping_bag</span>
                </div>
                <h3 class="category-title">Retail & Shopping</h3>
                <p class="category-description">Retail stores, supermarkets, boutiques, electronics, and shopping centers.</p>
                <div class="category-stats">
                    <span class="stat-item">456 businesses</span>
                    <span class="stat-item">4.3 avg rating</span>
                </div>
                <button class="btn btn-primary">Browse Category</button>
            </div>

            <!-- Professional Services -->
            <div class="category-card">
                <div class="category-icon">
                    <span class="material-symbols-outlined">business_center</span>
                </div>
                <h3 class="category-title">Professional Services</h3>
                <p class="category-description">Legal, accounting, consulting, marketing, and business consulting services.</p>
                <div class="category-stats">
                    <span class="stat-item">189 businesses</span>
                    <span class="stat-item">4.6 avg rating</span>
                </div>
                <button class="btn btn-primary">Browse Category</button>
            </div>

            <!-- Healthcare & Medical -->
            <div class="category-card">
                <div class="category-icon">
                    <span class="material-symbols-outlined">local_hospital</span>
                </div>
                <h3 class="category-title">Healthcare & Medical</h3>
                <p class="category-description">Hospitals, clinics, pharmacies, medical services, and healthcare providers.</p>
                <div class="category-stats">
                    <span class="stat-item">156 businesses</span>
                    <span class="stat-item">4.7 avg rating</span>
                </div>
                <button class="btn btn-primary">Browse Category</button>
            </div>

            <!-- Education & Training -->
            <div class="category-card">
                <div class="category-icon">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <h3 class="category-title">Education & Training</h3>
                <p class="category-description">Schools, colleges, training centers, tutoring services, and educational institutions.</p>
                <div class="category-stats">
                    <span class="stat-item">234 businesses</span>
                    <span class="stat-item">4.4 avg rating</span>
                </div>
                <button class="btn btn-primary">Browse Category</button>
            </div>

            <!-- Technology & IT -->
            <div class="category-card">
                <div class="category-icon">
                    <span class="material-symbols-outlined">computer</span>
                </div>
                <h3 class="category-title">Technology & IT</h3>
                <p class="category-description">IT services, software development, web design, and technology solutions.</p>
                <div class="category-stats">
                    <span class="stat-item">89 businesses</span>
                    <span class="stat-item">4.8 avg rating</span>
                </div>
                <button class="btn btn-primary">Browse Category</button>
            </div>

            <!-- Construction & Building -->
            <div class="category-card">
                <div class="category-icon">
                    <span class="material-symbols-outlined">construction</span>
                </div>
                <h3 class="category-title">Construction & Building</h3>
                <p class="category-description">Construction companies, building materials, contractors, and real estate development.</p>
                <div class="category-stats">
                    <span class="stat-item">167 businesses</span>
                    <span class="stat-item">4.2 avg rating</span>
                </div>
                <button class="btn btn-primary">Browse Category</button>
            </div>

            <!-- Transportation & Logistics -->
            <div class="category-card">
                <div class="category-icon">
                    <span class="material-symbols-outlined">local_shipping</span>
                </div>
                <h3 class="category-title">Transportation & Logistics</h3>
                <p class="category-description">Transport services, logistics companies, delivery services, and vehicle rentals.</p>
                <div class="category-stats">
                    <span class="stat-item">98 businesses</span>
                    <span class="stat-item">4.1 avg rating</span>
                </div>
                <button class="btn btn-primary">Browse Category</button>
            </div>

            <!-- Hospitality & Tourism -->
            <div class="category-card">
                <div class="category-icon">
                    <span class="material-symbols-outlined">hotel</span>
                </div>
                <h3 class="category-title">Hospitality & Tourism</h3>
                <p class="category-description">Hotels, guest houses, tourism services, and hospitality businesses.</p>
                <div class="category-stats">
                    <span class="stat-item">145 businesses</span>
                    <span class="stat-item">4.5 avg rating</span>
                </div>
                <button class="btn btn-primary">Browse Category</button>
            </div>

            <!-- Finance & Banking -->
            <div class="category-card">
                <div class="category-icon">
                    <span class="material-symbols-outlined">account_balance</span>
                </div>
                <h3 class="category-title">Finance & Banking</h3>
                <p class="category-description">Banks, microfinance institutions, insurance companies, and financial services.</p>
                <div class="category-stats">
                    <span class="stat-item">67 businesses</span>
                    <span class="stat-item">4.3 avg rating</span>
                </div>
                <button class="btn btn-primary">Browse Category</button>
            </div>

            <!-- Agriculture & Farming -->
            <div class="category-card">
                <div class="category-icon">
                    <span class="material-symbols-outlined">agriculture</span>
                </div>
                <h3 class="category-title">Agriculture & Farming</h3>
                <p class="category-description">Agricultural products, farming services, agro-processing, and agricultural supplies.</p>
                <div class="category-stats">
                    <span class="stat-item">234 businesses</span>
                    <span class="stat-item">4.0 avg rating</span>
                </div>
                <button class="btn btn-primary">Browse Category</button>
            </div>

            <!-- Manufacturing -->
            <div class="category-card">
                <div class="category-icon">
                    <span class="material-symbols-outlined">factory</span>
                </div>
                <h3 class="category-title">Manufacturing</h3>
                <p class="category-description">Manufacturing companies, industrial production, and processing businesses.</p>
                <div class="category-stats">
                    <span class="stat-item">78 businesses</span>
                    <span class="stat-item">4.4 avg rating</span>
                </div>
                <button class="btn btn-primary">Browse Category</button>
            </div>
        </div>
    </div>
</section>

<!-- Featured Businesses -->
<section class="featured-businesses-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Featured Businesses</h2>
            <p class="section-subtitle">Highlighted and recommended businesses in Bamenda</p>
        </div>

        <div class="businesses-grid">
            <!-- Featured Business 1 -->
            <div class="business-card featured">
                <div class="business-header">
                    <div class="business-badge featured">Featured</div>
                    <div class="business-rating">
                        <div class="stars">
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star_half</span>
                        </div>
                        <span class="rating-text">4.8</span>
                    </div>
                </div>
                <div class="business-content">
                    <h3 class="business-title">Grand Hotel Bamenda</h3>
                    <p class="business-category">Hospitality & Tourism</p>
                    <p class="business-description">Premier hotel offering luxury accommodation, conference facilities, fine dining, and exceptional hospitality services in the heart of Bamenda.</p>
                    <div class="business-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>City Center, Bamenda</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">phone</span>
                            <span>+237 233 456 789</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>24/7 Services</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">language</span>
                            <span>www.grandhotelbda.com</span>
                        </div>
                    </div>
                    <div class="business-services">
                        <h4 class="services-title">Services:</h4>
                        <div class="services-list">
                            <div class="service-item">Accommodation</div>
                            <div class="service-item">Conference Rooms</div>
                            <div class="service-item">Restaurant</div>
                            <div class="service-item">Bar & Lounge</div>
                        </div>
                    </div>
                    <div class="business-actions">
                        <button class="btn btn-sm btn-primary">View Details</button>
                        <button class="btn btn-sm btn-outline">Contact</button>
                        <button class="btn btn-sm btn-outline">Get Directions</button>
                    </div>
                </div>
            </div>

            <!-- Featured Business 2 -->
            <div class="business-card featured">
                <div class="business-header">
                    <div class="business-badge featured">Featured</div>
                    <div class="business-rating">
                        <div class="stars">
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                        </div>
                        <span class="rating-text">5.0</span>
                    </div>
                </div>
                <div class="business-content">
                    <h3 class="business-title">TechHub Bamenda</h3>
                    <p class="business-category">Technology & IT</p>
                    <p class="business-description">Leading technology company providing innovative IT solutions, software development, web design, and digital transformation services for businesses in Bamenda.</p>
                    <div class="business-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Mankon, Bamenda</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">phone</span>
                            <span>+237 233 456 790</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Mon-Fri 8AM-6PM</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">language</span>
                            <span>www.techhubbda.com</span>
                        </div>
                    </div>
                    <div class="business-services">
                        <h4 class="services-title">Services:</h4>
                        <div class="services-list">
                            <div class="service-item">Web Development</div>
                            <div class="service-item">Mobile Apps</div>
                            <div class="service-item">IT Consulting</div>
                            <div class="service-item">Digital Marketing</div>
                        </div>
                    </div>
                    <div class="business-actions">
                        <button class="btn btn-sm btn-primary">View Details</button>
                        <button class="btn btn-sm btn-outline">Contact</button>
                        <button class="btn btn-sm btn-outline">Get Directions</button>
                    </div>
                </div>
            </div>

            <!-- Featured Business 3 -->
            <div class="business-card featured">
                <div class="business-header">
                    <div class="business-badge featured">Featured</div>
                    <div class="business-rating">
                        <div class="stars">
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star_half</span>
                        </div>
                        <span class="rating-text">4.7</span>
                    </div>
                </div>
                <div class="business-content">
                    <h3 class="business-title">BuildRight Construction</h3>
                    <p class="business-category">Construction & Building</p>
                    <p class="business-description">Professional construction company specializing in residential and commercial building, renovation, and infrastructure development projects.</p>
                    <div class="business-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Nkwen, Bamenda</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">phone</span>
                            <span>+237 233 456 791</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Mon-Sat 7AM-5PM</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">language</span>
                            <span>www.buildrightbda.com</span>
                        </div>
                    </div>
                    <div class="business-services">
                        <h4 class="services-title">Services:</h4>
                        <div class="services-list">
                            <div class="service-item">Building Construction</div>
                            <div class="service-item">Renovation</div>
                            <div class="service-item">Architecture</div>
                            <div class="service-item">Project Management</div>
                        </div>
                    </div>
                    <div class="business-actions">
                        <button class="btn btn-sm btn-primary">View Details</button>
                        <button class="btn btn-sm btn-outline">Contact</button>
                        <button class="btn btn-sm btn-outline">Get Directions</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Recent Businesses -->
<section class="recent-businesses-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Recently Registered Businesses</h2>
            <p class="section-subtitle">New businesses joining the Bamenda business community</p>
        </div>

        <div class="businesses-grid">
            <!-- Recent Business 1 -->
            <div class="business-card">
                <div class="business-header">
                    <div class="business-badge new">New</div>
                    <div class="business-rating">
                        <div class="stars">
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star_outline</span>
                        </div>
                        <span class="rating-text">4.0</span>
                    </div>
                </div>
                <div class="business-content">
                    <h3 class="business-title">Fresh Market Groceries</h3>
                    <p class="business-category">Retail & Shopping</p>
                    <p class="business-description">Modern grocery store offering fresh produce, imported goods, and household essentials at competitive prices.</p>
                    <div class="business-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>City Center, Bamenda</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">phone</span>
                            <span>+237 233 456 792</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Daily 7AM-9PM</span>
                        </div>
                    </div>
                    <div class="business-actions">
                        <button class="btn btn-sm btn-primary">View Details</button>
                        <button class="btn btn-sm btn-outline">Contact</button>
                    </div>
                </div>
            </div>

            <!-- Recent Business 2 -->
            <div class="business-card">
                <div class="business-header">
                    <div class="business-badge new">New</div>
                    <div class="business-rating">
                        <div class="stars">
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star_half</span>
                        </div>
                        <span class="rating-text">4.5</span>
                    </div>
                </div>
                <div class="business-content">
                    <h3 class="business-title">Bamenda Digital Agency</h3>
                    <p class="business-category">Technology & IT</p>
                    <p class="business-description">Creative digital agency specializing in branding, web design, social media marketing, and online advertising.</p>
                    <div class="business-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Mankon, Bamenda</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">phone</span>
                            <span>+237 233 456 793</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Mon-Fri 9AM-5PM</span>
                        </div>
                    </div>
                    <div class="business-actions">
                        <button class="btn btn-sm btn-primary">View Details</button>
                        <button class="btn btn-sm btn-outline">Contact</button>
                    </div>
                </div>
            </div>

            <!-- Recent Business 3 -->
            <div class="business-card">
                <div class="business-header">
                    <div class="business-badge new">New</div>
                    <div class="business-rating">
                        <div class="stars">
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star_outline</span>
                        </div>
                        <span class="rating-text">4.2</span>
                    </div>
                </div>
                <div class="business-content">
                    <h3 class="business-title">HealthPlus Pharmacy</h3>
                    <p class="business-category">Healthcare & Medical</p>
                    <p class="business-description">Modern pharmacy providing prescription medications, health products, and professional pharmaceutical services.</p>
                    <div class="business-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Nkwen, Bamenda</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">phone</span>
                            <span>+237 233 456 794</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Daily 8AM-8PM</span>
                        </div>
                    </div>
                    <div class="business-actions">
                        <button class="btn btn-sm btn-primary">View Details</button>
                        <button class="btn btn-sm btn-outline">Contact</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Business Registration -->
<section class="business-registration-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Register Your Business</h2>
            <p class="section-subtitle">Add your business to the Bamenda business directory</p>
        </div>

        <div class="registration-content">
            <div class="registration-form">
                <h3 class="form-title">Business Directory Listing</h3>
                <form id="businessDirectoryForm">
                    <div class="form-section">
                        <h4 class="section-title">Business Information</h4>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Business Name *</label>
                                <input type="text" class="form-input" placeholder="Enter your business name" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Business Type *</label>
                                <select class="form-select" required>
                                    <option value="">Select business type</option>
                                    <option value="sole-proprietor">Sole Proprietorship</option>
                                    <option value="partnership">Partnership</option>
                                    <option value="limited">Limited Company</option>
                                    <option value="corporation">Corporation</option>
                                    <option value="cooperative">Cooperative</option>
                                    <option value="ngo">NGO/Non-profit</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Category *</label>
                                <select class="form-select" required>
                                    <option value="">Select business category</option>
                                    <option value="restaurants">Restaurants & Food</option>
                                    <option value="retail">Retail & Shopping</option>
                                    <option value="services">Professional Services</option>
                                    <option value="healthcare">Healthcare & Medical</option>
                                    <option value="education">Education & Training</option>
                                    <option value="technology">Technology & IT</option>
                                    <option value="construction">Construction & Building</option>
                                    <option value="transportation">Transportation & Logistics</option>
                                    <option value="hospitality">Hospitality & Tourism</option>
                                    <option value="finance">Finance & Banking</option>
                                    <option value="agriculture">Agriculture & Farming</option>
                                    <option value="manufacturing">Manufacturing</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Business Size *</label>
                                <select class="form-select" required>
                                    <option value="">Select business size</option>
                                    <option value="small">Small (1-10 employees)</option>
                                    <option value="medium">Medium (11-50 employees)</option>
                                    <option value="large">Large (50+ employees)</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Business Description *</label>
                            <textarea class="form-textarea" rows="4" placeholder="Describe your business, products, and services" required></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Services Offered</label>
                            <textarea class="form-textarea" rows="3" placeholder="List the specific services you offer"></textarea>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Contact Information</h4>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Contact Person *</label>
                                <input type="text" class="form-input" placeholder="Full name of contact person" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Phone Number *</label>
                                <input type="tel" class="form-input" placeholder="+237 233 000 000" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Email Address *</label>
                                <input type="email" class="form-input" placeholder="business@email.com" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Website</label>
                                <input type="url" class="form-input" placeholder="www.yourwebsite.com">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Physical Address *</label>
                            <input type="text" class="form-input" placeholder="Enter your business address" required>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Area/Neighborhood *</label>
                                <select class="form-select" required>
                                    <option value="">Select area</option>
                                    <option value="city-center">City Center</option>
                                    <option value="nkwen">Nkwen</option>
                                    <option value="mankon">Mankon</option>
                                    <option value="bambili">Bambili</option>
                                    <option value="bambui">Bambui</option>
                                    <option value="mile-four">Mile Four</option>
                                    <option value="mile-three">Mile Three</option>
                                    <option value="up-station">Up Station</option>
                                    <option value="down-station">Down Station</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Business Hours *</label>
                                <input type="text" class="form-input" placeholder="e.g., Mon-Fri 8AM-6PM" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Additional Information</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Year Established</label>
                            <input type="number" class="form-input" placeholder="Year business was established" min="1900" max="2024">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Keywords</label>
                            <input type="text" class="form-input" placeholder="Keywords to help customers find your business (comma separated)">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Social Media Links</label>
                            <textarea class="form-textarea" rows="3" placeholder="Facebook, Instagram, Twitter, LinkedIn profiles"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Business Logo/Photos</label>
                            <div class="file-upload">
                                <input type="file" id="businessUpload" accept="image/*" multiple>
                                <label for="businessUpload" class="file-upload-label">
                                    <span class="material-symbols-outlined">upload_file</span>
                                    <span>Click to upload business logo and photos</span>
                                    <small>JPG, PNG, GIF (Max 5MB per file)</small>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Terms & Conditions *</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="terms" required>
                                    <span class="checkmark"></span>
                                    I agree to the terms and conditions of the business directory. I certify that all information provided is accurate and truthful. I understand that false information may result in removal from the directory.
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="reset" class="btn btn-outline">Reset</button>
                        <button type="submit" class="btn btn-primary">Submit Listing</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Common questions about the business directory</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How do I add my business to the directory?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>To add your business, fill out the business registration form with your business details, contact information, and services. Submit the form and your listing will be reviewed and published within 2-3 business days.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Is there a fee to list my business?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Basic business listings are free for all registered businesses in Bamenda. Premium listings with enhanced features, photos, and priority placement are available for a small monthly fee.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How do I update my business information?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Log into your business account to update your information anytime. You can modify contact details, services, business hours, and add photos. Changes are typically approved within 24 hours.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Can customers leave reviews for businesses?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, customers can leave reviews and ratings for businesses. Business owners can respond to reviews and manage their online reputation through their dashboard.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How are businesses verified?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Businesses are verified through registration documents, business licenses, and site visits. Verified businesses receive a verification badge and higher visibility in search results.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What are the benefits of a premium listing?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Premium listings include priority placement in search results, photo galleries, detailed service descriptions, direct messaging with customers, analytics dashboard, and promotional features.</p>
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
/* Business Directory Page Styles */
.business-directory-hero {
    background: linear-gradient(135deg, var(--secondary) 0%, var(--secondary-container) 100%);
}

/* Quick Actions Section */
.quick-actions-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.actions-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: var(--spacing-xl);
}

.action-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
    cursor: pointer;
    transition: all 0.3s ease;
}

.action-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.action-icon {
    width: 4rem;
    height: 4rem;
    background-color: var(--secondary);
    color: var(--on-secondary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-lg);
}

.action-icon .material-symbols-outlined {
    font-size: 2rem;
}

.action-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--secondary);
    margin-bottom: var(--spacing-md);
}

.action-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
}

/* Directory Statistics Section */
.directory-stats-section {
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
    background-color: var(--secondary);
    color: var(--on-secondary);
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
    color: var(--secondary);
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

/* Search Directory Section */
.search-directory-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.search-content {
    display: flex;
    justify-content: center;
}

.search-form {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-2xl);
    border: 1px solid var(--outline-variant);
    max-width: 800px;
    width: 100%;
}

.search-row {
    display: flex;
    gap: var(--spacing-lg);
    margin-bottom: var(--spacing-xl);
    align-items: center;
}

.search-field {
    flex: 1;
    position: relative;
    display: flex;
    align-items: center;
}

.search-icon {
    position: absolute;
    left: var(--spacing-md);
    color: var(--on-surface-variant);
    z-index: 1;
}

.search-input {
    width: 100%;
    padding: var(--spacing-md) var(--spacing-md) var(--spacing-md) 3rem;
    border: 1px solid var(--outline-variant);
    border-radius: var(--radius-lg);
    background-color: var(--surface-container-lowest);
    color: var(--on-surface);
    font-size: 1rem;
    transition: all 0.2s ease;
}

.search-input:focus {
    outline: none;
    border-color: var(--secondary);
    box-shadow: 0 0 0 2px var(--secondary-container);
}

.search-filters {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: var(--spacing-lg);
}

.filter-group {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
}

.filter-label {
    font-size: 0.875rem;
    font-weight: 600;
    color: var(--on-surface);
}

.filter-select {
    padding: var(--spacing-sm) var(--spacing-md);
    border: 1px solid var(--outline-variant);
    border-radius: var(--radius-md);
    background-color: var(--surface-container-lowest);
    color: var(--on-surface);
    font-size: 0.875rem;
    transition: all 0.2s ease;
}

.filter-select:focus {
    outline: none;
    border-color: var(--secondary);
    box-shadow: 0 0 0 2px var(--secondary-container);
}

/* Business Categories Section */
.business-categories-section {
    padding: var(--spacing-3xl) 0;
}

.categories-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.category-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.category-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.category-icon {
    width: 3rem;
    height: 3rem;
    background-color: var(--secondary);
    color: var(--on-secondary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-md);
}

.category-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.category-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--secondary);
    margin-bottom: var(--spacing-sm);
}

.category-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.category-stats {
    display: flex;
    justify-content: center;
    gap: var(--spacing-lg);
    margin-bottom: var(--spacing-lg);
}

.stat-item {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

/* Featured Businesses Section */
.featured-businesses-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.businesses-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.business-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.business-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.business-card.featured {
    border: 2px solid var(--secondary);
}

.business-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.business-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.business-badge.featured {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.business-badge.new {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.business-rating {
    display: flex;
    align-items: center;
    gap: var(--spacing-xs);
}

.stars {
    display: flex;
    gap: 2px;
}

.stars .material-symbols-outlined {
    font-size: 1rem;
    color: var(--tertiary);
}

.rating-text {
    font-size: 0.875rem;
    font-weight: 600;
    color: var(--on-surface-variant);
}

.business-content {
    padding: var(--spacing-lg);
}

.business-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--secondary);
    margin-bottom: var(--spacing-xs);
}

.business-category {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    margin-bottom: var(--spacing-md);
}

.business-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.business-details {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

.detail-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.detail-item .material-symbols-outlined {
    font-size: 1.25rem;
    color: var(--secondary);
}

.business-services {
    margin-bottom: var(--spacing-lg);
}

.services-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--secondary);
    margin-bottom: var(--spacing-sm);
}

.services-list {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-sm);
}

.service-item {
    padding: var(--spacing-xs) var(--spacing-sm);
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.business-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Recent Businesses Section */
.recent-businesses-section {
    padding: var(--spacing-3xl) 0;
}

/* Business Registration Section */
.business-registration-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.registration-content {
    display: flex;
    justify-content: center;
}

.registration-form {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-2xl);
    border: 1px solid var(--outline-variant);
    max-width: 800px;
    width: 100%;
}

.form-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--secondary);
    margin-bottom: var(--spacing-lg);
    text-align: center;
}

/* Form Styles */
.form-group {
    margin-bottom: var(--spacing-lg);
}

.form-label {
    display: block;
    font-size: 0.875rem;
    font-weight: 600;
    color: var(--on-surface);
    margin-bottom: var(--spacing-sm);
}

.form-input,
.form-select,
.form-textarea {
    width: 100%;
    padding: var(--spacing-sm) var(--spacing-md);
    border: 1px solid var(--outline-variant);
    border-radius: var(--radius-md);
    background-color: var(--surface-container-lowest);
    color: var(--on-surface);
    font-size: 0.875rem;
    transition: all 0.2s ease;
}

.form-input:focus,
.form-select:focus,
.form-textarea:focus {
    outline: none;
    border-color: var(--secondary);
    box-shadow: 0 0 0 2px var(--secondary-container);
}

.form-textarea {
    resize: vertical;
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--spacing-lg);
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

.file-upload {
    position: relative;
    display: inline-block;
    width: 100%;
}

.file-upload input[type="file"] {
    display: none;
}

.file-upload-label {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: var(--spacing-sm);
    padding: var(--spacing-lg);
    border: 2px dashed var(--outline-variant);
    border-radius: var(--radius-lg);
    background-color: var(--surface-container);
    cursor: pointer;
    transition: all 0.2s ease;
}

.file-upload-label:hover {
    border-color: var(--secondary);
    background-color: var(--secondary-container);
}

.file-upload-label .material-symbols-outlined {
    font-size: 2rem;
    color: var(--secondary);
}

.file-upload-label span {
    color: var(--on-surface);
}

.file-upload-label small {
    color: var(--on-surface-variant);
}

.checkbox-group {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
}

.checkbox-label {
    display: flex;
    align-items: flex-start;
    gap: var(--spacing-sm);
    cursor: pointer;
    color: var(--on-surface);
    line-height: 1.5;
}

.checkbox-label input[type="checkbox"] {
    display: none;
    margin-top: 2px;
}

.checkmark {
    width: 1.25rem;
    height: 1.25rem;
    border: 2px solid var(--outline-variant);
    border-radius: var(--radius-xs);
    position: relative;
    transition: all 0.2s ease;
    flex-shrink: 0;
    margin-top: 2px;
}

.checkbox-label input[type="checkbox"]:checked + .checkmark {
    background-color: var(--secondary);
    border-color: var(--secondary);
}

.checkbox-label input[type="checkbox"]:checked + .checkmark::after {
    content: '✓';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: var(--on-secondary);
    font-size: 0.875rem;
    font-weight: 700;
}

.form-actions {
    display: flex;
    gap: var(--spacing-lg);
    justify-content: center;
    margin-top: var(--spacing-xl);
}

/* FAQ Section */
.faq-section {
    padding: var(--spacing-3xl) 0;
}

.faq-list {
    max-width: 800px;
    margin: 0 auto;
}

.faq-item {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    margin-bottom: var(--spacing-md);
    overflow: hidden;
}

.faq-question {
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
    padding: var(--spacing-lg);
    font-weight: 600;
    color: var(--secondary);
    transition: background-color 0.2s ease;
}

.faq-question:hover {
    background-color: var(--surface-container);
}

.faq-toggle {
    font-size: 1.25rem;
    transition: transform 0.2s ease;
}

.faq-item.active .faq-toggle {
    transform: rotate(45deg);
}

.faq-answer {
    display: none;
    padding: 0 var(--spacing-lg) var(--spacing-lg);
    color: var(--on-surface-variant);
    line-height: 1.6;
}

.faq-item.active .faq-answer {
    display: block;
}

/* Responsive Design */
@media (max-width: 768px) {
    .actions-grid {
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: var(--spacing-lg);
    }
    
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: var(--spacing-md);
    }
    
    .categories-grid {
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: var(--spacing-lg);
    }
    
    .businesses-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .search-filters {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
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
}

@media (max-width: 480px) {
    .action-card {
        padding: var(--spacing-lg);
    }
    
    .action-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .action-icon .material-symbols-outlined {
        font-size: 1.5rem;
    }
    
    .business-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .registration-form {
        padding: var(--spacing-lg);
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
    
    .business-actions {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .business-actions .btn {
        width: 100%;
    }
    
    .search-row {
        flex-direction: column;
        gap: var(--spacing-md);
    }
    
    .category-stats {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
}
</style>

<script>
// Quick action functions
function openSearch() {
    document.getElementById('search-directory').scrollIntoView({ behavior: 'smooth' });
}

function openCategories() {
    document.getElementById('business-categories').scrollIntoView({ behavior: 'smooth' });
}

function openFeatured() {
    document.querySelector('.featured-businesses-section').scrollIntoView({ behavior: 'smooth' });
}

function openNewBusinesses() {
    document.querySelector('.recent-businesses-section').scrollIntoView({ behavior: 'smooth' });
}

function openTopRated() {
    alert('Top rated businesses portal would open here. In production, this would show businesses with highest ratings and customer reviews.');
}

function openRegisterBusiness() {
    document.querySelector('.business-registration-section').scrollIntoView({ behavior: 'smooth' });
}

// Category actions
document.querySelectorAll('.category-card .btn-primary').forEach(button => {
    if (button.textContent.includes('Browse')) {
        button.addEventListener('click', function() {
            const categoryTitle = this.closest('.category-card').querySelector('.category-title').textContent;
            alert(`Browsing category: "${categoryTitle}"`);
        });
    }
});

// Business actions
document.querySelectorAll('.business-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('View')) {
        button.addEventListener('click', function() {
            const businessTitle = this.closest('.business-card').querySelector('.business-title').textContent;
            alert(`Viewing details for: "${businessTitle}"`);
        });
    }
});

document.querySelectorAll('.business-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Contact')) {
        button.addEventListener('click', function() {
            const businessTitle = this.closest('.business-card').querySelector('.business-title').textContent;
            alert(`Contact form would open for: "${businessTitle}"`);
        });
    }
    
    if (button.textContent.includes('Directions')) {
        button.addEventListener('click', function() {
            const businessTitle = this.closest('.business-card').querySelector('.business-title').textContent;
            alert(`Getting directions to: "${businessTitle}"`);
        });
    }
});

// Search form submission
document.getElementById('businessSearchForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const searchQuery = document.querySelector('.search-input').value;
    
    if (!searchQuery.trim()) {
        alert('Please enter a search term.');
        return;
    }
    
    alert(`Searching for: "${searchQuery}" - In production, this would display search results.`);
    // In production, this would perform the search and display results
});

// Business registration form submission
document.getElementById('businessDirectoryForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate required fields
    const businessName = document.querySelector('input[placeholder*="business name"]').value;
    const businessType = document.querySelector('select[required]').value;
    const category = document.querySelectorAll('select[required]')[1].value;
    const businessSize = document.querySelectorAll('select[required]')[2].value;
    const description = document.querySelector('textarea[required]').value;
    const contactPerson = document.querySelector('input[placeholder*="contact person"]').value;
    const phone = document.querySelector('input[placeholder*="phone"]').value;
    const email = document.querySelector('input[placeholder*="email"]').value;
    const address = document.querySelector('input[placeholder*="address"]').value;
    const area = document.querySelectorAll('select[required]')[3].value;
    const businessHours = document.querySelector('input[placeholder*="hours"]').value;
    const terms = document.querySelector('input[name="terms"]:checked');
    
    if (!businessName || !businessType || !category || !businessSize || !description || !contactPerson || !phone || !email || !address || !area || !businessHours || !terms) {
        alert('Please fill in all required fields and accept the terms and conditions.');
        return;
    }
    
    // Validate email
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert('Please enter a valid email address.');
        return;
    }
    
    // Validate phone
    const phoneRegex = /^\+237\s\d{3}\s\d{3}\s\d{3}$/;
    if (!phoneRegex.test(phone)) {
        alert('Please enter a valid phone number in the format: +237 233 000 000');
        return;
    }
    
    alert('Business listing submitted successfully! Your business will be reviewed and published within 2-3 business days. You will receive a confirmation email with your listing details.');
    // In production, this would submit the business listing
});

// FAQ toggle function
function toggleFAQ(element) {
    const faqItem = element.parentElement;
    faqItem.classList.toggle('active');
}

// Progress animation on scroll
window.addEventListener('scroll', function() {
    const statCards = document.querySelectorAll('.stat-card');
    statCards.forEach(card => {
        const rect = card.getBoundingClientRect();
        const isVisible = rect.top < window.innerHeight && rect.bottom > 0;
        if (isVisible) {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            setTimeout(() => {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, 100);
        }
    });
});

// Auto-refresh directory statistics
function refreshDirectoryStats() {
    // In production, this would fetch real-time directory statistics
    console.log('Refreshing business directory statistics...');
    
    // Simulate business count updates
    const businessCountElement = document.querySelector('.stat-number');
    if (businessCountElement && businessCountElement.textContent.includes(',')) {
        // Simulate real-time business registration
        const currentCount = parseInt(businessCountElement.textContent.replace(',', ''));
        const increment = Math.floor(Math.random() * 3) + 1;
        const newCount = currentCount + increment;
        businessCountElement.textContent = newCount.toLocaleString();
    }
}

// Refresh statistics every 45 seconds
setInterval(refreshDirectoryStats, 45000);
</script>
