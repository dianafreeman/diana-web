<?php 
// The Template for displaying the portfolio section
?>
<!-- Portfolio Grid Section -->
<div class="container-fluid"> 
      <h2 class="display-3 text-light">Projects</h2>

      <div class="portfolio-container">
        <div class="portfolio-carousel">


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
        $featuredImageURL = get_the_post_thumbnail_url( $projects->the_ID(), 'full');
        $project_color = get_field('project_color');

        ?>
        
        <div class="front-page-portfolio-item">

          <?php get_template_part('loop-templates/content','projects');?>


      </div><!-- end portfolio item-->

    <?php     endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>
       </div><!-- end .carousel --> 
       </div><!-- end .row --> 
</div><!-- end .container --> 
