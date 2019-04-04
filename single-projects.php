<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}



get_header();
get_template_part( 'template-parts/header/header','project' ); 
?>


<div class="<?php post_class(); ?> " id="project-<?php the_ID(); ?> single-wrapper">

	<div id="content" tabindex="-1">

		<div class="row">

			<div class="site-main">

				<?php while ( have_posts() ) : the_post(); ?>

				<div class="row">

</header><!-- .entry-header -->
<div class="col-sm-6">
<img style="width: 100%;" src="<?php echo get_the_post_thumbnail_url( $post->ID, 'large' ); ?>" />
</div>
<div class="col-sm-6 entry-content">

	<?php the_content(); ?>

	<?php
	wp_link_pages( array(
		'before' => '<div class="page-links mb-4 mt-4">' . __( 'Pages:', 'diana-simple' ),
		'after'  => '</div>',
	) );
	?>

</div><!-- .entry-content -->


					<?php diana_simple_post_nav(); ?>

				
				<?php endwhile; // end of the loop. ?>

			</div><!-- #main -->
			<footer class="entry-footer">

<?php diana_simple_entry_footer(); ?>

</footer><!-- .entry-footer -->
</div><!-- end row --> 
</div><!-- end container--> 
		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php get_footer(); ?>
