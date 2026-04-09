<?php
/**
 * Bamenda City Council E-Governance Platform
 * Business License Application Form
 */

// Include access control
require_once __DIR__ . '/../../core/access-control.php';

// Require authentication to access this page
require_authentication();

// Set page metadata
$page_title = 'Business License Application | Bamenda City Council';
$page_description = 'Apply for business licenses including small business, commercial, professional, and industrial licenses.';
$page_keywords = 'business license application, permit application, commercial license, Bamenda business';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Services', 'url' => '/stitch1/pages/citizen-services/services.php'],
    ['title' => 'Business License', 'url' => '/stitch1/pages/citizen-services/business-license.php'],
    ['title' => 'Application', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero business-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-government-building.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Business Services</span>
            <h1 class="hero-title">Business License Application</h1>
            <p class="hero-subtitle">
                Apply for your business license to operate legally within Bamenda municipality. Choose from small business, commercial, professional, or industrial licenses.
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
                    <span class="material-symbols-outlined">description</span>
                    License Application
                </h2>
                <p class="section-subtitle">
                    Complete all required fields and submit supporting documents for your business license application.
                </p>
            </div>

            <form class="application-form" id="businessLicenseForm" method="POST" action="../../core/services.php" enctype="multipart/form-data">
                <input type="hidden" name="action" value="submit_business_license">
                <input type="hidden" name="license_type" id="licenseType">
                
                <!-- Business Information -->
                <div class="form-section">
                    <h3 class="section-title">Business Information</h3>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="business_name" class="form-label">
                                <span class="material-symbols-outlined">business</span>
                                Business Name *
                            </label>
                            <input 
                                type="text" 
                                id="business_name" 
                                name="business_name" 
                                class="form-input" 
                                placeholder="Enter your registered business name"
                                required
                                maxlength="255"
                            >
                            <span class="form-error" id="business_name-error"></span>
                        </div>
                        
                        <div class="form-group">
                            <label for="business_category" class="form-label">
                                <span class="material-symbols-outlined">category</span>
                                Business Category *
                            </label>
                            <select id="business_category" name="business_category" class="form-input" required>
                                <option value="">Select Business Category</option>
                                <option value="retail">Retail & Trade</option>
                                <option value="hospitality">Hospitality & Tourism</option>
                                <option value="manufacturing">Manufacturing</option>
                                <option value="technology">Technology & IT</option>
                                <option value="agriculture">Agriculture</option>
                                <option value="construction">Construction</option>
                                <option value="transport">Transportation</option>
                                <option value="education">Education</option>
                                <option value="healthcare">Healthcare</option>
                                <option value="financial">Financial Services</option>
                                <option value="professional">Professional Services</option>
                                <option value="other">Other</option>
                            </select>
                            <span class="form-error" id="business_category-error"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="business_description" class="form-label">
                            <span class="material-symbols-outlined">description</span>
                            Business Description
                        </label>
                        <textarea 
                            id="business_description" 
                            name="business_description" 
                            class="form-input" 
                            rows="4"
                            placeholder="Describe your business activities and services"
                        ></textarea>
                        <span class="form-error" id="business_description-error"></span>
                    </div>

                    <div class="form-group">
                        <label for="business_address" class="form-label">
                            <span class="material-symbols-outlined">location_on</span>
                            Business Address *
                        </label>
                        <textarea 
                            id="business_address" 
                            name="business_address" 
                            class="form-input" 
                            rows="3"
                            placeholder="Enter your business location address"
                            required
                        ></textarea>
                        <span class="form-error" id="business_address-error"></span>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="business_phone" class="form-label">
                                <span class="material-symbols-outlined">phone</span>
                                Business Phone
                            </label>
                            <input 
                                type="tel" 
                                id="business_phone" 
                                name="business_phone" 
                                class="form-input" 
                                placeholder="+237 XXX XXX XXX"
                                maxlength="20"
                            >
                            <span class="form-error" id="business_phone-error"></span>
                        </div>
                        
                        <div class="form-group">
                            <label for="business_email" class="form-label">
                                <span class="material-symbols-outlined">email</span>
                                Business Email
                            </label>
                            <input 
                                type="email" 
                                id="business_email" 
                                name="business_email" 
                                class="form-input" 
                                placeholder="business@example.com"
                                maxlength="255"
                            >
                            <span class="form-error" id="business_email-error"></span>
                        </div>
                    </div>
                </div>

                <!-- License Type Selection -->
                <div class="form-section">
                    <h3 class="section-title">License Type</h3>
                    
                    <div class="license-types">
                        <div class="license-type-card" data-type="small_business">
                            <div class="license-icon">
                                <span class="material-symbols-outlined">store</span>
                            </div>
                            <h4>Small Business License</h4>
                            <p>For small enterprises, sole proprietors, and family businesses</p>
                            <button type="button" class="btn btn-outline select-license" data-type="small_business">
                                Select This License
                            </button>
                        </div>
                        
                        <div class="license-type-card" data-type="commercial">
                            <div class="license-icon">
                                <span class="material-symbols-outlined">business</span>
                            </div>
                            <h4>Commercial License</h4>
                            <p>For medium to large commercial businesses and corporations</p>
                            <button type="button" class="btn btn-outline select-license" data-type="commercial">
                                Select This License
                            </button>
                        </div>
                        
                        <div class="license-type-card" data-type="professional">
                            <div class="license-icon">
                                <span class="material-symbols-outlined">work</span>
                            </div>
                            <h4>Professional License</h4>
                            <p>For professional services, consulting firms, and practitioners</p>
                            <button type="button" class="btn btn-outline select-license" data-type="professional">
                                Select This License
                            </button>
                        </div>
                        
                        <div class="license-type-card" data-type="industrial">
                            <div class="license-icon">
                                <span class="material-symbols-outlined">factory</span>
                            </div>
                            <h4>Industrial License</h4>
                            <p>For manufacturing, processing, and industrial operations</p>
                            <button type="button" class="btn btn-outline select-license" data-type="industrial">
                                Select This License
                            </button>
                        </div>
                    </div>
                    
                    <div class="selected-license-info" id="selectedLicenseInfo" style="display: none;">
                        <h4>Selected: <span id="selectedLicenseName"></span></h4>
                        <p id="selectedLicenseDescription"></p>
                    </div>
                </div>

                <!-- Document Upload -->
                <div class="form-section">
                    <h3 class="section-title">Supporting Documents</h3>
                    
                    <div class="document-upload">
                        <div class="upload-group">
                            <label for="id_document" class="form-label">
                                <span class="material-symbols-outlined">badge</span>
                                National ID Document *
                            </label>
                            <input 
                                type="file" 
                                id="id_document" 
                                name="documents[]" 
                                class="file-input" 
                                accept=".pdf,.jpg,.jpeg,.png"
                                required
                            >
                            <span class="file-help">PDF, JPG, or PNG (Max 5MB)</span>
                            <span class="form-error" id="id_document-error"></span>
                        </div>
                        
                        <div class="upload-group">
                            <label for="proof_address" class="form-label">
                                <span class="material-symbols-outlined">description</span>
                                Proof of Address *
                            </label>
                            <input 
                                type="file" 
                                id="proof_address" 
                                name="documents[]" 
                                class="file-input" 
                                accept=".pdf,.jpg,.jpeg,.png"
                                required
                            >
                            <span class="file-help">Utility bill or lease agreement (Max 5MB)</span>
                            <span class="form-error" id="proof_address-error"></span>
                        </div>
                        
                        <div class="upload-group">
                            <label for="business_registration" class="form-label">
                                <span class="material-symbols-outlined">business</span>
                                Business Registration Certificate *
                            </label>
                            <input 
                                type="file" 
                                id="business_registration" 
                                name="documents[]" 
                                class="file-input" 
                                accept=".pdf,.jpg,.jpeg,.png"
                                required
                            >
                            <span class="file-help">Official business registration document (Max 5MB)</span>
                            <span class="form-error" id="business_registration-error"></span>
                        </div>
                    </div>
                </div>

                <!-- Terms and Submit -->
                <div class="form-section">
                    <div class="form-group checkbox-group">
                        <label class="checkbox-label">
                            <input type="checkbox" id="terms_agree" name="terms_agree" value="1" required>
                            <span class="checkbox-custom"></span>
                            I certify that all information provided is accurate and truthful
                        </label>
                        <span class="form-error" id="terms_agree-error"></span>
                    </div>

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
/* Application Form Styles */
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
    background-color: var(--primary);
    color: var(--on-primary);
    text-align: center;
}

.application-form {
    padding: var(--spacing-xl);
}

.form-section {
    margin-bottom: var(--spacing-2xl);
}

.license-types {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: var(--spacing-lg);
    margin-bottom: var(--spacing-xl);
}

.license-type-card {
    padding: var(--spacing-lg);
    border: 2px solid var(--outline-variant);
    border-radius: var(--radius-md);
    text-align: center;
    cursor: pointer;
    transition: all 0.3s ease;
}

.license-type-card:hover {
    border-color: var(--primary);
    background-color: var(--surface-container-low);
}

.license-type-card.selected {
    border-color: var(--primary);
    background-color: var(--primary-container);
}

.license-icon {
    width: 3rem;
    height: 3rem;
    margin: 0 auto var(--spacing-md);
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.license-type-card h4 {
    margin: var(--spacing-md) 0 var(--spacing-sm);
    color: var(--on-surface);
    font-weight: 600;
}

.license-type-card p {
    color: var(--on-surface-variant);
    font-size: 0.875rem;
    line-height: 1.4;
}

.select-license {
    margin-top: var(--spacing-md);
    width: 100%;
}

.selected-license-info {
    background-color: var(--primary-container);
    padding: var(--spacing-lg);
    border-radius: var(--radius-md);
    margin-top: var(--spacing-lg);
    text-align: center;
}

.document-upload {
    display: grid;
    gap: var(--spacing-lg);
}

.upload-group {
    border: 1px dashed var(--outline-variant);
    border-radius: var(--radius-md);
    padding: var(--spacing-lg);
    text-align: center;
}

.file-input {
    width: 100%;
    padding: var(--spacing-md);
    border: 1px solid var(--outline);
    border-radius: var(--radius-md);
    background-color: var(--surface-container-low);
}

.file-help {
    display: block;
    margin-top: var(--spacing-xs);
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

/* Responsive Design */
@media (max-width: 768px) {
    .license-types {
        grid-template-columns: 1fr;
    }
    
    .document-upload {
        grid-template-columns: 1fr;
    }
    
    .form-row {
        flex-direction: column;
        gap: var(--spacing-md);
    }
}
</style>

<script>
// License type selection
document.addEventListener('DOMContentLoaded', function() {
    const licenseCards = document.querySelectorAll('.license-type-card');
    const licenseTypeInput = document.getElementById('licenseType');
    const selectedInfo = document.getElementById('selectedLicenseInfo');
    const selectedName = document.getElementById('selectedLicenseName');
    const selectedDescription = document.getElementById('selectedLicenseDescription');
    
    const licenseInfo = {
        small_business: {
            name: 'Small Business License',
            description: 'For small enterprises, sole proprietors, and family businesses'
        },
        commercial: {
            name: 'Commercial License',
            description: 'For medium to large commercial businesses and corporations'
        },
        professional: {
            name: 'Professional License',
            description: 'For professional services, consulting firms, and practitioners'
        },
        industrial: {
            name: 'Industrial License',
            description: 'For manufacturing, processing, and industrial operations'
        }
    };
    
    licenseCards.forEach(card => {
        card.addEventListener('click', function() {
            // Remove selected class from all cards
            licenseCards.forEach(c => c.classList.remove('selected'));
            
            // Add selected class to clicked card
            this.classList.add('selected');
            
            // Update hidden input
            const type = this.dataset.type;
            licenseTypeInput.value = type;
            
            // Show selected info
            selectedInfo.style.display = 'block';
            selectedName.textContent = licenseInfo[type].name;
            selectedDescription.textContent = licenseInfo[type].description;
        });
    });
    
    // Form validation
    const form = document.getElementById('businessLicenseForm');
    const submitBtn = document.getElementById('submitBtn');
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Basic validation
        let isValid = true;
        const requiredFields = ['business_name', 'business_category', 'business_address'];
        
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
        
        // Check if license type is selected
        if (!licenseTypeInput.value) {
            document.getElementById('selectedLicenseInfo').style.display = 'block';
            document.getElementById('selectedLicenseInfo').innerHTML = '<p style="color: var(--error);">Please select a license type</p>';
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

