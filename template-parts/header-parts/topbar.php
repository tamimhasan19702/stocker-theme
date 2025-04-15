<?php

$stocker_location = get_theme_mod('stocker_location', ' Enter your location here');
$stocker_phone = get_theme_mod('stocker_phone', '+01234567890');
$stocker_email = get_theme_mod('stocker_email', 'Example@gmail.com');

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
                <a href="#"><small class="me-3 text-dark"><i
                            class="fa fa-user text-primary me-2"></i>Register</small></a>
                <a href="#"><small class="me-3 text-dark"><i
                            class="fa fa-sign-in-alt text-primary me-2"></i>Login</small></a>
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown"><small><i
                                class="fa fa-home text-primary me-2"></i> My
                            Dashboard</small></a>
                    <div class="dropdown-menu rounded">
                        <a href="#" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My Profile</a>
                        <a href="#" class="dropdown-item"><i class="fas fa-comment-alt me-2"></i> Inbox</a>
                        <a href="#" class="dropdown-item"><i class="fas fa-bell me-2"></i> Notifications</a>
                        <a href="#" class="dropdown-item"><i class="fas fa-cog me-2"></i> Account Settings</a>
                        <a href="#" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Log Out</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>