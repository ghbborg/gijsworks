<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package master
 */
global $website_settings;

get_header();

$post_type = get_post_type();


if($post_type == 'projects') :
	include(get_template_directory() . '/sections/project.php');
endif;

get_footer(); ?>
