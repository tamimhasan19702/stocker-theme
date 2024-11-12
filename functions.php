<?php

// variables

// includes
include_once(get_theme_file_path('/includes/front/enqueue.php'));
include_once(get_theme_file_path('/includes/front/head.php'));
// hooks



add_action('wp_enqueue_scripts', 'stocker_theme_enqueue');
add_action('wp_head', 'stocker_theme_head', 5);