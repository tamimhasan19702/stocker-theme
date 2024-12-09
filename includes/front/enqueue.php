<?php

function stocker_theme_enqueue()
{

wp_enqueue_style( 'google-fonts-preconnect', 'https://fonts.googleapis.com', false, null, 'preconnect' );
wp_enqueue_style( 'google-fonts-preconnect-crossorigin', 'https://fonts.gstatic.com', false, null, 'preconnect', array( 'crossorigin' ) );
    
 // Google Web Fonts
 wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap', false, null );

 // Icon Font Stylesheets
 wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.15.4/css/all.css', false, null );
 wp_enqueue_style( 'bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css', false, null );

 // Libraries Stylesheets
 wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/lib/animate/animate.min.css', false, null );
 wp_enqueue_style( 'lightbox-css', get_template_directory_uri() . '/lib/lightbox/css/lightbox.min.css', false, null );
 wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css', false, null );

 // Customized Bootstrap Stylesheet
 wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', false, null );

 // Template Stylesheet
 wp_enqueue_style( 'template-style', get_template_directory_uri() . '/css/style.css', false, null );

 
//  js sripts

// jQuery
wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js', array(), null, true );

// Bootstrap Bundle (includes Popper.js)
wp_enqueue_script( 'bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', array( 'jquery' ), null, true );

// Library Scripts
wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/lib/wow/wow.min.js', array(), null, true );
wp_enqueue_script( 'easing-js', get_template_directory_uri() . '/lib/easing/easing.min.js', array(), null, true );
wp_enqueue_script( 'waypoints-js', get_template_directory_uri() . '/lib/waypoints/waypoints.min.js', array(), null, true );
wp_enqueue_script( 'counterup-js', get_template_directory_uri() . '/lib/counterup/counterup.min.js', array(), null, true );
wp_enqueue_script( 'lightbox-js', get_template_directory_uri() . '/lib/lightbox/js/lightbox.min.js', array(), null, true );
wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js', array(), null, true );

// Template Javascript
wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), null, true );
}