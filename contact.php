<?php
$current_page = 'contact';
$page_title = 'Contact Us | QuizWiz Support & Helpline';
$page_desc = 'Contact QuizWiz for championship inquiries, student support, and school partnerships. Call or WhatsApp +91 9801506511.';

require_once __DIR__ . '/includes/header.php';

$feedback = '';
$form_error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'send_inquiry') {
    // Spam protection: honeypot & submission velocity check
    $honeypot = trim($_POST['website_url'] ?? '');
    $form_time = (int)($_POST['form_time'] ?? 0);
    $is_bot = !empty($honeypot) || ($form_time > 0 && (time() - $form_time) < 2);

    $sender_name = trim($_POST['name'] ?? '');
    $sender_email = trim($_POST['email'] ?? '');
    $sender_phone = trim($_POST['phone'] ?? '');
    $sender_msg = trim($_POST['message'] ?? '');
    $safe_sender = htmlspecialchars($sender_name, ENT_QUOTES, 'UTF-8');

    if ($is_bot) {
        $feedback = "Thank you, {$safe_sender}. Your message has been received!";
    } elseif (!filter_var($sender_email, FILTER_VALIDATE_EMAIL)) {
        $form_error = 'Please enter a valid email address so we can respond to your message.';
    } else {
        record_quizwiz_lead('general_inquiry', [
            'name' => $sender_name,
            'email' => $sender_email,
            'phone' => $sender_phone,
            'detail1' => mb_substr($sender_msg, 0, 150),
            'detail2' => ''
        ]);

        // 1. Alert internal support team
        $internalMsg = "<h3 style='color:#1B2559;'>New Contact Inquiry</h3>"
            . "<p><strong>Name:</strong> {$safe_sender}</p>"
            . "<p><strong>Email:</strong> " . htmlspecialchars($sender_email) . "</p>"
            . "<p><strong>Phone:</strong> " . htmlspecialchars($sender_phone) . "</p>"
            . "<p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($sender_msg)) . "</p>"
            . "<p style='font-size:12px;color:#64748B;'>Submitted via quizwiz.co.in/contact on " . date('d M Y, h:i A') . "</p>";
        send_quizwiz_mail(EMAIL_SUPPORT, "New Contact Inquiry from {$sender_name}", $internalMsg, EMAIL_SUPPORT, 'QuizWiz Helpdesk');

        // 2. Auto-reply confirmation to sender from support@quizwiz.co.in
        if (!empty($sender_email) && filter_var($sender_email, FILTER_VALIDATE_EMAIL)) {
            $replyMsg = "<h2 style='color:#1B2559;margin-top:0;'>We Received Your Message, {$safe_sender}!</h2>"
                . "<p>Thank you for reaching out to QuizWiz. Our support team has successfully received your inquiry.</p>"
                . "<p>A support coordinator is looking into your message and will respond to you shortly via email or phone/WhatsApp (<strong>" . htmlspecialchars($sender_phone) . "</strong>).</p>"
                . "<div style='background:#F8FAFC;border:1px solid #E2E8F0;padding:12px 16px;border-radius:6px;margin:16px 0;font-size:13px;'>"
                . "<strong>Summary of your message:</strong><br>" . nl2br(htmlspecialchars($sender_msg))
                . "</div>"
                . "<p>If you need urgent assistance, you can also reach us directly on WhatsApp at +91 98015 06511.</p>"
                . "<p>Warm regards,<br><strong>QuizWiz Support Team</strong><br><a href='mailto:support@quizwiz.co.in'>support@quizwiz.co.in</a></p>";
            $confirmation_sent = send_quizwiz_mail($sender_email, 'We have received your message | QuizWiz Support', $replyMsg, EMAIL_SUPPORT, 'QuizWiz Support Team');
        } else {
            $confirmation_sent = false;
        }

        $feedback = "Thank you, {$safe_sender}. Your message has been received. ";
        $feedback .= $confirmation_sent
            ? "A confirmation has been sent to {$sender_email}. "
            : "We could not send a confirmation to {$sender_email}; our team will still respond to your inquiry. ";
        $feedback .= "Our support coordinator will get in touch with you shortly!";
    }
}
?>

<!-- PAGE HEADER -->
<section style="background: linear-gradient(135deg, var(--primary) 0%, #10163A 100%); padding: 64px 0; color: #FFFFFF;">
    <div class="container text-center">
        <div class="section-eyebrow" style="background: rgba(255,255,255,0.1); color: #FFA366; border-color: rgba(255,255,255,0.2);">
            We are here to help
        </div>
        <h1 style="color: #FFFFFF; margin-bottom: 16px;">Contact QuizWiz</h1>
        <p style="color: #CBD5E1; max-width: 650px; margin: 0 auto; font-size: 1.15rem;">
            Have questions about student registration, championship rounds, or school partnerships? Our team is available 7 days a week.
        </p>
    </div>
</section>

<?php require __DIR__ . '/includes/app-download-qr.php'; ?>

<section class="section">
    <div class="container">
        <div class="hero-grid" style="align-items: start;">
            <!-- Left: Contact Information Cards -->
            <div>
                <h2 style="font-size: 1.75rem; margin-bottom: 24px;">Get in Touch</h2>

                <div style="display: flex; flex-direction: column; gap: 20px; margin-bottom: 32px;">
                    <!-- Phone & WhatsApp Card -->
                    <div class="form-card" style="display: flex; align-items: flex-start; gap: 16px; padding: 20px;">
                        <div style="width: 48px; height: 48px; border-radius: var(--radius-md); background: #25D366; color: #FFFFFF; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; flex-shrink: 0;">
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>
                        <div>
                            <h4 style="margin: 0 0 4px 0;">Official Helpline &amp; WhatsApp</h4>
                            <p style="margin: 0 0 10px 0; font-size: 1.1rem; font-weight: 700; color: var(--primary);">
                                <?php echo PHONE_DISPLAY; ?>
                            </p>
                            <a href="<?php echo WHATSAPP_URL; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-sm">
                                <i class="fa-brands fa-whatsapp"></i> Click to Chat on WhatsApp
                            </a>
                        </div>
                    </div>

                    <!-- Email Card -->
                    <div class="form-card" style="display: flex; align-items: flex-start; gap: 16px; padding: 20px;">
                        <div style="width: 48px; height: 48px; border-radius: var(--radius-md); background: var(--secondary-surface); color: var(--secondary); display: flex; align-items: center; justify-content: center; font-size: 1.4rem; flex-shrink: 0;">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                        <div>
                            <h4 style="margin: 0 0 6px 0;">Official Emails</h4>
                            <div style="font-size: 0.92rem; margin-bottom: 6px;">
                                <strong>General &amp; Student Support:</strong><br>
                                <a href="mailto:<?php echo EMAIL_SUPPORT; ?>" style="color: var(--secondary); font-weight: 600;">
                                    <?php echo EMAIL_SUPPORT; ?>
                                </a>
                            </div>
                            <div style="font-size: 0.92rem;">
                                <strong>Ambassadors &amp; Partnerships:</strong><br>
                                <a href="mailto:<?php echo EMAIL_CONNECT; ?>" style="color: var(--secondary); font-weight: 600;">
                                    <?php echo EMAIL_CONNECT; ?>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Headquarters Card -->
                    <div class="form-card" style="display: flex; align-items: flex-start; gap: 16px; padding: 20px;">
                        <div style="width: 48px; height: 48px; border-radius: var(--radius-md); background: var(--primary-surface); color: var(--primary); display: flex; align-items: center; justify-content: center; font-size: 1.4rem; flex-shrink: 0;">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div>
                            <h4 style="margin: 0 0 4px 0;">Operating Office</h4>
                            <p style="margin: 0; font-size: 0.95rem; color: var(--text-secondary);">
                                QuizWiz Headquarters, Ranchi, Jharkhand, India.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Inquiry Form -->
            <div>
                <div class="form-card">
                    <h3 style="margin-bottom: 8px;">Send Us a Message</h3>
                    <p style="font-size: 0.9rem; margin-bottom: 24px;">Fill out the form below and an advisor will reply within 24 hours.</p>

                    <?php if (!empty($feedback)): ?>
                        <div style="background: #ECFDF5; border: 1.5px solid #10B981; color: #065F46; padding: 16px; border-radius: var(--radius-md); margin-bottom: 20px;">
                            <i class="fa-solid fa-circle-check" style="font-size: 1.2rem; margin-right: 8px;"></i>
                            <?php echo htmlspecialchars($feedback); ?>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($form_error)): ?>
                        <div style="background: #FEF2F2; border: 1.5px solid #EF4444; color: #991B1B; padding: 16px; border-radius: var(--radius-md); margin-bottom: 20px;">
                            <i class="fa-solid fa-triangle-exclamation" style="font-size: 1.2rem; margin-right: 8px;"></i>
                            <?php echo htmlspecialchars($form_error, ENT_QUOTES, 'UTF-8'); ?>
                        </div>
                    <?php endif; ?>

                    <form action="/contact" method="POST">
                        <input type="hidden" name="action" value="send_inquiry">
                        <input type="hidden" name="form_time" value="<?php echo time(); ?>">
                        <input type="text" name="website_url" style="display:none !important; position:absolute; left:-9999px;" tabindex="-1" autocomplete="off">

                        <div class="form-group">
                            <label class="form-label" for="c_name">Full Name <span class="text-orange">*</span></label>
                            <input type="text" id="c_name" name="name" class="form-control" placeholder="Your name" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="c_email">Email Address <span class="text-orange">*</span></label>
                            <input type="email" id="c_email" name="email" class="form-control" placeholder="yourname@example.com" autocomplete="email" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="c_phone">Phone / WhatsApp Number <span class="text-orange">*</span></label>
                            <input type="tel" id="c_phone" name="phone" class="form-control" placeholder="10-digit mobile" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="c_msg">Your Question or Message <span class="text-orange">*</span></label>
                            <textarea id="c_msg" name="message" class="form-control" rows="4" placeholder="How can we help you?" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;">
                            <i class="fa-solid fa-paper-plane"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/app-download-qr.php'; ?>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
