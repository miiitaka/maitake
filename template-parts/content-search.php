<?php
/**
 * The template part for displaying results in search pages
 *
 * @package    WordPress
 * @subpackage Maitake
 * @since      1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php the_title( sprintf( '<h2><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header>

	<?php if ( 'post' === get_post_type() ) : ?>
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
	<?php else : ?>
		<?php
			edit_post_link(
				sprintf(
					'Edit<span> "%s"</span>',
					get_the_title()
				),
				'<footer><span>',
				'</span></footer>'
			);
		?>
	<?php endif; ?>
</article>