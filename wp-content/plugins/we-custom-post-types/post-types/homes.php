<?php
//HOMES
$labels = array(
    'name'                  => _x( 'Homes', 'Post Type General Name', 'wecpt' ),
    'singular_name'         => _x( 'Home', 'Post Type Singular Name', 'wecpt' ),
    'menu_name'             => __( 'Homes', 'wecpt' ),
    'name_admin_bar'        => __( 'Homes', 'wecpt' ),
    'archives'              => __( 'Item Archives', 'wecpt' ),
    'attributes'            => __( 'Item Attributes', 'wecpt' ),
    'parent_item_colon'     => __( 'Parent Item:', 'wecpt' ),
    'all_items'             => __( 'All Items', 'wecpt' ),
    'add_new_item'          => __( 'Add New Item', 'wecpt' ),
    'add_new'               => __( 'Add New', 'wecpt' ),
    'new_item'              => __( 'New Item', 'wecpt' ),
    'edit_item'             => __( 'Edit Item', 'wecpt' ),
    'update_item'           => __( 'Update Item', 'wecpt' ),
    'view_item'             => __( 'View Item', 'wecpt' ),
    'view_items'            => __( 'View Items', 'wecpt' ),
    'search_items'          => __( 'Search Item', 'wecpt' ),
    'not_found'             => __( 'Not found', 'wecpt' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'wecpt' ),
    'featured_image'        => __( 'Featured Image', 'wecpt' ),
    'set_featured_image'    => __( 'Set featured image', 'wecpt' ),
    'remove_featured_image' => __( 'Remove featured image', 'wecpt' ),
    'use_featured_image'    => __( 'Use as featured image', 'wecpt' ),
    'insert_into_item'      => __( 'Insert into item', 'wecpt' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'wecpt' ),
    'items_list'            => __( 'Items list', 'wecpt' ),
    'items_list_navigation' => __( 'Items list navigation', 'wecpt' ),
    'filter_items_list'     => __( 'Filter items list', 'wecpt' ),
);
$args = array(
    'label'                 => __( 'Home', 'wecpt' ),
    'description'           => __( 'Homes in UK, Ireland and abroad', 'wecpt' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
    'taxonomies'            => array( 'category', 'post_tag' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-admin-multisite',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',
    'show_in_rest'          => true,
);
register_post_type( 'homes', $args );
