<?php
/**
 * Bamenda City Council E-Governance Platform
 * Home Page
 */

// Bootstrap application
require_once __DIR__ . '/bootstrap.php';

// Set page metadata
$page_title = 'Bamenda City Council | E-Governance Platform';
$page_description = 'Access digital services, civic engagement tools, and youth programs for Bamenda City Council. Your gateway to smart governance.';
$page_keywords = 'Bamenda, City Council, e-governance, digital services, civic engagement, Cameroon, smart city';

// Include header
require_once __DIR__ . '/includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-background">
        <img src="assets/images/heroes/bamenda-cityscape.svg" 
             alt="Bamenda city skyline showing municipal buildings and the characteristic hilly landscape of the Northwest region">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content fade-in">
            <span class="badge badge-secondary">Digital Governance</span>
            <h1 class="hero-title">Building a Smarter Bamenda Together</h1>
            <p class="hero-subtitle">
                Access essential services, participate in civic decisions, and join our youth programs. Your voice matters in shaping the future of our city.
            </p>
            <div class="hero-actions">
                <?php if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])): ?>
                    <!-- Logged in user actions -->
                    <?php 
                    $dashboard_url = 'pages/citizen-services/dashboard.php';
                    if ($_SESSION['user_role'] === 'admin') {
                        $dashboard_url = 'pages/administration/dashboard.php';
                    } elseif ($_SESSION['user_role'] === 'staff') {
                        $dashboard_url = 'pages/administration/staff-portal.php';
                    }
                    ?>
                    <a href="<?php echo $dashboard_url; ?>" class="btn btn-lg btn-primary">
                        <span class="material-symbols-outlined">dashboard</span>
                        Go to Dashboard
                    </a>
                    <a href="pages/citizen-services/services.php" class="btn btn-lg btn-outline">
                        <span class="material-symbols-outlined">explore</span>
                        Explore Services
                    </a>
                <?php else: ?>
                    <!-- Logged out user actions -->
                    <a href="pages/auth/register.php" class="btn btn-lg btn-primary">
                        <span class="material-symbols-outlined">person_add</span>
                        Get Started
                    </a>
                    <a href="pages/auth/login.php" class="btn btn-lg btn-outline">
                        <span class="material-symbols-outlined">login</span>
                        Sign In
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Quick Stats -->
<section class="stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <div class="stat-content">
                    <h3 class="stat-number">50,000+</h3>
                    <p class="stat-label">Active Citizens</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <div class="stat-content">
                    <h3 class="stat-number">200+</h3>
                    <p class="stat-label">Digital Services</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <div class="stat-content">
                    <h3 class="stat-number">1,200+</h3>
                    <p class="stat-label">Youth Engaged</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">trending_up</span>
                </div>
                <div class="stat-content">
                    <h3 class="stat-number">98%</h3>
                    <p class="stat-label">Satisfaction Rate</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="services-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Our Services</h2>
            <p class="section-subtitle">Comprehensive digital solutions for all citizens</p>
        </div>
        
        <div class="services-grid">
            <!-- Citizen Services -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">gavel</span>
                </div>
                <h3 class="service-title">Citizen Services</h3>
                <p class="service-description">Access permits, licenses, property registry, tax portal, and online payments.</p>
                <a href="pages/citizen-services/services.php" class="service-link">
                    <span>Explore Services</span>
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>

            <!-- Civic Engagement -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">diversity_3</span>
                </div>
                <h3 class="service-title">Civic Engagement</h3>
                <p class="service-description">Participate in consultations, volunteer programs, and town hall meetings.</p>
                <a href="pages/civic-engagement/consultations.php" class="service-link">
                    <span>Get Involved</span>
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>

            <!-- Youth Programs -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <h3 class="service-title">Youth Programs</h3>
                <p class="service-description">Join the youth council, access employment opportunities, and leadership programs.</p>
                <a href="pages/youth/youth-council.php" class="service-link">
                    <span>Join Youth Council</span>
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>

            <!-- Emergency Services -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">emergency_home</span>
                </div>
                <h3 class="service-title">Emergency Services</h3>
                <p class="service-description">Receive alerts, access crisis management resources, and recovery support.</p>
                <a href="pages/emergency/alerts.php" class="service-link">
                    <span>Emergency Info</span>
                    <span class="material-symbols-outlined">arrow_forward</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Featured Initiatives -->
<section class="initiatives-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Featured Initiatives</h2>
            <p class="section-subtitle">Current projects and programs shaping Bamenda's future</p>
        </div>

        <div class="initiatives-grid">
            <!-- Youth Council Participation -->
            <div class="initiative-card featured">
                <div class="initiative-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDN7r6a-NhfvCU8l6JoJxwEhm_PdMp3BVTTmG_hNNpr_uCQNIqiOsyrtFFbf-xQuYM1IrINeyhAkN-FB7gzYiL1O1k1PDoUlA-2e8ugnYaI6_4z1TyXBu3bJ56JWKaKIOcIK-Cf35xA3PZKgFFNr7mdMUB84QPXOxgcxz29axhMIX4kitCStc19raGPg-Y9txr5NDSASLuWXXz_adFzMt6Bfni7XIe_3it-h_Wk5SqM2PpkvrcD-oeBY8kgxC8BkUbewyYeMK6GqlvS" 
                         alt="a professional but vibrant conference room filled with focused young people engaged in a serious discussion with city council members">
                    <div class="initiative-badge">Featured</div>
                </div>
                <div class="initiative-content">
                    <span class="badge badge-primary">Youth Empowerment</span>
                    <h3 class="initiative-title">Youth Council Participation Program</h3>
                    <p class="initiative-description">
                        Join 12 young leaders representing various wards in Bamenda. Shape policies, propose initiatives, and be the voice of youth in our city's development.
                    </p>
                    <div class="initiative-stats">
                        <div class="stat">
                            <span class="stat-number">12</span>
                            <span class="stat-label">Positions Available</span>
                        </div>
                        <div class="stat">
                            <span class="stat-number">18-30</span>
                            <span class="stat-label">Age Range</span>
                        </div>
                    </div>
                    <a href="pages/youth/youth-council.php" class="btn btn-primary">
                        Apply Now
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </div>
            </div>

            <!-- Digital Infrastructure -->
            <div class="initiative-card">
                <div class="initiative-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuAfAqz3Xeot15e-mmQE6X3cNqBngkQOYtmqvP0kDtKWfg7jkZqmXswrIbJWPwq1ke00Jg269x0VqYGYTbd15yCJjhv0tciItxWBkcHRKulFnDDoBJLoOJRacIwuK2bMFqh3bDbJXiHiZkLCdmHTZuEF4E9Qqcgdt9LS0u8mS3wEUq13q_m-vP8BqJluUVYmnHC2w5CUd_sN-Nx-dEcJW4D6FcSKj9rZ5gcb7b6tlhkQSWZNGpl3p1b5WbMcNVIwm7_DgVKXPLPiwvBP" 
                         alt="a young man working on solar panels on a roof in a sunny suburban environment representing a green energy project">
                </div>
                <div class="initiative-content">
                    <span class="badge badge-tertiary">Sustainability</span>
                    <h3 class="initiative-title">Solar Path Bamenda</h3>
                    <p class="initiative-description">
                        Installing 20 self-sustaining solar street lights in underprivileged wards to improve safety and reduce carbon footprint.
                    </p>
                    <div class="initiative-progress">
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 65%;"></div>
                        </div>
                        <span class="progress-text">65% Complete</span>
                    </div>
                    <a href="pages/projects/solar-path.php" class="btn btn-outline">
                        Learn More
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </div>
            </div>

            <!-- Digital Literacy -->
            <div class="initiative-card">
                <div class="initiative-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCnVPAAy2PEQKikG6dLqXRfQvKxOy21wF92O3hQ3VvECMkWQbTiR5tBceR1fonZRLX8p8S7J5Lv5o3gfNRxdpP-k-2MTwJ_4t7UsDnI_uGI4D-I7ih1oHpNDdjXdioBkp5GvLX0aJQg4FxFajhfIqMH_JTpr_szQsVEAihCjoDdPaExXNuI_Jkpu3Rp63xz_zgjLpWSbS_8w7fLerpZo6NzpWGrRL9IJ7sSwdLkQ7VfapLv-NNqClNy12F6xcyWGAD7Da3jTH-y3rfY" 
                         alt="a group of teenagers coding together in a bright modern tech lab with colorful graphics in the background">
                </div>
                <div class="initiative-content">
                    <span class="badge badge-secondary">Digital Skills</span>
                    <h3 class="initiative-title">Code Bamenda II</h3>
                    <p class="initiative-description">
                        Free coding bootcamp that trained 200 high school students in web development, mobile apps, and digital skills.
                    </p>
                    <div class="initiative-stats">
                        <div class="stat">
                            <span class="stat-number">200</span>
                            <span class="stat-label">Students Trained</span>
                        </div>
                        <div class="stat">
                            <span class="stat-number">6</span>
                            <span class="stat-label">Months Program</span>
                        </div>
                    </div>
                    <a href="pages/youth/programs.php" class="btn btn-outline">
                        View Program
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Upcoming Events -->
<section class="events-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Upcoming Events</h2>
            <p class="section-subtitle">Join us for town halls, workshops, and community meetings</p>
        </div>

        <div class="events-grid">
            <div class="event-card">
                <div class="event-date">
                    <span class="event-month">Oct</span>
                    <span class="event-day">12</span>
                </div>
                <div class="event-content">
                    <h3 class="event-title">Youth Budgeting Session</h3>
                    <p class="event-description">Help decide how youth-focused funds should be allocated in our community.</p>
                    <div class="event-meta">
                        <span class="event-location">
                            <span class="material-symbols-outlined">location_on</span>
                            Main Hall, Bamenda II Council
                        </span>
                        <span class="event-time">
                            <span class="material-symbols-outlined">schedule</span>
                            2:00 PM - 5:00 PM
                        </span>
                    </div>
                    <button class="btn btn-primary btn-sm">Register</button>
                </div>
            </div>

            <div class="event-card">
                <div class="event-date">
                    <span class="event-month">Oct</span>
                    <span class="event-day">24</span>
                </div>
                <div class="event-content">
                    <h3 class="event-title">Digital Economy Roundtable</h3>
                    <p class="event-description">Virtual meeting discussing opportunities in the digital economy for youth.</p>
                    <div class="event-meta">
                        <span class="event-location">
                            <span class="material-symbols-outlined">videocam</span>
                            Virtual Meeting (Zoom)
                        </span>
                        <span class="event-time">
                            <span class="material-symbols-outlined">schedule</span>
                            10:00 AM - 12:00 PM
                        </span>
                    </div>
                    <button class="btn btn-primary btn-sm">Join Online</button>
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
            <p class="cta-subtitle">Join thousands of citizens actively shaping Bamenda's future through digital governance and civic participation.</p>
            <div class="cta-actions">
                <a href="pages/auth/register.php" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">person_add</span>
                    Create Account
                </a>
                <a href="pages/help/contact.php" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">help</span>
                    Get Help
                </a>
            </div>
        </div>
    </div>
</section>

<?php
// Include footer
require_once __DIR__ . '/includes/footer.php';
?>

<style>
/* Hero Section Specific Styles */
.hero {
    min-height: 700px;
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-container) 100%);
}

.hero-title {
    font-size: 3.5rem;
    line-height: 1.1;
    margin-bottom: var(--spacing-lg);
}

.hero-subtitle {
    font-size: 1.25rem;
    margin-bottom: var(--spacing-2xl);
    max-width: 600px;
}

/* Stats Section */
.stats-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: var(--spacing-lg);
}

.stat-card {
    display: flex;
    align-items: center;
    gap: var(--spacing-md);
    padding: var(--spacing-lg);
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease;
}

.stat-card:hover {
    transform: translateY(-2px);
}

.stat-icon {
    width: 3rem;
    height: 3rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.stat-number {
    font-size: 2rem;
    font-weight: 800;
    color: var(--primary);
    line-height: 1;
}

.stat-label {
    color: var(--on-surface-variant);
    font-size: 0.875rem;
}

/* Services Section */
.services-section {
    padding: var(--spacing-3xl) 0;
}

.section-header {
    text-align: center;
    margin-bottom: var(--spacing-3xl);
}

.section-title {
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.section-subtitle {
    font-size: 1.125rem;
    color: var(--on-surface-variant);
    max-width: 600px;
    margin: 0 auto;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: var(--spacing-xl);
}

.service-card {
    padding: var(--spacing-xl);
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    text-align: center;
    transition: all 0.3s ease;
    border: 1px solid var(--outline-variant);
}

.service-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    border-color: var(--primary);
}

.service-icon {
    width: 4rem;
    height: 4rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-lg);
}

.service-icon .material-symbols-outlined {
    font-size: 2rem;
}

.service-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.service-description {
    color: var(--on-surface-variant);
    margin-bottom: var(--spacing-lg);
    line-height: 1.6;
}

.service-link {
    display: inline-flex;
    align-items: center;
    gap: var(--spacing-xs);
    color: var(--primary);
    font-weight: 600;
    text-decoration: none;
    transition: gap 0.2s ease;
}

.service-link:hover {
    gap: var(--spacing-sm);
}

/* Initiatives Section */
.initiatives-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.initiatives-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.initiative-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.initiative-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.initiative-card.featured {
    grid-column: span 2;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 0;
}

.initiative-image {
    position: relative;
    overflow: hidden;
}

.initiative-card:not(.featured) .initiative-image {
    height: 200px;
}

.initiative-card.featured .initiative-image {
    height: 100%;
}

.initiative-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.initiative-card:hover .initiative-image img {
    transform: scale(1.05);
}

.initiative-badge {
    position: absolute;
    top: var(--spacing-md);
    left: var(--spacing-md);
    background-color: var(--secondary-container);
    color: var(--on-secondary-container);
    padding: var(--spacing-xs) var(--spacing-md);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.initiative-content {
    padding: var(--spacing-lg);
}

.initiative-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.initiative-description {
    color: var(--on-surface-variant);
    margin-bottom: var(--spacing-lg);
    line-height: 1.6;
}

.initiative-stats {
    display: flex;
    gap: var(--spacing-lg);
    margin-bottom: var(--spacing-lg);
}

.initiative-stats .stat {
    text-align: center;
}

.initiative-stats .stat-number {
    display: block;
    font-size: 1.5rem;
    font-weight: 800;
    color: var(--primary);
}

.initiative-stats .stat-label {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.initiative-progress {
    margin-bottom: var(--spacing-lg);
}

.progress-bar {
    height: 8px;
    background-color: var(--surface-container);
    border-radius: var(--radius-full);
    overflow: hidden;
    margin-bottom: var(--spacing-xs);
}

.progress-fill {
    height: 100%;
    background-color: var(--primary);
    transition: width 0.3s ease;
}

.progress-text {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

/* Events Section */
.events-section {
    padding: var(--spacing-3xl) 0;
}

.events-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    gap: var(--spacing-xl);
}

.event-card {
    display: flex;
    gap: var(--spacing-lg);
    padding: var(--spacing-lg);
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border-left: 4px solid var(--secondary-container);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    transition: all 0.2s ease;
}

.event-card:hover {
    transform: translateX(4px);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
}

.event-date {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-width: 60px;
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
    padding: var(--spacing-sm);
}

.event-month {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    color: var(--secondary);
    letter-spacing: 0.05em;
}

.event-day {
    font-size: 1.5rem;
    font-weight: 800;
    color: var(--primary);
    line-height: 1;
}

.event-content {
    flex: 1;
}

.event-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.event-description {
    color: var(--on-surface-variant);
    margin-bottom: var(--spacing-md);
    line-height: 1.5;
}

.event-meta {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xs);
    margin-bottom: var(--spacing-md);
}

.event-location,
.event-time {
    display: flex;
    align-items: center;
    gap: var(--spacing-xs);
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

/* CTA Section */
.cta-section {
    padding: var(--spacing-3xl) 0;
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-container) 100%);
    color: var(--on-primary);
    text-align: center;
}

.cta-title {
    font-size: 2.5rem;
    font-weight: 800;
    margin-bottom: var(--spacing-md);
}

.cta-subtitle {
    font-size: 1.25rem;
    margin-bottom: var(--spacing-xl);
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
    opacity: 0.9;
}

.cta-actions {
    display: flex;
    gap: var(--spacing-lg);
    justify-content: center;
    flex-wrap: wrap;
}

.cta-section .btn-outline {
    border-color: var(--on-primary);
    color: var(--on-primary);
}

.cta-section .btn-outline:hover {
    background-color: var(--on-primary);
    color: var(--primary);
}

/* Responsive Design */
@media (max-width: 768px) {
    .hero-title {
        font-size: 2.5rem;
    }
    
    .hero-subtitle {
        font-size: 1.125rem;
    }
    
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .services-grid,
    .initiatives-grid {
        grid-template-columns: 1fr;
    }
    
    .initiative-card.featured {
        grid-column: span 1;
        grid-template-columns: 1fr;
    }
    
    .initiative-card.featured .initiative-image {
        height: 200px;
    }
    
    .events-grid {
        grid-template-columns: 1fr;
    }
    
    .event-card {
        flex-direction: column;
        text-align: center;
    }
    
    .event-meta {
        align-items: center;
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
    .section-title {
        font-size: 2rem;
    }
    
    .hero-title {
        font-size: 2rem;
    }
    
    .stats-grid {
        grid-template-columns: 1fr;
    }
    
    .initiative-stats {
        flex-direction: column;
        gap: var(--spacing-md);
    }
}
</style>
