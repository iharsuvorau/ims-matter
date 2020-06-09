<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ims-matter
 */

?>
<?php get_template_part( 'template-parts/matter-head' ); ?>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ims-matter' ); ?></a>

    <header class="site-hero-header">
        <div id="masthead" class="site-header">
            <nav class="main-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
            </nav>
        </div>
        <div class="hero-message">
            <p>We focus on nanoscale material behaviour in complex environments and upscaling of control of nanomaterial
                for interdisciplinary and widespread use</p>
            <p><a href="/about/" class="primary-link-uppercase">Explore more</a></p>
        </div>
    </header>

    <header class="mobile-only">
        <div id="masthead" class="site-header">
            <div class="site-branding">
				<?php
				if ( has_custom_logo() ) {
					the_custom_logo();
				} else {
					$html = sprintf(
						'<a href="%1$s" class="custom-logo-link" rel="home"><img src="%2$s" class="custom-logo" alt="Matter.eu logotype" /></a>',
						esc_url( home_url( '/' ) ),
						get_template_directory_uri() . '/assets/images/matter-logotype-white.svg'
					);
					echo( $html );
				}
				?>
            </div>
            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu"
                        aria-expanded="false"><?php esc_html_e( 'Menu', 'ims-matter' ); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
            </nav>
        </div>
        <div class="hero-message">
            <p>We focus on nanoscale material behaviour in complex environments and upscaling of control of nanomaterial
                for interdisciplinary and widespread use</p>
            <p><a href="/about/" class="primary-link-uppercase">Explore more</a></p>
        </div>
    </header>