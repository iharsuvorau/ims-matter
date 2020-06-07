<?php

/**
 * The template for displaying custom recent posts
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Matter 1.0
 */
?>

<div class="recent-posts">
    <h3 class="secondary-title letter-spacing-small wght-700 padding-std mb-2 mt-4">Recent news</h3>
    <?php
    $args = array(
        // "category_name" => "news",
        'numberposts'      => 10,
        'offset'           => 0,
        'category'         => 0,
        'orderby'          => 'post_date',
        'order'            => 'DESC',
        'post_type'        => 'post',
        'post_status'      => 'publish',
    );
    query_posts($args);
    while (have_posts()) {
        the_post(); ?>
        <div class="recent-posts-item">
            <div class="recent-post-date secondary-text-uppercase"><?php the_date(); ?></div>
            <div class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
        </div>
    <?php } ?>
    <div class="recent-posts-item">
        <div class="recent-post-date"></div>
        <div class="post-title"><a href="<?php _e(get_category_link(3)) ?>" class="secondary-link-uppercase">Read more</a></div>
    </div>
</div>