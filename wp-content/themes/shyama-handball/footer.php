    <!-- Footer -->
    <footer class="dark-footer-simple">
        <div class="footer-container">
            <div class="footer-column">
                <div style="display: flex; align-items: center; margin-bottom: 20px;">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/Shyama Handball Academy.png" alt="Shyama Handball Academy Logo" style="width: 50px; height: 50px; object-fit: contain; margin-right: 15px; border-radius: 50%; background: #fff; padding: 5px;">
                    <h3 class="footer-title" style="margin-bottom: 0;">Shyama Handball Academy</h3>
                </div>
                <div class="footer-divider"></div>
                <p class="footer-text">Under the aegis of S.N. Pandey Khel Sansthan Trust</p>
                <ul class="footer-contact-list">
                    <li><i class="fas fa-map-marker-alt"></i> D-5 Shiv Nagar Colony, Chandpur, Varanasi-221107</li>
                    <li><i class="fas fa-phone-alt"></i> +91 8765550245, 7084900009</li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3 class="footer-title">Quick Links</h3>
                <div class="footer-divider"></div>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
                    <ul class="footer-links" style="margin-bottom:0;">
                        <li><a href="<?php echo esc_url( home_url('/') ); ?>"><i class="fas fa-chevron-right"></i> Home</a></li>
                        <li><a href="<?php echo esc_url( home_url('/about') ); ?>"><i class="fas fa-chevron-right"></i> About Us</a></li>
                        <li><a href="<?php echo esc_url( home_url('/training') ); ?>"><i class="fas fa-chevron-right"></i> Training</a></li>
                        <li><a href="<?php echo esc_url( home_url('/coaches') ); ?>"><i class="fas fa-chevron-right"></i> Coaches</a></li>
                        <li><a href="<?php echo esc_url( home_url('/players') ); ?>"><i class="fas fa-chevron-right"></i> Players</a></li>
                    </ul>
                    <ul class="footer-links" style="margin-bottom:0;">
                        <li><a href="<?php echo esc_url( home_url('/events') ); ?>"><i class="fas fa-chevron-right"></i> Events</a></li>
                        <li><a href="<?php echo esc_url( home_url('/gallery') ); ?>"><i class="fas fa-chevron-right"></i> Gallery</a></li>
                        <li><a href="<?php echo esc_url( home_url('/join') ); ?>"><i class="fas fa-chevron-right"></i> Admissions</a></li>
                        <li><a href="<?php echo esc_url( home_url('/contact') ); ?>"><i class="fas fa-chevron-right"></i> Contact</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-column">
                <h3 class="footer-title">Connect With Us</h3>
                <div class="footer-divider"></div>
                <ul class="footer-social-links">
                    <li><a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i> Facebook</a></li>
                    <li><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i> Instagram</a></li>
                    <li><a href="https://youtube.com" target="_blank"><i class="fab fa-youtube"></i> YouTube</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom-simple">
            <p>&copy; <?php echo date('Y'); ?> Shyama Handball Academy. All rights reserved.</p>
        </div>
    </footer>

    <!-- Lightbox Modal -->
    <div id="lightbox-modal" class="lightbox-modal">
        <span class="lightbox-close">&times;</span>
        <img class="lightbox-content" id="lightbox-img">
    </div>

    <?php wp_footer(); ?>
</body>
</html>
