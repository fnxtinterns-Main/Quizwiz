<?php
$current_page = 'daily-quiz';
$page_title = 'Free Daily Quiz Challenge | QuizWiz';
$page_desc = 'Play QuizWiz Free Daily Quiz! New questions uploaded every day for Classes 1 to 12. Boost daily learning, earn certificates, and win rewards.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/data/quizzes.php';
?>

<!-- DAILY QUIZ HERO -->
<section style="background: linear-gradient(135deg, #1E1B4B 0%, #312E81 50%, #1E293B 100%); padding: 64px 0 80px; color: #FFFFFF; position: relative; overflow: hidden;">
    <div class="container text-center" style="position: relative; z-index: 2;">
        <div class="section-eyebrow" style="background: rgba(255, 107, 0, 0.2); color: #FF9E54; border-color: rgba(255, 107, 0, 0.4);">
            <i class="fa-solid fa-fire text-orange"></i> Fresh Daily Challenge Active
        </div>
        <h1 style="color: #FFFFFF; font-size: clamp(2.2rem, 4vw, 3.2rem); margin-bottom: 16px;">
            Today's <span style="color: var(--secondary);">Daily Free Quiz</span>
        </h1>
        <p style="color: #CBD5E1; max-width: 680px; margin: 0 auto 32px; font-size: 1.15rem;">
            A new 5-minute brain sprint every single day! Complete today’s challenge to boost your knowledge, climb the daily leaderboard, and win national awards.
        </p>

        <!-- Target Banner -->
        <div style="display: inline-flex; align-items: center; gap: 12px; background: rgba(255, 255, 255, 0.08); backdrop-filter: blur(8px); padding: 12px 28px; border-radius: var(--radius-full); border: 1px solid rgba(255, 255, 255, 0.15);">
            <span style="font-size: 1.5rem;">🎯</span>
            <div style="text-align: left;">
                <div style="font-size: 0.75rem; text-transform: uppercase; color: #94A3B8;">Today's Target</div>
                <div id="userTargetDisplay" style="font-size: 1.1rem; font-weight: 700; color: #FFA366;">100% Accuracy</div>
            </div>
        </div>
    </div>
</section>

<!-- MAIN QUIZ INTERACTIVE ARENA -->
<section class="section" style="margin-top: -40px; padding-top: 0;">
    <div class="container" style="max-width: 800px;">
        <div class="form-card" style="box-shadow: var(--shadow-xl); border: 1.5px solid rgba(27, 37, 89, 0.12);">
            <!-- Division Selector Tabs -->
            <div style="display: flex; gap: 12px; margin-bottom: 28px; border-bottom: 1.5px solid var(--border-light); padding-bottom: 16px;">
                <button id="groupABtn" onclick="switchDailyGroup('a')" class="btn btn-primary" style="flex: 1;">
                    <i class="fa-solid fa-shapes"></i> Group A (Class 1–6)
                </button>
                <button id="groupBBtn" onclick="switchDailyGroup('b')" class="btn btn-outline-navy" style="flex: 1;">
                    <i class="fa-solid fa-graduation-cap"></i> Group B (Class 7–12)
                </button>
            </div>

            <!-- Quiz Runner Card -->
            <div id="dailyQuizRunner">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                    <div>
                        <span id="dailyCategoryBadge" class="quiz-difficulty-badge" style="position: static; background: var(--secondary-surface); color: var(--secondary);">
                            Science &amp; Nature Sprint
                        </span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 8px; font-weight: 700; color: var(--primary);">
                        <i class="fa-regular fa-clock text-orange"></i>
                        <span id="dailyTimer">45s</span>
                    </div>
                </div>

                <div id="dailyQuestionArea">
                    <!-- Populated dynamically via JS -->
                </div>
            </div>
        </div>

        <!-- Daily Perks Card -->
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; margin-top: 24px;">
            <div class="form-card" style="text-align: center; padding: 20px 16px;">
                <div style="font-size: 2rem; margin-bottom: 8px;">🎯</div>
                <h4 style="font-size: 0.95rem; margin-bottom: 4px;">Daily 100% Free</h4>
                <p style="font-size: 0.8rem; margin: 0; color: var(--text-muted);">No login or card required for daily practice.</p>
            </div>
            <div class="form-card" style="text-align: center; padding: 20px 16px;">
                <div style="font-size: 2rem; margin-bottom: 8px;">🏅</div>
                <h4 style="font-size: 0.95rem; margin-bottom: 4px;">Merit Certificates</h4>
                <p style="font-size: 0.8rem; margin: 0; color: var(--text-muted);">Unlock verified merit certificates &amp; awards.</p>
            </div>
            <div class="form-card" style="text-align: center; padding: 20px 16px;">
                <div style="font-size: 2rem; margin-bottom: 8px;">📱</div>
                <h4 style="font-size: 0.95rem; margin-bottom: 4px;">Full Test Series</h4>
                <p style="font-size: 0.8rem; margin: 0; color: var(--text-muted);">Unlock 250+ timed papers in mobile app.</p>
            </div>
        </div>
    </div>
</section>

<!-- SCRIPT FOR DAILY QUIZ RUNNER -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    let currentGroup = 'a';
    let currentIndex = 0;
    let score = 0;
    let timerInterval = null;
    let timeLeft = 45;

    const groupAQuestions = [
        {
            q: "Which gas do green plants absorb from the air during photosynthesis?",
            options: ["Oxygen", "Carbon Dioxide", "Nitrogen", "Hydrogen"],
            correct: 1,
            exp: "Plants absorb Carbon Dioxide (CO2) and release Oxygen during photosynthesis."
        },
        {
            q: "What is the capital city of India?",
            options: ["Mumbai", "Kolkata", "New Delhi", "Chennai"],
            correct: 2,
            exp: "New Delhi is the official national capital of India."
        },
        {
            q: "How many sides does a regular hexagon have?",
            options: ["5", "6", "7", "8"],
            correct: 1,
            exp: "A hexagon has 6 straight sides and 6 angles."
        }
    ];

    const groupBQuestions = [
        {
            q: "Who is known as the 'Father of the Indian Constitution'?",
            options: ["Mahatma Gandhi", "Dr. B.R. Ambedkar", "Jawaharlal Nehru", "Dr. Rajendra Prasad"],
            correct: 1,
            exp: "Dr. Bhimrao Ramji Ambedkar served as the chairman of the drafting committee."
        },
        {
            q: "What is the SI unit of electrical resistance?",
            options: ["Volt", "Ampere", "Ohm", "Watt"],
            correct: 2,
            exp: "The Ohm (symbol: Ω) is the SI unit of electrical resistance."
        },
        {
            q: "If 2x + 7 = 19, what is the value of x?",
            options: ["4", "5", "6", "7"],
            correct: 2,
            exp: "2x = 19 - 7 = 12. Therefore, x = 12 / 2 = 6."
        }
    ];

    window.switchDailyGroup = function(grp) {
        currentGroup = grp;
        currentIndex = 0;
        score = 0;
        const btnA = document.getElementById('groupABtn');
        const btnB = document.getElementById('groupBBtn');
        const badge = document.getElementById('dailyCategoryBadge');

        if (grp === 'a') {
            btnA.className = 'btn btn-primary';
            btnB.className = 'btn btn-outline-navy';
            badge.textContent = 'Junior Division (Class 1–6)';
        } else {
            btnB.className = 'btn btn-primary';
            btnA.className = 'btn btn-outline-navy';
            badge.textContent = 'Senior Division (Class 7–12)';
        }
        loadQuestion();
    };

    function startTimer() {
        clearInterval(timerInterval);
        timeLeft = 45;
        const timerEl = document.getElementById('dailyTimer');
        if (timerEl) timerEl.textContent = timeLeft + 's';

        timerInterval = setInterval(() => {
            timeLeft--;
            if (timerEl) timerEl.textContent = timeLeft + 's';
            if (timeLeft <= 0) {
                clearInterval(timerInterval);
                handleTimeOut();
            }
        }, 1000);
    }

    function handleTimeOut() {
        const area = document.getElementById('dailyQuestionArea');
        const btns = area.querySelectorAll('.quiz-option-btn');
        btns.forEach(b => b.disabled = true);
        const nextBtn = document.getElementById('dailyNextBtn');
        if (nextBtn) nextBtn.style.display = 'inline-flex';
    }

    function loadQuestion() {
        startTimer();
        const area = document.getElementById('dailyQuestionArea');
        const dataset = (currentGroup === 'a') ? groupAQuestions : groupBQuestions;

        if (currentIndex >= dataset.length) {
            clearInterval(timerInterval);
            const accuracyPct = Math.round((score / dataset.length) * 100);

            area.innerHTML = `
                <div style="text-align: center; padding: 32px 0;">
                    <div style="font-size: 3.5rem; margin-bottom: 12px;">🎉</div>
                    <h3 style="color: var(--primary); font-size: 1.5rem; margin-bottom: 8px;">Daily Quiz Completed!</h3>
                    <p style="font-size: 1.15rem; color: var(--text-secondary); margin-bottom: 16px;">
                        You scored <strong>${score} out of ${dataset.length}</strong> (${accuracyPct}% Accuracy)!
                    </p>
                    <div style="background: var(--primary-surface); padding: 16px; border-radius: var(--radius-lg); margin: 0 auto 24px; max-width: 480px;">
                        <h4 style="font-size: 1rem; color: var(--primary); margin-bottom: 4px;">🏆 Share with Friends on WhatsApp</h4>
                        <p style="font-size: 0.85rem; color: var(--text-secondary); margin-bottom: 12px;">Challenge your school classmates to beat your score!</p>
                        <a href="https://wa.me/?text=I%20just%20scored%20${score}%2F${dataset.length}%20in%20today's%20QuizWiz%20Daily%20Quiz!%20Can%20you%20beat%20my%20score%3F%20Play%20free%20here%3A%20https%3A%2F%2Fwww.quizwiz.co.in%2Fdaily-quiz" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-sm">
                            <i class="fa-brands fa-whatsapp"></i> Share on WhatsApp
                        </a>
                    </div>
                    <div style="display: flex; gap: 12px; justify-content: center; flex-wrap: wrap;">
                        <a href="/enroll" class="btn btn-primary">Enroll for National Championships</a>
                        <button onclick="switchDailyGroup('${currentGroup}')" class="btn btn-outline-navy">Re-attempt Quiz</button>
                    </div>
                </div>
            `;
            return;
        }

        const q = dataset[currentIndex];
        let optionsHtml = '';
        q.options.forEach((opt, idx) => {
            optionsHtml += `
                <button class="quiz-option-btn" data-index="${idx}">
                    <span style="font-weight: 700; color: var(--primary); min-width: 24px;">${String.fromCharCode(65 + idx)}.</span>
                    <span>${opt}</span>
                </button>
            `;
        });

        area.innerHTML = `
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px; font-size: 0.85rem; color: var(--text-muted);">
                <span>Question ${currentIndex + 1} of ${dataset.length}</span>
                <span style="color: var(--secondary); font-weight: 700;">Score: ${score}</span>
            </div>
            <h3 style="font-size: 1.25rem; color: var(--primary); margin-bottom: 20px; line-height: 1.4;">
                ${q.q}
            </h3>
            <div class="options-group">
                ${optionsHtml}
            </div>
            <div id="dailyExpBox" style="display: none; padding: 12px 16px; border-radius: 8px; font-size: 0.9rem; margin-top: 16px;"></div>
            <div style="margin-top: 24px; text-align: right;">
                <button id="dailyNextBtn" class="btn btn-navy" style="display: none;">Next Question →</button>
            </div>
        `;

        const optionBtns = area.querySelectorAll('.quiz-option-btn');
        const expBox = document.getElementById('dailyExpBox');
        const nextBtn = document.getElementById('dailyNextBtn');

        optionBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                clearInterval(timerInterval);
                const selected = parseInt(this.getAttribute('data-index'), 10);
                optionBtns.forEach(b => b.disabled = true);

                if (selected === q.correct) {
                    this.classList.add('correct');
                    score++;
                    expBox.style.display = 'block';
                    expBox.style.background = '#ECFDF5';
                    expBox.style.color = '#065F46';
                    expBox.innerHTML = `<strong>Correct! 🌟</strong> ${q.exp}`;
                } else {
                    this.classList.add('wrong');
                    optionBtns[q.correct].classList.add('correct');
                    expBox.style.display = 'block';
                    expBox.style.background = '#FEF2F2';
                    expBox.style.color = '#991B1B';
                    expBox.innerHTML = `<strong>Incorrect. 💡</strong> ${q.exp}`;
                }

                nextBtn.style.display = 'inline-flex';
            });
        });

        nextBtn.addEventListener('click', () => {
            currentIndex++;
            loadQuestion();
        });
    }

    loadQuestion();
});
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
