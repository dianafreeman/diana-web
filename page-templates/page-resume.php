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

$bio_image = get_field( 'bio_image' );

?>


<div class="wrapper bg-primary" id="index-wrapper">

	<div class="container-fluid" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">

				<?php if ( have_posts() ) : ?>
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<article <?php post_class(); ?>  id="post-<?php the_ID(); ?>">
							<div class="page-section container">
								<div class="row">
								<div class="img-div col-sm-6 col-md-5">
								<img src="<?php echo esc_url($bio_image) ;?>" style="width: 100%"/>

								</div>
								<div class="col-sm-6 col-md-7 card pt-3">
									<h3>Diana M Steakley-Freeman</h3>
									<p class="text-lead">Javascript Generalist | Automation Specialist | Professional Nerd</p>
									<div id="badges" class="page-section">
									<img src="//logo.clearbit.com/adobe.com">
									<img src="//logo.clearbit.com/getbootstrap.com">

							</div>
							</div>
						

							<div class="page-section">
								
							</div>

							<div class="page-section entry-content">

								<?php the_content(); ?>

								<?php
								wp_link_pages( array(
									'before' => '<div class="page-links">' . __( 'Pages:', 'diana-simple' ),
									'after'  => '</div>',
								) );
								?>

							</div><!-- .entry-content -->
							
							<footer class="entry-footer">
								<?php edit_post_link( __( 'Edit', 'diana-simple' ), '<span class="edit-link">', '</span>' ); ?>
							</footer><!-- .entry-footer -->
						</article><!-- #post-## -->


					<?php endwhile; ?>
					<?php else : ?>

						<?php get_template_part( 'template-parts/content/content', 'none' ); ?>

					<?php endif; ?>
								</div> <!-- end row--> 
				</main><!-- #main -->
				<!-- The pagination component -->
				<?php diana_simple_pagination(); ?>
			</div><!-- .row -->
	</div><!-- #index-wrapper -->
	<?php get_footer(); ?>
