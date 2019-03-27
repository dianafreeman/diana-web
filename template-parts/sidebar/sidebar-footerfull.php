<?php
/**
 * Sidebar setup for footer full.
 *
 * @package understrap
 */

$container   = get_theme_mod( 'diana_simple_container_type' );

?>

<?php if ( is_active_sidebar( 'footerfull' ) ) : ?>

	<!-- ******************* The Footer Full-width Widget Area ******************* -->

	<div class="container-fluid bg-gradient-secondary" id="wrapper-footer-full">

		<div id="footer-full-content" tabindex="-1">

			<div class="row">

				<?php dynamic_sidebar( 'footerfull' ); ?>

			</div>

		</div>

	</div><!-- #wrapper-footer-full -->

<?php endif; ?>
