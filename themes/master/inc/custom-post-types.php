<?php

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}

if( function_exists('acf_set_options_page_title') )
{
    acf_set_options_page_title( __('Website settings') );
}

/* Add Projects post type */
function create_projects_post_type() {
	register_post_type('Projects', [
		'labels' => [
			'name' => __('Projects'),
			'singular_name' => __('Project')
		],
		'public' => true,
		'menu_icon' => 'dashicons-grid-view',
		'show_in_nav_menus' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'projects'),
        'show_in_rest' => true,
		'taxonomies' => array('category'),
	]);
}

add_action('init', 'create_projects_post_type');