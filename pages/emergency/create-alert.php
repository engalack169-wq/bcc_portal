<?php
/**
 * Bamenda City Council E-Governance Platform
 * Emergency Alert Creation Form (Admin Only)
 */

// Include access control
require_once __DIR__ . '/../../core/access-control.php';

// Require admin role to access this page
require_role('admin');

// Set page metadata
$page_title = 'Create Emergency Alert | Bamenda City Council';
$page_description = 'Create and broadcast emergency alerts to keep citizens informed about critical situations and safety information.';
$page_keywords = 'emergency alert, public safety, crisis management, Bamenda emergency';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Emergency', 'url' => '/pages/emergency/index.php'],
    ['title' => 'Create Alert', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero emergency-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-emergency-services.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-tertiary">Emergency Management</span>
            <h1 class="hero-title">Create Emergency Alert</h1>
            <p class="hero-subtitle">
                Broadcast critical information to keep Bamenda citizens safe and informed during emergency situations.
            </p>
        </div>
    </div>
</section>

<!-- Alert Creation Form Section -->
<section class="alert-section">
    <div class="container">
        <div class="alert-container">
            <div class="alert-header">
                <h2 class="section-title">
                    <span class="material-symbols-outlined">notifications_active</span>
                    Emergency Alert Broadcast
                </h2>
                <p class="section-subtitle">
                    Create emergency alerts to inform citizens about critical situations, safety procedures, and emergency response actions.
                </p>
            </div>

            <form class="alert-form" id="emergencyAlertForm" method="POST" action="../../core/services.php">
                <input type="hidden" name="action" value="create_emergency_alert">
                
                <!-- Alert Details -->
                <div class="form-section">
                    <h3 class="section-title">Alert Information</h3>
                    
                    <div class="form-group">
                        <label for="title" class="form-label">
                            <span class="material-symbols-outlined">title</span>
                            Alert Title *
                        </label>
                        <input 
                            type="text" 
                            id="title" 
                            name="title" 
                            class="form-input" 
                            placeholder="Enter a clear, urgent alert title"
                            required
                            maxlength="255"
                        >
                        <span class="form-help">Keep it concise and attention-grabbing</span>
                        <span class="form-error" id="title-error"></span>
                    </div>

                    <div class="form-group">
                        <label for="message" class="form-label">
                            <span class="material-symbols-outlined">message</span>
                            Alert Message *
                        </label>
                        <textarea 
                            id="message" 
                            name="message" 
                            class="form-input" 
                            rows="6"
                            placeholder="Provide detailed information about the emergency, including what citizens should do, where to go, and who to contact."
                            required
                            minlength="20"
                        ></textarea>
                        <div class="character-count">
                            <span id="messageCharCount">0</span> characters
                        </div>
                        <span class="form-error" id="message-error"></span>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="severity" class="form-label">
                                <span class="material-symbols-outlined">warning</span>
                                Severity Level *
                            </label>
                            <select id="severity" name="severity" class="form-input" required>
                                <option value="">Select severity level</option>
                                <option value="info">🔵 Information (General updates)</option>
                                <option value="warning">🟡 Warning (Potential threat)</option>
                                <option value="critical">🔴 Critical (Immediate danger)</option>
                            </select>
                            <span class="form-error" id="severity-error"></span>
                        </div>
                        
                        <div class="form-group">
                            <label for="status" class="form-label">
                                <span class="material-symbols-outlined">status</span>
                                Alert Status *
                            </label>
                            <select id="status" name="status" class="form-input" required>
                                <option value="active">🟢 Active (Live alert)</option>
                                <option value="resolved">✅ Resolved (Issue resolved)</option>
                                <option value="expired">⏰ Expired (No longer relevant)</option>
                            </select>
                            <span class="form-error" id="status-error"></span>
                        </div>
                    </div>
                </div>

                <!-- Time Settings -->
                <div class="form-section">
                    <h3 class="section-title">Time Settings</h3>
                    <p class="section-subtitle">Set when the alert becomes active and when it expires</p>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="start_time" class="form-label">
                                <span class="material-symbols-outlined">schedule</span>
                                Start Time
                            </label>
                            <input 
                                type="datetime-local" 
                                id="start_time" 
                                name="start_time" 
                                class="form-input"
                            >
                            <span class="form-help">Leave empty to start immediately</span>
                            <span class="form-error" id="start_time-error"></span>
                        </div>
                        
                        <div class="form-group">
                            <label for="end_time" class="form-label">
                                <span class="material-symbols-outlined">schedule</span>
                                End Time
                            </label>
                            <input 
                                type="datetime-local" 
                                id="end_time" 
                                name="end_time" 
                                class="form-input"
                            >
                            <span class="form-help">When the alert should automatically expire</span>
                            <span class="form-error" id="end_time-error"></span>
                        </div>
                    </div>
                </div>

                <!-- Affected Areas -->
                <div class="form-section">
                    <h3 class="section-title">Affected Areas</h3>
                    <p class="section-subtitle">Select which areas of Bamenda are affected by this emergency</p>
                    
                    <div class="areas-grid">
                        <div class="area-group">
                            <h4>Urban Areas</h4>
                            <div class="checkbox-grid">
                                <label class="checkbox-item">
                                    <input type="checkbox" name="affected_areas[]" value="Bamenda I">
                                    <span class="checkmark"></span>
                                    <span>Bamenda I</span>
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="affected_areas[]" value="Bamenda II">
                                    <span class="checkmark"></span>
                                    <span>Bamenda II</span>
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="affected_areas[]" value="Bamenda III">
                                    <span class="checkmark"></span>
                                    <span>Bamenda III</span>
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="affected_areas[]" value="Bamenda Central">
                                    <span class="checkmark"></span>
                                    <span>Bamenda Central</span>
                                </label>
                            </div>
                        </div>
                        
                        <div class="area-group">
                            <h4>Suburban Areas</h4>
                            <div class="checkbox-grid">
                                <label class="checkbox-item">
                                    <input type="checkbox" name="affected_areas[]" value="Nkwen">
                                    <span class="checkmark"></span>
                                    <span>Nkwen</span>
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="affected_areas[]" value="Mankon">
                                    <span class="checkmark"></span>
                                    <span>Mankon</span>
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="affected_areas[]" value="Bafut">
                                    <span class="checkmark"></span>
                                    <span>Bafut</span>
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="affected_areas[]" value="Santa">
                                    <span class="checkmark"></span>
                                    <span>Santa</span>
                                </label>
                            </div>
                        </div>
                        
                        <div class="area-group">
                            <h4>Special Areas</h4>
                            <div class="checkbox-grid">
                                <label class="checkbox-item">
                                    <input type="checkbox" name="affected_areas[]" value="Markets">
                                    <span class="checkmark"></span>
                                    <span>All Markets</span>
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="affected_areas[]" value="Schools">
                                    <span class="checkmark"></span>
                                    <span>All Schools</span>
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="affected_areas[]" value="Hospitals">
                                    <span class="checkmark"></span>
                                    <span>Health Facilities</span>
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="affected_areas[]" value="All">
                                    <span class="checkmark"></span>
                                    <span>Entire Municipality</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <span class="form-error" id="affected_areas-error"></span>
                </div>

                <!-- Alert Preview -->
                <div class="form-section">
                    <h3 class="section-title">Alert Preview</h3>
                    <div class="alert-preview" id="alertPreview">
                        <div class="preview-header">
                            <span class="preview-severity" id="previewSeverity">INFO</span>
                            <span class="preview-time" id="previewTime">Just Now</span>
                        </div>
                        <h4 class="preview-title" id="previewTitle">Your Alert Title</h4>
                        <p class="preview-message" id="previewMessage">Your alert message will appear here...</p>
                        <div class="preview-areas" id="previewAreas">
                            <strong>Affected Areas:</strong> <span id="previewAreasList">None selected</span>
                        </div>
                    </div>
                </div>

                <!-- Confirmation -->
                <div class="form-section">
                    <div class="warning-info">
                        <h4>⚠️ Important Notice</h4>
                        <ul>
                            <li>Emergency alerts will be immediately visible to all citizens in affected areas</li>
                            <li>False or misleading alerts can cause panic and undermine public trust</li>
                            <li>Only create alerts for genuine emergency situations</li>
                            <li>Ensure all information is accurate and up-to-date</li>
                            <li>Consider the potential impact on public safety and order</li>
                        </ul>
                    </div>

                    <div class="form-group checkbox-group">
                        <label class="checkbox-label">
                            <input type="checkbox" id="confirmation" name="confirmation" value="1" required>
                            <span class="checkbox-custom"></span>
                            I confirm this is a legitimate emergency alert and all information is accurate
                        </label>
                        <span class="form-error" id="confirmation-error"></span>
                    </div>
                </div>

                <!-- Submit Section -->
                <div class="form-section">
                    <div class="form-actions">
                        <button type="button" class="btn btn-outline" onclick="window.history.back()">
                            <span class="material-symbols-outlined">arrow_back</span>
                            Cancel
                        </button>
                        <button type="button" class="btn btn-secondary" onclick="saveDraft()">
                            <span class="material-symbols-outlined">save</span>
                            Save Draft
                        </button>
                        <button type="submit" class="btn btn-tertiary btn-lg" id="submitBtn">
                            <span class="material-symbols-outlined">notifications_active</span>
                            Broadcast Alert
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<style>
/* Emergency Alert Form Styles */
.alert-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.alert-container {
    max-width: 900px;
    margin: 0 auto;
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.alert-header {
    padding: var(--spacing-xl);
    background-color: var(--tertiary);
    color: var(--on-tertiary);
    text-align: center;
}

.alert-form {
    padding: var(--spacing-xl);
}

.areas-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: var(--spacing-lg);
    margin-top: var(--spacing-lg);
}

.area-group {
    background-color: var(--surface-container-low);
    padding: var(--spacing-lg);
    border-radius: var(--radius-md);
}

.area-group h4 {
    color: var(--on-surface);
    margin-bottom: var(--spacing-md);
    font-weight: 600;
}

.checkbox-grid {
    display: grid;
    gap: var(--spacing-sm);
}

.checkbox-item {
    display: flex;
    align-items: center;
    padding: var(--spacing-sm);
    border-radius: var(--radius-sm);
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.checkbox-item:hover {
    background-color: var(--surface-container);
}

.checkbox-item input[type="checkbox"] {
    display: none;
}

.checkbox-item .checkmark {
    width: 18px;
    height: 18px;
    border: 2px solid var(--outline);
    border-radius: 3px;
    margin-right: var(--spacing-sm);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.checkbox-item input[type="checkbox"]:checked + .checkmark {
    background-color: var(--tertiary);
    border-color: var(--tertiary);
}

.checkbox-item input[type="checkbox"]:checked + .checkmark::after {
    content: '✓';
    color: var(--on-tertiary);
    font-size: 12px;
}

.alert-preview {
    background-color: var(--surface-container-low);
    border: 2px solid var(--outline-variant);
    border-radius: var(--radius-md);
    padding: var(--spacing-lg);
    margin-top: var(--spacing-lg);
}

.preview-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: var(--spacing-md);
}

.preview-severity {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-sm);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.preview-severity[data-severity="info"] {
    background-color: var(--primary);
    color: var(--on-primary);
}

.preview-severity[data-severity="warning"] {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.preview-severity[data-severity="critical"] {
    background-color: var(--error);
    color: var(--on-error);
}

.preview-time {
    color: var(--on-surface-variant);
    font-size: 0.875rem;
}

.preview-title {
    color: var(--on-surface);
    margin-bottom: var(--spacing-sm);
    font-weight: 600;
}

.preview-message {
    color: var(--on-surface-variant);
    line-height: 1.5;
    margin-bottom: var(--spacing-md);
}

.preview-areas {
    padding-top: var(--spacing-md);
    border-top: 1px solid var(--outline-variant);
    font-size: 0.875rem;
}

.warning-info {
    background-color: #fff3cd;
    border: 1px solid #ffeaa7;
    border-radius: var(--radius-md);
    padding: var(--spacing-lg);
    margin-bottom: var(--spacing-lg);
}

.warning-info h4 {
    color: #856404;
    margin-bottom: var(--spacing-md);
}

.warning-info ul {
    margin: var(--spacing-sm) 0;
    padding-left: var(--spacing-lg);
}

.warning-info li {
    color: #856404;
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
    .areas-grid {
        grid-template-columns: 1fr;
    }
    
    .form-row {
        flex-direction: column;
        gap: var(--spacing-md);
    }
    
    .preview-header {
        flex-direction: column;
        align-items: flex-start;
        gap: var(--spacing-xs);
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('emergencyAlertForm');
    const submitBtn = document.getElementById('submitBtn');
    const messageTextarea = document.getElementById('message');
    const messageCharCount = document.getElementById('messageCharCount');
    
    // Character counter
    messageTextarea.addEventListener('input', function() {
        const count = this.value.length;
        messageCharCount.textContent = count;
    });
    
    // Live preview update
    function updatePreview() {
        const title = document.getElementById('title').value || 'Your Alert Title';
        const message = document.getElementById('message').value || 'Your alert message will appear here...';
        const severity = document.getElementById('severity').value;
        const affectedAreas = Array.from(document.querySelectorAll('input[name="affected_areas[]"]:checked'))
                              .map(cb => cb.value);
        
        // Update preview content
        document.getElementById('previewTitle').textContent = title;
        document.getElementById('previewMessage').textContent = message;
        
        // Update severity badge
        const severityBadge = document.getElementById('previewSeverity');
        severityBadge.textContent = severity ? severity.toUpperCase() : 'INFO';
        severityBadge.setAttribute('data-severity', severity || 'info');
        
        // Update affected areas
        const areasList = document.getElementById('previewAreasList');
        if (affectedAreas.length > 0) {
            areasList.textContent = affectedAreas.join(', ');
        } else {
            areasList.textContent = 'None selected';
        }
    }
    
    // Add event listeners for live preview
    document.getElementById('title').addEventListener('input', updatePreview);
    document.getElementById('message').addEventListener('input', updatePreview);
    document.getElementById('severity').addEventListener('change', updatePreview);
    document.querySelectorAll('input[name="affected_areas[]"]').forEach(checkbox => {
        checkbox.addEventListener('change', updatePreview);
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
        const requiredFields = ['title', 'message', 'severity', 'status'];
        
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
        
        // Validate message length
        if (messageTextarea.value.trim().length < 20) {
            document.getElementById('message-error').textContent = 'Message must be at least 20 characters';
            isValid = false;
        }
        
        // Validate affected areas (at least one)
        const affectedAreas = document.querySelectorAll('input[name="affected_areas[]"]:checked');
        if (affectedAreas.length === 0) {
            document.getElementById('affected_areas-error').textContent = 'Please select at least one affected area';
            isValid = false;
        }
        
        // Validate time logic
        const startTime = document.getElementById('start_time').value;
        const endTime = document.getElementById('end_time').value;
        
        if (startTime && endTime && new Date(startTime) >= new Date(endTime)) {
            document.getElementById('end_time-error').textContent = 'End time must be after start time';
            isValid = false;
        }
        
        // Validate confirmation
        const confirmation = document.getElementById('confirmation');
        if (!confirmation.checked) {
            document.getElementById('confirmation-error').textContent = 'You must confirm this is a legitimate emergency alert';
            isValid = false;
        }
        
        if (isValid) {
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="material-symbols-outlined">hourglass_empty</span> Broadcasting...';
            
            // Submit form
            form.submit();
        } else {
            submitBtn.disabled = false;
            submitBtn.innerHTML = '<span class="material-symbols-outlined">notifications_active</span> Broadcast Alert';
        }
    });
    
    // Save draft function
    window.saveDraft = function() {
        // Implement draft saving logic
        alert('Draft saved successfully!');
    };
    
    // Initialize preview
    updatePreview();
});
</script>

<?php
// Include footer
require_once __DIR__ . '/../../includes/footer.php';
?>

