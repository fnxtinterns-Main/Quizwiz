<?php
require_once __DIR__ . '/config.php';

// Default page metadata if not defined
$page_title = isset($page_title) ? $page_title . ' | ' . SITE_NAME : SITE_NAME . ' | ' . SITE_TAGLINE;
$page_desc = isset($page_desc) ? $page_desc : 'Join QuizWiz, India\'s premier online quiz competition for school students (Classes 1–12).  daily quizzes, live championships, and national scholarships.';
$current_page = isset($current_page) ? $current_page : 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    
    <!-- Open Graph / WhatsApp Social Sharing Meta -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="QuizWiz">
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta property="og:url" content="https://quizwiz.co.in<?php echo htmlspecialchars($_SERVER['REQUEST_URI'] ?? '/'); ?>">
    <meta property="og:image" content="https://quizwiz.co.in/assets/images/Banner.jpeg">
    <meta property="og:image:secure_url" content="https://quizwiz.co.in/assets/images/Banner.jpeg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1280">
    <meta property="og:image:height" content="720">

    <!-- Twitter Card Meta -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="twitter:image" content="https://quizwiz.co.in/assets/images/Banner.jpeg">

    <link rel="icon" type="image/png" href="/assets/images/logo.png">

    <!-- Google Analytics 4 (Only renders when GA_MEASUREMENT_ID is configured in .env) -->
    <?php if (defined('GA_MEASUREMENT_ID') && !empty(GA_MEASUREMENT_ID)): ?>
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo htmlspecialchars(GA_MEASUREMENT_ID); ?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', '<?php echo htmlspecialchars(GA_MEASUREMENT_ID); ?>');
        </script>
    <?php endif; ?>

    <!-- Performance Preloads & Preconnects -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    
    <link rel="preload" href="/assets/css/style.css?v=2.8" as="style">
    <link rel="preload" href="/assets/images/logo.png" as="image">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@600;700;800&display=swap" rel="stylesheet">
    
    <!-- Non-Blocking FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" media="print" onload="this.media='all'" />
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"></noscript>

    <!-- QuizWiz Modern Design System -->
    <link rel="stylesheet" href="/assets/css/style.css?v=2.8">
</head>
<body>

    <!-- Sticky Main Navigation Header -->
    <header class="site-header">
        <div class="container">
            <nav class="navbar">
                <!-- Brand Logo (High Contrast White Container for Crisp Readability on Dark/Light Screens) -->
                <a href="/" class="brand-logo" aria-label="QuizWiz Home">
                    <img src="/assets/images/logo.png" alt="QuizWiz Logo">
                </a>

                <!-- Desktop Navigation Links -->
                <ul class="nav-menu">
                    <li><a href="/" class="nav-link <?php echo is_active_page('home', $current_page); ?>">Home</a></li>
                    <li><a href="/daily-quiz" class="nav-link <?php echo is_active_page('daily-quiz', $current_page); ?>">Daily Quiz</a></li>
                    <li><a href="/puzzles" class="nav-link <?php echo is_active_page('puzzles', $current_page); ?>">Puzzles</a></li>
                    <li><a href="/ambassador" class="nav-link <?php echo is_active_page('ambassador', $current_page); ?>">Ambassador</a></li>
                    <li><a href="/quizzes" class="nav-link <?php echo is_active_page('quizzes', $current_page); ?>">Quizzes</a></li>
                    <li><a href="/rewards" class="nav-link <?php echo is_active_page('rewards', $current_page); ?>">Rewards</a></li>
                    <li><a href="/about" class="nav-link <?php echo is_active_page('about', $current_page); ?>">About</a></li>
                    <li><a href="/contact" class="nav-link <?php echo is_active_page('contact', $current_page); ?>">Contact</a></li>
                </ul>

                <!-- Action Buttons: Optimized for Desktop and Mobile -->
                <div class="nav-actions">
                    <a href="<?php echo WHATSAPP_URL; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-sm nav-action-chat" title="Chat on WhatsApp">
                        <i class="fa-brands fa-whatsapp"></i> <span class="d-none-mobile">Chat</span>
                    </a>
                    <a href="/enroll" class="btn btn-primary btn-sm nav-action-quiz">
                        <i class="fa-solid fa-trophy"></i> Enroll Now
                    </a>
                    <button id="mobileMenuBtn" class="mobile-menu-btn" aria-label="Open Navigation Menu">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>
            </nav>
        </div>
    </header>

    <!-- Mobile Slide-out Drawer Navigation -->
    <div id="drawerBackdrop" class="drawer-backdrop"></div>
    <aside id="mobileDrawer" class="mobile-drawer" aria-label="Mobile Navigation">
        <div class="mobile-drawer-header">
            <div style="background: #FFFFFF; padding: 4px 8px; border-radius: 8px;">
                <img src="/assets/images/logo.png" alt="QuizWiz Logo" style="height: 34px;">
            </div>
            <button id="closeDrawerBtn" class="mobile-menu-btn" style="border: none;" aria-label="Close Navigation Menu">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <ul class="mobile-nav-list">
            <li><a href="/" class="mobile-nav-link <?php echo is_active_page('home', $current_page); ?>">Home</a></li>
            <li>
                <a href="/daily-quiz" class="mobile-nav-link <?php echo is_active_page('daily-quiz', $current_page); ?>" style="color: var(--secondary);">
                    🔥 Daily Quiz (Classes 1–12)
                </a>
            </li>
            <li>
                <a href="/puzzles" class="mobile-nav-link <?php echo is_active_page('puzzles', $current_page); ?>">
                    🧩 Brain Puzzles &amp; Riddles
                </a>
            </li>
            <li>
                <a href="/ambassador" class="mobile-nav-link <?php echo is_active_page('ambassador', $current_page); ?>" style="color: var(--secondary); font-weight: 700;">
                    👑 Campus Ambassador (Become Quiz Master)
                </a>
            </li>
            <li><a href="/quizzes" class="mobile-nav-link <?php echo is_active_page('quizzes', $current_page); ?>">All Quiz Categories</a></li>
            <li>
                <a href="/rewards" class="mobile-nav-link <?php echo is_active_page('rewards', $current_page); ?>" style="color: var(--secondary); font-weight: 700;">
                    🏆 Prizes, Scholarships &amp; Honors
                </a>
            </li>
            <li><a href="/about" class="mobile-nav-link <?php echo is_active_page('about', $current_page); ?>">About Championships</a></li>
            <li><a href="/enroll" class="mobile-nav-link <?php echo is_active_page('enroll', $current_page); ?>">Student Registration</a></li>
            <li><a href="/contact" class="mobile-nav-link <?php echo is_active_page('contact', $current_page); ?>">Contact &amp; Helpline</a></li>
        </ul>
        <div style="margin-top: auto; display: flex; flex-direction: column; gap: 12px; padding-top: 16px; border-top: 1px solid var(--border-light);">
            <a href="/daily-quiz" class="btn btn-primary btn-lg" style="width: 100%;">
                <i class="fa-solid fa-play"></i> Play Today's Quiz
            </a>
            <a href="/enroll" class="btn btn-outline-navy" style="width: 100%;">
                <i class="fa-solid fa-trophy"></i> Enroll for Championship
            </a>
            <a href="<?php echo WHATSAPP_URL; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp" style="width: 100%;">
                <i class="fa-brands fa-whatsapp"></i> WhatsApp: <?php echo PHONE_DISPLAY; ?>
            </a>
        </div>
    </aside>

    <main>
