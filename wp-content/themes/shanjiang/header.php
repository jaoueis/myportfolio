<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/banner_photo.jpg">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php wp_head(); ?>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>
<body <?php body_class(); ?>>
<h1 class="hide">S H A N</h1>
<div class="header_bar_container grid-x">
    <div class="title_wrap small-4 medium-3 large-2 cell" data-magellan>
        <a href="http://shanjiang.io/#main_form"><p class="fa fa-envelope-o"></p></a>
    </div>
    <div class="logo_wrap small-4 medium-6 large-8 cell">
        <a href="http://shanjiang.io">
            <img src="<?php echo get_template_directory_uri(); ?>/images/shan-logo-3.0-name-white.svg" alt="Shan Logo" id="header_logo" data-src-black="<?php echo get_template_directory_uri(); ?>/images/shan-logo-3.0-name-black.svg" data-src-white="<?php echo get_template_directory_uri(); ?>/images/shan-logo-3.0-name-white.svg">
        </a>
    </div>
    <div class="burger_button_wrap small-4 medium-3 large-2 cell">
        <div class="burger_button">
            <div class="top"></div>
            <div class="mid"></div>
            <div class="bot"></div>
        </div>
    </div>
    <div class="nav_overlay">
        <nav>
            <h2 class="hide">Main Nav</h2>
            <?php wp_nav_menu(
                array(
                    'menu'           => '',
                    'theme_location' => 'main-menu',
                    'items_wrap'     => '<ul data-magellan>%3$s</ul>',
                )
            ); ?>
        </nav>
    </div>
</div>