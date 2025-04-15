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

    <?php get_template_part('template-parts/header-parts/header-1')?>