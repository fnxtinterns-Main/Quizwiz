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
                <img src="/assets/images/ab2.jpg" alt="All India Quiz Championships Poster" loading="lazy" decoding="async" style="max-width: 340px; width: 100%; border-radius: var(--radius-xl); box-shadow: var(--shadow-lg); display: inline-block;">
            </div>
        </div>
    </div>
</section>

<!-- SECTION 2: COMPETITION GROUPS -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <div class="section-eyebrow">Age-Appropriate &amp; Career Tracks</div>
            <h2>Championship Divisions</h2>
            <p>Our syllabus and question models are calibrated into three distinct divisions to ensure fair, stimulating, and targeted competitive preparation from school to civil services.</p>
        </div>

        <div class="divisions-grid">
            <!-- Group A: Junior Explorer -->
            <div class="form-card" style="border-top: 4px solid var(--secondary); display: flex; flex-direction: column;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                    <span class="quiz-difficulty-badge" style="position: static; background: var(--secondary-surface); color: var(--secondary);">Group A</span>
                    <span style="font-weight: 700; color: var(--primary);">Classes 1 to 6</span>
                </div>
                <h3 style="margin-bottom: 12px; font-size: 1.25rem;">Junior Explorer Division</h3>
                <p style="font-size: 0.92rem; line-height: 1.6; margin-bottom: 20px;">
                    Designed to instill curiosity and love for reading. Covers fascinating animal facts, our solar system, basic environmental science, Indian national symbols, and fun logic puzzles.
                </p>
                <ul style="list-style: none; margin-bottom: 24px; display: flex; flex-direction: column; gap: 10px; font-size: 0.88rem; color: var(--text-secondary); padding: 0;">
                    <li><i class="fa-solid fa-check text-orange" style="margin-right: 8px;"></i> Visual &amp; image-based questions</li>
                    <li><i class="fa-solid fa-check text-orange" style="margin-right: 8px;"></i> Conceptual basics &amp; mental math</li>
                    <li><i class="fa-solid fa-check text-orange" style="margin-right: 8px;"></i> Encouraging, fun feedback explanations</li>
                </ul>
                <div style="margin-top: auto;">
                    <a href="/enroll?group=group-a" class="btn btn-outline-primary" style="width: 100%;">Enroll for Group A</a>
                </div>
            </div>

            <!-- Group B: Senior Scholar -->
            <div class="form-card" style="border-top: 4px solid var(--primary); display: flex; flex-direction: column;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                    <span class="quiz-difficulty-badge" style="position: static; background: var(--primary-surface); color: var(--primary);">Group B</span>
                    <span style="font-weight: 700; color: var(--primary);">Classes 7 to 12</span>
                </div>
                <h3 style="margin-bottom: 12px; font-size: 1.25rem;">Senior Scholar Division</h3>
                <p style="font-size: 0.92rem; line-height: 1.6; margin-bottom: 20px;">
                    A rigorous arena tailored for secondary and high school students preparing for Olympiads, NTSE, and competitive excellence. Covers contemporary science, history, geopolitics, and complex reasoning.
                </p>
                <ul style="list-style: none; margin-bottom: 24px; display: flex; flex-direction: column; gap: 10px; font-size: 0.88rem; color: var(--text-secondary); padding: 0;">
                    <li><i class="fa-solid fa-check text-blue" style="margin-right: 8px;"></i> Advanced analytical reasoning</li>
                    <li><i class="fa-solid fa-check text-blue" style="margin-right: 8px;"></i> Current affairs, economics &amp; world events</li>
                    <li><i class="fa-solid fa-check text-blue" style="margin-right: 8px;"></i> Olympiad &amp; NTSE aligned question banks</li>
                </ul>
                <div style="margin-top: auto;">
                    <a href="/enroll?group=group-b" class="btn btn-outline-primary" style="width: 100%;">Enroll for Group B</a>
                </div>
            </div>

            <!-- Group C: Civil Services & Graduate Aspirants -->
            <div class="form-card" style="border-top: 4px solid #10B981; display: flex; flex-direction: column; background: #FAFCFF; box-shadow: 0 4px 20px rgba(16, 185, 129, 0.08);">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                    <span class="quiz-difficulty-badge" style="position: static; background: #ECFDF5; color: #047857; font-weight: 700;">Group C</span>
                    <span style="font-weight: 700; color: #047857;">Graduates &amp; Aspirants</span>
                </div>
                <h3 style="margin-bottom: 12px; font-size: 1.25rem;">Civil Services &amp; Aspirants Track</h3>
                <p style="font-size: 0.92rem; line-height: 1.6; margin-bottom: 20px;">
                    Engineered for college students, degree holders, and civil services aspirants. Bridges static General Studies (Polity, History, Economy, Geography, Sci-Tech) with high-yield dynamic current affairs across 60+ competitive exams.
                </p>
                <ul style="list-style: none; margin-bottom: 24px; display: flex; flex-direction: column; gap: 10px; font-size: 0.88rem; color: var(--text-secondary); padding: 0;">
                    <li><i class="fa-solid fa-check" style="color: #10B981; margin-right: 8px;"></i> UPSC, State PSC, SSC &amp; Defence coverage</li>
                    <li><i class="fa-solid fa-check" style="color: #10B981; margin-right: 8px;"></i> Daily static-to-current linkage quizzes</li>
                    <li><i class="fa-solid fa-check" style="color: #10B981; margin-right: 8px;"></i> High-yield 60-day syllabus &amp; national ranks</li>
                </ul>
                <div style="margin-top: auto;">
                    <a href="/enroll?group=group-c" class="btn btn-primary" style="width: 100%; background: #059669; border-color: #059669;">
                        <i class="fa-solid fa-graduation-cap"></i> Enroll for Group C
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: EXAM COVERAGE & GK/GS WEIGHTAGE MATRIX -->
<section id="exam-matrix" class="section">
    <div class="container">
        <div class="section-header">
            <div class="section-eyebrow" style="background: rgba(16, 185, 129, 0.1); color: #047857; border-color: rgba(16, 185, 129, 0.2);">
                QuizWiz Academy • Comprehensive Coverage
            </div>
            <h2>Where GK, GS &amp; Current Affairs Are Asked</h2>
            <p>
                <strong>60+ Exams | One Systematic Preparation, Multiple Selections.</strong><br>
                Explore the official syllabus share, subject weightage, and high-yield focus areas for every major public service and government recruitment exam in India.
            </p>
        </div>

        <!-- Real-Time Search & Category Filters -->
        <div style="max-width: 680px; margin: 0 auto 24px; position: relative;">
            <i class="fa-solid fa-magnifying-glass" style="position: absolute; left: 16px; top: 50%; transform: translateY(-50%); color: var(--text-muted);"></i>
            <input type="text" id="examSearchInput" placeholder="Search by exam name (e.g. UPSC CSE, NDA, SSC CGL, BPSC, Bank PO, CLAT, RRB NTPC)..." style="width: 100%; padding: 14px 16px 14px 44px; border: 1.5px solid var(--border-light); border-radius: var(--radius-full); font-size: 0.95rem; font-family: var(--font-body); box-shadow: var(--shadow-sm); outline: none; transition: border-color var(--transition-fast);">
        </div>

        <div class="exam-filter-bar">
            <button class="exam-filter-btn active" data-category="all">All 10 Exam Groups (60+ Exams)</button>
            <button class="exam-filter-btn" data-category="upsc">UPSC &amp; Civil Services</button>
            <button class="exam-filter-btn" data-category="defence">Defence Services</button>
            <button class="exam-filter-btn" data-category="law">Law (CLAT / AILET)</button>
            <button class="exam-filter-btn" data-category="ssc">Staff Selection (SSC)</button>
            <button class="exam-filter-btn" data-category="banking">Banking &amp; Insurance</button>
            <button class="exam-filter-btn" data-category="railway">Railways (RRB)</button>
            <button class="exam-filter-btn" data-category="state-psc">State PSCs</button>
            <button class="exam-filter-btn" data-category="teaching">Teaching &amp; UGC</button>
            <button class="exam-filter-btn" data-category="police">Police &amp; Paramilitary</button>
            <button class="exam-filter-btn" data-category="entrance">CUET &amp; Entrances</button>
        </div>

        <!-- 10 Comprehensive Exam Group Cards -->
        <div class="exam-matrix-grid" id="examCardsGrid">
            
            <!-- Group 1: UPSC -->
            <div class="exam-matrix-card" data-category="upsc" data-search="upsc cse ias ips ifs capf ac epfo eo ao apfc cms geo-scientist ies iss ese gs civil services">
                <div class="exam-matrix-header">
                    <div>
                        <div style="font-size: 0.78rem; font-weight: 700; color: #D97706; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 4px;">Group 1 • Union Public Service Commission</div>
                        <h3 style="font-size: 1.2rem; margin: 0; color: var(--primary);">UPSC &amp; Central Civil Services</h3>
                    </div>
                    <span class="exam-weightage-pill weightage-high">
                        <i class="fa-solid fa-chart-pie"></i> 40% – 60% Weightage
                    </span>
                </div>
                <div class="exam-progress-wrap">
                    <div class="exam-progress-bar" style="width: 55%; background: linear-gradient(90deg, #F59E0B, #D97706);"></div>
                </div>
                <p style="font-size: 0.85rem; color: var(--text-muted); margin-bottom: 10px; font-weight: 600;">Key Examinations Covered:</p>
                <div class="exam-chips">
                    <span class="exam-chip">CSE (IAS / IPS / IFS)</span>
                    <span class="exam-chip">CAPF AC</span>
                    <span class="exam-chip">EPFO EO / AO / APFC</span>
                    <span class="exam-chip">CMS</span>
                    <span class="exam-chip">Geo-Scientist</span>
                    <span class="exam-chip">IES / ISS</span>
                    <span class="exam-chip">ESE GS Paper</span>
                </div>
                <div style="background: #F8FAFC; border-left: 3px solid #D97706; padding: 12px 14px; border-radius: 6px; margin-top: auto;">
                    <strong style="display: block; font-size: 0.85rem; color: var(--primary); margin-bottom: 4px;">
                        <i class="fa-solid fa-bullseye text-orange"></i> High-Yield Syllabus Focus:
                    </strong>
                    <span style="font-size: 0.82rem; color: var(--text-secondary); line-height: 1.5;">
                        Deep current affairs + static linkage across Indian Constitution &amp; Polity, Macroeconomics, Biodiversity &amp; Wildlife conservation, Climate Summits, and Space/Biotech missions. Multi-statement conceptual MCQs.
                    </span>
                </div>
            </div>

            <!-- Group 2: Defence -->
            <div class="exam-matrix-card" data-category="defence" data-search="defence nda gat cds general knowledge afcat agniveer army navy airforce coast guard">
                <div class="exam-matrix-header">
                    <div>
                        <div style="font-size: 0.78rem; font-weight: 700; color: #2563EB; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 4px;">Group 2 • Armed Forces &amp; Defence Services</div>
                        <h3 style="font-size: 1.2rem; margin: 0; color: var(--primary);">Defence Forces (NDA / CDS / AFCAT)</h3>
                    </div>
                    <span class="exam-weightage-pill weightage-high">
                        <i class="fa-solid fa-shield-halved"></i> 25% – 67% Weightage
                    </span>
                </div>
                <div class="exam-progress-wrap">
                    <div class="exam-progress-bar" style="width: 65%; background: linear-gradient(90deg, #3B82F6, #1D4ED8);"></div>
                </div>
                <p style="font-size: 0.85rem; color: var(--text-muted); margin-bottom: 10px; font-weight: 600;">Key Examinations Covered:</p>
                <div class="exam-chips">
                    <span class="exam-chip">NDA (400 Marks in GAT Paper)</span>
                    <span class="exam-chip">CDS (100 Marks Dedicated GK Paper)</span>
                    <span class="exam-chip">AFCAT (50% GA Section)</span>
                    <span class="exam-chip">Agniveer Army / Navy / Air Force</span>
                    <span class="exam-chip">Indian Coast Guard</span>
                </div>
                <div style="background: #F8FAFC; border-left: 3px solid #2563EB; padding: 12px 14px; border-radius: 6px; margin-top: auto;">
                    <strong style="display: block; font-size: 0.85rem; color: var(--primary); margin-bottom: 4px;">
                        <i class="fa-solid fa-bullseye text-blue"></i> High-Yield Syllabus Focus:
                    </strong>
                    <span style="font-size: 0.82rem; color: var(--text-secondary); line-height: 1.5;">
                        NCERT General Science (Physics, Chemistry, Biology), Physical &amp; World Geography (monsoons, ocean currents), Defence technology, Bilateral war exercises (e.g. Tarang Shakti, Malabar), and National Security events.
                    </span>
                </div>
            </div>

            <!-- Group 3: Law -->
            <div class="exam-matrix-card" data-category="law" data-search="law clat ailet slat mh cet law national law universities supreme court legal gk">
                <div class="exam-matrix-header">
                    <div>
                        <div style="font-size: 0.78rem; font-weight: 700; color: #7C3AED; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 4px;">Group 3 • National Law Universities &amp; Judicial Entrances</div>
                        <h3 style="font-size: 1.2rem; margin: 0; color: var(--primary);">Law Entrances (CLAT &amp; AILET)</h3>
                    </div>
                    <span class="exam-weightage-pill weightage-mid">
                        <i class="fa-solid fa-scale-balanced"></i> 20% – 25% Weightage
                    </span>
                </div>
                <div class="exam-progress-wrap">
                    <div class="exam-progress-bar" style="width: 25%; background: linear-gradient(90deg, #8B5CF6, #6D28D9);"></div>
                </div>
                <p style="font-size: 0.85rem; color: var(--text-muted); margin-bottom: 10px; font-weight: 600;">Key Examinations Covered:</p>
                <div class="exam-chips">
                    <span class="exam-chip">CLAT (25% Direct Weightage in Passage Format)</span>
                    <span class="exam-chip">AILET (NLU Delhi)</span>
                    <span class="exam-chip">SLAT (Symbiosis)</span>
                    <span class="exam-chip">MH CET Law</span>
                    <span class="exam-chip">CUET Law</span>
                </div>
                <div style="background: #F8FAFC; border-left: 3px solid #7C3AED; padding: 12px 14px; border-radius: 6px; margin-top: auto;">
                    <strong style="display: block; font-size: 0.85rem; color: var(--primary); margin-bottom: 4px;">
                        <i class="fa-solid fa-bullseye" style="color: #7C3AED;"></i> High-Yield Syllabus Focus:
                    </strong>
                    <span style="font-size: 0.82rem; color: var(--text-secondary); line-height: 1.5;">
                        Contemporary legal developments, landmark Supreme Court constitutional bench verdicts, Article 32 &amp; Fundamental Rights, International Court of Justice, treaties, and major persons in news.
                    </span>
                </div>
            </div>

            <!-- Group 4: SSC -->
            <div class="exam-matrix-card" data-category="ssc" data-search="ssc cgl chsl cpo mts gd constable stenographer staff selection commission static gk">
                <div class="exam-matrix-header">
                    <div>
                        <div style="font-size: 0.78rem; font-weight: 700; color: #EA580C; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 4px;">Group 4 • Staff Selection Commission</div>
                        <h3 style="font-size: 1.2rem; margin: 0; color: var(--primary);">SSC CGL, CHSL, CPO &amp; GD</h3>
                    </div>
                    <span class="exam-weightage-pill weightage-mid">
                        <i class="fa-solid fa-award"></i> 25% (Tier-1 + Tier-2 Merit)
                    </span>
                </div>
                <div class="exam-progress-wrap">
                    <div class="exam-progress-bar" style="width: 25%; background: linear-gradient(90deg, #F97316, #C2410C);"></div>
                </div>
                <p style="font-size: 0.85rem; color: var(--text-muted); margin-bottom: 10px; font-weight: 600;">Key Examinations Covered:</p>
                <div class="exam-chips">
                    <span class="exam-chip">SSC CGL (50 Marks in Tier-1 + Rank Maker in Tier-2)</span>
                    <span class="exam-chip">SSC CHSL (10+2)</span>
                    <span class="exam-chip">SSC CPO (Sub-Inspector in Delhi Police / CAPF)</span>
                    <span class="exam-chip">SSC MTS &amp; Havaldar</span>
                    <span class="exam-chip">SSC GD Constable</span>
                    <span class="exam-chip">Stenographer</span>
                </div>
                <div style="background: #F8FAFC; border-left: 3px solid #EA580C; padding: 12px 14px; border-radius: 6px; margin-top: auto;">
                    <strong style="display: block; font-size: 0.85rem; color: var(--primary); margin-bottom: 4px;">
                        <i class="fa-solid fa-bullseye text-orange"></i> High-Yield Syllabus Focus:
                    </strong>
                    <span style="font-size: 0.82rem; color: var(--text-secondary); line-height: 1.5;">
                        Static GK heavy (Indian Art &amp; Culture, Classical/Folk Dances, Mughal/British Architecture, Constitutional Articles, Rivers &amp; Dams) plus Last 6–8 Months National Current Affairs, Sports &amp; Awards.
                    </span>
                </div>
            </div>

            <!-- Group 5: Banking -->
            <div class="exam-matrix-card" data-category="banking" data-search="banking insurance sbi po clerk ibps po clerk rbi grade b assistant lic aao ado niacl general awareness">
                <div class="exam-matrix-header">
                    <div>
                        <div style="font-size: 0.78rem; font-weight: 700; color: #0284C7; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 4px;">Group 5 • Banking, Regulatory &amp; Insurance</div>
                        <h3 style="font-size: 1.2rem; margin: 0; color: var(--primary);">Banking (SBI / IBPS / RBI Grade B)</h3>
                    </div>
                    <span class="exam-weightage-pill weightage-mid">
                        <i class="fa-solid fa-building-columns"></i> 20% – 25% General Awareness
                    </span>
                </div>
                <div class="exam-progress-wrap">
                    <div class="exam-progress-bar" style="width: 25%; background: linear-gradient(90deg, #38BDF8, #0369A1);"></div>
                </div>
                <p style="font-size: 0.85rem; color: var(--text-muted); margin-bottom: 10px; font-weight: 600;">Key Examinations Covered:</p>
                <div class="exam-chips">
                    <span class="exam-chip">RBI Grade B &amp; Assistant</span>
                    <span class="exam-chip">SBI PO &amp; Junior Associate (Clerk)</span>
                    <span class="exam-chip">IBPS PO, Clerk &amp; RRB Officer</span>
                    <span class="exam-chip">LIC AAO / ADO</span>
                    <span class="exam-chip">NIACL AO &amp; NABARD Grade A</span>
                </div>
                <div style="background: #F8FAFC; border-left: 3px solid #0284C7; padding: 12px 14px; border-radius: 6px; margin-top: auto;">
                    <strong style="display: block; font-size: 0.85rem; color: var(--primary); margin-bottom: 4px;">
                        <i class="fa-solid fa-bullseye" style="color: #0284C7;"></i> High-Yield Syllabus Focus:
                    </strong>
                    <span style="font-size: 0.82rem; color: var(--text-secondary); line-height: 1.5;">
                        Banking and Financial Awareness, RBI circulars, Monetary Policy (Repo, LAF, PCA Framework), Union Budget, Economic Survey, and flagship Government welfare schemes (PM Jan Dhan, PM Vishwakarma) from the last 4–6 months.
                    </span>
                </div>
            </div>

            <!-- Group 6: Railway -->
            <div class="exam-matrix-card" data-category="railway" data-search="railway rrb ntpc group d alp assistant loco pilot rpf si constable general science">
                <div class="exam-matrix-header">
                    <div>
                        <div style="font-size: 0.78rem; font-weight: 700; color: #059669; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 4px;">Group 6 • Railway Recruitment Board</div>
                        <h3 style="font-size: 1.2rem; margin: 0; color: var(--primary);">Railways (RRB NTPC, Group D &amp; ALP)</h3>
                    </div>
                    <span class="exam-weightage-pill weightage-mid">
                        <i class="fa-solid fa-train"></i> 20% – 30% Weightage
                    </span>
                </div>
                <div class="exam-progress-wrap">
                    <div class="exam-progress-bar" style="width: 30%; background: linear-gradient(90deg, #10B981, #047857);"></div>
                </div>
                <p style="font-size: 0.85rem; color: var(--text-muted); margin-bottom: 10px; font-weight: 600;">Key Examinations Covered:</p>
                <div class="exam-chips">
                    <span class="exam-chip">RRB NTPC (Graduate &amp; Under-Graduate)</span>
                    <span class="exam-chip">RRB Group D (Level 1)</span>
                    <span class="exam-chip">RRB ALP (Assistant Loco Pilot)</span>
                    <span class="exam-chip">RPF Sub-Inspector &amp; Constable</span>
                </div>
                <div style="background: #F8FAFC; border-left: 3px solid #059669; padding: 12px 14px; border-radius: 6px; margin-top: auto;">
                    <strong style="display: block; font-size: 0.85rem; color: var(--primary); margin-bottom: 4px;">
                        <i class="fa-solid fa-bullseye" style="color: #059669;"></i> High-Yield Syllabus Focus:
                    </strong>
                    <span style="font-size: 0.82rem; color: var(--text-secondary); line-height: 1.5;">
                        Applied General Science (Class 9 &amp; 10 Physics, Chemistry, Biology formulas), Indian History, Indian Railways history &amp; Kavach safety technology, Geography, and current sports/national events.
                    </span>
                </div>
            </div>

            <!-- Group 7: State PSC -->
            <div class="exam-matrix-card" data-category="state-psc" data-search="state psc bpsc uppsc mpsc mppsc rpsc hpsc wbcs jpsc jharkhand kpsc tnpsc state civil services">
                <div class="exam-matrix-header">
                    <div>
                        <div style="font-size: 0.78rem; font-weight: 700; color: #DC2626; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 4px;">Group 7 • State Public Service Commissions</div>
                        <h3 style="font-size: 1.2rem; margin: 0; color: var(--primary);">State PSCs (BPSC, UPPSC, JPSC, MPSC)</h3>
                    </div>
                    <span class="exam-weightage-pill weightage-high">
                        <i class="fa-solid fa-landmark"></i> 40% – 50% Weightage
                    </span>
                </div>
                <div class="exam-progress-wrap">
                    <div class="exam-progress-bar" style="width: 50%; background: linear-gradient(90deg, #EF4444, #B91C1C);"></div>
                </div>
                <p style="font-size: 0.85rem; color: var(--text-muted); margin-bottom: 10px; font-weight: 600;">Key Examinations Covered:</p>
                <div class="exam-chips">
                    <span class="exam-chip">BPSC (Bihar Combined Competitive)</span>
                    <span class="exam-chip">UPPSC PCS (Uttar Pradesh)</span>
                    <span class="exam-chip">MPSC (Maharashtra) &amp; MPPSC (Madhya Pradesh)</span>
                    <span class="exam-chip">JPSC (Jharkhand PSC)</span>
                    <span class="exam-chip">RPSC (RAS), WBCS, HPSC, KPSC, TNPSC</span>
                </div>
                <div style="background: #F8FAFC; border-left: 3px solid #DC2626; padding: 12px 14px; border-radius: 6px; margin-top: auto;">
                    <strong style="display: block; font-size: 0.85rem; color: var(--primary); margin-bottom: 4px;">
                        <i class="fa-solid fa-bullseye" style="color: #DC2626;"></i> High-Yield Syllabus Focus:
                    </strong>
                    <span style="font-size: 0.82rem; color: var(--text-secondary); line-height: 1.5;">
                        State-specific History, Geography, Tribal heritage, State budget and welfare schemes coupled with national-level General Studies (Indian Polity, Economy, History, Science, and 12-month National Current Affairs).
                    </span>
                </div>
            </div>

            <!-- Group 8: Teaching -->
            <div class="exam-matrix-card" data-category="teaching" data-search="teaching ugc net paper 1 ctet kvs nvs dsssb b.ed entrance nep 2020 national eligibility">
                <div class="exam-matrix-header">
                    <div>
                        <div style="font-size: 0.78rem; font-weight: 700; color: #4F46E5; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 4px;">Group 8 • Teaching &amp; National Eligibility</div>
                        <h3 style="font-size: 1.2rem; margin: 0; color: var(--primary);">Teaching (UGC NET, CTET, KVS, DSSSB)</h3>
                    </div>
                    <span class="exam-weightage-pill weightage-high">
                        <i class="fa-solid fa-book-open-reader"></i> 30% – 50% Weightage
                    </span>
                </div>
                <div class="exam-progress-wrap">
                    <div class="exam-progress-bar" style="width: 45%; background: linear-gradient(90deg, #6366F1, #4338CA);"></div>
                </div>
                <p style="font-size: 0.85rem; color: var(--text-muted); margin-bottom: 10px; font-weight: 600;">Key Examinations Covered:</p>
                <div class="exam-chips">
                    <span class="exam-chip">UGC NET (Paper 1 General Paper)</span>
                    <span class="exam-chip">CTET (Central Teacher Eligibility Test)</span>
                    <span class="exam-chip">KVS (Kendriya Vidyalaya Sangathan)</span>
                    <span class="exam-chip">NVS (Navodaya Vidyalaya)</span>
                    <span class="exam-chip">DSSSB &amp; State B.Ed Entrances</span>
                </div>
                <div style="background: #F8FAFC; border-left: 3px solid #4F46E5; padding: 12px 14px; border-radius: 6px; margin-top: auto;">
                    <strong style="display: block; font-size: 0.85rem; color: var(--primary); margin-bottom: 4px;">
                        <i class="fa-solid fa-bullseye" style="color: #4F46E5;"></i> High-Yield Syllabus Focus:
                    </strong>
                    <span style="font-size: 0.82rem; color: var(--text-secondary); line-height: 1.5;">
                        Higher Education System governance, National Education Policy (NEP 2020 5+3+3+4 structure), People, Development &amp; Environment (SDGs, MDGs, Climate Pacts), SWAYAM, and digital learning initiatives.
                    </span>
                </div>
            </div>

            <!-- Group 9: Police -->
            <div class="exam-matrix-card" data-category="police" data-search="police paramilitary delhi police up police bihar police si sub-inspector capf constable bsf crpf cisf">
                <div class="exam-matrix-header">
                    <div>
                        <div style="font-size: 0.78rem; font-weight: 700; color: #0891B2; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 4px;">Group 9 • Police &amp; Central Armed Paramilitary Forces</div>
                        <h3 style="font-size: 1.2rem; margin: 0; color: var(--primary);">Police &amp; Paramilitary (SI &amp; Constable)</h3>
                    </div>
                    <span class="exam-weightage-pill weightage-mid">
                        <i class="fa-solid fa-user-shield"></i> 25% – 35% Weightage
                    </span>
                </div>
                <div class="exam-progress-wrap">
                    <div class="exam-progress-bar" style="width: 32%; background: linear-gradient(90deg, #06B6D4, #0E7490);"></div>
                </div>
                <p style="font-size: 0.85rem; color: var(--text-muted); margin-bottom: 10px; font-weight: 600;">Key Examinations Covered:</p>
                <div class="exam-chips">
                    <span class="exam-chip">Delhi Police (Executive &amp; Head Constable)</span>
                    <span class="exam-chip">UP Police Sub-Inspector &amp; Constable</span>
                    <span class="exam-chip">Bihar Police SI (Daroga)</span>
                    <span class="exam-chip">CAPF Constable GD (CRPF, BSF, CISF, SSB, ITBP)</span>
                </div>
                <div style="background: #F8FAFC; border-left: 3px solid #0891B2; padding: 12px 14px; border-radius: 6px; margin-top: auto;">
                    <strong style="display: block; font-size: 0.85rem; color: var(--primary); margin-bottom: 4px;">
                        <i class="fa-solid fa-bullseye" style="color: #0891B2;"></i> High-Yield Syllabus Focus:
                    </strong>
                    <span style="font-size: 0.82rem; color: var(--text-secondary); line-height: 1.5;">
                        Indian Constitution &amp; Fundamental Rights, New Bharatiya Nyaya Sanhita (BNS/BNSS) reforms replacing IPC/CrPC, General Science, State GK facts, and major national security/sports current affairs.
                    </span>
                </div>
            </div>

            <!-- Group 10: CUET & Entrances -->
            <div class="exam-matrix-card" data-category="entrance" data-search="cuet ug cuet pg ipmat hotel management nchmct jee central universities entrance test general test">
                <div class="exam-matrix-header">
                    <div>
                        <div style="font-size: 0.78rem; font-weight: 700; color: #0D9488; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 4px;">Group 10 • University &amp; Professional Entrances</div>
                        <h3 style="font-size: 1.2rem; margin: 0; color: var(--primary);">CUET UG/PG &amp; Professional Entrances</h3>
                    </div>
                    <span class="exam-weightage-pill weightage-mid">
                        <i class="fa-solid fa-graduation-cap"></i> 25% Weightage (General Test)
                    </span>
                </div>
                <div class="exam-progress-wrap">
                    <div class="exam-progress-bar" style="width: 25%; background: linear-gradient(90deg, #14B8A6, #0F766E);"></div>
                </div>
                <p style="font-size: 0.85rem; color: var(--text-muted); margin-bottom: 10px; font-weight: 600;">Key Examinations Covered:</p>
                <div class="exam-chips">
                    <span class="exam-chip">CUET UG (Section III General Test for DU, BHU, JNU)</span>
                    <span class="exam-chip">CUET PG</span>
                    <span class="exam-chip">IPMAT (IIM Indore, Rohtak, Ranchi)</span>
                    <span class="exam-chip">NCHMCT JEE (Hotel Management)</span>
                </div>
                <div style="background: #F8FAFC; border-left: 3px solid #0D9488; padding: 12px 14px; border-radius: 6px; margin-top: auto;">
                    <strong style="display: block; font-size: 0.85rem; color: var(--primary); margin-bottom: 4px;">
                        <i class="fa-solid fa-bullseye" style="color: #0D9488;"></i> High-Yield Syllabus Focus:
                    </strong>
                    <span style="font-size: 0.82rem; color: var(--text-secondary); line-height: 1.5;">
                        Static General Knowledge (Indian Heritage, Books &amp; Authors, Days &amp; Events, Inventions), General Science fundamentals, and National/International Current Affairs of the past 12 months.
                    </span>
                </div>
            </div>

        </div>

        <!-- 60-Day Foundation Plan Callout -->
        <div style="background: linear-gradient(135deg, var(--primary) 0%, #161F48 100%); border-radius: var(--radius-xl); color: #FFFFFF; padding: 36px 32px; margin-top: 48px; box-shadow: var(--shadow-lg);">
            <div style="display: grid; grid-template-columns: 1fr; gap: 24px; align-items: center;">
                <div>
                    <span class="section-eyebrow" style="background: rgba(255, 107, 0, 0.2); color: #FFA366; border-color: rgba(255, 107, 0, 0.4); margin-bottom: 12px;">
                        The QuizWiz Advantage
                    </span>
                    <h3 style="color: #FFFFFF; font-size: 1.6rem; margin-bottom: 12px;">
                        One Systematic Preparation • Multiple Selections
                    </h3>
                    <p style="color: #CBD5E1; font-size: 0.98rem; line-height: 1.6; margin-bottom: 20px;">
                        GK/GS is the common decisive differentiator across 60+ competitive exams. QuizWiz Academy’s calibrated 60-Day Foundation Plan integrates <strong>core static theory (Polity, History, Economy, Science, Environment)</strong> with <strong>dynamic news events</strong>, allowing you to prepare once and compete across UPSC, State PSCs, SSC, Railways, and Banking.
                    </p>
                    <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                        <a href="/daily-quiz" class="btn btn-primary">
                            <i class="fa-solid fa-play"></i> Practice Today's GS Quiz
                        </a>
                        <a href="/enroll?group=group-c" class="btn btn-outline-white" style="border: 1.5px solid #FFFFFF; color: #FFFFFF;">
                            <i class="fa-solid fa-user-plus"></i> Register for Group C Track
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Interactive Filter & Search Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.exam-filter-btn');
    const searchInput = document.getElementById('examSearchInput');
    const cards = document.querySelectorAll('.exam-matrix-card');

    function filterCards() {
        const activeCategory = document.querySelector('.exam-filter-btn.active')?.dataset.category || 'all';
        const searchTerm = (searchInput?.value || '').toLowerCase().trim();

        cards.forEach(card => {
            const cardCat = card.dataset.category || '';
            const cardSearch = (card.dataset.search || '').toLowerCase();
            const cardText = card.innerText.toLowerCase();

            const matchesCategory = (activeCategory === 'all') || (cardCat === activeCategory);
            const matchesSearch = (searchTerm === '') || cardSearch.includes(searchTerm) || cardText.includes(searchTerm);

            if (matchesCategory && matchesSearch) {
                card.style.display = 'flex';
            } else {
                card.style.display = 'none';
            }
        });
    }

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            filterCards();
        });
    });

    if (searchInput) {
        searchInput.addEventListener('input', filterCards);
    }
});
</script>

<!-- SECTION 4: CTA -->
<section class="section" style="text-align: center; background: #F8FAFC; border-top: 1px solid var(--border-light);">
    <div class="container" style="max-width: 720px;">
        <h2 style="margin-bottom: 16px;">Ready to Test Your School's Brightest or Prepare for Civil Services?</h2>
        <p style="margin-bottom: 32px;" class="lead">
            Whether you are a school student in Classes 1–12, an institution coordinator, or a graduate aspirant preparing for civil services and government exams, QuizWiz delivers structured, rewarding excellence.
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
