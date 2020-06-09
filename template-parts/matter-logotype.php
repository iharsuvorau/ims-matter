<?php
if (has_custom_logo()) {
	the_custom_logo();
} else {
	$html = sprintf(
		'<a href="%1$s" class="custom-logo-link" rel="home"><img src="%2$s" srcset="%3$s" class="custom-logo" alt="Matter.eu logotype" /></a>',
		esc_url(home_url( '/' )),
		get_template_directory_uri() . '/assets/images/matter-logotype-white.svg',
		get_template_directory_uri() . '/assets/images/matter-logotype-white@2x.png'
	);
	echo($html);
}
?>