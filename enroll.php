<?php
$current_page = 'enroll';
$page_title = 'Student Enrollment | All India Quiz Championships';
$page_desc = 'Enroll your child or school student in QuizWiz All India Quiz Championships. Choose between Group A (Class 1-6) and Group B (Class 7-12).';

require_once __DIR__ . '/includes/header.php';

$success_message = '';
$error_message = '';

// Handle Enrollment Form Submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'enroll_student') {
    // Spam protection: honeypot & submission velocity check
    $honeypot = trim($_POST['website_url'] ?? '');
    $form_time = (int)($_POST['form_time'] ?? 0);
    $is_bot = !empty($honeypot) || ($form_time > 0 && (time() - $form_time) < 2);

    $name = trim($_POST['student_name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $school = trim($_POST['school'] ?? '');
    $class = trim($_POST['student_class'] ?? '');
    $group = trim($_POST['competition_group'] ?? '');

    // Validation
    if ($is_bot) {
        // Silently accept bot to prevent repeated retry attacks
        $success_message = "Thank you, " . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . "! Your registration has been received.";
    } elseif (empty($name) || empty($email) || empty($phone) || empty($school) || empty($class) || empty($group)) {
        $error_message = 'Please fill in all mandatory fields before submitting.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = 'Please provide a valid email address.';
    } else {
        // Record lead securely
        record_quizwiz_lead('championship_enrollment', [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'detail1' => $school,
            'detail2' => "Class: {$class} | Group: {$group}"
        ]);

        $safe_name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
        $safe_group = htmlspecialchars($group, ENT_QUOTES, 'UTF-8');
        $safe_phone = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');

        // 1. Alert internal support team
        $internalMsg = "<h3 style='color:#1B2559;'>New Student Championship Enrollment</h3>"
            . "<p><strong>Student Name:</strong> {$safe_name}</p>"
            . "<p><strong>Class:</strong> " . htmlspecialchars($class) . "</p>"
            . "<p><strong>Competition Group:</strong> {$safe_group}</p>"
            . "<p><strong>School / Institution:</strong> " . htmlspecialchars($school) . "</p>"
            . "<p><strong>WhatsApp Phone:</strong> {$safe_phone}</p>"
            . "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>"
            . "<p style='font-size:12px;color:#64748B;'>Submitted via quizwiz.co.in/enroll on " . date('d M Y, h:i A') . "</p>";
        send_quizwiz_mail(EMAIL_SUPPORT, "New Championship Enrollment: {$name} ({$group})", $internalMsg, EMAIL_SUPPORT, 'QuizWiz Enrollments');

        // 2. Confirmation to student/parent from support@quizwiz.co.in
        $studentMsg = "<h2 style='color:#1B2559;margin-top:0;'>Enrollment Confirmed, {$safe_name}!</h2>"
            . "<p>Thank you for enrolling in the <strong>All India Quiz Championships</strong> representing <strong>" . htmlspecialchars($school) . "</strong> in <strong>{$safe_group}</strong>.</p>"
            . "<p>Your registration has been successfully received by our academic desk.</p>"
            . "<p>Our academic support team will dispatch the preliminary test dates, syllabus outline, and preparation materials directly to your WhatsApp number (<strong>{$safe_phone}</strong>) and email.</p>"
            . "<div style='background:#EFF6FF;border-left:4px solid #3B82F6;padding:12px 16px;margin:20px 0;border-radius:4px;font-size:14px;'>"
            . "<strong>Championship Support:</strong><br>If you need any syllabus clarification or schedule change, email <a href='mailto:support@quizwiz.co.in' style='color:#1D4ED8;font-weight:700;'>support@quizwiz.co.in</a> or message WhatsApp: +91 98015 06511."
            . "</div>"
            . "<p>Best wishes for your championship journey!</p>"
            . "<p>Warm regards,<br><strong>Academic Support Desk</strong><br>QuizWiz India</p>";
        send_quizwiz_mail($email, 'Enrollment Confirmed: All India Quiz Championships', $studentMsg, EMAIL_SUPPORT, 'QuizWiz Support Team');

        $success_message = "Thank you, {$safe_name}! Your enrollment for {$safe_group} has been successfully recorded. A confirmation email has been sent to {$email}. Our academic team will WhatsApp the preparation syllabus and exam schedule to {$safe_phone}.";
    }
}

// Pre-select group if passed via GET parameter
$preselected_group = isset($_GET['group']) ? $_GET['group'] : '';
?>

<!-- PAGE HEADER -->
<section style="background: linear-gradient(135deg, var(--primary) 0%, #10163A 100%); padding: 64px 0; color: #FFFFFF;">
    <div class="container text-center">
        <div class="section-eyebrow" style="background: rgba(255,255,255,0.1); color: #FFA366; border-color: rgba(255,255,255,0.2);">
            Registration Open
        </div>
        <h1 style="color: #FFFFFF; margin-bottom: 16px;">Student Enrollment Form</h1>
        <p style="color: #CBD5E1; max-width: 650px; margin: 0 auto; font-size: 1.15rem;">
            Register now to receive access to the practice tests, weekly mock leagues, and entry into the National Championship round.
        </p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="hero-grid" style="align-items: start;">
            <!-- Left Column: Form -->
            <div>
                <div class="form-card">
                    <div style="margin-bottom: 24px;">
                        <h2 style="font-size: 1.5rem; margin-bottom: 8px;">Enter Student Details</h2>
                        <p style="font-size: 0.9rem; margin: 0;">Fill out the form below. Confirmation will be sent via WhatsApp and Email.</p>
                    </div>

                    <?php if (!empty($success_message)): ?>
                        <div style="background: #ECFDF5; border: 1.5px solid #10B981; color: #065F46; padding: 16px; border-radius: var(--radius-md); margin-bottom: 24px;">
                            <i class="fa-solid fa-circle-check" style="font-size: 1.2rem; margin-right: 8px;"></i>
                            <?php echo htmlspecialchars($success_message); ?>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($error_message)): ?>
                        <div style="background: #FEF2F2; border: 1.5px solid #EF4444; color: #991B1B; padding: 16px; border-radius: var(--radius-md); margin-bottom: 24px;">
                            <i class="fa-solid fa-triangle-exclamation" style="font-size: 1.2rem; margin-right: 8px;"></i>
                            <?php echo htmlspecialchars($error_message); ?>
                        </div>
                    <?php endif; ?>

                    <form action="/enroll" method="POST">
                        <input type="hidden" name="action" value="enroll_student">
                        <input type="hidden" name="form_time" value="<?php echo time(); ?>">
                        <input type="text" name="website_url" style="display:none !important; position:absolute; left:-9999px;" tabindex="-1" autocomplete="off">

                        <div class="form-group">
                            <label class="form-label" for="student_name">Student Full Name <span class="text-orange">*</span></label>
                            <input type="text" id="student_name" name="student_name" class="form-control" placeholder="e.g. Aarav Sharma" required>
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
                            <div class="form-group">
                                <label class="form-label" for="email">Parent / Student Email <span class="text-orange">*</span></label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="parent@example.com" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="phone">WhatsApp Mobile No. <span class="text-orange">*</span></label>
                                <input type="tel" id="phone" name="phone" class="form-control" placeholder="10-digit mobile" pattern="[0-9]{10}" required>
                            </div>
                        </div>

                        <div style="display: grid; grid-template-columns: 1.3fr 0.7fr; gap: 16px;">
                            <div class="form-group">
                                <label class="form-label" for="school">School / College / Institution Name &amp; City <span class="text-orange">*</span></label>
                                <input type="text" id="school" name="school" class="form-control" placeholder="e.g. Delhi Public School / St. Xavier's College" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="student_class">Class / Academic Level <span class="text-orange">*</span></label>
                                <select id="student_class" name="student_class" class="form-control" required>
                                    <option value="">Select Level</option>
                                    <?php for ($c = 1; $c <= 12; $c++): ?>
                                        <option value="Class <?php echo $c; ?>">Class <?php echo $c; ?></option>
                                    <?php endfor; ?>
                                    <option value="Undergraduate / Degree College">Undergraduate / Degree College</option>
                                    <option value="Graduate / Competitive Aspirant">Graduate / Civil Services Aspirant</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="competition_group">Competition Championship Group <span class="text-orange">*</span></label>
                            <select id="competition_group" name="competition_group" class="form-control" required>
                                <option value="">---- Select QuizWiz Group ----</option>
                                <option value="Group A (Class 1 to 6)" <?php echo ($preselected_group === 'group-a') ? 'selected' : ''; ?>>
                                    Group A: Classes 1 to 6 (Junior Explorer)
                                </option>
                                <option value="Group B (Class 7 to 12)" <?php echo ($preselected_group === 'group-b') ? 'selected' : ''; ?>>
                                    Group B: Classes 7 to 12 (Senior Scholar)
                                </option>
                                <option value="Group C (Graduates &amp; Civil Services Aspirants)" <?php echo ($preselected_group === 'group-c') ? 'selected' : ''; ?>>
                                    Group C: Graduates &amp; Aspirants (Civil Services, UPSC, SSC, Banking &amp; Defence Track)
                                </option>
                            </select>
                            <span class="form-text">Choose the group matching your current grade or competitive examination track.</span>
                        </div>

                        <div class="form-group" style="background: rgba(248, 250, 252, 0.95); border: 1.5px solid var(--border-light); padding: 14px 16px; border-radius: var(--radius-md); margin-top: 14px;">
                            <label style="display: flex; align-items: flex-start; gap: 10px; font-size: 0.85rem; color: var(--text-secondary); cursor: pointer; line-height: 1.5;">
                                <input type="checkbox" name="dpdp_parental_consent" value="1" required style="margin-top: 4px; accent-color: var(--secondary);">
                                <span>
                                    <strong>Parental / Guardian Consent (DPDP Act, 2023):</strong> I confirm that I am the parent/legal guardian, or am registering with verifiable parental consent. In compliance with <strong>Section 9 of the Digital Personal Data Protection Act, 2023 (DPDP Act)</strong>, I consent to the collection and processing of basic student academic data strictly for competition administration, score tabulations, and certificate issuance. QuizWiz does not engage in behavioral tracking or targeted advertising to minors. Read our <a href="/dpdp" target="_blank" style="color: var(--secondary); font-weight: 600; text-decoration: underline;">DPDP Charter</a>.
                                </span>
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg" style="width: 100%; margin-top: 12px;">
                            <i class="fa-solid fa-paper-plane"></i> Submit Registration
                        </button>
                    </form>
                </div>
            </div>

            <!-- Right Column: Rules & Assistance -->
            <div>
                <div class="form-card" style="margin-bottom: 24px; background: #FFFFFF;">
                    <h3 style="font-size: 1.25rem; margin-bottom: 16px; color: var(--primary);">
                        <i class="fa-solid fa-circle-info text-orange"></i> Important Competition Guidelines
                    </h3>
                    <ul style="list-style: none; display: flex; flex-direction: column; gap: 12px; font-size: 0.9rem; color: var(--text-secondary);">
                        <li style="display: flex; gap: 10px;">
                            <i class="fa-solid fa-check text-orange" style="margin-top: 3px;"></i>
                            <span>The championship and practice programs are open to school students (Classes 1–12), college students, and civil services aspirants across India.</span>
                        </li>
                        <li style="display: flex; gap: 10px;">
                            <i class="fa-solid fa-check text-orange" style="margin-top: 3px;"></i>
                            <span><strong>Group A:</strong> Tailored for Classes 1 to 6 (Science, General Awareness, Logic, Math Basics).</span>
                        </li>
                        <li style="display: flex; gap: 10px;">
                            <i class="fa-solid fa-check text-orange" style="margin-top: 3px;"></i>
                            <span><strong>Group B:</strong> Tailored for Classes 7 to 12 (Advanced Science, History, Current Affairs, Critical Thinking).</span>
                        </li>
                        <li style="display: flex; gap: 10px;">
                            <i class="fa-solid fa-check text-orange" style="margin-top: 3px;"></i>
                            <span><strong>Group C:</strong> Designed for Graduates &amp; Aspirants (UPSC CSE, State PSCs, SSC CGL, Defence, Banking, Railways &amp; CUET).</span>
                        </li>
                        <li style="display: flex; gap: 10px;">
                            <i class="fa-solid fa-check text-orange" style="margin-top: 3px;"></i>
                            <span>All registered participants receive official digital merit/participation certificates and national scorecards.</span>
                        </li>
                    </ul>
                </div>

                <div class="form-card" style="margin-bottom: 24px; background: #F0FDF4; border: 1.5px solid #86EFAC;">
                    <h4 style="color: #166534; font-size: 1rem; margin-bottom: 8px;">
                        <i class="fa-solid fa-shield-halved"></i> DPDP Act 2023 Protection
                    </h4>
                    <p style="font-size: 0.85rem; color: #15803D; margin: 0; line-height: 1.5;">
                        QuizWiz operates under India's Digital Personal Data Protection Act, 2023. We collect only minimal academic details, never track online behaviors, and never sell student data. <a href="/dpdp" target="_blank" style="color: #166534; font-weight: 700; text-decoration: underline;">Read DPDP Charter &rarr;</a>
                    </p>
                </div>

                <div class="form-card" style="background: var(--primary-surface); border: 1.5px solid rgba(27, 37, 89, 0.15);">
                    <h4 style="color: var(--primary); margin-bottom: 8px;">Need Assistance or Bulk School Registration?</h4>
                    <p style="font-size: 0.9rem; color: var(--text-secondary); margin-bottom: 16px;">
                        School principals, coordinators, and teachers can connect with our dedicated helpline for batch registrations and customized campus testing rounds.
                    </p>
                    <a href="<?php echo WHATSAPP_URL; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp" style="width: 100%;">
                        <i class="fa-brands fa-whatsapp"></i> Chat with Coordinator: <?php echo PHONE_DISPLAY; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
