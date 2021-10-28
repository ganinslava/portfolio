<?php

function sp_save_options() {
    if(!current_user_can('edit_theme_options')) {
        wp_die('Вам нельзя находиться на этой странице');
    }

    check_admin_referer('sp_options_verify');

    $opts                      =  get_option('sp_opts');

    $opts['header_phone']    =  sanitize_text_field(stripslashes($_POST['sp_input_header_phone']));
    $opts['calc_form_shortcode']    =  htmlentities(stripslashes($_POST['sp_input_calc_form_shortcode']));
    $opts['get_plan_form_shortcode']    =  htmlentities(stripslashes($_POST['sp_input_get_plan_form_shortcode']));
    $opts['get_call_form_shortcode']    =  htmlentities(stripslashes($_POST['sp_input_get_call_form_shortcode']));


    update_option('sp_opts', $opts);

    wp_redirect(admin_url('admin.php?page=sp_theme_opts&status=1'));
}