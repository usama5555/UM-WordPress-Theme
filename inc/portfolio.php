<?php
// Register Custom Post Type Portfolio
function create_portfolio_cpt() {

	$labels = array(
		'name' => _x( 'Portfolios', 'Post Type General Name', 'umtheme' ),
		'singular_name' => _x( 'Portfolio', 'Post Type Singular Name', 'umtheme' ),
		'menu_name' => _x( 'Portfolios', 'Admin Menu text', 'umtheme' ),
		'name_admin_bar' => _x( 'Portfolio', 'Add New on Toolbar', 'umtheme' ),
		'archives' => __( 'Portfolio Archives', 'umtheme' ),
		'attributes' => __( 'Portfolio Attributes', 'umtheme' ),
		'parent_item_colon' => __( 'Parent Portfolio:', 'umtheme' ),
		'all_items' => __( 'All Portfolios', 'umtheme' ),
		'add_new_item' => __( 'Add New Portfolio', 'umtheme' ),
		'add_new' => __( 'Add New', 'umtheme' ),
		'new_item' => __( 'New Portfolio', 'umtheme' ),
		'edit_item' => __( 'Edit Portfolio', 'umtheme' ),
		'update_item' => __( 'Update Portfolio', 'umtheme' ),
		'view_item' => __( 'View Portfolio', 'umtheme' ),
		'view_items' => __( 'View Portfolios', 'umtheme' ),
		'search_items' => __( 'Search Portfolio', 'umtheme' ),
		'not_found' => __( 'Not found', 'umtheme' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'umtheme' ),
		'featured_image' => __( 'Featured Image', 'umtheme' ),
		'set_featured_image' => __( 'Set featured image', 'umtheme' ),
		'remove_featured_image' => __( 'Remove featured image', 'umtheme' ),
		'use_featured_image' => __( 'Use as featured image', 'umtheme' ),
		'insert_into_item' => __( 'Insert into Portfolio', 'umtheme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Portfolio', 'umtheme' ),
		'items_list' => __( 'Portfolios list', 'umtheme' ),
		'items_list_navigation' => __( 'Portfolios list navigation', 'umtheme' ),
		'filter_items_list' => __( 'Filter Portfolios list', 'umtheme' ),
	);
	$args = array(
		'label' => __( 'Portfolio', 'umtheme' ),
		'description' => __( '', 'umtheme' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-post',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'create_portfolio_cpt', 0 );