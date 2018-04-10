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
    wp_enqueue_script('header', get_template_directory_uri() . '/js/header.js');
    wp_enqueue_script('form', get_template_directory_uri() . '/js/form.js');
    wp_enqueue_script('portfolio-data', get_template_directory_uri() . '/js/portfolioData.js');
    wp_enqueue_script('portfolio', get_template_directory_uri() . '/js/portfolio.js');
}