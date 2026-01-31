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

$localhost_server_location = 'localhost:8888'; // Adjust this to your local server address
$localhost_project_file_location = 'arup'; // Adjust this to your project folder name

if ($host === $localhost_server_location) {
    define('BASE_URL', 'http://' . $localhost_server_location . '/' . $localhost_project_file_location);
} else {
    define('BASE_URL', 'https://' . $host);
}