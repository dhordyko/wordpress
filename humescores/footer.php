<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Humescores
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer"  role="contentinfo">
		<div class="contact-container">
			<div class="contact-container-col1">
				<div class="contact-mail">
					<h1>Newsletter</h1>
				 <?php dynamic_sidebar( 'footer_area_one' ); ?>
					<hr class="mail-horizontal-line">
				</div>

				<div class="contact-form">
					<div class="contact-form-address">
						<img src= "<?php bloginfo('template_directory')?>/assets/img/pin.svg" alt="" class="pin-image" />
						 <?php dynamic_sidebar( 'footer_area_two' ); ?>
					</div>
					<div class="contact-form-picture">
					 <?php dynamic_sidebar( 'footer_area_four' ); ?>	
					</div>
				</div>
			</div>
			<div class="contact-container-col2">
				<div class="picture"></div>
				<div class="contact-tel">
				<div class="inner-contaienr">
				<p></p>
				<?php dynamic_sidebar( 'telephone' ); ?>	
				</div>
				</div>
			</div>
		
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
