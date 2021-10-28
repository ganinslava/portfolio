<?php

function sp_enqueue() {
    wp_register_style( 'sp_slick', get_template_directory_uri() . '/assets/libs/slick-carousel/slick/slick.css' );
    wp_register_style( 'sp_slick_theme', get_template_directory_uri() . '/assets/libs/slick-carousel/slick/slick-theme.css' );
    wp_register_style( 'sp_style', get_template_directory_uri() . '/assets/styles/style.css' );

    wp_enqueue_style( 'sp_slick' );
    wp_enqueue_style( 'sp_slick_theme' );
    wp_enqueue_style( 'sp_style' );

    wp_register_script( 'sp_jquery', get_template_directory_uri() . '/assets/libs/jquery-3.6.0.min.js', array(), false, true );
    wp_register_script( 'sp_slick', get_template_directory_uri() . '/assets/libs/slick-carousel/slick/slick.min.js', array(), false, true );
    wp_register_script( 'sp_jquery_validate', get_template_directory_uri() . '/assets/libs/jquery-validation/dist/jquery.validate.min.js', array(), false, true );
    wp_register_script( 'sp_custom', get_template_directory_uri() . '/assets/js/custom.js', array(), false, true );
    
    wp_enqueue_script( 'sp_jquery' );
    wp_enqueue_script( 'sp_slick' );
    wp_enqueue_script( 'sp_jquery_validate' );
    wp_enqueue_script( 'sp_custom' );
}
