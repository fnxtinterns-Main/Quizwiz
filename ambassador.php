<?php
$current_page = 'ambassador';
$page_title = 'Campus Ambassador & School Quiz Master Program | QuizWiz';
$page_desc = 'Become an official QuizWiz Campus Ambassador and Quiz Master in your school. Lead quiz clubs, earn official leadership certificates, LORs, and exclusive rewards.';

require_once __DIR__ . '/includes/header.php';

// Form submission handler
$submitted = false;
$applicant_name = '';
$school_name = '';
$submission_error = '';
$duplicate_submission = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'apply_ambassador') {
    // Spam protection: honeypot & submission velocity check
    $honeypot = trim($_POST['website_url'] ?? '');
    $form_time = (int)($_POST['form_time'] ?? 0);
    $is_bot = !empty($honeypot) || ($form_time > 0 && (time() - $form_time) < 2);

    $raw_name = trim($_POST['full_name'] ?? '');
    $raw_school = trim($_POST['school_name'] ?? '');
    $raw_phone = trim($_POST['whatsapp_num'] ?? '');
    if ($raw_phone === '') {
        $raw_phone = trim($_POST['phone'] ?? '');
    }
    $raw_email = trim($_POST['email'] ?? '');
    $raw_class = trim($_POST['student_class'] ?? '');
    $raw_paid_program = trim($_POST['paid_program'] ?? '');
    $raw_enrollment_id = trim($_POST['enrollment_id'] ?? '');
    $eligibility_confirmed = isset($_POST['eligibility_confirmed']) && $_POST['eligibility_confirmed'] === '1';

    $raw_statement = trim($_POST['statement'] ?? '');
    $raw_past_roles = trim($_POST['past_roles'] ?? '');

    if ($is_bot) {
        $applicant_name = htmlspecialchars($raw_name, ENT_QUOTES, 'UTF-8');
        $school_name = htmlspecialchars($raw_school, ENT_QUOTES, 'UTF-8');
        $submitted = true;
    } else {
        if (!filter_var($raw_email, FILTER_VALIDATE_EMAIL)) {
            $submission_error = 'Please enter a valid email address so we can send your application acknowledgment.';
        } elseif (!$eligibility_confirmed || $raw_paid_program === '') {
            $submission_error = 'Please confirm your program selection and eligibility acknowledgment before submitting.';
        } else {
            $claim_status = claim_quizwiz_form_submission('ambassador', $_POST['submission_token'] ?? '');
            if ($claim_status === 'duplicate') {
            $applicant_name = htmlspecialchars($raw_name, ENT_QUOTES, 'UTF-8');
            $school_name = htmlspecialchars($raw_school, ENT_QUOTES, 'UTF-8');
            $duplicate_submission = true;
            $submitted = true;
            } elseif ($claim_status !== 'claimed') {
                $submission_error = 'We could not verify this submission. Please refresh the page and submit the form again.';
            } else {
            // 1. Permanently record lead in local secure registry with all fields
            record_quizwiz_lead('campus_ambassador', [
                'name' => $raw_name,
                'email' => $raw_email,
                'phone' => $raw_phone,
                'school' => $raw_school,
                'class' => $raw_class,
                'group_or_program' => $raw_paid_program,
                'enrollment_id' => $raw_enrollment_id,
                'message_or_statement' => $raw_statement,
                'past_roles' => $raw_past_roles
            ]);

            // 2 & 3: Dispatch internal alert and student confirmation in single SMTP session
            $internalMsg = "<h3 style='color:#1B2559;'>New Campus Ambassador Application</h3>"
                . "<p><strong>Applicant Name:</strong> " . htmlspecialchars($raw_name) . "</p>"
                . "<p><strong>School / Institution:</strong> " . htmlspecialchars($raw_school) . "</p>"
                . "<p><strong>Class / Grade:</strong> " . htmlspecialchars($raw_class) . "</p>"
                . "<p><strong>WhatsApp Mobile:</strong> " . htmlspecialchars($raw_phone) . "</p>"
                . "<p><strong>Email Address:</strong> " . htmlspecialchars($raw_email) . "</p>"
                . "<p><strong>Paid Program:</strong> " . htmlspecialchars($raw_paid_program) . "</p>"
                . "<p><strong>Enrollment / Registration ID:</strong> " . htmlspecialchars($raw_enrollment_id) . "</p>"
                . "<p><strong>Why Ambassador (Statement):</strong><br>" . nl2br(htmlspecialchars($raw_statement)) . "</p>"
                . "<p><strong>Past Roles / Leadership:</strong> " . htmlspecialchars($raw_past_roles) . "</p>"
                . "<p style='font-size:12px;color:#64748B;'>Submitted via quizwiz.co.in/ambassador on " . date('d M Y, h:i A') . "</p>";

            $autoReplyMsg = "<h2 style='color:#1B2559;margin-top:0;'>We Received Your Application, " . htmlspecialchars($raw_name) . "!</h2>"
                . "<p>Thank you for applying to become an official <strong>QuizWiz Campus Ambassador &amp; School Quiz Master</strong> representing <strong>" . htmlspecialchars($raw_school) . "</strong>.</p>"
                . "<p>We have successfully received your application, and our student leadership team is currently reviewing your details.</p>"
                . "<p>Our National Coordinator will reach out to you directly on WhatsApp / Phone (<strong>" . htmlspecialchars($raw_phone) . "</strong>) within <strong>24 to 48 hours</strong> to discuss your onboarding, official Quiz Master credentials, and swag kit.</p>"
                . "<div style='background:#FFF7ED;border-left:4px solid #FF6B00;padding:12px 16px;margin:20px 0;border-radius:4px;font-size:14px;'>"
                . "<strong>Need quick onboarding or have questions?</strong><br>Reply directly to this email or chat with our team on WhatsApp: <a href='https://wa.me/919801506511' style='color:#FF6B00;font-weight:700;'>+91 98015 06511</a>"
                . "</div>"
                . "<p>Keep inspiring your campus!</p>"
                . "<p>Warm regards,<br><strong>Campus Ambassador Team</strong><br>QuizWiz India<br><a href='mailto:connect@quizwiz.co.in' style='color:#1B2559;'>connect@quizwiz.co.in</a></p>";

            $mailBatch = [
                [
                    'to' => EMAIL_SUPPORT,
                    'subject' => "New Ambassador Application: {$raw_name} ({$raw_school})",
                    'messageHtml' => $internalMsg,
                    'fromEmail' => EMAIL_CONNECT,
                    'fromName' => 'QuizWiz Ambassador System'
                ]
            ];
            if (!empty($raw_email) && filter_var($raw_email, FILTER_VALIDATE_EMAIL)) {
                $mailBatch[] = [
                    'to' => $raw_email,
                    'subject' => 'We have received your QuizWiz Campus Ambassador application!',
                    'messageHtml' => $autoReplyMsg,
                    'fromEmail' => EMAIL_CONNECT,
                    'fromName' => 'QuizWiz Ambassador Team'
                ];
            }
            $mailResults = send_quizwiz_batch_mail($mailBatch);
            $confirmation_sent = !empty($mailResults[1]);

            $applicant_name = htmlspecialchars($raw_name, ENT_QUOTES, 'UTF-8');
            $school_name = htmlspecialchars($raw_school, ENT_QUOTES, 'UTF-8');
            if (!$confirmation_sent) {
                $submission_error = 'Your application was received, but we could not send the acknowledgment email. Please contact ' . EMAIL_CONNECT . ' to confirm.';
            }
            $submitted = true;
            }
        }
    }
}
$submission_token = bin2hex(random_bytes(32));
?>

<!-- HERO SECTION: HIGH-ENERGY LEADERSHIP -->
<section style="background: linear-gradient(135deg, #1E1B4B 0%, #312E81 40%, #0F172A 100%); padding: 64px 0 76px; color: #FFFFFF; position: relative; overflow: hidden;">
    <div class="container text-center" style="position: relative; z-index: 2;">
        <div class="section-eyebrow" style="background: rgba(255, 107, 0, 0.2); color: #FFA366; border-color: rgba(255, 107, 0, 0.4);">
            <i class="fa-solid fa-crown text-orange"></i> All India Student Leadership Program 2026–27
        </div>
        <h1 style="color: #FFFFFF; font-size: clamp(2.2rem, 4.2vw, 3.4rem); margin-bottom: 16px; line-height: 1.25;">
            Become the <span style="color: var(--secondary);">Official Quiz Master</span> of Your School!
        </h1>
        <p style="color: #CBD5E1; max-width: 760px; margin: 0 auto 32px; font-size: 1.15rem; line-height: 1.6;">
            Lead India's most exciting student knowledge movement right inside your campus. Inspire your classmates, run electrifying trivia battles, earn an official <strong>Leadership Certificate &amp; LOR</strong>, and unlock exclusive rewards.
        </p>
        <p style="color: #FDE68A; max-width: 760px; margin: -16px auto 32px; font-size: 0.98rem; font-weight: 700;">
            Eligibility: Applicants must already be enrolled in one of QuizWiz's paid programs.
        </p>

        <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
            <a href="#applyForm" class="btn btn-primary btn-lg pulse-glow">
                <i class="fa-solid fa-paper-plane"></i> Apply for Ambassador (Open)
            </a>
            <a href="<?php echo WHATSAPP_URL; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-lg">
                <i class="fa-brands fa-whatsapp"></i> Chat with Program Lead
            </a>
        </div>

        <!-- Highlight Highlights Pills -->
        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; margin-top: 36px; font-size: 0.9rem;">
            <span style="display: inline-flex; align-items: center; gap: 8px; color: #E2E8F0; background: rgba(255,255,255,0.08); padding: 8px 16px; border-radius: var(--radius-full);">
                <i class="fa-solid fa-certificate text-orange"></i> Official Leadership Certificate &amp; LOR
            </span>
            <span style="display: inline-flex; align-items: center; gap: 8px; color: #E2E8F0; background: rgba(255,255,255,0.08); padding: 8px 16px; border-radius: var(--radius-full);">
                <i class="fa-solid fa-gift text-orange"></i> Ambassador Hoodie &amp; Swag Kit
            </span>
            <span style="display: inline-flex; align-items: center; gap: 8px; color: #E2E8F0; background: rgba(255,255,255,0.08); padding: 8px 16px; border-radius: var(--radius-full);">
                <i class="fa-solid fa-graduation-cap text-orange"></i> Complimentary Access to All Quiz Papers
            </span>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/app-download-qr.php'; ?>

<!-- SECTION 1: THE 4 MEGA REWARDS -->
<section class="section">
    <div class="container">
        <div class="section-header">
            <div class="section-eyebrow">Exclusive Leadership Perks</div>
            <h2>Why Become a QuizWiz Campus Ambassador?</h2>
            <p class="lead">
                This isn't just a title — it is an elite platform to build real-world leadership skills, public speaking confidence, and a standout academic resume.
            </p>
        </div>

        <div class="steps-grid" style="grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));">
            
            <div class="step-card" style="border-top: 4px solid var(--secondary);">
                <div style="font-size: 2.5rem; margin-bottom: 16px;">🎤</div>
                <h3 style="font-size: 1.25rem; margin-bottom: 10px;">Be the Campus Quiz Master</h3>
                <p style="font-size: 0.92rem; color: var(--text-secondary); line-height: 1.6;">
                    Gain the authority and resources to run classroom trivia showdowns, inter-house quiz leagues, and represent your school at the national finals.
                </p>
            </div>

            <div class="step-card" style="border-top: 4px solid #3B82F6;">
                <div style="font-size: 2.5rem; margin-bottom: 16px;">📜</div>
                <h3 style="font-size: 1.25rem; margin-bottom: 10px;">Official Certificate &amp; LOR</h3>
                <p style="font-size: 0.92rem; color: var(--text-secondary); line-height: 1.6;">
                    Receive a prestigious <strong>Certificate of Youth Leadership</strong> plus a personalized <strong>Letter of Recommendation (LOR)</strong> for future college admissions.
                </p>
            </div>

            <div class="step-card" style="border-top: 4px solid #10B981;">
                <div style="font-size: 2.5rem; margin-bottom: 16px;">👕</div>
                <h3 style="font-size: 1.25rem; margin-bottom: 10px;">Ambassador Swag &amp; Gear</h3>
                <p style="font-size: 0.92rem; color: var(--text-secondary); line-height: 1.6;">
                    Rock your campus with official QuizWiz Ambassador merchandise: stylish hoodies, personalized Quiz Master credentials, and exclusive stationery kits.
                </p>
            </div>

            <div class="step-card" style="border-top: 4px solid #8B5CF6;">
                <div style="font-size: 2.5rem; margin-bottom: 16px;">🎁</div>
                <h3 style="font-size: 1.25rem; margin-bottom: 10px;">Cash &amp; Scholarship Credits</h3>
                <p style="font-size: 0.92rem; color: var(--text-secondary); line-height: 1.6;">
                    Earn milestone cash honorariums and scholarship vouchers as more students from your school participate in daily quizzes and championships.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- SECTION 2: WHAT WILL YOU DO? (3-STEP MISSION) -->
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <div class="section-eyebrow">Your Campus Mission</div>
            <h2>What Does a Campus Ambassador Do?</h2>
            <p>You don't need prior organizing experience — we give you ready-to-use question decks and coordinator support!</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px; max-width: 1000px; margin: 0 auto;">
            
            <div class="form-card" style="display: flex; gap: 16px; align-items: flex-start;">
                <div style="background: var(--secondary-surface); color: var(--secondary); font-size: 1.5rem; width: 48px; height: 48px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-weight: 700;">
                    1
                </div>
                <div>
                    <h3 style="font-size: 1.15rem; margin-bottom: 6px;">Spread the Knowledge Buzz</h3>
                    <p style="font-size: 0.9rem; color: var(--text-secondary); margin: 0; line-height: 1.6;">
                        Introduce QuizWiz daily quizzes to your classmates, class groups, and teachers. Share daily questions and challenge friends to beat your scores.
                    </p>
                </div>
            </div>

            <div class="form-card" style="display: flex; gap: 16px; align-items: flex-start;">
                <div style="background: var(--primary-surface); color: var(--primary); font-size: 1.5rem; width: 48px; height: 48px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-weight: 700;">
                    2
                </div>
                <div>
                    <h3 style="font-size: 1.15rem; margin-bottom: 6px;">Build Your School Squad</h3>
                    <p style="font-size: 0.9rem; color: var(--text-secondary); margin: 0; line-height: 1.6;">
                        Mobilize peers to enroll in Group A (Classes 1–6) and Group B (Classes 7–12) for the All India Quiz Championships to represent your institution.
                    </p>
                </div>
            </div>

            <div class="form-card" style="display: flex; gap: 16px; align-items: flex-start;">
                <div style="background: #ECFDF5; color: #10B981; font-size: 1.5rem; width: 48px; height: 48px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-weight: 700;">
                    3
                </div>
                <div>
                    <h3 style="font-size: 1.15rem; margin-bottom: 6px;">Host Flash Quiz Rounds</h3>
                    <p style="font-size: 0.9rem; color: var(--text-secondary); margin: 0; line-height: 1.6;">
                        Use QuizWiz pre-made question decks during zero periods, library hours, or school club meetings to host quick 5-minute brain sprint showdowns!
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SECTION 3: APPLICATION FORM -->
<section id="applyForm" class="section">
    <div class="container" style="max-width: 860px;">
        <div class="form-card" style="border-top: 5px solid var(--secondary); box-shadow: var(--shadow-xl); padding: 40px 32px;">
            
            <?php if ($submitted): ?>
                <div style="text-align: center; padding: 24px 0;">
                    <div style="font-size: 3.5rem; margin-bottom: 12px;">🎉</div>
                    <h2 style="color: var(--primary); font-size: 1.8rem; margin-bottom: 8px;">
                        Application Submitted, <?php echo $applicant_name; ?>!
                    </h2>
                    <p style="color: var(--text-secondary); font-size: 1.1rem; max-width: 620px; margin: 0 auto 24px; line-height: 1.6;">
                        <?php if ($duplicate_submission): ?>
                            Your application has already been received. No duplicate emails were sent.
                        <?php else: ?>
                        Thank you for applying to represent <strong><?php echo $school_name; ?></strong> as a QuizWiz Campus Ambassador.
                        <?php if (isset($confirmation_sent) && $confirmation_sent): ?>
                            An acknowledgment has been sent to your email address.
                        <?php elseif (isset($confirmation_sent)): ?>
                            We could not send an acknowledgment email. Please contact <strong><?php echo htmlspecialchars(EMAIL_CONNECT, ENT_QUOTES, 'UTF-8'); ?></strong> to confirm your application.
                        <?php endif; ?>
                        Our National Coordinator will review your details and reach out on WhatsApp within 24–48 hours!
                        <?php endif; ?>
                    </p>

                    <div style="background: #F0FDF4; border: 1.5px solid #86EFAC; border-radius: var(--radius-lg); padding: 20px; max-width: 520px; margin: 0 auto 28px;">
                        <h4 style="color: #166534; font-size: 1rem; margin-bottom: 6px;">
                            <i class="fa-brands fa-whatsapp text-success"></i> Fast-Track Your Onboarding
                        </h4>
                        <p style="font-size: 0.9rem; color: #15803D; margin-bottom: 14px;">
                            Message the National Ambassador Coordinator directly on WhatsApp to confirm your application instantly!
                        </p>
                        <a href="https://wa.me/919801506511?text=Hi%20QuizWiz!%20I%20have%20submitted%20my%20Campus%20Ambassador%20application%20for%20<?php echo urlencode($school_name); ?>.%20My%20name%20is%20<?php echo urlencode($applicant_name); ?>." target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp">
                            <i class="fa-brands fa-whatsapp"></i> Confirm via WhatsApp Now
                        </a>
                    </div>

                    <a href="/puzzles" class="btn btn-outline-navy">Explore Brain Puzzles</a>
                </div>
            <?php else: ?>
                <div class="text-center" style="margin-bottom: 32px;">
                    <span class="quiz-difficulty-badge" style="position: static; background: var(--secondary-surface); color: var(--secondary); margin-bottom: 12px;">
                        Ambassador Application • Classes 6 to 12
                    </span>
                    <h2 style="font-size: 2rem; color: var(--primary); margin-bottom: 8px;">
                        Campus Ambassador Application
                    </h2>
                    <p style="color: var(--text-secondary); max-width: 560px; margin: 0 auto;">
                        Take 2 minutes to tell us about yourself. Your paid-program enrollment will be verified before approval.
                    </p>
                </div>

                <?php if (!empty($submission_error)): ?>
                    <div style="background: #FEF2F2; border: 1.5px solid #EF4444; color: #991B1B; padding: 16px; border-radius: var(--radius-md); margin-bottom: 20px;">
                        <?php echo htmlspecialchars($submission_error, ENT_QUOTES, 'UTF-8'); ?>
                    </div>
                <?php endif; ?>

                <form action="/ambassador#applyForm" method="POST">
                    <input type="hidden" name="action" value="apply_ambassador">
                    <input type="hidden" name="submission_token" value="<?php echo htmlspecialchars($submission_token, ENT_QUOTES, 'UTF-8'); ?>">
                    <input type="hidden" name="form_time" value="<?php echo time(); ?>">
                    <input type="text" name="website_url" style="display:none !important; position:absolute; left:-9999px;" tabindex="-1" autocomplete="off">

                    <div class="form-row-grid">
                        <div class="form-group">
                            <label class="form-label" for="full_name">Your Full Name <span class="text-orange">*</span></label>
                            <input type="text" id="full_name" name="full_name" class="form-control" placeholder="e.g. Aryan Malhotra" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="student_class">Current Class / Grade <span class="text-orange">*</span></label>
                            <select id="student_class" name="student_class" class="form-control" required>
                                <option value="">Select Class</option>
                                <option value="Class 6">Class 6</option>
                                <option value="Class 7">Class 7</option>
                                <option value="Class 8">Class 8</option>
                                <option value="Class 9">Class 9</option>
                                <option value="Class 10">Class 10</option>
                                <option value="Class 11">Class 11</option>
                                <option value="Class 12">Class 12</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row-grid form-row-grid-asym">
                        <div class="form-group">
                            <label class="form-label" for="school_name">School Full Name &amp; City <span class="text-orange">*</span></label>
                            <input type="text" id="school_name" name="school_name" class="form-control" placeholder="e.g. Modern School, Barakhamba Road, New Delhi" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="state">State / UT <span class="text-orange">*</span></label>
                            <input type="text" id="state" name="state" class="form-control" placeholder="e.g. Delhi" required>
                        </div>
                    </div>

                    <div class="form-row-grid">
                        <div class="form-group">
                            <label class="form-label" for="phone">Student / Parent WhatsApp No. <span class="text-orange">*</span></label>
                            <input type="tel" id="phone" name="phone" class="form-control" placeholder="10-digit mobile number" pattern="[0-9]{10}" required>
                            <span class="form-text">Used for Ambassador onboarding updates &amp; kit dispatch.</span>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email">Email Address <span class="text-orange">*</span></label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="you@example.com" autocomplete="email" required>
                        </div>
                    </div>

                    <div class="form-row-grid">
                        <div class="form-group">
                            <label class="form-label" for="paid_program">Program Track / Enrollment <span class="text-orange">*</span></label>
                            <select id="paid_program" name="paid_program" class="form-control" required>
                                <option value="">Select your track</option>
                                <option value="All India Quiz Championship - Group A">All India Quiz Championship - Group A (Class 1-6)</option>
                                <option value="All India Quiz Championship - Group B">All India Quiz Championship - Group B (Class 7-12)</option>
                                <option value="All India Quiz Championship - Group C">All India Quiz Championship - Group C (Graduates &amp; Aspirants)</option>
                                <option value="Another QuizWiz Paid Program">Another QuizWiz Paid Program</option>
                                <option value="Prospective Student Leader / Open Application">Prospective Student Leader / Open Application (Not enrolled yet)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="enrollment_id">Enrollment ID <span style="font-size:0.8rem; color:var(--text-muted);">(Optional for open applicants)</span></label>
                            <input type="text" id="enrollment_id" name="enrollment_id" class="form-control" placeholder="e.g. QW-2026-XXXX (or leave blank if applying)">
                            <span class="form-text">If enrolled, provide your ID for priority leader onboarding.</span>
                        </div>
                    </div>

                    <div class="form-group" style="background: #FFF7ED; border: 1.5px solid #FDBA74; padding: 14px 16px; border-radius: var(--radius-md); margin-top: 14px;">
                        <label style="display: flex; align-items: flex-start; gap: 10px; font-size: 0.85rem; color: var(--text-secondary); cursor: pointer; line-height: 1.5;">
                            <input type="checkbox" name="eligibility_confirmed" value="1" required style="margin-top: 4px; accent-color: var(--secondary);">
                            <span>
                                <strong>Ambassador Eligibility:</strong> I confirm that I want to represent QuizWiz at my school/college and agree to undergo orientation and ambassador verification before receiving official kits and incentives.
                            </span>
                        </label>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="statement">Why do you want to be the QuizWiz Ambassador for your school? <span class="text-orange">*</span></label>
                        <textarea id="statement" name="statement" class="form-control" rows="3" placeholder="Share why you love quizzing, your favorite subjects, or how you will inspire your classmates..." required></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="past_roles">Any past school activities or leadership roles? (Optional)</label>
                        <input type="text" id="past_roles" name="past_roles" class="form-control" placeholder="e.g. Quiz club member, class monitor, science exhibition, debate team...">
                    </div>

                    <!-- DPDP Act Consent Checkbox -->
                    <div class="form-group" style="background: rgba(248, 250, 252, 0.95); border: 1.5px solid var(--border-light); padding: 14px 16px; border-radius: var(--radius-md); margin-top: 14px;">
                        <label style="display: flex; align-items: flex-start; gap: 10px; font-size: 0.85rem; color: var(--text-secondary); cursor: pointer; line-height: 1.5;">
                            <input type="checkbox" name="dpdp_parental_consent" value="1" required style="margin-top: 4px; accent-color: var(--secondary);">
                            <span>
                                <strong>Parental Consent &amp; DPDP Act Compliance:</strong> I confirm that I am applying with parental/guardian knowledge. In compliance with the <strong>Digital Personal Data Protection Act, 2023</strong>, my contact information will be used solely for ambassador program coordination and certificate dispatch. QuizWiz does not sell student data or run targeted ads to minors. Read our <a href="/dpdp" target="_blank" style="color: var(--secondary); font-weight: 600; text-decoration: underline;">DPDP Charter</a>.
                            </span>
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg" style="width: 100%; margin-top: 16px;">
                        <i class="fa-solid fa-crown"></i> Submit Ambassador Application
                    </button>
                </form>
            <?php endif; ?>

        </div>
    </div>
</section>

<!-- SECTION 4: FREQUENTLY ASKED QUESTIONS -->
<section class="section section-alt">
    <div class="container" style="max-width: 820px;">
        <div class="section-header">
            <div class="section-eyebrow">Clear Answers</div>
            <h2>Ambassador Program FAQs</h2>
        </div>

        <div style="display: flex; flex-direction: column; gap: 16px;">
            <div class="form-card">
                <h4 style="color: var(--primary); font-size: 1.05rem; margin-bottom: 6px;">
                    Will this interfere with my regular school studies or exams?
                </h4>
                <p style="font-size: 0.92rem; color: var(--text-secondary); margin: 0; line-height: 1.6;">
                    Not at all! The program is designed specifically for school students and requires only 1 to 2 flexible hours per week. In fact, participating in quizzes sharpens your own academic speed and general knowledge for Olympiads and competitive exams.
                </p>
            </div>

            <div class="form-card">
                <h4 style="color: var(--primary); font-size: 1.05rem; margin-bottom: 6px;">
                    Who is eligible to apply for the Ambassador Program?
                </h4>
                <p style="font-size: 0.92rem; color: var(--text-secondary); margin: 0; line-height: 1.6;">
                    Only students currently enrolled in a paid QuizWiz program are eligible. You must provide your paid-program name and enrollment or registration ID for verification before approval.
                </p>
            </div>

            <div class="form-card">
                <h4 style="color: var(--primary); font-size: 1.05rem; margin-bottom: 6px;">
                    When and how do I receive my Leadership Certificate and LOR?
                </h4>
                <p style="font-size: 0.92rem; color: var(--text-secondary); margin: 0; line-height: 1.6;">
                    Ambassadors who successfully mobilize student participation and coordinate school delegations receive their official Certificate of Leadership and personalized Letter of Recommendation (LOR) signed by QuizWiz &amp; Futurenxt leadership.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- APP CTA & HELPLINE -->
<section class="section" style="padding-top: 0;">
    <div class="container">
        <div class="app-banner">
            <div>
                <div class="section-eyebrow" style="background: rgba(255,255,255,0.15); color: #FFFFFF; border-color: rgba(255,255,255,0.25);">
                    <i class="fa-solid fa-mobile-screen"></i> Practice Anywhere
                </div>
                <h2>Download the QuizWiz Mobile App</h2>
                <p>
                    Get instant access to daily live quiz rounds, offline practice modes, instant solution explanations, and personalized performance analytics on your phone.
                </p>
                <div class="app-store-badges">
                    <a href="<?php echo PLAYSTORE_URL; ?>" target="_blank" rel="noopener noreferrer" class="playstore-btn">
                        <i class="fa-brands fa-google-play" style="font-size: 2rem; color: #00E676;"></i>
                        <div style="text-align: left;">
                            <div style="font-size: 0.7rem; text-transform: uppercase; opacity: 0.8;">Get it on</div>
                            <div style="font-size: 1.15rem; font-weight: 700; line-height: 1.1;">Google Play</div>
                        </div>
                    </a>
                    <a href="<?php echo WHATSAPP_URL; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-lg">
                        <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
                    </a>
                </div>
            </div>
            <div style="text-align: center;">
                <div style="background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15); border-radius: var(--radius-xl); padding: 24px 20px; backdrop-filter: blur(10px); max-width: 320px; margin: 0 auto;">
                    <div style="font-size: 2.8rem; margin-bottom: 8px;">📱</div>
                    <h3 style="color: #FFFFFF; font-size: 1.15rem; margin-bottom: 6px;">Android App Live</h3>
                    <p style="font-size: 0.85rem; color: #CBD5E1; margin-bottom: 16px;">
                        Access 250+ timed papers, national rankings &amp; instant answer solutions.
                    </p>
                    <a href="<?php echo PLAYSTORE_URL; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-sm" style="width: 100%;">
                        <i class="fa-solid fa-arrow-down-to-bracket"></i> Install from Play Store
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/app-download-qr.php'; ?>

<?php require_once __DIR__ . '/includes/footer.php'; ?>