<?php
/**
 * The template for displaying all technology terms.
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>
<?php if (!is_single()): ?>
    <p class="built-with">Built with:</p>

<?php endif; 
$tech_terms = get_the_terms(get_the_ID(), 'technologies');
            //print_r($tech_terms);
			if ( $tech_terms && ! is_wp_error( $tech_terms )) {
			foreach ($tech_terms as $term) {
                $icon_class = get_field('stack_logo',$term);
                if ($icon_class):
                echo '<a class="stack-logo '.$term->slug.'" data-toggle="tooltip" data-placement="bottom" aria-label="'.$term->name.'" data-title="'.$term->name.'"><i class="'.$icon_class.'"></i></a>';
                endif;
		};
    };    
?>
