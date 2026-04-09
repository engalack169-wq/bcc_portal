<?php
/**
 * Bamenda City Council E-Governance Platform
 * Application Configuration
 */

return [
    'app' => [
        'name' => 'Bamenda City Council E-Governance Platform',
        'version' => '1.0.0',
        'environment' => 'development', // development, staging, production
        'debug' => true,
        'timezone' => 'Africa/Douala',
        'charset' => 'UTF-8',
        'locale' => 'en',
        'url' => 'http://localhost/stitch1',
        'asset_url' => 'http://localhost/stitch1/assets',
        'session_lifetime' => 7200, // 2 hours
        'max_file_size' => 5242880, // 5MB
    ],
    
    'database' => [
        'name' => 'bamenda_council_db',
        'host' => 'localhost',
        'user' => 'root',
        'pass' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
    ],
    
    'email' => [
        'driver' => 'smtp',
        'host' => 'localhost',
        'port' => 587,
        'from' => 'noreply@bamendacity.gov.cm',
        'from_name' => 'Bamenda City Council',
        'encryption' => 'tls',
        'username' => '',
        'password' => '',
    ],
    
    'security' => [
        'encryption_key' => 'your-secret-encryption-key-here',
        'jwt_secret' => 'your-jwt-secret-key-here',
        'password_min_length' => 8,
        'session_secure' => false, // Set to true for HTTPS
        'session_httponly' => true,
        'rate_limit' => [
            'login_attempts' => 5,
            'login_timeout' => 900, // 15 minutes
            'api_requests' => 100,
            'api_timeout' => 3600, // 1 hour
        ],
    ],
    
    'cache' => [
        'driver' => 'file',
        'path' => __DIR__ . '/../../cache',
        'ttl' => 3600, // 1 hour
    ],
    
    'logging' => [
        'driver' => 'file',
        'path' => __DIR__ . '/../../logs',
        'level' => 'debug',
        'max_files' => 30,
    ],
    
    'upload' => [
        'allowed_types' => [
            'image/jpeg', 'image/png', 'image/gif', 'image/webp',
            'application/pdf', 'application/msword',
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'application/vnd.ms-excel',
            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
        ],
        'max_size' => 5242880, // 5MB
        'path' => __DIR__ . '/../../uploads',
    ],
    
    'municipal' => [
        'name' => 'Bamenda City Council',
        'address' => 'Bamenda City Council, Northwest Region, Cameroon',
        'phone' => '+237 233 123 456',
        'email' => 'info@bamendacity.gov.cm',
        'website' => 'https://www.bamendacity.gov.cm',
        'currency' => 'XAF',
        'timezone' => 'Africa/Douala',
        'language' => 'en',
        'country' => 'Cameroon',
        'region' => 'Northwest',
    ],
    
    'services' => [
        'emergency' => [
            'hotline' => '+237 233 123 456',
            'email' => 'emergency@bamendacity.gov.cm',
        ],
        'citizen_services' => [
            'phone' => '+237 233 123 456',
            'email' => 'services@bamendacity.gov.cm',
        ],
        'youth_programs' => [
            'phone' => '+237 233 123 456',
            'email' => 'youth@bamendacity.gov.cm',
        ],
        'business_support' => [
            'phone' => '+237 233 123 456',
            'email' => 'business@bamendacity.gov.cm',
        ],
    ],
];
?>
