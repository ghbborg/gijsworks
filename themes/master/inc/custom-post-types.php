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
	register_post_type('Assortiment', [
		'labels' => [
			'name' => __('Assortiment'),
			'singular_name' => __('Assortiment')
		],
		'public' => true,
		'menu_icon' => 'dashicons-archive',
		'show_in_nav_menus' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'assortiment'),
        'show_in_rest' => true,
		'taxonomies' => array('category'),
	]);

	register_post_type('Occasions', [
		'labels' => [
			'name' => __('Occasions'),
			'singular_name' => __('Occasion')
		],
		'public' => true,
		'menu_icon' => 'dashicons-clipboard',
		'show_in_nav_menus' => true,
		'has_archive' => false,
		'rewrite' => array('slug' => 'occasions'),
        'show_in_rest' => true,
	]);
}

add_action('init', 'create_projects_post_type');