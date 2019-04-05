<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */


 /*
$accent-one: #F27B24;
$accent-two: #CF2C44;
$accent-three: #2E3D57;
$accent-four: #A99D8B;
 */


$post_color = get_field('post_color');
$post_overlay = hex2rgba($post_color, 0.5);

?>


<article <?php post_class();?> id="post-<?php the_ID();?>">
<!-- this .archive-row provides the color for the background, behind the image --> 
    <div tabindex="0" class="archive-row row pt-2 pb-2 bg-secondary" data-toggle="collapse">

    <div class="entry-header">
    <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())),
'</a></h2>'); ?>
    </div><!-- .entry-header -->
    <div class="card-footer">

        
            
        <?php the_excerpt();
            
        wp_link_pages(array(
            'before' => '<div class="page-links">' . __('Pages:', 'diana-simple'),
            'after' => '</div>',
        )); ?>

     </div><!-- end card footer--> 
    <div class="image-container"
            style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'large')); ?>">
        </div><!-- end .image-container--> 
 
    
        <div class="background-overlay"
            style="background-color:<?php if ($post_overlay): echo $post_overlay; endif;?>"> </div>
       
    </div><!-- end .row -->
</article><!-- #post-## -->