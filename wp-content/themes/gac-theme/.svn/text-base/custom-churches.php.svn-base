<?php

add_action( 'init', 'register_cpt_churches' );

function register_cpt_churches() {
	$cpt = 'churches';
    $labels = array( 
        'name' => _x( 'Churches', $cpt ),
        'singular_name' => _x( 'Church', $cpt ),
        'add_new' => _x( 'Add New', $cpt ),
        'add_new_item' => _x( 'Add New Church', $cpt ),
        'edit_item' => _x( 'Edit Church', $cpt ),
        'new_item' => _x( 'New Church', $cpt ),
        'view_item' => _x( 'View Church', $cpt ),
        'search_items' => _x( 'Search churches', $cpt ),
        'not_found' => _x( 'No churches found', $cpt ),
        'not_found_in_trash' => _x( 'No churches found in Trash', $cpt ),
        'parent_item_colon' => _x( 'Parent Church:', $cpt ),
        'menu_name' => _x( 'Churches', $cpt ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'All churches',
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
		'rewrite' => array('slug' => 'come-and-see'),
        'capability_type' => 'post'
    );

    register_post_type( 'churches', $args );
}

?>