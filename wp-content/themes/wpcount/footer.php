<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

		<div class="col-md-3 footer-grids fgd1">
		
			<?php if(is_active_sidebar('footer1')) : ?>
					<div class="footer-widget-area">
					<?php dynamic_sidebar('footer1'); ?>
					</div>
				<?php endif; ?>


		</div>
		<div class="col-md-3 footer-grids fgd2">
			
			<?php if(is_active_sidebar('footer2')) : ?>
					<div class="footer-widget-area">
					<?php dynamic_sidebar('footer2'); ?>
					</div>
				<?php endif; ?>
		</div>
		<div class="col-md-3 footer-grids fgd3">
			 
			<?php if(is_active_sidebar('footer3')) : ?>
					<div class="footer-widget-area">
					<?php dynamic_sidebar('footer3'); ?>
					</div>
				<?php endif; ?>
		</div>
		<div class="col-md-3 footer-grids fgd4">
			 
			<?php if(is_active_sidebar('footer4')) : ?>
					<div class="footer-widget-area">
					<?php dynamic_sidebar('footer4'); ?>
					</div>
				<?php endif; ?>
		</div>

		<div class="clearfix"></div>
		
		<div class="site-info">
			<P align="center">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wpcount' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'wpcount' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'wpcount Developed by %2$s.', 'wpcount' ), 'wpcount', '<a href="https://www.facebook.com/TechEngage/">TechEngage</a>' );
			?>
			</P>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
