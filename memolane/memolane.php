<?php
/*
Plugin Name: Memolane
Plugin URI: http://blog.memolane.com/post/4719158195/one-lane-two-lanes-red-lanes-blue-lanes-embedded
Description: Embed the awesome Memolane media timeline view in your blog page.
Version: 0.01
Author: tribalvibes
Author URI: http://github.com/tribalvibes
License: GPL2
*/

// [memolane lane="tribalvibes" width="450" height="600" background="#000044" border="1px solid #9AF"]

function memolane_func( $atts ) {
	$params = shortcode_atts( array(
	    'lane' => 'memolane',
	    'width' => '500',
	    'height' => '500',
		'background' => 'default', // set to Memolane default
		'border' => 'default' // set to Memolane default
	), $atts );

	return '<script src="http://memolane.com/' . esc_attr($params['lane']) . '.js?' . http_build_query($params, '', '&') . '"></script>';
}
add_shortcode( 'memolane', 'memolane_func' );

?>