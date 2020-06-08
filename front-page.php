<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no front-page.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ims-matter
 */

get_template_part('template-parts/hero-header');
?>

<main id="primary" class="site-main">
    <div class="hero-navigation">
        <a href="/publications/" class="hero-navigation-item">
            <div class="secondary-title wght-700 pb1">Publications</div>
            <p class="secondary-text-uppercase">Open publications from Matter</p>
        </a>
        <a href="/team/" class="hero-navigation-item">
            <div class="secondary-title wght-700 pb1">Team</div>
            <p class="secondary-text-uppercase">Project's administration and research staff</p>
        </a>
        <a href="/contacts/" class="hero-navigation-item">
            <div class="secondary-title wght-700 pb1">Contacts</div>
            <p class="secondary-text-uppercase">Contact information and directions</p>
        </a>
    </div>

    <?php get_template_part('template-parts/custom-recent-posts'); ?>
</main>

<?php
// get_sidebar();
get_footer();
?>