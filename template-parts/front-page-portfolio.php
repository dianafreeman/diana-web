<?php 
// The Template for displaying the portfolio section
?>
<!-- Portfolio Grid Section -->
  <div class="container">
    <h2 class="text-center text-uppercase mb-0">Projects</h2>
    <hr class="file-dark mb-5">
    <div class="row">

      <?php 
      $args = array(
        'post_type'=> 'post',
        'category_name' => 'projects'

      );
      
      $projects = new WP_Query($args);
      if ( $projects->have_posts() ) :
       while ( $projects->have_posts() ) : 
        $projects->the_post(); 
        $the_post_id = $projects->the_ID();
        $featuredImageURL = get_the_post_thumbnail_url( $projects->the_ID(), 'medium');?>

        <div class="portfolio-item col-md-6 col-lg-4">
        <div class="background-image" style="background-image: url(<?php echo esc_url($featuredImageURL) ;?>">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-<?php echo esc_attr( ''.the_ID() ) ;?>">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fa fa-search-plus fa-3x"></i>
              </div>
            </div>
          </a>
        </div>
</div>
        <!-- Portfolio Modal 1 -->
        <div class="portfolio-modal mfp-hide" id="portfolio-modal-<?php echo esc_attr( the_ID() ) ;?>">

        <div class="portfolio-modal-dialog bg-white">
          <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
            <i class="fa fa-3x fa-times"></i>
          </a>
          <div class="container text-center">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <h2 class="text-secondary text-uppercase mb-0"><?php echo esc_html(get_the_title()) ?></h2>
                <hr class="stack-dark mb-5">
                <img class="img-fluid mb-5" src="<?php echo esc_url($featuredImageURL) ;?>" alt="<?php echo esc_attr(the_title()) ;?>" />
                <p class="mb-5"><?php the_content()?></p>
                <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                  <i class="fa fa-close"></i>
                Close Project</a>
              </div>
            </div>
          </div>
        </div><!-- end .portfolio-modal-dialog bg-white --> 
      </div><!-- end #portfolio-modal-ID --> 

    <?php     endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>

