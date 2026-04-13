<?php
/**
 * Bamenda City Council E-Governance Platform
 * Public Consultations Page
 */

// Set page metadata
$page_title = 'Public Consultations | Bamenda City Council';
$page_description = 'Participate in public consultations, provide feedback on council policies, and engage in democratic decision-making.';
$page_keywords = 'public consultations, civic engagement, citizen participation, democratic processes, Bamenda governance';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Civic', 'url' => '/pages/civic-engagement/index.php'],
    ['title' => 'Public Consultations', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero consultations-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-civic-engagement.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Public Consultations</span>
            <h1 class="hero-title">Your Voice Matters</h1>
            <p class="hero-subtitle">
                Participate in public consultations, provide feedback on council policies, and help shape the future of Bamenda.
            </p>
            <div class="hero-actions">
                <a href="#active-consultations" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">forum</span>
                    Active Consultations
                </a>
                <a href="#participate" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">how_to_vote</span>
                    Participate Now
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Engagement Actions</h2>
            <p class="section-subtitle">Quick ways to participate in civic decision-making</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openActiveConsultations()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">forum</span>
                </div>
                <h3 class="action-title">Active Consultations</h3>
                <p class="action-description">View and participate in ongoing public consultations</p>
            </div>

            <div class="action-card" onclick="openPastConsultations()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">history</span>
                </div>
                <h3 class="action-title">Past Consultations</h3>
                <p class="action-description">Review previous consultations and their outcomes</p>
            </div>

            <div class="action-card" onclick="openSubmitProposal()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">lightbulb</span>
                </div>
                <h3 class="action-title">Submit Proposal</h3>
                <p class="action-description">Propose new topics for public consultation</p>
            </div>

            <div class="action-card" onclick="openConsultationCalendar()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">calendar_month</span>
                </div>
                <h3 class="action-title">Consultation Calendar</h3>
                <p class="action-description">View upcoming consultation schedule</p>
            </div>

            <div class="action-card" onclick="openGuidelines()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">menu_book</span>
                </div>
                <h3 class="action-title">Participation Guidelines</h3>
                <p class="action-description">Learn how to effectively participate in consultations</p>
            </div>

            <div class="action-card" onclick="openImpactReport()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">insights</span>
                </div>
                <h3 class="action-title">Impact Report</h3>
                <p class="action-description">See how citizen feedback has shaped policies</p>
            </div>
        </div>
    </div>
</section>

<!-- Consultation Statistics -->
<section class="consultation-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">forum</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">8</div>
                    <div class="stat-label">Active Consultations</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+2 this month</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">3,456</div>
                    <div class="stat-label">Active Participants</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+23% this month</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">comment</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">12,789</div>
                    <div class="stat-label">Total Feedback</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+156 this week</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">check_circle</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">85%</div>
                    <div class="stat-label">Implementation Rate</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+5% improvement</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Active Consultations -->
<section class="active-consultations-section" id="active-consultations">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Active Consultations</h2>
            <p class="section-subtitle">Current public consultations open for your participation</p>
        </div>

        <div class="consultations-filters">
            <div class="filter-row">
                <div class="form-group">
                    <label class="form-label">Category</label>
                    <select class="form-select" id="consultationCategory">
                        <option value="">All Categories</option>
                        <option value="urban-planning">Urban Planning</option>
                        <option value="infrastructure">Infrastructure</option>
                        <option value="environmental">Environmental</option>
                        <option value="social-services">Social Services</option>
                        <option value="economic">Economic Development</option>
                        <option value="education">Education</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Status</label>
                    <select class="form-select" id="consultationStatus">
                        <option value="">All Status</option>
                        <option value="open">Open for Feedback</option>
                        <option value="review">Under Review</option>
                        <option value="closing">Closing Soon</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Priority</label>
                    <select class="form-select" id="consultationPriority">
                        <option value="">All Priority</option>
                        <option value="high">High Priority</option>
                        <option value="medium">Medium Priority</option>
                        <option value="low">Low Priority</option>
                    </select>
                </div>
                <button class="btn btn-primary" onclick="filterConsultations()">Filter</button>
            </div>
        </div>

        <div class="consultations-grid">
            <!-- Urban Development Master Plan -->
            <div class="consultation-card">
                <div class="consultation-header">
                    <div class="consultation-badge high-priority">High Priority</div>
                    <div class="consultation-status open">Open for Feedback</div>
                </div>
                <div class="consultation-content">
                    <h3 class="consultation-title">Urban Development Master Plan 2024-2034</h3>
                    <p class="consultation-description">Comprehensive review of Bamenda's urban development strategy for the next decade, including zoning, infrastructure, and growth management.</p>
                    <div class="consultation-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">category</span>
                            <span>Urban Planning</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Closes: March 31, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>1,234 Participants</span>
                        </div>
                    </div>
                    <div class="consultation-progress">
                        <div class="progress-header">
                            <span class="progress-label">Participation Progress</span>
                            <span class="progress-percentage">78%</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 78%"></div>
                        </div>
                    </div>
                    <div class="consultation-actions">
                        <button class="btn btn-sm btn-primary">Participate Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                        <button class="btn btn-sm btn-outline">Share</button>
                    </div>
                </div>
            </div>

            <!-- Waste Management Policy -->
            <div class="consultation-card">
                <div class="consultation-header">
                    <div class="consultation-badge medium-priority">Medium Priority</div>
                    <div class="consultation-status open">Open for Feedback</div>
                </div>
                <div class="consultation-content">
                    <h3 class="consultation-title">Comprehensive Waste Management Policy</h3>
                    <p class="consultation-description">New waste management strategy focusing on recycling, reduction, and sustainable disposal methods for Bamenda.</p>
                    <div class="consultation-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">category</span>
                            <span>Environmental</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Closes: April 15, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>856 Participants</span>
                        </div>
                    </div>
                    <div class="consultation-progress">
                        <div class="progress-header">
                            <span class="progress-label">Participation Progress</span>
                            <span class="progress-percentage">62%</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 62%"></div>
                        </div>
                    </div>
                    <div class="consultation-actions">
                        <button class="btn btn-sm btn-primary">Participate Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                        <button class="btn btn-sm btn-outline">Share</button>
                    </div>
                </div>
            </div>

            <!-- Public Transport Enhancement -->
            <div class="consultation-card">
                <div class="consultation-header">
                    <div class="consultation-badge medium-priority">Medium Priority</div>
                    <div class="consultation-status closing">Closing Soon</div>
                </div>
                <div class="consultation-content">
                    <h3 class="consultation-title">Public Transport Enhancement Program</h3>
                    <p class="consultation-description">Proposals for improving public transportation including new routes, schedules, and infrastructure improvements.</p>
                    <div class="consultation-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">category</span>
                            <span>Infrastructure</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Closes: March 25, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>567 Participants</span>
                        </div>
                    </div>
                    <div class="consultation-progress">
                        <div class="progress-header">
                            <span class="progress-label">Participation Progress</span>
                            <span class="progress-percentage">45%</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 45%"></div>
                        </div>
                    </div>
                    <div class="consultation-actions">
                        <button class="btn btn-sm btn-primary">Participate Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                        <button class="btn btn-sm btn-outline">Share</button>
                    </div>
                </div>
            </div>

            <!-- Youth Employment Initiative -->
            <div class="consultation-card">
                <div class="consultation-header">
                    <div class="consultation-badge low-priority">Low Priority</div>
                    <div class="consultation-status review">Under Review</div>
                </div>
                <div class="consultation-content">
                    <h3 class="consultation-title">Youth Employment and Skills Development</h3>
                    <p class="consultation-description">Programs and initiatives to address youth unemployment and develop skills for the modern job market.</p>
                    <div class="consultation-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">category</span>
                            <span>Social Services</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Closes: April 30, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>423 Participants</span>
                        </div>
                    </div>
                    <div class="consultation-progress">
                        <div class="progress-header">
                            <span class="progress-label">Participation Progress</span>
                            <span class="progress-percentage">38%</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 38%"></div>
                        </div>
                    </div>
                    <div class="consultation-actions">
                        <button class="btn btn-sm btn-outline">View Details</button>
                        <button class="btn btn-sm btn-outline">View Results</button>
                        <button class="btn btn-sm btn-outline">Share</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="load-more-container">
            <button class="btn btn-outline" onclick="loadMoreConsultations()">Load More Consultations</button>
        </div>
    </div>
</section>

<!-- Participation Section -->
<section class="participation-section" id="participate">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">How to Participate</h2>
            <p class="section-subtitle">Easy steps to engage in public consultations</p>
        </div>

        <div class="participation-steps">
            <div class="step-card">
                <div class="step-number">1</div>
                <div class="step-icon">
                    <span class="material-symbols-outlined">search</span>
                </div>
                <h3 class="step-title">Find Consultations</h3>
                <p class="step-description">Browse active consultations that interest you and match your areas of expertise or concern.</p>
            </div>

            <div class="step-card">
                <div class="step-number">2</div>
                <div class="step-icon">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <h3 class="step-title">Review Documents</h3>
                <p class="step-description">Read consultation documents, proposals, and background information to understand the issues.</p>
            </div>

            <div class="step-card">
                <div class="step-number">3</div>
                <div class="step-icon">
                    <span class="material-symbols-outlined">rate_review</span>
                </div>
                <h3 class="step-title">Provide Feedback</h3>
                <p class="step-description">Share your opinions, suggestions, and concerns through structured feedback forms.</p>
            </div>

            <div class="step-card">
                <div class="step-number">4</div>
                <div class="step-icon">
                    <span class="material-symbols-outlined">forum</span>
                </div>
                <h3 class="step-title">Engage in Discussion</h3>
                <p class="step-description">Participate in discussions with other citizens and council representatives.</p>
            </div>

            <div class="step-card">
                <div class="step-number">5</div>
                <div class="step-icon">
                    <span class="material-symbols-outlined">track_changes</span>
                </div>
                <h3 class="step-title">Track Progress</h3>
                <p class="step-description">Monitor how your feedback influences policy decisions and implementation.</p>
            </div>
        </div>

        <div class="participation-benefits">
            <h3>Why Participate?</h3>
            <div class="benefits-grid">
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <span class="material-symbols-outlined">record_voice_over</span>
                    </div>
                    <h4>Your Voice Heard</h4>
                    <p>Direct influence on policies that affect your community</p>
                </div>

                <div class="benefit-item">
                    <div class="benefit-icon">
                        <span class="material-symbols-outlined">diversity_3</span>
                    </div>
                    <h4>Community Impact</h4>
                    <p>Contribute to positive changes in Bamenda</p>
                </div>

                <div class="benefit-item">
                    <div class="benefit-icon">
                        <span class="material-symbols-outlined">school</span>
                    </div>
                    <h4>Civic Education</h4>
                    <p>Learn about local governance and decision-making</p>
                </div>

                <div class="benefit-item">
                    <div class="benefit-icon">
                        <span class="material-symbols-outlined">handshake</span>
                    </div>
                    <h4>Collaboration</h4>
                    <p>Work with council and other citizens on solutions</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Guidelines Section -->
<section class="guidelines-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Participation Guidelines</h2>
            <p class="section-subtitle">Best practices for effective public consultation participation</p>
        </div>

        <div class="guidelines-content">
            <div class="guidelines-grid">
                <div class="guideline-card">
                    <div class="guideline-icon">
                        <span class="material-symbols-outlined">tips_and_updates</span>
                    </div>
                    <h3 class="guideline-title">Be Constructive</h3>
                    <p class="guideline-description">Focus on solutions rather than just problems. Offer practical suggestions that can be implemented.</p>
                </div>

                <div class="guideline-card">
                    <div class="guideline-icon">
                        <span class="material-symbols-outlined">fact_check</span>
                    </div>
                    <h3 class="guideline-title">Be Informed</h3>
                    <p class="guideline-description">Read consultation documents thoroughly and understand the context before providing feedback.</p>
                </div>

                <div class="guideline-card">
                    <div class="guideline-icon">
                        <span class="material-symbols-outlined">groups</span>
                    </div>
                    <h3 class="guideline-title">Be Respectful</h3>
                    <p class="guideline-description">Maintain respectful communication with other participants and council representatives.</p>
                </div>

                <div class="guideline-card">
                    <div class="guideline-icon">
                        <span class="material-symbols-outlined">update</span>
                    </div>
                    <h3 class="guideline-title">Be Timely</h3>
                    <p class="guideline-description">Submit your feedback within the consultation period to ensure it's considered.</p>
                </div>

                <div class="guideline-card">
                    <div class="guideline-icon">
                        <span class="material-symbols-outlined">lightbulb</span>
                    </div>
                    <h3 class="guideline-title">Be Innovative</h3>
                    <p class="guideline-description">Think creatively and propose innovative solutions to complex problems.</p>
                </div>

                <div class="guideline-card">
                    <div class="guideline-icon">
                        <span class="material-symbols-outlined">diversity_1</span>
                    </div>
                    <h3 class="guideline-title">Be Inclusive</h3>
                    <p class="guideline-description">Consider the impact on all community members, especially vulnerable groups.</p>
                </div>
            </div>

            <div class="guidelines-tips">
                <h3>Additional Tips</h3>
                <ul class="tips-list">
                    <li>Use clear, concise language when providing feedback</li>
                    <li>Support your suggestions with evidence or examples when possible</li>
                    <li>Consider both short-term and long-term implications</li>
                    <li>Follow up on consultations to see how your feedback was used</li>
                    <li>Encourage others in your community to participate</li>
                    <li>Stay informed about council decisions and implementations</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Impact Report -->
<section class="impact-report-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Impact Report</h2>
            <p class="section-subtitle">How citizen feedback has shaped Bamenda's development</p>
        </div>

        <div class="impact-stats">
            <div class="impact-stat">
                <div class="impact-number">45</div>
                <div class="impact-label">Policies Influenced</div>
                <div class="impact-description">By citizen feedback since 2023</div>
            </div>

            <div class="impact-stat">
                <div class="impact-number">₣125M</div>
                <div class="impact-label">Budget Allocation</div>
                <div class="impact-description">Redirected based on citizen input</div>
            </div>

            <div class="impact-stat">
                <div class="impact-number">89%</div>
                <div class="impact-label">Satisfaction Rate</div>
                <div class="impact-description">With consultation outcomes</div>
            </div>
        </div>

        <div class="success-stories">
            <h3>Success Stories</h3>
            <div class="stories-grid">
                <div class="story-card">
                    <div class="story-icon">
                        <span class="material-symbols-outlined">park</span>
                    </div>
                    <h4 class="story-title">City Park Development</h4>
                    <p class="story-description">Citizen feedback led to the creation of 3 new city parks, providing green spaces for recreation and community gatherings.</p>
                    <div class="story-impact">
                        <span class="impact-label">Impact:</span>
                        <span>15,000+ residents benefit</span>
                    </div>
                </div>

                <div class="story-card">
                    <div class="story-icon">
                        <span class="material-symbols-outlined">directions_bus</span>
                    </div>
                    <h4 class="story-title">Transport Route Optimization</h4>
                    <p class="story-description">Community suggestions resulted in route changes that improved public transport coverage for underserved areas.</p>
                    <div class="story-impact">
                        <span class="impact-label">Impact:</span>
                        <span>8 new routes added</span>
                    </div>
                </div>

                <div class="story-card">
                    <div class="story-icon">
                        <span class="material-symbols-outlined">recycling</span>
                    </div>
                    <h4 class="story-title">Recycling Program Launch</h4>
                    <p class="story-description">Citizen environmental concerns drove the implementation of a comprehensive recycling program across the city.</p>
                    <div class="story-impact">
                        <span class="impact-label">Impact:</span>
                        <span>40% waste reduction</span>
                    </div>
                </div>

                <div class="story-card">
                    <div class="story-icon">
                        <span class="material-symbols-outlined">school</span>
                    </div>
                    <h4 class="story-title">Youth Skills Centers</h4>
                    <p class="story-description">Youth employment consultations led to the establishment of 5 skills training centers for young people.</p>
                    <div class="story-impact">
                        <span class="impact-label">Impact:</span>
                        <span>2,000+ youth trained</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Submit Proposal -->
<section class="submit-proposal-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Submit Consultation Proposal</h2>
            <p class="section-subtitle">Suggest topics for future public consultations</p>
        </div>

        <div class="proposal-form">
            <form id="proposalForm">
                <div class="form-section">
                    <h3 class="section-title">Proposal Details</h3>
                    
                    <div class="form-group">
                        <label class="form-label">Proposal Title *</label>
                        <input type="text" class="form-input" placeholder="Enter a clear, concise title for your proposal" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Category *</label>
                            <select class="form-select" required>
                                <option value="">Select category</option>
                                <option value="urban-planning">Urban Planning</option>
                                <option value="infrastructure">Infrastructure</option>
                                <option value="environmental">Environmental</option>
                                <option value="social-services">Social Services</option>
                                <option value="economic">Economic Development</option>
                                <option value="education">Education</option>
                                <option value="health">Health</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Priority Level *</label>
                            <select class="form-select" required>
                                <option value="">Select priority</option>
                                <option value="high">High Priority</option>
                                <option value="medium">Medium Priority</option>
                                <option value="low">Low Priority</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Problem Statement *</label>
                        <textarea class="form-textarea" rows="3" placeholder="Clearly describe the problem or issue that needs consultation" required></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Proposed Solution *</label>
                        <textarea class="form-textarea" rows="4" placeholder="Describe your proposed solution or approach" required></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Expected Impact</label>
                        <textarea class="form-textarea" rows="3" placeholder="Describe the expected positive impact on the community"></textarea>
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">Supporting Information</h3>
                    
                    <div class="form-group">
                        <label class="form-label">Stakeholders Affected</label>
                        <input type="text" class="form-input" placeholder="List the groups or communities that would be affected">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Supporting Documents</label>
                        <input type="file" class="form-input" multiple accept=".pdf,.doc,.docx">
                        <small class="form-help">Upload any supporting documents (PDF, DOC, DOCX)</small>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Additional Comments</label>
                        <textarea class="form-textarea" rows="3" placeholder="Any additional information or context"></textarea>
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">Contact Information</h3>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Full Name *</label>
                            <input type="text" class="form-input" placeholder="Enter your full name" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email Address *</label>
                            <input type="email" class="form-input" placeholder="your@email.com" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Phone Number</label>
                            <input type="tel" class="form-input" placeholder="+237 233 000 000">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Organization (Optional)</label>
                            <input type="text" class="form-input" placeholder="Your organization or group">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Preferred Contact Method</label>
                        <select class="form-select">
                            <option value="email">Email</option>
                            <option value="phone">Phone</option>
                            <option value="both">Both</option>
                        </select>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="reset" class="btn btn-outline">Reset</button>
                    <button type="submit" class="btn btn-primary">Submit Proposal</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php
// Include footer
require_once __DIR__ . '/../../includes/footer.php';
?>

<style>
/* Consultations Page Styles */
.consultations-hero {
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

/* Consultation Statistics Section */
.consultation-stats-section {
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

/* Active Consultations Section */
.active-consultations-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.consultations-filters {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    margin-bottom: var(--spacing-xl);
}

.filter-row {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: var(--spacing-lg);
    align-items: end;
}

.consultations-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.consultation-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.consultation-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.consultation-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.consultation-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.consultation-badge.high-priority {
    background-color: var(--error);
    color: var(--on-error);
}

.consultation-badge.medium-priority {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.consultation-badge.low-priority {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.consultation-status {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.consultation-status.open {
    background-color: var(--primary);
    color: var(--on-primary);
}

.consultation-status.closing {
    background-color: var(--secondary-container);
    color: var(--on-secondary-container);
}

.consultation-status.review {
    background-color: var(--tertiary-container);
    color: var(--on-tertiary-container);
}

.consultation-content {
    padding: var(--spacing-lg);
}

.consultation-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.consultation-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.consultation-details {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

.detail-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    color: var(--on-surface-variant);
    font-size: 0.875rem;
}

.detail-item .material-symbols-outlined {
    font-size: 1.25rem;
    color: var(--primary);
}

.consultation-progress {
    margin-bottom: var(--spacing-lg);
}

.progress-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: var(--spacing-xs);
}

.progress-label {
    font-weight: 600;
    color: var(--on-surface);
}

.progress-percentage {
    font-weight: 700;
    color: var(--primary);
}

.progress-bar {
    height: 8px;
    background-color: var(--surface-container);
    border-radius: var(--radius-full);
    overflow: hidden;
    margin-bottom: var(--spacing-xs);
}

.progress-fill {
    height: 100%;
    background-color: var(--tertiary);
    transition: width 0.3s ease;
}

.consultation-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Participation Section */
.participation-section {
    padding: var(--spacing-3xl) 0;
}

.participation-steps {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: var(--spacing-xl);
}

.step-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
    position: relative;
}

.step-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.step-number {
    position: absolute;
    top: -1rem;
    left: 50%;
    transform: translateX(-50%);
    width: 2rem;
    height: 2rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 800;
    font-size: 1rem;
}

.step-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--surface-container);
    color: var(--primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-lg);
}

.step-icon .material-symbols-outlined {
    font-size: 2rem;
}

.step-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.step-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
}

.participation-benefits {
    margin-top: var(--spacing-3xl);
    text-align: center;
}

.participation-benefits h3 {
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
}

.benefits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: var(--spacing-lg);
}

.benefit-item {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.benefit-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.benefit-icon {
    width: 3rem;
    height: 3rem;
    background-color: var(--tertiary);
    color: var(--on-tertiary);
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-md);
}

.benefit-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.benefit-item h4 {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.benefit-item p {
    color: var(--on-surface-variant);
    font-size: 0.875rem;
}

/* Guidelines Section */
.guidelines-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.guidelines-content {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-2xl);
}

.guidelines-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.guideline-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.guideline-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.guideline-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-lg);
}

.guideline-icon .material-symbols-outlined {
    font-size: 2rem;
}

.guideline-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.guideline-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
}

.guidelines-tips {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
}

.guidelines-tips h3 {
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
}

.tips-list {
    list-style: none;
    padding: 0;
}

.tips-list li {
    padding: var(--spacing-sm) 0;
    color: var(--on-surface-variant);
    position: relative;
    padding-left: var(--spacing-lg);
    line-height: 1.6;
}

.tips-list li::before {
    content: '•';
    position: absolute;
    left: 0;
    color: var(--primary);
    font-weight: 700;
}

/* Impact Report Section */
.impact-report-section {
    padding: var(--spacing-3xl) 0;
}

.impact-stats {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: var(--spacing-lg);
    margin-bottom: var(--spacing-2xl);
}

.impact-stat {
    text-align: center;
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.impact-stat:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.impact-number {
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
    line-height: 1;
}

.impact-label {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-xs);
}

.impact-description {
    color: var(--on-surface-variant);
    font-size: 0.875rem;
}

.success-stories {
    margin-top: var(--spacing-2xl);
}

.success-stories h3 {
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
    text-align: center;
}

.stories-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: var(--spacing-xl);
}

.story-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.story-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.story-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--tertiary);
    color: var(--on-tertiary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-lg);
}

.story-icon .material-symbols-outlined {
    font-size: 2rem;
}

.story-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.story-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.story-impact {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    font-size: 0.875rem;
}

.story-impact .impact-label {
    font-weight: 600;
    color: var(--on-surface-variant);
}

.story-impact span:last-child {
    font-weight: 700;
    color: var(--primary);
}

/* Submit Proposal Section */
.submit-proposal-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.proposal-form {
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
    
    .filter-row {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .consultations-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .participation-steps {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .benefits-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .guidelines-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .impact-stats {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .stories-grid {
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
    
    .consultation-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .step-card {
        padding: var(--spacing-lg);
    }
    
    .step-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .step-icon .material-symbols-outlined {
        font-size: 1.5rem;
    }
    
    .guideline-card {
        padding: var(--spacing-lg);
    }
    
    .guideline-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .guideline-icon .material-symbols-outlined {
        font-size: 1.5rem;
    }
    
    .story-card {
        padding: var(--spacing-lg);
    }
    
    .story-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .story-icon .material-symbols-outlined {
        font-size: 1.5rem;
    }
    
    .proposal-form {
        padding: var(--spacing-lg);
    }
    
    .impact-number {
        font-size: 2rem;
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
</style>

<script>
// Quick action functions
function openActiveConsultations() {
    document.getElementById('active-consultations').scrollIntoView({ behavior: 'smooth' });
}

function openPastConsultations() {
    alert('Past consultations section would open here. In production, this would show completed consultations with their outcomes.');
}

function openSubmitProposal() {
    document.getElementById('submit-proposal').scrollIntoView({ behavior: 'smooth' });
}

function openConsultationCalendar() {
    alert('Consultation calendar would open here. In production, this would show a calendar of upcoming consultations.');
}

function openGuidelines() {
    document.getElementById('guidelines').scrollIntoView({ behavior: 'smooth' });
}

function openImpactReport() {
    document.getElementById('impact-report').scrollIntoView({ behavior: 'smooth' });
}

// Consultation filtering
function filterConsultations() {
    const category = document.getElementById('consultationCategory').value;
    const status = document.getElementById('consultationStatus').value;
    const priority = document.getElementById('consultationPriority').value;
    
    // In production, this would filter the consultations
    alert(`Filtering consultations by: ${category || 'All Categories'}, ${status || 'All Status'}, ${priority || 'All Priority'}`);
}

// Load more consultations
function loadMoreConsultations() {
    // In production, this would load more consultations from the server
    alert('Loading more consultations...');
}

// Consultation actions
document.querySelectorAll('.consultation-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Participate')) {
        button.addEventListener('click', function() {
            const consultationTitle = this.closest('.consultation-card').querySelector('.consultation-title').textContent;
            alert(`Opening participation form for: "${consultationTitle}"`);
        });
    }
});

document.querySelectorAll('.consultation-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Details')) {
        button.addEventListener('click', function() {
            const consultationTitle = this.closest('.consultation-card').querySelector('.consultation-title').textContent;
            alert(`Viewing detailed information for: "${consultationTitle}"`);
        });
    }
    
    if (button.textContent.includes('Share')) {
        button.addEventListener('click', function() {
            const consultationTitle = this.closest('.consultation-card').querySelector('.consultation-title').textContent);
            alert(`Sharing: "${consultationTitle}" consultation`);
        });
    }
    
    if (button.textContent.includes('Results')) {
        button.addEventListener('click', function() {
            const consultationTitle = this.closest('.consultation-card').querySelector('.consultation-title').textContent;
            alert(`Viewing results for: "${consultationTitle}"`);
        });
    }
});

// Proposal form submission
document.getElementById('proposalForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Consultation proposal submitted successfully! We will review your proposal and consider it for future consultations.');
    // In production, this would submit the proposal
});

// Progress animation on scroll
window.addEventListener('scroll', function() {
    const progressBars = document.querySelectorAll('.progress-fill');
    progressBars.forEach(bar => {
        const rect = bar.getBoundingClientRect();
        const isVisible = rect.top < window.innerHeight && rect.bottom > 0;
        if (isVisible) {
            const width = bar.style.width;
            bar.style.width = '0';
            setTimeout(() => {
                bar.style.width = width;
            }, 100);
        }
    });
});

// Auto-refresh consultation data
function refreshConsultationData() {
    // In production, this would fetch real-time consultation data
    console.log('Refreshing consultation data...');
}

// Refresh data every 60 seconds
setInterval(refreshConsultationData, 60000);
</script>
