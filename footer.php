<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'diana_simple_container_type' );
?>


<?php if ( is_active_sidebar( 'footerfull' ) ) : ?>

<!-- ******************* The Footer Full-width Widget Area ******************* -->

<div class="container-fluid " id="wrapper-footer-full">

    <div id="footer-full-content" tabindex="-1">

        <div class="row bg-gradient-secondary pt-5 pb-4">
            <?php dynamic_sidebar( 'footerfull' ); ?>

        </div>

    </div>

</div><!-- #wrapper-footer-full -->

<?php else: ?>

<div class="bg-secondary container-fluid pb-4" id="wrapper-footer">
        <div class="row mb-4">
          <div class="col-md-4 mb-2 mb-lg-0 text-center">
            <h4 class="text-uppercase mb-4 text-light">Like My Work?</h4>
            <?php echo do_shortcode('[badge from="buymeacoffee"]') ?>
          </div><!-- end col --> 
          <div class="col-md-4 mb-2 mb-lg-0 text-center">
            <h4 class="text-uppercase mb-4 text-light">On the Web</h4>
        

            <?php echo do_shortcode('[solid-social]') ;?>

          </div><!-- end col --> 
          <div class="col-md-4 mb-2 mb-lg-0 text-center">
            <h4 class="text-uppercase mb-4 text-light">You know the drill.</h4>
              <a href="<?php echo esc_url(get_permalink( get_page_by_title( 'Privacy Policy' ) )); ?>" >Privacy Policy</a>.</p>
          </div><!-- end col --> 
        </div><!-- end row --> 
        </div><!-- container end -->

<?php endif; ?>

<div class="container-fluid">
<div class="row bg-dark">
        
        <div class="col-sm-12 mb-4 mt-4">

<p class="text-light small text-center">Diana M. Steakley-Freeman &copy; 2019 | All Rights Reserved. 
<br><a role="button" tabindex="0"
    class="text-light muted"
    href="<?php echo esc_url(get_permalink( get_page_by_title( 'Privacy Policy' ) )); ?> ">
    Privacy Policy</a> <br> Proudly Powered by <a class="text-light muted" target="_blank" rel="noopener" href="<?php echo esc_url('https://wordpress.org') ?>">WordPress</a></p>
</div>
</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->
</main> <!-- we also need this extra #main tag--> 
<?php wp_footer(); ?>

</body>

</html>