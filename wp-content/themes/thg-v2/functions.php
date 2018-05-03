<?php

require_once('asets/inc/bs4navwalker.php');

register_nav_menu('main', 'Main Nav');

add_theme_support('post-thumbnails');
add_image_size('large', 700, '', true); // Large Thumbnail
add_image_size('medium', 250, '', true); // Medium Thumbnail
add_image_size('small', 120, '', true); // Small Thumbnail
add_image_size('custom-size', 700, 200, true);

add_action('init', 'create_post_type_html5');

function create_post_type_html5()
{
    // register_taxonomy_for_object_type('category', 'team-members'); // Register Taxonomies for Category
    // register_taxonomy_for_object_type('post_tag', 'team-members');
    register_post_type('team-members', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Team Members', 'html5blank'), // Rename these to suit
            'singular_name' => __('Team Member', 'html5blank'),
            'add_new' => __('Add New', 'html5blank'),
            'add_new_item' => __('Add New Team Member', 'html5blank'),
            'edit' => __('Edit', 'html5blank'),
            'edit_item' => __('Edit Team Member', 'html5blank'),
            'new_item' => __('New Team Member', 'html5blank'),
            'view' => __('View Team Member', 'html5blank'),
            'view_item' => __('View Team Member', 'html5blank'),
            'search_items' => __('Search Team Member', 'html5blank'),
            'not_found' => __('No Team Members found', 'html5blank'),
            'not_found_in_trash' => __('No Team Members found in Trash', 'html5blank')
        ),
        'public' => true,
        'hierarchical' => false, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => false,
        'rewrite' => array( 'slug' => 'team' ),
        'supports' => array(
            'title',
            'editor',
            // 'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            // 'post_tag',
            // 'category'
        ) // Add Category and Post Tags support
    ));
}

// Create portfolio filter taxonomy
add_action( 'init', 'create_partner_tag' );

function create_partner_tag() {

  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name'              => _x( 'Partner', 'taxonomy general name' ),
    'singular_name'     => _x( 'Partner', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Partner' ),
    'all_items'         => __( 'All Partner' ),
    'parent_item'       => __( 'Parent Partner' ),
    'parent_item_colon' => __( 'Parent Partner:' ),
    'edit_item'         => __( 'Edit Partner' ),
    'update_item'       => __( 'Update Partner' ),
    'add_new_item'      => __( 'Add New Partner' ),
    'new_item_name'     => __( 'New Partner Name' ),
    'menu_name'         => __( 'Partner' ),
  );

  $args = array(
    'hierarchical'      => false,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'partners' ),
  );

  register_taxonomy( 'partner', array( 'team-members' ), $args );

}