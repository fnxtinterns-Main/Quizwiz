<?php
$current_page = 'about';
$page_title = 'About Us | All India Quiz Championships';
$page_desc = 'Learn about QuizWiz, our mission to develop academic curiosity, critical thinking, and competitive readiness among Indian school students.';

require_once __DIR__ . '/includes/header.php';
?>

<!-- PAGE HERO HEADER -->
<section style="background: linear-gradient(135deg, var(--primary) 0%, #10163A 100%); padding: 64px 0; color: #FFFFFF;">
    <div class="container text-center">
        <div class="section-eyebrow" style="background: rgba(255,255,255,0.1); color: #FFA366; border-color: rgba(255,255,255,0.2);">
            Empowering Young Minds
        </div>
        <h1 style="color: #FFFFFF; margin-bottom: 16px;">About QuizWiz</h1>
        <p style="color: #CBD5E1; max-width: 640px; margin: 0 auto; font-size: 1.15rem;">
            Building India’s brightest community of young thinkers, problem solvers, and national quiz champions.
        </p>
    </div>
</section>

<!-- SECTION 1: OUR MISSION -->
<section class="section">
    <div class="container">
        <div class="hero-grid" style="align-items: center;">
            <div>
                <div class="section-eyebrow">Our Vision &amp; Mission</div>
                <h2 style="margin-bottom: 20px;">Nurturing Intellectual Curiosity Beyond the Classroom</h2>
                <p>
                    The <strong>All India Quiz Championships (AIQC)</strong> by QuizWiz was founded with a singular conviction: learning is most profound when it is curious, competitive, and enjoyable.
                </p>
                <p>
                    While school curricula establish foundational knowledge, competitive quizzing develops lateral thinking, speed of synthesis, and real-world awareness. QuizWiz bridges classroom textbooks and global awareness by providing structured, age-appropriate challenges.
                </p>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 24px;">
                    <div style="border-left: 3px solid var(--secondary); padding-left: 16px;">
                        <h4 style="font-size: 1.1rem; margin-bottom: 6px;">Continuous Growth</h4>
                        <p style="font-size: 0.9rem; margin: 0;">Weekly challenges keep students in an active, habitual learning rhythm.</p>
                    </div>
                    <div style="border-left: 3px solid var(--primary); padding-left: 16px;">
                        <h4 style="font-size: 1.1rem; margin-bottom: 6px;">National Benchmark</h4>
                        <p style="font-size: 0.9rem; margin: 0;">Measure skills against peers from top institutions across all 28 states.</p>
                    </div>
                </div>
            </div>
            <div style="text-align: center;">
                <img src="/assets/images/ab2.jpg" alt="All India Quiz Championships Poster" style="max-width: 340px; width: 100%; border-radius: var(--radius-xl); box-shadow: var(--shadow-lg); display: inline-block;">
            </div>
        </div>
    </div>
</section>

<!-- SECTION 2: COMPETITION GROUPS -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <div class="section-eyebrow">Age-Appropriate Categories</div>
            <h2>Championship Divisions</h2>
            <p>Our syllabus and question models are calibrated into two distinct age groups to ensure fair, stimulating competition.</p>
        </div>

        <div class="divisions-grid">
            <div class="form-card" style="border-top: 4px solid var(--secondary);">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                    <span class="quiz-difficulty-badge" style="position: static; background: var(--secondary-surface); color: var(--secondary);">Group A</span>
                    <span style="font-weight: 700; color: var(--primary);">Classes 1 to 6</span>
                </div>
                <h3 style="margin-bottom: 12px;">Junior Explorer Division</h3>
                <p>
                    Designed to instill curiosity and love for reading. Covers fascinating animal facts, our solar system, basic environmental science, Indian national symbols, and fun logic puzzles.
                </p>
                <ul style="list-style: none; margin-bottom: 24px; display: flex; flex-direction: column; gap: 8px; font-size: 0.9rem; color: var(--text-secondary);">
                    <li><i class="fa-solid fa-check text-orange" style="margin-right: 8px;"></i> Visual &amp; image-based questions</li>
                    <li><i class="fa-solid fa-check text-orange" style="margin-right: 8px;"></i> Conceptual basics &amp; mental math</li>
                    <li><i class="fa-solid fa-check text-orange" style="margin-right: 8px;"></i> Encouraging, fun feedback explanations</li>
                </ul>
                <a href="/enroll?group=group-a" class="btn btn-outline-primary" style="width: 100%;">Enroll for Group A</a>
            </div>

            <div class="form-card" style="border-top: 4px solid var(--primary);">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                    <span class="quiz-difficulty-badge" style="position: static; background: var(--primary-surface); color: var(--primary);">Group B</span>
                    <span style="font-weight: 700; color: var(--primary);">Classes 7 to 12</span>
                </div>
                <h3 style="margin-bottom: 12px;">Senior Scholar Division</h3>
                <p>
                    A rigorous arena tailored for secondary and high school students preparing for Olympiads, NTSE, and competitive excellence. Covers contemporary science, history, geopolitics, and complex reasoning.
                </p>
                <ul style="list-style: none; margin-bottom: 24px; display: flex; flex-direction: column; gap: 8px; font-size: 0.9rem; color: var(--text-secondary);">
                    <li><i class="fa-solid fa-check text-blue" style="margin-right: 8px;"></i> Advanced analytical reasoning</li>
                    <li><i class="fa-solid fa-check text-blue" style="margin-right: 8px;"></i> Current affairs, economics &amp; world events</li>
                    <li><i class="fa-solid fa-check text-blue" style="margin-right: 8px;"></i> Olympiad &amp; NTSE aligned question banks</li>
                </ul>
                <a href="/enroll?group=group-b" class="btn btn-primary" style="width: 100%;">Enroll for Group B</a>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: CTA -->
<section class="section" style="text-align: center;">
    <div class="container" style="max-width: 720px;">
        <h2 style="margin-bottom: 16px;">Ready to Test Your School's Brightest?</h2>
        <p style="margin-bottom: 32px;" class="lead">
            Whether you are an individual student or a school administrator looking to enroll an entire batch, QuizWiz makes participation seamless and rewarding.
        </p>
        <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
            <a href="/enroll" class="btn btn-primary btn-lg">Enroll in Championship</a>
            <a href="<?php echo WHATSAPP_URL; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-lg">
                <i class="fa-brands fa-whatsapp"></i> WhatsApp Coordinator
            </a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
