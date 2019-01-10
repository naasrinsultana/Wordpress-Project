<?php 

	function nas_css(){
		// Bootstrap Files
		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.4', 'all');
		wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.4', true);		

		// Own File Create JS
		wp_enqueue_script('jquery');		
		wp_enqueue_style('customstyle', get_template_directory_uri(). '/css/nas.css', array(), '1.0.0', 'all');
		wp_enqueue_script('customjs', get_template_directory_uri() . '/js/nas.js', array(), '1.0.0', true);

	}
	add_action('wp_enqueue_scripts', 'nas_css');

	function nas_theme_setup(){
		add_theme_support('menus');
		register_nav_menu('primary', 'Primary Header Navigation');
		register_nav_menu('secondary', 'Footer Navigation');
	}
	add_action('init', 'nas_theme_setup');
	add_theme_support('custom-background');
	add_theme_support('custom-header');
	add_theme_support('post-thumbnails');
	add_theme_support('post-formats', array('aside','image','video'));

	add_theme_support('html5',array('search-form'));

	function nas_widget_setup(){
		register_sidebar(
			array(
				'name' => 'Sidebar',
				'id' => 'sidebar-1',
				'class' => 'custom',
				'description' => 'Standard Sidebar',
			)
		);
	}
	add_action('widgets_init', 'nas_widget_setup');

	function nas_custom_post_type (){
		$labels = array(
			'name' => 'Portfolio',
			'add_new' => 'Add Item',
			'add_new_item' => 'Add Item'
			);
		$args = array(
			'labels' => $labels,
			'public' => true,
			'supports' => array(
				'title',
				'editor',
				'excerpt',
				'thumbnail',
				'revisions',
			),
			'taxonomies' => array('category', 'post_tag'),
			'menu_position' => 1,
			'exclude_from_search' => false				
			);
	register_post_type('portfolio',$args);				
}
add_action('init','nas_custom_post_type');

function nas_custom_taxonomies(){
	$labels = array(
		'name' => 'Types',
		'singular_name' => 'Type',
		'search_items' => 'Search Types',
		'all_items' => 'All Types',
		'parent_item' => 'Parent Type',
		'parent_item_colon' => 'Parent Type:',
		'edit_item' => 'Edit Type',
		'update_item' => 'Update Type',
		'add_new_item' => 'Add New Work Type',
		'new_item_name' => 'New Type Name',
		'menu_name' => 'Types'

	);
	$args = array('hierarchical' => true,
		'labels' => $labels, 'show_ui' => true,
		'show_admin_column' => true, 'query_var' => true,
		'rewrite' => array('slug' => 'field')
	);
	register_taxonomy('field', array('portfolio'), $args);
	register_taxonomy('software', 'portfolio', array(
		'label' => 'Software',
		'rewrite' => array('slug' => 'software'),
		'hierarchical' => false
	));

 }
 add_action('init', 'nas_custom_taxonomies');
	function nas_get_terms($postID, $term){
		$terms_list = wp_get_post_terms($postID, $term);
		$output = '';
		$i = 0;
		foreach($terms_list as $term){
			$i++;
			if($i > 1){
				$output .= ', ';
			}
			$output .= '<a href="' . get_term_link($term) . '">'. $term->name .'</a>';
		}
		return $output;
	}
//form fetch
function addApplicationWidget(){
	wp_add_dashboard_widget(
		'submitted_applications',
		'Submitted Applications',
		'showApplicants'
	);
}
add_action('wp_dashboard_setup', 'addApplicationWidget');
function showApplicants(){
	global $wpdb;
	$query = @$wpdb->prepare("SELECT * FROM wp_submitted_form");
	$applications = $wpdb->get_results($query);
	foreach($applications as $application){
		echo $application->name . " " . $application->email . " " . $application->subject ."<br>";
		?>
		<a href='delete.php?del=<?php print $application->email ?>'>Delete</a>
		<?php 

		 
	}
}
?>