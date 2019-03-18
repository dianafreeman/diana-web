<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<div class="row bg-accent pt-2 pb-2">
	<header class="entry-header col-sm-5">

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
		'</a></h2>' ); ?>
	</header><!-- .entry-header -->
	<div class="col-sm-7">
	

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		<?php
		the_excerpt();
		?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'diana-simple' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->
</div><!-- end col.sm.4-->
<div class="col-sm-12">
	<footer class="entry-footer">


		<?php if ( 'post' == get_post_type() ) : ?>

			<div class="entry-meta">
				<?php diana_simple_posted_on(); ?>
			</div><!-- .entry-meta -->

		<?php endif; ?>


	</footer><!-- .entry-footer -->
</div>
</div><!-- end .row --> 
</article><!-- #post-## -->
