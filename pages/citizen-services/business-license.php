<?php
/**
 * Bamenda City Council E-Governance Platform
 * Business License Application Page
 */

// Set page metadata
$page_title = 'Business License | Bamenda City Council';
$page_description = 'Apply for business licenses, renew existing licenses, and manage your business registrations with Bamenda City Council.';
$page_keywords = 'business license, business registration, commercial license, Bamenda business, entrepreneurship';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Services', 'url' => '/stitch1/pages/citizen-services/services.php'],
    ['title' => 'Business License', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero business-license-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-government-building.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Business Services</span>
            <h1 class="hero-title">Start Your Business Journey</h1>
            <p class="hero-subtitle">
                Apply for business licenses, renew existing permits, and access resources to help your business thrive in Bamenda.
            </p>
            <div class="hero-actions">
                <a href="#application-form" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">business</span>
                    Apply for License
                </a>
                <a href="#license-types" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">info</span>
                    License Types
                </a>
            </div>
        </div>
    </div>
</section>

<!-- License Types Section -->
<section class="license-types-section" id="license-types">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Business License Types</h2>
            <p class="section-subtitle">Choose the right license for your business type</p>
        </div>

        <div class="license-types-grid">
            <!-- Small Business License -->
            <div class="license-card">
                <div class="license-icon">
                    <span class="material-symbols-outlined">store</span>
                </div>
                <div class="license-content">
                    <h3 class="license-title">Small Business License</h3>
                    <p class="license-description">For small retail shops, kiosks, and local businesses with annual turnover under ₣5M.</p>
                    <div class="license-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Fee: ₣25,000/year</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Processing: 3-5 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">update</span>
                            <span>Renewal: Annual</span>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-sm" onclick="selectLicenseType('small-business')">
                        Select This License
                    </button>
                </div>
            </div>

            <!-- Commercial License -->
            <div class="license-card">
                <div class="license-icon">
                    <span class="material-symbols-outlined">storefront</span>
                </div>
                <div class="license-content">
                    <h3 class="license-title">Commercial License</h3>
                    <p class="license-description">For medium to large businesses, restaurants, hotels, and commercial establishments.</p>
                    <div class="license-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Fee: ₣75,000/year</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Processing: 5-7 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">update</span>
                            <span>Renewal: Annual</span>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-sm" onclick="selectLicenseType('commercial')">
                        Select This License
                    </button>
                </div>
            </div>

            <!-- Professional License -->
            <div class="license-card">
                <div class="license-icon">
                    <span class="material-symbols-outlined">medical_services</span>
                </div>
                <div class="license-content">
                    <h3 class="license-title">Professional License</h3>
                    <p class="license-description">For doctors, lawyers, engineers, consultants, and other professional service providers.</p>
                    <div class="license-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Fee: ₣50,000/year</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Processing: 7-10 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">update</span>
                            <span>Renewal: Annual</span>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-sm" onclick="selectLicenseType('professional')">
                        Select This License
                    </button>
                </div>
            </div>

            <!-- Industrial License -->
            <div class="license-card">
                <div class="license-icon">
                    <span class="material-symbols-outlined">factory</span>
                </div>
                <div class="license-content">
                    <h3 class="license-title">Industrial License</h3>
                    <p class="license-description">For manufacturing plants, factories, and industrial operations with environmental considerations.</p>
                    <div class="license-details">
                        <div class="detail-item">
                            <span class="material-symbols-outlined">payments</span>
                            <span>Fee: ₣150,000/year</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">schedule</span>
                            <span>Processing: 10-14 days</span>
                        </div>
                        <div class="detail-item">
                            <span class="material-symbols-outlined">update</span>
                            <span>Renewal: Annual</span>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-sm" onclick="selectLicenseType('industrial')">
                        Select This License
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Application Form Section -->
<section class="application-form-section" id="application-form">
    <div class="container">
        <div class="form-container">
            <div class="form-header">
                <h2 class="form-title">Business License Application</h2>
                <p class="form-subtitle">Complete the form below to apply for your business license</p>
            </div>

            <div class="form-progress">
                <div class="progress-step active" data-step="1">
                    <div class="step-number">1</div>
                    <span class="step-label">Business Info</span>
                </div>
                <div class="progress-step" data-step="2">
                    <div class="step-number">2</div>
                    <span class="step-label">Owner Details</span>
                </div>
                <div class="progress-step" data-step="3">
                    <div class="step-number">3</div>
                    <span class="step-label">Documents</span>
                </div>
                <div class="progress-step" data-step="4">
                    <div class="step-number">4</div>
                    <span class="step-label">Review & Submit</span>
                </div>
            </div>

            <form class="license-application-form" id="license-application-form">
                <!-- Step 1: Business Information -->
                <div class="form-step active" data-step="1">
                    <h3 class="step-title">Business Information</h3>
                    
                    <div class="form-grid">
                        <div class="form-group">
                            <label class="form-label" for="business-name">Business Name *</label>
                            <input type="text" id="business-name" class="form-input" placeholder="Enter your business name" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="license-type">License Type *</label>
                            <select id="license-type" class="form-select" required>
                                <option value="">Select license type</option>
                                <option value="small-business">Small Business License</option>
                                <option value="commercial">Commercial License</option>
                                <option value="professional">Professional License</option>
                                <option value="industrial">Industrial License</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="business-category">Business Category *</label>
                            <select id="business-category" class="form-select" required>
                                <option value="">Select category</option>
                                <option value="retail">Retail Trade</option>
                                <option value="food">Food & Restaurant</option>
                                <option value="services">Professional Services</option>
                                <option value="manufacturing">Manufacturing</option>
                                <option value="technology">Technology & IT</option>
                                <option value="healthcare">Healthcare</option>
                                <option value="education">Education</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="business-description">Business Description *</label>
                            <textarea id="business-description" class="form-textarea" rows="3" placeholder="Describe your business activities" required></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="business-address">Business Address *</label>
                            <input type="text" id="business-address" class="form-input" placeholder="Enter business address" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="business-phone">Business Phone *</label>
                            <input type="tel" id="business-phone" class="form-input" placeholder="+237 233 000 000" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="business-email">Business Email *</label>
                            <input type="email" id="business-email" class="form-input" placeholder="business@example.com" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="start-date">Planned Start Date *</label>
                            <input type="date" id="start-date" class="form-input" required>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn btn-outline" onclick="previousStep()">Previous</button>
                        <button type="button" class="btn btn-primary" onclick="nextStep()">Next Step</button>
                    </div>
                </div>

                <!-- Step 2: Owner Details -->
                <div class="form-step" data-step="2">
                    <h3 class="step-title">Owner Information</h3>
                    
                    <div class="form-grid">
                        <div class="form-group">
                            <label class="form-label" for="owner-name">Owner Full Name *</label>
                            <input type="text" id="owner-name" class="form-input" placeholder="John Doe" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="owner-id">ID Number *</label>
                            <input type="text" id="owner-id" class="form-input" placeholder="National ID number" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="owner-phone">Phone Number *</label>
                            <input type="tel" id="owner-phone" class="form-input" placeholder="+237 233 000 000" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="owner-email">Email Address *</label>
                            <input type="email" id="owner-email" class="form-input" placeholder="owner@example.com" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="owner-address">Residential Address *</label>
                            <input type="text" id="owner-address" class="form-input" placeholder="Enter residential address" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="owner-dob">Date of Birth *</label>
                            <input type="date" id="owner-dob" class="form-input" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="owner-nationality">Nationality *</label>
                            <select id="owner-nationality" class="form-select" required>
                                <option value="">Select nationality</option>
                                <option value="cameroonian">Cameroonian</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn btn-outline" onclick="previousStep()">Previous</button>
                        <button type="button" class="btn btn-primary" onclick="nextStep()">Next Step</button>
                    </div>
                </div>

                <!-- Step 3: Documents -->
                <div class="form-step" data-step="3">
                    <h3 class="step-title">Required Documents</h3>
                    
                    <div class="documents-upload">
                        <div class="upload-item">
                            <div class="upload-info">
                                <h4 class="upload-title">Business Registration Document</h4>
                                <p class="upload-description">Upload your business registration certificate or proof of business name reservation</p>
                            </div>
                            <div class="upload-area">
                                <input type="file" id="business-doc" class="file-input" accept=".pdf,.jpg,.png" required>
                                <label for="business-doc" class="upload-label">
                                    <span class="material-symbols-outlined">upload_file</span>
                                    <span>Choose File</span>
                                </label>
                                <span class="file-name">No file selected</span>
                            </div>
                        </div>

                        <div class="upload-item">
                            <div class="upload-info">
                                <h4 class="upload-title">Owner ID Document</h4>
                                <p class="upload-description">Upload a clear copy of the owner's national ID or passport</p>
                            </div>
                            <div class="upload-area">
                                <input type="file" id="owner-id-doc" class="file-input" accept=".pdf,.jpg,.png" required>
                                <label for="owner-id-doc" class="upload-label">
                                    <span class="material-symbols-outlined">upload_file</span>
                                    <span>Choose File</span>
                                </label>
                                <span class="file-name">No file selected</span>
                            </div>
                        </div>

                        <div class="upload-item">
                            <div class="upload-info">
                                <h4 class="upload-title">Tax Clearance Certificate</h4>
                                <p class="upload-description">Upload tax clearance certificate (if applicable)</p>
                            </div>
                            <div class="upload-area">
                                <input type="file" id="tax-clearance" class="file-input" accept=".pdf,.jpg,.png">
                                <label for="tax-clearance" class="upload-label">
                                    <span class="material-symbols-outlined">upload_file</span>
                                    <span>Choose File</span>
                                </label>
                                <span class="file-name">No file selected</span>
                            </div>
                        </div>

                        <div class="upload-item">
                            <div class="upload-info">
                                <h4 class="upload-title">Location Map</h4>
                                <p class="upload-description">Upload a map showing the location of your business</p>
                            </div>
                            <div class="upload-area">
                                <input type="file" id="location-map" class="file-input" accept=".pdf,.jpg,.png">
                                <label for="location-map" class="upload-label">
                                    <span class="material-symbols-outlined">upload_file</span>
                                    <span>Choose File</span>
                                </label>
                                <span class="file-name">No file selected</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn btn-outline" onclick="previousStep()">Previous</button>
                        <button type="button" class="btn btn-primary" onclick="nextStep()">Next Step</button>
                    </div>
                </div>

                <!-- Step 4: Review & Submit -->
                <div class="form-step" data-step="4">
                    <h3 class="step-title">Review Application</h3>
                    
                    <div class="application-summary">
                        <div class="summary-section">
                            <h4 class="summary-title">Business Information</h4>
                            <div class="summary-content" id="business-summary">
                                <!-- Will be populated dynamically -->
                            </div>
                        </div>

                        <div class="summary-section">
                            <h4 class="summary-title">Owner Information</h4>
                            <div class="summary-content" id="owner-summary">
                                <!-- Will be populated dynamically -->
                            </div>
                        </div>

                        <div class="summary-section">
                            <h4 class="summary-title">Documents Uploaded</h4>
                            <div class="summary-content" id="documents-summary">
                                <!-- Will be populated dynamically -->
                            </div>
                        </div>

                        <div class="declaration-section">
                            <label class="checkbox-item">
                                <input type="checkbox" id="declaration" required>
                                <span>I declare that all information provided is true and accurate</span>
                            </label>
                            <label class="checkbox-item">
                                <input type="checkbox" id="terms" required>
                                <span>I agree to the terms and conditions of business licensing</span>
                            </label>
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn btn-outline" onclick="previousStep()">Previous</button>
                        <button type="submit" class="btn btn-secondary">Submit Application</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Application Status Section -->
<section class="application-status-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Check Application Status</h2>
            <p class="section-subtitle">Track the progress of your business license application</p>
        </div>

        <div class="status-check">
            <div class="status-form">
                <div class="form-group">
                    <label class="form-label" for="application-id">Application ID</label>
                    <input type="text" id="application-id" class="form-input" placeholder="Enter your application ID">
                </div>
                <div class="form-group">
                    <label class="form-label" for="tracking-phone">Phone Number</label>
                    <input type="tel" id="tracking-phone" class="form-input" placeholder="Phone number used in application">
                </div>
                <button class="btn btn-primary" onclick="checkApplicationStatus()">Check Status</button>
            </div>

            <div class="status-result" id="status-result" style="display: none;">
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
            <p class="section-subtitle">Common questions about business licensing</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <span>How long does it take to process a business license application?</span>
                    <span class="material-symbols-outlined">expand_more</span>
                </button>
                <div class="faq-answer">
                    <p>Processing time varies by license type: Small Business (3-5 days), Commercial (5-7 days), Professional (7-10 days), and Industrial (10-14 days). Processing begins after all required documents are submitted.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <span>What documents are required for a business license?</span>
                    <span class="material-symbols-outlined">expand_more</span>
                </button>
                <div class="faq-answer">
                    <p>Required documents include: Business registration certificate, owner's national ID, tax clearance certificate (if applicable), and a location map. Additional documents may be required based on business type.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <span>How much does a business license cost?</span>
                    <span class="material-symbols-outlined">expand_more</span>
                </button>
                <div class="faq-answer">
                    <p>License fees vary by type: Small Business (₣25,000/year), Commercial (₣75,000/year), Professional (₣50,000/year), and Industrial (₣150,000/year). Fees are paid annually upon renewal.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFAQ(this)">
                    <span>Can I transfer my business license to someone else?</span>
                    <span class="material-symbols-outlined">expand_more</span>
                </button>
                <div class="faq-answer">
                    <p>Business licenses are non-transferable. If there's a change in ownership, the new owner must apply for a new license. However, you can update business information without changing ownership.</p>
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
/* Business License Page Styles */
.business-license-hero {
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-container) 100%);
}

/* License Types Section */
.license-types-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.license-types-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.license-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    text-align: center;
    transition: all 0.3s ease;
    border: 1px solid var(--outline-variant);
}

.license-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    border-color: var(--primary);
}

.license-icon {
    width: 4rem;
    height: 4rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-lg);
}

.license-icon .material-symbols-outlined {
    font-size: 2rem;
}

.license-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.license-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.license-details {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
    margin-bottom: var(--spacing-lg);
}

.detail-item {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: var(--spacing-xs);
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.detail-item .material-symbols-outlined {
    color: var(--primary);
    font-size: 1rem;
}

/* Application Form Section */
.application-form-section {
    padding: var(--spacing-3xl) 0;
}

.form-container {
    max-width: 800px;
    margin: 0 auto;
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
}

.form-header {
    text-align: center;
    margin-bottom: var(--spacing-xl);
}

.form-title {
    font-size: 1.75rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.form-subtitle {
    color: var(--on-surface-variant);
}

/* Form Progress */
.form-progress {
    display: flex;
    justify-content: space-between;
    margin-bottom: var(--spacing-2xl);
    position: relative;
}

.form-progress::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    height: 2px;
    background-color: var(--outline-variant);
    z-index: 0;
}

.progress-step {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: var(--spacing-xs);
    position: relative;
    z-index: 1;
}

.step-number {
    width: 2.5rem;
    height: 2.5rem;
    border-radius: 50%;
    background-color: var(--surface-container);
    border: 2px solid var(--outline-variant);
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    color: var(--on-surface-variant);
    transition: all 0.3s ease;
}

.progress-step.active .step-number {
    background-color: var(--primary);
    border-color: var(--primary);
    color: var(--on-primary);
}

.progress-step.completed .step-number {
    background-color: var(--tertiary);
    border-color: var(--tertiary);
    color: var(--on-tertiary);
}

.step-label {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
    text-align: center;
}

.progress-step.active .step-label {
    color: var(--primary);
    font-weight: 600;
}

/* Form Steps */
.form-step {
    display: none;
}

.form-step.active {
    display: block;
}

.step-title {
    font-size: 1.25rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
}

.form-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: var(--spacing-lg);
    margin-bottom: var(--spacing-xl);
}

/* Document Upload */
.documents-upload {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-lg);
    margin-bottom: var(--spacing-xl);
}

.upload-item {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: var(--spacing-lg);
    align-items: center;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
}

.upload-title {
    font-weight: 600;
    color: var(--on-surface);
    margin-bottom: var(--spacing-xs);
}

.upload-description {
    font-size: 0.875rem;
    color: var(--on-surface-variant);
}

.upload-area {
    position: relative;
}

.file-input {
    display: none;
}

.upload-label {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: var(--spacing-xs);
    padding: var(--spacing-md);
    background-color: var(--surface-container-lowest);
    border: 2px dashed var(--outline-variant);
    border-radius: var(--radius-md);
    cursor: pointer;
    transition: all 0.2s ease;
}

.upload-label:hover {
    border-color: var(--primary);
    background-color: var(--surface-container-low);
}

.file-name {
    display: block;
    margin-top: var(--spacing-sm);
    font-size: 0.75rem;
    color: var(--on-surface-variant);
    text-align: center;
}

/* Application Summary */
.application-summary {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-lg);
    margin-bottom: var(--spacing-xl);
}

.summary-section {
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
}

.summary-title {
    font-weight: 600;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.summary-content {
    color: var(--on-surface-variant);
    line-height: 1.6;
}

.declaration-section {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-md);
    margin-bottom: var(--spacing-xl);
}

.checkbox-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    cursor: pointer;
}

.checkbox-item input[type="checkbox"] {
    accent-color: var(--primary);
}

/* Form Actions */
.form-actions {
    display: flex;
    justify-content: space-between;
    gap: var(--spacing-lg);
}

/* Application Status */
.application-status-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.status-check {
    max-width: 600px;
    margin: 0 auto;
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.status-form {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--spacing-lg);
    margin-bottom: var(--spacing-lg);
}

.status-result {
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
    margin-top: var(--spacing-lg);
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
    border-radius: var(--radius-md);
    margin-bottom: var(--spacing-md);
    overflow: hidden;
    border: 1px solid var(--outline-variant);
}

.faq-question {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--spacing-lg);
    background: none;
    border: none;
    text-align: left;
    font-weight: 600;
    color: var(--on-surface);
    cursor: pointer;
    transition: all 0.2s ease;
}

.faq-question:hover {
    background-color: var(--surface-container-low);
}

.faq-answer {
    padding: 0 var(--spacing-lg) var(--spacing-lg);
    color: var(--on-surface-variant);
    line-height: 1.6;
    display: none;
}

.faq-item.open .faq-answer {
    display: block;
}

.faq-item.open .faq-question .material-symbols-outlined {
    transform: rotate(180deg);
}

/* Responsive Design */
@media (max-width: 768px) {
    .license-types-grid {
        grid-template-columns: 1fr;
    }
    
    .form-grid {
        grid-template-columns: 1fr;
    }
    
    .upload-item {
        grid-template-columns: 1fr;
        text-align: center;
    }
    
    .form-progress {
        flex-wrap: wrap;
        gap: var(--spacing-md);
    }
    
    .status-form {
        grid-template-columns: 1fr;
    }
    
    .form-actions {
        flex-direction: column;
    }
    
    .form-actions .btn {
        width: 100%;
    }
}

@media (max-width: 480px) {
    .form-container {
        padding: var(--spacing-lg);
    }
    
    .form-title {
        font-size: 1.5rem;
    }
    
    .step-title {
        font-size: 1.125rem;
    }
    
    .upload-label {
        padding: var(--spacing-sm);
    }
}
</style>

<script>
// Multi-step form handling
let currentStep = 1;
const totalSteps = 4;

function nextStep() {
    if (validateCurrentStep()) {
        if (currentStep < totalSteps) {
            // Update progress
            document.querySelector(`.progress-step[data-step="${currentStep}"]`).classList.add('completed');
            document.querySelector(`.progress-step[data-step="${currentStep}"]`).classList.remove('active');
            
            currentStep++;
            
            // Show next step
            document.querySelector(`.form-step[data-step="${currentStep}"]`).classList.add('active');
            document.querySelector(`.progress-step[data-step="${currentStep}"]`).classList.add('active');
            
            // Update summary if on last step
            if (currentStep === 4) {
                updateApplicationSummary();
            }
            
            // Scroll to top of form
            document.querySelector('.form-container').scrollIntoView({ behavior: 'smooth' });
        }
    }
}

function previousStep() {
    if (currentStep > 1) {
        // Update progress
        document.querySelector(`.progress-step[data-step="${currentStep}"]`).classList.remove('active');
        
        currentStep--;
        
        // Show previous step
        document.querySelector(`.form-step[data-step="${currentStep}"]`).classList.add('active');
        document.querySelector(`.progress-step[data-step="${currentStep}"]`).classList.remove('completed');
        document.querySelector(`.progress-step[data-step="${currentStep}"]`).classList.add('active');
        
        // Scroll to top of form
        document.querySelector('.form-container').scrollIntoView({ behavior: 'smooth' });
    }
}

function validateCurrentStep() {
    const currentStepElement = document.querySelector(`.form-step[data-step="${currentStep}"]`);
    const requiredFields = currentStepElement.querySelectorAll('[required]');
    let isValid = true;
    
    requiredFields.forEach(field => {
        if (!field.value.trim()) {
            isValid = false;
            field.classList.add('error');
        } else {
            field.classList.remove('error');
        }
    });
    
    if (!isValid) {
        showNotification('Please fill in all required fields', 'error');
    }
    
    return isValid;
}

function updateApplicationSummary() {
    // Business summary
    const businessSummary = document.getElementById('business-summary');
    businessSummary.innerHTML = `
        <p><strong>Business Name:</strong> ${document.getElementById('business-name').value}</p>
        <p><strong>License Type:</strong> ${document.getElementById('license-type').value}</p>
        <p><strong>Business Category:</strong> ${document.getElementById('business-category').value}</p>
        <p><strong>Address:</strong> ${document.getElementById('business-address').value}</p>
        <p><strong>Phone:</strong> ${document.getElementById('business-phone').value}</p>
        <p><strong>Email:</strong> ${document.getElementById('business-email').value}</p>
    `;
    
    // Owner summary
    const ownerSummary = document.getElementById('owner-summary');
    ownerSummary.innerHTML = `
        <p><strong>Name:</strong> ${document.getElementById('owner-name').value}</p>
        <p><strong>ID Number:</strong> ${document.getElementById('owner-id').value}</p>
        <p><strong>Phone:</strong> ${document.getElementById('owner-phone').value}</p>
        <p><strong>Email:</strong> ${document.getElementById('owner-email').value}</p>
        <p><strong>Address:</strong> ${document.getElementById('owner-address').value}</p>
    `;
    
    // Documents summary
    const documentsSummary = document.getElementById('documents-summary');
    const uploadedDocs = [];
    
    ['business-doc', 'owner-id-doc', 'tax-clearance', 'location-map'].forEach(docId => {
        const input = document.getElementById(docId);
        if (input.files.length > 0) {
            uploadedDocs.push(`<p>• ${input.files[0].name}</p>`);
        }
    });
    
    documentsSummary.innerHTML = uploadedDocs.length > 0 ? uploadedDocs.join('') : '<p>No documents uploaded</p>';
}

// License type selection
function selectLicenseType(type) {
    document.getElementById('license-type').value = type;
    document.getElementById('application-form').scrollIntoView({ behavior: 'smooth' });
    showNotification(`Selected: ${type.replace('-', ' ').toUpperCase()}`, 'success');
}

// File upload handling
document.querySelectorAll('.file-input').forEach(input => {
    input.addEventListener('change', function() {
        const fileName = this.files[0]?.name || 'No file selected';
        this.parentElement.querySelector('.file-name').textContent = fileName;
    });
});

// Form submission
document.getElementById('license-application-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate declarations
    const declaration = document.getElementById('declaration').checked;
    const terms = document.getElementById('terms').checked;
    
    if (!declaration || !terms) {
        showNotification('Please accept the declaration and terms', 'error');
        return;
    }
    
    // Show loading
    const submitBtn = this.querySelector('button[type="submit"]');
    submitBtn.disabled = true;
    submitBtn.innerHTML = '<span class="material-symbols-outlined">hourglass_empty</span> Processing...';
    
    // Simulate submission
    setTimeout(() => {
        showNotification('Application submitted successfully! Your application ID is: BL' + Date.now(), 'success');
        this.reset();
        currentStep = 1;
        updateFormProgress();
        submitBtn.disabled = false;
        submitBtn.innerHTML = 'Submit Application';
    }, 3000);
});

// Application status check
function checkApplicationStatus() {
    const applicationId = document.getElementById('application-id').value;
    const phone = document.getElementById('tracking-phone').value;
    
    if (!applicationId || !phone) {
        showNotification('Please enter both application ID and phone number', 'error');
        return;
    }
    
    // Simulate status check
    const statusResult = document.getElementById('status-result');
    statusResult.innerHTML = `
        <div class="status-info">
            <h4>Application Status: Under Review</h4>
            <p><strong>Application ID:</strong> ${applicationId}</p>
            <p><strong>Submitted:</strong> 3 days ago</p>
            <p><strong>Current Status:</strong> Your application is being reviewed by our licensing team.</p>
            <p><strong>Expected Completion:</strong> 2-3 business days</p>
            <div class="status-timeline">
                <div class="timeline-item completed">
                    <span class="material-symbols-outlined">check_circle</span>
                    <span>Application Submitted</span>
                </div>
                <div class="timeline-item completed">
                    <span class="material-symbols-outlined">check_circle</span>
                    <span>Documents Verified</span>
                </div>
                <div class="timeline-item active">
                    <span class="material-symbols-outlined">hourglass_empty</span>
                    <span>Under Review</span>
                </div>
                <div class="timeline-item">
                    <span class="material-symbols-outlined">pending</span>
                    <span>Approval Pending</span>
                </div>
            </div>
        </div>
    `;
    statusResult.style.display = 'block';
}

// FAQ toggle
function toggleFAQ(button) {
    const faqItem = button.parentElement;
    faqItem.classList.toggle('open');
}

// Initialize form progress
function updateFormProgress() {
    document.querySelectorAll('.progress-step').forEach((step, index) => {
        step.classList.remove('active', 'completed');
        if (index + 1 === currentStep) {
            step.classList.add('active');
        } else if (index + 1 < currentStep) {
            step.classList.add('completed');
        }
    });
    
    document.querySelectorAll('.form-step').forEach(step => {
        step.classList.remove('active');
    });
    
    document.querySelector(`.form-step[data-step="${currentStep}"]`).classList.add('active');
}
</script>
