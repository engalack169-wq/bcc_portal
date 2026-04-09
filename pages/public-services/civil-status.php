<?php
/**
 * Bamenda City Council E-Governance Platform
 * Civil Status Hub Page
 */

// Set page metadata
$page_title = 'Civil Status Hub | Bamenda City Council';
$page_description = 'Access civil status services including birth certificates, marriage certificates, death certificates, and vital records.';
$page_keywords = 'civil status, birth certificate, marriage certificate, death certificate, vital records, Bamenda civil services';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Public Services', 'url' => '../index.php'],
    ['title' => 'Civil Status Hub', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero civil-status-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-public-services.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Civil Status Hub</span>
            <h1 class="hero-title">Vital Records & Certificates</h1>
            <p class="hero-subtitle">
                Access comprehensive civil status services including birth, marriage, and death certificates, plus vital records management.
            </p>
            <div class="hero-actions">
                <a href="#services" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">description</span>
                    Certificate Services
                </a>
                <a href="#apply-certificate" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">how_to_reg</span>
                    Apply Now
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Civil Status Actions</h2>
            <p class="section-subtitle">Quick access to civil status and vital records services</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openBirthCertificate()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">child_care</span>
                </div>
                <h3 class="action-title">Birth Certificate</h3>
                <p class="action-description">Apply for new birth certificates or request copies</p>
            </div>

            <div class="action-card" onclick="openMarriageCertificate()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">favorite</span>
                </div>
                <h3 class="action-title">Marriage Certificate</h3>
                <p class="action-description">Apply for marriage certificates and marriage registration</p>
            </div>

            <div class="action-card" onclick="openDeathCertificate()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">sentiment_very_dissatisfied</span>
                </div>
                <h3 class="action-title">Death Certificate</h3>
                <p class="action-description">Apply for death certificates and death registration</p>
            </div>

            <div class="action-card" onclick="openCertificateVerification()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">verified</span>
                </div>
                <h3 class="action-title">Certificate Verification</h3>
                <p class="action-description">Verify authenticity of civil status certificates</p>
            </div>

            <div class="action-card" onclick="openCertificateCorrection()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">edit</span>
                </div>
                <h3 class="action-title">Certificate Correction</h3>
                <p class="action-description">Request corrections to existing certificates</p>
            </div>

            <div class="action-card" onclick="openCertificateTracking()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">track_changes</span>
                </div>
                <h3 class="action-title">Application Tracking</h3>
                <p class="action-description">Track the status of your certificate applications</p>
            </div>
        </div>
    </div>
</section>

<!-- Civil Status Statistics -->
<section class="civil-status-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">child_care</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">12,456</div>
                    <div class="stat-label">Birth Certificates Issued</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+234 this month</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">favorite</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">3,456</div>
                    <div class="stat-label">Marriage Certificates Issued</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+67 this month</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">sentiment_very_dissatisfied</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">2,345</div>
                    <div class="stat-label">Death Certificates Issued</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+45 this month</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">verified</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">98%</div>
                    <div class="stat-label">Verification Accuracy</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+2% improvement</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Certificate Services -->
<section class="certificate-services-section" id="services">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Certificate Services</h2>
            <p class="section-subtitle">Complete civil status and vital records services</p>
        </div>

        <div class="services-grid">
            <!-- Birth Certificate Service -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">child_care</span>
                </div>
                <h3 class="service-title">Birth Certificate</h3>
                <p class="service-description">Official birth certificate registration and issuance for newborns and late registrations.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>New Birth Registration</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Late Birth Registration</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Certificate Copies</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Name Changes</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Processing: 5-7 working days</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">payments</span>
                        <span>Cost: ₣2,500</span>
                    </div>
                </div>
                <button class="btn btn-primary">Apply Now</button>
            </div>

            <!-- Marriage Certificate Service -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">favorite</span>
                </div>
                <h3 class="service-title">Marriage Certificate</h3>
                <p class="service-description">Official marriage certificate registration for civil, religious, and customary marriages.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Civil Marriage Registration</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Religious Marriage Registration</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Customary Marriage Registration</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Marriage Certificate Copies</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Processing: 7-10 working days</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">payments</span>
                        <span>Cost: ₣3,000</span>
                    </div>
                </div>
                <button class="btn btn-primary">Apply Now</button>
            </div>

            <!-- Death Certificate Service -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">sentiment_very_dissatisfied</span>
                </div>
                <h3 class="service-title">Death Certificate</h3>
                <p class="service-description">Official death certificate registration for all deaths occurring within Bamenda jurisdiction.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Death Registration</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Certificate Issuance</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Certificate Copies</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Death Verification</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Processing: 3-5 working days</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">payments</span>
                        <span>Cost: ₣2,000</span>
                    </div>
                </div>
                <button class="btn btn-primary">Apply Now</button>
            </div>

            <!-- Certificate Verification Service -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">verified</span>
                </div>
                <div class="service-title">Certificate Verification</h3>
                <p class="service-description">Official verification service to authenticate civil status certificates for official purposes.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Authenticity Verification</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Document Validation</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Official Seal Verification</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Digital Verification</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Processing: 2-3 working days</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">payments</span>
                        <span>Cost: ₣1,500</span>
                    </div>
                </div>
                <button class="btn btn-primary">Verify Now</button>
            </div>

            <!-- Certificate Correction Service -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">edit</span>
                </div>
                <h3 class="service-title">Certificate Correction</h3>
                <p class="service-description">Official correction service to fix errors or update information on existing civil status certificates.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Name Corrections</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Date Corrections</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Information Updates</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Spelling Corrections</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Processing: 10-15 working days</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">payments</span>
                        <span>Cost: ₣4,000</span>
                    </div>
                </div>
                <button class="btn btn-primary">Apply Now</button>
            </div>

            <!-- Vital Records Service -->
            <div class="service-card">
                <div class="service-icon">
                    <span class="material-symbols-outlined">folder_shared</span>
                </div>
                <h3 class="service-title">Vital Records Archive</h3>
                <p class="service-description">Access historical vital records and archived civil status documents for research and legal purposes.</p>
                <div class="service-features">
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Historical Records</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Archive Search</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Document Retrieval</span>
                    </div>
                    <div class="feature-item">
                        <span class="material-symbols-outlined">check_circle</span>
                        <span>Certified Copies</span>
                    </div>
                </div>
                <div class="service-details">
                    <div class="detail-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Processing: 5-7 working days</span>
                    </div>
                    <div class="detail-item">
                        <span class="material-symbols-outlined">payments</span>
                        <span>Cost: ₣3,500</span>
                    </div>
                </div>
                <button class="btn btn-primary">Search Records</button>
            </div>
        </div>
    </div>
</section>

<!-- Application Process -->
<section class="application-process-section" id="apply-certificate">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Certificate Application Process</h2>
            <p class="section-subtitle">Simple steps to apply for civil status certificates</p>
        </div>

        <div class="process-steps">
            <div class="step-card">
                <div class="step-number">1</div>
                <div class="step-icon">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <h3 class="step-title">Complete Application Form</h3>
                <p class="step-description">Fill out the appropriate application form with accurate personal and document information.</p>
            </div>

            <div class="step-card">
                <div class="step-number">2</div>
                <div class="step-icon">
                    <span class="material-symbols-outlined">upload_file</span>
                </div>
                <h3 class="step-title">Submit Required Documents</h3>
                <p class="step-description">Upload all necessary supporting documents including identification and supporting evidence.</p>
            </div>

            <div class="step-card">
                <div class="step-number">3</div>
                <div class="step-icon">
                    <span class="material-symbols-outlined">payments</span>
                </div>
                <h3 class="step-title">Pay Application Fee</h3>
                <p class="step-description">Pay the required application fee through our secure online payment system.</p>
            </div>

            <div class="step-card">
                <div class="step-number">4</div>
                <div class="step-icon">
                    <span class="material-symbols-outlined">pending</span>
                </div>
                <h3 class="step-title">Application Review</h3>
                <p class="step-description">Your application will be reviewed by our civil status officers for completeness and accuracy.</p>
            </div>

            <div class="step-card">
                <div class="step-number">5</div>
                <div class="step-icon">
                    <span class="material-symbols-outlined">verified</span>
                </div>
                <h3 class="step-title">Certificate Issuance</h3>
                <p class="step-description">Once approved, your certificate will be issued and available for collection or delivery.</p>
            </div>
        </div>

        <div class="application-requirements">
            <h3>General Requirements</h3>
            <div class="requirements-grid">
                <div class="requirement-item">
                    <div class="requirement-icon">
                        <span class="material-symbols-outlined">person</span>
                    </div>
                    <h4>Valid Identification</h4>
                    <p>Valid national ID, passport, or driver's license</p>
                </div>

                <div class="requirement-item">
                    <div class="requirement-icon">
                        <span class="material-symbols-outlined">location_on</span>
                    </div>
                    <h4>Proof of Residence</h4>
                    <p>Utility bill or lease agreement showing Bamenda address</p>
                </div>

                <div class="requirement-item">
                    <div class="requirement-icon">
                        <span class="material-symbols-outlined">description</span>
                    </div>
                    <h4>Supporting Documents</h4>
                    <p>Relevant supporting documents based on certificate type</p>
                </div>

                <div class="requirement-item">
                    <div class="requirement-icon">
                        <span class="material-symbols-outlined">payments</span>
                    </div>
                    <h4>Application Fee</h4>
                    <p>Payment of required processing and issuance fees</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Certificate Application Form -->
<section class="certificate-application-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Apply for Certificate</h2>
            <p class="section-subtitle">Start your certificate application process</p>
        </div>

        <div class="application-form">
            <form id="certificateApplicationForm">
                <div class="form-section">
                    <h3 class="section-title">Certificate Type Selection</h3>
                    
                    <div class="form-group">
                        <label class="form-label">Certificate Type *</label>
                        <select class="form-select" required>
                            <option value="">Select certificate type</option>
                            <option value="birth">Birth Certificate</option>
                            <option value="marriage">Marriage Certificate</option>
                            <option value="death">Death Certificate</option>
                            <option value="verification">Certificate Verification</option>
                            <option value="correction">Certificate Correction</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Application Type *</label>
                        <select class="form-select" required>
                            <option value="">Select application type</option>
                            <option value="new">New Registration</option>
                            <option value="copy">Certificate Copy</option>
                            <option value="late">Late Registration</option>
                            <option value="correction">Information Correction</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Priority Service</label>
                        <select class="form-select">
                            <option value="regular">Regular Service (Standard Processing)</option>
                            <option value="express">Express Service (+50% fee)</option>
                            <option value="urgent">Urgent Service (+100% fee)</option>
                        </select>
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">Applicant Information</h3>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Full Name *</label>
                            <input type="text" class="form-input" placeholder="Enter your full name" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Date of Birth *</label>
                            <input type="date" class="form-input" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Email Address *</label>
                            <input type="email" class="form-input" placeholder="your@email.com" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Phone Number *</label>
                            <input type="tel" class="form-input" placeholder="+237 233 000 000" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Address *</label>
                        <input type="text" class="form-input" placeholder="Your residential address in Bamenda" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Gender *</label>
                            <select class="form-select" required>
                                <option value="">Select gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Nationality *</label>
                            <select class="form-select" required>
                                <option value="">Select nationality</option>
                                <option value="cameroonian">Cameroonian</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">Certificate Details</h3>
                    
                    <div class="form-group">
                        <label class="form-label">Certificate Details</label>
                        <textarea class="form-textarea" rows="4" placeholder="Provide specific details for the certificate (names, dates, locations, etc.)"></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Reason for Application *</label>
                        <textarea class="form-textarea" rows="3" placeholder="Explain why you need this certificate" required></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Additional Information</label>
                        <textarea class="form-textarea" rows="3" placeholder="Any additional information that may help process your application"></textarea>
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">Document Upload</h3>
                    
                    <div class="form-group">
                        <label class="form-label">Identification Document *</label>
                        <input type="file" class="form-input" accept=".pdf,.jpg,.jpeg,.png" required>
                        <small class="form-help">Upload a clear copy of your valid ID (PDF, JPG, PNG, max 5MB)</small>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Supporting Documents</label>
                        <input type="file" class="form-input" multiple accept=".pdf,.jpg,.jpeg,.png">
                        <small class="form-help">Upload supporting documents (PDF, JPG, PNG, max 5MB each)</small>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Proof of Residence *</label>
                        <input type="file" class="form-input" accept=".pdf,.jpg,.jpeg,.png" required>
                        <small class="form-help">Upload utility bill or lease agreement (PDF, JPG, PNG, max 5MB)</small>
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">Collection Preferences</h3>
                    
                    <div class="form-group">
                        <label class="form-label">Collection Method *</label>
                        <select class="form-select" required>
                            <option value="">Select collection method</option>
                            <option value="office">In-Person Collection</option>
                            <option value="delivery">Courier Delivery</option>
                            <option value="digital">Digital Copy Only</option>
                        </select>
                    </div>

                    <div class="form-group" id="deliveryOptions" style="display: none;">
                        <label class="form-label">Delivery Address</label>
                        <input type="text" class="form-input" placeholder="Enter delivery address for courier service">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Preferred Collection Date</label>
                        <input type="date" class="form-input">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Special Instructions</label>
                        <textarea class="form-textarea" rows="2" placeholder="Any special instructions for collection or delivery"></textarea>
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">Declaration</h3>
                    
                    <div class="form-group">
                        <label class="form-label">Declaration *</label>
                        <div class="checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="declaration" required>
                                <span class="checkmark"></span>
                                I declare that all information provided is true and accurate to the best of my knowledge. I understand that providing false information may result in legal consequences.
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Agreement *</label>
                        <div class="checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="agreement" required>
                                <span class="checkmark"></span>
                                I agree to the terms and conditions of the Bamenda City Council Civil Status Services and understand that processing times may vary.
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="reset" class="btn btn-outline">Reset</button>
                    <button type="submit" class="btn btn-primary">Submit Application</button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Certificate Tracking -->
<section class="certificate-tracking-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Track Application Status</h2>
            <p class="section-subtitle">Check the status of your certificate applications</p>
        </div>

        <div class="tracking-interface">
            <div class="tracking-search">
                <div class="search-form">
                    <input type="text" class="form-input" id="trackingNumber" placeholder="Enter application tracking number">
                    <button class="btn btn-primary" onclick="trackApplication()">Track Application</button>
                </div>
                <div class="search-help">
                    <p>Your tracking number was sent to your email after application submission</p>
                </div>
            </div>

            <div class="tracking-results" id="trackingResults" style="display: none;">
                <div class="tracking-status">
                    <div class="status-header">
                        <h3>Application Status</h3>
                        <div class="status-badge processing">Processing</div>
                    </div>
                    <div class="status-details">
                        <div class="detail-row">
                            <span class="detail-label">Application Number:</span>
                            <span class="detail-value">CS-2024-045678</span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label">Certificate Type:</span>
                            <span class="detail-value">Birth Certificate</span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label">Application Date:</span>
                            <span class="detail-value">March 15, 2024</span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label">Current Status:</span>
                            <span class="detail-value">Under Review</span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label">Expected Completion:</span>
                            <span class="detail-value">March 22, 2024</span>
                        </div>
                    </div>
                    <div class="progress-timeline">
                        <div class="timeline-item completed">
                            <div class="timeline-marker">
                                <span class="material-symbols-outlined">check_circle</span>
                            </div>
                            <div class="timeline-content">
                                <h4>Application Submitted</h4>
                                <p>March 15, 2024 - 10:30 AM</p>
                            </div>
                        </div>
                        <div class="timeline-item completed">
                            <div class="timeline-marker">
                                <span class="material-symbols-outlined">check_circle</span>
                            </div>
                            <div class="timeline-content">
                                <h4>Payment Confirmed</h4>
                                <p>March 15, 2024 - 11:15 AM</p>
                            </div>
                        </div>
                        <div class="timeline-item active">
                            <div class="timeline-marker">
                                <span class="material-symbols-outlined">pending</span>
                            </div>
                            <div class="timeline-content">
                                <h4>Under Review</h4>
                                <p>Started March 16, 2024 - 9:00 AM</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker">
                                <span class="material-symbols-outlined">radio_button_unchecked</span>
                            </div>
                            <div class="timeline-content">
                                <h4>Processing</h4>
                                <p>Estimated: March 20, 2024</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker">
                                <span class="material-symbols-outlined">radio_button_unchecked</span>
                            </div>
                            <div class="timeline-content">
                                <h4>Ready for Collection</h4>
                                <p>Estimated: March 22, 2024</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Common questions about civil status certificates and services</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How long does it take to get a birth certificate?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Standard processing takes 5-7 working days. Express service takes 2-3 working days, and urgent service takes 1 working day for an additional fee.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What documents do I need for a marriage certificate?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>You'll need valid identification for both parties, proof of residence, marriage registration form, and witnesses' identification documents.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Can I apply for certificates online?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, you can complete the application form online and upload documents. However, you may need to visit our office for biometric verification for some certificates.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How do I correct errors on my certificate?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>You can apply for a certificate correction by submitting a correction form with supporting documents. The process takes 10-15 working days and requires a fee.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What is the cost of certificate verification?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Certificate verification costs ₣1,500 for standard processing. Express verification (2-3 working days) costs ₣2,500.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Can I get certificates for events that occurred years ago?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, you can apply for late registration of birth certificates for events that occurred up to 50 years ago, provided you have sufficient supporting evidence.</p>
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
/* Civil Status Page Styles */
.civil-status-hero {
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

/* Civil Status Statistics Section */
.civil-status-stats-section {
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

/* Certificate Services Section */
.certificate-services-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.service-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.service-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.service-icon {
    width: 4rem;
    height: 4rem;
    background-color: var(--tertiary);
    color: var(--on-tertiary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-lg);
}

.service-icon .material-symbols-outlined {
    font-size: 2rem;
}

.service-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.service-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.service-features {
    display: flex;
    flex-wrap: wrap;
    gap: var(--spacing-sm);
    justify-content: center;
    margin-bottom: var(--spacing-lg);
}

.feature-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    font-size: 0.75rem;
    color: var(--on-surface-variant);
}

.feature-item .material-symbols-outlined {
    font-size: 1rem;
    color: var(--tertiary);
}

.service-details {
    display: flex;
    justify-content: space-between;
    margin-bottom: var(--spacing-lg);
    flex-wrap: wrap;
    gap: var(--spacing-md);
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

/* Application Process Section */
.application-process-section {
    padding: var(--spacing-3xl) 0;
}

.process-steps {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: var(--spacing-xl);
}

.step-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
    position: relative;
}

.step-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.step-number {
    position: absolute;
    top: -1rem;
    left: 50%;
    transform: translateX(-50%);
    width: 2rem;
    height: 2rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 800;
    font-size: 1rem;
}

.step-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--surface-container);
    color: var(--primary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-lg);
}

.step-icon .material-symbols-outlined {
    font-size: 2rem;
}

.step-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.step-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
}

.application-requirements {
    margin-top: var(--spacing-2xl);
}

.application-requirements h3 {
    color: var(--primary);
    margin-bottom: var(--spacing-lg);
    text-align: center;
}

.requirements-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: var(--spacing-lg);
}

.requirement-item {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-lg);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.requirement-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.requirement-icon {
    width: 3rem;
    height: 3rem;
    background-color: var(--tertiary);
    color: var(--on-tertiary);
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-md);
}

.requirement-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.requirement-item h4 {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.requirement-item p {
    color: var(--on-surface-variant);
    font-size: 0.875rem;
}

/* Certificate Application Section */
.certificate-application-section {
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

.checkbox-group {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
}

.checkbox-label {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    cursor: pointer;
    color: var(--on-surface);
}

.checkbox-label input[type="checkbox"] {
    display: none;
}

.checkmark {
    width: 1.25rem;
    height: 1.25rem;
    border: 2px solid var(--outline-variant);
    border-radius: var(--radius-xs);
    position: relative;
    transition: all 0.2s ease;
}

.checkbox-label input[type="checkbox"]:checked + .checkmark {
    background-color: var(--primary);
    border-color: var(--primary);
}

.checkbox-label input[type="checkbox"]:checked + .checkmark::after {
    content: '✓';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: var(--on-primary);
    font-size: 0.875rem;
    font-weight: 700;
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

/* Certificate Tracking Section */
.certificate-tracking-section {
    padding: var(--spacing-3xl) 0;
}

.tracking-interface {
    max-width: 800px;
    margin: 0 auto;
}

.tracking-search {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    margin-bottom: var(--spacing-xl);
}

.search-form {
    display: flex;
    gap: var(--spacing-lg);
    margin-bottom: var(--spacing-md);
}

.search-help {
    text-align: center;
    color: var(--on-surface-variant);
    font-size: 0.875rem;
}

.tracking-results {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    overflow: hidden;
}

.status-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.status-header h3 {
    color: var(--primary);
    margin: 0;
}

.status-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.875rem;
    font-weight: 600;
    text-transform: uppercase;
}

.status-badge.processing {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.status-details {
    padding: var(--spacing-lg);
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
}

.detail-row {
    display: flex;
    justify-content: space-between;
    padding: var(--spacing-sm) 0;
    border-bottom: 1px solid var(--outline-variant);
}

.detail-label {
    font-weight: 600;
    color: var(--on-surface-variant);
}

.detail-value {
    color: var(--primary);
    font-weight: 500;
}

.progress-timeline {
    padding: var(--spacing-lg);
}

.timeline-item {
    display: flex;
    align-items: flex-start;
    gap: var(--spacing-lg);
    margin-bottom: var(--spacing-xl);
    position: relative;
}

.timeline-item::before {
    content: '';
    position: absolute;
    left: 1.5rem;
    top: 2.5rem;
    bottom: -2rem;
    width: 2px;
    background-color: var(--outline-variant);
}

.timeline-item:last-child::before {
    display: none;
}

.timeline-marker {
    width: 3rem;
    height: 3rem;
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    z-index: 2;
    flex-shrink: 0;
}

.timeline-item.completed .timeline-marker {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.timeline-item.active .timeline-marker {
    background-color: var(--secondary);
    color: var(--on-secondary);
}

.timeline-item:not(.completed):not(.active) .timeline-marker {
    background-color: var(--surface-container);
    color: var(--on-surface-variant);
}

.timeline-content {
    flex: 1;
    padding-top: var(--spacing-xs);
}

.timeline-content h4 {
    font-size: 1rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-xs);
}

.timeline-content p {
    color: var(--on-surface-variant);
    font-size: 0.875rem;
}

/* FAQ Section */
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
    border: 1px solid var(--outline-variant);
    margin-bottom: var(--spacing-md);
    overflow: hidden;
}

.faq-question {
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
    padding: var(--spacing-lg);
    font-weight: 600;
    color: var(--primary);
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
    padding: 0 var(--spacing-lg) var(--spacing-lg);
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
    
    .services-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .process-steps {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .requirements-grid {
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
    
    .search-form {
        flex-direction: column;
        gap: var(--spacing-md);
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
    
    .service-card {
        padding: var(--spacing-lg);
    }
    
    .service-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .service-icon .material-symbols-outlined {
        font-size: 1.5rem;
    }
    
    .step-card {
        padding: var(--spacing-lg);
    }
    
    .step-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .step-icon .material-symbols-outlined {
        font-size: 1.5rem;
    }
    
    .requirement-item {
        padding: var(--spacing-md);
    }
    
    .requirement-icon {
        width: 2.5rem;
        height: 2.5rem;
    }
    
    .requirement-icon .material-symbols-outlined {
        font-size: 1.25rem;
    }
    
    .application-form {
        padding: var(--spacing-lg);
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
    
    .service-details {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .timeline-item {
        flex-direction: column;
        align-items: flex-start;
        gap: var(--spacing-md);
    }
    
    .timeline-marker {
        margin: 0 0 var(--spacing-md) 0;
    }
    
    .timeline-content {
        padding-top: 0;
    }
    
    .detail-row {
        flex-direction: column;
        gap: var(--spacing-xs);
        align-items: flex-start;
    }
}
</style>

<script>
// Quick action functions
function openBirthCertificate() {
    alert('Birth certificate application would open here. In production, this would show the birth certificate application form.');
}

function openMarriageCertificate() {
    alert('Marriage certificate application would open here. In production, this would show the marriage certificate application form.');
}

function openDeathCertificate() {
    alert('Death certificate application would open here. In production, this would show the death certificate application form.');
}

function openCertificateVerification() {
    alert('Certificate verification service would open here. In production, this would show the verification application form.');
}

function openCertificateCorrection() {
    alert('Certificate correction service would open here. In production, this would show the correction application form.');
}

function openCertificateTracking() {
    document.getElementById('certificate-tracking').scrollIntoView({ behavior: 'smooth' });
}

// Service actions
document.querySelectorAll('.service-card .btn-primary').forEach(button => {
    button.addEventListener('click', function() {
        const serviceTitle = this.closest('.service-card').querySelector('.service-title').textContent;
        alert(`Opening application for: "${serviceTitle}"`);
    });
});

// Certificate application form submission
document.getElementById('certificateApplicationForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate required fields
    const certificateType = document.querySelector('select[required]').value;
    const applicationType = document.querySelectorAll('select[required]')[1].value;
    
    if (!certificateType || !applicationType) {
        alert('Please select certificate type and application type.');
        return;
    }
    
    // Validate declarations
    const declaration = document.querySelector('input[name="declaration"]:checked');
    const agreement = document.querySelector('input[name="agreement"]:checked');
    
    if (!declaration || !agreement) {
        alert('Please accept the declaration and agreement to proceed.');
        return;
    }
    
    alert('Certificate application submitted successfully! You will receive a tracking number via email within 2 working days.');
    // In production, this would submit the application
});

// Collection method change handler
document.querySelector('select[name="collection-method"]').addEventListener('change', function() {
    const deliveryOptions = document.getElementById('deliveryOptions');
    if (this.value === 'delivery') {
        deliveryOptions.style.display = 'block';
    } else {
        deliveryOptions.style.display = 'none';
    }
});

// Certificate tracking
function trackApplication() {
    const trackingNumber = document.getElementById('trackingNumber').value;
    
    if (!trackingNumber) {
        alert('Please enter your tracking number');
        return;
    }
    
    // Show tracking results
    const trackingResults = document.getElementById('trackingResults');
    trackingResults.style.display = 'block';
    
    // Scroll to results
    trackingResults.scrollIntoView({ behavior: 'smooth' });
    
    // In production, this would fetch actual tracking data from the server
    console.log('Tracking application:', trackingNumber);
}

// FAQ toggle function
function toggleFAQ(element) {
    const faqItem = element.parentElement;
    faqItem.classList.toggle('active');
}

// Progress animation on scroll
window.addEventListener('scroll', function() {
    const statCards = document.querySelectorAll('.stat-card');
    statCards.forEach(card => {
        const rect = card.getBoundingClientRect();
        const isVisible = rect.top < window.innerHeight && rect.bottom > 0;
        if (isVisible) {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            setTimeout(() => {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, 100);
        }
    });
});

// Auto-refresh application data
function refreshApplicationData() {
    // In production, this would fetch real-time application data
    console.log('Refreshing civil status application data...');
}

// Refresh data every 60 seconds
setInterval(refreshApplicationData, 60000);
</script>
