<?php
/**
 * Quiz categories, Daily Quizzes, Leaderboards, and Rewards
 */

$live_ticker_items = [
    ['icon' => '🔥', 'text' => 'Aarav S. from DPS Delhi scored 100% in Daily Science Sprint!'],
    ['icon' => '⚡', 'text' => 'Rohan K. achieved a 7-Day Quiz Streak!'],
    ['icon' => '🏆', 'text' => 'National Championship Prelims Registration: 85% Slots Booked!'],
    ['icon' => '🌟', 'text' => 'Ananya M. from Mumbai won the Junior Brainiac Badge!'],
    ['icon' => '🎁', 'text' => '₹5,00,000+ in Gadgets & Scholarships up for grabs this season!']
];

$top_champions = [
    [
        'rank' => 1,
        'name' => 'Aarav Sharma',
        'class' => 'Class 8',
        'school' => 'Delhi Public School, R.K. Puram',
        'city' => 'New Delhi',
        'score' => 2940,
        'streak' => 14,
        'badge' => 'Grandmaster'
    ],
    [
        'rank' => 2,
        'name' => 'Tanvi Venkatesh',
        'class' => 'Class 5',
        'school' => 'National Public School, Indiranagar',
        'city' => 'Bengaluru',
        'score' => 2880,
        'streak' => 12,
        'badge' => 'Quiz Prodigy'
    ],
    [
        'rank' => 3,
        'name' => 'Kabir Mukherjee',
        'class' => 'Class 10',
        'school' => 'South Point High School',
        'city' => 'Kolkata',
        'score' => 2810,
        'streak' => 11,
        'badge' => 'Olympiad Ace'
    ],
    [
        'rank' => 4,
        'name' => 'Aditi Deshmukh',
        'class' => 'Class 6',
        'school' => 'Loyola High School',
        'city' => 'Pune',
        'score' => 2750,
        'streak' => 9,
        'badge' => 'Junior Master'
    ],
    [
        'rank' => 5,
        'name' => 'Devansh Agarwal',
        'class' => 'Class 9',
        'school' => 'St. Xavier\'s School',
        'city' => 'Ranchi',
        'score' => 2710,
        'streak' => 8,
        'badge' => 'Speed Genius'
    ]
];

$championship_prizes = [
    [
        'title' => '1st National Rank',
        'reward' => 'Brand New Laptop + ₹50,000 Scholarship',
        'badge' => 'Gold Champion',
        'icon' => 'fa-laptop',
        'color' => '#F59E0B'
    ],
    [
        'title' => '2nd & 3rd National Ranks',
        'reward' => 'Apple iPad / Tablet + ₹25,000 Scholarship',
        'badge' => 'Silver Achiever',
        'icon' => 'fa-tablet-screen-button',
        'color' => '#3B82F6'
    ],
    [
        'title' => 'Top 10 State Rankers',
        'reward' => 'Smart Watches + STEM Science Kits',
        'badge' => 'State Topper',
        'icon' => 'fa-microchip',
        'color' => '#10B981'
    ],
    [
        'title' => 'All Qualifying Participants',
        'reward' => 'National Merit Certificate + Detailed Score Report',
        'badge' => 'Certificate',
        'icon' => 'fa-certificate',
        'color' => '#8B5CF6'
    ]
];

$quiz_categories = [
    [
        'id' => 'science-explorer',
        'title' => 'Science Explorer',
        'group' => 'Group A (Class 1-6)',
        'difficulty' => 'Beginner',
        'badge_color' => 'emerald',
        'questions_count' => 15,
        'duration' => '10 Mins',
        'image' => 'assets/images/science1.jpg',
        'icon' => 'fa-flask',
        'description' => 'Explore the wonders of biology, space, and everyday physical science through fun and curious questions.',
        'accent' => '#0ea5e9'
    ],
    [
        'id' => 'gk-safari',
        'title' => 'G.K. Safari',
        'group' => 'All Classes',
        'difficulty' => 'Intermediate',
        'badge_color' => 'amber',
        'questions_count' => 20,
        'duration' => '15 Mins',
        'image' => 'assets/images/gk1.jpg',
        'icon' => 'fa-globe-asia',
        'description' => 'Test your general knowledge on Indian geography, wildlife, national symbols, world capitals, and current events.',
        'accent' => '#f59e0b'
    ],
    [
        'id' => 'history-trek',
        'title' => 'History Trek',
        'group' => 'Group B (Class 7-12)',
        'difficulty' => 'Intermediate',
        'badge_color' => 'rose',
        'questions_count' => 15,
        'duration' => '12 Mins',
        'image' => 'assets/images/history1.jpg',
        'icon' => 'fa-landmark',
        'description' => 'Embark on an epic journey across ancient Indian dynasties, independence struggles, and transformative world events.',
        'accent' => '#ef4444'
    ],
    [
        'id' => 'brainy-explorer',
        'title' => 'Brainy Explorer',
        'group' => 'All Classes',
        'difficulty' => 'Advanced',
        'badge_color' => 'indigo',
        'questions_count' => 12,
        'duration' => '10 Mins',
        'image' => 'assets/images/brain1.jpg',
        'icon' => 'fa-brain',
        'description' => 'Navigate logical reasoning, pattern recognition, and lateral thinking riddles designed to test sharpness.',
        'accent' => '#6366f1'
    ],
    [
        'id' => 'scientific-odyssey',
        'title' => 'Scientific Odyssey',
        'group' => 'Group B (Class 7-12)',
        'difficulty' => 'Advanced',
        'badge_color' => 'cyan',
        'questions_count' => 20,
        'duration' => '15 Mins',
        'image' => 'assets/images/science2.jpg',
        'icon' => 'fa-atom',
        'description' => 'Deep dive into fundamental physics, chemical reactions, environmental ecosystems, and cutting-edge innovations.',
        'accent' => '#06b6d4'
    ],
    [
        'id' => 'math-mastermind',
        'title' => 'Math Mastermind',
        'group' => 'All Classes',
        'difficulty' => 'Intermediate',
        'badge_color' => 'violet',
        'questions_count' => 15,
        'duration' => '15 Mins',
        'image' => 'assets/images/maths2.jpg',
        'icon' => 'fa-calculator',
        'description' => 'Sharpen numerical agility with rapid mental arithmetic, geometrical puzzles, fractions, and logical sequences.',
        'accent' => '#8b5cf6'
    ]
];

// Rich question banks for interactive student engagement
$sample_quiz_questions = [
    [
        'id' => 1,
        'category' => 'G.K. Safari',
        'question' => 'Which is the highest civilian award in the Republic of India?',
        'options' => ['Padma Vibhushan', 'Bharat Ratna', 'Param Vir Chakra', 'Padma Bhushan'],
        'correct' => 1,
        'explanation' => 'The Bharat Ratna is India’s highest civilian award, instituted on 2 January 1954.'
    ],
    [
        'id' => 2,
        'category' => 'Science Explorer',
        'question' => 'Which planet in our solar system has the most prominent ring system?',
        'options' => ['Jupiter', 'Saturn', 'Uranus', 'Neptune'],
        'correct' => 1,
        'explanation' => 'Saturn is world-renowned for its magnificent and extensive ring system composed of ice and rock particles.'
    ],
    [
        'id' => 3,
        'category' => 'Math Mastermind',
        'question' => 'What is the value of 15% of 240?',
        'options' => ['32', '36', '42', '24'],
        'correct' => 1,
        'explanation' => '10% of 240 is 24, and 5% is 12. Therefore, 15% = 24 + 12 = 36.'
    ],
    [
        'id' => 4,
        'category' => 'History Trek',
        'question' => 'In which year did India launch its historic Constitution, becoming a sovereign Republic?',
        'options' => ['1947', '1948', '1950', '1952'],
        'correct' => 2,
        'explanation' => 'The Constitution of India came into effect on 26 January 1950, celebrated nationwide as Republic Day.'
    ],
    [
        'id' => 5,
        'category' => 'Brainy Explorer',
        'question' => 'Look at this sequence: 2, 6, 12, 20, 30, ... What is the next number?',
        'options' => ['40', '42', '44', '46'],
        'correct' => 1,
        'explanation' => 'Differences are +4, +6, +8, +10, so next difference is +12. 30 + 12 = 42.'
    ]
];
