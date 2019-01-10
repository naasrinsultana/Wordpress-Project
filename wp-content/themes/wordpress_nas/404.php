 <?php get_header(); ?>

<div id="primary" class="container">
	<main id="main" class="site-main" role="main">
		<section class="error-404 not-found">
			<head class="page-header">
				<h2 class="page-title">Sorry, Page Not Found!</h2>
			</head>
			<div class="page-content">
				<h3>It looks like nothing was found at this location. Maybe try one of the links below or a search?</h3>
				<?php the_widget('WP_Widget_Recent_Posts'); ?>
				<h3>Check the most used categories</h3>
				<ul>
					<?php 
						wp_list_categories(array(
							'orderby' => 'count',
							'order' => 'DESC',
							'show_count' => 1,
							'title_li' => '',
							'number' => 5,
						));
					 ?>
				</ul>
			</div>
			<?php the_widget('WP_Widget_Archives', 'dropdown=0',"after_title=</h2>$archive_content"); ?>
		</section>
	</main>
</div>

  <?php get_footer(); ?>