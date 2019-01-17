<?php



/**
*
*
* Enqueue styles conditionally in wordpress for internet explorer version.
*
*
 */
 
 
function enqueue_style_internet_explorer() {


	 * Load our IE-only stylesheet for all versions of IE:
	 * <!--[if IE]> ... <![endif]-->
	 */
	wp_enqueue_style( 'past_verson_of_ie', get_stylesheet_directory_uri() . "/css/ie.css" );
	wp_style_add_data( 'past_verson_of_ie', 'conditional', 'IE' );

	/**
	 * Load our IE version-specific stylesheet:
	 * <!--[if IE 7]> ... <![endif]-->
	 */
	wp_enqueue_style( 'past_verson_of_ie', get_stylesheet_directory_uri() . "/css/ie7.css" );
	wp_style_add_data( 'past_verson_of_ie', 'conditional', 'IE 7' );

	/**
	 * lt IE 9 : less then or igual
	 */
	wp_enqueue_style( 'past_verson_of_ie', get_stylesheet_directory_uri() . "/css/old-ie.css" );
	wp_style_add_data( 'past_verson_of_ie', 'conditional', 'lt IE 9' );

	/**
	 *gt IE 8: greater or egual
	 */
	wp_enqueue_style( 'newer_version', get_stylesheet_directory_uri() . "/css/newer-ie.css" );
	wp_style_add_data( 'newer_version', 'conditional', 'gt IE 8' );

}

add_action( 'wp_enqueue_scripts', 'enqueue_style_internet_explorer' );