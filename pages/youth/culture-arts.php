<?php
/**
 * Bamenda City Council E-Governance Platform
 * Youth Culture and Arts Page
 */

// Set page metadata
$page_title = 'Youth Culture & Arts | Bamenda City Council';
$page_description = 'Access youth culture and arts programs, creative opportunities, cultural events, and artistic development for young people in Bamenda.';
$page_keywords = 'youth culture, arts programs, creative opportunities, cultural events, Bamenda youth arts';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Youth', 'url' => '../index.php'],
    ['title' => 'Culture & Arts', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero youth-culture-arts-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-youth-programs.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Youth Culture & Arts</span>
            <h1 class="hero-title">Youth Culture & Arts Programs</h1>
            <p class="hero-subtitle">
                Comprehensive youth culture and arts programs including creative workshops, cultural events, artistic development, and opportunities for young artists and performers in Bamenda.
            </p>
            <div class="hero-actions">
                <a href="#arts-programs" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">palette</span>
                    Arts Programs
                </a>
                <a href="#cultural-events" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">event</span>
                    Cultural Events
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Arts & Culture Actions</h2>
            <p class="section-subtitle">Quick access to youth culture and arts programs</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openArtsWorkshops()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">brush</span>
                </div>
                <h3 class="action-title">Arts Workshops</h3>
                <p class="action-description">Creative arts workshops</p>
            </div>

            <div class="action-card" onclick="openMusicPrograms()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">music_note</span>
                </div>
                <h3 class="action-title">Music Programs</h3>
                <p class="action-description">Music and performance</p>
            </div>

            <div class="action-card" onclick="openDancePrograms()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">directions_run</span>
                </div>
                <h3 class="action-title">Dance Programs</h3>
                <p class="action-description">Dance and movement</p>
            </div>

            <div class="action-card" onclick="openTheaterPrograms()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">theater_comedy</span>
                </div>
                <h3 class="action-title">Theater Programs</h3>
                <p class="action-description">Drama and theater</p>
            </div>

            <div class="action-card" onclick="openVisualArts()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">visibility</span>
                </div>
                <h3 class="action-title">Visual Arts</h3>
                <p class="action-description">Painting and sculpture</p>
            </div>

            <div class="action-card" onclick="openCulturalFestivals()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">celebration</span>
                </div>
                <h3 class="action-title">Cultural Festivals</h3>
                <p class="action-description">Cultural celebrations</p>
            </div>
        </div>
    </div>
</section>

<!-- Arts Statistics -->
<section class="arts-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">palette</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">2,345</div>
                    <div class="stat-label">Young Artists</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+456 this year</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">event</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">89</div>
                    <div class="stat-label">Cultural Events</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+23 events</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">156</div>
                    <div class="stat-label">Workshops Conducted</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+45 workshops</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">verified</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">92%</div>
                    <div class="stat-label">Participant Satisfaction</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+8% improvement</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Arts Programs -->
<section class="arts-programs-section" id="arts-programs">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Arts & Culture Programs</h2>
            <p class="section-subtitle">Comprehensive programs to develop youth artistic and cultural talents</p>
        </div>

        <div class="programs-grid">
            <!-- Visual Arts Program -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">palette</span>
                    </div>
                    <div class="program-badge popular">Popular</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Visual Arts Program</h3>
                    <p class="program-description">Comprehensive visual arts training including painting, drawing, sculpture, and digital arts for young artists.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Painting and drawing</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Sculpture and ceramics</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Digital art and design</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Art exhibitions</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">456</span>
                            <span class="stat-label">Participants</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">23</span>
                            <span class="stat-label">Exhibitions</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Join Program</button>
                        <button class="btn btn-sm btn-outline">View Gallery</button>
                    </div>
                </div>
            </div>

            <!-- Music Program -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">music_note</span>
                    </div>
                    <div class="program-badge active">Active</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Music & Performance Program</h3>
                    <p class="program-description">Music education and performance training including vocal training, instrument lessons, and ensemble performance.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Vocal training</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Instrument lessons</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Music theory</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Performance opportunities</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">234</span>
                            <span class="stat-label">Musicians</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">45</span>
                            <span class="stat-label">Performances</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Join Program</button>
                        <button class="btn btn-sm btn-outline">Listen to Music</button>
                    </div>
                </div>
            </div>

            <!-- Dance Program -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">directions_run</span>
                    </div>
                    <div class="program-badge expanding">Expanding</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Dance & Movement Program</h3>
                    <p class="program-description">Dance training covering various styles including traditional, contemporary, hip-hop, and cultural dance forms.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Traditional dance</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Contemporary dance</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Street dance</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Dance performances</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">189</span>
                            <span class="stat-label">Dancers</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">34</span>
                            <span class="stat-label">Dance Groups</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Join Program</button>
                        <button class="btn btn-sm btn-outline">Watch Performances</button>
                    </div>
                </div>
            </div>

            <!-- Theater Program -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">theater_comedy</span>
                    </div>
                    <div class="program-badge new">New</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Theater & Drama Program</h3>
                    <p class="program-description">Theater arts training including acting, scriptwriting, directing, and stage production for young performers.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Acting workshops</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Scriptwriting</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Stage production</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Theater performances</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">123</span>
                            <span class="stat-label">Actors</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">12</span>
                            <span class="stat-label">Productions</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Join Program</button>
                        <button class="btn btn-sm btn-outline">View Productions</button>
                    </div>
                </div>
            </div>

            <!-- Creative Writing -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">edit</span>
                    </div>
                    <div class="program-badge active">Active</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Creative Writing Program</h3>
                    <p class="program-description">Creative writing workshops covering poetry, fiction, non-fiction, and storytelling for young writers.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Poetry writing</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Storytelling</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Playwriting</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Literary publications</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">167</span>
                            <span class="stat-label">Writers</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">8</span>
                            <span class="stat-label">Publications</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Join Program</button>
                        <button class="btn btn-sm btn-outline">Read Works</button>
                    </div>
                </div>
            </div>

            <!-- Film & Media -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">videocam</span>
                    </div>
                    <div class="program-badge popular">Popular</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Film & Media Program</h3>
                    <p class="program-description">Film production and media training including cinematography, editing, and digital content creation.</p>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Video production</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Film editing</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Screenwriting</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Film festivals</span>
                        </div>
                    </div>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">89</span>
                            <span class="stat-label">Filmmakers</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">15</span>
                            <span class="stat-label">Films Produced</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Join Program</button>
                        <button class="btn btn-sm btn-outline">Watch Films</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cultural Events -->
<section class="cultural-events-section" id="cultural-events">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Cultural Events & Festivals</h2>
            <p class="section-subtitle">Upcoming cultural events and festivals for youth participation</p>
        </div>

        <div class="events-grid">
            <!-- Youth Arts Festival -->
            <div class="event-card">
                <div class="event-header">
                    <div class="event-icon">
                        <span class="material-symbols-outlined">celebration</span>
                    </div>
                    <div class="event-badge upcoming">Upcoming</div>
                </div>
                <div class="event-content">
                    <h3 class="event-title">Bamenda Youth Arts Festival</h3>
                    <p class="event-description">Annual celebration of youth creativity featuring art exhibitions, performances, workshops, and cultural showcases.</p>
                    <div class="event-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">calendar_today</span>
                            <span>December 20-22, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>City Center Cultural Grounds</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>500+ expected participants</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">free</span>
                            <span>Free entry</span>
                        </div>
                    </div>
                    <div class="event-highlights">
                        <h4 class="highlights-title">Event Highlights:</h4>
                        <div class="highlights-list">
                            <div class="highlight-item">Art exhibitions</div>
                            <div class="highlight-item">Live performances</div>
                            <div class="highlight-item">Creative workshops</div>
                            <div class="highlight-item">Cultural showcases</div>
                        </div>
                    </div>
                    <div class="event-actions">
                        <button class="btn btn-sm btn-primary">Register</button>
                        <button class="btn btn-sm btn-outline">View Schedule</button>
                    </div>
                </div>
            </div>

            <!-- Music Competition -->
            <div class="event-card">
                <div class="event-header">
                    <div class="event-icon">
                        <span class="material-symbols-outlined">music_note</span>
                    </div>
                    <div class="event-badge competition">Competition</div>
                </div>
                <div class="event-content">
                    <h3 class="event-title">Youth Music Competition</h3>
                    <p class="event-description">Annual music competition showcasing young musical talent across various genres and instruments.</p>
                    <div class="event-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">calendar_today</span>
                            <span>January 15-17, 2025</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Bamenda City Hall</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>200+ participants</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>₣1,000 registration</span>
                        </div>
                    </div>
                    <div class="event-categories">
                        <h4 class="categories-title">Categories:</h4>
                        <div class="categories-list">
                            <div class="category-item">Vocal Performance</div>
                            <div class="category-item">Instrumental</div>
                            <div class="category-item">Traditional Music</div>
                            <div class="category-item">Contemporary</div>
                        </div>
                    </div>
                    <div class="event-actions">
                        <button class="btn btn-sm btn-primary">Register</button>
                        <button class="btn btn-sm btn-outline">View Rules</button>
                    </div>
                </div>
            </div>

            <!-- Dance Showcase -->
            <div class="event-card">
                <div class="event-header">
                    <div class="event-icon">
                        <span class="material-symbols-outlined">directions_run</span>
                    </div>
                    <div class="event-badge showcase">Showcase</div>
                </div>
                <div class="event-content">
                    <h3 class="event-title">Youth Dance Showcase</h3>
                    <p class="event-description">Platform for young dancers to showcase their talents and compete in various dance styles.</p>
                    <div class="event-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">calendar_today</span>
                            <span>February 10-12, 2025</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Cultural Center</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>150+ dancers</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>₣500 registration</span>
                        </div>
                    </div>
                    <div class="event-styles">
                        <h4 class="styles-title">Dance Styles:</h4>
                        <div class="styles-list">
                            <div class="style-item">Traditional</div>
                            <div class="style-item">Contemporary</div>
                            <div class="style-item">Hip-Hop</div>
                            <div class="style-item">Folk</div>
                        </div>
                    </div>
                    <div class="event-actions">
                        <button class="btn btn-sm btn-primary">Register</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Theater Festival -->
            <div class="event-card">
                <div class="event-header">
                    <div class="event-icon">
                        <span class="material-symbols-outlined">theater_comedy</span>
                    </div>
                    <div class="event-badge festival">Festival</div>
                </div>
                <div class="event-content">
                    <h3 class="event-title">Youth Theater Festival</h3>
                    <p class="event-description">Week-long theater festival featuring youth productions, workshops, and performances.</p>
                    <div class="event-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">calendar_today</span>
                            <span>March 5-11, 2025</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Municipal Theater</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>300+ participants</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Free workshops</span>
                        </div>
                    </div>
                    <div class="event-activities">
                        <h4 class="activities-title">Activities:</h4>
                        <div class="activities-list">
                            <div class="activity-item">Play performances</div>
                            <div class="activity-item">Acting workshops</div>
                            <div class="activity-item">Script readings</div>
                            <div class="activity-item">Awards ceremony</div>
                        </div>
                    </div>
                    <div class="event-actions">
                        <button class="btn btn-sm btn-primary">Register</button>
                        <button class="btn btn-sm btn-outline">View Schedule</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Arts Application -->
<section class="arts-application-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Arts Program Application</h2>
            <p class="section-subtitle">Apply for youth arts and culture programs</p>
        </div>

        <div class="application-content">
            <div class="application-form">
                <h3 class="form-title">Youth Arts Program Application</h3>
                <form id="artsApplicationForm">
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
                            <label class="form-label">Arts Program *</label>
                            <select class="form-select" required>
                                <option value="">Select program</option>
                                <option value="visual-arts">Visual Arts</option>
                                <option value="music">Music & Performance</option>
                                <option value="dance">Dance & Movement</option>
                                <option value="theater">Theater & Drama</option>
                                <option value="creative-writing">Creative Writing</option>
                                <option value="film-media">Film & Media</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Experience Level *</label>
                            <select class="form-select" required>
                                <option value="">Select experience level</option>
                                <option value="beginner">Beginner</option>
                                <option value="intermediate">Intermediate</option>
                                <option value="advanced">Advanced</option>
                                <option value="professional">Professional</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Artistic Background *</label>
                            <textarea class="form-textarea" rows="4" placeholder="Describe your artistic background and experience" required></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Artistic Goals *</label>
                            <textarea class="form-textarea" rows="3" placeholder="What do you hope to achieve through our arts programs?" required></textarea>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Additional Information</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Previous Experience</label>
                            <textarea class="form-textarea" rows="3" placeholder="Any previous arts training, performances, or exhibitions"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Portfolio/Work Samples</label>
                            <div class="file-upload">
                                <input type="file" id="artsUpload" accept=".jpg,.jpeg,.png,.pdf,.mp3,.mp4" multiple>
                                <label for="artsUpload" class="file-upload-label">
                                    <span class="material-symbols-outlined">upload_file</span>
                                    <span>Upload portfolio or work samples</span>
                                    <small>Images, documents, audio, or video files (Max 10MB per file)</small>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Preferred Schedule *</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="schedule" value="weekdays">
                                    <span class="checkmark"></span>
                                    Weekday sessions (Monday-Friday)
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="schedule" value="weekends">
                                    <span class="checkmark"></span>
                                    Weekend sessions (Saturday-Sunday)
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="schedule" value="evenings">
                                    <span class="checkmark"></span>
                                    Evening sessions (4PM-7PM)
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">How did you hear about our arts programs? *</label>
                            <select class="form-select" required>
                                <option value="">Select option</option>
                                <option value="website">City Council Website</option>
                                <option value="social-media">Social Media</option>
                                <option value="friend">Friend/Word of mouth</option>
                                <option value="school">School/College</option>
                                <option value="workshop">Arts Workshop</option>
                                <option value="event">Cultural Event</option>
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
                                    I commit to attending all program sessions and actively participating in program activities and performances
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
            <p class="section-subtitle">Common questions about youth arts and culture programs</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Who can join the arts programs?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Our arts programs are open to youth aged 10-35 living in Bamenda. No prior experience is required for beginner programs, while advanced programs may require auditions or portfolio reviews.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Are the arts programs free?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Most of our arts programs are free or heavily subsidized. Some specialized workshops or competitions may require a small registration fee, but scholarships are available for those who cannot afford them.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What equipment do I need?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Basic equipment is provided for most programs. For specialized programs like music or film, you may need to bring your own equipment, but we can provide guidance on affordable options.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How often are the programs held?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Programs run in cycles of 3-6 months with regular weekly sessions. We also offer intensive workshops during school holidays and summer camps.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Do you provide certificates?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, participants who successfully complete our arts programs receive certificates of completion. These can be valuable for college applications and career development.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Can I join multiple programs?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, you can apply for multiple programs as long as you can commit to the schedule requirements. We encourage exploring different art forms to develop well-rounded artistic skills.</p>
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
/* Youth Culture & Arts Page Styles */
.youth-culture-arts-hero {
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

/* Arts Statistics Section */
.arts-stats-section {
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

/* Arts Programs Section */
.arts-programs-section {
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
    background-color: var(--secondary);
    color: var(--on-secondary);
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
    background-color: var(--error);
    color: var(--on-error);
}

.program-content {
    padding: var(--spacing-lg);
}

.program-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--secondary);
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
    color: var(--secondary);
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

/* Cultural Events Section */
.cultural-events-section {
    padding: var(--spacing-3xl) 0;
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
    background-color: var(--secondary);
    color: var(--on-secondary);
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

.event-badge.competition {
    background-color: var(--error);
    color: var(--on-error);
}

.event-badge.showcase {
    background-color: var(--primary);
    color: var(--on-primary);
}

.event-badge.festival {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.event-content {
    padding: var(--spacing-lg);
}

.event-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--secondary);
    margin-bottom: var(--spacing-md);
}

.event-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.event-details {
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
    color: var(--secondary);
}

.event-highlights {
    margin-bottom: var(--spacing-lg);
}

.highlights-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--secondary);
    margin-bottom: var(--spacing-sm);
}

.highlights-list {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-sm);
}

.highlight-item {
    padding: var(--spacing-xs) var(--spacing-sm);
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.event-categories {
    margin-bottom: var(--spacing-lg);
}

.categories-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--secondary);
    margin-bottom: var(--spacing-sm);
}

.categories-list {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-sm);
}

.category-item {
    padding: var(--spacing-xs) var(--spacing-sm);
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.event-styles {
    margin-bottom: var(--spacing-lg);
}

.styles-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--secondary);
    margin-bottom: var(--spacing-sm);
}

.styles-list {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-sm);
}

.style-item {
    padding: var(--spacing-xs) var(--spacing-sm);
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.event-activities {
    margin-bottom: var(--spacing-lg);
}

.activities-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--secondary);
    margin-bottom: var(--spacing-sm);
}

.activities-list {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-sm);
}

.activity-item {
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

/* Arts Application Section */
.arts-application-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
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
    
    .programs-grid {
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
function openArtsWorkshops() {
    document.getElementById('arts-programs').scrollIntoView({ behavior: 'smooth' });
}

function openMusicPrograms() {
    document.getElementById('arts-programs').scrollIntoView({ behavior: 'smooth' });
}

function openDancePrograms() {
    document.getElementById('arts-programs').scrollIntoView({ behavior: 'smooth' });
}

function openTheaterPrograms() {
    document.getElementById('arts-programs').scrollIntoView({ behavior: 'smooth' });
}

function openVisualArts() {
    document.getElementById('arts-programs').scrollIntoView({ behavior: 'smooth' });
}

function openCulturalFestivals() {
    document.getElementById('cultural-events').scrollIntoView({ behavior: 'smooth' });
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
    if (button.textContent.includes('View')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
            alert(`Viewing: "${programTitle}"`);
        });
    }
    
    if (button.textContent.includes('Listen')) {
        button.addEventListener('click', function() {
            alert('Music player would open here. In production, this would show audio samples and performances from our music program.');
        });
    }
    
    if (button.textContent.includes('Watch')) {
        button.addEventListener('click', function() {
            alert('Video gallery would open here. In production, this would show video performances from our dance program.');
        });
    }
    
    if (button.textContent.includes('Read')) {
        button.addEventListener('click', function() {
            alert('Literary works would open here. In production, this would show writings and publications from our creative writing program.');
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
});

document.querySelectorAll('.event-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('View')) {
        button.addEventListener('click', function() {
            const eventTitle = this.closest('.event-card').querySelector('.event-title').textContent;
            alert(`Viewing details for: "${eventTitle}"`);
        });
    }
    
    if (button.textContent.includes('Rules')) {
        button.addEventListener('click', function() {
            alert('Competition rules would open here. In production, this would show detailed rules, guidelines, and judging criteria.');
        });
    }
});

// Arts application form submission
document.getElementById('artsApplicationForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate required fields
    const fullName = document.querySelector('input[placeholder*="name"]').value;
    const dateOfBirth = document.querySelector('input[type="date"]').value;
    const gender = document.querySelector('select[required]').value;
    const phone = document.querySelector('input[placeholder*="phone"]').value;
    const email = document.querySelector('input[placeholder*="email"]').value;
    const area = document.querySelectorAll('select[required]')[1].value;
    const program = document.querySelectorAll('select[required]')[2].value;
    const experience = document.querySelectorAll('select[required]')[3].value;
    const background = document.querySelector('textarea[required]').value;
    const goals = document.querySelectorAll('textarea[required]')[1].value;
    const schedule = document.querySelectorAll('input[name="schedule"]:checked');
    const howHeard = document.querySelectorAll('select[required]')[4].value;
    const commitment = document.querySelector('input[name="commitment"]:checked');
    
    if (!fullName || !dateOfBirth || !gender || !phone || !email || !area || !program || !experience || !background || !goals || schedule.length === 0 || !howHeard || !commitment) {
        alert('Please fill in all required fields and select at least one schedule preference.');
        return;
    }
    
    // Validate age requirement
    const age = calculateAge(dateOfBirth);
    if (age < 10 || age > 35) {
        alert('You must be between 10-35 years old to join our youth arts programs.');
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
    
    alert('Arts program application submitted successfully! We will review your application and contact you within 7-10 business days regarding program placement and start dates.');
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

// Auto-refresh arts statistics
function refreshArtsStats() {
    // In production, this would fetch real-time arts statistics
    console.log('Refreshing youth arts statistics...');
    
    // Simulate artist count updates
    const artistCountElement = document.querySelector('.stat-number');
    if (artistCountElement && artistCountElement.textContent.includes(',')) {
        // Simulate real-time artist growth
        const currentCount = parseInt(artistCountElement.textContent.replace(',', ''));
        const increment = Math.floor(Math.random() * 3) + 1;
        const newCount = currentCount + increment;
        artistCountElement.textContent = newCount.toLocaleString();
    }
}

// Refresh statistics every 60 seconds
setInterval(refreshArtsStats, 60000);
</script>
