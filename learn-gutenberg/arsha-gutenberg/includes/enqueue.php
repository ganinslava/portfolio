<?php

function ag_front_enqueue() {
    wp_register_style('ag_googlefonts', "https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i");
    wp_register_style('ag_aos', get_template_directory_uri() . '/assets/vendor/aos/aos.css');
    wp_register_style('ag_bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css');
    wp_register_style('ag_bootstrap-icons', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css');
    wp_register_style('ag_boxicons', get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css');
    wp_register_style('ag_glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css');
    wp_register_style('ag_remixicon', get_template_directory_uri() . '/assets/vendor/remixicon/remixicon.css');
    wp_register_style('ag_swiper-bundle', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css');
    wp_register_style('ag_style', get_template_directory_uri() . '/assets/css/style.css');

    wp_enqueue_style('ag_googlefonts');
    wp_enqueue_style('ag_aos');
    wp_enqueue_style('ag_bootstrap');
    wp_enqueue_style('ag_bootstrap-icons');
    wp_enqueue_style('ag_boxicons');
    wp_enqueue_style('ag_glightbox');
    wp_enqueue_style('ag_remixicon');
    wp_enqueue_style('ag_swiper-bundle');
    wp_enqueue_style('ag_style');



    wp_register_script('ag_aos', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array(), false, true);
    wp_register_script('ag_bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), false, true);
    wp_register_script('ag_glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', array(), false, true);
    wp_register_script('ag_isotope', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), false, true);
    wp_register_script('ag_validate', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array(), false, true);
    wp_register_script('ag_swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', array(), false, true);
    wp_register_script('ag_waypoints', get_template_directory_uri() . '/assets/vendor/waypoints/noframework.waypoints.js', array(), false, true);
    wp_register_script('ag_main', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);

    //wp_enqueue_script( 'jquery' );
    wp_enqueue_script('ag_aos');
    wp_enqueue_script('ag_bootstrap');
    wp_enqueue_script('ag_glightbox');
    wp_enqueue_script('ag_isotope');
    wp_enqueue_script('ag_validate');
    wp_enqueue_script('ag_swiper');
    wp_enqueue_script('ag_waypoints');
    wp_enqueue_script('ag_main');
}

function ag_enqueue_block_editor_assets() {
    wp_register_script(
        'r_blocks_bundle',
        get_template_directory_uri() . '/blocks/dist/bundle.js',
        ['wp-i18n', 'wp-element', 'wp-blocks', 'wp-components', 'wp-editor', 'wp-api'],
        filemtime(get_template_directory() . '/blocks/dist/bundle.js')
    );

    wp_enqueue_script('r_blocks_bundle');
}

//function r_enqueue_block_assets() {
//    wp_register_style(
//        'r_blocks',
//        get_template_directory_uri() . '/blocks/dist/blocks-main.css',
//	);
//
//    wp_enqueue_style('r_blocks');
//}