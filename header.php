<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
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