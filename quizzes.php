<?php
$current_page = 'quizzes';
$page_title = 'Online Quizzes & Practice Tests';
$page_desc = 'Explore QuizWiz online quizzes across Science, General Knowledge, History, and Mathematics for school students.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/data/quizzes.php';
?>

<!-- PAGE HEADER -->
<section style="background: linear-gradient(135deg, var(--primary) 0%, #10163A 100%); padding: 64px 0; color: #FFFFFF;">
    <div class="container text-center">
        <div class="section-eyebrow" style="background: rgba(255,255,255,0.1); color: #FFA366; border-color: rgba(255,255,255,0.2);">
            Practice Arena
        </div>
        <h1 style="color: #FFFFFF; margin-bottom: 16px;">Explore Online Quizzes</h1>
        <p style="color: #CBD5E1; max-width: 680px; margin: 0 auto; font-size: 1.15rem;">
            Challenge your mind with subject-specific quizzes. Try a quick sample practice test in your browser or unlock full test series via our mobile app.
        </p>
    </div>
</section>

<!-- QUIZZES EXPLORATION -->
<section class="section">
    <div class="container">
        <!-- Interactive Category Filters -->
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 10px; margin-bottom: 40px;">
            <button class="btn btn-primary btn-sm quiz-filter-btn active" data-filter="all">All Quizzes</button>
            <button class="btn btn-outline-navy btn-sm quiz-filter-btn" data-filter="Group A">Group A (Class 1–6)</button>
            <button class="btn btn-outline-navy btn-sm quiz-filter-btn" data-filter="Group B">Group B (Class 7–12)</button>
            <button class="btn btn-outline-navy btn-sm quiz-filter-btn" data-filter="beginner">Beginner</button>
            <button class="btn btn-outline-navy btn-sm quiz-filter-btn" data-filter="advanced">Advanced</button>
        </div>

        <!-- Quiz Cards Grid -->
        <div class="quiz-grid">
            <?php foreach ($quiz_categories as $quiz): ?>
                <div class="quiz-card quiz-card-item" data-group="<?php echo htmlspecialchars($quiz['group']); ?>" data-diff="<?php echo htmlspecialchars($quiz['difficulty']); ?>">
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
                            <button onclick="openQuizModal('<?php echo htmlspecialchars(addslashes($quiz['title'])); ?>')" class="btn btn-primary" style="flex: 1;">
                                <i class="fa-solid fa-play"></i> Practice Free
                            </button>
                            <a href="<?php echo PLAYSTORE_URL; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline-navy" title="Unlock full series in App">
                                <i class="fa-brands fa-google-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- In-Browser Practice Notice -->
        <div style="margin-top: 64px; background: #FFFFFF; border: 1.5px dashed var(--secondary); border-radius: var(--radius-xl); padding: 32px; text-align: center;">
            <h3 style="color: var(--primary); margin-bottom: 8px;">Looking for Full Timed Olympiad Mock Tests?</h3>
            <p style="color: var(--text-secondary); max-width: 600px; margin: 0 auto 20px;">
                Download the official QuizWiz App on Android to access 250+ full-length competitive papers with negative marking, detailed explanations, and national ranks.
            </p>
            <div style="display: flex; gap: 12px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo PLAYSTORE_URL; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary">
                    <i class="fa-brands fa-google-play"></i> Get Android App
                </a>
                <a href="/enroll" class="btn btn-outline-navy">
                    <i class="fa-solid fa-clipboard-list"></i> Enroll for Next Championship
                </a>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
