<?php
/**
 * Bamenda City Council E-Governance Platform
 * Youth Council Page
 */

// Set page metadata
$page_title = 'Youth Council | Bamenda City Council';
$page_description = 'Join the Bamenda Youth Council, participate in youth governance, and represent young people in decision-making.';
$page_keywords = 'youth council, youth governance, youth representation, Bamenda youth, youth participation';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Youth', 'url' => '../index.php'],
    ['title' => 'Youth Council', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero youth-council-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-youth-programs.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Youth Council</span>
            <h1 class="hero-title">Youth Leadership & Governance</h1>
            <p class="hero-subtitle">
                Join the Bamenda Youth Council to represent young people, participate in decision-making, and shape the future of our community.
            </p>
            <div class="hero-actions">
                <a href="#council-overview" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">groups</span>
                    Council Overview
                </a>
                <a href="#join-council" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">how_to_reg</span>
                    Join Council
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Council Actions</h2>
            <p class="section-subtitle">Quick access to youth council activities and programs</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openCouncilOverview()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <h3 class="action-title">Council Overview</h3>
                <p class="action-description">Learn about the youth council structure and activities</p>
            </div>

            <div class="action-card" onclick="openCouncilMembers()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">people</span>
                </div>
                <h3 class="action-title">Council Members</h3>
                <p class="action-description">Meet the youth council representatives and officers</p>
            </div>

            <div class="action-card" onclick="openCouncilPrograms()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">assignment</span>
                </div>
                <h3 class="action-title">Council Programs</h3>
                <p class="action-description">Explore youth council programs and initiatives</p>
            </div>

            <div class="action-card" onclick="openCouncilMeetings()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">event</span>
                </div>
                <h3 class="action-title">Council Meetings</h3>
                <p class="action-description">View meeting schedules and participate in discussions</p>
            </div>

            <div class="action-card" onclick="openCouncilProjects()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">engineering</span>
                </div>
                <h3 class="action-title">Council Projects</h3>
                <p class="action-description">Discover youth-led community projects and initiatives</p>
            </div>

            <div class="action-card" onclick="openCouncilNews()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">article</span>
                </div>
                <h3 class="action-title">Council News</h3>
                <p class="action-description">Stay updated with council news and announcements</p>
            </div>
        </div>
    </div>
</section>

<!-- Council Statistics -->
<section class="council-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">45</div>
                    <div class="stat-label">Council Members</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+5 new members</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">assignment</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">23</div>
                    <div class="stat-label">Active Projects</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+8 this year</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">event</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">156</div>
                    <div class="stat-label">Meetings Held</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+12 this quarter</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">emoji_events</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">89%</div>
                    <div class="stat-label">Community Impact</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+15% improvement</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Council Overview -->
<section class="council-overview-section" id="council-overview">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Youth Council Overview</h2>
            <p class="section-subtitle">Learn about the structure, mission, and activities of the Bamenda Youth Council</p>
        </div>

        <div class="overview-content">
            <div class="overview-intro">
                <h3 class="intro-title">About the Bamenda Youth Council</h3>
                <p class="intro-description">
                    The Bamenda Youth Council is a representative body that gives young people a voice in local governance and community development. 
                    Established to promote youth participation in decision-making, the council serves as a bridge between young people 
                    and the Bamenda City Council, ensuring that youth perspectives are considered in all aspects of community development.
                </p>
            </div>

            <div class="council-mission">
                <h3 class="mission-title">Our Mission</h3>
                <div class="mission-grid">
                    <div class="mission-item">
                        <div class="mission-icon">
                            <span class="material-symbols-outlined">record_voice_over</span>
                        </div>
                        <h4 class="mission-name">Amplify Youth Voices</h4>
                        <p class="mission-description">Ensure young people's voices are heard and considered in local governance and decision-making processes.</p>
                    </div>

                    <div class="mission-item">
                        <div class="mission-icon">
                            <span class="material-symbols-outlined">school</span>
                        </div>
                        <h4 class="mission-name">Promote Youth Development</h4>
                        <p class="mission-description">Create opportunities for youth development through leadership training, mentorship, and skill-building programs.</p>
                    </div>

                    <div class="mission-item">
                        <div class="mission-icon">
                            <span class="material-symbols-outlined">diversity_3</span>
                        </div>
                        <h4 class="mission-name">Foster Community Engagement</h4>
                        <p class="mission-description">Encourage active youth participation in community development and civic activities.</p>
                    </div>

                    <div class="mission-item">
                        <div class="mission-icon">
                            <span class="material-symbols-outlined">handshake</span>
                        </div>
                        <h4 class="mission-name">Build Partnerships</h4>
                        <p class="mission-description">Collaborate with stakeholders to create opportunities and address youth challenges in Bamenda.</p>
                    </div>
                </div>
            </div>

            <div class="council-structure">
                <h3 class="structure-title">Council Structure</h3>
                <div class="structure-grid">
                    <div class="structure-item">
                        <div class="structure-icon">
                            <span class="material-symbols-outlined">person</span>
                        </div>
                        <h4 class="structure-name">Executive Council</h4>
                        <p class="structure-description">Leadership team including Chairperson, Vice-Chairperson, Secretary, and Treasurer.</p>
                        <div class="structure-details">
                            <span class="detail-item">4 positions</span>
                            <span class="detail-item">2-year term</span>
                        </div>
                    </div>

                    <div class="structure-item">
                        <div class="structure-icon">
                            <span class="material-symbols-outlined">groups</span>
                        </div>
                        <h4 class="structure-name">General Council</h4>
                        <p class="structure-description">Representative members from different communities and youth organizations in Bamenda.</p>
                        <div class="structure-details">
                            <span class="detail-item">35 members</span>
                            <span class="detail-item">2-year term</span>
                        </div>
                    </div>

                    <div class="structure-item">
                        <div class="structure-icon">
                            <span class="material-symbols-outlined">category</span>
                        </div>
                        <h4 class="structure-name">Committee System</h4>
                        <p class="structure-description">Specialized committees focusing on education, health, environment, sports, and culture.</p>
                        <div class="structure-details">
                            <span class="detail-item">6 committees</span>
                            <span class="detail-item">Project-based</span>
                        </div>
                    </div>

                    <div class="structure-item">
                        <div class="structure-icon">
                            <span class="material-symbols-outlined">support_agent</span>
                        </div>
                        <h4 class="structure-name">Advisory Board</h4>
                        <p class="structure-description">Experienced mentors and advisors who guide and support council activities and decisions.</p>
                        <div class="structure-details">
                            <span class="detail-item">8 advisors</span>
                            <span class="detail-item">Voluntary service</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="council-achievements">
                <h3 class="achievements-title">Key Achievements</h3>
                <div class="achievements-grid">
                    <div class="achievement-item">
                        <div class="achievement-number">01</div>
                        <h4 class="achievement-title">Youth Leadership Program</h4>
                        <p class="achievement-description">Successfully trained 500+ young leaders through our comprehensive leadership development program.</p>
                    </div>

                    <div class="achievement-item">
                        <div class="achievement-number">02</div>
                        <h4 class="achievement-title">Community Clean-up Campaign</h4>
                        <p class="achievement-description">Organized 23 community clean-up campaigns involving over 2,000 youth volunteers.</p>
                    </div>

                    <div class="achievement-item">
                        <div class="achievement-number">03</div>
                        <h4 class="achievement-title">Youth Entrepreneurship Hub</h4>
                        <p class="achievement-description">Established a youth entrepreneurship hub that has supported 150+ young entrepreneurs.</p>
                    </div>

                    <div class="achievement-item">
                        <div class="achievement-number">04</div>
                        <h4 class="achievement-title">Digital Literacy Initiative</h4>
                        <p class="achievement-description">Provided digital literacy training to 1,200+ young people across Bamenda communities.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Council Members -->
<section class="council-members-section" id="council-members">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Council Leadership</h2>
            <p class="section-subtitle">Meet the dedicated youth leaders representing Bamenda's young people</p>
        </div>

        <div class="members-grid">
            <!-- Chairperson -->
            <div class="member-card">
                <div class="member-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                         alt="Youth Council Chairperson">
                </div>
                <div class="member-content">
                    <div class="member-header">
                        <h3 class="member-name">Sarah Nkwocha</h3>
                        <div class="member-position">Chairperson</div>
                    </div>
                    <p class="member-bio">
                        Passionate youth advocate with 5 years of experience in community development and youth empowerment initiatives.
                    </p>
                    <div class="member-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Term: 2023-2025</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Area: Nkwen</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">school</span>
                            <span>Education: Public Administration</span>
                        </div>
                    </div>
                    <div class="member-actions">
                        <button class="btn btn-sm btn-primary">View Profile</button>
                        <button class="btn btn-sm btn-outline">Contact</button>
                    </div>
                </div>
            </div>

            <!-- Vice-Chairperson -->
            <div class="member-card">
                <div class="member-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                         alt="Youth Council Vice-Chairperson">
                </div>
                <div class="member-content">
                    <div class="member-header">
                        <h3 class="member-name">James Fomonyuy</h3>
                        <div class="member-position">Vice-Chairperson</div>
                    </div>
                    <p class="member-bio">
                        Youth entrepreneur and technology advocate focused on digital innovation and startup ecosystem development.
                    </p>
                    <div class="member-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Term: 2023-2025</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Area: Mankon</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">school</span>
                            <span>Education: Computer Science</span>
                        </div>
                    </div>
                    <div class="member-actions">
                        <button class="btn btn-sm btn-primary">View Profile</button>
                        <button class="btn btn-sm btn-outline">Contact</button>
                    </div>
                </div>
            </div>

            <!-- Secretary -->
            <div class="member-card">
                <div class="member-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                         alt="Youth Council Secretary">
                </div>
                <div class="member-content">
                    <div class="member-header">
                        <h3 class="member-name">Grace Che</h3>
                        <div class="member-position">Secretary</div>
                    </div>
                    <p class="member-bio">
                        Communications specialist with expertise in youth engagement, social media, and community outreach programs.
                    </p>
                    <div class="member-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Term: 2023-2025</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Area: City Center</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">school</span>
                            <span>Education: Mass Communication</span>
                        </div>
                    </div>
                    <div class="member-actions">
                        <button class="btn btn-sm btn-primary">View Profile</button>
                        <button class="btn btn-sm btn-outline">Contact</button>
                    </div>
                </div>
            </div>

            <!-- Treasurer -->
            <div class="member-card">
                <div class="member-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                         alt="Youth Council Treasurer">
                </div>
                <div class="member-content">
                    <div class="member-header">
                        <h3 class="member-name">Michael Ticha</h3>
                        <div class="member-position">Treasurer</div>
                    </div>
                    <p class="member-bio">
                        Finance and accounting professional with experience in youth project management and resource mobilization.
                    </p>
                    <div class="member-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Term: 2023-2025</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Area: Bambili</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">school</span>
                            <span>Education: Accounting</span>
                        </div>
                    </div>
                    <div class="member-actions">
                        <button class="btn btn-sm btn-primary">View Profile</button>
                        <button class="btn btn-sm btn-outline">Contact</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="view-all-members">
            <button class="btn btn-outline" onclick="viewAllMembers()">View All Council Members</button>
        </div>
    </div>
</section>

<!-- Council Programs -->
<section class="council-programs-section" id="council-programs">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Council Programs & Initiatives</h2>
            <p class="section-subtitle">Explore programs and initiatives led by the Bamenda Youth Council</p>
        </div>

        <div class="programs-grid">
            <!-- Youth Leadership Program -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">emoji_events</span>
                    </div>
                    <div class="program-badge active">Active</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Youth Leadership Development</h3>
                    <p class="program-description">Comprehensive leadership training program designed to develop young leaders with skills in governance, public speaking, and community mobilization.</p>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">500+</span>
                            <span class="stat-label">Graduates</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">12</span>
                            <span class="stat-label">Modules</span>
                        </div>
                    </div>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Leadership Workshops</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Mentorship Program</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Community Projects</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- Digital Skills Initiative -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">computer</span>
                    </div>
                    <div class="program-badge active">Active</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Digital Skills Initiative</h3>
                    <p class="program-description">Digital literacy and technology skills training program to equip young people with essential digital competencies for the modern world.</p>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">1,200+</span>
                            <span class="stat-label">Participants</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">8</span>
                            <span class="stat-label">Training Centers</span>
                        </div>
                    </div>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Computer Basics</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Internet Skills</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Digital Marketing</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Register</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- Environmental Action -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">eco</span>
                    </div>
                    <div class="program-badge active">Active</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Environmental Action Program</h3>
                    <p class="program-description">Environmental conservation and sustainability program engaging youth in climate action, waste management, and green initiatives.</p>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">2,000+</span>
                            <span class="stat-label">Volunteers</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">23</span>
                            <span class="stat-label">Clean-up Campaigns</span>
                        </div>
                    </div>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Tree Planting</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Waste Management</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Climate Education</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Join Program</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- Sports & Recreation -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">sports_soccer</span>
                    </div>
                    <div class="program-badge active">Active</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Sports & Recreation Program</h3>
                    <p class="program-description">Sports development and recreation program promoting physical fitness, teamwork, and healthy lifestyles among youth.</p>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">15</span>
                            <span class="stat-label">Sports Teams</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">800+</span>
                            <span class="stat-label">Athletes</span>
                        </div>
                    </div>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Football Training</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Basketball Courts</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Annual Tournament</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Join Team</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- Arts & Culture -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">palette</span>
                    </div>
                    <div class="program-badge active">Active</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Arts & Cultural Program</h3>
                    <p class="program-description">Cultural preservation and arts development program showcasing youth talent and promoting Bamenda's cultural heritage.</p>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">12</span>
                            <span class="stat-label">Art Groups</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">300+</span>
                            <span class="stat-label">Artists</span>
                        </div>
                    </div>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Music Workshops</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Dance Classes</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Art Exhibitions</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Join Program</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- Entrepreneurship Hub -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">storefront</span>
                    </div>
                    <div class="program-badge active">Active</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Youth Entrepreneurship Hub</h3>
                    <p class="program-description">Business development and entrepreneurship program supporting young people to start and grow their own businesses.</p>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">150+</span>
                            <span class="stat-label">Startups Supported</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">45</span>
                            <span class="stat-label">Businesses Created</span>
                        </div>
                    </div>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Business Training</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Startup Incubation</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Mentorship</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Start Business</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Join Council -->
<section class="join-council-section" id="join-council">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Join the Youth Council</h2>
            <p class="section-subtitle">Become part of the youth movement and make a difference in your community</p>
        </div>

        <div class="join-content">
            <div class="join-info">
                <h3 class="join-title">Why Join the Youth Council?</h3>
                <div class="benefits-grid">
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <span class="material-symbols-outlined">record_voice_over</span>
                        </div>
                        <h4 class="benefit-title">Make Your Voice Heard</h4>
                        <p class="benefit-description">Represent youth interests and influence decisions that affect young people in Bamenda.</p>
                    </div>

                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <span class="material-symbols-outlined">school</span>
                        </div>
                        <h4 class="benefit-title">Develop Leadership Skills</h4>
                        <p class="benefit-description">Gain valuable experience in leadership, governance, and community development.</p>
                    </div>

                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <span class="material-symbols-outlined">groups</span>
                        </div>
                        <h4 class="benefit-title">Build Your Network</h4>
                        <p class="benefit-description">Connect with like-minded young people and build lasting relationships.</p>
                    </div>

                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <span class="material-symbols-outlined">engineering</span>
                        </div>
                        <h4 class="benefit-title">Create Impact</h4>
                        <p class="benefit-description">Implement projects and initiatives that make a real difference in your community.</p>
                    </div>
                </div>
            </div>

            <div class="application-form">
                <h3 class="form-title">Application Form</h3>
                <form id="councilApplicationForm">
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
                                <label class="form-label">Gender *</label>
                                <select class="form-select" required>
                                    <option value="">Select gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Educational Level *</label>
                                <select class="form-select" required>
                                    <option value="">Select education level</option>
                                    <option value="high-school">High School</option>
                                    <option value="diploma">Diploma</option>
                                    <option value="bachelors">Bachelor's Degree</option>
                                    <option value="masters">Master's Degree</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Council Interest</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Position of Interest *</label>
                            <select class="form-select" required>
                                <option value="">Select position</option>
                                <option value="general-member">General Council Member</option>
                                <option value="executive">Executive Position</option>
                                <option value="committee">Committee Member</option>
                                <option value="volunteer">Volunteer</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Area of Interest *</label>
                            <select class="form-select" required>
                                <option value="">Select area of interest</option>
                                <option value="education">Education & Youth Development</option>
                                <option value="health">Health & Wellness</option>
                                <option value="environment">Environment & Climate</option>
                                <option value="sports">Sports & Recreation</option>
                                <option value="arts">Arts & Culture</option>
                                <option value="technology">Technology & Innovation</option>
                                <option value="entrepreneurship">Entrepreneurship</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Motivation for Joining *</label>
                            <textarea class="form-textarea" rows="4" placeholder="Why do you want to join the Youth Council and what do you hope to achieve?" required></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Skills and Experience</label>
                            <textarea class="form-textarea" rows="3" placeholder="Describe any relevant skills, experience, or community involvement"></textarea>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Commitment & Availability</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Time Commitment *</label>
                            <select class="form-select" required>
                                <option value="">Select time commitment</option>
                                <option value="5-10">5-10 hours per week</option>
                                <option value="10-15">10-15 hours per week</option>
                                <option value="15-20">15-20 hours per week</option>
                                <option value="20+">20+ hours per week</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Meeting Availability *</label>
                            <select class="form-select" required>
                                <option value="">Select availability</option>
                                <option value="weekends">Weekends only</option>
                                <option value="weekdays">Weekday evenings</option>
                                <option value="flexible">Flexible schedule</option>
                                <option value="anytime">Available anytime</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Previous Experience</label>
                            <select class="form-select">
                                <option value="">Select experience level</option>
                                <option value="none">No previous experience</option>
                                <option value="school">School leadership roles</option>
                                <option value="community">Community involvement</option>
                                <option value="leadership">Leadership experience</option>
                                <option value="other">Other relevant experience</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Additional Information</h4>
                        
                        <div class="form-group">
                            <label class="form-label">How did you hear about the Youth Council? *</label>
                            <select class="form-select" required>
                                <option value="">Select option</option>
                                <option value="social-media">Social Media</option>
                                <option value="school">School/University</option>
                                <option value="friend">Friend/Family</option>
                                <option value="community">Community Center</option>
                                <option value="event">Council Event</option>
                                <option value="website">City Council Website</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Additional Comments</label>
                            <textarea class="form-textarea" rows="3" placeholder="Any additional information you'd like to share"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Agreement *</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="agreement" required>
                                    <span class="checkmark"></span>
                                    I understand that joining the Youth Council requires commitment, dedication, and active participation in council activities and meetings.
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

<!-- Council News -->
<section class="council-news-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Council News & Updates</h2>
            <p class="section-subtitle">Stay updated with the latest news and announcements from the Youth Council</p>
        </div>

        <div class="news-grid">
            <!-- News Item 1 -->
            <div class="news-card">
                <div class="news-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                         alt="Youth leadership graduation ceremony">
                </div>
                <div class="news-content">
                    <div class="news-meta">
                        <span class="news-date">March 15, 2024</span>
                        <span class="news-category">Leadership Program</span>
                    </div>
                    <h3 class="news-title">Youth Leadership Program Graduates 50 New Leaders</h3>
                    <p class="news-description">The Bamenda Youth Council celebrated the graduation of 50 young leaders from our comprehensive leadership development program.</p>
                    <div class="news-actions">
                        <button class="btn btn-sm btn-primary">Read More</button>
                        <button class="btn btn-sm btn-outline">Share</button>
                    </div>
                </div>
            </div>

            <!-- News Item 2 -->
            <div class="news-card">
                <div class="news-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                         alt="Environmental clean-up campaign">
                </div>
                <div class="news-content">
                    <div class="news-meta">
                        <span class="news-date">March 10, 2024</span>
                        <span class="news-category">Environment</span>
                    </div>
                    <h3 class="news-title">Environmental Campaign Cleans Up 23 Communities</h3>
                    <p class="news-description">Youth council environmental action program successfully completed clean-up campaigns in 23 communities across Bamenda.</p>
                    <div class="news-actions">
                        <button class="btn btn-sm btn-primary">Read More</button>
                        <button class="btn btn-sm btn-outline">Share</button>
                    </div>
                </div>
            </div>

            <!-- News Item 3 -->
            <div class="news-card">
                <div class="news-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                         alt="Digital skills training workshop">
                </div>
                <div class="news-content">
                    <div class="news-meta">
                        <span class="news-date">March 5, 2024</span>
                        <span class="news-category">Digital Skills</span>
                    </div>
                    <h3 class="news-title">Digital Skills Initiative Reaches 1,000 Youth</h3>
                    <p class="news-description">Our digital skills program has successfully trained over 1,000 young people in essential digital competencies.</p>
                    <div class="news-actions">
                        <button class="btn btn-sm btn-primary">Read More</button>
                        <button class="btn btn-sm btn-outline">Share</button>
                    </div>
                </div>
            </div>

            <!-- News Item 4 -->
            <div class="news-card">
                <div class="news-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                         alt="Sports tournament opening ceremony">
                </div>
                <div class="news-content">
                    <div class="news-meta">
                        <span class="news-date">February 28, 2024</span>
                        <span class="news-category">Sports</span>
                    </div>
                    <h3 class="news-title">Annual Youth Sports Tournament Kicks Off</h3>
                    <p class="news-description">The youth council sports program launched its annual tournament with 15 teams competing across various sports.</p>
                    <div class="news-actions">
                        <button class="btn btn-sm btn-primary">Read More</button>
                        <button class="btn btn-sm btn-outline">Share</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="load-more-container">
            <button class="btn btn-outline" onclick="loadMoreNews()">Load More News</button>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Common questions about the Bamenda Youth Council</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Who can join the Youth Council?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Any young person aged 15-35 living in Bamenda who is passionate about community development and youth empowerment can join the Youth Council.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What is the time commitment required?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Council members typically commit 5-20 hours per week depending on their role and current projects. This includes meetings, program activities, and community engagement.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How are council members selected?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Council members are selected through an application process, interviews, and community voting. We look for passion, commitment, and diverse representation.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What training and support is provided?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>We provide comprehensive leadership training, mentorship, skill development workshops, and ongoing support from experienced advisors and partners.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How can I support the Youth Council?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>You can support the Youth Council by volunteering for programs, donating resources, partnering on projects, or spreading the word about our initiatives.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What impact has the Youth Council made?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>The Youth Council has made significant impact through leadership training, environmental campaigns, digital skills programs, sports initiatives, and community development projects.</p>
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
/* Youth Council Page Styles */
.youth-council-hero {
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

/* Council Statistics Section */
.council-stats-section {
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

/* Council Overview Section */
.council-overview-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.overview-content {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-2xl);
}

.overview-intro {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.intro-title {
    font-size: 2rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
}

.intro-description {
    font-size: 1.125rem;
    color: var(--on-surface-variant);
    line-height: 1.8;
}

.council-mission {
    margin-top: var(--spacing-2xl);
}

.mission-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
    text-align: center;
}

.mission-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: var(--spacing-xl);
}

.mission-item {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.mission-item:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.mission-icon {
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

.mission-icon .material-symbols-outlined {
    font-size: 2rem;
}

.mission-name {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.mission-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
}

.council-structure {
    margin-top: var(--spacing-2xl);
}

.structure-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
    text-align: center;
}

.structure-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: var(--spacing-xl);
}

.structure-item {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.structure-item:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.structure-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--secondary);
    color: var(--on-secondary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-lg);
}

.structure-icon .material-symbols-outlined {
    font-size: 2rem;
}

.structure-name {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.structure-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.structure-details {
    display: flex;
    justify-content: center;
    gap: var(--spacing-lg);
    flex-wrap: wrap;
}

.detail-item {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    padding: var(--spacing-xs) var(--spacing-sm);
    background-color: var(--surface-container);
    border-radius: var(--radius-full);
}

.council-achievements {
    margin-top: var(--spacing-2xl);
}

.achievements-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
    text-align: center;
}

.achievements-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: var(--spacing-xl);
}

.achievement-item {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.achievement-item:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.achievement-number {
    font-size: 3rem;
    font-weight: 800;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.achievement-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.achievement-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
}

/* Council Members Section */
.council-members-section {
    padding: var(--spacing-3xl) 0;
}

.members-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.member-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
    overflow: hidden;
}

.member-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.member-image {
    height: 200px;
    overflow: hidden;
}

.member-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.member-content {
    padding: var(--spacing-lg);
}

.member-header {
    margin-bottom: var(--spacing-md);
}

.member-name {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-xs);
}

.member-position {
    font-size: 0.875rem;
    color: var(--tertiary);
    font-weight: 600;
    text-transform: uppercase;
}

.member-bio {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.member-details {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

.member-actions {
    display: flex;
    gap: var(--spacing-sm);
}

.view-all-members {
    text-align: center;
    margin-top: var(--spacing-xl);
}

/* Council Programs Section */
.council-programs-section {
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

.program-badge.active {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
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

.program-stats {
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

.program-features {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-sm);
    justify-content: center;
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
    color: var(--tertiary);
}

.program-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Join Council Section */
.join-council-section {
    padding: var(--spacing-3xl) 0;
}

.join-content {
    display: grid;
    grid-template-columns: 1fr 2fr;
    gap: var(--spacing-2xl);
}

.join-info {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
}

.join-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
}

.benefits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: var(--spacing-lg);
}

.benefit-item {
    background-color: var(--surface-container);
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

.benefit-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.benefit-description {
    color: var(--on-surface-variant);
    font-size: 0.875rem;
    line-height: 1.5;
}

.application-form {
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

/* Council News Section */
.council-news-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.news-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.news-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
    overflow: hidden;
}

.news-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.news-image {
    height: 200px;
    overflow: hidden;
}

.news-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.news-content {
    padding: var(--spacing-lg);
}

.news-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: var(--spacing-md);
}

.news-date {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.news-category {
    font-size: 0.75rem;
    color: var(--tertiary);
    font-weight: 600;
    text-transform: uppercase;
    padding: var(--spacing-xs) var(--spacing-sm);
    background-color: var(--tertiary-container);
    border-radius: var(--radius-full);
}

.news-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.news-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.news-actions {
    display: flex;
    gap: var(--spacing-sm);
}

.load-more-container {
    text-align: center;
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
    
    .mission-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .structure-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .achievements-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .members-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .programs-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .join-content {
        grid-template-columns: 1fr;
        gap: var(--spacing-xl);
    }
    
    .benefits-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .news-grid {
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
    
    .mission-item {
        padding: var(--spacing-lg);
    }
    
    .mission-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .mission-icon .material-symbols-outlined {
        font-size: 1.5rem;
    }
    
    .structure-item {
        padding: var(--spacing-lg);
    }
    
    .structure-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .structure-icon .material-symbols-outlined {
        font-size: 1.5rem;
    }
    
    .achievement-item {
        padding: var(--spacing-lg);
    }
    
    .member-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .program-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .benefit-item {
        padding: var(--spacing-md);
    }
    
    .benefit-icon {
        width: 2.5rem;
        height: 2.5rem;
    }
    
    .benefit-icon .material-symbols-outlined {
        font-size: 1.25rem;
    }
    
    .application-form {
        padding: var(--spacing-lg);
    }
    
    .news-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
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
    
    .program-features {
        flex-direction: column;
        gap: var(--spacing-sm);
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
function openCouncilOverview() {
    document.getElementById('council-overview').scrollIntoView({ behavior: 'smooth' });
}

function openCouncilMembers() {
    document.getElementById('council-members').scrollIntoView({ behavior: 'smooth' });
}

function openCouncilPrograms() {
    document.getElementById('council-programs').scrollIntoView({ behavior: 'smooth' });
}

function openCouncilMeetings() {
    alert('Council meetings section would open here. In production, this would show meeting schedules and participation options.');
}

function openCouncilProjects() {
    alert('Council projects section would open here. In production, this would show youth-led community projects and initiatives.');
}

function openCouncilNews() {
    document.getElementById('council-news').scrollIntoView({ behavior: 'smooth' });
}

// Member actions
document.querySelectorAll('.member-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Profile')) {
        button.addEventListener('click', function() {
            const memberName = this.closest('.member-card').querySelector('.member-name').textContent;
            alert(`Viewing profile for: "${memberName}"`);
        });
    }
});

document.querySelectorAll('.member-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Contact')) {
        button.addEventListener('click', function() {
            const memberName = this.closest('.member-card').querySelector('.member-name').textContent;
            alert(`Contacting: "${memberName}"`);
        });
    }
});

// Program actions
document.querySelectorAll('.program-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Apply')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
            alert(`Applying for: "${programTitle}"`);
        });
    }
    
    if (button.textContent.includes('Register')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
            alert(`Registering for: "${programTitle}"`);
        });
    }
    
    if (button.textContent.includes('Join')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
            alert(`Joining: "${programTitle}"`);
        });
    }
    
    if (button.textContent.includes('Start')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
            alert(`Starting with: "${programTitle}"`);
        });
    }
});

document.querySelectorAll('.program-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('More')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
            alert(`Learning more about: "${programTitle}"`);
        });
    }
});

// Council application form submission
document.getElementById('councilApplicationForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate required fields
    const fullName = document.querySelector('input[type="text"][required]').value;
    const dateOfBirth = document.querySelector('input[type="date"][required]').value;
    const email = document.querySelector('input[type="email"][required]').value;
    const phone = document.querySelector('input[type="tel"][required]').value;
    const address = document.querySelector('input[placeholder*="address"]').value;
    
    if (!fullName || !dateOfBirth || !email || !phone || !address) {
        alert('Please fill in all required fields.');
        return;
    }
    
    // Validate age requirement
    const age = calculateAge(dateOfBirth);
    if (age < 15 || age > 35) {
        alert('You must be between 15-35 years old to join the Youth Council.');
        return;
    }
    
    // Validate agreement
    const agreement = document.querySelector('input[name="agreement"]:checked');
    if (!agreement) {
        alert('Please accept the agreement to proceed with the application.');
        return;
    }
    
    alert('Youth Council application submitted successfully! We will review your application and contact you within 7 business days for the next steps.');
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

// View all members
function viewAllMembers() {
    alert('Viewing all council members. In production, this would show a complete list of all council members with detailed profiles.');
}

// Load more news
function loadMoreNews() {
    alert('Loading more news articles. In production, this would fetch additional news items from the server.');
}

// News actions
document.querySelectorAll('.news-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Read')) {
        button.addEventListener('click', function() {
            const newsTitle = this.closest('.news-card').querySelector('.news-title').textContent;
            alert(`Reading: "${newsTitle}"`);
        });
    }
});

document.querySelectorAll('.news-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Share')) {
        button.addEventListener('click', function() {
            const newsTitle = this.closest('.news-card').querySelector('.news-title').textContent;
            alert(`Sharing: "${newsTitle}"`);
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

// Auto-refresh council data
function refreshCouncilData() {
    // In production, this would fetch real-time council data
    console.log('Refreshing youth council data...');
}

// Refresh data every 60 seconds
setInterval(refreshCouncilData, 60000);
</script>
