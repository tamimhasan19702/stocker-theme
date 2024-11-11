<?php
// Prevent direct access to the file
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Theme Setup


// Enqueue Styles and Scripts
function my_awesome_theme_scripts() {


    // Enqueue additional stylesheets (if any)
    wp_enqueue_style('custom-style', get_template_directory_uri() . './css/style.css', array(), '1.0.0', 'all');
    wp_enqueue_style('custom-style', get_template_directory_uri() . './css/bootstrap.min.css', array(), '1.0.0', 'all');


    // Enqueue custom scripts
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/custom-script.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'my_awesome_theme_scripts');






?>