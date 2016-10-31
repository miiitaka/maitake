<?php
/**
 * The template part for displaying content
 *
 * @package      WordPress
 * @subpackage   Maitake
 * @since        1.0.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
			<span>Featured</span>
		<?php endif; ?>

		<?php the_title( sprintf( '<h2><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header>

	<?php the_excerpt(); ?>

	<?php the_post_thumbnail( 'post-thumbnail', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>

	<div>
		<?php
			the_content( sprintf(
				'Continue reading<span> "%s"</span>',
				get_the_title()
			) );

			wp_link_pages( array(
				'before'      => '<div><span>Pages:</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span>Page</span>',
				'separator'   => '<span>, </span>',
			) );
		?>
	</div>

	<footer>
		<?php
			edit_post_link(
				sprintf(
					'Edit<span class="screen-reader-text"> "%s"</span>',
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer>
</article>