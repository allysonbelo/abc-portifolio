<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.theme.default.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>

</head>

<body <?php body_class(); ?>>

    <?php if (get_option('_popup_checkbox') === 'yes') {
        get_template_part('parts/content', 'popup');
    }
    ?>

    <div class="full-wrapper">
        <div class="wrapper">
            <header class="header">
                <div class="header__wrapper">
                    <div class="logo">
                        <?php if (has_custom_logo()) : ?>
                            <?php the_custom_logo(); ?>
                        <?php else : ?>
                            <a href="<?= home_url('page-home') ?>"><span><?= bloginfo('name'); ?></span></a>
                        <?php endif; ?>
                    </div>
                    <nav class="mobile">
                        <div class="btn_dropdown">
                            <div class="line line1"></div>
                            <div class="line line2"></div>
                            <div class="line line3"></div>
                        </div>
                        <div class="menu-mobile">
                            <?php wp_nav_menu(array(
                                'theme_location' => 'wp_abcdev_header_menu',
                                'depth' => 1, 'menu_class' => 'header_menu',
                                'echo' => true,
                            )) ?>
                        </div>
                    </nav>
                    <nav class="desktop">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'wp_abcdev_header_menu',
                            'depth' => 1, 'menu_class' => 'header_menu',
                            'echo' => true,
                        )) ?>
                    </nav>
                </div>

            </header>
            <?php get_template_part('parts/content', 'social'); ?>
        </div>