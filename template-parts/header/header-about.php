<?php 
global $post;


get_header();



if (is_category()){
  $title = esc_html(get_the_category()[0]->name);
  } else {
  $title = esc_html(get_the_title($post));
  };
?>
<main id="content" >
<div id="about-page" class="parallax-background">
  <!-- ends in the FOOTER.PHP file --> 
<div id="masthead" class="page-masthead text-white text-center">
    <div id="about" class="container">
        <div class="row header-row">
            <div class="col-md-10 mx-auto">
                <h2 class="mb-5 display-4">Diana M Steakley-Freeman</h2>
                <div class="typed-box mb-4">
                    <p class="muted typed-target">JavaScript Generalist | Web Engineer | Professional Nerd</p>
                </div><!-- end typed box-->
            </div><!-- end col-sm-8-->
        </div><!-- end row-->
    </div><!-- end container -->
</div><!-- end #masthead--> 
</div><!-- end parallax-background-->
