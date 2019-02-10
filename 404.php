<?php 
get_header(); 

get_template_part('template-parts/error','header') ;

  ?>
  
    <!-- Page Content Section -->
    <section class="page-content">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
          <h2>Aw man!</h2>
          <p> The page you are looking for doesn't exist.</p>
        <a class="btn btn-primary" href="<?php echo esc_url(get_site_url() ) ;?>"> Take me back to the homepage.</a>
      </div>
      </div>
    </div>
  </section>
    <?php get_footer();?>
