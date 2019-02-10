<?php 
get_header(); 

get_template_part('template-parts/page','header') ;
?>

<!-- Page Content Section -->
<section class="page-content">
  <div class="container">
    <?php if (is_category( 'projects' )){

      $icon_val = 'file-dark';

    }

      else if (is_category('technologies')){
      $icon_val = 'stack-dark';

      } else {
        $icon_val = 'user-dark' ;
      };?>
    <hr class="<?php echo esc_attr($icon_val) ;?> mb-5">
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
