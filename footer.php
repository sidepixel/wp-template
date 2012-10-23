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
				<?php do_action( 'template_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'template' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'template' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'template' ), 'WordPress' ); ?></a>
			</div>
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
