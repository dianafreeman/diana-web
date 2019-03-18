<?php 
// The Template for displaying the portfolio section
?>
<!-- Portfolio Grid Section -->


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
      ?>

 <!-- Portfolio Modal 1 -->

        <div class="modal fade portfolio-modal" id="portfolio-modal-<?php echo esc_attr( the_ID() ) ;?>" tabindex="-1" role="dialog" aria-labelledby="thisModalLabel" aria-hidden="true">

        <div class="modal-dialog container bg-white mx-auto">
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            <i class="fa fa-3x fa-times"><span class="screen-reader-text">Close</span></i>
                </button>
          <div class="text-center modal-content">

            <div class="row">
              <div class="col-lg-8 mx-auto">
                <h2 id="project-title" class="text-secondary text-uppercase mb-0"><?php echo esc_html(get_the_title()) ?></h2>
                <hr class="stack-dark mb-5">
                <img class="img-fluid mb-5" src="<?php echo esc_url($featuredImageURL) ;?>" alt="<?php echo esc_attr(the_title()) ;?>" />
                <p class="mb-5"><?php the_content()?></p>
                
              </div>
            </div>
          </div>
        </div><!-- end .portfolio-modal-dialog bg-white --> 
      </div><!-- end #portfolio-modal-ID --> 


    <?php     endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>

