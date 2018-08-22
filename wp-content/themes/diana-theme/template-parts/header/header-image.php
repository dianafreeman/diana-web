<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="custom-header">

		<div class="custom-header-media">
			<?php the_custom_header_markup(); ?>
		</div>
	<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>

</div><!-- .custom-header -->
<?php

if ( is_active_sidebar( 'header-widget' ) ) : ?>
    <div id="header-widget-area" class="hw-widget widget-area" role="complementary">
	<?php dynamic_sidebar( 'header-widget' ); ?>
    </div>
	
<?php endif; ?>