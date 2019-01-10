<?php get_header(); ?>

<!--Contact Form Start-->

<div id="contact" class="container bg-grey" style=" padding-bottom: 10px; padding-top: 20px; height: 400px;">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p> 
    </div>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="15" cols="4" style="height:142px !important"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-left" type="submit" style="background-color: #2fdab8; border: 0px; padding: 8px; margin-bottom: 30px; width: 100px; color: white;">Send</button>
        </div>
      </div> 
    </div>
  </div>
</div>
<!--Contact Form End-->


 <?php get_footer(); ?>