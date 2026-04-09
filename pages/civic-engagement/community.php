<?php
/**
 * Bamenda City Council E-Governance Platform
 * Civic Engagement Community Page
 */

// Set page metadata
$page_title = 'Civic Engagement Community | Bamenda City Council';
$page_description = 'Access civic engagement community programs, volunteer opportunities, community projects, and civic participation initiatives for Bamenda residents.';
$page_keywords = 'civic engagement, community programs, volunteer opportunities, community projects, Bamenda civic participation';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Civic Engagement', 'url' => '../index.php'],
    ['title' => 'Community', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero civic-engagement-community-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-civic-engagement.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Civic Engagement Community</span>
            <h1 class="hero-title">Community Engagement & Participation</h1>
            <p class="hero-subtitle">
                Comprehensive civic engagement programs including volunteer opportunities, community projects, civic education, and participatory initiatives to strengthen community involvement in Bamenda's development.
            </p>
            <div class="hero-actions">
                <a href="#community-programs" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">groups</span>
                    Community Programs
                </a>
                <a href="#volunteer-opportunities" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">volunteer_activism</span>
                    Volunteer
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Community Actions</h2>
            <p class="section-subtitle">Quick access to civic engagement opportunities</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openVolunteerPrograms()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">volunteer_activism</span>
                </div>
                <h3 class="action-title">Volunteer Programs</h3>
                <p class="action-description">Join volunteer initiatives</p>
            </div>

            <div class="action-card" onclick="openCommunityProjects()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">construction</span>
                </div>
                <h3 class="action-title">Community Projects</h3>
                <p class="action-description">Participate in projects</p>
            </div>

            <div class="action-card" onclick="openCivicEducation()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <h3 class="action-title">Civic Education</h3>
                <p class="action-description">Learn about civic duties</p>
            </div>

            <div class="action-card" onclick="openTownHall()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">forum</span>
                </div>
                <h3 class="action-title">Town Hall Meetings</h3>
                <p class="action-description">Attend community meetings</p>
            </div>

            <div class="action-card" onclick="openCommunityForums()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">chat</span>
                </div>
                <h3 class="action-title">Community Forums</h3>
                <p class="action-description">Join discussions</p>
            </div>

            <div class="action-card" onclick="openNeighborhoodWatch()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">visibility</span>
                </div>
                <h3 class="action-title">Neighborhood Watch</h3>
                <p class="action-description">Community safety</p>
            </div>
        </div>
    </div>
</section>

<!-- Community Statistics -->
<section class="community-stats-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Community Impact</h2>
            <p class="section-subtitle">Real-time community engagement metrics</p>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">volunteer_activism</span>
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
                    <span class="material-symbols-outlined">construction</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">89</div>
                    <div class="stat-label">Community Projects</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+12 projects</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">schedule</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">456</div>
                    <div class="stat-label">Community Events</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+67 events</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">12,456</div>
                    <div class="stat-label">Community Members</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+1,234 members</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">timer</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">45,678</div>
                    <div class="stat-label">Volunteer Hours</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+5,678 hours</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">handshake</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">234</div>
                    <div class="stat-label">Partnerships</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+45 partnerships</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Community Programs -->
<section class="community-programs-section" id="community-programs">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Community Programs</h2>
            <p class="section-subtitle">Diverse programs to strengthen community engagement</p>
        </div>

        <div class="programs-grid">
            <!-- Environmental Stewardship -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">eco</span>
                    </div>
                    <div class="program-badge active">Active</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Environmental Stewardship</h3>
                    <p class="program-description">Community-led environmental initiatives including tree planting, waste reduction, recycling programs, and environmental education.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Tree planting campaigns</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Community clean-ups</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Recycling initiatives</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Environmental education</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">456</span>
                            <span class="stat-label">Volunteers</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">23</span>
                            <span class="stat-label">Projects</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Join Program</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- Youth Development -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">child_care</span>
                    </div>
                    <div class="program-badge popular">Popular</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Youth Development</h3>
                    <p class="program-description">Comprehensive youth programs including mentorship, leadership development, skills training, and youth empowerment initiatives.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Youth mentorship</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Leadership training</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Skills development</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Youth empowerment</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">789</span>
                            <span class="stat-label">Youth Engaged</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">34</span>
                            <span class="stat-label">Programs</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Join Program</button>
                        <button class="btn btn-sm btn-outline">View Programs</button>
                    </div>
                </div>
            </div>

            <!-- Elderly Support -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">elderly</span>
                    </div>
                    <div class="program-badge active">Active</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Elderly Support</h3>
                    <p class="program-description">Programs supporting elderly residents including companionship services, health monitoring, social activities, and assistance programs.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Companionship services</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Health monitoring</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Social activities</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Home assistance</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">234</span>
                            <span class="stat-label">Seniors Served</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">12</span>
                            <span class="stat-label">Support Groups</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Join Program</button>
                        <button class="btn btn-sm btn-outline">View Services</button>
                    </div>
                </div>
            </div>

            <!-- Community Safety -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">security</span>
                    </div>
                    <div class="program-badge critical">Critical</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Community Safety</h3>
                    <p class="program-description">Neighborhood safety initiatives including watch programs, emergency response training, and crime prevention education.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Neighborhood watch</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Emergency training</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Crime prevention</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Safety education</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">567</span>
                            <span class="stat-label">Safety Volunteers</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">45</span>
                            <span class="stat-label">Watch Groups</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Join Program</button>
                        <button class="btn btn-sm btn-outline">Safety Info</button>
                    </div>
                </div>
            </div>

            <!-- Cultural Heritage -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">museum</span>
                    </div>
                    <div class="program-badge expanding">Expanding</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Cultural Heritage</h3>
                    <p class="program-description">Programs preserving and promoting local cultural heritage including traditional arts, cultural festivals, and heritage conservation.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Traditional arts</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Cultural festivals</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Heritage conservation</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Cultural education</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">345</span>
                            <span class="stat-label">Cultural Volunteers</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">18</span>
                            <span class="stat-label">Cultural Events</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Join Program</button>
                        <button class="btn btn-sm btn-outline">Cultural Events</button>
                    </div>
                </div>
            </div>

            <!-- Health & Wellness -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">health_and_safety</span>
                    </div>
                    <div class="program-badge new">New</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Health & Wellness</h3>
                    <p class="program-description">Community health initiatives including health education, wellness programs, fitness activities, and mental health support.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Health education</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Wellness programs</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Fitness activities</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Mental health support</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">456</span>
                            <span class="stat-label">Health Volunteers</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">28</span>
                            <span class="stat-label">Health Programs</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Join Program</button>
                        <button class="btn btn-sm btn-outline">Health Resources</button>
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
            <p class="section-subtitle">Current volunteer positions and community service opportunities</p>
        </div>

        <div class="opportunities-grid">
            <!-- Environmental Volunteer -->
            <div class="opportunity-card">
                <div class="opportunity-header">
                    <div class="opportunity-icon">
                        <span class="material-symbols-outlined">eco</span>
                    </div>
                    <div class="opportunity-badge urgent">Urgent</div>
                </div>
                <div class="opportunity-content">
                    <h3 class="opportunity-title">Environmental Conservation Volunteer</h3>
                    <p class="opportunity-description">Join our environmental conservation team to plant trees, organize clean-ups, and promote environmental awareness in the community.</p>
                    <div class="opportunity-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Flexible schedule</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Various locations</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>20 volunteers needed</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">calendar_today</span>
                            <span>Ongoing opportunity</span>
                        </div>
                    </div>
                    <div class="opportunity-requirements">
                        <h4 class="requirements-title">Requirements:</h4>
                        <div class="requirements-list">
                            <div class="requirement-item">Passion for environmental conservation</div>
                            <div class="requirement-item">Good physical health</div>
                            <div class="requirement-item">Team player</div>
                        </div>
                    </div>
                    <div class="opportunity-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- Youth Mentor -->
            <div class="opportunity-card">
                <div class="opportunity-header">
                    <div class="opportunity-icon">
                        <span class="material-symbols-outlined">school</span>
                    </div>
                    <div class="opportunity-badge popular">Popular</div>
                </div>
                <div class="opportunity-content">
                    <h3 class="opportunity-title">Youth Mentor</h3>
                    <p class="opportunity-description">Mentor young people in our community, providing guidance, support, and positive role modeling for personal and academic development.</p>
                    <div class="opportunity-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>2-4 hours per week</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Community centers</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>15 mentors needed</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">calendar_today</span>
                            <span>6-month commitment</span>
                        </div>
                    </div>
                    <div class="opportunity-requirements">
                        <h4 class="requirements-title">Requirements:</h4>
                        <div class="requirements-list">
                            <div class="requirement-item">Experience with youth</div>
                            <div class="requirement-item">Background check required</div>
                            <div class="requirement-item">Good communication skills</div>
                        </div>
                    </div>
                    <div class="opportunity-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- Senior Companion -->
            <div class="opportunity-card">
                <div class="opportunity-header">
                    <div class="opportunity-icon">
                        <span class="material-symbols-outlined">elderly</span>
                    </div>
                    <div class="opportunity-badge ongoing">Ongoing</div>
                </div>
                <div class="opportunity-content">
                    <h3 class="opportunity-title">Senior Companion</h3>
                    <p class="opportunity-description">Provide companionship and assistance to elderly residents, helping with daily activities, social engagement, and health monitoring.</p>
                    <div class="opportunity-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>3-5 hours per week</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Senior centers & homes</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>30 volunteers needed</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">calendar_today</span>
                            <span>Flexible commitment</span>
                        </div>
                    </div>
                    <div class="opportunity-requirements">
                        <h4 class="requirements-title">Requirements:</h4>
                        <div class="requirements-list">
                            <div class="requirement-item">Patience and empathy</div>
                            <div class="requirement-item">Basic first aid knowledge</div>
                            <div class="requirement-item">Background check required</div>
                        </div>
                    </div>
                    <div class="opportunity-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- Community Safety -->
            <div class="opportunity-card">
                <div class="opportunity-header">
                    <div class="opportunity-icon">
                        <span class="material-symbols-outlined">security</span>
                    </div>
                    <div class="opportunity-badge critical">Critical</div>
                </div>
                <div class="opportunity-content">
                    <h3 class="opportunity-title">Neighborhood Safety Volunteer</h3>
                    <p class="opportunity-description">Join neighborhood watch programs to enhance community safety through patrols, monitoring, and emergency response coordination.</p>
                    <div class="opportunity-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>4-6 hours per week</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Local neighborhoods</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>50 volunteers needed</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">calendar_today</span>
                            <span>Immediate start</span>
                        </div>
                    </div>
                    <div class="opportunity-requirements">
                        <h4 class="requirements-title">Requirements:</h4>
                        <div class="requirements-list">
                            <div class="requirement-item">Good physical condition</div>
                            <div class="requirement-item">Resident of Bamenda</div>
                            <div class="requirement-item">Security clearance required</div>
                        </div>
                    </div>
                    <div class="opportunity-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Community Events -->
<section class="community-events-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Upcoming Community Events</h2>
            <p class="section-subtitle">Join community events and participate in civic activities</p>
        </div>

        <div class="events-grid">
            <!-- Town Hall Meeting -->
            <div class="event-card">
                <div class="event-header">
                    <div class="event-icon">
                        <span class="material-symbols-outlined">forum</span>
                    </div>
                    <div class="event-badge upcoming">Upcoming</div>
                </div>
                <div class="event-content">
                    <h3 class="event-title">Community Town Hall Meeting</h3>
                    <p class="event-description">Monthly town hall meeting to discuss community issues, share updates, and collaborate on local development initiatives.</p>
                    <div class="event-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">calendar_today</span>
                            <span>December 15, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>5:00 PM - 7:00 PM</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>City Council Hall</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>Open to all residents</span>
                        </div>
                    </div>
                    <div class="event-agenda">
                        <h4 class="agenda-title">Agenda:</h4>
                        <div class="agenda-list">
                            <div class="agenda-item">Community development updates</div>
                            <div class="agenda-item">Infrastructure projects discussion</div>
                            <div class="agenda-item">Public safety concerns</div>
                            <div class="agenda-item">Open forum</div>
                        </div>
                    </div>
                    <div class="event-actions">
                        <button class="btn btn-sm btn-primary">Register</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Environmental Clean-up -->
            <div class="event-card">
                <div class="event-header">
                    <div class="event-icon">
                        <span class="material-symbols-outlined">eco</span>
                    </div>
                    <div class="event-badge volunteer">Volunteer</div>
                </div>
                <div class="event-content">
                    <h3 class="event-title">Community Environmental Clean-up</h3>
                    <p class="event-description">Join community members for a city-wide environmental clean-up campaign to make Bamenda cleaner and greener.</p>
                    <div class="event-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">calendar_today</span>
                            <span>December 18, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>8:00 AM - 12:00 PM</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Multiple locations</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>200+ volunteers expected</span>
                        </div>
                    </div>
                    <div class="event-activities">
                        <h4 class="activities-title">Activities:</h4>
                        <div class="activities-list">
                            <div class="activity-item">Street cleaning</div>
                            <div class="activity-item">Tree planting</div>
                            <div class="activity-item">Waste sorting</div>
                            <div class="activity-item">Environmental education</div>
                        </div>
                    </div>
                    <div class="event-actions">
                        <button class="btn btn-sm btn-primary">Volunteer</button>
                        <button class="btn btn-sm btn-outline">View Locations</button>
                    </div>
                </div>
            </div>

            <!-- Youth Leadership Workshop -->
            <div class="event-card">
                <div class="event-header">
                    <div class="event-icon">
                        <span class="material-symbols-outlined">school</span>
                    </div>
                    <div class="event-badge workshop">Workshop</div>
                </div>
                <div class="event-content">
                    <h3 class="event-title">Youth Leadership Workshop</h3>
                    <p class="event-description">Interactive workshop for young people to develop leadership skills, civic knowledge, and community engagement strategies.</p>
                    <div class="event-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">calendar_today</span>
                            <span>December 20, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>9:00 AM - 4:00 PM</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Youth Development Center</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>50 youth participants</span>
                        </div>
                    </div>
                    <div class="event-topics">
                        <h4 class="topics-title">Topics:</h4>
                        <div class="topics-list">
                            <div class="topic-item">Leadership principles</div>
                            <div class="topic-item">Civic responsibility</div>
                            <div class="topic-item">Community project planning</div>
                            <div class="topic-item">Public speaking</div>
                        </div>
                    </div>
                    <div class="event-actions">
                        <button class="btn btn-sm btn-primary">Register</button>
                        <button class="btn btn-sm btn-outline">View Program</button>
                    </div>
                </div>
            </div>

            <!-- Cultural Festival -->
            <div class="event-card">
                <div class="event-header">
                    <div class="event-icon">
                        <span class="material-symbols-outlined">celebration</span>
                    </div>
                    <div class="event-badge festival">Festival</div>
                </div>
                <div class="event-content">
                    <h3 class="event-title">Bamenda Cultural Festival</h3>
                    <p class="event-description">Annual celebration of local culture featuring traditional music, dance, arts, crafts, and cultural heritage exhibitions.</p>
                    <div class="event-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">calendar_today</span>
                            <span>December 22-24, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>10:00 AM - 8:00 PM</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>City Cultural Grounds</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>5,000+ expected attendees</span>
                        </div>
                    </div>
                    <div class="event-features">
                        <h4 class="features-title">Features:</h4>
                        <div class="features-list">
                            <div class="feature-item">Traditional performances</div>
                            <div class="feature-item">Art exhibitions</div>
                            <div class="feature-item">Cultural workshops</div>
                            <div class="feature-item">Local food market</div>
                        </div>
                    </div>
                    <div class="event-actions">
                        <button class="btn btn-sm btn-primary">Attend</button>
                        <button class="btn btn-sm btn-outline">View Schedule</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Community Application -->
<section class="community-application-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Join Community Programs</h2>
            <p class="section-subtitle">Apply for community programs and volunteer opportunities</p>
        </div>

        <div class="application-content">
            <div class="application-form">
                <h3 class="form-title">Community Engagement Application</h3>
                <form id="communityApplicationForm">
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
                            <label class="form-label">Occupation *</label>
                            <input type="text" class="form-input" placeholder="Enter your occupation" required>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Community Engagement Preferences</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Programs of Interest *</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="programs" value="environmental">
                                    <span class="checkmark"></span>
                                    Environmental Stewardship
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="programs" value="youth">
                                    <span class="checkmark"></span>
                                    Youth Development
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="programs" value="elderly">
                                    <span class="checkmark"></span>
                                    Elderly Support
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="programs" value="safety">
                                    <span class="checkmark"></span>
                                    Community Safety
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="programs" value="cultural">
                                    <span class="checkmark"></span>
                                    Cultural Heritage
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="programs" value="health">
                                    <span class="checkmark"></span>
                                    Health & Wellness
                                </label>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Availability *</label>
                                <select class="form-select" required>
                                    <option value="">Select availability</option>
                                    <option value="weekdays">Weekdays only</option>
                                    <option value="weekends">Weekends only</option>
                                    <option value="evenings">Evenings only</option>
                                    <option value="flexible">Flexible</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Hours per Week *</label>
                                <select class="form-select" required>
                                    <option value="">Select hours</option>
                                    <option value="1-2">1-2 hours</option>
                                    <option value="3-5">3-5 hours</option>
                                    <option value="6-10">6-10 hours</option>
                                    <option value="10+">10+ hours</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Skills and Experience *</label>
                            <textarea class="form-textarea" rows="4" placeholder="Describe your relevant skills, experience, and qualifications" required></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Motivation for Volunteering *</label>
                            <textarea class="form-textarea" rows="3" placeholder="Why do you want to participate in community programs?" required></textarea>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Additional Information</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Previous Volunteer Experience</label>
                            <textarea class="form-textarea" rows="3" placeholder="Describe any previous volunteer or community service experience"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">How did you hear about our community programs? *</label>
                            <select class="form-select" required>
                                <option value="">Select option</option>
                                <option value="website">City Council Website</option>
                                <option value="social-media">Social Media</option>
                                <option value="friend">Friend/Neighbor</option>
                                <option value="community-center">Community Center</option>
                                <option value="event">Community Event</option>
                                <option value="advertisement">Advertisement</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Background Check Consent *</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="background-check" required>
                                    <span class="checkmark"></span>
                                    I consent to a background check as required for certain community programs involving vulnerable populations
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Commitment *</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="commitment" required>
                                    <span class="checkmark"></span>
                                    I commit to actively participate in community programs and fulfill my responsibilities as a community volunteer
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
            <p class="section-subtitle">Common questions about community engagement</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Who can join community programs?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Our community programs are open to all Bamenda residents aged 16 and above. Some programs may have specific age requirements or qualifications, but most welcome all community members who want to contribute.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Do I need experience to volunteer?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>No prior experience is required for most volunteer positions. We provide training and orientation for all volunteers. Some specialized roles may require specific skills or qualifications.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How much time commitment is required?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Time commitments vary by program and role. Some opportunities require just 1-2 hours per week, while others may need 5-10 hours. We offer flexible scheduling to accommodate different availability.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Are there any benefits to volunteering?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Volunteers receive training, develop new skills, build community connections, gain valuable experience, and receive certificates of appreciation. Some programs may offer stipends or other benefits.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How do I get started?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Start by filling out our community engagement application form. Once submitted, we'll review your application and contact you within 7-10 days to discuss suitable opportunities and next steps.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Can I participate in multiple programs?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, you can participate in multiple programs as long as you can fulfill the time commitments for each. Many volunteers engage in various activities based on their interests and availability.</p>
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
/* Civic Engagement Community Page Styles */
.civic-engagement-community-hero {
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

/* Community Statistics Section */
.community-stats-section {
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

/* Community Programs Section */
.community-programs-section {
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

.program-badge.active {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.program-badge.popular {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.program-badge.critical {
    background-color: var(--error);
    color: var(--on-error);
}

.program-badge.expanding {
    background-color: var(--primary);
    color: var(--on-primary);
}

.program-badge.new {
    background-color: var(--surface-variant);
    color: var(--on-surface-variant);
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

.program-stats {
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
    color: var(--tertiary);
    display: block;
    margin-bottom: var(--spacing-xs);
}

.stat-label {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
    text-transform: uppercase;
}

.program-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Volunteer Opportunities Section */
.volunteer-opportunities-section {
    padding: var(--spacing-3xl) 0;
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
}

.opportunity-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.opportunity-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.opportunity-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--tertiary);
    color: var(--on-tertiary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.opportunity-icon .material-symbols-outlined {
    font-size: 2rem;
}

.opportunity-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.opportunity-badge.urgent {
    background-color: var(--error);
    color: var(--on-error);
}

.opportunity-badge.popular {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.opportunity-badge.ongoing {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.opportunity-badge.critical {
    background-color: var(--error);
    color: var(--on-error);
}

.opportunity-content {
    padding: var(--spacing-lg);
}

.opportunity-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--tertiary);
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
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.detail-item .material-symbols-outlined {
    font-size: 1.25rem;
    color: var(--tertiary);
}

.opportunity-requirements {
    margin-bottom: var(--spacing-lg);
}

.requirements-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--tertiary);
    margin-bottom: var(--spacing-sm);
}

.requirements-list {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xs);
}

.requirement-item {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    padding-left: var(--spacing-md);
    position: relative;
}

.requirement-item::before {
    content: '•';
    position: absolute;
    left: 0;
    color: var(--tertiary);
}

.opportunity-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Community Events Section */
.community-events-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.events-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.event-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.event-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.event-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.event-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--tertiary);
    color: var(--on-tertiary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.event-icon .material-symbols-outlined {
    font-size: 2rem;
}

.event-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.event-badge.upcoming {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.event-badge.volunteer {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.event-badge.workshop {
    background-color: var(--primary);
    color: var(--on-primary);
}

.event-badge.festival {
    background-color: var(--error);
    color: var(--on-error);
}

.event-content {
    padding: var(--spacing-lg);
}

.event-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--tertiary);
    margin-bottom: var(--spacing-md);
}

.event-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.event-agenda,
.event-activities,
.event-topics,
.event-features {
    margin-bottom: var(--spacing-lg);
}

.agenda-title,
.activities-title,
.topics-title,
.features-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--tertiary);
    margin-bottom: var(--spacing-sm);
}

.agenda-list,
.activities-list,
.topics-list,
.features-list {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-sm);
}

.agenda-item,
.activity-item,
.topic-item,
.feature-item {
    padding: var(--spacing-xs) var(--spacing-sm);
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.event-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Community Application Section */
.community-application-section {
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
    
    .opportunities-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .events-grid {
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
    
    .opportunity-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .event-card {
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
    
    .opportunity-actions {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .opportunity-actions .btn {
        width: 100%;
    }
    
    .event-actions {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .event-actions .btn {
        width: 100%;
    }
}
</style>

<script>
// Quick action functions
function openVolunteerPrograms() {
    document.getElementById('volunteer-opportunities').scrollIntoView({ behavior: 'smooth' });
}

function openCommunityProjects() {
    document.getElementById('community-programs').scrollIntoView({ behavior: 'smooth' });
}

function openCivicEducation() {
    alert('Civic education portal would open here. In production, this would show educational resources, civic learning materials, and citizenship programs.');
}

function openTownHall() {
    alert('Town hall meeting portal would open here. In production, this would show meeting schedules, agendas, and participation information.');
}

function openCommunityForums() {
    alert('Community forums would open here. In production, this would show discussion boards, community conversations, and online engagement platforms.');
}

function openNeighborhoodWatch() {
    alert('Neighborhood watch portal would open here. In production, this would show safety resources, watch group information, and emergency contacts.');
}

// Program actions
document.querySelectorAll('.program-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Join')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
            alert(`Joining: "${programTitle}"`);
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
    
    if (button.textContent.includes('View')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
            alert(`Viewing details for: "${programTitle}"`);
        });
    }
});

// Opportunity actions
document.querySelectorAll('.opportunity-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Apply')) {
        button.addEventListener('click', function() {
            const opportunityTitle = this.closest('.opportunity-card').querySelector('.opportunity-title').textContent;
            alert(`Applying for: "${opportunityTitle}"`);
        });
    }
    
    if (button.textContent.includes('Volunteer')) {
        button.addEventListener('click', function() {
            const opportunityTitle = this.closest('.opportunity-card').querySelector('.opportunity-title').textContent;
            alert(`Volunteering for: "${opportunityTitle}"`);
        });
    }
});

document.querySelectorAll('.opportunity-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Learn')) {
        button.addEventListener('click', function() {
            const opportunityTitle = this.closest('.opportunity-card').querySelector('.opportunity-title').textContent;
            alert(`Learning more about: "${opportunityTitle}"`);
        });
    }
});

// Event actions
document.querySelectorAll('.event-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Register')) {
        button.addEventListener('click', function() {
            const eventTitle = this.closest('.event-card').querySelector('.event-title').textContent;
            alert(`Registering for: "${eventTitle}"`);
        });
    }
    
    if (button.textContent.includes('Attend')) {
        button.addEventListener('click', function() {
            const eventTitle = this.closest('.event-card').querySelector('.event-title').textContent;
            alert(`Attending: "${eventTitle}"`);
        });
    }
    
    if (button.textContent.includes('Volunteer')) {
        button.addEventListener('click', function() {
            const eventTitle = this.closest('.event-card').querySelector('.event-title').textContent;
            alert(`Volunteering for: "${eventTitle}"`);
        });
    }
});

document.querySelectorAll('.event-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('View')) {
        button.addEventListener('click', function() {
            const eventTitle = this.closest('.event-card').querySelector('.event-title').textContent;
            alert(`Viewing details for: "${eventTitle}"`);
        });
    }
});

// Community application form submission
document.getElementById('communityApplicationForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate required fields
    const fullName = document.querySelector('input[placeholder*="name"]').value;
    const dateOfBirth = document.querySelector('input[type="date"]').value;
    const gender = document.querySelector('select[required]').value;
    const phone = document.querySelector('input[placeholder*="phone"]').value;
    const email = document.querySelector('input[placeholder*="email"]').value;
    const area = document.querySelectorAll('select[required]')[1].value;
    const occupation = document.querySelector('input[placeholder*="occupation"]').value;
    const programs = document.querySelectorAll('input[name="programs"]:checked');
    const availability = document.querySelectorAll('select[required]')[2].value;
    const hours = document.querySelectorAll('select[required]')[3].value;
    const skills = document.querySelector('textarea[required]').value;
    const motivation = document.querySelectorAll('textarea[required]')[1].value;
    const howHeard = document.querySelectorAll('select[required]')[4].value;
    const backgroundCheck = document.querySelector('input[name="background-check"]:checked');
    const commitment = document.querySelector('input[name="commitment"]:checked');
    
    if (!fullName || !dateOfBirth || !gender || !phone || !email || !area || !occupation || programs.length === 0 || !availability || !hours || !skills || !motivation || !howHeard || !backgroundCheck || !commitment) {
        alert('Please fill in all required fields and select at least one program of interest.');
        return;
    }
    
    // Validate age requirement
    const age = calculateAge(dateOfBirth);
    if (age < 16) {
        alert('You must be at least 16 years old to participate in community programs.');
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
    
    alert('Community engagement application submitted successfully! We will review your application and contact you within 7-10 business days regarding program placement and next steps.');
    // In production, this would submit the application
});

// Calculate age from date of birth
function calculateAge(dob) {
    const today = new Date();
    const birthDate = new Date(dob);
    let age = today.getFullYear() - birthDate.getFullYear();
    const monthDiff = today.getMonth() - birthDate.getMonth();
    
    if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
    
    return age;
}

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

// Auto-refresh community statistics
function refreshCommunityStats() {
    // In production, this would fetch real-time community statistics
    console.log('Refreshing community statistics...');
    
    // Simulate volunteer count updates
    const volunteerCountElement = document.querySelector('.stat-number');
    if (volunteerCountElement && volunteerCountElement.textContent.includes(',')) {
        // Simulate real-time volunteer growth
        const currentCount = parseInt(volunteerCountElement.textContent.replace(',', ''));
        const increment = Math.floor(Math.random() * 3) + 1;
        const newCount = currentCount + increment;
        volunteerCountElement.textContent = newCount.toLocaleString();
    }
}

// Refresh statistics every 60 seconds
setInterval(refreshCommunityStats, 60000);
</script>
