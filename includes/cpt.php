<?php 


// Work Items
add_action('init', 'work_register');
 
function work_register() {
 
	$labels = array(
		'name' => _x('Work Item', 'post type general name'),
		'singular_name' => _x('Work', 'post type singular name'),
		'add_new' => _x('Add New', 'Work Item'),
		'add_new_item' => __('Add New Work Item'),
		'edit_item' => __('Edit Work Item'),
		'new_item' => __('New Work Item'),
		'view_item' => __('View Work Item'),
		'search_items' => __('Search Work Item'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'menu_icon'		=> 'dashicons-align-none',
		'supports' => array('title','editor'),
      	'rewrite' => array('slug' => 'project')
	  ); 
 
	register_post_type( 'work' , $args );
}
?>