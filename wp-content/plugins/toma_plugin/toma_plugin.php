



<?php 
/*
	Plugin Name: Toma Plugin
	Version: 1.0
	Author: Nasrin Sultana
	Author URI: http://www.nasrinsultana.com
	Description: This is Nas Plugin modernized take on an ever-popular wordpress layout - the horizontal 
	masthead with an optional right sidebar that works perfactly for blogs and websires.
*/
	function rmcc_post_listing_shortcode1($atts){
		ob_start();
		$query = new WP_Query(array(
			'post_type' => 'portfolio',
			'posts_per_page' => -1,
			'order' => 'ASC',
		));
		if($query->have_posts()){ 
?>
			<ul class="clothes_listing">
				<?php 
					while($query->have_posts()) : $query->the_post();
				 ?>
				 <li id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
				 	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				 </li>
				<?php endwhile; 
				wp_reset_postdata(); ?>
			</ul>
			<?php 
				$myvariable = ob_get_clean(); return $myvariable;
		}
	}
add_shortcode('list-posts-basic', 'rmcc_post_listing_shortcode1');


