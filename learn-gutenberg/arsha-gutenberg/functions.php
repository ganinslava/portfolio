<?php

// Set up
add_theme_support('menus');



// Includes
include(get_template_directory() . '/includes/enqueue.php');
include(get_template_directory() . '/includes/setup.php');



// Action & Filter Hooks
add_action('wp_enqueue_scripts', 'ag_front_enqueue');
add_action('after_setup_theme', 'ag_setup_theme');
add_action('enqueue_block_editor_assets', 'ag_enqueue_block_editor_assets');