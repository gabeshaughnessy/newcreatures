<?php
/*
Plugin Name: New Creatures Project Posts
Plugin URI: http://newcreatures.com
Description: Pow! Out of nowhere you have project posts.
Author: Gabe's Imagination	
Version: 1.1
Author URI: http://gabesimagination.com
License: GPL2
*/
add_action( 'init', 'nc_create_my_post_types' );

function nc_create_my_post_types() {
	register_post_type( 'Projects',
		array(
			'labels' => array(
				'name' => __( 'Projects' ),
				'singular_name' => __( 'Project' )
			),
			'public' => true,
			'supports' => array('title', 'excerpt', 'editor', 'thumbnail'),
		)
	);
}

function nc_create_my_taxonomies() {
	/*register_taxonomy( 
		'poc', 
		'post', 
		array( 
			'hierarchical' => true, 
			'labels' => array(
				'name' => 'Points of Contact',
				'singlular_name' => 'Point of Contact'
			),
			'query_var' => true, 
			'rewrite' => true 
		) 
	);*/
}


function nc_create_metaboxes() {
	$prefix = 'be_';
	$meta_boxes = array();

	$meta_boxes[] = array(
    	'id' => 'project-options',
	    'title' => 'Project Options',
	    'pages' => array('project'), // post type
		'context' => 'normal',
		'priority' => 'low',
		'show_names' => true, // Show field names left of input
		'fields' => array(
			array(
				'name' => 'Instructions',
				'desc' => 'In the right column upload a featured image. Make sure this image is at least 900x360px wide. Then fill out the information below.',
				'type' => 'title',
			),
			array(
		        'name' => 'Display Info',
		        'desc' => 'Show Title and Excerpt from above',
	    	    'id' => 'show_info',
	        	'type' => 'checkbox'
			)		),
	);
 	
 	require_once(CHILD_DIR . '/lib/metabox/init.php'); 
}
