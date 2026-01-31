<?php
// Prevent direct access
defined('APP_INIT') || define('APP_INIT', true);
define('BASE_PATH', realpath(__DIR__ . '/../'));

/**
 * Load .env if exists
 */
$envPath = BASE_PATH . '/.env';
if (file_exists($envPath)) {
    foreach (file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        if (str_starts_with(trim($line), '#')) continue;
        [$key, $value] = array_map('trim', explode('=', $line, 2));
        putenv("$key=$value");
    }
}

/**
 * Detect protocol
 */
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';

/**
 * Detect host
 */
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';

/**
 * Detect local environment
 */
$isLocal = in_array(
    strtok($host, ':'),
    ['localhost', '127.0.0.1']
);

/**
 * Auto project folder
 */
$projectFolder = basename(realpath(__DIR__ . '/../'));

/**
 * BASE_URL logic
 */
if (getenv('APP_URL')) {
    // Highest priority
    $baseUrl = rtrim(getenv('APP_URL'), '/');

    if (getenv('APP_SUBDIR')) {
        $baseUrl .= '/' . trim(getenv('APP_SUBDIR'), '/');
    }
} else {
    // Fallback auto-detection
    // echo 'isLocal - ' . $isLocal . ' - ';
    if ($isLocal) {
        $baseUrl = "$protocol://$host/$projectFolder";
        // echo 'baseURL' . $baseUrl . ' ';
    } else {
        $baseUrl = "$protocol://$host";
        // echo 'baseURL 2' . $baseUrl . ' ';
    }
}

define('BASE_URL', $baseUrl);
