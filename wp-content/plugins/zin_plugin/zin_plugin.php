<?php 

/*
	Plugin Name: Zin Plugin
	Version: 1.0
	Author: Nasrin Sultana
	Author URI: http://www.nasrinsultana.com
	Description: This is Nas Plugin modernized take on an ever-popular wordpress layout - the horizontal 
	masthead with an optional right sidebar that works perfactly for blogs and websires.
*/


	function pdf_function($attr, $url){
		extract(shortcode_atts(array(
			'width' => '600',
			'height' => '480'
		), $attr));
		return '<iframe src="http://docs.google.com/viewer?url=' .$url . '&embedded=true" style="width:' .$width.'; height:'.$height.';">your browser does not support iframes</iframe>';
	}
add_shortcode('pdf', 'pdf_function');


 ?>