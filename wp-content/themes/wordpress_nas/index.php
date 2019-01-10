 <?php get_header(); ?>

  	<?php 

  	//wordpress query
  		//$lastBlog = new WP_Query('type=post&posts_per_page=2');
  		//or
  	
  	// Showing content under category

  		//$lastBlog = new WP_Query('type=post&posts_per_page=-1&category_name=Polar');
  		//if($lastBlog->have_posts()):
  			//while($lastBlog->have_posts() ): $lastBlog->the_post();
  	 ?>

  	 <?php //get_template_part('content', get_post_format()); ?>
  	<?php //endwhile;
	//endif;
  		//wp_reset_postdata();
  	 ?>
     <div class="container">
      <div class="row">
        <div class="col-xs-8">
    <?php 
      if(have_posts()):
        $currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array('posts_per_page' => 3, 'paged' => $currentPage);
        query_posts($args);
          while(have_posts()): the_post();
     ?>

 	<?php 
 		get_template_part('content', get_post_format());
 	 ?>

 	<?php endwhile; ?>

    <div class="col-xs-6 text-left">
      <?php next_posts_link('<< Older Post'); ?>
    </div>
    <div class="col-xs-6 text-right">
      <?php previous_posts_link('Newer Posts >>'); ?>
    </div>
    </div>

    
 	<?php endif; ?>

 		<!-- Widget Setup -->

 	<div class=" col-sm-4">
 		<?php get_sidebar(); ?>
 	</div> 
  </div>
</div>
 <?php get_footer(); ?>