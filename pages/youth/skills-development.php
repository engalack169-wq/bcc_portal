<?php
/**
 * Bamenda City Council E-Governance Platform
 * Youth Skills Development Page
 */

// Set page metadata
$page_title = 'Youth Skills Development | Bamenda City Council';
$page_description = 'Access youth skills development programs, vocational training, career development, and employment opportunities for young people in Bamenda.';
$page_keywords = 'youth skills development, vocational training, career development, employment opportunities, Bamenda youth programs';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Youth', 'url' => '../index.php'],
    ['title' => 'Skills Development', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero youth-skills-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-youth-programs.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Youth Skills Development</span>
            <h1 class="hero-title">Youth Skills & Career Development</h1>
            <p class="hero-subtitle">
                Comprehensive skills development programs including vocational training, career guidance, entrepreneurship support, and employment opportunities for youth empowerment in Bamenda.
            </p>
            <div class="hero-actions">
                <a href="#training-programs" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">school</span>
                    Training Programs
                </a>
                <a href="#apply-skills" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">how_to_reg</span>
                    Apply for Training
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Skills Development Actions</h2>
            <p class="section-subtitle">Quick access to youth skills development programs and services</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openTrainingPrograms()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <h3 class="action-title">Training Programs</h3>
                <p class="action-description">Explore vocational and skills training programs</p>
            </div>

            <div class="action-card" onclick="openCareerGuidance()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">psychology</span>
                </div>
                <h3 class="action-title">Career Guidance</h3>
                <p class="action-description">Get career counseling and guidance services</p>
            </div>

            <div class="action-card" onclick="openInternships()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">business_center</span>
                </div>
                <h3 class="action-title">Internships</h3>
                <p class="action-description">Find internship and apprenticeship opportunities</p>
            </div>

            <div class="action-card" onclick="openJobPortal()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">work</span>
                </div>
                <h3 class="action-title">Job Portal</h3>
                <p class="action-description">Access job opportunities and employment services</p>
            </div>

            <div class="action-card" onclick="openMentorship()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">person_pin</span>
                </div>
                <h3 class="action-title">Mentorship</h3>
                <p class="action-description">Connect with mentors and industry professionals</p>
            </div>

            <div class="action-card" onclick="openCertification()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">verified</span>
                </div>
                <h3 class="action-title">Certification</h3>
                <p class="action-description">Get professional certifications and credentials</p>
            </div>
        </div>
    </div>
</section>

<!-- Skills Development Statistics -->
<section class="skills-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">1,234</div>
                    <div class="stat-label">Youth in Training</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+234 this year</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">construction</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">45</div>
                    <div class="stat-label">Skills Programs</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+8 new programs</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">work</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">78%</div>
                    <div class="stat-label">Employment Rate</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+12% improvement</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">business_center</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">156</div>
                    <div class="stat-label">Partner Companies</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+23 new partners</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Training Programs -->
<section class="training-programs-section" id="training-programs">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Skills Training Programs</h2>
            <p class="section-subtitle">Comprehensive vocational and technical skills training programs</p>
        </div>

        <div class="programs-grid">
            <!-- Digital Skills Program -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">computer</span>
                    </div>
                    <div class="program-badge popular">Popular</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Digital Skills & Technology</h3>
                    <p class="program-description">Comprehensive digital skills training including computer literacy, coding, web development, and digital marketing.</p>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">234</span>
                            <span class="stat-label">Current Trainees</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">3</span>
                            <span class="stat-label">Months Duration</span>
                        </div>
                    </div>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Computer Fundamentals</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Web Development</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Digital Marketing</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Data Analytics</span>
                        </div>
                    </div>
                    <div class="program-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Next Batch: April 1, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Cost: Free (Sponsored)</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Construction Skills Program -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">construction</span>
                    </div>
                    <div class="program-badge active">Active</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Construction & Building Trades</h3>
                    <p class="program-description">Hands-on training in construction skills including masonry, carpentry, plumbing, and electrical work.</p>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">156</span>
                            <span class="stat-label">Current Trainees</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">6</span>
                            <span class="stat-label">Months Duration</span>
                        </div>
                    </div>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Masonry & Bricklaying</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Carpentry & Woodwork</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Plumbing Installation</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Electrical Wiring</span>
                        </div>
                    </div>
                    <div class="program-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Next Batch: April 15, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Cost: ₣5,000</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Hospitality Program -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">restaurant</span>
                    </div>
                    <div class="program-badge active">Active</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Hospitality & Tourism</h3>
                    <p class="program-description">Professional training in hospitality services including hotel management, culinary arts, and customer service.</p>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">89</span>
                            <span class="stat-label">Current Trainees</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">4</span>
                            <span class="stat-label">Months Duration</span>
                        </div>
                    </div>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Culinary Arts</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Hotel Management</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Customer Service</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Event Planning</span>
                        </div>
                    </div>
                    <div class="program-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Next Batch: May 1, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Cost: ₣3,000</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Agriculture Program -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">agriculture</span>
                    </div>
                    <div class="program-badge active">Active</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Modern Agriculture</h3>
                    <p class="program-description">Training in modern agricultural practices, agribusiness, and sustainable farming techniques.</p>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">123</span>
                            <span class="stat-label">Current Trainees</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">5</span>
                            <span class="stat-label">Months Duration</span>
                        </div>
                    </div>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Crop Management</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Livestock Farming</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Agribusiness</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Sustainable Farming</span>
                        </div>
                    </div>
                    <div class="program-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Next Batch: April 20, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Cost: Free (Sponsored)</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Creative Arts Program -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">palette</span>
                    </div>
                    <div class="program-badge new">New</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Creative Arts & Design</h3>
                    <p class="program-description">Training in creative arts including graphic design, fashion design, photography, and multimedia production.</p>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">67</span>
                            <span class="stat-label">Current Trainees</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">4</span>
                            <span class="stat-label">Months Duration</span>
                        </div>
                    </div>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Graphic Design</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Fashion Design</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Photography</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Multimedia Production</span>
                        </div>
                    </div>
                    <div class="program-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Next Batch: May 15, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Cost: ₣4,000</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Business Skills Program -->
            <div class="program-card">
                <div class="program-header">
                    <div class="program-icon">
                        <span class="material-symbols-outlined">business</span>
                    </div>
                    <div class="program-badge active">Active</div>
                </div>
                <div class="program-content">
                    <h3 class="program-title">Business & Entrepreneurship</h3>
                    <p class="program-description">Comprehensive business skills training including entrepreneurship, financial management, and business planning.</p>
                    <div class="program-stats">
                        <div class="stat-item">
                            <span class="stat-number">145</span>
                            <span class="stat-label">Current Trainees</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">3</span>
                            <span class="stat-label">Months Duration</span>
                        </div>
                    </div>
                    <div class="program-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Business Planning</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Financial Management</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Marketing Skills</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Leadership Development</span>
                        </div>
                    </div>
                    <div class="program-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Next Batch: April 10, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Cost: ₣2,000</span>
                        </div>
                    </div>
                    <div class="program-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Career Guidance Services -->
<section class="career-guidance-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Career Guidance & Counseling</h2>
            <p class="section-subtitle">Professional career guidance and counseling services for youth</p>
        </div>

        <div class="guidance-content">
            <div class="guidance-overview">
                <h3 class="overview-title">Career Development Support</h3>
                <p class="overview-description">
                    Our career guidance services help young people make informed career decisions, develop professional skills, 
                    and navigate the job market successfully.
                </p>
            </div>

            <div class="guidance-services">
                <div class="service-card">
                    <div class="service-icon">
                        <span class="material-symbols-outlined">psychology</span>
                    </div>
                    <h3 class="service-title">Career Counseling</h3>
                    <p class="service-description">One-on-one career counseling to help identify strengths, interests, and suitable career paths.</p>
                    <div class="service-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Personality Assessment</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Career Path Planning</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Goal Setting</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">Book Session</button>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <span class="material-symbols-outlined">assessment</span>
                    </div>
                    <h3 class="service-title">Skills Assessment</h3>
                    <p class="service-description">Comprehensive skills assessment to identify existing skills and areas for development.</p>
                    <div class="service-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Skills Testing</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Aptitude Evaluation</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Development Planning</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">Take Assessment</button>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <span class="material-symbols-outlined">description</span>
                    </div>
                    <h3 class="service-title">Resume Building</h3>
                    <p class="service-description">Professional resume writing and CV development services to enhance job applications.</p>
                    <div class="service-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Resume Writing</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Cover Letter Writing</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Portfolio Development</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">Get Help</button>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <span class="material-symbols-outlined">record_voice_over</span>
                    </div>
                    <h3 class="service-title">Interview Preparation</h3>
                    <p class="service-description">Mock interviews and coaching to improve interview skills and confidence.</p>
                    <div class="service-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Mock Interviews</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Communication Skills</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Confidence Building</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">Schedule Practice</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Internship & Apprenticeship -->
<section class="internship-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Internships & Apprenticeships</h2>
            <p class="section-subtitle">Practical work experience opportunities with local businesses and organizations</p>
        </div>

        <div class="internship-grid">
            <!-- Digital Marketing Internship -->
            <div class="internship-card">
                <div class="internship-header">
                    <div class="internship-company">TechHub Bamenda</div>
                    <div class="internship-type">Internship</div>
                </div>
                <div class="internship-content">
                    <h3 class="internship-title">Digital Marketing Intern</h3>
                    <p class="internship-description">Gain hands-on experience in digital marketing, social media management, and content creation.</p>
                    <div class="internship-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 3 months</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Stipend: ₣30,000/month</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Location: City Center</span>
                        </div>
                    </div>
                    <div class="internship-requirements">
                        <h4 class="requirements-title">Requirements:</h4>
                        <ul class="requirements-list">
                            <li>Basic digital marketing knowledge</li>
                            <li>Social media proficiency</li>
                            <li>Good communication skills</li>
                            <li>Age: 18-25 years</li>
                        </ul>
                    </div>
                    <button class="btn btn-primary">Apply Now</button>
                </div>
            </div>

            <!-- Construction Apprenticeship -->
            <div class="internship-card">
                <div class="internship-header">
                    <div class="internship-company">BuildRight Construction</div>
                    <div class="internship-type">Apprenticeship</div>
                </div>
                <div class="internship-content">
                    <h3 class="internship-title">Construction Apprentice</h3>
                    <p class="internship-description">Learn practical construction skills including masonry, carpentry, and site management.</p>
                    <div class="internship-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 6 months</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Stipend: ₣25,000/month</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Location: Nkwen</span>
                        </div>
                    </div>
                    <div class="internship-requirements">
                        <h4 class="requirements-title">Requirements:</h4>
                        <ul class="requirements-list">
                            <li>Physical fitness</li>
                            <li>Willingness to learn</li>
                            <li>Basic math skills</li>
                            <li>Age: 18-30 years</li>
                        </ul>
                    </div>
                    <button class="btn btn-primary">Apply Now</button>
                </div>
            </div>

            <!-- Hospitality Internship -->
            <div class="internship-card">
                <div class="internship-header">
                    <div class="internship-company">Grand Hotel Bamenda</div>
                    <div class="internship-type">Internship</div>
                </div>
                <div class="internship-content">
                    <h3 class="internship-title">Hospitality Management Intern</h3>
                    <p class="internship-description">Experience in hotel operations, customer service, and hospitality management.</p>
                    <div class="internship-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 4 months</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Stipend: ₣20,000/month</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Location: City Center</span>
                        </div>
                    </div>
                    <div class="internship-requirements">
                        <h4 class="requirements-title">Requirements:</h4>
                        <ul class="requirements-list">
                            <li>Customer service skills</li>
                            <li>Good communication</li>
                            <li>Professional appearance</li>
                            <li>Age: 18-28 years</li>
                        </ul>
                    </div>
                    <button class="btn btn-primary">Apply Now</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Application Form -->
<section class="skills-application-section" id="apply-skills">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Apply for Skills Training</h2>
            <p class="section-subtitle">Register for our skills development programs and training opportunities</p>
        </div>

        <div class="application-content">
            <div class="application-info">
                <h3 class="info-title">Application Process</h3>
                <div class="process-steps">
                    <div class="step-item">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h4 class="step-title">Complete Application Form</h4>
                            <p class="step-description">Fill out the application form with your personal information and program preferences</p>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h4 class="step-title">Skills Assessment</h4>
                            <p class="step-description">Attend a skills assessment session to evaluate your current abilities and interests</p>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h4 class="step-title">Interview & Selection</h4>
                            <p class="step-description">Participate in an interview and selection process for your chosen program</p>
                        </div>
                    </div>

                    <div class="step-item">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h4 class="step-title">Enrollment & Orientation</h4>
                            <p class="step-description">Complete enrollment and attend orientation to begin your training program</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="application-form">
                <h3 class="form-title">Skills Training Application Form</h3>
                <form id="skillsApplicationForm">
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
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-input" placeholder="your@email.com">
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
                        <h4 class="section-title">Educational Background</h4>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Highest Education Level *</label>
                                <select class="form-select" required>
                                    <option value="">Select education level</option>
                                    <option value="primary">Primary School</option>
                                    <option value="secondary">Secondary School</option>
                                    <option value="high-school">High School</option>
                                    <option value="university">University</option>
                                    <option value="vocational">Vocational Training</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Field of Study (if applicable)</label>
                                <input type="text" class="form-input" placeholder="Enter your field of study">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Previous Training or Certifications</label>
                            <textarea class="form-textarea" rows="3" placeholder="List any previous training programs or certifications you have completed"></textarea>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Program Selection</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Preferred Training Program *</label>
                            <select class="form-select" required>
                                <option value="">Select program</option>
                                <option value="digital-skills">Digital Skills & Technology</option>
                                <option value="construction">Construction & Building Trades</option>
                                <option value="hospitality">Hospitality & Tourism</option>
                                <option value="agriculture">Modern Agriculture</option>
                                <option value="creative-arts">Creative Arts & Design</option>
                                <option value="business">Business & Entrepreneurship</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Second Choice Program</label>
                            <select class="form-select">
                                <option value="">Select second choice</option>
                                <option value="none">No second choice</option>
                                <option value="digital-skills">Digital Skills & Technology</option>
                                <option value="construction">Construction & Building Trades</option>
                                <option value="hospitality">Hospitality & Tourism</option>
                                <option value="agriculture">Modern Agriculture</option>
                                <option value="creative-arts">Creative Arts & Design</option>
                                <option value="business">Business & Entrepreneurship</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Preferred Start Date *</label>
                            <select class="form-select" required>
                                <option value="">Select start date</option>
                                <option value="april-1">April 1, 2024</option>
                                <option value="april-15">April 15, 2024</option>
                                <option value="may-1">May 1, 2024</option>
                                <option value="may-15">May 15, 2024</option>
                                <option value="flexible">Flexible</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Skills & Interests</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Current Skills *</label>
                            <textarea class="form-textarea" rows="3" placeholder="Describe your current skills and abilities" required></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Areas of Interest *</label>
                            <textarea class="form-textarea" rows="3" placeholder="What skills or careers are you most interested in?" required></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Career Goals *</label>
                            <textarea class="form-textarea" rows="3" placeholder="Describe your short-term and long-term career goals" required></textarea>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Additional Information</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Work Experience (if any)</label>
                            <textarea class="form-textarea" rows="3" placeholder="Describe any previous work experience"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Special Requirements or Accommodations</label>
                            <textarea class="form-textarea" rows="3" placeholder="Any special requirements or accommodations needed"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">How did you hear about our programs? *</label>
                            <select class="form-select" required>
                                <option value="">Select option</option>
                                <option value="friend">Friend/Word of mouth</option>
                                <option value="social-media">Social Media</option>
                                <option value="website">City Council Website</option>
                                <option value="community">Community Center</option>
                                <option value="school">School/College</option>
                                <option value="advertisement">Advertisement</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Commitment Agreement *</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="commitment" required>
                                    <span class="checkmark"></span>
                                    I commit to attending all training sessions, completing assignments, and actively participating in the program. I understand that regular attendance is required for successful completion.
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

<!-- Success Stories -->
<section class="success-stories-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Success Stories</h2>
            <p class="section-subtitle">Inspiring stories of youth who have benefited from our skills development programs</p>
        </div>

        <div class="stories-grid">
            <!-- Success Story 1 -->
            <div class="story-card">
                <div class="story-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                         alt="Success story of digital skills graduate">
                </div>
                <div class="story-content">
                    <h3 class="story-title">From Unemployed to Web Developer</h3>
                    <p class="story-description">
                        "The digital skills program transformed my life. I went from being unemployed to working as a web developer at a local tech company. The practical training and mentorship I received were invaluable."
                    </p>
                    <div class="story-author">
                        <div class="author-info">
                            <h4 class="author-name">Sarah N. Mankon</h4>
                            <span class="author-program">Digital Skills Graduate</span>
                        </div>
                        <div class="author-stats">
                            <span class="stat-item">Employed in 2 months</span>
                            <span class="stat-item">Salary: ₣80,000/month</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Success Story 2 -->
            <div class="story-card">
                <div class="story-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                         alt="Success story of construction skills graduate">
                </div>
                <div class="story-content">
                    <h3 class="story-title">Building My Future in Construction</h3>
                    <p class="story-description">
                        "The construction training program gave me the skills and confidence to start my own small construction business. Today, I employ 5 other youth and have completed over 20 projects."
                    </p>
                    <div class="story-author">
                        <div class="author-info">
                            <h4 class="author-name">James T. Nkwen</h4>
                            <span class="author-program">Construction Skills Graduate</span>
                        </div>
                        <div class="author-stats">
                            <span class="stat-item">Business Owner</span>
                            <span class="stat-item">5 Employees</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Success Story 3 -->
            <div class="story-card">
                <div class="story-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                         alt="Success story of hospitality graduate">
                </div>
                <div class="story-content">
                    <h3 class="story-title">Hospitality Career Success</h3>
                    <p class="story-description">
                        "The hospitality program opened doors I never imagined. I started as an intern and now work as a front office manager at one of Bamenda's top hotels. The training was comprehensive and practical."
                    </p>
                    <div class="story-author">
                        <div class="author-info">
                            <h4 class="author-name">Grace L. City Center</h4>
                            <span class="author-program">Hospitality Graduate</span>
                        </div>
                        <div class="author-stats">
                            <span class="stat-item">Front Office Manager</span>
                            <span class="stat-item">Salary: ₣60,000/month</span>
                        </div>
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
            <p class="section-subtitle">Common questions about youth skills development programs</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Who is eligible for the skills development programs?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Youth aged 15-35 who are residents of Bamenda are eligible for our skills development programs. Some programs may have specific age requirements or educational prerequisites. Priority is given to unemployed youth and those from disadvantaged backgrounds.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Are the training programs free?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Many of our programs are free or heavily subsidized through partnerships and sponsorships. Some programs may require a small registration fee or materials cost. We offer payment plans and scholarships for those who cannot afford the fees.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How long do the training programs last?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Program durations vary from 3 months to 6 months depending on the skills area and intensity of training. Most programs include both theoretical and practical components, with hands-on experience being a key part of the curriculum.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Do you provide job placement assistance?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, we provide job placement assistance through our network of partner companies, job fairs, and recruitment events. We also offer career counseling, resume building, and interview preparation to help graduates secure employment.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Can I apply for multiple programs?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>You can apply for multiple programs but will only be accepted into one at a time. We recommend choosing the program that best aligns with your career goals and interests. You can apply for additional programs after completing your current training.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What certificates are awarded upon completion?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Upon successful completion, participants receive a certificate of completion from Bamenda City Council. For some programs, additional industry-recognized certifications may be available through our partnerships with professional bodies.</p>
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
/* Youth Skills Development Page Styles */
.youth-skills-hero {
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
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.action-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
}

/* Skills Statistics Section */
.skills-stats-section {
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

/* Training Programs Section */
.training-programs-section {
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
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.detail-item .material-symbols-outlined {
    font-size: 1.25rem;
    color: var(--primary);
}

.program-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Career Guidance Section */
.career-guidance-section {
    padding: var(--spacing-3xl) 0;
}

.guidance-content {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xl);
}

.guidance-overview {
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

.guidance-services {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.service-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.service-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.service-icon {
    width: 3rem;
    height: 3rem;
    background-color: var(--tertiary);
    color: var(--on-tertiary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-md);
}

.service-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.service-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.service-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.service-features {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

/* Internship Section */
.internship-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.internship-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.internship-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.internship-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.internship-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.internship-company {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
}

.internship-type {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.internship-content {
    padding: var(--spacing-lg);
}

.internship-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.internship-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.internship-details {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

.internship-requirements {
    margin-bottom: var(--spacing-lg);
}

.requirements-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
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

/* Skills Application Section */
.skills-application-section {
    padding: var(--spacing-3xl) 0;
}

.application-content {
    display: grid;
    grid-template-columns: 1fr 2fr;
    gap: var(--spacing-2xl);
}

.application-info {
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

.process-steps {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-lg);
}

.step-item {
    display: flex;
    gap: var(--spacing-lg);
    align-items: flex-start;
}

.step-number {
    width: 2.5rem;
    height: 2.5rem;
    background-color: var(--tertiary);
    color: var(--on-tertiary);
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    flex-shrink: 0;
}

.step-content {
    flex: 1;
}

.step-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.step-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
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

.story-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.story-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
    font-style: italic;
}

.story-author {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: var(--spacing-lg);
}

.author-info {
    flex: 1;
}

.author-name {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-xs);
}

.author-program {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.author-stats {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xs);
    text-align: right;
}

.author-stats .stat-item {
    font-size: 0.75rem;
    color: var(--tertiary);
    font-weight: 600;
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
    
    .guidance-services {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .internship-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .application-content {
        grid-template-columns: 1fr;
        gap: var(--spacing-xl);
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
    
    .application-form {
        padding: var(--spacing-lg);
    }
    
    .process-steps {
        gap: var(--spacing-md);
    }
    
    .step-item {
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: var(--spacing-md);
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
    
    .story-author {
        flex-direction: column;
        gap: var(--spacing-md);
    }
    
    .author-stats {
        text-align: left;
    }
}
</style>

<script>
// Quick action functions
function openTrainingPrograms() {
    document.getElementById('training-programs').scrollIntoView({ behavior: 'smooth' });
}

function openCareerGuidance() {
    document.querySelector('.career-guidance-section').scrollIntoView({ behavior: 'smooth' });
}

function openInternships() {
    document.querySelector('.internship-section').scrollIntoView({ behavior: 'smooth' });
}

function openJobPortal() {
    alert('Job portal would open here. In production, this would show available job opportunities, job search tools, and employment resources.');
}

function openMentorship() {
    alert('Mentorship program would open here. In production, this would show mentorship opportunities, mentor profiles, and application forms.');
}

function openCertification() {
    alert('Certification portal would open here. In production, this would show available certifications, exam schedules, and credential verification.');
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
    if (button.textContent.includes('Details')) {
        button.addEventListener('click', function() {
            const programTitle = this.closest('.program-card').querySelector('.program-title').textContent;
            alert(`Viewing details for: "${programTitle}"`);
        });
    }
});

// Service actions
document.querySelectorAll('.service-card .btn-primary').forEach(button => {
    if (button.textContent.includes('Book')) {
        button.addEventListener('click', function() {
            const serviceTitle = this.closest('.service-card').querySelector('.service-title').textContent;
            alert(`Booking session for: "${serviceTitle}"`);
        });
    }
    
    if (button.textContent.includes('Take')) {
        button.addEventListener('click', function() {
            const serviceTitle = this.closest('.service-card').querySelector('.service-title').textContent;
            alert(`Starting: "${serviceTitle}"`);
        });
    }
    
    if (button.textContent.includes('Get')) {
        button.addEventListener('click', this() {
            const serviceTitle = this.closest('.service-card').querySelector('.service-title').textContent;
            alert(`Getting help with: "${serviceTitle}"`);
        });
    }
    
    if (button.textContent.includes('Schedule')) {
        button.addEventListener('click', function() {
            const serviceTitle = this.closest('.service-card').querySelector('.service-title').textContent;
            alert(`Scheduling: "${serviceTitle}"`);
        });
    }
});

// Internship actions
document.querySelectorAll('.internship-card .btn-primary').forEach(button => {
    if (button.textContent.includes('Apply')) {
        button.addEventListener('click', function() {
            const internshipTitle = this.closest('.internship-card').querySelector('.internship-title').textContent;
            const company = this.closest('.internship-card').querySelector('.internship-company').textContent;
            alert(`Applying for: "${internshipTitle}" at ${company}`);
        });
    }
});

// Skills application form submission
document.getElementById('skillsApplicationForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate required fields
    const fullName = document.querySelector('input[placeholder*="name"]').value;
    const dateOfBirth = document.querySelector('input[type="date"]').value;
    const gender = document.querySelector('select[required]').value;
    const phone = document.querySelector('input[placeholder*="phone"]').value;
    const area = document.querySelectorAll('select[required]')[1].value;
    const educationLevel = document.querySelectorAll('select[required]')[2].value;
    const program = document.querySelectorAll('select[required]')[3].value;
    const startDate = document.querySelectorAll('select[required]')[4].value;
    const currentSkills = document.querySelector('textarea[required]').value;
    const interests = document.querySelectorAll('textarea[required]')[1].value;
    const goals = document.querySelectorAll('textarea[required]')[2].value;
    const howHeard = document.querySelectorAll('select[required]')[5].value;
    const commitment = document.querySelector('input[name="commitment"]:checked');
    
    if (!fullName || !dateOfBirth || !gender || !phone || !area || !educationLevel || !program || !startDate || !currentSkills || !interests || !goals || !howHeard || !commitment) {
        alert('Please fill in all required fields and accept the commitment agreement.');
        return;
    }
    
    // Validate age requirement
    const age = calculateAge(dateOfBirth);
    if (age < 15 || age > 35) {
        alert('You must be between 15-35 years old to apply for youth skills development programs.');
        return;
    }
    
    alert('Skills training application submitted successfully! We will review your application and contact you within 5 business days for skills assessment and next steps.');
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

// Auto-refresh skills statistics
function refreshSkillsStats() {
    // In production, this would fetch real-time skills statistics
    console.log('Refreshing skills development statistics...');
}

// Refresh statistics every 60 seconds
setInterval(refreshSkillsStats, 60000);
</script>
