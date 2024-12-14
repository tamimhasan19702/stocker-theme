<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset=" <?php bloginfo('charset'); ?>">
    <title><?php the_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="<?php echo esc_attr(get_bloginfo('name')); ?>">
    <meta name="description" content="<?php echo esc_attr(get_bloginfo('description')); ?>">
    <meta name="language" content="<?php echo esc_attr(get_bloginfo('language')); ?>">

    <!-- Google Web Fonts -->
    <?php wp_head(); ?>
</head>

<body>

    <!-- Spinner Start -->
    <?php echo get_template_part('template-parts/header-parts/loader'); ?>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <?php echo get_template_part('template-parts/header-parts/topbar'); ?>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">

            <?php echo get_template_part('template-parts/header-parts/logo'); ?>

            <?php echo get_template_part('template-parts/header-parts/menu'); ?>
        </nav>