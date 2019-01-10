<?php 

 /*
	Plugin Name: Rab Plugin
	Version: 1.0
	Author: Nasrin Sultana
	Author URI: http://www.nasrinsultana.com
	Description: This is Nas Plugin modernized take on an ever-popular wordpress layout - the horizontal 
	masthead with an optional right sidebar that works perfactly for blogs and websires.
*/

	function html_form_code(){
		echo '<form action="'.esc_url($_SERVER['REQUEST_URI']).'" method="post">';
		echo '<p>';
		echo 'Your Name (required) <br/>';
		echo '<input type="text" name="cf-name" pattern="[a-zA-Z0-9]+" value="'.(isset($_POST["cf-name"]) ? esc_attr($_POST["cf-name"]) : '').'" size="40" />';
		echo '</p>';
		echo '<p>';
		echo 'Your Email(required) <br/>';
		echo '<input type="email" name="cf-email" value="'.(isset($_POST["cf-email"]) ? esc_attr($_POST["cf-email"]) : '').'" size="40" />';
		echo '</p>';
		echo '<p>';
		echo 'Subject (required) <br/>';
		echo '<input type="text" name="cf-subject" pattern="[a-zA-Z]+" value="'.(isset($_POST["cf-subject"]) ? esc_attr($_POST["cf-subject"]) : '').'" size="40" />';
		echo '</p>';
		echo '<p>';
		echo 'Your Massage (required) <br/>';
		echo '<textarea rows="10" cols="35" name="cf-message">'.
		(isset($_POST["cf-message"]) ? esc_attr($_POST["cf-message"]) : '').'</textarea>';
		echo '</p>';
		echo '<p>';
		echo '<input type="submit" name="cf-submitted" value="Send" />';
		echo '</p>';
		echo '</form>';
	}
function deliver_mail(){
	if(isset($_POST['cf-submitted'])){
		$name = sanitize_text_field($_POST["cf-name"]);
		$email = sanitize_email($_POST["cf-email"]);
		$subject = sanitize_text_field($_POST["cf-subject"]);
		$message = esc_textarea($_POST["cf-message"]);
	global $wpdb;
	$wpdb->insert("wp_submitted_form", array(
		"name" => "$name",
		"email" => "$email",
		"subject" => "$subject",
		"message" => "$message"
	));
	}
}
function cf_shortcode(){
	ob_start();
	deliver_mail();
	html_form_code();

	return ob_get_clean();
}
add_shortcode('sitepoint_contact_form', 'cf_shortcode');

 ?>