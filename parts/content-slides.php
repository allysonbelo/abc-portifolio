<div class="wrapper">

    <div class="slider">
        <h2 id="anchor" class="slider__title">Project</h2>
        <div class="owl-carousel owl-theme">
            <?php
            $projeto = get_category_by_slug('blog');
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'category__in' =>  array($projeto->cat_ID)
            );
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args['paged'] = $paged;
            $postList = new WP_Query($args);
            if ($postList->have_posts()) {
                while ($postList->have_posts()) {
                    $postList->the_post();
            ?>
                    <article class="blog__article">
                        <div class="blog__article--thumbnail">
                            <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink() ?>">
                                    <?php the_post_thumbnail('large', array('class' => 'imagem-slide')); ?>
                                </a>
                            <?php else : ?>
                                <a href="<?php the_permalink() ?>">
                                    <img class="default-thumbnail imagem-slide" src="<?php echo get_template_directory_uri(); ?>/img/thumbnail-default.jpg" alt="Imagem padrão">
                                </a>
                            <?php endif; ?>
                        </div>
                        <span class="blog__article--title">
                            <?php the_title(); ?>
                        </span>
                    </article>
            <?php
                }
                wp_reset_postdata();
            }
            ?>
        </div>
    </div>
</div>