<?php

function r_enqueue_scripts() {
	wp_register_style( 'r_rateit', plugins_url( '/assets/vendor/rateit/rateit.css', RECIPE_PLUGIN_URL ) );
	wp_enqueue_style( 'r_rateit' );

	wp_register_script( 'r_rateit', plugins_url( '/assets/vendor/rateit/jquery.rateit.min.js', RECIPE_PLUGIN_URL ), array(), '1.0.0', true );
	wp_register_script( 'r_main', plugins_url( '/assets/scripts/main.js', RECIPE_PLUGIN_URL ), array(), '1.0.0', true );

	wp_localize_script( 'r_main', 'recipe_obj', array(
		'ajax_url'                    => admin_url( 'admin-ajax.php' )
	));

	wp_enqueue_script( 'r_rateit' );
	wp_enqueue_script( 'r_main' );
}