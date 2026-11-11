<?php
$current_page = 'puzzles';
$page_title = 'Brain Puzzles & Daily Logic Riddles | QuizWiz';
$page_desc = 'Solve interactive brain puzzles, math logic riddles, visual patterns, and lateral thinking challenges designed for curious school students (Classes 1 to 12).';

require_once __DIR__ . '/includes/header.php';
?>

<!-- PAGE HERO HEADER -->
<section style="background: linear-gradient(135deg, #1E1B4B 0%, #312E81 50%, #0F172A 100%); padding: 64px 0 72px; color: #FFFFFF; position: relative; overflow: hidden;">
    <div class="container text-center" style="position: relative; z-index: 2;">
        <div class="section-eyebrow" style="background: rgba(255, 107, 0, 0.2); color: #FFA366; border-color: rgba(255, 107, 0, 0.4);">
            <i class="fa-solid fa-puzzle-piece text-orange"></i> Daily Brain Gym • Free Logic Challenges
        </div>
        <h1 style="color: #FFFFFF; font-size: clamp(2.2rem, 4vw, 3.2rem); margin-bottom: 16px;">
            Crack the Code. <span style="color: var(--secondary);">Master the Puzzles.</span>
        </h1>
        <p style="color: #CBD5E1; max-width: 720px; margin: 0 auto 28px; font-size: 1.15rem; line-height: 1.6;">
            Stimulate your lateral thinking, spatial reasoning, and pattern recognition with curated brain teasers. Test your wits, unlock instant solutions, and become a true puzzle wizard!
        </p>

        <!-- Stats Bar -->
        <div style="display: inline-flex; align-items: center; gap: 20px; background: rgba(255, 255, 255, 0.08); backdrop-filter: blur(8px); padding: 10px 24px; border-radius: var(--radius-full); border: 1px solid rgba(255, 255, 255, 0.15); flex-wrap: wrap; justify-content: center;">
            <div style="display: flex; align-items: center; gap: 8px;">
                <span style="font-size: 1.25rem;">🧩</span>
                <span style="font-size: 0.9rem; font-weight: 600;">Fresh Weekly Puzzles</span>
            </div>
            <div style="width: 1px; height: 24px; background: rgba(255, 255, 255, 0.2);"></div>
            <div style="display: flex; align-items: center; gap: 8px;">
                <span style="font-size: 1.25rem;">💡</span>
                <span style="font-size: 0.9rem; font-weight: 600;">Interactive Clues &amp; Solutions</span>
            </div>
            <div style="width: 1px; height: 24px; background: rgba(255, 255, 255, 0.2);"></div>
            <div style="display: flex; align-items: center; gap: 8px;">
                <span style="font-size: 1.25rem;">🎯</span>
                <span style="font-size: 0.9rem; font-weight: 600;">Junior &amp; Senior Divisions</span>
            </div>
        </div>
    </div>
</section>

<!-- MAIN PUZZLE ARENA -->
<section class="section" style="margin-top: -30px; padding-top: 0;">
    <div class="container">
        
        <!-- Filter Tabs -->
        <div class="category-tabs" style="margin-bottom: 32px; justify-content: center;">
            <button class="filter-tab active" data-filter="all">All Puzzles</button>
            <button class="filter-tab" data-filter="math">Math &amp; Numbers</button>
            <button class="filter-tab" data-filter="logic">Lateral Thinking</button>
            <button class="filter-tab" data-filter="pattern">Code &amp; Ciphers</button>
            <button class="filter-tab" data-filter="group-a">Junior (Class 1–6)</button>
            <button class="filter-tab" data-filter="group-b">Senior (Class 7–12)</button>
        </div>

        <!-- Puzzles Grid -->
        <div class="quiz-grid" style="grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));">
            
            <!-- PUZZLE 1: Number Matrix Pattern -->
            <div class="quiz-card puzzle-card" data-category="math group-b" style="border-top: 4px solid #10B981;">
                <div class="quiz-card-body" style="padding: 24px;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                        <span style="font-size: 0.75rem; font-weight: 700; color: #10B981; background: #ECFDF5; padding: 4px 10px; border-radius: 9999px;">
                            <i class="fa-solid fa-calculator"></i> Math Logic
                        </span>
                        <span style="font-size: 0.75rem; color: var(--text-muted); font-weight: 600;">Senior Division</span>
                    </div>

                    <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 12px;">
                        The Geometric Triplet Matrix
                    </h3>

                    <p style="color: var(--text-secondary); font-size: 0.95rem; margin-bottom: 16px;">
                        Examine the mathematical relationship between the numbers in each row. What number replaces the question mark (<strong>?</strong>)?
                    </p>

                    <!-- Visual Matrix Box -->
                    <div style="background: var(--surface-light); border: 1.5px solid var(--border-light); border-radius: var(--radius-lg); padding: 14px; text-align: center; margin-bottom: 18px; font-family: monospace; font-size: 1.15rem; font-weight: 700; color: var(--primary);">
                        <div style="margin-bottom: 6px;">Row 1: &nbsp; 3 &rarr; 9 &rarr; 27</div>
                        <div style="margin-bottom: 6px;">Row 2: &nbsp; 4 &rarr; 16 &rarr; 64</div>
                        <div style="color: var(--secondary);">Row 3: &nbsp; 5 &rarr; 25 &rarr; <span style="background: #FEF3C7; padding: 2px 8px; border-radius: 4px; border: 1px dashed var(--secondary);">?</span></div>
                    </div>

                    <!-- Interactive Options -->
                    <div class="puzzle-options" style="display: grid; grid-template-columns: 1fr 1fr; gap: 8px; margin-bottom: 16px;">
                        <button onclick="checkPuzzle(this, 1, false)" class="quiz-option-btn" style="padding: 10px; margin: 0; font-size: 0.9rem; text-align: center;">100</button>
                        <button onclick="checkPuzzle(this, 1, true)" class="quiz-option-btn" style="padding: 10px; margin: 0; font-size: 0.9rem; text-align: center;">125</button>
                        <button onclick="checkPuzzle(this, 1, false)" class="quiz-option-btn" style="padding: 10px; margin: 0; font-size: 0.9rem; text-align: center;">150</button>
                        <button onclick="checkPuzzle(this, 1, false)" class="quiz-option-btn" style="padding: 10px; margin: 0; font-size: 0.9rem; text-align: center;">625</button>
                    </div>

                    <div id="pFeedback1" style="display: none; padding: 10px 14px; border-radius: 8px; font-size: 0.85rem; margin-bottom: 14px;"></div>

                    <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid var(--border-light); padding-top: 12px;">
                        <button onclick="toggleHint('pHint1')" style="background: none; border: none; font-size: 0.85rem; color: var(--secondary); font-weight: 600; cursor: pointer;">
                            <i class="fa-regular fa-lightbulb"></i> Show Hint
                        </button>
                        <button onclick="toggleHint('pExp1')" style="background: none; border: none; font-size: 0.85rem; color: var(--primary); font-weight: 600; cursor: pointer;">
                            <i class="fa-solid fa-book-open"></i> Full Solution
                        </button>
                    </div>

                    <div id="pHint1" style="display: none; background: #FFFBEB; border-left: 3px solid #F59E0B; padding: 10px 12px; border-radius: 4px; font-size: 0.85rem; color: #92400E; margin-top: 12px;">
                        <strong>Hint:</strong> Look at the powers of each base number: \(x^1\), \(x^2\), \(x^3\).
                    </div>
                    <div id="pExp1" style="display: none; background: #F1F5F9; border-left: 3px solid var(--primary); padding: 10px 12px; border-radius: 4px; font-size: 0.85rem; color: var(--text-primary); margin-top: 12px;">
                        <strong>Solution:</strong> In row 1: \(3^1=3, 3^2=9, 3^3=27\). In row 2: \(4^1=4, 4^2=16, 4^3=64\). Therefore, for row 3: \(5^1=5, 5^2=25, 5^3=125\). Correct answer is <strong>125</strong>.
                    </div>
                </div>
            </div>

            <!-- PUZZLE 2: The Two Ropes Timer -->
            <div class="quiz-card puzzle-card" data-category="logic group-b" style="border-top: 4px solid #F59E0B;">
                <div class="quiz-card-body" style="padding: 24px;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                        <span style="font-size: 0.75rem; font-weight: 700; color: #F59E0B; background: #FFFBEB; padding: 4px 10px; border-radius: 9999px;">
                            <i class="fa-solid fa-brain"></i> Lateral Thinking
                        </span>
                        <span style="font-size: 0.75rem; color: var(--text-muted); font-weight: 600;">High School Classic</span>
                    </div>

                    <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 12px;">
                        The 45-Minute Burning Ropes
                    </h3>

                    <p style="color: var(--text-secondary); font-size: 0.95rem; margin-bottom: 16px;">
                        You have two ropes. Each rope takes exactly 60 minutes to burn completely from end to end, but they burn unevenly. With only a box of matches, how can you measure exactly <strong>45 minutes</strong>?
                    </p>

                    <!-- Interactive riddle options -->
                    <div class="puzzle-options" style="display: flex; flex-direction: column; gap: 8px; margin-bottom: 16px;">
                        <button onclick="checkPuzzle(this, 2, false)" class="quiz-option-btn" style="padding: 10px; margin: 0; font-size: 0.85rem; text-align: left;">
                            Cut one rope in half and burn it with the second rope.
                        </button>
                        <button onclick="checkPuzzle(this, 2, true)" class="quiz-option-btn" style="padding: 10px; margin: 0; font-size: 0.85rem; text-align: left;">
                            Light Rope 1 at both ends, and Rope 2 at one end simultaneously.
                        </button>
                        <button onclick="checkPuzzle(this, 2, false)" class="quiz-option-btn" style="padding: 10px; margin: 0; font-size: 0.85rem; text-align: left;">
                            Tie both ropes together in a knot and burn from the center.
                        </button>
                    </div>

                    <div id="pFeedback2" style="display: none; padding: 10px 14px; border-radius: 8px; font-size: 0.85rem; margin-bottom: 14px;"></div>

                    <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid var(--border-light); padding-top: 12px;">
                        <button onclick="toggleHint('pHint2')" style="background: none; border: none; font-size: 0.85rem; color: var(--secondary); font-weight: 600; cursor: pointer;">
                            <i class="fa-regular fa-lightbulb"></i> Show Hint
                        </button>
                        <button onclick="toggleHint('pExp2')" style="background: none; border: none; font-size: 0.85rem; color: var(--primary); font-weight: 600; cursor: pointer;">
                            <i class="fa-solid fa-book-open"></i> Full Solution
                        </button>
                    </div>

                    <div id="pHint2" style="display: none; background: #FFFBEB; border-left: 3px solid #F59E0B; padding: 10px 12px; border-radius: 4px; font-size: 0.85rem; color: #92400E; margin-top: 12px;">
                        <strong>Hint:</strong> Lighting a rope from both ends burns it twice as fast, taking exactly 30 minutes!
                    </div>
                    <div id="pExp2" style="display: none; background: #F1F5F9; border-left: 3px solid var(--primary); padding: 10px 12px; border-radius: 4px; font-size: 0.85rem; color: var(--text-primary); margin-top: 12px;">
                        <strong>Step-by-Step Solution:</strong><br>
                        1. Light Rope 1 at <em>both ends</em>, and simultaneously light Rope 2 at <em>one end</em>.<br>
                        2. Exactly 30 minutes later, Rope 1 burns out completely. At this moment, exactly 30 minutes of Rope 2 is left.<br>
                        3. Immediately light the other end of Rope 2. The remaining 30 minutes will burn out in exactly 15 minutes!<br>
                        4. Total elapsed time = 30 + 15 = <strong>45 minutes</strong>.
                    </div>
                </div>
            </div>

            <!-- PUZZLE 3: The Secret Alphabet Cipher -->
            <div class="quiz-card puzzle-card" data-category="pattern group-a group-b" style="border-top: 4px solid #6366F1;">
                <div class="quiz-card-body" style="padding: 24px;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                        <span style="font-size: 0.75rem; font-weight: 700; color: #6366F1; background: #EEF2FF; padding: 4px 10px; border-radius: 9999px;">
                            <i class="fa-solid fa-key"></i> Code &amp; Cipher
                        </span>
                        <span style="font-size: 0.75rem; color: var(--text-muted); font-weight: 600;">All Classes</span>
                    </div>

                    <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 12px;">
                        The Word Value Code
                    </h3>

                    <p style="color: var(--text-secondary); font-size: 0.95rem; margin-bottom: 16px;">
                        In a secret student code, every letter is assigned its alphabetical position (A=1, B=2, ..., Z=26). If <strong>CAT = 24</strong> (3+1+20) and <strong>DOG = 26</strong> (4+15+7), what is the value of <strong>OWL</strong>?
                    </p>

                    <div class="puzzle-options" style="display: grid; grid-template-columns: 1fr 1fr; gap: 8px; margin-bottom: 16px;">
                        <button onclick="checkPuzzle(this, 3, false)" class="quiz-option-btn" style="padding: 10px; margin: 0; font-size: 0.9rem; text-align: center;">46</button>
                        <button onclick="checkPuzzle(this, 3, false)" class="quiz-option-btn" style="padding: 10px; margin: 0; font-size: 0.9rem; text-align: center;">48</button>
                        <button onclick="checkPuzzle(this, 3, true)" class="quiz-option-btn" style="padding: 10px; margin: 0; font-size: 0.9rem; text-align: center;">50</button>
                        <button onclick="checkPuzzle(this, 3, false)" class="quiz-option-btn" style="padding: 10px; margin: 0; font-size: 0.9rem; text-align: center;">54</button>
                    </div>

                    <div id="pFeedback3" style="display: none; padding: 10px 14px; border-radius: 8px; font-size: 0.85rem; margin-bottom: 14px;"></div>

                    <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid var(--border-light); padding-top: 12px;">
                        <button onclick="toggleHint('pHint3')" style="background: none; border: none; font-size: 0.85rem; color: var(--secondary); font-weight: 600; cursor: pointer;">
                            <i class="fa-regular fa-lightbulb"></i> Show Hint
                        </button>
                        <button onclick="toggleHint('pExp3')" style="background: none; border: none; font-size: 0.85rem; color: var(--primary); font-weight: 600; cursor: pointer;">
                            <i class="fa-solid fa-book-open"></i> Full Solution
                        </button>
                    </div>

                    <div id="pHint3" style="display: none; background: #FFFBEB; border-left: 3px solid #F59E0B; padding: 10px 12px; border-radius: 4px; font-size: 0.85rem; color: #92400E; margin-top: 12px;">
                        <strong>Hint:</strong> O is 15th, W is 23rd, and L is 12th in the alphabet.
                    </div>
                    <div id="pExp3" style="display: none; background: #F1F5F9; border-left: 3px solid var(--primary); padding: 10px 12px; border-radius: 4px; font-size: 0.85rem; color: var(--text-primary); margin-top: 12px;">
                        <strong>Solution:</strong> O = 15, W = 23, L = 12. Sum = \(15 + 23 + 12 = 50\). The correct value is <strong>50</strong>!
                    </div>
                </div>
            </div>

            <!-- PUZZLE 4: The River Crossing (Junior Logic) -->
            <div class="quiz-card puzzle-card" data-category="logic group-a" style="border-top: 4px solid #0EA5E9;">
                <div class="quiz-card-body" style="padding: 24px;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                        <span style="font-size: 0.75rem; font-weight: 700; color: #0EA5E9; background: #E0F2FE; padding: 4px 10px; border-radius: 9999px;">
                            <i class="fa-solid fa-compass"></i> Junior Explorer
                        </span>
                        <span style="font-size: 0.75rem; color: var(--text-muted); font-weight: 600;">Class 1 to 6</span>
                    </div>

                    <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 12px;">
                        The River Crossing Dilemma
                    </h3>

                    <p style="color: var(--text-secondary); font-size: 0.95rem; margin-bottom: 16px;">
                        A farmer must cross a river in a small boat with a <strong>Wolf</strong>, a <strong>Goat</strong>, and a bundle of <strong>Cabbage</strong>. The boat can only hold the farmer plus one item. If left alone, the wolf will eat the goat, or the goat will eat the cabbage. Which item must the farmer take across first?
                    </p>

                    <div class="puzzle-options" style="display: grid; grid-template-columns: 1fr; gap: 8px; margin-bottom: 16px;">
                        <button onclick="checkPuzzle(this, 4, false)" class="quiz-option-btn" style="padding: 10px; margin: 0; font-size: 0.9rem; text-align: left;">
                            A. Take the Wolf first
                        </button>
                        <button onclick="checkPuzzle(this, 4, true)" class="quiz-option-btn" style="padding: 10px; margin: 0; font-size: 0.9rem; text-align: left;">
                            B. Take the Goat first
                        </button>
                        <button onclick="checkPuzzle(this, 4, false)" class="quiz-option-btn" style="padding: 10px; margin: 0; font-size: 0.9rem; text-align: left;">
                            C. Take the Cabbage first
                        </button>
                    </div>

                    <div id="pFeedback4" style="display: none; padding: 10px 14px; border-radius: 8px; font-size: 0.85rem; margin-bottom: 14px;"></div>

                    <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid var(--border-light); padding-top: 12px;">
                        <button onclick="toggleHint('pHint4')" style="background: none; border: none; font-size: 0.85rem; color: var(--secondary); font-weight: 600; cursor: pointer;">
                            <i class="fa-regular fa-lightbulb"></i> Show Hint
                        </button>
                        <button onclick="toggleHint('pExp4')" style="background: none; border: none; font-size: 0.85rem; color: var(--primary); font-weight: 600; cursor: pointer;">
                            <i class="fa-solid fa-book-open"></i> Full Solution
                        </button>
                    </div>

                    <div id="pHint4" style="display: none; background: #FFFBEB; border-left: 3px solid #F59E0B; padding: 10px 12px; border-radius: 4px; font-size: 0.85rem; color: #92400E; margin-top: 12px;">
                        <strong>Hint:</strong> The wolf doesn't eat cabbage. Only the goat causes problems when left with either!
                    </div>
                    <div id="pExp4" style="display: none; background: #F1F5F9; border-left: 3px solid var(--primary); padding: 10px 12px; border-radius: 4px; font-size: 0.85rem; color: var(--text-primary); margin-top: 12px;">
                        <strong>Solution:</strong> The farmer must take the <strong>Goat</strong> across first, leaving the wolf alone with the cabbage (wolves don't eat cabbage). Then return, bring the cabbage, and bring the goat back, and so on!
                    </div>
                </div>
            </div>

            <!-- PUZZLE 5: The Clock Angle Riddle -->
            <div class="quiz-card puzzle-card" data-category="math group-b" style="border-top: 4px solid #EC4899;">
                <div class="quiz-card-body" style="padding: 24px;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                        <span style="font-size: 0.75rem; font-weight: 700; color: #EC4899; background: #FDF2F8; padding: 4px 10px; border-radius: 9999px;">
                            <i class="fa-solid fa-clock"></i> Geometry &amp; Angles
                        </span>
                        <span style="font-size: 0.75rem; color: var(--text-muted); font-weight: 600;">Olympiad Challenge</span>
                    </div>

                    <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 12px;">
                        The 3:15 Clock Angle Trap
                    </h3>

                    <p style="color: var(--text-secondary); font-size: 0.95rem; margin-bottom: 16px;">
                        At exactly <strong>3:15</strong> on an analog clock, what is the exact acute angle between the hour hand and the minute hand?
                    </p>

                    <div class="puzzle-options" style="display: grid; grid-template-columns: 1fr 1fr; gap: 8px; margin-bottom: 16px;">
                        <button onclick="checkPuzzle(this, 5, false)" class="quiz-option-btn" style="padding: 10px; margin: 0; font-size: 0.9rem; text-align: center;">0° (Overlapping)</button>
                        <button onclick="checkPuzzle(this, 5, true)" class="quiz-option-btn" style="padding: 10px; margin: 0; font-size: 0.9rem; text-align: center;">7.5°</button>
                        <button onclick="checkPuzzle(this, 5, false)" class="quiz-option-btn" style="padding: 10px; margin: 0; font-size: 0.9rem; text-align: center;">12°</button>
                        <button onclick="checkPuzzle(this, 5, false)" class="quiz-option-btn" style="padding: 10px; margin: 0; font-size: 0.9rem; text-align: center;">15°</button>
                    </div>

                    <div id="pFeedback5" style="display: none; padding: 10px 14px; border-radius: 8px; font-size: 0.85rem; margin-bottom: 14px;"></div>

                    <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid var(--border-light); padding-top: 12px;">
                        <button onclick="toggleHint('pHint5')" style="background: none; border: none; font-size: 0.85rem; color: var(--secondary); font-weight: 600; cursor: pointer;">
                            <i class="fa-regular fa-lightbulb"></i> Show Hint
                        </button>
                        <button onclick="toggleHint('pExp5')" style="background: none; border: none; font-size: 0.85rem; color: var(--primary); font-weight: 600; cursor: pointer;">
                            <i class="fa-solid fa-book-open"></i> Full Solution
                        </button>
                    </div>

                    <div id="pHint5" style="display: none; background: #FFFBEB; border-left: 3px solid #F59E0B; padding: 10px 12px; border-radius: 4px; font-size: 0.85rem; color: #92400E; margin-top: 12px;">
                        <strong>Hint:</strong> In 15 minutes, the hour hand has moved forward a quarter of the way toward 4!
                    </div>
                    <div id="pExp5" style="display: none; background: #F1F5F9; border-left: 3px solid var(--primary); padding: 10px 12px; border-radius: 4px; font-size: 0.85rem; color: var(--text-primary); margin-top: 12px;">
                        <strong>Solution:</strong> The minute hand is pointing exactly at 3 (90° from 12). The hour hand moves at 0.5° per minute. In 15 minutes, it moves \(15 \times 0.5° = 7.5°\) past 3. Therefore, the angle between them is exactly <strong>7.5°</strong>.
                    </div>
                </div>
            </div>

            <!-- PUZZLE 6: The Quick Animal Legs Puzzle (Junior Math) -->
            <div class="quiz-card puzzle-card" data-category="math group-a" style="border-top: 4px solid #14B8A6;">
                <div class="quiz-card-body" style="padding: 24px;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                        <span style="font-size: 0.75rem; font-weight: 700; color: #0D9488; background: #CCFBF1; padding: 4px 10px; border-radius: 9999px;">
                            <i class="fa-solid fa-paw"></i> Mental Math
                        </span>
                        <span style="font-size: 0.75rem; color: var(--text-muted); font-weight: 600;">Class 1 to 6</span>
                    </div>

                    <h3 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 12px;">
                        The Farmyard Mystery
                    </h3>

                    <p style="color: var(--text-secondary); font-size: 0.95rem; margin-bottom: 16px;">
                        A farmer counts <strong>10 heads</strong> and <strong>28 legs</strong> among his chickens (2 legs) and cows (4 legs). How many cows are on the farm?
                    </p>

                    <div class="puzzle-options" style="display: grid; grid-template-columns: 1fr 1fr; gap: 8px; margin-bottom: 16px;">
                        <button onclick="checkPuzzle(this, 6, false)" class="quiz-option-btn" style="padding: 10px; margin: 0; font-size: 0.9rem; text-align: center;">2 Cows</button>
                        <button onclick="checkPuzzle(this, 6, true)" class="quiz-option-btn" style="padding: 10px; margin: 0; font-size: 0.9rem; text-align: center;">4 Cows</button>
                        <button onclick="checkPuzzle(this, 6, false)" class="quiz-option-btn" style="padding: 10px; margin: 0; font-size: 0.9rem; text-align: center;">6 Cows</button>
                        <button onclick="checkPuzzle(this, 6, false)" class="quiz-option-btn" style="padding: 10px; margin: 0; font-size: 0.9rem; text-align: center;">8 Cows</button>
                    </div>

                    <div id="pFeedback6" style="display: none; padding: 10px 14px; border-radius: 8px; font-size: 0.85rem; margin-bottom: 14px;"></div>

                    <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid var(--border-light); padding-top: 12px;">
                        <button onclick="toggleHint('pHint6')" style="background: none; border: none; font-size: 0.85rem; color: var(--secondary); font-weight: 600; cursor: pointer;">
                            <i class="fa-regular fa-lightbulb"></i> Show Hint
                        </button>
                        <button onclick="toggleHint('pExp6')" style="background: none; border: none; font-size: 0.85rem; color: var(--primary); font-weight: 600; cursor: pointer;">
                            <i class="fa-solid fa-book-open"></i> Full Solution
                        </button>
                    </div>

                    <div id="pHint6" style="display: none; background: #FFFBEB; border-left: 3px solid #F59E0B; padding: 10px 12px; border-radius: 4px; font-size: 0.85rem; color: #92400E; margin-top: 12px;">
                        <strong>Hint:</strong> If all 10 animals were chickens, there would be \(10 \times 2 = 20\) legs. The extra 8 legs must belong to the cows!
                    </div>
                    <div id="pExp6" style="display: none; background: #F1F5F9; border-left: 3px solid var(--primary); padding: 10px 12px; border-radius: 4px; font-size: 0.85rem; color: var(--text-primary); margin-top: 12px;">
                        <strong>Solution:</strong> Extra legs = \(28 - 20 = 8\). Each cow has 2 extra legs compared to a chicken. Therefore, number of cows = \(8 \div 2 = 4\) cows (and 6 chickens). \(4 \times 4 + 6 \times 2 = 16 + 12 = 28\) legs!
                    </div>
                </div>
            </div>

        </div>

        <!-- BOTTOM CTA: QUIZ ARENA -->
        <div style="margin-top: 48px; background: linear-gradient(135deg, var(--primary) 0%, #1E1B4B 100%); border-radius: var(--radius-xl); padding: 40px; color: #FFFFFF; text-align: center;">
            <div class="section-eyebrow" style="background: rgba(255, 107, 0, 0.25); color: #FFA366; border-color: rgba(255, 107, 0, 0.4); margin-bottom: 16px;">
                Ready for the Next Level?
            </div>
            <h2 style="color: #FFFFFF; font-size: 2rem; margin-bottom: 12px;">Turn Your Logic Skills Into National Trophies!</h2>
            <p style="color: #CBD5E1; max-width: 640px; margin: 0 auto 28px; font-size: 1.05rem;">
                Compete against school champions across India in the All India Quiz Championships. Win laptops, tablets, and national scholarships.
            </p>
            <div style="display: flex; gap: 14px; justify-content: center; flex-wrap: wrap;">
                <a href="/daily-quiz" class="btn btn-primary btn-lg">
                    <i class="fa-solid fa-play"></i> Play Today's Daily Quiz
                </a>
                <a href="/enroll" class="btn btn-outline-white btn-lg" style="border: 2px solid #FFFFFF; color: #FFFFFF;">
                    <i class="fa-solid fa-trophy"></i> Enroll for Championship
                </a>
            </div>
        </div>

    </div>
</section>

<!-- PUZZLE INTERACTION SCRIPT -->
<script>
function checkPuzzle(btn, puzzleId, isCorrect) {
    const parent = btn.closest('.puzzle-card');
    const allBtns = parent.querySelectorAll('.puzzle-options button');
    const feedback = document.getElementById('pFeedback' + puzzleId);

    allBtns.forEach(b => b.disabled = true);

    if (isCorrect) {
        btn.classList.add('correct');
        feedback.style.display = 'block';
        feedback.style.background = '#ECFDF5';
        feedback.style.color = '#065F46';
        feedback.innerHTML = '<strong>Genius! 🎉 Correct answer!</strong> Click "Full Solution" below to see the complete logical breakdown.';
    } else {
        btn.classList.add('wrong');
        feedback.style.display = 'block';
        feedback.style.background = '#FEF2F2';
        feedback.style.color = '#991B1B';
        feedback.innerHTML = '<strong>Not quite! 💡</strong> Take another look at the clue or click "Show Hint" below to try again!';
    }
}

function toggleHint(elementId) {
    const el = document.getElementById(elementId);
    if (!el) return;
    el.style.display = (el.style.display === 'none' || el.style.display === '') ? 'block' : 'none';
}

// Category filter tabs
document.addEventListener('DOMContentLoaded', () => {
    const filterTabs = document.querySelectorAll('.filter-tab');
    const puzzleCards = document.querySelectorAll('.puzzle-card');

    filterTabs.forEach(tab => {
        tab.addEventListener('click', function() {
            filterTabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');

            const filter = this.getAttribute('data-filter');

            puzzleCards.forEach(card => {
                const category = card.getAttribute('data-category');
                if (filter === 'all' || category.includes(filter)) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});
</script>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
