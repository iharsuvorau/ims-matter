<?php
/**
 * Template part for displaying summary of posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ims-matter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php ims_matter_posted_on(); ?>
			</div>
		<?php endif; ?>
	</header>

    <section class="summary-content">
        <?php ims_matter_post_thumbnail(); ?>
        <?php the_excerpt(); ?>
    </section>

	<footer class="entry-footer">
		<?php ims_matter_entry_footer(); ?>
	</footer>
</article>
