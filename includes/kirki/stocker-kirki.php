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

        new \Kirki\Field\Repeater(
            [
                'settings' => 'stocker_topbar_buttons',
                'label' => esc_html__('Button', 'kirki'),
                'section' => 'stocker_topbar_info',
                'priority' => 10,
                'row_label' => [
                    'type' => 'field',
                    'value' => esc_html__('Button', 'kirki'),
                    'field' => 'text',
                ],
                'button_label' => esc_html__('Add new button', 'kirki'),
                'fields' => [
                    'icon' => [
                        'type' => 'text',
                        'label' => esc_html__('Icon Class', 'kirki'),
                        'description' => esc_html__('Enter the fontawesome class like "fas fa-user"', 'kirki'),
                        'default' => 'fas fa-user',
                    ],
                    'text' => [
                        'type' => 'text',
                        'label' => esc_html__('Button Text', 'kirki'),
                    ],
                    'url' => [
                        'type' => 'url',
                        'label' => esc_html__('Button URL', 'kirki'),
                    ],
                ],
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
                'title' => esc_html__('Stocker Header Options', 'kirki'),
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

         
        new \Kirki\Field\Text(
            [
                'settings' => 'stocker_button_text',
                'label' => esc_html__('Button Text', 'kirki'),
                'section' => 'stocker_header_logo',
                'default' => esc_html__('Click Me', 'kirki'),
                'priority' => 10,
            ]
        );

        new \Kirki\Field\URL(
            [
                'settings' => 'stocker_button_url',
                'label' => esc_html__('Button URL', 'kirki'),
                'section' => 'stocker_header_logo',
                'default' => esc_url(home_url('/')),
                'priority' => 10,
            ]
        );

        new \Kirki\Field\Color(
            [
                'settings' => 'stocker_button_bgcolor',
                'label' => esc_html__('Button Background Color', 'kirki'),
                'section' => 'stocker_header_logo',
                'default' => '#007bff',
                'priority' => 10,
            ]
        );

        new \Kirki\Field\Color(
            [
                'settings' => 'stocker_button_text_color',
                'label' => esc_html__('Button Text Color', 'kirki'),
                'section' => 'stocker_header_logo',
                'default' => '#ffffff',
                'priority' => 10,
            ]
        );

        new \Kirki\Field\Color(
            [
                'settings' => 'stocker_button_hover_bgcolor',
                'label' => esc_html__('Button Hover Background Color', 'kirki'),
                'section' => 'stocker_header_logo',
                'default' => '#0056b3',
                'priority' => 10,
            ]
        );

        new \Kirki\Field\Color(
            [
                'settings' => 'stocker_button_hover_text_color',
                'label' => esc_html__('Button Hover Text Color', 'kirki'),
                'section' => 'stocker_header_logo',
                'default' => '#ffffff',
                'priority' => 10,
            ]
        );

        new \Kirki\Field\Slider(
            [
                'settings' => 'stocker_button_radius',
                'label' => esc_html__('Button Radius', 'kirki'),
                'section' => 'stocker_header_logo',
                'default' => 5,
                'choices' => [
                    'min' => 0,
                    'max' => 50,
                    'step' => 1,
                ],
                'priority' => 10,
            ]
        );

        new \Kirki\Field\Dimensions(
            [
                'settings' => 'stocker_button_margin',
                'label' => esc_html__('Button Margin', 'kirki'),
                'section' => 'stocker_header_logo',
                'default' => [
                    'top' => '10px',
                    'bottom' => '10px',
                    'left' => '10px',
                    'right' => '10px',
                ],
                'priority' => 10,
            ]
        );

        new \Kirki\Field\Dimensions(
            [
                'settings' => 'stocker_button_padding',
                'label' => esc_html__('Button Padding', 'kirki'),
                'section' => 'stocker_header_logo',
                'default' => [
                    'top' => '10px',
                    'bottom' => '10px',
                    'left' => '20px',
                    'right' => '20px',
                ],
                'priority' => 10,
            ]
        );


    }




}
stocker_kirki_header_logo();


function stocker_footer_copyright(){
    if (class_exists('Kirki\Section')) {
        new \Kirki\Section(
            'stocker_footer_copyright',
            [
                'title' => esc_html__('Stocker Footer Copyright', 'kirki'),
                'description' => esc_html__('Stocker Footer Copyright Description', 'kirki'),
                'panel' => 'stocker_options_panel',
                'priority' => 160,
            ]
        );

        new \Kirki\Field\Text(
            [
                'settings' => 'stocker_copyright',
                'label' => esc_html__('Copyright Text', 'kirki'),
                'section' => 'stocker_footer_copyright',
                'default' => function_exists('get_theme_mod') ? get_theme_mod('stocker_copyright', '&copy; ' . date('Y') . ' ' . get_bloginfo('name')) : '&copy; ' . date('Y') . ' ' . get_bloginfo('name'), // Default value
                'priority' => 10,
            ]
        );


        new \Kirki\Field\Text(
            [
                'settings' => 'stocker_copyright_link',
                'label' => esc_html__('Copyright Link', 'kirki'),
                'section' => 'stocker_footer_copyright',
                'default' => function_exists('get_theme_mod') ? get_theme_mod('stocker_copyright_link', '#') : '#', // Default value
                'priority' => 10,
            ]
        );


        
    }


}

stocker_footer_copyright();