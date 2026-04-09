<?php
/**
 * Bamenda City Council E-Governance Platform
 * Online Payments Page
 */

// Set page metadata
$page_title = 'Online Payments | Bamenda City Council';
$page_description = 'Make secure online payments for council services, taxes, permits, and fees.';
$page_keywords = 'online payments, secure payments, council fees, service payments, Bamenda';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Services', 'url' => 'services.php'],
    ['title' => 'Online Payments', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero payments-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-government-building.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary">Online Payments</span>
            <h1 class="hero-title">Secure Payment Portal</h1>
            <p class="hero-subtitle">
                Pay for council services, taxes, permits, and fees securely online. Multiple payment options available.
            </p>
            <div class="hero-actions">
                <a href="#payment-form" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">payments</span>
                    Make Payment
                </a>
                <a href="#payment-history" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">history</span>
                    Payment History
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Payment Options -->
<section class="payment-options-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Payment Options</h2>
            <p class="section-subtitle">Choose your preferred payment method</p>
        </div>

        <div class="payment-options-grid">
            <div class="payment-option-card">
                <div class="payment-icon">
                    <span class="material-symbols-outlined">smartphone</span>
                </div>
                <h3 class="payment-title">Mobile Money</h3>
                <p class="payment-description">Pay with MTN Mobile Money, Orange Money, or Express Union</p>
                <ul class="payment-features">
                    <li>Instant confirmation</li>
                    <li>No extra charges</li>
                    <li>Available 24/7</li>
                </ul>
                <button class="btn btn-primary">Pay with Mobile Money</button>
            </div>

            <div class="payment-option-card">
                <div class="payment-icon">
                    <span class="material-symbols-outlined">credit_card</span>
                </div>
                <h3 class="payment-title">Card Payment</h3>
                <p class="payment-description">Pay with Visa, Mastercard, or UnionPay cards</p>
                <ul class="payment-features">
                    <li>Secure processing</li>
                    <li>International cards accepted</li>
                    <li>Instant verification</li>
                </ul>
                <button class="btn btn-primary">Pay with Card</button>
            </div>

            <div class="payment-option-card">
                <div class="payment-icon">
                    <span class="material-symbols-outlined">account_balance</span>
                </div>
                <h3 class="payment-title">Bank Transfer</h3>
                <p class="payment-description">Direct transfer to Bamenda City Council bank account</p>
                <ul class="payment-features">
                    <li>Large amount payments</li>
                    <li>Business payments</li>
                    <li>Bank verification</li>
                </ul>
                <button class="btn btn-primary">Pay by Bank Transfer</button>
            </div>

            <div class="payment-option-card">
                <div class="payment-icon">
                    <span class="material-symbols-outlined">payments</span>
                </div>
                <h3 class="payment-title">Online Banking</h3>
                <p class="payment-description">Pay through your online banking platform</p>
                <ul class="payment-features">
                    <li>Direct from bank</li>
                    <li>Secure authentication</li>
                    <li>Automatic receipt</li>
                </ul>
                <button class="btn btn-primary">Pay with Online Banking</button>
            </div>
        </div>
    </div>
</section>

<!-- Payment Form -->
<section class="payment-form-section" id="payment-form">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Make a Payment</h2>
            <p class="section-subtitle">Complete your payment details below</p>
        </div>

        <div class="payment-form">
            <form id="onlinePaymentForm">
                <div class="form-section">
                    <h3 class="section-title">Payment Information</h3>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Payment Type *</label>
                            <select class="form-select" required>
                                <option value="">Select payment type</option>
                                <option value="tax">Tax Payment</option>
                                <option value="permit">Permit Fee</option>
                                <option value="license">Business License</option>
                                <option value="service">Service Fee</option>
                                <option value="fine">Fine/Penalty</option>
                                <option value="market">Market Stall Fee</option>
                                <option value="other">Other Payment</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Reference Number *</label>
                            <input type="text" class="form-input" placeholder="Enter reference number" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Amount (₣) *</label>
                            <input type="number" class="form-input" placeholder="Enter amount" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Payment Description</label>
                            <input type="text" class="form-input" placeholder="Brief description of payment">
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">Payment Method</h3>
                    
                    <div class="payment-methods">
                        <div class="payment-method">
                            <input type="radio" name="paymentMethod" id="mobile-money" value="mobile" checked>
                            <label for="mobile-money" class="payment-method-option">
                                <div class="method-header">
                                    <span class="method-icon">
                                        <span class="material-symbols-outlined">smartphone</span>
                                    </span>
                                    <div class="method-info">
                                        <h4>Mobile Money</h4>
                                        <p>MTN, Orange, Express Union</p>
                                    </div>
                                </div>
                                <div class="method-details">
                                    <div class="form-group">
                                        <label class="form-label">Mobile Network</label>
                                        <select class="form-select">
                                            <option value="mtn">MTN Mobile Money</option>
                                            <option value="orange">Orange Money</option>
                                            <option value="express">Express Union</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Phone Number *</label>
                                        <input type="tel" class="form-input" placeholder="+237 6XX XXX XXX">
                                    </div>
                                </div>
                            </label>
                        </div>

                        <div class="payment-method">
                            <input type="radio" name="paymentMethod" id="card-payment" value="card">
                            <label for="card-payment" class="payment-method-option">
                                <div class="method-header">
                                    <span class="method-icon">
                                        <span class="material-symbols-outlined">credit_card</span>
                                    </span>
                                    <div class="method-info">
                                        <h4>Card Payment</h4>
                                        <p>Visa, Mastercard, UnionPay</p>
                                    </div>
                                </div>
                                <div class="method-details">
                                    <div class="form-group">
                                        <label class="form-label">Card Number *</label>
                                        <input type="text" class="form-input" placeholder="1234 5678 9012 3456" maxlength="19">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group">
                                            <label class="form-label">Expiry Date *</label>
                                            <input type="text" class="form-input" placeholder="MM/YY" maxlength="5">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">CVV *</label>
                                            <input type="text" class="form-input" placeholder="123" maxlength="3">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Cardholder Name *</label>
                                        <input type="text" class="form-input" placeholder="Name on card">
                                    </div>
                                </div>
                            </label>
                        </div>

                        <div class="payment-method">
                            <input type="radio" name="paymentMethod" id="bank-transfer" value="bank">
                            <label for="bank-transfer" class="payment-method-option">
                                <div class="method-header">
                                    <span class="method-icon">
                                        <span class="material-symbols-outlined">account_balance</span>
                                    </span>
                                    <div class="method-info">
                                        <h4>Bank Transfer</h4>
                                        <p>Direct bank transfer</p>
                                    </div>
                                </div>
                                <div class="method-details">
                                    <div class="bank-details">
                                        <h5>Bank Account Details</h5>
                                        <div class="bank-info">
                                            <p><strong>Bank:</strong> BICEC Bamenda</p>
                                            <p><strong>Account Name:</strong> Bamenda City Council</p>
                                            <p><strong>Account Number:</strong> 1001 2345 6789</p>
                                            <p><strong>Routing Number:</strong> 10001</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Transaction ID *</label>
                                        <input type="text" class="form-input" placeholder="Enter bank transaction ID">
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">Payer Information</h3>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Full Name *</label>
                            <input type="text" class="form-input" placeholder="Enter your full name" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email Address *</label>
                            <input type="email" class="form-input" placeholder="Enter your email" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Phone Number *</label>
                            <input type="tel" class="form-input" placeholder="+237 233 000 000" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">ID Number</label>
                            <input type="text" class="form-input" placeholder="National ID or Passport">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Billing Address</label>
                        <input type="text" class="form-input" placeholder="Enter your billing address">
                    </div>
                </div>

                <div class="payment-summary">
                    <h4>Payment Summary</h4>
                    <div class="summary-details">
                        <div class="summary-row">
                            <span>Payment Type:</span>
                            <span id="summaryType">-</span>
                        </div>
                        <div class="summary-row">
                            <span>Reference:</span>
                            <span id="summaryReference">-</span>
                        </div>
                        <div class="summary-row">
                            <span>Amount:</span>
                            <span class="summary-amount" id="summaryAmount">₣0</span>
                        </div>
                        <div class="summary-row">
                            <span>Processing Fee:</span>
                            <span id="summaryFee">₣0</span>
                        </div>
                        <div class="summary-row total">
                            <span>Total Amount:</span>
                            <span class="summary-total" id="summaryTotal">₣0</span>
                        </div>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="button" class="btn btn-outline" onclick="resetPaymentForm()">Reset</button>
                    <button type="submit" class="btn btn-primary">Process Payment</button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Payment History -->
<section class="payment-history-section" id="payment-history">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Payment History</h2>
            <p class="section-subtitle">View your recent payment transactions</p>
        </div>

        <div class="history-filters">
            <div class="filter-row">
                <div class="form-group">
                    <label class="form-label">Payment Type</label>
                    <select class="form-select" id="filterType">
                        <option value="">All Types</option>
                        <option value="tax">Tax Payment</option>
                        <option value="permit">Permit Fee</option>
                        <option value="license">Business License</option>
                        <option value="service">Service Fee</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Date Range</label>
                    <select class="form-select" id="filterDate">
                        <option value="">All Time</option>
                        <option value="today">Today</option>
                        <option value="week">This Week</option>
                        <option value="month">This Month</option>
                        <option value="year">This Year</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Status</label>
                    <select class="form-select" id="filterStatus">
                        <option value="">All Status</option>
                        <option value="completed">Completed</option>
                        <option value="pending">Pending</option>
                        <option value="failed">Failed</option>
                    </select>
                </div>
                <button class="btn btn-primary" onclick="filterPayments()">Filter</button>
            </div>
        </div>

        <div class="payment-history-table">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Transaction ID</th>
                        <th>Date</th>
                        <th>Type</th>
                        <th>Reference</th>
                        <th>Amount</th>
                        <th>Method</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>PMT-2024-0456</td>
                        <td>Jan 15, 2024</td>
                        <td>Tax Payment</td>
                        <td>TAX-2024-0456</td>
                        <td>₣25,000</td>
                        <td>Mobile Money</td>
                        <td><span class="badge badge-success">Completed</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline">Download Receipt</button>
                        </td>
                    </tr>
                    <tr>
                        <td>PMT-2024-0457</td>
                        <td>Feb 20, 2024</td>
                        <td>Business License</td>
                        <td>BIZ-2024-0123</td>
                        <td>₣75,000</td>
                        <td>Card Payment</td>
                        <td><span class="badge badge-success">Completed</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline">Download Receipt</button>
                        </td>
                    </tr>
                    <tr>
                        <td>PMT-2024-0458</td>
                        <td>Mar 10, 2024</td>
                        <td>Permit Fee</td>
                        <td>PER-2024-0789</td>
                        <td>₣15,000</td>
                        <td>Bank Transfer</td>
                        <td><span class="badge badge-warning">Pending</span></td>
                        <td>
                            <button class="btn btn-sm btn-outline">View Details</button>
                        </td>
                    </tr>
                    <tr>
                        <td>PMT-2024-0459</td>
                        <td>Mar 25, 2024</td>
                        <td>Service Fee</td>
                        <td>SVC-2024-0234</td>
                        <td>₣5,000</td>
                        <td>Mobile Money</td>
                        <td><span class="badge badge-danger">Failed</span></td>
                        <td>
                            <button class="btn btn-sm btn-primary">Retry Payment</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Security Features -->
<section class="security-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Secure & Protected</h2>
            <p class="section-subtitle">Your payments are safe with our advanced security features</p>
        </div>

        <div class="security-features-grid">
            <div class="security-feature">
                <div class="security-icon">
                    <span class="material-symbols-outlined">lock</span>
                </div>
                <h3 class="security-title">SSL Encryption</h3>
                <p class="security-description">All transactions are protected with 256-bit SSL encryption</p>
            </div>

            <div class="security-feature">
                <div class="security-icon">
                    <span class="material-symbols-outlined">verified_user</span>
                </div>
                <h3 class="security-title">PCI Compliance</h3>
                <p class="security-description">We comply with PCI DSS standards for card payments</p>
            </div>

            <div class="security-feature">
                <div class="security-icon">
                    <span class="material-symbols-outlined">gpp_good</span>
                </div>
                <h3 class="security-title">Fraud Detection</h3>
                <p class="security-description">Advanced fraud detection system monitors all transactions</p>
            </div>

            <div class="security-feature">
                <div class="security-icon">
                    <span class="material-symbols-outlined">receipt_long</span>
                </div>
                <h3 class="security-title">Instant Receipts</h3>
                <p class="security-description">Receive digital receipts immediately after payment</p>
            </div>
        </div>
    </div>
</section>

<!-- Statistics -->
<section class="statistics-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Payment Statistics</h2>
            <p class="section-subtitle">Overview of online payment transactions</p>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">payments</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">₣8.5M</div>
                    <div class="stat-label">Monthly Volume</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+25% this month</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">receipt</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">12,456</div>
                    <div class="stat-label">Monthly Transactions</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+18% this month</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">check_circle</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">98.5%</div>
                    <div class="stat-label">Success Rate</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+2% improvement</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">schedule</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">45 sec</div>
                    <div class="stat-label">Average Processing Time</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_down</span>
                        <span>-15% faster</span>
                    </div>
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
/* Payments Page Styles */
.payments-hero {
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-container) 100%);
}

/* Payment Options Section */
.payment-options-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.payment-options-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: var(--spacing-xl);
}

.payment-option-card {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.payment-option-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.payment-icon {
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

.payment-icon .material-symbols-outlined {
    font-size: 2rem;
}

.payment-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.payment-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.payment-features {
    list-style: none;
    padding: 0;
    margin-bottom: var(--spacing-lg);
}

.payment-features li {
    padding: var(--spacing-xs) 0;
    color: var(--on-surface-variant);
    font-size: 0.875rem;
    position: relative;
    padding-left: var(--spacing-lg);
}

.payment-features li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--tertiary);
    font-weight: 700;
}

/* Payment Form Section */
.payment-form-section {
    padding: var(--spacing-3xl) 0;
}

.payment-form {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-2xl);
    border: 1px solid var(--outline-variant);
    max-width: 800px;
    margin: 0 auto;
}

.payment-methods {
    display: grid;
    gap: var(--spacing-lg);
}

.payment-method input[type="radio"] {
    display: none;
}

.payment-method-option {
    display: block;
    background-color: var(--surface-container);
    border: 2px solid var(--outline-variant);
    border-radius: var(--radius-md);
    cursor: pointer;
    transition: all 0.2s ease;
}

.payment-method-option:hover {
    border-color: var(--primary);
    background-color: var(--surface-container-high);
}

.payment-method input[type="radio"]:checked + .payment-method-option {
    border-color: var(--primary);
    background-color: var(--primary-container);
}

.method-header {
    display: grid;
    grid-template-columns: auto 1fr;
    gap: var(--spacing-lg);
    align-items: center;
    padding: var(--spacing-lg);
}

.method-icon {
    width: 3rem;
    height: 3rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
}

.method-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.method-info h4 {
    font-size: 1.125rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: var(--spacing-xs);
}

.method-info p {
    color: var(--on-surface-variant);
    font-size: 0.875rem;
}

.method-details {
    padding: 0 var(--spacing-lg) var(--spacing-lg);
    display: none;
}

.payment-method input[type="radio"]:checked + .payment-method-option .method-details {
    display: block;
}

.bank-details {
    background-color: var(--surface-container-lowest);
    padding: var(--spacing-lg);
    border-radius: var(--radius-md);
    margin-bottom: var(--spacing-lg);
}

.bank-details h5 {
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.bank-info p {
    margin: var(--spacing-xs) 0;
    color: var(--on-surface-variant);
}

.bank-info strong {
    color: var(--on-surface);
}

/* Payment Summary */
.payment-summary {
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
    padding: var(--spacing-lg);
    margin: var(--spacing-xl) 0;
}

.payment-summary h4 {
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.summary-details {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
}

.summary-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--spacing-xs) 0;
}

.summary-row.total {
    border-top: 1px solid var(--outline-variant);
    margin-top: var(--spacing-sm);
    padding-top: var(--spacing-sm);
    font-weight: 700;
}

.summary-amount,
.summary-total {
    color: var(--primary);
    font-weight: 600;
}

.summary-total {
    font-size: 1.125rem;
}

/* Payment History Section */
.payment-history-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.history-filters {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    margin-bottom: var(--spacing-xl);
}

.filter-row {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: var(--spacing-lg);
    align-items: end;
}

.payment-history-table {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    border: 1px solid var(--outline-variant);
    overflow: hidden;
}

.data-table {
    width: 100%;
    border-collapse: collapse;
}

.data-table th {
    background-color: var(--surface-container);
    padding: var(--spacing-md);
    text-align: left;
    font-weight: 600;
    color: var(--primary);
    border-bottom: 1px solid var(--outline-variant);
}

.data-table td {
    padding: var(--spacing-md);
    border-bottom: 1px solid var(--outline-variant);
}

.data-table tr:hover {
    background-color: var(--surface-container);
}

/* Security Section */
.security-section {
    padding: var(--spacing-3xl) 0;
}

.security-features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: var(--spacing-xl);
}

.security-feature {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-xl);
    border: 1px solid var(--outline-variant);
    text-align: center;
    transition: all 0.3s ease;
}

.security-feature:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.security-icon {
    width: 3.5rem;
    height: 3.5rem;
    background-color: var(--tertiary);
    color: var(--on-tertiary);
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
    font-size: 1.125rem;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: var(--spacing-md);
}

.security-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
}

/* Form Sections */
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

/* Statistics Section */
.statistics-section {
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

/* Responsive Design */
@media (max-width: 768px) {
    .payment-options-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .method-header {
        grid-template-columns: 1fr;
        text-align: center;
        gap: var(--spacing-md);
    }
    
    .form-row {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .filter-row {
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
    
    .stats-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-md);
    }
    
    .stat-card {
        grid-template-columns: 1fr;
        text-align: center;
        gap: var(--spacing-md);
    }
    
    .data-table {
        font-size: 0.875rem;
    }
    
    .data-table th,
    .data-table td {
        padding: var(--spacing-sm);
    }
}

@media (max-width: 480px) {
    .payment-option-card {
        padding: var(--spacing-lg);
    }
    
    .payment-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .payment-icon .material-symbols-outlined {
        font-size: 1.5rem;
    }
    
    .payment-form {
        padding: var(--spacing-lg);
    }
    
    .security-feature {
        padding: var(--spacing-lg);
    }
    
    .security-icon {
        width: 3rem;
        height: 3rem;
    }
    
    .stat-number {
        font-size: 1.5rem;
    }
}
</style>

<script>
// Payment form functionality
document.getElementById('onlinePaymentForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    submitBtn.innerHTML = 'Processing...';
    submitBtn.disabled = true;

    const data = {
        paymentType: document.querySelector('select[required]').value,
        reference: document.querySelector('input[placeholder="Enter reference number"]').value,
        amount: document.querySelector('input[placeholder="Enter amount"]').value,
        paymentMethod: document.querySelector('input[name="paymentMethod"]:checked')?.value || 'mobile'
    };

    fetch('/stitch1/core/process-payment.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(data)
    })
    .then(res => res.json())
    .then(res => {
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
        if(res.success) {
            alert('🎉 Payment processed successfully!\nTransaction ID: ' + res.transaction_id);
            // Append to table dynamically
            const tbody = document.querySelector('.data-table tbody');
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${res.transaction_id}</td>
                <td>${res.date}</td>
                <td>${res.type}</td>
                <td>${res.reference}</td>
                <td>₣${Number(res.amount).toLocaleString()}</td>
                <td>${data.paymentMethod}</td>
                <td><span class="badge badge-success">Completed</span></td>
                <td><button class="btn btn-sm btn-outline">Download Receipt</button></td>
            `;
            tbody.insertBefore(row, tbody.firstChild);
            resetPaymentForm();
        } else {
            alert('Error: ' + res.message);
        }
    })
    .catch(err => {
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
        alert('Network error connecting to payment gateway.');
    });
});

// Update payment summary
function updatePaymentSummary() {
    const paymentType = document.querySelector('select[name="paymentType"]').value;
    const reference = document.querySelector('input[placeholder="Enter reference number"]').value;
    const amount = document.querySelector('input[placeholder="Enter amount"]').value;
    
    // Update summary
    document.getElementById('summaryType').textContent = paymentType || '-';
    document.getElementById('summaryReference').textContent = reference || '-';
    document.getElementById('summaryAmount').textContent = amount ? `₣${parseFloat(amount).toLocaleString()}` : '₣0';
    
    // Calculate processing fee (1% for mobile money, 2% for cards, 0% for bank transfer)
    const paymentMethod = document.querySelector('input[name="paymentMethod"]:checked')?.value || 'mobile';
    let feeRate = 0;
    if (paymentMethod === 'mobile') feeRate = 0.01;
    if (paymentMethod === 'card') feeRate = 0.02;
    
    const fee = amount ? parseFloat(amount) * feeRate : 0;
    const total = amount ? parseFloat(amount) + fee : 0;
    
    document.getElementById('summaryFee').textContent = `₣${fee.toLocaleString()}`;
    document.getElementById('summaryTotal').textContent = `₣${total.toLocaleString()}`;
}

// Add event listeners for form fields
document.querySelectorAll('input, select').forEach(field => {
    field.addEventListener('input', updatePaymentSummary);
    field.addEventListener('change', updatePaymentSummary);
});

// Reset form
function resetPaymentForm() {
    document.getElementById('onlinePaymentForm').reset();
    updatePaymentSummary();
}

// Filter payments
function filterPayments() {
    // In production, this would filter the payment history
    alert('Filter functionality would be implemented here');
}

// Card number formatting
document.querySelector('input[placeholder*="Card"]').addEventListener('input', function(e) {
    let value = e.target.value.replace(/\s/g, '');
    let formattedValue = value.match(/.{1,4}/g)?.join(' ') || value;
    e.target.value = formattedValue;
});

// Expiry date formatting
document.querySelector('input[placeholder*="MM/YY"]').addEventListener('input', function(e) {
    let value = e.target.value.replace(/\D/g, '');
    if (value.length >= 2) {
        value = value.slice(0, 2) + '/' + value.slice(2, 4);
    }
    e.target.value = value;
});

// CVV validation
document.querySelector('input[placeholder*="CVV"]').addEventListener('input', function(e) {
    e.target.value = e.target.value.replace(/\D/g, '').slice(0, 3);
});

// Initialize summary
updatePaymentSummary();
</script>
