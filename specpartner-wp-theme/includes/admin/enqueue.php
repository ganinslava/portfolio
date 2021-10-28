<?php

function sp_admin_enqueue() {
    wp_register_script('sp_options', get_template_directory_uri() . '/assets/admin/options.js', array(), false, true);
    wp_enqueue_media();
    wp_enqueue_script('sp_options');

    wp_register_style('sp_bootstrap', get_template_directory_uri() . '/assets/admin/bootstrap.min.css');
    wp_enqueue_style('sp_bootstrap');
}