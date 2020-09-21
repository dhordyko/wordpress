<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Humescores
 */

get_header(); ?>
<div class="main-restomenu-container">
<aside class="sidebar">

 <?php dynamic_sidebar( 'sidebar_menu' ); ?>
</aside>

	

<div class="offer-section-title-container">
    <div class="icon-left"><img src= "<?php bloginfo('template_directory')?>/assets/img/leaf-left.svg" alt="" /></div>
    <h1>Stary Browar Rzeszowski</h1>
    <div class="icon-right"><img src= "<?php bloginfo('template_directory')?>/assets/img/leaf-right.svg" alt="" /></div>
</div>

 <?php dynamic_sidebar( 'menu_area_one' ); ?>	

	
	<?php wp_reset_postdata(); ?>



</div>

	

<?php get_footer(); ?>