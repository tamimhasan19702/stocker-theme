<?php 

function stocker_theme_enqueue() {

// Register styles
wp_register_style( 'stock-font-roboto', 'https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap' );
wp_register_style( 'font-awesome-css', 'https://use.fontawesome.com/releases/v5.15.4/css/all.css' );
wp_register_style( 'bootstrap-icon-css', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css' );

// Libraries stylesheet
wp_register_style( 'animate-min-css', get_theme_file_uri( '/lib/animate/animate.min.css' ) );
wp_register_style( 'lightbox-css', get_theme_file_uri( '/lib/lightbox/css/lightbox.min.css' ) );
wp_register_style( 'owlcarousel-css', get_theme_file_uri( '/lib/owlcarousel/assets/owl.carousel.min.css' ) );

// Bootstrap CSS
wp_register_style( 'bootstrap-css', get_theme_file_uri( '/css/bootstrap.min.css' ) );

// Main CSS
wp_register_style( 'main-css', get_theme_file_uri( '/css/style.css' ) );
wp_register_style( 'stock-css', get_theme_file_uri( '/style.css' ) );



// Register scripts

wp_register_script( 'main-js', get_theme_file_uri( '/js/main.js' ), array( 'jquery' ), '5.1.3', true );

wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js' );
wp_register_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js' );
wp_register_script( 'wowjs', get_theme_file_uri( '/lib/wow/wow.min.js' ));
wp_register_script( 'easing', get_theme_file_uri( '/lib/easing/easing.min.js' ));
wp_register_script( 'waypoints', get_theme_file_uri( '/lib/waypoints/waypoints.min.js' ));
wp_register_script( 'counterup', get_theme_file_uri( '/lib/counterup/counterup.min.js' ));
wp_register_script( 'lightbox', get_theme_file_uri( '/lib/lightbox/js/lightbox.min.js' ));
wp_register_script( 'owlcarousel', get_theme_file_uri( '/lib/owlcarousel/owl.carousel.min.js' ));

// Enqueue styles with dependencies
wp_enqueue_style( 'stock-font-roboto' );
wp_enqueue_style( 'font-awesome-css' );
wp_enqueue_style( 'bootstrap-icon-css' );

// Enqueue libraries styles
wp_enqueue_style( 'animate-min-css' );
wp_enqueue_style( 'lightbox-css' );
wp_enqueue_style( 'owlcarousel-css' );

// Enqueue Bootstrap CSS with dependencies
wp_enqueue_style( 'bootstrap-css' );
wp_enqueue_style( 'stock-css' );

// Enqueue main CSS, depending on Bootstrap
wp_enqueue_style( 'main-css', get_theme_file_uri( '/css/style.css' ), array( 'bootstrap-css' ) );





// Enqueue scripts with dependencies
wp_enqueue_script( 'main-js' );
wp_enqueue_script( 'jquery' );
wp_enqueue_script( 'bootstrap' );
wp_enqueue_script( 'wowjs' );
wp_enqueue_script( 'easing' );
wp_enqueue_script( 'waypoints' );
wp_enqueue_script( 'counterup' );
wp_enqueue_script( 'lightbox' );
wp_enqueue_script( 'owlcarousel' );
}