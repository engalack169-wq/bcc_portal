<?php
/**
 * Bamenda City Council E-Governance Platform
 * Permits and Licenses Page
 */

// Set page metadata
$page_title = 'Permits & Licenses | Bamenda City Council';
$page_description = 'Apply for various permits and licenses including building permits, event permits, and business permits in Bamenda.';
$page_keywords = 'permits, licenses, building permits, event permits, business permits, Bamenda';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Services', 'url' => 'services.php'],
    ['title' => 'Permits & Licenses', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero permits-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-government-building.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Permits & Licenses</span>
            <h1 class="hero-title">Official Permits & Licenses</h1>
            <p class="hero-subtitle">
                Apply for and manage various permits and licenses required for construction, events, and business operations in Bamenda.
            </p>
            <div class="hero-actions">
                <a href="#permit-types" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">description</span>
                    View Permit Types
                </a>
                <a href="#application-form" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">app_registration</span>
                    Apply Now
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Permit Types Overview -->
<section class="permit-types-section" id="permit-types">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Available Permits & Licenses</h2>
            <p class="section-subtitle">Choose the permit type that matches your needs</p>
        </div>

        <div class="permit-types-grid">
            <!-- Building Permit -->
            <div class="permit-card">
                <div class="permit-icon">
                    <span class="material-symbols-outlined">construction</span>
                </div>
                <h3 class="permit-title">Building Permit</h3>
                <p class="permit-description">Required for new construction, renovations, and structural modifications to buildings.</p>
                <div class="permit-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Processing: 7-14 days</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">payments</span>
                        <span>Fee: ₣50,000 - ₣200,000</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">update</span>
                        <span>Validity: 1 year</span>
                    </div>
                </div>
                <button class="btn btn-primary btn-sm" onclick="selectPermitType('building')">
                    Apply for Building Permit
                </button>
            </div>

            <!-- Event Permit -->
            <div class="permit-card">
                <div class="permit-icon">
                    <span class="material-symbols-outlined">event</span>
                </div>
                <h3 class="permit-title">Event Permit</h3>
                <p class="permit-description">Required for public events, gatherings, concerts, and community activities.</p>
                <div class="permit-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Processing: 3-5 days</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">payments</span>
                        <span>Fee: ₣10,000 - ₣50,000</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">update</span>
                        <span>Validity: Event duration</span>
                    </div>
                </div>
                <button class="btn btn-primary btn-sm" onclick="selectPermitType('event')">
                    Apply for Event Permit
                </button>
            </div>

            <!-- Business Permit -->
            <div class="permit-card">
                <div class="permit-icon">
                    <span class="material-symbols-outlined">store</span>
                </div>
                <h3 class="permit-title">Business Permit</h3>
                <p class="permit-description">Required for operating businesses, commercial activities, and market stalls.</p>
                <div class="permit-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Processing: 5-7 days</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">payments</span>
                        <span>Fee: ₣25,000 - ₣150,000</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">update</span>
                        <span>Validity: 1 year</span>
                    </div>
                </div>
                <button class="btn btn-primary btn-sm" onclick="selectPermitType('business')">
                    Apply for Business Permit
                </button>
            </div>

            <!-- Health Permit -->
            <div class="permit-card">
                <div class="permit-icon">
                    <span class="material-symbols-outlined">medical_services</span>
                </div>
                <h3 class="permit-title">Health Permit</h3>
                <p class="permit-description">Required for restaurants, food services, healthcare facilities, and public health operations.</p>
                <div class="permit-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Processing: 5-10 days</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">payments</span>
                        <span>Fee: ₣15,000 - ₣75,000</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">update</span>
                        <span>Validity: 1 year</span>
                    </div>
                </div>
                <button class="btn btn-primary btn-sm" onclick="selectPermitType('health')">
                    Apply for Health Permit
                </button>
            </div>

            <!-- Environmental Permit -->
            <div class="permit-card">
                <div class="permit-icon">
                    <span class="material-symbols-outlined">park</span>
                </div>
                <h3 class="permit-title">Environmental Permit</h3>
                <p class="permit-description">Required for activities that may impact the environment, including industrial operations.</p>
                <div class="permit-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Processing: 10-21 days</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">payments</span>
                        <span>Fee: ₣30,000 - ₣300,000</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">update</span>
                        <span>Validity: 2 years</span>
                    </div>
                </div>
                <button class="btn btn-primary btn-sm" onclick="selectPermitType('environmental')">
                    Apply for Environmental Permit
                </button>
            </div>

            <!-- Signage Permit -->
            <div class="permit-card">
                <div class="permit-icon">
                    <span class="material-symbols-outlined">signpost</span>
                </div>
                <h3 class="permit-title">Signage Permit</h3>
                <p class="permit-description">Required for installing signs, billboards, banners, and advertising displays.</p>
                <div class="permit-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Processing: 3-5 days</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">payments</span>
                        <span>Fee: ₣5,000 - ₣25,000</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">update</span>
                        <span>Validity: 1 year</span>
                    </div>
                </div>
                <button class="btn btn-primary btn-sm" onclick="selectPermitType('signage')">
                    Apply for Signage Permit
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Application Process -->
<section class="application-process-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Application Process</h2>
            <p class="section-subtitle">Simple steps to obtain your permit</p>
        </div>

        <div class="process-timeline">
            <div class="process-step">
                <div class="step-number">1</div>
                <div class="step-content">
                    <h3 class="step-title">Submit Application</h3>
                    <p class="step-description">Complete the online application form with required details and upload necessary documents.</p>
                </div>
            </div>

            <div class="process-step">
                <div class="step-number">2</div>
                <div class="step-content">
                    <h3 class="step-title">Review & Verification</h3>
                    <p class="step-description">Our team reviews your application and verifies all submitted information and documents.</p>
                </div>
            </div>

            <div class="process-step">
                <div class="step-number">3</div>
                <div class="step-content">
                    <h3 class="step-title">Inspection (if required)</h3>
                    <p class="step-description">Site inspection may be conducted for certain permit types to ensure compliance.</p>
                </div>
            </div>

            <div class="process-step">
                <div class="step-number">4</div>
                <div class="step-content">
                    <h3 class="step-title">Approval & Issuance</h3>
                    <p class="step-description">Upon approval, your permit is issued and you can download or collect it.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Application Form -->
<section class="application-section" id="application-form">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Permit Application</h2>
            <p class="section-subtitle">Fill out the form below to apply for your permit</p>
        </div>

        <div class="application-form">
            <form id="permitApplicationForm">
                <div class="form-progress">
                    <div class="progress-step active">
                        <div class="progress-step-number">1</div>
                        <span class="progress-step-label">Applicant Info</span>
                    </div>
                    <div class="progress-step">
                        <div class="progress-step-number">2</div>
                        <span class="progress-step-label">Permit Details</span>
                    </div>
                    <div class="progress-step">
                        <div class="progress-step-number">3</div>
                        <span class="progress-step-label">Documents</span>
                    </div>
                    <div class="progress-step">
                        <div class="progress-step-number">4</div>
                        <span class="progress-step-label">Review</span>
                    </div>
                </div>

                <!-- Step 1: Applicant Information -->
                <div class="form-step active" id="step1">
                    <h3 class="step-title">Applicant Information</h3>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Full Name *</label>
                            <input type="text" class="form-input" name="full_name" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Phone Number *</label>
                            <input type="tel" class="form-input" name="phone" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Email Address *</label>
                        <input type="email" class="form-input" name="email" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Physical Address *</label>
                        <textarea class="form-textarea" name="address" rows="3" required></textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">ID Type *</label>
                            <select class="form-select" name="id_type" required>
                                <option value="">Select ID type</option>
                                <option value="national_id">National ID</option>
                                <option value="passport">Passport</option>
                                <option value="driver_license">Driver's License</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">ID Number *</label>
                            <input type="text" class="form-input" name="id_number" required>
                        </div>
                    </div>
                </div>

                <!-- Step 2: Permit Details -->
                <div class="form-step" id="step2">
                    <h3 class="step-title">Permit Details</h3>
                    
                    <div class="form-group">
                        <label class="form-label">Permit Type *</label>
                        <select class="form-select" name="permit_type" id="permitType" required>
                            <option value="">Select permit type</option>
                            <option value="building">Building Permit</option>
                            <option value="event">Event Permit</option>
                            <option value="business">Business Permit</option>
                            <option value="health">Health Permit</option>
                            <option value="environmental">Environmental Permit</option>
                            <option value="signage">Signage Permit</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Permit Title *</label>
                        <input type="text" class="form-input" name="permit_title" placeholder="Brief description of your permit request">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Description *</label>
                        <textarea class="form-textarea" name="description" rows="4" placeholder="Detailed description of your permit request"></textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Start Date *</label>
                            <input type="date" class="form-input" name="start_date" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">End Date</label>
                            <input type="date" class="form-input" name="end_date">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Location/Address *</label>
                        <input type="text" class="form-input" name="location" placeholder="Where the permit will be used">
                    </div>
                </div>

                <!-- Step 3: Documents -->
                <div class="form-step" id="step3">
                    <h3 class="step-title">Supporting Documents</h3>
                    
                    <div class="form-group">
                        <label class="form-label">ID Document *</label>
                        <input type="file" class="form-input" name="id_document" accept=".pdf,.jpg,.jpeg,.png" required>
                        <small class="form-help">Upload a clear copy of your ID document (PDF, JPG, PNG)</small>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Proof of Address *</label>
                        <input type="file" class="form-input" name="proof_address" accept=".pdf,.jpg,.jpeg,.png" required>
                        <small class="form-help">Utility bill or bank statement (PDF, JPG, PNG)</small>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Supporting Documents</label>
                        <input type="file" class="form-input" name="supporting_docs" accept=".pdf,.jpg,.jpeg,.png" multiple>
                        <small class="form-help">Additional documents related to your permit request</small>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Additional Information</label>
                        <textarea class="form-textarea" name="additional_info" rows="3" placeholder="Any additional information that may support your application"></textarea>
                    </div>
                </div>

                <!-- Step 4: Review -->
                <div class="form-step" id="step4">
                    <h3 class="step-title">Review & Submit</h3>
                    
                    <div class="review-summary">
                        <h4>Application Summary</h4>
                        <div id="applicationSummary">
                            <!-- Summary will be populated dynamically -->
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="checkbox-label">
                            <input type="checkbox" name="declaration" required>
                            <span class="checkmark"></span>
                            I declare that all information provided is true and accurate
                        </label>
                    </div>

                    <div class="form-group">
                        <label class="checkbox-label">
                            <input type="checkbox" name="terms" required>
                            <span class="checkmark"></span>
                            I agree to the terms and conditions of the permit application
                        </label>
                    </div>
                </div>

                <div class="form-navigation">
                    <button type="button" class="btn btn-outline" id="prevBtn" onclick="changeStep(-1)">Previous</button>
                    <button type="button" class="btn btn-primary" id="nextBtn" onclick="changeStep(1)">Next Step</button>
                    <button type="submit" class="btn btn-primary" id="submitBtn" style="display: none;">Submit Application</button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Status Checker -->
<section class="status-checker-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Check Application Status</h2>
            <p class="section-subtitle">Track the progress of your permit application</p>
        </div>

        <div class="status-checker">
            <h3>Application Status Tracker</h3>
            
            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">Application ID</label>
                    <input type="text" class="form-input" id="applicationId" placeholder="Enter your application ID">
                </div>
                <div class="form-group">
                    <label class="form-label">Phone Number</label>
                    <input type="tel" class="form-input" id="phoneNumber" placeholder="Phone number used in application">
                </div>
            </div>

            <button class="btn btn-primary" onclick="checkApplicationStatus()">Check Status</button>

            <div class="status-result" id="statusResult" style="display: none;">
                <!-- Status result will be displayed here -->
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Common questions about permits and licenses</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <button class="faq-question">
                    <span>How long does it take to process a permit application?</span>
                    <span class="material-symbols-outlined">expand_more</span>
                </button>
                <div class="faq-answer">
                    <p>Processing times vary by permit type: Building permits (7-14 days), Event permits (3-5 days), Business permits (5-7 days), Health permits (5-10 days), Environmental permits (10-21 days), and Signage permits (3-5 days).</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    <span>What documents are required for permit applications?</span>
                    <span class="material-symbols-outlined">expand_more</span>
                </button>
                <div class="faq-answer">
                    <p>Generally required documents include: Valid ID document, proof of address, and specific documents based on permit type. Building permits may require architectural plans, event permits may require event plans, and environmental permits may require environmental impact assessments.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    <span>Can I apply for multiple permits at once?</span>
                    <span class="material-symbols-outlined">expand_more</span>
                </button>
                <div class="faq-answer">
                    <p>Yes, you can apply for multiple permits. However, each permit type requires a separate application with specific documentation. Our system allows you to manage multiple applications from your account.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">
                    <span>What happens if my permit application is rejected?</span>
                    <span class="material-symbols-outlined">expand_more</span>
                </button>
                <div class="faq-answer">
                    <p>If your application is rejected, you will receive specific reasons for the rejection. You can address the issues and reapply, or request a review of the decision if you believe there was an error.</p>
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
/* Permits Page Styles */
.permits-hero {
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-container) 100%);
}

.permit-types-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.permit-types-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: var(--spacing-xl);
}

.permit-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.permit-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--primary) 0%, var(--primary-container) 100%);
    transform: scaleX(0);
    transition: transform 0.3s ease;
}

.permit-card:hover::before {
    transform: scaleX(1);
}

.permit-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.permit-icon {
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

.permit-icon .material-symbols-outlined {
    font-size: 2rem;
}

.permit-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.permit-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.permit-details {
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
    font-size: 1rem;
    color: var(--primary);
}

/* Application Process */
.application-process-section {
    padding: var(--spacing-3xl) 0;
}

.process-timeline {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: var(--spacing-xl);
    max-width: 1000px;
    margin: 0 auto;
}

.process-step {
    display: flex;
    gap: var(--spacing-lg);
    align-items: flex-start;
}

.step-number {
    width: 3rem;
    height: 3rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 1.25rem;
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

/* Application Form */
.application-section {
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

.form-step {
    display: none;
}

.form-step.active {
    display: block;
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--spacing-lg);
}

.form-help {
    display: block;
    margin-top: var(--spacing-xs);
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.checkbox-label {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    cursor: pointer;
    font-weight: 500;
}

.checkbox-label input[type="checkbox"] {
    width: auto;
}

/* Status Checker */
.status-checker-section {
    padding: var(--spacing-3xl) 0;
}

.status-checker {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-2xl);
    border: 1px solid var(--outline-variant);
    max-width: 600px;
    margin: 0 auto;
}

.status-checker h3 {
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
    text-align: center;
}

.status-result {
    margin-top: var(--spacing-lg);
    padding: var(--spacing-lg);
    border-radius: var(--radius-md);
    border: 1px solid var(--outline-variant);
    background-color: var(--surface-container);
}

/* FAQ */
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
    margin-bottom: var(--spacing-md);
    border: 1px solid var(--outline-variant);
    overflow: hidden;
}

.faq-question {
    width: 100%;
    padding: var(--spacing-lg);
    background: none;
    border: none;
    text-align: left;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-weight: 600;
    color: var(--on-surface);
    transition: background-color 0.2s ease;
}

.faq-question:hover {
    background-color: var(--surface-container);
}

.faq-question .material-symbols-outlined {
    transition: transform 0.3s ease;
}

.faq-item.active .faq-question .material-symbols-outlined {
    transform: rotate(180deg);
}

.faq-answer {
    padding: 0 var(--spacing-lg) var(--spacing-lg);
    color: var(--on-surface-variant);
    line-height: 1.6;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease, padding 0.3s ease;
}

.faq-item.active .faq-answer {
    max-height: 500px;
    padding: 0 var(--spacing-lg) var(--spacing-lg);
}

/* Responsive Design */
@media (max-width: 768px) {
    .permit-types-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .process-timeline {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .process-step {
        flex-direction: column;
        text-align: center;
        gap: var(--spacing-md);
    }
    
    .application-form {
        padding: var(--spacing-lg);
    }
    
    .form-row {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .form-navigation {
        flex-direction: column;
        gap: var(--spacing-md);
    }
    
    .form-navigation .btn {
        width: 100%;
    }
    
    .status-checker {
        padding: var(--spacing-lg);
    }
    
    .faq-question {
        padding: var(--spacing-md);
        font-size: 0.875rem;
    }
    
    .faq-answer {
        font-size: 0.875rem;
    }
}

@media (max-width: 480px) {
    .permit-card {
        padding: var(--spacing-lg);
    }
    
    .permit-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .permit-icon .material-symbols-outlined {
        font-size: 1.5rem;
    }
    
    .application-form {
        padding: var(--spacing-md);
    }
    
    .step-number {
        width: 2.5rem;
        height: 2.5rem;
        font-size: 1rem;
    }
}
</style>

<script>
// Form functionality
let currentStep = 1;
const totalSteps = 4;

function changeStep(direction) {
    const currentStepElement = document.getElementById(`step${currentStep}`);
    currentStepElement.classList.remove('active');
    
    currentStep += direction;
    
    const newStepElement = document.getElementById(`step${currentStep}`);
    newStepElement.classList.add('active');
    
    // Update progress indicators
    updateProgress();
    
    // Update navigation buttons
    updateNavigationButtons();
    
    // If on review step, populate summary
    if (currentStep === 4) {
        populateSummary();
    }
}

function updateProgress() {
    const progressSteps = document.querySelectorAll('.progress-step');
    progressSteps.forEach((step, index) => {
        if (index < currentStep) {
            step.classList.add('completed');
            step.classList.remove('active');
        } else if (index === currentStep - 1) {
            step.classList.add('active');
            step.classList.remove('completed');
        } else {
            step.classList.remove('active', 'completed');
        }
    });
}

function updateNavigationButtons() {
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const submitBtn = document.getElementById('submitBtn');
    
    prevBtn.style.display = currentStep === 1 ? 'none' : 'block';
    nextBtn.style.display = currentStep === totalSteps ? 'none' : 'block';
    submitBtn.style.display = currentStep === totalSteps ? 'block' : 'none';
}

function populateSummary() {
    const form = document.getElementById('permitApplicationForm');
    const formData = new FormData(form);
    const summary = document.getElementById('applicationSummary');
    
    let summaryHTML = '<div class="summary-grid">';
    
    // Applicant Information
    summaryHTML += `
        <div class="summary-section">
            <h5>Applicant Information</h5>
            <p><strong>Name:</strong> ${formData.get('full_name')}</p>
            <p><strong>Phone:</strong> ${formData.get('phone')}</p>
            <p><strong>Email:</strong> ${formData.get('email')}</p>
            <p><strong>Address:</strong> ${formData.get('address')}</p>
        </div>
    `;
    
    // Permit Details
    summaryHTML += `
        <div class="summary-section">
            <h5>Permit Details</h5>
            <p><strong>Type:</strong> ${formData.get('permit_type')}</p>
            <p><strong>Title:</strong> ${formData.get('permit_title')}</p>
            <p><strong>Location:</strong> ${formData.get('location')}</p>
            <p><strong>Start Date:</strong> ${formData.get('start_date')}</p>
        </div>
    `;
    
    summaryHTML += '</div>';
    summary.innerHTML = summaryHTML;
}

function selectPermitType(type) {
    document.getElementById('permitType').value = type;
    document.getElementById('application-form').scrollIntoView({ behavior: 'smooth' });
}

function checkApplicationStatus() {
    const applicationId = document.getElementById('applicationId').value;
    const phoneNumber = document.getElementById('phoneNumber').value;
    const statusResult = document.getElementById('statusResult');
    
    if (!applicationId || !phoneNumber) {
        alert('Please enter both Application ID and Phone Number');
        return;
    }
    
    // Simulate status check
    statusResult.style.display = 'block';
    statusResult.className = 'status-result processing';
    statusResult.innerHTML = `
        <h4>Application Status: Processing</h4>
        <p>Your application is currently under review. Please check back in 2-3 business days.</p>
        <p><strong>Application ID:</strong> ${applicationId}</p>
        <p><strong>Submitted:</strong> ${new Date().toLocaleDateString()}</p>
    `;
}

// FAQ functionality
document.querySelectorAll('.faq-question').forEach(button => {
    button.addEventListener('click', () => {
        const faqItem = button.parentElement;
        faqItem.classList.toggle('active');
    });
});

// Form submission
document.getElementById('permitApplicationForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Application submitted successfully! You will receive a confirmation email shortly.');
    // In production, this would submit the form data to the server
});

// Initialize
updateNavigationButtons();
</script>
