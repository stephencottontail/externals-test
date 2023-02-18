<?php
/**
 * Plugin Name: Externals Test
 * Plugin Author: Stephen Dickinson <stephencottontail@me.com>
 * Description: A test plugin to show an issue with wp-scripts
 */

add_action( 'init', function() {
	wp_register_script( 'ex-externals-test', plugin_dir_url( __FILE__ ) . '/build/index.js', array( 'wp-blocks' ), null, true );

	register_block_type( 'ex/externals-test', array(
		'editor_script' => 'ex-externals-test'
	) );
} );
