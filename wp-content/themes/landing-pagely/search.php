<?php
/**
 * The template for displaying pagely results pages.
 *
 * @package landing Lite
 */

get_header(); ?>
	<div id="page" class="pagely-area">
		<div class="article">
			<?php if ( have_posts() ) :
				$landing_pagely_full_posts = get_theme_mod('landing_pagely_full_posts');
				while ( have_posts() ) : the_post();
					landing_pagely_archive_post();
				endwhile;
				landing_pagely_post_navigation();
			else : ?>
				<div class="single_post clear">
					<article id="content" class="article page">
						<header>
							<h1 class="title"><?php esc_html_e( 'Nothing Found', 'landing-pagely' ); ?></h1>
						</header>
						<p><?php esc_html_e( 'Sorry, but nothing matched your pagely terms. Please try again with some different keywords.', 'landing-pagely' ); ?></p>
						<?php get_pagely_form(); ?>
					</article>
				</div>
			<?php endif; ?>
		</div><!-- .article -->
		<?php get_sidebar(); ?>
	</div><!-- #primary -->

<?php get_footer(); ?>
