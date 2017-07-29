<?php
/**
 * Template for displaying search forms
 *
 * @package    WordPress
 * @subpackage Maitake
 * @since      1.0.0
 */
?>

<form method="GET" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<input type="search" placeholder="Search" value="<?php echo get_search_query(); ?>" name="s" aria-label="search">
	</label>
	<button type="submit" aria-label="search button"><span class="dashicons dashicons-search"></span></button>
</form>