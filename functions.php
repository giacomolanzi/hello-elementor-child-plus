<?php
/**
 * Theme functions and definitions
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 * @return void
 * Remeber to set version number to fixed before productio. Es.: '1.2.3'
 */
function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style', // Name of the style. aka Link Element's ID name
		get_stylesheet_directory_uri() . '/style.css', // URI
		[
			'hello-elementor-theme-style', // Dependencies
		],
		rand(111,999)
	);
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20 );
