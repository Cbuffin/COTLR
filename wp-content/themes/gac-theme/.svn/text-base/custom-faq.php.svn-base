<?php

add_action( 'init', 'register_cpt_faq' );

function register_cpt_faq() {
	$cpt = 'faq';
    $labels = array( 
        'name' => _x( 'FAQs', $cpt ),
        'singular_name' => _x( 'FAQ', $cpt ),
        'add_new' => _x( 'Add New', $cpt ),
        'add_new_item' => _x( 'Add New FAQ', $cpt ),
        'edit_item' => _x( 'Edit FAQ', $cpt ),
        'new_item' => _x( 'New FAQ', $cpt ),
        'view_item' => _x( 'View FAQ', $cpt ),
        'search_items' => _x( 'Search FAQs', $cpt ),
        'not_found' => _x( 'No FAQs found', $cpt ),
        'not_found_in_trash' => _x( 'No FAQs found in Trash', $cpt ),
        'parent_item_colon' => _x( 'Parent FAQ:', $cpt ),
        'menu_name' => _x( 'FAQs', $cpt ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'All FAQ',
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
		'rewrite' => array('slug' => 'about-us/visitor-frequently-asked-questions'),
        'capability_type' => 'post'
    );

    register_post_type( 'faq', $args );
}

?>