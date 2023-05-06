<?php get_header(); ?>
<?php get_template_part('parts/content', 'hero'); ?>
<main class="wrapper">
    <div class="blog__container">
        <h2 class="blog__container--title">Meus projetos</h2>
        <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <article class="blog__article">
                    <div class="blog__article--thumbnail">
                        <a href="<?php the_permalink() ?>">
                            <?php the_post_thumbnail('large'); ?>
                        </a>
                    </div>
                    <div class="blog__article--content">
                        <h3 class="blog__article--title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="meta-info">
                            <p>Posted in <?php echo get_the_date(); ?> </p>
                            <p>Categories: <?php the_category(' '); ?></p>
                            <p>Tags: <?php the_tags('', ', '); ?></p>
                        </div>
                    </div>
                </article>
            <?php endwhile;
        else : ?>
            <p>Nothing yet to be displayed!</p>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>