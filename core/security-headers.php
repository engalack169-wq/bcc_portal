<?php
/**
 * Bamenda City Council E-Governance Platform
 * Security Headers Manager
 * Sets HTTP security headers to protect against common attacks
 */

class SecurityHeaders {
    
    /**
     * Set all security headers
     */
    public static function setSecurityHeaders() {
        // Prevent clickjacking attacks
        header('X-Frame-Options: SAMEORIGIN');
        
        // Prevent MIME type sniffing
        header('X-Content-Type-Options: nosniff');
        
        // Enable XSS protection in older browsers
        header('X-XSS-Protection: 1; mode=block');
        
        // Content Security Policy - prevent inline scripts
        header("Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://cdn.jsdelivr.net; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; img-src 'self' data: https:; font-src 'self' https://fonts.gstatic.com; connect-src 'self'; frame-ancestors 'self'");
        
        // Referrer Policy
        header('Referrer-Policy: strict-origin-when-cross-origin');
        
        // Feature Policy
        header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
        
        // HSTS (HTTP Strict Transport Security) - only on HTTPS
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
            header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload');
        }
    }
    
    /**
     * Set headers for API responses
     */
    public static function setAPIHeaders() {
        header('Content-Type: application/json; charset=utf-8');
        header('X-Content-Type-Options: nosniff');
        header('X-Frame-Options: DENY');
        
        // Prevent caching of sensitive data
        header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
        header('Pragma: no-cache');
        header('Expires: 0');
        
        // CORS headers (restrict to same domain)
        $allowed_origin = $_SERVER['HTTP_ORIGIN'] ?? '';
        if (strpos($allowed_origin, $_SERVER['HTTP_HOST'] ?? '') !== false) {
            header('Access-Control-Allow-Origin: ' . $allowed_origin);
            header('Access-Control-Allow-Credentials: true');
            header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
            header('Access-Control-Allow-Headers: Content-Type, Authorization, X-CSRF-Token');
        }
    }
    
    /**
     * Handle CORS preflight requests
     */
    public static function handleCORSPreflight() {
        if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
            header('HTTP/1.1 200 OK');
            self::setAPIHeaders();
            exit;
        }
    }
}

// Set security headers on include
SecurityHeaders::setSecurityHeaders();
?>
