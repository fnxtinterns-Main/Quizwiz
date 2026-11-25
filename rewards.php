<?php
$current_page = 'rewards';
$page_title = 'Quiz Championship Prizes & Scholarships';
$page_desc = 'See QuizWiz championship prize details, including scholarships up to ₹50,000, gadgets, and merit certificates for qualifying participants.';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/data/quizzes.php';
?>

<!-- PAGE HERO HEADER -->
<section style="background: linear-gradient(135deg, var(--primary) 0%, #10163A 100%); padding: 64px 0; color: #FFFFFF; position: relative; overflow: hidden;">
    <div class="container text-center" style="position: relative; z-index: 2;">
        <div class="section-eyebrow" style="background: rgba(255, 107, 0, 0.2); color: #FFA366; border-color: rgba(255, 107, 0, 0.4);">
            <i class="fa-solid fa-trophy text-orange"></i> ₹5,00,000+ Annual Prize &amp; Scholarship Pool
        </div>
        <h1 style="color: #FFFFFF; margin-bottom: 16px; font-size: clamp(2rem, 4vw, 2.9rem);">
            Prizes, Scholarships &amp; National Honors
        </h1>
        <p style="color: #CBD5E1; max-width: 760px; margin: 0 auto 28px; font-size: 1.15rem; line-height: 1.6;">
            At QuizWiz, intellectual excellence meets real rewards. Compete in the All India Quiz Championship to win a brand new <strong>Sony PlayStation 5 with GTA 6</strong>, high-performance laptops, direct scholarships, and verified national credentials.
        </p>

        <!-- Quick Value Highlights Bar -->
        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 14px; margin-top: 10px;">
            <div style="background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); backdrop-filter: blur(8px); padding: 10px 20px; border-radius: var(--radius-full); display: inline-flex; align-items: center; gap: 10px; font-size: 0.92rem;">
                <i class="fa-solid fa-gamepad text-orange"></i> <span><strong>Rank 1:</strong> Sony PS5 + GTA 6</span>
            </div>
            <div style="background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); backdrop-filter: blur(8px); padding: 10px 20px; border-radius: var(--radius-full); display: inline-flex; align-items: center; gap: 10px; font-size: 0.92rem;">
                <i class="fa-solid fa-laptop text-orange"></i> <span>Laptops &amp; iPads</span>
            </div>
            <div style="background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); backdrop-filter: blur(8px); padding: 10px 20px; border-radius: var(--radius-full); display: inline-flex; align-items: center; gap: 10px; font-size: 0.92rem;">
                <i class="fa-solid fa-indian-rupee-sign text-orange"></i> <span>Scholarships up to ₹50,000</span>
            </div>
            <div style="background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); backdrop-filter: blur(8px); padding: 10px 20px; border-radius: var(--radius-full); display: inline-flex; align-items: center; gap: 10px; font-size: 0.92rem;">
                <i class="fa-solid fa-certificate text-orange"></i> <span>QR-Verified Merit Certificates</span>
            </div>
        </div>
    </div>
</section>

<!-- OFFICIAL CHAMPIONSHIP BANNER SHOWCASE -->
<section style="background: #0B0F28; padding: 28px 0; border-bottom: 2px solid rgba(255, 107, 0, 0.3);">
    <div class="container text-center">
        <div style="max-width: 1050px; margin: 0 auto; border-radius: 16px; overflow: hidden; box-shadow: 0 12px 36px rgba(0,0,0,0.45); border: 2px solid rgba(255, 215, 0, 0.3);">
            <img src="/assets/images/championship-gold-banner.jpg" alt="All India Quiz Championship - Compete. Learn. Win!" style="width: 100%; height: auto; display: block;" loading="lazy">
        </div>
    </div>
</section>

<!-- SECTION 1: PODIUM & GRAND CHAMPIONSHIP PRIZES -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <div class="section-eyebrow">National Podium</div>
            <h2>All India Championship Awards</h2>
            <p>Direct merit rewards awarded to the top scorers in the All India Quiz Championship national finals.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px; margin-bottom: 48px;">
            
            <!-- Rank 1 Card (National Champion) -->
            <div class="form-card" style="border-top: 5px solid #F59E0B; background: linear-gradient(180deg, #FFFDF7 0%, #FFFFFF 100%); box-shadow: var(--shadow-md); position: relative; overflow: hidden; display: flex; flex-direction: column;">
                <div style="position: absolute; top: 12px; right: 12px; background: #FEF3C7; color: #B45309; font-weight: 700; font-size: 0.75rem; text-transform: uppercase; padding: 4px 10px; border-radius: var(--radius-full); border: 1px solid #FCD34D;">
                    Rank 1 National
                </div>
                <div style="font-size: 3rem; margin-bottom: 12px;">🥇</div>
                <div style="color: #B45309; font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 4px;">Grand Prize</div>
                <h3 style="font-size: 1.4rem; color: var(--primary); margin-bottom: 10px;">National Champion Trophy</h3>
                <div style="background: #FFFBEB; border: 1.5px solid #FDE68A; padding: 14px 16px; border-radius: var(--radius-md); margin-bottom: 16px;">
                    <div style="font-size: 1.2rem; font-weight: 800; color: #92400E; margin-bottom: 4px;">
                        <i class="fa-solid fa-gamepad"></i> Sony PS5 with GTA 6
                    </div>
                    <div style="font-size: 1.05rem; font-weight: 700; color: #B45309;">
                        + ₹50,000 Academic Scholarship
                    </div>
                </div>
                <ul style="list-style: none; padding: 0; margin-bottom: 24px; display: flex; flex-direction: column; gap: 10px; font-size: 0.88rem; color: var(--text-secondary); line-height: 1.5;">
                    <li><i class="fa-solid fa-check text-orange" style="margin-right: 8px;"></i> Brand New Sony PlayStation 5 Console + GTA 6 Game</li>
                    <li><i class="fa-solid fa-check text-orange" style="margin-right: 8px;"></i> Official All India Champion Gold Trophy &amp; Gold Medal</li>
                    <li><i class="fa-solid fa-check text-orange" style="margin-right: 8px;"></i> ₹50,000 Direct Bank Transfer (DBT) Scholarship</li>
                    <li><i class="fa-solid fa-check text-orange" style="margin-right: 8px;"></i> Physical citation signed by National Academic Board</li>
                    <li><i class="fa-solid fa-check text-orange" style="margin-right: 8px;"></i> Featured in National Media &amp; Hall of Fame</li>
                </ul>
                <div style="margin-top: auto;">
                    <a href="/enroll" class="btn btn-primary" style="width: 100%;">Compete for Rank 1</a>
                </div>
            </div>

            <!-- Rank 2 & 3 Card (Runners-Up) -->
            <div class="form-card" style="border-top: 5px solid #3B82F6; background: linear-gradient(180deg, #F8FAFF 0%, #FFFFFF 100%); box-shadow: var(--shadow-md); position: relative; overflow: hidden; display: flex; flex-direction: column;">
                <div style="position: absolute; top: 12px; right: 12px; background: #EFF6FF; color: #1D4ED8; font-weight: 700; font-size: 0.75rem; text-transform: uppercase; padding: 4px 10px; border-radius: var(--radius-full); border: 1px solid #BFDBFE;">
                    Ranks 2 &amp; 3
                </div>
                <div style="font-size: 3rem; margin-bottom: 12px;">🥈</div>
                <div style="color: #1D4ED8; font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 4px;">Runners-Up</div>
                <h3 style="font-size: 1.4rem; color: var(--primary); margin-bottom: 10px;">National 2nd &amp; 3rd Honors</h3>
                <div style="background: #EFF6FF; border: 1.5px solid #DBEAFE; padding: 14px 16px; border-radius: var(--radius-md); margin-bottom: 16px;">
                    <div style="font-size: 1.15rem; font-weight: 700; color: #1E40AF; margin-bottom: 4px;">
                        <i class="fa-solid fa-laptop"></i> HP Laptop / Apple iPad
                    </div>
                    <div style="font-size: 1.05rem; font-weight: 700; color: #2563EB;">
                        + ₹25,000 Academic Scholarship
                    </div>
                </div>
                <ul style="list-style: none; padding: 0; margin-bottom: 24px; display: flex; flex-direction: column; gap: 10px; font-size: 0.88rem; color: var(--text-secondary); line-height: 1.5;">
                    <li><i class="fa-solid fa-check text-blue" style="margin-right: 8px;"></i> Official Silver Trophy of Academic Distinction</li>
                    <li><i class="fa-solid fa-check text-blue" style="margin-right: 8px;"></i> ₹25,000 Direct Scholarship Disbursal</li>
                    <li><i class="fa-solid fa-check text-blue" style="margin-right: 8px;"></i> National Runner-Up Physical Merit Certificate</li>
                    <li><i class="fa-solid fa-check text-blue" style="margin-right: 8px;"></i> Feature in QuizWiz National Wall of Fame</li>
                </ul>
                <div style="margin-top: auto;">
                    <a href="/enroll" class="btn btn-outline-navy" style="width: 100%;">Enroll for Championship</a>
                </div>
            </div>

            <!-- Rank 4 to 10 Card (National Top 10) -->
            <div class="form-card" style="border-top: 5px solid #10B981; background: linear-gradient(180deg, #F8FDFB 0%, #FFFFFF 100%); box-shadow: var(--shadow-md); position: relative; overflow: hidden; display: flex; flex-direction: column;">
                <div style="position: absolute; top: 12px; right: 12px; background: #ECFDF5; color: #047857; font-weight: 700; font-size: 0.75rem; text-transform: uppercase; padding: 4px 10px; border-radius: var(--radius-full); border: 1px solid #A7F3D0;">
                    Ranks 4 to 10
                </div>
                <div style="font-size: 3rem; margin-bottom: 12px;">🥉</div>
                <div style="color: #047857; font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 4px;">Top 10 Achievers</div>
                <h3 style="font-size: 1.4rem; color: var(--primary); margin-bottom: 10px;">National Merit Ranks 4–10</h3>
                <div style="background: #ECFDF5; border: 1.5px solid #D1FAE5; padding: 14px 16px; border-radius: var(--radius-md); margin-bottom: 16px;">
                    <div style="font-size: 1.15rem; font-weight: 700; color: #065F46; margin-bottom: 4px;">
                        <i class="fa-solid fa-clock"></i> Fastrack / Noise Smartwatch
                    </div>
                    <div style="font-size: 1.05rem; font-weight: 700; color: #059669;">
                        + ₹10,000 Book &amp; STEM Grant
                    </div>
                </div>
                <ul style="list-style: none; padding: 0; margin-bottom: 24px; display: flex; flex-direction: column; gap: 10px; font-size: 0.88rem; color: var(--text-secondary); line-height: 1.5;">
                    <li><i class="fa-solid fa-check" style="color: #10B981; margin-right: 8px;"></i> Bronze Merit Trophy &amp; Commendation Letter</li>
                    <li><i class="fa-solid fa-check" style="color: #10B981; margin-right: 8px;"></i> Hands-on STEM Science / Educational Kit</li>
                    <li><i class="fa-solid fa-check" style="color: #10B981; margin-right: 8px;"></i> Verified National Top-10 Merit Credential</li>
                    <li><i class="fa-solid fa-check" style="color: #10B981; margin-right: 8px;"></i> 1-Year Complimentary Access to All Test Series</li>
                </ul>
                <div style="margin-top: auto;">
                    <a href="/enroll" class="btn btn-outline-navy" style="width: 100%;">Enroll for Championship</a>
                </div>
            </div>

            <!-- State Champions Card -->
            <div class="form-card" style="border-top: 5px solid #8B5CF6; background: linear-gradient(180deg, #FAF8FF 0%, #FFFFFF 100%); box-shadow: var(--shadow-md); position: relative; overflow: hidden; display: flex; flex-direction: column;">
                <div style="position: absolute; top: 12px; right: 12px; background: #F3E8FF; color: #6D28D9; font-weight: 700; font-size: 0.75rem; text-transform: uppercase; padding: 4px 10px; border-radius: var(--radius-full); border: 1px solid #DDD6FE;">
                    28 States &amp; UTs
                </div>
                <div style="font-size: 3rem; margin-bottom: 12px;">🎖️</div>
                <div style="color: #6D28D9; font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 4px;">State Honors</div>
                <h3 style="font-size: 1.4rem; color: var(--primary); margin-bottom: 10px;">State Champions &amp; Qualifiers</h3>
                <div style="background: #F5F3FF; border: 1.5px solid #EDE9FE; padding: 14px 16px; border-radius: var(--radius-md); margin-bottom: 16px;">
                    <div style="font-size: 1.15rem; font-weight: 700; color: #5B21B6; margin-bottom: 4px;">
                        <i class="fa-solid fa-award"></i> State Topper Shield &amp; Trophy
                    </div>
                    <div style="font-size: 1.05rem; font-weight: 700; color: #7C3AED;">
                        + ₹5,000 State Merit Scholarship
                    </div>
                </div>
                <ul style="list-style: none; padding: 0; margin-bottom: 24px; display: flex; flex-direction: column; gap: 10px; font-size: 0.88rem; color: var(--text-secondary); line-height: 1.5;">
                    <li><i class="fa-solid fa-check" style="color: #8B5CF6; margin-right: 8px;"></i> Official State Rank 1 Winner Recognition</li>
                    <li><i class="fa-solid fa-check" style="color: #8B5CF6; margin-right: 8px;"></i> All Scorers with 60%+ Score: Verified Merit Certificate</li>
                    <li><i class="fa-solid fa-check" style="color: #8B5CF6; margin-right: 8px;"></i> Detailed Subject-wise Strength &amp; Weakness Report</li>
                    <li><i class="fa-solid fa-check" style="color: #8B5CF6; margin-right: 8px;"></i> Permanent QR Verification for school records</li>
                </ul>
                <div style="margin-top: auto;">
                    <a href="/enroll" class="btn btn-outline-navy" style="width: 100%;">Enroll for Championship</a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SECTION 2: THE 5-CHECKPOINT QUIZ TREASURE HUNT (KHAZANA MAP) -->
<section class="section section-alt" style="position: relative; overflow: hidden;">
    <div class="container">
        <div class="section-header">
            <div class="section-eyebrow" style="background: rgba(245, 158, 11, 0.15); color: #B45309; border-color: rgba(245, 158, 11, 0.3);">
                🗺️ The Ultimate Quiz Treasure Hunt
            </div>
            <h2>Khazana Chhupa Hai Sawaalon Mein!</h2>
            <p>Har Sahi Jawab Tumhe Khazane Ke Aur Kareeb Le Jayega. Clear all 5 checkpoints across India to unlock the grand prize treasure.</p>
        </div>

        <div style="max-width: 1100px; margin: 0 auto; background: #FFFFFF; border: 2px solid #FCD34D; border-radius: var(--radius-xl); overflow: hidden; box-shadow: var(--shadow-lg);">
            <div style="position: relative;">
                <img src="/assets/images/rewards-khazana-map.jpg" alt="Khazana Chhupa Hai Sawaalon Mein! Quiz Treasure Hunt Map" style="width: 100%; height: auto; display: block;" loading="lazy">
            </div>

            <!-- Checkpoint Milestones Bar -->
            <div style="padding: 32px 28px; background: linear-gradient(180deg, #FFFDF8 0%, #FFFFFF 100%);">
                <h3 style="font-size: 1.3rem; color: var(--primary); margin-bottom: 20px; text-align: center;">
                    The 5 Championship Checkpoints to the Grand Khazana
                </h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 16px;">
                    
                    <div style="background: #FFFBEB; border: 1.5px solid #FDE68A; border-radius: var(--radius-md); padding: 16px 12px; text-align: center;">
                        <div style="font-weight: 800; color: #B45309; font-size: 0.85rem; text-transform: uppercase; margin-bottom: 4px;">Checkpoint 1</div>
                        <div style="font-weight: 700; color: var(--primary); font-size: 0.95rem; margin-bottom: 6px;">History of India</div>
                        <span style="font-size: 0.8rem; color: var(--text-secondary);">Ancient to Modern Era</span>
                    </div>

                    <div style="background: #EFF6FF; border: 1.5px solid #DBEAFE; border-radius: var(--radius-md); padding: 16px 12px; text-align: center;">
                        <div style="font-weight: 800; color: #1D4ED8; font-size: 0.85rem; text-transform: uppercase; margin-bottom: 4px;">Checkpoint 2</div>
                        <div style="font-weight: 700; color: var(--primary); font-size: 0.95rem; margin-bottom: 6px;">Science &amp; Nature</div>
                        <span style="font-size: 0.8rem; color: var(--text-secondary);">Space, Physics &amp; Bio</span>
                    </div>

                    <div style="background: #ECFDF5; border: 1.5px solid #A7F3D0; border-radius: var(--radius-md); padding: 16px 12px; text-align: center;">
                        <div style="font-weight: 800; color: #047857; font-size: 0.85rem; text-transform: uppercase; margin-bottom: 4px;">Checkpoint 3</div>
                        <div style="font-weight: 700; color: var(--primary); font-size: 0.95rem; margin-bottom: 6px;">Sports &amp; Culture</div>
                        <span style="font-size: 0.8rem; color: var(--text-secondary);">Athletics, Heritage &amp; Arts</span>
                    </div>

                    <div style="background: #F5F3FF; border: 1.5px solid #DDD6FE; border-radius: var(--radius-md); padding: 16px 12px; text-align: center;">
                        <div style="font-weight: 800; color: #6D28D9; font-size: 0.85rem; text-transform: uppercase; margin-bottom: 4px;">Checkpoint 4</div>
                        <div style="font-weight: 700; color: var(--primary); font-size: 0.95rem; margin-bottom: 6px;">Maths &amp; Puzzles</div>
                        <span style="font-size: 0.8rem; color: var(--text-secondary);">Logic &amp; Lateral Thinking</span>
                    </div>

                    <div style="background: linear-gradient(135deg, #FEF3C7 0%, #FDE68A 100%); border: 2px solid #F59E0B; border-radius: var(--radius-md); padding: 16px 12px; text-align: center;">
                        <div style="font-weight: 800; color: #92400E; font-size: 0.85rem; text-transform: uppercase; margin-bottom: 4px;">Checkpoint 5</div>
                        <div style="font-weight: 800; color: #78350F; font-size: 0.95rem; margin-bottom: 6px;">Reach The Khazana!</div>
                        <span style="font-size: 0.8rem; color: #92400E; font-weight: 600;">PS5 + GTA 6 + ₹50,000</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: SUPER BRAIN VS SUPER PRIZE (DAILY MILESTONES) -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <div class="section-eyebrow" style="background: rgba(239, 68, 68, 0.15); color: #DC2626; border-color: rgba(239, 68, 68, 0.3);">
                ⚡ High Voltage Daily Rewards
            </div>
            <h2>Super Brain vs Super Prize!</h2>
            <p>Har Sahi Jawab = Ek Naya Inaam. Consistency is celebrated every day on QuizWiz — practice daily to unlock scholar honors, fellowships, and wildcard entries.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 32px; align-items: center; margin-bottom: 40px;">
            
            <!-- Comic Hero Poster Visual -->
            <div style="border-radius: var(--radius-xl); overflow: hidden; box-shadow: var(--shadow-xl); border: 3px solid #1E293B;">
                <img src="/assets/images/rewards-super-brain.jpg" alt="Super Brain vs Super Prize - Har Sahi Jawab Ek Naya Inaam" style="width: 100%; height: auto; display: block;" loading="lazy">
            </div>

            <!-- Milestone Cards Stack -->
            <div style="display: flex; flex-direction: column; gap: 18px;">
                
                <!-- Milestone 1 -->
                <div class="form-card" style="border-left: 5px solid #CD7F32; padding: 20px;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
                        <span style="font-weight: 800; font-size: 0.8rem; color: #8C4E10; text-transform: uppercase;">Milestone 1</span>
                        <span style="font-size: 1.6rem;">🥉</span>
                    </div>
                    <h4 style="font-size: 1.15rem; color: var(--primary); margin-bottom: 6px;">Bronze Scholar Honor</h4>
                    <p style="font-size: 0.88rem; color: var(--text-secondary); line-height: 1.5; margin: 0 0 10px 0;">
                        Complete <strong>10 Daily Practice Quizzes</strong> with an average accuracy of <strong>80% or higher</strong>.
                    </p>
                    <div style="font-size: 0.82rem; font-weight: 600; color: var(--primary);">
                        <i class="fa-solid fa-certificate text-orange"></i> Digital Bronze Scholar Certificate &amp; Wall of Fame feature
                    </div>
                </div>

                <!-- Milestone 2 -->
                <div class="form-card" style="border-left: 5px solid #3B82F6; padding: 20px;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
                        <span style="font-weight: 800; font-size: 0.8rem; color: #1D4ED8; text-transform: uppercase;">Milestone 2</span>
                        <span style="font-size: 1.6rem;">🥈</span>
                    </div>
                    <h4 style="font-size: 1.15rem; color: var(--primary); margin-bottom: 6px;">Silver Academic Fellow</h4>
                    <p style="font-size: 0.88rem; color: var(--text-secondary); line-height: 1.5; margin: 0 0 10px 0;">
                        Complete <strong>30 Daily Practice Quizzes</strong> across Science, Math, GK, and Current Affairs.
                    </p>
                    <div style="font-size: 0.82rem; font-weight: 600; color: var(--primary);">
                        <i class="fa-solid fa-pen-nib text-blue"></i> QuizWiz Signature Academic Pen + 50% Championship Waiver
                    </div>
                </div>

                <!-- Milestone 3 -->
                <div class="form-card" style="border-left: 5px solid #F59E0B; padding: 20px;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
                        <span style="font-weight: 800; font-size: 0.8rem; color: #B45309; text-transform: uppercase;">Milestone 3</span>
                        <span style="font-size: 1.6rem;">🥇</span>
                    </div>
                    <h4 style="font-size: 1.15rem; color: var(--primary); margin-bottom: 6px;">Gold Grandmaster Credential</h4>
                    <p style="font-size: 0.88rem; color: var(--text-secondary); line-height: 1.5; margin: 0 0 10px 0;">
                        Complete <strong>60 Days of Curated Quizzes</strong> while maintaining Top 5% ranking on the Leaderboard.
                    </p>
                    <div style="font-size: 0.82rem; font-weight: 600; color: var(--primary);">
                        <i class="fa-solid fa-award text-orange"></i> Direct Wildcard into National Finals + Physical Grandmaster Medal
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: INTERACTIVE REWARD ELIGIBILITY CALCULATOR -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <div class="section-eyebrow">Interactive Reward Calculator</div>
            <h2>What Rewards Are You Eligible For?</h2>
            <p>Select your target national rank or score range to see the rewards, trophies, and scholarships you unlock.</p>
        </div>

        <div style="max-width: 860px; margin: 0 auto; background: #FFFFFF; border: 1.5px solid var(--border-light); border-radius: var(--radius-xl); padding: 32px; box-shadow: var(--shadow-sm);">
            
            <div style="margin-bottom: 28px;">
                <label style="display: block; font-weight: 700; font-size: 1rem; color: var(--primary); margin-bottom: 12px;">
                    Select Your Target Rank / Score Category:
                </label>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(170px, 1fr)); gap: 10px;" id="rewardTabButtons">
                    <button class="btn btn-primary btn-sm reward-calc-btn active" data-tier="rank1">National Rank 1</button>
                    <button class="btn btn-outline-navy btn-sm reward-calc-btn" data-tier="top3">National Ranks 2–3</button>
                    <button class="btn btn-outline-navy btn-sm reward-calc-btn" data-tier="top10">National Ranks 4–10</button>
                    <button class="btn btn-outline-navy btn-sm reward-calc-btn" data-tier="state">State Topper</button>
                    <button class="btn btn-outline-navy btn-sm reward-calc-btn" data-tier="merit">Merit (Score 60%+)</button>
                </div>
            </div>

            <!-- Dynamic Result Card -->
            <div id="rewardCalcResult" style="background: #F8FAFC; border: 1.5px solid #E2E8F0; border-radius: var(--radius-lg); padding: 24px; transition: all 0.3s ease;">
                <div style="display: flex; align-items: center; gap: 16px; margin-bottom: 16px;">
                    <div id="calcIcon" style="font-size: 2.8rem;">🎮</div>
                    <div>
                        <div id="calcTierName" style="font-size: 0.85rem; font-weight: 700; color: #D97706; text-transform: uppercase; letter-spacing: 0.05em;">Tier: All India Champion (Rank 1)</div>
                        <h3 id="calcPrizeHead" style="margin: 0; font-size: 1.3rem; color: var(--primary);">Sony PS5 with GTA 6 + ₹50,000 Scholarship</h3>
                    </div>
                </div>
                <div id="calcDescription" style="font-size: 0.95rem; color: var(--text-secondary); line-height: 1.6; margin-bottom: 20px;">
                    Awarded to the student with the highest all-India aggregate score. Hand-delivered alongside the brand new Sony PlayStation 5 with GTA 6, Gold Trophy, Gold Medal, and an official board citation.
                </div>
                <div style="display: flex; gap: 12px; flex-wrap: wrap;">
                    <a href="/enroll" class="btn btn-primary btn-sm">
                        <i class="fa-solid fa-trophy"></i> Enroll for Championship
                    </a>
                    <a href="/daily-quiz" class="btn btn-outline-navy btn-sm">
                        <i class="fa-solid fa-play"></i> Start Daily Practice
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SECTION 5: INSTITUTIONAL & SCHOOL HONORS -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <div class="section-eyebrow">Institutional Excellence</div>
            <h2>School &amp; College Recognition</h2>
            <p>Honoring institutions, principals, and teachers who champion academic curiosity, competitive readiness, and student excellence.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px;">
            <div class="form-card" style="border-top: 4px solid var(--primary); display: flex; flex-direction: column;">
                <div style="font-size: 2.5rem; margin-bottom: 14px;">🏫</div>
                <h3 style="font-size: 1.25rem; color: var(--primary); margin-bottom: 8px;">Best Quiz School of India Trophy</h3>
                <p style="font-size: 0.9rem; color: var(--text-secondary); line-height: 1.6; margin-bottom: 16px;">
                    Awarded to the school with the highest cumulative student score and maximum podium rankers in the annual All India Championship.
                </p>
                <div style="margin-top: auto; font-size: 0.85rem; color: var(--primary); font-weight: 600;">
                    <i class="fa-solid fa-trophy text-orange" style="margin-right: 6px;"></i> Rolling Championship Trophy &amp; National Press Coverage
                </div>
            </div>

            <div class="form-card" style="border-top: 4px solid var(--secondary); display: flex; flex-direction: column;">
                <div style="font-size: 2.5rem; margin-bottom: 14px;">📜</div>
                <h3 style="font-size: 1.25rem; color: var(--primary); margin-bottom: 8px;">Principal's Citation of Excellence</h3>
                <p style="font-size: 0.9rem; color: var(--text-secondary); line-height: 1.6; margin-bottom: 16px;">
                    Presented to the Principal and Quiz Club Coordinator of any educational institution with 50+ enrolled students.
                </p>
                <div style="margin-top: auto; font-size: 0.85rem; color: var(--primary); font-weight: 600;">
                    <i class="fa-solid fa-certificate text-orange" style="margin-right: 6px;"></i> Official Framed Institutional Memento &amp; Plaque
                </div>
            </div>

            <div class="form-card" style="border-top: 4px solid #10B981; display: flex; flex-direction: column;">
                <div style="font-size: 2.5rem; margin-bottom: 14px;">👑</div>
                <h3 style="font-size: 1.25rem; color: var(--primary); margin-bottom: 8px;">Star Quiz Master Shield</h3>
                <p style="font-size: 0.9rem; color: var(--text-secondary); line-height: 1.6; margin-bottom: 16px;">
                    Awarded to appointed QuizWiz Campus Ambassadors who conduct intra-school quiz rounds and empower their peers to compete nationally.
                </p>
                <div style="margin-top: auto; font-size: 0.85rem; color: var(--primary); font-weight: 600;">
                    <i class="fa-solid fa-star" style="color: #10B981; margin-right: 6px;"></i> Leadership Letter of Recommendation &amp; Prize Kit
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 6: TRANSPARENT CLAIM & DISBURSAL PROCESS -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <div class="section-eyebrow">Integrity &amp; Trust</div>
            <h2>Transparent 4-Step Award Disbursal</h2>
            <p>Every score is computationally audited and awards are delivered directly to winners with zero friction.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 20px;">
            
            <div class="step-card" style="text-align: center; padding: 28px 20px;">
                <div style="width: 50px; height: 50px; border-radius: 50%; background: var(--secondary-surface); color: var(--secondary); display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.2rem; margin: 0 auto 16px;">
                    1
                </div>
                <h4 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 8px;">Compete &amp; Score</h4>
                <p style="font-size: 0.85rem; color: var(--text-secondary); line-height: 1.5; margin: 0;">
                    Students take timed online prelims &amp; national finals. Results are recorded instantly in the central leaderboard engine.
                </p>
            </div>

            <div class="step-card" style="text-align: center; padding: 28px 20px;">
                <div style="width: 50px; height: 50px; border-radius: 50%; background: var(--primary-surface); color: var(--primary); display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.2rem; margin: 0 auto 16px;">
                    2
                </div>
                <h4 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 8px;">Identity Verification</h4>
                <p style="font-size: 0.85rem; color: var(--text-secondary); line-height: 1.5; margin: 0;">
                    School ID and parental consent are confirmed in compliance with the DPDP Act 2023 to verify student authenticity.
                </p>
            </div>

            <div class="step-card" style="text-align: center; padding: 28px 20px;">
                <div style="width: 50px; height: 50px; border-radius: 50%; background: #ECFDF5; color: #047857; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.2rem; margin: 0 auto 16px;">
                    3
                </div>
                <h4 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 8px;">Disbursal &amp; Delivery</h4>
                <p style="font-size: 0.85rem; color: var(--text-secondary); line-height: 1.5; margin: 0;">
                    PS5 consoles and iPads are dispatched via insured courier with live tracking. Scholarships are transferred directly via NEFT/DBT.
                </p>
            </div>

            <div class="step-card" style="text-align: center; padding: 28px 20px;">
                <div style="width: 50px; height: 50px; border-radius: 50%; background: #F5F3FF; color: #6D28D9; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.2rem; margin: 0 auto 16px;">
                    4
                </div>
                <h4 style="font-size: 1.1rem; color: var(--primary); margin-bottom: 8px;">National Wall of Fame</h4>
                <p style="font-size: 0.85rem; color: var(--text-secondary); line-height: 1.5; margin: 0;">
                    Winners are featured on the QuizWiz Hall of Fame, receiving permanent QR-verifiable digital credential links.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- SECTION 7: FINAL CTA -->
<section class="section" style="text-align: center; background: linear-gradient(135deg, var(--primary) 0%, #161F48 100%); color: #FFFFFF; padding: 64px 0;">
    <div class="container" style="max-width: 720px;">
        <h2 style="color: #FFFFFF; margin-bottom: 16px; font-size: clamp(1.8rem, 3.5vw, 2.4rem);">
            Your Name Deserves to Be on the National Podium
        </h2>
        <p style="color: #CBD5E1; margin-bottom: 32px; font-size: 1.1rem; line-height: 1.6;">
            Thousands of students from 52+ schools are sharpening their intellect every day. Choose your division, practice daily quizzes, and secure your place in the championship.
        </p>
        <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
            <a href="/enroll" class="btn btn-primary btn-lg">
                <i class="fa-solid fa-trophy"></i> Enroll for Next Championship
            </a>
            <a href="/daily-quiz" class="btn btn-outline-white btn-lg" style="border: 1.5px solid #FFFFFF; color: #FFFFFF;">
                <i class="fa-solid fa-play"></i> Practice Today's Quiz
            </a>
            <a href="<?php echo WHATSAPP_URL; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-lg">
                <i class="fa-brands fa-whatsapp"></i> WhatsApp Helpline
            </a>
        </div>
    </div>
</section>

<!-- Interactive Rewards Calculator Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const calcBtns = document.querySelectorAll('.reward-calc-btn');
    const calcIcon = document.getElementById('calcIcon');
    const calcTierName = document.getElementById('calcTierName');
    const calcPrizeHead = document.getElementById('calcPrizeHead');
    const calcDescription = document.getElementById('calcDescription');

    const tiers = {
        rank1: {
            icon: '🎮',
            tier: 'Tier: All India Champion (Rank 1)',
            prize: 'Sony PS5 with GTA 6 + ₹50,000 Academic Scholarship',
            color: '#D97706',
            desc: 'Awarded to the student with the highest all-India aggregate score. Hand-delivered alongside the brand new Sony PlayStation 5 console + GTA 6 game, Gold Trophy, Gold Medal, and a lifetime citation of intellectual excellence.'
        },
        top3: {
            icon: '💻',
            tier: 'Tier: National Runners-Up (Ranks 2 & 3)',
            prize: 'HP Laptop / Apple iPad + ₹25,000 Scholarship',
            color: '#1D4ED8',
            desc: 'Awarded to the 2nd and 3rd rankers across India. Hand-delivered alongside the Silver Runner-Up Trophy, certificate of distinction, and direct scholarship bank transfer.'
        },
        top10: {
            icon: '⌚',
            tier: 'Tier: National Top 10 Merit Achievers (Ranks 4 to 10)',
            prize: 'Fastrack / Noise Smartwatch + ₹10,000 Book & STEM Grant',
            color: '#047857',
            desc: 'Awarded to students finishing in the top 10 nationwide. Includes the Bronze Merit Trophy, STEM Science Learning Kit, and 1-year complimentary VIP access to all test series.'
        },
        state: {
            icon: '🎖️',
            tier: 'Tier: State Toppers (28 States & 8 Union Territories)',
            prize: 'State Topper Shield & Memento + ₹5,000 State Scholarship',
            color: '#6D28D9',
            desc: 'Recognizes the highest scorer from each individual State or Union Territory of India, ensuring regional excellence is celebrated alongside national ranks.'
        },
        merit: {
            icon: '📜',
            tier: 'Tier: National Qualifying Merit (Score 60%+)',
            prize: 'Cryptographically Verified National Merit Certificate',
            color: '#059669',
            desc: 'Every participant achieving 60% or higher receives an official digital certificate with a verifiable QR code, nationwide percentile rank, and detailed diagnostic performance report.'
        }
    };

    calcBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            calcBtns.forEach(b => {
                b.classList.remove('active');
                b.classList.remove('btn-primary');
                b.classList.add('btn-outline-navy');
            });
            this.classList.add('active');
            this.classList.remove('btn-outline-navy');
            this.classList.add('btn-primary');

            const tierKey = this.dataset.tier;
            const data = tiers[tierKey];
            if (data) {
                calcIcon.textContent = data.icon;
                calcTierName.textContent = data.tier;
                calcTierName.style.color = data.color;
                calcPrizeHead.textContent = data.prize;
                calcDescription.textContent = data.desc;
            }
        });
    });
});
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
