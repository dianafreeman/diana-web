<?php
/**
 * Template Name: Resume Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'diana_simple_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="wrapper" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check and opens the primary div -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php if ( have_posts() ) : ?>
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<article <?php post_class(); ?>  id="post-<?php the_ID(); ?>">
							<header class="entry-header">

								<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

							</header><!-- .entry-header -->

							<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

							<div class="entry-content">

								<?php the_content(); ?>

								<?php
								wp_link_pages( array(
									'before' => '<div class="page-links">' . __( 'Pages:', 'diana-simple' ),
									'after'  => '</div>',
								) );
								?>

							</div><!-- .entry-content -->




							<div class="about-section">
								
						
							</div>
							<footer class="entry-footer">
								<?php edit_post_link( __( 'Edit', 'diana-simple' ), '<span class="edit-link">', '</span>' ); ?>

							</footer><!-- .entry-footer -->
						</article><!-- #post-## -->


					<?php endwhile; ?>

					<?php else : ?>

						<?php get_template_part( 'loop-templates/content', 'none' ); ?>

					<?php endif; ?>

				</main><!-- #main -->

				<!-- The pagination component -->
				<?php diana_simple_pagination(); ?>

				<!-- Do the right sidebar check -->
				<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

			</div><!-- .row -->

		</div><!-- #content -->

	</div><!-- #index-wrapper -->

	<?php get_footer(); ?>
