/**
 * Bamenda City Council E-Governance Platform
 * Profile Page JavaScript Integration
 * Connect frontend forms to backend APIs
 */

// ===== API CONFIGURATION =====
const API_BASE = '/stitch1/api';
const CORE_BASE = '/stitch1/core';

// ===== UTILITY FUNCTIONS =====
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.innerHTML = `
        <span>${message}</span>
        <button class="notification-close">&times;</button>
    `;
    document.body.appendChild(notification);
    
    notification.querySelector('.notification-close').addEventListener('click', () => {
        notification.remove();
    });
    
    setTimeout(() => notification.remove(), 5000);
}

function showLoader(show = true) {
    let loader = document.getElementById('profileLoader');
    if (!loader) {
        loader = document.createElement('div');
        loader.id = 'profileLoader';
        loader.className = 'profile-loader';
        loader.innerHTML = '<div class="spinner"></div><p>Loading...</p>';
        document.body.appendChild(loader);
    }
    loader.style.display = show ? 'flex' : 'none';
}

async function fetchAPI(endpoint, options = {}) {
    try {
        showLoader(true);
        const response = await fetch(endpoint, {
            ...options,
            headers: {
                'Content-Type': 'application/json',
                ...options.headers
            }
        });
        
        if (!response.ok) {
            throw new Error(`API Error: ${response.StatusCode}`);
        }
        
        const data = await response.json();
        showLoader(false);
        return data;
    } catch (error) {
        showLoader(false);
        showNotification(error.message, 'error');
        console.error('API Error:', error);
        return null;
    }
}

// ===== SECTION NAVIGATION =====
function initSectionNavigation() {
    const navItems = document.querySelectorAll('.profile-nav-item');
    const sections = document.querySelectorAll('.profile-section');
    
    navItems.forEach(item => {
        item.addEventListener('click', () => {
            const section = item.dataset.section;
            
            // Remove active class from all and add to clicked
            navItems.forEach(i => i.classList.remove('active'));
            item.classList.add('active');
            
            sections.forEach(s => s.classList.remove('active'));
            document.querySelector(`[data-section="${section}"]`)?.classList.add('active');
            
            // Load section data
            loadSectionData(section);
        });
    });
    
    // Load overview on page load
    loadSectionData('overview');
}

async function loadSectionData(section) {
    switch(section) {
        case 'personal':
            await loadPersonalInfo();
            break;
        case 'documents':
            await loadDocuments();
            break;
        case 'services':
            await loadApplications();
            break;
        case 'payments':
            await loadPayments();
            break;
        case 'notifications':
            await loadNotifications();
            break;
        case 'settings':
            initSettingsSection();
            break;
    }
}

// ===== PERSONAL INFORMATION SECTION =====
async function loadPersonalInfo() {
    const data = await fetchAPI(`${API_BASE}/profile-handler.php?action=get_profile`);
    if (!data || !data.success) return;
    
    const user = data.data;
    const form = document.getElementById('personalInfoForm');
    
    if (form) {
        form.querySelector('input[name="first_name"]').value = user.first_name || '';
        form.querySelector('input[name="last_name"]').value = user.last_name || '';
        form.querySelector('input[name="date_of_birth"]').value = user.date_of_birth || '';
        form.querySelector('select[name="gender"]').value = user.gender || '';
        form.querySelector('input[name="email"]').value = user.email || '';
        form.querySelector('input[name="phone"]').value = user.phone || '';
        form.querySelector('input[name="address"]').value = user.address || '';
        form.querySelector('input[name="city"]').value = user.city || '';
        form.querySelector('input[name="postal_code"]').value = user.postal_code || '';
    }
    
    // Handle form submission
    if (form && !form.hasListener) {
        form.hasListener = true;
        form.addEventListener('submit', handlePersonalInfoSubmit);
    }
}

async function handlePersonalInfoSubmit(e) {
    e.preventDefault();
    
    const formData = new FormData(e.target);
    const data = Object.fromEntries(formData);
    
    const result = await fetchAPI(`${API_BASE}/profile-handler.php?action=update_profile`, {
        method: 'POST',
        body: JSON.stringify(data)
    });
    
    if (result?.success) {
        showNotification('Profile updated successfully!', 'success');
    }
}

// ===== DOCUMENTS SECTION =====
async function loadDocuments() {
    const data = await fetchAPI(`${API_BASE}/profile-handler.php?action=get_documents`);
    if (!data || !data.success) return;
    
    const documents = data.data || [];
    const docList = document.querySelector('.documents-list');
    
    if (docList) {
        const listContainer = docList.querySelector('[data-documents-container]') || docList;
        listContainer.innerHTML = '';
        
        documents.forEach(doc => {
            const docEl = document.createElement('div');
            docEl.className = 'document-item';
            docEl.innerHTML = `
                <div class="doc-icon">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <div class="doc-info">
                    <h4 class="doc-name">${doc.document_name}</h4>
                    <p class="doc-date">Uploaded: ${new Date(doc.uploaded_at).toLocaleDateString()}</p>
                </div>
                <div class="doc-status">
                    <span class="badge badge-${doc.status === 'verified' ? 'success' : doc.status === 'rejected' ? 'error' : 'warning'}">
                        ${doc.status}
                    </span>
                </div>
                <button class="btn btn-sm btn-outline" onclick="downloadDocument('${doc.file_path}')">
                    <span class="material-symbols-outlined">download</span>
                </button>
            `;
            listContainer.appendChild(docEl);
        });
    }
    
    // Handle file upload
    const uploadBtn = document.getElementById('docUpload');
    if (uploadBtn && !uploadBtn.hasListener) {
        uploadBtn.hasListener = true;
        uploadBtn.addEventListener('change', handleDocumentUpload);
    }
}

async function handleDocumentUpload(e) {
    const files = e.target.files;
    if (!files.length) return;
    
    for (let file of files) {
        const formData = new FormData();
        formData.append('document', file);
        
        const result = await fetchAPI(`${API_BASE}/file-upload-handler.php?action=upload_document`, {
            method: 'POST',
            body: formData,
            headers: {} // Let browser set Content-Type
        });
        
        if (result?.success) {
            showNotification(`${file.name} uploaded successfully!`, 'success');
            await loadDocuments(); // Refresh list
        }
    }
    
    e.target.value = ''; // Reset input
}

function downloadDocument(filePath) {
    window.location.href = filePath;
}

// ===== APPLICATIONS SECTION =====
async function loadApplications() {
    const data = await fetchAPI(`${API_BASE}/profile-handler.php?action=get_applications`);
    if (!data || !data.success) return;
    
    const applications = data.data || [];
    const appsGrid = document.querySelector('.applications-grid');
    
    if (appsGrid) {
        appsGrid.innerHTML = '';
        
        applications.forEach(app => {
            const appEl = document.createElement('div');
            appEl.className = 'application-card';
            
            const statusBadgeClass = app.status === 'approved' ? 'badge-success' : 
                                     app.status === 'completed' ? 'badge-success' :
                                     app.status === 'rejected' ? 'badge-error' :
                                     app.status === 'pending' ? 'badge-warning' : 'badge-secondary';
            
            appEl.innerHTML = `
                <div class="app-header">
                    <div class="app-icon">
                        <span class="material-symbols-outlined">assignment</span>
                    </div>
                    <div>
                        <h3 class="app-title">${app.title}</h3>
                        <p class="app-id">Ref: ${app.reference_id}</p>
                    </div>
                </div>
                <div class="app-body">
                    <div class="app-meta">
                        <span class="meta-item">
                            <span class="material-symbols-outlined">calendar_today</span>
                            Submitted: ${new Date(app.submitted_at).toLocaleDateString()}
                        </span>
                    </div>
                    <p style="margin-top: 1rem; font-size: 0.875rem; color: var(--on-surface-variant);">
                        ${app.description}
                    </p>
                </div>
                <div class="app-footer">
                    <span class="badge ${statusBadgeClass}">${app.status}</span>
                    <button class="btn btn-sm btn-outline" onclick="showApplicationDetails('${app.id}')">View Details</button>
                </div>
            `;
            appsGrid.appendChild(appEl);
        });
    }
}

async function showApplicationDetails(appId) {
    const data = await fetchAPI(`${API_BASE}/applications-search.php?action=get_application_details&app_id=${appId}`);
    if (data?.success) {
        alert(`Application: ${data.data.title}\n\nStatus: ${data.data.status}\n\nDescription: ${data.data.description}`);
    }
}

// ===== PAYMENTS SECTION =====
async function loadPayments() {
    const data = await fetchAPI(`${API_BASE}/profile-handler.php?action=get_payments`);
    if (!data || !data.success) return;
    
    const payments = data.data || [];
    const paymentTable = document.querySelector('.payments-table');
    
    if (paymentTable) {
        const tableBody = paymentTable.querySelectorAll('.table-row');
        tableBody.forEach(el => el.remove());
        
        payments.forEach(payment => {
            const row = document.createElement('div');
            row.className = 'table-row';
            row.innerHTML = `
                <div class="col-date">${new Date(payment.created_at).toLocaleDateString()}</div>
                <div class="col-description">${payment.description}</div>
                <div class="col-amount">GHS ${payment.amount}</div>
                <div class="col-status">
                    <span class="badge badge-${payment.status === 'paid' ? 'success' : 'error'}">
                        ${payment.status}
                    </span>
                </div>
                <div class="col-action">
                    ${payment.status === 'paid' ? 
                        `<button class="btn btn-xs btn-outline" onclick="exportInvoice('${payment.id}')">Invoice</button>` :
                        `<button class="btn btn-xs btn-primary" onclick="processPayment('${payment.id}')">Pay</button>`
                    }
                </div>
            `;
            paymentTable.appendChild(row);
        });
    }
}

async function processPayment(paymentId) {
    const result = await fetchAPI(`${API_BASE}/payment-handler.php?action=create_payment_intent&payment_id=${paymentId}`, {
        method: 'POST',
        body: JSON.stringify({ amount: 100, currency: 'GHS' })
    });
    
    if (result?.success) {
        // In production, would integrate with Stripe.js
        showNotification('Payment processing initiated. Redirecting to payment gateway...', 'success');
        console.log('Payment Intent ID:', result.data.client_secret);
    }
}

async function exportInvoice(paymentId) {
    window.location.href = `${API_BASE}/export-handler.php?action=export_invoice&payment_id=${paymentId}`;
}

async function exportApplicationSummary(appId) {
    window.location.href = `${API_BASE}/export-handler.php?action=export_application&app_id=${appId}`;
}

// ===== NOTIFICATIONS SECTION =====
async function loadNotifications() {
    const data = await fetchAPI(`${API_BASE}/profile-handler.php?action=get_notifications`);
    if (!data || !data.success) return;
    
    const notifications = data.data || [];
    const notifList = document.querySelector('.notifications-list');
    
    if (notifList) {
        notifList.innerHTML = '';
        
        notifications.forEach(notif => {
            const notifEl = document.createElement('div');
            notifEl.className = `notification-item ${notif.read_at ? '' : 'unread'}`;
            notifEl.innerHTML = `
                <div class="notification-icon">
                    <span class="material-symbols-outlined">info</span>
                </div>
                <div class="notification-content">
                    <h3 class="notification-title">${notif.title}</h3>
                    <p class="notification-message">${notif.message}</p>
                    <span class="notification-date">${new Date(notif.created_at).toLocaleString()}</span>
                </div>
                <button class="btn btn-xs btn-outline" onclick="dismissNotification('${notif.id}')">Dismiss</button>
            `;
            notifList.appendChild(notifEl);
        });
    }
    
    // Initialize notification preferences
    initNotificationPreferences();
}

async function dismissNotification(notifId) {
    // Would call API to mark as read
    document.querySelector(`[data-notification-id="${notifId}"]`)?.remove();
}

function initNotificationPreferences() {
    const emailToggle = document.getElementById('emailNotif');
    const smsToggle = document.getElementById('smsNotif');
    const appToggle = document.getElementById('appNotif');
    
    [emailToggle, smsToggle, appToggle].forEach(toggle => {
        if (toggle && !toggle.hasListener) {
            toggle.hasListener = true;
            toggle.addEventListener('change', async (e) => {
                const type = e.target.id.replace('Notif', '').toUpperCase();
                const enabled = e.target.checked;
                
                await fetchAPI(`${CORE_BASE}/notification-service.php?action=set_preference`, {
                    method: 'POST',
                    body: JSON.stringify({ type, enabled })
                });
                
                showNotification('Notification preferences updated!', 'success');
            });
        }
    });
}

// ===== SETTINGS SECTION =====
function initSettingsSection() {
    const passwordBtn = document.querySelector('[data-action="change-password"]');
    const twoFactorBtn = document.querySelector('[data-action="setup-2fa"]');
    const privacyBtn = document.querySelector('[data-action="manage-privacy"]');
    const devicesBtn = document.querySelector('[data-action="manage-devices"]');
    const deleteBtn = document.querySelector('[data-action="delete-account"]');
    
    if (passwordBtn) passwordBtn.addEventListener('click', () => showPasswordModal());
    if (twoFactorBtn) twoFactorBtn.addEventListener('click', () => show2FASetupModal());
    if (privacyBtn) privacyBtn.addEventListener('click', () => showPrivacyModal());
    if (devicesBtn) devicesBtn.addEventListener('click', () => showDevicesModal());
    if (deleteBtn) deleteBtn.addEventListener('click', () => showDeleteAccountModal());
}

// ===== AVATAR/PROFILE PICTURE UPLOAD =====
function initAvatarUpload() {
    const uploadBtn = document.getElementById('uploadPhotoBtn');
    
    if (uploadBtn && !uploadBtn.hasListener) {
        uploadBtn.hasListener = true;
        uploadBtn.addEventListener('click', () => {
            const input = document.createElement('input');
            input.type = 'file';
            input.accept = 'image/*';
            input.addEventListener('change', async (e) => {
                const file = e.target.files[0];
                if (!file) return;
                
                const formData = new FormData();
                formData.append('avatar', file);
                
                const result = await fetchAPI(`${API_BASE}/file-upload-handler.php?action=upload_avatar`, {
                    method: 'POST',
                    body: formData,
                    headers: {}
                });
                
                if (result?.success) {
                    document.querySelector('.avatar-image img').src = result.data.avatar_path + '?t=' + Date.now();
                    showNotification('Profile picture updated!', 'success');
                }
            });
            input.click();
        });
    }
}

// ===== 2FA SETUP MODAL =====
function show2FASetupModal() {
    const modal = document.createElement('div');
    modal.className = 'modal modal-2fa';
    modal.innerHTML = `
        <div class="modal-content">
            <div class="modal-header">
                <h2>Set Up Two-Factor Authentication</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <div class="twofa-steps">
                    <div class="step active" data-step="method">
                        <h3>Step 1: Choose Your Method</h3>
                        <div class="method-options">
                            <label class="method-option">
                                <input type="radio" name="twofa_method" value="totp" checked>
                                <span class="material-symbols-outlined">phonelink_setup</span>
                                <div>
                                    <strong>Authenticator App</strong>
                                    <p>Use Google Authenticator or similar</p>
                                </div>
                            </label>
                            <label class="method-option">
                                <input type="radio" name="twofa_method" value="email">
                                <span class="material-symbols-outlined">mail</span>
                                <div>
                                    <strong>Email</strong>
                                    <p>Receive codes via email</p>
                                </div>
                            </label>
                            <label class="method-option">
                                <input type="radio" name="twofa_method" value="sms">
                                <span class="material-symbols-outlined">sms</span>
                                <div>
                                    <strong>SMS</strong>
                                    <p>Receive codes via text message</p>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="step" data-step="setup">
                        <h3>Step 2: Scan QR Code</h3>
                        <div id="qrCodeContainer" style="text-align: center; padding: 2rem;">
                            Loading QR code...
                        </div>
                        <div style="margin-top: 1.5rem;">
                            <strong>Your Secret Key:</strong>
                            <div style="background: var(--surface-container); padding: 1rem; border-radius: 0.5rem; font-family: monospace; word-break: break-all;" id="secretKey"></div>
                        </div>
                    </div>
                    
                    <div class="step" data-step="verify">
                        <h3>Step 3: Verify Code</h3>
                        <input type="text" id="verifyCode" placeholder="Enter 6-digit code" maxlength="6" style="width: 100%; padding: 0.75rem; border-radius: 0.5rem; border: 1px solid var(--outline); margin-bottom: 1rem;">
                        <div id="backupCodes" style="background: var(--surface-container-low); padding: 1rem; border-radius: 0.5rem; margin-bottom: 1rem;">
                            <strong>Backup Codes (Save these!):</strong>
                            <pre id="backupCodesList"></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-outline close-btn">Cancel</button>
                <button class="btn btn-primary next-btn">Next</button>
            </div>
        </div>
    `;
    
    document.body.appendChild(modal);
    
    // Close modal
    modal.querySelector('.modal-close').addEventListener('click', () => modal.remove());
    modal.querySelector('.close-btn').addEventListener('click', () => modal.remove());
    
    // Next button
    let currentStep = 0;
    const steps = ['method', 'setup', 'verify'];
    
    modal.querySelector('.next-btn').addEventListener('click', () => {
        if (currentStep < steps.length - 1) {
            setup2FAStep(modal, steps, currentStep + 1);
            currentStep++;
        } else {
            verify2FA(modal);
        }
    });
}

async function setup2FAStep(modal, steps, stepIndex) {
    const currentStep = steps[stepIndex];
    
    if (currentStep === 'setup') {
        const method = modal.querySelector('input[name="twofa_method"]:checked').value;
        
        const result = await fetchAPI(`${CORE_BASE}/two-factor-auth.php?action=enable_2fa&method=${method}`, {
            method: 'POST'
        });
        
        if (result?.success) {
            const qrUrl = result.data.qr_code;
            const secret = result.data.secret;
            
            modal.querySelector('#qrCodeContainer').innerHTML = `
                <img src="${qrUrl}" alt="QR Code" style="max-width: 300px;">
            `;
            modal.querySelector('#secretKey').textContent = secret;
        }
    }
    
    if (currentStep === 'verify') {
        const result = await fetchAPI(`${CORE_BASE}/two-factor-auth.php?action=get_backup_codes`, {
            method: 'POST'
        });
        
        if (result?.success) {
            modal.querySelector('#backupCodesList').textContent = result.data.backup_codes.join('\n');
        }
    }
    
    // Show current step
    modal.querySelectorAll('.step').forEach(s => s.classList.remove('active'));
    modal.querySelector(`[data-step="${currentStep}"]`).classList.add('active');
    
    // Update button
    const nextBtn = modal.querySelector('.next-btn');
    if (stepIndex === steps.length - 1) {
        nextBtn.textContent = 'Enable 2FA';
    }
}

async function verify2FA(modal) {
    const code = modal.querySelector('#verifyCode').value;
    
    if (!code || code.length !== 6) {
        showNotification('Please enter a valid 6-digit code', 'error');
        return;
    }
    
    const result = await fetchAPI(`${CORE_BASE}/two-factor-auth.php?action=verify_2fa_setup&code=${code}`, {
        method: 'POST'
    });
    
    if (result?.success) {
        showNotification('Two-Factor Authentication enabled successfully!', 'success');
        modal.remove();
    }
}

// ===== INITIALIZATION =====
document.addEventListener('DOMContentLoaded', () => {
    initSectionNavigation();
    initAvatarUpload();
    
    // Add CSS for styles
    addProfileStyles();
});

function addProfileStyles() {
    const style = document.createElement('style');
    style.textContent = `
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            background: var(--surface);
            border: 1px solid var(--outline);
            padding: 1rem 1.5rem;
            border-radius: 0.5rem;
            box-shadow: var(--shadow-lg);
            display: flex;
            align-items: center;
            gap: 1rem;
            z-index: 1000;
            animation: slideIn 0.3s ease;
        }
        
        @keyframes slideIn {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        
        .notification-success {
            background: var(--success-container);
            color: var(--on-success-container);
            border-color: var(--success);
        }
        
        .notification-error {
            background: var(--error-container);
            color: var(--on-error-container);
            border-color: var(--error);
        }
        
        .profile-loader {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            z-index: 999;
        }
        
        .spinner {
            width: 40px;
            height: 40px;
            border: 4px solid var(--outline);
            border-top-color: var(--primary);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
        }
        
        .modal-content {
            background: var(--surface);
            border-radius: var(--radius-lg);
            max-width: 500px;
            width: 90%;
            box-shadow: var(--shadow-lg);
        }
        
        .modal-header {
            padding: var(--spacing-xl);
            border-bottom: 1px solid var(--outline);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .modal-header h2 {
            margin: 0;
        }
        
        .modal-close {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--on-surface-variant);
        }
        
        .modal-body {
            padding: var(--spacing-xl);
        }
        
        .modal-footer {
            padding: var(--spacing-lg) var(--spacing-xl);
            border-top: 1px solid var(--outline);
            display: flex;
            gap: var(--spacing-lg);
            justify-content: flex-end);
        }
        
        .step {
            display: none;
        }
        
        .step.active {
            display: block;
        }
        
        .method-options {
            display: grid;
            gap: 1rem;
        }
        
        .method-option {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            border: 1px solid var(--outline);
            border-radius: 0.5rem;
            cursor: pointer;
        }
        
        .method-option:hover {
            background: var(--surface-container-low);
        }
        
        .method-option input[type="radio"] {
            cursor: pointer;
        }
        
        .method-option .material-symbols-outlined {
            font-size: 1.75rem;
            color: var(--primary);
        }
    `;
    document.head.appendChild(style);
}
