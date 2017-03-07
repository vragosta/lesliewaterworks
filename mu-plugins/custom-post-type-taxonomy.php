<?php
/**
 * Plugin Name: Custom Post Types & Taxonomies
 * Description: Enables custom post types and taxonomies.
 * Author: Vincent Ragosta & Frankie Bordone
 */

/**
 * Register listen custom post type.
 *
 * @uses register_post_type()
 */
function lesliewaterworks_register_post_types() {
	register_post_type( 'watercooler', array(
		'label'           => 'Water Coolers',
		'description'     => '',
		'public'          => true,
		'show_ui'         => true,
		'show_in_menu'    => true,
		'capability_type' => 'post',
		'map_meta_cap'    => true,
		'hierarchical'    => false,
		'rewrite'         => array( 'slug' => 'watercoolers', 'with_front' => false ),
		'query_var'       => true,
		'has_archive'     => true,
		'menu_position'   => 41,
		'menu_icon'       => 'dashicons-schedule',
		'supports'        => array( 'title', 'editor', 'excerpt', 'custom-fields', 'revisions', 'thumbnail', 'author' ),
		'labels'          => array(
			'name'               => 'Water Coolers',
			'singular_name'      => 'Water Cooler',
			'menu_name'          => 'Water Coolers',
			'add_new'            => 'Add Water Cooler',
			'add_new_item'       => 'Add New Water Cooler',
			'edit'               => 'Edit',
			'edit_item'          => 'Edit Water Cooler',
			'new_item'           => 'New Water Cooler',
			'view'               => 'View Water Cooler',
			'view_item'          => 'View Water Cooler',
			'search_items'       => 'Search Water Coolers',
			'not_found'          => 'No Water Coolers Found',
			'not_found_in_trash' => 'No Water Coolers Found in Trash',
			'parent'             => 'Parent Water Cooler',
		)
	) );

	register_post_type( 'icemachine', array(
		'label'           => 'Ice Machines',
		'description'     => '',
		'public'          => true,
		'show_ui'         => true,
		'show_in_menu'    => true,
		'capability_type' => 'post',
		'map_meta_cap'    => true,
		'hierarchical'    => false,
		'rewrite'         => array( 'slug' => 'icemachines', 'with_front' => false ),
		'query_var'       => true,
		'has_archive'     => true,
		'menu_position'   => 41,
		'menu_icon'       => 'dashicons-schedule',
		'supports'        => array( 'title', 'editor', 'excerpt', 'custom-fields', 'revisions', 'thumbnail', 'author' ),
		'labels'          => array(
			'name'               => 'Ice Machines',
			'singular_name'      => 'Ice Machine',
			'menu_name'          => 'Ice Machines',
			'add_new'            => 'Add Ice Machine',
			'add_new_item'       => 'Add New Ice Machine',
			'edit'               => 'Edit',
			'edit_item'          => 'Edit Ice Machine',
			'new_item'           => 'New Ice Machine',
			'view'               => 'View Ice Machine',
			'view_item'          => 'View Ice Machine',
			'search_items'       => 'Search Ice Machines',
			'not_found'          => 'No Ice Machines Found',
			'not_found_in_trash' => 'No Ice Machines Found in Trash',
			'parent'             => 'Parent Ice Machine',
		)
	) );
}
add_action( 'init', 'lesliewaterworks_register_post_types' );
