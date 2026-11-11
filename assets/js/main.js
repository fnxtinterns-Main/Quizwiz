/**
 * QuizWiz Main JavaScript
 * Handles mobile drawer, animated counters, interactive demo quiz player, and category filters.
 */

document.addEventListener('DOMContentLoaded', () => {
    // ----------------------------------------------------
    // 1. Mobile Drawer Navigation
    // ----------------------------------------------------
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const closeDrawerBtn = document.getElementById('closeDrawerBtn');
    const mobileDrawer = document.getElementById('mobileDrawer');
    const drawerBackdrop = document.getElementById('drawerBackdrop');

    function openMobileMenu() {
        if (mobileDrawer && drawerBackdrop) {
            mobileDrawer.classList.add('open');
            drawerBackdrop.classList.add('open');
            document.body.style.overflow = 'hidden';
        }
    }

    function closeMobileMenu() {
        if (mobileDrawer && drawerBackdrop) {
            mobileDrawer.classList.remove('open');
            drawerBackdrop.classList.remove('open');
            document.body.style.overflow = '';
        }
    }

    if (mobileMenuBtn) mobileMenuBtn.addEventListener('click', openMobileMenu);
    if (closeDrawerBtn) closeDrawerBtn.addEventListener('click', closeMobileMenu);
    if (drawerBackdrop) drawerBackdrop.addEventListener('click', closeMobileMenu);

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeMobileMenu();
    });

    // ----------------------------------------------------
    // 2. Animated Stats Counters with IntersectionObserver
    // ----------------------------------------------------
    const counterElements = document.querySelectorAll('[data-target-count]');

    if ('IntersectionObserver' in window && counterElements.length > 0) {
        const counterObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    const target = parseInt(el.getAttribute('data-target-count'), 10);
                    animateCounter(el, target);
                    observer.unobserve(el);
                }
            });
        }, { threshold: 0.3 });

        counterElements.forEach(el => counterObserver.observe(el));
    } else {
        counterElements.forEach(el => {
            el.textContent = el.getAttribute('data-target-count') + '+';
        });
    }

    function animateCounter(el, target) {
        let current = 0;
        const duration = 2000;
        const stepTime = 25;
        const totalSteps = duration / stepTime;
        const increment = target / totalSteps;

        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                el.textContent = target.toLocaleString('en-IN') + '+';
                clearInterval(timer);
            } else {
                el.textContent = Math.floor(current).toLocaleString('en-IN') + '+';
            }
        }, stepTime);
    }

    // ----------------------------------------------------
    // 3. Quiz Category Filter (For Quizzes Page)
    // ----------------------------------------------------
    const filterButtons = document.querySelectorAll('.quiz-filter-btn');
    const quizCards = document.querySelectorAll('.quiz-card-item');

    if (filterButtons.length > 0 && quizCards.length > 0) {
        filterButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                filterButtons.forEach(b => b.classList.remove('active', 'btn-primary'));
                filterButtons.forEach(b => b.classList.add('btn-outline-navy'));
                
                btn.classList.remove('btn-outline-navy');
                btn.classList.add('active', 'btn-primary');

                const filter = btn.getAttribute('data-filter');

                quizCards.forEach(card => {
                    const group = card.getAttribute('data-group') || '';
                    const diff = card.getAttribute('data-diff') || '';

                    if (filter === 'all' || group.includes(filter) || diff.toLowerCase() === filter) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    }

    // ----------------------------------------------------
    // 4. Interactive Quiz Player Modal (Preview Free Quiz)
    // ----------------------------------------------------
    window.openQuizModal = function(categoryTitle = 'G.K. Safari') {
        const modal = document.getElementById('quizModal');
        if (modal) {
            modal.classList.add('open');
            document.body.style.overflow = 'hidden';
            initQuizRunner(categoryTitle);
        }
    };

    window.closeQuizModal = function() {
        const modal = document.getElementById('quizModal');
        if (modal) {
            modal.classList.remove('open');
            document.body.style.overflow = '';
        }
    };

    // Quiz Questions Dataset (Injected from PHP or fallback array)
    const questions = window.quizWizSampleQuestions || [
        {
            q: "Which is the highest civilian award in India?",
            options: ["Padma Vibhushan", "Bharat Ratna", "Param Vir Chakra", "Padma Bhushan"],
            correct: 1,
            exp: "Bharat Ratna is the highest civilian award of the Republic of India."
        },
        {
            q: "Which planet is known as the 'Red Planet'?",
            options: ["Venus", "Jupiter", "Mars", "Mercury"],
            correct: 2,
            exp: "Mars is known as the Red Planet due to iron oxide on its surface."
        },
        {
            q: "What is the sum of interior angles in any triangle?",
            options: ["90°", "180°", "270°", "360°"],
            correct: 1,
            exp: "The interior angles of any triangle always equal 180°."
        }
    ];

    let currentQIndex = 0;
    let userScore = 0;

    function initQuizRunner(title) {
        currentQIndex = 0;
        userScore = 0;
        const titleEl = document.getElementById('modalQuizTitle');
        if (titleEl) titleEl.textContent = title + ' - Quick Practice';
        renderQuestion();
    }

    function renderQuestion() {
        const container = document.getElementById('quizQuestionContainer');
        if (!container) return;

        if (currentQIndex >= questions.length) {
            // Render Result
            container.innerHTML = `
                <div style="text-align: center; padding: 24px 0;">
                    <div style="font-size: 3rem; margin-bottom: 12px;">🏆</div>
                    <h3 style="color: var(--primary); margin-bottom: 8px;">Quiz Completed!</h3>
                    <p style="font-size: 1.15rem; color: var(--text-secondary); margin-bottom: 24px;">
                        You scored <strong>${userScore} out of ${questions.length}</strong>!
                    </p>
                    <p style="font-size: 0.95rem; color: var(--text-muted); margin-bottom: 24px;">
                        Want to compete with thousands of students across India and win awards?
                    </p>
                    <div style="display: flex; gap: 12px; justify-content: center; flex-wrap: wrap;">
                        <a href="/enroll" class="btn btn-primary">Enroll in Championship</a>
                        <button onclick="closeQuizModal()" class="btn btn-outline-navy">Close</button>
                    </div>
                </div>
            `;
            return;
        }

        const q = questions[currentQIndex];
        let optionsHtml = '';

        q.options.forEach((opt, idx) => {
            optionsHtml += `
                <button class="quiz-option-btn" data-index="${idx}">
                    <span style="font-weight: 700; color: var(--primary); min-width: 24px;">${String.fromCharCode(65 + idx)}.</span>
                    <span>${opt}</span>
                </button>
            `;
        });

        container.innerHTML = `
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; font-size: 0.85rem; color: var(--text-muted);">
                <span>Question ${currentQIndex + 1} of ${questions.length}</span>
                <span style="color: var(--secondary); font-weight: 600;">Score: ${userScore}</span>
            </div>
            <h4 style="font-size: 1.15rem; color: var(--primary); margin-bottom: 20px; line-height: 1.4;">
                ${q.q}
            </h4>
            <div class="options-group">
                ${optionsHtml}
            </div>
            <div id="explanationBox" style="display: none; padding: 12px; border-radius: 8px; font-size: 0.9rem; margin-top: 16px;"></div>
            <div style="margin-top: 20px; text-align: right;">
                <button id="nextQBtn" class="btn btn-navy btn-sm" style="display: none;">Next Question →</button>
            </div>
        `;

        const optionBtns = container.querySelectorAll('.quiz-option-btn');
        const expBox = document.getElementById('explanationBox');
        const nextBtn = document.getElementById('nextQBtn');

        optionBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const selected = parseInt(this.getAttribute('data-index'), 10);
                optionBtns.forEach(b => b.disabled = true);

                if (selected === q.correct) {
                    this.classList.add('correct');
                    userScore++;
                    expBox.style.display = 'block';
                    expBox.style.background = '#ECFDF5';
                    expBox.style.color = '#065F46';
                    expBox.innerHTML = `<strong>Correct!</strong> ${q.exp}`;
                } else {
                    this.classList.add('wrong');
                    optionBtns[q.correct].classList.add('correct');
                    expBox.style.display = 'block';
                    expBox.style.background = '#FEF2F2';
                    expBox.style.color = '#991B1B';
                    expBox.innerHTML = `<strong>Incorrect.</strong> ${q.exp}`;
                }

                nextBtn.style.display = 'inline-flex';
            });
        });

        nextBtn.addEventListener('click', () => {
            currentQIndex++;
            renderQuestion();
        });
    }
});
