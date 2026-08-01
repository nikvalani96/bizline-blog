<?php
/**
 * BizLine Blog FSE functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BizLine Blog FSE
 * @since 1.0
 */

if ( ! function_exists( 'bizline_blog_fse_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	function bizline_blog_fse_support() {
	
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );		

		// Enqueue editor styles.
		add_editor_style( 'assets/css/editor-style.css' );

	}
endif;
add_action( 'after_setup_theme', 'bizline_blog_fse_support' );


// Enqueues style.css on the front.
if ( ! function_exists( 'bizline_blog_enqueue_styles' ) ) :
	/**
	 * Enqueues style.css on the front.
	 *
	 * @since Twenty Twenty-Five 1.0
	 *
	 * @return void
	 */
	function bizline_blog_enqueue_styles() {
		wp_enqueue_style(
			'bizline-blog-style',
			get_parent_theme_file_uri( 'style.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'bizline_blog_enqueue_styles' );

function bizline_register_block_styles() {
    register_block_style(
        'core/paragraph',
        array(
            'name'  => 'fancy-paragraph',
            'label' => __( 'Fancy Paragraph', 'bizline-blog' ),
            'style_handle' => 'bizline-block-styles',
        )
    );
}
add_action( 'init', 'bizline_register_block_styles' );

function bizline_enqueue_block_styles() {
    wp_enqueue_style(
        'bizline-block-styles',
        get_template_directory_uri() . '/assets/css/block-styles.css'
    );
}
add_action( 'enqueue_block_assets', 'bizline_enqueue_block_styles' );


add_action( 'customize_register', '__return_true' );
add_theme_support( 'menus' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';