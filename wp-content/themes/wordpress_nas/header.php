<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/wordpress_nas/wp-content/themes/wordpress_nas/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<?php wp_head(); ?>
    </head>
    <body>
    
    <nav class="top-bar">
      <div class="container">
        <div class="row">
        <div class="col-sm-4 hidden-xs">
            <span class="nav-text">
                <i class="fa fa-phone" aria-hidden="true"></i>  +123 4567 8910  
                <i class="fa fa-envelope" aria-hidden="true"></i> nas@gmail.com</span>
            </div>
        <div class="col-sm-4 text-center">
            <a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#" class="social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#" class="social"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
            <a href="#" class="social"><i class="fa fa-google" aria-hidden="true"></i></a>
            <a href="#" class="social"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
            </div>
        <form class="navbar-form navbar-right">
      <div class="input-group">        
        <div class="input-group-btn">
          <button class="btn btn-default-1" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
		<input type="text" class="form-control" placeholder="Search">
      </div>
          
        <span class="cart-heart  hidden-sm hidden-xs"> 
            <a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
        </span> 
        <span class="cart-heart  hidden-md hidden-lg">          
            <a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-globe" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-usd" aria-hidden="true"></i></a>
        </span>   
    </form>
        
    </div>
  </div>
        </div>
      </div>
    </nav>   <!--TOP-NAVBAR-END-->
    
    
<!--====================== NAVBAR MENU START===================-->
    
  
<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
  <a class="navbar-brand" href="#">
<img src="http://localhost/wordpress_nas/wp-content/uploads/2018/07/logo-300x129.png" alt="" style="width: 135px; height:50px; margin-top:-13px;" class="alignnone size-medium wp-image-324" />  </a>
    </div>
    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<?php 
								wp_nav_menu(array(
									'theme_location' => 'primary',
									'container' => false,
									'menu_class' => 'nav navbar-nav navbar-right'
									)
								);
							?>
						</div>
      
</nav>


<!--=================CAROUSELE START====================-->
  
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
	<img src="http://localhost/wordpress_nas/wp-content/uploads/2018/07/Slider1.jpg" alt="" width="1366" height="700" class="alignnone size-full wp-image-328" />
      <div class="carousel-caption hidden-xs">
        <h3>New Collection touch of Chania</h3>
        <p>The atmosphere in Chania has a touch<br> of Florence and Venice.</p>
          <button class="btn btn-danger">READ MORE</button>
      </div>
    </div>

    <div class="item">
	<img src="http://localhost/wordpress_nas/wp-content/uploads/2018/07/Slider3.jpg" alt="" width="1366" height="700" class="alignnone size-full wp-image-329" />
	<div class="carousel-caption hidden-xs">
        <h3>New Collection touch of Chania</h3>
        <p>The atmosphere in Chania has a touch<br> of Florence and Venice.</p>
        <button class="btn btn-danger">READ MORE</button>
      </div>
    </div>    
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
    
    