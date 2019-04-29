<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}


get_header();
get_template_part('template-parts/header/header', 'project');
$color = get_field("project_color");
$project_overlay = hex2rgba($color, 0.7);

?>


<div <?php post_class();?> id="project-<?php the_ID();?> single-wrapper">

    <div id="content" tabindex="-1">

        <div class="container-fluid">

            <div class="site-main">

                <?php while (have_posts()): the_post();?>

                <div class="row">

                    <div class="col-sm-6">
                        <img class="project-image"
                            src="<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'large')); ?>" />
                    </div>

                    <div class="col-sm-6 entry-content">

                        <?php the_content();?>

                        <?php
							wp_link_pages(array(
								'before' => '<div class="page-links mb-4 mt-4">' . __('Pages:', 'diana-simple'),
								'after' => '</div>',
							));
							?>

                    </div><!-- .entry-content -->

                </div><!-- row -->
                <div class="row pb-4" style="background-color: <?php echo esc_attr($project_overlay); ?>;">
                    <div class="col-sm-12 text-center">
                        <h2 class="text-uppercase mt-3 mb-3 tech-term-title text-light">Built With</h2>
                        <div class="tech-terms single-project mt-3 mb-3">
                            <?php get_template_part( 'term-technologies') ?>
                        </div><!-- end tech terms-->
                    </div>
                </div>
                <div class="row" style="background-color: <?php echo esc_attr($project_overlay); ?>;">


                        <?php diana_simple_post_nav();?>


                        <?php endwhile; // end of the loop. ?>
                        
                        
                        <div class="col-sm-12">
                            


                        <?php diana_simple_entry_footer();?>

                    </div>
                </div>


            </div><!-- end row -->
    </div><!-- .row -->

</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php get_footer();?>