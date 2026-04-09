<?php
/**
 * Bamenda City Council E-Governance Platform
 * Youth Council Participation Page
 */

// Set page metadata
$page_title = 'Youth Council | Bamenda City Council';
$page_description = 'Join the Bamenda Youth Council and participate in shaping our city\'s future. Apply for membership, submit proposals, and engage in civic decision-making.';
$page_keywords = 'youth council, Bamenda, civic engagement, youth participation, leadership, community service';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Youth', 'url' => '#'],
    ['title' => 'Youth Council', 'url' => '#']
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
            <span class="badge badge-secondary badge-lg">Youth Empowerment</span>
            <h1 class="hero-title">Lead the Change in Bamenda</h1>
            <p class="hero-subtitle">
                Your voice is the heartbeat of our municipality. Join the Youth Council, propose policies, and shape the future of our digital and physical landscape.
            </p>
            <div class="hero-actions">
                <button class="btn btn-lg btn-secondary" onclick="showApplicationForm()">
                    <span class="material-symbols-outlined">person_add</span>
                    Apply to Join
                </button>
                <a href="#schedule" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">event</span>
                    View Schedule
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Main Content Grid -->
<div class="container">
    <div class="main-grid">
        <!-- Policy Forum Section -->
        <section class="policy-forum">
            <div class="section-header">
                <h2 class="section-title">Policy Innovation Forum</h2>
                <p class="section-subtitle">Submit and vote on youth-centric legislative proposals</p>
                <button class="btn btn-primary" onclick="showProposalForm()">
                    <span class="material-symbols-outlined">add_circle</span>
                    New Proposal
                </button>
            </div>

            <div class="proposals-list">
                <!-- Proposal Item 1 -->
                <div class="proposal-card">
                    <div class="proposal-content">
                        <div class="proposal-meta">
                            <span class="badge badge-tertiary">Sustainability</span>
                            <span class="proposal-date">Submitted 2 days ago</span>
                        </div>
                        <h3 class="proposal-title">Urban Permaculture Initiatives for Bamenda II</h3>
                        <p class="proposal-description">
                            A proposal to transform vacant city-owned lots into community-managed vegetable gardens for local schools and neighborhoods, promoting food security and environmental education.
                        </p>
                        <div class="proposal-author">
                            <img src="assets/images/avatar-placeholder.png" alt="Author" class="author-avatar">
                            <div class="author-info">
                                <span class="author-name">Sarah Nkwen</span>
                                <span class="author-role">Environmental Advocate</span>
                            </div>
                        </div>
                    </div>
                    <div class="proposal-voting">
                        <button class="vote-btn upvote" onclick="voteProposal(this, 'up')">
                            <span class="material-symbols-outlined">expand_less</span>
                            <span class="vote-count">142</span>
                        </button>
                        <button class="vote-btn downvote" onclick="voteProposal(this, 'down')">
                            <span class="material-symbols-outlined">expand_more</span>
                            <span class="vote-count">8</span>
                        </button>
                    </div>
                </div>

                <!-- Proposal Item 2 -->
                <div class="proposal-card">
                    <div class="proposal-content">
                        <div class="proposal-meta">
                            <span class="badge badge-tertiary badge-lg">Digital Literacy</span>
                            <span class="proposal-date">Submitted 1 week ago</span>
                        </div>
                        <h3 class="proposal-title">Free Mesh-WiFi for Youth Hubs</h3>
                        <p class="proposal-description">
                            Providing high-speed reliable internet access to public youth centers to facilitate remote learning, freelancing opportunities, and digital skills development.
                        </p>
                        <div class="proposal-author">
                            <img src="assets/images/avatar-placeholder.png" alt="Author" class="author-avatar">
                            <div class="author-info">
                                <span class="author-name">Michael Mankon</span>
                                <span class="author-role">Tech Entrepreneur</span>
                            </div>
                        </div>
                    </div>
                    <div class="proposal-voting">
                        <button class="vote-btn upvote" onclick="voteProposal(this, 'up')">
                            <span class="material-symbols-outlined">expand_less</span>
                            <span class="vote-count">89</span>
                        </button>
                        <button class="vote-btn downvote" onclick="voteProposal(this, 'down')">
                            <span class="material-symbols-outlined">expand_more</span>
                            <span class="vote-count">3</span>
                        </button>
                    </div>
                </div>

                <!-- Proposal Item 3 -->
                <div class="proposal-card">
                    <div class="proposal-content">
                        <div class="proposal-meta">
                            <span class="badge badge-tertiary badge-xl">Sports & Recreation</span>
                            <span class="proposal-date">Submitted 2 weeks ago</span>
                        </div>
                        <h3 class="proposal-title">Community Sports Complex Development</h3>
                        <p class="proposal-description">
                            Building a multi-purpose sports facility with basketball courts, football fields, and training equipment to promote youth health and teamwork.
                        </p>
                        <div class="proposal-author">
                            <img src="assets/images/avatar-placeholder.png" alt="Author" class="author-avatar">
                            <div class="author-info">
                                <span class="author-name">James Bamendakwe</span>
                                <span class="author-role">Sports Coach</span>
                            </div>
                        </div>
                    </div>
                    <div class="proposal-voting">
                        <button class="vote-btn upvote" onclick="voteProposal(this, 'up')">
                            <span class="material-symbols-outlined">expand_less</span>
                            <span class="vote-count">156</span>
                        </button>
                        <button class="vote-btn downvote" onclick="voteProposal(this, 'down')">
                            <span class="material-symbols-outlined">expand_more</span>
                            <span class="vote-count">12</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="section-footer">
                <button class="btn btn-outline">
                    View All 24 Active Proposals
                    <span class="material-symbols-outlined">arrow_forward</span>
                </button>
            </div>
        </section>

        <!-- Application Form Section -->
        <aside class="application-sidebar">
            <div class="application-card">
                <h2 class="card-title">Join the Council</h2>
                <p class="card-description">
                    Are you between 18-30? We are looking for 12 new members to represent the various wards of Bamenda.
                </p>

                <form class="application-form" id="youth-council-application">
                    <div class="form-group">
                        <label class="form-label" for="full-name">Full Name</label>
                        <input type="text" id="full-name" class="form-input" placeholder="John Doe" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="email">Email Address</label>
                        <input type="email" id="email" class="form-input" placeholder="john@example.com" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="phone">Phone Number</label>
                        <input type="tel" id="phone" class="form-input" placeholder="+237 233 000 000" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="age">Age</label>
                        <input type="number" id="age" class="form-input" min="18" max="30" placeholder="25" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="ward">Ward of Residence</label>
                        <select id="ward" class="form-select" required>
                            <option value="">Select Ward</option>
                            <option value="nkwen">Nkwen</option>
                            <option value="mankon">Mankon</option>
                            <option value="bamendakwe">Bamendakwe</option>
                            <option value="bamenda-1">Bamenda I</option>
                            <option value="bamenda-2">Bamenda II</option>
                            <option value="bamenda-3">Bamenda III</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Interest Areas</label>
                        <div class="interest-grid">
                            <label class="interest-item">
                                <input type="checkbox" name="interests" value="culture">
                                <span>Culture</span>
                            </label>
                            <label class="interest-item">
                                <input type="checkbox" name="interests" value="tech">
                                <span>Tech</span>
                            </label>
                            <label class="interest-item">
                                <input type="checkbox" name="interests" value="climate">
                                <span>Climate</span>
                            </label>
                            <label class="interest-item">
                                <input type="checkbox" name="interests" value="sports">
                                <span>Sports</span>
                            </label>
                            <label class="interest-item">
                                <input type="checkbox" name="interests" value="education">
                                <span>Education</span>
                            </label>
                            <label class="interest-item">
                                <input type="checkbox" name="interests" value="health">
                                <span>Health</span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="motivation">Why do you want to join?</label>
                        <textarea id="motivation" class="form-textarea" rows="4" placeholder="Tell us about your motivation and what you hope to achieve..." required></textarea>
                    </div>

                    <button type="submit" class="btn btn-secondary btn-lg btn-full">
                        Submit Expression of Interest
                    </button>
                </form>
            </div>
        </aside>
    </div>
</div>

<!-- Town Hall Schedule Section -->
<section class="schedule-section" id="schedule">
    <div class="container">
        <div class="schedule-grid">
            <div class="schedule-content">
                <h2 class="section-title">Upcoming Town Halls</h2>
                <p class="section-subtitle">Direct access to city officials. These sessions are designed for open dialogue and rapid feedback.</p>

                <div class="events-list">
                    <!-- Event 1 -->
                    <div class="event-item">
                        <div class="event-date-badge">
                            <span class="event-month">Oct</span>
                            <span class="event-day">12</span>
                        </div>
                        <div class="event-details">
                            <h4 class="event-title">Youth Budgeting Session</h4>
                            <p class="event-location">
                                <span class="material-symbols-outlined">location_on</span>
                                Main Hall, Bamenda II Council
                            </p>
                            <button class="btn btn-primary btn-sm">Register</button>
                        </div>
                    </div>

                    <!-- Event 2 -->
                    <div class="event-item">
                        <div class="event-date-badge">
                            <span class="event-month">Oct</span>
                            <span class="event-day">24</span>
                        </div>
                        <div class="event-details">
                            <h4 class="event-title">Digital Economy Roundtable</h4>
                            <p class="event-location">
                                <span class="material-symbols-outlined">videocam</span>
                                Virtual Meeting (Zoom)
                            </p>
                            <button class="btn btn-primary btn-sm">Join Online</button>
                        </div>
                    </div>

                    <!-- Event 3 -->
                    <div class="event-item">
                        <div class="event-date-badge">
                            <span class="event-month">Nov</span>
                            <span class="event-day">05</span>
                        </div>
                        <div class="event-details">
                            <h4 class="event-title">Environmental Policy Workshop</h4>
                            <p class="event-location">
                                <span class="material-symbols-outlined">park</span>
                                Community Garden, Nkwen
                            </p>
                            <button class="btn btn-primary btn-sm">Register</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="schedule-image">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDN7r6a-NhfvCU8l6JoJxwEhm_PdMp3BVTTmG_hNNpr_uCQNIqiOsyrtFFbf-xQuYM1IrINeyhAkN-FB7gzYiL1O1k1PDoUlA-2e8ugnYaI6_4z1TyXBu3bJ56JWKaKIOcIK-Cf35xA3PZKgFFNr7mdMUB84QPXOxgcxz29axhMIX4kitCStc19raGPg-Y9txr5NDSASLuWXXz_adFzMt6Bfni7XIe_3it-h_Wk5SqM2PpkvrcD-oeBY8kgxC8BkUbewyYeMK6GqlvS" 
                     alt="a professional but vibrant conference room filled with focused young people engaged in a serious discussion with city council members">
                <div class="quote-overlay">
                    <blockquote class="mayor-quote">
                        "We don't just want to hear your complaints; we want to hear your solutions."
                        <cite>— Mayor of Bamenda II</cite>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Grant Winners Section -->
<section class="grants-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Grant Winners Showcase</h2>
            <p class="section-subtitle">Celebrating the local innovators who turned ideas into community action</p>
            <button class="btn btn-primary">Apply for Q4 Grants</button>
        </div>

        <div class="winners-grid">
            <!-- Winner 1 -->
            <div class="winner-card">
                <div class="winner-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDOiTTyi9232k3qKcZeyDQG1DW-Yuc8Ew3D1L0ZAHgyvAQqxoFDy2tO8xTTMmhMfVj0fpvp6nuYIGobeMU8_1rqAbqZML-aRr9xvkkQPhQJye-VcHIqM_AhmdjNFM2dXZV6h4nlDc3bxEdtyy5J8DeTgjhrNigNbxKcRm_mGpwiD-hbT4rt3IXS25t4CxDt_j6-5X_uzcg6ce5d2udWKM2q6hcdzJtRSLRYrYwr861vmMRpKI2zbZa1wcYTrWhKzLSOELG4a-1k6qUF" 
                         alt="portrait of a young african female entrepreneur smiling in front of her successful textile business startup">
                    <div class="winner-badge">Innovation Grant</div>
                </div>
                <div class="winner-content">
                    <h3 class="winner-title">Amara's Textile Hub</h3>
                    <p class="winner-description">Empowering 50+ local artisans through digital marketplace training and sustainable fashion initiatives.</p>
                    <a href="#" class="winner-link">
                        Read Story
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </div>
            </div>

            <!-- Winner 2 -->
            <div class="winner-card">
                <div class="winner-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuAfAqz3Xeot15e-mmQE6X3cNqBngkQOYtmqvP0kDtKWfg7jkZqmXswrIbJWPwq1ke00Jg269x0VqYGYTbd15yCJjhv0tciItxWBkcHRKulFnDDoBJLoOJRacIwuK2bMFqh3bDbJXiHiZkLCdmHTZuEF4E9Qqcgdt9LS0u8mS3wEUq13q_m-vP8BqJluUVYmnHC2w5CUd_sN-Nx-dEcJW4D6FcSKj9rZ5gcb7b6tlhkQSWZNGpl3p1b5WbMcNVIwm7_DgVKXPLPiwvBP" 
                         alt="a young man working on solar panels on a roof in a sunny suburban environment representing a green energy project">
                    <div class="winner-badge">Sustainability Fund</div>
                </div>
                <div class="winner-content">
                    <h3 class="winner-title">Solar Path Bamenda</h3>
                    <p class="winner-description">Installed 20 self-sustaining solar street lights in underprivileged wards, improving safety and reducing energy costs.</p>
                    <a href="#" class="winner-link">
                        Read Story
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
                </div>
            </div>

            <!-- Winner 3 -->
            <div class="winner-card">
                <div class="winner-image">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCnVPAAy2PEQKikG6dLqXRfQvKxOy21wF92O3hQ3VvECMkWQbTiR5tBceR1fonZRLX8p8S7J5Lv5o3gfNRxdpP-k-2MTwJ_4t7UsDnI_uGI4D-I7ih1oHpNDdjXdioBkp5GvLX0aJQg4FxFajhfIqMH_JTpr_szQsVEAihCjoDdPaExXNuI_Jkpu3Rp63xz_zgjLpWSbS_8w7fLerpZo6NzpWGrRL9IJ7sSwdLkQ7VfapLv-NNqClNy12F6xcyWGAD7Da3jTH-y3rfY" 
                         alt="a group of teenagers coding together in a bright modern tech lab with colorful graphics in the background">
                    <div class="winner-badge">Tech Catalyst</div>
                </div>
                <div class="winner-content">
                    <h3 class="winner-title">Code Bamenda II</h3>
                    <p class="winner-description">Launched a coding bootcamp that trained 200 high school students in web development and mobile app creation.</p>
                    <a href="#" class="winner-link">
                        Read Story
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </a>
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
/* Youth Council Specific Styles */
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

/* Main Grid Layout */
.main-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: var(--spacing-xl);
    margin: var(--spacing-3xl) 0;
}

/* Policy Forum Section */
.policy-forum {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.section-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-bottom: var(--spacing-xl);
    flex-wrap: wrap;
    gap: var(--spacing-md);
}

.section-title {
    font-size: 2rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.section-subtitle {
    color: var(--on-surface-variant);
    max-width: 400px;
}

.proposals-list {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-lg);
    margin-bottom: var(--spacing-xl);
}

.proposal-card {
    display: flex;
    align-items: flex-start;
    gap: var(--spacing-lg);
    padding: var(--spacing-lg);
    background-color: var(--surface-container-low);
    border-radius: var(--radius-lg);
    border: 1px solid transparent;
    transition: all 0.2s ease;
    cursor: pointer;
}

.proposal-card:hover {
    background-color: var(--surface-container);
    border-color: var(--primary/10);
    transform: translateY(-2px);
}

.proposal-content {
    flex: 1;
}

.proposal-meta {
    display: flex;
    align-items: center;
    gap: var(--spacing-md);
    margin-bottom: var(--spacing-sm);
}

.proposal-date {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.proposal-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
    transition: color 0.2s ease;
}

.proposal-card:hover .proposal-title {
    color: var(--primary-container);
}

.proposal-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-md);
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.proposal-author {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
}

.author-avatar {
    width: 2rem;
    height: 2rem;
    border-radius: 50%;
    object-fit: cover;
}

.author-info {
    display: flex;
    flex-direction: column;
}

.author-name {
    font-weight: 600;
    color: var(--on-surface);
    font-size: 0.875rem;
}

.author-role {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.proposal-voting {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: var(--spacing-xs);
    background-color: var(--surface-container-lowest);
    padding: var(--spacing-sm);
    border-radius: var(--radius-md);
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}

.vote-btn {
    display: flex;
    flex-direction: column;
    align-items: center;
    background: none;
    border: none;
    cursor: pointer;
    padding: var(--spacing-xs);
    border-radius: var(--radius-sm);
    transition: all 0.2s ease;
}

.vote-btn:hover {
    background-color: var(--surface-container);
}

.vote-btn.upvote:hover {
    color: var(--primary);
}

.vote-btn.downvote:hover {
    color: var(--error);
}

.vote-count {
    font-weight: 700;
    font-size: 0.875rem;
    color: var(--on-surface);
}

.section-footer {
    text-align: center;
    padding-top: var(--spacing-lg);
    border-top: 1px solid var(--outline-variant);
}

/* Application Sidebar */
.application-sidebar {
    position: sticky;
    top: 6rem;
    height: fit-content;
}

.application-card {
    background-color: var(--primary);
    color: var(--on-primary);
    padding: var(--spacing-xl);
    border-radius: var(--radius-lg);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
}

.card-title {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: var(--spacing-md);
}

.card-description {
    opacity: 0.9;
    margin-bottom: var(--spacing-lg);
    line-height: 1.6;
}

.application-form .form-label {
    color: var(--on-primary);
    opacity: 0.8;
}

.application-form .form-input,
.application-form .form-select,
.application-form .form-textarea {
    background-color: rgba(255, 255, 255, 0.1);
    border-color: rgba(255, 255, 255, 0.2);
    color: var(--on-primary);
}

.application-form .form-input::placeholder,
.application-form .form-textarea::placeholder {
    color: rgba(255, 255, 255, 0.6);
}

.application-form .form-input:focus,
.application-form .form-select:focus,
.application-form .form-textarea:focus {
    background-color: rgba(255, 255, 255, 0.15);
    border-color: var(--secondary-container);
}

.interest-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: var(--spacing-sm);
    margin-top: var(--spacing-sm);
}

.interest-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-xs);
    padding: var(--spacing-sm);
    background-color: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: var(--radius-sm);
    cursor: pointer;
    transition: all 0.2s ease;
}

.interest-item:hover {
    background-color: rgba(255, 255, 255, 0.1);
}

.interest-item input[type="checkbox"] {
    accent-color: var(--secondary-container);
}

.interest-item span {
    font-size: 0.875rem;
    color: var(--on-primary);
}

/* Schedule Section */
.schedule-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.schedule-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--spacing-xl);
    align-items: center;
}

.events-list {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-lg);
}

.event-item {
    display: flex;
    gap: var(--spacing-lg);
    padding: var(--spacing-lg);
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border-left: 4px solid var(--secondary-container);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    transition: all 0.2s ease;
}

.event-item:hover {
    transform: translateX(4px);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
}

.event-date-badge {
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

.event-details {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.event-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.event-location {
    display: flex;
    align-items: center;
    gap: var(--spacing-xs);
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    margin-bottom: var(--spacing-md);
}

.schedule-image {
    position: relative;
    border-radius: var(--radius-lg);
    overflow: hidden;
    aspect-ratio: 16/9;
}

.schedule-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.schedule-image:hover img {
    transform: scale(1.05);
}

.quote-overlay {
    position: absolute;
    bottom: var(--spacing-lg);
    left: var(--spacing-lg);
    right: var(--spacing-lg);
    padding: var(--spacing-lg);
    background-color: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    border-radius: var(--radius-lg);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
}

.mayor-quote {
    font-style: italic;
    color: var(--primary);
    font-weight: 600;
    margin: 0;
}

.mayor-quote cite {
    display: block;
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    font-style: normal;
    margin-top: var(--spacing-sm);
    font-weight: 600;
}

/* Grants Section */
.grants-section {
    padding: var(--spacing-3xl) 0;
}

.winners-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.winner-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.winner-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.winner-image {
    position: relative;
    aspect-ratio: 4/5;
    overflow: hidden;
}

.winner-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: grayscale(100%);
    transition: all 0.5s ease;
}

.winner-card:hover .winner-image img {
    filter: grayscale(0%);
    transform: scale(1.05);
}

.winner-badge {
    position: absolute;
    top: var(--spacing-md);
    left: var(--spacing-md);
    background-color: var(--secondary-container);
    color: var(--on-secondary-container);
    padding: var(--spacing-xs) var(--spacing-md);
    border-radius: var(--radius-full);
    font-size: 0.65rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.01em;
    white-space: nowrap;
    line-height: 1.2;
}

.winner-content {
    padding: var(--spacing-lg);
}

.winner-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.winner-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-md);
}

.winner-link {
    display: inline-flex;
    align-items: center;
    gap: var(--spacing-xs);
    color: var(--primary);
    font-weight: 600;
    text-decoration: none;
    transition: gap 0.2s ease;
}

.winner-link:hover {
    gap: var(--spacing-sm);
}

/* Responsive Design */
@media (max-width: 1024px) {
    .main-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .application-sidebar {
        position: static;
        order: -1;
    }
    
    .schedule-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
}

@media (max-width: 768px) {
    .section-header {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .proposal-card {
        flex-direction: column;
        gap: var(--spacing-md);
    }
    
    .proposal-voting {
        flex-direction: row;
        justify-content: center;
        width: 100%;
    }
    
    .interest-grid {
        grid-template-columns: 1fr;
    }
    
    .event-item {
        flex-direction: column;
        text-align: center;
    }
    
    .event-details {
        align-items: center;
    }
    
    .winners-grid {
        grid-template-columns: 1fr;
    }
    
    .quote-overlay {
        bottom: var(--spacing-md);
        left: var(--spacing-md);
        right: var(--spacing-md);
        padding: var(--spacing-md);
    }
}

@media (max-width: 480px) {
    .section-title {
        font-size: 1.5rem;
    }
    
    .hero-title {
        font-size: 2rem;
    }
    
    .hero-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .hero-actions .btn {
        width: 100%;
        max-width: 300px;
    }
}
</style>

<script>
// Application Form Handling
document.getElementById('youth-council-application').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Collect form data
    const formData = new FormData(this);
    const interests = Array.from(document.querySelectorAll('input[name="interests"]:checked'))
                          .map(cb => cb.value);
    
    // Validate age
    const age = parseInt(document.getElementById('age').value);
    if (age < 18 || age > 30) {
        showMessage('You must be between 18 and 30 years old to apply.', 'error');
        return;
    }
    
    // Validate at least one interest
    if (interests.length === 0) {
        showMessage('Please select at least one area of interest.', 'error');
        return;
    }
    
    // Simulate form submission
    showMessage('Thank you for your application! We will review it and contact you soon.', 'success');
    this.reset();
});

function showMessage(message, type) {
    // Create message element
    const messageDiv = document.createElement('div');
    messageDiv.className = `form-message ${type}`;
    messageDiv.textContent = message;
    
    // Insert after form
    const form = document.getElementById('youth-council-application');
    form.parentNode.insertBefore(messageDiv, form.nextSibling);
    
    // Remove after 5 seconds
    setTimeout(() => {
        messageDiv.remove();
    }, 5000);
}

// Voting Function
function voteProposal(button, type) {
    const voteCount = button.querySelector('.vote-count');
    let currentCount = parseInt(voteCount.textContent);
    
    if (type === 'up') {
        voteCount.textContent = currentCount + 1;
        button.style.color = 'var(--primary)';
        
        // Remove downvote if exists
        const downvoteBtn = button.parentElement.querySelector('.downvote');
        downvoteBtn.style.color = '';
    } else {
        voteCount.textContent = currentCount + 1;
        button.style.color = 'var(--error)';
        
        // Remove upvote if exists
        const upvoteBtn = button.parentElement.querySelector('.upvote');
        upvoteBtn.style.color = '';
    }
    
    // Disable further voting
    button.disabled = true;
    button.style.cursor = 'not-allowed';
}

// Show Application Form (Mobile)
function showApplicationForm() {
    const applicationCard = document.querySelector('.application-card');
    applicationCard.scrollIntoView({ behavior: 'smooth' });
    
    // Highlight the form
    applicationCard.style.animation = 'pulse 2s ease-in-out';
    setTimeout(() => {
        applicationCard.style.animation = '';
    }, 2000);
}

// Show Proposal Form
function showProposalForm() {
    // In a real implementation, this would open a modal or navigate to a proposal form
    showMessage('Proposal form will be available soon. Please contact us directly.', 'info');
}

// Add pulse animation
const style = document.createElement('style');
style.textContent = `
    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.02); }
    }
`;
document.head.appendChild(style);
</script>

