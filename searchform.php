<?php
/**
 * Template for displaying search forms in Twenty Sixteen
 *
 * @package    WordPress
 * @subpackage Maitake
 * @since      1.0.0
 */
?>

<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span>Search for:</span>
		<input type="search" placeholder="Search" value="<?php echo get_search_query(); ?>" name="s">
	</label>
	<input type="submit" value="Search">
</form>