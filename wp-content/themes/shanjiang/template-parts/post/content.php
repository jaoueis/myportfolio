<section class="grid-x portfolio-post-wrap">
    <div class="cell small-12 portfolio-post-banner-wrap">
        <?php $bg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
        <div class="portfolio-post-banner" style="background-image: url('<?php echo $bg[0]; ?>'); background-repeat: no-repeat; background-position: center; background-size: cover;">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
    <?php the_content(); ?>
</section>