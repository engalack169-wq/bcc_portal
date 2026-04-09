<?php
/**
 * Bamenda City Council E-Governance Platform
 * Youth Programs Index Page
 */

// Set page metadata
$page_title = 'Youth Programs | Bamenda City Council';
$page_description = 'Empowering young people through youth council participation, employment opportunities, leadership training, and community engagement programs.';
$page_keywords = 'youth programs, youth council, employment, leadership, Bamenda youth, youth empowerment';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Youth Programs', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero youth-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-youth-programs.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Youth Empowerment</span>
            <h1 class="hero-title">Shape Your Future</h1>
            <p class="hero-subtitle">
                Discover opportunities for leadership, employment, and community engagement designed specifically for Bamenda's youth.
            </p>
            <div class="hero-actions">
                <a href="youth-council.php" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">groups</span>
                    Join Youth Council
                </a>
                <a href="employment.php" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">work</span>
                    Find Opportunities
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Youth Programs Overview -->
<section class="youth-programs-sidebar">
    <div class="container">
        <div class="programs-grid-sidebar">
            <!-- Youth Council -->
            <div class="program-card">
                <div class="card-header">
                    <h3 class="card-title">
                        <span class="material-symbols-outlined">groups</span>
                        Youth Council
                    </h3>
                    <p class="card-description">
                        Join the Bamenda Youth Council to represent young voices and contribute to community development.
                    </p>
                </div>
                <div class="card-content">
                    <div class="feature-list">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">how_to_vote</span>
                            <span class="feature-title">Leadership Roles</span>
                            <p>Take on leadership positions and represent youth interests</p>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">campaign</span>
                            <span class="feature-title">Community Projects</span>
                            <p>Lead and participate in community development initiatives</p>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">forum</span>
                            <span class="feature-title">Policy Making</span>
                            <p>Influence youth policies and council decisions</p>
                        </div>
                    </div>
                    <div class="card-actions">
                        <a href="youth-council.php" class="btn btn-primary">
                            <span class="material-symbols-outlined">groups</span>
                            Join Council
                        </a>
                    </div>
                </div>
            </div>

            <!-- Youth Programs -->
            <div class="program-card">
                <div class="card-header">
                    <h3 class="card-title">
                        <span class="material-symbols-outlined">emoji_events</span>
                        Youth Programs
                    </h3>
                    <p class="card-description">
                        Access comprehensive youth programs including sports, education, employment, and leadership training.
                    </p>
                </div>
                <div class="card-content">
                    <div class="feature-list">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">sports_soccer</span>
                            <span class="feature-title">Sports & Recreation</span>
                            <p>Join sports teams, fitness programs, and recreational activities</p>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">school</span>
                            <span class="feature-title">Youth Education</span>
                            <p>Access educational resources, tutoring, and skill development programs</p>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">work</span>
                            <span class="feature-title">Youth Employment</span>
                            <p>Find job opportunities and career development resources</p>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">volunteer_activism</span>
                            <span class="feature-title">Youth Grants</span>
                            <p>Apply for funding and support for youth initiatives</p>
                        </div>
                    </div>
                    <div class="card-actions">
                        <a href="programs.php" class="btn btn-primary">
                            <span class="material-symbols-outlined">emoji_events</span>
                            Explore Programs
                        </a>
                    </div>
                </div>
            </div>

            <!-- Youth Employment -->
            <div class="program-card">
                <div class="card-header">
                    <h3 class="card-title">
                        <span class="material-symbols-outlined">work</span>
                        Youth Employment
                    </h3>
                    <p class="card-description">
                        Find job opportunities, internships, and career development resources for young people.
                    </p>
                </div>
                <div class="card-content">
                    <div class="feature-list">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">work</span>
                            <span class="feature-title">Job Board</span>
                            <p>Browse local job openings and internship opportunities</p>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">business_center</span>
                            <span class="feature-title">Career Counseling</span>
                            <p>Get guidance on career paths and skill development</p>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">trending_up</span>
                            <span class="feature-title">Skills Training</span>
                            <p>Access vocational training and certification programs</p>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">handshake</span>
                            <span class="feature-title">Internship Programs</span>
                            <p>Find internship opportunities with local businesses</p>
                        </div>
                    </div>
                    <div class="card-actions">
                        <a href="employment.php" class="btn btn-primary">
                            <span class="material-symbols-outlined">work</span>
                            Find Jobs
                        </a>
                    </div>
                </div>
            </div>

            <!-- Youth Grants -->
            <div class="program-card">
                <div class="card-header">
                    <h3 class="card-title">
                        <span class="material-symbols-outlined">volunteer_activism</span>
                        Youth Grants
                    </h3>
                    <p class="card-description">
                        Apply for funding and support for youth initiatives, community projects, and educational programs.
                    </p>
                </div>
                <div class="card-content">
                    <div class="feature-list">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">volunteer_activism</span>
                            <span class="feature-title">Grant Applications</span>
                            <p>Submit applications for youth project funding</p>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">history</span>
                            <span class="feature-title">Application Status</span>
                            <p>Track grant application progress and requirements</p>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">lightbulb</span>
                            <span class="feature-title">Grant Guidelines</span>
                            <p>View eligibility criteria and application requirements</p>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">school</span>
                            <span class="feature-title">Grant Writing Help</span>
                            <p>Get assistance with writing successful grant proposals</p>
                        </div>
                    </div>
                    <div class="card-actions">
                        <a href="grants.php" class="btn btn-primary">
                            <span class="material-symbols-outlined">volunteer_activism</span>
                            Apply for Grants
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        </div>
    </div>
</section>

<!-- Youth Programs Overview -->
<section class="youth-programs">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Youth Programs</h2>
            <p class="section-subtitle">Comprehensive programs for youth development and empowerment</p>
        </div>

        <div class="programs-grid">
            <a href="youth-council.php" class="program-card">
                <div class="program-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <h3 class="program-title">Youth Council</h3>
                <p class="program-description">Participate in decision-making and represent youth voices in local governance.</p>
                <div class="program-stats">
                    <span class="stat">45 Members</span>
                    <span class="stat">Monthly Meetings</span>
                </div>
            </a>

            <a href="employment.php" class="program-card">
                <div class="program-icon">
                    <span class="material-symbols-outlined">work</span>
                </div>
                <h3 class="program-title">Employment Portal</h3>
                <p class="program-description">Access job opportunities, internships, and career development resources.</p>
                <div class="program-stats">
                    <span class="stat">127 Jobs</span>
                    <span class="stat">234 Placements</span>
                </div>
            </a>

            <a href="programs.php" class="program-card">
                <div class="program-icon">
                    <span class="material-symbols-outlined">emoji_events</span>
                </div>
                <h3 class="program-title">Youth Programs</h3>
                <p class="program-description">Skill development, entrepreneurship training, and capacity building programs.</p>
                <div class="program-stats">
                    <span class="stat">15 Programs</span>
                    <span class="stat">892 Participants</span>
                </div>
            </a>

            <a href="grants.php" class="program-card">
                <div class="program-icon">
                    <span class="material-symbols-outlined">savings</span>
                </div>
                <h3 class="program-title">Grant Opportunities</h3>
                <p class="program-description">Funding support for youth-led projects and entrepreneurial initiatives.</p>
                <div class="program-stats">
                    <span class="stat">8 Grants</span>
                    <span class="stat">₣2.5M Available</span>
                </div>
            </a>

            <a href="leadership.php" class="program-card">
                <div class="program-icon">
                    <span class="material-symbols-outlined">psychology</span>
                </div>
                <h3 class="program-title">Leadership Training</h3>
                <p class="program-description">Develop leadership skills through workshops, mentorship, and practical experience.</p>
                <div class="program-stats">
                    <span class="stat">12 Workshops</span>
                    <span class="stat">456 Graduates</span>
                </div>
            </a>

            <a href="entrepreneurship.php" class="program-card">
                <div class="program-icon">
                    <span class="material-symbols-outlined">store</span>
                </div>
                <h3 class="program-title">Entrepreneurship</h3>
                <p class="program-description">Business incubation, mentorship, and support for young entrepreneurs.</p>
                <div class="program-stats">
                    <span class="stat">34 Startups</span>
                    <span class="stat">78% Success Rate</span>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Success Stories -->
<section class="success-stories">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Success Stories</h2>
            <p class="section-subtitle">Inspiring stories from youth program participants</p>
        </div>

        <div class="stories-grid">
            <div class="story-card">
                <div class="story-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                         alt="Young entrepreneur who started a successful business through youth programs">
                </div>
                <div class="story-content">
                    <h3 class="story-title">From Student to Entrepreneur</h3>
                    <p class="story-description">
                        Sarah Nkwen participated in our entrepreneurship program and now runs a successful tech startup employing 12 people.
                    </p>
                    <div class="story-meta">
                        <span class="author">Sarah Nkwen</span>
                        <span class="program">Entrepreneurship Program</span>
                    </div>
                </div>
            </div>

            <div class="story-card">
                <div class="story-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                         alt="Youth council member who led community development initiatives">
                </div>
                <div class="story-content">
                    <h3 class="story-title">Leading Community Change</h3>
                    <p class="story-description">
                        James Mankon served as Youth Council President and initiated 5 community development projects benefiting over 2,000 residents.
                    </p>
                    <div class="story-meta">
                        <span class="author">James Mankon</span>
                        <span class="program">Youth Council</span>
                    </div>
                </div>
            </div>

            <div class="story-card">
                <div class="story-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                         alt="Young professional who gained employment through youth employment portal">
                </div>
                <div class="story-content">
                    <h3 class="story-title">Career Success Through Training</h3>
                    <p class="story-description">
                        Maria Bamendakwe completed our leadership training and now works as a project manager at a leading local company.
                    </p>
                    <div class="story-meta">
                        <span class="author">Maria Bamendakwe</span>
                        <span class="program">Leadership Training</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Upcoming Events -->
<section class="upcoming-events">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Upcoming Youth Events</h2>
            <p class="section-subtitle">Don't miss these opportunities for youth engagement</p>
        </div>

        <div class="events-list">
            <div class="event-item">
                <div class="event-date">
                    <span class="day">15</span>
                    <span class="month">APR</span>
                </div>
                <div class="event-content">
                    <h3 class="event-title">Youth Leadership Workshop</h3>
                    <p class="event-description">Intensive 3-day workshop on leadership skills, public speaking, and community organizing.</p>
                    <div class="event-meta">
                        <span class="location">Council Hall, Bamenda</span>
                        <span class="time">9:00 AM - 5:00 PM</span>
                    </div>
                </div>
                <button class="btn btn-primary btn-sm">Register</button>
            </div>

            <div class="event-item">
                <div class="event-date">
                    <span class="day">22</span>
                    <span class="month">APR</span>
                </div>
                <div class="event-content">
                    <h3 class="event-title">Youth Entrepreneurship Fair</h3>
                    <p class="event-description">Showcase of youth-led businesses and networking opportunities with investors and mentors.</p>
                    <div class="event-meta">
                        <span class="location">Commercial Avenue</span>
                        <span class="time">10:00 AM - 6:00 PM</span>
                    </div>
                </div>
                <button class="btn btn-primary btn-sm">Register</button>
            </div>

            <div class="event-item">
                <div class="event-date">
                    <span class="day">28</span>
                    <span class="month">APR</span>
                </div>
                <div class="event-content">
                    <h3 class="event-title">Youth Council Monthly Meeting</h3>
                    <p class="event-description">Open meeting where youth can voice concerns and propose initiatives for community improvement.</p>
                    <div class="event-meta">
                        <span class="location">City Council Chambers</span>
                        <span class="time">2:00 PM - 5:00 PM</span>
                    </div>
                </div>
                <button class="btn btn-outline btn-sm">Attend</button>
            </div>
        </div>
    </div>
</section>

<!-- Youth Statistics -->
<section class="youth-stats">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Youth Impact</h2>
            <p class="section-subtitle">Measurable results from our youth programs</p>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number">3,456</div>
                <div class="stat-label">Youth Engaged</div>
                <div class="stat-change positive">
                    <span class="material-symbols-outlined">trending_up</span>
                    <span>+34% this year</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-number">234</div>
                <div class="stat-label">Jobs Created</div>
                <div class="stat-change positive">
                    <span class="material-symbols-outlined">trending_up</span>
                    <span>+45 this quarter</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-number">89</div>
                <div class="stat-label">Projects Funded</div>
                <div class="stat-change positive">
                    <span class="material-symbols-outlined">trending_up</span>
                    <span>+12 this month</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-number">96%</div>
                <div class="stat-label">Satisfaction Rate</div>
                <div class="stat-change positive">
                    <span class="material-symbols-outlined">trending_up</span>
                    <span>+5% improvement</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Ready to Make a Difference?</h2>
            <p class="cta-description">
                Join thousands of young Bamenda residents who are already shaping their future and contributing to community development.
            </p>
            <div class="cta-actions">
                <a href="youth-council.php" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">groups</span>
                    Join Youth Council
                </a>
                <a href="employment.php" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">work</span>
                    Explore Opportunities
                </a>
            </div>
        </div>
    </div>
</section>

<?php
// Include footer
require_once __DIR__ . '/../../includes/footer.php';
?>

<style>
/* Youth Programs Page Styles */
.youth-hero {
    position: relative;
    overflow: hidden;
}

.youth-hero .hero-background img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}

/* Youth Programs Overview */
.youth-programs {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.programs-grid-sidebar {
    display: flex;
    gap: var(--spacing-xl);
    align-items: start;
}

.program-card {
    flex: 1;
    min-width: 0;
}

@media (max-width: 1023px) {
    .programs-grid-sidebar {
        flex-direction: column;
    }
    
    .program-card {
        width: 100%;
    }
}

.program-card {
    display: block;
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    text-decoration: none;
    color: var(--on-surface);
    transition: all 0.3s ease;
    border: 1px solid var(--outline-variant);
    position: relative;
    overflow: hidden;
}

.program-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--primary) 0%, var(--primary-container) 100%);
    transform: scaleX(0);
    transition: transform 0.3s ease;
}

.program-card:hover::before {
    transform: scaleX(1);
}

.program-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    border-color: var(--primary);
}

.program-icon {
    width: 4rem;
    height: 4rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: var(--spacing-lg);
    transition: all 0.3s ease;
}

.program-card:hover .program-icon {
    background-color: var(--primary-container);
    transform: scale(1.1);
}

.program-icon .material-symbols-outlined {
    font-size: 2rem;
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
    gap: var(--spacing-lg);
}

.stat {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    font-weight: 500;
}

/* Success Stories */
.success-stories {
    padding: var(--spacing-3xl) 0;
}

.stories-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.story-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    border: 1px solid var(--outline-variant);
}

.story-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
}

.story-image {
    height: 200px;
    overflow: hidden;
}

.story-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.story-card:hover .story-image img {
    transform: scale(1.05);
}

.story-content {
    padding: var(--spacing-lg);
}

.story-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.story-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-md);
}

.story-meta {
    display: flex;
    justify-content: space-between;
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.author {
    font-weight: 600;
}

.program {
    background-color: var(--surface-container);
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
}

/* Upcoming Events */
.upcoming-events {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.events-list {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-lg);
    max-width: 800px;
    margin: 0 auto;
}

.event-item {
    display: grid;
    grid-template-columns: auto 1fr auto;
    gap: var(--spacing-lg);
    align-items: center;
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.2s ease;
}

.event-item:hover {
    background-color: var(--surface-container-low);
    transform: translateX(4px);
}

.event-date {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 4rem;
    height: 4rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    flex-shrink: 0;
}

.day {
    font-size: 1.5rem;
    font-weight: 800;
    line-height: 1;
}

.month {
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.event-content {
    flex: 1;
}

.event-title {
    font-size: 1.125rem;
    font-weight: 600;
    color: var(--on-surface);
    margin-bottom: var(--spacing-sm);
}

.event-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-sm);
}

.event-meta {
    display: flex;
    gap: var(--spacing-lg);
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

/* Youth Statistics */
.youth-stats {
    padding: var(--spacing-3xl) 0;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: var(--spacing-lg);
}

.stat-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    text-align: center;
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.stat-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
    line-height: 1;
}

.stat-label {
    font-size: 1rem;
    color: var(--on-surface-variant);
    font-weight: 500;
    margin-bottom: var(--spacing-md);
}

.stat-change {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: var(--spacing-xs);
    font-size: 0.75rem;
    font-weight: 600;
}

.stat-change.positive {
    color: var(--tertiary);
}

.stat-change .material-symbols-outlined {
    font-size: 1rem;
}

/* Call to Action */
.cta-section {
    padding: var(--spacing-3xl) 0;
    background: linear-gradient(135deg, var(--primary-container) 0%, var(--primary) 100%);
}

.cta-content {
    text-align: center;
    max-width: 600px;
    margin: 0 auto;
}

.cta-title {
    font-size: 2rem;
    font-weight: 700;
    color: var(--on-primary);
    margin-bottom: var(--spacing-md);
}

.cta-description {
    font-size: 1.125rem;
    color: var(--on-primary);
    line-height: 1.6;
    margin-bottom: var(--spacing-xl);
}

.cta-actions {
    display: flex;
    gap: var(--spacing-lg);
    justify-content: center;
    flex-wrap: wrap;
}

/* Responsive Design */
@media (max-width: 768px) {
    .programs-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .stories-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .event-item {
        grid-template-columns: auto 1fr;
        gap: var(--spacing-md);
    }
    
    .event-item .btn {
        grid-column: 2;
        justify-self: start;
        margin-top: var(--spacing-sm);
    }
    
    .stats-grid {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: var(--spacing-md);
    }
    
    .stat-number {
        font-size: 2rem;
    }
    
    .cta-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .cta-actions .btn {
        width: 100%;
        max-width: 300px;
    }
}

@media (max-width: 480px) {
    .program-card {
        padding: var(--spacing-lg);
    }
    
    .program-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .program-icon .material-symbols-outlined {
        font-size: 1.5rem;
    }
    
    .story-content {
        padding: var(--spacing-md);
    }
    
    .event-date {
        width: 3rem;
        height: 3rem;
    }
    
    .day {
        font-size: 1.25rem;
    }
    
    .stat-number {
        font-size: 1.75rem;
    }
    
    .cta-title {
        font-size: 1.5rem;
    }
}
</style>
