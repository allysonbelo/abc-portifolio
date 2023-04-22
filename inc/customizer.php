<?php

function abcdev_customizer($wp_customize)
{
    //Background Hero
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

    //Copyright Footer
    $wp_customize->add_section(
        'sec_copy',
        [
            'title' => 'Copyright Settings',
            'description' => 'Copyright Settings'
        ]
    );

    $wp_customize->add_setting(
        'set_copyright',
        [
            'type' => 'theme_mod',
            'default' => 'Copyright X - All Rights Reserved',
            'sanitizer_callback' => 'sanitize_text_field'
        ]
    );

    $wp_customize->add_control(
        'set_copyright',
        [
            'label' => 'Copyright Information',
            'description' => 'please, type your copyrigh here',
            'section' => 'sec_copy',
            'type' => 'text'
        ]
    );
}
add_action('customize_register', 'abcdev_customizer');
