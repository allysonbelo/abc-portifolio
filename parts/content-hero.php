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
            <a href="<?php echo $link_button ?>" class="hero__content--button" target="_blank"><?php echo $text_button; ?></a>
        </div>
        <div class="hero__bg" style="background: #36373c url( '<?php echo $hero_background ?>' ) no-repeat center center / cover;">
        </div>
    </section>
</div>