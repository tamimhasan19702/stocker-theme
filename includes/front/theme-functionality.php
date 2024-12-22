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
            'name'          => __( 'Main Sidebar', 'textdomain' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>',
        ) );
    }
}