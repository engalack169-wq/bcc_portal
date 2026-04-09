# Complete System Implementation Guide

## What's New

We've built a comprehensive system of 6 integrated components:

1. ✅ **Design Tokens** - Centralized styling constants
2. ✅ **Security Manager** - Input validation & protection
3. ✅ **Card Components** - 6 card types + helpers
4. ✅ **Form Styling** - Professional form components
5. ✅ **Dashboard Enhancements** - Admin UI components
6. 📋 **Image Assets Guide** - Where/how to get images

---

## Quick Start Integration

### Step 1: Include Required Files

```html
<!-- In your <head> section -->
<link rel="stylesheet" href="assets/css/styles.css">
<link rel="stylesheet" href="assets/css/card-components.css">
<link rel="stylesheet" href="assets/css/forms.css">

<!-- Material Design Icons -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">
```

```php
<?php
// In your PHP files
require_once 'includes/design-tokens.php';
require_once 'core/security-manager.php';
require_once 'includes/card-components.php';
?>
```

---

## Component Usage

### 1. DESIGN TOKENS

**Access color values:**
```php
<?php
echo DesignTokens::color('primary');           // #004d27
echo DesignTokens::spacing('lg');              // 1.5rem
echo DesignTokens::fontSize('xl');             // 1.25rem
echo DesignTokens::shadow('lg');               // box-shadow
?>
```

**Generate CSS variables:**
```php
<?php
echo DesignTokens::generateCSSVariables();
// Outputs: :root { --color-primary: #004d27; ... }
?>
```

**Available token categories:**
- `colors` - 30+ color options
- `spacing` - xs, sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl
- `typography` - fonts, sizes, weights, line-heights
- `radius` - border radius values
- `shadows` - elevation shadows (xs to 2xl)
- `transitions` - animation timing functions
- `buttons` - predefined button styles
- `cards` - card preset styles

---

### 2. SECURITY MANAGER

**Sanitize user input:**
```php
<?php
$user_input = $_POST['name'];
$safe_name = SecurityManager::sanitizeString($user_input);
?>
```

**Validate email:**
```php
<?php
$email = SecurityManager::sanitizeEmail($_POST['email']);
if ($email === false) {
    echo "Invalid email";
}
?>
```

**Hash passwords:**
```php
<?php
// Register
$hashed = SecurityManager::hashPassword($password);

// Login
if (SecurityManager::verifyPassword($input_password, $hashed)) {
    // Password correct
}
?>
```

**Validate password strength:**
```php
<?php
$validation = SecurityManager::validatePasswordStrength($password);
if (!$validation['valid']) {
    foreach ($validation['errors'] as $error) {
        echo $error;
    }
}
?>
```

**Protect against XSS:**
```php
<?php
if (SecurityManager::isXSSAttempt($_POST['content'])) {
    echo "Potential XSS attack detected!";
    exit;
}
?>
```

**Protect against SQL injection:**
```php
<?php
if (SecurityManager::isSQLInjectionAttempt($_GET['id'])) {
    echo "Potential SQL injection detected!";
    exit;
}
?>
```

**Rate limiting:**
```php
<?php
if (!SecurityManager::checkRateLimit('login_' . $_SERVER['REMOTE_ADDR'], 5, 300)) {
    echo "Too many login attempts. Try again in 5 minutes.";
    exit;
}
?>
```

**CSRF tokens:**
```php
<?php
// Generate in form
<input type="hidden" name="csrf_token" value="<?php echo SecurityManager::generateCSRFToken(); ?>">

// Verify on submission
if (!SecurityManager::verifyCSRFToken($_POST['csrf_token'])) {
    echo "CSRF token invalid!";
    exit;
}
?>
```

---

### 3. CARD COMPONENTS

**Feature Cards:**
```php
<?php
echo render_feature_card([
    'icon' => 'business',
    'title' => 'Business License',
    'description' => 'Apply for or renew your license',
    'link_text' => 'Apply Now',
    'link_url' => '/apply',
]);
?>
```

**Stat Cards:**
```php
<?php
echo render_stat_card([
    'icon' => 'groups',
    'number' => '50,234',
    'label' => 'Active Users',
    'icon_color' => 'linear-gradient(135deg, #004d27 0%, #006837 100%)',
]);
?>
```

**Service Cards:**
```php
<?php
echo render_service_card([
    'icon' => 'payment',
    'title' => 'Online Payment',
    'description' => 'Pay your bills online safely',
    'link_text' => 'Pay Now',
    'link_url' => '/payments',
]);
?>
```

**Card Grids:**
```php
<?php
$cards = [
    ['icon' => 'business', 'title' => 'Card 1', ...],
    ['icon' => 'home', 'title' => 'Card 2', ...],
    ['icon' => 'payment', 'title' => 'Card 3', ...],
];

// 3-column grid
echo render_card_grid($cards, 3);

// With display helper
display_card_grid($cards, 2);
?>
```

**Pricing Cards:**
```php
<?php
echo render_pricing_card([
    'title' => 'Professional Plan',
    'price' => '$29',
    'period' => 'per month',
    'features' => ['Feature 1', 'Feature 2', 'Feature 3'],
    'button_text' => 'Choose Plan',
    'button_url' => '/subscribe',
    'featured' => true,
    'badge' => 'POPULAR',
]);
?>
```

**Testimonial Cards:**
```php
<?php
echo render_testimonial_card([
    'content' => 'Great service!',
    'author' => 'John Doe',
    'role' => 'Business Owner',
    'avatar' => 'assets/images/profiles/john.jpg',
]);
?>
```

**Product Cards:**
```php
<?php
echo render_product_card([
    'image' => 'assets/images/products/service1.jpg',
    'title' => 'Service Name',
    'price' => '$45.00',
    'link_url' => '/details',
]);
?>
```

---

### 4. FORM STYLING

**Input Fields:**
```html
<div class="form-group">
    <label for="name" class="form-label">
        Your Name <span class="required">*</span>
    </label>
    <input 
        type="text" 
        id="name" 
        class="form-control" 
        placeholder="Enter your name"
        required
    >
    <small class="form-success">Name looks good!</small>
</div>
```

**Form Row (Multiple columns):**
```html
<div class="form-row cols-2">
    <div class="form-group">
        <label class="form-label">First Name</label>
        <input type="text" class="form-control" required>
    </div>
    <div class="form-group">
        <label class="form-label">Last Name</label>
        <input type="text" class="form-control" required>
    </div>
</div>
```

**Select Dropdown:**
```html
<div class="form-group">
    <label for="service" class="form-label">Select Service</label>
    <select id="service" class="form-select">
        <option value="">Choose a service...</option>
        <option value="1">Business License</option>
        <option value="2">Property Registry</option>
    </select>
</div>
```

**Checkbox:**
```html
<div class="form-check">
    <input 
        type="checkbox" 
        id="terms" 
        class="form-check-input"
    >
    <label for="terms" class="form-check-label">
        I agree to the terms and conditions
    </label>
</div>
```

**Radio Buttons:**
```html
<div class="form-radio">
    <input 
        type="radio" 
        id="yes" 
        name="option" 
        class="form-radio-input"
        value="yes"
    >
    <label for="yes">Yes</label>
</div>
```

**Toggle Switch:**
```html
<div class="form-switch">
    <input 
        type="checkbox" 
        id="newsletter" 
        class="form-switch-input"
    >
    <label for="newsletter" class="form-switch-label">
        Subscribe to newsletter
    </label>
</div>
```

**File Upload:**
```html
<div class="form-file">
    <input 
        type="file" 
        id="document" 
        class="form-file-input"
        accept=".pdf,.doc,.docx"
    >
    <label for="document" class="form-file-label">
        <span>Click to upload</span>
        <small>or drag and drop (PDF, DOC, DOCX)</small>
    </label>
</div>
```

**Textarea:**
```html
<div class="form-group">
    <label for="message" class="form-label">Message</label>
    <textarea 
        id="message" 
        class="form-control"
        placeholder="Enter your message here..."
        rows="5"
    ></textarea>
</div>
```

**Form Validation States:**
```html
<!-- Valid state -->
<input type="text" class="form-control is-valid" value="Valid input">
<small class="form-success">Looks good!</small>

<!-- Invalid state -->
<input type="text" class="form-control is-invalid" value="Invalid">
<small class="form-error">Please correct this field</small>
```

**Form Actions:**
```html
<div class="form-actions">
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-outline">Cancel</button>
</div>
```

---

### 5. DASHBOARD ENHANCEMENTS

The admin.css already handles:
- Admin sidebar layout
- Header styling
- Navigation components
- Stats display
- Activity feeds
- Data tables
- Charts integration

Combine with card components for advanced dashboards:

```php
<?php
// Dashboard stat cards
$stats = [
    ['icon' => 'groups', 'number' => '5,234', 'label' => 'Users', ...],
    ['icon' => 'check_circle', 'number' => '892', 'label' => 'Completed', ...],
];

foreach ($stats as $stat) {
    echo render_stat_card($stat);
}
?>
```

---

### 6. IMAGE ASSETS

See `IMAGE_ASSETS_GUIDE.md` for:
- Folder structure
- Where to download images
- Recommended sources (Unsplash, Pixabay, Pexels)
- Image optimization tips
- Naming conventions

---

## CSS Classes Reference

### Card Components
```css
.card                      /* Basic card */
.feature-card             /* Feature card */
.stat-card                /* Statistics card */
.service-card             /* Service card */
.pricing-card             /* Pricing card */
.product-card             /* Product card */
.testimonial-card         /* Testimonial card */

.card-grid               /* Grid container */
.card-grid.cols-2       /* 2-column grid */
.card-grid.cols-3       /* 3-column grid */
.card-grid.cols-4       /* 4-column grid */

.card-header-title      /* Card title */
.card-body-text         /* Card text */
.card-footer-link       /* Card link */
```

### Form Components
```css
.form-group             /* Form field wrapper */
.form-row              /* Multi-column row */
.form-row.cols-2       /* 2-column form row */
.form-row.cols-3       /* 3-column form row */

.form-label             /* Label styling */
.form-control           /* Text input */
.form-select           /* Select dropdown */
.form-check            /* Checkbox wrapper */
.form-radio            /* Radio wrapper */
.form-switch           /* Toggle switch */
.form-file             /* File upload */

.form-control.is-valid      /* Valid state */
.form-control.is-invalid    /* Invalid state */

.form-success           /* Success message */
.form-error            /* Error message */
.form-feedback         /* Info message */

.form-actions          /* Button container */
```

---

## Complete Example Page

```php
<?php
session_start();
require_once 'includes/design-tokens.php';
require_once 'core/security-manager.php';
require_once 'includes/card-components.php';
require_once 'includes/header.php';

// Sanitize and validate input
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = SecurityManager::sanitizeArray($_POST, [
        'name' => 'string',
        'email' => 'email',
        'message' => 'string',
    ]);
    
    if (SecurityManager::verifyCSRFToken($_POST['csrf_token'])) {
        // Process form
    }
}
?>

<!-- Hero -->
<section class="hero">...</section>

<!-- Feature Cards -->
<section style="padding: 3rem 0;">
    <div class="container">
        <h2>Our Services</h2>
        <?php
        display_card_grid([
            ['icon' => 'business', 'title' => 'Service 1', ...],
            ['icon' => 'home', 'title' => 'Service 2', ...],
        ], 3);
        ?>
    </div>
</section>

<!-- Form Section -->
<section style="padding: 3rem 0;">
    <div class="container">
        <h2>Apply Now</h2>
        <form method="POST" class="form-row cols-2">
            <div class="form-group">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            
            <div class="form-group">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            
            <div class="form-group" style="grid-column: 1 / -1;">
                <label class="form-label">Message</label>
                <textarea class="form-control" name="message" required></textarea>
            </div>
            
            <input type="hidden" name="csrf_token" value="<?php echo SecurityManager::generateCSRFToken(); ?>">
            
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
```

---

## File Structure Summary

```
stitch1/
├── includes/
│   ├── design-tokens.php        ← Token constants
│   ├── card-components.php      ← Card helpers
│   ├── header.php
│   ├── footer.php
│   └── ...
├── core/
│   ├── security-manager.php     ← Security functions
│   ├── auth.php
│   └── access-control.php
├── assets/
│   └── css/
│       ├── styles.css           ← Main styles
│       ├── card-components.css  ← Card styling
│       ├── forms.css            ← Form styling
│       ├── admin.css            ← Admin dashboard
│       └── ...
├── card-demo.php                ← Card showcase
└── IMAGE_ASSETS_GUIDE.md        ← Image reference
```

---

## Next Steps

1. **Include CSS files** in your header
2. **Include PHP files** in your pages
3. **Download images** using IMAGE_ASSETS_GUIDE.md
4. **Update hero sections** with new images
5. **Replace cards** with new render_*_card() helpers
6. **Update forms** with new form styling classes
7. **Test** all pages in mobile/desktop/tablet sizes

---

## Support & Troubleshooting

**Issue:** Images not showing
- Check file paths in HTML
- Verify images exist in assets/images/
- Check file permissions

**Issue:** Styles not applying
- Verify CSS files are linked in correct order
- Check for CSS conflicts
- Clear browser cache (Ctrl+Shift+Del)

**Issue:** Security validation failing
- Check input sanitization is correct
- Verify CSRF token is being set/verified
- Review validation error messages

**Issue:** Forms not responsive
- Check viewport meta tag exists
- Verify form-row class is applied
- Test in DevTools (F12 → Toggle device toolbar)

---

## Status: ✅ COMPLETE

All 6 components are fully implemented and ready to use!
