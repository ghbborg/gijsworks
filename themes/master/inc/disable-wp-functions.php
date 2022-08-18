<?php
/** Remove superfluous WP functions **/

add_filter('show_admin_bar', '__return_false');
add_filter( 'wpcf7_load_css', '__return_false' );
//add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'show_recent_comments_widget_style', '__return_false' );


// Remove all embed funtionality
remove_action( 'rest_api_init', 'wp_oembed_register_route' );
add_filter( 'embed_oembed_discover', '__return_false' );
remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'wp_oembed_add_host_js' );


// Removes RSD, XMLRPC, WLW, WP Generator, ShortLink and Comment Feed links
remove_action('wp_head', 'rsd_link' );
remove_action('wp_head', 'wlwmanifest_link' );
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'feed_links_extra', 3 );
remove_action('wp_head', 'feed_links', 2 );


// Removes prev and next article links
//remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');


// Remove Gutenberg styling
function wps_deregister_styles() {
    wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );

// Remove other funtionality
remove_action('wp_head', 'index_rel_link' );
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('template_redirect', 'rest_output_link_header', 11, 0);
remove_action('wp_print_styles', 'print_emoji_styles');
