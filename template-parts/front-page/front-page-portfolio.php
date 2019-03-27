<?php 
// The Template for displaying the portfolio section
?>
<!-- Portfolio Grid Section -->
<div class="container-fluid mt-4 mb-4"> 
      <h2 class="display-3 text-light">Projects</h2>

      <div class="portfolio-container">
        <div class="portfolio-carousel">


      <?php 
      $args = array(
        'post_type'=> 'projects'

      );
      
      $projects = new WP_Query($args);
      if ( $projects->have_posts() ) :
       while ( $projects->have_posts() ) : 
        $projects->the_post(); 
       
        ?>
        

          <?php get_template_part('template-parts/front-page/content-front-page','projects');?>



    <?php     endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
       </div><!-- end .carousel --> 
       </div><!-- end .row --> 
</div><!-- end .container --> 
