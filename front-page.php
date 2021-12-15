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
        <a href="/about/" class="hero-navigation-item">
            <div class="secondary-title wght-700 pb1">What is MATTER</div>
            <p class="secondary-text-uppercase">About</p>
        </a>
        <a href="/team-members-and-collaborations/" class="hero-navigation-item">
            <div class="secondary-title wght-700 pb1">Who is MATTER</div>
            <p class="secondary-text-uppercase">Team members and collaboration</p>
        </a>
        <a href="/available-thesis-topics/" class="hero-navigation-item">
            <div class="secondary-title wght-700 pb1">For students</div>
            <p class="secondary-text-uppercase">Available theses topics</p>
        </a>
    </div>

    <?php get_template_part('template-parts/custom-recent-posts'); ?>
</main>

<?php
// get_sidebar();
get_footer();
?>
