<?php 
// The Template for displaying the about section
// $about_page_id = get_theme_mod('diana_simple_about_page_slug') ;

$about_page_id = 37;


$cv_page_id = 424;
?>



  <div class="container-fluid section-content ">
    <div class="row">
      <div class="offset-sm-6 col-sm-6 pt-4 pb-4 bg-dark ">
      <h2 class="text-center display-4">About Me</h2>

        <h4 class="lead-title mb-4 text-light">Diana M. Steakley-Freeman</h4>
        <p class="lead text-left">Researcher by training, <br>
        Coder by trade. </p>
        <p class="lead">Our tomorrows are built by the developers of today.</p>


        <div class="text-center col sm-6 mt-4 right-section">
          <a class="btn btn-xl btn-full btn-outline-light tell-me-more" href="<?php echo esc_url(get_permalink( get_page_by_title( 'About Diana' ) ));?>">
              Tell Me More!
            </a>
          </div>
        </div>
    </div>
  </div>
