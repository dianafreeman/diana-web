<?php 
global $post;

$title = esc_html(get_the_title($post));
$project_color = get_field("project_color");
?>
<main id="content">
    <!-- ends in the FOOTER.PHP file -->
    <div id="masthead" class="half-height text-white text-center" style="background-color: <?php echo esc_attr($project_color) ;?>">
        <div class="container-fluid header-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="typed-box">
                        <h2 class="display-4 typed-target"><?php echo esc_html($title) ;?></h2>

                    </div>
                </div><!-- end col-sm-12-->
            </div><!-- end row-->
        </div><!-- end container -->
    </div>