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

$project_color = get_field('project_color');
if (!$project_color) {
    $project_color = '#54a8a5';
} 
$project_overlay = hex2rgba($project_color, 0.8);

$post_type = get_post_type();
if ($post_type = 'project'):
    $is_project = true;
else :
    $is_project = false;
endif;
?>


<article <?php post_class();?> id="post-<?php the_ID();?>">
    <div tabindex="0" class="archive-row row pt-2 pb-2" style="background-color:<?php echo $project_overlay; ?>">
    <?php if (!$is_project): ?>

        <div class="entry-content col-sm-6">
            <div class="entry-header">
    <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())),
    '</a></h2>'); ?>
            </div><!-- .entry-header -->
            <div class="col">
        <?php the_excerpt();
            
        wp_link_pages(array(
            'before' => '<div class="page-links">' . __('Pages:', 'diana-simple'),
            'after' => '</div>',
        )); ?>

            </div><!-- .entry-content -->
        </div><!-- end col.sm.6-->
    <?php elseif ($is_project): ?>
    <div class="card-footer project">
    <div class="entry-header">

<?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())),
'</a></h2>');?>
</div><!-- .entry-header -->
<div class="tech-terms">
    <p class="small muted">This project uses: </p>
<?php $tech_terms = get_the_terms(get_the_ID(), 'technologies');
            //print_r($tech_terms);
			if ( $tech_terms && ! is_wp_error( $tech_terms )) {
			foreach ($tech_terms as $term) {
                $icon_class = get_field('stack_logo',$term);
                if ($icon_class):
                echo '<a class="stack-logo" data-toggle="tooltip" data-placement="top" title="'.$term->name.'"><i class="'.$icon_class.'"></i></a>';
                endif;
		};
    };    
endif; // end projet loop loop
?>
</div><!-- end tech terms-->
        </div><!-- end card footer-->
        <div class="image-container offset-sm-6 col-sm-6"
            style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'large')); ?>">
        </div>
        <div class="background-overlay"
            style="background-color:<?php if ($project_color): echo $project_overlay;endif;?>"> </div>
       
        
    </div><!-- end .row -->
</article><!-- #post-## -->