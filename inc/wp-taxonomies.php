<?php
/*
 * Add custom taxonomies
 *These allow the theme to attach "stacks"/technologies to any post
*/
function diana_simple_create_custom_taxonomy() {
	register_taxonomy('technologies', array( 'projects' ), array(
		'show_in_rest' => true,
		'hierarchical' => false,
		'labels' => array(
			'name' => _x( 'Technologies', 'taxonomy general name' ),
			'singular_name' => _x( 'Technology', 'taxonomy singular name' ),
			'search_items' =>  __( 'Search Technologies' ),
			'all_items' => __( 'All Technologies' ),
			'edit_item' => __( 'Edit Technologies' ),
			'update_item' => __( 'Update Technology' ),
			'add_new_item' => __( 'Add new Technology' ),
			'new_item_name' => __( 'New Technology name' ),
		),
		// Control the slugs used for this taxonomy
		'rewrite' => array(
			'slug' => 'technologies',
			'hierarchical' => false
		),
	));
}
	
add_action( 'init', 'diana_simple_create_custom_taxonomy', 0 );

/* Register taxonomies for posts
*/

function diana_simple_register_taxonomies(){

register_taxonomy_for_object_type('technologies', 'projects'); 

};

add_action('init','diana_simple_register_taxonomies');


