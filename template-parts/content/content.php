<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */


$project_color = get_field('project_color');
if ($project_color){
   $project_overlay = hex2rgba($project_color, 0.8);
}

?>


<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<div class="archive-row row pt-2 pb-2" style="background-color:<?php echo $project_overlay ; ?>">

<div class="entry-content col-sm-6">
	<div class="entry-header" >

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
		'</a></h2>' ); ?>
	</div><!-- .entry-header -->
	<div class="col">
	



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
</div><!-- end col.sm.6-->


<div class="image-container offset-sm-6 col-sm-6" style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url( $post->ID, 'large' )); ?>"> </div>
<div class="background-overlay" style="background-color:<?php if ($project_color): echo $project_overlay; endif; ?>"> </div>

</div><!-- end .row --> 
</article><!-- #post-## -->
