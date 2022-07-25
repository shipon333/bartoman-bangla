<?php

//Custom Post type

function custom_pictures() {
	
	$labels = array(
		'name'               => _x( 'Pictures', 'post type general name', 'Bortoman Bangla' ),
		'singular_name'      => _x( 'Picture', 'post type singular name', 'Bortoman Bangla' ),
		'menu_name'          => _x( 'Pictures', 'admin menu', 'Bortoman Bangla' ),
		'name_admin_bar'     => _x( 'Pictures', 'add new on admin bar', 'Bortoman Bangla' ),
		'add_new'            => _x( 'Add New', 'Picture', 'Bortoman Bangla' ),
		'add_new_item'       => __( 'Add New Picture', 'Bortoman Bangla' ),
		'new_item'           => __( 'New Picture', 'Bortoman Bangla' ),
		'edit_item'          => __( 'Edit Picture', 'Bortoman Bangla' ),
		'view_item'          => __( 'View Picture', 'Bortoman Bangla' ),
		'all_items'          => __( 'All Pictures', 'Bortoman Bangla' ),
		'search_items'       => __( 'Search Pictures', 'Bortoman Bangla' ),
		'parent_item_colon'  => __( 'Parent Pictures:', 'Bortoman Bangla' ),
		'not_found'          => __( 'No Pictures found.', 'Bortoman Bangla' ),
		'not_found_in_trash' => __( 'No Pictures found in Trash.', 'Bortoman Bangla' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'Bortoman Bangla' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'Picture' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'menu_icon'           => 'dashicons-images-alt',
		'supports'           => array( 'title', 'thumbnail')
	);

	register_post_type( 'picture', $args );


	
}
add_action( 'init', 'custom_pictures' );


	
	
?>