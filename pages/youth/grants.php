<?php
/**
 * Bamenda City Council E-Governance Platform
 * Youth Grants Page
 */

// Set page metadata
$page_title = 'Youth Grant Opportunities | Bamenda City Council';
$page_description = 'Access youth grant opportunities, funding programs, scholarships, and financial support for young entrepreneurs and students in Bamenda.';
$page_keywords = 'youth grants, scholarships, funding opportunities, youth entrepreneurship, Bamenda youth programs';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Youth', 'url' => '../index.php'],
    ['title' => 'Grant Opportunities', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero youth-grants-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-youth-programs.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Youth Grants</span>
            <h1 class="hero-title">Youth Grant Opportunities</h1>
            <p class="hero-subtitle">
                Comprehensive grant opportunities including business startup funding, education scholarships, innovation grants, and financial support programs designed to empower young people in Bamenda.
            </p>
            <div class="hero-actions">
                <a href="#grant-programs" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">savings</span>
                    Grant Programs
                </a>
                <a href="#grant-application" class="btn btn-lg btn-outline">
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
            <h2 class="section-title">Grant Actions</h2>
            <p class="section-subtitle">Quick access to grant opportunities</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openBusinessGrants()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">store</span>
                </div>
                <h3 class="action-title">Business Grants</h3>
                <p class="action-description">Startup funding</p>
            </div>

            <div class="action-card" onclick="openEducationGrants()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <h3 class="action-title">Education Grants</h3>
                <p class="action-description">Scholarships</p>
            </div>

            <div class="action-card" onclick="openInnovationGrants()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">lightbulb</span>
                </div>
                <h3 class="action-title">Innovation Grants</h3>
                <p class="action-description">Creative projects</p>
            </div>

            <div class="action-card" onclick="openSportsGrants()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">sports_soccer</span>
                </div>
                <h3 class="action-title">Sports Grants</h3>
                <p class="action-description">Athletic support</p>
            </div>

            <div class="action-card" onclick="openArtsGrants()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">palette</span>
                </div>
                <h3 class="action-title">Arts Grants</h3>
                <p class="action-description">Cultural projects</p>
            </div>

            <div class="action-card" onclick="openCommunityGrants()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <h3 class="action-title">Community Grants</h3>
                <p class="action-description">Social impact</p>
            </div>
        </div>
    </div>
</section>

<!-- Grants Statistics -->
<section class="grants-stats-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Grants Overview</h2>
            <p class="section-subtitle">Real-time youth grants statistics</p>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">savings</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">₣450M</div>
                    <div class="stat-label">Total Grants Distributed</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+₣89M this year</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">person</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">3,456</div>
                    <div class="stat-label">Youth Benefited</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+892 youth</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">card_giftcard</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">45</div>
                    <div class="stat-label">Active Grant Programs</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+12 programs</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">store</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">234</div>
                    <div class="stat-label">Businesses Started</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+67 businesses</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">567</div>
                    <div class="stat-label">Education Grants Awarded</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+123 grants</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">schedule</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">14 days</div>
                    <div class="stat-label">Avg. Processing Time</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_down</span>
                        <span>-3 days improvement</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Grant Programs -->
<section class="grant-programs-section" id="grant-programs">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Available Grant Programs</h2>
            <p class="section-subtitle">Current grant opportunities for youth</p>
        </div>

        <div class="programs-grid">
            <!-- Business Startup Grants -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">store</span>
                    </div>
                    <div class="program-badge popular">Popular</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Business Startup Grants</h3>
                    <p class="program-description">Funding support for young entrepreneurs to start and grow their businesses with seed capital, mentorship, and business development services.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Seed capital up to ₣5M</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Business mentorship program</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Technical assistance</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Market access support</span>
                        </div>
                    </div>
                    <div class="program-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">savings</span>
                            <span>Amount: ₣500K - ₣5M</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Processing: 7-14 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">person</span>
                            <span>Age: 18-35 years</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- Education Scholarships -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">school</span>
                    </div>
                    <div class="program-badge active">Active</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Education Scholarships</h3>
                    <p class="program-description">Comprehensive scholarship program covering tuition, books, and living expenses for students pursuing higher education and vocational training.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Full tuition coverage</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Book and material allowance</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Living expenses stipend</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Academic support services</span>
                        </div>
                    </div>
                    <div class="program-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">savings</span>
                            <span>Amount: ₣200K - ₣2M/year</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Processing: 10-14 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">school</span>
                            <span>For: Students 16-25 years</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- Innovation & Technology Grants -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">lightbulb</span>
                    </div>
                    <div class="program-badge expanding">Expanding</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Innovation & Technology Grants</h3>
                    <p class="program-description">Funding for innovative projects, technology startups, research and development, and digital transformation initiatives by young innovators.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Research and development funding</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Technology incubator access</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Innovation challenge prizes</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Technical mentorship</span>
                        </div>
                    </div>
                    <div class="program-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">savings</span>
                            <span>Amount: ₣1M - ₣10M</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Processing: 14-21 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">lightbulb</span>
                            <span>For: Tech innovators 18-30</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- Sports & Athletics Grants -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">sports_soccer</span>
                    </div>
                    <div class="program-badge popular">Popular</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Sports & Athletics Grants</h3>
                    <p class="program-description">Support for young athletes including training expenses, equipment, competition fees, and sports development programs.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Training program funding</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Sports equipment provision</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Competition travel support</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Coaching and mentorship</span>
                        </div>
                    </div>
                    <div class="program-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">savings</span>
                            <span>Amount: ₣100K - ₣1M</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Processing: 7-10 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">sports_soccer</span>
                            <span>For: Athletes 12-25 years</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- Arts & Culture Grants -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">palette</span>
                    </div>
                    <div class="program-badge new">New</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Arts & Culture Grants</h3>
                    <p class="program-description">Funding for young artists, cultural projects, creative initiatives, and preservation of cultural heritage through artistic expression.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Art project funding</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Exhibition support</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Cultural event sponsorship</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Artistic development programs</span>
                        </div>
                    </div>
                    <div class="program-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">savings</span>
                            <span>Amount: ₣200K - ₣3M</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Processing: 10-14 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">palette</span>
                            <span>For: Artists 16-30 years</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- Community Impact Grants -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">groups</span>
                    </div>
                    <div class="program-badge expanding">Expanding</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Community Impact Grants</h3>
                    <p class="program-description">Support for youth-led community projects, social enterprises, environmental initiatives, and programs that create positive social impact.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Community project funding</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Social enterprise support</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Environmental project grants</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Volunteer program support</span>
                        </div>
                    </div>
                    <div class="program-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">savings</span>
                            <span>Amount: ₣300K - ₣5M</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Processing: 14-21 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>For: Youth groups 15-35</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Grant Application -->
<section class="grant-application-section" id="grant-application">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Grant Application</h2>
            <p class="section-subtitle">Apply for youth grant opportunities</p>
        </div>

        <div class="application-content">
            <div class="application-form">
                <h3 class="form-title">Youth Grant Application Form</h3>
                <form id="grantApplicationForm">
                    <div class="form-section">
                        <h4 class="section-title">Personal Information</h4>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Full Name *</label>
                                <input type="text" class="form-input" placeholder="Enter your full name" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Date of Birth *</label>
                                <input type="date" class="form-input" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Gender *</label>
                                <select class="form-select" required>
                                    <option value="">Select gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Phone Number *</label>
                                <input type="tel" class="form-input" placeholder="+237 233 000 000" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Email Address *</label>
                                <input type="email" class="form-input" placeholder="your@email.com" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Residential Area *</label>
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
                        </div>

                        <div class="form-group">
                            <label class="form-label">Residential Address *</label>
                            <input type="text" class="form-input" placeholder="Enter your full residential address" required>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Grant Information</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Grant Program *</label>
                            <select class="form-select" required>
                                <option value="">Select grant program</option>
                                <option value="business-startup">Business Startup Grants</option>
                                <option value="education-scholarship">Education Scholarships</option>
                                <option value="innovation-technology">Innovation & Technology Grants</option>
                                <option value="sports-athletics">Sports & Athletics Grants</option>
                                <option value="arts-culture">Arts & Culture Grants</option>
                                <option value="community-impact">Community Impact Grants</option>
                            </select>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Amount Requested *</label>
                                <input type="number" class="form-input" placeholder="Enter amount in FCFA" min="0" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Project Duration *</label>
                                <select class="form-select" required>
                                    <option value="">Select duration</option>
                                    <option value="3-months">3 months</option>
                                    <option value="6-months">6 months</option>
                                    <option value="1-year">1 year</option>
                                    <option value="2-years">2 years</option>
                                    <option value="3-years">3 years</option>
                                    <option value="ongoing">Ongoing</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Project Title *</label>
                            <input type="text" class="form-input" placeholder="Enter your project title" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Project Description *</label>
                            <textarea class="form-textarea" rows="6" placeholder="Provide a detailed description of your project, including objectives, activities, and expected outcomes" required></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Budget Breakdown *</label>
                            <textarea class="form-textarea" rows="4" placeholder="Provide a detailed breakdown of how you plan to use the grant funds" required></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Expected Impact *</label>
                            <textarea class="form-textarea" rows="4" placeholder="Describe the expected impact of your project on yourself and the community" required></textarea>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Supporting Documents</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Required Documents *</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="documents" value="id" required>
                                    <span class="checkmark"></span>
                                    National ID Card or Birth Certificate
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="documents" value="passport" required>
                                    <span class="checkmark"></span>
                                    Passport-sized Photograph
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="documents" value="proposal" required>
                                    <span class="checkmark"></span>
                                    Detailed Project Proposal
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="documents" value="budget" required>
                                    <span class="checkmark"></span>
                                    Detailed Budget Document
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Upload Documents</label>
                            <div class="file-upload">
                                <input type="file" id="grantUpload" accept=".pdf,.jpg,.jpeg,.png,.doc,.docx" multiple>
                                <label for="grantUpload" class="file-upload-label">
                                    <span class="material-symbols-outlined">upload_file</span>
                                    <span>Upload supporting documents</span>
                                    <small>PDF, DOC, JPG, PNG files (Max 10MB per file)</small>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Additional Information</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Previous Grants Received</label>
                            <textarea class="form-textarea" rows="3" placeholder="List any previous grants or funding you have received"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">References *</label>
                            <textarea class="form-textarea" rows="3" placeholder="Provide names and contact information of two references who can support your application" required></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">How did you hear about our grant programs? *</label>
                            <select class="form-select" required>
                                <option value="">Select option</option>
                                <option value="website">City Council Website</option>
                                <option value="social-media">Social Media</option>
                                <option value="school">School/University</option>
                                <option value="community">Community Center</option>
                                <option value="friend">Friend/Family</option>
                                <option value="youth-council">Youth Council</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Declaration *</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="declaration" required>
                                    <span class="checkmark"></span>
                                    I declare that all information provided is true and accurate. I understand that false information may result in the rejection of my application and possible legal action. I agree to comply with all grant program requirements and reporting obligations.
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

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Common questions about youth grants</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Who is eligible for youth grants?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Eligibility varies by program but generally includes youth aged 15-35 who are residents of Bamenda. Specific age requirements apply to different grant categories, and some programs may have additional eligibility criteria.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How long does the application process take?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Processing time varies by program: Business grants 7-14 days, education scholarships 10-14 days, innovation grants 14-21 days, sports grants 7-10 days, arts grants 10-14 days, and community grants 14-21 days.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What documents are required?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Required documents typically include national ID or birth certificate, passport photo, detailed project proposal, budget document, and additional documents specific to your grant category such as academic records for education grants.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Can I apply for multiple grants?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, you can apply for multiple grants if you meet eligibility criteria. However, you cannot receive funding for the same project from multiple sources. Each application is evaluated independently.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What are the reporting requirements?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Grant recipients must submit regular progress reports, financial statements, and impact reports. Specific requirements vary by program and are outlined in the grant agreement. Failure to comply may affect future funding opportunities.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What happens if my application is rejected?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>If your application is rejected, you will receive feedback on the decision. You can reapply in the next funding cycle after addressing the feedback. We also provide guidance on improving future applications.</p>
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
/* Youth Grants Page Styles */
.youth-grants-hero {
    background: linear-gradient(135deg, var(--tertiary) 0%, var(--tertiary-container) 100%);
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
    background-color: var(--tertiary);
    color: var(--on-tertiary);
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
    color: var(--tertiary);
    margin-bottom: var(--spacing-md);
}

.action-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
}

/* Grants Statistics Section */
.grants-stats-section {
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
    background-color: var(--tertiary);
    color: var(--on-tertiary);
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
    color: var(--tertiary);
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

/* Grant Programs Section */
.grant-programs-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.programs-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.program-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.program-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.program-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.program-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--tertiary);
    color: var(--on-tertiary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.program-icon .material-symbols-outlined {
    font-size: 2rem;
}

.program-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.program-badge.popular {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.program-badge.active {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.program-badge.expanding {
    background-color: var(--primary);
    color: var(--on-primary);
}

.program-badge.new {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.program-content {
    padding: var(--spacing-lg);
}

.program-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--tertiary);
    margin-bottom: var(--spacing-md);
}

.program-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.program-features {
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

.program-details {
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
    color: var(--tertiary);
}

.program-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Grant Application Section */
.grant-application-section {
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
    color: var(--tertiary);
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
    border-color: var(--tertiary);
    box-shadow: 0 0 0 2px var(--tertiary-container);
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
    border-color: var(--tertiary);
    background-color: var(--tertiary-container);
}

.file-upload-label .material-symbols-outlined {
    font-size: 2rem;
    color: var(--tertiary);
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
    background-color: var(--tertiary);
    border-color: var(--tertiary);
}

.checkbox-label input[type="checkbox"]:checked + .checkmark::after {
    content: '✓';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: var(--on-tertiary);
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
    color: var(--tertiary);
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
    
    .programs-grid {
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
    
    .program-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .application-form {
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
    
    .program-actions {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .program-actions .btn {
        width: 100%;
    }
}
</style>

<script>
// Quick action functions
function openBusinessGrants() {
    document.getElementById('grant-programs').scrollIntoView({ behavior: 'smooth' });
}

function openEducationGrants() {
    alert('Education grants portal would open here. In production, this would show scholarship opportunities, application forms, and education funding programs.');
}

function openInnovationGrants() {
    alert('Innovation grants portal would open here. In production, this would show technology grants, research funding, and innovation challenges.');
}

function openSportsGrants() {
    alert('Sports grants portal would open here. In production, this would show athletic funding, sports development programs, and competition support.');
}

function openArtsGrants() {
    alert('Arts grants portal would open here. In production, this would show cultural funding, artistic projects, and creative development programs.');
}

function openCommunityGrants() {
    alert('Community grants portal would open here. In production, this would show social impact grants, community projects, and environmental initiatives.');
}

// Program actions
document.querySelectorAll('.program-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Apply')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
            alert(`Applying for: "${programTitle}"`);
        });
    }
});

document.querySelectorAll('.program-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Learn')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
            alert(`Learning more about: "${programTitle}"`);
        });
    }
});

// Grant application form submission
document.getElementById('grantApplicationForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate required fields
    const fullName = document.querySelector('input[placeholder*="full name"]').value;
    const dateOfBirth = document.querySelector('input[type="date"]').value;
    const gender = document.querySelector('select[required]').value;
    const phone = document.querySelector('input[placeholder*="phone"]').value;
    const email = document.querySelector('input[placeholder*="email"]').value;
    const area = document.querySelectorAll('select[required]')[1].value;
    const address = document.querySelector('input[placeholder*="address"]').value;
    const grantProgram = document.querySelectorAll('select[required]')[2].value;
    const amount = document.querySelector('input[placeholder*="amount"]').value;
    const duration = document.querySelectorAll('select[required]')[3].value;
    const projectTitle = document.querySelector('input[placeholder*="project title"]').value;
    const projectDescription = document.querySelector('textarea[required]').value;
    const budget = document.querySelectorAll('textarea[required]')[1].value;
    const impact = document.querySelectorAll('textarea[required]')[2].value;
    const documents = document.querySelectorAll('input[name="documents"]:checked');
    const references = document.querySelectorAll('textarea[required]')[3].value;
    const howHeard = document.querySelectorAll('select[required]')[4].value;
    const declaration = document.querySelector('input[name="declaration"]:checked');
    
    if (!fullName || !dateOfBirth || !gender || !phone || !email || !area || !address || !grantProgram || !amount || !duration || !projectTitle || !projectDescription || !budget || !impact || documents.length !== 4 || !references || !howHeard || !declaration) {
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
    
    // Validate age (15-35 years)
    const birthDate = new Date(dateOfBirth);
    const today = new Date();
    const age = Math.floor((today - birthDate) / (365.25 * 24 * 60 * 60 * 1000));
    if (age < 15 || age > 35) {
        alert('Age must be between 15 and 35 years to be eligible for youth grants.');
        return;
    }
    
    // Validate minimum amount
    if (amount < 100000) {
        alert('Minimum grant amount is ₣100,000.');
        return;
    }
    
    alert('Grant application submitted successfully! Your application ID is #GRANT2024001234. We will review your application and contact you within 14-21 business days regarding the status and next steps.');
    // In production, this would submit the application
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

// Auto-refresh grants statistics
function refreshGrantsStats() {
    // In production, this would fetch real-time grants statistics
    console.log('Refreshing youth grants statistics...');
    
    // Simulate grant amount updates
    const grantElement = document.querySelector('.stat-number');
    if (grantElement && grantElement.textContent.includes('M')) {
        // Simulate real-time grant distribution
        const currentValue = parseFloat(grantElement.textContent.replace('₣', '').replace('M', ''));
        const increment = Math.random() * 0.5;
        const newValue = currentValue + increment;
        grantElement.textContent = `₣${newValue.toFixed(1)}M`;
    }
}

// Refresh statistics every 60 seconds
setInterval(refreshGrantsStats, 60000);
</script>
