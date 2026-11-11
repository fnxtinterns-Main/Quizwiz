<?php
$current_page = 'home';
$page_title = 'Online Quiz Competition | All India Championships';
$page_desc = 'QuizWiz conducts premier online quiz championships and free daily quizzes for school students in India. Compete, sharpen your intellect, and win laptops, tablets, and scholarships.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/data/quizzes.php';
?>

<!-- 1. LIVE ACTIVITY TICKER -->
<div class="live-ticker-wrap">
    <span class="live-ticker-label">
        <i class="fa-solid fa-bolt"></i> Live Activity
    </span>
    <div class="live-ticker-content">
        <?php foreach ($live_ticker_items as $ticker): ?>
            <span class="live-ticker-item">
                <span><?php echo $ticker['icon']; ?></span>
                <span><?php echo htmlspecialchars($ticker['text']); ?></span>
            </span>
        <?php endforeach; ?>
        <!-- Duplicate for continuous seamless marquee -->
        <?php foreach ($live_ticker_items as $ticker): ?>
            <span class="live-ticker-item">
                <span><?php echo $ticker['icon']; ?></span>
                <span><?php echo htmlspecialchars($ticker['text']); ?></span>
            </span>
        <?php endforeach; ?>
    </div>
</div>

<!-- 2. HIGH-ACTION HERO SECTION -->
<section class="hero">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content">
                <div class="section-eyebrow">
                    <i class="fa-solid fa-fire text-orange"></i> Free Daily Quizzes &bull; All India Championships
                </div>
                <h1 class="hero-headline">
                    Learn Daily. <span class="highlight">Win Big.</span> Rule the Quiz Arena.
                </h1>
                <p class="hero-subtext">
                    Join over 7,200+ school students from Classes 1 to 12. Take <strong>free daily quizzes</strong> across Science, Math, G.K., and History, boost your academic speed, and compete for <strong>laptops, tablets, and national scholarships</strong>.
                </p>

                <!-- Dual CTA Action Group -->
                <div class="hero-cta-group">
                    <a href="/daily-quiz" class="btn btn-primary btn-lg pulse-glow">
                        <i class="fa-solid fa-play"></i> Play Today's Free Quiz
                    </a>
                    <a href="/enroll" class="btn btn-outline-navy btn-lg">
                        <i class="fa-solid fa-trophy"></i> Enroll for Championship
                    </a>
                </div>

                <!-- Trust Badges & Metrics -->
                <div class="hero-trust">
                    <div class="trust-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>100% Free Daily Practice</span>
                    </div>
                    <div class="trust-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Group A (Class 1–6) &amp; Group B (Class 7–12)</span>
                    </div>
                    <div class="trust-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Verified Merit Certificates</span>
                    </div>
                </div>
            </div>

            <!-- Hero Interactive Mini-Quiz Teaser -->
            <div class="hero-visual">
                <div class="hero-quiz-teaser">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
                        <span class="teaser-badge">
                            <i class="fa-solid fa-bolt"></i> Quick Brain Sprint
                        </span>
                        <span style="font-size: 0.8rem; font-weight: 700; color: #10B981; background: #ECFDF5; padding: 2px 8px; border-radius: 4px;">
                            +50 XP
                        </span>
                    </div>

                    <h4 id="heroQTitle" style="font-size: 1.15rem; color: var(--primary); margin-bottom: 16px; line-height: 1.4;">
                        Which is the nearest star to planet Earth?
                    </h4>

                    <div id="heroOptions" style="display: flex; flex-direction: column; gap: 8px;">
                        <button onclick="handleHeroAnswer(this, false)" class="quiz-option-btn" style="padding: 10px 14px; margin: 0; font-size: 0.9rem;">
                            <strong>A.</strong> Proxima Centauri
                        </button>
                        <button onclick="handleHeroAnswer(this, true)" class="quiz-option-btn" style="padding: 10px 14px; margin: 0; font-size: 0.9rem;">
                            <strong>B.</strong> The Sun
                        </button>
                        <button onclick="handleHeroAnswer(this, false)" class="quiz-option-btn" style="padding: 10px 14px; margin: 0; font-size: 0.9rem;">
                            <strong>C.</strong> Alpha Centauri A
                        </button>
                    </div>

                    <div id="heroAnswerFeedback" style="display: none; padding: 10px 14px; border-radius: 8px; font-size: 0.85rem; margin-top: 14px;"></div>

                    <div style="margin-top: 16px; padding-top: 12px; border-top: 1px solid var(--border-light); display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-size: 0.8rem; color: var(--text-muted);">
                            🔥 1,420 students answered today
                        </span>
                        <a href="/daily-quiz" style="font-size: 0.85rem; font-weight: 700; color: var(--secondary);">
                            Play Full Quiz &rarr;
                        </a>
                    </div>
                </div>

                <!-- Floating Achievement Pills -->
                <div class="hero-badge-float hero-badge-top">
                    <span style="font-size: 1.3rem;">💻</span>
                    <div>
                        <div style="font-size: 0.7rem; color: var(--text-muted);">Top National Prize</div>
                        <div style="color: var(--primary); font-weight: 700; font-size: 0.85rem;">HP Laptop + ₹50,000</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. DATA STATS & METRICS -->
<section class="section section-alt" style="padding: 48px 0;">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon" style="background-color: #ECFDF5; color: #10B981;">
                    <i class="fa-solid fa-layer-group"></i>
                </div>
                <div class="stat-number" data-target-count="289">0</div>
                <div class="stat-label">Curated Test Series</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon" style="background-color: #FFF7ED; color: #FF6B00;">
                    <i class="fa-solid fa-users"></i>
                </div>
                <div class="stat-number" data-target-count="7286">0</div>
                <div class="stat-label">Students Enrolled</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon" style="background-color: #EEF2FF; color: #4F46E5;">
                    <i class="fa-solid fa-clipboard-check"></i>
                </div>
                <div class="stat-number" data-target-count="598">0</div>
                <div class="stat-label">Championships Held</div>
            </div>
            <div class="stat-card">
                <div class="stat-icon" style="background-color: #F0FDF4; color: #16A34A;">
                    <i class="fa-solid fa-school"></i>
                </div>
                <div class="stat-number" data-target-count="52">0</div>
                <div class="stat-label">Schools Partnered</div>
            </div>
        </div>
    </div>
</section>

<!-- 4. DAILY QUIZ SPOTLIGHT BANNER -->
<section class="section" style="background: linear-gradient(135deg, #FFF7ED 0%, #FFFFFF 100%); border-bottom: 1px solid var(--border-light);">
    <div class="container">
        <div class="app-banner" style="background: linear-gradient(135deg, #1E1B4B 0%, #2E1065 100%);">
            <div>
                <div class="section-eyebrow" style="background: rgba(255, 107, 0, 0.25); color: #FFA366; border-color: rgba(255, 107, 0, 0.4);">
                    <i class="fa-solid fa-fire text-orange"></i> Fresh Every 24 Hours
                </div>
                <h2 style="color: #FFFFFF; font-size: 2rem; margin-bottom: 12px;">Daily Free Quizzes: Sharpen Your Mind Every Day!</h2>
                <p style="color: #CBD5E1; font-size: 1.05rem; margin-bottom: 24px;">
                    We upload brand new quiz questions every single morning across Science, Space, Indian History, Mental Math, and General Knowledge. Completely free, no credit card or account needed!
                </p>
                <div style="display: flex; gap: 14px; flex-wrap: wrap; align-items: center;">
                    <a href="/daily-quiz" class="btn btn-primary btn-lg">
                        <i class="fa-solid fa-bolt"></i> Play Today's Free Quiz
                    </a>
                    <a href="<?php echo WHATSAPP_URL; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-lg">
                        <i class="fa-brands fa-whatsapp"></i> Get Daily Quiz on WhatsApp
                    </a>
                </div>
            </div>
            <div style="text-align: center;">
                <div style="background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.2); border-radius: var(--radius-xl); padding: 24px; max-width: 280px; margin: 0 auto; backdrop-filter: blur(10px);">
                    <div style="font-size: 3rem; margin-bottom: 8px;">🎯</div>
                    <div style="font-size: 1.25rem; font-weight: 700; color: #FFFFFF; margin-bottom: 4px;">Daily Practice Rewards</div>
                    <p style="font-size: 0.85rem; color: #CBD5E1; margin: 0;">Score 100% accuracy in daily rounds to unlock national certificates &amp; awards!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. PRIZES & SCHOLARSHIPS SHOWCASE -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <div class="section-eyebrow"><i class="fa-solid fa-gift"></i> Rewarding Excellence</div>
            <h2>Championship Prizes &amp; Scholarships</h2>
            <p class="lead">
                Compete with dignity, showcase your academic acumen, and win prizes that empower your future education.
            </p>
        </div>

        <div class="prize-grid">
            <?php foreach ($championship_prizes as $prize): ?>
                <div class="prize-card" style="--prize-color: <?php echo $prize['color']; ?>;">
                    <div class="prize-icon-wrap">
                        <i class="fa-solid <?php echo $prize['icon']; ?>"></i>
                    </div>
                    <span style="display: inline-block; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; color: <?php echo $prize['color']; ?>; background: rgba(0,0,0,0.04); padding: 4px 10px; border-radius: 9999px; margin-bottom: 12px;">
                        <?php echo htmlspecialchars($prize['tier'] ?? $prize['badge'] ?? 'National Honor'); ?>
                    </span>
                    <h3 style="font-size: 1.15rem; margin-bottom: 8px;"><?php echo htmlspecialchars($prize['title']); ?></h3>
                    <p style="font-size: 0.9rem; color: var(--text-secondary); margin: 0; font-weight: 600;">
                        <?php echo htmlspecialchars($prize['reward']); ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 6. LIVE NATIONAL LEADERBOARD -->
<section class="section section-alt">
    <div class="container">
        <div class="hero-grid" style="align-items: center;">
            <div>
                <div class="section-eyebrow"><i class="fa-solid fa-trophy"></i> Hall of Fame</div>
                <h2 style="margin-bottom: 16px;">This Week’s National Champions</h2>
                <p>
                    Top performers across India who led their schools in accuracy, speed, and academic excellence. Will your name be here next?
                </p>
                <div style="margin-top: 24px; display: flex; flex-direction: column; gap: 12px;">
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <i class="fa-solid fa-circle-check text-orange" style="font-size: 1.2rem;"></i>
                        <span style="font-weight: 500; font-size: 0.95rem;">Real-time accuracy and time-weighted scoring</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 12px;">
                        <i class="fa-solid fa-circle-check text-orange" style="font-size: 1.2rem;"></i>
                        <span style="font-weight: 500; font-size: 0.95rem;">Weekly leaderboard updates every Sunday evening</span>
                    </div>
                </div>
                <div style="margin-top: 32px;">
                    <a href="/enroll" class="btn btn-primary btn-lg">
                        <i class="fa-solid fa-user-plus"></i> Join the Leaderboard
                    </a>
                </div>
            </div>

            <!-- Leaderboard Table Widget -->
            <div>
                <div class="leaderboard-card">
                    <div style="background: var(--primary); color: #FFFFFF; padding: 16px 20px; display: flex; justify-content: space-between; align-items: center;">
                        <h4 style="margin: 0; color: #FFFFFF; font-size: 1.05rem;">
                            <i class="fa-solid fa-medal text-orange"></i> All India Top 5
                        </h4>
                        <span style="font-size: 0.8rem; background: rgba(255,255,255,0.15); padding: 4px 8px; border-radius: 4px;">Live Week 46</span>
                    </div>

                    <?php foreach ($top_champions as $champ): ?>
                        <div class="leaderboard-row">
                            <div style="display: flex; align-items: center; gap: 14px;">
                                <div class="rank-badge <?php echo $champ['rank'] === 1 ? 'rank-1' : ($champ['rank'] === 2 ? 'rank-2' : ($champ['rank'] === 3 ? 'rank-3' : 'rank-default')); ?>">
                                    <?php echo $champ['rank']; ?>
                                </div>
                                <div>
                                    <strong style="color: var(--primary); font-size: 0.95rem; display: block;">
                                        <?php echo htmlspecialchars($champ['name']); ?>
                                    </strong>
                                    <span style="font-size: 0.78rem; color: var(--text-muted);">
                                        <?php echo htmlspecialchars($champ['class']); ?> &bull; <?php echo htmlspecialchars($champ['school']); ?>, <?php echo htmlspecialchars($champ['city']); ?>
                                    </span>
                                </div>
                            </div>
                            <div style="text-align: right;">
                                <div style="font-weight: 700; color: var(--secondary); font-size: 0.95rem;">
                                    <?php echo number_format($champ['score']); ?> pts
                                </div>
                                <span style="font-size: 0.75rem; color: #10B981; font-weight: 600;">
                                    <i class="fa-solid fa-bullseye"></i> <?php echo htmlspecialchars($champ['accuracy'] ?? '98% Accuracy'); ?>
                                </span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 7. FEATURED QUIZ CATEGORIES -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <div class="section-eyebrow">Subject Test Series</div>
            <h2>Explore Quiz Categories</h2>
            <p class="lead">
                Curated across STEM, Humanities, and General Intelligence to develop well-rounded students.
            </p>
        </div>

        <div class="quiz-grid">
            <?php foreach ($quiz_categories as $quiz): ?>
                <div class="quiz-card">
                    <div class="quiz-card-image">
                        <img src="<?php echo htmlspecialchars($quiz['image']); ?>" alt="<?php echo htmlspecialchars($quiz['title']); ?>">
                        <span class="quiz-difficulty-badge"><?php echo htmlspecialchars($quiz['difficulty']); ?></span>
                        <span class="quiz-group-pill"><?php echo htmlspecialchars($quiz['group']); ?></span>
                    </div>
                    <div class="quiz-card-body">
                        <h3 class="quiz-card-title">
                            <i class="fa-solid <?php echo htmlspecialchars($quiz['icon']); ?>"></i>
                            <?php echo htmlspecialchars($quiz['title']); ?>
                        </h3>
                        <p class="quiz-card-desc"><?php echo htmlspecialchars($quiz['description']); ?></p>
                        
                        <div class="quiz-card-meta">
                            <span class="meta-item"><i class="fa-solid fa-circle-question"></i> <?php echo $quiz['questions_count']; ?> Questions</span>
                            <span class="meta-item"><i class="fa-regular fa-clock"></i> <?php echo $quiz['duration']; ?></span>
                        </div>

                        <div style="display: flex; gap: 8px;">
                            <button onclick="openQuizModal('<?php echo htmlspecialchars($quiz['id']); ?>', '<?php echo htmlspecialchars(addslashes($quiz['title'])); ?>')" class="btn btn-primary" style="flex: 1;">
                                <i class="fa-solid fa-play"></i> Take Quiz
                            </button>
                            <a href="/enroll" class="btn btn-outline-navy" title="Enroll in this category">
                                <i class="fa-solid fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 8. VERIFIED TESTIMONIALS -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <div class="section-eyebrow">Student &amp; Parent Feedback</div>
            <h2>Loved by Students, Trusted by Parents</h2>
            <p>Real stories from participants across India who sharpened their minds with QuizWiz.</p>
        </div>

        <div class="steps-grid">
            <div class="form-card" style="display: flex; flex-direction: column;">
                <div style="color: #F59E0B; margin-bottom: 12px;">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <p style="font-style: italic; flex: 1;">
                    "QuizWiz has been a game-changer for my daughter. The Science Explorer tests made learning outside her school curriculum exciting, and the All India leaderboard motivated her to improve every weekend."
                </p>
                <div style="display: flex; align-items: center; gap: 12px; border-top: 1px solid var(--border-light); padding-top: 16px;">
                    <div style="width: 44px; height: 44px; border-radius: 50%; background: var(--primary-surface); color: var(--primary); display: flex; align-items: center; justify-content: center; font-weight: 700;">PD</div>
                    <div>
                        <strong style="color: var(--primary); font-size: 0.95rem; display: block;">Prerna Dani</strong>
                        <span style="font-size: 0.8rem; color: var(--text-muted);">Parent of Class 5 Student, Nashik</span>
                    </div>
                </div>
            </div>

            <div class="form-card" style="display: flex; flex-direction: column;">
                <div style="color: #F59E0B; margin-bottom: 12px;">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <p style="font-style: italic; flex: 1;">
                    "Competing with thousands of students across different states gave me real competition exposure. The Math Mastermind and History Trek rounds helped me significantly in my NTSE preparation."
                </p>
                <div style="display: flex; align-items: center; gap: 12px; border-top: 1px solid var(--border-light); padding-top: 16px;">
                    <div style="width: 44px; height: 44px; border-radius: 50%; background: var(--secondary-surface); color: var(--secondary); display: flex; align-items: center; justify-content: center; font-weight: 700;">RR</div>
                    <div>
                        <strong style="color: var(--primary); font-size: 0.95rem; display: block;">Rishabh Raj</strong>
                        <span style="font-size: 0.8rem; color: var(--text-muted);">Class 9 Student, Ranchi</span>
                    </div>
                </div>
            </div>

            <div class="form-card" style="display: flex; flex-direction: column;">
                <div style="color: #F59E0B; margin-bottom: 12px;">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                </div>
                <p style="font-style: italic; flex: 1;">
                    "As a school coordinator, we enrolled 80+ students into the QuizWiz championship. The platform is smooth, transparent, and genuinely fosters healthy academic curiosity among students."
                </p>
                <div style="display: flex; align-items: center; gap: 12px; border-top: 1px solid var(--border-light); padding-top: 16px;">
                    <div style="width: 44px; height: 44px; border-radius: 50%; background: var(--primary-surface); color: var(--primary); display: flex; align-items: center; justify-content: center; font-weight: 700;">AK</div>
                    <div>
                        <strong style="color: var(--primary); font-size: 0.95rem; display: block;">Ananya Kulkarni</strong>
                        <span style="font-size: 0.8rem; color: var(--text-muted);">Teacher &amp; Academic Incharge, Pune</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 9. APP CTA & HELPLINE -->
<section class="section" style="padding-top: 0;">
    <div class="container">
        <div class="app-banner">
            <div>
                <div class="section-eyebrow" style="background: rgba(255,255,255,0.15); color: #FFFFFF; border-color: rgba(255,255,255,0.25);">
                    <i class="fa-solid fa-mobile-screen"></i> Practice Anywhere
                </div>
                <h2>Download the QuizWiz Mobile App</h2>
                <p>
                    Get instant access to daily live quiz rounds, offline practice modes, instant solution explanations, and personalized performance analytics on your phone.
                </p>
                <div class="app-store-badges">
                    <a href="<?php echo PLAYSTORE_URL; ?>" target="_blank" rel="noopener noreferrer" class="playstore-btn">
                        <i class="fa-brands fa-google-play" style="font-size: 2rem; color: #00E676;"></i>
                        <div style="text-align: left;">
                            <div style="font-size: 0.7rem; text-transform: uppercase; opacity: 0.8;">Get it on</div>
                            <div style="font-size: 1.15rem; font-weight: 700; line-height: 1.1;">Google Play</div>
                        </div>
                    </a>
                    <a href="<?php echo WHATSAPP_URL; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-lg">
                        <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
                    </a>
                </div>
            </div>
            <div style="text-align: center;">
                <div style="background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: var(--radius-xl); padding: 24px 20px; backdrop-filter: blur(10px); max-width: 320px; margin: 0 auto;">
                    <div style="font-size: 2.8rem; margin-bottom: 8px;">📱</div>
                    <h3 style="color: #FFFFFF; font-size: 1.15rem; margin-bottom: 6px;">Android App Live</h3>
                    <p style="font-size: 0.85rem; color: #CBD5E1; margin-bottom: 16px;">
                        Access 250+ timed papers, national rankings &amp; instant answer solutions.
                    </p>
                    <a href="<?php echo PLAYSTORE_URL; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-sm" style="width: 100%;">
                        <i class="fa-solid fa-arrow-down-to-bracket"></i> Install from Play Store
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- HERO MINI-QUIZ JAVASCRIPT HANDLER -->
<script>
function handleHeroAnswer(btn, isCorrect) {
    const feedback = document.getElementById('heroAnswerFeedback');
    const allBtns = document.querySelectorAll('#heroOptions button');
    allBtns.forEach(b => b.disabled = true);

    if (isCorrect) {
        btn.classList.add('correct');
        feedback.style.display = 'block';
        feedback.style.background = '#ECFDF5';
        feedback.style.color = '#065F46';
        feedback.innerHTML = '<strong>Brilliant! 🌟 The Sun is the closest star (approx. 150 million km).</strong> You earned +50 XP! <a href="/daily-quiz" style="color: #065F46; font-weight: 700; text-decoration: underline;">Play more questions &rarr;</a>';
    } else {
        btn.classList.add('wrong');
        allBtns[1].classList.add('correct'); // Highlight Sun
        feedback.style.display = 'block';
        feedback.style.background = '#FEF2F2';
        feedback.style.color = '#991B1B';
        feedback.innerHTML = '<strong>Nice try! The Sun is our nearest star.</strong> Proxima Centauri is the nearest star *after* the Sun. <a href="/daily-quiz" style="color: #991B1B; font-weight: 700; text-decoration: underline;">Try today\'s full quiz &rarr;</a>';
    }
}
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
