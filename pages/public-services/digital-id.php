<?php
/**
 * Bamenda City Council E-Governance Platform
 * Digital ID Wallet Page
 */

// Set page metadata
$page_title = 'Digital ID Wallet | Bamenda City Council';
$page_description = 'Access your digital ID wallet, manage digital documents, and store important identification documents securely.';
$page_keywords = 'digital ID, digital wallet, identification documents, secure storage, Bamenda digital services';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Public Services', 'url' => '../index.php'],
    ['title' => 'Digital ID Wallet', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero digital-id-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-public-services.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Digital ID Wallet</span>
            <h1 class="hero-title">Secure Digital Identity</h1>
            <p class="hero-subtitle">
                Store and manage your digital identification documents securely in one place. Access your ID, certificates, and important documents anytime, anywhere.
            </p>
            <div class="hero-actions">
                <a href="#wallet-overview" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">account_balance_wallet</span>
                    My Wallet
                </a>
                <a href="#add-document" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">add_card</span>
                    Add Document
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Wallet Actions</h2>
            <p class="section-subtitle">Quick access to your digital ID wallet features</p>
        </div>

        <div class="actions-grid">
            <div class="action-card" onclick="openWalletOverview()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">account_balance_wallet</span>
                </div>
                <h3 class="action-title">My Wallet</h3>
                <p class="action-description">View and manage your digital ID wallet contents</p>
            </div>

            <div class="action-card" onclick="openAddDocument()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">add_card</span>
                </div>
                <h3 class="action-title">Add Document</h3>
                <p class="action-description">Upload new documents to your digital wallet</p>
            </div>

            <div class="action-card" onclick="openVerifyDocument()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">verified</span>
                </div>
                <h3 class="action-title">Verify Document</h3>
                <p class="action-description">Verify authenticity of digital documents</p>
            </div>

            <div class="action-card" onclick="openShareDocument()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">share</span>
                </div>
                <h3 class="action-title">Share Document</h3>
                <p class="action-description">Securely share documents with authorized parties</p>
            </div>

            <div class="action-card" onclick="openWalletSecurity()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">security</span>
                </div>
                <h3 class="action-title">Security Settings</h3>
                <p class="action-description">Manage wallet security and privacy settings</p>
            </div>

            <div class="action-card" onclick="openWalletHistory()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">history</span>
                </div>
                <h3 class="action-title">Access History</h3>
                <p class="action-description">View document access and sharing history</p>
            </div>
        </div>
    </div>
</section>

<!-- Wallet Statistics -->
<section class="wallet-stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">account_balance_wallet</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">12</div>
                    <div class="stat-label">Stored Documents</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+3 this month</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">verified</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">45</div>
                    <div class="stat-label">Verifications</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+12 this week</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">share</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">23</div>
                    <div class="stat-label">Shared Documents</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+5 this month</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">security</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">100%</div>
                    <div class="stat-label">Security Score</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>Excellent</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Wallet Overview -->
<section class="wallet-overview-section" id="wallet-overview">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">My Digital Wallet</h2>
            <p class="section-subtitle">Your stored digital documents and identification</p>
        </div>

        <div class="wallet-content">
            <div class="wallet-header">
                <div class="wallet-info">
                    <div class="wallet-avatar">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                             alt="user avatar">
                    </div>
                    <div class="wallet-details">
                        <h3 class="wallet-name">John Doe</h3>
                        <p class="wallet-email">john.doe@email.com</p>
                        <div class="wallet-status">
                            <span class="status-badge active">Active</span>
                            <span class="status-badge verified">Verified</span>
                        </div>
                    </div>
                </div>
                <div class="wallet-actions">
                    <button class="btn btn-sm btn-primary">Add Document</button>
                    <button class="btn btn-sm btn-outline">Settings</button>
                </div>
            </div>

            <div class="documents-grid">
                <!-- National ID Card -->
                <div class="document-card">
                    <div class="document-header">
                        <div class="document-icon">
                            <span class="material-symbols-outlined">badge</span>
                        </div>
                        <div class="document-status verified">Verified</div>
                    </div>
                    <div class="document-content">
                        <h3 class="document-title">National ID Card</h3>
                        <p class="document-description">Cameroon National Identity Card</p>
                        <div class="document-details">
                            <div class="detail-item">
                                <span class="material-symbols-outlined">calendar_today</span>
                                <span>Expires: Dec 15, 2028</span>
                            </div>
                            <div class="detail-item">
                                <span class="material-symbols-outlined">verified</span>
                                <span>Verified: Mar 10, 2024</span>
                            </div>
                        </div>
                        <div class="document-actions">
                            <button class="btn btn-sm btn-primary">View</button>
                            <button class="btn btn-sm btn-outline">Share</button>
                            <button class="btn btn-sm btn-outline">Download</button>
                        </div>
                    </div>
                </div>

                <!-- Birth Certificate -->
                <div class="document-card">
                    <div class="document-header">
                        <div class="document-icon">
                            <span class="material-symbols-outlined">child_care</span>
                        </div>
                        <div class="document-status verified">Verified</div>
                    </div>
                    <div class="document-content">
                        <h3 class="document-title">Birth Certificate</h3>
                        <p class="document-description">Official Birth Certificate</p>
                        <div class="document-details">
                            <div class="detail-item">
                                <span class="material-symbols-outlined">calendar_today</span>
                                <span>Issued: Jan 15, 1990</span>
                            </div>
                            <div class="detail-item">
                                <span class="material-symbols-outlined">verified</span>
                                <span>Verified: Mar 12, 2024</span>
                            </div>
                        </div>
                        <div class="document-actions">
                            <button class="btn btn-sm btn-primary">View</button>
                            <button class="btn btn-sm btn-outline">Share</button>
                            <button class="btn btn-sm btn-outline">Download</button>
                        </div>
                    </div>
                </div>

                <!-- Driver's License -->
                <div class="document-card">
                    <div class="document-header">
                        <div class="document-icon">
                            <span class="material-symbols-outlined">drive_eta</span>
                        </div>
                        <div class="document-status verified">Verified</div>
                    </div>
                    <div class="document-content">
                        <h3 class="document-title">Driver's License</h3>
                        <p class="document-description">Cameroon Driver's License</p>
                        <div class="document-details">
                            <div class="detail-item">
                                <span class="material-symbols-outlined">calendar_today</span>
                                <span>Expires: Jun 30, 2025</span>
                            </div>
                            <div class="detail-item">
                                <span class="material-symbols-outlined">verified</span>
                                <span>Verified: Mar 8, 2024</span>
                            </div>
                        </div>
                        <div class="document-actions">
                            <button class="btn btn-sm btn-primary">View</button>
                            <button class="btn btn-sm btn-outline">Share</button>
                            <button class="btn btn-sm btn-outline">Download</button>
                        </div>
                    </div>
                </div>

                <!-- Passport -->
                <div class="document-card">
                    <div class="document-header">
                        <div class="document-icon">
                            <span class="material-symbols-outlined">book</span>
                        </div>
                        <div class="document-status verified">Verified</div>
                    </div>
                    <div class="document-content">
                        <h3 class="document-title">Passport</h3>
                        <p class="document-description">Cameroon Passport</p>
                        <div class="document-details">
                            <div class="detail-item">
                                <span class="material-symbols-outlined">calendar_today</span>
                                <span>Expires: Nov 20, 2026</span>
                            </div>
                            <div class="detail-item">
                                <span class="material-symbols-outlined">verified</span>
                                <span>Verified: Mar 15, 2024</span>
                            </div>
                        </div>
                        <div class="document-actions">
                            <button class="btn btn-sm btn-primary">View</button>
                            <button class="btn btn-sm btn-outline">Share</button>
                            <button class="btn btn-sm btn-outline">Download</button>
                        </div>
                    </div>
                </div>

                <!-- Marriage Certificate -->
                <div class="document-card">
                    <div class="document-header">
                        <div class="document-icon">
                            <span class="material-symbols-outlined">favorite</span>
                        </div>
                        <div class="document-status verified">Verified</div>
                    </div>
                    <div class="document-content">
                        <h3 class="document-title">Marriage Certificate</h3>
                        <p class="document-description">Official Marriage Certificate</p>
                        <div class="document-details">
                            <div class="detail-item">
                                <span class="material-symbols-outlined">calendar_today</span>
                                <span>Issued: May 20, 2018</span>
                            </div>
                            <div class="detail-item">
                                <span class="material-symbols-outlined">verified</span>
                                <span>Verified: Mar 14, 2024</span>
                            </div>
                        </div>
                        <div class="document-actions">
                            <button class="btn btn-sm btn-primary">View</button>
                            <button class="btn btn-sm btn-outline">Share</button>
                            <button class="btn btn-sm btn-outline">Download</button>
                        </div>
                    </div>
                </div>

                <!-- Professional Certificate -->
                <div class="document-card">
                    <div class="document-header">
                        <div class="document-icon">
                            <span class="material-symbols-outlined">school</span>
                        </div>
                        <div class="document-status verified">Verified</div>
                    </div>
                    <div class="document-content">
                        <h3 class="document-title">Professional Certificate</h3>
                        <p class="document-description">University Degree Certificate</p>
                        <div class="document-details">
                            <div class="detail-item">
                                <span class="material-symbols-outlined">calendar_today</span>
                                <span>Issued: Jul 10, 2015</span>
                            </div>
                            <div class="detail-item">
                                <span class="material-symbols-outlined">verified</span>
                                <span>Verified: Mar 11, 2024</span>
                            </div>
                        </div>
                        <div class="document-actions">
                            <button class="btn btn-sm btn-primary">View</button>
                            <button class="btn btn-sm btn-outline">Share</button>
                            <button class="btn btn-sm btn-outline">Download</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Add Document -->
<section class="add-document-section" id="add-document">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Add New Document</h2>
            <p class="section-subtitle">Upload and store new documents in your digital wallet</p>
        </div>

        <div class="upload-form">
            <form id="documentUploadForm">
                <div class="form-section">
                    <h3 class="section-title">Document Information</h3>
                    
                    <div class="form-group">
                        <label class="form-label">Document Type *</label>
                        <select class="form-select" required>
                            <option value="">Select document type</option>
                            <option value="national-id">National ID Card</option>
                            <option value="passport">Passport</option>
                            <option value="drivers-license">Driver's License</option>
                            <option value="birth-certificate">Birth Certificate</option>
                            <option value="marriage-certificate">Marriage Certificate</option>
                            <option value="professional-certificate">Professional Certificate</option>
                            <option value="voter-card">Voter Card</option>
                            <option value="residence-permit">Residence Permit</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Document Title *</label>
                        <input type="text" class="form-input" placeholder="Enter document title" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Document Description</label>
                        <textarea class="form-textarea" rows="3" placeholder="Describe the document and its purpose"></textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Issuing Authority *</label>
                            <input type="text" class="form-input" placeholder="Who issued this document?" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Issue Date *</label>
                            <input type="date" class="form-input" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Expiry Date</label>
                            <input type="date" class="form-input">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Document Number</label>
                            <input type="text" class="form-input" placeholder="Document identification number">
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">Document Upload</h3>
                    
                    <div class="form-group">
                        <label class="form-label">Document File *</label>
                        <div class="file-upload-area" id="fileUploadArea">
                            <div class="upload-icon">
                                <span class="material-symbols-outlined">cloud_upload</span>
                            </div>
                            <p class="upload-text">Drag and drop your document here or click to browse</p>
                            <p class="upload-hint">Supported formats: PDF, JPG, PNG, DOC, DOCX (Max 10MB)</p>
                            <input type="file" id="documentFile" class="file-input" accept=".pdf,.jpg,.jpeg,.png,.doc,.docx" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Document Back Side (Optional)</label>
                        <div class="file-upload-area" id="fileUploadAreaBack">
                            <div class="upload-icon">
                                <span class="material-symbols-outlined">cloud_upload</span>
                            </div>
                            <p class="upload-text">Upload back side of document (if applicable)</p>
                            <input type="file" id="documentFileBack" class="file-input" accept=".pdf,.jpg,.jpeg,.png">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Additional Supporting Documents</label>
                        <div class="file-upload-area" id="fileUploadAreaAdditional">
                            <div class="upload-icon">
                                <span class="material-symbols-outlined">cloud_upload</span>
                            </div>
                            <p class="upload-text">Upload additional supporting documents</p>
                            <input type="file" id="additionalFiles" class="file-input" multiple accept=".pdf,.jpg,.jpeg,.png,.doc,.docx">
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">Privacy Settings</h3>
                    
                    <div class="form-group">
                        <label class="form-label">Document Privacy *</label>
                        <select class="form-select" required>
                            <option value="">Select privacy level</option>
                            <option value="private">Private - Only you can view</option>
                            <option value="restricted">Restricted - Share with specific parties</option>
                            <option value="public">Public - Can be verified by anyone</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Share Permissions</label>
                        <div class="checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="share-permissions" value="government">
                                <span class="checkmark"></span>
                                Allow government agencies to verify
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="share-permissions" value="employers">
                                <span class="checkmark"></span>
                                Allow employers to verify
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="share-permissions" value="banks">
                                <span class="checkmark"></span>
                                Allow banks to verify
                            </label>
                            <label class="checkbox-label">
                                <input type="checkbox" name="share-permissions" value="educational">
                                <span class="checkmark"></span>
                                Allow educational institutions to verify
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Verification Requirements</label>
                        <select class="form-select">
                            <option value="none">No verification required</option>
                            <option value="otp">OTP verification</option>
                            <option value="biometric">Biometric verification</option>
                            <option value="both">Both OTP and biometric</option>
                        </select>
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">Confirmation</h3>
                    
                    <div class="form-group">
                        <label class="form-label">Declaration *</label>
                        <div class="checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="declaration" required>
                                <span class="checkmark"></span>
                                I declare that I am the rightful owner of this document and have the authority to store it digitally. I understand that providing false information may result in legal consequences.
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Terms Agreement *</label>
                        <div class="checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="terms" required>
                                <span class="checkmark"></span>
                                I agree to the Digital ID Wallet terms and conditions and understand that my documents will be stored securely and may be subject to verification processes.
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="reset" class="btn btn-outline">Reset</button>
                    <button type="submit" class="btn btn-primary">Upload Document</button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Document Verification -->
<section class="document-verification-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Document Verification</h2>
            <p class="section-subtitle">Verify authenticity of digital documents</p>
        </div>

        <div class="verification-interface">
            <div class="verification-form">
                <div class="form-group">
                    <label class="form-label">Document ID or QR Code</label>
                    <input type="text" class="form-input" id="verificationInput" placeholder="Enter document ID or scan QR code">
                </div>
                <div class="verification-actions">
                    <button class="btn btn-primary" onclick="verifyDocument()">Verify Document</button>
                    <button class="btn btn-outline" onclick="scanQRCode()">Scan QR Code</button>
                </div>
            </div>

            <div class="verification-results" id="verificationResults" style="display: none;">
                <div class="result-header">
                    <h3>Verification Result</h3>
                    <div class="verification-badge success">Verified</div>
                </div>
                <div class="result-content">
                    <div class="document-preview">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6qk2nD4J7f8L9m3p5oR6sT7uV8wX9yZ0a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t0u1v2w3x4y5z6" 
                             alt="document preview">
                    </div>
                    <div class="verification-details">
                        <div class="detail-row">
                            <span class="detail-label">Document Type:</span>
                            <span class="detail-value">National ID Card</span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label">Document Number:</span>
                            <span class="detail-value">1234567890123</span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label">Holder Name:</span>
                            <span class="detail-value">John Doe</span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label">Issuing Authority:</span>
                            <span class="detail-value">Cameroon Ministry of Territorial Administration</span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label">Issue Date:</span>
                            <span class="detail-value">December 15, 2020</span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label">Expiry Date:</span>
                            <span class="detail-value">December 15, 2028</span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label">Verification Status:</span>
                            <span class="detail-value status-valid">Valid and Authentic</span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label">Last Verified:</span>
                            <span class="detail-value">March 20, 2024 at 10:30 AM</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Security Features -->
<section class="security-features-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Security Features</h2>
            <p class="section-subtitle">Advanced security measures to protect your digital documents</p>
        </div>

        <div class="security-grid">
            <div class="security-card">
                <div class="security-icon">
                    <span class="material-symbols-outlined">fingerprint</span>
                </div>
                <h3 class="security-title">Biometric Authentication</h3>
                <p class="security-description">Advanced biometric security including fingerprint and facial recognition for secure access.</p>
                <div class="security-status">
                    <span class="status-badge active">Enabled</span>
                </div>
            </div>

            <div class="security-card">
                <div class="security-icon">
                    <span class="material-symbols-outlined">lock</span>
                </div>
                <h3 class="security-title">End-to-End Encryption</h3>
                <p class="security-description">Military-grade encryption protects your documents during storage and transmission.</p>
                <div class="security-status">
                    <span class="status-badge active">Enabled</span>
                </div>
            </div>

            <div class="security-card">
                <div class="security-icon">
                    <span class="material-symbols-outlined">two_factor_auth</span>
                </div>
                <h3 class="security-title">Two-Factor Authentication</h3>
                <p class="security-description">Additional security layer with OTP and verification codes for sensitive operations.</p>
                <div class="security-status">
                    <span class="status-badge active">Enabled</span>
                </div>
            </div>

            <div class="security-card">
                <div class="security-icon">
                    <span class="material-symbols-outlined">history</span>
                </div>
                <h3 class="security-title">Access Logging</h3>
                <p class="security-description">Complete audit trail of all document access and sharing activities.</p>
                <div class="security-status">
                    <span class="status-badge active">Enabled</span>
                </div>
            </div>

            <div class="security-card">
                <div class="security-icon">
                    <span class="material-symbols-outlined">verified_user</span>
                </div>
                <h3 class="security-title">Digital Signatures</h3>
                <p class="security-description">Cryptographic digital signatures ensure document authenticity and integrity.</p>
                <div class="security-status">
                    <span class="status-badge active">Enabled</span>
                </div>
            </div>

            <div class="security-card">
                <div class="security-icon">
                    <span class="material-symbols-outlined">backup</span>
                </div>
                <h3 class="security-title">Secure Backup</h3>
                <p class="security-description">Automated secure backups with multiple redundancy levels.</p>
                <div class="security-status">
                    <span class="status-badge active">Enabled</span>
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
            <p class="section-subtitle">Common questions about digital ID wallet and document management</p>
        </div>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How secure is my digital ID wallet?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Your digital ID wallet uses military-grade encryption, biometric authentication, and two-factor authentication. All documents are stored with end-to-end encryption and we maintain complete audit logs of all access activities.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Can I share my documents with others?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, you can securely share documents with authorized parties. You control who can access your documents and can revoke access at any time. All sharing activities are logged for security.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What types of documents can I store?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>You can store various identification documents including national ID, passport, driver's license, birth certificate, marriage certificate, professional certificates, and other official documents.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>How do I verify the authenticity of documents?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Documents can be verified using the document ID or QR code. The verification system checks the digital signature and validates authenticity with the issuing authority's database.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>What happens if I lose access to my wallet?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>We have a secure recovery process using your registered email and phone number. You'll need to verify your identity through multiple factors before regaining access to your wallet.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span>Are my documents legally recognized?</span>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Yes, digital documents in your wallet are legally recognized by government agencies, banks, and other institutions that participate in our verification system.</p>
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
/* Digital ID Wallet Page Styles */
.digital-id-hero {
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

/* Wallet Statistics Section */
.wallet-stats-section {
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

/* Wallet Overview Section */
.wallet-overview-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.wallet-content {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
}

.wallet-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: var(--spacing-xl);
    padding-bottom: var(--spacing-lg);
    border-bottom: 1px solid var(--outline-variant);
}

.wallet-info {
    display: flex;
    align-items: center;
    gap: var(--spacing-lg);
}

.wallet-avatar {
    width: 4rem;
    height: 4rem;
    border-radius: var(--radius-full);
    overflow: hidden;
}

.wallet-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.wallet-details h3 {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-xs);
}

.wallet-email {
    color: var(--on-surface-variant);
    margin-bottom: var(--spacing-sm);
}

.wallet-status {
    display: flex;
    gap: var(--spacing-sm);
}

.status-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.status-badge.active {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.status-badge.verified {
    background-color: var(--primary);
    color: var(--on-primary);
}

.documents-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-lg);
}

.document-card {
    background-color: var(--surface-container);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    transition: all 0.3s ease;
}

.document-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.document-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: var(--spacing-lg);
    background-color: var(--surface-container-high);
    border-bottom: 1px solid var(--outline-variant);
}

.document-icon {
    width: 3rem;
    height: 3rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
}

.document-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.document-status {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
}

.document-status.verified {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.document-content {
    padding: var(--spacing-lg);
}

.document-title {
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-sm);
}

.document-description {
    color: var(--on-surface-variant);
    font-size: 0.875rem;
    margin-bottom: var(--spacing-lg);
}

.document-details {
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
    font-size: 0.75rem;
}

.detail-item .material-symbols-outlined {
    font-size: 1rem;
    color: var(--primary);
}

.document-actions {
    display: flex;
    gap: var(--spacing-sm);
}

/* Add Document Section */
.add-document-section {
    padding: var(--spacing-3xl) 0;
}

.upload-form {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-2xl);
    border: 1px solid var(--outline-variant);
    max-width: 800px;
    margin: 0 auto;
}

.file-upload-area {
    border: 2px dashed var(--outline-variant);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    text-align: center;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
}

.file-upload-area:hover {
    border-color: var(--primary);
    background-color: var(--surface-container);
}

.upload-icon {
    width: 3rem;
    height: 3rem;
    background-color: var(--surface-container);
    color: var(--primary);
    border-radius: var(--radius-full);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-lg);
}

.upload-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.upload-text {
    color: var(--primary);
    font-weight: 600;
    margin-bottom: var(--spacing-xs);
}

.upload-hint {
    color: var(--on-surface-variant);
    font-size: 0.875rem;
}

.file-input {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    opacity: 0;
    cursor: pointer;
}

.checkbox-group {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
}

.checkbox-label {
    display: flex;
    align-items: flex-start;
    gap: var(--spacing-sm);
    cursor: pointer;
    color: var(--on-surface);
    line-height: 1.5;
}

.checkbox-label input[type="checkbox"] {
    display: none;
    margin-top: 2px;
}

.checkmark {
    width: 1.25rem;
    height: 1.25rem;
    border: 2px solid var(--outline-variant);
    border-radius: var(--radius-xs);
    position: relative;
    transition: all 0.2s ease;
    flex-shrink: 0;
    margin-top: 2px;
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

/* Document Verification Section */
.document-verification-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.verification-interface {
    max-width: 800px;
    margin: 0 auto;
}

.verification-form {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    margin-bottom: var(--spacing-xl);
}

.verification-actions {
    display: flex;
    gap: var(--spacing-lg);
    margin-top: var(--spacing-lg);
}

.verification-results {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    overflow: hidden;
}

.result-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-bottom: 1px solid var(--outline-variant);
}

.result-header h3 {
    color: var(--primary);
    margin: 0;
}

.verification-badge {
    padding: var(--spacing-xs) var(--spacing-sm);
    border-radius: var(--radius-full);
    font-size: 0.875rem;
    font-weight: 600;
    text-transform: uppercase;
}

.verification-badge.success {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.result-content {
    display: grid;
    grid-template-columns: 1fr 2fr;
    gap: var(--spacing-xl);
    padding: var(--spacing-lg);
}

.document-preview {
    text-align: center;
}

.document-preview img {
    max-width: 100%;
    height: auto;
    border-radius: var(--radius-md);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.verification-details {
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
    text-align: right;
}

.detail-value.status-valid {
    color: var(--tertiary);
    font-weight: 700;
}

/* Security Features Section */
.security-features-section {
    padding: var(--spacing-3xl) 0;
}

.security-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: var(--spacing-xl);
}

.security-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.security-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.security-icon {
    width: 4rem;
    height: 4rem;
    background-color: var(--secondary);
    color: var(--on-secondary);
    border-radius: var(--radius-lg);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--spacing-lg);
}

.security-icon .material-symbols-outlined {
    font-size: 2rem;
}

.security-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.security-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.security-status {
    margin-top: auto;
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
    
    .wallet-header {
        flex-direction: column;
        gap: var(--spacing-lg);
        align-items: flex-start;
    }
    
    .documents-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .security-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .verification-actions {
        flex-direction: column;
        gap: var(--spacing-md);
    }
    
    .result-content {
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
    
    .wallet-content {
        padding: var(--spacing-lg);
    }
    
    .wallet-info {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    
    .document-card {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
    }
    
    .security-card {
        padding: var(--spacing-lg);
    }
    
    .security-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .security-icon .material-symbols-outlined {
        font-size: 1.5rem;
    }
    
    .upload-form {
        padding: var(--spacing-lg);
    }
    
    .verification-form {
        padding: var(--spacing-lg);
    }
    
    .verification-results {
        margin: 0 -var(--spacing-md);
        border-radius: 0;
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
    
    .document-actions {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .document-actions .btn {
        width: 100%;
    }
}
</style>

<script>
// Quick action functions
function openWalletOverview() {
    document.getElementById('wallet-overview').scrollIntoView({ behavior: 'smooth' });
}

function openAddDocument() {
    document.getElementById('add-document').scrollIntoView({ behavior: 'smooth' });
}

function openVerifyDocument() {
    document.getElementById('document-verification').scrollIntoView({ behavior: 'smooth' });
}

function openShareDocument() {
    alert('Document sharing interface would open here. In production, this would show secure sharing options.');
}

function openWalletSecurity() {
    alert('Wallet security settings would open here. In production, this would show security configuration options.');
}

function openWalletHistory() {
    alert('Access history would open here. In production, this would show document access and sharing history.');
}

// Document actions
document.querySelectorAll('.document-actions .btn-primary').forEach(button => {
    if (button.textContent.includes('View')) {
        button.addEventListener('click', function() {
            const documentTitle = this.closest('.document-card').querySelector('.document-title').textContent;
            alert(`Viewing: "${documentTitle}"`);
        });
    }
});

document.querySelectorAll('.document-actions .btn-outline').forEach(button => {
    if (button.textContent.includes('Share')) {
        button.addEventListener('click', function() {
            const documentTitle = this.closest('.document-card').querySelector('.document-title').textContent;
            alert(`Sharing: "${documentTitle}"`);
        });
    }
    
    if (button.textContent.includes('Download')) {
        button.addEventListener('click', function() {
            const documentTitle = this.closest('.document-card').querySelector('.document-title').textContent;
            alert(`Downloading: "${documentTitle}"`);
        });
    }
});

// File upload handling
document.querySelectorAll('.file-upload-area').forEach(area => {
    area.addEventListener('click', function() {
        const fileInput = this.querySelector('.file-input');
        fileInput.click();
    });
    
    area.addEventListener('dragover', function(e) {
        e.preventDefault();
        this.style.borderColor = 'var(--primary)';
        this.style.backgroundColor = 'var(--surface-container)';
    });
    
    area.addEventListener('dragleave', function(e) {
        e.preventDefault();
        this.style.borderColor = 'var(--outline-variant)';
        this.style.backgroundColor = 'transparent';
    });
    
    area.addEventListener('drop', function(e) {
        e.preventDefault();
        this.style.borderColor = 'var(--outline-variant)';
        this.style.backgroundColor = 'transparent';
        
        const files = e.dataTransfer.files;
        const fileInput = this.querySelector('.file-input');
        
        if (files.length > 0) {
            fileInput.files = files;
            updateFileUploadArea(this, files[0]);
        }
    });
});

// Update file upload area with selected file
function updateFileUploadArea(area, file) {
    const uploadText = area.querySelector('.upload-text');
    const uploadHint = area.querySelector('.upload-hint');
    
    uploadText.textContent = `Selected: ${file.name}`;
    uploadHint.textContent = `Size: ${(file.size / 1024 / 1024).toFixed(2)} MB`;
    
    // Add file info display
    const fileInfo = document.createElement('div');
    fileInfo.className = 'file-info';
    fileInfo.innerHTML = `
        <div class="file-details">
            <span class="file-name">${file.name}</span>
            <span class="file-size">${(file.size / 1024 / 1024).toFixed(2)} MB</span>
            <button type="button" class="btn btn-sm btn-outline" onclick="removeFile(this)">Remove</button>
        </div>
    `;
    
    area.appendChild(fileInfo);
}

// Remove selected file
function removeFile(button) {
    const fileUploadArea = button.closest('.file-upload-area');
    const fileInput = fileUploadArea.querySelector('.file-input');
    const fileInfo = fileUploadArea.querySelector('.file-info');
    
    fileInput.value = '';
    if (fileInfo) {
        fileInfo.remove();
    }
    
    // Reset upload area text
    const uploadText = fileUploadArea.querySelector('.upload-text');
    const uploadHint = fileUploadArea.querySelector('.upload-hint');
    uploadText.textContent = 'Drag and drop your document here or click to browse';
    uploadHint.textContent = 'Supported formats: PDF, JPG, PNG, DOC, DOCX (Max 10MB)';
}

// Document upload form submission
document.getElementById('documentUploadForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Validate file upload
    const documentFile = document.getElementById('documentFile');
    if (!documentFile.files || documentFile.files.length === 0) {
        alert('Please select a document file to upload.');
        return;
    }
    
    // Validate declarations
    const declaration = document.querySelector('input[name="declaration"]:checked');
    const terms = document.querySelector('input[name="terms"]:checked');
    
    if (!declaration || !terms) {
        alert('Please accept the declaration and terms to proceed.');
        return;
    }
    
    alert('Document uploaded successfully! Your document will be processed and added to your digital wallet within 24 hours.');
    // In production, this would submit the document
});

// Document verification
function verifyDocument() {
    const verificationInput = document.getElementById('verificationInput');
    const documentId = verificationInput.value.trim();
    
    if (!documentId) {
        alert('Please enter a document ID or scan QR code.');
        return;
    }
    
    // Show verification results
    const verificationResults = document.getElementById('verificationResults');
    verificationResults.style.display = 'block';
    
    // Scroll to results
    verificationResults.scrollIntoView({ behavior: 'smooth' });
    
    // In production, this would verify the document with the server
    console.log('Verifying document:', documentId);
}

function scanQRCode() {
    alert('QR code scanner would open here. In production, this would access the device camera to scan QR codes.');
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

// Auto-refresh wallet data
function refreshWalletData() {
    // In production, this would fetch real-time wallet data
    console.log('Refreshing digital wallet data...');
}

// Refresh data every 60 seconds
setInterval(refreshWalletData, 60000);
</script>
