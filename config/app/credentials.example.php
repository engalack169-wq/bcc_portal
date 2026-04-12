<?php
/**
 * Bamenda City Council E-Governance Platform
 * Credentials Configuration File
 * ⚠️ IMPORTANT: Copy this file to credentials.php and fill in your actual values
 * DO NOT commit credentials.php to version control
 */

// ===== STRIPE PAYMENT GATEWAY =====
// Get keys from: https://dashboard.stripe.com/apikeys
define('STRIPE_PUBLIC_KEY', 'pk_test_YOUR_PUBLIC_KEY_HERE');
define('STRIPE_SECRET_KEY', 'sk_test_YOUR_SECRET_KEY_HERE');

// ===== PAYPAL PAYMENT GATEWAY =====
define('PAYPAL_CLIENT_ID', 'YOUR_PAYPAL_CLIENT_ID_HERE');
define('PAYPAL_SECRET', 'YOUR_PAYPAL_SECRET_HERE');
define('PAYPAL_API_URL', 'https://api.sandbox.paypal.com'); // Use sandbox for testing

// ===== TWILIO SMS GATEWAY =====
// Get credentials from: https://www.twilio.com/console
define('TWILIO_ACCOUNT_SID', 'YOUR_TWILIO_ACCOUNT_SID_HERE');
define('TWILIO_AUTH_TOKEN', 'YOUR_TWILIO_AUTH_TOKEN_HERE');
define('TWILIO_PHONE_NUMBER', '+1234567890'); // Your Twilio phone number

// ===== NEXMO/VONAGE SMS GATEWAY =====
define('NEXMO_API_KEY', 'YOUR_NEXMO_API_KEY_HERE');
define('NEXMO_API_SECRET', 'YOUR_NEXMO_API_SECRET_HERE');
define('NEXMO_BRAND_NAME', 'Bamenda City Council');

// ===== EMAIL / SMTP CONFIGURATION =====
define('EMAIL_FROM_ADDRESS', 'noreply@bamendacity.gov.cm');
define('EMAIL_FROM_NAME', 'Bamenda City Council');

// SMTP Server Configuration
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', 'your-email@gmail.com');
define('SMTP_PASSWORD', 'your-app-password');
define('SMTP_ENCRYPTION', 'tls'); // 'tls' or 'ssl'

// Alternative: Mailgun Integration
define('MAILGUN_API_KEY', 'YOUR_MAILGUN_API_KEY_HERE');
define('MAILGUN_DOMAIN', 'mg.bamendacity.gov.cm');

// Alternative: SendGrid Integration
define('SENDGRID_API_KEY', 'YOUR_SENDGRID_API_KEY_HERE');

// ===== GOOGLE AUTHENTICATOR / 2FA =====
// Used for TOTP generation (usually built-in, no keys needed)
// But if using Google Sign-In for 2FA:
define('GOOGLE_CLIENT_ID', 'YOUR_GOOGLE_CLIENT_ID_HERE');
define('GOOGLE_CLIENT_SECRET', 'YOUR_GOOGLE_CLIENT_SECRET_HERE');

// ===== MOBILE MONEY PROVIDERS =====
// MTN Mobile Money
define('MTN_API_KEY', 'YOUR_MTN_API_KEY_HERE');
define('MTN_API_SECRET', 'YOUR_MTN_API_SECRET_HERE');

// Airtel Money
define('AIRTEL_API_KEY', 'YOUR_AIRTEL_API_KEY_HERE');
define('AIRTEL_API_SECRET', 'YOUR_AIRTEL_API_SECRET_HERE');

// ===== FILE UPLOAD SETTINGS =====
define('MAX_DOCUMENT_SIZE', 10 * 1024 * 1024); // 10MB in bytes
define('MAX_AVATAR_SIZE', 5 * 1024 * 1024); // 5MB in bytes
define('UPLOAD_BASE_PATH', __DIR__ . '/../../uploads');

// Allowed file types for documents
define('ALLOWED_DOCUMENT_TYPES', ['pdf', 'jpg', 'jpeg', 'png', 'doc', 'docx', 'txt']);

// Allowed image types for avatars
define('ALLOWED_IMAGE_TYPES', ['jpg', 'jpeg', 'png', 'gif', 'webp']);

// ===== SECURITY SETTINGS =====
define('JWT_SECRET_KEY', 'your-secure-random-secret-key-min-32-characters');
define('SESSION_TIMEOUT', 3600); // 1 hour in seconds
define('2FA_CODE_EXPIRY', 600); // 10 minutes in seconds

// ===== TIMEZONE =====
define('APP_TIMEZONE', 'Africa/Douala');
date_default_timezone_set(APP_TIMEZONE);

// ===== LOGGING =====
define('LOG_ERRORS', true);
define('LOG_FILE_PATH', __DIR__ . '/../../logs/errors.log');

// ===== API ENDPOINTS =====
define('API_BASE_URL', 'http://localhost/stitch1');
define('ADMIN_EMAIL', 'admin@bamendacity.gov.cm');
define('SUPPORT_EMAIL', 'support@bamendacity.gov.cm');

?>
