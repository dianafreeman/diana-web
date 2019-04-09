<?php 
global $post;

$title = esc_html(get_the_title($post));
$project_color = get_field("project_color");
$project_link = get_field("project_link");
?>
<main id="content">
    <!-- ends in the FOOTER.PHP file -->
    <div id="masthead" class="half-height text-white text-center" style="background-color: <?php echo esc_attr($project_color) ;?>">
        <div class="container-fluid header-content">
            <div class="row">

                <div class="col-sm-12 <?php if ($project_link): echo 'col-md-9' ; endif; ?>">
                    <div class="typed-box">
                        <h2 class="display-4 typed-target"><?php echo esc_html($title) ;?></h2>

                    </div>
                </div><!-- end col-sm-12-->
                <?php if ($project_link):?> 
                <div class="col-md-2 mb-3 mt-3 text-center">
                <a class="btn btn-primary project-link" target="_blank" rel="noreferrer" href="<?php echo esc_url($project_link) ?>"><?php echo esc_html('Visit '.get_the_title()) ;?></a>
                </div>
                <?php endif; ?>
            </div><!-- end row-->
        </div><!-- end container -->
    </div>