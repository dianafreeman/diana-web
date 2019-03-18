<?php 
/* Template for displaying the header 
*
* This displays the top HTML element through the bottom of the NAV element.
* The template that follows this should be "Bottom Header"
*/

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'diana_simple_container_type' );
$construction = get_theme_mod( 'diana_simple_construction_mode' );
?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php wp_head(); ?>
  <?php if ($construction == true){ ?>
<div class="bg-warning" style="position:fixed; height: fit-content; width: 100%; z-index: 99;">
<p class="text-center" style="font-size: calc(12px + 1vw);"> Heads Up -- This site is under construction. Some functionalities are disabled </p>
</div>

  <style>
.fixed-top{ top: 50px !important; }
</style>
<?php }; ?>
</head>

<body <?php body_class(); ?>>

<div class="site" id="page">

  <!-- ******************* The Navbar Area ******************* -->
  <div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

    <a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'diana-simple' ); ?></a>

    <nav id="mainNav" class="navbar navbar-expand-md bg-dark fixed-top">

      <div class="container" >

          <!-- Your site title as branding in the menu -->
          <?php
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
          if ( has_custom_logo() ) { ?>


<!            <img style="width: 30vw; max-width: 250px;" src="<?php echo esc_url( $logo[0] ) ?>" /> 
     
              <h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

            <?php } else { ?>


              <h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

            <?php } ?>


      

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'diana-simple' ); ?>">
          <span class="navbar-toggler-icon"><i class="fas fa-bars fa-2x text-white"> </i></span>
        </button>

        <!-- The WordPress Menu goes here -->
        <?php wp_nav_menu(
          array(
            'theme_location'  => 'primary',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'navbarNavDropdown',
            'menu_class'      => 'navbar-nav ml-auto',
            'fallback_cb'     => '',
            'menu_id'         => 'main-menu',
            'depth'           => 2,
            'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
          )
        ); ?>
      </div><!-- .container -->

    </nav><!-- .site-navigation -->

  </div><!-- #wrapper-navbar end -->

    <!-- Header -->
    <?php if (!is_front_page()): 

      get_template_part('template-parts/page','header');
      endif;
            ?>
    
