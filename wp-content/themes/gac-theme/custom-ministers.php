<?php

add_action( 'init', 'register_cpt_ministers' );

function register_cpt_ministers() {
	$cpt = 'ministers';
    $labels = array( 
        'name' => _x( 'Ministers', $cpt ),
        'singular_name' => _x( 'Minister', $cpt ),
        'add_new' => _x( 'Add New', $cpt ),
        'add_new_item' => _x( 'Add New Minister', $cpt ),
        'edit_item' => _x( 'Edit Minister', $cpt ),
        'new_item' => _x( 'New Minister', $cpt ),
        'view_item' => _x( 'View Minister', $cpt ),
        'search_items' => _x( 'Search Ministers', $cpt ),
        'not_found' => _x( 'No ministers found', $cpt ),
        'not_found_in_trash' => _x( 'No ministers found in Trash', $cpt ),
        'parent_item_colon' => _x( 'Parent minister:', $cpt ),
        'menu_name' => _x( 'Ministers', $cpt ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'All ministers',
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields', 'comments', 'revisions', 'post-formats' ),
        'taxonomies' => array( 'post_tag' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 20,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'about-us/meet-our-ministers'),
        'capability_type' => 'post'
    );

    register_post_type( 'ministers', $args );
}

?>