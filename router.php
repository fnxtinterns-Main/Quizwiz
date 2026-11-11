<?php
/**
 * QuizWiz Clean URL Router for PHP Built-in Server
 * Maps clean URLs like /daily-quiz, /about, /quizzes to their corresponding .php scripts.
 */

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Decode special URL characters
$uri = urldecode($uri);

// Requested file path on disk
$requested = __DIR__ . $uri;

// 1. If static file exists (css, js, images, etc.), let the server serve it directly
if ($uri !== '/' && file_exists($requested) && !is_dir($requested)) {
    return false;
}

// 2. Route root path '/' to index.php
if ($uri === '/' || $uri === '') {
    require_once __DIR__ . '/index.php';
    return true;
}

// 3. Clean URL mapping: check if [uri].php exists
$trimmedUri = trim($uri, '/');
if ($trimmedUri === 'dpdp-compliance') {
    require_once __DIR__ . '/dpdp.php';
    return true;
}
if ($trimmedUri === 'campus-ambassador') {
    require_once __DIR__ . '/ambassador.php';
    return true;
}
$phpFile = __DIR__ . '/' . $trimmedUri . '.php';

if (file_exists($phpFile)) {
    require_once $phpFile;
    return true;
}

// 4. If nothing matches, send 404
http_response_code(404);
echo "<!DOCTYPE html><html><head><title>404 Not Found</title></head><body style='font-family: sans-serif; text-align: center; padding: 50px;'><h1>404 - Page Not Found</h1><p>The page you requested could not be found.</p><a href='/'>Return to Home</a></body></html>";
return true;
