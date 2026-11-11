<?php
$current_page = 'refund';
$page_title = 'Refund & Cancellation Policy | QuizWiz';
$page_desc = 'QuizWiz Refund and Cancellation Policy: Clear guidelines on registration fee cancellations, dispute resolutions, and processing timelines.';

require_once __DIR__ . '/includes/header.php';
?>

<section style="background: linear-gradient(135deg, var(--primary) 0%, #0F172A 100%); padding: 56px 0; color: #FFFFFF;">
    <div class="container text-center">
        <div class="section-eyebrow" style="background: rgba(255,255,255,0.1); color: #FFA366; border-color: rgba(255,255,255,0.2);">
            Transparent Service
        </div>
        <h1 style="color: #FFFFFF; margin-bottom: 12px;">Refund &amp; Cancellation Policy</h1>
        <p style="color: #CBD5E1; max-width: 600px; margin: 0 auto; font-size: 1.05rem;">
            Fair and transparent guidelines regarding championship registrations and premium test series.
        </p>
    </div>
</section>

<section class="section">
    <div class="container" style="max-width: 860px;">
        <div class="form-card" style="line-height: 1.8; color: var(--text-secondary);">
            <h2 style="font-size: 1.4rem; color: var(--primary); margin-bottom: 16px;">1. Free Daily Quizzes</h2>
            <p>
                All daily practice quizzes, category sample tests, and preliminary practice rounds hosted on <strong>QuizWiz</strong> are completely <strong>FREE</strong>. No payment or billing details are required to participate in daily web quizzes.
            </p>

            <h2 style="font-size: 1.4rem; color: var(--primary); margin-bottom: 16px;">2. National Championship Registration Fees</h2>
            <p>
                For official All India Championship rounds where physical kits, verified merit certificates, and prize eligibility are involved:
            </p>
            <ul style="padding-left: 20px; margin-bottom: 24px;">
                <li><strong>Cancellation Window:</strong> Parents/students may request a 100% full refund up to <strong>72 hours before</strong> the official national contest date.</li>
                <li><strong>After Contest Commencement:</strong> Once an exam slot has commenced or digital study materials/syllabus have been unlocked, fees are non-refundable.</li>
                <li><strong>Duplicate Transactions:</strong> If your account is debited twice due to a network glitch or payment gateway timeout, the extra charge is automatically refunded within 5–7 working days.</li>
            </ul>

            <h2 style="font-size: 1.4rem; color: var(--primary); margin-bottom: 16px;">3. Event Rescheduling or Technical Issues</h2>
            <p>
                In the rare event of a server disruption or unforeseen rescheduling on our platform, students will be automatically allotted a guaranteed re-attempt slot. If a student cannot attend the rescheduled session, a full 100% refund will be issued upon request.
            </p>

            <h2 style="font-size: 1.4rem; color: var(--primary); margin-bottom: 16px;">4. How to Request a Refund</h2>
            <p>
                To initiate a refund, please send your student enrollment ID, registered mobile number, and payment receipt via:
            </p>
            <ul style="padding-left: 20px; margin-bottom: 24px;">
                <li><strong>WhatsApp Helpline:</strong> <a href="<?php echo WHATSAPP_URL; ?>" target="_blank" rel="noopener noreferrer" style="color: #25D366; font-weight: 700;">+91 98015 06511</a></li>
                <li><strong>Email:</strong> <a href="mailto:info@quizwiz.co.in" style="color: var(--secondary); font-weight: 600;">info@quizwiz.co.in</a></li>
            </ul>
            <p>
                Approved refunds are credited directly back to the original source method (UPI, Debit/Credit Card, Net Banking) within 5–7 business days.
            </p>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
