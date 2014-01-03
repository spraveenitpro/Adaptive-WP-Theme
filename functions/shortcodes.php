<?php 


/*
	Plugin Name: Adaptive ShortCodes
	Plugin URI: http://wordpress.org/extend/adaptive
	Description: Adaptive ShortCodes
	Author: Praveen
	Version: 0.1-alpha
	Author URI: http://wordpress.org/extend/plugins
	Text Domain: Adaptive ShortCodes
	License: GPL2
 */

add_shortcode('button','button');

function button($atts, $content = null) {

	extract(shortcode_atts(

		array(
			'color' => 'blue',
			'to' => ''
			), $atts));

	return '<a href="'.$to.'" class="button '.$color.'">'.$content.'</a>';
}


add_shortcode('video_embed', 'video_embed');

function video_embed($atts) {
	extract(shortcode_atts(

		array(
			'src' => '',

	 ), $atts));

	return '<div class="video-container">'.
		   '<iframe width="560" height="315" src="'.$src.'" frameborder="0" allowfullscreen></iframe>'.
		   '</div>';


}




 ?>