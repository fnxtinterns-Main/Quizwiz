<?php
$current_page = 'enroll';
$page_title = 'Student Enrollment | All India Quiz Championships';
$page_desc = 'Enroll your child or school student in QuizWiz All India Quiz Championships. Choose between Group A (Class 1-6) and Group B (Class 7-12).';

require_once __DIR__ . '/includes/header.php';

$success_message = '';
$error_message = '';

// Handle Enrollment Form Submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'enroll_student') {
    $name = trim($_POST['student_name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $school = trim($_POST['school'] ?? '');
    $class = trim($_POST['student_class'] ?? '');
    $group = trim($_POST['competition_group'] ?? '');

    // Validation
    if (empty($name) || empty($email) || empty($phone) || empty($school) || empty($class) || empty($group)) {
        $error_message = 'Please fill in all mandatory fields before submitting.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = 'Please provide a valid email address.';
    } else {
        // Success handling
        $success_message = "Thank you, {$name}! Your enrollment for {$group} has been successfully recorded. Our academic team will WhatsApp the preparation syllabus and exam schedule to {$phone}.";
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
                                <label class="form-label" for="school">School Name &amp; City <span class="text-orange">*</span></label>
                                <input type="text" id="school" name="school" class="form-control" placeholder="e.g. Delhi Public School, Ranchi" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="student_class">Class / Grade <span class="text-orange">*</span></label>
                                <select id="student_class" name="student_class" class="form-control" required>
                                    <option value="">Select Class</option>
                                    <?php for ($c = 1; $c <= 12; $c++): ?>
                                        <option value="Class <?php echo $c; ?>">Class <?php echo $c; ?></option>
                                    <?php endfor; ?>
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
                            </select>
                            <span class="form-text">Choose the group matching your student's current school grade.</span>
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
                            <span>The championship is exclusively open to bonafide school students in Classes 1 through 12 across India.</span>
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
                            <span>All registered participants receive official digital participation certificates and performance scorecards.</span>
                        </li>
                    </ul>
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
