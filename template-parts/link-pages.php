<?php
/**
 * The template part for displaying a Link Pages
 *
 * @package    WordPress
 * @subpackage Maitake
 * @since      1.0.0
 */
?>
<?php
wp_link_pages( array(
	'before'           => '<nav class="post-link-pages">',
	'after'            => '</nav>',
	'link_before'      => '<span>',
	'link_after'       => '</span>',
	'next_or_number'   => 'number',
	'separator'        => '',
	'nextpagelink'     => 'Next',
	'previouspagelink' => 'Prev',
	'pagelink'         => '%'
) );