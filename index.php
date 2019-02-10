<?php 
get_header(); 

get_template_part('template-parts/page','header') ;

  ?>
  
    <!-- Page Content Section -->
    <section class="page-content">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php the_content();?>
        <?php 
      endwhile;
    endif;
?>
        </div>
      </div>
    </div>
  </section>
    <?php get_footer(); ?>
