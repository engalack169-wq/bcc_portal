<?php
/**
 * Bamenda City Council E-Governance Platform
 * Public Polls Page
 */

// Set page metadata
$page_title = 'Public Polls | Bamenda City Council';
$page_description = 'Participate in public opinion polls, surveys, and community decision-making processes.';
$page_keywords = 'public polls, opinion polls, surveys, civic engagement, community feedback, Bamenda';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Civic', 'url' => '../index.php'],
    ['title' => 'Public Polls', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero polls-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-civic-engagement.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Public Polls</span>
            <h1 class="hero-title">Voice Your Opinion</h1>
            <p class="hero-subtitle">
                Participate in public opinion polls and help shape community decisions through democratic voting and feedback.
            </p>
            <div class="hero-actions">
                <a href="#active-polls" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">how_to_vote</span>
                    Active Polls
                </a>
                <a href="#poll-results" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">bar_chart</span>
                    View Results
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Poll Actions</h2>
            <p class="section-subtitle">Quick access to polling activities</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openActivePolls()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">how_to_vote</span>
                </div>
                <h3 class="action-title">Active Polls</h3>
                <p class="action-description">View and participate in ongoing public opinion polls</p>
            </div>

            <div class="action-card" onclick="openPastPolls()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">history</span>
                </div>
                <h3 class="action-title">Past Polls</h3>
                <p class="action-description">Review previous polls and their results</p>
            </div>

            <div class="action-card" onclick="openPollTrends()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">trending_up</span>
                </div>
                <h3 class="action-title">Poll Trends</h3>
                <p class="action-description">Analyze public opinion trends over time</p>
            </div>

            <div class="action-card" onclick="openSubmitPoll()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">add_circle</span>
                </div>
                <h3 class="action-title">Submit Poll Idea</h3>
                <p class="action-description">Suggest new poll topics and questions</p>
            </div>

            <div class="action-card" onclick="openPollGuidelines()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">menu_book</span>
                </div>
                <h3 class="action-title">Poll Guidelines</h3>
                <p class="action-description">Learn about poll participation and rules</p>
            </div>

            <div class="action-card" onclick="openPollImpact()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">insights</span>
                </div>
                <h3 class="action-title">Poll Impact</h3>
                <p class="action-description">See how poll results influence decisions</p>
            </div>
        </div>
    </div>
</section>

<!-- Poll Statistics -->
<section class="poll-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">how_to_vote</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">12</div>
                    <div class="stat-label">Active Polls</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+3 this week</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">8,456</div>
                    <div class="stat-label">Total Participants</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+523 today</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">poll</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">156</div>
                    <div class="stat-label">Total Polls Conducted</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+24 this month</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">check_circle</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">92%</div>
                    <div class="stat-label">Implementation Rate</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+3% improvement</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Active Polls -->
<section class="active-polls-section" id="active-polls">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Active Polls</h2>
            <p class="section-subtitle">Current public opinion polls open for your participation</p>
        </div>

        <div class="polls-filters">
            <div class="filter-row">
                <div class="form-group">
                    <label class="form-label">Category</label>
                    <select class="form-select" id="pollCategory">
                        <option value="">All Categories</option>
                        <option value="infrastructure">Infrastructure</option>
                        <option value="environmental">Environmental</option>
                        <option value="social">Social Services</option>
                        <option value="economic">Economic</option>
                        <option value="education">Education</option>
                        <option value="health">Health</option>
                        <option value="transport">Transportation</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Status</label>
                    <select class="form-select" id="pollStatus">
                        <option value="">All Status</option>
                        <option value="open">Open for Voting</option>
                        <option value="closing">Closing Soon</option>
                        <option value="new">New Poll</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Type</label>
                    <select class="form-select" id="pollType">
                        <option value="">All Types</option>
                        <option value="multiple">Multiple Choice</option>
                        <option value="ranking">Ranking Poll</option>
                        <option value="rating">Rating Poll</option>
                        <option value="yes-no">Yes/No Poll</option>
                    </select>
                </div>
                <button class="btn btn-primary" onclick="filterPolls()">Filter</button>
            </div>
        </div>

        <div class="polls-grid">
            <!-- Infrastructure Development Priority -->
            <div class="poll-card">
                <div class="poll-header">
                    <div class="poll-badge new">New Poll</div>
                    <div class="poll-status open">Open for Voting</div>
                </div>
                <div class="poll-content">
                    <h3 class="poll-title">Infrastructure Development Priority</h3>
                    <p class="poll-description">Which infrastructure project should be the top priority for Bamenda's development in 2024?</p>
                    <div class="poll-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">category</span>
                            <span>Infrastructure</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Closes: April 5, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>2,345 Participants</span>
                        </div>
                    </div>
                    
                    <div class="poll-options">
                        <div class="poll-option">
                            <label class="option-label">
                                <input type="radio" name="infrastructure-poll" value="roads">
                                <span class="option-text">Road Network Expansion</span>
                            </label>
                            <div class="option-progress">
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 35%"></div>
                                </div>
                                <span class="progress-text">35%</span>
                            </div>
                        </div>
                        
                        <div class="poll-option">
                            <label class="option-label">
                                <input type="radio" name="infrastructure-poll" value="water">
                                <span class="option-text">Water Supply System</span>
                            </label>
                            <div class="option-progress">
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 28%"></div>
                                </div>
                                <span class="progress-text">28%</span>
                            </div>
                        </div>
                        
                        <div class="poll-option">
                            <label class="option-label">
                                <input type="radio" name="infrastructure-poll" value="electricity">
                                <span class="option-text">Electricity Infrastructure</span>
                            </label>
                            <div class="option-progress">
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 22%"></div>
                                </div>
                                <span class="progress-text">22%</span>
                            </div>
                        </div>
                        
                        <div class="poll-option">
                            <label class="option-label">
                                <input type="radio" name="infrastructure-poll" value="public-buildings">
                                <span class="option-text">Public Buildings</span>
                            </label>
                            <div class="option-progress">
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 15%"></div>
                                </div>
                                <span class="progress-text">15%</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="poll-actions">
                        <button class="btn btn-sm btn-primary" onclick="voteInPoll('infrastructure')">Cast Your Vote</button>
                        <button class="btn btn-sm btn-outline" onclick="viewPollDetails('infrastructure')">View Details</button>
                        <button class="btn btn-sm btn-outline" onclick="sharePoll('infrastructure')">Share</button>
                    </div>
                </div>
            </div>

            <!-- Environmental Policy Support -->
            <div class="poll-card">
                <div class="poll-header">
                    <div class="poll-badge closing">Closing Soon</div>
                    <div class="poll-status open">Open for Voting</div>
                </div>
                <div class="poll-content">
                    <h3 class="poll-title">Environmental Policy Support</h3>
                    <p class="poll-description">Do you support the proposed single-use plastic ban in Bamenda?</p>
                    <div class="poll-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">category</span>
                            <span>Environmental</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Closes: March 28, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>1,876 Participants</span>
                        </div>
                    </div>
                    
                    <div class="poll-options yes-no">
                        <div class="poll-option">
                            <label class="option-label">
                                <input type="radio" name="environmental-poll" value="yes">
                                <span class="option-text">Yes, I support the ban</span>
                            </label>
                            <div class="option-progress">
                                <div class="progress-bar">
                                    <div class="progress-fill yes" style="width: 68%"></div>
                                </div>
                                <span class="progress-text">68%</span>
                            </div>
                        </div>
                        
                        <div class="poll-option">
                            <label class="option-label">
                                <input type="radio" name="environmental-poll" value="no">
                                <span class="option-text">No, I oppose the ban</span>
                            </label>
                            <div class="option-progress">
                                <div class="progress-bar">
                                    <div class="progress-fill no" style="width: 32%"></div>
                                </div>
                                <span class="progress-text">32%</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="poll-actions">
                        <button class="btn btn-sm btn-primary" onclick="voteInPoll('environmental')">Cast Your Vote</button>
                        <button class="btn btn-sm btn-outline" onclick="viewPollDetails('environmental')">View Details</button>
                        <button class="btn btn-sm btn-outline" onclick="sharePoll('environmental')">Share</button>
                    </div>
                </div>
            </div>

            <!-- Public Transport Improvement -->
            <div class="poll-card">
                <div class="poll-header">
                    <div class="poll-badge trending">Trending</div>
                    <div class="poll-status open">Open for Voting</div>
                </div>
                <div class="poll-content">
                    <h3 class="poll-title">Public Transport Improvement</h3>
                    <p class="poll-description">Rate the current quality of public transportation in Bamenda (1-5 stars)</p>
                    <div class="poll-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">category</span>
                            <span>Transportation</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Closes: April 10, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>3,234 Participants</span>
                        </div>
                    </div>
                    
                    <div class="poll-options rating">
                        <div class="rating-stars">
                            <span class="star" data-rating="1">★</span>
                            <span class="star" data-rating="2">★</span>
                            <span class="star" data-rating="3">★</span>
                            <span class="star" data-rating="4">★</span>
                            <span class="star" data-rating="5">★</span>
                        </div>
                        <div class="rating-summary">
                            <div class="average-rating">Average: 3.2 stars</div>
                            <div class="rating-distribution">
                                <div class="rating-bar">
                                    <span class="rating-label">5★</span>
                                    <div class="rating-progress">
                                        <div class="rating-fill" style="width: 15%"></div>
                                    </div>
                                    <span class="rating-percent">15%</span>
                                </div>
                                <div class="rating-bar">
                                    <span class="rating-label">4★</span>
                                    <div class="rating-progress">
                                        <div class="rating-fill" style="width: 25%"></div>
                                    </div>
                                    <span class="rating-percent">25%</span>
                                </div>
                                <div class="rating-bar">
                                    <span class="rating-label">3★</span>
                                    <div class="rating-progress">
                                        <div class="rating-fill" style="width: 35%"></div>
                                    </div>
                                    <span class="rating-percent">35%</span>
                                </div>
                                <div class="rating-bar">
                                    <span class="rating-label">2★</span>
                                    <div class="rating-progress">
                                        <div class="rating-fill" style="width: 20%"></div>
                                    </div>
                                    <span class="rating-percent">20%</span>
                                </div>
                                <div class="rating-bar">
                                    <span class="rating-label">1★</span>
                                    <div class="rating-progress">
                                        <div class="rating-fill" style="width: 5%"></div>
                                    </div>
                                    <span class="rating-percent">5%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="poll-actions">
                        <button class="btn btn-sm btn-primary" onclick="voteInPoll('transport')">Rate Now</button>
                        <button class="btn btn-sm btn-outline" onclick="viewPollDetails('transport')">View Details</button>
                        <button class="btn btn-sm btn-outline" onclick="sharePoll('transport')">Share</button>
                    </div>
                </div>
            </div>

            <!-- Youth Programs Priority -->
            <div class="poll-card">
                <div class="poll-header">
                    <div class="poll-badge important">Important</div>
                    <div class="poll-status open">Open for Voting</div>
                </div>
                <div class="poll-content">
                    <h3 class="poll-title">Youth Programs Priority</h3>
                    <p class="poll-description">Rank the following youth development programs by priority (1=highest priority)</p>
                    <div class="poll-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">category</span>
                            <span>Social Services</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Closes: April 15, 2024</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">groups</span>
                            <span>1,567 Participants</span>
                        </div>
                    </div>
                    
                    <div class="poll-options ranking">
                        <div class="ranking-list">
                            <div class="ranking-item">
                                <span class="ranking-number">1</span>
                                <span class="ranking-text">Skills Training Programs</span>
                                <span class="ranking-score">4.2 avg rank</span>
                            </div>
                            <div class="ranking-item">
                                <span class="ranking-number">2</span>
                                <span class="ranking-text">Sports & Recreation</span>
                                <span class="ranking-score">3.8 avg rank</span>
                            </div>
                            <div class="ranking-item">
                                <span class="ranking-number">3</span>
                                <span class="ranking-text">Entrepreneurship Support</span>
                                <span class="ranking-score">3.5 avg rank</span>
                            </div>
                            <div class="ranking-item">
                                <span class="ranking-number">4</span>
                                <span class="ranking-text">Cultural Activities</span>
                                <span class="ranking-score">2.9 avg rank</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="poll-actions">
                        <button class="btn btn-sm btn-primary" onclick="voteInPoll('youth')">Rank Now</button>
                        <button class="btn btn-sm btn-outline" onclick="viewPollDetails('youth')">View Details</button>
                        <button class="btn btn-sm btn-outline" onclick="sharePoll('youth')">Share</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="load-more-container">
            <button class="btn btn-outline" onclick="loadMorePolls()">Load More Polls</button>
        </div>
    </div>
</section>

<!-- Poll Results -->
<section class="poll-results-section" id="poll-results">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Recent Poll Results</h2>
            <p class="section-subtitle">Outcomes of recent public opinion polls</p>
        </div>

        <div class="results-grid">
            <div class="result-card">
                <div class="result-header">
                    <h3 class="result-title">Market Day Schedule</h3>
                    <div class="result-status completed">Completed</div>
                </div>
                <div class="result-content">
                    <p class="result-question">Should market days be extended to weekends?</p>
                    <div class="result-summary">
                        <div class="result-winner">
                            <span class="winner-label">Result:</span>
                            <span class="winner-text">YES - 78% voted in favor</span>
                        </div>
                        <div class="result-stats">
                            <span class="stat">Total Votes: 4,567</span>
                            <span class="stat">Participation: 82%</span>
                        </div>
                    </div>
                    <div class="result-breakdown">
                        <div class="breakdown-item">
                            <span class="option">Yes</span>
                            <div class="breakdown-bar">
                                <div class="breakdown-fill yes" style="width: 78%"></div>
                            </div>
                            <span class="percentage">78%</span>
                        </div>
                        <div class="breakdown-item">
                            <span class="option">No</span>
                            <div class="breakdown-bar">
                                <div class="breakdown-fill no" style="width: 22%"></div>
                            </div>
                            <span class="percentage">22%</span>
                        </div>
                    </div>
                    <div class="result-impact">
                        <span class="impact-label">Impact:</span>
                        <span class="impact-text">Weekend market days approved, starting May 2024</span>
                    </div>
                </div>
            </div>

            <div class="result-card">
                <div class="result-header">
                    <h3 class="result-title">Public Space Development</h3>
                    <div class="result-status completed">Completed</div>
                </div>
                <div class="result-content">
                    <p class="result-question">Which public space should be developed first?</p>
                    <div class="result-summary">
                        <div class="result-winner">
                            <span class="winner-label">Result:</span>
                            <span class="winner-text">City Park - 45% of votes</span>
                        </div>
                        <div class="result-stats">
                            <span class="stat">Total Votes: 3,234</span>
                            <span class="stat">Participation: 76%</span>
                        </div>
                    </div>
                    <div class="result-breakdown">
                        <div class="breakdown-item">
                            <span class="option">City Park</span>
                            <div class="breakdown-bar">
                                <div class="breakdown-fill winner" style="width: 45%"></div>
                            </div>
                            <span class="percentage">45%</span>
                        </div>
                        <div class="breakdown-item">
                            <span class="option">Sports Complex</span>
                            <div class="breakdown-bar">
                                <div class="breakdown-fill" style="width: 30%"></div>
                            </div>
                            <span class="percentage">30%</span>
                        </div>
                        <div class="breakdown-item">
                            <span class="option">Library</span>
                            <div class="breakdown-bar">
                                <div class="breakdown-fill" style="width: 25%"></div>
                            </div>
                            <span class="percentage">25%</span>
                        </div>
                    </div>
                    <div class="result-impact">
                        <span class="impact-label">Impact:</span>
                        <span class="impact-text">City Park development budget allocated for Q3 2024</span>
                    </div>
                </div>
            </div>

            <div class="result-card">
                <div class="result-header">
                    <h3 class="result-title">Traffic Management</h3>
                    <div class="result-status completed">Completed</div>
                </div>
                <div class="result-content">
                    <p class="result-question">Support for traffic calming measures in residential areas?</p>
                    <div class="result-summary">
                        <div class="result-winner">
                            <span class="winner-label">Result:</span>
                            <span class="winner-text">YES - 82% voted in favor</span>
                        </div>
                        <div class="result-stats">
                            <span class="stat">Total Votes: 2,890</span>
                            <span class="stat">Participation: 68%</span>
                        </div>
                    </div>
                    <div class="result-breakdown">
                        <div class="breakdown-item">
                            <span class="option">Yes</span>
                            <div class="breakdown-bar">
                                <div class="breakdown-fill yes" style="width: 82%"></div>
                            </div>
                            <span class="percentage">82%</span>
                        </div>
                        <div class="breakdown-item">
                            <span class="option">No</span>
                            <div class="breakdown-bar">
                                <div class="breakdown-fill no" style="width: 18%"></div>
                            </div>
                            <span class="percentage">18%</span>
                        </div>
                    </div>
                    <div class="result-impact">
                        <span class="impact-label">Impact:</span>
                        <span class="impact-text">Traffic calming measures implemented in 5 residential areas</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Submit Poll Idea -->
<section class="submit-poll-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Submit Poll Idea</h2>
            <p class="section-subtitle">Suggest topics for future public opinion polls</p>
        </div>

        <div class="poll-idea-form">
            <form id="pollIdeaForm">
                <div class="form-section">
                    <h3 class="section-title">Poll Details</h3>
                    
                    <div class="form-group">
                        <label class="form-label">Poll Title *</label>
                        <input type="text" class="form-input" placeholder="Enter a clear, concise title for your poll" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Category *</label>
                            <select class="form-select" required>
                                <option value="">Select category</option>
                                <option value="infrastructure">Infrastructure</option>
                                <option value="environmental">Environmental</option>
                                <option value="social">Social Services</option>
                                <option value="economic">Economic</option>
                                <option value="education">Education</option>
                                <option value="health">Health</option>
                                <option value="transport">Transportation</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Poll Type *</label>
                            <select class="form-select" required>
                                <option value="">Select poll type</option>
                                <option value="multiple">Multiple Choice</option>
                                <option value="yes-no">Yes/No</option>
                                <option value="rating">Rating Scale</option>
                                <option value="ranking">Ranking Poll</option>
                                <option value="open">Open-ended</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Poll Question *</label>
                        <textarea class="form-textarea" rows="3" placeholder="Write your poll question clearly and concisely" required></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Poll Options *</label>
                        <div id="pollOptions">
                            <div class="option-input-group">
                                <input type="text" class="form-input" placeholder="Option 1" required>
                                <button type="button" class="btn btn-sm btn-outline" onclick="removeOption(this)">Remove</button>
                            </div>
                            <div class="option-input-group">
                                <input type="text" class="form-input" placeholder="Option 2" required>
                                <button type="button" class="btn btn-sm btn-outline" onclick="removeOption(this)">Remove</button>
                            </div>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline" onclick="addOption()">Add Option</button>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Background Information</label>
                        <textarea class="form-textarea" rows="3" placeholder="Provide context or background information for this poll"></textarea>
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">Target Audience & Duration</h3>
                    
                    <div class="form-group">
                        <label class="form-label">Target Audience</label>
                        <select class="form-select">
                            <option value="all">All Residents</option>
                            <option value="adults">Adults (18+)</option>
                            <option value="youth">Youth (15-25)</option>
                            <option value="business">Business Owners</option>
                            <option value="students">Students</option>
                            <option value="seniors">Senior Citizens</option>
                        </select>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Poll Duration *</label>
                            <select class="form-select" required>
                                <option value="">Select duration</option>
                                <option value="1-week">1 Week</option>
                                <option value="2-weeks">2 Weeks</option>
                                <option value="1-month">1 Month</option>
                                <option value="ongoing">Ongoing</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Priority Level *</label>
                            <select class="form-select" required>
                                <option value="">Select priority</option>
                                <option value="high">High Priority</option>
                                <option value="medium">Medium Priority</option>
                                <option value="low">Low Priority</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">Contact Information</h3>
                    
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
                        <label class="form-label">Phone Number</label>
                        <input type="tel" class="form-input" placeholder="+237 233 000 000">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Organization (Optional)</label>
                        <input type="text" class="form-input" placeholder="Your organization or group">
                    </div>
                </div>

                <div class="form-actions">
                    <button type="reset" class="btn btn-outline">Reset</button>
                    <button type="submit" class="btn btn-primary">Submit Poll Idea</button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Poll Guidelines -->
<section class="poll-guidelines-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Poll Participation Guidelines</h2>
            <p class="section-subtitle">Rules and best practices for participating in public polls</p>
        </div>

        <div class="guidelines-content">
            <div class="guidelines-grid">
                <div class="guideline-card">
                    <div class="guideline-icon">
                        <span class="material-symbols-outlined">verified_user</span>
                    </div>
                    <h3 class="guideline-title">One Person, One Vote</h3>
                    <p class="guideline-description">Each person can vote only once per poll. Multiple votes will be disqualified.</p>
                </div>

                <div class="guideline-card">
                    <div class="guideline-icon">
                        <span class="material-symbols-outlined">schedule</span>
                    </div>
                    <h3 class="guideline-title">Vote Within Time</h3>
                    <p class="guideline-description">Make sure to cast your vote before the poll deadline. Late votes cannot be counted.</p>
                </div>

                <div class="guideline-card">
                    <div class="guideline-icon">
                        <span class="material-symbols-outlined">fact_check</span>
                    </div>
                    <h3 class="guideline-title">Informed Decisions</h3>
                    <p class="guideline-description">Read all poll information and context before voting to make informed choices.</p>
                </div>

                <div class="guideline-card">
                    <div class="guideline-icon">
                        <span class="material-symbols-outlined">privacy_tip</span>
                    </div>
                    <h3 class="guideline-title">Privacy Protected</h3>
                    <p class="guideline-description">Your individual vote is confidential. Only aggregate results are published.</p>
                </div>

                <div class="guideline-card">
                    <div class="guideline-icon">
                        <span class="material-symbols-outlined">gavel</span>
                    </div>
                    <h3 class="guideline-title">Fair Play</h3>
                    <p class="guideline-description">Do not attempt to influence others' votes or manipulate poll results.</p>
                </div>

                <div class="guideline-card">
                    <div class="guideline-icon">
                        <span class="material-symbols-outlined">diversity_3</span>
                    </div>
                    <h3 class="guideline-title">Inclusive Participation</h3>
                    <p class="guideline-description">Polls are open to all Bamenda residents regardless of background or status.</p>
                </div>
            </div>

            <div class="guidelines-faq">
                <h3>Frequently Asked Questions</h3>
                <div class="faq-list">
                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleFAQ(this)">
                            <span>How are poll results used?</span>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            Poll results inform council decisions, policy development, and priority setting. Results are presented to council committees and considered in decision-making processes.
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleFAQ(this)">
                            <span>Can I change my vote?</span>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            Once a vote is cast, it cannot be changed. Please consider your choice carefully before submitting your vote.
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleFAQ(this)">
                            <span>How do I know the results are accurate?</span>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            Polls use secure voting systems with verification measures to ensure accuracy and prevent fraud. Results are audited regularly.
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
/* Polls Page Styles */
.polls-hero {
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

/* Poll Statistics Section */
.poll-stats-section {
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

/* Active Polls Section */
.active-polls-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.polls-filters {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    margin-bottom: var(--spacing-xl);
}

.filter-row {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: var(--spacing-lg);
    align-items: end;
}

.polls-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.poll-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.poll-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.poll-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.poll-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.poll-badge.new {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.poll-badge.closing {
    background-color: var(--error);
    color: var(--on-error);
}

.poll-badge.trending {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.poll-badge.important {
    background-color: var(--primary);
    color: var(--on-primary);
}

.poll-status {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.poll-status.open {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.poll-content {
    padding: var(--spacing-lg);
}

.poll-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.poll-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.poll-details {
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

.poll-options {
    margin-bottom: var(--spacing-lg);
}

.poll-option {
    margin-bottom: var(--spacing-md);
}

.option-label {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    cursor: pointer;
    margin-bottom: var(--spacing-sm);
}

.option-label input[type="radio"] {
    width: 1.25rem;
    height: 1.25rem;
}

.option-text {
    font-weight: 500;
    color: var(--on-surface);
}

.option-progress {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
}

.progress-bar {
    flex: 1;
    height: 8px;
    background-color: var(--surface-container);
    border-radius: var(--radius-full);
    overflow: hidden;
}

.progress-fill {
    height: 100%;
    background-color: var(--primary);
    transition: width 0.3s ease;
}

.progress-text {
    font-size: 0.875rem;
    font-weight: 600;
    color: var(--primary);
    min-width: 3rem;
}

/* Yes/No Poll Styles */
.poll-options.yes-no .progress-fill.yes {
    background-color: var(--tertiary);
}

.poll-options.yes-no .progress-fill.no {
    background-color: var(--error);
}

/* Rating Poll Styles */
.poll-options.rating {
    text-align: center;
}

.rating-stars {
    display: flex;
    justify-content: center;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
    font-size: 2rem;
}

.star {
    color: var(--outline-variant);
    cursor: pointer;
    transition: color 0.2s ease;
}

.star:hover,
.star.active {
    color: var(--secondary);
}

.rating-summary {
    margin-top: var(--spacing-lg);
}

.average-rating {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.rating-distribution {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
}

.rating-bar {
    display: grid;
    grid-template-columns: 2rem 1fr 3rem;
    align-items: center;
    gap: var(--spacing-sm);
    font-size: 0.875rem;
}

.rating-label {
    font-weight: 600;
    color: var(--on-surface);
}

.rating-progress {
    height: 6px;
    background-color: var(--surface-container);
    border-radius: var(--radius-full);
    overflow: hidden;
}

.rating-fill {
    height: 100%;
    background-color: var(--secondary);
    transition: width 0.3s ease;
}

.rating-percent {
    text-align: right;
    font-weight: 600;
    color: var(--primary);
}

/* Ranking Poll Styles */
.poll-options.ranking {
    margin-bottom: var(--spacing-lg);
}

.ranking-list {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
}

.ranking-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-md);
    padding: var(--spacing-sm);
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
}

.ranking-number {
    width: 2rem;
    height: 2rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
}

.ranking-text {
    flex: 1;
    font-weight: 500;
    color: var(--on-surface);
}

.ranking-score {
    font-size: 0.875rem;
    color: var(--primary);
    font-weight: 600;
}

.poll-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Poll Results Section */
.poll-results-section {
    padding: var(--spacing-3xl) 0;
}

.results-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.result-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.result-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.result-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.result-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
}

.result-status.completed {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.result-content {
    padding: var(--spacing-lg);
}

.result-question {
    font-weight: 600;
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
}

.result-summary {
    margin-bottom: var(--spacing-lg);
}

.result-winner {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-sm);
}

.winner-label {
    font-weight: 600;
    color: var(--on-surface-variant);
}

.winner-text {
    font-weight: 700;
    color: var(--primary);
}

.result-stats {
    display: flex;
    gap: var(--spacing-lg);
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.result-breakdown {
    margin-bottom: var(--spacing-lg);
}

.breakdown-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-sm);
}

.breakdown-item .option {
    min-width: 8rem;
    font-weight: 500;
    color: var(--on-surface);
}

.breakdown-bar {
    flex: 1;
    height: 8px;
    background-color: var(--surface-container);
    border-radius: var(--radius-full);
    overflow: hidden;
}

.breakdown-fill {
    height: 100%;
    transition: width 0.3s ease;
}

.breakdown-fill.yes {
    background-color: var(--tertiary);
}

.breakdown-fill.no {
    background-color: var(--error);
}

.breakdown-fill.winner {
    background-color: var(--primary);
}

.percentage {
    min-width: 3rem;
    text-align: right;
    font-weight: 600;
    color: var(--primary);
}

.result-impact {
    padding: var(--spacing-sm);
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
    font-size: 0.875rem;
}

.impact-label {
    font-weight: 600;
    color: var(--on-surface-variant);
}

.impact-text {
    color: var(--primary);
    font-weight: 500;
}

/* Submit Poll Section */
.submit-poll-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.poll-idea-form {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-2xl);
    border: 1px solid var(--outline-variant);
    max-width: 800px;
    margin: 0 auto;
}

.option-input-group {
    display: flex;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-sm);
}

.option-input-group input {
    flex: 1;
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

/* Poll Guidelines Section */
.poll-guidelines-section {
    padding: var(--spacing-3xl) 0;
}

.guidelines-content {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-2xl);
}

.guidelines-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.guideline-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.guideline-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.guideline-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-lg);
}

.guideline-icon .material-symbols-outlined {
    font-size: 2rem;
}

.guideline-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.guideline-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
}

.guidelines-faq {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
}

.guidelines-faq h3 {
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
}

.faq-list {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-md);
}

.faq-item {
    border-bottom: 1px solid var(--outline-variant);
    padding-bottom: var(--spacing-md);
}

.faq-item:last-child {
    border-bottom: none;
}

.faq-question {
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
    font-weight: 600;
    color: var(--primary);
    padding: var(--spacing-sm);
    border-radius: var(--radius-md);
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
    padding: var(--spacing-md);
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
    
    .filter-row {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .polls-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .results-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .guidelines-grid {
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
    
    .poll-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .result-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .guideline-card {
        padding: var(--spacing-lg);
    }
    
    .guideline-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .guideline-icon .material-symbols-outlined {
        font-size: 1.5rem;
    }
    
    .poll-idea-form {
        padding: var(--spacing-lg);
    }
    
    .rating-stars {
        font-size: 1.5rem;
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
    
    .result-stats {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .breakdown-item {
        flex-wrap: wrap;
        gap: var(--spacing-xs);
    }
    
    .breakdown-item .option {
        min-width: auto;
    }
}
</style>

<script>
// Quick action functions
function openActivePolls() {
    document.getElementById('active-polls').scrollIntoView({ behavior: 'smooth' });
}

function openPastPolls() {
    alert('Past polls section would open here. In production, this would show completed polls with their results.');
}

function openPollTrends() {
    alert('Poll trends analysis would open here. In production, this would show opinion trends and analytics.');
}

function openSubmitPoll() {
    document.getElementById('submit-poll').scrollIntoView({ behavior: 'smooth' });
}

function openPollGuidelines() {
    document.getElementById('poll-guidelines').scrollIntoView({ behavior: 'smooth' });
}

function openPollImpact() {
    alert('Poll impact report would open here. In production, this would show how poll results influenced decisions.');
}

// Poll filtering
function filterPolls() {
    const category = document.getElementById('pollCategory').value;
    const status = document.getElementById('pollStatus').value;
    const type = document.getElementById('pollType').value;
    
    // In production, this would filter the polls
    alert(`Filtering polls by: ${category || 'All Categories'}, ${status || 'All Status'}, ${type || 'All Types'}`);
}

// Load more polls
function loadMorePolls() {
    // In production, this would load more polls from the server
    alert('Loading more polls...');
}

// Poll voting functions
function voteInPoll(pollType) {
    if (pollType === 'infrastructure') {
        const selectedOption = document.querySelector('input[name="infrastructure-poll"]:checked');
        if (selectedOption) {
            alert(`Vote cast for: ${selectedOption.value}. Thank you for participating!`);
        } else {
            alert('Please select an option before voting.');
        }
    } else if (pollType === 'environmental') {
        const selectedOption = document.querySelector('input[name="environmental-poll"]:checked');
        if (selectedOption) {
            alert(`Vote cast for: ${selectedOption.value}. Thank you for participating!`);
        } else {
            alert('Please select an option before voting.');
        }
    } else if (pollType === 'transport') {
        const selectedRating = document.querySelector('.rating-stars .star.active');
        if (selectedRating) {
            alert(`Rating of ${selectedRating.dataset.rating} stars submitted. Thank you for participating!`);
        } else {
            alert('Please select a rating before submitting.');
        }
    } else if (pollType === 'youth') {
        alert('Ranking poll interface would open here. In production, this would show a drag-and-drop ranking interface.');
    }
}

// Poll details and sharing
function viewPollDetails(pollType) {
    alert(`Detailed view for ${pollType} poll would open here. In production, this would show full poll information and context.`);
}

function sharePoll(pollType) {
    alert(`Sharing ${pollType} poll. In production, this would open sharing options for social media and messaging.`);
}

// Rating stars functionality
document.querySelectorAll('.rating-stars .star').forEach(star => {
    star.addEventListener('click', function() {
        const rating = this.dataset.rating;
        document.querySelectorAll('.rating-stars .star').forEach((s, index) => {
            if (index < rating) {
                s.classList.add('active');
            } else {
                s.classList.remove('active');
            }
        });
    });
});

// Poll idea form functions
function addOption() {
    const pollOptions = document.getElementById('pollOptions');
    const optionCount = pollOptions.children.length + 1;
    const newOption = document.createElement('div');
    newOption.className = 'option-input-group';
    newOption.innerHTML = `
        <input type="text" class="form-input" placeholder="Option ${optionCount}" required>
        <button type="button" class="btn btn-sm btn-outline" onclick="removeOption(this)">Remove</button>
    `;
    pollOptions.appendChild(newOption);
}

function removeOption(button) {
    const optionGroup = button.parentElement;
    const pollOptions = document.getElementById('pollOptions');
    if (pollOptions.children.length > 2) {
        optionGroup.remove();
        // Update placeholder numbers
        Array.from(pollOptions.children).forEach((child, index) => {
            child.querySelector('input').placeholder = `Option ${index + 1}`;
        });
    } else {
        alert('A poll must have at least 2 options.');
    }
}

// Poll idea form submission
document.getElementById('pollIdeaForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Poll idea submitted successfully! We will review your suggestion and consider it for future polls.');
    // In production, this would submit the poll idea
});

// FAQ toggle function
function toggleFAQ(element) {
    const faqItem = element.parentElement;
    faqItem.classList.toggle('active');
}

// Progress animation on scroll
window.addEventListener('scroll', function() {
    const progressBars = document.querySelectorAll('.progress-fill, .rating-fill, .breakdown-fill');
    progressBars.forEach(bar => {
        const rect = bar.getBoundingClientRect();
        const isVisible = rect.top < window.innerHeight && rect.bottom > 0;
        if (isVisible) {
            const width = bar.style.width;
            bar.style.width = '0';
            setTimeout(() => {
                bar.style.width = width;
            }, 100);
        }
    });
});

// Auto-refresh poll data
function refreshPollData() {
    // In production, this would fetch real-time poll data
    console.log('Refreshing poll data...');
}

// Refresh data every 30 seconds
setInterval(refreshPollData, 30000);
</script>
