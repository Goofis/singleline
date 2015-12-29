<?php
	remove_filter('the_content', 'wptexturize');

	add_theme_support( 'post-thumbnails', array( 'post' ) );
	set_post_thumbnail_size( 600, 255, true );
	add_image_size( 'single-post-thumbnail', 600, 255, true );
?>
