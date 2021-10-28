<?php

function sp_activate() {
    if (version_compare (get_bloginfo('version') , '4.2', '<') ) {
        wp_die( 'Необходимо использовать Вордпресс версии 4.2 и выше, чтобы использовать эту тему.' );
    }

    $theme_opts = get_option('sp_opts');

    if(!$theme_opts) {
        $opts                   =  array(
            'header_phone'    =>  '',
            'calc_form_shortcode' => '',
            'get_plan_form_shortcode' => '',
            'get_call_form_shortcode' => '',
        );

        add_option('sp_opts', $opts);
    }
}