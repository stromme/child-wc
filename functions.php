<?php

function hs_custom_login_logo() {
	echo '<style type="text/css">
		.login h1 a, #login h1 a { background-image: url('.get_stylesheet_directory_uri().'/images/logo.png) !important; background-size: 285px 155px; padding-bottom: 100px; }
	</style>';
}
add_action('login_head', 'hs_custom_login_logo');

function hs_google_publisher() {
	echo '<link href="https://plus.google.com/110109148861996385232" rel="publisher" />';
}
add_action('wp_head', 'hs_google_publisher');

?>