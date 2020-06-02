<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ims-matter
 */

get_template_part('template-parts/hero-header');
?>

<main id="primary" class="site-main">
    <div class="hero-section-nav">
        <a href="<?php _e(get_post_permalink(24)) ?>" class="hero-section-nav-item">
            <div class="secondary-title wght-700">Advisory Board</div>
            <p class="secondary-text-uppercase">Oversight of the project implementation</p>
        </a>
        <a href="<?php _e(get_post_permalink(30)) ?>" class="hero-section-nav-item">
            <div class="secondary-title wght-700">Publications</div>
            <p class="secondary-text-uppercase">Open publications on the Matter</p>
        </a>
        <a href="<?php _e(get_post_permalink(27)) ?>" class="hero-section-nav-item">
            <div class="secondary-title wght-700">Team</div>
            <p class="secondary-text-uppercase">Project's administration and researchers</p>
        </a>
    </div>

    <?php get_template_part('template-parts/custom-recent-posts'); ?>
</main>

<?php
// get_sidebar();
get_footer();
