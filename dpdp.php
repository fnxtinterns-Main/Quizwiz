<?php
$current_page = 'dpdp';
$page_title = 'DPDP Act 2023 Compliance & Child Data Protection | QuizWiz';
$page_desc = 'QuizWiz compliance framework under the Digital Personal Data Protection Act, 2023 (DPDP Act). How we protect school student data with verifiable parental consent.';

require_once __DIR__ . '/includes/header.php';
?>

<!-- PAGE HERO HEADER -->
<section style="background: linear-gradient(135deg, #0F172A 0%, #1E1B4B 50%, #1E293B 100%); padding: 64px 0; color: #FFFFFF;">
    <div class="container text-center">
        <div class="section-eyebrow" style="background: rgba(16, 185, 129, 0.15); color: #34D399; border-color: rgba(16, 185, 129, 0.3);">
            <i class="fa-solid fa-shield-halved"></i> Statutory Compliance
        </div>
        <h1 style="color: #FFFFFF; font-size: clamp(2rem, 3.5vw, 2.8rem); margin-bottom: 16px;">
            Digital Personal Data Protection Act, 2023 (DPDP Act)
        </h1>
        <p style="color: #CBD5E1; max-width: 720px; margin: 0 auto; font-size: 1.15rem; line-height: 1.6;">
            QuizWiz's dedicated compliance framework ensuring the highest standards of privacy, security, and statutory protection for Indian school students and parents.
        </p>
    </div>
</section>

<!-- COMPLIANCE CHARTER OVERVIEW -->
<section class="section">
    <div class="container" style="max-width: 920px;">
        <div class="form-card" style="line-height: 1.8; color: var(--text-secondary); margin-bottom: 32px;">
            
            <div style="background: #F0FDF4; border: 1.5px solid #86EFAC; border-radius: var(--radius-lg); padding: 20px; margin-bottom: 28px; display: flex; gap: 16px; align-items: flex-start;">
                <div style="font-size: 2rem; color: #16A34A; line-height: 1;">🛡️</div>
                <div>
                    <h3 style="color: #166534; font-size: 1.15rem; margin-bottom: 6px;">Zero Commercial Exploitation Guarantee</h3>
                    <p style="margin: 0; font-size: 0.95rem; color: #15803D;">
                        In accordance with <strong>Section 9 of the DPDP Act 2023</strong>, QuizWiz does not engage in behavioral tracking, student profiling, or targeted advertising directed at children. All student data is processed exclusively for academic competition purposes.
                    </p>
                </div>
            </div>

            <h2 style="font-size: 1.45rem; color: var(--primary); margin-bottom: 16px;">1. Legal Context &amp; Applicability</h2>
            <p>
                The <strong>Digital Personal Data Protection Act, 2023 (Act No. 22 of 2023)</strong> governs the processing of digital personal data within India. As a provider of academic competitions and educational quizzes for school students (Classes 1 to 12), <strong>QuizWiz</strong> (operated by Futurenxt) functions as a <strong>Data Fiduciary</strong> and is legally committed to upholding all obligations established under the Act.
            </p>

            <h2 style="font-size: 1.45rem; color: var(--primary); margin-top: 32px; margin-bottom: 16px;">2. Section 9 Compliance: Processing Personal Data of Children</h2>
            <p>
                The DPDP Act defines a "child" as an individual who has not completed 18 years of age. Under <strong>Section 9</strong> of the Act:
            </p>
            <div style="background: var(--surface-light); border-left: 4px solid var(--secondary); padding: 18px 20px; border-radius: 0 var(--radius-md) var(--radius-md) 0; margin-bottom: 20px;">
                <ul style="list-style: none; margin: 0; display: flex; flex-direction: column; gap: 12px; padding: 0;">
                    <li style="display: flex; gap: 10px;">
                        <i class="fa-solid fa-check-circle text-orange" style="margin-top: 4px;"></i>
                        <span><strong>Verifiable Parental Consent (Section 9(1)):</strong> QuizWiz obtains verifiable consent from a parent or legal guardian prior to processing any personal data of a minor student for competition participation.</span>
                    </li>
                    <li style="display: flex; gap: 10px;">
                        <i class="fa-solid fa-check-circle text-orange" style="margin-top: 4px;"></i>
                        <span><strong>Protection of Child Well-being (Section 9(2)):</strong> QuizWiz never undertakes any processing of personal data that is likely to cause any detrimental effect on the physical, mental, or moral well-being of a child.</span>
                    </li>
                    <li style="display: flex; gap: 10px;">
                        <i class="fa-solid fa-check-circle text-orange" style="margin-top: 4px;"></i>
                        <span><strong>Strict Prohibition on Tracking &amp; Targeted Ads (Section 9(3)):</strong> QuizWiz strictly prohibits tracking, behavioral monitoring, algorithmic psycho-profiling, and targeted advertising directed at children.</span>
                    </li>
                </ul>
            </div>

            <h2 style="font-size: 1.45rem; color: var(--primary); margin-top: 32px; margin-bottom: 16px;">3. Notice and Lawful Purpose (Sections 5 &amp; 6)</h2>
            <p>
                QuizWiz operates on the principle of strict <strong>Data Minimisation</strong>. We only collect the minimal personal data strictly necessary to administer fair quiz competitions:
            </p>
            <div style="overflow-x: auto; margin-bottom: 24px;">
                <table style="width: 100%; border-collapse: collapse; font-size: 0.92rem;">
                    <thead>
                        <tr style="background: var(--primary); color: #FFFFFF; text-align: left;">
                            <th style="padding: 12px 14px; border-radius: 6px 0 0 0;">Data Point</th>
                            <th style="padding: 12px 14px;">Purpose of Processing</th>
                            <th style="padding: 12px 14px; border-radius: 0 6px 0 0;">Legal Basis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border-bottom: 1px solid var(--border-light);">
                            <td style="padding: 12px 14px; font-weight: 600;">Student Name</td>
                            <td style="padding: 12px 14px;">Leaderboard display, competition identification, and printing on Merit Certificates.</td>
                            <td style="padding: 12px 14px;">Parental Consent (DPDP Sec 6 &amp; 9)</td>
                        </tr>
                        <tr style="border-bottom: 1px solid var(--border-light); background: rgba(0,0,0,0.015);">
                            <td style="padding: 12px 14px; font-weight: 600;">Class / School / City</td>
                            <td style="padding: 12px 14px;">Allocation to proper age division (Group A: Classes 1-6 or Group B: Classes 7-12) and inter-school ranking.</td>
                            <td style="padding: 12px 14px;">Legitimate Educational Purpose</td>
                        </tr>
                        <tr style="border-bottom: 1px solid var(--border-light);">
                            <td style="padding: 12px 14px; font-weight: 600;">Parent WhatsApp &amp; Email</td>
                            <td style="padding: 12px 14px;">Sending competition round links, syllabus PDFs, result alerts, and prize delivery coordination.</td>
                            <td style="padding: 12px 14px;">Parental Consent</td>
                        </tr>
                        <tr style="border-bottom: 1px solid var(--border-light); background: rgba(0,0,0,0.015);">
                            <td style="padding: 12px 14px; font-weight: 600;">Quiz Responses &amp; Timers</td>
                            <td style="padding: 12px 14px;">Calculating academic scores, time-weighted accuracy, and validating national awards.</td>
                            <td style="padding: 12px 14px;">Contest Contract Performance</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h2 style="font-size: 1.45rem; color: var(--primary); margin-top: 32px; margin-bottom: 16px;">4. Statutory Rights of the Data Principal (Parents &amp; Guardians)</h2>
            <p>
                Under Chapter III of the DPDP Act 2023, parents and guardians exercising rights on behalf of their children are entitled to:
            </p>
            <ul style="padding-left: 20px; margin-bottom: 24px;">
                <li><strong>Right to Access Information (Section 11):</strong> Request a complete summary of personal data being processed by QuizWiz and the identities of any authorized processors.</li>
                <li><strong>Right to Correction &amp; Erasure (Section 12):</strong> Request correction of inaccurate student details, completion of incomplete records, or immediate erasure of personal data that is no longer required for the championship.</li>
                <li><strong>Right of Grievance Redressal (Section 13):</strong> Access an effective, readily accessible grievance redressal mechanism provided by QuizWiz.</li>
                <li><strong>Right to Withdraw Consent (Section 6(4)):</strong> Withdraw consent at any time with the same ease as it was given. Upon withdrawal, QuizWiz ceases data processing unless required by applicable law.</li>
            </ul>

            <h2 style="font-size: 1.45rem; color: var(--primary); margin-top: 32px; margin-bottom: 16px;">5. Reasonable Security Safeguards (Section 8(5))</h2>
            <p>
                To prevent personal data breaches, QuizWiz implements state-of-the-art technological and organizational measures, including 256-bit TLS/SSL transmission encryption, restricted role-based database access, and automated log auditing. In the unlikely event of any personal data breach, QuizWiz will notify the <strong>Data Protection Board of India (DPBI)</strong> and affected parents in accordance with statutory rules.
            </p>

            <h2 style="font-size: 1.45rem; color: var(--primary); margin-top: 32px; margin-bottom: 16px;">6. Grievance Redressal &amp; Data Protection Officer (DPO)</h2>
            <p>
                In compliance with Section 13 of the DPDP Act 2023, QuizWiz has designated a dedicated Grievance Redressal Officer to address queries, consent revocations, and data requests:
            </p>

            <div style="background: var(--surface-light); border: 1.5px solid var(--border-light); border-radius: var(--radius-lg); padding: 24px; margin-top: 16px;">
                <h4 style="color: var(--primary); font-size: 1.1rem; margin-bottom: 12px;">
                    <i class="fa-solid fa-id-badge text-orange"></i> QuizWiz Grievance &amp; Data Protection Cell
                </h4>
                <div style="display: grid; grid-template-columns: 1fr; gap: 10px; font-size: 0.95rem;">
                    <div><strong>Entity:</strong> QuizWiz (Operated by Futurenxt)</div>
                    <div><strong>Officer Designation:</strong> Grievance Redressal Officer &amp; Compliance Lead</div>
                    <div><strong>Grievance Email:</strong> <a href="mailto:grievance@quizwiz.co.in" style="color: var(--secondary); font-weight: 600;">grievance@quizwiz.co.in</a> / <a href="mailto:info@quizwiz.co.in" style="color: var(--secondary); font-weight: 600;">info@quizwiz.co.in</a></div>
                    <div><strong>Helpline &amp; WhatsApp:</strong> <a href="https://wa.me/919801506511" target="_blank" rel="noopener noreferrer" style="color: #10B981; font-weight: 600;">+91 98015 06511</a></div>
                    <div><strong>Statutory Response Time:</strong> Acknowledged within 48 hours; resolved within a maximum of 30 days.</div>
                </div>
                <div style="margin-top: 16px; padding-top: 14px; border-top: 1px solid var(--border-light); font-size: 0.85rem; color: var(--text-muted);">
                    If a grievance is not resolved to your satisfaction within the statutory timeframe, you have the right to file an appeal with the <strong>Data Protection Board of India (DPBI)</strong> in the manner prescribed under Section 13(3) of the Act.
                </div>
            </div>

        </div>

        <div style="text-align: center; margin-top: 24px;">
            <a href="/enroll" class="btn btn-primary btn-lg">
                <i class="fa-solid fa-user-plus"></i> Proceed to Student Enrollment
            </a>
            <a href="/privacy-policy" class="btn btn-outline-navy btn-lg" style="margin-left: 12px;">
                View Privacy Policy
            </a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
