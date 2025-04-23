<?php

$stocker_location = get_theme_mod('stocker_location', ' Enter your location here');
$stocker_phone = get_theme_mod('stocker_phone', '+01234567890');
$stocker_email = get_theme_mod('stocker_email', 'Example@gmail.com');
$stocker_top_buttons = get_theme_mod('stocker_topbar_buttons');

?>


<div class="container-fluid topbar bg-light px-5 d-none d-lg-block">
    <div class="row gx-0 align-items-center">

        <!-- header-info -->
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-flex flex-wrap">

                <!-- dynamic stocker info -->

                <?php if (isset($stocker_location) && !empty($stocker_location)): ?>
                <a href="https://www.google.com/maps/search/<?php echo urlencode($stocker_location); ?>"
                    class="text-muted small me-4" target="_blank" rel="noopener noreferrer"><i
                        class="fa fa-map-marker text-primary me-2" style="vertical-align:middle"></i>
                    <?php echo esc_html($stocker_location); ?>
                </a>
                <?php endif; ?>


                <?php if (isset($stocker_phone) && !empty($stocker_phone)): ?>

                <a href="tel: <?php echo esc_html($stocker_phone); ?>" class="text-muted small me-4"><i
                        class="fa fa-phone text-primary me-2"
                        style="vertical-align:middle"></i><?php echo esc_html($stocker_phone); ?></a>
                <?php endif; ?>


                <?php if (isset($stocker_email) && !empty($stocker_email)): ?>
                <a href="mailto:<?php echo esc_html($stocker_email); ?>" class="text-muted small me-0">
                    <i class="fa fa-envelope text-primary me-2"
                        style="vertical-align:middle"></i><?php echo esc_html($stocker_email); ?></a>
                <?php endif; ?>


            </div>
        </div>

        <!-- search -->
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px">
                <?php 
                
                if(isset($stocker_top_buttons) && !empty($stocker_top_buttons)){  
                foreach($stocker_top_buttons as $stocker_top_button){
    ?>

                <a href="<?php echo esc_url($stocker_top_button['url']); ?>"><small class="me-3 text-dark"><i
                            class="<?php echo esc_attr($stocker_top_button['icon']); ?> text-primary me-2"></i><?php echo esc_html($stocker_top_button['text']); ?></small></a>
                <?php 
                }

                  }
                
                ?>
            </div>
        </div>

    </div>
</div>