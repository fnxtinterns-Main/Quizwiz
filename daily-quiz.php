<?php
$current_page = 'daily-quiz';
$page_title = 'Daily Quiz Challenge | QuizWiz';
$page_desc = 'Play QuizWiz Daily Quiz! New questions uploaded every day for Classes 1 to 12. Boost daily learning, earn certificates, and win rewards.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/data/quizzes.php';
?>

<!-- DAILY QUIZ HERO -->
<section style="background: linear-gradient(135deg, #1E1B4B 0%, #312E81 50%, #1E293B 100%); padding: 56px 0; color: #FFFFFF; position: relative;">
    <div class="container text-center">
        <div class="section-eyebrow" style="background: rgba(255, 107, 0, 0.2); color: #FF9E54; border-color: rgba(255, 107, 0, 0.4);">
            <i class="fa-solid fa-fire text-orange"></i> Fresh Daily Challenge Active
        </div>
        <h1 style="color: #FFFFFF; font-size: clamp(2.2rem, 4vw, 3.2rem); margin-bottom: 16px;">
            Today's <span style="color: var(--secondary);">Daily Quiz</span>
        </h1>
        <p style="color: #CBD5E1; max-width: 680px; margin: 0 auto 28px; font-size: 1.15rem; line-height: 1.6;">
            A new 5-minute brain sprint every single day! Complete today’s challenge to boost your knowledge, climb the daily leaderboard, and win national awards.
        </p>

        <!-- Target Banner -->
        <div style="display: inline-flex; align-items: center; gap: 12px; background: rgba(255, 255, 255, 0.08); backdrop-filter: blur(8px); padding: 10px 24px; border-radius: var(--radius-full); border: 1px solid rgba(255, 255, 255, 0.15);">
            <span style="font-size: 1.4rem;">🎯</span>
            <div style="text-align: left;">
                <div style="font-size: 0.72rem; text-transform: uppercase; color: #94A3B8; letter-spacing: 0.05em;">Today's Target</div>
                <div id="userTargetDisplay" style="font-size: 1.05rem; font-weight: 700; color: #FFA366;">100% Accuracy</div>
            </div>
        </div>
    </div>
</section>

<!-- MAIN QUIZ INTERACTIVE ARENA -->
<section class="section" style="padding-top: 40px; padding-bottom: 60px;">
    <div class="container" style="max-width: 800px;">
        <div class="form-card" style="box-shadow: var(--shadow-lg); border: 1.5px solid rgba(27, 37, 89, 0.12); padding: 32px;">
            <!-- Division Selector Tabs -->
            <div style="display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 12px; margin-bottom: 28px; border-bottom: 1.5px solid var(--border-light); padding-bottom: 16px;">
                <button id="groupABtn" onclick="switchDailyGroup('a')" class="btn btn-primary" aria-pressed="true" style="width: 100%; min-width: 0; height: 76px; min-height: 76px; padding: 6px; display: flex; flex-direction: column; gap: 3px; white-space: normal; overflow-wrap: anywhere; text-align: center; font-size: clamp(0.65rem, 1.5vw, 0.875rem); line-height: 1.15; box-sizing: border-box;">
                    <i class="fa-solid fa-shapes" aria-hidden="true"></i>
                    <span>Group A (Class 1–6)</span>
                </button>
                <button id="groupBBtn" onclick="switchDailyGroup('b')" class="btn btn-outline-navy" aria-pressed="false" style="width: 100%; min-width: 0; height: 76px; min-height: 76px; padding: 6px; display: flex; flex-direction: column; gap: 3px; white-space: normal; overflow-wrap: anywhere; text-align: center; font-size: clamp(0.65rem, 1.5vw, 0.875rem); line-height: 1.15; box-sizing: border-box;">
                    <i class="fa-solid fa-graduation-cap" aria-hidden="true"></i>
                    <span>Group B (Class 7–12)</span>
                </button>
                <button id="groupCBtn" onclick="switchDailyGroup('c')" class="btn btn-outline-navy" aria-pressed="false" title="Graduates and Aspirants Track: UPSC, PSC, SSC, and Defence" style="width: 100%; min-width: 0; height: 76px; min-height: 76px; padding: 6px; display: flex; flex-direction: column; gap: 3px; white-space: normal; overflow-wrap: anywhere; text-align: center; font-size: clamp(0.65rem, 1.5vw, 0.875rem); line-height: 1.15; box-sizing: border-box;">
                    <i class="fa-solid fa-user-graduate" aria-hidden="true"></i>
                    <span>Group C (Graduates &amp; Aspirants)</span>
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
                <h4 style="font-size: 0.95rem; margin-bottom: 4px;">Daily Open Access</h4>
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

    const groupCQuestions = [
        {
            q: "Which economic term describes a sustained rise in the general price level of goods and services?",
            options: ["Deflation", "Inflation", "Recession", "Depreciation"],
            correct: 1,
            exp: "Inflation is a sustained increase in the general price level of goods and services."
        },
        {
            q: "Which instrument is used to measure atmospheric pressure?",
            options: ["Thermometer", "Hygrometer", "Barometer", "Anemometer"],
            correct: 2,
            exp: "A barometer measures atmospheric pressure."
        },
        {
            q: "Which data structure follows the First In, First Out (FIFO) principle?",
            options: ["Queue", "Stack", "Tree", "Graph"],
            correct: 0,
            exp: "A queue processes items in the order they were added: first in, first out."
        },
        {
            q: "What does the letter 'D' stand for in Gross Domestic Product (GDP)?",
            options: ["Development", "Domestic", "Demand", "Distribution"],
            correct: 1,
            exp: "In GDP, 'Domestic' refers to production within a country's borders."
        }
    ];

    const questionSets = {
        a: groupAQuestions,
        b: groupBQuestions,
        c: groupCQuestions
    };

    window.switchDailyGroup = function(grp) {
        if (!Object.prototype.hasOwnProperty.call(questionSets, grp)) {
            throw new Error('Unsupported daily quiz group: ' + grp);
        }

        currentGroup = grp;
        currentIndex = 0;
        score = 0;
        const groupButtons = {
            a: document.getElementById('groupABtn'),
            b: document.getElementById('groupBBtn'),
            c: document.getElementById('groupCBtn')
        };
        const badge = document.getElementById('dailyCategoryBadge');
        const groupLabels = {
            a: 'Junior Division (Class 1–6)',
            b: 'Senior Division (Class 7–12)',
            c: 'Graduates & Aspirants Track (UPSC, PSC, SSC & Defence)'
        };

        Object.keys(groupButtons).forEach(key => {
            const selected = key === grp;
            groupButtons[key].className = selected ? 'btn btn-primary' : 'btn btn-outline-navy';
            groupButtons[key].setAttribute('aria-pressed', selected ? 'true' : 'false');
        });
        if (badge) {
            badge.textContent = groupLabels[grp];
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
        const dataset = questionSets[currentGroup];

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
                        <a href="https://wa.me/?text=I%20just%20scored%20${score}%2F${dataset.length}%20in%20today's%20QuizWiz%20Daily%20Quiz!%20Can%20you%20beat%20my%20score%3F%20Play%20%20here%3A%20https%3A%2F%2Fwww.quizwiz.co.in%2Fdaily-quiz" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-sm">
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
