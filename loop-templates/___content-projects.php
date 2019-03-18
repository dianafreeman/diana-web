<?php
/**
 * Project Category post items template.
 *
 * @package 
 */
global $post;
$size = 300;
$project_color = get_field('project_color');
$project_overlay = hex2rgba($project_color, 0.7);
?>
<!-- Card -->
<div class="card project-item ">
     <a class="portfolio-item" data-toggle="modal" data-target="#portfolio-modal-<?php echo esc_attr( ''.the_ID() ) ;?>">

  <div class="card-image" style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url( $post, $size ));?>)">
  <!-- Content -->
    <div 
    class="card-body text-white text-center"
    style="background-color: <?php echo esc_attr($project_overlay) ;?>;">


       <?php 
       if (!is_front_page()):
          $excerpt = get_the_excerpt('More...');
          if ( '' == $excerpt ) {
            // Some string manipulation performed
          };
        //  echo $excerpt; // Outputs the processed value to the page
        ?>
            <div class="card-text">

    <h3 class="card-title pt-2"> <?php the_title(); ?></h3>

      <a class="btn btn-secondary" href="<?php echo esc_url(the_permalink( $post ));?>"><i class="fas fa-clone left"></i> View Project</a>
          </div> <!-- end card-text --> 

      <?php endif; ?>

          <!-- Card footer -->
     <?php  
     if (!is_front_page()): ?>
  <div class="card-footer rounded-bottom bg-dark lighten-3 text-center pt-3">
        <?php diana_simple_entry_footer(); ?>
  </div>
      <?php else: ?>
<div class="card-footer front-page-card-footer">
        <h3 class="card-title pt-2"> <?php the_title(); ?></h3>
      </div>
   <?php   endif; ?>
  </div><!-- end card-body--> 
    </div><!-- end card image--> 
  </a>
</div>
<!-- Card -->

 
      