<?php
/**
 * The template for displaying pages
 *
 * @link       https://codex.wordpress.org/Template_Hierarchy
 * @package    WordPress
 * @subpackage Maitake
 * @since      1.0.0
 */
get_header(); ?>

<?php
while ( have_posts() ) : the_post();
	get_template_part( 'template-parts/content', 'page' );

	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile;
?>

<?php get_footer();