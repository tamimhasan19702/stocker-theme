<?php 

// variables

// includes
include_once(get_theme_file_path( '/includes/front/enqueue.php' ));
// hooks



add_action('wp_enqueue_scripts', 'stocker_theme_enqueue');