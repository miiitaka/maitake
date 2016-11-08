<?php
/**
 * The template for displaying the footer
 *
 * @package    WordPress
 * @subpackage Maitake
 * @since      1.0.0
 */
?>
			</main>
		</div>
		<?php get_sidebar(); ?>
	</div>

	<div class="layout-footer">
		<footer class="layout-footer-global">
			<span>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
			</span>
			<span>
				<a href="https://wordpress.org/">Proudly powered by WordPress</a>
			</span>
		</footer>
	</div>
	<?php wp_footer(); ?>
</body>
</html>