<?php

function abcdev_customizer($wp_customize)
{
    $wp_customize->add_section(
        'sec_hero',
        ['title' => 'Hero Section']
    );

    $wp_customize->add_setting(
        'set_hero_background',
        [
            'type' => 'theme_mod',
            'sanitize_callback' => 'absint'
        ]
    );

    $wp_customize->add_control(
        new WP_Customize_Media_Control(
            $wp_customize, 
            'set_hero_background',
            [
                'label' => 'Hero Image',
                'section' => 'sec_hero',
                'mime_type' => 'image'
            ]
        )
    );
}
add_action('customize_register', 'abcdev_customizer');
  