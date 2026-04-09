<?php
/**
 * Bamenda City Council E-Governance Platform
 * Civic Engagement Petitions Page
 */

// Set page metadata
$page_title = 'Civic Petitions | Bamenda City Council';
$page_description = 'Access civic petitions, community initiatives, public participation platforms, and democratic engagement tools for Bamenda residents.';
$page_keywords = 'civic petitions, community initiatives, public participation, democratic engagement, Bamenda civic engagement';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Civic Engagement', 'url' => '../index.php'],
    ['title' => 'Petitions', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero civic-petitions-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-civic-engagement.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Civic Engagement</span>
            <h1 class="hero-title">Civic Petitions & Initiatives</h1>
            <p class="hero-subtitle">
                Empowering democratic participation through petitions, community initiatives, and civic engagement platforms for active citizen involvement in Bamenda's development.
            </p>
            <div class="hero-actions">
                <a href="#active-petitions" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">fact_check</span>
                    Active Petitions
                </a>
                <a href="#create-petition" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">add_circle</span>
                    Start Petition
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Civic Actions</h2>
            <p class="section-subtitle">Quick access to civic engagement and participation tools</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openActivePetitions()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">fact_check</span>
                </div>
                <h3 class="action-title">Active Petitions</h3>
                <p class="action-description">View and sign active civic petitions</p>
            </div>

            <div class="action-card" onclick="openCreatePetition()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">add_circle</span>
                </div>
                <h3 class="action-title">Create Petition</h3>
                <p class="action-description">Start a new civic petition or initiative</p>
            </div>

            <div class="action-card" onclick="openCommunityInitiatives()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <h3 class="action-title">Community Initiatives</h3>
                <p class="action-description">Explore community-led initiatives</p>
            </div>

            <div class="action-card" onclick="openPublicMeetings()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">meeting_room</span>
                </div>
                <h3 class="action-title">Public Meetings</h3>
                <p class="action-description">Join public meetings and discussions</p>
            </div>

            <div class="action-card" onclick="openCivicEducation()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <h3 class="action-title">Civic Education</h3>
                <p class="action-description">Learn about civic rights and responsibilities</p>
            </div>

            <div class="action-card" onclick="openParticipationTools()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">how_to_vote</span>
                </div>
                <h3 class="action-title">Participation Tools</h3>
                <p class="action-description">Access democratic participation tools</p>
            </div>
        </div>
    </div>
</section>

<!-- Civic Engagement Statistics -->
<section class="civic-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">fact_check</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">45</div>
                    <div class="stat-label">Active Petitions</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+12 this month</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">8,234</div>
                    <div class="stat-label">Active Participants</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+567 this month</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">verified</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">23</div>
                    <div class="stat-label">Completed Initiatives</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+5 this quarter</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">how_to_vote</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">78%</div>
                    <div class="stat-label">Participation Rate</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+12% increase</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Active Petitions -->
<section class="active-petitions-section" id="active-petitions">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Active Civic Petitions</h2>
            <p class="section-subtitle">Current petitions seeking community support and action</p>
        </div>

        <div class="petitions-grid">
            <!-- Petition 1 -->
            <div class="petition-card">
                <div class="petition-header">
                    <div class="petition-category">Infrastructure</div>
                    <div class="petition-status active">Active</div>
                </div>
                <div class="petition-content">
                    <h3 class="petition-title">Improve Road Infrastructure in Nkwen Area</h3>
                    <p class="petition-description">
                        Petition for the improvement and maintenance of road infrastructure in the Nkwen area to enhance accessibility and safety for residents.
                    </p>
                    <div class="petition-progress">
                        <div class="progress-header">
                            <span class="progress-label">Signature Progress</span>
                            <span class="progress-count">2,345 / 3,000</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 78%"></div>
                        </div>
                        <div class="progress-percentage">78% Complete</div>
                    </div>
                    <div class="petition-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">person</span>
                            <span>Started by: John M. Nkwen</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">calendar_today</span>
                            <span>Deadline: April 30, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>15 days remaining</span>
                        </div>
                    </div>
                    <div class="petition-actions">
                        <button class="btn btn-primary" onclick="signPetition('road-infrastructure')">Sign Petition</button>
                        <button class="btn btn-outline" onclick="viewPetitionDetails('road-infrastructure')">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Petition 2 -->
            <div class="petition-card">
                <div class="petition-header">
                    <div class="petition-category">Environment</div>
                    <div class="petition-status active">Active</div>
                </div>
                <div class="petition-content">
                    <h3 class="petition-title">Establish Green Spaces in Bamenda City Center</h3>
                    <p class="petition-description">
                        Community initiative to create and maintain green spaces and parks in the city center for environmental benefits and recreation.
                    </p>
                    <div class="petition-progress">
                        <div class="progress-header">
                            <span class="progress-label">Signature Progress</span>
                            <span class="progress-count">1,890 / 2,500</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 76%"></div>
                        </div>
                        <div class="progress-percentage">76% Complete</div>
                    </div>
                    <div class="petition-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">person</span>
                            <span>Started by: Environmental Alliance</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">calendar_today</span>
                            <span>Deadline: May 15, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>30 days remaining</span>
                        </div>
                    </div>
                    <div class="petition-actions">
                        <button class="btn btn-primary" onclick="signPetition('green-spaces')">Sign Petition</button>
                        <button class="btn btn-outline" onclick="viewPetitionDetails('green-spaces')">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Petition 3 -->
            <div class="petition-card">
                <div class="petition-header">
                    <div class="petition-category">Education</div>
                    <div class="petition-status active">Active</div>
                </div>
                <div class="petition-content">
                    <h3 class="petition-title">Upgrade Digital Infrastructure in Public Schools</h3>
                    <p class="petition-description">
                        Initiative to modernize digital infrastructure and provide computer labs and internet access in public schools across Bamenda.
                    </p>
                    <div class="petition-progress">
                        <div class="progress-header">
                            <span class="progress-label">Signature Progress</span>
                            <span class="progress-count">3,456 / 4,000</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 86%"></div>
                        </div>
                        <div class="progress-percentage">86% Complete</div>
                    </div>
                    <div class="petition-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">person</span>
                            <span>Started by: Parents Association</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">calendar_today</span>
                            <span>Deadline: April 10, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>5 days remaining</span>
                        </div>
                    </div>
                    <div class="petition-actions">
                        <button class="btn btn-primary" onclick="signPetition('digital-schools')">Sign Petition</button>
                        <button class="btn btn-outline" onclick="viewPetitionDetails('digital-schools')">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Petition 4 -->
            <div class="petition-card">
                <div class="petition-header">
                    <div class="petition-category">Health</div>
                    <div class="petition-status active">Active</div>
                </div>
                <div class="petition-content">
                    <h3 class="petition-title">Establish Community Health Center in Bambili</h3>
                    <p class="petition-description">
                        Community petition for the establishment of a comprehensive health center to serve the healthcare needs of Bambili residents.
                    </p>
                    <div class="petition-progress">
                        <div class="progress-header">
                            <span class="progress-label">Signature Progress</span>
                            <span class="progress-count">1,234 / 2,000</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 62%"></div>
                        </div>
                        <div class="progress-percentage">62% Complete</div>
                    </div>
                    <div class="petition-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">person</span>
                            <span>Started by: Bambili Community</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">calendar_today</span>
                            <span>Deadline: May 30, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>45 days remaining</span>
                        </div>
                    </div>
                    <div class="petition-actions">
                        <button class="btn btn-primary" onclick="signPetition('health-center')">Sign Petition</button>
                        <button class="btn btn-outline" onclick="viewPetitionDetails('health-center')">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Petition 5 -->
            <div class="petition-card">
                <div class="petition-header">
                    <div class="petition-category">Safety</div>
                    <div class="petition-status active">Active</div>
                </div>
                <div class="petition-content">
                    <h3 class="petition-title">Install Street Lighting in Mile Four</h3>
                    <p class="petition-description">
                        Community initiative to install comprehensive street lighting in Mile Four to improve safety and security for residents.
                    </p>
                    <div class="petition-progress">
                        <div class="progress-header">
                            <span class="progress-label">Signature Progress</span>
                            <span class="progress-count">890 / 1,500</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 59%"></div>
                        </div>
                        <div class="progress-percentage">59% Complete</div>
                    </div>
                    <div class="petition-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">person</span>
                            <span>Started by: Mile Four Residents</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">calendar_today</span>
                            <span>Deadline: June 15, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>60 days remaining</span>
                        </div>
                    </div>
                    <div class="petition-actions">
                        <button class="btn btn-primary" onclick="signPetition('street-lighting')">Sign Petition</button>
                        <button class="btn btn-outline" onclick="viewPetitionDetails('street-lighting')">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Petition 6 -->
            <div class="petition-card">
                <div class="petition-header">
                    <div class="petition-category">Culture</div>
                    <div class="petition-status active">Active</div>
                </div>
                <div class="petition-content">
                    <h3 class="petition-title">Establish Cultural Center for Bamenda Heritage</h3>
                    <p class="petition-description">
                        Initiative to establish a cultural center to preserve and promote Bamenda's rich cultural heritage and traditional arts.
                    </p>
                    <div class="petition-progress">
                        <div class="progress-header">
                            <span class="progress-label">Signature Progress</span>
                            <span class="progress-count">2,100 / 3,500</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 60%"></div>
                        </div>
                        <div class="progress-percentage">60% Complete</div>
                    </div>
                    <div class="petition-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">person</span>
                            <span>Started by: Cultural Heritage Group</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">calendar_today</span>
                            <span>Deadline: July 31, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>90 days remaining</span>
                        </div>
                    </div>
                    <div class="petition-actions">
                        <button class="btn btn-primary" onclick="signPetition('cultural-center')">Sign Petition</button>
                        <button class="btn btn-outline" onclick="viewPetitionDetails('cultural-center')">View Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Create Petition -->
<section class="create-petition-section" id="create-petition">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Start a New Petition</h2>
            <p class="section-subtitle">Create a civic petition to mobilize community support for your initiative</p>
        </div>

        <div class="petition-form-content">
            <div class="form-info">
                <h3 class="info-title">Petition Guidelines</h3>
                <div class="guidelines-list">
                    <div class="guideline-item">
                        <div class="guideline-icon">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                        <div class="guideline-content">
                            <h4 class="guideline-title">Clear Purpose</h4>
                            <p class="guideline-description">Your petition should have a clear, specific, and achievable goal.</p>
                        </div>
                    </div>

                    <div class="guideline-item">
                        <div class="guideline-icon">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                        <div class="guideline-content">
                            <h4 class="guideline-title">Community Benefit</h4>
                            <p class="guideline-description">Petitions should address issues that benefit the broader community.</p>
                        </div>
                    </div>

                    <div class="guideline-item">
                        <div class="guideline-icon">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                        <div class="guideline-content">
                            <h4 class="guideline-title">Feasible Solution</h4>
                            <p class="guideline-description">Propose realistic solutions that can be implemented by authorities.</p>
                        </div>
                    </div>

                    <div class="guideline-item">
                        <div class="guideline-icon">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                        <div class="guideline-content">
                            <h4 class="guideline-title">Respectful Language</h4>
                            <p class="guideline-description">Use respectful and constructive language throughout your petition.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="petition-form">
                <h3 class="form-title">Petition Creation Form</h3>
                <form id="createPetitionForm">
                    <div class="form-section">
                        <h4 class="section-title">Petition Information</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Petition Title *</label>
                            <input type="text" class="form-input" placeholder="Enter a clear and compelling title" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Category *</label>
                            <select class="form-select" required>
                                <option value="">Select category</option>
                                <option value="infrastructure">Infrastructure</option>
                                <option value="environment">Environment</option>
                                <option value="education">Education</option>
                                <option value="health">Health</option>
                                <option value="safety">Safety & Security</option>
                                <option value="culture">Culture & Heritage</option>
                                <option value="social">Social Services</option>
                                <option value="economic">Economic Development</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Petition Description *</label>
                            <textarea class="form-textarea" rows="6" placeholder="Provide a detailed description of the issue and proposed solution" required></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Target Audience *</label>
                            <select class="form-select" required>
                                <option value="">Select target audience</option>
                                <option value="city-council">Bamenda City Council</option>
                                <option value="government">Government Agencies</option>
                                <option value="community">Community Leaders</option>
                                <option value="business">Business Community</option>
                                <option value="multiple">Multiple Stakeholders</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Desired Outcome *</label>
                            <textarea class="form-textarea" rows="4" placeholder="Clearly state what you want to achieve with this petition" required></textarea>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Signature Goals</h4>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Target Signatures *</label>
                                <input type="number" class="form-input" placeholder="Enter target number of signatures" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Deadline *</label>
                                <input type="date" class="form-input" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Minimum Signatures for Consideration</label>
                            <select class="form-select">
                                <option value="100">100 signatures</option>
                                <option value="500">500 signatures</option>
                                <option value="1000">1,000 signatures</option>
                                <option value="2000">2,000 signatures</option>
                                <option value="5000">5,000 signatures</option>
                                <option value="custom">Custom requirement</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Organizer Information</h4>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Your Name *</label>
                                <input type="text" class="form-input" placeholder="Enter your full name" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Organization (if applicable)</label>
                                <input type="text" class="form-input" placeholder="Enter organization name">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Phone Number *</label>
                                <input type="tel" class="form-input" placeholder="+237 233 000 000" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email Address *</label>
                                <input type="email" class="form-input" placeholder="your@email.com" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Residential Area *</label>
                            <select class="form-select" required>
                                <option value="">Select your area</option>
                                <option value="city-center">City Center</option>
                                <option value="nkwen">Nkwen</option>
                                <option value="mankon">Mankon</option>
                                <option value="bambili">Bambili</option>
                                <option value="bambui">Bambui</option>
                                <option value="mile-four">Mile Four</option>
                                <option value="mile-three">Mile Three</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Supporting Materials</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Background Information</label>
                            <textarea class="form-textarea" rows="4" placeholder="Provide background information and context for your petition"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Supporting Documents</label>
                            <div class="file-upload">
                                <input type="file" id="supportingDocs" multiple accept=".pdf,.doc,.docx,.jpg,.png">
                                <label for="supportingDocs" class="file-upload-label">
                                    <span class="material-symbols-outlined">upload_file</span>
                                    <span>Click to upload supporting documents</span>
                                    <small>PDF, DOC, DOCX, JPG, PNG (Max 10MB)</small>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Contact Information for Updates</label>
                            <input type="text" class="form-input" placeholder="How can supporters contact you for updates?">
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Terms and Conditions</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Petition Agreement *</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="agreement" required>
                                    <span class="checkmark"></span>
                                    I agree to the petition terms and conditions. I understand that this petition must be respectful, lawful, and serve the public interest. I acknowledge that the City Council reserves the right to review and moderate petitions.
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Privacy Consent *</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="privacy" required>
                                    <span class="checkmark"></span>
                                    I consent to the collection and processing of my personal information for the purpose of this petition. I understand that my name and organization may be displayed publicly as the petition organizer.
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="reset" class="btn btn-outline">Reset</button>
                        <button type="submit" class="btn btn-primary">Create Petition</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Community Initiatives -->
<section class="community-initiatives-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Community Initiatives</h2>
            <p class="section-subtitle">Successful community-led initiatives and civic engagement projects</p>
        </div>

        <div class="initiatives-grid">
            <!-- Initiative 1 -->
            <div class="initiative-card">
                <div class="initiative-header">
                    <div class="initiative-badge completed">Completed</div>
                    <div class="initiative-date">March 2024</div>
                </div>
                <div class="initiative-content">
                    <h3 class="initiative-title">Clean Bamenda Campaign</h3>
                    <p class="initiative-description">
                        Community-led environmental cleanup initiative that mobilized over 500 volunteers to clean public spaces and promote waste management.
                    </p>
                    <div class="initiative-stats">
                        <div class="stat-item">
                            <span class="stat-number">500+</span>
                            <span class="stat-label">Volunteers</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">12</span>
                            <span class="stat-label">Areas Cleaned</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">5 tons</span>
                            <span class="stat-label">Waste Collected</span>
                        </div>
                    </div>
                    <div class="initiative-outcome">
                        <h4 class="outcome-title">Key Outcomes:</h4>
                        <ul class="outcome-list">
                            <li>Improved cleanliness in 12 major areas</li>
                            <li>Established regular cleanup schedules</li>
                            <li>Created awareness about waste management</li>
                            <li>Partnership with city waste management services</li>
                        </ul>
                    </div>
                    <button class="btn btn-outline">View Case Study</button>
                </div>
            </div>

            <!-- Initiative 2 -->
            <div class="initiative-card">
                <div class="initiative-header">
                    <div class="initiative-badge completed">Completed</div>
                    <div class="initiative-date">February 2024</div>
                </div>
                <div class="initiative-content">
                    <h3 class="initiative-title">Youth Skills Development Program</h3>
                    <p class="initiative-description">
                        Community initiative providing vocational training and skills development for 200 youth in various trades and digital skills.
                    </p>
                    <div class="initiative-stats">
                        <div class="stat-item">
                            <span class="stat-number">200</span>
                            <span class="stat-label">Youth Trained</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">8</span>
                            <span class="stat-label">Skills Areas</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">75%</span>
                            <span class="stat-label">Employment Rate</span>
                        </div>
                    </div>
                    <div class="initiative-outcome">
                        <h4 class="outcome-title">Key Outcomes:</h4>
                        <ul class="outcome-list">
                            <li>150 youth gained employment</li>
                            <li>25 youth started businesses</li>
                            <li>Partnership with local businesses</li>
                            <li>Ongoing mentorship program</li>
                        </ul>
                    </div>
                    <button class="btn btn-outline">View Case Study</button>
                </div>
            </div>

            <!-- Initiative 3 -->
            <div class="initiative-card">
                <div class="initiative-header">
                    <div class="initiative-badge ongoing">Ongoing</div>
                    <div class="initiative-date">Started January 2024</div>
                </div>
                <div class="initiative-content">
                    <h3 class="initiative-title">Community Safety Watch</h3>
                    <p class="initiative-description">
                        Neighborhood safety initiative with volunteer patrols and community policing to improve security in residential areas.
                    </p>
                    <div class="initiative-stats">
                        <div class="stat-item">
                            <span class="stat-number">45</span>
                            <span class="stat-label">Volunteer Patrols</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">8</span>
                            <span class="stat-label">Neighborhoods</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">40%</span>
                            <span class="stat-label">Crime Reduction</span>
                        </div>
                    </div>
                    <div class="initiative-outcome">
                        <h4 class="outcome-title">Progress:</h4>
                        <ul class="outcome-list">
                            <li>Established patrol schedules</li>
                            <li>Partnership with local police</li>
                            <li>Community awareness campaigns</li>
                            <li>Emergency response system</li>
                        </ul>
                    </div>
                    <button class="btn btn-outline">View Progress</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Civic Education -->
<section class="civic-education-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Civic Education Resources</h2>
            <p class="section-subtitle">Learn about your civic rights, responsibilities, and democratic participation</p>
        </div>

        <div class="education-content">
            <div class="education-overview">
                <h3 class="overview-title">Understanding Civic Engagement</h3>
                <p class="overview-description">
                    Civic engagement is the foundation of democratic participation. Learn about your rights, responsibilities, 
                    and how you can actively contribute to community development and governance.
                </p>
            </div>

            <div class="education-modules">
                <div class="module-card">
                    <div class="module-icon">
                        <span class="material-symbols-outlined">gavel</span>
                    </div>
                    <h3 class="module-title">Civic Rights & Responsibilities</h3>
                    <p class="module-description">Understanding your fundamental rights and responsibilities as a citizen.</p>
                    <div class="module-topics">
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Constitutional rights</span>
                        </div>
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Voting rights</span>
                        </div>
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Civic duties</span>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-primary">Start Learning</button>
                </div>

                <div class="module-card">
                    <div class="module-icon">
                        <span class="material-symbols-outlined">account_balance</span>
                    </div>
                    <h3 class="module-title">Local Government Structure</h3>
                    <p class="module-description">Learn how local government works and how decisions are made.</p>
                    <div class="module-topics">
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>City council structure</span>
                        </div>
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Decision-making process</span>
                        </div>
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Budget participation</span>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-primary">Start Learning</button>
                </div>

                <div class="module-card">
                    <div class="module-icon">
                        <span class="material-symbols-outlined">how_to_vote</span>
                    </div>
                    <h3 class="module-title">Democratic Participation</h3>
                    <p class="module-description">Effective ways to participate in democratic processes and community decisions.</p>
                    <div class="module-topics">
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Voting processes</span>
                        </div>
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Public consultations</span>
                        </div>
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Community meetings</span>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-primary">Start Learning</button>
                </div>

                <div class="module-card">
                    <div class="module-icon">
                        <span class="material-symbols-outlined">groups</span>
                    </div>
                    <h3 class="module-title">Community Organizing</h3>
                    <p class="module-description">Skills and strategies for effective community organizing and mobilization.</p>
                    <div class="module-topics">
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Leadership skills</span>
                        </div>
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Mobilization strategies</span>
                        </div>
                        <div class="topic-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Coalition building</span>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-primary">Start Learning</button>
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
            <p class="section-subtitle">Common questions about civic petitions and engagement</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How do I create a civic petition?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>To create a civic petition, fill out the petition creation form with your proposal, target signatures, and deadline. Your petition will be reviewed for compliance with guidelines before being published. Make sure your petition has a clear purpose, benefits the community, and proposes feasible solutions.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What happens after a petition reaches its target signatures?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Once a petition reaches its target signatures, it's automatically forwarded to the relevant authorities for consideration. The petition organizer receives a formal acknowledgment, and the authorities are required to respond within 30 days with their decision or action plan.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Can anyone sign a petition?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, any Bamenda resident aged 18 and above can sign petitions. You'll need to provide basic information including name, phone number, and residential area to verify your residency. Each person can only sign a specific petition once.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How are petitions reviewed and approved?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Petitions are reviewed by the City Council's Civic Engagement Office within 48 hours of submission. They check for compliance with guidelines, clarity of purpose, and community benefit. Approved petitions are published on the platform, while rejected petitions receive feedback for improvement.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What types of issues can be addressed through petitions?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Petitions can address various community issues including infrastructure, environment, education, health, safety, culture, and social services. The issue should be within the jurisdiction of local authorities and have clear community benefits. Personal disputes or illegal activities cannot be addressed through petitions.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How can I track the progress of a petition I signed?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>You can track petition progress through your civic engagement dashboard. You'll receive updates when petitions reach milestones, when authorities respond, and when actions are taken. You can also opt-in for email or SMS notifications about petitions you've signed.</p>
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
/* Civic Petitions Page Styles */
.civic-petitions-hero {
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

/* Civic Statistics Section */
.civic-stats-section {
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

/* Active Petitions Section */
.active-petitions-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.petitions-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.petition-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.petition-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.petition-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.petition-category {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    background-color: var(--primary);
    color: var(--on-primary);
}

.petition-status {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.petition-status.active {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.petition-content {
    padding: var(--spacing-lg);
}

.petition-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.petition-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.petition-progress {
    margin-bottom: var(--spacing-lg);
}

.progress-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: var(--spacing-sm);
}

.progress-label {
    font-size: 0.875rem;
    font-weight: 600;
    color: var(--primary);
}

.progress-count {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.progress-bar {
    width: 100%;
    height: 8px;
    background-color: var(--surface-container);
    border-radius: var(--radius-full);
    overflow: hidden;
    margin-bottom: var(--spacing-sm);
}

.progress-fill {
    height: 100%;
    background-color: var(--primary);
    border-radius: var(--radius-full);
    transition: width 0.3s ease;
}

.progress-percentage {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
    text-align: center;
}

.petition-details {
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

.petition-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Create Petition Section */
.create-petition-section {
    padding: var(--spacing-3xl) 0;
}

.petition-form-content {
    display: grid;
    grid-template-columns: 1fr 2fr;
    gap: var(--spacing-2xl);
}

.form-info {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
}

.info-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
}

.guidelines-list {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-lg);
}

.guideline-item {
    display: flex;
    gap: var(--spacing-lg);
    align-items: flex-start;
}

.guideline-icon {
    width: 2.5rem;
    height: 2.5rem;
    background-color: var(--tertiary);
    color: var(--on-tertiary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.guideline-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.guideline-content {
    flex: 1;
}

.guideline-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.guideline-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
}

.petition-form {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-2xl);
    border: 1px solid var(--outline-variant);
}

.form-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
    text-align: center;
}

/* Community Initiatives Section */
.community-initiatives-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.initiatives-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.initiative-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.initiative-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.initiative-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.initiative-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.initiative-badge.completed {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.initiative-badge.ongoing {
    background-color: var(--primary);
    color: var(--on-primary);
}

.initiative-date {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.initiative-content {
    padding: var(--spacing-lg);
}

.initiative-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.initiative-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.initiative-stats {
    display: flex;
    justify-content: center;
    gap: var(--spacing-xl);
    margin-bottom: var(--spacing-lg);
}

.stat-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: var(--spacing-xs);
}

.stat-number {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary);
}

.stat-label {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
    text-transform: uppercase;
}

.initiative-outcome {
    margin-bottom: var(--spacing-lg);
}

.outcome-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.outcome-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.outcome-list li {
    padding: var(--spacing-xs) 0;
    color: var(--on-surface-variant);
    position: relative;
    padding-left: var(--spacing-lg);
    line-height: 1.5;
}

.outcome-list li::before {
    content: '•';
    position: absolute;
    left: 0;
    color: var(--primary);
    font-weight: 700;
}

/* Civic Education Section */
.civic-education-section {
    padding: var(--spacing-3xl) 0;
}

.education-content {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xl);
}

.education-overview {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.overview-title {
    font-size: 2rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
}

.overview-description {
    font-size: 1.125rem;
    color: var(--on-surface-variant);
    line-height: 1.8;
}

.education-modules {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.module-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.module-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.module-icon {
    width: 3rem;
    height: 3rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-md);
}

.module-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.module-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.module-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.module-topics {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

.topic-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.topic-item .material-symbols-outlined {
    font-size: 1rem;
    color: var(--tertiary);
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

/* FAQ Section */
.faq-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
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
    
    .petitions-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .petition-form-content {
        grid-template-columns: 1fr;
        gap: var(--spacing-xl);
    }
    
    .initiatives-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .education-modules {
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
    
    .petition-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .petition-form {
        padding: var(--spacing-lg);
    }
    
    .guidelines-list {
        gap: var(--spacing-md);
    }
    
    .guideline-item {
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: var(--spacing-md);
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
    
    .petition-actions {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .petition-actions .btn {
        width: 100%;
    }
    
    .initiative-stats {
        flex-direction: column;
        gap: var(--spacing-md);
    }
}
</style>

<script>
// Quick action functions
function openActivePetitions() {
    document.getElementById('active-petitions').scrollIntoView({ behavior: 'smooth' });
}

function openCreatePetition() {
    document.getElementById('create-petition').scrollIntoView({ behavior: 'smooth' });
}

function openCommunityInitiatives() {
    document.querySelector('.community-initiatives-section').scrollIntoView({ behavior: 'smooth' });
}

function openPublicMeetings() {
    alert('Public meetings section would open here. In production, this would show upcoming public meetings, town halls, and community discussions.');
}

function openCivicEducation() {
    document.querySelector('.civic-education-section').scrollIntoView({ behavior: 'smooth' });
}

function openParticipationTools() {
    alert('Participation tools section would open here. In production, this would show democratic participation tools, voting platforms, and engagement resources.');
}

// Petition actions
function signPetition(petitionId) {
    // Create modal for petition signing
    const modal = document.createElement('div');
    modal.style.cssText = `
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1000;
    `;
    
    modal.innerHTML = `
        <div style="background: white; padding: 2rem; border-radius: 1rem; max-width: 400px; width: 90%;">
            <h3 style="color: var(--primary); margin-bottom: 1rem;">Sign Petition</h3>
            <form id="signPetitionForm">
                <div style="margin-bottom: 1rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Full Name *</label>
                    <input type="text" style="width: 100%; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem;" placeholder="Enter your full name" required>
                </div>
                <div style="margin-bottom: 1rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Phone Number *</label>
                    <input type="tel" style="width: 100%; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem;" placeholder="+237 233 000 000" required>
                </div>
                <div style="margin-bottom: 1rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Residential Area *</label>
                    <select style="width: 100%; padding: 0.5rem; border: 1px solid #ccc; border-radius: 0.25rem;" required>
                        <option value="">Select your area</option>
                        <option value="city-center">City Center</option>
                        <option value="nkwen">Nkwen</option>
                        <option value="mankon">Mankon</option>
                        <option value="bambili">Bambili</option>
                        <option value="bambui">Bambui</option>
                        <option value="mile-four">Mile Four</option>
                        <option value="mile-three">Mile Three</option>
                    </select>
                </div>
                <div style="margin-bottom: 1rem;">
                    <label style="display: flex; align-items: center; gap: 0.5rem;">
                        <input type="checkbox" required>
                        <span>I support this petition and agree to be publicly listed as a signer</span>
                    </label>
                </div>
                <div style="display: flex; gap: 1rem;">
                    <button type="button" style="flex: 1; padding: 0.75rem; border: 1px solid #ccc; background: white; border-radius: 0.25rem; cursor: pointer;" onclick="this.closest('div[style]').remove()">Cancel</button>
                    <button type="submit" style="flex: 1; padding: 0.75rem; background: var(--primary); color: white; border: none; border-radius: 0.25rem; cursor: pointer;">Sign Petition</button>
                </div>
            </form>
        </div>
    `;
    
    document.body.appendChild(modal);
    
    // Handle form submission
    modal.querySelector('#signPetitionForm').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Thank you for signing the petition! Your signature has been recorded and you will receive updates on the petition progress.');
        modal.remove();
        // Update petition progress
        updatePetitionProgress(petitionId);
    });
    
    // Close modal when clicking outside
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            modal.remove();
        }
    });
}

function viewPetitionDetails(petitionId) {
    alert(`Viewing details for petition: ${petitionId}. In production, this would show full petition details, supporters list, and progress history.`);
}

function updatePetitionProgress(petitionId) {
    // Simulate progress update
    const progressBars = document.querySelectorAll('.progress-fill');
    progressBars.forEach(bar => {
        const currentWidth = parseFloat(bar.style.width);
        const newWidth = Math.min(currentWidth + 1, 100);
        bar.style.width = newWidth + '%';
    });
}

// Create petition form submission
document.getElementById('createPetitionForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate required fields
    const title = document.querySelector('input[placeholder*="title"]').value;
    const category = document.querySelector('select[required]').value;
    const description = document.querySelector('textarea[required]').value;
    const targetAudience = document.querySelectorAll('select[required]')[1].value;
    const desiredOutcome = document.querySelectorAll('textarea[required]')[1].value;
    const targetSignatures = document.querySelector('input[placeholder*="signatures"]').value;
    const deadline = document.querySelector('input[type="date"]').value;
    const name = document.querySelectorAll('input[required]')[1].value;
    const phone = document.querySelector('input[placeholder*="phone"]').value;
    const email = document.querySelector('input[placeholder*="email"]').value;
    const area = document.querySelectorAll('select[required]')[2].value;
    const agreement = document.querySelector('input[name="agreement"]:checked');
    const privacy = document.querySelector('input[name="privacy"]:checked');
    
    if (!title || !category || !description || !targetAudience || !desiredOutcome || !targetSignatures || !deadline || !name || !phone || !email || !area || !agreement || !privacy) {
        alert('Please fill in all required fields and accept the terms and conditions.');
        return;
    }
    
    alert('Petition submitted successfully! Your petition will be reviewed within 48 hours. You will receive an email notification once it\'s approved and published on the platform.');
    // In production, this would submit the petition creation request
});

// Initiative actions
document.querySelectorAll('.initiative-card .btn-outline').forEach(button => {
    if (button.textContent.includes('View')) {
        button.addEventListener('click', function() {
            const initiativeTitle = this.closest('.initiative-card').querySelector('.initiative-title').textContent;
            alert(`Viewing: "${initiativeTitle}"`);
        });
    }
});

// Education module actions
document.querySelectorAll('.module-card .btn-primary').forEach(button => {
    if (button.textContent.includes('Start')) {
        button.addEventListener('click', function() {
            const moduleTitle = this.closest('.module-card').querySelector('.module-title').textContent;
            alert(`Starting module: "${moduleTitle}"`);
        });
    }
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

// Auto-refresh petition statistics
function refreshPetitionStats() {
    // In production, this would fetch real-time petition statistics
    console.log('Refreshing petition statistics...');
    
    // Simulate signature count updates
    const progressCounts = document.querySelectorAll('.progress-count');
    progressCounts.forEach(count => {
        const currentText = count.textContent;
        const match = currentText.match(/(\d+) \/ (\d+)/);
        if (match) {
            const current = parseInt(match[1]);
            const target = parseInt(match[2]);
            const increment = Math.floor(Math.random() * 3) + 1;
            const newCurrent = Math.min(current + increment, target);
            count.textContent = `${newCurrent} / ${target}`;
            
            // Update progress bar
            const progressBar = count.closest('.petition-progress').querySelector('.progress-fill');
            const percentage = Math.round((newCurrent / target) * 100);
            progressBar.style.width = percentage + '%';
            
            // Update percentage text
            const percentageText = count.closest('.petition-progress').querySelector('.progress-percentage');
            percentageText.textContent = percentage + '% Complete';
        }
    });
}

// Refresh statistics every 30 seconds
setInterval(refreshPetitionStats, 30000);
</script>
