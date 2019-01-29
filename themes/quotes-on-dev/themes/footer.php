<?php
/**
 * The template for displaying the footer.
 *
 * @package QOD_Starter_Theme
 */
?>
			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
				<div class="site-info">
					<span>Brought to you by <a href="<?php echo esc_url( 'https://redacademy.com' ); ?>" target="_blank">RED Academy</a></span>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
