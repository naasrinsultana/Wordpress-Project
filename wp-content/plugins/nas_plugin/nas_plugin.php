<?php 

 /*
	Plugin Name: Nas Plugin
	Version: 1.0
	Author: Nasrin Sultana
	Author URI: http://www.nasrinsultana.com
	Description: This is Nas Plugin modernized take on an ever-popular wordpress layout - the horizontal 
	masthead with an optional right sidebar that works perfactly for blogs and websires.
*/


defined('ABSPATH') or die('Hey, you can/t access this file, you silly human!');

class NasPlugin{
	function __construct(){
		add_action('init', array($this, 'custom_post_type'));
	}
	function custom_post_type(){
		register_post_type('book', array('public' => true, 'label' => 'Books'));
	}
	function activate(){}
	function deactivate(){}
	function uninstall(){}
	function nasrin(){
		add_action('admin_enqueue_scripts', array($this,'enqueue'));
		add_action('admin_menu', array($this, 'add_admin_pages'));
		add_filter('plugin_action_links', array($this, 'settings_link'));
	}

	public function settings_link($links){
		$settings_link = '<a href="admin.php?page=nas_plugin">Settings</a>';
		array_push($links, $settings_link);
		return $links;
	}
	public function add_admin_pages(){
		add_menu_page('Nas Plugin', 'NasPlug', 'manage_options', 'nas_plugin', array($this, 'admin_index'), 'deshicons_store', 110);
	}
	public function admin_index(){
		require_once plugin_dir_path(__FILE__).'templates/admin.php';
	}
	function enqueue(){
		//enqueue all our scripts
		wp_enqueue_style('mypluginstyle', plugins_url('/assets/mystyle.css', __FILE__));
		wp_enqueue_script('mypluginscript', plugins_url('/assets/myscript.js', __FILE__));
	} //end function
} // end class


//create object
if(class_exists('NasPlugin')){
	$nas = new NasPlugin();
	$nas->nasrin();
}
//activation
register_activation_hook( __FILE__, array($nas, 'activate') );

//deactivation
register_deactivation_hook( __FILE__, array($nas, 'deactivate') );

//uninstall
