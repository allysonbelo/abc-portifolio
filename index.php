<?php get_header(); ?>
<?php get_template_part('parts/content', 'hero'); ?>
<main class="wrapper">
    <div class="blog__container">
        <h2 class="blog__container--title">Blog</h2>
        <div class="blog__container--posts">
            <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <article class="blog__article">
                        <div class="blog__article--thumbnail">
                            <?php
                            if (has_post_thumbnail()) : ?>
                                <!-- Se houver uma imagem destacada, exiba ela -->
                                <a href="<?php the_permalink() ?>">
                                    <?php the_post_thumbnail('large'); ?>
                                </a>
                            <?php else : ?>
                                <!-- Caso contrário, exiba a imagem padrão -->
                                <a href="<?php the_permalink() ?>">
                                    <img class="default-thumbnail" src="<?php echo get_template_directory_uri(); ?>/img/thumbnail-default.jpg" alt="Imagem padrão">
                                </a>
                            <?php endif; ?>

                        </div>
                        <div class="blog__article--content">
                            <h3 class="blog__article--title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="meta__info">
                                <p class="meta__info--p">Posted in <?php echo get_the_date('d/m/Y'); ?> </p>
                                <!-- <p class="meta__info--p">Categories: <?php the_category(' '); ?></p> -->
                                <?php if (is_user_logged_in()) {
                                ?>
                                    <p class="meta__info--p">Categories: <?php the_category(' '); ?></p>
                                <?php
                                }
                                ?>
                                <p class="meta__info--p">Tecnologies: <?php the_tags('<', '> <', '>'); ?></p>
                            </div>
                        </div>
                    </article>
                <?php endwhile;
            else : ?>
                <p>Nothing yet to be displayed!</p>
            <?php endif; ?>
        </div>
        <?php get_template_part('parts/content', 'pagination');; ?>
    </div>
</main>
<?php get_footer(); ?>