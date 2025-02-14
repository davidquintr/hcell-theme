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
		add_theme_support('editor-styles');
	
		add_editor_style( '/dist/bundle.css' );
	
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
			'basic-style',
			get_stylesheet_directory_uri() . '/dist/bundle.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		wp_enqueue_style( 'basic-style' );

		wp_register_script(
            'basic-script',
            get_stylesheet_directory_uri() . '/dist/bundle.js',
            array(),
            wp_get_theme()->get( 'Version' ),
            true
        );

        wp_enqueue_script( 'basic-script' );
	}

endif;

add_action( 'wp_enqueue_scripts', 'tecnotool_styles' );

function tecnotool_enqueue_editor_scripts() {
    wp_enqueue_script(
        'my-editor-script',
        get_template_directory_uri() . '/dist/bundle.js',
        array(),
        filemtime(get_template_directory() . '/dist/bundle.js'),
        true
    );
}
add_action( 'enqueue_block_editor_assets', 'tecnotool_enqueue_editor_scripts' );

function restrict_search_to_products($query) {
    if (!is_admin() && $query->is_search() && $query->is_main_query()) {
        $query->set('post_type', 'product');
    }
}
add_action('pre_get_posts', 'restrict_search_to_products');


function tecnotool_register_acf_blocks() {
    register_block_type( __DIR__ . '/blocks/carousel' );
    register_block_type( __DIR__ . '/blocks/floating-menu' );
    register_block_type( __DIR__ . '/blocks/accordion' );
    register_block_type( __DIR__ . '/blocks/icons-list' );
    register_block_type( __DIR__ . '/blocks/list-social-medias' );
    register_block_type( __DIR__ . '/blocks/horizontal-accordion' );
    register_block_type( __DIR__ . '/blocks/search-bar' );
    register_block_type( __DIR__ . '/blocks/user-info' );
    register_block_type( __DIR__ . '/blocks/hero-hcell' );
    register_block_type( __DIR__ . '/blocks/list-taxonomy-w-icon' );
	register_block_type( __DIR__ . '/blocks/custom-product-item' );
	register_block_type( __DIR__ . '/blocks/taxonomy-featured-image' );
}

add_action( 'init', 'tecnotool_register_acf_blocks' );
