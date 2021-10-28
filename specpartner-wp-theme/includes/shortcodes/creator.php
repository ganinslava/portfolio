<?php

function sp_yellow_span_creator_shortcode($atts, $shortcode_content) {
	return '<span>' . $shortcode_content . '</span>';
}

function sp_rub_creator_shortcode($atts, $shortcode_content) {
	return '<img src="' . get_template_directory_uri() . '/assets/img/stat-ruble.png" alt="">';
}

function sp_chevron_left_creator_shortcode($atts, $shortcode_content) {
	return '<i class="chevron-left"></i>';
}

function sp_small_span_creator_shortcode($atts, $shortcode_content) {
	return '<span>' . $shortcode_content . '</span>';
}