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
define('EMAIL_CONTACT', 'info@quizwiz.co.in');
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
