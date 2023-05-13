<div class="pagination">
    <?php
    the_posts_pagination(array(
        'prev_text' => '<span class="dashicons dashicons-arrow-left-alt"></span>', // texto para o link "Anterior"
        'next_text' => '<span class="dashicons dashicons-arrow-right-alt"></span>', // texto para o link "Próximo"
    ));
    ?>
</div>