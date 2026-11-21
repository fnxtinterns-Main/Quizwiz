<?php
/**
 * QuizWiz Secure 1-Click Lead Downloader
 * Usage: https://quizwiz.co.in/admin-export?key=YOUR_SECRET_PIN
 */
require_once __DIR__ . '/includes/config.php';

$secretKey = defined('ADMIN_EXPORT_KEY') ? ADMIN_EXPORT_KEY : 'QuizwizAdmin2026';
$reqKey = trim($_GET['key'] ?? '');

if (empty($reqKey) || !hash_equals($secretKey, $reqKey)) {
    http_response_code(403);
    echo '<!DOCTYPE html><html><body style="font-family:Arial,sans-serif;padding:48px 24px;text-align:center;background:#F8FAFC;color:#0F172A;">'
       . '<div style="max-width:440px;margin:0 auto;background:#fff;padding:32px;border-radius:12px;border:1px solid #E2E8F0;box-shadow:0 4px 6px rgba(0,0,0,0.05);">'
       . '<h2 style="color:#DC2626;margin-top:0;">Access Denied</h2>'
       . '<p style="color:#64748B;font-size:14px;line-height:1.5;">Missing or incorrect security key. Pass your secret key in the URL parameter, e.g.:<br><code>?key=YOUR_PIN</code></p>'
       . '</div></body></html>';
    exit;
}

$file = __DIR__ . '/data/leads.csv';
if (!file_exists($file)) {
    http_response_code(404);
    echo '<!DOCTYPE html><html><body style="font-family:Arial,sans-serif;padding:48px;text-align:center;"><h3>No leads recorded yet.</h3></body></html>';
    exit;
}

$filename = 'quizwiz_leads_' . date('Y-m-d_His') . '.csv';
header('Content-Type: text/csv; charset=UTF-8');
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Pragma: no-cache');
header('Expires: 0');

// Excel UTF-8 Byte Order Mark (BOM)
echo "\xEF\xBB\xBF";
readfile($file);
exit;
