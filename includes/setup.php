<?php


function stocker_theme_setup()
{
    add_theme_support('editor-styles');

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