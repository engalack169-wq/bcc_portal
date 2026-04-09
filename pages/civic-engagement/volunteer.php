<?php
/**
 * Bamenda City Council E-Governance Platform
 * Volunteer Programs Page
 */

// Set page metadata
$page_title = 'Volunteer Programs | Bamenda City Council';
$page_description = 'Join volunteer programs, community service opportunities, and make a difference in Bamenda.';
$page_keywords = 'volunteer programs, community service, civic engagement, volunteering, Bamenda';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Civic', 'url' => '../index.php'],
    ['title' => 'Volunteer Programs', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero volunteer-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-civic-engagement.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Volunteer Programs</span>
            <h1 class="hero-title">Make a Difference</h1>
            <p class="hero-subtitle">
                Join our volunteer programs and contribute to building a better Bamenda through community service and civic engagement.
            </p>
            <div class="hero-actions">
                <a href="#volunteer-opportunities" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">volunteer_activism</span>
                    Volunteer Now
                </a>
                <a href="#volunteer-benefits" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">emoji_events</span>
                    Benefits
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Volunteer Actions</h2>
            <p class="section-subtitle">Quick access to volunteer opportunities</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openVolunteerOpportunities()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">volunteer_activism</span>
                </div>
                <h3 class="action-title">Browse Opportunities</h3>
                <p class="action-description">Explore available volunteer programs and projects</p>
            </div>

            <div class="action-card" onclick="openVolunteerRegistration()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">how_to_reg</span>
                </div>
                <h3 class="action-title">Register as Volunteer</h3>
                <p class="action-description">Sign up to become a registered volunteer</p>
            </div>

            <div class="action-card" onclick="openVolunteerCalendar()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">calendar_month</span>
                </div>
                <h3 class="action-title">Volunteer Calendar</h3>
                <p class="action-description">View upcoming volunteer events and activities</p>
            </div>

            <div class="action-card" onclick="openVolunteerTraining()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <h3 class="action-title">Training Programs</h3>
                <p class="action-description">Access volunteer training and skill development</p>
            </div>

            <div class="action-card" onclick="openVolunteerImpact()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">insights</span>
                </div>
                <h3 class="action-title">Impact Report</h3>
                <p class="action-description">See the impact of volunteer contributions</p>
            </div>

            <div class="action-card" onclick="openVolunteerStories()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">auto_stories</span>
                </div>
                <h3 class="action-title">Volunteer Stories</h3>
                <p class="action-description">Read inspiring stories from volunteers</p>
            </div>
        </div>
    </div>
</section>

<!-- Volunteer Statistics -->
<section class="volunteer-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">3,456</div>
                    <div class="stat-label">Active Volunteers</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+234 this month</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">volunteer_activism</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">45,678</div>
                    <div class="stat-label">Hours Contributed</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+1,234 this week</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">event</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">156</div>
                    <div class="stat-label">Volunteer Projects</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+12 this month</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">emoji_events</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">89%</div>
                    <div class="stat-label">Satisfaction Rate</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+3% improvement</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Volunteer Opportunities -->
<section class="volunteer-opportunities-section" id="volunteer-opportunities">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Volunteer Opportunities</h2>
            <p class="section-subtitle">Current volunteer programs and community service opportunities</p>
        </div>

        <div class="opportunities-filters">
            <div class="filter-row">
                <div class="form-group">
                    <label class="form-label">Program Type</label>
                    <select class="form-select" id="programType">
                        <option value="">All Programs</option>
                        <option value="environmental">Environmental</option>
                        <option value="education">Education</option>
                        <option value="health">Health</option>
                        <option value="community">Community</option>
                        <option value="youth">Youth Development</option>
                        <option value="senior">Senior Services</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Time Commitment</label>
                    <select class="form-select" id="timeCommitment">
                        <option value="">All Durations</option>
                        <option value="one-time">One-time Event</option>
                        <option value="short-term">Short-term (1-3 months)</option>
                        <option value="ongoing">Ongoing</option>
                        <option value="flexible">Flexible</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Skill Level</label>
                    <select class="form-select" id="skillLevel">
                        <option value="">All Levels</option>
                        <option value="beginner">No Experience Needed</option>
                        <option value="intermediate">Some Experience</option>
                        <option value="advanced">Skilled Volunteers</option>
                    </select>
                </div>
                <button class="btn btn-primary" onclick="filterOpportunities()">Filter</button>
            </div>
        </div>

        <div class="opportunities-grid">
            <!-- Environmental Cleanup -->
            <div class="opportunity-card">
                <div class="opportunity-header">
                    <div class="opportunity-image">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                             alt="environmental cleanup volunteers working together">
                    </div>
                    <div class="opportunity-badge environmental">Environmental</div>
                    <div class="opportunity-status ongoing">Ongoing</div>
                </div>
                <div class="opportunity-content">
                    <h3 class="opportunity-title">Green Bamenda Initiative</h3>
                    <p class="opportunity-description">Join our environmental conservation efforts through tree planting, waste management, and community cleanup activities.</p>
                    <div class="opportunity-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Flexible Schedule</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Various Locations</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>234 Volunteers</span>
                        </div>
                    </div>
                    <div class="opportunity-requirements">
                        <h4>Requirements:</h4>
                        <ul class="requirements-list">
                            <li>Passion for environmental conservation</li>
                            <li>Physical fitness for outdoor activities</li>
                            <li>Weekend availability preferred</li>
                        </ul>
                    </div>
                    <div class="opportunity-impact">
                        <span class="impact-label">Impact:</span>
                        <span class="impact-text">5,000+ trees planted, 20+ cleanup events</span>
                    </div>
                    <div class="opportunity-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                        <button class="btn btn-sm btn-outline">Share</button>
                    </div>
                </div>
            </div>

            <!-- Youth Mentorship -->
            <div class="opportunity-card">
                <div class="opportunity-header">
                    <div class="opportunity-image">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                             alt="youth mentorship volunteers working with students">
                    </div>
                    <div class="opportunity-badge youth">Youth Development</div>
                    <div class="opportunity-status ongoing">Ongoing</div>
                </div>
                <div class="opportunity-content">
                    <h3 class="opportunity-title">Youth Mentorship Program</h3>
                    <p class="opportunity-description">Mentor and guide young people in academic, career, and personal development through one-on-one and group sessions.</p>
                    <div class="opportunity-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>2-4 hours per week</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Community Centers</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>156 Volunteers</span>
                        </div>
                    </div>
                    <div class="opportunity-requirements">
                        <h4>Requirements:</h4>
                        <ul class="requirements-list">
                            <li>Background check required</li>
                            <li>Experience with youth preferred</li>
                            <li>Commitment of 6 months minimum</li>
                        </ul>
                    </div>
                    <div class="opportunity-impact">
                        <span class="impact-label">Impact:</span>
                        <span class="impact-text">500+ youth mentored, 85% improvement in academic performance</span>
                    </div>
                    <div class="opportunity-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                        <button class="btn btn-sm btn-outline">Share</button>
                    </div>
                </div>
            </div>

            <!-- Senior Care -->
            <div class="opportunity-card">
                <div class="opportunity-header">
                    <div class="opportunity-image">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                             alt="senior care volunteers assisting elderly residents">
                    </div>
                    <div class="opportunity-badge senior">Senior Services</div>
                    <div class="opportunity-status ongoing">Ongoing</div>
                </div>
                <div class="opportunity-content">
                    <h3 class="opportunity-title">Senior Care Companionship</h3>
                    <p class="opportunity-description">Provide companionship and assistance to elderly residents through visits, activities, and support services.</p>
                    <div class="opportunity-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Flexible Schedule</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Senior Centers</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>89 Volunteers</span>
                        </div>
                    </div>
                    <div class="opportunity-requirements">
                        <h4>Requirements:</h4>
                        <ul class="requirements-list">
                            <li>Patience and compassion</li>
                            <li>Background check required</li>
                            <li>Basic first aid knowledge helpful</li>
                        </ul>
                    </div>
                    <div class="opportunity-impact">
                        <span class="impact-label">Impact:</span>
                        <span class="impact-text">200+ seniors served, reduced isolation by 60%</span>
                    </div>
                    <div class="opportunity-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                        <button class="btn btn-sm btn-outline">Share</button>
                    </div>
                </div>
            </div>

            <!-- Education Support -->
            <div class="opportunity-card">
                <div class="opportunity-header">
                    <div class="opportunity-image">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                             alt="education support volunteers tutoring students">
                    </div>
                    <div class="opportunity-badge education">Education</div>
                    <div class="opportunity-status ongoing">Ongoing</div>
                </div>
                <div class="opportunity-content">
                    <h3 class="opportunity-title">After-School Tutoring</h3>
                    <p class="opportunity-description">Provide academic support and tutoring to students in need of extra help with homework and exam preparation.</p>
                    <div class="opportunity-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>3-5 PM, Weekdays</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Schools & Libraries</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>178 Volunteers</span>
                        </div>
                    </div>
                    <div class="opportunity-requirements">
                        <h4>Requirements:</h4>
                        <ul class="requirements-list">
                            <li>Strong academic background</li>
                            <li>Teaching experience preferred</li>
                            <li>Patience with children</li>
                        </ul>
                    </div>
                    <div class="opportunity-impact">
                        <span class="impact-label">Impact:</span>
                        <span class="impact-text">800+ students helped, 75% grade improvement</span>
                    </div>
                    <div class="opportunity-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                        <button class="btn btn-sm btn-outline">Share</button>
                    </div>
                </div>
            </div>

            <!-- Health Outreach -->
            <div class="opportunity-card">
                <div class="opportunity-header">
                    <div class="opportunity-image">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                             alt="health outreach volunteers conducting community health checks">
                    </div>
                    <div class="opportunity-badge health">Health</div>
                    <div class="opportunity-status ongoing">Ongoing</div>
                </div>
                <div class="opportunity-content">
                    <h3 class="opportunity-title">Community Health Outreach</h3>
                    <p class="opportunity-description">Assist with health education, screening programs, and health awareness campaigns in local communities.</p>
                    <div class="opportunity-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Weekend Events</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Health Centers</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>67 Volunteers</span>
                        </div>
                    </div>
                    <div class="opportunity-requirements">
                        <h4>Requirements:</h4>
                        <ul class="requirements-list">
                            <li>Health background preferred</li>
                            <li>Training provided</li>
                            <li>Weekend availability</li>
                        </ul>
                    </div>
                    <div class="opportunity-impact">
                        <span class="impact-label">Impact:</span>
                        <span class="impact-text">3,000+ health screenings, 50+ awareness events</span>
                    </div>
                    <div class="opportunity-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                        <button class="btn btn-sm btn-outline">Share</button>
                    </div>
                </div>
            </div>

            <!-- Community Events -->
            <div class="opportunity-card">
                <div class="opportunity-header">
                    <div class="opportunity-image">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                             alt="community event volunteers setting up for local festival">
                    </div>
                    <div class="opportunity-badge community">Community</div>
                    <div class="opportunity-status flexible">Flexible</div>
                </div>
                <div class="opportunity-content">
                    <h3 class="opportunity-title">Community Events Support</h3>
                    <p class="opportunity-description">Help organize and run community events including festivals, markets, and cultural celebrations throughout Bamenda.</p>
                    <div class="opportunity-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Event-based</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Various Venues</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>345 Volunteers</span>
                        </div>
                    </div>
                    <div class="opportunity-requirements">
                        <h4>Requirements:</h4>
                        <ul class="requirements-list">
                            <li>Event organization skills</li>
                            <li>Team player</li>
                            <li>Flexible schedule</li>
                        </ul>
                    </div>
                    <div class="opportunity-impact">
                        <span class="impact-label">Impact:</span>
                        <span class="impact-text">25+ events supported, 10,000+ attendees</span>
                    </div>
                    <div class="opportunity-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                        <button class="btn btn-sm btn-outline">Share</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="load-more-container">
            <button class="btn btn-outline" onclick="loadMoreOpportunities()">Load More Opportunities</button>
        </div>
    </div>
</section>

<!-- Volunteer Benefits -->
<section class="volunteer-benefits-section" id="volunteer-benefits">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Volunteer Benefits</h2>
            <p class="section-subtitle">Rewards and advantages of volunteering with Bamenda City Council</p>
        </div>

        <div class="benefits-grid">
            <div class="benefit-card">
                <div class="benefit-icon">
                    <span class="material-symbols-outlined">workspace_premium</span>
                </div>
                <h3 class="benefit-title">Skill Development</h3>
                <p class="benefit-description">Gain valuable skills and experience that enhance your personal and professional growth.</p>
                <div class="benefit-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Leadership Training</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Project Management</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Communication Skills</span>
                    </div>
                </div>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <h3 class="benefit-title">Training & Certification</h3>
                <p class="benefit-description">Access free training programs and earn recognized certifications for your volunteer work.</p>
                <div class="benefit-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Free Workshops</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Official Certificates</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Professional Development</span>
                    </div>
                </div>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">
                    <span class="material-symbols-outlined">handshake</span>
                </div>
                <h3 class="benefit-title">Networking Opportunities</h3>
                <p class="benefit-description">Connect with like-minded individuals and build valuable community and professional relationships.</p>
                <div class="benefit-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Community Leaders</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Professional Contacts</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Partnership Opportunities</span>
                    </div>
                </div>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">
                    <span class="material-symbols-outlined">card_membership</span>
                </div>
                <h3 class="benefit-title">Recognition & Awards</h3>
                <p class="benefit-description">Get recognized for your contributions through awards, certificates, and public acknowledgment.</p>
                <div class="benefit-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Volunteer Awards</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Service Certificates</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Public Recognition</span>
                    </div>
                </div>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">
                    <span class="material-symbols-outlined">local_activity</span>
                </div>
                <h3 class="benefit-title">Exclusive Events</h3>
                <p class="benefit-description">Attend special events, workshops, and gatherings reserved for dedicated volunteers.</p>
                <div class="benefit-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Volunteer Galas</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Training Retreats</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Community Celebrations</span>
                    </div>
                </div>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">
                    <span class="material-symbols-outlined">psychology</span>
                </div>
                <h3 class="benefit-title">Personal Fulfillment</h3>
                <p class="benefit-description">Experience the joy and satisfaction that comes from making a positive impact in your community.</p>
                <div class="benefit-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Sense of Purpose</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Community Connection</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Personal Growth</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Volunteer Registration -->
<section class="volunteer-registration-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Become a Volunteer</h2>
            <p class="section-subtitle">Register to join our volunteer community and start making a difference</p>
        </div>

        <div class="registration-form">
            <form id="volunteerRegistrationForm">
                <div class="form-section">
                    <h3 class="section-title">Personal Information</h3>
                    
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
                            <label class="form-label">Email Address *</label>
                            <input type="email" class="form-input" placeholder="your@email.com" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Phone Number *</label>
                            <input type="tel" class="form-input" placeholder="+237 233 000 000" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Address *</label>
                        <input type="text" class="form-input" placeholder="Your residential address in Bamenda" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Occupation</label>
                            <input type="text" class="form-input" placeholder="Your current occupation">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Educational Background</label>
                            <select class="form-select">
                                <option value="">Select education level</option>
                                <option value="high-school">High School</option>
                                <option value="diploma">Diploma</option>
                                <option value="bachelors">Bachelor's Degree</option>
                                <option value="masters">Master's Degree</option>
                                <option value="phd">PhD/Doctorate</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">Volunteer Preferences</h3>
                    
                    <div class="form-group">
                        <label class="form-label">Areas of Interest *</label>
                        <div class="checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="interests" value="environmental">
                                <span class="checkmark"></span>
                                Environmental Conservation
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="interests" value="education">
                                <span class="checkmark"></span>
                                Education & Tutoring
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="interests" value="health">
                                <span class="checkmark"></span>
                                Health Services
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="interests" value="youth">
                                <span class="checkmark"></span>
                                Youth Development
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="interests" value="senior">
                                <span class="checkmark"></span>
                                Senior Services
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="interests" value="community">
                                <span class="checkmark"></span>
                                Community Events
                            </label>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Time Commitment *</label>
                            <select class="form-select" required>
                                <option value="">Select time commitment</option>
                                <option value="flexible">Flexible</option>
                                <option value="1-5">1-5 hours per week</option>
                                <option value="5-10">5-10 hours per week</option>
                                <option value="10+">10+ hours per week</option>
                                <option value="weekend">Weekend only</option>
                                <option value="events">Event-based only</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Availability *</label>
                            <select class="form-select" required>
                                <option value="">Select availability</option>
                                <option value="weekdays">Weekdays</option>
                                <option value="weekends">Weekends</option>
                                <option value="both">Weekdays & Weekends</option>
                                <option value="evenings">Evenings only</option>
                                <option value="flexible">Flexible</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Skills & Experience</label>
                        <textarea class="form-textarea" rows="3" placeholder="Tell us about your relevant skills and experience"></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Motivation for Volunteering</label>
                        <textarea class="form-textarea" rows="3" placeholder="Why do you want to volunteer with Bamenda City Council?"></textarea>
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">Additional Information</h3>
                    
                    <div class="form-group">
                        <label class="form-label">Emergency Contact Name *</label>
                        <input type="text" class="form-input" placeholder="Emergency contact person" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Emergency Contact Phone *</label>
                            <input type="tel" class="form-input" placeholder="Emergency contact phone" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Relationship</label>
                            <input type="text" class="form-input" placeholder="Relationship to emergency contact">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Medical Conditions</label>
                        <textarea class="form-textarea" rows="2" placeholder="Any medical conditions we should be aware of (optional)"></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label">How did you hear about us?</label>
                        <select class="form-select">
                            <option value="">Select option</option>
                            <option value="website">City Council Website</option>
                            <option value="social">Social Media</option>
                            <option value="friend">Friend/Family</option>
                            <option value="event">Community Event</option>
                            <option value="school">School/University</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Agreement *</label>
                        <div class="checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="agreement" required>
                                <span class="checkmark"></span>
                                I agree to the volunteer terms and conditions and understand that my information will be used for volunteer coordination purposes.
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
</section>

<!-- Volunteer Impact -->
<section class="volunteer-impact-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Volunteer Impact</h2>
            <p class="section-subtitle">How our volunteers are making a difference in Bamenda</p>
        </div>

        <div class="impact-stats">
            <div class="impact-stat">
                <div class="impact-number">45,678</div>
                <div class="impact-label">Hours Contributed</div>
                <div class="impact-description">This year</div>
            </div>

            <div class="impact-stat">
                <div class="impact-number">156</div>
                <div class="impact-label">Projects Completed</div>
                <div class="impact-description">With volunteer support</div>
            </div>

            <div class="impact-stat">
                <div class="impact-number">25,000+</div>
                <div class="impact-label">Lives Impacted</div>
                <div class="impact-description">Directly and indirectly</div>
            </div>
        </div>

        <div class="success-stories">
            <h3>Volunteer Success Stories</h3>
            <div class="stories-grid">
                <div class="story-card">
                    <div class="story-image">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                             alt="volunteer success story showing environmental impact">
                    </div>
                    <div class="story-content">
                        <h4 class="story-title">Green Bamenda Initiative</h4>
                        <p class="story-description">Our environmental volunteers have planted over 5,000 trees and organized 20+ cleanup events, making Bamenda greener and cleaner.</p>
                        <div class="story-impact">
                            <span class="impact-label">Volunteers:</span>
                            <span class="impact-text">234 volunteers</span>
                        </div>
                    </div>
                </div>

                <div class="story-card">
                    <div class="story-image">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                             alt="volunteer success story showing youth mentorship">
                    </div>
                    <div class="story-content">
                        <h4 class="story-title">Youth Mentorship Program</h4>
                        <p class="story-description">156 volunteers mentor over 500 youth, resulting in 85% improvement in academic performance and personal development.</p>
                        <div class="story-impact">
                            <span class="impact-label">Volunteers:</span>
                            <span class="impact-text">156 volunteers</span>
                        </div>
                    </div>
                </div>

                <div class="story-card">
                    <div class="story-image">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                             alt="volunteer success story showing community events">
                    </div>
                    <div class="story-content">
                        <h4 class="story-title">Community Events Support</h4>
                        <p class="story-description">345 event volunteers support 25+ community events annually, engaging over 10,000 residents in cultural and social activities.</p>
                        <div class="story-impact">
                            <span class="impact-label">Volunteers:</span>
                            <span class="impact-text">345 volunteers</span>
                        </div>
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
/* Volunteer Page Styles */
.volunteer-hero {
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

/* Volunteer Statistics Section */
.volunteer-stats-section {
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

/* Volunteer Opportunities Section */
.volunteer-opportunities-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.opportunities-filters {
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

.opportunities-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.opportunity-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
    overflow: hidden;
}

.opportunity-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.opportunity-header {
    position: relative;
}

.opportunity-image {
    height: 200px;
    overflow: hidden;
}

.opportunity-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.opportunity-badge {
    position: absolute;
    top: var(--spacing-lg);
    left: var(--spacing-lg);
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.opportunity-badge.environmental {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.opportunity-badge.youth {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.opportunity-badge.senior {
    background-color: var(--primary);
    color: var(--on-primary);
}

.opportunity-badge.education {
    background-color: var(--error);
    color: var(--on-error);
}

.opportunity-badge.health {
    background-color: var(--tertiary-container);
    color: var(--on-tertiary-container);
}

.opportunity-badge.community {
    background-color: var(--secondary-container);
    color: var(--on-secondary-container);
}

.opportunity-status {
    position: absolute;
    top: var(--spacing-lg);
    right: var(--spacing-lg);
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.opportunity-status.ongoing {
    background-color: var(--primary);
    color: var(--on-primary);
}

.opportunity-status.flexible {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.opportunity-content {
    padding: var(--spacing-lg);
}

.opportunity-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.opportunity-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.opportunity-details {
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

.opportunity-requirements {
    margin-bottom: var(--spacing-lg);
}

.opportunity-requirements h4 {
    font-size: 1rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.requirements-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.requirements-list li {
    padding: var(--spacing-xs) 0;
    color: var(--on-surface-variant);
    font-size: 0.875rem;
    position: relative;
    padding-left: var(--spacing-lg);
}

.requirements-list li::before {
    content: '•';
    position: absolute;
    left: 0;
    color: var(--primary);
    font-weight: 700;
}

.opportunity-impact {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    padding: var(--spacing-sm);
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
    font-size: 0.875rem;
    margin-bottom: var(--spacing-lg);
}

.impact-label {
    font-weight: 600;
    color: var(--on-surface-variant);
}

.impact-text {
    font-weight: 500;
    color: var(--primary);
}

.opportunity-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Volunteer Benefits Section */
.volunteer-benefits-section {
    padding: var(--spacing-3xl) 0;
}

.benefits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.benefit-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.benefit-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.benefit-icon {
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

.benefit-icon .material-symbols-outlined {
    font-size: 2rem;
}

.benefit-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.benefit-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.benefit-features {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
}

.feature-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    color: var(--on-surface-variant);
    font-size: 0.875rem;
}

.feature-item .material-symbols-outlined {
    font-size: 1rem;
    color: var(--tertiary);
}

/* Volunteer Registration Section */
.volunteer-registration-section {
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

.checkbox-group {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
}

.checkbox-label {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    cursor: pointer;
    color: var(--on-surface);
}

.checkbox-label input[type="checkbox"] {
    display: none;
}

.checkmark {
    width: 1.25rem;
    height: 1.25rem;
    border: 2px solid var(--outline-variant);
    border-radius: var(--radius-xs);
    position: relative;
    transition: all 0.2s ease;
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

/* Volunteer Impact Section */
.volunteer-impact-section {
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
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.story-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
    overflow: hidden;
}

.story-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.story-image {
    height: 180px;
    overflow: hidden;
}

.story-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.story-content {
    padding: var(--spacing-lg);
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

.story-impact .impact-text {
    font-weight: 700;
    color: var(--primary);
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
    
    .opportunities-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .benefits-grid {
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
    
    .opportunity-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .benefit-card {
        padding: var(--spacing-lg);
    }
    
    .benefit-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .benefit-icon .material-symbols-outlined {
        font-size: 1.5rem;
    }
    
    .registration-form {
        padding: var(--spacing-lg);
    }
    
    .story-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
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
function openVolunteerOpportunities() {
    document.getElementById('volunteer-opportunities').scrollIntoView({ behavior: 'smooth' });
}

function openVolunteerRegistration() {
    document.getElementById('volunteer-registration').scrollIntoView({ behavior: 'smooth' });
}

function openVolunteerCalendar() {
    alert('Volunteer calendar would open here. In production, this would show a calendar of volunteer events and activities.');
}

function openVolunteerTraining() {
    alert('Volunteer training programs would open here. In production, this would show available training and workshops.');
}

function openVolunteerImpact() {
    document.getElementById('volunteer-impact').scrollIntoView({ behavior: 'smooth' });
}

function openVolunteerStories() {
    alert('Volunteer stories section would open here. In production, this would show inspiring stories from volunteers.');
}

// Opportunity filtering
function filterOpportunities() {
    const programType = document.getElementById('programType').value;
    const timeCommitment = document.getElementById('timeCommitment').value;
    const skillLevel = document.getElementById('skillLevel').value;
    
    // In production, this would filter the opportunities
    alert(`Filtering opportunities by: ${programType || 'All Programs'}, ${timeCommitment || 'All Durations'}, ${skillLevel || 'All Levels'}`);
}

// Load more opportunities
function loadMoreOpportunities() {
    // In production, this would load more opportunities from the server
    alert('Loading more volunteer opportunities...');
}

// Opportunity actions
document.querySelectorAll('.opportunity-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Apply')) {
        button.addEventListener('click', function() {
            const opportunityTitle = this.closest('.opportunity-card').querySelector('.opportunity-title').textContent;
            alert(`Opening application for: "${opportunityTitle}"`);
            // In production, this would open the application form or redirect to registration
        });
    }
});

document.querySelectorAll('.opportunity-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Learn More')) {
        button.addEventListener('click', function() {
            const opportunityTitle = this.closest('.opportunity-card').querySelector('.opportunity-title').textContent;
            alert(`Detailed view for: "${opportunityTitle}"`);
        });
    }
    
    if (button.textContent.includes('Share')) {
        button.addEventListener('click', function() {
            const opportunityTitle = this.closest('.opportunity-card').querySelector('.opportunity-title').textContent;
            alert(`Sharing: "${opportunityTitle}" volunteer opportunity`);
        });
    }
});

// Volunteer registration form submission
document.getElementById('volunteerRegistrationForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate that at least one interest is selected
    const interests = document.querySelectorAll('input[name="interests"]:checked');
    if (interests.length === 0) {
        alert('Please select at least one area of interest.');
        return;
    }
    
    alert('Volunteer application submitted successfully! We will contact you within 3 business days to discuss next steps.');
    // In production, this would submit the volunteer application
});

// Progress animation on scroll
window.addEventListener('scroll', function() {
    const statCards = document.querySelectorAll('.stat-card, .impact-stat');
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

// Auto-refresh volunteer data
function refreshVolunteerData() {
    // In production, this would fetch real-time volunteer data
    console.log('Refreshing volunteer data...');
}

// Refresh data every 60 seconds
setInterval(refreshVolunteerData, 60000);
</script>
