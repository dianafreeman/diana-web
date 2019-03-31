<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

$testimonial_author = get_field('testimonial_author');
$testimonial_author_desc = get_field('testimonial_author_description');

?>
<div class="testimonial col-md-6 mb-5">
    <div class="card" style="width: 100%;">
        <div class="card-body">
            <h5 class="card-title"><?php the_excerpt() ;?></h5>
                <button class="btn btn-primary show-more" type="button" data-toggle="collapse"
                    data-target="#full-testinmonial<?php echo esc_attr(get_the_ID())?>" aria-expanded="false"
                    aria-controls="#full-testinmonial<?php echo esc_attr(get_the_ID())?>">
                    <span class="screen-reader-text">Expand</span>
                    <i class="fa fa-chevron-left"></i>
                </button>

            <div class="collapse" id="full-testinmonial<?php echo esc_attr(get_the_ID());?>">
                <?php the_content() ?>

            </div>
        </div>
        <div class="card-footer">
            <p><?php echo esc_html($testimonial_author)?><br>
                <em><?php echo esc_html($testimonial_author_desc)?></em></p>
        </div>
    </div>
</div> 