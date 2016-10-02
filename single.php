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
while ( have_posts() ) : the_post();
	get_template_part( 'template-parts/content', 'single' );

	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}

	if ( is_singular( 'attachment' ) ) {
		the_post_navigation( array(
			'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
		) );
	} elseif ( is_singular( 'post' ) ) {
		the_post_navigation( array(
			'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentysixteen' ) . '</span> ' .
				'<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ' .
				'<span class="post-title">%title</span>',
			'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentysixteen' ) . '</span> ' .
				'<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ' .
				'<span class="post-title">%title</span>',
		) );
	}
endwhile;
?>

<?php get_footer();