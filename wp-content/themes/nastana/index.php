<?php get_header(); ?>

<div class="container">
	<?php 
		if(have_posts()):
			while(have_posts()): the_post();
	 ?>
	 <div class="row">
	 	<?php if(has_post_thumbnail()): ?>
	 		<div class="col-xs-12 col-sm-4">
	 			<div class="thumbnail">
	 				<?php the_post_thumbnail('medium'); ?>	 				
	 			</div>
	 		</div>
		 	<div class="col-xs-12 col-sm-8">
		 		<?php the_content(); ?>
		 	</div>
			<?php else: ?>
			<div class="col-xs-12">
				<?php the_content(); ?>
			</div>
			<?php endif; ?>
	</div>
<?php 
	endwhile; endif;
 ?>
</div>
<?php get_footer(); ?>