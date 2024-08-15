<footer id="anox_footer_area">
    <section class="container">
        <div class="row">
            <div class="col-md-12 d-flex align-items-center justify-content-between footer-1">
                <div class="col-md-6 ">
                    <?php dynamic_sidebar('footer-text'); ?>
                </div>
                <div class="col-md-4 ">
                    <?php dynamic_sidebar('footer-subscribe'); ?>
                    <div class="footer-email">
                        <input type="email" placeholder="Enter your email" class="input">
                        <a href="#" class="btn">Subscribe</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 d-flex justify-content-between align-items-center p-0 m-0 footer-links-area">
                <div class="col-md-3">
                    <a href="<?php home_url(); ?>">
                        <img src=" <?php echo get_theme_mod('anox_header_logo'); ?>">
                    </a>
                </div>
                <div class="col-md-9 d-flex justify-content-between align-items-center">
                    <div class="col-md-3">
                        <?php dynamic_sidebar('footer-about-links'); ?>
                    </div>
                    <div class="col-md-3">
                        <?php dynamic_sidebar('footer-support -links'); ?>
                    </div>
                    <div class="col-md-3">
                        <?php dynamic_sidebar('footer-contact-links'); ?>
                    </div>
                    <div class="col-md-3">
                        <?php dynamic_sidebar('footer-template-links'); ?>
                    </div>
                </div>
            </div>

            <div class="col-md-12 d-flex justify-content-between align-items-center p-0 m-0 footer-copyright-area">
                <div class="col-md-2">
                    <div class="footer-language">
                        <a href="#">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12Z"
                                    stroke="#141736" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13 2.05078C13 2.05078 16 6.0014 16 12.0014C16 18.0014 13 21.9521 13 21.9521"
                                    stroke="#141736" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M11 21.9521C11 21.9521 8 18.0014 8 12.0014C8 6.0014 11 2.05078 11 2.05078"
                                    stroke="#141736" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M2.62891 15.5H21.3697" stroke="#141736" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M2.62891 8.5H21.3697" stroke="#141736" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            English
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.6004 9.60156L12.0004 14.4016L6.40039 9.60156" stroke="#141736" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </a>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer_copyright">
                        <p class="text-center">
                            <?php echo get_theme_mod('anox_copyright_text'); ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-social-icon">
                        <?php dynamic_sidebar('social-icon'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>


<?php wp_footer(); ?>
</body>

</html>