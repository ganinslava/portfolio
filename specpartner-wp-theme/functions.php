<?php

//Setup
add_theme_support('menus');
remove_theme_support('editor-style');
remove_theme_support('editor');

//Includes
include(get_template_directory() . '/includes/front/enqueue.php');
include(get_template_directory() . '/includes/setup.php');
include(get_template_directory() . '/includes/activate.php');
include(get_template_directory() . '/includes/admin/menus.php');
include(get_template_directory() . '/includes/admin/options-page.php');
include(get_template_directory() . '/includes/admin/init.php');
include(get_template_directory() . '/process/save-options.php');
include(get_template_directory() . '/includes/metaboxes.php');
include(get_template_directory() . '/includes/init.php');
require_once(get_template_directory() . '/includes/libs/class-tgm-plugin-activation.php');
include(get_template_directory() . '/includes/register-plugins.php');
include(get_template_directory() . '/includes/custom-posts-order.php');
include(get_template_directory() . '/includes/shortcodes/creator.php');

//Action and Filter Hooks
add_action('wp_enqueue_scripts', 'sp_enqueue');
add_action('after_setup_theme', 'sp_setup_theme');
add_action('after_setup_theme', 'sp_activate');
add_action('admin_menu', 'sp_admin_menus');
add_action('admin_init', 'sp_admin_init');
add_filter('use_block_editor_for_post', '__return_false', 10);
add_action('init', 'sp_custom_post_types_init');
add_action('add_meta_boxes', 'sp_add_meta');
add_action('save_post', 'sp_save_meta', 10, 3);
add_action('edit_form_after_title', 'sp_create_new_metaboxes_context');
add_filter('upload_mimes', 'sp_custom_mime_types');
add_action( 'tgmpa_register', 'sp_register_required_plugins' );

//Shortcodes
add_shortcode( 'yellow', 'sp_yellow_span_creator_shortcode' );
add_shortcode( 'rub', 'sp_rub_creator_shortcode' );
add_shortcode( 'chevron-left', 'sp_chevron_left_creator_shortcode' );
add_shortcode( 'small', 'sp_small_span_creator_shortcode' );