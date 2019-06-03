<?php get_header(); ?>

<?php get_template_part('template-parts/banner/banner', 'none'); ?>
<?php get_template_part('template-parts/content/content', 'about'); ?>
<?php get_template_part('template-parts/content/content', 'services'); ?>
<?php get_template_part('template-parts/content/content', 'services-details'); ?>

<?php

// The Query
$query = new WP_Query(['post_type' => 'portfolio', 'posts_per_page' => 10]);

// The Loop
if ($query->have_posts()) {
    echo '<div class="portfolio_container grid-x" id="portfolio" data-magellan-target="portfolio">';
    echo '<div class="portfolio_description cell medium-10 medium-offset-1"><h2>portfolio</h2><div class="section_hr"></div><p>I have worked with a variety of different clients. Below is my recent development, design, and photography works.</p></div>';
    while ($query->have_posts()) {
        $query->the_post();
        $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium_large');
        echo "<a href='" . get_permalink() . "' style='display: block;' target='_blank' class='cell medium-6'><div class='portfolio_wrap' style='background-image: url(" . $thumb[0] . ")'><div class='portfolio_overlay'><h3>" . get_the_title() . "</h3></div></div></a>";
    }
    echo '</div>';

    wp_reset_postdata();
} else {
    echo "no posts found";
}
?>

<?php get_template_part('template-parts/content/content', 'strength'); ?>
<?php get_template_part('template-parts/content/content', 'contact'); ?>

<?php get_footer(); ?>