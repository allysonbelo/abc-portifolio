<div class="wrapper">
    <section class="hero">

        <?php
        $title = get_theme_mod('set_hero_title', 'Site Title.');
        $profession = get_theme_mod('set_hero_profession', 'Profession');
        $paragraph = get_theme_mod('set_hero_paragraph', 'Desenvolvedor front-end WordPress experiente em usar as melhores práticas para criar interfaces elegantes e eficientes.');
        $link_button = get_theme_mod('set_hero_button_link', '#');
        $text_button = get_theme_mod('set_hero_button_title', 'Text Button');
        $hero_background = wp_get_attachment_url(get_theme_mod('set_hero_background'));
        ?>

        <div class="hero__content">
            <h1 class="hero__content--title"><?php echo $title; ?></h1>
            <span class="hero__content--vocation"><?php echo $profession; ?></span>
            <p class="hero__content--text"><?php echo $paragraph; ?></p>
            <?php if (!is_page('projetos')) {
            ?>
                <a href="<?php echo $link_button ?>" class="hero__content--button" target="_blank"><?php echo $text_button; ?></a>
            <?php
            }

            ?>
            <div class="hero__content--arrows">
                <span class="dashicons dashicons-arrow-down-alt2 hero__content--arrow"></span>
                <span class="dashicons dashicons-arrow-down-alt2 hero__content--arrow"></span>
                <span class="dashicons dashicons-arrow-down-alt2 hero__content--arrow"></span>
            </div>
        </div>
        <div class="hero__bg">
            <img src="<?php echo $hero_background ?>" alt="">
        </div>
    </section>
</div>