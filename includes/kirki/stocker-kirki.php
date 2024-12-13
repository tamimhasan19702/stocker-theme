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
function stocker_kirki_section_and_controls()
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
                'label' => esc_html__('Stocker Location', 'kirki'),
                'section' => 'stocker_topbar_info',
                'default' => esc_html__('Stocker Location Default', 'kirki'),
                'priority' => 10,
            ]
        );
    }
}

stocker_kirki_section_and_controls();