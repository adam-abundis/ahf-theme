<?php
declare(strict_types=1);
?>

<footer class="site-footer">
    <div class="site-footer__inner">
        <nav class="site-footer__nav" aria-label="Footer navigation">
            <?php
            wp_nav_menu([
                'theme_location' => 'footer',
                'menu_class'     => 'nav__list',
                'container'      => false,
            ]);
            ?>
        </nav>

        <p class="site-footer__credit">
            &copy; <?php echo esc_html( date( 'Y' ) ); ?>
            <?php bloginfo( 'name' ); ?>. All rights reserved.
        </p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
