<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

    $is_project = true;
    $project_color = get_field('project_color');
    $project_overlay = hex2rgba($project_color, 0.8);
?>

<article <?php post_class();?> id="post-<?php the_ID();?>">
<!-- this .archive-row provides the color for the background, behind the image --> 
    <div tabindex="0" class="archive-row row pt-2 pb-2" style="background-color:<?php if ($project_overlay): echo esc_attr($project_overlay); elseif ($post_overlay): echo esc_attr($post_overlay); endif; ?>">

    <div class="card-footer project">
    <div class="entry-header">
<?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())),
'</a></h2>');?>
</div><!-- .entry-header -->
<div class="tech-terms">
    <?php get_template_part('term-technologies') ?>
</div><!-- end tech terms-->
        </div><!-- end card footer-->
        <div class="image-container offset-sm-6 col-sm-6"
            style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'large')); ?>">
        </div>
        <div class="background-overlay"
            style="background-color:<?php if ($project_overlay): echo $project_overlay; elseif ($post_overlay): echo $post_overlay; endif;?>"> </div>
       
        
    </div><!-- end .row -->
</article><!-- #post-## -->