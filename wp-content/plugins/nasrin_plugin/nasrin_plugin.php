<?php 

/*
	Plugin Name: Nasrin Plugin
	Version: 1.0
	Author: Nasrin Sultana
	Author URI: http://www.nasrinsultana.com
	Description: This is Nas Plugin modernized take on an ever-popular wordpress layout - the horizontal 
	masthead with an optional right sidebar that works perfactly for blogs and websires.
*/

	function nasrin(){
		$id = get_current_user_id();
		if($id == 0){
			return __('Guest');
		}
		else{
			$user = get_userdata($id);
			return $user->user_login;
			}	
		}
	add_shortcode('nas','nasrin');

?>