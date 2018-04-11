<?php

add_theme_support('post-thumbnails');
set_post_thumbnail_size(125, 125, true);
add_theme_support('automatic-feed-links');
add_theme_support('menus');
add_theme_support('title-tag');
add_theme_support(
    'html5',
    array(
        'comment-list',
        'comment-form',
        'search-form',
    )
);

register_nav_menus(
    array(
        'main-menu' => 'Main Menu',
    )
);

add_action('wp_enqueue_scripts', 'shanjiang_load_scripts');

function shanjiang_load_scripts() {
    wp_enqueue_style('google-font', '//fonts.googleapis.com/css?family=Raleway:100,400,700');
    wp_enqueue_style('foundation', get_template_directory_uri() . '/css/foundation.css');
    wp_enqueue_style('foundation-app', get_template_directory_uri() . '/css/app.css');
    wp_enqueue_style('site-styles', get_template_directory_uri() . '/css/styles.css', array('foundation', 'foundation-app'));

    wp_enqueue_script('font-awesome', '//use.fontawesome.com/372ea690b0.js');
    wp_enqueue_script('what-input', get_template_directory_uri() . '/js/vendor/what-input.js');
    wp_enqueue_script('foundation', get_template_directory_uri() . '/js/vendor/foundation.js', array('jquery'));
    wp_enqueue_script('foundation-app', get_template_directory_uri() . '/js/app.js', array('jquery'));
    wp_enqueue_script('header', get_template_directory_uri() . '/js/header.js', array(), false, true);
    wp_enqueue_script('form', get_template_directory_uri() . '/js/form.js', array(), false, true);
    wp_enqueue_script('portfolio-data', get_template_directory_uri() . '/js/portfolioData.js', array(), false, true);
    wp_enqueue_script('portfolio', get_template_directory_uri() . '/js/portfolio.js', array(), false, true);
}

function casestudy_posttype() {
    $labels = array(
        'name'               => _x('Portfolio', 'Post Type General Name', 'shanjiang'),
        'singular_name'      => _x('Portfolio', 'Post Type Singular Name', 'shanjiang'),
        'menu_name'          => __('Portfolios', 'shanjiang'),
        'parent_item_colon'  => __('Parent Portfolio', 'shanjiang'),
        'all_items'          => __('All Portfolios', 'shanjiang'),
        'view_item'          => __('View Portfolio', 'shanjiang'),
        'add_new_item'       => __('Add New Portfolio', 'shanjiang'),
        'add_new'            => __('Add New', 'shanjiang'),
        'edit_item'          => __('Edit Portfolio', 'shanjiang'),
        'update_item'        => __('Update Portfolio', 'shanjiang'),
        'search_items'       => __('Search Portfolio', 'shanjiang'),
        'not_found'          => __('Not Found', 'shanjiang'),
        'not_found_in_trash' => __('Not found in Trash', 'shanjiang'),
    );

    $args = array(
        'label'               => __('portfolio', 'shanjiang'),
        'description'         => __('Portfolio case study', 'shanjiang'),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );

    // Registering your Custom Post Type
    register_post_type('portfolio', $args);
}

add_action('init', 'casestudy_posttype', 0);