<?php 

/*
	Plugin Name: Shimul Plugin
	Version: 1.0
	Author: Nasrin Sultana
	Author URI: http://www.nasrinsultana.com
	Description: This is Nas Plugin modernized take on an ever-popular wordpress layout - the horizontal 
	masthead with an optional right sidebar that works perfactly for blogs and websires.
*/

//Example 3: WP Shortcode to share post or page on Twitter.
	function googlemap_function($atts, $content = null){
		extract(shortcode_atts(array(
			'weight' => '700',
			'height' => '380',
			'src' => ''
		), $atts));
		return '<iframe width="'.$width.'" height="'.$height.'" src="'.$src.'&output=embed"></iframe>';
	}	
add_shortcode("googlemap", "googlemap_function");

 ?>