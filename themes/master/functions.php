<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Load custom WordPress nav walker.
 */
// require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
 * Disable some superfluous WP functions
 */
require get_template_directory() . '/inc/disable-wp-functions.php';

/**
 * Custom login screen
 */
require get_template_directory() . '/inc/custom-login-screen.php';

/**
 * Custom Post Types (Website settings)
 */
require get_template_directory() . '/inc/custom-post-types.php';

/**
 * Custom Post Types (Website settings)
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Wordpress theme support (Title tag)
 */
require get_template_directory() . '/inc/wordpress-theme-support.php';


function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyDQaR_KFnpZ-SfHJ7Rp3koxmmub41Bs7EM');
}

add_action('acf/init', 'my_acf_init');