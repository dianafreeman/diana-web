<?php 
// The Template for displaying the about section
// $about_page_id = get_theme_mod('diana_simple_about_page_slug') ;

$about_page_id = 37;


$cv_page_id = 424;
?>



  <div class="container-fluid section-content">
    <h2 class="text-center text-white">About Me</h2>
    <hr class="user-light mb-5">
    <div class="row">
      <div class="offset-sm-6 col-sm-6 text-center">
        <h4 class="lead-title mb-4">Diana M. Steakley-Freeman</h4>
        <p class="lead text-left">Researcher by training, <br>
        Coder by trade. </p>
        <p class="lead">Our tomorrows are built by the developers of today.</p>


        <div class="text-center col sm-6 mt-4 right-section">
          <a class="btn btn-xl btn-full btn-outline-light tell-me-more" href="<?php echo esc_url(get_permalink($about_page_id));?>">
              Tell Me More!
            </a>
            <a class="small text-light" href="<?php echo esc_url(get_permalink($cv_page_id));?>"">...but do it the boring way.</a>
          </div>
        </div>
    </div>
  </div>
