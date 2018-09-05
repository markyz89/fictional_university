<?php

function university_post_types() {

	// Event Post Type

	register_post_type('event', array(
		'supports' => array('title','editor','excerpt'),
		'has_archive' => true,
		'shown_in_nav_menus' => true,
		'rewrite' => array(
			'slug' => 'events'
		),
		'public' => true,
		'labels' => array(
			'name' => 'Events',
			'add_new_item' => 'Add New Event',
			'edit_item' => 'Edit Event',
			'all_items' => 'All Events',
			'singular_name' => 'Events',
		),
		'menu_icon' => 'dashicons-calendar-alt'
	));

	// Program Post Type

	register_post_type('program', array(
		'supports' => array('title','editor'),
		'has_archive' => true,
		'shown_in_nav_menus' => true,
		'rewrite' => array(
			'slug' => 'programs'
		),
		'public' => true,
		'labels' => array(
			'name' => 'Programs',
			'add_new_item' => 'Add New Program',
			'edit_item' => 'Edit Program',
			'all_items' => 'All Programs',
			'singular_name' => 'Programs',
		),
		'menu_icon' => 'dashicons-awards'
	));

	// Professor Post Type

	register_post_type('professor', array(
		'supports' => array('title','editor', 'thumbnail'),
		'public' => true,
		'labels' => array(
			'name' => 'Professors',
			'add_new_item' => 'Add New Professor',
			'edit_item' => 'Edit Professor',
			'all_items' => 'All Professors',
			'singular_name' => 'Professors',
		),
		'menu_icon' => 'dashicons-welcome-learn-more'
	));
}

add_action('init', 'university_post_types');

?>