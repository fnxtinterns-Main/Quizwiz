<?php
$current_page = 'contact';
$page_title = 'Contact Us | QuizWiz Support & Helpline';
$page_desc = 'Contact QuizWiz for championship inquiries, student support, and school partnerships. Call or WhatsApp +91 9801506511.';

require_once __DIR__ . '/includes/header.php';

$feedback = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'send_inquiry') {
    $sender_name = trim($_POST['name'] ?? '');
    $feedback = "Thank you, {$sender_name}. Your message has been received! Our support coordinator will get in touch with you shortly on WhatsApp/Phone.";
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
                            <h4 style="margin: 0 0 4px 0;">Direct Email</h4>
                            <p style="margin: 0 0 4px 0; font-size: 0.95rem; color: var(--text-secondary);">
                                For administrative inquiries, partnerships, and technical support:
                            </p>
                            <a href="mailto:<?php echo EMAIL_CONTACT; ?>" style="color: var(--secondary); font-weight: 600;">
                                <?php echo EMAIL_CONTACT; ?>
                            </a>
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

                    <form action="/contact" method="POST">
                        <input type="hidden" name="action" value="send_inquiry">

                        <div class="form-group">
                            <label class="form-label" for="c_name">Full Name <span class="text-orange">*</span></label>
                            <input type="text" id="c_name" name="name" class="form-control" placeholder="Your name" required>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="c_email">Email Address <span class="text-orange">*</span></label>
                            <input type="email" id="c_email" name="email" class="form-control" placeholder="yourname@example.com" required>
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

<?php require_once __DIR__ . '/includes/footer.php'; ?>
