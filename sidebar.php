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
	<div class="layout-sidebar">
		<?php do_action( 'layout-sidebar-top-hook' ); ?>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
		<?php do_action( 'layout-sidebar-bottom-hook' ); ?>
	</div>
<?php endif; ?>