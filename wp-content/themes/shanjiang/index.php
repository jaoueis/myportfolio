<?php get_header(); ?>

<?php get_template_part('template-parts/banner/banner', 'none'); ?>
<?php get_template_part('template-parts/content/content', 'about'); ?>
<?php get_template_part('template-parts/content/content', 'services'); ?>
<?php get_template_part('template-parts/content/content', 'services-details'); ?>

<div class="portfolio_container grid-x" id="portfolio" data-magellan-target="portfolio">
    <div class="portfolio_description cell medium-10 medium-offset-1">
        <h2>portfolio</h2>
        <div class="section_hr"></div>
        <p>I have worked with a variety of different clients. Below is my recent development, design, and photography
            works.</p>
    </div>
    <div class="portfolio_wrap cell medium-6" id="lotr" data-roundaboutindex="0">
        <div class="portfolio_overlay">
            <h3>Lord Of The Ring 15th Anniversary</h3>
        </div>
    </div>
    <div class="portfolio_wrap cell medium-6" id="crunican" data-roundaboutindex="1">
        <div class="portfolio_overlay">
            <h3>Crunican Website Design</h3>
        </div>
    </div>
    <div class="portfolio_wrap cell medium-6" id="logofolio" data-roundaboutindex="2">
        <div class="portfolio_overlay">
            <h3>2016-2017 Logofolio</h3>
        </div>
    </div>
    <div class="portfolio_wrap cell medium-6" id="photo" data-roundaboutindex="3">
        <div class="portfolio_overlay">
            <h3>Photo Works</h3>
        </div>
    </div>
    <div class="portfolio_showboard grid-x">
        <div class="portfolio_close">
            <div class="top"></div>
            <div class="bot"></div>
        </div>
        <div class="cell small-8 small-offset-2 large-6 large-offset-3 portfolio_content_wrap">
            <img src="" alt="" class="portfolio_img">
            <h4 class="portfolio_title"></h4>
            <p class="portfolio_content"></p>
        </div>
    </div>
</div>

<?php get_template_part('template-parts/content/content', 'strength'); ?>
<?php get_template_part('template-parts/content/content', 'contact'); ?>

<?php get_footer(); ?>