<?php

require get_template_directory() . '/inc/customizer.php';

function abcdev_load_scripts()
{
    //Styles - Start
    wp_enqueue_style('abcdev-reset', get_template_directory_uri() . '/styles/reset.css', array(), filemtime(get_template_directory() . '/styles/reset.css'), 'all');
    wp_enqueue_style('abcdev-style', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), 'all');
    wp_enqueue_style('abcdev-header', get_template_directory_uri() . '/styles/header.css', array(), filemtime(get_template_directory() . '/styles/header.css'), 'all');
    wp_enqueue_style('abcdev-base', get_template_directory_uri() . '/styles/base.css', array(), filemtime(get_template_directory() . '/styles/base.css'), 'all');
    wp_enqueue_style('abcdev-content-hero', get_template_directory_uri() . '/styles/content-hero.css', array(), filemtime(get_template_directory() . '/styles/content-hero.css'), 'all');
    wp_enqueue_style('abcdev-dark-mode', get_template_directory_uri() . '/styles/dark-mode.css', array(), filemtime(get_template_directory() . '/styles/dark-mode.css'), 'all');
    //Styles - End

    //Font - Start
    wp_enqueue_style('abcdev-google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Poppins:wght@300;400;600;700&display=swap', array(), null);
    //Font - End

    //Javascript - Start
    wp_enqueue_script('dropdwon', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true);
    wp_enqueue_script('dark-mode', get_template_directory_uri() . '/js/dark-mode.js', array(), '1.0', true);
    wp_enqueue_script('link-share', get_template_directory_uri() . '/js/link-share.js', array(), '1.0', true);
    //Javascript - End
}
add_action('wp_enqueue_scripts', 'abcdev_load_scripts');

//Add google analytics tag
function add_google_analytics_tag()
{ ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MGXK3KY50Z"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-MGXK3KY50Z');
    </script>
<?php
}
add_action('wp_head', 'add_google_analytics_tag');

//Menu dinâmico 
function abcdev_config()
{
    register_nav_menus(
        array(
            'wp_abcdev_header_menu' => 'Header Menu',
            'wp_abcdev_footer_menu' => 'Footer Menu'
        )
    );
}
add_action('after_setup_theme', 'abcdev_config', 0);

//Logo dinâmico
add_theme_support('custom-logo', [
    'height'      => 80,
    'width'       => 320,
    'flex-height' => true,
    'flex-width'  => true,
]);

//Link de compartilhamento
function add_web_share_api()
{
    wp_enqueue_script('web-share-api', 'https://cdn.jsdelivr.net/npm/@web-apis/share@1.0.0/dist/web-share-api.min.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'add_web_share_api');

//DashIcons
function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
