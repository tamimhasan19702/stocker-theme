<?php 

get_theme_mod('stocker_copyright', '&copy; ' . date('Y') . ' ' . get_bloginfo('name'));
get_theme_mod('stocker_copyright_link', '#');
?>


<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-md-6 text-center text-md-start mb-md-0">
                <span class="text-body"><a href="<?php echo esc_url(get_theme_mod('stocker_copyright_link', '#')); ?>"
                        class="border-bottom text-white"><i
                            class="fas fa-copyright text-light me-2"></i><?php echo esc_html(get_theme_mod('stocker_copyright', '&copy; ' . date('Y') . ' ' . get_bloginfo('name'))); ?></a>,
                    All rights reserved.</span>
            </div>
            <div class="col-md-6 text-center text-md-end text-body">

                Designed By
                <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a> <span
                    style="margin-left: 10px;"></span>
                Developed By <a class="border-bottom text-white" href="https://profiles.wordpress.org/tamimh/">Tareq
                    Monower</a>
            </div>
        </div>
    </div>
</div>

<a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>