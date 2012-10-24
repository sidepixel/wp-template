<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage WP_Theme
 * @since Wp Theme 1.0
 */
?>

	</div><!-- #main -->

	<footer id="footer" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<?php //do_action( 'template_credits' ); ?>
				<?php _e( 'Proudly powered by ', 'template'  ); ?><a href="<?php echo esc_url( __( 'http://wordpress.org/?utm_source=sidepixel_seeding&utm_medium=wp_sketch&utm_campaign=sidepixel_wordpress_development', 'template' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'template' ); ?>" rel="generator"><?php printf( 'WordPress' ); ?></a> and the Sketch by <a href="http://sidepixel.com/?utm_source=sidepixel_seeding&utm_medium=wp_sketch&utm_campaign=sidepixel_wordpress_development">SidePixel</a>.
			</div>
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
