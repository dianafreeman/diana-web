<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_field( 'container_type' );
get_template_part('template-parts/header/header','page')

?>


<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

    <div class="row">

        <!-- Do the left sidebar check -->
        <?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

        <div class="site-main">

            <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content/content', 'page' ); ?>

            <?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

            <?php endwhile; // end of the loop. ?>

        </div><!-- #main -->

        <!-- Do the right sidebar check -->
        <?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

    </div><!-- .row -->

</div><!-- #content -->


<?php get_footer(); ?>