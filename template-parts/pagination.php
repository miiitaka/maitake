<?php
/**
 * The template part for displaying a Pagination
 *
 * @package    WordPress
 * @subpackage Maitake
 * @since      1.0.0
 */
?>
<?php
the_posts_pagination( array(
	'prev_text'          => 'Prev',
	'next_text'          => 'Next',
	'before_page_number' => '',
	'screen_reader_text' => 'Post Navigation'
) );