<?php 


 /*
	Plugin Name: Malbub Plugin
	Version: 1.0
	Author: Nasrin Sultana
	Author URI: http://www.nasrinsultana.com
	Description: This is Nas Plugin modernized take on an ever-popular wordpress layout - the horizontal 
	masthead with an optional right sidebar that works perfactly for blogs and websires.
*/


	function recent_posts_function1($atts){
		extract(shortcode_atts(array(
			'posts' => 1,
		), $atts));
		$return_string ='<ul>';
		query_posts(array('orderby' => 'date', 'order' => 'DESC', 'showposts' => $posts));
		if(have_posts()) :
			while(have_posts()): the_post();
				$return_string .= '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
			endwhile;
		endif;
		$return_string .= '</ul>';
		wp_reset_query();
		return $return_string;
	}
	function register_shortcodes1(){
		add_shortcode('recent-posts', 'recent_posts_function1');
	}
add_action('init','register_shortcodes1');



 ?>