<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php wp_head();?>
</head>
<body <?php body_class(); ?>>

<h1 class="hide">S H A N</h1>
<div class="header_bar_container grid-x">
    <div class="title_wrap small-4 medium-3 large-2 cell" data-magellan>
        <a href="#main_form"><p class="fa fa-envelope-o"></p></a>
    </div>
    <div class="logo_wrap small-4 medium-6 large-8 cell">
        <a href="http://shanjiang.io">
            <img src="<?php echo get_template_directory_uri();?>/images/shan-logo-3.0-name-white.svg" alt="SHAN Logo" id="header_logo">
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
            <ul data-magellan>
                <li><a href="#backToTop" class="de-active">home</a></li>
                <li><a href="#about" class="de-active">about</a></li>
                <li><a href="#services" class="de-active">services</a></li>
                <li><a href="#portfolio" class="de-active">portfolio</a></li>
                <li><a href="#main_form" class="de-active">contact</a></li>
                <li><a href="http://shanjiang.io/shan_jiang_resume.pdf" class="de-active" target="_blank">resume</a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<div class="header_image_container grid-x" id="backToTop" data-magellan-target="backToTop"
     data-interchange="[images/banner_photo_sm.jpg, small], [images/banner_photo.jpg, medium], [images/banner_photo.jpg, large]">
    <h2 class="cell">Hello, I'm Shan Jiang.</h2>
    <div class="scroll-to cell" data-magellan="">
        <a href="#about"><p>about</p></a>
        <div></div>
    </div>
</div>
