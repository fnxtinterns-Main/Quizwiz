# QuizWiz — Online Quiz Competition & Free Daily Quizzes Platform

[![PHP Version](https://img.shields.io/badge/PHP-8.0%2B-blue.svg)](https://www.php.net/)
[![License](https://img.shields.io/badge/License-Proprietary-orange.svg)]()
[![Platform](https://img.shields.io/badge/Platform-Web%20%7C%20Hostinger-green.svg)]()

**QuizWiz** is India's leading online quiz championship and daily brain-training platform designed for school students across **Classes 1 through 12**.

---

## 🌟 Key Features

* **3-Color Brand System:** Deep Indigo Blue (`#1B2559`), Action Vibrant Orange (`#FF6B00`), and Crisp White (`#FFFFFF`).
* **Clean URLs:** Full support for pretty, extensionless URLs (`/`, `/about`, `/quizzes`, `/daily-quiz`, `/enroll`, `/contact`, `/privacy-policy`, `/refund-policy`, `/terms`).
* **Free Daily Quizzes:** Daily 5-minute challenges with automated streak tracking (🔥 Days), XP points, and WhatsApp score sharing.
* **Championship Segregation:**
  * **Group A (Classes 1–6):** Junior Explorer Division (curiosity, basics, visual questions).
  * **Group B (Classes 7–12):** Senior Scholar Division (Olympiad & NTSE level reasoning, current affairs, science).
* **Live National Leaderboard:** Top rankers showcase with school names and point tallies.
* **Direct WhatsApp Integration:** Embedded helpline (**+91 98015 06511**) with sticky floating chat widget.
* **Full Trust & Compliance Suite:** Dedicated Privacy Policy, Terms of Service, and Refund & Cancellation Policy.

---

## 📂 Project Structure

```
QUIZWIZ/
├── .htaccess                 # Apache / LiteSpeed clean URL rewrite rules (for Hostinger)
├── router.php                # Clean URL router for local PHP development server
├── index.php                 # Homepage (Hero, Live Mini-Quiz, Stats, Prizes, Leaderboard, Testimonials)
├── about.php                 # About Us & Championship Divisions breakdown
├── quizzes.php               # Quiz categories with interactive difficulty filter tabs
├── daily-quiz.php            # Free Daily Challenge runner with streak counters & timer
├── enroll.php                # Student registration form (Group A / Group B validated)
├── contact.php               # Verified contact channels, direct WhatsApp button & inquiry form
├── privacy-policy.php        # Student data protection & parental consent policy
├── refund-policy.php         # 100% free daily quizzes & 72-hour refund policy
├── terms.php                 # Official championship competition rules & fair-play terms
├── includes/
│   ├── config.php            # Site constants (phone numbers, WhatsApp URL, site name)
│   ├── header.php            # SEO tags, sticky navbar, mobile drawer
│   └── footer.php            # 4-column footer, floating WhatsApp button, interactive quiz modal
├── data/
│   └── quizzes.php           # Curated question banks, category descriptors, leaderboard data
└── assets/
    ├── css/style.css         # Modern design system (8px grid, Poppins + Inter, CSS variables)
    ├── js/main.js            # Mobile drawer, IntersectionObserver counters, modal quiz player
    └── images/               # Logos, subject thumbnails, and sponsor badges
```

---

## 🚀 Running Locally

To run the platform on your machine using PHP's built-in development server with clean URLs:

```bash
cd QUIZWIZ
php -S localhost:8000 router.php
```

Then open your browser at:
👉 **`http://localhost:8000`**

---

## 🌐 Deploying on Hostinger with GoDaddy Domain

### Step 1: Uploading Files to Hostinger
1. Log into your **Hostinger hPanel**.
2. Navigate to **Websites** &rarr; Select your domain/website &rarr; Open **File Manager**.
3. Go into the **`public_html`** directory.
4. Upload all files from this `QUIZWIZ` repository directly into `public_html`.
   *(Make sure `.htaccess`, `index.php`, `includes/`, and `assets/` are directly inside `public_html`).*

### Step 2: Pointing GoDaddy Domain to Hostinger
You have two options:

#### Option A: Hostinger Nameservers (Recommended)
1. In Hostinger hPanel, find your **Hostinger Nameservers** (typically):
   * `ns1.dns-parking.com`
   * `ns2.dns-parking.com`
2. Log into your **GoDaddy Account** &rarr; **Domain Portfolio** &rarr; Select your domain.
3. Click **DNS** &rarr; **Nameservers** &rarr; Select **Change Nameservers**.
4. Choose **"I'll use my own nameservers"** and paste the Hostinger nameservers.
5. Save changes (propagation takes 15 mins to 24 hours).

#### Option B: A Record (If you want to keep GoDaddy DNS)
1. In Hostinger hPanel, find your **Hosting IP Address** (e.g., `185.xxx.xxx.xxx`).
2. In GoDaddy DNS Management, edit the **`@` (A Record)** to point to the Hostinger IP address.
3. Set the **`www` (CNAME)** to `@`.

---

## 📞 Support & Helpline

* **Helpline & WhatsApp:** +91 98015 06511
* **Email:** info@quizwiz.co.in
* **Headquarters:** Ranchi, Jharkhand, India
