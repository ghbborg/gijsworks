<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript sources.
	 */
	function understrap_scripts() {
		$the_theme = wp_get_theme();
		wp_enqueue_style( 'tailwind', get_template_directory_uri() . '/css/tailwind.css', array(), '3.5.1' );
		wp_enqueue_style( 'understrap-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), '4.1.0' );
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), null, true );
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.min.js', array(), '5.2.2', true);
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );
