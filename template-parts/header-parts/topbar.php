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
                                <h5 class="modal-title" id="exampleModalLabel">Search</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="searchForm">
                                    <input class="form-control form-control-sm" type="search" placeholder="Search"
                                        aria-label="Search" name="query">
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

        <script>
        const searchIcon = document.querySelector('.search-icon');
        const searchForm = document.querySelector('#searchForm');
        const overlay = document.querySelector('#overlay');

        searchIcon.addEventListener('click', (e) => {
            e.preventDefault();
            searchForm.classList.toggle('d-none');
            overlay.classList.toggle('d-none');
        })

        overlay.addEventListener('click', () => {
            searchForm.classList.add('d-none');
            overlay.classList.add('d-none');
        })
        </script>

        <style>
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
            display: none;
        }
        </style>
    </div>
</div>