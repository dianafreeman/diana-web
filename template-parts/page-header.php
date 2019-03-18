<?php 
global $post;


 if (is_category()){
$title = esc_html(get_the_category()[0]->name);
} else {
$title = esc_html(get_the_title($post));
};
?>
<div id="masthead" class="page-masthead bg-gradient-secondary text-white text-center">
  <div class="container">
  <div class="row">
  <div class="col-sm-12 mb-4 mt-4">
         <h2 class="display-4 mb-5"><?php echo $title ;?></h2>
    </div><!-- end col-sm-12--> 
    </div><!-- end row--> 
  </div><!-- end container --> 
</div>