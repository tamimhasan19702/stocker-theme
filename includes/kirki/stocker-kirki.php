<?php

// panels

function stocker_kirki_panels()
{
    if (class_exists('Kirki\Panel')) {
        new \Kirki\Panel(
            'stocker_options_panel',
            [
                'priority' => 10,
                'title' => esc_html__('Stocker Options', 'kirki'),
                'description' => esc_html__('Stocker Options Description.', 'kirki'),
            ]
        );
    }
}
stocker_kirki_panels();



// section
function stocker_kirki_topbar_info()
{
    if (class_exists('Kirki\Section')) {
        new \Kirki\Section(
            'stocker_topbar_info',
            [
                'title' => esc_html__('Stocker Topbar Info', 'kirki'),
                'description' => esc_html__('Stocker Topbar Info Description', 'kirki'),
                'panel' => 'stocker_options_panel',
                'priority' => 160,
            ]
        );

        new \Kirki\Field\Text(
            [
                'settings' => 'stocker_location',
                'label' => esc_html__('Location', 'kirki'),
                'section' => 'stocker_topbar_info',
                'default' => esc_html__(' Enter your location here', 'kirki'),
                'priority' => 10,
            ]
        );

        new \Kirki\Field\Text(
            [
                'settings' => 'stocker_phone',
                'label' => esc_html__('Phone Number', 'kirki'),
                'section' => 'stocker_topbar_info',
                'default' => esc_html__('+01234567890', 'kirki'),
                'priority' => 10,
            ]
        );

        new \Kirki\Field\Text(
            [
                'settings' => 'stocker_email',
                'label' => esc_html__('Email', 'kirki'),
                'section' => 'stocker_topbar_info',
                'default' => esc_html__('example@example.com', 'kirki'),
                'priority' => 10,
            ]
        );
    }
}

stocker_kirki_topbar_info();


function stocker_kirki_header_logo()
{
    if (class_exists('Kirki\Section')) {
        new \Kirki\Section(
            'stocker_header_logo',
            [
                'title' => esc_html__('Stocker Header Logo', 'kirki'),
                'description' => esc_html__('Stocker Header Logo Description', 'kirki'),
                'panel' => 'stocker_options_panel',
                'priority' => 160,
            ]
        );

        new \Kirki\Field\Text(
            [
                'settings' => 'stocker_header_text',
                'label' => esc_html__('Header Text', 'kirki'),
                'section' => 'stocker_header_logo',
                'default' => function_exists('get_theme_mod') ? get_theme_mod('stocker_header_text', 'Stocker') : 'Stocker',
                'priority' => 10,
            ]
        );

        new \Kirki\Field\Image(
            [
                'settings' => 'stocker_logo',
                'label' => esc_html__('Image Control (URL)', 'kirki'),
                'description' => esc_html__('The saved value will be the URL.', 'kirki'),
                'section' => 'stocker_header_logo',
                'default' => function_exists('get_theme_mod') ? get_theme_mod('stocker_logo', '') : '',
                'priority' => 10,
            ]
        );
    }




}
stocker_kirki_header_logo();