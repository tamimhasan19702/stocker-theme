<?php

// variables

// includes
include_once(get_theme_file_path('/includes/front/enqueue.php'));
include_once(get_theme_file_path('/includes/front/head.php'));
include_once(get_theme_file_path('/includes/setup.php'));
// hooks



add_action('wp_enqueue_scripts', 'stocker_theme_enqueue');
add_action('wp_head', 'stocker_theme_head', 5);
add_action('after_setup_theme', 'stocker_theme_setup');


// custom functions

include_once('includes/kirki/stocker-kirki.php');