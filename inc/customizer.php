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

    //Hero Title h1
    $wp_customize->add_setting(
        'set_hero_title',
        [
            'type' => 'theme_mod',
            'default' => 'Title Here',
            'sanitize_callback' => 'sanitize_text_field'
        ]
    );

    $wp_customize->add_control(
        new WP_Customize_Media_Control(
            $wp_customize,
            'set_hero_title',
            [
                'label' => 'Hero Title',
                'description' => 'Please type your main title hero',
                'section' => 'sec_hero',
                'type' => 'text'
            ]
        )
    );

    //Hero Subtitle
    $wp_customize->add_setting(
        'set_hero_profession',
        [
            'type' => 'theme_mod',
            'default' => 'Put Your Subtitle Here',
            'sanitize_callback' => 'sanitize_text_field'
        ]
    );
    
    $wp_customize->add_control(
        new WP_Customize_Media_Control(
            $wp_customize,
            'set_hero_profession',
            [
                'label' => 'Hero profession',
                'description' => 'Your profession here',
                'section' => 'sec_hero',
                'type' => 'text'
            ]
        )
    );

    //Hero paragraph
    $wp_customize->add_setting(
        'set_hero_paragraph',
        [
            'type' => 'theme_mod',
            'default' => 'Put Your Text Here',
            'sanitize_callback' => 'sanitize_text_field'
        ]
    );

    $wp_customize->add_control(
        new WP_Customize_Media_Control(
            $wp_customize,
            'set_hero_paragraph',
            [
                'label' => 'Hero Paragraph',
                'description' => 'Your paragraph text here',
                'section' => 'sec_hero',
                'type' => 'textarea'
            ]
        )
    );

    //Hero button
    $wp_customize->add_setting(
        'set_hero_button_title',
        [
            'type' => 'theme_mod',
            'default' => 'Text Button',
            'sanitize_callback' => 'sanitize_text_field'
        ]
    );

    $wp_customize->add_control(
        new WP_Customize_Media_Control(
            $wp_customize,
            'set_hero_button_title',
            [
                'label' => 'Text Button',
                'description' => 'Text Button',
                'section' => 'sec_hero',
                'type' => 'text'
            ]
        )
    );

    $wp_customize->add_setting(
        'set_hero_button_link',
        [
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        ]
    );

    $wp_customize->add_control(
        new WP_Customize_Media_Control(
            $wp_customize,
            'set_hero_button_link',
            [
                'label' => 'Hero Button link',
                'description' => 'Please, type your button link here',
                'section' => 'sec_hero',
                'type' => 'url'
            ]
        )
    );

    //Social Networks
    $wp_customize->add_section(
        'sec_social',
        [
            'title' => 'Social Networks',
            'description' => 'Links to predefined social networks'
        ]
    );

    $wp_customize->add_setting(
        'set_social_linkedin',
        [
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        ]
    );

    $wp_customize->add_control(
        new WP_Customize_Media_Control(
            $wp_customize, 
            'set_social_linkedin',
            [
                'label' => 'Linkedin link',
                'description' => 'PLease, type your linkdin url here',
                'section' => 'sec_social',
                'type' => 'url'
            ]
        )
    );

    $wp_customize->add_setting(
        'set_social_git',
        [
            'type' => 'theme_mod',
            'default' => '#',
            'sanitize_callback' => 'esc_url_raw'
        ]
    );

    $wp_customize->add_control(
        new WP_Customize_Media_Control(
            $wp_customize, 
            'set_social_git',
            [
                'label' => 'Linkedin link',
                'description' => 'PLease, type your github url here',
                'section' => 'sec_social',
                'type' => 'url'
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
            'sanitize_callback' => 'sanitize_text_field'
        ]
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'set_copyright',
            [
                'label' => 'Copyright Information',
                'description' => 'Please type your copyright here',
                'section' => 'sec_copy',
                'type' => 'text'
            ]
        )
    );
}
add_action('customize_register', 'abcdev_customizer');
