<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

$testimonial_author = get_field('testimonial_author');
$testimonial_author_desc = get_field('testimonial_author_description');

?>
<div class="testimonial col-sm-6">
    <div class="card" style="width: 100%;">
        <div class="card-body">
            <h5 class="card-title"><?php the_excerpt() ;?></h5>

                <button class="btn btn-primary" type="button" data-toggle="collapse"
                    data-target="#full-testinmonial<?php echo esc_attr(get_the_ID())?>" aria-expanded="false"
                    aria-controls="#full-testinmonial<?php echo esc_attr(get_the_ID())?>">Show More</span>
                </button>

            <div class="collapse" id="full-testinmonial<?php echo esc_attr(get_the_ID());?>">
                <?php the_content() ?>

            </div>
        </div>
        <div class="card-footer">
            <p><?php echo esc_html($testimonial_author)?>,<br>
                <em><?php echo esc_html($testimonial_author_desc)?></em></p>
        </div>
    </div>
</div> 