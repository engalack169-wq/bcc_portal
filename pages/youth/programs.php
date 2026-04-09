<?php
/**
 * Bamenda City Council E-Governance Platform
 * Youth Programs Page
 */

// Set page metadata
$page_title = 'Youth Programs | Bamenda City Council';
$page_description = 'Explore youth development programs, skills training, employment opportunities, and empowerment initiatives in Bamenda.';
$page_keywords = 'youth programs, skills training, employment, youth development, Bamenda youth';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Youth', 'url' => '../index.php'],
    ['title' => 'Youth Programs', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero youth-programs-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-youth-programs.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Youth Programs</span>
            <h1 class="hero-title">Empowering Bamenda's Youth</h1>
            <p class="hero-subtitle">
                Discover comprehensive youth development programs, skills training, employment opportunities, and initiatives designed to empower young people.
            </p>
            <div class="hero-actions">
                <a href="#program-categories" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">school</span>
                    Explore Programs
                </a>
                <a href="#apply-programs" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">how_to_reg</span>
                    Apply Now
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Youth Program Actions</h2>
            <p class="section-subtitle">Quick access to youth development opportunities</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openSkillsTraining()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">engineering</span>
                </div>
                <h3 class="action-title">Skills Training</h3>
                <p class="action-description">Explore vocational and technical skills training programs</p>
            </div>

            <div class="action-card" onclick="openEmployment()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">work</span>
                </div>
                <h3 class="action-title">Employment</h3>
                <p class="action-description">Find job opportunities and career development programs</p>
            </div>

            <div class="action-card" onclick="openEntrepreneurship()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">storefront</span>
                </div>
                <h3 class="action-title">Entrepreneurship</h3>
                <p class="action-description">Business development and startup support programs</p>
            </div>

            <div class="action-card" onclick="openLeadership()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <h3 class="action-title">Leadership</h3>
                <p class="action-description">Leadership development and civic engagement programs</p>
            </div>

            <div class="action-card" onclick="openGrants()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">payments</span>
                </div>
                <h3 class="action-title">Grants & Funding</h3>
                <p class="action-description">Access funding opportunities for youth projects</p>
            </div>

            <div class="action-card" onclick="openMentorship()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">psychology</span>
                </div>
                <h3 class="action-title">Mentorship</h3>
                <p class="action-description">Connect with mentors and career guidance programs</p>
            </div>
        </div>
    </div>
</section>

<!-- Youth Statistics -->
<section class="youth-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">12,456</div>
                    <div class="stat-label">Youth Trained</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+2,345 this year</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">work</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">3,456</div>
                    <div class="stat-label">Jobs Created</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+567 this quarter</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">storefront</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">456</div>
                    <div class="stat-label">Businesses Started</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+89 this year</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">emoji_events</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">89%</div>
                    <div class="stat-label">Success Rate</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+5% improvement</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Program Categories -->
<section class="program-categories-section" id="program-categories">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Program Categories</h2>
            <p class="section-subtitle">Explore our diverse youth development programs</p>
        </div>

        <div class="categories-grid">
            <div class="category-card">
                <div class="category-icon">
                    <span class="material-symbols-outlined">engineering</span>
                </div>
                <h3 class="category-title">Skills Training</h3>
                <p class="category-description">Vocational and technical skills training programs to prepare youth for the job market.</p>
                <div class="category-stats">
                    <span class="stat-item">
                        <span class="stat-number">45</span>
                        <span class="stat-label">Programs</span>
                    </span>
                    <span class="stat-item">
                        <span class="stat-number">5,678</span>
                        <span class="stat-label">Participants</span>
                    </span>
                </div>
                <button class="btn btn-primary">Explore Programs</button>
            </div>

            <div class="category-card">
                <div class="category-icon">
                    <span class="material-symbols-outlined">work</span>
                </div>
                <h3 class="category-title">Employment Services</h3>
                <p class="category-description">Job placement, career counseling, and employment readiness programs for youth.</p>
                <div class="category-stats">
                    <span class="stat-item">
                        <span class="stat-number">23</span>
                        <span class="stat-label">Programs</span>
                    </span>
                    <span class="stat-item">
                        <span class="stat-number">3,456</span>
                        <span class="stat-label">Placements</span>
                    </span>
                </div>
                <button class="btn btn-primary">Find Jobs</button>
            </div>

            <div class="category-card">
                <div class="category-icon">
                    <span class="material-symbols-outlined">storefront</span>
                </div>
                <h3 class="category-title">Entrepreneurship</h3>
                <p class="category-description">Business development, startup support, and entrepreneurship training programs.</p>
                <div class="category-stats">
                    <span class="stat-item">
                        <span class="stat-number">18</span>
                        <span class="stat-label">Programs</span>
                    </span>
                    <span class="stat-item">
                        <span class="stat-number">456</span>
                        <span class="stat-label">Startups</span>
                    </span>
                </div>
                <button class="btn btn-primary">Start Business</button>
            </div>

            <div class="category-card">
                <div class="category-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <h3 class="category-title">Leadership Development</h3>
                <p class="category-description">Leadership training, civic engagement, and community development programs.</p>
                <div class="category-stats">
                    <span class="stat-item">
                        <span class="stat-number">12</span>
                        <span class="stat-label">Programs</span>
                    </span>
                    <span class="stat-item">
                        <span class="stat-number">1,234</span>
                        <span class="stat-label">Leaders</span>
                    </span>
                </div>
                <button class="btn btn-primary">Become Leader</button>
            </div>

            <div class="category-card">
                <div class="category-icon">
                    <span class="material-symbols-outlined">payments</span>
                </div>
                <h3 class="category-title">Grants & Funding</h3>
                <p class="category-description">Financial support, grants, and funding opportunities for youth projects and initiatives.</p>
                <div class="category-stats">
                    <span class="stat-item">
                        <span class="stat-number">8</span>
                        <span class="stat-label">Grant Programs</span>
                    </span>
                    <span class="stat-item">
                        <span class="stat-number">₣45M</span>
                        <span class="stat-label">Funding Available</span>
                    </span>
                </div>
                <button class="btn btn-primary">Apply for Funding</button>
            </div>

            <div class="category-card">
                <div class="category-icon">
                    <span class="material-symbols-outlined">sports_soccer</span>
                </div>
                <h3 class="category-title">Sports & Recreation</h3>
                <p class="category-description">Sports programs, recreational activities, and talent development for youth.</p>
                <div class="category-stats">
                    <span class="stat-item">
                        <span class="stat-number">15</span>
                        <span class="stat-label">Sports Programs</span>
                    </span>
                    <span class="stat-item">
                        <span class="stat-number">2,345</span>
                        <span class="stat-label">Athletes</span>
                    </span>
                </div>
                <button class="btn btn-primary">Join Sports</button>
            </div>
        </div>
    </div>
</section>

<!-- Featured Programs -->
<section class="featured-programs-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Featured Programs</h2>
            <p class="section-subtitle">Highlight of our most popular and impactful youth programs</p>
        </div>

        <div class="programs-grid">
            <!-- Digital Skills Program -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-badge featured">Featured</div>
                    <div class="program-status open">Open for Applications</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Digital Skills Bootcamp</h3>
                    <p class="program-description">Intensive 3-month digital skills training covering web development, mobile apps, and digital marketing.</p>
                    <div class="program-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 3 months</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Bamenda Tech Hub</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Free Program</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>45 Participants</span>
                        </div>
                    </div>
                    
                    <div class="program-skills">
                        <h4>Skills Covered:</h4>
                        <div class="skills-list">
                            <span class="skill-tag">Web Development</span>
                            <span class="skill-tag">Mobile Apps</span>
                            <span class="skill-tag">Digital Marketing</span>
                            <span class="skill-tag">Data Analysis</span>
                        </div>
                    </div>
                    
                    <div class="program-outcomes">
                        <h4>Expected Outcomes:</h4>
                        <ul class="outcomes-list">
                            <li>Industry-recognized certification</li>
                            <li>Portfolio development</li>
                            <li>Job placement assistance</li>
                            <li>Internship opportunities</li>
                        </ul>
                    </div>
                    
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                        <button class="btn btn-sm btn-outline">Share</button>
                    </div>
                </div>
            </div>

            <!-- Agribusiness Program -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-badge popular">Popular</div>
                    <div class="program-status open">Open for Applications</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Youth Agribusiness Initiative</h3>
                    <p class="program-description">Comprehensive training in modern agricultural practices, business management, and market access for young farmers.</p>
                    <div class="program-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 6 months</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Agricultural Training Center</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Free with Stipend</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>60 Participants</span>
                        </div>
                    </div>
                    
                    <div class="program-skills">
                        <h4>Skills Covered:</h4>
                        <div class="skills-list">
                            <span class="skill-tag">Modern Farming</span>
                            <span class="skill-tag">Business Management</span>
                            <span class="skill-tag">Market Access</span>
                            <span class="skill-tag">Financial Planning</span>
                        </div>
                    </div>
                    
                    <div class="program-outcomes">
                        <h4>Expected Outcomes:</h4>
                        <ul class="outcomes-list">
                            <li>Start-up capital support</li>
                            <li>Land access program</li>
                            <li>Market linkages</li>
                            <li>Ongoing mentorship</li>
                        </ul>
                    </div>
                    
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                        <button class="btn btn-sm btn-outline">Share</button>
                    </div>
                </div>
            </div>

            <!-- Creative Arts Program -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-badge new">New</div>
                    <div class="program-status open">Open for Applications</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Creative Arts & Media</h3>
                    <p class="program-description">Training in creative arts, media production, and digital content creation for the creative industry.</p>
                    <div class="program-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 4 months</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Cultural Center</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Free Program</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>30 Participants</span>
                        </div>
                    </div>
                    
                    <div class="program-skills">
                        <h4>Skills Covered:</h4>
                        <div class="skills-list">
                            <span class="skill-tag">Video Production</span>
                            <span class="skill-tag">Graphic Design</span>
                            <span class="skill-tag">Photography</span>
                            <span class="skill-tag">Content Creation</span>
                        </div>
                    </div>
                    
                    <div class="program-outcomes">
                        <h4>Expected Outcomes:</h4>
                        <ul class="outcomes-list">
                            <li>Portfolio development</li>
                            <li>Industry connections</li>
                            <li>Exhibition opportunities</li>
                            <li>Freelance training</li>
                        </ul>
                    </div>
                    
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                        <button class="btn btn-sm btn-outline">Share</button>
                    </div>
                </div>
            </div>

            <!-- Hospitality Program -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-badge trending">Trending</div>
                    <div class="program-status open">Open for Applications</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Hospitality & Tourism</h3>
                    <p class="program-description">Professional training in hospitality services, tourism management, and customer service excellence.</p>
                    <div class="program-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 3 months</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Tourism Training Center</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Free Program</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>40 Participants</span>
                        </div>
                    </div>
                    
                    <div class="program-skills">
                        <h4>Skills Covered:</h4>
                        <div class="skills-list">
                            <span class="skill-tag">Hotel Management</span>
                            <span class="skill-tag">Customer Service</span>
                            <span class="skill-tag">Tour Operations</span>
                            <span class="skill-tag">Event Planning</span>
                        </div>
                    </div>
                    
                    <div class="program-outcomes">
                        <h4>Expected Outcomes:</h4>
                        <ul class="outcomes-list">
                            <li>Industry certification</li>
                            <li>Job placement guarantee</li>
                            <li>Internship placement</li>
                            <li>Career advancement</li>
                        </ul>
                    </div>
                    
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                        <button class="btn btn-sm btn-outline">Share</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="load-more-container">
            <button class="btn btn-outline" onclick="loadMorePrograms()">Load More Programs</button>
        </div>
    </div>
</section>

<!-- Application Process -->
<section class="application-process-section" id="apply-programs">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Application Process</h2>
            <p class="section-subtitle">Simple steps to apply for youth programs</p>
        </div>

        <div class="process-steps">
            <div class="step-card">
                <div class="step-number">1</div>
                <div class="step-icon">
                    <span class="material-symbols-outlined">search</span>
                </div>
                <h3 class="step-title">Choose Program</h3>
                <p class="step-description">Browse available programs and select the one that matches your interests and goals.</p>
            </div>

            <div class="step-card">
                <div class="step-number">2</div>
                <div class="step-icon">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <h3 class="step-title">Complete Application</h3>
                <p class="step-description">Fill out the application form with your personal information and program preferences.</p>
            </div>

            <div class="step-card">
                <div class="step-number">3</div>
                <div class="step-icon">
                    <span class="material-symbols-outlined">assessment</span>
                </div>
                <h3 class="step-title">Assessment</h3>
                <p class="step-description">Attend an assessment session to determine your eligibility and program fit.</p>
            </div>

            <div class="step-card">
                <div class="step-number">4</div>
                <div class="step-icon">
                    <span class="material-symbols-outlined">fact_check</span>
                </div>
                <h3 class="step-title">Selection</h3>
                <p class="step-description">Successful candidates are selected based on assessment results and program capacity.</p>
            </div>

            <div class="step-card">
                <div class="step-number">5</div>
                <div class="step-icon">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <h3 class="step-title">Start Program</h3>
                <p class="step-description">Begin your journey with orientation and start your selected youth development program.</p>
            </div>
        </div>

        <div class="application-requirements">
            <h3>General Requirements</h3>
            <div class="requirements-grid">
                <div class="requirement-item">
                    <div class="requirement-icon">
                        <span class="material-symbols-outlined">person</span>
                    </div>
                    <h4>Age Requirement</h4>
                    <p>Must be between 18-35 years old</p>
                </div>

                <div class="requirement-item">
                    <div class="requirement-icon">
                        <span class="material-symbols-outlined">location_on</span>
                    </div>
                    <h4>Residency</h4>
                    <p>Must be a resident of Bamenda</p>
                </div>

                <div class="requirement-item">
                    <div class="requirement-icon">
                        <span class="material-symbols-outlined">school</span>
                    </div>
                    <h4>Education</h4>
                    <p>Minimum of high school education</p>
                </div>

                <div class="requirement-item">
                    <div class="requirement-icon">
                        <span class="material-symbols-outlined">favorite</span>
                    </div>
                    <h4>Commitment</h4>
                    <p>Must be committed to completing the program</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Success Stories -->
<section class="success-stories-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Success Stories</h2>
            <p class="section-subtitle">Inspiring stories from youth who have benefited from our programs</p>
        </div>

        <div class="stories-grid">
            <div class="story-card">
                <div class="story-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                         alt="success story of digital skills graduate">
                </div>
                <div class="story-content">
                    <h3 class="story-name">Sarah Nkwocha</h3>
                    <p class="story-program">Digital Skills Bootcamp Graduate</p>
                    <p class="story-testimonial">"The digital skills program transformed my life. I went from being unemployed to working as a web developer with a great salary."</p>
                    <div class="story-achievements">
                        <span class="achievement">Web Developer</span>
                        <span class="achievement">3x Salary Increase</span>
                    </div>
                </div>
            </div>

            <div class="story-card">
                <div class="story-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                         alt="success story of agribusiness entrepreneur">
                </div>
                <div class="story-content">
                    <h3 class="story-name">James Fomonyuy</h3>
                    <p class="story-program">Agribusiness Initiative Participant</p>
                    <p class="story-testimonial">"The agribusiness program gave me the skills and confidence to start my own farm. Now I employ 5 people and supply to local markets."</p>
                    <div class="story-achievements">
                        <span class="achievement">Farm Owner</span>
                        <span class="achievement">5 Employees</span>
                    </div>
                </div>
            </div>

            <div class="story-card">
                <div class="story-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                         alt="success story of creative arts graduate">
                </div>
                <div class="story-content">
                    <h3 class="story-name">Grace Che</h3>
                    <p class="story-program">Creative Arts & Media Graduate</p>
                    <p class="story-testimonial">"The creative arts program helped me discover my passion for photography. Now I run my own photography business and love what I do."</p>
                    <div class="story-achievements">
                        <span class="achievement">Photographer</span>
                        <span class="achievement">Business Owner</span>
                    </div>
                </div>
            </div>

            <div class="story-card">
                <div class="story-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                         alt="success story of hospitality graduate">
                </div>
                <div class="story-content">
                    <h3 class="story-name">Michael Ticha</h3>
                    <p class="story-program">Hospitality & Tourism Graduate</p>
                    <p class="story-testimonial">"The hospitality program opened doors I never imagined. I now work at a leading hotel and have a clear career path."</p>
                    <div class="story-achievements">
                        <span class="achievement">Hotel Manager</span>
                        <span class="achievement">Career Growth</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Program Application Form -->
<section class="program-application-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Apply for Youth Program</h2>
            <p class="section-subtitle">Start your journey by applying for our youth development programs</p>
        </div>

        <div class="application-form">
            <form id="programApplicationForm">
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
                    <h3 class="section-title">Program Selection</h3>
                    
                    <div class="form-group">
                        <label class="form-label">Program Category *</label>
                        <select class="form-select" required>
                            <option value="">Select program category</option>
                            <option value="skills">Skills Training</option>
                            <option value="employment">Employment Services</option>
                            <option value="entrepreneurship">Entrepreneurship</option>
                            <option value="leadership">Leadership Development</option>
                            <option value="grants">Grants & Funding</option>
                            <option value="sports">Sports & Recreation</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Specific Program *</label>
                        <select class="form-select" required>
                            <option value="">Select specific program</option>
                            <option value="digital-skills">Digital Skills Bootcamp</option>
                            <option value="agribusiness">Youth Agribusiness Initiative</option>
                            <option value="creative-arts">Creative Arts & Media</option>
                            <option value="hospitality">Hospitality & Tourism</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Motivation for Applying *</label>
                        <textarea class="form-textarea" rows="4" placeholder="Why do you want to join this program? What are your expectations?" required></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Previous Experience</label>
                        <textarea class="form-textarea" rows="3" placeholder="Any relevant experience or skills you have"></textarea>
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">Additional Information</h3>
                    
                    <div class="form-group">
                        <label class="form-label">Career Goals</label>
                        <textarea class="form-textarea" rows="3" placeholder="What are your long-term career goals?"></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label">How did you hear about our programs? *</label>
                        <select class="form-select" required>
                            <option value="">Select option</option>
                            <option value="website">City Council Website</option>
                            <option value="social">Social Media</option>
                            <option value="friend">Friend/Family</option>
                            <option value="school">School/University</option>
                            <option value="community-center">Community Center</option>
                            <option value="event">Community Event</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Special Requirements</label>
                        <textarea class="form-textarea" rows="2" placeholder="Any special requirements or accommodations needed"></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Agreement *</label>
                        <div class="checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="agreement" required>
                                <span class="checkmark"></span>
                                I understand that this application is subject to review and selection, and I commit to completing the program if selected.
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
</section>

<?php
// Include footer
require_once __DIR__ . '/../../includes/footer.php';
?>

<style>
/* Youth Programs Page Styles */
.youth-programs-hero {
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

/* Youth Statistics Section */
.youth-stats-section {
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

/* Program Categories Section */
.program-categories-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.categories-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.category-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.category-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.category-icon {
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

.category-icon .material-symbols-outlined {
    font-size: 2rem;
}

.category-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.category-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.category-stats {
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

/* Featured Programs Section */
.featured-programs-section {
    padding: var(--spacing-3xl) 0;
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

.program-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.program-badge.featured {
    background-color: var(--error);
    color: var(--on-error);
}

.program-badge.popular {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.program-badge.new {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.program-badge.trending {
    background-color: var(--primary);
    color: var(--on-primary);
}

.program-status {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.program-status.open {
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

.program-details {
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

.program-skills {
    margin-bottom: var(--spacing-lg);
}

.program-skills h4 {
    font-size: 1rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.skills-list {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-sm);
}

.skill-tag {
    background-color: var(--surface-container);
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.program-outcomes {
    margin-bottom: var(--spacing-lg);
}

.program-outcomes h4 {
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

.program-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Application Process Section */
.application-process-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.process-steps {
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

.application-requirements {
    margin-top: var(--spacing-2xl);
}

.application-requirements h3 {
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
    text-align: center;
}

.requirements-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: var(--spacing-lg);
}

.requirement-item {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.requirement-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.requirement-icon {
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

.requirement-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.requirement-item h4 {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.requirement-item p {
    color: var(--on-surface-variant);
    font-size: 0.875rem;
}

/* Success Stories Section */
.success-stories-section {
    padding: var(--spacing-3xl) 0;
}

.stories-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
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

.story-name {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-xs);
}

.story-program {
    font-size: 0.875rem;
    color: var(--tertiary);
    font-weight: 600;
    margin-bottom: var(--spacing-md);
}

.story-testimonial {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
    font-style: italic;
}

.story-achievements {
    display: flex;
    gap: var(--spacing-sm);
    flex-wrap: wrap;
}

.achievement {
    background-color: var(--surface-container);
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    color: var(--primary);
    font-weight: 600;
}

/* Program Application Section */
.program-application-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.application-form {
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
    
    .categories-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .programs-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .process-steps {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .requirements-grid {
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
    
    .category-card {
        padding: var(--spacing-lg);
    }
    
    .category-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .category-icon .material-symbols-outlined {
        font-size: 1.5rem;
    }
    
    .program-card {
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
    
    .requirement-item {
        padding: var(--spacing-md);
    }
    
    .requirement-icon {
        width: 2.5rem;
        height: 2.5rem;
    }
    
    .requirement-icon .material-symbols-outlined {
        font-size: 1.25rem;
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
    
    .category-stats {
        flex-direction: column;
        gap: var(--spacing-md);
    }
    
    .skills-list {
        justify-content: center;
    }
}
</style>

<script>
// Quick action functions
function openSkillsTraining() {
    alert('Skills training programs would open here. In production, this would show all available skills training programs.');
}

function openEmployment() {
    alert('Employment services would open here. In production, this would show job opportunities and career services.');
}

function openEntrepreneurship() {
    alert('Entrepreneurship programs would open here. In production, this would show business development and startup support.');
}

function openLeadership() {
    alert('Leadership development programs would open here. In production, this would show leadership training and civic engagement.');
}

function openGrants() {
    alert('Grants and funding opportunities would open here. In production, this would show available funding programs.');
}

function openMentorship() {
    alert('Mentorship programs would open here. In production, this would show mentorship and career guidance opportunities.');
}

// Category actions
document.querySelectorAll('.category-card .btn-primary').forEach(button => {
    button.addEventListener('click', function() {
        const categoryName = this.closest('.category-card').querySelector('.category-title').textContent;
        alert(`Exploring ${categoryName} programs. In production, this would show detailed program listings.`);
    });
});

// Program actions
document.querySelectorAll('.program-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Apply')) {
        button.addEventListener('click', function() {
            document.getElementById('apply-programs').scrollIntoView({ behavior: 'smooth' });
        });
    }
});

document.querySelectorAll('.program-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Details')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
            alert(`Detailed view for: "${programTitle}"`);
        });
    }
    
    if (button.textContent.includes('Share')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
            alert(`Sharing: "${programTitle}" program`);
        });
    }
});

// Load more programs
function loadMorePrograms() {
    // In production, this would load more programs from the server
    alert('Loading more programs...');
}

// Program application form submission
document.getElementById('programApplicationForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate age requirement
    const dob = document.querySelector('input[type="date"]').value;
    if (dob) {
        const age = calculateAge(dob);
        if (age < 18 || age > 35) {
            alert('You must be between 18-35 years old to apply for youth programs.');
            return;
        }
    }
    
    alert('Program application submitted successfully! We will review your application and contact you within 7 business days.');
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

// Auto-refresh program data
function refreshProgramData() {
    // In production, this would fetch real-time program data
    console.log('Refreshing youth program data...');
}

// Refresh data every 60 seconds
setInterval(refreshProgramData, 60000);
</script>
