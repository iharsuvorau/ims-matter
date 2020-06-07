<?php
/**
 * Template part for displaying summary of posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ims-matter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('summary-article'); ?>>
    <div class="summary-thumbnail"><?php ims_matter_post_thumbnail(); ?></div>
    <div class="summary-main">
        <div class="summary-content"><?php
            the_title( '<h2 class="summary-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            the_excerpt();
            ?></div>
        <div class="summary-date secondary-text-uppercase"><?php ims_matter_posted_on(); ?></div>
    </div>
</article>
