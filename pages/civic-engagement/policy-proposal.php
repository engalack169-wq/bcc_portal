<?php
/**
 * Bamenda City Council E-Governance Platform
 * Policy Proposal Submission Form
 */

// Include access control
require_once __DIR__ . '/../../core/access-control.php';

// Require authentication to access this page
require_authentication();

// Set page metadata
$page_title = 'Policy Proposal | Bamenda City Council';
$page_description = 'Submit policy proposals to help shape the future of Bamenda. Share your ideas for civic improvement and community development.';
$page_keywords = 'policy proposal, civic engagement, community ideas, Bamenda development, public participation';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Civic Engagement', 'url' => '/pages/civic-engagement/index.php'],
    ['title' => 'Policy Proposal', 'url' => '#']
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
            <h1 class="hero-title">Shape Policy, Transform Bamenda</h1>
            <p class="hero-subtitle">
                Submit your policy proposals and innovative ideas to help create positive change in our community. Your voice matters in building a better Bamenda.
            </p>
        </div>
    </div>
</section>

<!-- Proposal Form Section -->
<section class="proposal-section">
    <div class="container">
        <div class="proposal-container">
            <div class="proposal-header">
                <h2 class="section-title">
                    <span class="material-symbols-outlined">lightbulb</span>
                    Submit Policy Proposal
                </h2>
                <p class="section-subtitle">
                    Share your innovative ideas for improving Bamenda. Well-structured proposals with clear implementation plans have higher chances of consideration.
                </p>
            </div>

            <form class="proposal-form" id="policyProposalForm" method="POST" action="../../core/services.php">
                <input type="hidden" name="action" value="submit_policy_proposal">
                
                <!-- Proposal Details -->
                <div class="form-section">
                    <h3 class="section-title">Proposal Details</h3>
                    
                    <div class="form-group">
                        <label for="title" class="form-label">
                            <span class="material-symbols-outlined">title</span>
                            Proposal Title *
                        </label>
                        <input 
                            type="text" 
                            id="title" 
                            name="title" 
                            class="form-input" 
                            placeholder="Enter a clear, concise title for your proposal"
                            required
                            maxlength="255"
                        >
                        <span class="form-error" id="title-error"></span>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="category" class="form-label">
                                <span class="material-symbols-outlined">category</span>
                                Category *
                            </label>
                            <select id="category" name="category" class="form-input" required>
                                <option value="">Select a category</option>
                                <option value="infrastructure">Infrastructure & Development</option>
                                <option value="environment">Environment & Sustainability</option>
                                <option value="education">Education & Learning</option>
                                <option value="health">Health & Wellness</option>
                                <option value="technology">Technology & Innovation</option>
                                <option value="economy">Economic Development</option>
                                <option value="culture">Culture & Heritage</option>
                                <option value="safety">Public Safety & Security</option>
                                <option value="transport">Transportation & Mobility</option>
                                <option value="governance">Good Governance</option>
                                <option value="social">Social Services</option>
                                <option value="youth">Youth Development</option>
                                <option value="other">Other</option>
                            </select>
                            <span class="form-error" id="category-error"></span>
                        </div>
                        
                        <div class="form-group">
                            <label for="target_audience" class="form-label">
                                <span class="material-symbols-outlined">groups</span>
                                Target Audience
                            </label>
                            <select id="target_audience" name="target_audience[]" class="form-input" multiple>
                                <option value="all_citizens">All Citizens</option>
                                <option value="youth">Youth (18-35)</option>
                                <option value="elderly">Elderly (60+)</option>
                                <option value="women">Women</option>
                                <option value="businesses">Business Owners</option>
                                <option value="students">Students</option>
                                <option value="workers">Workers & Employees</option>
                                <option value="farmers">Farmers & Rural Communities</option>
                                <option value="disabilities">People with Disabilities</option>
                            </select>
                            <span class="form-help">Hold Ctrl/Cmd to select multiple audiences</span>
                            <span class="form-error" id="target_audience-error"></span>
                        </div>
                    </div>
                </div>

                <!-- Problem Description -->
                <div class="form-section">
                    <h3 class="section-title">Problem Statement</h3>
                    <p class="section-subtitle">Clearly describe the problem or opportunity your proposal addresses</p>
                    
                    <div class="form-group">
                        <label for="description" class="form-label">
                            <span class="material-symbols-outlined">description</span>
                            Problem Description *
                        </label>
                        <textarea 
                            id="description" 
                            name="description" 
                            class="form-input" 
                            rows="6"
                            placeholder="Describe the current situation, challenges, or opportunities that your proposal addresses. Be specific and provide context."
                            required
                            minlength="50"
                        ></textarea>
                        <div class="character-count">
                            <span id="descCharCount">0</span> characters (minimum 50)
                        </div>
                        <span class="form-error" id="description-error"></span>
                    </div>
                </div>

                <!-- Implementation Plan -->
                <div class="form-section">
                    <h3 class="section-title">Implementation Plan</h3>
                    <p class="section-subtitle">Outline how you propose to implement this policy or initiative</p>
                    
                    <div class="form-group">
                        <label for="implementation_plan" class="form-label">
                            <span class="material-symbols-outlined">route</span>
                            Implementation Strategy *
                        </label>
                        <textarea 
                            id="implementation_plan" 
                            name="implementation_plan" 
                            class="form-input" 
                            rows="8"
                            placeholder="Detail your implementation approach including: timeline, required resources, key stakeholders, potential challenges, and success metrics."
                            required
                            minlength="100"
                        ></textarea>
                        <div class="character-count">
                            <span id="implCharCount">0</span> characters (minimum 100)
                        </div>
                        <span class="form-error" id="implementation_plan-error"></span>
                    </div>
                </div>

                <!-- Expected Impact -->
                <div class="form-section">
                    <h3 class="section-title">Expected Impact</h3>
                    <p class="section-subtitle">Describe the positive changes your proposal will create</p>
                    
                    <div class="impact-areas">
                        <div class="impact-category">
                            <h4>Social Impact</h4>
                            <div class="form-group">
                                <label for="social_impact" class="form-label">How will this benefit the community?</label>
                                <textarea 
                                    id="social_impact" 
                                    name="social_impact" 
                                    class="form-input" 
                                    rows="3"
                                    placeholder="Describe social benefits, community improvements, quality of life enhancements..."
                                ></textarea>
                            </div>
                        </div>
                        
                        <div class="impact-category">
                            <h4>Economic Impact</h4>
                            <div class="form-group">
                                <label for="economic_impact" class="form-label">What are the economic benefits?</label>
                                <textarea 
                                    id="economic_impact" 
                                    name="economic_impact" 
                                    class="form-input" 
                                    rows="3"
                                    placeholder="Describe job creation, cost savings, revenue generation, economic growth..."
                                ></textarea>
                            </div>
                        </div>
                        
                        <div class="impact-category">
                            <h4>Environmental Impact</h4>
                            <div class="form-group">
                                <label for="environmental_impact" class="form-label">How does this affect the environment?</label>
                                <textarea 
                                    id="environmental_impact" 
                                    name="environmental_impact" 
                                    class="form-input" 
                                    rows="3"
                                    placeholder="Describe environmental benefits, sustainability improvements, conservation efforts..."
                                ></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Supporting Evidence -->
                <div class="form-section">
                    <h3 class="section-title">Supporting Evidence</h3>
                    <p class="section-subtitle">Provide any research, data, or examples that support your proposal</p>
                    
                    <div class="form-group">
                        <label for="evidence" class="form-label">
                            <span class="material-symbols-outlined">fact_check</span>
                            Supporting Information
                        </label>
                        <textarea 
                            id="evidence" 
                            name="evidence" 
                            class="form-input" 
                            rows="4"
                            placeholder="Include research data, case studies, examples from other cities, or any evidence that supports your proposal's feasibility and effectiveness."
                        ></textarea>
                    </div>
                </div>

                <!-- Submission Agreement -->
                <div class="form-section">
                    <div class="submission-info">
                        <h4>Proposal Guidelines</h4>
                        <ul>
                            <li>Proposals should be original and specific to Bamenda</li>
                            <li>Include realistic implementation timelines and resource requirements</li>
                            <li>Consider potential challenges and mitigation strategies</li>
                            <li>Provide evidence or examples where possible</li>
                            <li>Focus on solutions that benefit the broader community</li>
                        </ul>
                    </div>

                    <div class="form-group checkbox-group">
                        <label class="checkbox-label">
                            <input type="checkbox" id="originality" name="originality" value="1" required>
                            <span class="checkbox-custom"></span>
                            I certify this is an original proposal and not copied from other sources
                        </label>
                        <span class="form-error" id="originality-error"></span>
                    </div>

                    <div class="form-group checkbox-group">
                        <label class="checkbox-label">
                            <input type="checkbox" id="feasibility" name="feasibility" value="1" required>
                            <span class="checkbox-custom"></span>
                            I believe this proposal is feasible and beneficial for Bamenda
                        </label>
                        <span class="form-error" id="feasibility-error"></span>
                    </div>
                </div>

                <!-- Submit Section -->
                <div class="form-section">
                    <div class="form-actions">
                        <button type="button" class="btn btn-outline" onclick="window.history.back()">
                            <span class="material-symbols-outlined">arrow_back</span>
                            Back
                        </button>
                        <button type="submit" class="btn btn-primary btn-lg" id="submitBtn">
                            <span class="material-symbols-outlined">send</span>
                            Submit Proposal
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<style>
/* Policy Proposal Form Styles */
.proposal-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.proposal-container {
    max-width: 900px;
    margin: 0 auto;
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.proposal-header {
    padding: var(--spacing-xl);
    background-color: var(--secondary);
    color: var(--on-secondary);
    text-align: center;
}

.proposal-form {
    padding: var(--spacing-xl);
}

.impact-areas {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: var(--spacing-lg);
    margin-top: var(--spacing-lg);
}

.impact-category {
    background-color: var(--surface-container-low);
    padding: var(--spacing-lg);
    border-radius: var(--radius-md);
    border-left: 4px solid var(--secondary);
}

.impact-category h4 {
    color: var(--on-surface);
    margin-bottom: var(--spacing-md);
    font-weight: 600;
}

.submission-info {
    background-color: var(--surface-container-low);
    padding: var(--spacing-lg);
    border-radius: var(--radius-md);
    margin-bottom: var(--spacing-lg);
    border-left: 4px solid var(--secondary);
}

.submission-info h4 {
    color: var(--on-surface);
    margin-bottom: var(--spacing-md);
}

.submission-info ul {
    margin: var(--spacing-sm) 0;
    padding-left: var(--spacing-lg);
}

.submission-info li {
    color: var(--on-surface-variant);
    margin-bottom: var(--spacing-xs);
}

.character-count {
    text-align: right;
    font-size: 0.875rem;
    color: var(--on-surface-variant);
    margin-top: var(--spacing-xs);
}

/* Responsive Design */
@media (max-width: 768px) {
    .impact-areas {
        grid-template-columns: 1fr;
    }
    
    .form-row {
        flex-direction: column;
        gap: var(--spacing-md);
    }
    
    select[multiple] {
        height: 120px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('policyProposalForm');
    const submitBtn = document.getElementById('submitBtn');
    
    // Character counters
    const descriptionTextarea = document.getElementById('description');
    const implTextarea = document.getElementById('implementation_plan');
    const descCharCount = document.getElementById('descCharCount');
    const implCharCount = document.getElementById('implCharCount');
    
    descriptionTextarea.addEventListener('input', function() {
        const count = this.value.length;
        descCharCount.textContent = count;
        descCharCount.style.color = count >= 50 ? 'var(--primary)' : 'var(--error)';
    });
    
    implTextarea.addEventListener('input', function() {
        const count = this.value.length;
        implCharCount.textContent = count;
        implCharCount.style.color = count >= 100 ? 'var(--primary)' : 'var(--error)';
    });
    
    // Form validation
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        let isValid = true;
        
        // Clear previous errors
        document.querySelectorAll('.form-error').forEach(error => {
            error.textContent = '';
        });
        
        // Validate required fields
        const requiredFields = ['title', 'category', 'description', 'implementation_plan'];
        
        requiredFields.forEach(fieldId => {
            const field = document.getElementById(fieldId);
            const errorSpan = document.getElementById(fieldId + '-error');
            
            if (!field.value.trim()) {
                errorSpan.textContent = 'This field is required';
                isValid = false;
            } else {
                errorSpan.textContent = '';
            }
        });
        
        // Validate minimum lengths
        if (descriptionTextarea.value.trim().length < 50) {
            document.getElementById('description-error').textContent = 'Description must be at least 50 characters';
            isValid = false;
        }
        
        if (implTextarea.value.trim().length < 100) {
            document.getElementById('implementation_plan-error').textContent = 'Implementation plan must be at least 100 characters';
            isValid = false;
        }
        
        // Validate checkboxes
        const originality = document.getElementById('originality');
        const feasibility = document.getElementById('feasibility');
        
        if (!originality.checked) {
            document.getElementById('originality-error').textContent = 'You must certify this is an original proposal';
            isValid = false;
        }
        
        if (!feasibility.checked) {
            document.getElementById('feasibility-error').textContent = 'You must believe this proposal is feasible';
            isValid = false;
        }
        
        if (isValid) {
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="material-symbols-outlined">hourglass_empty</span> Submitting...';
            
            // Submit form
            form.submit();
        } else {
            submitBtn.disabled = false;
            submitBtn.innerHTML = '<span class="material-symbols-outlined">send</span> Submit Proposal';
        }
    });
});
</script>

<?php
// Include footer
require_once __DIR__ . '/../../includes/footer.php';
?>

