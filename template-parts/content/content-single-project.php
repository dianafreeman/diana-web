<?php
/**
 * Single post project template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<div class="container">
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

	<footer class="entry-footer">

		<?php diana_simple_entry_footer(); ?>

	</footer><!-- .entry-footer -->
	</div><!-- end row --> 
	</div><!-- end container--> 
</article><!-- #post-## -->
