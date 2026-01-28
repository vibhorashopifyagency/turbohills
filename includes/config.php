<?php
// Prevent direct access
if (!defined('APP_INIT')) {
    define('APP_INIT', true);
}

/**
 * BASE PATH (filesystem)
 * Example: /Applications/MAMP/htdocs/arup
 */
define('BASE_PATH', realpath(__DIR__ . '/../'));

/**
 * BASE URL (browser)
 */
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';

if ($host === 'localhost:8888') {
    define('BASE_URL', 'http://localhost:8888/arup');
} else {
    define('BASE_URL', 'https://' . $host);
}
