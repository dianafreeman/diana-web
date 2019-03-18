

<?php 
get_header();?>


<section id="front-page-header" class="front-page-section text-center">

<?php
if (is_front_page()){
  get_template_part('template-parts/front-page','header') ;
};
?>
</section>

<section id="portfolio" class="front-page-section bg-dark"> 
	  
<?php  get_template_part('template-parts/front-page','portfolio') ;
?>

</section>
<!-- About Section -->
<section id="about" class="front-page-section pt-5 pb-5 text-white ">
  <?php  get_template_part('template-parts/front-page','about') ;
?>
</section>

<!-- Services Section -->
<section id="services" class="front-page-section pt-5 pb-5">
  
  <?php  get_template_part('template-parts/front-page','services') ;?>

</section>
<!-- Contact Section -->
<section id="contact" class="front-page-section pt-5 pb-5">
  
  <?php  get_template_part('template-parts/front-page','contact') ;?>

</section>


<?php get_footer();?>

