<?php
/**
 * Bamenda City Council E-Governance Platform
 * Youth Employment Page
 */

// Set page metadata
$page_title = 'Youth Employment | Bamenda City Council';
$page_description = 'Access youth employment opportunities, job search tools, career development, and employment support services for young people in Bamenda.';
$page_keywords = 'youth employment, job opportunities, career development, employment services, Bamenda youth jobs';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Youth', 'url' => '../index.php'],
    ['title' => 'Employment', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero youth-employment-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-youth-programs.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Youth Employment</span>
            <h1 class="hero-title">Youth Employment & Career Services</h1>
            <p class="hero-subtitle">
                Comprehensive youth employment services including job search tools, career development, training programs, and employment support to help young people build successful careers in Bamenda.
            </p>
            <div class="hero-actions">
                <a href="#job-opportunities" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">work</span>
                    Job Opportunities
                </a>
                <a href="#career-services" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">psychology</span>
                    Career Services
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Employment Actions</h2>
            <p class="section-subtitle">Quick access to youth employment services and opportunities</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openJobSearch()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">search</span>
                </div>
                <h3 class="action-title">Job Search</h3>
                <p class="action-description">Search and apply for available jobs</p>
            </div>

            <div class="action-card" onclick="openCareerServices()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">psychology</span>
                </div>
                <h3 class="action-title">Career Services</h3>
                <p class="action-description">Get career counseling and guidance</p>
            </div>

            <div class="action-card" onclick="openJobTraining()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">school</span>
                </div>
                <h3 class="action-title">Job Training</h3>
                <p class="action-description">Access job-specific training programs</p>
            </div>

            <div class="action-card" onclick="openInternships()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">business_center</span>
                </div>
                <h3 class="action-title">Internships</h3>
                <p class="action-description">Find internship opportunities</p>
            </div>

            <div class="action-card" onclick="openJobFair()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">event</span>
                </div>
                <h3 class="action-title">Job Fairs</h3>
                <p class="action-description">Attend job fairs and recruitment events</p>
            </div>

            <div class="action-card" onclick="openEmploymentSupport()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">support_agent</span>
                </div>
                <h3 class="action-title">Employment Support</h3>
                <p class="action-description">Get employment assistance and support</p>
            </div>
        </div>
    </div>
</section>

<!-- Employment Statistics -->
<section class="employment-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">work</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">3,456</div>
                    <div class="stat-label">Youth Employed</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+456 this year</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">business_center</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">234</div>
                    <div class="stat-label">Active Job Postings</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+89 new jobs</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">handshake</span>
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

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">verified</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">78%</div>
                    <div class="stat-label">Placement Success Rate</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+12% improvement</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Job Opportunities -->
<section class="job-opportunities-section" id="job-opportunities">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Current Job Opportunities</h2>
            <p class="section-subtitle">Latest job openings and employment opportunities for youth in Bamenda</p>
        </div>

        <div class="jobs-grid">
            <!-- Job 1 -->
            <div class="job-card">
                <div class="job-header">
                    <div class="job-company">TechHub Bamenda</div>
                    <div class="job-type full-time">Full Time</div>
                </div>
                <div class="job-content">
                    <h3 class="job-title">Junior Web Developer</h3>
                    <p class="job-description">Looking for a motivated junior web developer to join our growing tech team. Experience with HTML, CSS, and JavaScript required.</p>
                    <div class="job-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>City Center, Bamenda</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>₣80,000 - ₣120,000/month</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Full-time position</span>
                        </div>
                    </div>
                    <div class="job-requirements">
                        <h4 class="requirements-title">Requirements:</h4>
                        <ul class="requirements-list">
                            <li>Degree in Computer Science or related field</li>
                            <li>1+ years of web development experience</li>
                            <li>Knowledge of modern web technologies</li>
                            <li>Strong problem-solving skills</li>
                        </ul>
                    </div>
                    <div class="job-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Save Job</button>
                    </div>
                </div>
            </div>

            <!-- Job 2 -->
            <div class="job-card">
                <div class="job-header">
                    <div class="job-company">BuildRight Construction</div>
                    <div class="job-type full-time">Full Time</div>
                </div>
                <div class="job-content">
                    <h3 class="job-title">Construction Site Supervisor</h3>
                    <p class="job-description">Experienced construction supervisor needed to oversee building projects and manage construction teams.</p>
                    <div class="job-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Nkwen, Bamenda</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>₣60,000 - ₣90,000/month</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Full-time position</span>
                        </div>
                    </div>
                    <div class="job-requirements">
                        <h4 class="requirements-title">Requirements:</h4>
                        <ul class="requirements-list">
                            <li>3+ years construction experience</li>
                            <li>Construction supervision certification</li>
                            <li>Strong leadership skills</li>
                            <li>Knowledge of safety regulations</li>
                        </ul>
                    </div>
                    <div class="job-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Save Job</button>
                    </div>
                </div>
            </div>

            <!-- Job 3 -->
            <div class="job-card">
                <div class="job-header">
                    <div class="job-company">Grand Hotel Bamenda</div>
                    <div class="job-type full-time">Full Time</div>
                </div>
                <div class="job-content">
                    <h3 class="job-title">Front Office Manager</h3>
                    <p class="job-description">Seeking an experienced front office manager to lead our hotel reception and customer service team.</p>
                    <div class="job-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>City Center, Bamenda</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>₣70,000 - ₣100,000/month</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Full-time position</span>
                        </div>
                    </div>
                    <div class="job-requirements">
                        <h4 class="requirements-title">Requirements:</h4>
                        <ul class="requirements-list">
                            <li>Degree in Hospitality Management</li>
                            <li>2+ years hotel experience</li>
                            <li>Excellent communication skills</li>
                            <li>Customer service expertise</li>
                        </ul>
                    </div>
                    <div class="job-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Save Job</button>
                    </div>
                </div>
            </div>

            <!-- Job 4 -->
            <div class="job-card">
                <div class="job-header">
                    <div class="job-company">Bamenda Digital Agency</div>
                    <div class="job-type part-time">Part Time</div>
                </div>
                <div class="job-content">
                    <h3 class="job-title">Social Media Manager</h3>
                    <p class="job-description">Creative social media manager to handle client accounts and develop digital marketing strategies.</p>
                    <div class="job-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Mankon, Bamenda</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>₣40,000 - ₣60,000/month</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Part-time (20 hours/week)</span>
                        </div>
                    </div>
                    <div class="job-requirements">
                        <h4 class="requirements-title">Requirements:</h4>
                        <ul class="requirements-list">
                            <li>Experience with social media platforms</li>
                            <li>Creative writing and design skills</li>
                            <li>Digital marketing knowledge</li>
                            <li>Content creation experience</li>
                        </ul>
                    </div>
                    <div class="job-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Save Job</button>
                    </div>
                </div>
            </div>

            <!-- Job 5 -->
            <div class="job-card">
                <div class="job-header">
                    <div class="job-company">Bamenda Logistics Ltd</div>
                    <div class="job-type full-time">Full Time</div>
                </div>
                <div class="job-content">
                    <h3 class="job-title">Logistics Coordinator</h3>
                    <p class="job-description">Logistics coordinator needed to manage supply chain operations and coordinate delivery schedules.</p>
                    <div class="job-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>Industrial Area, Bamenda</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>₣55,000 - ₣85,000/month</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Full-time position</span>
                        </div>
                    </div>
                    <div class="job-requirements">
                        <h4 class="requirements-title">Requirements:</h4>
                        <ul class="requirements-list">
                            <li>Degree in Logistics or Business</li>
                            <li>Supply chain management experience</li>
                            <li>Strong organizational skills</li>
                            <li>Computer proficiency required</li>
                        </ul>
                    </div>
                    <div class="job-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Save Job</button>
                    </div>
                </div>
            </div>

            <!-- Job 6 -->
            <div class="job-card">
                <div class="job-header">
                    <div class="job-company">Bamenda Retail Group</div>
                    <div class="job-type internship">Internship</div>
                </div>
                <div class="job-content">
                    <h3 class="job-title">Marketing Intern</h3>
                    <p class="job-description">Marketing internship opportunity for recent graduates to gain hands-on experience in retail marketing.</p>
                    <div class="job-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">location_on</span>
                            <span>City Center, Bamenda</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>₣25,000/month stipend</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>3-month internship</span>
                        </div>
                    </div>
                    <div class="job-requirements">
                        <h4 class="requirements-title">Requirements:</h4>
                        <ul class="requirements-list">
                            <li>Recent graduate (within 2 years)</li>
                            <li>Degree in Marketing or Business</li>
                            <li>Strong communication skills</li>
                            <li>Eagerness to learn and grow</li>
                        </ul>
                    </div>
                    <div class="job-actions">
                        <button class="btn btn-sm btn-primary">Apply Now</button>
                        <button class="btn btn-sm btn-outline">Save Job</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Career Services -->
<section class="career-services-section" id="career-services">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Career Development Services</h2>
            <p class="section-subtitle">Comprehensive career counseling and development services for youth</p>
        </div>

        <div class="services-grid">
            <!-- Career Counseling -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">psychology</span>
                </div>
                <h3 class="service-title">Career Counseling</h3>
                <p class="service-description">Professional career counseling to help youth identify career paths, set goals, and develop action plans.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Career assessment</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Goal setting</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Action planning</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Progress tracking</span>
                    </div>
                </div>
                <button class="btn btn-primary">Book Session</button>
            </div>

            <!-- Skills Assessment -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">assessment</span>
                </div>
                <h3 class="service-title">Skills Assessment</h3>
                <p class="service-description">Comprehensive skills assessment to identify strengths, weaknesses, and development areas.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Skills testing</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Aptitude evaluation</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Personality assessment</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Career matching</span>
                    </div>
                </div>
                <button class="btn btn-primary">Take Assessment</button>
            </div>

            <!-- Resume Building -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <h3 class="service-title">Resume & CV Services</h3>
                <p class="service-description">Professional resume writing and CV development services to enhance job applications.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Resume writing</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Cover letter writing</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Portfolio development</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>LinkedIn optimization</span>
                    </div>
                </div>
                <button class="btn btn-primary">Get Help</button>
            </div>

            <!-- Interview Preparation -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">record_voice_over</span>
                </div>
                <h3 class="service-title">Interview Preparation</h3>
                <p class="service-description">Mock interviews and coaching to improve interview performance and confidence.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Mock interviews</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Interview coaching</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Body language training</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Confidence building</span>
                    </div>
                </div>
                <button class="btn btn-primary">Schedule Practice</button>
            </div>

            <!-- Job Search Training -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">search</span>
                </div>
                <h3 class="service-title">Job Search Training</h3>
                <p class="service-description">Training on effective job search strategies, networking, and application techniques.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Job search strategies</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Networking skills</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Online job search</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Application techniques</span>
                    </div>
                </div>
                <button class="btn btn-primary">Join Training</button>
            </div>

            <!-- Professional Development -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">trending_up</span>
                </div>
                <h3 class="service-title">Professional Development</h3>
                <p class="service-description">Professional development programs to enhance workplace skills and career growth.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Leadership skills</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Communication skills</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Time management</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Teamwork skills</span>
                    </div>
                </div>
                <button class="btn btn-primary">Enroll Now</button>
            </div>
        </div>
    </div>
</section>

<!-- Job Training Programs -->
<section class="job-training-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Job-Specific Training Programs</h2>
            <p class="section-subtitle">Specialized training programs to enhance employability and job readiness</p>
        </div>

        <div class="training-grid">
            <!-- Digital Marketing Training -->
            <div class="training-card">
                <div class="training-header">
                    <div class="training-icon">
                        <span class="material-symbols-outlined">campaign</span>
                    </div>
                    <div class="training-badge popular">Popular</div>
                </div>
                <div class="training-content">
                    <h3 class="training-title">Digital Marketing Mastery</h3>
                    <p class="training-description">Comprehensive digital marketing training covering SEO, social media, content marketing, and analytics.</p>
                    <div class="training-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 8 weeks</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Cost: ₣15,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">verified</span>
                            <span>Certification: Yes</span>
                        </div>
                    </div>
                    <div class="training-outcomes">
                        <h4 class="outcomes-title">Learning Outcomes:</h4>
                        <ul class="outcomes-list">
                            <li>SEO and SEM techniques</li>
                            <li>Social media marketing</li>
                            <li>Content creation and strategy</li>
                            <li>Google Analytics and reporting</li>
                        </ul>
                    </div>
                    <div class="training-actions">
                        <button class="btn btn-sm btn-primary">Enroll Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Customer Service Training -->
            <div class="training-card">
                <div class="training-header">
                    <div class="training-icon">
                        <span class="material-symbols-outlined">support_agent</span>
                    </div>
                    <div class="training-badge active">Active</div>
                </div>
                <div class="training-content">
                    <h3 class="training-title">Professional Customer Service</h3>
                    <p class="training-description">Customer service excellence training focusing on communication, problem-solving, and customer satisfaction.</p>
                    <div class="training-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 6 weeks</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Cost: ₣10,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">verified</span>
                            <span>Certification: Yes</span>
                        </div>
                    </div>
                    <div class="training-outcomes">
                        <h4 class="outcomes-title">Learning Outcomes:</h4>
                        <ul class="outcomes-list">
                            <li>Effective communication skills</li>
                            <li>Problem-solving techniques</li>
                            <li>Customer relationship management</li>
                            <li>Conflict resolution</li>
                        </ul>
                    </div>
                    <div class="training-actions">
                        <button class="btn btn-sm btn-primary">Enroll Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Sales Training -->
            <div class="training-card">
                <div class="training-header">
                    <div class="training-icon">
                        <span class="material-symbols-outlined">shopping_cart</span>
                    </div>
                    <div class="training-badge active">Active</div>
                </div>
                <div class="training-content">
                    <h3 class="training-title">Sales & Negotiation Skills</h3>
                    <p class="training-description">Professional sales training covering sales techniques, negotiation, customer relationship building, and closing strategies.</p>
                    <div class="training-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 8 weeks</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Cost: ₣12,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">verified</span>
                            <span>Certification: Yes</span>
                        </div>
                    </div>
                    <div class="training-outcomes">
                        <h4 class="outcomes-title">Learning Outcomes:</h4>
                        <ul class="outcomes-list">
                            <li>Sales techniques and strategies</li>
                            <li>Negotiation skills</li>
                            <li>Customer relationship building</li>
                            <li>Closing and follow-up techniques</li>
                        </ul>
                    </div>
                    <div class="training-actions">
                        <button class="btn btn-sm btn-primary">Enroll Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Office Administration -->
            <div class="training-card">
                <div class="training-header">
                    <div class="training-icon">
                        <span class="material-symbols-outlined">computer</span>
                    </div>
                    <div class="training-badge active">Active</div>
                </div>
                <div class="training-content">
                    <h3 class="training-title">Office Administration</h3>
                    <p class="training-description">Office administration training covering document management, communication, scheduling, and office software.</p>
                    <div class="training-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 6 weeks</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Cost: ₣8,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">verified</span>
                            <span>Certification: Yes</span>
                        </div>
                    </div>
                    <div class="training-outcomes">
                        <h4 class="outcomes-title">Learning Outcomes:</h4>
                        <ul class="outcomes-list">
                            <li>Office software proficiency</li>
                            <li>Document management</li>
                            <li>Professional communication</li>
                            <li>Time and task management</li>
                        </ul>
                    </div>
                    <div class="training-actions">
                        <button class="btn btn-sm btn-primary">Enroll Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Project Management -->
            <div class="training-card">
                <div class="training-header">
                    <div class="training-icon">
                        <span class="material-symbols-outlined">assignment</span>
                    </div>
                    <div class="training-badge new">New</div>
                </div>
                <div class="training-content">
                    <h3 class="training-title">Project Management Fundamentals</h3>
                    <p class="training-description">Project management training covering planning, execution, monitoring, and project closure processes.</p>
                    <div class="training-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 10 weeks</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Cost: ₣18,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">verified</span>
                            <span>Certification: Yes</span>
                        </div>
                    </div>
                    <div class="training-outcomes">
                        <h4 class="outcomes-title">Learning Outcomes:</h4>
                        <ul class="outcomes-list">
                            <li>Project planning and scheduling</li>
                            <li>Risk management</li>
                            <li>Team coordination</li>
                            <li>Project monitoring and control</li>
                        </ul>
                    </div>
                    <div class="training-actions">
                        <button class="btn btn-sm btn-primary">Enroll Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Data Entry -->
            <div class="training-card">
                <div class="training-header">
                    <div class="training-icon">
                        <span class="material-symbols-outlined">keyboard</span>
                    </div>
                    <div class="training-badge active">Active</div>
                </div>
                <div class="training-content">
                    <h3 class="training-title">Data Entry & Typing</h3>
                    <p class="training-description">Data entry and typing skills training focusing on speed, accuracy, and data management.</p>
                    <div class="training-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Duration: 4 weeks</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Cost: ₣5,000</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">verified</span>
                            <span>Certification: Yes</span>
                        </div>
                    </div>
                    <div class="training-outcomes">
                        <h4 class="outcomes-title">Learning Outcomes:</h4>
                        <ul class="outcomes-list">
                            <li>Touch typing skills</li>
                            <li>Data entry accuracy</li>
                            <li>Spreadsheet proficiency</li>
                            <li>Data validation techniques</li>
                        </ul>
                    </div>
                    <div class="training-actions">
                        <button class="btn btn-sm btn-primary">Enroll Now</button>
                        <button class="btn btn-sm btn-outline">View Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Employment Support -->
<section class="employment-support-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Employment Support Services</h2>
            <p class="section-subtitle">Comprehensive support services for youth employment and career development</p>
        </div>

        <div class="support-content">
            <div class="support-overview">
                <h3 class="overview-title">Employment Assistance</h3>
                <p class="overview-description">
                    Our employment support services provide comprehensive assistance to help youth find and maintain employment, 
                    including job matching, employer connections, and ongoing support.
                </p>
            </div>

            <div class="support-services">
                <!-- Job Matching -->
                <div class="support-service-card">
                    <div class="service-icon">
                        <span class="material-symbols-outlined">handshake</span>
                    </div>
                    <h3 class="service-title">Job Matching Service</h3>
                    <p class="service-description">Personalized job matching service connecting youth with suitable employment opportunities based on skills, interests, and qualifications.</p>
                    <div class="service-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Skills assessment</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Job matching</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Employer connections</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Follow-up support</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">Get Matched</button>
                </div>

                <!-- Employer Network -->
                <div class="support-service-card">
                    <div class="service-icon">
                        <span class="material-symbols-outlined">business</span>
                    </div>
                    <h3 class="service-title">Employer Network</h3>
                    <p class="service-description">Access to our network of partner employers who are actively seeking to hire young talent in Bamenda.</p>
                    <div class="service-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Partner companies</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Direct connections</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Company profiles</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Recruitment events</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">Browse Network</button>
                </div>

                <!-- Startup Support -->
                <div class="support-service-card">
                    <div class="service-icon">
                        <span class="material-symbols-outlined">rocket_launch</span>
                    </div>
                    <h3 class="service-title">Startup Support</h3>
                    <p class="service-description">Support for youth entrepreneurs looking to start their own businesses, including mentorship and funding connections.</p>
                    <div class="service-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Business planning</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Mentorship programs</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Funding assistance</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Incubator access</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">Get Support</button>
                </div>

                <!-- Career Workshops -->
                <div class="support-service-card">
                    <div class="service-icon">
                        <span class="material-symbols-outlined">event</span>
                    </div>
                    <h3 class="service-title">Career Workshops</h3>
                    <p class="service-description">Regular career development workshops covering various topics including job search, interview skills, and workplace success.</p>
                    <div class="service-features">
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Monthly workshops</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Expert speakers</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Hands-on learning</span>
                        </div>
                        <div class="feature-item">
                            <span class="material-symbols-outlined">check_circle</span>
                            <span>Networking opportunities</span>
                        </div>
                    </div>
                    <button class="btn btn-primary">View Schedule</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Job Application Form -->
<section class="job-application-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Job Application Portal</h2>
            <p class="section-subtitle">Submit your job application and manage your employment profile</p>
        </div>

        <div class="application-content">
            <div class="application-form">
                <h3 class="form-title">Create Employment Profile</h3>
                <form id="jobApplicationForm">
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
                        <h4 class="section-title">Education & Qualifications</h4>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Highest Education *</label>
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
                                <label class="form-label">Field of Study</label>
                                <input type="text" class="form-input" placeholder="Enter your field of study">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Qualifications & Certifications</label>
                            <textarea class="form-textarea" rows="3" placeholder="List your qualifications and certifications"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Languages Spoken *</label>
                            <input type="text" class="form-input" placeholder="List languages you speak (e.g., English, French, Pidgin)" required>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Work Experience</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Work Experience *</label>
                            <select class="form-select" required>
                                <option value="">Select experience level</option>
                                <option value="none">No experience</option>
                                <option value="less-1">Less than 1 year</option>
                                <option value="1-2">1-2 years</option>
                                <option value="2-5">2-5 years</option>
                                <option value="more-5">More than 5 years</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Previous Employment</label>
                            <textarea class="form-textarea" rows="4" placeholder="Describe your previous work experience, including company names, positions, and dates"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Skills & Expertise *</label>
                            <textarea class="form-textarea" rows="3" placeholder="List your key skills and areas of expertise" required></textarea>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Job Preferences</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Desired Job Type *</label>
                            <select class="form-select" required>
                                <option value="">Select job type</option>
                                <option value="full-time">Full-time</option>
                                <option value="part-time">Part-time</option>
                                <option value="contract">Contract</option>
                                <option value="internship">Internship</option>
                                <option value="temporary">Temporary</option>
                                <option value="flexible">Flexible</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Industry Sectors Interested In *</label>
                            <select class="form-select" required>
                                <option value="">Select industry</option>
                                <option value="technology">Technology & IT</option>
                                <option value="healthcare">Healthcare & Medical</option>
                                <option value="education">Education & Training</option>
                                <option value="retail">Retail & Sales</option>
                                <option value="hospitality">Hospitality & Tourism</option>
                                <option value="construction">Construction</option>
                                <option value="manufacturing">Manufacturing</option>
                                <option value="finance">Finance & Banking</option>
                                <option value="government">Government & Public Service</option>
                                <option value="ngo">NGO & Non-profit</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Expected Salary Range (XAF/month) *</label>
                            <select class="form-select" required>
                                <option value="">Select salary range</option>
                                <option value="below-30k">Below ₣30,000</option>
                                <option value="30k-50k">₣30,000 - ₣50,000</option>
                                <option value="50k-80k">₣50,000 - ₣80,000</option>
                                <option value="80k-120k">₣80,000 - ₣120,000</option>
                                <option value="120k-150k">₣120,000 - ₣150,000</option>
                                <option value="above-150k">Above ₣150,000</option>
                                <option value="negotiable">Negotiable</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Availability to Start *</label>
                            <select class="form-select" required>
                                <option value="">Select availability</option>
                                <option value="immediately">Immediately</option>
                                <option value="1-week">Within 1 week</option>
                                <option value="2-weeks">Within 2 weeks</option>
                                <option value="1-month">Within 1 month</option>
                                <option value="2-months">Within 2 months</option>
                                <option value="flexible">Flexible</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-section">
                        <h4 class="section-title">Additional Information</h4>
                        
                        <div class="form-group">
                            <label class="form-label">Career Goals</label>
                            <textarea class="form-textarea" rows="3" placeholder="Describe your short-term and long-term career goals"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Special Requirements</label>
                            <textarea class="form-textarea" rows="3" placeholder="Any special requirements for employment (e.g., flexible hours, remote work, accessibility needs)"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">How did you hear about our employment services? *</label>
                            <select class="form-select" required>
                                <option value="">Select option</option>
                                <option value="website">City Council Website</option>
                                <option value="social-media">Social Media</option>
                                <option value="friend">Friend/Word of mouth</option>
                                <option value="school">School/College</option>
                                <option value="workshop">Employment Workshop</option>
                                <option value="job-fair">Job Fair</option>
                                <option value="advertisement">Advertisement</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Resume/CV Upload</label>
                            <div class="file-upload">
                                <input type="file" id="resumeUpload" accept=".pdf,.doc,.docx">
                                <label for="resumeUpload" class="file-upload-label">
                                    <span class="material-symbols-outlined">upload_file</span>
                                    <span>Click to upload your resume/CV</span>
                                    <small>PDF, DOC, DOCX (Max 5MB)</small>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Declaration *</label>
                            <div class="checkbox-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="declaration" required>
                                    <span class="checkmark"></span>
                                    I declare that all information provided is accurate and complete. I understand that false information may result in the rejection of my application. I consent to the processing of my personal data for employment purposes.
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="reset" class="btn btn-outline">Reset</button>
                        <button type="submit" class="btn btn-primary">Create Profile</button>
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
            <p class="section-subtitle">Common questions about youth employment services</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How do I apply for jobs through the youth employment portal?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Create an employment profile by filling out the job application form. Once your profile is created, you can browse job opportunities, apply for positions, and track your application status. Employers can also search for candidates based on their requirements.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Are the training programs free?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Some training programs are free or heavily subsidized through government partnerships, while others require a nominal fee. Scholarships and payment plans are available for those who cannot afford the fees. Check specific program details for pricing information.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What career services are available?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>We offer comprehensive career services including career counseling, skills assessment, resume building, interview preparation, job search training, and professional development workshops. All services are designed to help youth make informed career decisions and succeed in the job market.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How can I improve my employability?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Improve employability by developing relevant skills through our training programs, gaining work experience through internships, building a professional network, creating a strong resume, and preparing well for interviews. Our career counselors can provide personalized guidance based on your goals.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Do you help with starting a business?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, we provide startup support including business planning assistance, mentorship programs, funding connections, and access to business incubators. We can help you develop your business idea and connect with resources to launch your venture successfully.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What age groups do you serve?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Our youth employment services are designed for young people aged 15-35. We have specific programs for different age groups, including high school students (15-18), college students (18-25), and young professionals (25-35).</p>
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
/* Youth Employment Page Styles */
.youth-employment-hero {
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

/* Employment Statistics Section */
.employment-stats-section {
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

/* Job Opportunities Section */
.job-opportunities-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.jobs-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.job-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.job-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.job-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.job-company {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
}

.job-type {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.job-type.full-time {
    background-color: var(--primary);
    color: var(--on-primary);
}

.job-type.part-time {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.job-type.internship {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.job-content {
    padding: var(--spacing-lg);
}

.job-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.job-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.job-details {
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

.job-requirements {
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

.job-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Career Services Section */
.career-services-section {
    padding: var(--spacing-3xl) 0;
}

.services-grid {
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
    background-color: var(--primary);
    color: var(--on-primary);
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

.feature-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    justify-content: center;
}

.feature-item .material-symbols-outlined {
    font-size: 1rem;
    color: var(--tertiary);
}

/* Job Training Section */
.job-training-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.training-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.training-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.training-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.training-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.training-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.training-icon .material-symbols-outlined {
    font-size: 2rem;
}

.training-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.training-badge.popular {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.training-badge.active {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.training-badge.new {
    background-color: var(--primary);
    color: var(--on-primary);
}

.training-content {
    padding: var(--spacing-lg);
}

.training-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.training-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.training-details {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

.training-outcomes {
    margin-bottom: var(--spacing-lg);
}

.outcomes-title {
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
    position: relative;
    padding-left: var(--spacing-lg);
    line-height: 1.5;
}

.outcomes-list li::before {
    content: '•';
    position: absolute;
    left: 0;
    color: var(--primary);
    font-weight: 700;
}

.training-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Employment Support Section */
.employment-support-section {
    padding: var(--spacing-3xl) 0;
}

.support-content {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-xl);
}

.support-overview {
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

.support-services {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.support-service-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.support-service-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.service-icon {
    width: 3rem;
    height: 3rem;
    background-color: var(--primary);
    color: var(--on-primary);
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

/* Job Application Section */
.job-application-section {
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
    border-color: var(--primary);
    background-color: var(--primary-container);
}

.file-upload-label .material-symbols-outlined {
    font-size: 2rem;
    color: var(--primary);
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
    
    .jobs-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .services-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .training-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .support-services {
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
    
    .job-card {
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
    
    .job-actions {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .job-actions .btn {
        width: 100%;
    }
    
    .training-actions {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .training-actions .btn {
        width: 100%;
    }
}
</style>

<script>
// Quick action functions
function openJobSearch() {
    document.getElementById('job-opportunities').scrollIntoView({ behavior: 'smooth' });
}

function openCareerServices() {
    document.getElementById('career-services').scrollIntoView({ behavior: 'smooth' });
}

function openJobTraining() {
    document.querySelector('.job-training-section').scrollIntoView({ behavior: 'smooth' });
}

function openInternships() {
    alert('Internship portal would open here. In production, this would show available internships, application forms, and internship program details.');
}

function openJobFair() {
    alert('Job fair calendar and registration would open here. In production, this would show upcoming job fairs, recruitment events, and registration forms.');
}

function openEmploymentSupport() {
    document.querySelector('.employment-support-section').scrollIntoView({ behavior: 'smooth' });
}

// Job actions
document.querySelectorAll('.job-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Apply')) {
        button.addEventListener('click', function() {
            const jobTitle = this.closest('.job-card').querySelector('.job-title').textContent;
            const company = this.closest('.job-card').querySelector('.job-company').textContent;
            alert(`Applying for: "${jobTitle}" at ${company}`);
        });
    }
});

document.querySelectorAll('.job-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Save')) {
        button.addEventListener('click', function() {
            const jobTitle = this.closest('.job-card').querySelector('.job-title').textContent;
            alert(`Saving job: "${jobTitle}" to your profile`);
        });
    }
});

// Career service actions
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
        button.addEventListener('click', function() {
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
    
    if (button.textContent.includes('Join')) {
        button.addEventListener('click', function() {
            const serviceTitle = this.closest('.service-card').querySelector('.service-title').textContent;
            alert(`Joining: "${serviceTitle}"`);
        });
    }
    
    if (button.textContent.includes('Enroll')) {
        button.addEventListener('click', function() {
            const serviceTitle = this.closest('.service-card').querySelector('.service-title').textContent;
            alert(`Enrolling in: "${serviceTitle}"`);
        });
    }
});

// Training actions
document.querySelectorAll('.training-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Enroll')) {
        button.addEventListener('click', function() {
            const trainingTitle = this.closest('.training-card').querySelector('.training-title').textContent;
            alert(`Enrolling in: "${trainingTitle}"`);
        });
    }
});

document.querySelectorAll('.training-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('View')) {
        button.addEventListener('click', function() {
            const trainingTitle = this.closest('.training-card').querySelector('.training-title').textContent;
            alert(`Viewing details for: "${trainingTitle}"`);
        });
    }
});

// Support service actions
document.querySelectorAll('.support-service-card .btn-primary').forEach(button => {
    if (button.textContent.includes('Get')) {
        button.addEventListener('click', function() {
            const serviceTitle = this.closest('.support-service-card').querySelector('.service-title').textContent;
            alert(`Getting: "${serviceTitle}"`);
        });
    }
    
    if (button.textContent.includes('Browse')) {
        button.addEventListener('click', function() {
            alert('Employer network portal would open here. In production, this would show partner companies and their job openings.');
        });
    }
    
    if (button.textContent.includes('View')) {
        button.addEventListener('click', function() {
            alert('Career workshop calendar would open here. In production, this would show upcoming workshops and registration forms.');
        });
    }
});

// Job application form submission
document.getElementById('jobApplicationForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate required fields
    const fullName = document.querySelector('input[placeholder*="name"]').value;
    const dateOfBirth = document.querySelector('input[type="date"]').value;
    const gender = document.querySelector('select[required]').value;
    const phone = document.querySelector('input[placeholder*="phone"]').value;
    const email = document.querySelector('input[placeholder*="email"]').value;
    const area = document.querySelectorAll('select[required]')[1].value;
    const education = document.querySelectorAll('select[required]')[2].value;
    const experience = document.querySelectorAll('select[required]')[3].value;
    const skills = document.querySelector('textarea[required]').value;
    const languages = document.querySelector('input[placeholder*="languages"]').value;
    const jobType = document.querySelectorAll('select[required]')[4].value;
    const industry = document.querySelectorAll('select[required]')[5].value;
    const salary = document.querySelectorAll('select[required]')[6].value;
    const availability = document.querySelectorAll('select[required]')[7].value;
    const howHeard = document.querySelectorAll('select[required]')[8].value;
    const declaration = document.querySelector('input[name="declaration"]:checked');
    
    if (!fullName || !dateOfBirth || !gender || !phone || !email || !area || !education || !experience || !skills || !languages || !jobType || !industry || !salary || !availability || !howHeard || !declaration) {
        alert('Please fill in all required fields and accept the declaration.');
        return;
    }
    
    // Validate age requirement
    const age = calculateAge(dateOfBirth);
    if (age < 15 || age > 35) {
        alert('You must be between 15-35 years old to use our youth employment services.');
        return;
    }
    
    alert('Employment profile created successfully! We will review your profile and match you with suitable job opportunities. You will receive notifications about relevant job openings and career events.');
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

// Auto-refresh employment statistics
function refreshEmploymentStats() {
    // In production, this would fetch real-time employment statistics
    console.log('Refreshing youth employment statistics...');
    
    // Simulate job posting updates
    const jobCountElement = document.querySelector('.stat-number');
    if (jobCountElement && jobCountElement.textContent.includes('+')) {
        // Simulate real-time job count
        const currentCount = parseInt(jobCountElement.textContent.replace('+', ''));
        const increment = Math.floor(Math.random() * 5) + 1;
        const newCount = currentCount + increment;
        jobCountElement.textContent = newCount;
    }
}

// Refresh statistics every 30 seconds
setInterval(refreshEmploymentStats, 30000);
</script>
