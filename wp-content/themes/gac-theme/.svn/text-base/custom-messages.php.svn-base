<?php

add_action( 'init', 'register_cpt_messages' );

function register_cpt_messages() {
	$cpt = 'messages';
    $labels = array( 
        'name' => _x( 'Messages', $cpt ),
        'singular_name' => _x( 'Message', $cpt ),
        'add_new' => _x( 'Add New', $cpt ),
        'add_new_item' => _x( 'Add New Message', $cpt ),
        'edit_item' => _x( 'Edit Message', $cpt ),
        'new_item' => _x( 'New Message', $cpt ),
        'view_item' => _x( 'View Message', $cpt ),
        'search_items' => _x( 'Search messages', $cpt ),
        'not_found' => _x( 'No messages found', $cpt ),
        'not_found_in_trash' => _x( 'No messages found in Trash', $cpt ),
        'parent_item_colon' => _x( 'Parent member:', $cpt ),
        'menu_name' => _x( 'Messages', $cpt ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'All messages',
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
		'rewrite' => array('slug' => 'learn/messages-from-lacy-hawkins'),
        'capability_type' => 'post'
    );

    register_post_type( 'messages', $args );
}

?>