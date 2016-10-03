<?php
/**
 * The template part for displaying single posts
 *
 * @package    WordPress
 * @subpackage Maitake
 * @since      1.0.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php the_title( '<h1>', '</h1>' ); ?>
	</header>

	<div>
		<?php
			the_content();

			wp_link_pages( array(
				'before'      => 'Pages:',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => 'Page',
				'separator'   => ',',
			) );

			if ( '' !== get_the_author_meta( 'description' ) ) {
				get_template_part( 'template-parts/biography' );
			}
		?>
	</div>

	<footer>
		<?php
			edit_post_link(
				sprintf(
					'Edit<span> "%s"</span>',
					get_the_title()
				),
				'<span>',
				'</span>'
			);
		?>
	</footer>
</article>