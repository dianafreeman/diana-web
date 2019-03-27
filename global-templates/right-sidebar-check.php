<?php
/**
 * Right sidebar check.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

</div><!-- #closing the primary container from /global-templates/left-sidebar-check.php -->

<?php $sidebar_pos = get_theme_mod( 'diana_simple_sidebar_positio' ); ?>

<?php if ( 'right' === $sidebar_pos || 'both' === $sidebar_pos ) : ?>

	<?php get_template_part( 'template-parts/sidebar/sidebar', 'right' ); ?>

<?php endif; ?>
