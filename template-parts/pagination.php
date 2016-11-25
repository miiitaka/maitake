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
	'before_page_number' => '',
	'next_text'          => 'Next',
	'prev_text'          => 'Prev',
	'show_all'           => __return_true(),
	'screen_reader_text' => 'Post Navigation'
) );