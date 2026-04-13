<?php
/**
 * Bamenda City Council E-Governance Platform
 * Application Configuration
 */

return [
    'app' => [
        'name' => 'Bamenda City Council E-Governance Platform',
        'version' => '1.0.0',
        'environment' => getenv('ENVIRONMENT') ?: 'production',
        'debug' => filter_var(getenv('DEBUG') ?: false, FILTER_VALIDATE_BOOLEAN),
        'timezone' => 'Africa/Douala',
        'charset' => 'UTF-8',
        'locale' => 'en',
        'url' => getenv('APP_URL') ?: 'http://localhost',
        'asset_url' => (getenv('APP_URL') ?: 'http://localhost') . '/assets',
        'session_lifetime' => 7200, // 2 hours
        'max_file_size' => 5242880, // 5MB
    ],
    
    'database' => [
        'name' => getenv('DB_NAME') ?: 'bamenda_council_db',
        'host' => getenv('DB_HOST') ?: 'localhost',
        'user' => getenv('DB_USER') ?: 'root',
        'pass' => getenv('DB_PASSWORD') ?: '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
    ],
    
    'email' => [
        'driver' => 'smtp',
        'host' => getenv('MAIL_HOST') ?: 'localhost',
        'port' => getenv('MAIL_PORT') ?: 587,
        'from' => getenv('MAIL_FROM') ?: 'noreply@bamendacity.gov.cm',
        'from_name' => 'Bamenda City Council',
        'encryption' => 'tls',
        'username' => getenv('MAIL_USERNAME') ?: '',
        'password' => getenv('MAIL_PASSWORD') ?: '',
    ],
    
    'security' => [
        'encryption_key' => getenv('ENCRYPTION_KEY') ?: 'your-secret-encryption-key-here',
        'jwt_secret' => getenv('JWT_SECRET') ?: 'your-jwt-secret-key-here',
        'password_min_length' => 8,
        'session_secure' => filter_var(getenv('SESSION_SECURE') ?: false, FILTER_VALIDATE_BOOLEAN),
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
