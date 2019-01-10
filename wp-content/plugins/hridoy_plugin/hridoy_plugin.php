<?php

 /*
	Plugin Name: Hridoy KhanKhan Plugin
	Version: 1.0
	Author: Nasrin Sultana
	Author URI: http://www.nasrinsultana.com
	Description: This is Nas Plugin modernized take on an ever-popular wordpress layout - the horizontal 
	masthead with an optional right sidebar that works perfactly for blogs and websires.
*/
	
add_action( 'admin_menu', 'my_plugin_menu' );
/** Step 1. */
function my_plugin_menu() {
	add_options_page( 'My Plugin Options', 'Hridoy Khan Khan', 'manage_options', 'my-unique-identifier', 'my_plugin_options' );
}
function my_plugin_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	print "Hoto vaga Iqbal hay amdar satha barai ni tay";	
}

add_action( 'admin_menu', 'extra_post_info_menu' );
if( !function_exists("extra_post_info_menu") )
{
function extra_post_info_menu(){

  $page_title = 'WordPress Extra Post Info';
  $menu_title = 'Extra Post Info';
  $capability = 'manage_options';
  $menu_slug  = 'extra-post-info';
  $function   = 'extra_post_info_page';
  $icon_url   = 'dashicons-media-code';
  $position   = 4;
  add_menu_page( $page_title,
                 $menu_title,
                 $capability,
                 $menu_slug,
                 $function,
                 $icon_url,
                 $position );
  add_action( 'admin_init', 'update_extra_post_info' );
}
}
if( !function_exists("update_extra_post_info") )
{
function update_extra_post_info() {
  register_setting( 'extra-post-info-settings', 'extra_post_info' );
}
}
if( !function_exists("extra_post_info_page") )
{
function extra_post_info_page(){
?>
  <h1>WordPress Extra Post Info</h1>
  <form method="post" action="options.php">
    <?php settings_fields( 'extra-post-info-settings' ); ?>
    <?php do_settings_sections( 'extra-post-info-settings' ); ?>
    <table class="form-table">
      <tr valign="top">
      <th scope="row">Extra post info:</th>
      <td><input type="text" name="extra_post_info" value="<?php echo get_option('extra_post_info'); ?>"/></td>
      </tr>
    </table>
  <?php submit_button(); ?>
  </form>
<?php


    global $wpdb;
 $query = @$wpdb->prepare("SELECT * FROM wp_options where option_name='extra_post_info'");
    $applications = $wpdb->get_results($query);
	echo "<table class='table table-striped'><tr><th>Value</th></tr>";
    foreach ( $applications as $application ) {
        echo "<tr><td>".$application->option_value . "</td>";
	}
}
}
/*
// Plugin logic for adding extra info to posts
if( !function_exists("extra_post_info") )
{
  function extra_post_info($content)
  {
    $extra_info = get_option('extra_post_info');
    return $content . $extra_info;
  }
}

// Apply the extra_post_info function on our content  
add_filter('the_content', 'extra_post_info');
*/
?>