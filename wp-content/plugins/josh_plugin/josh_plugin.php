<?php 
/*
	Plugin Name: Josh Plugin
	Version: 1.0
	Author: Nasrin Sultana
	Author URI: http://www.nasrinsultana.com
	Description: This is Nas Plugin modernized take on an ever-popular wordpress layout - the horizontal 
	masthead with an optional right sidebar that works perfactly for blogs and websires.
*/

function button_shortcode($type){
	extract(shortcode_atts(array(
		'type' => 'type'
	), $type));

	//check what type user entered
	switch ($type){
		case 'twitter':
			return 	'<a href="http://twitter.com/filipstefansson" class="twitter-button">Follow me on Twitter</a>';
			break;
		case 'facebook':
			return '<a href="http://facebook.com/shipl.biswas" class="rss-button">Follow me on Facebook</a>';
			break;
	}
}
add_shortcode('button', 'button_shortcode');