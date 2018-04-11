<section class="grid-x portfolio-post-wrap">
    <div class="cell small-12 portfolio-post-banner-wrap">
        <div class="portfolio-post-banner" style="background: <?php the_post_thumbnail('full'); ?>; background-size: cover; background-position: center;">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
    <?php the_content(); ?>
</section>