<?php 

function r_enqueue_block_editor_assets() {

	wp_register_script(
		'r_blocks_bundle',
		get_template_directory_uri() . '/blocks/dist/bundle.js',
		['wp-i18n', 'wp-element', 'wp-blocks', 'wp-components', 'wp-editor', 'wp-api'],
		filemtime(get_template_directory() . '/blocks/dist/bundle.js')
	);

	wp_enqueue_script('r_blocks_bundle');
}

function r_enqueue_block_assets() {
	wp_register_style(
		'r_blocks',
		get_template_directory_uri() . '/blocks/dist/blocks-main.css',
	);

	wp_enqueue_style('r_blocks');
}