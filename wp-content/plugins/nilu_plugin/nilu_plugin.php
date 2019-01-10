<?php 

 /*
	Plugin Name: Nilu Plugin
	Version: 1.0
	Author: Nasrin Sultana
	Author URI: http://www.nasrinsultana.com
	Description: This is Nas Plugin modernized take on an ever-popular wordpress layout - the horizontal 
	masthead with an optional right sidebar that works perfactly for blogs and websires.
*/

	function chart_function($atts){
		extract(shortcode_atts(array(
			'data' => '','chart_type' => 'pie',
			'title' => 'chart','labels' => '',
			'size' => '640x480','background_color' => 'FFFFFF',
			'colors' => '',
		), $atts));
		switch($chart_type){
			case 'line' : $chart_type = 'lc'; break;
			case 'pie' : $chart_type = 'p3'; break;
			default : break;
		$attributes = ''; $attributes .= '&chd=t:'.$data.'';
		$attributes .= '&chtt='.$title.'';$attributes .= '&chl='.$labels.'';
		$attributes .= '&chs='.$size.'';$attributes .= '&chf='.$background_color.'';
		$attributes .= '&chco='.$colors.'';
			return '<img title="'.$title.'" src="http://chart.apis.google.com/chart?cht='.$chart_type.''.$attributes.'" alt="'.$title.'" />';				
	}
}
	add_shortcode('chart','chart_function');

?>