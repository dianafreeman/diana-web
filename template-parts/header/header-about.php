<?php 
global $post;


get_header();



if (is_category()){
  $title = esc_html(get_the_category()[0]->name);
  } else {
  $title = esc_html(get_the_title($post));
  };
?>
<div id="masthead" class="page-masthead text-white text-center crossfade final">

    <div id="about" class="container">
        <div class="header-overlay"></div>
        <div class="row header-row">
            <div class="col-md-8 mx-auto">
                <h2 class="mb-5 display-4">Diana M Steakley-Freeman</h2>
                <div class="typed-box mb-4">
                    <p class="muted typed-target">JavaScript Generalist | Web Engineer | Professional Nerd</p>
                </div><!-- end typed box-->
            </div><!-- end col-sm-8-->
        </div><!-- end row-->
    </div><!-- end container -->
</div><!-- end #masthead--> 
<main id="content">
  <!-- ends in the FOOTER.PHP file --> 