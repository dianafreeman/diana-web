<?php 
$title = get_the_title($post);
$post_color = get_field("post_color");

?>
<main id="content">
    <!-- ends in the FOOTER.PHP file -->
    <div id="masthead" class="half-height text-white text-center bg-secondary">
        <div class="container-fluid header-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="typed-box">
                        <h2 class="display-4 typed-target"><?php echo esc_html($title) ;?></h2>

                    </div>
                </div><!-- end col-sm-12-->
            </div><!-- end row-->
            <div class="row">
            <?php diana_simple_posted_on(); ?>

            </div>
        </div><!-- end container -->
    </div>