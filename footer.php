<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ims-matter
 */

?>

<footer id="colophon" class="site-footer secondary-text-uppercase">
	<div class="footer-date">
		&copy; <?php echo date_i18n(_x('Y', 'copyright date format', 'matter')); ?>
	</div>
	<div class="footer-credits">
		<span class="pr1 mv1"><a href="https://www.tuit.ut.ee/en">Institute of Technology</a>,&nbsp;<a href="https://www.ut.ee/en">University of Tartu</a>. Funded by the European Union</span>
		<img class="eu-flag" src="<?php echo get_template_directory_uri(); ?>/assets/images/flag_yellow_low.jpg" />
	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
