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
         <?php
         if (is_archive('projects')){
           echo '<h1 class="mb-5 display-4 typed-target">Projects</h1>';
         } else {
						the_archive_title( '<h1 class="mb-5 display-4 typed-target">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
         }?>
         <!-- <p class="muted">Full Stack Developer</p> -->		
         </div><!-- end typed box--> 
    </div><!-- end col-sm-12--> 
    </div><!-- end row--> 
  </div><!-- end container --> 
</div><!-- end #masthead--> 
<main id="content">
  <!-- ends in the FOOTER.PHP file --> 