<?php
require_once __DIR__ . '/config.php';
?>
    </main>

    <!-- Comprehensive Modern Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <!-- Col 1: Brand & Purpose -->
                <div class="footer-brand">
                    <div style="display: inline-flex; background: #FFFFFF; padding: 6px 12px; border-radius: var(--radius-md); box-shadow: 0 2px 6px rgba(0,0,0,0.15); margin-bottom: 8px;">
                        <img src="/assets/images/logo.png" alt="QuizWiz Logo" style="height: 38px; width: auto; object-fit: contain;">
                    </div>
                    <p>
                        QuizWiz is India's leading online quiz championship platform designed to nurture curiosity, foster intellectual agility, and celebrate young academic achievers across the country.
                    </p>
                    <div style="margin-top: 20px;">
                        <span style="display: inline-flex; align-items: center; gap: 8px; font-size: 0.825rem; color: #E2E8F0; background: rgba(255,255,255,0.06); padding: 6px 12px; border-radius: 6px;">
                            <i class="fa-solid fa-shield-halved text-orange"></i> Verified National Quiz Initiative
                        </span>
                    </div>
                </div>

                <!-- Col 2: Navigation Links -->
                <div>
                    <h4 class="footer-title">Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="/"><i class="fa-solid fa-angle-right text-orange"></i> Home</a></li>
                        <li><a href="/daily-quiz"><i class="fa-solid fa-fire text-orange"></i> Free Daily Quiz</a></li>
                        <li><a href="/about"><i class="fa-solid fa-angle-right text-orange"></i> About Championships</a></li>
                        <li><a href="/quizzes"><i class="fa-solid fa-angle-right text-orange"></i> Quiz Categories</a></li>
                        <li><a href="/enroll"><i class="fa-solid fa-angle-right text-orange"></i> Student Enrollment</a></li>
                        <li><a href="/contact"><i class="fa-solid fa-angle-right text-orange"></i> Help &amp; Support</a></li>
                    </ul>
                </div>

                <!-- Col 3: Legal & Trust Policies -->
                <div>
                    <h4 class="footer-title">Trust &amp; Policies</h4>
                    <ul class="footer-links">
                        <li><a href="/privacy-policy"><i class="fa-solid fa-lock text-orange"></i> Privacy Policy</a></li>
                        <li><a href="/terms"><i class="fa-solid fa-file-contract text-orange"></i> Terms of Participation</a></li>
                        <li><a href="/refund-policy"><i class="fa-solid fa-rotate-left text-orange"></i> Refund &amp; Cancellation</a></li>
                        <li><a href="/quizzes?group=group-a"><i class="fa-solid fa-angle-right text-orange"></i> Group A (Class 1–6)</a></li>
                        <li><a href="/quizzes?group=group-b"><i class="fa-solid fa-angle-right text-orange"></i> Group B (Class 7–12)</a></li>
                    </ul>
                </div>

                <!-- Col 4: Verified Contact Details -->
                <div>
                    <h4 class="footer-title">Contact &amp; Helpline</h4>
                    <ul class="footer-contact-list">
                        <li class="footer-contact-item">
                            <i class="fa-brands fa-whatsapp" style="color: #25D366;"></i>
                            <div>
                                <strong style="display: block; color: #FFFFFF; font-size: 0.85rem;">WhatsApp &amp; Helpline:</strong>
                                <a href="<?php echo WHATSAPP_URL; ?>" target="_blank" rel="noopener noreferrer">
                                    <?php echo PHONE_DISPLAY; ?>
                                </a>
                            </div>
                        </li>
                        <li class="footer-contact-item">
                            <i class="fa-solid fa-phone"></i>
                            <div>
                                <strong style="display: block; color: #FFFFFF; font-size: 0.85rem;">Phone Support:</strong>
                                <a href="tel:<?php echo PHONE_RAW; ?>">
                                    <?php echo PHONE_DISPLAY; ?>
                                </a>
                            </div>
                        </li>
                        <li class="footer-contact-item">
                            <i class="fa-regular fa-envelope"></i>
                            <div>
                                <strong style="display: block; color: #FFFFFF; font-size: 0.85rem;">Official Email:</strong>
                                <a href="mailto:<?php echo EMAIL_CONTACT; ?>">
                                    <?php echo EMAIL_CONTACT; ?>
                                </a>
                            </div>
                        </li>
                        <li class="footer-contact-item">
                            <i class="fa-solid fa-location-dot"></i>
                            <div>
                                <strong style="display: block; color: #FFFFFF; font-size: 0.85rem;">Headquarters:</strong>
                                <span><?php echo ADDRESS_CITY; ?></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Footer Bottom Bar -->
            <div class="footer-bottom">
                <div>
                    <p style="margin: 0; color: #94A3B8; font-size: 0.85rem;">
                        &copy; <?php echo date('Y'); ?> <strong>QuizWiz</strong>. All Rights Reserved. Empowering future leaders.
                    </p>
                    <div style="margin-top: 6px; font-size: 0.8rem; color: #64748B;">
                        <a href="/privacy-policy" style="color: #94A3B8; text-decoration: underline;">Privacy Policy</a> &bull; 
                        <a href="/terms" style="color: #94A3B8; text-decoration: underline;">Terms &amp; Conditions</a> &bull; 
                        <a href="/refund-policy" style="color: #94A3B8; text-decoration: underline;">Refund Policy</a>
                    </div>
                </div>
                <div class="footer-social-icons">
                    <a href="<?php echo WHATSAPP_URL; ?>" target="_blank" rel="noopener noreferrer" class="social-circle-btn" style="background-color: #25D366;" aria-label="WhatsApp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                    <a href="<?php echo $social_links['facebook']; ?>" target="_blank" rel="noopener noreferrer" class="social-circle-btn" aria-label="Facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="<?php echo $social_links['instagram']; ?>" target="_blank" rel="noopener noreferrer" class="social-circle-btn" aria-label="Instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="<?php echo $social_links['linkedin']; ?>" target="_blank" rel="noopener noreferrer" class="social-circle-btn" aria-label="LinkedIn">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp CTA Button (Sticky Bottom-Right) -->
    <a href="<?php echo WHATSAPP_URL; ?>" target="_blank" rel="noopener noreferrer" class="floating-whatsapp" aria-label="Chat on WhatsApp with QuizWiz Support">
        <i class="fa-brands fa-whatsapp" style="font-size: 1.3rem;"></i>
        <span>Chat with Us</span>
    </a>

    <!-- Interactive Quiz Preview Modal -->
    <div id="quizModal" class="quiz-player-modal" role="dialog" aria-modal="true" aria-labelledby="modalQuizTitle">
        <div class="quiz-player-card">
            <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid var(--border-light); padding-bottom: 16px; margin-bottom: 20px;">
                <h3 id="modalQuizTitle" style="margin: 0; font-size: 1.25rem;">Quick Practice Quiz</h3>
                <button onclick="closeQuizModal()" style="background: none; border: none; font-size: 1.35rem; color: var(--text-muted); cursor: pointer;" aria-label="Close Quiz">&times;</button>
            </div>
            <div id="quizQuestionContainer">
                <!-- Populated dynamically by main.js -->
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="/assets/js/main.js"></script>
</body>
</html>
