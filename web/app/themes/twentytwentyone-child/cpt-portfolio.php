<?php

if (!defined('ABSPATH')) {
    exit;
}

function portfolio_post_type() {
    $labels = array(
        'name'              => 'Portfolio Items',
        'singular_name'     => 'Portfolio Item',
        'menu_name'         => 'Portfolio',
        'add_new'           => 'Add New',
        'add_new_item'      => 'Add New Item',
        'edit_item'         => 'Edit Item',
        'view_item'         => 'View Item',
        'search_items'      => 'Search Item',
    );

    $args = array(
        'label'             => 'Portfolio',
        'labels'            => $labels,
        'supports'          => array('title', 'editor', 'thumbnail', 'excerpt'),
        'public'            => true,
        'menu_icon'         => 'dashicons-portfolio',
        'has_archive'       => true,
        'show_in_rest'      => true,
        'rewrite'           => array('slug' => 'portfolio'),
    );

    register_post_type('portfolio', $args);
}
add_action('init', 'portfolio_post_type', 0);

function portfolio_category_taxonomy() {
    $args = array(
        'hierarchical'      => true,
        'public'            => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'rewrite'           => array('slug' => 'portfolio-category'),
    );

    register_taxonomy('portfolio_category', array('portfolio'), $args);
}
add_action('init', 'portfolio_category_taxonomy', 0);