<?php
/**
 * Bamenda City Council E-Governance Platform
 * Tax Portal Page
 */

// Set page metadata
$page_title = 'Tax Portal | Bamenda City Council';
$page_description = 'Calculate, pay, and manage your taxes online with the Bamenda City Council tax portal.';
$page_keywords = 'tax portal, online tax payment, property tax, business tax, Bamenda taxes';

// Set breadcrumbs
$breadcrumbs = [
    ['title' => 'Services', 'url' => 'services.php'],
    ['title' => 'Tax Portal', 'url' => '#']
];

// Include header
require_once __DIR__ . '/../../includes/header.php';
?>

<!-- Hero Section -->
<section class="hero tax-portal-hero">
    <div class="hero-background">
        <img src="../../assets/images/bamenda-government-building.jpg">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <span class="badge badge-secondary badge-lg">Tax Portal</span>
            <h1 class="hero-title">Online Tax Management</h1>
            <p class="hero-subtitle">
                Calculate, pay, and manage your taxes conveniently online. Access tax records, download receipts, and stay compliant.
            </p>
            <div class="hero-actions">
                <a href="#tax-calculator" class="btn btn-lg btn-secondary">
                    <span class="material-symbols-outlined">calculate</span>
                    Calculate Tax
                </a>
                <a href="#tax-payment" class="btn btn-lg btn-outline">
                    <span class="material-symbols-outlined">payments</span>
                    Pay Tax
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Quick Tax Actions</h2>
            <p class="section-subtitle">Manage your taxes efficiently</p>
        </div>

        <div class="quick-actions-grid">
            <div class="action-card" onclick="openTaxCalculator()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">calculate</span>
                </div>
                <h3 class="action-title">Tax Calculator</h3>
                <p class="action-description">Calculate your property, business, and other taxes</p>
            </div>

            <div class="action-card" onclick="openTaxPayment()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">payments</span>
                </div>
                <h3 class="action-title">Pay Tax Online</h3>
                <p class="action-description">Secure online payment for all tax types</p>
            </div>

            <div class="action-card" onclick="openTaxRecords()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">history</span>
                </div>
                <h3 class="action-title">Tax History</h3>
                <p class="action-description">View your payment history and receipts</p>
            </div>

            <div class="action-card" onclick="openTaxCertificate()">
                <div class="action-icon">
                    <span class="material-symbols-outlined">description</span>
                </div>
                <h3 class="action-title">Tax Certificate</h3>
                <p class="action-description">Download tax clearance certificates</p>
            </div>
        </div>
    </div>
</section>

<!-- Tax Calculator -->
<section class="tax-calculator-section" id="tax-calculator">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Tax Calculator</h2>
            <p class="section-subtitle">Calculate your tax obligations</p>
        </div>

        <div class="tax-calculator">
            <div class="calculator-tabs">
                <button class="calc-tab active" data-tax="property">Property Tax</button>
                <button class="calc-tab" data-tax="business">Business Tax</button>
                <button class="calc-tab" data-tax="market">Market Tax</button>
                <button class="calc-tab" data-tax="vehicle">Vehicle Tax</button>
            </div>

            <div class="calculator-content">
                <!-- Property Tax Calculator -->
                <div class="calc-panel active" id="property">
                    <div class="form-group">
                        <label class="form-label">Property Type</label>
                        <select class="form-select" id="propertyType">
                            <option value="residential">Residential</option>
                            <option value="commercial">Commercial</option>
                            <option value="industrial">Industrial</option>
                            <option value="agricultural">Agricultural</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Property Value (₣)</label>
                        <input type="number" class="form-input" id="propertyValue" placeholder="Enter property value">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Property Size (m²)</label>
                        <input type="number" class="form-input" id="propertySize" placeholder="Enter property size">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Location</label>
                        <select class="form-select" id="propertyLocation">
                            <option value="nkwen">Nkwen</option>
                            <option value="mankon">Mankon</option>
                            <option value="bamendakwe">Bamendakwe</option>
                            <option value="bambili">Bambili</option>
                            <option value="bambui">Bambui</option>
                        </select>
                    </div>

                    <button class="btn btn-primary" onclick="calculatePropertyTax()">Calculate Property Tax</button>

                    <div class="calculation-result" id="propertyResult" style="display: none;">
                        <h4>Calculated Tax</h4>
                        <div class="result-details">
                            <div class="result-row">
                                <span>Annual Property Tax:</span>
                                <span class="result-value" id="propertyTaxAmount">₣0</span>
                            </div>
                            <div class="result-row">
                                <span>Payment Frequency:</span>
                                <span>Monthly</span>
                            </div>
                            <div class="result-row">
                                <span>Monthly Payment:</span>
                                <span class="result-value" id="monthlyPropertyTax">₣0</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Business Tax Calculator -->
                <div class="calc-panel" id="business">
                    <div class="form-group">
                        <label class="form-label">Business Type</label>
                        <select class="form-select" id="businessType">
                            <option value="retail">Retail</option>
                            <option value="service">Service</option>
                            <option value="manufacturing">Manufacturing</option>
                            <option value="hospitality">Hospitality</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Annual Turnover (₣)</label>
                        <input type="number" class="form-input" id="businessTurnover" placeholder="Enter annual turnover">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Number of Employees</label>
                        <input type="number" class="form-input" id="employeeCount" placeholder="Enter number of employees">
                    </div>

                    <button class="btn btn-primary" onclick="calculateBusinessTax()">Calculate Business Tax</button>

                    <div class="calculation-result" id="businessResult" style="display: none;">
                        <h4>Calculated Tax</h4>
                        <div class="result-details">
                            <div class="result-row">
                                <span>Annual Business Tax:</span>
                                <span class="result-value" id="businessTaxAmount">₣0</span>
                            </div>
                            <div class="result-row">
                                <span>Payment Frequency:</span>
                                <span>Quarterly</span>
                            </div>
                            <div class="result-row">
                                <span>Quarterly Payment:</span>
                                <span class="result-value" id="quarterlyBusinessTax">₣0</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Market Tax Calculator -->
                <div class="calc-panel" id="market">
                    <div class="form-group">
                        <label class="form-label">Market Stall Type</label>
                        <select class="form-select" id="stallType">
                            <option value="food">Food Stall</option>
                            <option value="clothing">Clothing</option>
                            <option value="electronics">Electronics</option>
                            <option value="general">General Goods</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Stall Size</label>
                        <select class="form-select" id="stallSize">
                            <option value="small">Small (2x2m)</option>
                            <option value="medium">Medium (3x3m)</option>
                            <option value="large">Large (4x4m)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Market Location</label>
                        <select class="form-select" id="marketLocation">
                            <option value="central">Central Market</option>
                            <option value="nkwen">Nkwen Market</option>
                            <option value="mankon">Mankon Market</option>
                        </select>
                    </div>

                    <button class="btn btn-primary" onclick="calculateMarketTax()">Calculate Market Tax</button>

                    <div class="calculation-result" id="marketResult" style="display: none;">
                        <h4>Calculated Tax</h4>
                        <div class="result-details">
                            <div class="result-row">
                                <span>Daily Market Tax:</span>
                                <span class="result-value" id="dailyMarketTax">₣0</span>
                            </div>
                            <div class="result-row">
                                <span>Monthly Market Tax:</span>
                                <span class="result-value" id="monthlyMarketTax">₣0</span>
                            </div>
                            <div class="result-row">
                                <span>Annual Market Tax:</span>
                                <span class="result-value" id="annualMarketTax">₣0</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Vehicle Tax Calculator -->
                <div class="calc-panel" id="vehicle">
                    <div class="form-group">
                        <label class="form-label">Vehicle Type</label>
                        <select class="form-select" id="vehicleType">
                            <option value="car">Private Car</option>
                            <option value="motorcycle">Motorcycle</option>
                            <option value="truck">Truck</option>
                            <option value="bus">Bus</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Engine Capacity (cc)</label>
                        <input type="number" class="form-input" id="engineCapacity" placeholder="Enter engine capacity">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Vehicle Age (years)</label>
                        <input type="number" class="form-input" id="vehicleAge" placeholder="Enter vehicle age">
                    </div>

                    <button class="btn btn-primary" onclick="calculateVehicleTax()">Calculate Vehicle Tax</button>

                    <div class="calculation-result" id="vehicleResult" style="display: none;">
                        <h4>Calculated Tax</h4>
                        <div class="result-details">
                            <div class="result-row">
                                <span>Annual Vehicle Tax:</span>
                                <span class="result-value" id="vehicleTaxAmount">₣0</span>
                            </div>
                            <div class="result-row">
                                <span>Payment Frequency:</span>
                                <span>Annual</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tax Payment -->
<section class="tax-payment-section" id="tax-payment">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Online Tax Payment</h2>
            <p class="section-subtitle">Pay your taxes securely online</p>
        </div>

        <div class="payment-form">
            <form id="taxPaymentForm">
                <div class="form-section">
                    <h3 class="section-title">Tax Information</h3>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Tax Type *</label>
                            <select class="form-select" required>
                                <option value="">Select tax type</option>
                                <option value="property">Property Tax</option>
                                <option value="business">Business Tax</option>
                                <option value="market">Market Tax</option>
                                <option value="vehicle">Vehicle Tax</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Tax ID *</label>
                            <input type="text" class="form-input" placeholder="Enter your Tax ID" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Tax Period *</label>
                            <select class="form-select" required>
                                <option value="">Select period</option>
                                <option value="january">January 2024</option>
                                <option value="february">February 2024</option>
                                <option value="march">March 2024</option>
                                <option value="q1">Q1 2024</option>
                                <option value="annual">Annual 2024</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Amount (₣) *</label>
                            <input type="number" class="form-input" placeholder="Enter amount" required>
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">Payment Method</h3>
                    
                    <div class="payment-methods">
                        <div class="payment-method">
                            <input type="radio" name="paymentMethod" id="mobile" value="mobile" checked>
                            <label for="mobile" class="payment-option">
                                <span class="payment-icon">
                                    <span class="material-symbols-outlined">smartphone</span>
                                </span>
                                <div class="payment-details">
                                    <h4>Mobile Money</h4>
                                    <p>Pay with MTN, Orange, or Express Union</p>
                                </div>
                            </label>
                        </div>

                        <div class="payment-method">
                            <input type="radio" name="paymentMethod" id="card" value="card">
                            <label for="card" class="payment-option">
                                <span class="payment-icon">
                                    <span class="material-symbols-outlined">credit_card</span>
                                </span>
                                <div class="payment-details">
                                    <h4>Card Payment</h4>
                                    <p>Pay with Visa, Mastercard, or UnionPay</p>
                                </div>
                            </label>
                        </div>

                        <div class="payment-method">
                            <input type="radio" name="paymentMethod" id="bank" value="bank">
                            <label for="bank" class="payment-option">
                                <span class="payment-icon">
                                    <span class="material-symbols-outlined">account_balance</span>
                                </span>
                                <div class="payment-details">
                                    <h4>Bank Transfer</h4>
                                    <p>Direct bank transfer to council account</p>
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
                            <label class="form-label">Phone Number *</label>
                            <input type="tel" class="form-input" placeholder="Enter your phone number" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-input" placeholder="Enter your email address">
                    </div>
                </div>

                <div class="form-actions">
                    <button type="button" class="btn btn-outline" onclick="previewPayment()">Preview Payment</button>
                    <button type="submit" class="btn btn-primary">Process Payment</button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Tax Records -->
<section class="tax-records-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Tax Records</h2>
            <p class="section-subtitle">View your tax payment history</p>
        </div>

        <div class="records-filters">
            <div class="filter-row">
                <div class="form-group">
                    <label class="form-label">Tax Type</label>
                    <select class="form-select">
                        <option value="">All Types</option>
                        <option value="property">Property Tax</option>
                        <option value="business">Business Tax</option>
                        <option value="market">Market Tax</option>
                        <option value="vehicle">Vehicle Tax</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Year</label>
                    <select class="form-select">
                        <option value="2024">2024</option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Status</label>
                    <select class="form-select">
                        <option value="">All Status</option>
                        <option value="paid">Paid</option>
                        <option value="pending">Pending</option>
                        <option value="overdue">Overdue</option>
                    </select>
                </div>
                <button class="btn btn-primary">Filter Records</button>
            </div>
        </div>

        <div class="tax-records-table">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Tax ID</th>
                        <th>Tax Type</th>
                        <th>Period</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Payment Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>TAX-2024-0456</td>
                        <td>Property Tax</td>
                        <td>January 2024</td>
                        <td>₣25,000</td>
                        <td><span class="badge badge-success">Paid</span></td>
                        <td>Jan 15, 2024</td>
                        <td>
                            <button class="btn btn-sm btn-outline">Download Receipt</button>
                        </td>
                    </tr>
                    <tr>
                        <td>TAX-2024-0457</td>
                        <td>Business Tax</td>
                        <td>Q1 2024</td>
                        <td>₣75,000</td>
                        <td><span class="badge badge-success">Paid</span></td>
                        <td>Feb 20, 2024</td>
                        <td>
                            <button class="btn btn-sm btn-outline">Download Receipt</button>
                        </td>
                    </tr>
                    <tr>
                        <td>TAX-2024-0458</td>
                        <td>Market Tax</td>
                        <td>February 2024</td>
                        <td>₣15,000</td>
                        <td><span class="badge badge-warning">Pending</span></td>
                        <td>-</td>
                        <td>
                            <button class="btn btn-sm btn-primary">Pay Now</button>
                        </td>
                    </tr>
                    <tr>
                        <td>TAX-2024-0459</td>
                        <td>Vehicle Tax</td>
                        <td>Annual 2024</td>
                        <td>₣50,000</td>
                        <td><span class="badge badge-danger badge-lg">Overdue</span></td>
                        <td>-</td>
                        <td>
                            <button class="btn btn-sm btn-primary">Pay Now</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Statistics -->
<section class="statistics-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Tax Statistics</h2>
            <p class="section-subtitle">Overview of tax collection and compliance</p>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">trending_up</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">₣5.2B</div>
                    <div class="stat-label">Annual Revenue</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+18% this year</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">people</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">45,678</div>
                    <div class="stat-label">Registered Taxpayers</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+12% this year</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">check_circle</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">87%</div>
                    <div class="stat-label">Compliance Rate</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_up</span>
                        <span>+5% improvement</span>
                    </div>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <span class="material-symbols-outlined">schedule</span>
                </div>
                <div class="stat-content">
                    <div class="stat-number">2 min</div>
                    <div class="stat-label">Average Payment Time</div>
                    <div class="stat-change positive">
                        <span class="material-symbols-outlined">trending_down</span>
                        <span>-30% faster</span>
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
/* Tax Portal Page Styles */
.tax-portal-hero {
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-container) 100%);
}

/* Quick Actions Section */
.quick-actions-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
}

.quick-actions-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
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

/* Tax Calculator Section */
.tax-calculator-section {
    padding: var(--spacing-3xl) 0;
}

.tax-calculator {
    background-color: var(--surface-container-lowest);
    border-radius: var(--radius-lg);
    padding: var(--spacing-2xl);
    border: 1px solid var(--outline-variant);
    max-width: 800px;
    margin: 0 auto;
}

.calculator-tabs {
    display: flex;
    gap: var(--spacing-md);
    margin-bottom: var(--spacing-lg);
    border-bottom: 2px solid var(--outline-variant);
}

.calc-tab {
    padding: var(--spacing-md) var(--spacing-lg);
    background: none;
    border: none;
    color: var(--on-surface-variant);
    font-weight: 600;
    cursor: pointer;
    transition: all 0.2s ease;
    border-bottom: 2px solid transparent;
}

.calc-tab.active {
    color: var(--primary);
    border-bottom-color: var(--primary);
}

.calc-tab:hover {
    color: var(--primary);
}

.calculator-content {
    margin-top: var(--spacing-lg);
}

.calc-panel {
    display: none;
}

.calc-panel.active {
    display: block;
}

.calculation-result {
    margin-top: var(--spacing-lg);
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border-radius: var(--radius-md);
    border: 1px solid var(--outline-variant);
}

.result-details {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
}

.result-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--spacing-xs) 0;
}

.result-value {
    font-weight: 700;
    color: var(--primary);
    font-size: 1.125rem;
}

/* Tax Payment Section */
.tax-payment-section {
    padding: var(--spacing-3xl) 0;
    background-color: var(--surface-container-low);
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

.payment-option {
    display: grid;
    grid-template-columns: auto 1fr;
    gap: var(--spacing-lg);
    align-items: center;
    padding: var(--spacing-lg);
    background-color: var(--surface-container);
    border: 2px solid var(--outline-variant);
    border-radius: var(--radius-md);
    cursor: pointer;
    transition: all 0.2s ease;
}

.payment-option:hover {
    border-color: var(--primary);
    background-color: var(--surface-container-high);
}

.payment-method input[type="radio"]:checked + .payment-option {
    border-color: var(--primary);
    background-color: var(--primary-container);
}

.payment-icon {
    width: 3rem;
    height: 3rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
}

.payment-icon .material-symbols-outlined {
    font-size: 1.5rem;
}

.payment-details h4 {
    font-size: 1.125rem;
    font-weight: 600;
    color: var(--primary);
    margin-bottom: var(--spacing-xs);
}

.payment-details p {
    color: var(--on-surface-variant);
    font-size: 0.875rem;
}

/* Tax Records Section */
.tax-records-section {
    padding: var(--spacing-3xl) 0;
}

.records-filters {
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

.tax-records-table {
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

.badge-success {
    background-color: var(--tertiary);
    color: var(--on-tertiary);
}

.badge-warning {
    background-color: var(--secondary-container);
    color: var(--on-secondary-container);
}

.badge-danger {
    background-color: var(--error-container);
    color: var(--on-error-container);
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
    .quick-actions-grid {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
    }
    
    .calculator-tabs {
        flex-direction: column;
        gap: var(--spacing-sm);
    }
    
    .calc-tab {
        text-align: center;
        border-bottom: 1px solid var(--outline-variant);
    }
    
    .calc-tab.active {
        border-bottom-color: var(--primary);
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
    
    .tax-calculator {
        padding: var(--spacing-lg);
    }
    
    .payment-form {
        padding: var(--spacing-lg);
    }
    
    .payment-option {
        grid-template-columns: 1fr;
        text-align: center;
        gap: var(--spacing-md);
    }
    
    .stat-number {
        font-size: 1.5rem;
    }
}
</style>

<script>
// Calculator tabs functionality
document.querySelectorAll('.calc-tab').forEach(tab => {
    tab.addEventListener('click', () => {
        // Remove active class from all tabs and panels
        document.querySelectorAll('.calc-tab').forEach(t => t.classList.remove('active'));
        document.querySelectorAll('.calc-panel').forEach(p => p.classList.remove('active'));
        
        // Add active class to clicked tab and corresponding panel
        tab.classList.add('active');
        const panelId = tab.getAttribute('data-tax');
        document.getElementById(panelId).classList.add('active');
    });
});

// Tax calculation functions
function calculatePropertyTax() {
    const propertyType = document.getElementById('propertyType').value;
    const propertyValue = parseFloat(document.getElementById('propertyValue').value) || 0;
    const propertySize = parseFloat(document.getElementById('propertySize').value) || 0;
    const location = document.getElementById('propertyLocation').value;
    
    // Simple tax calculation logic
    let taxRate = 0.001; // Base rate 0.1%
    
    if (propertyType === 'commercial') taxRate = 0.002;
    if (propertyType === 'industrial') taxRate = 0.003;
    if (location === 'nkwen' || location === 'mankon') taxRate *= 1.2;
    
    const annualTax = propertyValue * taxRate;
    const monthlyTax = annualTax / 12;
    
    document.getElementById('propertyTaxAmount').textContent = `₣${annualTax.toLocaleString()}`;
    document.getElementById('monthlyPropertyTax').textContent = `₣${monthlyTax.toLocaleString()}`;
    document.getElementById('propertyResult').style.display = 'block';
}

function calculateBusinessTax() {
    const businessType = document.getElementById('businessType').value;
    const turnover = parseFloat(document.getElementById('businessTurnover').value) || 0;
    const employees = parseInt(document.getElementById('employeeCount').value) || 0;
    
    // Simple tax calculation logic
    let taxRate = 0.05; // Base rate 5%
    
    if (businessType === 'retail') taxRate = 0.03;
    if (businessType === 'manufacturing') taxRate = 0.07;
    if (businessType === 'hospitality') taxRate = 0.06;
    
    const annualTax = turnover * taxRate + (employees * 10000);
    const quarterlyTax = annualTax / 4;
    
    document.getElementById('businessTaxAmount').textContent = `₣${annualTax.toLocaleString()}`;
    document.getElementById('quarterlyBusinessTax').textContent = `₣${quarterlyTax.toLocaleString()}`;
    document.getElementById('businessResult').style.display = 'block';
}

function calculateMarketTax() {
    const stallType = document.getElementById('stallType').value;
    const stallSize = document.getElementById('stallSize').value;
    const marketLocation = document.getElementById('marketLocation').value;
    
    // Simple tax calculation logic
    let dailyRate = 500; // Base daily rate
    
    if (stallSize === 'medium') dailyRate = 750;
    if (stallSize === 'large') dailyRate = 1000;
    if (marketLocation === 'central') dailyRate *= 1.5;
    
    const dailyTax = dailyRate;
    const monthlyTax = dailyTax * 30;
    const annualTax = monthlyTax * 12;
    
    document.getElementById('dailyMarketTax').textContent = `₣${dailyTax.toLocaleString()}`;
    document.getElementById('monthlyMarketTax').textContent = `₣${monthlyTax.toLocaleString()}`;
    document.getElementById('annualMarketTax').textContent = `₣${annualTax.toLocaleString()}`;
    document.getElementById('marketResult').style.display = 'block';
}

function calculateVehicleTax() {
    const vehicleType = document.getElementById('vehicleType').value;
    const engineCapacity = parseFloat(document.getElementById('engineCapacity').value) || 0;
    const vehicleAge = parseInt(document.getElementById('vehicleAge').value) || 0;
    
    // Simple tax calculation logic
    let baseTax = 25000; // Base annual tax
    
    if (vehicleType === 'motorcycle') baseTax = 10000;
    if (vehicleType === 'truck') baseTax = 50000;
    if (vehicleType === 'bus') baseTax = 75000;
    
    // Adjust for engine capacity
    const capacityTax = (engineCapacity / 1000) * 5000;
    
    // Adjust for age (older vehicles pay less)
    const ageDiscount = vehicleAge > 10 ? 0.5 : (vehicleAge > 5 ? 0.8 : 1);
    
    const annualTax = (baseTax + capacityTax) * ageDiscount;
    
    document.getElementById('vehicleTaxAmount').textContent = `₣${annualTax.toLocaleString()}`;
    document.getElementById('vehicleResult').style.display = 'block';
}

// Quick action functions
function openTaxCalculator() {
    document.getElementById('tax-calculator').scrollIntoView({ behavior: 'smooth' });
}

function openTaxPayment() {
    document.getElementById('tax-payment').scrollIntoView({ behavior: 'smooth' });
}

function openTaxRecords() {
    document.querySelector('.tax-records-section').scrollIntoView({ behavior: 'smooth' });
}

function openTaxCertificate() {
    alert('Tax certificate download feature coming soon!');
}

// Form submission
document.getElementById('taxPaymentForm').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Payment processed successfully! You will receive a confirmation shortly.');
    // In production, this would process the payment
});

function previewPayment() {
    alert('Payment preview feature coming soon!');
}
</script>
