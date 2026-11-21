<?php
/**
 * QuizWiz Global Configuration
 */

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
define('EMAIL_CONNECT', 'connect@quizwiz.co.in');   // Dedicated for Campus Ambassadors & School Partnerships
define('EMAIL_SUPPORT', 'support@quizwiz.co.in');   // Dedicated for Student Enrollment, Queries & Support
define('EMAIL_CONTACT', EMAIL_SUPPORT);             // Default public inquiry address
define('ADDRESS_CITY', 'Ranchi, Jharkhand, India');
define('PLAYSTORE_URL', 'https://play.google.com/store/apps/details?id=co.learnol.denlh');

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

// Lightweight HTML mail dispatcher using standard PHP mail()
function send_quizwiz_mail($to, $subject, $messageHtml, $fromEmail = EMAIL_SUPPORT, $fromName = 'QuizWiz') {
    if (empty($to) || !filter_var($to, FILTER_VALIDATE_EMAIL)) {
        return false;
    }

    $headers = [
        'MIME-Version: 1.0',
        'Content-type: text/html; charset=UTF-8',
        'From: ' . $fromName . ' <' . $fromEmail . '>',
        'Reply-To: ' . $fromEmail,
        'X-Mailer: PHP/' . phpversion()
    ];

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

    return @mail($to, $subject, $wrappedHtml, implode("\r\n", $headers));
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
        if ($is_new) {
            fputcsv($fp, ['timestamp', 'type', 'name', 'email', 'phone', 'detail1', 'detail2', 'ip']);
        }
        $row = [
            date('Y-m-d H:i:s'),
            $type,
            $data['name'] ?? '',
            $data['email'] ?? '',
            $data['phone'] ?? '',
            $data['detail1'] ?? '',
            $data['detail2'] ?? '',
            $_SERVER['REMOTE_ADDR'] ?? ''
        ];
        fputcsv($fp, $row);
        fclose($fp);
    }
}
