<?php
/**
 * Bamenda City Council E-Governance Platform
 * Youth Leadership Page
 */

// Set page metadata
$page_title = 'Youth Leadership | Bamenda City Council';
$page_description = 'Access youth leadership programs, mentorship, civic engagement, and leadership development opportunities for young leaders in Bamenda.';
$page_keywords = 'youth leadership, leadership development, civic engagement, mentorship, Bamenda youth programs';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Youth', 'url' => '../index.php'],
    ['title' => 'Leadership', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero youth-leadership-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-youth-programs.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Youth Leadership</span>
            <h1 class="hero-title">Youth Leadership Development</h1>
            <p class="hero-subtitle">
                Comprehensive youth leadership programs including mentorship, civic engagement, leadership training, and community service opportunities to develop the next generation of leaders in Bamenda.
            </p>
            <div class="hero-actions">
                <a href="#leadership-programs" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">psychology</span>
                    Leadership Programs
                </a>
                <a href="#mentorship" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">support_agent</span>
                    Mentorship
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Leadership Actions</h2>
            <p class="section-subtitle">Quick access to youth leadership programs</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openLeadershipPrograms()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <h3 class="action-title">Leadership Training</h3>
                <p class="action-description">Join leadership development programs</p>
            </div>

            <div class="action-card" onclick="openMentorship()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">support_agent</span>
                </div>
                <h3 class="action-title">Mentorship</h3>
                <p class="action-description">Get guidance from experienced leaders</p>
            </div>

            <div class="action-card" onclick="openCivicEngagement()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <h3 class="action-title">Civic Engagement</h3>
                <p class="action-description">Participate in community leadership</p>
            </div>

            <div class="action-card" onclick="openCommunityService()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">volunteer_activism</span>
                </div>
                <h3 class="action-title">Community Service</h3>
                <p class="action-description">Lead community service projects</p>
            </div>

            <div class="action-card" onclick="openLeadershipSummits()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">event</span>
                </div>
                <h3 class="action-title">Leadership Summits</h3>
                <p class="action-description">Attend leadership conferences</p>
            </div>

            <div class="action-card" onclick="openScholarships()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <h3 class="action-title">Leadership Scholarships</h3>
                <p class="action-description">Access leadership education funding</p>
            </div>
        </div>
    </div>
</section>

<!-- Leadership Statistics -->
<section class="leadership-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">people</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">3,456</div>
                    <div class="stat-label">Youth Leaders Trained</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+456 this year</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">support_agent</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">156</div>
                    <div class="stat-label">Active Mentors</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+23 new mentors</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">volunteer_activism</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">89</div>
                    <div class="stat-label">Community Projects</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+12 new projects</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">verified</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">92%</div>
                    <div class="stat-label">Program Success Rate</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+8% improvement</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Leadership Programs -->
<section class="leadership-programs-section" id="leadership-programs">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Leadership Development Programs</h2>
            <p class="section-subtitle">Comprehensive programs to develop youth leadership skills and potential</p>
        </div>

        <div class="programs-grid">
            <!-- Youth Leadership Academy -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">school</span>
                    </div>
                    <div class="program-badge flagship">Flagship</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Youth Leadership Academy</h3>
                    <p class="program-description">Intensive 6-month leadership development program combining theoretical knowledge with practical experience through workshops, projects, and mentorship.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Leadership theory and practice</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Public speaking and communication</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Project management skills</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Community leadership projects</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">120</span>
                            <span class="stat-label">Participants per cohort</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">6</span>
                            <span class="stat-label">Months duration</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- Emerging Leaders Program -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">trending_up</span>
                    </div>
                    <div class="program-badge popular">Popular</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Emerging Leaders Program</h3>
                    <p class="program-description">3-month program focused on identifying and nurturing young talent with leadership potential through intensive training and real-world projects.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Talent identification</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Skills assessment</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Leadership workshops</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Internship opportunities</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">80</span>
                            <span class="stat-label">Participants per cohort</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">3</span>
                            <span class="stat-label">Months duration</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- Civic Leadership Institute -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">account_balance</span>
                    </div>
                    <div class="program-badge active">Active</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Civic Leadership Institute</h3>
                    <p class="program-description">Specialized program focusing on civic engagement, public service, and democratic leadership for youth interested in governance and community service.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Civic education</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Public policy understanding</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Community organizing</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Advocacy skills</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">60</span>
                            <span class="stat-label">Participants per cohort</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">4</span>
                            <span class="stat-label">Months duration</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- Women in Leadership -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">diversity_2</span>
                    </div>
                    <div class="program-badge special">Special</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Women in Leadership</h3>
                    <p class="program-description">Empowering young women to take leadership roles through specialized training, mentorship, and support networks.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Gender equality awareness</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Women leadership skills</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Confidence building</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Networking opportunities</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">50</span>
                            <span class="stat-label">Participants per cohort</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">4</span>
                            <span class="stat-label">Months duration</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- Sports Leadership -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">sports_soccer</span>
                    </div>
                    <div class="program-badge active">Active</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Sports Leadership Program</h3>
                    <p class="program-description">Developing leadership skills through sports including team management, coaching, and sports administration.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Sports management</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Team leadership</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Coaching skills</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Event organization</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">40</span>
                            <span class="stat-label">Participants per cohort</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">3</span>
                            <span class="stat-label">Months duration</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- Digital Leadership -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">computer</span>
                    </div>
                    <div class="program-badge new">New</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Digital Leadership Program</h3>
                    <p class="program-description">Preparing youth for leadership in the digital age including digital literacy, online leadership, and technology management.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Digital literacy</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Online leadership</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Social media management</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Digital project leadership</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">70</span>
                            <span class="stat-label">Participants per cohort</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">4</span>
                            <span class="stat-label">Months duration</span>
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

<!-- Mentorship Program -->
<section class="mentorship-section" id="mentorship">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Leadership Mentorship</h2>
            <p class="section-subtitle">Connect with experienced leaders for guidance and support</p>
        </div>

        <div class="mentorship-content">
            <div class="mentorship-overview">
                <h3 class="overview-title">One-on-One Mentorship</h3>
                <p class="overview-description">
                    Our mentorship program pairs young leaders with experienced professionals who provide guidance, support, and wisdom based on their own leadership journeys. Mentors help mentees develop leadership skills, navigate challenges, and achieve their full potential.
                </p>
            </div>

            <div class="mentorship-grid">
                <!-- Business Leadership Mentorship -->
                <div class="mentorship-card">
                    <div class="mentorship-header">
                        <div class="mentorship-icon">
                            <span class="material-symbols-outlined">business</span>
                        </div>
                        <div class="mentorship-badge business">Business</div>
                    </div>
                    <div class="mentorship-content">
                        <h3 class="mentorship-title">Business Leadership Mentorship</h3>
                        <p class="mentorship-description">Connect with successful business leaders and entrepreneurs who can guide you in developing business acumen and leadership skills.</p>
                        <div class="mentorship-details">
                            <div class="detail-item">
                                <span class="material-symbols-outlined">person</span>
                                <span>45 available mentors</span>
                            </div>
                            <div class="detail-item">
                                <span class="material-symbols-outlined">schedule</span>
                                <span>Monthly meetings</span>
                            </div>
                            <div class="detail-item">
                                <span class="material-symbols-outlined">timer</span>
                                <span>6-month commitment</span>
                            </div>
                        </div>
                        <div class="mentorship-areas">
                            <h4 class="areas-title">Focus Areas:</h4>
                            <div class="areas-list">
                                <div class="area-item">Entrepreneurship</div>
                                <div class="area-item">Management</div>
                                <div class="area-item">Strategic Planning</div>
                                <div class="area-item">Business Development</div>
                            </div>
                        </div>
                        <button class="btn btn-primary">Find Mentor</button>
                    </div>
                </div>

                <!-- Civic Leadership Mentorship -->
                <div class="mentorship-card">
                    <div class="mentorship-header">
                        <div class="mentorship-icon">
                            <span class="material-symbols-outlined">account_balance</span>
                        </div>
                        <div class="mentorship-badge civic">Civic</div>
                    </div>
                    <div class="mentorship-content">
                        <h3 class="mentorship-title">Civic Leadership Mentorship</h3>
                        <p class="mentorship-description">Learn from experienced civic leaders, politicians, and community organizers about public service and community leadership.</p>
                        <div class="mentorship-details">
                            <div class="detail-item">
                                <span class="material-symbols-outlined">person</span>
                                <span>32 available mentors</span>
                            </div>
                            <div class="detail-item">
                                <span class="material-symbols-outlined">schedule</span>
                                <span>Bi-weekly meetings</span>
                            </div>
                            <div class="detail-item">
                                <span class="material-symbols-outlined">timer</span>
                                <span>4-month commitment</span>
                            </div>
                        </div>
                        <div class="mentorship-areas">
                            <h4 class="areas-title">Focus Areas:</h4>
                            <div class="areas-list">
                                <div class="area-item">Public Policy</div>
                                <div class="area-item">Community Organizing</div>
                                <div class="area-item">Political Leadership</div>
                                <div class="area-item">Advocacy</div>
                            </div>
                        </div>
                        <button class="btn btn-primary">Find Mentor</button>
                    </div>
                </div>

                <!-- Academic Leadership Mentorship -->
                <div class="mentorship-card">
                    <div class="mentorship-header">
                        <div class="mentorship-icon">
                            <span class="material-symbols-outlined">school</span>
                        </div>
                        <div class="mentorship-badge academic">Academic</div>
                    </div>
                    <div class="mentorship-content">
                        <h3 class="mentorship-title">Academic Leadership Mentorship</h3>
                        <p class="mentorship-description">Connect with educators, researchers, and academic leaders who can guide you in educational leadership and research.</p>
                        <div class="mentorship-details">
                            <div class="detail-item">
                                <span class="material-symbols-outlined">person</span>
                                <span>28 available mentors</span>
                            </div>
                            <div class="detail-item">
                                <span class="material-symbols-outlined">schedule</span>
                                <span>Monthly meetings</span>
                            </div>
                            <div class="detail-item">
                                <span class="material-symbols-outlined">timer</span>
                                <span>6-month commitment</span>
                            </div>
                        </div>
                        <div class="mentorship-areas">
                            <h4 class="areas-title">Focus Areas:</h4>
                            <div class="areas-list">
                                <div class="area-item">Educational Leadership</div>
                                <div class="area-item">Research Skills</div>
                                <div class="area-item">Academic Administration</div>
                                <div class="area-item">Teaching Excellence</div>
                            </div>
                        </div>
                        <button class="btn btn-primary">Find Mentor</button>
                    </div>
                </div>

                <!-- Technology Leadership Mentorship -->
                <div class="mentorship-card">
                    <div class="mentorship-header">
                        <div class="mentorship-icon">
                            <span class="material-symbols-outlined">computer</span>
                        </div>
                        <div class="mentorship-badge tech">Technology</div>
                    </div>
                    <div class="mentorship-content">
                        <h3 class="mentorship-title">Technology Leadership Mentorship</h3>
                        <p class="mentorship-description">Learn from tech leaders, innovators, and digital entrepreneurs about leading in the technology sector.</p>
                        <div class="mentorship-details">
                            <div class="detail-item">
                                <span class="material-symbols-outlined">person</span>
                                <span>38 available mentors</span>
                            </div>
                            <div class="detail-item">
                                <span class="material-symbols-outlined">schedule</span>
                                <span>Bi-weekly meetings</span>
                            </div>
                            <div class="detail-item">
                                <span class="material-symbols-outlined">timer</span>
                                <span>4-month commitment</span>
                            </div>
                        </div>
                        <div class="mentorship-areas">
                            <h4 class="areas-title">Focus Areas:</h4>
                            <div class="areas-list">
                                <div class="area-item">Tech Innovation</div>
                                <div class="area-item">Digital Leadership</div>
                                <div class="area-item">Startup Management</div>
                                <div class="area-item">Product Leadership</div>
                            </div>
                        </div>
                        <button class="btn btn-primary">Find Mentor</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Community Service Projects -->
<section class="community-service-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Community Service Leadership</h2>
            <p class="section-subtitle">Lead and participate in community service projects</p>
        </div>

        <div class="service-projects-grid">
            <!-- Environmental Leadership -->
            <div class="project-card">
                <div class="project-header">
                    <div class="project-icon">
                        <span class="material-symbols-outlined">nature</span>
                    </div>
                    <div class="project-badge active">Active</div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">Environmental Leadership Project</h3>
                    <p class="project-description">Lead environmental initiatives including tree planting, waste management campaigns, and climate awareness programs.</p>
                    <div class="project-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>45 youth leaders involved</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">event</span>
                            <span>12 projects completed</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>8 neighborhoods covered</span>
                        </div>
                    </div>
                    <div class="project-impact">
                        <h4 class="impact-title">Impact:</h4>
                        <div class="impact-metrics">
                            <div class="metric-item">
                                <span class="metric-number">5,000+</span>
                                <span class="metric-label">Trees planted</span>
                            </div>
                            <div class="metric-item">
                                <span class="metric-number">23</span>
                                <span class="metric-label">Clean-up campaigns</span>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary">Join Project</button>
                </div>
            </div>

            <!-- Education Leadership -->
            <div class="project-card">
                <div class="project-header">
                    <div class="project-icon">
                        <span class="material-symbols-outlined">menu_book</span>
                    </div>
                    <div class="project-badge active">Active</div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">Education Leadership Initiative</h3>
                    <p class="project-description">Lead educational support programs including tutoring, literacy campaigns, and school improvement projects.</p>
                    <div class="project-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>78 youth tutors</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">school</span>
                            <span>15 schools supported</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">people</span>
                            <span>1,200+ students helped</span>
                        </div>
                    </div>
                    <div class="project-impact">
                        <h4 class="impact-title">Impact:</h4>
                        <div class="impact-metrics">
                            <div class="metric-item">
                                <span class="metric-number">85%</span>
                                <span class="metric-label">Improvement in grades</span>
                            </div>
                            <div class="metric-item">
                                <span class="metric-number">45</span>
                                <span class="metric-label">Libraries established</span>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary">Join Project</button>
                </div>
            </div>

            <!-- Health Leadership -->
            <div class="project-card">
                <div class="project-header">
                    <div class="project-icon">
                        <span class="material-symbols-outlined">health_and_safety</span>
                    </div>
                    <div class="project-badge active">Active</div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">Health Leadership Campaign</h3>
                    <p class="project-description">Lead health awareness campaigns, vaccination drives, and community health education programs.</p>
                    <div class="project-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>56 health ambassadors</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">event</span>
                            <span>18 health campaigns</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>10 communities reached</span>
                        </div>
                    </div>
                    <div class="project-impact">
                        <h4 class="impact-title">Impact:</h4>
                        <div class="impact-metrics">
                            <div class="metric-item">
                                <span class="metric-number">3,400+</span>
                                <span class="metric-label">People educated</span>
                            </div>
                            <div class="metric-item">
                                <span class="metric-number">890</span>
                                <span class="metric-label">Vaccinations administered</span>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary">Join Project</button>
                </div>
            </div>

            <!-- Sports Leadership -->
            <div class="project-card">
                <div class="project-header">
                    <div class="project-icon">
                        <span class="material-symbols-outlined">sports_soccer</span>
                    </div>
                    <div class="project-badge active">Active</div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">Sports Leadership Program</h3>
                    <p class="project-description">Organize and lead sports tournaments, coaching programs, and physical fitness campaigns for youth.</p>
                    <div class="project-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>34 youth coaches</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">event</span>
                            <span>8 tournaments organized</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">sports_soccer</span>
                            <span>12 sports offered</span>
                        </div>
                    </div>
                    <div class="project-impact">
                        <h4 class="impact-title">Impact:</h4>
                        <div class="impact-metrics">
                            <div class="metric-item">
                                <span class="metric-number">2,300+</span>
                                <span class="metric-label">Youth engaged</span>
                            </div>
                            <div class="metric-item">
                                <span class="metric-number">23</span>
                                <span class="metric-label">Teams formed</span>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary">Join Project</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Leadership Summits -->
<section class="leadership-summits-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Leadership Summits & Conferences</h2>
            <p class="section-subtitle">Annual leadership events bringing together young leaders and experts</p>
        </div>

        <div class="summits-content">
            <div class="upcoming-summit">
                <div class="summit-header">
                    <div class="summit-icon">
                        <span class="material-symbols-outlined">event</span>
                    </div>
                    <div class="summit-badge upcoming">Upcoming</div>
                </div>
                <div class="summit-content">
                    <h3 class="summit-title">Bamenda Youth Leadership Summit 2024</h3>
                    <p class="summit-description">Annual gathering of young leaders featuring keynote speakers, workshops, networking, and leadership awards.</p>
                    <div class="summit-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">calendar_today</span>
                            <span>December 15-17, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Bamenda City Hall</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>500+ expected attendees</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">mic</span>
                            <span>25+ speakers</span>
                        </div>
                    </div>
                    <div class="summit-highlights">
                        <h4 class="highlights-title">Key Highlights:</h4>
                        <div class="highlights-list">
                            <div class="highlight-item">Leadership workshops</div>
                            <div class="highlight-item">Networking sessions</div>
                            <div class="highlight-item">Expert panels</div>
                            <div class="highlight-item">Leadership awards</div>
                            <div class="highlight-item">Project showcase</div>
                        </div>
                    </div>
                    <div class="summit-actions">
                        <button class="btn btn-primary">Register Now</button>
                        <button class="btn btn-outline">View Agenda</button>
                    </div>
                </div>
            </div>

            <div class="past-summits">
                <h3 class="section-title">Previous Summits</h3>
                <div class="past-summits-grid">
                    <div class="past-summit-card">
                        <h4 class="past-title">Leadership Summit 2023</h4>
                        <p class="past-date">November 2023</p>
                        <p class="past-description">Focus on digital leadership and innovation</p>
                        <div class="past-stats">
                            <span class="stat">450 attendees</span>
                            <span class="stat">20 speakers</span>
                        </div>
                    </div>
                    <div class="past-summit-card">
                        <h4 class="past-title">Civic Leadership Forum 2023</h4>
                        <p class="past-date">June 2023</p>
                        <p class="past-description">Focus on civic engagement and democracy</p>
                        <div class="past-stats">
                            <span class="stat">320 attendees</span>
                            <span class="stat">15 speakers</span>
                        </div>
                    </div>
                    <div class="past-summit-card">
                        <h4 class="past-title">Women in Leadership 2023</h4>
                        <p class="past-date">March 2023</p>
                        <p class="past-description">Focus on women empowerment and leadership</p>
                        <div class="past-stats">
                            <span class="stat">280 attendees</span>
                            <span class="stat">18 speakers</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Leadership Application -->
<section class="leadership-application-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Leadership Program Application</h2>
            <p class="section-subtitle">Apply for our leadership development programs</p>
        </div>

        <div class="application-content">
            <div class="application-form">
                <h3 class="form-title">Leadership Program Application</h3>
                <form id="leadershipApplicationForm">
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
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Program Selection</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Leadership Program *</label>
                            <select class="form-select" required>
                                <option value="">Select program</option>
                                <option value="academy">Youth Leadership Academy</option>
                                <option value="emerging">Emerging Leaders Program</option>
                                <option value="civic">Civic Leadership Institute</option>
                                <option value="women">Women in Leadership</option>
                                <option value="sports">Sports Leadership Program</option>
                                <option value="digital">Digital Leadership Program</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Why do you want to join this program? *</label>
                            <textarea class="form-textarea" rows="4" placeholder="Explain your motivation and goals" required></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Leadership Experience *</label>
                            <textarea class="form-textarea" rows="3" placeholder="Describe any previous leadership roles or experience" required></textarea>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Leadership Goals</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Short-term Leadership Goals *</label>
                            <textarea class="form-textarea" rows="3" placeholder="What do you hope to achieve in the next 6 months?" required></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Long-term Leadership Goals *</label>
                            <textarea class="form-textarea" rows="3" placeholder="What are your long-term leadership aspirations?" required></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Leadership Skills You Want to Develop *</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="skills" value="communication">
                                    <span class="checkmark"></span>
                                    Communication Skills
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="skills" value="teamwork">
                                    <span class="checkmark"></span>
                                    Teamwork & Collaboration
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="skills" value="decision-making">
                                    <span class="checkmark"></span>
                                    Decision Making
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="skills" value="problem-solving">
                                    <span class="checkmark"></span>
                                    Problem Solving
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="skills" value="public-speaking">
                                    <span class="checkmark"></span>
                                    Public Speaking
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="skills" value="conflict-resolution">
                                    <span class="checkmark"></span>
                                    Conflict Resolution
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Additional Information</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Education Level *</label>
                            <select class="form-select" required>
                                <option value="">Select education level</option>
                                <option value="high-school">High School</option>
                                <option value="undergraduate">Undergraduate</option>
                                <option value="graduate">Graduate</option>
                                <option value="postgraduate">Postgraduate</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Field of Study/Major</label>
                            <input type="text" class="form-input" placeholder="Enter your field of study or major">
                        </div>

                        <div class="form-group">
                            <label class="form-label">How did you hear about our leadership programs? *</label>
                            <select class="form-select" required>
                                <option value="">Select option</option>
                                <option value="website">City Council Website</option>
                                <option value="social-media">Social Media</option>
                                <option value="friend">Friend/Word of mouth</option>
                                <option value="school">School/College</option>
                                <option value="workshop">Leadership Workshop</option>
                                <option value="event">Leadership Event</option>
                                <option value="advertisement">Advertisement</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Commitment *</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="commitment" required>
                                    <span class="checkmark"></span>
                                    I commit to attending all program sessions and actively participating in program activities
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
            <p class="section-subtitle">Common questions about youth leadership programs</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Who can apply for leadership programs?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Our leadership programs are open to youth aged 15-35 who demonstrate leadership potential and a commitment to community service. Some programs may have specific age or educational requirements.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Are the leadership programs free?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Most of our leadership programs are free or heavily subsidized through government partnerships and sponsorships. Some specialized programs may require a nominal fee, but scholarships are available for those who cannot afford them.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How are participants selected?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Participants are selected based on their application, demonstrated leadership potential, commitment to community service, and interview performance. We aim for diversity and inclusivity in our programs.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What is the time commitment for programs?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Time commitment varies by program. The Youth Leadership Academy requires 6 months with weekly sessions, while shorter programs may require 3-4 months. Mentorship programs typically require monthly meetings over 4-6 months.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Do you provide certificates?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, participants who successfully complete our leadership programs receive certificates of completion. These certificates are recognized by various organizations and can enhance your resume.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Can I join multiple programs?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, you can apply for multiple programs, but you can only participate in one program at a time. After completing one program, you can apply for others based on your interests and goals.</p>
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
/* Youth Leadership Page Styles */
.youth-leadership-hero {
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

/* Leadership Statistics Section */
.leadership-stats-section {
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

/* Leadership Programs Section */
.leadership-programs-section {
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
    background-color: var(--primary);
    color: var(--on-primary);
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

.program-badge.flagship {
    background-color: var(--primary);
    color: var(--on-primary);
}

.program-badge.popular {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.program-badge.active {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.program-badge.special {
    background-color: var(--error);
    color: var(--on-error);
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
    color: var(--primary);
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
    color: var(--primary);
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

/* Mentorship Section */
.mentorship-section {
    padding: var(--spacing-3xl) 0;
}

.mentorship-content {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xl);
}

.mentorship-overview {
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

.mentorship-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.mentorship-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.mentorship-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.mentorship-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.mentorship-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.mentorship-icon .material-symbols-outlined {
    font-size: 2rem;
}

.mentorship-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.mentorship-badge.business {
    background-color: var(--primary);
    color: var(--on-primary);
}

.mentorship-badge.civic {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.mentorship-badge.academic {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.mentorship-badge.tech {
    background-color: var(--error);
    color: var(--on-error);
}

.mentorship-content {
    padding: var(--spacing-lg);
}

.mentorship-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.mentorship-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.mentorship-details {
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
    justify-content: center;
}

.detail-item .material-symbols-outlined {
    font-size: 1.25rem;
    color: var(--primary);
}

.mentorship-areas {
    margin-bottom: var(--spacing-lg);
}

.areas-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.areas-list {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-sm);
}

.area-item {
    padding: var(--spacing-xs) var(--spacing-sm);
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

/* Community Service Section */
.community-service-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.service-projects-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.project-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.project-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.project-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.project-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.project-icon .material-symbols-outlined {
    font-size: 2rem;
}

.project-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.project-badge.active {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.project-content {
    padding: var(--spacing-lg);
}

.project-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.project-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.project-details {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

.project-impact {
    margin-bottom: var(--spacing-lg);
}

.impact-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.impact-metrics {
    display: flex;
    justify-content: space-around;
    gap: var(--spacing-lg);
}

.metric-item {
    text-align: center;
}

.metric-number {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    display: block;
    margin-bottom: var(--spacing-xs);
}

.metric-label {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
    text-transform: uppercase;
}

/* Leadership Summits Section */
.leadership-summits-section {
    padding: var(--spacing-3xl) 0;
}

.summits-content {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xl);
}

.upcoming-summit {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 2px solid var(--primary);
    padding: var(--spacing-2xl);
    text-align: center;
}

.summit-header {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: var(--spacing-lg);
    margin-bottom: var(--spacing-lg);
}

.summit-icon {
    width: 4rem;
    height: 4rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.summit-icon .material-symbols-outlined {
    font-size: 2.5rem;
}

.summit-badge {
    padding: var(--spacing-sm) var(--spacing-md);
    border-radius: var(--radius-full);
    font-size: 1rem;
    font-weight: 700;
    text-transform: uppercase;
    background-color: var(--primary);
    color: var(--on-primary);
}

.summit-content {
    max-width: 800px;
    margin: 0 auto;
}

.summit-title {
    font-size: 2rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.summit-description {
    font-size: 1.125rem;
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-xl);
}

.summit-details {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: var(--spacing-lg);
    margin-bottom: var(--spacing-xl);
}

.summit-highlights {
    margin-bottom: var(--spacing-xl);
}

.highlights-title {
    font-size: 1.125rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.highlights-list {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-md);
    justify-content: center;
}

.highlight-item {
    padding: var(--spacing-sm) var(--spacing-md);
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.summit-actions {
    display: flex;
    gap: var(--spacing-lg);
    justify-content: center;
}

.past-summits {
    margin-top: var(--spacing-2xl);
}

.past-summits h3 {
    text-align: center;
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-xl);
}

.past-summits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: var(--spacing-lg);
}

.past-summit-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    text-align: center;
}

.past-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-xs);
}

.past-date {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    margin-bottom: var(--spacing-sm);
}

.past-description {
    color: var(--on-surface-variant);
    line-height: 1.5;
    margin-bottom: var(--spacing-md);
}

.past-stats {
    display: flex;
    justify-content: center;
    gap: var(--spacing-lg);
}

.stat {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

/* Leadership Application Section */
.leadership-application-section {
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
    
    .programs-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .mentorship-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .service-projects-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .past-summits-grid {
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
    
    .summit-details {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .summit-actions {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .summit-actions .btn {
        width: 100%;
    }
}
</style>

<script>
// Quick action functions
function openLeadershipPrograms() {
    document.getElementById('leadership-programs').scrollIntoView({ behavior: 'smooth' });
}

function openMentorship() {
    document.getElementById('mentorship').scrollIntoView({ behavior: 'smooth' });
}

function openCivicEngagement() {
    document.querySelector('.community-service-section').scrollIntoView({ behavior: 'smooth' });
}

function openCommunityService() {
    document.querySelector('.community-service-section').scrollIntoView({ behavior: 'smooth' });
}

function openLeadershipSummits() {
    document.querySelector('.leadership-summits-section').scrollIntoView({ behavior: 'smooth' });
}

function openScholarships() {
    alert('Leadership scholarships portal would open here. In production, this would show available scholarship opportunities, application requirements, and funding information for leadership education.');
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

// Mentorship actions
document.querySelectorAll('.mentorship-card .btn-primary').forEach(button => {
    if (button.textContent.includes('Find')) {
        button.addEventListener('click', function() {
            const mentorshipTitle = this.closest('.mentorship-card').querySelector('.mentorship-title').textContent;
            alert(`Finding mentor for: "${mentorshipTitle}"`);
        });
    }
});

// Community service actions
document.querySelectorAll('.project-card .btn-primary').forEach(button => {
    if (button.textContent.includes('Join')) {
        button.addEventListener('click', function() {
            const projectTitle = this.closest('.project-card').querySelector('.project-title').textContent;
            alert(`Joining: "${projectTitle}"`);
        });
    }
});

// Summit actions
document.querySelectorAll('.summit-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Register')) {
        button.addEventListener('click', function() {
            alert('Leadership summit registration would open here. In production, this would show the registration form with session options and payment processing.');
        });
    }
});

document.querySelectorAll('.summit-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('View')) {
        button.addEventListener('click', function() {
            alert('Summit agenda would open here. In production, this would show the detailed schedule, speaker profiles, and session descriptions.');
        });
    }
});

// Leadership application form submission
document.getElementById('leadershipApplicationForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate required fields
    const fullName = document.querySelector('input[placeholder*="name"]').value;
    const dateOfBirth = document.querySelector('input[type="date"]').value;
    const gender = document.querySelector('select[required]').value;
    const phone = document.querySelector('input[placeholder*="phone"]').value;
    const email = document.querySelector('input[placeholder*="email"]').value;
    const area = document.querySelectorAll('select[required]')[1].value;
    const program = document.querySelectorAll('select[required]')[2].value;
    const motivation = document.querySelector('textarea[required]').value;
    const experience = document.querySelectorAll('textarea[required]')[1].value;
    const shortGoals = document.querySelectorAll('textarea[required]')[2].value;
    const longGoals = document.querySelectorAll('textarea[required]')[3].value;
    const skills = document.querySelectorAll('input[name="skills"]:checked');
    const education = document.querySelectorAll('select[required]')[3].value;
    const howHeard = document.querySelectorAll('select[required]')[4].value;
    const commitment = document.querySelector('input[name="commitment"]:checked');
    
    if (!fullName || !dateOfBirth || !gender || !phone || !email || !area || !program || !motivation || !experience || !shortGoals || !longGoals || skills.length === 0 || !education || !howHeard || !commitment) {
        alert('Please fill in all required fields and select at least one leadership skill.');
        return;
    }
    
    // Validate age requirement
    const age = calculateAge(dateOfBirth);
    if (age < 15 || age > 35) {
        alert('You must be between 15-35 years old to join our youth leadership programs.');
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
    
    alert('Leadership program application submitted successfully! We will review your application and contact you within 7-10 business days regarding the next steps in the selection process.');
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

// Auto-refresh leadership statistics
function refreshLeadershipStats() {
    // In production, this would fetch real-time leadership statistics
    console.log('Refreshing youth leadership statistics...');
    
    // Simulate leader count updates
    const leaderCountElement = document.querySelector('.stat-number');
    if (leaderCountElement && leaderCountElement.textContent.includes(',')) {
        // Simulate real-time leadership growth
        const currentCount = parseInt(leaderCountElement.textContent.replace(',', ''));
        const increment = Math.floor(Math.random() * 3) + 1;
        const newCount = currentCount + increment;
        leaderCountElement.textContent = newCount.toLocaleString();
    }
}

// Refresh statistics every 60 seconds
setInterval(refreshLeadershipStats, 60000);
</script>
