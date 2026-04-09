<?php
/**
 * Bamenda City Council E-Governance Platform
 * Business Licensing Page
 */

// Set page metadata
$page_title = 'Business Licensing | Bamenda City Council';
$page_description = 'Access business licensing services, permit applications, license renewals, and regulatory compliance for businesses operating in Bamenda.';
$page_keywords = 'business licensing, permits, license renewal, regulatory compliance, Bamenda business permits';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Business', 'url' => '../index.php'],
    ['title' => 'Licensing', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero business-licensing-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-business-support.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Business Licensing</span>
            <h1 class="hero-title">Business Licenses & Permits</h1>
            <p class="hero-subtitle">
                Comprehensive business licensing services including new license applications, renewals, regulatory compliance, and permit management for all types of businesses operating in Bamenda.
            </p>
            <div class="hero-actions">
                <a href="#license-types" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">description</span>
                    License Types
                </a>
                <a href="#license-application" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">assignment</span>
                    Apply Now
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Licensing Actions</h2>
            <p class="section-subtitle">Quick access to business licensing services</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openNewLicense()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">add_circle</span>
                </div>
                <h3 class="action-title">New License</h3>
                <p class="action-description">Apply for new business license</p>
            </div>

            <div class="action-card" onclick="openLicenseRenewal()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">refresh</span>
                </div>
                <h3 class="action-title">License Renewal</h3>
                <p class="action-description">Renew existing license</p>
            </div>

            <div class="action-card" onclick="openLicenseStatus()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">search</span>
                </div>
                <h3 class="action-title">Check Status</h3>
                <p class="action-description">Track application status</p>
            </div>

            <div class="action-card" onclick="openCompliance()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">verified</span>
                </div>
                <h3 class="action-title">Compliance Check</h3>
                <p class="action-description">Verify compliance status</p>
            </div>

            <div class="action-card" onclick="openPermits()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">gavel</span>
                </div>
                <h3 class="action-title">Special Permits</h3>
                <p class="action-description">Apply for special permits</p>
            </div>

            <div class="action-card" onclick="openInspections()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">visibility</span>
                </div>
                <h3 class="action-title">Inspections</h3>
                <p class="action-description">Schedule inspections</p>
            </div>
        </div>
    </div>
</section>

<!-- Licensing Statistics -->
<section class="licensing-stats-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Licensing Overview</h2>
            <p class="section-subtitle">Real-time business licensing statistics</p>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">business</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">2,345</div>
                    <div class="stat-label">Active Licenses</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+156 this month</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">pending_actions</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">234</div>
                    <div class="stat-label">Pending Applications</div>
                    <div class="stat-change negative">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+45 pending</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">schedule</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">89</div>
                    <div class="stat-label">Inspections Scheduled</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+12 this week</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">verified</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">94%</div>
                    <div class="stat-label">Compliance Rate</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+3% improvement</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">timer</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">5 days</div>
                    <div class="stat-label">Avg. Processing Time</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_down</span>
                        <span>-2 days improvement</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">payments</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">₣234M</div>
                    <div class="stat-label">License Revenue</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+₣45M this year</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- License Types -->
<section class="license-types-section" id="license-types">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Business License Types</h2>
            <p class="section-subtitle">Different types of business licenses available</p>
        </div>

        <div class="license-types-grid">
            <!-- Commercial License -->
            <div class="license-card">
                <div class="license-header">
                    <div class="license-icon">
                        <span class="material-symbols-outlined">store</span>
                    </div>
                    <div class="license-badge popular">Popular</div>
                </div>
                <div class="license-content">
                    <h3 class="license-title">Commercial License</h3>
                    <p class="license-description">For retail businesses, shops, supermarkets, and commercial trading activities.</p>
                    <div class="license-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Retail trading permitted</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Multiple business locations</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Annual renewal required</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Inspection compliance</span>
                        </div>
                    </div>
                    <div class="license-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Fee: ₣50,000 - ₣200,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Processing: 5-7 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">update</span>
                            <span>Validity: 1 year</span>
                        </div>
                    </div>
                    <div class="license-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Requirements</button>
                    </div>
                </div>
            </div>

            <!-- Professional License -->
            <div class="license-card">
                <div class="license-header">
                    <div class="license-icon">
                        <span class="material-symbols-outlined">work</span>
                    </div>
                    <div class="license-badge active">Active</div>
                </div>
                <div class="license-content">
                    <h3 class="license-title">Professional License</h3>
                    <p class="license-description">For professional services including consulting, legal, accounting, medical, and other professional practices.</p>
                    <div class="license-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Professional services permitted</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Professional certification required</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Practice within scope</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Continuing education</span>
                        </div>
                    </div>
                    <div class="license-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Fee: ₣75,000 - ₣300,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Processing: 7-10 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">update</span>
                            <span>Validity: 2 years</span>
                        </div>
                    </div>
                    <div class="license-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Requirements</button>
                    </div>
                </div>
            </div>

            <!-- Industrial License -->
            <div class="license-card">
                <div class="license-header">
                    <div class="license-icon">
                        <span class="material-symbols-outlined">factory</span>
                    </div>
                    <div class="license-badge expanding">Expanding</div>
                </div>
                <div class="license-content">
                    <h3 class="license-title">Industrial License</h3>
                    <p class="license-description">For manufacturing, processing, industrial production, and large-scale commercial operations.</p>
                    <div class="license-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Manufacturing permitted</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Environmental compliance</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Safety regulations</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Industrial zoning required</span>
                        </div>
                    </div>
                    <div class="license-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Fee: ₣150,000 - ₣500,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Processing: 10-14 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">update</span>
                            <span>Validity: 3 years</span>
                        </div>
                    </div>
                    <div class="license-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Requirements</button>
                    </div>
                </div>
            </div>

            <!-- Food Service License -->
            <div class="license-card">
                <div class="license-header">
                    <div class="license-icon">
                        <span class="material-symbols-outlined">restaurant</span>
                    </div>
                    <div class="license-badge popular">Popular</div>
                </div>
                <div class="license-content">
                    <h3 class="license-title">Food Service License</h3>
                    <p class="license-description">For restaurants, cafes, food trucks, catering services, and food preparation businesses.</p>
                    <div class="license-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Food preparation permitted</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Health inspections required</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Food safety compliance</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Staff health certificates</span>
                        </div>
                    </div>
                    <div class="license-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Fee: ₣40,000 - ₣150,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Processing: 3-5 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">update</span>
                            <span>Validity: 1 year</span>
                        </div>
                    </div>
                    <div class="license-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Requirements</button>
                    </div>
                </div>
            </div>

            <!-- Transportation License -->
            <div class="license-card">
                <div class="license-header">
                    <div class="license-icon">
                        <span class="material-symbols-outlined">directions_bus</span>
                    </div>
                    <div class="license-badge active">Active</div>
                </div>
                <div class="license-content">
                    <h3 class="license-title">Transportation License</h3>
                    <p class="license-description">For taxi services, bus operations, logistics companies, and transportation businesses.</p>
                    <div class="license-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Passenger transport permitted</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Vehicle inspections required</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Driver certification</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Insurance coverage</span>
                        </div>
                    </div>
                    <div class="license-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Fee: ₣60,000 - ₣250,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Processing: 5-7 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">update</span>
                            <span>Validity: 1 year</span>
                        </div>
                    </div>
                    <div class="license-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Requirements</button>
                    </div>
                </div>
            </div>

            <!-- Entertainment License -->
            <div class="license-card">
                <div class="license-header">
                    <div class="license-icon">
                        <span class="material-symbols-outlined">celebration</span>
                    </div>
                    <div class="license-badge new">New</div>
                </div>
                <div class="license-content">
                    <h3 class="license-title">Entertainment License</h3>
                    <p class="license-description">For entertainment venues, event organizers, nightlife businesses, and recreational facilities.</p>
                    <div class="license-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Entertainment permitted</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Noise regulations apply</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Safety compliance</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Operating hours restrictions</span>
                        </div>
                    </div>
                    <div class="license-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Fee: ₣80,000 - ₣300,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Processing: 7-10 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">update</span>
                            <span>Validity: 1 year</span>
                        </div>
                    </div>
                    <div class="license-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Requirements</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- License Application -->
<section class="license-application-section" id="license-application">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Business License Application</h2>
            <p class="section-subtitle">Apply for new business license or permit</p>
        </div>

        <div class="application-content">
            <div class="application-form">
                <h3 class="form-title">License Application Form</h3>
                <form id="licenseApplicationForm">
                    <div class="form-section">
                        <h4 class="section-title">Business Information</h4>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Business Name *</label>
                                <input type="text" class="form-input" placeholder="Enter your business name" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Business Registration Number *</label>
                                <input type="text" class="form-input" placeholder="Enter registration number" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">License Type *</label>
                                <select class="form-select" required>
                                    <option value="">Select license type</option>
                                    <option value="commercial">Commercial License</option>
                                    <option value="professional">Professional License</option>
                                    <option value="industrial">Industrial License</option>
                                    <option value="food-service">Food Service License</option>
                                    <option value="transportation">Transportation License</option>
                                    <option value="entertainment">Entertainment License</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Business Category *</label>
                                <select class="form-select" required>
                                    <option value="">Select business category</option>
                                    <option value="retail">Retail & Trading</option>
                                    <option value="services">Professional Services</option>
                                    <option value="manufacturing">Manufacturing</option>
                                    <option value="food">Food & Hospitality</option>
                                    <option value="transport">Transportation</option>
                                    <option value="entertainment">Entertainment</option>
                                    <option value="technology">Technology</option>
                                    <option value="agriculture">Agriculture</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Business Description *</label>
                            <textarea class="form-textarea" rows="4" placeholder="Describe your business activities and services" required></textarea>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Business Start Date *</label>
                                <input type="date" class="form-input" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Number of Employees *</label>
                                <input type="number" class="form-input" placeholder="Number of employees" min="1" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Business Location</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Business Address *</label>
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
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Property Type *</label>
                                <select class="form-select" required>
                                    <option value="">Select property type</option>
                                    <option value="owned">Owned Property</option>
                                    <option value="rented">Rented Property</option>
                                    <option value="leased">Leased Property</option>
                                    <option value="shared">Shared Space</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Business Size (sq meters) *</label>
                                <input type="number" class="form-input" placeholder="Business premises size" min="1" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Parking Spaces *</label>
                                <input type="number" class="form-input" placeholder="Number of parking spaces" min="0" required>
                            </div>
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
                                <label class="form-label">Position *</label>
                                <input type="text" class="form-input" placeholder="Position in business" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Phone Number *</label>
                                <input type="tel" class="form-input" placeholder="+237 233 000 000" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email Address *</label>
                                <input type="email" class="form-input" placeholder="business@email.com" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Alternative Phone</label>
                                <input type="tel" class="form-input" placeholder="+237 233 000 000">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Website</label>
                                <input type="url" class="form-input" placeholder="www.example.com">
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Supporting Documents</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Required Documents *</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="documents" value="registration" required>
                                    <span class="checkmark"></span>
                                    Business Registration Certificate
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="documents" value="tax" required>
                                    <span class="checkmark"></span>
                                    Tax Clearance Certificate
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="documents" value="premises" required>
                                    <span class="checkmark"></span>
                                    Premises Ownership/Rental Agreement
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="documents" value="id" required>
                                    <span class="checkmark"></span>
                                    Owner/Manager ID Copy
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Upload Documents</label>
                            <div class="file-upload">
                                <input type="file" id="licenseUpload" accept=".pdf,.jpg,.jpeg,.png" multiple>
                                <label for="licenseUpload" class="file-upload-label">
                                    <span class="material-symbols-outlined">upload_file</span>
                                    <span>Upload supporting documents</span>
                                    <small>PDF, JPG, PNG files (Max 5MB per file)</small>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Additional Information</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Previous License History</label>
                            <textarea class="form-textarea" rows="3" placeholder="Any previous business licenses held (if applicable)"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Special Requirements</label>
                            <textarea class="form-textarea" rows="3" placeholder="Any special requirements or considerations for your business license"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">How did you hear about our licensing services? *</label>
                            <select class="form-select" required>
                                <option value="">Select option</option>
                                <option value="website">City Council Website</option>
                                <option value="social-media">Social Media</option>
                                <option value="friend">Business Colleague</option>
                                <option value="workshop">Business Workshop</option>
                                <option value="advertisement">Advertisement</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Declaration *</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="declaration" required>
                                    <span class="checkmark"></span>
                                    I declare that all information provided is true and accurate. I understand that false information may result in the rejection of my application and possible legal action. I agree to comply with all licensing requirements and regulations.
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="reset" class="btn btn-outline">Reset</button>
                        <button type="submit" class="btn btn-primary">Submit Application</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- License Status Check -->
<section class="license-status-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">License Status Check</h2>
            <p class="section-subtitle">Track your license application status</p>
        </div>

        <div class="status-check-content">
            <div class="status-check-form">
                <h3 class="form-title">Check Application Status</h3>
                <form id="statusCheckForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Application Number *</label>
                            <input type="text" class="form-input" placeholder="Enter your application number" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Business Name *</label>
                            <input type="text" class="form-input" placeholder="Enter your business name" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Phone Number *</label>
                            <input type="tel" class="form-input" placeholder="+237 233 000 000" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email Address *</label>
                            <input type="email" class="form-input" placeholder="business@email.com" required>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Check Status</button>
                    </div>
                </form>
            </div>

            <div class="status-results" id="statusResults" style="display: none;">
                <h3 class="results-title">Application Status</h3>
                <div class="status-card">
                    <div class="status-header">
                        <div class="status-icon">
                            <span class="material-symbols-outlined">pending_actions</span>
                        </div>
                        <div class="status-badge processing">Processing</div>
                    </div>
                    <div class="status-content">
                        <h4 class="status-title">Application #LIC2024001234</h4>
                        <div class="status-details">
                            <div class="detail-item">
                                <span class="material-symbols-outlined">business</span>
                                <span>Business: ABC Trading Company</span>
                            </div>
                            <div class="detail-item">
                                <span class="material-symbols-outlined">description</span>
                                <span>License Type: Commercial License</span>
                            </div>
                            <div class="detail-item">
                                <span class="material-symbols-outlined">schedule</span>
                                <span>Submitted: December 1, 2024</span>
                            </div>
                            <div class="detail-item">
                                <span class="material-symbols-outlined">update</span>
                                <span>Expected Completion: December 8, 2024</span>
                            </div>
                        </div>
                        <div class="status-timeline">
                            <div class="timeline-item completed">
                                <div class="timeline-dot"></div>
                                <div class="timeline-content">
                                    <h5>Application Submitted</h5>
                                    <p>December 1, 2024 - 10:30 AM</p>
                                </div>
                            </div>
                            <div class="timeline-item completed">
                                <div class="timeline-dot"></div>
                                <div class="timeline-content">
                                    <h5>Document Verification</h5>
                                    <p>December 2, 2024 - 2:15 PM</p>
                                </div>
                            </div>
                            <div class="timeline-item active">
                                <div class="timeline-dot"></div>
                                <div class="timeline-content">
                                    <h5>Business Inspection</h5>
                                    <p>In Progress - Scheduled for December 5, 2024</p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <div class="timeline-content">
                                    <h5>License Issuance</h5>
                                    <p>Pending</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Common questions about business licensing</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How long does it take to get a business license?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Processing time varies by license type: Commercial licenses take 5-7 days, professional licenses take 7-10 days, industrial licenses take 10-14 days. Food service licenses are processed in 3-5 days.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What documents are required for a business license?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Required documents typically include: Business registration certificate, tax clearance certificate, premises ownership/rental agreement, and owner/manager ID copy. Additional documents may be required based on business type.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How much does a business license cost?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>License fees vary by type and business size: Commercial licenses range from ₣50,000 to ₣200,000, professional licenses from ₣75,000 to ₣300,000, and industrial licenses from ₣150,000 to ₣500,000.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>When do I need to renew my business license?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Most licenses require annual renewal. Professional licenses are valid for 2 years, and industrial licenses for 3 years. Renewal applications should be submitted at least 30 days before expiration.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What happens if I operate without a license?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Operating without a valid business license is illegal and may result in fines, business closure, and legal action. It's important to obtain proper licensing before starting operations.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Can I transfer my business license?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Business licenses are generally non-transferable. If you sell your business, the new owner must apply for a new license. Some exceptions may apply with proper documentation and approval.</p>
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
/* Business Licensing Page Styles */
.business-licensing-hero {
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-container) 100%);
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
    background-color: var(--primary);
    color: var(--on-primary);
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
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.action-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
}

/* Licensing Statistics Section */
.licensing-stats-section {
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

/* License Types Section */
.license-types-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.license-types-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.license-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.license-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.license-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.license-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.license-icon .material-symbols-outlined {
    font-size: 2rem;
}

.license-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.license-badge.popular {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.license-badge.active {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.license-badge.expanding {
    background-color: var(--primary);
    color: var(--on-primary);
}

.license-badge.new {
    background-color: var(--error);
    color: var(--on-error);
}

.license-content {
    padding: var(--spacing-lg);
}

.license-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.license-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.license-features {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

.feature-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.feature-item .material-symbols-outlined {
    font-size: 1rem;
    color: var(--tertiary);
}

.license-details {
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
    color: var(--primary);
}

.license-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* License Application Section */
.license-application-section {
    padding: var(--spacing-3xl) 0;
}

.application-content {
    display: flex;
    justify-content: center;
}

.application-form {
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
    color: var(--primary);
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
    border-color: var(--primary);
    box-shadow: 0 0 0 2px var(--primary-container);
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
    border-color: var(--primary);
    background-color: var(--primary-container);
}

.file-upload-label .material-symbols-outlined {
    font-size: 2rem;
    color: var(--primary);
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
    background-color: var(--primary);
    border-color: var(--primary);
}

.checkbox-label input[type="checkbox"]:checked + .checkmark::after {
    content: '✓';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: var(--on-primary);
    font-size: 0.875rem;
    font-weight: 700;
}

.form-actions {
    display: flex;
    gap: var(--spacing-lg);
    justify-content: center;
    margin-top: var(--spacing-xl);
}

/* License Status Section */
.license-status-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.status-check-content {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xl);
    align-items: center;
}

.status-check-form {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    max-width: 600px;
    width: 100%;
}

.status-results {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    max-width: 800px;
    width: 100%;
}

.results-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
    text-align: center;
}

.status-card {
    background-color: var(--surface-container);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
}

.status-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: var(--spacing-lg);
}

.status-icon {
    width: 3rem;
    height: 3rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.status-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.status-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.875rem;
    font-weight: 600;
    text-transform: uppercase;
}

.status-badge.processing {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.status-content h4 {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
}

.status-details {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-md);
    margin-bottom: var(--spacing-lg);
}

.status-timeline {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-lg);
}

.timeline-item {
    display: flex;
    gap: var(--spacing-lg);
    align-items: flex-start;
}

.timeline-dot {
    width: 1rem;
    height: 1rem;
    border-radius: 50%;
    background-color: var(--surface-variant);
    flex-shrink: 0;
    margin-top: 0.25rem;
}

.timeline-item.completed .timeline-dot {
    background-color: var(--tertiary);
}

.timeline-item.active .timeline-dot {
    background-color: var(--primary);
}

.timeline-content h5 {
    font-size: 1rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: var(--spacing-xs);
}

.timeline-content p {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    margin: 0;
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
    color: var(--primary);
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
    
    .license-types-grid {
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
    
    .license-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .application-form {
        padding: var(--spacing-lg);
    }
    
    .status-check-form,
    .status-results {
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
    
    .license-actions {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .license-actions .btn {
        width: 100%;
    }
}
</style>

<script>
// Quick action functions
function openNewLicense() {
    document.getElementById('license-application').scrollIntoView({ behavior: 'smooth' });
}

function openLicenseRenewal() {
    alert('License renewal portal would open here. In production, this would show renewal forms, payment options, and renewal status tracking.');
}

function openLicenseStatus() {
    document.getElementById('license-status-section').scrollIntoView({ behavior: 'smooth' });
}

function openCompliance() {
    alert('Compliance check portal would open here. In production, this would show compliance requirements, checklists, and verification tools.');
}

function openPermits() {
    alert('Special permits portal would open here. In production, this would show special permit applications, requirements, and approval processes.');
}

function openInspections() {
    alert('Inspection scheduling portal would open here. In production, this would show inspection calendars, booking tools, and inspection reports.');
}

// License type actions
document.querySelectorAll('.license-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Apply')) {
        button.addEventListener('click', function() {
            const licenseTitle = this.closest('.license-card').querySelector('.license-title').textContent;
            alert(`Applying for: "${licenseTitle}"`);
        });
    }
});

document.querySelectorAll('.license-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Requirements')) {
        button.addEventListener('click', function() {
            const licenseTitle = this.closest('.license-card').querySelector('.license-title').textContent;
            alert(`Viewing requirements for: "${licenseTitle}"`);
        });
    }
});

// License application form submission
document.getElementById('licenseApplicationForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate required fields
    const businessName = document.querySelector('input[placeholder*="business name"]').value;
    const registrationNumber = document.querySelector('input[placeholder*="registration number"]').value;
    const licenseType = document.querySelector('select[required]').value;
    const businessCategory = document.querySelectorAll('select[required]')[1].value;
    const businessDescription = document.querySelector('textarea[required]').value;
    const startDate = document.querySelector('input[type="date"]').value;
    const employees = document.querySelector('input[type="number"]').value;
    const businessAddress = document.querySelector('input[placeholder*="business address"]').value;
    const area = document.querySelectorAll('select[required]')[2].value;
    const propertyType = document.querySelectorAll('select[required]')[3].value;
    const businessSize = document.querySelectorAll('input[type="number"]')[1].value;
    const parkingSpaces = document.querySelectorAll('input[type="number"]')[2].value;
    const contactPerson = document.querySelector('input[placeholder*="contact person"]').value;
    const position = document.querySelector('input[placeholder*="position"]').value;
    const phone = document.querySelector('input[placeholder*="phone"]').value;
    const email = document.querySelector('input[placeholder*="email"]').value;
    const documents = document.querySelectorAll('input[name="documents"]:checked');
    const howHeard = document.querySelectorAll('select[required]')[4].value;
    const declaration = document.querySelector('input[name="declaration"]:checked');
    
    if (!businessName || !registrationNumber || !licenseType || !businessCategory || !businessDescription || !startDate || !employees || !businessAddress || !area || !propertyType || !businessSize || !parkingSpaces || !contactPerson || !position || !phone || !email || documents.length !== 4 || !howHeard || !declaration) {
        alert('Please fill in all required fields and upload all required documents.');
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
    
    alert('Business license application submitted successfully! We will review your application and contact you within 5-10 business days regarding the status and next steps.');
    // In production, this would submit the application
});

// Status check form submission
document.getElementById('statusCheckForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate required fields
    const applicationNumber = document.querySelector('input[placeholder*="application number"]').value;
    const businessName = document.querySelector('input[placeholder*="business name"]').value;
    const phone = document.querySelector('input[placeholder*="phone"]').value;
    const email = document.querySelector('input[placeholder*="email"]').value;
    
    if (!applicationNumber || !businessName || !phone || !email) {
        alert('Please fill in all required fields.');
        return;
    }
    
    // Show status results
    document.getElementById('statusResults').style.display = 'block';
    
    alert('Application status retrieved successfully! Your application is currently being processed.');
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

// Auto-refresh licensing statistics
function refreshLicensingStats() {
    // In production, this would fetch real-time licensing statistics
    console.log('Refreshing business licensing statistics...');
    
    // Simulate license count updates
    const licenseCountElement = document.querySelector('.stat-number');
    if (licenseCountElement && licenseCountElement.textContent.includes(',')) {
        // Simulate real-time license applications
        const currentCount = parseInt(licenseCountElement.textContent.replace(',', ''));
        const increment = Math.floor(Math.random() * 3) + 1;
        const newCount = currentCount + increment;
        licenseCountElement.textContent = newCount.toLocaleString();
    }
}

// Refresh statistics every 60 seconds
setInterval(refreshLicensingStats, 60000);
</script>
