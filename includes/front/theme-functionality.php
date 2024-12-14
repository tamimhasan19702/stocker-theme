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