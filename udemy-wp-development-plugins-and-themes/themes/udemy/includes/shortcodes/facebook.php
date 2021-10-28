<?php

function ju_facebook_shortcode( $atts, $content = 'Like us on Facebook' ) {
	$ju_theme_opts            =  get_option('ju_opts');
	$atts                     =  shortcode_atts( array(
		'page'                =>  $ju_theme_opts['facebook']
	), $atts);

	return '<a href="http://facebook.com/' . $atts['page'] . '" class="btn bg-facebook">
				' . do_shortcode($content) . '
			</a>';
}

function ju_icon_shortcode( $atts ) {
	return '<i class="fa fa-' . $atts['icon'] . '"></i>';
}