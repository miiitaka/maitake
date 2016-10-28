<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package    WordPress
 * @subpackage Maitake
 * @since      1.0.0
 */
get_header(); ?>

<?php
if ( have_posts() ) :
	while ( have_posts() ) : the_post();
		get_template_part( 'template-parts/content', 'single' );

		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}

		if ( is_singular( 'attachment' ) ) {
			the_post_navigation( array(
				'prev_text' => 'Published in %title', 'Parent post link'
			) );
		} elseif ( is_singular( 'post' ) ) {
			the_post_navigation( array(
				'next_text' => 'Next post:%title',
				'prev_text' => 'Previous post:%title',
			) );
		}
	endwhile;
endif;
?>

<?php get_footer();