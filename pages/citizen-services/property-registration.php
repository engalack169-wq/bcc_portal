<?php
/**
 * Bamenda City Council E-Governance Platform
 * Property Registration Form
 */

// Include access control
require_once __DIR__ . '/../../core/access-control.php';

// Require authentication to access this page
require_authentication();

// Set page metadata
$page_title = 'Property Registration | Bamenda City Council';
$page_description = 'Register your property with Bamenda City Council for legal recognition and documentation.';
$page_keywords = 'property registration, land registry, real estate, Bamenda property';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Services', 'url' => '/pages/citizen-services/services.php'],
    ['title' => 'Property Registry', 'url' => '/pages/citizen-services/property-registry.php'],
    ['title' => 'Registration', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero property-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-government-building.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Public Services</span>
            <h1 class="hero-title">Property Registration</h1>
            <p class="hero-subtitle">
                Register your residential, commercial, agricultural, or industrial property with Bamenda City Council for official recognition and legal documentation.
            </p>
        </div>
    </div>
</section>

<!-- Registration Form Section -->
<section class="registration-section">
    <div class="container">
        <div class="registration-container">
            <div class="registration-header">
                <h2 class="section-title">
                    <span class="material-symbols-outlined">apartment</span>
                    Property Registration
                </h2>
                <p class="section-subtitle">
                    Complete all required fields and submit supporting documents to register your property with the municipal registry.
                </p>
            </div>

            <form class="registration-form" id="propertyForm" method="POST" action="../../core/services.php" enctype="multipart/form-data">
                <input type="hidden" name="action" value="register_property">
                
                <!-- Property Information -->
                <div class="form-section">
                    <h3 class="section-title">Property Information</h3>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="property_id" class="form-label">
                                <span class="material-symbols-outlined">tag</span>
                                Property ID *
                            </label>
                            <input 
                                type="text" 
                                id="property_id" 
                                name="property_id" 
                                class="form-input" 
                                placeholder="Enter unique property identifier"
                                required
                                maxlength="50"
                            >
                            <span class="form-error" id="property_id-error"></span>
                        </div>
                        
                        <div class="form-group">
                            <label for="property_type" class="form-label">
                                <span class="material-symbols-outlined">category</span>
                                Property Type *
                            </label>
                            <select id="property_type" name="property_type" class="form-input" required>
                                <option value="">Select Property Type</option>
                                <option value="residential">Residential</option>
                                <option value="commercial">Commercial</option>
                                <option value="agricultural">Agricultural</option>
                                <option value="industrial">Industrial</option>
                            </select>
                            <span class="form-error" id="property_type-error"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="title" class="form-label">
                            <span class="material-symbols-outlined">title</span>
                            Property Title *
                        </label>
                        <input 
                            type="text" 
                            id="title" 
                            name="title" 
                            class="form-input" 
                            placeholder="Enter property title or name"
                            required
                            maxlength="255"
                        >
                        <span class="form-error" id="title-error"></span>
                    </div>

                    <div class="form-group">
                        <label for="description" class="form-label">
                            <span class="material-symbols-outlined">description</span>
                            Property Description
                        </label>
                        <textarea 
                            id="description" 
                            name="description" 
                            class="form-input" 
                            rows="4"
                            placeholder="Describe the property, features, and condition"
                        ></textarea>
                        <span class="form-error" id="description-error"></span>
                    </div>

                    <div class="form-group">
                        <label for="address" class="form-label">
                            <span class="material-symbols-outlined">location_on</span>
                            Property Address *
                        </label>
                        <textarea 
                            id="address" 
                            name="address" 
                            class="form-input" 
                            rows="3"
                            placeholder="Enter complete property address including plot number if applicable"
                            required
                        ></textarea>
                        <span class="form-error" id="address-error"></span>
                    </div>
                </div>

                <!-- Property Details -->
                <div class="form-section">
                    <h3 class="section-title">Property Details</h3>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="area" class="form-label">
                                <span class="material-symbols-outlined">straighten</span>
                                Area Size
                            </label>
                            <input 
                                type="number" 
                                id="area" 
                                name="area" 
                                class="form-input" 
                                placeholder="Enter property area"
                                step="0.01"
                                min="0"
                            >
                            <span class="form-error" id="area-error"></span>
                        </div>
                        
                        <div class="form-group">
                            <label for="area_unit" class="form-label">
                                <span class="material-symbols-outlined">square_foot</span>
                                Area Unit
                            </label>
                            <select id="area_unit" name="area_unit" class="form-input">
                                <option value="sqm">Square Meters (m²)</option>
                                <option value="sqft">Square Feet (ft²)</option>
                                <option value="hectares">Hectares (ha)</option>
                                <option value="acres">Acres</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="value" class="form-label">
                                <span class="material-symbols-outlined">payments</span>
                                Estimated Value (XAF)
                            </label>
                            <input 
                                type="number" 
                                id="value" 
                                name="value" 
                                class="form-input" 
                                placeholder="Enter estimated property value"
                                step="0.01"
                                min="0"
                            >
                            <span class="form-error" id="value-error"></span>
                        </div>
                        
                        <div class="form-group">
                            <label for="registration_date" class="form-label">
                                <span class="material-symbols-outlined">calendar_today</span>
                                Registration Date
                            </label>
                            <input 
                                type="date" 
                                id="registration_date" 
                                name="registration_date" 
                                class="form-input"
                            >
                            <span class="form-error" id="registration_date-error"></span>
                        </div>
                    </div>
                </div>

                <!-- Location Coordinates -->
                <div class="form-section">
                    <h3 class="section-title">Location Coordinates (Optional)</h3>
                    
                    <div class="coordinates-info">
                        <p>Enter GPS coordinates to help locate the property on the municipal map.</p>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="latitude" class="form-label">
                                <span class="material-symbols-outlined">my_location</span>
                                Latitude
                            </label>
                            <input 
                                type="number" 
                                id="latitude" 
                                name="coordinates[latitude]" 
                                class="form-input" 
                                placeholder="e.g., 5.9631"
                                step="0.000001"
                                min="-90"
                                max="90"
                            >
                            <span class="form-error" id="latitude-error"></span>
                        </div>
                        
                        <div class="form-group">
                            <label for="longitude" class="form-label">
                                <span class="material-symbols-outlined">my_location</span>
                                Longitude
                            </label>
                            <input 
                                type="number" 
                                id="longitude" 
                                name="coordinates[longitude]" 
                                class="form-input" 
                                placeholder="e.g., 10.1849"
                                step="0.000001"
                                min="-180"
                                max="180"
                            >
                            <span class="form-error" id="longitude-error"></span>
                        </div>
                    </div>
                </div>

                <!-- Document Upload -->
                <div class="form-section">
                    <h3 class="section-title">Supporting Documents</h3>
                    
                    <div class="document-upload">
                        <div class="upload-group">
                            <label for="title_deed" class="form-label">
                                <span class="material-symbols-outlined">description</span>
                                Title Deed *
                            </label>
                            <input 
                                type="file" 
                                id="title_deed" 
                                name="documents[]" 
                                class="file-input" 
                                accept=".pdf,.jpg,.jpeg,.png"
                                required
                            >
                            <span class="file-help">Title deed or ownership document (Max 5MB)</span>
                            <span class="form-error" id="title_deed-error"></span>
                        </div>
                        
                        <div class="upload-group">
                            <label for="id_document" class="form-label">
                                <span class="material-symbols-outlined">badge</span>
                                Owner's National ID *
                            </label>
                            <input 
                                type="file" 
                                id="id_document" 
                                name="documents[]" 
                                class="file-input" 
                                accept=".pdf,.jpg,.jpeg,.png"
                                required
                            >
                            <span class="file-help">Owner's national ID document (Max 5MB)</span>
                            <span class="form-error" id="id_document-error"></span>
                        </div>
                        
                        <div class="upload-group">
                            <label for="tax_clearance" class="form-label">
                                <span class="material-symbols-outlined">receipt</span>
                                Tax Clearance Certificate *
                            </label>
                            <input 
                                type="file" 
                                id="tax_clearance" 
                                name="documents[]" 
                                class="file-input" 
                                accept=".pdf,.jpg,.jpeg,.png"
                                required
                            >
                            <span class="file-help">Property tax clearance certificate (Max 5MB)</span>
                            <span class="form-error" id="tax_clearance-error"></span>
                        </div>
                        
                        <div class="upload-group">
                            <label for="survey_plan" class="form-label">
                                <span class="material-symbols-outlined">map</span>
                                Survey Plan (Optional)
                            </label>
                            <input 
                                type="file" 
                                id="survey_plan" 
                                name="documents[]" 
                                class="file-input" 
                                accept=".pdf,.jpg,.jpeg,.png"
                            >
                            <span class="file-help">Property survey plan or site map (Max 5MB)</span>
                            <span class="form-error" id="survey_plan-error"></span>
                        </div>
                    </div>
                </div>

                <!-- Terms and Submit -->
                <div class="form-section">
                    <div class="form-group checkbox-group">
                        <label class="checkbox-label">
                            <input type="checkbox" id="ownership_certify" name="ownership_certify" value="1" required>
                            <span class="checkbox-custom"></span>
                            I certify that I am the legal owner of this property or have proper authorization to register it
                        </label>
                        <span class="form-error" id="ownership_certify-error"></span>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="btn btn-outline" onclick="window.history.back()">
                            <span class="material-symbols-outlined">arrow_back</span>
                            Back
                        </button>
                        <button type="submit" class="btn btn-primary btn-lg" id="submitBtn">
                            <span class="material-symbols-outlined">send</span>
                            Register Property
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<style>
/* Registration Form Styles */
.registration-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.registration-container {
    max-width: 800px;
    margin: 0 auto;
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.registration-header {
    padding: var(--spacing-xl);
    background-color: var(--primary);
    color: var(--on-primary);
    text-align: center;
}

.registration-form {
    padding: var(--spacing-xl);
}

.coordinates-info {
    background-color: var(--surface-container-low);
    padding: var(--spacing-md);
    border-radius: var(--radius-md);
    margin-bottom: var(--spacing-lg);
    border-left: 4px solid var(--primary);
}

.coordinates-info p {
    margin: 0;
    color: var(--on-surface-variant);
    font-size: 0.875rem;
}

/* Responsive Design */
@media (max-width: 768px) {
    .form-row {
        flex-direction: column;
        gap: var(--spacing-md);
    }
    
    .document-upload {
        grid-template-columns: 1fr;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('propertyForm');
    const submitBtn = document.getElementById('submitBtn');
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Basic validation
        let isValid = true;
        const requiredFields = ['property_id', 'property_type', 'title', 'address'];
        
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
        
        // Validate coordinates if provided
        const latitude = document.getElementById('latitude');
        const longitude = document.getElementById('longitude');
        
        if (latitude.value && (parseFloat(latitude.value) < -90 || parseFloat(latitude.value) > 90)) {
            document.getElementById('latitude-error').textContent = 'Latitude must be between -90 and 90';
            isValid = false;
        }
        
        if (longitude.value && (parseFloat(longitude.value) < -180 || parseFloat(longitude.value) > 180)) {
            document.getElementById('longitude-error').textContent = 'Longitude must be between -180 and 180';
            isValid = false;
        }
        
        if (isValid) {
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="material-symbols-outlined">hourglass_empty</span> Registering...';
            
            // Submit form
            form.submit();
        } else {
            submitBtn.disabled = false;
            submitBtn.innerHTML = '<span class="material-symbols-outlined">send</span> Register Property';
        }
    });
});
</script>

<?php
// Include footer
require_once __DIR__ . '/../../includes/footer.php';
?>

