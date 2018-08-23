<?php
/**
 * The main template file.
 *
 * Used to display the homepage when home.php doesn't exist.
 */
?>
<?php get_header(); ?>
	<div id="page" class="home-page">
		<div class="article">
			<?php if ( have_posts() ) :
				$diana_theme_full_posts = get_theme_mod('diana_theme_full_posts');
				while ( have_posts() ) : the_post();
					diana_theme_archive_post();
				endwhile;
				diana_theme_post_navigation();
			endif; ?>
		</div><!-- .article -->
		<?php get_sidebar(); ?>
		</div>
		<?php get_footer(); ?>
