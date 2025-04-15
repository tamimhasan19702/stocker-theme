<?php

// variables

// includes
include_once(get_theme_file_path('/includes/front/enqueue.php'));
include_once(get_theme_file_path('/includes/front/head.php'));
include_once(get_theme_file_path('/includes/setup.php'));
include_once(get_theme_file_path('/includes/front/theme-functionality.php'));
include_once(get_theme_file_path('/includes/front/stocker-custom-walker-nav-menu.php'));
// hooks



add_action('init', 'stocker_theme_setup');
add_action('wp_enqueue_scripts', 'stocker_theme_enqueue');
add_action('wp_head', 'stocker_theme_head', 5);


add_action('init', 'register_stocker_menu');
add_action('widgets_init', 'stocker_theme_slug_widgets_init');


// custom functions
if (function_exists('kirki')) {
    include_once(get_theme_file_path('/includes/kirki/stocker-kirki.php'));
} else {
    add_action('admin_notices', function() {
        echo '<div class="notice notice-warning is-dismissible">
                <p>Please install and activate the Kirki plugin for the theme to function properly.</p>
              </div>';
    });
}