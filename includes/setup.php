<?php


function stocker_theme_setup()
{
    add_theme_support('editor-styles');

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    add_theme_support('customize-selective-refresh-widgets');

    add_theme_support('automatic-feed-links');

    add_theme_support('custom-logo', array(
        'height' => 250,
        'width' => 250,
        'flex-width' => true,
        'flex-height' => true,
    ));

    add_editor_style([
        'https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap',
        'https://use.fontawesome.com/releases/v5.15.4/css/all.css',
        'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css',
        '/lib/animate/animate.min.css',
        '/lib/lightbox/css/lightbox.min.css',
        '/lib/owlcarousel/assets/owl.carousel.min.css',
        '/css/bootstrap.min.css',
        '/css/style.css',
        '/style.css'
    ]);
}