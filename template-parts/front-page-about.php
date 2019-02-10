<?php 
// The Template for displaying the about section
?>

<div class="container">
    <h2 class="text-center text-uppercase text-white">About</h2>
    <hr class="user-light mb-5">
    <div class="row">
      <div class="col-lg-4 ml-auto">
        <p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
      </div>
      <div class="col-lg-4 mr-auto">
        <img style="width:inherit" src="<?php echo esc_url(get_stylesheet_directory_uri().'/assets/about-img.jpg' );?>" />
      </div>
    </div>
    <div class="text-center mt-4">
      <a class="btn btn-xl btn-outline-light" href="#">
        <i class="fa fa-download mr-2"></i>
        Download Now!
      </a>
    </div>
  </div>