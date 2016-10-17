<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package    WordPress
 * @subpackage Maitake
 * @since      1.0.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<aside class="layout-sidebar">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside>
<?php endif; ?>