<?php 
global $post;


 if (is_category()){
$title = esc_html(get_the_category()[0]->name);
} else {
$title = esc_html(get_the_title($post));
};

$post_color = get_field("post_color");

?>
    <!-- ends in the FOOTER.PHP file -->
    <div id="masthead" class="page-masthead half-height text-white text-center bg-secondary">
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
    <main id="content">
