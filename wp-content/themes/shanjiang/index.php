<?php get_header(); ?>

<?php get_template_part('template-parts/banner/banner', 'none'); ?>
<?php get_template_part('template-parts/content/content', 'about'); ?>
<?php get_template_part('template-parts/content/content', 'services'); ?>
<?php get_template_part('template-parts/content/content', 'services-details'); ?>

<?php

// The Query
$query = new WP_Query(array('post_type' => 'portfolio'));

// The Loop
if ($query->have_posts()) {
    echo '<div class="portfolio_container grid-x" id="portfolio" data-magellan-target="portfolio">';
    echo '<div class="portfolio_description cell medium-10 medium-offset-1"><h2>portfolio</h2><div class="section_hr"></div><p>I have worked with a variety of different clients. Below is my recent development, design, and photography works.</p></div>';
    while ($query->have_posts()) {
        $query->the_post();
        echo '<div class="portfolio_wrap cell medium-6"><div class="portfolio_overlay"><h3>' . get_the_title() . '</h3></div></div>';
    }
    echo '</div>';
    /* Restore original Post Data */
    wp_reset_postdata();
} else {
    echo "no posts found";
}
?>

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

<?php get_template_part('template-parts/content/content', 'strength'); ?>
<?php get_template_part('template-parts/content/content', 'contact'); ?>

<?php get_footer(); ?>