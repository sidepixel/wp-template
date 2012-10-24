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


			<nav id="footNav" role="navigation">
				<h4 class="assistive-text"><?php _e( 'Footer menu', 'template' ); ?></h4>
				<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>
				<?php wp_nav_menu( array( 'theme_location' => 'secondery' ) ); ?>
			</nav><!-- #siteNav -->

			<div id="site-generator">
				<?php _e( 'Proudly powered by ', 'template'  ); ?><a href="<?php echo esc_url( __( 'http://wordpress.org/?utm_source=sidepixel_seeding&utm_medium=wp_sketch&utm_campaign=sidepixel_wordpress_development', 'template' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'template' ); ?>" rel="generator"><?php printf( 'WordPress' ); ?></a> and the Sketch by <a href="http://sidepixel.com/?utm_source=sidepixel_seeding&utm_medium=wp_sketch&utm_campaign=sidepixel_wordpress_development">SidePixel</a>.
			</div>
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
