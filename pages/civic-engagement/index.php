<?php
/**
 * Bamenda City Council E-Governance Platform
 * Civic Engagement Index Page
 */

// Set page metadata
$page_title = 'Civic Engagement | Bamenda City Council';
$page_description = 'Participate in civic life through public consultations, volunteering, town hall meetings, and community engagement programs.';
$page_keywords = 'civic engagement, public participation, volunteering, town hall, community, Bamenda';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Civic Engagement', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero civic-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-civic-engagement.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Civic Participation</span>
            <h1 class="hero-title">Shape Your Community</h1>
            <p class="hero-subtitle">
                Engage with your local government, participate in decision-making, and contribute to the development of Bamenda.
            </p>
            <div class="hero-actions">
                <a href="consultations.php" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">how_to_vote</span>
                    Join Consultations
                </a>
                <a href="volunteer.php" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">volunteer_activism</span>
                    Volunteer
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Civic Programs Overview -->
<section class="programs-overview">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Civic Engagement Programs</h2>
            <p class="section-subtitle">Multiple ways to participate in community development</p>
        </div>

        <div class="programs-grid">
            <a href="consultations.php" class="program-card">
                <div class="program-icon">
                    <span class="material-symbols-outlined">how_to_vote</span>
                </div>
                <h3 class="program-title">Public Consultations</h3>
                <p class="program-description">Share your opinions on policies and projects that affect your community.</p>
                <div class="program-stats">
                    <span class="stat">12 Active</span>
                    <span class="stat">234 Participants</span>
                </div>
            </a>

            <a href="volunteer.php" class="program-card">
                <div class="program-icon">
                    <span class="material-symbols-outlined">volunteer_activism</span>
                </div>
                <h3 class="program-title">Volunteer Programs</h3>
                <p class="program-description">Contribute your time and skills to community improvement initiatives.</p>
                <div class="program-stats">
                    <span class="stat">8 Programs</span>
                    <span class="stat">156 Volunteers</span>
                </div>
            </a>

            <a href="town-hall.php" class="program-card">
                <div class="program-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <h3 class="program-title">Town Hall Meetings</h3>
                <p class="program-description">Attend regular meetings to discuss community issues and solutions.</p>
                <div class="program-stats">
                    <span class="stat">Monthly</span>
                    <span class="stat">89 Attendees</span>
                </div>
            </a>

            <a href="transparency.php" class="program-card">
                <div class="program-icon">
                    <span class="material-symbols-outlined">visibility</span>
                </div>
                <h3 class="program-title">Transparency Hub</h3>
                <p class="program-description">Access government information, reports, and decision-making processes.</p>
                <div class="program-stats">
                    <span class="stat">245 Documents</span>
                    <span class="stat">Updated Daily</span>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Recent Activities -->
<section class="recent-activities">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Recent Civic Activities</h2>
            <p class="section-subtitle">Latest community engagement initiatives</p>
        </div>

        <div class="activities-timeline">
            <div class="timeline-item">
                <div class="timeline-marker">
                    <span class="material-symbols-outlined">event</span>
                </div>
                <div class="timeline-content">
                    <h3 class="timeline-title">Town Hall Meeting - Infrastructure Development</h3>
                    <p class="timeline-description">Discussion on upcoming road construction projects and traffic management solutions.</p>
                    <div class="timeline-meta">
                        <span class="date">2 days ago</span>
                        <span class="participants">45 attendees</span>
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-marker">
                    <span class="material-symbols-outlined">poll</span>
                </div>
                <div class="timeline-content">
                    <h3 class="timeline-title">Public Consultation - Waste Management Policy</h3>
                    <p class="timeline-description">Community input on proposed waste collection and recycling initiatives.</p>
                    <div class="timeline-meta">
                        <span class="date">5 days ago</span>
                        <span class="participants">128 responses</span>
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-marker">
                    <span class="material-symbols-outlined">volunteer_activism</span>
                </div>
                <div class="timeline-content">
                    <h3 class="timeline-title">Community Clean-up Drive</h3>
                    <p class="timeline-description">Volunteer initiative to clean public spaces and promote environmental awareness.</p>
                    <div class="timeline-meta">
                        <span class="date">1 week ago</span>
                        <span class="participants">67 volunteers</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Impact Statistics -->
<section class="impact-stats">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Community Impact</h2>
            <p class="section-subtitle">Measurable results from civic engagement</p>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number">1,247</div>
                <div class="stat-label">Active Participants</div>
                <div class="stat-change positive">
                    <span class="material-symbols-outlined">trending_up</span>
                    <span>+23% this month</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-number">89</div>
                <div class="stat-label">Projects Completed</div>
                <div class="stat-change positive">
                    <span class="material-symbols-outlined">trending_up</span>
                    <span>+12 this quarter</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-number">15,678</div>
                <div class="stat-label">Volunteer Hours</div>
                <div class="stat-change positive">
                    <span class="material-symbols-outlined">trending_up</span>
                    <span>+45% this year</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-number">94%</div>
                <div class="stat-label">Satisfaction Rate</div>
                <div class="stat-change positive">
                    <span class="material-symbols-outlined">trending_up</span>
                    <span>+3% improvement</span>
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
                Join thousands of citizens actively shaping the future of Bamenda. Your voice matters in building a better community.
            </p>
            <div class="cta-actions">
                <a href="consultations.php" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">how_to_vote</span>
                    Start Participating
                </a>
                <a href="volunteer.php" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">volunteer_activism</span>
                    Become a Volunteer
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
/* Civic Engagement Page Styles */
.civic-hero {
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-container) 100%);
}

/* Programs Overview */
.programs-overview {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.programs-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
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

/* Recent Activities */
.recent-activities {
    padding: var(--spacing-3xl) 0;
}

.activities-timeline {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xl);
    max-width: 800px;
    margin: 0 auto;
}

.timeline-item {
    display: flex;
    gap: var(--spacing-lg);
    position: relative;
}

.timeline-marker {
    width: 3rem;
    height: 3rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    position: relative;
    z-index: 2;
}

.timeline-content {
    flex: 1;
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.2s ease;
}

.timeline-content:hover {
    background-color: var(--surface-container-low);
    transform: translateX(4px);
}

.timeline-title {
    font-size: 1.125rem;
    font-weight: 600;
    color: var(--on-surface);
    margin-bottom: var(--spacing-sm);
}

.timeline-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-md);
}

.timeline-meta {
    display: flex;
    gap: var(--spacing-lg);
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

/* Impact Statistics */
.impact-stats {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
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
    
    .timeline-item {
        flex-direction: column;
        text-align: center;
        gap: var(--spacing-md);
    }
    
    .timeline-marker {
        align-self: center;
    }
    
    .timeline-content {
        text-align: center;
    }
    
    .timeline-meta {
        justify-content: center;
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
    
    .timeline-content {
        padding: var(--spacing-md);
    }
    
    .stat-number {
        font-size: 1.75rem;
    }
    
    .cta-title {
        font-size: 1.5rem;
    }
}
</style>
