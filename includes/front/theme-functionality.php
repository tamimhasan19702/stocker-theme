<?php


if (!function_exists('register_stocker_menu')) {
    function register_stocker_menu()
    {
        register_nav_menus(array(
            'stocker_menu' => __('Stocker Menu', 'stocker'),
            'stocker_footer_menu' => __('Stocker Footer Menu', 'stocker'),
        ));
    }

}

if(!function_exists('stocker_main_menu')) {
    function stocker_main_menu() {
        wp_nav_menu(array(
            'theme_location' => 'stocker_menu',
            'container' => '',
            'container_class' => '',
            'menu_class' => 'navbar-nav ms-auto py-0',
            'fallback_cb' => 'Stocker_Custom_Walker_Nav_Menu::fallback',
            'walker' => new Stocker_Custom_Walker_Nav_Menu
        ));
    }
}


/**
 *register sidebar
 */

if(!function_exists('stocker_theme_slug_widgets_init')) {
    function stocker_theme_slug_widgets_init() {
        register_sidebar( array(
            'name'          => __( 'Footer', 'stocker' ),
            'id'            => 'footer-1',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'stocker' ),
            'before_widget' => '<div id="%1$s" class="col-md-6 col-lg-6 col-xl-4 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="text-white mb-4">',
            'after_title'   => '</h4>',
        ) );
        
        register_sidebar( array(
            'name'          => __( 'Footer', 'stocker' ),
            'id'            => 'footer-2',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'stocker' ),
            'before_widget' => '<div id="%1$s" class="col-md-6 col-lg-6 col-xl-2 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="text-white mb-4">',
            'after_title'   => '</h4>',
        ) );

        register_sidebar( array(
            'name'          => __( 'Footer', 'stocker' ),
            'id'            => 'footer-3',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'stocker' ),
            'before_widget' => '<div id="%1$s" class="
            col-md-6 col-lg-6 col-xl-3 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="text-white mb-4">',
            'after_title'   => '</h4>',
        ) );
        
        register_sidebar( array(
            'name'          => __( 'Footer', 'stocker' ),
            'id'            => 'footer-4',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'stocker' ),
            'before_widget' => '<div id="%1$s" class="
            col-md-6 col-lg-6 col-xl-3 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="text-white mb-4">',
            'after_title'   => '</h4>',
        ) );
    }
}