<?php
$header_logo_text = get_theme_mod('stocker_header_text', 'Stocker');
$header_logo_image = get_theme_mod('stocker_logo'); // This fetches the image URL
?>
<a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand">
    <?php if (!empty($header_logo_image)): ?>
        <img src="<?php echo esc_url($header_logo_image); ?>" alt="<?php echo esc_attr($header_logo_text); ?>" />
    <?php else: ?>
        <h1 class="text-primary"><?php echo esc_html($header_logo_text); ?></h1>
    <?php endif; ?>
</a>