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
