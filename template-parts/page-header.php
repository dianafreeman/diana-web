
<header class="masthead bg-primary text-white text-center">
  <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div id="<?php echo esc_attr(the_ID()); ?>">
        <h3 id="" class="mb-4 sub-headings">

          <?php if (is_category()){
			echo esc_html(get_the_category()[0]->name.': '.get_the_title() );
			} else {
				echo esc_html(get_the_title() );
			}; ?>
        </h3>
      </div><!-- end final state --> 
    <h2 id="subHead-ques" class="font-weight-light mb-0">How can I help?</h2>
    </div>
  </div><!-- end container --> 
</header>
 <?php 
        endwhile;
      endif;
      ?>