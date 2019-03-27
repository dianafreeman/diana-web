<?php
/**
 * Template Name: About Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// get_header('about');

$bio_image = get_field( 'bio_image' );
 get_template_part('template-parts/header/header-about');

?>
<div class="wrapper bg-primary" id="index-wrapper ">
    <div id="about" tabindex="-1">
        <div class="row">
            <?php if ( have_posts() ) : ?>
            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                <div class="page-section container-fluid">
                    <div class="container">
                        <div class="row pb-4">
                            <div class="col-md-6 text-light">
                                <h1 class="mb-4"> Hello There!</h1>

                                <h2 class="mt-2">I'm Diana.</h2>
                                <p class="lead"> A researcher by training, and a coder by trade; I’m on a mission to
                                    turn
                                    the the tools of tomorrow into more responsible tech, today. </p>

                                <p class="lead">
                                    For almost a decade, I've served individuals and organizations with comprehensive
                                    web services, ranging from technical mentorship, graphic and brand design, domain
                                    configuration, system automation, and web development.
                                </p>

                            </div>
                            <div class="col-sm-6 mx-auto text-center">
                                <a class="btn-group-light btn-group" target="_blank"
                                    href="<?php echo esc_url('https://drive.google.com/file/d/16As1shTO3tHK8GbnyNKCwtxLmpK68YLD/view?usp=sharing') ?>">
                                    <span class="btn about-btn"><i class="fas fa-code px-2"></i></span>
                                    <span class="btn about-btn">Download my Resumé</span>
                                </a>
                                <!-- <div class="btn-group-light btn-group">
                                <span class="btn about-btn"><i class="fas fa-graduation-cap px-2"></i></span>
                                <a class="btn about-btn">Download my CV</a>
                            </div> -->

                            </div> <!-- end row-->
                        </div><!-- end content container-->
                    </div> <!-- end page-section -->

                    <div class="page-section bg-light container-fluid">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="text-center mb-4"> Industry Experience </h1>

                                    <?php get_template_part('template-parts/prof-timeline'); ?>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div id="testimonials" class="page-section container-fluid pb-4 ">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="text-center text-light mb-4"> Testimonials </h1>

                            </div>
                        </div>
                        <div class="container">
                        <div class="testimonial-carousel row">

                            <?php
								$args = array(
										'post_type'=> 'post',
										'category_name' => 'testimonials'

									);
									
									$tests = new WP_Query($args);
                                    if ( $tests->have_posts() ) :
                                        while ( $tests->have_posts() ) : 
										$tests->the_post(); 
                                        get_template_part('template-parts/content/content','testimonial');

								endwhile;
							endif;

								?>
                        </div>
                    </div>
                    </div><!-- end container--> 
                    <!-- <div class="page-section container-fluid bg-light">
                    <div class="row">
                        <div class="col-sm-6 mx-auto">
                            <h1 class="text-uppercase">Tech</h1>


                        </div>

                    </div> row  -->
                    <!-- </div> end page section -->
            </article><!-- #post-## -->
            <?php endwhile; ?>
            <?php else : ?>
            <?php get_template_part( 'template-parts/content/content', 'none' ); ?>

            <?php endif; ?>
        </div> <!-- end row-->

        <!-- The pagination component -->
        <?php diana_simple_pagination(); ?>
    </div><!-- .row -->
</div><!-- #index-wrapper -->
<?php get_footer(); ?>