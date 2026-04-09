<?php
/**
 * Bamenda City Council E-Governance Platform
 * Youth Sports Page
 */

// Set page metadata
$page_title = 'Youth Sports | Bamenda City Council';
$page_description = 'Access youth sports programs, athletic facilities, sports tournaments, and physical fitness activities for young people in Bamenda.';
$page_keywords = 'youth sports, athletics, sports programs, physical fitness, Bamenda youth sports';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Youth', 'url' => '../index.php'],
    ['title' => 'Sports', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero youth-sports-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-youth-programs.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary badge-lg">Youth Sports</span>
            <h1 class="hero-title">Youth Sports & Athletics</h1>
            <p class="hero-subtitle">
                Comprehensive youth sports programs, athletic facilities, tournaments, and physical fitness activities for healthy, active young people in Bamenda.
            </p>
            <div class="hero-actions">
                <a href="#sports-programs" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">sports_soccer</span>
                    Sports Programs
                </a>
                <a href="#register-sports" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">how_to_reg</span>
                    Register for Sports
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Sports Actions</h2>
            <p class="section-subtitle">Quick access to youth sports programs and activities</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openSportsPrograms()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">sports</span>
                </div>
                <h3 class="action-title">Sports Programs</h3>
                <p class="action-description">Explore our comprehensive youth sports programs</p>
            </div>

            <div class="action-card" onclick="openAthleticFacilities()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">stadium</span>
                </div>
                <h3 class="action-title">Athletic Facilities</h3>
                <p class="action-description">View and book sports facilities and venues</p>
            </div>

            <div class="action-card" onclick="openTournaments()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">emoji_events</span>
                </div>
                <h3 class="action-title">Tournaments</h3>
                <p class="action-description">Participate in youth sports competitions</p>
            </div>

            <div class="action-card" onclick="openCoaching()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">sports_handball</span>
                </div>
                <h3 class="action-title">Coaching & Training</h3>
                <p class="action-description">Access professional coaching and training</p>
            </div>

            <div class="action-card" onclick="openSportsCalendar()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">calendar_month</span>
                </div>
                <h3 class="action-title">Sports Calendar</h3>
                <p class="action-description">View sports events and schedules</p>
            </div>

            <div class="action-card" onclick="openSportsRegistration()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">how_to_reg</span>
                </div>
                <h3 class="action-title">Sports Registration</h3>
                <p class="action-description">Register for sports programs and teams</p>
            </div>
        </div>
    </div>
</section>

<!-- Sports Statistics -->
<section class="sports-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">2,345</div>
                    <div class="stat-label">Youth Athletes</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+234 this year</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">sports_soccer</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">15</div>
                    <div class="stat-label">Sports Teams</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+3 new teams</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">emoji_events</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">23</div>
                    <div class="stat-label">Tournaments Held</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+8 this quarter</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">stadium</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">8</div>
                    <div class="stat-label">Sports Facilities</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+2 new facilities</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sports Programs -->
<section class="sports-programs-section" id="sports-programs">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Youth Sports Programs</h2>
            <p class="section-subtitle">Comprehensive sports programs for different age groups and interests</p>
        </div>

        <div class="programs-grid">
            <!-- Football Program -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">sports_soccer</span>
                    </div>
                    <div class="program-badge popular">Popular</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Football Academy</h3>
                    <p class="program-description">Professional football training for youth with focus on skills development, teamwork, and competitive play.</p>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">450+</span>
                            <span class="stat-label">Participants</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">6</span>
                            <span class="stat-label">Age Groups</span>
                        </div>
                    </div>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Professional Coaching</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>League Participation</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Tournaments</span>
                        </div>
                    </div>
                    <div class="program-schedule">
                        <span class="schedule-item">Training: Mon, Wed, Fri - 4:00 PM</span>
                        <span class="schedule-item">Matches: Saturdays - 10:00 AM</span>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Join Program</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Basketball Program -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">sports_basketball</span>
                    </div>
                    <div class="program-badge active">Active</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Basketball Development</h3>
                    <p class="program-description">Basketball training program focusing on fundamental skills, game strategy, and physical conditioning.</p>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">180+</span>
                            <span class="stat-label">Participants</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">4</span>
                            <span class="stat-label">Age Groups</span>
                        </div>
                    </div>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Skill Development</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Team Training</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Competitions</span>
                        </div>
                    </div>
                    <div class="program-schedule">
                        <span class="schedule-item">Training: Tue, Thu - 4:30 PM</span>
                        <span class="schedule-item">Games: Sundays - 2:00 PM</span>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Join Program</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Athletics Program -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">directions_run</span>
                    </div>
                    <div class="program-badge active">Active</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Track & Field Athletics</h3>
                    <p class="program-description">Comprehensive athletics program covering running, jumping, and throwing events for all skill levels.</p>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">120+</span>
                            <span class="stat-label">Participants</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">8</span>
                            <span class="stat-label">Events</span>
                        </div>
                    </div>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Running Events</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Field Events</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Meets & Competitions</span>
                        </div>
                    </div>
                    <div class="program-schedule">
                        <span class="schedule-item">Training: Mon, Wed, Fri - 5:00 PM</span>
                        <span class="schedule-item">Meets: Monthly</span>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Join Program</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Volleyball Program -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">sports_volleyball</span>
                    </div>
                    <div class="program-badge active">Active</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Volleyball Club</h3>
                    <p class="program-description">Volleyball training program emphasizing teamwork, coordination, and competitive play.</p>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">95+</span>
                            <span class="stat-label">Participants</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">3</span>
                            <span class="stat-label">Age Groups</span>
                        </div>
                    </div>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Technique Training</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Team Play</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Tournaments</span>
                        </div>
                    </div>
                    <div class="program-schedule">
                        <span class="schedule-item">Training: Tue, Thu - 4:00 PM</span>
                        <span class="schedule-item">Matches: Saturdays - 3:00 PM</span>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Join Program</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Swimming Program -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">pool</span>
                    </div>
                    <div class="program-badge new">New</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Swimming Academy</h3>
                    <p class="program-description">Learn-to-swim and competitive swimming programs for all ages and skill levels.</p>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">60+</span>
                            <span class="stat-label">Participants</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">5</span>
                            <span class="stat-label">Skill Levels</span>
                        </div>
                    </div>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Learn to Swim</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Stroke Development</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Competitive Training</span>
                        </div>
                    </div>
                    <div class="program-schedule">
                        <span class="schedule-item">Training: Mon, Wed, Fri - 3:30 PM</span>
                        <span class="schedule-item">Sat: 9:00 AM - 12:00 PM</span>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Join Program</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Tennis Program -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">sports_tennis</span>
                    </div>
                    <div class="program-badge active">Active</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Tennis Club</h3>
                    <p class="program-description">Tennis training program for beginners to advanced players with professional coaching.</p>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">45+</span>
                            <span class="stat-label">Participants</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">4</span>
                            <span class="stat-label">Courts Available</span>
                        </div>
                    </div>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Beginner Lessons</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Advanced Training</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Tournaments</span>
                        </div>
                    </div>
                    <div class="program-schedule">
                        <span class="schedule-item">Training: Daily - 4:00 PM</span>
                        <span class="schedule-item">Weekend: 8:00 AM - 6:00 PM</span>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Join Program</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Athletic Facilities -->
<section class="athletic-facilities-section" id="athletic-facilities">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Athletic Facilities</h2>
            <p class="section-subtitle">Modern sports facilities and venues for youth athletics</p>
        </div>

        <div class="facilities-grid">
            <!-- Main Stadium -->
            <div class="facility-card">
                <div class="facility-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                         alt="Bamenda Main Stadium">
                </div>
                <div class="facility-content">
                    <h3 class="facility-title">Bamenda Main Stadium</h3>
                    <p class="facility-description">Multi-purpose stadium with football field, running track, and seating for 5,000 spectators.</p>
                    <div class="facility-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Football Field</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Running Track</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Changing Rooms</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Lighting</span>
                        </div>
                    </div>
                    <div class="facility-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>City Center</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Open: 6:00 AM - 8:00 PM</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Booking Required</span>
                        </div>
                    </div>
                    <div class="facility-actions">
                        <button class="btn btn-sm btn-primary">Book Facility</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Sports Complex -->
            <div class="facility-card">
                <div class="facility-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                         alt="Bamenda Sports Complex">
                </div>
                <div class="facility-content">
                    <h3 class="facility-title">Youth Sports Complex</h3>
                    <p class="facility-description">Modern sports complex with basketball courts, volleyball courts, and indoor facilities.</p>
                    <div class="facility-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Basketball Courts</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Volleyball Courts</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Indoor Gym</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Equipment Room</span>
                        </div>
                    </div>
                    <div class="facility-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Nkwen</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Open: 7:00 AM - 9:00 PM</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Free for Youth Programs</span>
                        </div>
                    </div>
                    <div class="facility-actions">
                        <button class="btn btn-sm btn-primary">Book Facility</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Swimming Pool -->
            <div class="facility-card">
                <div class="facility-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                         alt="Bamenda Swimming Pool">
                </div>
                <div class="facility-content">
                    <h3 class="facility-title">Olympic Swimming Pool</h3>
                    <p class="facility-description">Olympic-size swimming pool with diving area and modern amenities for swimming programs.</p>
                    <div class="facility-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>50m Pool</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Diving Area</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Changing Rooms</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Lifeguard Service</span>
                        </div>
                    </div>
                    <div class="facility-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Mankon</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Open: 6:00 AM - 7:00 PM</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>₣500 per session</span>
                        </div>
                    </div>
                    <div class="facility-actions">
                        <button class="btn btn-sm btn-primary">Book Facility</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Tennis Courts -->
            <div class="facility-card">
                <div class="facility-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                         alt="Bamenda Tennis Courts">
                </div>
                <div class="facility-content">
                    <h3 class="facility-title">Tennis Courts Complex</h3>
                    <p class="facility-description">Four professional tennis courts with lighting, seating, and practice facilities.</p>
                    <div class="facility-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>4 Clay Courts</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Night Lighting</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Practice Wall</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Equipment Rental</span>
                        </div>
                    </div>
                    <div class="facility-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Bambili</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Open: 6:00 AM - 10:00 PM</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>₣1,000 per hour</span>
                        </div>
                    </div>
                    <div class="facility-actions">
                        <button class="btn btn-sm btn-primary">Book Facility</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sports Registration -->
<section class="sports-registration-section" id="sports-registration">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Sports Program Registration</h2>
            <p class="section-subtitle">Register for youth sports programs and teams</p>
        </div>

        <div class="registration-content">
            <div class="registration-info">
                <h3 class="info-title">Why Join Our Sports Programs?</h3>
                <div class="benefits-grid">
                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <span class="material-symbols-outlined">fitness_center</span>
                        </div>
                        <h4 class="benefit-title">Physical Fitness</h4>
                        <p class="benefit-description">Improve physical health, fitness, and overall well-being through regular sports participation.</p>
                    </div>

                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <span class="material-symbols-outlined">groups</span>
                        </div>
                        <h4 class="benefit-title">Teamwork & Social Skills</h4>
                        <p class="benefit-description">Develop teamwork, communication, and social skills through collaborative sports activities.</p>
                    </div>

                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <span class="material-symbols-outlined">psychology</span>
                        </div>
                        <h4 class="benefit-title">Mental Well-being</h4>
                        <p class="benefit-description">Enhance mental health, stress management, and emotional resilience through sports.</p>
                    </div>

                    <div class="benefit-item">
                        <div class="benefit-icon">
                            <span class="material-symbols-outlined">emoji_events</span>
                        </div>
                        <h4 class="benefit-title">Achievement & Growth</h4>
                        <p class="benefit-description">Build confidence, discipline, and achievement orientation through sports participation.</p>
                    </div>
                </div>
            </div>

            <div class="registration-form">
                <h3 class="form-title">Sports Program Registration Form</h3>
                <form id="sportsRegistrationForm">
                    <div class="form-section">
                        <h4 class="section-title">Participant Information</h4>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Participant's Full Name *</label>
                                <input type="text" class="form-input" placeholder="Enter participant's full name" required>
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
                                <label class="form-label">Age Group *</label>
                                <select class="form-select" required>
                                    <option value="">Select age group</option>
                                    <option value="6-8">6-8 years</option>
                                    <option value="9-11">9-11 years</option>
                                    <option value="12-14">12-14 years</option>
                                    <option value="15-17">15-17 years</option>
                                    <option value="18-21">18-21 years</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">School/Educational Institution</label>
                                <input type="text" class="form-input" placeholder="Enter school name">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Grade/Class</label>
                                <input type="text" class="form-input" placeholder="Enter grade or class">
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Parent/Guardian Information</h4>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Parent/Guardian Name *</label>
                                <input type="text" class="form-input" placeholder="Enter parent/guardian full name" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Relationship to Participant *</label>
                                <select class="form-select" required>
                                    <option value="">Select relationship</option>
                                    <option value="parent">Parent</option>
                                    <option value="guardian">Guardian</option>
                                    <option value="sibling">Sibling</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Phone Number *</label>
                                <input type="tel" class="form-input" placeholder="+237 233 000 000" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-input" placeholder="parent@email.com">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Residential Address *</label>
                            <input type="text" class="form-input" placeholder="Enter full residential address" required>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Sports Program Selection</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Primary Sport Program *</label>
                            <select class="form-select" required>
                                <option value="">Select primary sport</option>
                                <option value="football">Football</option>
                                <option value="basketball">Basketball</option>
                                <option value="athletics">Track & Field Athletics</option>
                                <option value="volleyball">Volleyball</option>
                                <option value="swimming">Swimming</option>
                                <option value="tennis">Tennis</option>
                                <option value="general">General Sports</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Secondary Sport (Optional)</label>
                            <select class="form-select">
                                <option value="">Select secondary sport</option>
                                <option value="none">No secondary sport</option>
                                <option value="football">Football</option>
                                <option value="basketball">Basketball</option>
                                <option value="athletics">Track & Field Athletics</option>
                                <option value="volleyball">Volleyball</option>
                                <option value="swimming">Swimming</option>
                                <option value="tennis">Tennis</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Previous Sports Experience</label>
                            <select class="form-select">
                                <option value="">Select experience level</option>
                                <option value="none">No previous experience</option>
                                <option value="beginner">Beginner (less than 1 year)</option>
                                <option value="intermediate">Intermediate (1-3 years)</option>
                                <option value="advanced">Advanced (3+ years)</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Medical Information *</label>
                            <textarea class="form-textarea" rows="3" placeholder="Any medical conditions, allergies, or physical limitations we should be aware of" required></textarea>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Additional Information</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Emergency Contact *</label>
                            <input type="text" class="form-input" placeholder="Emergency contact name and phone number" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label">How did you hear about our sports programs? *</label>
                            <select class="form-select" required>
                                <option value="">Select option</option>
                                <option value="school">School/Teacher</option>
                                <option value="friend">Friend/Word of mouth</option>
                                <option value="social-media">Social Media</option>
                                <option value="website">City Council Website</option>
                                <option value="event">Sports Event</option>
                                <option value="poster">Poster/Flyer</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Special Requirements or Accommodations</label>
                            <textarea class="form-textarea" rows="3" placeholder="Any special requirements or accommodations needed for participation"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Parent/Guardian Consent *</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="consent" required>
                                    <span class="checkmark"></span>
                                    I, as the parent/guardian, consent to my child's participation in the youth sports program. I understand the inherent risks associated with sports activities and agree to release Bamenda City Council from any liability for injuries or accidents that may occur during participation.
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Medical Emergency Consent *</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="medical-consent" required>
                                    <span class="checkmark"></span>
                                    I authorize the sports program staff to seek emergency medical treatment for my child if necessary, in the event of injury or illness during sports activities.
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="reset" class="btn btn-outline">Reset</button>
                        <button type="submit" class="btn btn-primary">Submit Registration</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Upcoming Tournaments -->
<section class="tournaments-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Upcoming Tournaments & Events</h2>
            <p class="section-subtitle">Youth sports tournaments and competitions</p>
        </div>

        <div class="tournaments-grid">
            <!-- Football Tournament -->
            <div class="tournament-card">
                <div class="tournament-header">
                    <div class="tournament-badge upcoming">Upcoming</div>
                    <div class="tournament-date">March 25-30, 2024</div>
                </div>
                <div class="tournament-content">
                    <h3 class="tournament-title">Bamenda Youth Football Championship</h3>
                    <p class="tournament-description">Annual youth football tournament featuring teams from across Bamenda.</p>
                    <div class="tournament-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Main Stadium</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>16 Teams</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Free Entry</span>
                        </div>
                    </div>
                    <div class="tournament-actions">
                        <button class="btn btn-sm btn-primary">Register Team</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Basketball Tournament -->
            <div class="tournament-card">
                <div class="tournament-header">
                    <div class="tournament-badge upcoming">Upcoming</div>
                    <div class="tournament-date">April 5-7, 2024</div>
                </div>
                <div class="tournament-content">
                    <h3 class="tournament-title">Youth Basketball League Finals</h3>
                    <p class="tournament-description">Championship finals for the youth basketball league season.</p>
                    <div class="tournament-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Sports Complex</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>8 Teams</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Free Entry</span>
                        </div>
                    </div>
                    <div class="tournament-actions">
                        <button class="btn btn-sm btn-primary">Register Team</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Athletics Meet -->
            <div class="tournament-card">
                <div class="tournament-header">
                    <div class="tournament-badge upcoming">Upcoming</div>
                    <div class="tournament-date">April 15, 2024</div>
                </div>
                <div class="tournament-content">
                    <h3 class="tournament-title">Track & Field Meet</h3>
                    <p class="tournament-description">Annual athletics meet with running, jumping, and throwing events.</p>
                    <div class="tournament-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Main Stadium</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">directions_run</span>
                            <span>12 Events</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Free Entry</span>
                        </div>
                    </div>
                    <div class="tournament-actions">
                        <button class="btn btn-sm btn-primary">Register Athlete</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Swimming Competition -->
            <div class="tournament-card">
                <div class="tournament-header">
                    <div class="tournament-badge upcoming">Upcoming</div>
                    <div class="tournament-date">April 20, 2024</div>
                </div>
                <div class="tournament-content">
                    <h3 class="tournament-title">Youth Swimming Gala</h3>
                    <p class="tournament-description">Swimming competition featuring various strokes and distances.</p>
                    <div class="tournament-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Olympic Pool</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">pool</span>
                            <span>8 Events</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>₣500 Entry</span>
                        </div>
                    </div>
                    <div class="tournament-actions">
                        <button class="btn btn-sm btn-primary">Register Swimmer</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
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
            <p class="section-subtitle">Common questions about youth sports programs</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What age groups can participate in youth sports programs?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Our youth sports programs accept participants aged 6-21 years. We have different age groups (6-8, 9-11, 12-14, 15-17, 18-21) with appropriate training and competition levels for each group.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How much do the sports programs cost?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Most youth sports programs are free for Bamenda residents. Some specialized programs may have a small fee for equipment or facilities. Tournaments and competitions are generally free to participate.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What equipment do participants need?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Basic equipment like sports clothing and proper footwear are required. Most specialized equipment (balls, nets, etc.) is provided by the program. Some sports may require personal equipment like tennis rackets or swimming gear.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Are there tryouts for sports teams?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Most developmental programs are open to all participants. Competitive teams may have tryouts for placement on advanced teams. Tryouts are typically held at the beginning of each season.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What safety measures are in place?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>All programs have qualified coaches, first aid kits, and emergency procedures. Facilities are regularly inspected for safety. Participants are required to provide medical information and emergency contacts.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How can parents get involved?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Parents can volunteer as coaches, team managers, or event organizers. We also have a parent advisory committee that meets monthly to provide input on program development.</p>
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
/* Youth Sports Page Styles */
.youth-sports-hero {
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

/* Sports Statistics Section */
.sports-stats-section {
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

/* Sports Programs Section */
.sports-programs-section {
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

.program-badge.popular {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.program-badge.active {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.program-badge.new {
    background-color: var(--primary);
    color: var(--on-primary);
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

.program-schedule {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xs);
    margin-bottom: var(--spacing-lg);
    padding: var(--spacing-sm);
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
}

.schedule-item {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.program-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Athletic Facilities Section */
.athletic-facilities-section {
    padding: var(--spacing-3xl) 0;
}

.facilities-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.facility-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
    overflow: hidden;
}

.facility-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.facility-image {
    height: 200px;
    overflow: hidden;
}

.facility-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.facility-content {
    padding: var(--spacing-lg);
}

.facility-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.facility-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.facility-features {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

.facility-details {
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

.facility-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Sports Registration Section */
.sports-registration-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.registration-content {
    display: grid;
    grid-template-columns: 1fr 2fr;
    gap: var(--spacing-2xl);
}

.registration-info {
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

.registration-form {
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

/* Tournaments Section */
.tournaments-section {
    padding: var(--spacing-3xl) 0;
}

.tournaments-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.tournament-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.tournament-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.tournament-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.tournament-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.tournament-badge.upcoming {
    background-color: var(--primary);
    color: var(--on-primary);
}

.tournament-date {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    font-weight: 500;
}

.tournament-content {
    padding: var(--spacing-lg);
}

.tournament-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.tournament-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.tournament-details {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

.tournament-actions {
    display: flex;
    gap: var(--spacing-sm);
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
    
    .programs-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .facilities-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .registration-content {
        grid-template-columns: 1fr;
        gap: var(--spacing-xl);
    }
    
    .benefits-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .tournaments-grid {
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
    
    .facility-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .registration-form {
        padding: var(--spacing-lg);
    }
    
    .tournament-card {
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
function openSportsPrograms() {
    document.getElementById('sports-programs').scrollIntoView({ behavior: 'smooth' });
}

function openAthleticFacilities() {
    document.getElementById('athletic-facilities').scrollIntoView({ behavior: 'smooth' });
}

function openTournaments() {
    alert('Tournaments section would open here. In production, this would show detailed tournament information and registration.');
}

function openCoaching() {
    alert('Coaching and training section would open here. In production, this would show coaching programs and training schedules.');
}

function openSportsCalendar() {
    alert('Sports calendar would open here. In production, this would show a calendar of sports events and activities.');
}

function openSportsRegistration() {
    document.getElementById('sports-registration').scrollIntoView({ behavior: 'smooth' });
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
    if (button.textContent.includes('Details')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
            alert(`Viewing details for: "${programTitle}"`);
        });
    }
});

// Facility actions
document.querySelectorAll('.facility-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Book')) {
        button.addEventListener('click', function() {
            const facilityTitle = this.closest('.facility-card').querySelector('.facility-title').textContent;
            alert(`Booking: "${facilityTitle}"`);
        });
    }
});

document.querySelectorAll('.facility-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Details')) {
        button.addEventListener('click', function() {
            const facilityTitle = this.closest('.facility-card').querySelector('.facility-title').textContent;
            alert(`Viewing details for: "${facilityTitle}"`);
        });
    }
});

// Sports registration form submission
document.getElementById('sportsRegistrationForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate required fields
    const participantName = document.querySelector('input[placeholder*="name"]').value;
    const dateOfBirth = document.querySelector('input[type="date"]').value;
    const gender = document.querySelector('select[required]').value;
    const ageGroup = document.querySelectorAll('select[required]')[1].value;
    const parentName = document.querySelectorAll('input[placeholder*="name"]')[1].value;
    const phone = document.querySelector('input[placeholder*="phone"]').value;
    const address = document.querySelector('input[placeholder*="address"]').value;
    const primarySport = document.querySelectorAll('select[required]')[2].value;
    const medicalInfo = document.querySelector('textarea[required]').value;
    const emergencyContact = document.querySelector('input[placeholder*="Emergency"]').value;
    
    if (!participantName || !dateOfBirth || !gender || !ageGroup || !parentName || !phone || !address || !primarySport || !medicalInfo || !emergencyContact) {
        alert('Please fill in all required fields.');
        return;
    }
    
    // Validate age requirement
    const age = calculateAge(dateOfBirth);
    if (age < 6 || age > 21) {
        alert('Participant must be between 6-21 years old to join youth sports programs.');
        return;
    }
    
    // Validate consent checkboxes
    const consent = document.querySelector('input[name="consent"]:checked');
    const medicalConsent = document.querySelector('input[name="medical-consent"]:checked');
    if (!consent || !medicalConsent) {
        alert('Please accept both consent agreements to proceed with registration.');
        return;
    }
    
    alert('Sports registration submitted successfully! We will contact you within 3 business days with program details and next steps.');
    // In production, this would submit the registration
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

// Tournament actions
document.querySelectorAll('.tournament-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Register')) {
        button.addEventListener('click', function() {
            const tournamentTitle = this.closest('.tournament-card').querySelector('.tournament-title').textContent;
            alert(`Registering for: "${tournamentTitle}"`);
        });
    }
});

document.querySelectorAll('.tournament-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Details')) {
        button.addEventListener('click', function() {
            const tournamentTitle = this.closest('.tournament-card').querySelector('.tournament-title').textContent;
            alert(`Viewing details for: "${tournamentTitle}"`);
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

// Auto-refresh sports data
function refreshSportsData() {
    // In production, this would fetch real-time sports data
    console.log('Refreshing youth sports data...');
}

// Refresh data every 60 seconds
setInterval(refreshSportsData, 60000);
</script>
