<?php
/**
 * Bamenda City Council E-Governance Platform
 * Youth Council Application Form
 */

// Include access control
require_once __DIR__ . '/../../core/access-control.php';

// Require authentication to access this page
require_authentication();

// Set page metadata
$page_title = 'Youth Council Application | Bamenda City Council';
$page_description = 'Apply to join the Bamenda Youth Council and participate in civic decision-making and community leadership.';
$page_keywords = 'youth council application, civic leadership, Bamenda youth, community service';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Youth', 'url' => '/stitch1/pages/youth/index.php'],
    ['title' => 'Youth Council', 'url' => '/stitch1/pages/youth/youth-council.php'],
    ['title' => 'Application', 'url' => '#']
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
            <span class="badge badge-secondary">Youth Empowerment</span>
            <h1 class="hero-title">Join the Youth Council</h1>
            <p class="hero-subtitle">
                Become a voice for Bamenda's youth. Apply to join the Youth Council and help shape the future of our city through civic engagement and leadership.
            </p>
        </div>
    </div>
</section>

<!-- Application Form Section -->
<section class="application-section">
    <div class="container">
        <div class="application-container">
            <div class="application-header">
                <h2 class="section-title">
                    <span class="material-symbols-outlined">groups</span>
                    Youth Council Application
                </h2>
                <p class="section-subtitle">
                    Complete this application to be considered for membership in the Bamenda Youth Council. Applicants must be between 18-35 years old.
                </p>
            </div>

            <form class="application-form" id="youthCouncilForm" method="POST" action="../../core/services.php">
                <input type="hidden" name="action" value="submit_youth_council_application">
                
                <!-- Personal Information -->
                <div class="form-section">
                    <h3 class="section-title">Personal Information</h3>
                    
                    <div class="form-group">
                        <label for="full_name" class="form-label">
                            <span class="material-symbols-outlined">person</span>
                            Full Name *
                        </label>
                        <input 
                            type="text" 
                            id="full_name" 
                            name="full_name" 
                            class="form-input" 
                            placeholder="Enter your full legal name"
                            required
                            maxlength="255"
                        >
                        <span class="form-error" id="full_name-error"></span>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="age" class="form-label">
                                <span class="material-symbols-outlined">cake</span>
                                Age *
                            </label>
                            <input 
                                type="number" 
                                id="age" 
                                name="age" 
                                class="form-input" 
                                placeholder="Enter your age"
                                required
                                min="18"
                                max="35"
                            >
                            <span class="form-help">Must be between 18-35 years old</span>
                            <span class="form-error" id="age-error"></span>
                        </div>
                        
                        <div class="form-group">
                            <label for="ward" class="form-label">
                                <span class="material-symbols-outlined">location_city</span>
                                Ward/Area *
                            </label>
                            <select id="ward" name="ward" class="form-input" required>
                                <option value="">Select your ward</option>
                                <option value="Bamenda I">Bamenda I</option>
                                <option value="Bamenda II">Bamenda II</option>
                                <option value="Bamenda III">Bamenda III</option>
                                <option value="Bamenda I">Bamenda I</option>
                                <option value="Nkwen">Nkwen</option>
                                <option value="Mankon">Mankon</option>
                                <option value="Bafut">Bafut</option>
                                <option value="Santa">Santa</option>
                                <option value="Bamenda Central">Bamenda Central</option>
                                <option value="Other">Other</option>
                            </select>
                            <span class="form-error" id="ward-error"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="education_level" class="form-label">
                            <span class="material-symbols-outlined">school</span>
                            Education Level
                        </label>
                        <select id="education_level" name="education_level" class="form-input">
                            <option value="">Select education level</option>
                            <option value="high_school">High School</option>
                            <option value="undergraduate">Undergraduate</option>
                            <option value="graduate">Graduate</option>
                            <option value="postgraduate">Postgraduate</option>
                            <option value="vocational">Vocational Training</option>
                            <option value="other">Other</option>
                        </select>
                        <span class="form-error" id="education_level-error"></span>
                    </div>
                </div>

                <!-- Interest Areas -->
                <div class="form-section">
                    <h3 class="section-title">Areas of Interest</h3>
                    <p class="section-subtitle">Select all areas you're interested in contributing to (minimum 2)</p>
                    
                    <div class="interest-grid">
                        <label class="interest-item">
                            <input type="checkbox" name="interest_areas[]" value="culture">
                            <span class="checkmark"></span>
                            <span>Culture & Arts</span>
                        </label>
                        <label class="interest-item">
                            <input type="checkbox" name="interest_areas[]" value="technology">
                            <span class="checkmark"></span>
                            <span>Technology & Innovation</span>
                        </label>
                        <label class="interest-item">
                            <input type="checkbox" name="interest_areas[]" value="climate">
                            <span class="checkmark"></span>
                            <span>Climate & Environment</span>
                        </label>
                        <label class="interest-item">
                            <input type="checkbox" name="interest_areas[]" value="sports">
                            <span class="checkmark"></span>
                            <span>Sports & Recreation</span>
                        </label>
                        <label class="interest-item">
                            <input type="checkbox" name="interest_areas[]" value="education">
                            <span class="checkmark"></span>
                            <span>Education & Learning</span>
                        </label>
                        <label class="interest-item">
                            <input type="checkbox" name="interest_areas[]" value="health">
                            <span class="checkmark"></span>
                            <span>Health & Wellness</span>
                        </label>
                        <label class="interest-item">
                            <input type="checkbox" name="interest_areas[]" value="infrastructure">
                            <span class="checkmark"></span>
                            <span>Infrastructure & Development</span>
                        </label>
                        <label class="interest-item">
                            <input type="checkbox" name="interest_areas[]" value="economy">
                            <span class="checkmark"></span>
                            <span>Economic Development</span>
                        </label>
                        <label class="interest-item">
                            <input type="checkbox" name="interest_areas[]" value="governance">
                            <span class="checkmark"></span>
                            <span>Good Governance</span>
                        </label>
                        <label class="interest-item">
                            <input type="checkbox" name="interest_areas[]" value="social">
                            <span class="checkmark"></span>
                            <span>Social Services</span>
                        </label>
                    </div>
                    <span class="form-error" id="interest_areas-error"></span>
                </div>

                <!-- Motivation Statement -->
                <div class="form-section">
                    <h3 class="section-title">Motivation Statement</h3>
                    <p class="section-subtitle">Tell us why you want to join the Youth Council and what you hope to achieve (minimum 100 words)</p>
                    
                    <div class="form-group">
                        <label for="motivation" class="form-label">
                            <span class="material-symbols-outlined">edit_note</span>
                            Your Motivation *
                        </label>
                        <textarea 
                            id="motivation" 
                            name="motivation" 
                            class="form-input" 
                            rows="6"
                            placeholder="Share your vision for Bamenda and how you plan to contribute to the Youth Council..."
                            required
                            minlength="100"
                        ></textarea>
                        <div class="character-count">
                            <span id="charCount">0</span> characters (minimum 100)
                        </div>
                        <span class="form-error" id="motivation-error"></span>
                    </div>
                </div>

                <!-- Commitment Agreement -->
                <div class="form-section">
                    <div class="commitment-info">
                        <h4>Youth Council Commitment</h4>
                        <p>As a Youth Council member, you will be expected to:</p>
                        <ul>
                            <li>Attend monthly council meetings</li>
                            <li>Participate in community projects</li>
                            <li>Represent youth interests in municipal discussions</li>
                            <li>Commit at least 5 hours per month to council activities</li>
                            <li>Maintain active engagement for a 2-year term</li>
                        </ul>
                    </div>

                    <div class="form-group checkbox-group">
                        <label class="checkbox-label">
                            <input type="checkbox" id="commitment" name="commitment" value="1" required>
                            <span class="checkbox-custom"></span>
                            I commit to fulfilling the responsibilities of a Youth Council member
                        </label>
                        <span class="form-error" id="commitment-error"></span>
                    </div>

                    <div class="form-group checkbox-group">
                        <label class="checkbox-label">
                            <input type="checkbox" id="terms" name="terms" value="1" required>
                            <span class="checkbox-custom"></span>
                            I certify that all information provided is accurate and truthful
                        </label>
                        <span class="form-error" id="terms-error"></span>
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
                            Submit Application
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<style>
/* Youth Council Application Styles */
.application-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.application-container {
    max-width: 800px;
    margin: 0 auto;
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.application-header {
    padding: var(--spacing-xl);
    background-color: var(--tertiary);
    color: var(--on-tertiary);
    text-align: center;
}

.application-form {
    padding: var(--spacing-xl);
}

.interest-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: var(--spacing-md);
    margin-top: var(--spacing-lg);
}

.interest-item {
    display: flex;
    align-items: center;
    padding: var(--spacing-md);
    border: 2px solid var(--outline-variant);
    border-radius: var(--radius-md);
    cursor: pointer;
    transition: all 0.3s ease;
}

.interest-item:hover {
    border-color: var(--tertiary);
    background-color: var(--tertiary-container);
}

.interest-item input[type="checkbox"] {
    display: none;
}

.interest-item input[type="checkbox"]:checked + .checkmark {
    background-color: var(--tertiary);
    border-color: var(--tertiary);
}

.interest-item input[type="checkbox"]:checked + .checkmark::after {
    content: '✓';
    color: var(--on-tertiary);
    display: block;
    text-align: center;
    line-height: 1.2;
}

.checkmark {
    width: 20px;
    height: 20px;
    border: 2px solid var(--outline);
    border-radius: 4px;
    margin-right: var(--spacing-sm);
    transition: all 0.3s ease;
}

.commitment-info {
    background-color: var(--surface-container-low);
    padding: var(--spacing-lg);
    border-radius: var(--radius-md);
    margin-bottom: var(--spacing-lg);
    border-left: 4px solid var(--tertiary);
}

.commitment-info h4 {
    color: var(--on-surface);
    margin-bottom: var(--spacing-md);
}

.commitment-info ul {
    margin: var(--spacing-sm) 0;
    padding-left: var(--spacing-lg);
}

.commitment-info li {
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
    .interest-grid {
        grid-template-columns: 1fr;
    }
    
    .form-row {
        flex-direction: column;
        gap: var(--spacing-md);
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('youthCouncilForm');
    const submitBtn = document.getElementById('submitBtn');
    const motivationTextarea = document.getElementById('motivation');
    const charCount = document.getElementById('charCount');
    
    // Character counter
    motivationTextarea.addEventListener('input', function() {
        const count = this.value.length;
        charCount.textContent = count;
        
        if (count < 100) {
            charCount.style.color = 'var(--error)';
        } else {
            charCount.style.color = 'var(--primary)';
        }
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
        const requiredFields = ['full_name', 'age', 'ward', 'motivation'];
        
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
        
        // Validate age range
        const ageField = document.getElementById('age');
        const age = parseInt(ageField.value);
        if (age < 18 || age > 35) {
            document.getElementById('age-error').textContent = 'Age must be between 18-35';
            isValid = false;
        }
        
        // Validate interest areas (minimum 2)
        const interestAreas = document.querySelectorAll('input[name="interest_areas[]"]:checked');
        if (interestAreas.length < 2) {
            document.getElementById('interest_areas-error').textContent = 'Please select at least 2 areas of interest';
            isValid = false;
        }
        
        // Validate motivation length
        const motivation = motivationTextarea.value.trim();
        if (motivation.length < 100) {
            document.getElementById('motivation-error').textContent = 'Motivation statement must be at least 100 characters';
            isValid = false;
        }
        
        // Validate checkboxes
        const commitment = document.getElementById('commitment');
        const terms = document.getElementById('terms');
        
        if (!commitment.checked) {
            document.getElementById('commitment-error').textContent = 'You must agree to the commitment requirements';
            isValid = false;
        }
        
        if (!terms.checked) {
            document.getElementById('terms-error').textContent = 'You must certify that your information is accurate';
            isValid = false;
        }
        
        if (isValid) {
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="material-symbols-outlined">hourglass_empty</span> Submitting...';
            
            // Submit form
            form.submit();
        } else {
            submitBtn.disabled = false;
            submitBtn.innerHTML = '<span class="material-symbols-outlined">send</span> Submit Application';
        }
    });
});
</script>

<?php
// Include footer
require_once __DIR__ . '/../../includes/footer.php';
?>

