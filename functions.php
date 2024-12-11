<?php
/**
 * tecnotool functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tecnotool
 * @since tecnotool 1.0
 */


if ( ! function_exists( 'tecnotool_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since tecnotool 1.0
	 *
	 * @return void
	 */
	function tecnotool_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'tecnotool' );
	}

endif;

add_action( 'after_setup_theme', 'tecnotool_support' );

if ( ! function_exists( 'tecnotool_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since tecnotool 1.0
	 *
	 * @return void
	 */
	function tecnotool_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'tecnotool-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'tecnotool-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'tecnotool_styles' );


