<?php
/**
 * Bamenda City Council E-Governance Platform
 * Civic Engagement Feedback Page
 */

// Set page metadata
$page_title = 'Civic Feedback | Bamenda City Council';
$page_description = 'Provide feedback on civic services, report issues, and share suggestions for improving community engagement and governance in Bamenda.';
$page_keywords = 'civic feedback, community engagement, public participation, service feedback, Bamenda governance';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Civic Engagement', 'url' => '../index.php'],
    ['title' => 'Feedback', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero civic-feedback-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-civic-engagement.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Civic Feedback</span>
            <h1 class="hero-title">Community Feedback & Engagement</h1>
            <p class="hero-subtitle">
                Share your feedback, report issues, and participate in civic decision-making to help improve governance and community services in Bamenda.
            </p>
            <div class="hero-actions">
                <a href="#feedback-form" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">rate_review</span>
                    Submit Feedback
                </a>
                <a href="#feedback-types" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">category</span>
                    Feedback Types
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Feedback Actions</h2>
            <p class="section-subtitle">Quick access to civic feedback options</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openServiceFeedback()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">star_rate</span>
                </div>
                <h3 class="action-title">Service Feedback</h3>
                <p class="action-description">Rate and review city services</p>
            </div>

            <div class="action-card" onclick="openIssueReporting()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">report_problem</span>
                </div>
                <h3 class="action-title">Report Issues</h3>
                <p class="action-description">Report community problems</p>
            </div>

            <div class="action-card" onclick="openSuggestions()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">lightbulb</span>
                </div>
                <h3 class="action-title">Suggestions</h3>
                <p class="action-description">Share improvement ideas</p>
            </div>

            <div class="action-card" onclick="openCompliments()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">thumb_up</span>
                </div>
                <h3 class="action-title">Compliments</h3>
                <p class="action-description">Recognize good service</p>
            </div>

            <div class="action-card" onclick="openComplaints()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">priority_high</span>
                </div>
                <h3 class="action-title">Complaints</h3>
                <p class="action-description">File formal complaints</p>
            </div>

            <div class="action-card" onclick="openPublicConsultation()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <h3 class="action-title">Public Consultation</h3>
                <p class="action-description">Participate in consultations</p>
            </div>
        </div>
    </div>
</section>

<!-- Feedback Statistics -->
<section class="feedback-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">rate_review</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">12,456</div>
                    <div class="stat-label">Feedback Submitted</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+456 this month</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">task_alt</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">89%</div>
                    <div class="stat-label">Response Rate</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+12% improvement</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">thumb_up</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">4.5</div>
                    <div class="stat-label">Average Rating</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+0.3 points</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">verified</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">94%</div>
                    <div class="stat-label">Satisfaction Rate</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+8% improvement</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Feedback Types -->
<section class="feedback-types-section" id="feedback-types">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Types of Feedback</h2>
            <p class="section-subtitle">Different ways to share your feedback with the City Council</p>
        </div>

        <div class="types-grid">
            <!-- Service Rating -->
            <div class="type-card">
                <div class="type-header">
                    <div class="type-icon">
                        <span class="material-symbols-outlined">star_rate</span>
                    </div>
                    <div class="type-badge popular">Popular</div>
                </div>
                <div class="type-content">
                    <h3 class="type-title">Service Rating</h3>
                    <p class="type-description">Rate various city services including waste management, water supply, electricity, public transport, and administrative services.</p>
                    <div class="type-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>5-star rating system</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Detailed service categories</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Anonymous or named feedback</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Follow-up responses</span>
                        </div>
                    </div>
                    <div class="type-stats">
                        <div class="stat-item">
                            <span class="stat-number">4.2</span>
                            <span class="stat-label">Average Rating</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">8,456</span>
                            <span class="stat-label">Total Ratings</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">Rate Services</button>
                </div>
            </div>

            <!-- Issue Reporting -->
            <div class="type-card">
                <div class="type-header">
                    <div class="type-icon">
                        <span class="material-symbols-outlined">report_problem</span>
                    </div>
                    <div class="type-badge critical">Critical</div>
                </div>
                <div class="type-content">
                    <h3 class="type-title">Issue Reporting</h3>
                    <p class="type-description">Report community issues including infrastructure problems, sanitation concerns, safety hazards, and service disruptions.</p>
                    <div class="type-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Photo and video uploads</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>GPS location tagging</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Priority classification</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Tracking and updates</span>
                        </div>
                    </div>
                    <div class="type-stats">
                        <div class="stat-item">
                            <span class="stat-number">2,345</span>
                            <span class="stat-label">Issues Reported</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">78%</span>
                            <span class="stat-label">Resolution Rate</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">Report Issue</button>
                </div>
            </div>

            <!-- Suggestions -->
            <div class="type-card">
                <div class="type-header">
                    <div class="type-icon">
                        <span class="material-symbols-outlined">lightbulb</span>
                    </div>
                    <div class="type-badge active">Active</div>
                </div>
                <div class="type-content">
                    <h3 class="type-title">Improvement Suggestions</h3>
                    <p class="type-description">Share your ideas and suggestions for improving city services, infrastructure, and community programs.</p>
                    <div class="type-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Innovation platform</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Community voting</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Implementation tracking</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Recognition programs</span>
                        </div>
                    </div>
                    <div class="type-stats">
                        <div class="stat-item">
                            <span class="stat-number">1,234</span>
                            <span class="stat-label">Suggestions</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">45</span>
                            <span class="stat-label">Implemented</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">Share Suggestion</button>
                </div>
            </div>

            <!-- Compliments -->
            <div class="type-card">
                <div class="type-header">
                    <div class="type-icon">
                        <span class="material-symbols-outlined">thumb_up</span>
                    </div>
                    <div class="type-badge positive">Positive</div>
                </div>
                <div class="type-content">
                    <h3 class="type-title">Service Compliments</h3>
                    <p class="type-description">Recognize and appreciate excellent service from city employees, departments, and community programs.</p>
                    <div class="type-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Employee recognition</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Department appreciation</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Service excellence awards</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Public recognition</span>
                        </div>
                    </div>
                    <div class="type-stats">
                        <div class="stat-item">
                            <span class="stat-number">3,456</span>
                            <span class="stat-label">Compliments</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">89</span>
                            <span class="stat-label">Employees Recognized</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">Give Compliment</button>
                </div>
            </div>

            <!-- Formal Complaints -->
            <div class="type-card">
                <div class="type-header">
                    <div class="type-icon">
                        <span class="material-symbols-outlined">priority_high</span>
                    </div>
                    <div class="type-badge important">Important</div>
                </div>
                <div class="type-content">
                    <h3 class="type-title">Formal Complaints</h3>
                    <p class="type-description">File formal complaints about service failures, misconduct, or serious issues requiring official investigation.</p>
                    <div class="type-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Confidential processing</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Official investigation</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Legal compliance</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Formal response</span>
                        </div>
                    </div>
                    <div class="type-stats">
                        <div class="stat-item">
                            <span class="stat-number">234</span>
                            <span class="stat-label">Complaints Filed</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">92%</span>
                            <span class="stat-label">Investigation Rate</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">File Complaint</button>
                </div>
            </div>

            <!-- Public Consultation -->
            <div class="type-card">
                <div class="type-header">
                    <div class="type-icon">
                        <span class="material-symbols-outlined">groups</span>
                    </div>
                    <div class="type-badge active">Active</div>
                </div>
                <div class="type-content">
                    <h3 class="type-title">Public Consultation</h3>
                    <p class="type-description">Participate in public consultations on policy changes, development projects, and community initiatives.</p>
                    <div class="type-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Policy feedback</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Development projects</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Community planning</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Public meetings</span>
                        </div>
                    </div>
                    <div class="type-stats">
                        <div class="stat-item">
                            <span class="stat-number">45</span>
                            <span class="stat-label">Active Consultations</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">3,456</span>
                            <span class="stat-label">Participants</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">Join Consultation</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Feedback Form -->
<section class="feedback-form-section" id="feedback-form">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Submit Your Feedback</h2>
            <p class="section-subtitle">Share your thoughts, suggestions, and concerns with the City Council</p>
        </div>

        <div class="form-content">
            <div class="feedback-form">
                <h3 class="form-title">Community Feedback Form</h3>
                <form id="feedbackForm">
                    <div class="form-section">
                        <h4 class="section-title">Feedback Information</h4>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Feedback Type *</label>
                                <select class="form-select" required>
                                    <option value="">Select feedback type</option>
                                    <option value="service-rating">Service Rating</option>
                                    <option value="issue-report">Issue Report</option>
                                    <option value="suggestion">Improvement Suggestion</option>
                                    <option value="compliment">Service Compliment</option>
                                    <option value="complaint">Formal Complaint</option>
                                    <option value="consultation">Public Consultation</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Priority Level *</label>
                                <select class="form-select" required>
                                    <option value="">Select priority</option>
                                    <option value="urgent">Urgent</option>
                                    <option value="high">High</option>
                                    <option value="medium">Medium</option>
                                    <option value="low">Low</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Subject *</label>
                            <input type="text" class="form-input" placeholder="Enter feedback subject" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Detailed Feedback *</label>
                            <textarea class="form-textarea" rows="6" placeholder="Please provide detailed information about your feedback" required></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Service/Department (if applicable)</label>
                            <select class="form-select">
                                <option value="">Select service/department</option>
                                <option value="administration">Administration</option>
                                <option value="public-services">Public Services</option>
                                <option value="business">Business Services</option>
                                <option value="emergency">Emergency Services</option>
                                <option value="youth">Youth Services</option>
                                <option value="civic-engagement">Civic Engagement</option>
                                <option value="health">Health Services</option>
                                <option value="education">Education Services</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Contact Information</h4>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Full Name *</label>
                                <input type="text" class="form-input" placeholder="Enter your full name" required>
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
                                    <option value="up-station">Up Station</option>
                                    <option value="down-station">Down Station</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-input" placeholder="Enter your address (optional)">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Feedback Preference *</label>
                            <div class="radio-group">
                                <label class="radio-label">
                                    <input type="radio" name="preference" value="public" required>
                                    <span class="radio-dot"></span>
                                    <span>Public (can be shared)</span>
                                </label>
                                <label class="radio-label">
                                    <input type="radio" name="preference" value="private" required>
                                    <span class="radio-dot"></span>
                                    <span>Private (confidential)</span>
                                </label>
                                <label class="radio-label">
                                    <input type="radio" name="preference" value="anonymous" required>
                                    <span class="radio-dot"></span>
                                    <span>Anonymous (no personal info)</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Additional Information</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Service Rating (if applicable)</label>
                            <div class="rating-group">
                                <div class="rating-stars">
                                    <span class="material-symbols-outlined star" data-rating="1">star</span>
                                    <span class="material-symbols-outlined star" data-rating="2">star</span>
                                    <span class="material-symbols-outlined star" data-rating="3">star</span>
                                    <span class="material-symbols-outlined star" data-rating="4">star</span>
                                    <span class="material-symbols-outlined star" data-rating="5">star</span>
                                </div>
                                <span class="rating-text">Click to rate</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Attachments</label>
                            <div class="file-upload">
                                <input type="file" id="feedbackUpload" accept=".jpg,.jpeg,.png,.pdf,.doc,.docx" multiple>
                                <label for="feedbackUpload" class="file-upload-label">
                                    <span class="material-symbols-outlined">upload_file</span>
                                    <span>Upload supporting documents</span>
                                    <small>Photos, documents, or other relevant files (Max 5MB per file)</small>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Previous Reference (if applicable)</label>
                            <input type="text" class="form-input" placeholder="Reference number of previous feedback">
                        </div>

                        <div class="form-group">
                            <label class="form-label">How did you hear about our feedback system? *</label>
                            <select class="form-select" required>
                                <option value="">Select option</option>
                                <option value="website">City Council Website</option>
                                <option value="social-media">Social Media</option>
                                <option value="friend">Friend/Neighbor</option>
                                <option value="advertisement">Advertisement</option>
                                <option value="office">City Council Office</option>
                                <option value="community-meeting">Community Meeting</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Terms and Conditions *</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="terms" required>
                                    <span class="checkmark"></span>
                                    I agree to the terms and conditions of the feedback system. I understand that my feedback will be processed according to the City Council's feedback policy and that I may receive follow-up communications regarding my submission.
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="reset" class="btn btn-outline">Reset</button>
                        <button type="submit" class="btn btn-primary">Submit Feedback</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Recent Feedback -->
<section class="recent-feedback-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Recent Community Feedback</h2>
            <p class="section-subtitle">See what others are saying about city services</p>
        </div>

        <div class="feedback-list">
            <!-- Feedback Item 1 -->
            <div class="feedback-item">
                <div class="feedback-header">
                    <div class="feedback-type">
                        <span class="type-badge service">Service Rating</span>
                    </div>
                    <div class="feedback-meta">
                        <span class="feedback-date">2 days ago</span>
                        <span class="feedback-area">City Center</span>
                    </div>
                </div>
                <div class="feedback-content">
                    <h4 class="feedback-title">Excellent Waste Management Service</h4>
                    <div class="feedback-rating">
                        <div class="stars">
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                        </div>
                        <span class="rating-text">5.0</span>
                    </div>
                    <p class="feedback-text">
                        The waste management team in our area has been exceptional. They are always on time, thorough, and the community is much cleaner. Keep up the great work!
                    </p>
                    <div class="feedback-response">
                        <div class="response-header">
                            <span class="response-badge">Official Response</span>
                            <span class="response-date">1 day ago</span>
                        </div>
                        <p class="response-text">
                            Thank you for your positive feedback! We're delighted to hear about your excellent experience with our waste management services. Your appreciation will be shared with the team.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Feedback Item 2 -->
            <div class="feedback-item">
                <div class="feedback-header">
                    <div class="feedback-type">
                        <span class="type-badge issue">Issue Report</span>
                    </div>
                    <div class="feedback-meta">
                        <span class="feedback-date">3 days ago</span>
                        <span class="feedback-area">Nkwen</span>
                    </div>
                </div>
                <div class="feedback-content">
                    <h4 class="feedback-title">Street Light Outage on Main Road</h4>
                    <div class="feedback-priority">
                        <span class="priority-badge high">High Priority</span>
                    </div>
                    <p class="feedback-text">
                        Several street lights along the main road in Nkwen have been out for over a week, creating safety concerns for pedestrians and drivers at night. This needs urgent attention.
                    </p>
                    <div class="feedback-status">
                        <span class="status-badge in-progress">In Progress</span>
                        <span class="status-text">Maintenance team assigned</span>
                    </div>
                </div>
            </div>

            <!-- Feedback Item 3 -->
            <div class="feedback-item">
                <div class="feedback-header">
                    <div class="feedback-type">
                        <span class="type-badge suggestion">Suggestion</span>
                    </div>
                    <div class="feedback-meta">
                        <span class="feedback-date">5 days ago</span>
                        <span class="feedback-area">Mankon</span>
                    </div>
                </div>
                <div class="feedback-content">
                    <h4 class="feedback-title">Community Garden Initiative</h4>
                    <p class="feedback-text">
                        I suggest creating community gardens in unused public spaces. This would promote food security, community engagement, and green spaces. Many residents are interested in participating.
                    </p>
                    <div class="feedback-engagement">
                        <div class="engagement-stats">
                            <span class="stat-item">
                                <span class="material-symbols-outlined">thumb_up</span>
                                <span>45 supporters</span>
                            </span>
                            <span class="stat-item">
                                <span class="material-symbols-outlined">comment</span>
                                <span>12 comments</span>
                            </span>
                        </div>
                        <div class="status-badge under-review">Under Review</div>
                    </div>
                </div>
            </div>

            <!-- Feedback Item 4 -->
            <div class="feedback-item">
                <div class="feedback-header">
                    <div class="feedback-type">
                        <span class="type-badge compliment">Compliment</span>
                    </div>
                    <div class="feedback-meta">
                        <span class="feedback-date">1 week ago</span>
                        <span class="feedback-area">Bambili</span>
                    </div>
                </div>
                <div class="feedback-content">
                    <h4 class="feedback-title">Outstanding Customer Service</h4>
                    <p class="feedback-text">
                        I want to compliment the staff at the City Council office in Bambili. They were patient, helpful, and resolved my issue quickly. Excellent customer service!
                    </p>
                    <div class="feedback-recognition">
                        <span class="recognition-badge">Employee Recognition</span>
                        <span class="recognition-text">Staff appreciation noted</span>
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
            <p class="section-subtitle">Common questions about civic feedback</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How is my feedback processed?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Your feedback is reviewed by the relevant department within 24-48 hours. Issues are prioritized based on urgency, and you'll receive updates on the resolution process. All feedback is documented and used to improve services.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Can I submit feedback anonymously?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, you can choose to submit feedback anonymously. However, providing contact information helps us follow up and provide updates on your feedback resolution. Anonymous feedback is still processed and addressed.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What types of issues can I report?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>You can report any community issues including infrastructure problems, service failures, safety hazards, sanitation concerns, noise pollution, illegal dumping, and any other matters affecting community quality of life.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How quickly will my issue be addressed?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Response time varies by issue priority. Urgent issues like safety hazards are addressed within 24 hours, high priority within 3 days, medium within 7 days, and low priority within 14 days. You'll receive updates throughout the process.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Can I track the status of my feedback?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, you'll receive a reference number when you submit feedback. You can use this number to track your feedback status online or contact our customer service for updates. You'll also receive automatic notifications at key milestones.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What happens to formal complaints?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Formal complaints undergo official investigation according to established procedures. They are handled by specialized teams, documented thoroughly, and result in formal responses. All complaints are treated confidentially and processed according to legal requirements.</p>
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
/* Civic Feedback Page Styles */
.civic-feedback-hero {
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

/* Feedback Statistics Section */
.feedback-stats-section {
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

/* Feedback Types Section */
.feedback-types-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.types-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.type-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.type-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.type-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.type-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--secondary);
    color: var(--on-secondary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.type-icon .material-symbols-outlined {
    font-size: 2rem;
}

.type-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.type-badge.popular {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.type-badge.critical {
    background-color: var(--error);
    color: var(--on-error);
}

.type-badge.active {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.type-badge.positive {
    background-color: var(--primary);
    color: var(--on-primary);
}

.type-badge.important {
    background-color: var(--surface-variant);
    color: var(--on-surface-variant);
}

.type-content {
    padding: var(--spacing-lg);
}

.type-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--secondary);
    margin-bottom: var(--spacing-md);
}

.type-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.type-features {
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

.type-stats {
    display: flex;
    justify-content: space-around;
    margin-bottom: var(--spacing-lg);
    padding: var(--spacing-md);
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
}

.stat-item {
    text-align: center;
}

.stat-number {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--secondary);
    display: block;
    margin-bottom: var(--spacing-xs);
}

.stat-label {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
    text-transform: uppercase;
}

/* Feedback Form Section */
.feedback-form-section {
    padding: var(--spacing-3xl) 0;
}

.form-content {
    display: flex;
    justify-content: center;
}

.feedback-form {
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

.radio-group {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
}

.radio-label {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    cursor: pointer;
    color: var(--on-surface);
}

.radio-label input[type="radio"] {
    display: none;
}

.radio-dot {
    width: 1.25rem;
    height: 1.25rem;
    border: 2px solid var(--outline-variant);
    border-radius: var(--radius-full);
    position: relative;
    transition: all 0.2s ease;
}

.radio-label input[type="radio"]:checked + .radio-dot {
    background-color: var(--secondary);
    border-color: var(--secondary);
}

.radio-label input[type="radio"]:checked + .radio-dot::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 0.5rem;
    height: 0.5rem;
    background-color: var(--on-secondary);
    border-radius: var(--radius-full);
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

.rating-group {
    display: flex;
    align-items: center;
    gap: var(--spacing-md);
}

.rating-stars {
    display: flex;
    gap: var(--spacing-xs);
}

.rating-stars .star {
    font-size: 1.5rem;
    color: var(--outline-variant);
    cursor: pointer;
    transition: color 0.2s ease;
}

.rating-stars .star:hover,
.rating-stars .star.active {
    color: var(--tertiary);
}

.rating-text {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
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

.form-actions {
    display: flex;
    gap: var(--spacing-lg);
    justify-content: center;
    margin-top: var(--spacing-xl);
}

/* Recent Feedback Section */
.recent-feedback-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.feedback-list {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xl);
}

.feedback-item {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
}

.feedback-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: var(--spacing-md);
}

.type-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.type-badge.service {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.type-badge.issue {
    background-color: var(--error);
    color: var(--on-error);
}

.type-badge.suggestion {
    background-color: var(--primary);
    color: var(--on-primary);
}

.type-badge.compliment {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.feedback-meta {
    display: flex;
    gap: var(--spacing-lg);
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.feedback-content h4 {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--secondary);
    margin-bottom: var(--spacing-sm);
}

.feedback-rating {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-md);
}

.feedback-rating .stars {
    display: flex;
    gap: 2px;
}

.feedback-rating .stars .material-symbols-outlined {
    font-size: 1rem;
    color: var(--tertiary);
}

.rating-text {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.feedback-text {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.feedback-response {
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
    padding: var(--spacing-md);
    margin-top: var(--spacing-lg);
}

.response-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: var(--spacing-sm);
}

.response-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    background-color: var(--primary);
    color: var(--on-primary);
}

.response-date {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.response-text {
    color: var(--on-surface-variant);
    line-height: 1.5;
}

.priority-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.priority-badge.high {
    background-color: var(--error);
    color: var(--on-error);
}

.feedback-status {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    margin-top: var(--spacing-lg);
}

.status-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.status-badge.in-progress {
    background-color: var(--primary);
    color: var(--on-primary);
}

.status-badge.under-review {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.status-text {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.feedback-engagement {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: var(--spacing-lg);
}

.engagement-stats {
    display: flex;
    gap: var(--spacing-lg);
}

.stat-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-xs);
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.stat-item .material-symbols-outlined {
    font-size: 1rem;
    color: var(--secondary);
}

.feedback-recognition {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
}

.recognition-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.recognition-text {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
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
    
    .types-grid {
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
    
    .type-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .feedback-form {
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
    
    .feedback-header {
        flex-direction: column;
        gap: var(--spacing-sm);
        align-items: flex-start;
    }
    
    .feedback-meta {
        flex-direction: column;
        gap: var(--spacing-xs);
    }
    
    .feedback-engagement {
        flex-direction: column;
        gap: var(--spacing-sm);
        align-items: flex-start;
    }
}
</style>

<script>
// Quick action functions
function openServiceFeedback() {
    document.getElementById('feedback-form').scrollIntoView({ behavior: 'smooth' });
}

function openIssueReporting() {
    document.getElementById('feedback-form').scrollIntoView({ behavior: 'smooth' });
}

function openSuggestions() {
    document.getElementById('feedback-form').scrollIntoView({ behavior: 'smooth' });
}

function openCompliments() {
    document.getElementById('feedback-form').scrollIntoView({ behavior: 'smooth' });
}

function openComplaints() {
    document.getElementById('feedback-form').scrollIntoView({ behavior: 'smooth' });
}

function openPublicConsultation() {
    alert('Public consultation portal would open here. In production, this would show active consultations, policy documents, and participation opportunities.');
}

// Type actions
document.querySelectorAll('.type-card .btn-primary').forEach(button => {
    button.addEventListener('click', function() {
        const typeTitle = this.closest('.type-card').querySelector('.type-title').textContent;
        alert(`Opening: "${typeTitle}"`);
    });
});

// Rating stars functionality
const stars = document.querySelectorAll('.rating-stars .star');
let currentRating = 0;

stars.forEach(star => {
    star.addEventListener('click', function() {
        currentRating = parseInt(this.dataset.rating);
        updateStars();
        document.querySelector('.rating-text').textContent = `${currentRating} star${currentRating > 1 ? 's' : ''}`;
    });
    
    star.addEventListener('mouseenter', function() {
        const hoverRating = parseInt(this.dataset.rating);
        highlightStars(hoverRating);
    });
});

document.querySelector('.rating-group').addEventListener('mouseleave', function() {
    updateStars();
});

function updateStars() {
    highlightStars(currentRating);
}

function highlightStars(rating) {
    stars.forEach((star, index) => {
        if (index < rating) {
            star.classList.add('active');
        } else {
            star.classList.remove('active');
        }
    });
}

// Feedback form submission
document.getElementById('feedbackForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate required fields
    const feedbackType = document.querySelector('select[required]').value;
    const priority = document.querySelectorAll('select[required]')[1].value;
    const subject = document.querySelector('input[placeholder*="subject"]').value;
    const feedbackText = document.querySelector('textarea[required]').value;
    const fullName = document.querySelector('input[placeholder*="name"]').value;
    const phone = document.querySelector('input[placeholder*="phone"]').value;
    const email = document.querySelector('input[placeholder*="email"]').value;
    const area = document.querySelectorAll('select[required]')[2].value;
    const preference = document.querySelector('input[name="preference"]:checked');
    const howHeard = document.querySelectorAll('select[required]')[3].value;
    const terms = document.querySelector('input[name="terms"]:checked');
    
    if (!feedbackType || !priority || !subject || !feedbackText || !fullName || !phone || !email || !area || !preference || !howHeard || !terms) {
        alert('Please fill in all required fields.');
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
    
    alert('Feedback submitted successfully! We will review your submission and respond within 24-48 hours. You will receive a reference number for tracking your feedback.');
    // In production, this would submit the feedback
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

// Auto-refresh feedback statistics
function refreshFeedbackStats() {
    // In production, this would fetch real-time feedback statistics
    console.log('Refreshing civic feedback statistics...');
    
    // Simulate feedback count updates
    const feedbackCountElement = document.querySelector('.stat-number');
    if (feedbackCountElement && feedbackCountElement.textContent.includes(',')) {
        // Simulate real-time feedback
        const currentCount = parseInt(feedbackCountElement.textContent.replace(',', ''));
        const increment = Math.floor(Math.random() * 3) + 1;
        const newCount = currentCount + increment;
        feedbackCountElement.textContent = newCount.toLocaleString();
    }
}

// Refresh statistics every 45 seconds
setInterval(refreshFeedbackStats, 45000);
</script>
