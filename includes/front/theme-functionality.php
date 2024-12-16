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
            'menu_class' => 'navbar-nav ms-auto py-0'
        ));
    }
}