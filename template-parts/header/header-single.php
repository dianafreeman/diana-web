<?php 
global $post;
$title = get_the_title($post);
$post_color = get_field("post_color");
$featured_img_url = get_the_post_thumbnail_url( $post, 'full' );
?>
<main id="content">
    <!-- ends in the FOOTER.PHP file -->
    <div id="masthead" class="single text-white text-center" style="background-image: url(<?php echo esc_url($featured_img_url); ?>)" >
        <div class="container-fluid header-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="typed-box">
                        <h2 class="display-4 typed-target"><?php echo esc_html($title) ;?></h2>

                    </div>
                </div><!-- end col-sm-12-->
            </div><!-- end row-->
            <div class="row bg-secondary">
            <div class="col-sm-12 mb-3 mt-3 text-left">
            <?php diana_simple_posted_on();?><br /> 
            <?php echo do_shortcode('[rt_reading_time postfix="min read" ]');?>
            </div> 
        
            </div>
        </div><!-- end container -->
    </div>