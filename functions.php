<?php

function abcdev_load_scripts()
{
    //Styles - Start
    wp_enqueue_style('abcdev-reset', get_template_directory_uri() . '/styles/reset.css', array(), '1.0', 'all');
    wp_enqueue_style('abcdev-style', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), 'all');
    wp_enqueue_style('abcdev-base', get_template_directory_uri() . '/styles/base.css', array(), filemtime(get_template_directory() . '/styles/base.css'), 'all');
    //Styles - End

    //Font - Start
    wp_enqueue_style('abcdev-google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Poppins:wght@300;400;600;700&display=swap', array(), null);
    //Font - End

    //Javascript - Start
    // wp_enqueue_script('dropdwon', get_template_directory_uri() . './js/dropdown.js', array(), '1.0', true);
    //Javascript - End
}
add_action('wp_enqueue_scripts', 'abcdev_load_scripts');
