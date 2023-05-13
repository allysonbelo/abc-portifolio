<?php get_header(); ?>
<?php get_template_part('parts/content', 'hero'); ?>
<main class="wrapper">
    <div class="blog__container">
        <h2 id="anchor" class="blog__container--title">Meus projetos</h2>
        <div class="blog__container--posts">
            <?php
            $projeto = get_category_by_slug('projeto');
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 9,
                'category__in' =>  array($projeto->cat_ID)
            );
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args['paged'] = $paged;
            $postList = new WP_Query($args);

            if ($postList->have_posts()) :
                while ($postList->have_posts()) : $postList->the_post(); ?>
                    <article class="blog__article">
                        <div class="blog__article--thumbnail">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink() ?>">
                                    <?php the_post_thumbnail('large'); ?>
                                </a>
                            <?php else : ?>
                                <a href="<?php the_permalink() ?>">
                                    <img class="default-thumbnail" src="<?php echo get_template_directory_uri(); ?>/img/thumbnail-default.jpg" alt="Imagem padrão">
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="blog__article--content">
                            <h3 class="blog__article--title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="meta__info">
                                <p class="meta__info--p">Posted in <?php echo get_the_date('d/m/Y'); ?> </p>
                                <?php if (is_user_logged_in()) { ?>
                                    <p class="meta__info--p">Categories: <?php the_category(' '); ?></p>
                                <?php } ?>
                                <p class="meta__info--p">Tecnologies: <?php the_tags('<', '> <', '>'); ?></p>
                            </div>
                        </div>
                    </article>
                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p>Nothing yet to be displayed!</p>
            <?php endif; ?>

        </div>
        <?php get_template_part('parts/content', 'pagination'); ?>
    </div>
</main>
<?php get_footer(); ?>