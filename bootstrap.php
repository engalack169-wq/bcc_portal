<?php
/**
 * BCC Portal Bootstrap
 * Initializes application with proper error handling
 */

// Skip if already loaded
if (defined('_BCC_BOOTSTRAP_LOADED')) {
    return;
}
define('_BCC_BOOTSTRAP_LOADED', true);

// Setup error reporting BEFORE anything else
error_reporting(E_ALL);
ini_set('log_errors', '1');

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Load configuration safely
$config = @include __DIR__ . '/config/app/config.php';

if (!$config || !is_array($config)) {
    // Fallback configuration
    $config = [
        'app' => [
            'debug' => false,
            'environment' => 'production',
            'timezone' => 'Africa/Douala',
            'url' => 'http://localhost'
        ],
        'database' => [
            'name' => 'bamenda_council_db',
            'host' => 'localhost',
            'user' => 'root',
            'pass' => ''
        ]
    ];
}

// Set timezone
if (isset($config['app']['timezone'])) {
    date_default_timezone_set($config['app']['timezone']);
}

// Set error display based on debug mode
if (isset($config['app']['debug']) && $config['app']['debug']) {
    ini_set('display_errors', '1');
} else {
    ini_set('display_errors', '0');
}

// Make config available globally
$GLOBALS['_app_config'] = $config;

// Set up exception/error handlers for production (only once)
if (!isset($GLOBALS['_error_handlers_set'])) {
    if (!isset($config['app']['debug']) || !$config['app']['debug']) {
        set_error_handler(function($errno, $errstr, $errfile, $errline) {
            error_log(sprintf(
                "[%s] %s in %s:%d",
                date('Y-m-d H:i:s'),
                $errstr,
                basename($errfile),
                $errline
            ));
            // Don't display errors in production
            return true;
        });

        set_exception_handler(function(Throwable $e) {
            error_log(sprintf(
                "[%s] Exception: %s in %s:%d",
                date('Y-m-d H:i:s'),
                $e->getMessage(),
                basename($e->getFile()),
                $e->getLine()
            ));
            // Show generic error page
            http_response_code(500);
            echo "An error occurred. Please try again later.";
            exit;
        });
    }
    $GLOBALS['_error_handlers_set'] = true;
}
