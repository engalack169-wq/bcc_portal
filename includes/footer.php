<?php
/**
 * Bamenda City Council E-Governance Platform
 * Footer Component
*/
?>

</main>

<!-- Floating Action Button -->
<button class="fab" id="support-fab" aria-label="Contact Support">
    <span class="material-symbols-outlined">chat</span>
</button>

<!-- Footer -->
<footer class="site-footer">
    <div class="container">
        <!-- Main Footer Content -->
        <div class="footer-content">
            <!-- About Section -->
            <div class="footer-section">
                <h3>Bamenda City Council</h3>
                <p class="footer-description">
                    Empowering citizens through digital governance, civic engagement, and sustainable development for a better Bamenda.
                </p>
                <div class="social-links">
                    <a href="#" class="social-link" aria-label="Facebook">
                        <span class="material-symbols-outlined">facebook</span>
                    </a>
                    <a href="#" class="social-link" aria-label="Twitter">
                        <span class="material-symbols-outlined">alternate_email</span>
                    </a>
                    <a href="#" class="social-link" aria-label="LinkedIn">
                        <span class="material-symbols-outlined">work</span>
                    </a>
                    <a href="#" class="social-link" aria-label="YouTube">
                        <span class="material-symbols-outlined">smart_display</span>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="footer-section">
                <h4>Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="pages/citizen-services/services.php">Services</a></li>
                    <li><a href="pages/civic-engagement/consultations.php">Public Consultations</a></li>
                    <li><a href="pages/youth/youth-council.php">Youth Programs</a></li>
                    <li><a href="pages/emergency/alerts.php">Emergency Services</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div class="footer-section">
                <h4>Services</h4>
                <ul class="footer-links">
                    <li><a href="pages/citizen-services/business-license.php">Business License</a></li>
                    <li><a href="pages/citizen-services/permits.php">Permits & Licenses</a></li>
                    <li><a href="pages/citizen-services/property-registry.php">Property Registry</a></li>
                    <li><a href="pages/citizen-services/tax-portal.php">Tax Portal</a></li>
                    <li><a href="pages/citizen-services/payments.php">Online Payments</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="footer-section">
                <h4>Contact Us</h4>
                <div class="contact-info">
                    <div class="contact-item">
                        <span class="material-symbols-outlined">location_on</span>
                        <span>Bamenda City Council, Bamenda, Northwest Region, Cameroon</span>
                    </div>
                    <div class="contact-item">
                        <span class="material-symbols-outlined">phone</span>
                        <a href="tel:+237233000000">+237 233 000 000</a>
                    </div>
                    <div class="contact-item">
                        <span class="material-symbols-outlined">email</span>
                        <a href="mailto:info@bamendacity.gov.cm">info@bamendacity.gov.cm</a>
                    </div>
                    <div class="contact-item">
                        <span class="material-symbols-outlined">schedule</span>
                        <span>Mon-Fri: 8:00 AM - 5:00 PM</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Newsletter Signup -->
        <div class="newsletter-section">
            <div class="newsletter-content">
                <h4>Stay Updated</h4>
                <p>Subscribe to receive updates on city services, events, and announcements.</p>
                <form class="newsletter-form" id="newsletter-form">
                    <div class="form-group">
                        <input type="email" class="form-input" placeholder="Enter your email address" required id="newsletter-email">
                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </div>
                </form>
                <div class="newsletter-message" id="newsletter-message"></div>
            </div>
        </div>
    </div>

    <!-- Bottom Footer -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-content">
                <div class="footer-copyright">
                    <p>&copy; <?php echo date('Y'); ?> Bamenda City Council. All rights reserved.</p>
                </div>
                <div class="footer-legal">
                    <a href="pages/legal/privacy-policy.php">Privacy Policy</a>
                    <a href="pages/legal/terms-of-service.php">Terms of Service</a>
                    <a href="pages/legal/accessibility.php">Accessibility</a>
                    <a href="pages/legal/sitemap.php">Sitemap</a>
                </div>
                <div class="footer-badges">
                    <img src="assets/images/gov-badge.png" alt="Government of Cameroon" class="gov-badge">
                    <img src="assets/images/ssl-badge.png" alt="SSL Secured" class="ssl-badge">
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Back to Top Button -->
<button class="back-to-top" id="back-to-top" aria-label="Back to top">
    <span class="material-symbols-outlined">keyboard_arrow_up</span>
</button>

<style>
/* Footer Styles */
.site-footer {
    background-color: var(--surface-container);
    border-top: 1px solid var(--outline-variant);
    color: var(--on-surface);
    margin-top: auto;
}

.footer-content {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: var(--spacing-xl);
    padding: var(--spacing-3xl) 0;
}

.footer-section h3,
.footer-section h4 {
    color: var(--primary);
    margin-bottom: var(--spacing-md);
    font-family: var(--font-headline);
}

.footer-section h3 {
    font-size: 1.25rem;
    font-weight: 700;
}

.footer-section h4 {
    font-size: 1.125rem;
    font-weight: 600;
}

.footer-description {
    color: var(--on-surface-variant);
    line-height: 1.6;
    margin-bottom: var(--spacing-lg);
}

.social-links {
    display: flex;
    gap: var(--spacing-sm);
}

.social-link {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 2.5rem;
    height: 2.5rem;
    background-color: var(--surface-container-low);
    border-radius: var(--radius-full);
    color: var(--on-surface-variant);
    text-decoration: none;
    transition: all 0.2s ease;
}

.social-link:hover {
    background-color: var(--primary);
    color: var(--on-primary);
    transform: translateY(-2px);
}

.footer-links {
    list-style: none;
    padding: 0;
}

.footer-links li {
    margin-bottom: var(--spacing-sm);
}

.footer-links a {
    color: var(--on-surface-variant);
    text-decoration: none;
    transition: color 0.2s ease;
}

.footer-links a:hover {
    color: var(--primary);
}

.contact-info {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-md);
}

.contact-item {
    display: flex;
    align-items: flex-start;
    gap: var(--spacing-sm);
    color: var(--on-surface-variant);
}

.contact-item .material-symbols-outlined {
    color: var(--primary);
    flex-shrink: 0;
    margin-top: 2px;
}

.contact-item a {
    color: var(--on-surface-variant);
    text-decoration: none;
}

.contact-item a:hover {
    color: var(--primary);
}

/* Newsletter Section */
.newsletter-section {
    background-color: var(--primary);
    color: var(--on-primary);
    padding: var(--spacing-2xl) 0;
    margin-top: var(--spacing-xl);
}

.newsletter-content {
    max-width: 600px;
    margin: 0 auto;
    text-align: center;
}

.newsletter-content h4 {
    color: var(--on-primary);
    margin-bottom: var(--spacing-sm);
}

.newsletter-content p {
    margin-bottom: var(--spacing-lg);
    opacity: 0.9;
}

.newsletter-form .form-group {
    display: flex;
    gap: var(--spacing-sm);
    margin-bottom: 0;
}

.newsletter-form .form-input {
    flex: 1;
    background-color: rgba(255, 255, 255, 0.1);
    border-color: rgba(255, 255, 255, 0.2);
    color: var(--on-primary);
}

.newsletter-form .form-input::placeholder {
    color: rgba(255, 255, 255, 0.7);
}

.newsletter-form .form-input:focus {
    background-color: rgba(255, 255, 255, 0.15);
    border-color: var(--secondary-container);
}

.newsletter-message {
    margin-top: var(--spacing-sm);
    font-size: 0.875rem;
}

.newsletter-message.success {
    color: var(--secondary-container);
}

.newsletter-message.error {
    color: #ff6b6b;
}

/* Footer Bottom */
.footer-bottom {
    background-color: var(--surface-container-high);
    border-top: 1px solid var(--outline-variant);
    padding: var(--spacing-lg) 0;
}

.footer-bottom-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: var(--spacing-md);
}

.footer-copyright p {
    color: var(--on-surface-variant);
    font-size: 0.875rem;
}

.footer-legal {
    display: flex;
    gap: var(--spacing-lg);
}

.footer-legal a {
    color: var(--on-surface-variant);
    text-decoration: none;
    font-size: 0.875rem;
    transition: color 0.2s ease;
}

.footer-legal a:hover {
    color: var(--primary);
}

.footer-badges {
    display: flex;
    gap: var(--spacing-sm);
}

.footer-badges img {
    height: 2rem;
    opacity: 0.7;
    transition: opacity 0.2s ease;
}

.footer-badges img:hover {
    opacity: 1;
}

/* Back to Top Button */
.back-to-top {
    position: fixed;
    bottom: 6rem;
    right: 1.5rem;
    width: 3rem;
    height: 3rem;
    background-color: var(--primary);
    color: var(--on-primary);
    border: none;
    border-radius: var(--radius-full);
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    visibility: hidden;
    transform: translateY(20px);
    transition: all 0.3s ease;
    z-index: 30;
}

.back-to-top.visible {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.back-to-top:hover {
    background-color: var(--primary-container);
    transform: translateY(-2px);
}

/* Responsive Design */
@media (max-width: 768px) {
    .footer-content {
        grid-template-columns: 1fr;
        gap: var(--spacing-lg);
        padding: var(--spacing-xl) 0;
    }
    
    .footer-bottom-content {
        flex-direction: column;
        text-align: center;
        gap: var(--spacing-md);
    }
    
    .footer-legal {
        flex-direction: column;
        gap: var(--spacing-sm);
        text-align: center;
    }
    
    .newsletter-form .form-group {
        flex-direction: column;
    }
    
    .back-to-top {
        bottom: 7rem;
        right: 1rem;
    }
    
    .fab {
        bottom: 7rem;
    }
}

@media (max-width: 480px) {
    .social-links {
        justify-content: center;
    }
    
    .contact-info {
        text-align: center;
    }
    
    .contact-item {
        justify-content: center;
        text-align: left;
    }
}
</style>

<script>
// Newsletter Form Handling
document.addEventListener('DOMContentLoaded', function() {
    const newsletterForm = document.getElementById('newsletter-form');
    const newsletterEmail = document.getElementById('newsletter-email');
    const newsletterMessage = document.getElementById('newsletter-message');
    
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = newsletterEmail.value.trim();
            
            if (!email) {
                showNewsletterMessage('Please enter a valid email address', 'error');
                return;
            }
            
            // Simulate newsletter subscription
            // In production, this would make an API call
            setTimeout(function() {
                showNewsletterMessage('Thank you for subscribing! You will receive updates at ' + email, 'success');
                newsletterEmail.value = '';
            }, 1000);
        });
    }
    
    function showNewsletterMessage(message, type) {
        if (newsletterMessage) {
            newsletterMessage.textContent = message;
            newsletterMessage.className = 'newsletter-message ' + type;
            
            // Hide message after 5 seconds
            setTimeout(function() {
                newsletterMessage.textContent = '';
                newsletterMessage.className = 'newsletter-message';
            }, 5000);
        }
    }
    
    // Back to Top Button
    const backToTopButton = document.getElementById('back-to-top');
    
    if (backToTopButton) {
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.add('visible');
            } else {
                backToTopButton.classList.remove('visible');
            }
        });
        
        backToTopButton.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
    
    // Support FAB
    const supportFab = document.getElementById('support-fab');
    if (supportFab) {
        supportFab.addEventListener('click', function() {
            // Open support chat or redirect to support page
            window.location.href = 'pages/help/support.php';
        });
    }
});
</script>

</body>
</html>
