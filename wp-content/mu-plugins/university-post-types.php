<?php

function university_post_types() {
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
}

add_action('init', 'university_post_types');

?>