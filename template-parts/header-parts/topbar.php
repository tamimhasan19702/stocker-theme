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
            <div class="d-inline-flex align-items-center position-relative" style="height: 45px;">
                <a href="#" class="search-icon" data-bs-toggle="modal" data-bs-target="#searchModal"><i
                        class="fa fa-search text-primary me-2"></i></a>



                <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    <?php echo esc_html__('Search', 'stocker-theme'); ?>
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="searchForm" action="<?php echo esc_url(home_url()); ?>" method="get">
                                    <input class="form-control form-control-sm" type="search"
                                        placeholder="<?php echo esc_attr__('Search here', 'stocker-theme'); ?>"
                                        aria-label="Search" name="s"
                                        value="<?php echo esc_attr(get_search_query()); ?>">
                                    <button class="btn btn-primary btn-sm mt-2" type="submit"><i
                                            class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="overlay" id="overlay"></div>

            </div>
        </div>

    </div>
</div>