<?php

/*
	Plugin Name: Jacks Plugin
	Version: 1.0
	Author: Nasrin Sultana
	Author URI: http://www.nasrinsultana.com
	Description: This is Nas Plugin modernized take on an ever-popular wordpress layout - the horizontal 
	masthead with an optional right sidebar that works perfactly for blogs and websires.
*/

	function shortcode_hello($atts){
		$time = (date('G') < 9 ) ? "Good Morning" : "Good Day";
			return "Hello, and ".$time;
		}
	add_shortcode('bar','shortcode_hello');

?>