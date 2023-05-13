<?php

require get_template_directory() . '/inc/customizer.php';

function abcdev_load_scripts()
{
    //Styles - Start
    wp_enqueue_style('abcdev-reset', get_template_directory_uri() . '/styles/reset.css', array(), filemtime(get_template_directory() . '/styles/reset.css'), 'all');
    wp_enqueue_style('abcdev-base', get_template_directory_uri() . '/styles/base.css', array(), filemtime(get_template_directory() . '/styles/base.css'), 'all');
    wp_enqueue_style('abcdev-style', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), 'all');
    wp_enqueue_style('abcdev-header', get_template_directory_uri() . '/styles/header.css', array(), filemtime(get_template_directory() . '/styles/header.css'), 'all');
    wp_enqueue_style('abcdev-index', get_template_directory_uri() . '/styles/index.css', array(), filemtime(get_template_directory() . '/styles/index.css'), 'all');
    wp_enqueue_style('abcdev-content-hero', get_template_directory_uri() . '/styles/content-hero.css', array(), filemtime(get_template_directory() . '/styles/content-hero.css'), 'all');
    wp_enqueue_style('abcdev-dark-mode', get_template_directory_uri() . '/styles/dark-mode.css', array(), filemtime(get_template_directory() . '/styles/dark-mode.css'), 'all');
    wp_enqueue_style('abcdev-single', get_template_directory_uri() . '/styles/single.css', array(), filemtime(get_template_directory() . '/styles/single.css'), 'all');
    wp_enqueue_style('abcdev-social', get_template_directory_uri() . '/styles/social.css', array(), filemtime(get_template_directory() . '/styles/social.css'), 'all');
    wp_enqueue_style('abcdev-pagination', get_template_directory_uri() . '/styles/pagination.css', array(), filemtime(get_template_directory() . '/styles/pagination.css'), 'all');
    wp_enqueue_style('abcdev-footer', get_template_directory_uri() . '/styles/footer.css', array(), filemtime(get_template_directory() . '/styles/footer.css'), 'all');
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

    add_theme_support( 'post-thumbnails' );
    // add_theme_support( 'custom-background' );
    add_theme_support( 'title-tag' );

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

// Inclui o arquivo axu.php apenas uma vez
require_once get_template_directory() . '/custom_fields.php';

//Adiciona um submenu no menu aparenccia para habilitar/desabilitar um popup de site em desenvolvimento - Inicio
add_action('admin_menu', 'popup_settings_page');
function popup_settings_page() {
    add_submenu_page(
        'themes.php', // or 'plugins.php' for plugins
        __('Popup Settings', 'textdomain'),
        __('Popup Settings', 'textdomain'),
        'manage_options',
        'popup-settings-id',
        'popup_settings_callback'
    );
}

function popup_settings_callback() {
    ?>
    <div class="wrap">
        <h1><?php _e( 'Popup Settings', 'textdomain' ); ?></h1>
        <form method="POST" action="options.php">
            <?php 
                settings_fields( 'popup_settings_group' );
                $value = get_option( '_popup_checkbox' );
                echo '<label for="popup-checkbox">';
                echo '<input type="checkbox" id="popup-checkbox" name="_popup_checkbox" value="yes" '. checked( $value, 'yes', false ) .' />';
                echo __('Show Popup Content', 'textdomain');
                echo '</label>';
                submit_button();
            ?>
        </form>
    </div>
    <?php
}

add_action( 'admin_init', 'register_popup_settings' );
function register_popup_settings() {
    register_setting(
        'popup_settings_group',
        '_popup_checkbox'
    );
}
//Adiciona um submenu no menu aparenccia para habilitar/desabilitar um popup de site em desenvolvimento - Fim
