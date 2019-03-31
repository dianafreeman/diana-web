<?php 
global $post;


 if (is_category()){
$title = esc_html(get_the_category()[0]->name);
} else {
$title = esc_html(get_the_title($post));
};


?>
<div id="masthead" class="half-height text-white text-center bg-secondary">

<div class="container">
  <div class="row">
  <div class="col-sm-12">
    <div class="typed-box">
         <h1 class="mb-5 display-4 typed-target">404: Page Not Found</h1>
         </div>
         <!-- <p class="muted">Full Stack Developer</p> -->		
    </div><!-- end col-sm-12--> 
    </div><!-- end row--> 
  </div><!-- end container --> 
</div>
<main id="content">
  <!-- ends in the FOOTER.PHP file --> 