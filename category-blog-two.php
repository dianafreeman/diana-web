<?php
/**
 * The template for displaying all category posts.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'diana_simple_container_type' );
?>

					<header class="page-header">
						<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					</header><!-- .page-header -->


<div class="wrapper" id="category-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<div class="site-main" id="category">
				<div class="owl-carousel owl-theme">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content/content', 'projects' ); ?>

					
				<?php endwhile; // end of the loop. ?>
				</div>
			</div><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php get_footer(); ?>
