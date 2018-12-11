<?php
/*
 * Plugin Name: WP Evolution Gutenberg
 */

defined( 'ABSPATH' ) || exit;

/**
 * Enqueue the block's assets for the editor.
 *
 * wp-blocks:  The registerBlockType() function to register blocks.
 * wp-element: The wp.element.createElement() function to create elements.
 * wp-i18n:    The __() function for internationalization.
 *
 * @since 1.0.0
 */
function wpe_gutenberg_block_enqueue_scripts() {
	wp_enqueue_script(
		'mdlr-block-static-jsx-example-backend-script', // Unique handle.
		plugins_url( 'js/block.build.js', __FILE__ ), // block.js: We register the block here.
		array( 'wp-blocks', 'wp-i18n', 'wp-element' ) // Dependencies, defined above.
	);
}
add_action( 'enqueue_block_editor_assets', 'wpe_gutenberg_block_enqueue_scripts' );