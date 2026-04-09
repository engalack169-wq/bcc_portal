<?php
/**
 * Bamenda City Council E-Governance Platform
 * Youth Entrepreneurship Page
 */

// Set page metadata
$page_title = 'Youth Entrepreneurship | Bamenda City Council';
$page_description = 'Access youth entrepreneurship programs, startup support, business mentorship, and funding opportunities for young entrepreneurs in Bamenda.';
$page_keywords = 'youth entrepreneurship, startup support, business mentorship, youth business, Bamenda entrepreneurship';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Youth', 'url' => '../index.php'],
    ['title' => 'Entrepreneurship', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero youth-entrepreneurship-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-youth-programs.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Youth Entrepreneurship</span>
            <h1 class="hero-title">Startup Hub & Business Support</h1>
            <p class="hero-subtitle">
                Empowering young entrepreneurs with comprehensive startup support, business mentorship, funding opportunities, and incubation services.
            </p>
            <div class="hero-actions">
                <a href="#entrepreneurship-programs" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">storefront</span>
                    Entrepreneurship Programs
                </a>
                <a href="#apply-support" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">rocket_launch</span>
                    Apply for Support
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Entrepreneurship Actions</h2>
            <p class="section-subtitle">Quick access to youth entrepreneurship programs and services</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openEntrepreneurshipPrograms()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">assignment</span>
                </div>
                <h3 class="action-title">Entrepreneurship Programs</h3>
                <p class="action-description">Explore our comprehensive entrepreneurship development programs</p>
            </div>

            <div class="action-card" onclick="openStartupIncubator()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">business</span>
                </div>
                <h3 class="action-title">Startup Incubator</h3>
                <p class="action-description">Join our startup incubator for early-stage business support</p>
            </div>

            <div class="action-card" onclick="openBusinessMentorship()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">support_agent</span>
                </div>
                <h3 class="action-title">Business Mentorship</h3>
                <p class="action-description">Connect with experienced business mentors and advisors</p>
            </div>

            <div class="action-card" onclick="openFundingOpportunities()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">account_balance</span>
                </div>
                <h3 class="action-title">Funding Opportunities</h3>
                <p class="action-description">Access grants, loans, and investment opportunities</p>
            </div>

            <div class="action-card" onclick="openBusinessTraining()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <h3 class="action-title">Business Training</h3>
                <p class="action-description">Develop essential business skills and knowledge</p>
            </div>

            <div class="action-card" onclick="openSuccessStories()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">emoji_events</span>
                </div>
                <h3 class="action-title">Success Stories</h3>
                <p class="action-description">Get inspired by successful youth entrepreneurs</p>
            </div>
        </div>
    </div>
</section>

<!-- Entrepreneurship Statistics -->
<section class="entrepreneurship-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">storefront</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">156</div>
                    <div class="stat-label">Active Startups</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+23 this quarter</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">account_balance</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">₣12.5M</div>
                    <div class="stat-label">Funding Disbursed</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+₣2.3M this year</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">support_agent</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">89</div>
                    <div class="stat-label">Active Mentors</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+12 new mentors</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">work</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">1,234</div>
                    <div class="stat-label">Jobs Created</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+234 this year</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Entrepreneurship Programs -->
<section class="entrepreneurship-programs-section" id="entrepreneurship-programs">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Entrepreneurship Development Programs</h2>
            <p class="section-subtitle">Comprehensive programs designed to support youth entrepreneurs at every stage</p>
        </div>

        <div class="programs-grid">
            <!-- Business Idea Generation -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">lightbulb</span>
                    </div>
                    <div class="program-badge foundational">Foundational</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Business Idea Generation</h3>
                    <p class="program-description">Learn how to identify business opportunities, develop viable business ideas, and validate market potential.</p>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">450+</span>
                            <span class="stat-label">Participants</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">4 weeks</span>
                            <span class="stat-label">Duration</span>
                        </div>
                    </div>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Idea Generation Workshops</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Market Research Training</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Feasibility Analysis</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- Business Planning -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">description</span>
                    </div>
                    <div class="program-badge core">Core Program</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Business Planning & Development</h3>
                    <p class="program-description">Create comprehensive business plans, develop financial models, and prepare for business launch.</p>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">320+</span>
                            <span class="stat-label">Participants</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">8 weeks</span>
                            <span class="stat-label">Duration</span>
                        </div>
                    </div>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Business Plan Writing</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Financial Modeling</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Marketing Strategy</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- Digital Entrepreneurship -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">computer</span>
                    </div>
                    <div class="program-badge specialized">Specialized</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Digital Entrepreneurship</h3>
                    <p class="program-description">Build digital businesses, e-commerce platforms, and tech startups with modern digital tools and strategies.</p>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">180+</span>
                            <span class="stat-label">Participants</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">6 weeks</span>
                            <span class="stat-label">Duration</span>
                        </div>
                    </div>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>E-commerce Development</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Digital Marketing</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Online Business Models</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- Social Entrepreneurship -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">volunteer_activism</span>
                    </div>
                    <div class="program-badge specialized">Specialized</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Social Entrepreneurship</h3>
                    <p class="program-description">Develop businesses that address social challenges while creating sustainable impact and value.</p>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">95+</span>
                            <span class="stat-label">Participants</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">8 weeks</span>
                            <span class="stat-label">Duration</span>
                        </div>
                    </div>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Social Impact Models</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Sustainability Planning</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Community Engagement</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- Agribusiness -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">agriculture</span>
                    </div>
                    <div class="program-badge specialized">Specialized</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Agribusiness Development</h3>
                    <p class="program-description">Build sustainable agricultural businesses with modern farming techniques and market access strategies.</p>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">120+</span>
                            <span class="stat-label">Participants</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">10 weeks</span>
                            <span class="stat-label">Duration</span>
                        </div>
                    </div>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Modern Farming Techniques</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Value Chain Development</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Market Access Strategies</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- Creative Industries -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">palette</span>
                    </div>
                    <div class="program-badge specialized">Specialized</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Creative Industries</h3>
                    <p class="program-description">Transform creative talents into sustainable businesses in arts, design, media, and entertainment.</p>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">85+</span>
                            <span class="stat-label">Participants</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">6 weeks</span>
                            <span class="stat-label">Duration</span>
                        </div>
                    </div>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Creative Business Models</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Intellectual Property</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Monetization Strategies</span>
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

<!-- Startup Incubator -->
<section class="startup-incubator-section" id="startup-incubator">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Youth Startup Incubator</h2>
            <p class="section-subtitle">Comprehensive incubation support for early-stage startups and innovative ideas</p>
        </div>

        <div class="incubator-content">
            <div class="incubator-overview">
                <h3 class="overview-title">What We Offer</h3>
                <p class="overview-description">
                    Our Youth Startup Incubator provides comprehensive support for young entrepreneurs with innovative ideas and early-stage businesses. 
                    We offer workspace, mentorship, funding connections, and technical support to help you build and scale your startup.
                </p>
                
                <div class="incubator-features">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <span class="material-symbols-outlined">location_on</span>
                        </div>
                        <h4 class="feature-title">Co-working Space</h4>
                        <p class="feature-description">Modern co-working spaces with high-speed internet, meeting rooms, and essential facilities.</p>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon">
                            <span class="material-symbols-outlined">support_agent</span>
                        </div>
                        <h4 class="feature-title">Expert Mentorship</h4>
                        <p class="feature-description">One-on-one mentorship from experienced entrepreneurs and industry experts.</p>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon">
                            <span class="material-symbols-outlined">account_balance</span>
                        </div>
                        <h4 class="feature-title">Funding Support</h4>
                        <p class="feature-description">Connections to investors, grant opportunities, and seed funding programs.</p>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon">
                            <span class="material-symbols-outlined">school</span>
                        </div>
                        <h4 class="feature-title">Training & Workshops</h4>
                        <p class="feature-description">Regular workshops on business development, technology, and industry-specific skills.</p>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon">
                            <span class="material-symbols-outlined">handshake</span>
                        </div>
                        <h4 class="feature-title">Network Building</h4>
                        <p class="feature-description">Access to our extensive network of entrepreneurs, investors, and industry partners.</p>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon">
                            <span class="material-symbols-outlined">engineering</span>
                        </div>
                        <h4 class="feature-title">Technical Support</h4>
                        <p class="feature-description">Technical assistance for product development, prototyping, and technology implementation.</p>
                    </div>
                </div>
            </div>

            <div class="incubator-programs">
                <h3 class="programs-title">Incubation Programs</h3>
                
                <div class="programs-timeline">
                    <div class="timeline-item">
                        <div class="timeline-marker">
                            <span class="material-symbols-outlined">filter_1</span>
                        </div>
                        <div class="timeline-content">
                            <h4 class="timeline-title">Idea Stage</h4>
                            <p class="timeline-description">For entrepreneurs with innovative ideas who need help with concept development and validation.</p>
                            <div class="timeline-details">
                                <span class="detail-item">Duration: 3 months</span>
                                <span class="detail-item">Focus: Idea validation</span>
                                <span class="detail-item">Support: Mentorship, workshops</span>
                            </div>
                            <button class="btn btn-sm btn-primary">Apply to Idea Stage</button>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-marker">
                            <span class="material-symbols-outlined">filter_2</span>
                        </div>
                        <div class="timeline-content">
                            <h4 class="timeline-title">Early Stage</h4>
                            <p class="timeline-description">For startups with MVPs or early products who need help with market entry and growth.</p>
                            <div class="timeline-details">
                                <span class="detail-item">Duration: 6 months</span>
                                <span class="detail-item">Focus: Product-market fit</span>
                                <span class="detail-item">Support: Funding, workspace</span>
                            </div>
                            <button class="btn btn-sm btn-primary">Apply to Early Stage</button>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <div class="timeline-marker">
                            <span class="material-symbols-outlined">filter_3</span>
                        </div>
                        <div class="timeline-content">
                            <h4 class="timeline-title">Growth Stage</h4>
                            <p class="timeline-description">For established startups looking to scale their operations and expand their market reach.</p>
                            <div class="timeline-details">
                                <span class="detail-item">Duration: 12 months</span>
                                <span class="detail-item">Focus: Scaling & expansion</span>
                                <span class="detail-item">Support: Growth capital, partnerships</span>
                            </div>
                            <button class="btn btn-sm btn-primary">Apply to Growth Stage</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="incubator-application">
                <h3 class="application-title">Apply to Incubator</h3>
                <p class="application-description">Ready to take your startup to the next level? Apply to our youth startup incubator program.</p>
                
                <div class="application-requirements">
                    <h4>Application Requirements:</h4>
                    <ul class="requirements-list">
                        <li>Age 18-35 (youth entrepreneurs)</li>
                        <li>Clear business idea or early-stage startup</li>
                        <li>Passion and commitment to entrepreneurship</li>
                        <li>Willingness to participate in program activities</li>
                        <li>Basic business plan or concept document</li>
                    </ul>
                </div>

                <div class="application-actions">
                    <button class="btn btn-lg btn-primary" onclick="openIncubatorApplication()">Apply to Incubator</button>
                    <button class="btn btn-lg btn-outline">Download Application Guide</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Business Mentorship -->
<section class="business-mentorship-section" id="business-mentorship">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Business Mentorship Program</h2>
            <p class="section-subtitle">Connect with experienced business mentors and advisors</p>
        </div>

        <div class="mentorship-content">
            <div class="mentorship-overview">
                <h3 class="overview-title">Our Mentorship Network</h3>
                <p class="overview-description">
                    Our mentorship program connects young entrepreneurs with experienced business leaders, successful entrepreneurs, 
                    and industry experts who provide guidance, support, and valuable insights to help you succeed.
                </p>
            </div>

            <div class="mentors-grid">
                <!-- Mentor 1 -->
                <div class="mentor-card">
                    <div class="mentor-image">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                             alt="Business mentor - Technology entrepreneur">
                    </div>
                    <div class="mentor-content">
                        <div class="mentor-header">
                            <h4 class="mentor-name">Dr. Michael Ticha</h4>
                            <div class="mentor-title">Technology Entrepreneur</div>
                        </div>
                        <p class="mentor-bio">
                            Founder of multiple successful tech startups with 15+ years of experience in software development and digital business models.
                        </p>
                        <div class="mentor-expertise">
                            <h5>Expertise:</h5>
                            <div class="expertise-tags">
                                <span class="tag">Technology</span>
                                <span class="tag">Startups</span>
                                <span class="tag">Digital Business</span>
                                <span class="tag">Product Development</span>
                            </div>
                        </div>
                        <div class="mentor-stats">
                            <span class="stat-item">15+ mentees</span>
                            <span class="stat-item">3 startups launched</span>
                        </div>
                        <div class="mentor-actions">
                            <button class="btn btn-sm btn-primary">Request Mentorship</button>
                            <button class="btn btn-sm btn-outline">View Profile</button>
                        </div>
                    </div>
                </div>

                <!-- Mentor 2 -->
                <div class="mentor-card">
                    <div class="mentor-image">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                             alt="Business mentor - Marketing expert">
                    </div>
                    <div class="mentor-content">
                        <div class="mentor-header">
                            <h4 class="mentor-name">Grace Che</h4>
                            <div class="mentor-title">Marketing & Branding Expert</div>
                        </div>
                        <p class="mentor-bio">
                            Marketing strategist with extensive experience in brand development, digital marketing, and customer acquisition for SMEs.
                        </p>
                        <div class="mentor-expertise">
                            <h5>Expertise:</h5>
                            <div class="expertise-tags">
                                <span class="tag">Marketing</span>
                                <span class="tag">Branding</span>
                                <span class="tag">Digital Strategy</span>
                                <span class="tag">Customer Growth</span>
                            </div>
                        </div>
                        <div class="mentor-stats">
                            <span class="stat-item">20+ mentees</span>
                            <span class="stat-item">50+ brands built</span>
                        </div>
                        <div class="mentor-actions">
                            <button class="btn btn-sm btn-primary">Request Mentorship</button>
                            <button class="btn btn-sm btn-outline">View Profile</button>
                        </div>
                    </div>
                </div>

                <!-- Mentor 3 -->
                <div class="mentor-card">
                    <div class="mentor-image">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                             alt="Business mentor - Finance expert">
                    </div>
                    <div class="mentor-content">
                        <div class="mentor-header">
                            <h4 class="mentor-name">James Fomonyuy</h4>
                            <div class="mentor-title">Finance & Investment Expert</div>
                        </div>
                        <p class="mentor-bio">
                            Financial analyst and investment advisor with deep knowledge of business finance, fundraising, and investment strategies.
                        </p>
                        <div class="mentor-expertise">
                            <h5>Expertise:</h5>
                            <div class="expertise-tags">
                                <span class="tag">Finance</span>
                                <span class="tag">Investment</span>
                                <span class="tag">Fundraising</span>
                                <span class="tag">Business Planning</span>
                            </div>
                        </div>
                        <div class="mentor-stats">
                            <span class="stat-item">18+ mentees</span>
                            <span class="stat-item">₣10M+ raised</span>
                        </div>
                        <div class="mentor-actions">
                            <button class="btn btn-sm btn-primary">Request Mentorship</button>
                            <button class="btn btn-sm btn-outline">View Profile</button>
                        </div>
                    </div>
                </div>

                <!-- Mentor 4 -->
                <div class="mentor-card">
                    <div class="mentor-image">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                             alt="Business mentor - Social entrepreneur">
                    </div>
                    <div class="mentor-content">
                        <div class="mentor-header">
                            <h4 class="mentor-name">Sarah Nkwocha</h4>
                            <div class="mentor-title">Social Entrepreneur</div>
                        </div>
                        <p class="mentor-bio">
                            Social entrepreneur with experience in building sustainable businesses that create both social impact and financial returns.
                        </p>
                        <div class="mentor-expertise">
                            <h5>Expertise:</h5>
                            <div class="expertise-tags">
                                <span class="tag">Social Impact</span>
                                <span class="tag">Sustainability</span>
                                <span class="tag">Community Development</span>
                                <span class="tag">Impact Measurement</span>
                            </div>
                        </div>
                        <div class="mentor-stats">
                            <span class="stat-item">12+ mentees</span>
                            <span class="stat-item">8 social ventures</span>
                        </div>
                        <div class="mentor-actions">
                            <button class="btn btn-sm btn-primary">Request Mentorship</button>
                            <button class="btn btn-sm btn-outline">View Profile</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mentorship-application">
                <h3 class="application-title">Request a Mentor</h3>
                <p class="application-description">Get personalized guidance from experienced business mentors.</p>
                
                <div class="application-form">
                    <form id="mentorshipRequestForm">
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

                        <div class="form-group">
                            <label class="form-label">Business Stage *</label>
                            <select class="form-select" required>
                                <option value="">Select business stage</option>
                                <option value="idea">Idea Stage</option>
                                <option value="early">Early Stage</option>
                                <option value="growth">Growth Stage</option>
                                <option value="established">Established Business</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Industry/Sector *</label>
                            <select class="form-select" required>
                                <option value="">Select industry</option>
                                <option value="technology">Technology</option>
                                <option value="retail">Retail</option>
                                <option value="services">Services</option>
                                <option value="manufacturing">Manufacturing</option>
                                <option value="agriculture">Agriculture</option>
                                <option value="creative">Creative Industries</option>
                                <option value="social">Social Enterprise</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Preferred Mentor Type</label>
                            <select class="form-select">
                                <option value="">No preference</option>
                                <option value="industry">Industry Expert</option>
                                <option value="entrepreneur">Successful Entrepreneur</option>
                                <option value="investor">Investor/Financier</option>
                                <option value="marketing">Marketing Expert</option>
                                <option value="technical">Technical Expert</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Specific Areas of Support *</label>
                            <textarea class="form-textarea" rows="4" placeholder="Describe what specific areas you need help with (e.g., business planning, marketing, finance, technology, etc.)" required></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Business Description *</label>
                            <textarea class="form-textarea" rows="3" placeholder="Briefly describe your business idea or current business" required></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Time Commitment *</label>
                            <select class="form-select" required>
                                <option value="">Select time commitment</option>
                                <option value="2-4">2-4 hours per month</option>
                                <option value="4-8">4-8 hours per month</option>
                                <option value="8+">8+ hours per month</option>
                            </select>
                        </div>

                        <div class="form-actions">
                            <button type="reset" class="btn btn-outline">Reset</button>
                            <button type="submit" class="btn btn-primary">Submit Request</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Funding Opportunities -->
<section class="funding-opportunities-section" id="funding-opportunities">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Funding Opportunities</h2>
            <p class="section-subtitle">Access grants, loans, and investment opportunities for youth entrepreneurs</p>
        </div>

        <div class="funding-content">
            <div class="funding-overview">
                <h3 class="overview-title">Available Funding Options</h3>
                <p class="overview-description">
                    We provide various funding opportunities to help youth entrepreneurs start and grow their businesses. 
                    From seed grants to investment connections, we have options for every stage of your entrepreneurial journey.
                </p>
            </div>

            <div class="funding-grid">
                <!-- Youth Startup Grant -->
                <div class="funding-card">
                    <div class="funding-header">
                        <div class="funding-icon">
                            <span class="material-symbols-outlined">card_giftcard</span>
                        </div>
                        <div class="funding-badge grant">Grant</div>
                    </div>
                    <div class="funding-content">
                        <h3 class="funding-title">Youth Startup Grant</h3>
                        <p class="funding-description">Non-repayable grants for innovative startup ideas with strong social or economic impact potential.</p>
                        <div class="funding-details">
                            <div class="detail-item">
                                <span class="material-symbols-outlined">payments</span>
                                <span>Amount: ₣50,000 - ₣200,000</span>
                            </div>
                            <div class="detail-item">
                                <span class="material-symbols-outlined">schedule</span>
                                <span>Application: Quarterly</span>
                            </div>
                            <div class="detail-item">
                                <span class="material-symbols-outlined">gavel</span>
                                <span>Requirements: Business plan, age 18-35</span>
                            </div>
                        </div>
                        <div class="funding-features">
                            <div class="feature-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>No repayment required</span>
                            </div>
                            <div class="feature-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Technical support included</span>
                            </div>
                            <div class="feature-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Mentorship program</span>
                            </div>
                        </div>
                        <button class="btn btn-primary">Apply for Grant</button>
                    </div>
                </div>

                <!-- Youth Business Loan -->
                <div class="funding-card">
                    <div class="funding-header">
                        <div class="funding-icon">
                            <span class="material-symbols-outlined">account_balance</span>
                        </div>
                        <div class="funding-badge loan">Loan</div>
                    </div>
                    <div class="funding-content">
                        <h3 class="funding-title">Youth Business Loan</h3>
                        <p class="funding-description">Low-interest business loans with flexible repayment terms for youth-owned businesses.</p>
                        <div class="funding-details">
                            <div class="detail-item">
                                <span class="material-symbols-outlined">payments</span>
                                <span>Amount: ₣100,000 - ₣1,000,000</span>
                            </div>
                            <div class="detail-item">
                                <span class="material-symbols-outlined">schedule</span>
                                <span>Interest: 5-8% per annum</span>
                            </div>
                            <div class="detail-item">
                                <span class="material-symbols-outlined">gavel</span>
                                <span>Requirements: Business registration, collateral</span>
                            </div>
                        </div>
                        <div class="funding-features">
                            <div class="feature-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Flexible repayment terms</span>
                            </div>
                            <div class="feature-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Business support services</span>
                            </div>
                            <div class="feature-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Fast approval process</span>
                            </div>
                        </div>
                        <button class="btn btn-primary">Apply for Loan</button>
                    </div>
                </div>

                <!-- Angel Investment -->
                <div class="funding-card">
                    <div class="funding-header">
                        <div class="funding-icon">
                            <span class="material-symbols-outlined">handshake</span>
                        </div>
                        <div class="funding-badge investment">Investment</div>
                    </div>
                    <div class="funding-content">
                        <h3 class="funding-title">Angel Investment Program</h3>
                        <p class="funding-description">Connect with angel investors interested in funding high-potential youth-led startups.</p>
                        <div class="funding-details">
                            <div class="detail-item">
                                <span class="material-symbols-outlined">payments</span>
                                <span>Amount: ₣500,000 - ₣5,000,000</span>
                            </div>
                            <div class="detail-item">
                                <span class="material-symbols-outlined">schedule</span>
                                <span>Equity-based investment</span>
                            </div>
                            <div class="detail-item">
                                <span class="material-symbols-outlined">gavel</span>
                                <span>Requirements: MVP, traction, pitch deck</span>
                            </div>
                        </div>
                        <div class="funding-features">
                            <div class="feature-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Strategic investor network</span>
                            </div>
                            <div class="feature-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Investor matching</span>
                            </div>
                            <div class="feature-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Pitch preparation support</span>
                            </div>
                        </div>
                        <button class="btn btn-primary">Apply for Investment</button>
                    </div>
                </div>

                <!-- Crowdfunding Support -->
                <div class="funding-card">
                    <div class="funding-header">
                        <div class="funding-icon">
                            <span class="material-symbols-outlined">groups</span>
                        </div>
                        <div class="funding-badge crowdfunding">Crowdfunding</div>
                    </div>
                    <div class="funding-content">
                        <h3 class="funding-title">Crowdfunding Support</h3>
                        <p class="funding-description">Platform and campaign support for youth entrepreneurs looking to raise funds from the community.</p>
                        <div class="funding-details">
                            <div class="detail-item">
                                <span class="material-symbols-outlined">payments</span>
                                <span>Amount: No minimum/maximum</span>
                            </div>
                            <div class="detail-item">
                                <span class="material-symbols-outlined">schedule</span>
                                <span>Duration: 30-60 days</span>
                            </div>
                            <div class="detail-item">
                                <span class="material-symbols-outlined">gavel</span>
                                <span>Requirements: Campaign plan, rewards</span>
                            </div>
                        </div>
                        <div class="funding-features">
                            <div class="feature-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Campaign strategy support</span>
                            </div>
                            <div class="feature-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Marketing assistance</span>
                            </div>
                            <div class="feature-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Platform fees waived</span>
                            </div>
                        </div>
                        <button class="btn btn-primary">Start Campaign</button>
                    </div>
                </div>

                <!-- Innovation Challenge -->
                <div class="funding-card">
                    <div class="funding-header">
                        <div class="funding-icon">
                            <span class="material-symbols-outlined">emoji_events</span>
                        </div>
                        <div class="funding-badge challenge">Challenge</div>
                    </div>
                    <div class="funding-content">
                        <h3 class="funding-title">Innovation Challenge</h3>
                        <p class="funding-description">Compete in innovation challenges and hackathons to win funding and support for your startup.</p>
                        <div class="funding-details">
                            <div class="detail-item">
                                <span class="material-symbols-outlined">payments</span>
                                <span>Prize: ₣25,000 - ₣100,000</span>
                            </div>
                            <div class="detail-item">
                                <span class="material-symbols-outlined">schedule</span>
                                <span>Frequency: Bi-annual</span>
                            </div>
                            <div class="detail-item">
                                <span class="material-symbols-outlined">gavel</span>
                                <span>Requirements: Innovation, prototype</span>
                            </div>
                        </div>
                        <div class="funding-features">
                            <div class="feature-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Networking opportunities</span>
                            </div>
                            <div class="feature-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Media exposure</span>
                            </div>
                            <div class="feature-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Follow-on funding</span>
                            </div>
                        </div>
                        <button class="btn btn-primary">Join Challenge</button>
                    </div>
                </div>

                <!-- Microfinance Support -->
                <div class="funding-card">
                    <div class="funding-header">
                        <div class="funding-icon">
                            <span class="material-symbols-outlined">account_balance_wallet</span>
                        </div>
                        <div class="funding-badge micro">Microfinance</div>
                    </div>
                    <div class="funding-content">
                        <h3 class="funding-title">Microfinance Support</h3>
                        <p class="funding-description">Small loans and financial services for micro-enterprises and early-stage entrepreneurs.</p>
                        <div class="funding-details">
                            <div class="detail-item">
                                <span class="material-symbols-outlined">payments</span>
                                <span>Amount: ₣10,000 - ₣100,000</span>
                            </div>
                            <div class="detail-item">
                                <span class="material-symbols-outlined">schedule</span>
                                <span>Interest: 8-12% per annum</span>
                            </div>
                            <div class="detail-item">
                                <span class="material-symbols-outlined">gavel</span>
                                <span>Requirements: Minimal documentation</span>
                            </div>
                        </div>
                        <div class="funding-features">
                            <div class="feature-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Quick approval</span>
                            </div>
                            <div class="feature-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Flexible collateral</span>
                            </div>
                            <div class="feature-item">
                                <span class="material-symbols-outlined">check_circle</span>
                                <span>Business training included</span>
                            </div>
                        </div>
                        <button class="btn btn-primary">Apply for Microfinance</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Success Stories -->
<section class="success-stories-section" id="success-stories">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Success Stories</h2>
            <p class="section-subtitle">Get inspired by successful youth entrepreneurs who started with our support</p>
        </div>

        <div class="stories-grid">
            <!-- Success Story 1 -->
            <div class="story-card">
                <div class="story-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                         alt="Tech startup success story">
                </div>
                <div class="story-content">
                    <div class="story-header">
                        <h3 class="story-title">Tech Solutions Ltd</h3>
                        <div class="story-founder">Founder: Peter Mbah</div>
                    </div>
                    <p class="story-description">
                        Started with a simple app idea and grew into a successful tech company providing digital solutions for local businesses.
                    </p>
                    <div class="story-achievements">
                        <div class="achievement-item">
                            <span class="achievement-number">₣2.5M</span>
                            <span class="achievement-label">Revenue</span>
                        </div>
                        <div class="achievement-item">
                            <span class="achievement-number">25</span>
                            <span class="achievement-label">Employees</span>
                        </div>
                        <div class="achievement-item">
                            <span class="achievement-number">500+</span>
                            <span class="achievement-label">Clients</span>
                        </div>
                    </div>
                    <div class="story-quote">
                        <p>"The entrepreneurship program gave me the confidence and skills to turn my idea into a real business."</p>
                    </div>
                    <div class="story-actions">
                        <button class="btn btn-sm btn-primary">Read Full Story</button>
                    </div>
                </div>
            </div>

            <!-- Success Story 2 -->
            <div class="story-card">
                <div class="story-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                         alt="Fashion business success story">
                </div>
                <div class="story-content">
                    <div class="story-header">
                        <h3 class="story-title">Bamenda Fashion Hub</h3>
                        <div class="story-founder">Founder: Grace Njoya</div>
                    </div>
                    <p class="story-description">
                        Transformed a passion for fashion into a thriving business employing 15 young people and promoting local culture.
                    </p>
                    <div class="story-achievements">
                        <div class="achievement-item">
                            <span class="achievement-number">₣800K</span>
                            <span class="achievement-label">Revenue</span>
                        </div>
                        <div class="achievement-item">
                            <span class="achievement-number">15</span>
                            <span class="achievement-label">Employees</span>
                        </div>
                        <div class="achievement-item">
                            <span class="achievement-number">3</span>
                            <span class="achievement-label">Retail Locations</span>
                        </div>
                    </div>
                    <div class="story-quote">
                        <p>"The mentorship and funding support helped me scale my small fashion business into a recognized brand."</p>
                    </div>
                    <div class="story-actions">
                        <button class="btn btn-sm btn-primary">Read Full Story</button>
                    </div>
                </div>
            </div>

            <!-- Success Story 3 -->
            <div class="story-card">
                <div class="story-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                         alt="Agribusiness success story">
                </div>
                <div class="story-content">
                    <div class="story-header">
                        <h3 class="story-title">Green Harvest Farms</h3>
                        <div class="story-founder">Founder: Samuel Tiku</div>
                    </div>
                    <p class="story-description">
                        Modern farming enterprise using sustainable practices to supply fresh produce to local markets and restaurants.
                    </p>
                    <div class="story-achievements">
                        <div class="achievement-item">
                            <span class="achievement-number">₣1.2M</span>
                            <span class="achievement-label">Revenue</span>
                        </div>
                        <div class="achievement-item">
                            <span class="achievement-number">12</span>
                            <span class="achievement-label">Employees</span>
                        </div>
                        <div class="achievement-item">
                            <span class="achievement-number">50+</span>
                            <span class="achievement-label">Partners</span>
                        </div>
                    </div>
                    <div class="story-quote">
                        <p>"The agribusiness program taught me modern farming techniques and connected me with market opportunities."</p>
                    </div>
                    <div class="story-actions">
                        <button class="btn btn-sm btn-primary">Read Full Story</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="load-more-container">
            <button class="btn btn-outline" onclick="loadMoreStories()">Load More Stories</button>
        </div>
    </div>
</section>

<!-- Apply for Support -->
<section class="apply-support-section" id="apply-support">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Apply for Entrepreneurship Support</h2>
            <p class="section-subtitle">Get started with our comprehensive entrepreneurship support programs</p>
        </div>

        <div class="application-content">
            <div class="application-form">
                <form id="entrepreneurshipApplicationForm">
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
                                <label class="form-label">Educational Background *</label>
                                <select class="form-select" required>
                                    <option value="">Select education level</option>
                                    <option value="high-school">High School</option>
                                    <option value="diploma">Diploma</option>
                                    <option value="bachelors">Bachelor's Degree</option>
                                    <option value="masters">Master's Degree</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Field of Study</label>
                                <input type="text" class="form-input" placeholder="Your field of study">
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <h3 class="section-title">Business Information</h3>
                        
                        <div class="form-group">
                            <label class="form-label">Business Stage *</label>
                            <select class="form-select" required>
                                <option value="">Select business stage</option>
                                <option value="idea">Idea Stage</option>
                                <option value="planning">Planning Stage</option>
                                <option value="early">Early Stage</option>
                                <option value="growth">Growth Stage</option>
                                <option value="established">Established Business</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Industry/Sector *</label>
                            <select class="form-select" required>
                                <option value="">Select industry</option>
                                <option value="technology">Technology</option>
                                <option value="retail">Retail</option>
                                <option value="services">Services</option>
                                <option value="manufacturing">Manufacturing</option>
                                <option value="agriculture">Agriculture</option>
                                <option value="creative">Creative Industries</option>
                                <option value="social">Social Enterprise</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Business Name</label>
                            <input type="text" class="form-input" placeholder="Your business name (if registered)">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Business Description *</label>
                            <textarea class="form-textarea" rows="4" placeholder="Describe your business idea or current business in detail" required></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Unique Value Proposition *</label>
                            <textarea class="form-textarea" rows="3" placeholder="What makes your business unique and different from competitors?" required></textarea>
                        </div>
                    </div>

                    <div class="form-section">
                        <h3 class="section-title">Support Requirements</h3>
                        
                        <div class="form-group">
                            <label class="form-label">Support Type *</label>
                            <select class="form-select" required>
                                <option value="">Select support type</option>
                                <option value="program">Entrepreneurship Program</option>
                                <option value="incubator">Startup Incubator</option>
                                <option value="mentorship">Business Mentorship</option>
                                <option value="funding">Funding Support</option>
                                <option value="training">Business Training</option>
                                <option value="multiple">Multiple Support Types</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Specific Support Needs *</label>
                            <textarea class="form-textarea" rows="4" placeholder="Describe what specific support you need (e.g., funding, mentorship, training, workspace, etc.)" required></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Time Commitment *</label>
                            <select class="form-select" required>
                                <option value="">Select time commitment</option>
                                <option value="part-time">Part-time (5-10 hours per week)</option>
                                <option value="full-time">Full-time (20+ hours per week)</option>
                                <option value="flexible">Flexible (as needed)</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Expected Timeline *</label>
                            <select class="form-select" required>
                                <option value="">Select timeline</option>
                                <option value="3-months">3 months</option>
                                <option value="6-months">6 months</option>
                                <option value="1-year">1 year</option>
                                <option value="ongoing">Ongoing</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-section">
                        <h3 class="section-title">Additional Information</h3>
                        
                        <div class="form-group">
                            <label class="form-label">Previous Entrepreneurship Experience</label>
                            <select class="form-select">
                                <option value="">Select experience level</option>
                                <option value="none">No previous experience</option>
                                <option value="some">Some experience</option>
                                <option value="moderate">Moderate experience</option>
                                <option value="extensive">Extensive experience</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">How did you hear about us? *</label>
                            <select class="form-select" required>
                                <option value="">Select option</option>
                                <option value="social-media">Social Media</option>
                                <option value="website">City Council Website</option>
                                <option value="friend">Friend/Colleague</option>
                                <option value="event">Event/Workshop</option>
                                <option value="school">School/University</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Additional Comments</label>
                            <textarea class="form-textarea" rows="3" placeholder="Any additional information or questions"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Agreement *</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="agreement" required>
                                    <span class="checkmark"></span>
                                    I understand that participation in entrepreneurship programs requires commitment and active participation. I agree to provide accurate information and participate fully in program activities.
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
            <p class="section-subtitle">Common questions about youth entrepreneurship programs and support</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Who is eligible for youth entrepreneurship programs?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Youth aged 18-35 who are Bamenda residents and have a business idea or existing business can apply. Priority is given to innovative ideas with social or economic impact.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What types of businesses do you support?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>We support businesses across all sectors including technology, retail, services, agriculture, creative industries, and social enterprises. We particularly encourage innovative and impact-driven businesses.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How much funding can I get?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Funding amounts vary by program: Grants (₣50K-₣200K), Loans (₣100K-₣1M), and Investments (₣500K-₣5M). The amount depends on your business stage, potential, and specific program requirements.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Do I need to repay the grants?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>No, grants are non-repayable. However, loans require repayment with interest, and investments involve equity sharing in your business.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How long does the application process take?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>The application process typically takes 2-4 weeks for review and decision. Some programs may have additional interview or presentation requirements.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What support is provided after funding?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>We provide ongoing mentorship, business training, networking opportunities, and access to our incubator facilities to ensure your business success.</p>
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
/* Youth Entrepreneurship Page Styles */
.youth-entrepreneurship-hero {
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

/* Entrepreneurship Statistics Section */
.entrepreneurship-stats-section {
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

/* Entrepreneurship Programs Section */
.entrepreneurship-programs-section {
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

.program-badge.foundational {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.program-badge.core {
    background-color: var(--primary);
    color: var(--on-primary);
}

.program-badge.specialized {
    background-color: var(--secondary);
    color: var(--on-secondary);
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

/* Startup Incubator Section */
.startup-incubator-section {
    padding: var(--spacing-3xl) 0;
}

.incubator-content {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-2xl);
}

.incubator-overview {
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
    margin-bottom: var(--spacing-xl);
}

.incubator-features {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
    margin-bottom: var(--spacing-xl);
}

.feature-item {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.feature-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.feature-icon {
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

.feature-icon .material-symbols-outlined {
    font-size: 2rem;
}

.feature-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.feature-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
}

.incubator-programs {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
}

.programs-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
    text-align: center;
}

.programs-timeline {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xl);
}

.timeline-item {
    display: flex;
    gap: var(--spacing-lg);
    align-items: flex-start;
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
}

.timeline-marker .material-symbols-outlined {
    font-size: 1.5rem;
}

.timeline-content {
    flex: 1;
    background-color: var(--surface-container);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
}

.timeline-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.timeline-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.timeline-details {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-md);
    margin-bottom: var(--spacing-lg);
}

.detail-item {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    padding: var(--spacing-xs) var(--spacing-sm);
    background-color: var(--surface-container-high);
    border-radius: var(--radius-full);
}

.incubator-application {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
}

.application-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.application-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.application-requirements {
    text-align: left;
    margin-bottom: var(--spacing-lg);
}

.application-requirements h4 {
    font-size: 1.125rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.requirements-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.requirements-list li {
    padding: var(--spacing-xs) 0;
    color: var(--on-surface-variant);
    position: relative;
    padding-left: var(--spacing-lg);
    line-height: 1.5;
}

.requirements-list li::before {
    content: '•';
    position: absolute;
    left: 0;
    color: var(--primary);
    font-weight: 700;
}

.application-actions {
    display: flex;
    gap: var(--spacing-lg);
    justify-content: center;
}

/* Business Mentorship Section */
.business-mentorship-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.mentorship-content {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-2xl);
}

.mentorship-overview {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.mentors-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.mentor-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
    overflow: hidden;
}

.mentor-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.mentor-image {
    height: 200px;
    overflow: hidden;
}

.mentor-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.mentor-content {
    padding: var(--spacing-lg);
}

.mentor-header {
    margin-bottom: var(--spacing-md);
}

.mentor-name {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-xs);
}

.mentor-title {
    font-size: 0.875rem;
    color: var(--tertiary);
    font-weight: 600;
}

.mentor-bio {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.mentor-expertise {
    margin-bottom: var(--spacing-lg);
}

.mentor-expertise h5 {
    font-size: 1rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.expertise-tags {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-sm);
}

.tag {
    background-color: var(--surface-container);
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.mentor-stats {
    display: flex;
    gap: var(--spacing-lg);
    margin-bottom: var(--spacing-lg);
}

.mentor-actions {
    display: flex;
    gap: var(--spacing-sm);
}

.mentorship-application {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-2xl);
    border: 1px solid var(--outline-variant);
    max-width: 800px;
    margin: 0 auto;
}

/* Funding Opportunities Section */
.funding-opportunities-section {
    padding: var(--spacing-3xl) 0;
}

.funding-content {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xl);
}

.funding-overview {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
}

.funding-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.funding-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.funding-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.funding-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.funding-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.funding-icon .material-symbols-outlined {
    font-size: 2rem;
}

.funding-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.funding-badge.grant {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.funding-badge.loan {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.funding-badge.investment {
    background-color: var(--primary);
    color: var(--on-primary);
}

.funding-badge.crowdfunding {
    background-color: var(--error);
    color: var(--on-error);
}

.funding-badge.challenge {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.funding-badge.micro {
    background-color: var(--outline-variant);
    color: var(--on-surface-variant);
}

.funding-content {
    padding: var(--spacing-lg);
}

.funding-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.funding-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.funding-details {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

.funding-features {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

/* Success Stories Section */
.success-stories-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.stories-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
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
    height: 200px;
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

.story-header {
    margin-bottom: var(--spacing-md);
}

.story-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-xs);
}

.story-founder {
    font-size: 0.875rem;
    color: var(--tertiary);
    font-weight: 600;
}

.story-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.story-achievements {
    display: flex;
    justify-content: space-around;
    margin-bottom: var(--spacing-lg);
}

.achievement-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: var(--spacing-xs);
}

.achievement-number {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
}

.achievement-label {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
    text-transform: uppercase;
}

.story-quote {
    background-color: var(--surface-container);
    border-left: 4px solid var(--primary);
    padding: var(--spacing-lg);
    margin-bottom: var(--spacing-lg);
    font-style: italic;
    color: var(--on-surface-variant);
}

.story-actions {
    text-align: center;
}

.load-more-container {
    text-align: center;
    margin-top: var(--spacing-xl);
}

/* Apply Support Section */
.apply-support-section {
    padding: var(--spacing-3xl) 0;
}

.application-content {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-2xl);
    border: 1px solid var(--outline-variant);
    max-width: 800px;
    margin: 0 auto;
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
    
    .incubator-features {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .programs-timeline {
        gap: var(--spacing-lg);
    }
    
    .timeline-item {
        flex-direction: column;
        align-items: flex-start;
        gap: var(--spacing-md);
    }
    
    .mentors-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .funding-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
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
    
    .program-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .feature-item {
        padding: var(--spacing-md);
    }
    
    .feature-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .feature-icon .material-symbols-outlined {
        font-size: 1.5rem;
    }
    
    .timeline-content {
        padding: var(--spacing-md);
    }
    
    .timeline-details {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .application-actions {
        flex-direction: column;
        gap: var(--spacing-md);
    }
    
    .mentor-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .funding-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .story-card {
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
function openEntrepreneurshipPrograms() {
    document.getElementById('entrepreneurship-programs').scrollIntoView({ behavior: 'smooth' });
}

function openStartupIncubator() {
    document.getElementById('startup-incubator').scrollIntoView({ behavior: 'smooth' });
}

function openBusinessMentorship() {
    document.getElementById('business-mentorship').scrollIntoView({ behavior: 'smooth' });
}

function openFundingOpportunities() {
    document.getElementById('funding-opportunities').scrollIntoView({ behavior: 'smooth' });
}

function openBusinessTraining() {
    alert('Business training programs would open here. In production, this would show available training courses and workshops.');
}

function openSuccessStories() {
    document.getElementById('success-stories').scrollIntoView({ behavior: 'smooth' });
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
    if (button.textContent.includes('More')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
            alert(`Learning more about: "${programTitle}"`);
        });
    }
});

// Incubator stage applications
document.querySelectorAll('.timeline-content .btn-primary').forEach(button => {
    button.addEventListener('click', function() {
        const stageTitle = this.closest('.timeline-content').querySelector('.timeline-title').textContent;
        alert(`Applying to: "${stageTitle}"`);
    });
});

// Mentorship actions
document.querySelectorAll('.mentor-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Request')) {
        button.addEventListener('click', function() {
            const mentorName = this.closest('.mentor-card').querySelector('.mentor-name').textContent;
            alert(`Requesting mentorship from: "${mentorName}"`);
        });
    }
});

document.querySelectorAll('.mentor-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Profile')) {
        button.addEventListener('click', function() {
            const mentorName = this.closest('.mentor-card').querySelector('.mentor-name').textContent;
            alert(`Viewing profile for: "${mentorName}"`);
        });
    }
});

// Funding actions
document.querySelectorAll('.funding-card .btn-primary').forEach(button => {
    if (button.textContent.includes('Apply')) {
        button.addEventListener('click', function() {
            const fundingTitle = this.closest('.funding-card').querySelector('.funding-title').textContent;
            alert(`Applying for: "${fundingTitle}"`);
        });
    }
    
    if (button.textContent.includes('Start')) {
        button.addEventListener('click', function() {
            const fundingTitle = this.closest('.funding-card').querySelector('.funding-title').textContent;
            alert(`Starting: "${fundingTitle}"`);
        });
    }
    
    if (button.textContent.includes('Join')) {
        button.addEventListener('click', function() {
            const fundingTitle = this.closest('.funding-card').querySelector('.funding-title').textContent;
            alert(`Joining: "${fundingTitle}"`);
        });
    }
});

// Story actions
document.querySelectorAll('.story-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Read')) {
        button.addEventListener('click', function() {
            const storyTitle = this.closest('.story-card').querySelector('.story-title').textContent;
            alert(`Reading full story for: "${storyTitle}"`);
        });
    }
});

// Mentorship request form submission
document.getElementById('mentorshipRequestForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate required fields
    const fullName = document.querySelector('#mentorshipRequestForm input[type="text"]').value;
    const email = document.querySelector('#mentorshipRequestForm input[type="email"]').value;
    const businessStage = document.querySelector('#mentorshipRequestForm select[required]').value;
    
    if (!fullName || !email || !businessStage) {
        alert('Please fill in all required fields.');
        return;
    }
    
    alert('Mentorship request submitted successfully! We will review your request and match you with a suitable mentor within 5 business days.');
    // In production, this would submit the mentorship request
});

// Entrepreneurship application form submission
document.getElementById('entrepreneurshipApplicationForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate required fields
    const fullName = document.querySelector('#entrepreneurshipApplicationForm input[type="text"]').value;
    const dateOfBirth = document.querySelector('#entrepreneurshipApplicationForm input[type="date"]').value;
    const email = document.querySelector('#entrepreneurshipApplicationForm input[type="email"]').value;
    const phone = document.querySelector('#entrepreneurshipApplicationForm input[type="tel"]').value;
    const address = document.querySelector('#entrepreneurshipApplicationForm input[placeholder*="address"]').value;
    
    if (!fullName || !dateOfBirth || !email || !phone || !address) {
        alert('Please fill in all required fields.');
        return;
    }
    
    // Validate age requirement
    const age = calculateAge(dateOfBirth);
    if (age < 18 || age > 35) {
        alert('You must be between 18-35 years old to apply for youth entrepreneurship support.');
        return;
    }
    
    // Validate agreement
    const agreement = document.querySelector('input[name="agreement"]:checked');
    if (!agreement) {
        alert('Please accept the agreement to proceed with the application.');
        return;
    }
    
    alert('Entrepreneurship support application submitted successfully! We will review your application and contact you within 7 business days.');
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

// Incubator application
function openIncubatorApplication() {
    document.getElementById('apply-support').scrollIntoView({ behavior: 'smooth' });
}

// Load more stories
function loadMoreStories() {
    alert('Loading more success stories... In production, this would fetch additional success stories from the server.');
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

// Auto-refresh entrepreneurship data
function refreshEntrepreneurshipData() {
    // In production, this would fetch real-time entrepreneurship data
    console.log('Refreshing entrepreneurship data...');
}

// Refresh data every 60 seconds
setInterval(refreshEntrepreneurshipData, 60000);
</script>
