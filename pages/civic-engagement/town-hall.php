<?php
/**
 * Bamenda City Council E-Governance Platform
 * Town Hall Meetings Page
 */

// Set page metadata
$page_title = 'Town Hall Meetings | Bamenda City Council';
$page_description = 'Participate in town hall meetings, community discussions, and democratic decision-making processes.';
$page_keywords = 'town hall meetings, community meetings, civic engagement, democratic participation, Bamenda';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Civic', 'url' => '../index.php'],
    ['title' => 'Town Hall Meetings', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero town-hall-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-civic-engagement.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Town Hall Meetings</span>
            <h1 class="hero-title">Community Dialogue</h1>
            <p class="hero-subtitle">
                Join town hall meetings to discuss community issues, share your voice, and participate in democratic decision-making.
            </p>
            <div class="hero-actions">
                <a href="#upcoming-meetings" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">groups</span>
                    Upcoming Meetings
                </a>
                <a href="#participate" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">how_to_reg</span>
                    Participate
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Meeting Actions</h2>
            <p class="section-subtitle">Quick access to town hall meeting activities</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openUpcomingMeetings()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">event</span>
                </div>
                <h3 class="action-title">Upcoming Meetings</h3>
                <p class="action-description">View scheduled town hall meetings and community discussions</p>
            </div>

            <div class="action-card" onclick="openPastMeetings()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">history</span>
                </div>
                <h3 class="action-title">Past Meetings</h3>
                <p class="action-description">Review previous meetings and their outcomes</p>
            </div>

            <div class="action-card" onclick="openMeetingRegistration()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">how_to_reg</span>
                </div>
                <h3 class="action-title">Register for Meeting</h3>
                <p class="action-description">Sign up to attend upcoming town hall meetings</p>
            </div>

            <div class="action-card" onclick="openLiveStream()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">live_tv</span>
                </div>
                <h3 class="action-title">Live Stream</h3>
                <p class="action-description">Watch meetings live from anywhere</p>
            </div>

            <div class="action-card" onclick="openMeetingAgenda()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">menu_book</span>
                </div>
                <h3 class="action-title">Meeting Agenda</h3>
                <p class="action-description">View upcoming meeting topics and discussion points</p>
            </div>

            <div class="action-card" onclick="openMeetingMinutes()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <h3 class="action-title">Meeting Minutes</h3>
                <p class="action-description">Access official meeting records and decisions</p>
            </div>
        </div>
    </div>
</section>

<!-- Meeting Statistics -->
<section class="meeting-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">24</div>
                    <div class="stat-label">Meetings This Year</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+4 this quarter</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">people</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">12,456</div>
                    <div class="stat-label">Total Attendees</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+1,234 this month</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">forum</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">156</div>
                    <div class="stat-label">Topics Discussed</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+23 this quarter</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">check_circle</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">78%</div>
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

<!-- Upcoming Meetings -->
<section class="upcoming-meetings-section" id="upcoming-meetings">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Upcoming Town Hall Meetings</h2>
            <p class="section-subtitle">Schedule and details for upcoming community meetings</p>
        </div>

        <div class="meetings-filters">
            <div class="filter-row">
                <div class="form-group">
                    <label class="form-label">Meeting Type</label>
                    <select class="form-select" id="meetingType">
                        <option value="">All Types</option>
                        <option value="general">General Town Hall</option>
                        <option value="special">Special Topic</option>
                        <option value="budget">Budget Discussion</option>
                        <option value="planning">Planning Session</option>
                        <option value="emergency">Emergency Meeting</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Location</label>
                    <select class="form-select" id="meetingLocation">
                        <option value="">All Locations</option>
                        <option value="city-hall">City Hall</option>
                        <option value="community-center">Community Center</option>
                        <option value="nkwen">Nkwen Community Hall</option>
                        <option value="mankon">Mankon Community Hall</option>
                        <option value="bambili">Bambili Community Hall</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Status</label>
                    <select class="form-select" id="meetingStatus">
                        <option value="">All Status</option>
                        <option value="open">Open for Registration</option>
                        <option value="full">Registration Full</option>
                        <option value="virtual">Virtual Only</option>
                    </select>
                </div>
                <button class="btn btn-primary" onclick="filterMeetings()">Filter</button>
            </div>
        </div>

        <div class="meetings-grid">
            <!-- General Town Hall Meeting -->
            <div class="meeting-card">
                <div class="meeting-header">
                    <div class="meeting-badge general">General Town Hall</div>
                    <div class="meeting-status open">Open for Registration</div>
                </div>
                <div class="meeting-content">
                    <h3 class="meeting-title">Community Development Update</h3>
                    <p class="meeting-description">Join us for a comprehensive update on community development projects, infrastructure improvements, and upcoming initiatives for Bamenda.</p>
                    <div class="meeting-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">event</span>
                            <span>March 28, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>6:00 PM - 8:00 PM</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>City Hall Main Auditorium</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>234 Registered</span>
                        </div>
                    </div>
                    
                    <div class="meeting-agenda">
                        <h4>Agenda Items:</h4>
                        <ul class="agenda-list">
                            <li>Infrastructure Development Progress Report</li>
                            <li>Q1 Community Achievements</li>
                            <li>Upcoming Projects and Initiatives</li>
                            <li>Public Q&A Session</li>
                            <li>Community Feedback Collection</li>
                        </ul>
                    </div>
                    
                    <div class="meeting-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">live_tv</span>
                            <span>Live Stream Available</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">record_voice_over</span>
                            <span>Public Speaking Allowed</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">translate</span>
                            <span>Translation Services</span>
                        </div>
                    </div>
                    
                    <div class="meeting-actions">
                        <button class="btn btn-sm btn-primary" onclick="registerForMeeting('general')">Register Now</button>
                        <button class="btn btn-sm btn-outline" onclick="viewMeetingDetails('general')">View Details</button>
                        <button class="btn btn-sm btn-outline" onclick="addToCalendar('general')">Add to Calendar</button>
                    </div>
                </div>
            </div>

            <!-- Budget Discussion -->
            <div class="meeting-card">
                <div class="meeting-header">
                    <div class="meeting-badge budget">Budget Discussion</div>
                    <div class="meeting-status open">Open for Registration</div>
                </div>
                <div class="meeting-content">
                    <h3 class="meeting-title">2024 Budget Review & Planning</h3>
                    <p class="meeting-description">Participate in the annual budget review process. Discuss priorities, allocations, and community needs for the upcoming fiscal year.</p>
                    <div class="meeting-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">event</span>
                            <span>April 5, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>5:30 PM - 7:30 PM</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Community Center Conference Room</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>156 Registered</span>
                        </div>
                    </div>
                    
                    <div class="meeting-agenda">
                        <h4>Agenda Items:</h4>
                        <ul class="agenda-list">
                            <li>2023 Budget Performance Review</li>
                            <li>2024 Budget Proposal Presentation</li>
                            <li>Community Priority Discussion</li>
                            <li>Department Budget Allocations</li>
                            <li>Public Input Session</li>
                        </ul>
                    </div>
                    
                    <div class="meeting-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">live_tv</span>
                            <span>Live Stream Available</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">description</span>
                            <span>Pre-meeting Materials</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">poll</span>
                            <span>Live Polling</span>
                        </div>
                    </div>
                    
                    <div class="meeting-actions">
                        <button class="btn btn-sm btn-primary" onclick="registerForMeeting('budget')">Register Now</button>
                        <button class="btn btn-sm btn-outline" onclick="viewMeetingDetails('budget')">View Details</button>
                        <button class="btn btn-sm btn-outline" onclick="addToCalendar('budget')">Add to Calendar</button>
                    </div>
                </div>
            </div>

            <!-- Planning Session -->
            <div class="meeting-card">
                <div class="meeting-header">
                    <div class="meeting-badge planning">Planning Session</div>
                    <div class="meeting-status virtual">Virtual Only</div>
                </div>
                <div class="meeting-content">
                    <h3 class="meeting-title">Urban Planning Workshop</h3>
                    <p class="meeting-description">Virtual workshop to discuss Bamenda's urban development plans, zoning regulations, and future growth strategies.</p>
                    <div class="meeting-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">event</span>
                            <span>April 12, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>2:00 PM - 4:00 PM</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">videocam</span>
                            <span>Virtual Meeting (Zoom)</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>89 Registered</span>
                        </div>
                    </div>
                    
                    <div class="meeting-agenda">
                        <h4>Agenda Items:</h4>
                        <ul class="agenda-list">
                            <li>Current Urban Challenges</li>
                            <li>Development Framework Overview</li>
                            <li>Zoning Regulation Updates</li>
                            <li>Interactive Planning Activities</li>
                            <li>Community Feedback Session</li>
                        </ul>
                    </div>
                    
                    <div class="meeting-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">videocam</span>
                            <span>Virtual Meeting</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>Breakout Rooms</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">screen_share</span>
                            <span>Screen Sharing</span>
                        </div>
                    </div>
                    
                    <div class="meeting-actions">
                        <button class="btn btn-sm btn-primary" onclick="registerForMeeting('planning')">Register Now</button>
                        <button class="btn btn-sm btn-outline" onclick="viewMeetingDetails('planning')">View Details</button>
                        <button class="btn btn-sm btn-outline" onclick="addToCalendar('planning')">Add to Calendar</button>
                    </div>
                </div>
            </div>

            <!-- Special Topic Meeting -->
            <div class="meeting-card">
                <div class="meeting-header">
                    <div class="meeting-badge special">Special Topic</div>
                    <div class="meeting-status full">Registration Full</div>
                </div>
                <div class="meeting-content">
                    <h3 class="meeting-title">Youth Employment Initiative</h3>
                    <p class="meeting-description">Special meeting focused on youth employment challenges, opportunities, and collaborative solutions for Bamenda's young population.</p>
                    <div class="meeting-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">event</span>
                            <span>April 18, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>3:00 PM - 5:00 PM</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Nkwen Community Hall</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>300 Registered (Full)</span>
                        </div>
                    </div>
                    
                    <div class="meeting-agenda">
                        <h4>Agenda Items:</h4>
                        <ul class="agenda-list">
                            <li>Current Youth Employment Statistics</li>
                            <li>Skills Training Programs</li>
                            <li>Entrepreneurship Opportunities</li>
                            <li>Private Sector Partnerships</li>
                            <li>Youth Success Stories</li>
                        </ul>
                    </div>
                    
                    <div class="meeting-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">live_tv</span>
                            <span>Live Stream Available</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">record_voice_over</span>
                            <span>Youth Speakers</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">business_center</span>
                            <span>Employer Panel</span>
                        </div>
                    </div>
                    
                    <div class="meeting-actions">
                        <button class="btn btn-sm btn-outline" onclick="viewMeetingDetails('youth')">View Details</button>
                        <button class="btn btn-sm btn-outline" onclick="joinWaitlist('youth')">Join Waitlist</button>
                        <button class="btn btn-sm btn-outline" onclick="addToCalendar('youth')">Add to Calendar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="load-more-container">
            <button class="btn btn-outline" onclick="loadMoreMeetings()">Load More Meetings</button>
        </div>
    </div>
</section>

<!-- Participation Guidelines -->
<section class="participation-section" id="participate">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">How to Participate</h2>
            <p class="section-subtitle">Guidelines for effective participation in town hall meetings</p>
        </div>

        <div class="participation-steps">
            <div class="step-card">
                <div class="step-number">1</div>
                <div class="step-icon">
                    <span class="material-symbols-outlined">event_available</span>
                </div>
                <h3 class="step-title">Check Meeting Schedule</h3>
                <p class="step-description">Review the upcoming meetings calendar and choose topics that interest you or affect your community.</p>
            </div>

            <div class="step-card">
                <div class="step-number">2</div>
                <div class="step-icon">
                    <span class="material-symbols-outlined">how_to_reg</span>
                </div>
                <h3 class="step-title">Register in Advance</h3>
                <p class="step-description">Register early to secure your spot, as some meetings have limited capacity due to venue constraints.</p>
            </div>

            <div class="step-card">
                <div class="step-number">3</div>
                <div class="step-icon">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <h3 class="step-title">Review Meeting Materials</h3>
                <p class="step-description">Access pre-meeting documents, agendas, and background information to prepare for discussion.</p>
            </div>

            <div class="step-card">
                <div class="step-number">4</div>
                <div class="step-icon">
                    <span class="material-symbols-outlined">mic</span>
                </div>
                <h3 class="step-title">Prepare Your Input</h3>
                <p class="step-description">Organize your thoughts, questions, and suggestions to contribute meaningfully to the discussion.</p>
            </div>

            <div class="step-card">
                <div class="step-number">5</div>
                <div class="step-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <h3 class="step-title">Attend and Participate</h3>
                <p class="step-description">Join the meeting, listen actively, and share your perspective during designated discussion periods.</p>
            </div>

            <div class="step-card">
                <div class="step-number">6</div>
                <div class="step-icon">
                    <span class="material-symbols-outlined">track_changes</span>
                </div>
                <h3 class="step-title">Follow Up</h3>
                <p class="step-description">Monitor how your input influences decisions and follow up on action items from the meeting.</p>
            </div>
        </div>

        <div class="participation-guidelines">
            <h3>Meeting Guidelines</h3>
            <div class="guidelines-grid">
                <div class="guideline-item">
                    <div class="guideline-icon">
                        <span class="material-symbols-outlined">schedule</span>
                    </div>
                    <h4>Be On Time</h4>
                    <p>Arrive 15 minutes early to allow for check-in and seating.</p>
                </div>

                <div class="guideline-item">
                    <div class="guideline-icon">
                        <span class="material-symbols-outlined">record_voice_over</span>
                    </div>
                    <h4>Respect Time Limits</h4>
                    <p>Keep your contributions concise and within allocated time limits.</p>
                </div>

                <div class="guideline-item">
                    <div class="guideline-icon">
                        <span class="material-symbols-outlined">people</span>
                    </div>
                    <h4>Be Respectful</h4>
                    <p>Maintain respectful communication with all participants.</p>
                </div>

                <div class="guideline-item">
                    <div class="guideline-icon">
                        <span class="material-symbols-outlined">fact_check</span>
                    </div>
                    <h4>Stay On Topic</h4>
                    <p>Focus your comments on the agenda items and meeting purpose.</p>
                </div>

                <div class="guideline-item">
                    <div class="guideline-icon">
                        <span class="material-symbols-outlined">diversity_3</span>
                    </div>
                    <h4>Be Inclusive</h4>
                    <p>Consider diverse perspectives and community needs.</p>
                </div>

                <div class="guideline-item">
                    <div class="guideline-icon">
                        <span class="material-symbols-outlined">build</span>
                    </div>
                    <h4>Be Constructive</h4>
                    <p>Offer solutions and suggestions, not just problems.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Meeting Registration -->
<section class="meeting-registration-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Register for Meeting</h2>
            <p class="section-subtitle">Sign up to attend upcoming town hall meetings</p>
        </div>

        <div class="registration-form">
            <form id="meetingRegistrationForm">
                <div class="form-section">
                    <h3 class="section-title">Meeting Selection</h3>
                    
                    <div class="form-group">
                        <label class="form-label">Select Meeting *</label>
                        <select class="form-select" required>
                            <option value="">Choose a meeting to attend</option>
                            <option value="general">Community Development Update - March 28, 2024</option>
                            <option value="budget">2024 Budget Review & Planning - April 5, 2024</option>
                            <option value="planning">Urban Planning Workshop - April 12, 2024</option>
                            <option value="youth">Youth Employment Initiative - April 18, 2024</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Attendance Type *</label>
                        <select class="form-select" required>
                            <option value="">Select attendance type</option>
                            <option value="in-person">In-Person</option>
                            <option value="virtual">Virtual Attendance</option>
                            <option value="both">Flexible (Either)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Special Requirements</label>
                        <textarea class="form-textarea" rows="3" placeholder="Any special accommodation or requirements (e.g., wheelchair access, translation needs)"></textarea>
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">Personal Information</h3>
                    
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
                            <label class="form-label">Phone Number *</label>
                            <input type="tel" class="form-input" placeholder="+237 233 000 000" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Address in Bamenda *</label>
                            <input type="text" class="form-input" placeholder="Your residential area" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Organization/Affiliation (Optional)</label>
                        <input type="text" class="form-input" placeholder="Your organization or community group">
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">Meeting Participation</h3>
                    
                    <div class="form-group">
                        <label class="form-label">Topics of Interest</label>
                        <div class="checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="topics" value="infrastructure">
                                <span class="checkmark"></span>
                                Infrastructure Development
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="topics" value="budget">
                                <span class="checkmark"></span>
                                Budget & Finance
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="topics" value="planning">
                                <span class="checkmark"></span>
                                Urban Planning
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="topics" value="youth">
                                <span class="checkmark"></span>
                                Youth Programs
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="topics" value="environment">
                                <span class="checkmark"></span>
                                Environmental Issues
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="topics" value="health">
                                <span class="checkmark"></span>
                                Health Services
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Would you like to speak during the meeting?</label>
                        <select class="form-select">
                            <option value="">Select option</option>
                            <option value="yes">Yes, I would like to speak</option>
                            <option value="maybe">Maybe, depending on the topic</option>
                            <option value="no">No, I prefer to listen</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Questions or Comments</label>
                        <textarea class="form-textarea" rows="3" placeholder="Any specific questions or topics you'd like to see addressed"></textarea>
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">Preferences</h3>
                    
                    <div class="form-group">
                        <label class="form-label">How did you hear about this meeting?</label>
                        <select class="form-select">
                            <option value="">Select option</option>
                            <option value="website">City Council Website</option>
                            <option value="social">Social Media</option>
                            <option value="email">Email Notification</option>
                            <option value="friend">Friend/Family</option>
                            <option value="community">Community Center</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Would you like to receive notifications about future meetings?</label>
                        <select class="form-select">
                            <option value="">Select option</option>
                            <option value="yes">Yes, all meetings</option>
                            <option value="topics">Yes, specific topics only</option>
                            <option value="no">No, thank you</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Agreement *</label>
                        <div class="checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="agreement" required>
                                <span class="checkmark"></span>
                                I understand that registration is subject to availability and I will receive confirmation details via email.
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="reset" class="btn btn-outline">Reset</button>
                    <button type="submit" class="btn btn-primary">Register Now</button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Past Meetings -->
<section class="past-meetings-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Past Meetings</h2>
            <p class="section-subtitle">Review previous town hall meetings and their outcomes</p>
        </div>

        <div class="past-meetings-grid">
            <div class="past-meeting-card">
                <div class="meeting-header">
                    <h3 class="meeting-title">Community Safety Forum</h3>
                    <div class="meeting-date">March 15, 2024</div>
                </div>
                <div class="meeting-content">
                    <p class="meeting-description">Discussion on community safety initiatives, police-community relations, and crime prevention strategies.</p>
                    <div class="meeting-stats">
                        <span class="stat">Attendees: 189</span>
                        <span class="stat">Duration: 2 hours</span>
                    </div>
                    <div class="meeting-outcomes">
                        <h4>Key Outcomes:</h4>
                        <ul class="outcomes-list">
                            <li>Community watch program established</li>
                            <li>Police-community liaison committee formed</li>
                            <li>Safety awareness campaign launched</li>
                        </ul>
                    </div>
                    <div class="meeting-actions">
                        <button class="btn btn-sm btn-outline" onclick="viewMeetingMinutes('safety')">View Minutes</button>
                        <button class="btn btn-sm btn-outline" onclick="watchRecording('safety')">Watch Recording</button>
                    </div>
                </div>
            </div>

            <div class="past-meeting-card">
                <div class="meeting-header">
                    <h3 class="meeting-title">Education Forum</h3>
                    <div class="meeting-date">February 28, 2024</div>
                </div>
                <div class="meeting-content">
                    <p class="meeting-description">Discussion on educational challenges, school improvements, and student support programs in Bamenda.</p>
                    <div class="meeting-stats">
                        <span class="stat">Attendees: 234</span>
                        <span class="stat">Duration: 2.5 hours</span>
                    </div>
                    <div class="meeting-outcomes">
                        <h4>Key Outcomes:</h4>
                        <ul class="outcomes-list">
                            <li>Teacher training program approved</li>
                            <li>School infrastructure budget allocated</li>
                            <li>Student mentorship program expanded</li>
                        </ul>
                    </div>
                    <div class="meeting-actions">
                        <button class="btn btn-sm btn-outline" onclick="viewMeetingMinutes('education')">View Minutes</button>
                        <button class="btn btn-sm btn-outline" onclick="watchRecording('education')">Watch Recording</button>
                    </div>
                </div>
            </div>

            <div class="past-meeting-card">
                <div class="meeting-header">
                    <h3 class="meeting-title">Health Services Review</h3>
                    <div class="meeting-date">February 10, 2024</div>
                </div>
                <div class="meeting-content">
                    <p class="meeting-description">Review of healthcare services, medical facilities, and public health initiatives in Bamenda.</p>
                    <div class="meeting-stats">
                        <span class="stat">Attendees: 167</span>
                        <span class="stat">Duration: 2 hours</span>
                    </div>
                    <div class="meeting-outcomes">
                        <h4>Key Outcomes:</h4>
                        <ul class="outcomes-list">
                            <li>Mobile clinic schedule expanded</li>
                            <li>Health awareness campaigns planned</li>
                            <li>Medical facility upgrades approved</li>
                        </ul>
                    </div>
                    <div class="meeting-actions">
                        <button class="btn btn-sm btn-outline" onclick="viewMeetingMinutes('health')">View Minutes</button>
                        <button class="btn btn-sm btn-outline" onclick="watchRecording('health')">Watch Recording</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="load-more-container">
            <button class="btn btn-outline" onclick="loadMorePastMeetings()">Load More Past Meetings</button>
        </div>
    </div>
</section>

<!-- Meeting Resources -->
<section class="meeting-resources-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Meeting Resources</h2>
            <p class="section-subtitle">Access meeting materials, recordings, and documentation</p>
        </div>

        <div class="resources-grid">
            <div class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">menu_book</span>
                </div>
                <h3 class="resource-title">Meeting Agendas</h3>
                <p class="resource-description">Download upcoming meeting agendas and discussion topics in advance.</p>
                <div class="resource-stats">
                    <span class="stat-item">
                        <span class="stat-number">12</span>
                        <span class="stat-label">Available Agendas</span>
                    </span>
                </div>
                <button class="btn btn-primary">Browse Agendas</button>
            </div>

            <div class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <h3 class="resource-title">Meeting Minutes</h3>
                <p class="resource-description">Access official meeting minutes, decisions, and action items from past meetings.</p>
                <div class="resource-stats">
                    <span class="stat-item">
                        <span class="stat-number">45</span>
                        <span class="stat-label">Meeting Records</span>
                    </span>
                </div>
                <button class="btn btn-primary">View Minutes</button>
            </div>

            <div class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">videocam</span>
                </div>
                <h3 class="resource-title">Meeting Recordings</h3>
                <p class="resource-description">Watch recordings of past meetings and catch up on discussions you missed.</p>
                <div class="resource-stats">
                    <span class="stat-item">
                        <span class="stat-number">38</span>
                        <span class="stat-label">Video Recordings</span>
                    </span>
                </div>
                <button class="btn btn-primary">Watch Recordings</button>
            </div>

            <div class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">insert_drive_file</span>
                </div>
                <h3 class="resource-title">Supporting Documents</h3>
                <p class="resource-description">Access supporting documents, reports, and presentations from meetings.</p>
                <div class="resource-stats">
                    <span class="stat-item">
                        <span class="stat-number">156</span>
                        <span class="stat-label">Documents</span>
                    </span>
                </div>
                <button class="btn btn-primary">Browse Documents</button>
            </div>

            <div class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">calendar_month</span>
                </div>
                <h3 class="resource-title">Meeting Calendar</h3>
                <p class="resource-description">Subscribe to the meeting calendar and never miss an upcoming town hall meeting.</p>
                <div class="resource-stats">
                    <span class="stat-item">
                        <span class="stat-number">24</span>
                        <span class="stat-label">Meetings Scheduled</span>
                    </span>
                </div>
                <button class="btn btn-primary">Subscribe to Calendar</button>
            </div>

            <div class="resource-card">
                <div class="resource-icon">
                    <span class="material-symbols-outlined">notifications</span>
                </div>
                <h3 class="resource-title">Meeting Alerts</h3>
                <p class="resource-description">Get email notifications about upcoming meetings and agenda updates.</p>
                <div class="resource-stats">
                    <span class="stat-item">
                        <span class="stat-number">3,456</span>
                        <span class="stat-label">Subscribers</span>
                    </span>
                </div>
                <button class="btn btn-primary">Set Up Alerts</button>
            </div>
        </div>
    </div>
</section>

<?php
// Include footer
require_once __DIR__ . '/../../includes/footer.php';
?>

<style>
/* Town Hall Page Styles */
.town-hall-hero {
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

/* Meeting Statistics Section */
.meeting-stats-section {
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

/* Upcoming Meetings Section */
.upcoming-meetings-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.meetings-filters {
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

.meetings-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.meeting-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.meeting-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.meeting-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.meeting-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.meeting-badge.general {
    background-color: var(--primary);
    color: var(--on-primary);
}

.meeting-badge.budget {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.meeting-badge.planning {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.meeting-badge.special {
    background-color: var(--error);
    color: var(--on-error);
}

.meeting-status {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.meeting-status.open {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.meeting-status.full {
    background-color: var(--error);
    color: var(--on-error);
}

.meeting-status.virtual {
    background-color: var(--secondary-container);
    color: var(--on-secondary-container);
}

.meeting-content {
    padding: var(--spacing-lg);
}

.meeting-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.meeting-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.meeting-details {
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

.meeting-agenda {
    margin-bottom: var(--spacing-lg);
}

.meeting-agenda h4 {
    font-size: 1rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.agenda-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.agenda-list li {
    padding: var(--spacing-xs) 0;
    color: var(--on-surface-variant);
    font-size: 0.875rem;
    position: relative;
    padding-left: var(--spacing-lg);
}

.agenda-list li::before {
    content: '•';
    position: absolute;
    left: 0;
    color: var(--primary);
    font-weight: 700;
}

.meeting-features {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-md);
    margin-bottom: var(--spacing-lg);
}

.feature-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.feature-item .material-symbols-outlined {
    font-size: 1rem;
    color: var(--primary);
}

.meeting-actions {
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

.participation-guidelines {
    margin-top: var(--spacing-2xl);
}

.participation-guidelines h3 {
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
    text-align: center;
}

.guidelines-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: var(--spacing-lg);
}

.guideline-item {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.guideline-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.guideline-icon {
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

.guideline-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.guideline-item h4 {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.guideline-item p {
    color: var(--on-surface-variant);
    font-size: 0.875rem;
}

/* Meeting Registration Section */
.meeting-registration-section {
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

/* Past Meetings Section */
.past-meetings-section {
    padding: var(--spacing-3xl) 0;
}

.past-meetings-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.past-meeting-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.past-meeting-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.meeting-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.meeting-date {
    font-size: 0.875rem;
    color: var(--primary);
    font-weight: 600;
}

.meeting-stats {
    display: flex;
    gap: var(--spacing-lg);
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    margin-bottom: var(--spacing-lg);
}

.meeting-outcomes h4 {
    font-size: 1rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.outcomes-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.outcomes-list li {
    padding: var(--spacing-xs) 0;
    color: var(--on-surface-variant);
    font-size: 0.875rem;
    position: relative;
    padding-left: var(--spacing-lg);
}

.outcomes-list li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--tertiary);
    font-weight: 700;
}

/* Meeting Resources Section */
.meeting-resources-section {
    padding: var(--spacing-3xl) 0;
}

.resources-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: var(--spacing-xl);
}

.resource-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.resource-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.resource-icon {
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

.resource-icon .material-symbols-outlined {
    font-size: 2rem;
}

.resource-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.resource-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.resource-stats {
    display: flex;
    justify-content: center;
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
    
    .meetings-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .participation-steps {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .guidelines-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .past-meetings-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .resources-grid {
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
    
    .meeting-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .past-meeting-card {
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
    
    .guideline-item {
        padding: var(--spacing-md);
    }
    
    .guideline-icon {
        width: 2.5rem;
        height: 2.5rem;
    }
    
    .guideline-icon .material-symbols-outlined {
        font-size: 1.25rem;
    }
    
    .registration-form {
        padding: var(--spacing-lg);
    }
    
    .resource-card {
        padding: var(--spacing-lg);
    }
    
    .resource-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .resource-icon .material-symbols-outlined {
        font-size: 1.5rem;
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
    
    .meeting-features {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
}
</style>

<script>
// Quick action functions
function openUpcomingMeetings() {
    document.getElementById('upcoming-meetings').scrollIntoView({ behavior: 'smooth' });
}

function openPastMeetings() {
    document.getElementById('past-meetings').scrollIntoView({ behavior: 'smooth' });
}

function openMeetingRegistration() {
    document.getElementById('meeting-registration').scrollIntoView({ behavior: 'smooth' });
}

function openLiveStream() {
    alert('Live stream would open here. In production, this would show the live meeting broadcast with chat and participation features.');
}

function openMeetingAgenda() {
    alert('Meeting agenda section would open here. In production, this would show detailed agendas for upcoming meetings.');
}

function openMeetingMinutes() {
    alert('Meeting minutes archive would open here. In production, this would show official meeting records and decisions.');
}

// Meeting filtering
function filterMeetings() {
    const type = document.getElementById('meetingType').value;
    const location = document.getElementById('meetingLocation').value;
    const status = document.getElementById('meetingStatus').value;
    
    // In production, this would filter the meetings
    alert(`Filtering meetings by: ${type || 'All Types'}, ${location || 'All Locations'}, ${status || 'All Status'}`);
}

// Load more meetings
function loadMoreMeetings() {
    // In production, this would load more meetings from the server
    alert('Loading more meetings...');
}

// Meeting actions
document.querySelectorAll('.meeting-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Register')) {
        button.addEventListener('click', function() {
            const meetingTitle = this.closest('.meeting-card').querySelector('.meeting-title').textContent;
            alert(`Opening registration for: "${meetingTitle}"`);
            // In production, this would open the registration form
        });
    }
});

document.querySelectorAll('.meeting-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Details')) {
        button.addEventListener('click', function() {
            const meetingTitle = this.closest('.meeting-card').querySelector('.meeting-title').textContent;
            alert(`Detailed view for: "${meetingTitle}"`);
        });
    }
    
    if (button.textContent.includes('Calendar')) {
        button.addEventListener('click', function() {
            const meetingTitle = this.closest('.meeting-card').querySelector('.meeting-title').textContent;
            alert(`Adding "${meetingTitle}" to your calendar`);
        });
    }
    
    if (button.textContent.includes('Waitlist')) {
        button.addEventListener('click', function() {
            const meetingTitle = this.closest('.meeting-card').querySelector('.meeting-title').textContent;
            alert(`Adding you to waitlist for: "${meetingTitle}"`);
        });
    }
});

// Past meeting actions
document.querySelectorAll('.past-meeting-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Minutes')) {
        button.addEventListener('click', function() {
            const meetingTitle = this.closest('.past-meeting-card').querySelector('.meeting-title').textContent;
            alert(`Viewing meeting minutes for: "${meetingTitle}"`);
        });
    }
    
    if (button.textContent.includes('Recording')) {
        button.addEventListener('click', function() {
            const meetingTitle = this.closest('.past-meeting-card').querySelector('.meeting-title').textContent;
            alert(`Playing recording for: "${meetingTitle}"`);
        });
    }
});

// Meeting registration form submission
document.getElementById('meetingRegistrationForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate that at least one topic is selected
    const topics = document.querySelectorAll('input[name="topics"]:checked');
    if (topics.length === 0) {
        alert('Please select at least one topic of interest.');
        return;
    }
    
    alert('Meeting registration submitted successfully! You will receive a confirmation email with meeting details.');
    // In production, this would submit the registration
});

// Resource actions
document.querySelectorAll('.resource-card .btn-primary').forEach(button => {
    button.addEventListener('click', function() {
        const resourceTitle = this.closest('.resource-card').querySelector('.resource-title').textContent;
        alert(`Opening ${resourceTitle} section. In production, this would show the relevant resource library.`);
    });
});

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

// Auto-refresh meeting data
function refreshMeetingData() {
    // In production, this would fetch real-time meeting data
    console.log('Refreshing meeting data...');
}

// Refresh data every 60 seconds
setInterval(refreshMeetingData, 60000);
</script>
