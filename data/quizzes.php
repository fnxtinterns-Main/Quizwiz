<?php
/**
 * Quiz categories, Field-Specific Questions, Leaderboards, and Rewards
 */

$live_ticker_items = [
    ['icon' => '🔬', 'text' => 'Aarav S. from DPS Delhi scored 100% in Science Explorer!'],
    ['icon' => '⚡', 'text' => 'Rohan K. achieved 100% Accuracy in Mathematics Mastermind!'],
    ['icon' => '🏆', 'text' => 'National Championship Prelims Registration: 85% Slots Booked!'],
    ['icon' => '🌟', 'text' => 'Ananya M. from Mumbai won the Junior Brainiac Award!'],
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
        'accuracy' => '99% Accuracy',
        'title' => 'National Rank 1'
    ],
    [
        'rank' => 2,
        'name' => 'Tanvi Venkatesh',
        'class' => 'Class 5',
        'school' => 'National Public School, Indiranagar',
        'city' => 'Bengaluru',
        'score' => 2880,
        'accuracy' => '98% Accuracy',
        'title' => 'National Rank 2'
    ],
    [
        'rank' => 3,
        'name' => 'Kabir Mukherjee',
        'class' => 'Class 10',
        'school' => 'South Point High School',
        'city' => 'Kolkata',
        'score' => 2810,
        'accuracy' => '97% Accuracy',
        'title' => 'National Rank 3'
    ],
    [
        'rank' => 4,
        'name' => 'Aditi Deshmukh',
        'class' => 'Class 6',
        'school' => 'Loyola High School',
        'city' => 'Pune',
        'score' => 2750,
        'accuracy' => '96% Accuracy',
        'title' => 'National Rank 4'
    ],
    [
        'rank' => 5,
        'name' => 'Devansh Agarwal',
        'class' => 'Class 9',
        'school' => 'St. Xavier\'s School',
        'city' => 'Ranchi',
        'score' => 2710,
        'accuracy' => '95% Accuracy',
        'title' => 'National Rank 5'
    ]
];

$championship_prizes = [
    [
        'title' => '1st National Rank',
        'reward' => 'Brand New Laptop + ₹50,000 Scholarship',
        'tier' => 'National 1st Prize',
        'icon' => 'fa-laptop',
        'color' => '#F59E0B'
    ],
    [
        'title' => '2nd & 3rd National Ranks',
        'reward' => 'Apple iPad / Tablet + ₹25,000 Scholarship',
        'tier' => 'National 2nd & 3rd Prize',
        'icon' => 'fa-tablet-screen-button',
        'color' => '#3B82F6'
    ],
    [
        'title' => 'Top 10 State Rankers',
        'reward' => 'Smart Watches + STEM Science Kits',
        'tier' => 'State Honors',
        'icon' => 'fa-microchip',
        'color' => '#10B981'
    ],
    [
        'title' => 'All Qualifying Participants',
        'reward' => 'National Merit Certificate + Detailed Score Report',
        'tier' => 'Merit Recognition',
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
        'image' => '/assets/images/science1.jpg',
        'icon' => 'fa-flask',
        'description' => 'Explore the wonders of biology, space, the solar system, and everyday physical science through engaging questions.',
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
        'image' => '/assets/images/gk1.jpg',
        'icon' => 'fa-globe-asia',
        'description' => 'Test your general knowledge on Indian geography, wildlife sanctuaries, national emblems, capitals, and current events.',
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
        'image' => '/assets/images/history1.jpg',
        'icon' => 'fa-landmark',
        'description' => 'Embark on an epic journey across ancient Indian dynasties, independence leaders, freedom struggles, and world history.',
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
        'image' => '/assets/images/brain1.jpg',
        'icon' => 'fa-brain',
        'description' => 'Navigate logical reasoning, pattern recognition, spatial puzzles, and lateral thinking riddles designed to test sharpness.',
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
        'image' => '/assets/images/science2.jpg',
        'icon' => 'fa-atom',
        'description' => 'Deep dive into fundamental physics, chemical formulas, cellular biology, environmental ecosystems, and space science.',
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
        'image' => '/assets/images/maths2.jpg',
        'icon' => 'fa-calculator',
        'description' => 'Sharpen numerical speed with mental arithmetic, percentage calculations, geometrical formulas, and logic sequences.',
        'accent' => '#8b5cf6'
    ]
];

// 6 Dedicated Field-Specific Question Banks
$category_questions = [
    'science-explorer' => [
        [
            'q' => 'Which gas do green plants absorb from the atmosphere during photosynthesis?',
            'options' => ['Oxygen', 'Carbon Dioxide', 'Nitrogen', 'Argon'],
            'correct' => 1,
            'exp' => 'Plants absorb Carbon Dioxide (CO2) from the air and release Oxygen using sunlight and chlorophyll.'
        ],
        [
            'q' => 'Which is the largest organ in the human body?',
            'options' => ['Liver', 'Brain', 'Skin', 'Heart'],
            'correct' => 2,
            'exp' => 'The skin is the largest organ of the human body, acting as a protective barrier.'
        ],
        [
            'q' => 'What natural force pulls all objects towards the center of the Earth?',
            'options' => ['Magnetism', 'Gravity', 'Friction', 'Static Electric Force'],
            'correct' => 1,
            'exp' => 'Gravity is the universal attractive force that pulls objects towards the Earth.'
        ]
    ],
    'gk-safari' => [
        [
            'q' => 'Which is the highest civilian award in the Republic of India?',
            'options' => ['Padma Vibhushan', 'Bharat Ratna', 'Param Vir Chakra', 'Padma Bhushan'],
            'correct' => 1,
            'exp' => 'The Bharat Ratna is India’s highest civilian award, instituted in 1954.'
        ],
        [
            'q' => 'Which Indian state has the longest coastline?',
            'options' => ['Maharashtra', 'Tamil Nadu', 'Gujarat', 'Andhra Pradesh'],
            'correct' => 2,
            'exp' => 'Gujarat has the longest mainland coastline in India, spanning over 1,600 km.'
        ],
        [
            'q' => 'What is the national aquatic animal of India?',
            'options' => ['Ganges River Dolphin', 'Gharial Crocodile', 'Olive Ridley Turtle', 'Blue Whale'],
            'correct' => 0,
            'exp' => 'The South Asian River Dolphin (Ganges River Dolphin) is India\'s official national aquatic animal.'
        ]
    ],
    'history-trek' => [
        [
            'q' => 'In which year did India adopt its Constitution and become a sovereign Republic?',
            'options' => ['1947', '1948', '1950', '1952'],
            'correct' => 2,
            'exp' => 'The Constitution of India came into effect on 26 January 1950, celebrated nationwide as Republic Day.'
        ],
        [
            'q' => 'Who was revered as the "Iron Man of India" for uniting the princely states?',
            'options' => ['Subhas Chandra Bose', 'Bhagat Singh', 'Sardar Vallabhbhai Patel', 'Bal Gangadhar Tilak'],
            'correct' => 2,
            'exp' => 'Sardar Vallabhbhai Patel united over 560 princely states into the Indian Union.'
        ],
        [
            'q' => 'Which Mughal emperor commissioned the construction of the Taj Mahal in Agra?',
            'options' => ['Akbar', 'Jahangir', 'Shah Jahan', 'Aurangzeb'],
            'correct' => 2,
            'exp' => 'Shah Jahan built the Taj Mahal in Agra in memory of his beloved wife Mumtaz Mahal.'
        ]
    ],
    'brainy-explorer' => [
        [
            'q' => 'Look at this sequence: 2, 6, 12, 20, 30, ... What is the next number?',
            'options' => ['40', '42', '44', '46'],
            'correct' => 1,
            'exp' => 'Differences increase: +4, +6, +8, +10, so next is +12. 30 + 12 = 42.'
        ],
        [
            'q' => 'If a plane crashes exactly on the border of India and Nepal, where do they bury the survivors?',
            'options' => ['In India', 'In Nepal', 'In the neutral buffer zone', 'Survivors are not buried'],
            'correct' => 3,
            'exp' => 'Survivors are still alive, so you do not bury them!'
        ],
        [
            'q' => 'If DAY is coded as 4125 (D=4, A=1, Y=25), how is CAT coded?',
            'options' => ['3120', '3220', '3119', '3219'],
            'correct' => 0,
            'exp' => 'C=3, A=1, T=20, giving 3120.'
        ]
    ],
    'scientific-odyssey' => [
        [
            'q' => 'What is the SI unit of electrical resistance?',
            'options' => ['Volt', 'Ampere', 'Ohm', 'Watt'],
            'correct' => 2,
            'exp' => 'The Ohm (symbol: Ω) is the official SI unit of electrical resistance.'
        ],
        [
            'q' => 'Which cellular organelle is known as the "Powerhouse of the Cell"?',
            'options' => ['Ribosome', 'Mitochondrion', 'Golgi apparatus', 'Lysosome'],
            'correct' => 1,
            'exp' => 'Mitochondria generate most of the cell\'s chemical energy in the form of ATP.'
        ],
        [
            'q' => 'Can sound waves travel through a complete vacuum (like outer space)?',
            'options' => ['Yes, at the speed of light', 'Yes, but very slowly', 'No, sound requires a medium', 'Only in high temperatures'],
            'correct' => 2,
            'exp' => 'Sound is a mechanical wave and requires a physical medium (gas, liquid, or solid) to propagate.'
        ]
    ],
    'math-mastermind' => [
        [
            'q' => 'What is the sum of interior angles in any triangle in Euclidean geometry?',
            'options' => ['90 degrees', '180 degrees', '270 degrees', '360 degrees'],
            'correct' => 1,
            'exp' => 'The interior angles of any triangle always add up to exactly 180 degrees.'
        ],
        [
            'q' => 'What is 15% of 240?',
            'options' => ['32', '36', '42', '24'],
            'correct' => 1,
            'exp' => '10% of 240 = 24, and 5% = 12. Therefore, 15% = 24 + 12 = 36.'
        ],
        [
            'q' => 'If a square has a perimeter of 48 cm, what is the length of each side?',
            'options' => ['10 cm', '12 cm', '14 cm', '16 cm'],
            'correct' => 1,
            'exp' => 'Perimeter = 4 × side. Side = 48 ÷ 4 = 12 cm.'
        ]
    ]
];
