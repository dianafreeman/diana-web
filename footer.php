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

<?php endif; ?>

<div class="bg-secondary" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">
<div class="row">
	<div class="col-md-4 text-center">
	<?php echo do_shortcode('[footer-social]') ;?>
	</div>
	<div class="col-md-4 text-center">

</div>

<div class="col-md-4 text-center">

</div>

</div>
		<div class="row bg-dark-accent">

			<div class="col-md-12 text-center ">

				<footer class="site-footer" id="colophon">

					<div class="site-info mb-4 mt-4">

						<?php diana_simple_site_info(); ?>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

