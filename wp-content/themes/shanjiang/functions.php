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
        'main-menu'       => 'Main Menu',
    )
);


add_action('wp_enqueue_scripts', 'shanjiang_load_scripts');

function shanjiang_load_scripts()
{
    wp_enqueue_style('google-font', '//fonts.googleapis.com/css?family=Raleway:100,400,700');
    wp_enqueue_style('foundation', get_template_directory_uri() . '/css/foundation.css');
    wp_enqueue_style('foundation-app', get_template_directory_uri() . '/css/app.css');
    wp_enqueue_style('site-styles', get_template_directory_uri() . '/css/styles.css', array('foundation', 'foundation-app'));
}

