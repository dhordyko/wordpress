<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Humescores
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'humescores' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-background"></div>
		<div class="container">
					<nav id="site-navigation" class="main-navigation" role="navigation" >
		
			<?php wp_nav_menu( array( 'menu' => 'right-menu', 'menu_id' => 'right-menu' ) ); ?>
             <div class="logo-container">
					
<div class="logo">
<?php if( has_custom_logo() ) : ?>
					<div class="th-site-logo">
						<?php the_custom_logo(); ?>
					</div><!-- .th-site-logo -->
				<?php endif; ?>


  </div>



  </div>
  <?php wp_nav_menu( array( 'menu' => 'left-menu', 'menu_id' => 'left-menu' ) ); ?>
		
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'humescores' ); ?></button> -->
		
		</nav><!-- #site-navigation -->
		</div>
	<?php the_custom_header_markup(); ?>
		


	</header><!-- #masthead -->

	<div id="content" class="site-content">

