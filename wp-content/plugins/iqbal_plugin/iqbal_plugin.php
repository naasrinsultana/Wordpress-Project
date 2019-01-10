<?php 

 /*
	Plugin Name: Iqbal Plugin
	Version: 1.0
	Author: Nasrin Sultana
	Author URI: http://www.nasrinsultana.com
	Description: This is Nas Plugin modernized take on an ever-popular wordpress layout - the horizontal 
	masthead with an optional right sidebar that works perfactly for blogs and websires.
*/


// Example 3: WP Shortcode to share post or page on Twitter.

	function wptuts_youtube($atts, $content=null){
		extract(shortcode_atts(array('id' => ''), $atts));
		$return = $content;
		if($content)
			$return .= "<br><br>";
		$return .= '<iframe width="600" height="349" src="https://www.youtube.com/embed/'.$id.'" frameborder="0" allowfullscreen></iframe>';
		return $return;
	}
add_shortcode('youtube', 'wptuts_youtube');

 ?>