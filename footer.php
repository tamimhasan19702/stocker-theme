    <!-- Footer Start -->



    <?php
                if( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) ) :
                    ?>

    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5 border-start-0 border-end-0"
            style="border: 1px solid; border-color: rgb(255, 255, 255, 0.08)">
            <div class="row g-5">
                <?php 

                get_template_part('template-parts/footer-parts/footer-widgets');
                ?>

            </div>
        </div>
    </div>
    <?php  
            endif;
                ?>


    <!-- Footer End -->

    <!-- Copyright Start -->
    <?php get_template_part('template-parts/footer-parts/copyright');?>
    <!-- Copyright End -->

    <!-- JavaScript Libraries -->
    <?php wp_footer();?>
    </body>

    </html>