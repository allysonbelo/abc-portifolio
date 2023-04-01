<?php

function abc_dev() {
    wp_enqueue_style( 'abc-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'abc_dev' );