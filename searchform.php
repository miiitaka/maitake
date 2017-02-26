<?php
/**
 * Template for displaying search forms
 *
 * @package    WordPress
 * @subpackage Maitake
 * @since      1.0.0
 */
?>

<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<input type="search" placeholder="Search" value="<?php echo get_search_query(); ?>" name="s">
	</label>
	<button type="submit"><span class="dashicons dashicons-search"></span></button>
</form>