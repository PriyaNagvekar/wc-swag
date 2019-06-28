<?php

/**
 * Register Swag post type.
 */

add_action( 'init', 'wc_swag_cpt' );
function wc_swag_cpt() {
	$labels = array(
		'name'               => _x( 'Swags', 'post type general name', 'wc-swag' ),
		'singular_name'      => _x( 'Swag', 'post type singular name', 'wc-swag' ),
		'menu_name'          => _x( 'Swags', 'admin menu', 'wc-swag' ),
		'name_admin_bar'     => _x( 'Swag', 'add new on admin bar', 'wc-swag' ),
		'add_new'            => _x( 'Add New', 'swag', 'wc-swag' ),
		'add_new_item'       => __( 'Add New Swag', 'wc-swag' ),
		'new_item'           => __( 'New Swag', 'wc-swag' ),
		'edit_item'          => __( 'Edit Swag', 'wc-swag' ),
		'view_item'          => __( 'View Swag', 'wc-swag' ),
		'all_items'          => __( 'All Swags', 'wc-swag' ),
		'search_items'       => __( 'Search Swags', 'wc-swag' ),
		'parent_item_colon'  => __( 'Parent Swags:', 'wc-swag' ),
		'not_found'          => __( 'No swags found.', 'wc-swag' ),
		'not_found_in_trash' => __( 'No swags found in Trash.', 'wc-swag' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'wc-swag' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'exclude_from_search'=> true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'swag' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
        'menu_icon'			 => 'dashicons-smiley',
		'supports'           => array( 'title', 'editor', 'thumbnail', 'comments' ),
	);

	register_post_type( 'swag_cpt', $args );
}