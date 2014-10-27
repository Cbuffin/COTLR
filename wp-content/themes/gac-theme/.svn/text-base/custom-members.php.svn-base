<?php

add_action( 'init', 'register_cpt_members' );

function register_cpt_members() {
	$cpt = 'members';
    $labels = array( 
        'name' => _x( 'Members', $cpt ),
        'singular_name' => _x( 'Member', $cpt ),
        'add_new' => _x( 'Add New', $cpt ),
        'add_new_item' => _x( 'Add New Member', $cpt ),
        'edit_item' => _x( 'Edit Member', $cpt ),
        'new_item' => _x( 'New Member', $cpt ),
        'view_item' => _x( 'View Member', $cpt ),
        'search_items' => _x( 'Search Members', $cpt ),
        'not_found' => _x( 'No Members found', $cpt ),
        'not_found_in_trash' => _x( 'No Members found in Trash', $cpt ),
        'parent_item_colon' => _x( 'Parent member:', $cpt ),
        'menu_name' => _x( 'Members', $cpt ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'All members',
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
		'rewrite' => array('slug' => 'experience/meet-our-members'),
        'capability_type' => 'post'
    );

    register_post_type( 'members', $args );
}



//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_members_taxonomies', 0 );

//create two taxonomies, genres and writers for the post type "book"
function create_members_taxonomies() 
{
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name' => _x( 'Feature Display', 'taxonomy general name' ),
    'singular_name' => _x( 'Feature Display', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Feature Display' ),
    'all_items' => __( 'All Feature Display' ),
    'parent_item' => __( 'Parent Feature Display' ),
    'parent_item_colon' => __( 'Parent Feature Display:' ),
    'edit_item' => __( 'Edit Feature Display' ), 
    'update_item' => __( 'Update Feature Display' ),
    'add_new_item' => __( 'Add New Feature Display' ),
    'new_item_name' => __( 'New Feature Display Name' ),
    'menu_name' => __( 'Feature Display' ),
  ); 	

  register_taxonomy('feature',array('members'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'feature' ),
  ));
}

?>