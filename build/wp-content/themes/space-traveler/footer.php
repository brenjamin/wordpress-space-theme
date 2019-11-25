
<footer class="footer">
    <div class="container">
        <div class="footer__container">

            <div class="footer__content">
                <nav class="footer__nav">
                    <?php
                        wp_nav_menu( array(
                            'menu'            => 'footer',
                            'theme_location' => 'footer',
                            'container'       => 'ul',
                            'menu_class'     => 'footer-nav__items',
                            'menu_id'         => false,
                            'depth'          => 1,
                            'fallback_cb'     => 'bs4navwalker::fallback',
                            'walker'          => new bs4navwalker()
                        ) );
                    ?>
                </nav>
                <div class="footer__legal">
                    &copy;2019 Starship Trooper Enterprises
                </div>
            </div>
            <div class="footer__logo-container">
                <a href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/space-logo-alt.png" class="footer__logo"></a>
                <a href="<?php echo home_url() ?>" class="footer__link">
                    <div class="footer__logo-text">
                        <p>Starship</p><p>Trooper</p>
                    </div>
                </a>
            </div>
        </div>
        
        
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>