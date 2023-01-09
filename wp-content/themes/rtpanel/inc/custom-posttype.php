<?php
// exhibition post type
function exhibition_custom_post_type() {
    $labels = array(
        'name'                => _x( 'Exhibitions', 'Post Type General Name', '_s' ),
        'singular_name'       => _x( 'Exhibition', 'Post Type Singular Name', '_s' ),
        'menu_name'           => __( 'Exhibitions', '_s' ),
        'parent_item_colon'   => __( 'Parent Exhibition', '_s' ),
        'all_items'           => __( 'All Exhibitions', '_s' ),
        'view_item'           => __( 'View Exhibition', '_s' ),
        'add_new_item'        => __( 'Add New Exhibition', '_s' ),
        'add_new'             => __( 'Add New', '_s' ),
        'edit_item'           => __( 'Edit Exhibition', '_s' ),
        'update_item'         => __( 'Update Exhibition', '_s' ),
        'search_items'        => __( 'Search Exhibition', '_s' ),
        'not_found'           => __( 'Not Found', '_s' ),
        'not_found_in_trash'  => __( 'Not found in Trash', '_s' ),
    );
// Set other options for Custom Post Type
    $args = array(
        'label'               => __( 'exhibition', '_s' ),
        'description'         => __( 'Glimpses of Exhibition', '_s' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail'),
        'taxonomies'          => array( 'genres' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
  
    );
      
    // Registering your Custom Post Type
    register_post_type( 'exhibition', $args );
}
add_action( 'init', 'exhibition_custom_post_type', 0 );

// partner post type
function partner_custom_post_type() {
    $labels = array(
        'name'                => _x( 'Partners', 'Post Type General Name', '_s' ),
        'singular_name'       => _x( 'Partner', 'Post Type Singular Name', '_s' ),
        'menu_name'           => __( 'Partners', '_s' ),
        'parent_item_colon'   => __( 'Parent Partner', '_s' ),
        'all_items'           => __( 'All Partners', '_s' ),
        'view_item'           => __( 'View Partner', '_s' ),
        'add_new_item'        => __( 'Add New Partner', '_s' ),
        'add_new'             => __( 'Add New', '_s' ),
        'edit_item'           => __( 'Edit Partner', '_s' ),
        'update_item'         => __( 'Update Partner', '_s' ),
        'search_items'        => __( 'Search Partner', '_s' ),
        'not_found'           => __( 'Not Found', '_s' ),
        'not_found_in_trash'  => __( 'Not found in Trash', '_s' ),
    );
// Set other options for Custom Post Type
    $args = array(
        'label'               => __( 'partner', '_s' ),
        'description'         => __( 'Our Partners', '_s' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'thumbnail'),
        'taxonomies'          => array( 'genres' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
  
    );
      
    // Registering your Custom Post Type
    register_post_type( 'partner', $args );
}
add_action( 'init', 'partner_custom_post_type', 0 );