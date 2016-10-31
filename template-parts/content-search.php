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

	<div>
		<?php the_excerpt(); ?>
	</div>

	<footer>
		<p><time><?php the_time( get_option( 'date_format' ) ); ?></time></p>
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