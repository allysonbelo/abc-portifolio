<div class="wrapper">
    <section class="hero">
        <div class="hero__content">
            <!-- <span id="theme-toggle">Tema</span> -->
            <h1 class="hero__content--title">Allyson Belo Cavalcante</h1>
            <span class="hero__content--vocation">Front-End</span>
            <p class="hero__content--text">Desenvolvedor front-end WordPress experiente em usar as melhores práticas para criar interfaces elegantes e eficientes.</p>
            <a href="#" class="hero__content--button">Ver projetos</a>
        </div>
        <?php
        $hero_background = wp_get_attachment_url(get_theme_mod('set_hero_background'));
        ?>
        <div class="hero__bg" style="background: #36373c url( '<?php echo $hero_background ?>' ) no-repeat center center / cover;">
        </div>
    </section>
</div>