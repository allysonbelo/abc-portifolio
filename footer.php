<div class="wrapper">
    <footer>
        <div class="footer__content">
            <div class="logo">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?= home_url('page-home') ?>"><span><?= bloginfo('name'); ?></span></a>
                <?php endif; ?>
            </div>
            <?php get_template_part('/parts/content', 'social'); ?>
        </div>
        <nav>
            <?php wp_nav_menu(array('theme_location' => 'wp_abcdev_footer_menu', 'depth' => 1, 'menu_class' => 'footer__menu')) ?>
        </nav>
        <div>
            <p class="footer__copy"><?php echo get_theme_mod('set_copyright', 'Copyright 2023 - Todos os direitos reservados.'); ?></p>
        </div>
    </footer>
</div>
</div>
<?php wp_footer(); ?>
</body>

</html>