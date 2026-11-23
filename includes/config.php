<?php
/**
 * QuizWiz Global Configuration
 */

// 1. Lightweight .env Loader (keeps sensitive passwords outside version control)
$envFile = __DIR__ . '/../.env';
if (file_exists($envFile)) {
    $envLines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($envLines as $line) {
        $line = trim($line);
        if ($line === '' || strpos($line, '#') === 0) continue;
        if (strpos($line, '=') !== false) {
            list($envKey, $envVal) = explode('=', $line, 2);
            $envKey = trim($envKey);
            $envVal = trim($envVal, " \t\n\r\0\x0B\"'");
            $_ENV[$envKey] = $envVal;
            putenv("{$envKey}={$envVal}");
        }
    }
}

// Site identity
define('SITE_NAME', 'QuizWiz');
define('SITE_TAGLINE', 'All India Online Quiz Championship for School Students');
define('SITE_URL', '/');

// Contact Info (Official)
define('PHONE_DISPLAY', '+91 98015 06511');
define('PHONE_RAW', '+919801506511');
define('WHATSAPP_NUMBER', '919801506511');
define('WHATSAPP_URL', 'https://wa.me/919801506511?text=' . urlencode('Hello QuizWiz! I want to inquire about the All India Quiz Championship.'));

// Active Official Mailboxes on Hostinger
define('EMAIL_CONNECT', getenv('SMTP_USER_CONNECT') ?: ($_ENV['SMTP_USER_CONNECT'] ?? 'connect@quizwiz.co.in'));
define('EMAIL_SUPPORT', getenv('SMTP_USER_SUPPORT') ?: ($_ENV['SMTP_USER_SUPPORT'] ?? 'support@quizwiz.co.in'));
define('EMAIL_CONTACT', EMAIL_SUPPORT);

// Hostinger Authenticated SMTP Settings (Loaded securely from .env)
define('SMTP_HOST', getenv('SMTP_HOST') ?: ($_ENV['SMTP_HOST'] ?? 'smtp.hostinger.com'));
define('SMTP_PORT', (int)(getenv('SMTP_PORT') ?: ($_ENV['SMTP_PORT'] ?? 465)));
define('SMTP_PASS', getenv('SMTP_PASS') ?: ($_ENV['SMTP_PASS'] ?? ''));

define('ADDRESS_CITY', 'Ranchi, Jharkhand, India');
define('PLAYSTORE_URL', 'https://play.google.com/store/apps/details?id=co.learnol.denlh');

// Optional Analytics & Administration (Loaded from .env)
define('GA_MEASUREMENT_ID', getenv('GA_MEASUREMENT_ID') ?: ($_ENV['GA_MEASUREMENT_ID'] ?? ''));
define('ADMIN_EXPORT_KEY', getenv('ADMIN_EXPORT_KEY') ?: ($_ENV['ADMIN_EXPORT_KEY'] ?? 'QuizwizAdmin2026'));

// Social Links
$social_links = [
    'facebook' => 'https://www.facebook.com/Quizwiz24/',
    'instagram' => 'https://www.instagram.com/quizwiz_24/',
    'linkedin' => 'https://www.linkedin.com/company/quiz-wiz/',
    'whatsapp' => WHATSAPP_URL
];

// Helper to determine active navigation item
function is_active_page($page_name, $current_page) {
    return ($page_name === $current_page) ? 'active' : '';
}

// Authenticated SMTP mail dispatcher via Hostinger (with native fallback)
function send_quizwiz_mail($to, $subject, $messageHtml, $fromEmail = EMAIL_SUPPORT, $fromName = 'QuizWiz') {
    if (empty($to) || !filter_var($to, FILTER_VALIDATE_EMAIL)) {
        return false;
    }

    $wrappedHtml = '<!DOCTYPE html><html><head><meta charset="UTF-8"><title>' . htmlspecialchars($subject) . '</title></head>'
        . '<body style="margin:0;padding:24px;background:#F8FAFC;font-family:Arial,Helvetica,sans-serif;color:#1E293B;">'
        . '<div style="max-width:600px;margin:0 auto;background:#FFFFFF;border-radius:12px;border:1px solid #E2E8F0;overflow:hidden;box-shadow:0 4px 6px rgba(0,0,0,0.05);">'
        . '<div style="background:#1B2559;padding:20px;text-align:center;">'
        . '<img src="https://quizwiz.co.in/assets/images/logo.png" alt="QuizWiz Logo" style="height:36px;width:auto;display:inline-block;">'
        . '</div>'
        . '<div style="padding:28px 24px;line-height:1.6;font-size:15px;">'
        . $messageHtml
        . '</div>'
        . '<div style="background:#F1F5F9;padding:16px 24px;text-align:center;font-size:12px;color:#64748B;border-top:1px solid #E2E8F0;">'
        . 'QuizWiz — All India Quiz Championships<br>Helpline: +91 98015 06511 | Ranchi, Jharkhand, India'
        . '</div>'
        . '</div></body></html>';

    // 1. Authenticated Direct SMTP Socket via Hostinger (smtp.hostinger.com:465 SSL)
    $host = 'ssl://' . SMTP_HOST . ':' . SMTP_PORT;
    $socket = @stream_socket_client($host, $errno, $errstr, 3);
    if ($socket) {
        stream_set_timeout($socket, 3);
        $read = function() use ($socket) {
            $data = '';
            while ($line = fgets($socket)) {
                $data .= $line;
                if (substr($line, 3, 1) === ' ') break;
            }
            return $data;
        };
        $send = function($cmd) use ($socket) {
            fputs($socket, $cmd . "\r\n");
        };

        $read();
        $send("EHLO " . SMTP_HOST);
        $read();
        $send("AUTH LOGIN");
        $read();
        $send(base64_encode($fromEmail));
        $read();
        $send(base64_encode(SMTP_PASS));
        $authRes = $read();

        if (strpos($authRes, '235') !== false) {
            $send("MAIL FROM:<{$fromEmail}>");
            $read();
            $send("RCPT TO:<{$to}>");
            $read();
            $send("DATA");
            $read();

            $headers = "MIME-Version: 1.0\r\n"
                     . "Content-Type: text/html; charset=UTF-8\r\n"
                     . "From: =?UTF-8?B?" . base64_encode($fromName) . "?= <{$fromEmail}>\r\n"
                     . "To: <{$to}>\r\n"
                     . "Reply-To: <{$fromEmail}>\r\n"
                     . "Subject: =?UTF-8?B?" . base64_encode($subject) . "?=\r\n"
                     . "Date: " . date('r') . "\r\n"
                     . "X-Mailer: QuizWiz-SMTP/1.0\r\n";

            $send($headers . "\r\n" . $wrappedHtml . "\r\n.");
            $dataRes = $read();
            $send("QUIT");
            fclose($socket);

            if (strpos($dataRes, '250') !== false) {
                return true;
            }
        } else {
            fclose($socket);
        }
    }

    // 2. Fallback to native PHP mail() if external socket is blocked
    $fallbackHeaders = [
        'MIME-Version: 1.0',
        'Content-type: text/html; charset=UTF-8',
        'From: ' . $fromName . ' <' . $fromEmail . '>',
        'Reply-To: ' . $fromEmail,
        'X-Mailer: PHP/' . phpversion()
    ];
    return @mail($to, $subject, $wrappedHtml, implode("\r\n", $fallbackHeaders));
}

function claim_quizwiz_form_submission($formKey, $token) {
    if (!is_string($formKey) || !is_string($token)
        || !preg_match('/\A[a-z0-9_-]+\z/i', $formKey)
        || !preg_match('/\A[a-f0-9]{64}\z/i', $token)) {
        return 'invalid';
    }

    $claimsPath = sys_get_temp_dir() . DIRECTORY_SEPARATOR
        . 'quizwiz-submission-claims-' . substr(hash('sha256', __DIR__), 0, 16) . '.json';
    $claimsFile = @fopen($claimsPath, 'c+');
    if ($claimsFile === false) {
        error_log('QuizWiz could not open the form submission claim store.');
        return 'error';
    }

    // Serialize claims so concurrent requests using the same token cannot both send mail.
    if (!flock($claimsFile, LOCK_EX)) {
        fclose($claimsFile);
        error_log('QuizWiz could not lock the form submission claim store.');
        return 'error';
    }

    rewind($claimsFile);
    $contents = stream_get_contents($claimsFile);
    if ($contents === false) {
        flock($claimsFile, LOCK_UN);
        fclose($claimsFile);
        error_log('QuizWiz could not read the form submission claim store.');
        return 'error';
    }

    $claims = [];
    if (trim($contents) !== '') {
        $decodedClaims = json_decode($contents, true);
        if (!is_array($decodedClaims)) {
            flock($claimsFile, LOCK_UN);
            fclose($claimsFile);
            error_log('QuizWiz form submission claim store contains invalid JSON.');
            return 'error';
        }
        $claims = $decodedClaims;
    }

    $now = time();
    foreach ($claims as $claim => $claimedAt) {
        if (!is_numeric($claimedAt) || (int)$claimedAt < $now - 30 * 24 * 60 * 60) {
            unset($claims[$claim]);
        }
    }

    $claimKey = hash('sha256', $formKey . ':' . $token);
    $result = isset($claims[$claimKey]) ? 'duplicate' : 'claimed';
    if ($result === 'claimed') {
        $claims[$claimKey] = $now;
    }

    $encodedClaims = json_encode($claims);
    $writeSucceeded = is_string($encodedClaims)
        && rewind($claimsFile)
        && ftruncate($claimsFile, 0)
        && fwrite($claimsFile, $encodedClaims) === strlen($encodedClaims)
        && fflush($claimsFile);

    flock($claimsFile, LOCK_UN);
    fclose($claimsFile);

    if (!$writeSucceeded) {
        error_log('QuizWiz could not save the form submission claim.');
        return 'error';
    }

    return $result;
}

// Secure lightweight lead recorder (guarantees student registrations & inquiries are never lost)
function record_quizwiz_lead($type, array $data) {
    $dir = __DIR__ . '/../data';
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
    $file = $dir . '/leads.csv';
    $is_new = !file_exists($file);
    $fp = @fopen($file, 'a');
    if ($fp) {
        // shortcut: file-based queue, upgrade to SQLite/MySQL if write concurrency exceeds 500/sec
        flock($fp, LOCK_EX);
        if ($is_new) {
            fputcsv($fp, ['timestamp', 'type', 'name', 'email', 'phone', 'detail1', 'detail2', 'ip']);
        }
        $sanitize = function($v) {
            return trim(preg_replace('/\s+/', ' ', (string)($v ?? '')));
        };
        $row = [
            date('Y-m-d H:i:s'),
            $type,
            $sanitize($data['name'] ?? ''),
            $sanitize($data['email'] ?? ''),
            $sanitize($data['phone'] ?? ''),
            $sanitize($data['detail1'] ?? ''),
            $sanitize($data['detail2'] ?? ''),
            $_SERVER['REMOTE_ADDR'] ?? ''
        ];
        fputcsv($fp, $row);
        flock($fp, LOCK_UN);
        fclose($fp);
    }
}
