<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

$testimonial_author = get_field('testimonial_author');
$testimonial_author_desc = get_field('testimonial_author_description');
?>

<!--Card-->
<div class="card testimonial-card" style="min-width: 300px; width: 40vw; margin-right: 10px;">
    <!--Background color-->
    <div class="card-up info-color"></div>
    <div class="card-body">
        <!--Name-->
        <h4 class="font-weight-bold mb-4"><?php echo esc_html($testimonial_author)?></h4>
        <hr>
        <!--Quotation-->
        <p class="dark-grey-text mt-4 inline-icon"><i class="fas fa-quote-left pr-2"></i><?php the_excerpt() ;?></p>
        
       <button class="btn btn-primary btn-round show-more" type="button" data-toggle="collapse"
            data-target="#full-testinmonial<?php echo esc_attr(get_the_ID())?>" aria-expanded="false"
            aria-controls="#full-testinmonial<?php echo esc_attr(get_the_ID())?>"
            >
            <div class="tooltip-box" data-toggle="tooltip" data-placement="left" title="Expand">
            <span class="screen-reader-text">Expand</span>
            <i class="fa fa-chevron-left"></i>
</div>
        </button>

        <div class="collapse full-content" id="full-testinmonial<?php echo esc_attr(get_the_ID());?>">
            <?php the_content() ?>

        </div>

    </div>
</div>
<!--Card-->