

<?php 
get_header();
get_template_part('template-parts/header/header','front-page')
?>

<section id="portfolio" class="front-page-section bg-dark"> 
	  
<?php  get_template_part('template-parts/front-page/front-page','portfolio') ;?>
</section>

<div class="parallax-background">
<!-- About Section -->
<section id="about" class="front-page-section text-white ">
  <?php  get_template_part('template-parts/front-page/front-page','about') ;
?>
</section>
</div>

<!-- Contact Section -->
<section id="contact" class="front-page-section pt-5 pb-5 bg-dark">
  <?php  get_template_part('template-parts/front-page/front-page','contact') ;?>
</section>
<?php get_footer();?>

