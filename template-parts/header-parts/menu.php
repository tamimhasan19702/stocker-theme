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







<!-- <ul class="navbar-nav ms-auto py-0">
        <li class="nav-item">
            <a href="index.html" class="nav-link active">Home</a>
        </li>
        <li class="nav-item">
            <a href="about.html" class="nav-link">About</a>
        </li>
        <li class="nav-item">
            <a href="service.html" class="nav-link">Services</a>
        </li>
        <li class="nav-item">
            <a href="blog.html" class="nav-link">Blogs</a>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link" data-bs-toggle="dropdown">
                <span class="dropdown-toggle">Pages</span>
            </a>
            <ul class="dropdown-menu m-0">
                <li><a href="feature.html" class="dropdown-item">Our Features</a></li>
                <li><a href="team.html" class="dropdown-item">Our team</a></li>
                <li><a href="testimonial.html" class="dropdown-item">Testimonial</a></li>
                <li><a href="offer.html" class="dropdown-item">Our offer</a></li>
                <li><a href="FAQ.html" class="dropdown-item">FAQs</a></li>
                <li><a href="404.html" class="dropdown-item">404 Page</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="contact.html" class="nav-link">Contact Us</a>
        </li>
    </ul> -->