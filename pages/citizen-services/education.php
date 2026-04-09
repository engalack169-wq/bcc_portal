<?php
/**
 * Bamenda City Council E-Governance Platform
 * Civic Education Page
 */

// Set page metadata
$page_title = 'Civic Education | Bamenda City Council';
$page_description = 'Access civic education resources, learn about local government, and understand your rights and responsibilities.';
$page_keywords = 'civic education, local government, citizen rights, civic responsibilities, Bamenda';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Services', 'url' => 'services.php'],
    ['title' => 'Civic Education', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero education-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-government-building.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Civic Education</span>
            <h1 class="hero-title">Learn & Engage</h1>
            <p class="hero-subtitle">
                Discover comprehensive civic education resources to understand local government, your rights, and how to participate in community development.
            </p>
            <div class="hero-actions">
                <a href="#learning-modules" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">school</span>
                    Start Learning
                </a>
                <a href="#interactive-tools" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">touch_app</span>
                    Interactive Tools
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Learning Modules -->
<section class="learning-modules-section" id="learning-modules">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Learning Modules</h2>
            <p class="section-subtitle">Structured courses on civic education and governance</p>
        </div>

        <div class="modules-grid">
            <div class="module-card">
                <div class="module-icon">
                    <span class="material-symbols-outlined">account_balance</span>
                </div>
                <div class="module-content">
                    <h3 class="module-title">Understanding Local Government</h3>
                    <p class="module-description">Learn about the structure, functions, and responsibilities of Bamenda City Council.</p>
                    <div class="module-progress">
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 75%"></div>
                        </div>
                        <span class="progress-text">75% Complete</span>
                    </div>
                    <div class="module-stats">
                        <span class="stat-item">
                            <span class="material-symbols-outlined">menu_book</span>
                            <span>8 Lessons</span>
                        </span>
                        <span class="stat-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>2 Hours</span>
                        </span>
                        <span class="stat-item">
                            <span class="material-symbols-outlined">quiz</span>
                            <span>3 Quizzes</span>
                        </span>
                    </div>
                    <button class="btn btn-primary">Continue Learning</button>
                </div>
            </div>

            <div class="module-card">
                <div class="module-icon">
                    <span class="material-symbols-outlined">gavel</span>
                </div>
                <div class="module-content">
                    <h3 class="module-title">Citizen Rights & Responsibilities</h3>
                    <p class="module-description">Explore your constitutional rights and civic responsibilities as a Bamenda resident.</p>
                    <div class="module-progress">
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 45%"></div>
                        </div>
                        <span class="progress-text">45% Complete</span>
                    </div>
                    <div class="module-stats">
                        <span class="stat-item">
                            <span class="material-symbols-outlined">menu_book</span>
                            <span>6 Lessons</span>
                        </span>
                        <span class="stat-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>1.5 Hours</span>
                        </span>
                        <span class="stat-item">
                            <span class="material-symbols-outlined">quiz</span>
                            <span>2 Quizzes</span>
                        </span>
                    </div>
                    <button class="btn btn-primary">Continue Learning</button>
                </div>
            </div>

            <div class="module-card">
                <div class="module-icon">
                    <span class="material-symbols-outlined">how_to_vote</span>
                </div>
                <div class="module-content">
                    <h3 class="module-title">Democratic Participation</h3>
                    <p class="module-description">Understand voting processes, public consultations, and community engagement.</p>
                    <div class="module-progress">
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 30%"></div>
                        </div>
                        <span class="progress-text">30% Complete</span>
                    </div>
                    <div class="module-stats">
                        <span class="stat-item">
                            <span class="material-symbols-outlined">menu_book</span>
                            <span>7 Lessons</span>
                        </span>
                        <span class="stat-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>2 Hours</span>
                        </span>
                        <span class="stat-item">
                            <span class="material-symbols-outlined">quiz</span>
                            <span>4 Quizzes</span>
                        </span>
                    </div>
                    <button class="btn btn-primary">Continue Learning</button>
                </div>
            </div>

            <div class="module-card">
                <div class="module-icon">
                    <span class="material-symbols-outlined">public</span>
                </div>
                <div class="module-content">
                    <h3 class="module-title">Community Development</h3>
                    <p class="module-description">Learn about community projects, volunteer opportunities, and local initiatives.</p>
                    <div class="module-progress">
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 0%"></div>
                        </div>
                        <span class="progress-text">Not Started</span>
                    </div>
                    <div class="module-stats">
                        <span class="stat-item">
                            <span class="material-symbols-outlined">menu_book</span>
                            <span>5 Lessons</span>
                        </span>
                        <span class="stat-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>1 Hour</span>
                        </span>
                        <span class="stat-item">
                            <span class="material-symbols-outlined">quiz</span>
                            <span>2 Quizzes</span>
                        </span>
                    </div>
                    <button class="btn btn-primary">Start Module</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Educational Resources -->
<section class="educational-resources-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Educational Resources</h2>
            <p class="section-subtitle">Download guides, watch videos, and access informative materials</p>
        </div>

        <div class="resources-tabs">
            <button class="resource-tab active" data-tab="guides">Guides</button>
            <button class="resource-tab" data-tab="videos">Videos</button>
            <button class="resource-tab" data-tab="documents">Documents</button>
            <button class="resource-tab" data-tab="infographics">Infographics</button>
        </div>

        <div class="resources-content">
            <!-- Guides Tab -->
            <div class="resource-panel active" id="guides">
                <div class="resources-grid">
                    <div class="resource-card">
                        <div class="resource-icon">
                            <span class="material-symbols-outlined">description</span>
                        </div>
                        <h3 class="resource-title">Citizen's Guide to Local Government</h3>
                        <p class="resource-description">Comprehensive guide to understanding Bamenda City Council operations.</p>
                        <div class="resource-meta">
                            <span class="resource-type">PDF Guide</span>
                            <span class="resource-size">2.5 MB</span>
                            <span class="resource-pages">24 Pages</span>
                        </div>
                        <div class="resource-actions">
                            <button class="btn btn-sm btn-outline">Preview</button>
                            <button class="btn btn-sm btn-primary">Download</button>
                        </div>
                    </div>

                    <div class="resource-card">
                        <div class="resource-icon">
                            <span class="material-symbols-outlined">gavel</span>
                        </div>
                        <h3 class="resource-title">Your Rights as a Citizen</h3>
                        <p class="resource-description">Easy-to-understand explanation of your constitutional and local rights.</p>
                        <div class="resource-meta">
                            <span class="resource-type">PDF Guide</span>
                            <span class="resource-size">1.8 MB</span>
                            <span class="resource-pages">16 Pages</span>
                        </div>
                        <div class="resource-actions">
                            <button class="btn btn-sm btn-outline">Preview</button>
                            <button class="btn btn-sm btn-primary">Download</button>
                        </div>
                    </div>

                    <div class="resource-card">
                        <div class="resource-icon">
                            <span class="material-symbols-outlined">how_to_vote</span>
                        </div>
                        <h3 class="resource-title">Voting and Electoral Process</h3>
                        <p class="resource-description">Step-by-step guide to participating in local elections and voting.</p>
                        <div class="resource-meta">
                            <span class="resource-type">PDF Guide</span>
                            <span class="resource-size">2.1 MB</span>
                            <span class="resource-pages">20 Pages</span>
                        </div>
                        <div class="resource-actions">
                            <button class="btn btn-sm btn-outline">Preview</button>
                            <button class="btn btn-sm btn-primary">Download</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Videos Tab -->
            <div class="resource-panel" id="videos">
                <div class="video-grid">
                    <div class="video-card">
                        <div class="video-thumbnail">
                            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                                 alt="Video thumbnail showing local government overview">
                            <div class="play-button">
                                <span class="material-symbols-outlined">play_arrow</span>
                            </div>
                        </div>
                        <div class="video-info">
                            <h3 class="video-title">Introduction to Bamenda City Council</h3>
                            <p class="video-description">Learn about the structure and functions of your local government.</p>
                            <div class="video-meta">
                                <span class="video-duration">15:30</span>
                                <span class="video-views">2,456 views</span>
                                <span class="video-date">2 weeks ago</span>
                            </div>
                            <button class="btn btn-primary">Watch Now</button>
                        </div>
                    </div>

                    <div class="video-card">
                        <div class="video-thumbnail">
                            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                                 alt="Video thumbnail showing civic participation">
                            <div class="play-button">
                                <span class="material-symbols-outlined">play_arrow</span>
                            </div>
                        </div>
                        <div class="video-info">
                            <h3 class="video-title">How to Participate in Local Governance</h3>
                            <p class="video-description">Practical ways to get involved in community decision-making.</p>
                            <div class="video-meta">
                                <span class="video-duration">22:15</span>
                                <span class="video-views">1,823 views</span>
                                <span class="video-date">1 month ago</span>
                            </div>
                            <button class="btn btn-primary">Watch Now</button>
                        </div>
                    </div>

                    <div class="video-card">
                        <div class="video-thumbnail">
                            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                                 alt="Video thumbnail showing civic rights">
                            <div class="play-button">
                                <span class="material-symbols-outlined">play_arrow</span>
                            </div>
                        </div>
                        <div class="video-info">
                            <h3 class="video-title">Understanding Your Civic Rights</h3>
                            <p class="video-description">Comprehensive overview of citizen rights and protections.</p>
                            <div class="video-meta">
                                <span class="video-duration">18:45</span>
                                <span class="video-views">3,127 views</span>
                                <span class="video-date">3 weeks ago</span>
                            </div>
                            <button class="btn btn-primary">Watch Now</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Documents Tab -->
            <div class="resource-panel" id="documents">
                <div class="documents-list">
                    <div class="document-item">
                        <div class="document-icon">
                            <span class="material-symbols-outlined">article</span>
                        </div>
                        <div class="document-info">
                            <h3 class="document-title">Bamenda City Council Constitution</h3>
                            <p class="document-description">Official constitution and bylaws of Bamenda City Council.</p>
                            <div class="document-meta">
                                <span class="document-type">Official Document</span>
                                <span class="document-size">5.2 MB</span>
                                <span class="document-date">Updated: Jan 2024</span>
                            </div>
                        </div>
                        <div class="document-actions">
                            <button class="btn btn-sm btn-outline">View Online</button>
                            <button class="btn btn-sm btn-primary">Download PDF</button>
                        </div>
                    </div>

                    <div class="document-item">
                        <div class="document-icon">
                            <span class="material-symbols-outlined">policy</span>
                        </div>
                        <div class="document-info">
                            <h3 class="document-title">City Development Plan 2024-2028</h3>
                            <p class="document-description">Strategic development plan for Bamenda's future growth.</p>
                            <div class="document-meta">
                                <span class="document-type">Policy Document</span>
                                <span class="document-size">8.7 MB</span>
                                <span class="document-date">Published: Dec 2023</span>
                            </div>
                        </div>
                        <div class="document-actions">
                            <button class="btn btn-sm btn-outline">View Online</button>
                            <button class="btn btn-sm btn-primary">Download PDF</button>
                        </div>
                    </div>

                    <div class="document-item">
                        <div class="document-icon">
                            <span class="material-symbols-outlined">receipt_long</span>
                        </div>
                        <div class="document-info">
                            <h3 class="document-title">Annual Report 2023</h3>
                            <p class="document-description">Comprehensive annual report of council activities and achievements.</p>
                            <div class="document-meta">
                                <span class="document-type">Annual Report</span>
                                <span class="document-size">3.4 MB</span>
                                <span class="document-date">Published: Mar 2024</span>
                            </div>
                        </div>
                        <div class="document-actions">
                            <button class="btn btn-sm btn-outline">View Online</button>
                            <button class="btn btn-sm btn-primary">Download PDF</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Infographics Tab -->
            <div class="resource-panel" id="infographics">
                <div class="infographics-grid">
                    <div class="infographic-card">
                        <div class="infographic-image">
                            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                                 alt="Infographic showing local government structure">
                        </div>
                        <div class="infographic-info">
                            <h3 class="infographic-title">Local Government Structure</h3>
                            <p class="infographic-description">Visual guide to how Bamenda City Council is organized.</p>
                            <div class="infographic-actions">
                                <button class="btn btn-sm btn-outline">View Full Size</button>
                                <button class="btn btn-sm btn-primary">Download</button>
                            </div>
                        </div>
                    </div>

                    <div class="infographic-card">
                        <div class="infographic-image">
                            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                                 alt="Infographic showing civic participation process">
                        </div>
                        <div class="infographic-info">
                            <h3 class="infographic-title">Civic Participation Process</h3>
                            <p class="infographic-description">Step-by-step visual guide to community involvement.</p>
                            <div class="infographic-actions">
                                <button class="btn btn-sm btn-outline">View Full Size</button>
                                <button class="btn btn-sm btn-primary">Download</button>
                            </div>
                        </div>
                    </div>

                    <div class="infographic-card">
                        <div class="infographic-image">
                            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                                 alt="Infographic showing budget allocation">
                        </div>
                        <div class="infographic-info">
                            <h3 class="infographic-title">Budget Allocation</h3>
                            <p class="infographic-description">How council funds are distributed across services.</p>
                            <div class="infographic-actions">
                                <button class="btn btn-sm btn-outline">View Full Size</button>
                                <button class="btn btn-sm btn-primary">Download</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Interactive Tools -->
<section class="interactive-tools-section" id="interactive-tools">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Interactive Learning Tools</h2>
            <p class="section-subtitle">Engage with civic education through interactive experiences</p>
        </div>

        <div class="tools-grid">
            <div class="tool-card">
                <div class="tool-icon">
                    <span class="material-symbols-outlined">quiz</span>
                </div>
                <h3 class="tool-title">Civic Knowledge Quiz</h3>
                <p class="tool-description">Test your knowledge of local government and civic rights.</p>
                <div class="tool-stats">
                    <span class="stat-item">
                        <span class="material-symbols-outlined">help_outline</span>
                        <span>25 Questions</span>
                    </span>
                    <span class="stat-item">
                        <span class="material-symbols-outlined">timer</span>
                        <span>15 Minutes</span>
                    </span>
                    <span class="stat-item">
                        <span class="material-symbols-outlined">emoji_events</span>
                        <span>Certificate</span>
                    </span>
                </div>
                <button class="btn btn-primary">Start Quiz</button>
            </div>

            <div class="tool-card">
                <div class="tool-icon">
                    <span class="material-symbols-outlined">simulation</span>
                </div>
                <h3 class="tool-title">Council Meeting Simulator</h3>
                <p class="tool-description">Experience a virtual council meeting and participate in decision-making.</p>
                <div class="tool-stats">
                    <span class="stat-item">
                        <span class="material-symbols-outlined">groups</span>
                        <span>Interactive</span>
                    </span>
                    <span class="stat-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>30 Minutes</span>
                    </span>
                    <span class="stat-item">
                        <span class="material-symbols-outlined">psychology</span>
                        <span>Role-play</span>
                    </span>
                </div>
                <button class="btn btn-primary">Start Simulation</button>
            </div>

            <div class="tool-card">
                <div class="tool-icon">
                    <span class="material-symbols-outlined">map</span>
                </div>
                <h3 class="tool-title">Interactive City Map</h3>
                <p class="tool-description">Explore Bamenda's administrative divisions and service areas.</p>
                <div class="tool-stats">
                    <span class="stat-item">
                        <span class="material-symbols-outlined">explore</span>
                        <span>Interactive</span>
                    </span>
                    <span class="stat-item">
                        <span class="material-symbols-outlined">layers</span>
                        <span>Multi-layer</span>
                    </span>
                    <span class="stat-item">
                        <span class="material-symbols-outlined">info</span>
                        <span>Detailed</span>
                    </span>
                </div>
                <button class="btn btn-primary">Open Map</button>
            </div>

            <div class="tool-card">
                <div class="tool-icon">
                    <span class="material-symbols-outlined">assessment</span>
                </div>
                <h3 class="tool-title">Community Needs Assessment</h3>
                <p class="tool-description">Help identify community priorities and suggest solutions.</p>
                <div class="tool-stats">
                    <span class="stat-item">
                        <span class="material-symbols-outlined">analytics</span>
                        <span>Survey</span>
                    </span>
                    <span class="stat-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>20 Minutes</span>
                    </span>
                    <span class="stat-item">
                        <span class="material-symbols-outlined">insights</span>
                        <span>Results</span>
                    </span>
                </div>
                <button class="btn btn-primary">Start Assessment</button>
            </div>
        </div>
    </div>
</section>

<!-- Learning Progress -->
<section class="learning-progress-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Your Learning Progress</h2>
            <p class="section-subtitle">Track your civic education journey</p>
        </div>

        <div class="progress-overview">
            <div class="overview-stats">
                <div class="stat-card">
                    <div class="stat-icon">
                        <span class="material-symbols-outlined">school</span>
                    </div>
                    <div class="stat-content">
                        <div class="stat-number">4</div>
                        <div class="stat-label">Modules Started</div>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon">
                        <span class="material-symbols-outlined">task_alt</span>
                    </div>
                    <div class="stat-content">
                        <div class="stat-number">12</div>
                        <div class="stat-label">Lessons Completed</div>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon">
                        <span class="material-symbols-outlined">emoji_events</span>
                    </div>
                    <div class="stat-content">
                        <div class="stat-number">85%</div>
                        <div class="stat-label">Average Score</div>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon">
                        <span class="material-symbols-outlined">workspace_premium</span>
                    </div>
                    <div class="stat-content">
                        <div class="stat-number">2</div>
                        <div class="stat-label">Certificates Earned</div>
                    </div>
                </div>
            </div>

            <div class="recent-activity">
                <h3>Recent Activity</h3>
                <div class="activity-list">
                    <div class="activity-item">
                        <div class="activity-icon completed">
                            <span class="material-symbols-outlined">check_circle</span>
                        </div>
                        <div class="activity-content">
                            <h4>Completed Lesson: Council Structure</h4>
                            <p class="activity-description">Score: 92% • Understanding Local Government Module</p>
                            <span class="activity-time">2 hours ago</span>
                        </div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon quiz">
                            <span class="material-symbols-outlined">quiz</span>
                        </div>
                        <div class="activity-content">
                            <h4>Quiz Completed: Citizen Rights</h4>
                            <p class="activity-description">Score: 88% • Citizen Rights & Responsibilities Module</p>
                            <span class="activity-time">1 day ago</span>
                        </div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon video">
                            <span class="material-symbols-outlined">play_arrow</span>
                        </div>
                        <div class="activity-content">
                            <h4>Video Watched: Local Government Overview</h4>
                            <p class="activity-description">Completed: Introduction to Bamenda City Council</p>
                            <span class="activity-time">3 days ago</span>
                        </div>
                    </div>
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
/* Civic Education Page Styles */
.education-hero {
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-container) 100%);
}

/* Learning Modules Section */
.learning-modules-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.modules-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.module-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.module-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.module-icon {
    width: 4rem;
    height: 4rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: var(--spacing-lg);
}

.module-icon .material-symbols-outlined {
    font-size: 2rem;
}

.module-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.module-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.module-progress {
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
    background-color: var(--tertiary);
    transition: width 0.3s ease;
}

.progress-text {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    font-weight: 500;
}

.module-stats {
    display: flex;
    justify-content: space-between;
    margin-bottom: var(--spacing-lg);
}

.stat-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-xs);
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.stat-item .material-symbols-outlined {
    font-size: 1rem;
    color: var(--primary);
}

/* Educational Resources Section */
.educational-resources-section {
    padding: var(--spacing-3xl) 0;
}

.resources-tabs {
    display: flex;
    gap: var(--spacing-md);
    margin-bottom: var(--spacing-lg);
    border-bottom: 2px solid var(--outline-variant);
}

.resource-tab {
    padding: var(--spacing-md) var(--spacing-lg);
    background: none;
    border: none;
    color: var(--on-surface-variant);
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s ease;
    border-bottom: 2px solid transparent;
}

.resource-tab.active {
    color: var(--primary);
    border-bottom-color: var(--primary);
}

.resource-tab:hover {
    color: var(--primary);
}

.resources-content {
    margin-top: var(--spacing-lg);
}

.resource-panel {
    display: none;
}

.resource-panel.active {
    display: block;
}

.resources-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-lg);
}

.resource-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.resource-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.resource-icon {
    width: 3rem;
    height: 3rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: var(--spacing-md);
}

.resource-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.resource-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.resource-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-md);
}

.resource-meta {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-md);
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.resource-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Video Grid */
.video-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-lg);
}

.video-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    overflow: hidden;
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.video-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.video-thumbnail {
    position: relative;
    height: 200px;
    overflow: hidden;
}

.video-thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.play-button {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 3rem;
    height: 3rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
}

.play-button:hover {
    transform: translate(-50%, -50%) scale(1.1);
}

.play-button .material-symbols-outlined {
    font-size: 1.5rem;
}

.video-info {
    padding: var(--spacing-lg);
}

.video-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.video-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-md);
}

.video-meta {
    display: flex;
    gap: var(--spacing-md);
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    margin-bottom: var(--spacing-md);
}

/* Documents List */
.documents-list {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-lg);
}

.document-item {
    display: grid;
    grid-template-columns: auto 1fr auto;
    gap: var(--spacing-lg);
    align-items: center;
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.document-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.document-icon {
    width: 3rem;
    height: 3rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
}

.document-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.document-info {
    flex: 1;
}

.document-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.document-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-sm);
}

.document-meta {
    display: flex;
    gap: var(--spacing-md);
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.document-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Infographics Grid */
.infographics-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-lg);
}

.infographic-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    overflow: hidden;
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.infographic-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.infographic-image {
    height: 200px;
    overflow: hidden;
}

.infographic-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.infographic-info {
    padding: var(--spacing-lg);
}

.infographic-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.infographic-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-md);
}

.infographic-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Interactive Tools Section */
.interactive-tools-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.tools-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.tool-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.tool-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.tool-icon {
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

.tool-icon .material-symbols-outlined {
    font-size: 2rem;
}

.tool-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.tool-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.tool-stats {
    display: flex;
    justify-content: space-around;
    margin-bottom: var(--spacing-lg);
}

.tool-stats .stat-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: var(--spacing-xs);
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.tool-stats .stat-item .material-symbols-outlined {
    font-size: 1.25rem;
    color: var(--primary);
}

/* Learning Progress Section */
.learning-progress-section {
    padding: var(--spacing-3xl) 0;
}

.progress-overview {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--spacing-xl);
}

.overview-stats {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: var(--spacing-lg);
}

.recent-activity h3 {
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
}

.activity-list {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-lg);
}

.activity-item {
    display: grid;
    grid-template-columns: auto 1fr;
    gap: var(--spacing-lg);
    align-items: flex-start;
}

.activity-icon {
    width: 2.5rem;
    height: 2.5rem;
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.activity-icon.completed {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.activity-icon.quiz {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.activity-icon.video {
    background-color: var(--primary);
    color: var(--on-primary);
}

.activity-icon .material-symbols-outlined {
    font-size: 1.25rem;
}

.activity-content h4 {
    font-size: 1rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: var(--spacing-xs);
}

.activity-description {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    margin-bottom: var(--spacing-xs);
}

.activity-time {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

/* Responsive Design */
@media (max-width: 768px) {
    .modules-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .resources-tabs {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .resource-tab {
        text-align: center;
        border-bottom: 1px solid var(--outline-variant);
    }
    
    .resource-tab.active {
        border-bottom-color: var(--primary);
    }
    
    .resources-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .video-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .document-item {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
        text-align: center;
    }
    
    .document-actions {
        justify-content: center;
    }
    
    .infographics-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .tools-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .progress-overview {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .overview-stats {
        grid-template-columns: repeat(2, 1fr);
        gap: var(--spacing-md);
    }
}

@media (max-width: 480px) {
    .module-card {
        padding: var(--spacing-lg);
    }
    
    .module-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .module-icon .material-symbols-outlined {
        font-size: 1.5rem;
    }
    
    .resource-card {
        padding: var(--spacing-md);
    }
    
    .resource-icon {
        width: 2.5rem;
        height: 2.5rem;
    }
    
    .resource-icon .material-symbols-outlined {
        font-size: 1.25rem;
    }
    
    .tool-card {
        padding: var(--spacing-lg);
    }
    
    .tool-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .tool-icon .material-symbols-outlined {
        font-size: 1.5rem;
    }
    
    .overview-stats {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
}
</style>

<script>
// Resource tabs functionality
document.querySelectorAll('.resource-tab').forEach(tab => {
    tab.addEventListener('click', () => {
        // Remove active class from all tabs and panels
        document.querySelectorAll('.resource-tab').forEach(t => t.classList.remove('active'));
        document.querySelectorAll('.resource-panel').forEach(p => p.classList.remove('active'));
        
        // Add active class to clicked tab and corresponding panel
        tab.classList.add('active');
        const panelId = tab.getAttribute('data-tab');
        document.getElementById(panelId).classList.add('active');
    });
});

// Module actions
document.querySelectorAll('.module-card .btn-primary').forEach(button => {
    button.addEventListener('click', function() {
        const moduleTitle = this.closest('.module-card').querySelector('.module-title').textContent;
        alert(`Starting module: "${moduleTitle}"`);
    });
});

// Resource actions
document.querySelectorAll('.resource-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Download')) {
        button.addEventListener('click', function() {
            const resourceTitle = this.closest('.resource-card').querySelector('.resource-title').textContent;
            alert(`Downloading: "${resourceTitle}"`);
        });
    }
});

document.querySelectorAll('.resource-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Preview')) {
        button.addEventListener('click', function() {
            const resourceTitle = this.closest('.resource-card').querySelector('.resource-title').textContent;
            alert(`Previewing: "${resourceTitle}"`);
        });
    }
});

// Video actions
document.querySelectorAll('.video-card .btn-primary').forEach(button => {
    if (button.textContent.includes('Watch')) {
        button.addEventListener('click', function() {
            const videoTitle = this.closest('.video-card').querySelector('.video-title').textContent;
            alert(`Playing video: "${videoTitle}"`);
        });
    }
});

// Tool actions
document.querySelectorAll('.tool-card .btn-primary').forEach(button => {
    button.addEventListener('click', function() {
        const toolTitle = this.closest('.tool-card').querySelector('.tool-title').textContent;
        alert(`Starting: "${toolTitle}"`);
    });
});

// Document actions
document.querySelectorAll('.document-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Download')) {
        button.addEventListener('click', function() {
            const documentTitle = this.closest('.document-item').querySelector('.document-title').textContent;
            alert(`Downloading: "${documentTitle}"`);
        });
    }
});

document.querySelectorAll('.document-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('View')) {
        button.addEventListener('click', function() {
            const documentTitle = this.closest('.document-item').querySelector('.document-title').textContent;
            alert(`Viewing: "${documentTitle}"`);
        });
    }
});

// Infographic actions
document.querySelectorAll('.infographic-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('Download')) {
        button.addEventListener('click', function() {
            const infographicTitle = this.closest('.infographic-card').querySelector('.infographic-title').textContent;
            alert(`Downloading: "${infographicTitle}"`);
        });
    }
});

document.querySelectorAll('.infographic-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('View')) {
        button.addEventListener('click', function() {
            const infographicTitle = this.closest('.infographic-card').querySelector('.infographic-title').textContent;
            alert(`Viewing full size: "${infographicTitle}"`);
        });
    }
});

// Play button clicks
document.querySelectorAll('.play-button').forEach(button => {
    button.addEventListener('click', function() {
        const videoTitle = this.closest('.video-card').querySelector('.video-title').textContent;
        alert(`Playing: "${videoTitle}"`);
    });
});
</script>
