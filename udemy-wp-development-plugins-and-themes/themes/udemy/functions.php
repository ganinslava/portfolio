<?php

// Set up
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-formats', array('link', 'quote', 'video') );


// Includes
include( get_template_directory() . '/includes/front/enqueue.php' );
include( get_template_directory() . '/includes/setup.php' );
include( get_template_directory() . '/includes/widgets.php' );
include( get_template_directory() . '/includes/activate.php' );
include( get_template_directory() . '/includes/admin/menus.php' );
include( get_template_directory() . '/includes/admin/options-page.php' );
include( get_template_directory() . '/includes/admin/init.php' );
include( get_template_directory() . '/process/save-options.php' );
include( get_template_directory() . '/includes/shortcodes/facebook.php' );
include( get_template_directory() . '/includes/theme-customizer.php' );
include( get_template_directory() . '/includes/front/head.php' );
require_once( get_template_directory() . '/includes/libs/class-tgm-plugin-activation.php' );
include( get_template_directory() . '/includes/register-plugins.php' );


// Action & Filter Hooks
add_action( 'wp_enqueue_scripts', 'ju_enqueue' );
add_action( 'after_setup_theme', 'ju_setup_theme' );
add_action( 'widgets_init', 'ju_widgets' );
add_action( 'after_setup_theme', 'ju_activate' );
add_action( 'admin_menu', 'ju_admin_menus' );
add_action( 'admin_init', 'ju_admin_init' );
add_action( 'customize_register', 'ju_customize_register' );
add_action( 'wp_head', 'ju_head' );
add_action( 'tgmpa_register', 'ju_register_required_plugins' );


// Shortcodes
add_shortcode( 'ufb', 'ju_facebook_shortcode' );
add_shortcode( 'ui', 'ju_icon_shortcode' );