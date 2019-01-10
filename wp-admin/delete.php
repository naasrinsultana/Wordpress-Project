<?php 

	$folder = "/wordpress_nas";
	require_once($_SERVER['DOCUMENT_ROOT'] . $folder . '/wp-config.php');
	require_once($_SERVER['DOCUMENT_ROOT'] . $folder . '/wp-load.php');
		print $del = $_GET['del'];
		global $wpdb;
	$table = "wp_submitted_form";
	$wpdb->delete($table, array('email' => $del));
	wp_redirect('index.php');

 ?>