<?php
/*
 * Add custom post types
 *These allow the theme to attach "stacks"/technologies to any post
 *
*/
function diana_simple_custom_post_types() {
  register_post_type( 'projects',
    array(
      'labels' => array(
        'name' => __( 'Projects' ),
        'singular_name' => __( 'Project' )
      ),
      'public' => true,
      'supports' => array('title', 'editor', 'custom-fields', 'excerpt', 'thumbnail'),
      'show_in_rest'=> true,
      'has_archive' => true
    )
  );
}
add_action( 'init', 'diana_simple_custom_post_types' );
