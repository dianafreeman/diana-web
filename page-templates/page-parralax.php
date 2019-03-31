<?php
/**
 * Template Name: Parralax Sections Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$size = 'full';
global $post;
?>

<div class="parallax bg-parralax-grad" id="parralax-page-wrapper">

	<div class="bg-parallax parallax__layer parallax__layer--back" id="content" style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url( $post, $size ));?> )">

		<div class="row parralax__layer parallax__layer--base">

			<div class="col-md-8 offset-md-4 content-area mt-5 mb-4" id="primary">

				<main class="site-main offset-md-1 " id="main" role="main">
					<div class="entry-content">
	<?php if ( have_posts() ) : while ( have_posts() ) :
	 the_post();
 		the_content(); 
 	endwhile;
 endif;?>

						<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'diana-simple' ),
							'after'  => '</div>',
						) );
						?>

					</div><!-- .entry-content -->


				</div><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
