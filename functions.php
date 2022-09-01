<?php
/**
 * WCUS Block Theme functions and definitions
 *
 */


if ( ! function_exists( 'wcus_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function wcus_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'wcus_support' );

if ( ! function_exists( 'wcus_styles' ) ) :

	/**
	 * Enqueue styles.
	 */
	function wcus_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'wcus-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'wcus-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'wcus_styles' );


if ( ! function_exists( 'wcus_enqueue' ) ) :

    /**
     * Registers Block Styles.
     */

    function wcus_enqueue() {
        wp_enqueue_script(
            'wcus-script',
            get_stylesheet_directory_uri() . '/assets/js/block-styles.js',
            array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
            filemtime( plugin_dir_path( __FILE__ ) . '/assets/js/block-styles.js' )
        );
    }

endif;

add_action( 'enqueue_block_editor_assets', 'wcus_enqueue' );
