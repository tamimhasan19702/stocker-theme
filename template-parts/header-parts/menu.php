<?php
$button = get_theme_mod( 'stocker_button_text' );
$button_link = get_theme_mod( 'stocker_button_link' );
$button_bg = get_theme_mod( 'stocker_button_bg' );
$button_bg_hover = get_theme_mod( 'stocker_button_bg_hover' );
$button_text = get_theme_mod( 'stocker_button_text' );
$button_text_hover = get_theme_mod( 'stocker_button_text_hover' );
$button_radius = get_theme_mod( 'stocker_button_radius' );
$button_margin = get_theme_mod( 'stocker_button_margin' );
$button_padding = get_theme_mod( 'stocker_button_padding' );
?>


<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="fa fa-bars"></span>
</button>

<div class="collapse navbar-collapse" id="navbarCollapse">
    <?php stocker_main_menu(); ?>
    <?php if (isset($button) && !empty($button)): ?>
    <div>
        <a href="<?php echo esc_url($button_link); ?>" class="btn btn-primary flex-shrink-0" style="
            background-color: <?php echo esc_attr($button_bg); ?>!important;
            border-radius: <?php echo esc_attr($button_radius); ?>px !important;
            margin-left: <?php echo esc_attr($button_margin); ?>px !important;
            padding: <?php echo esc_attr($button_padding); ?>px !important;

            transition: all 0.3s ease-in-out !important;

            <?php if (isset($button_bg_hover) && !empty($button_bg_hover)): ?>
            :hover {
                background-color: <?php echo esc_attr($button_bg_hover); ?>!important;
            }
            <?php endif; ?>

            <?php if (isset($button_text_hover) && !empty($button_text_hover)): ?>
            :hover {
                color: <?php echo esc_attr($button_text_hover); ?>!important;
            }
            <?php endif; ?>
        ">
            <?php echo esc_html($button);  ?>
        </a>
    </div>


    <?php endif; ?>
</div>







