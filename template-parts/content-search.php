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
		<?php
			the_title(
				sprintf(
					'<h2 class="search-result-post-title"><a href="%s">',
					esc_url( get_permalink() )
				),
				'</a></h2>'
			); ?>
	</header>

	<div class="search-result-post-excerpt">
		<?php the_excerpt(); ?>
	</div>

	<?php if ( is_user_logged_in() ) : ?>
		<footer>
			<?php
			edit_post_link(
				sprintf( 'Edit "%s"', get_the_title() ),
				'<p>',
				'</p>'
			);
			?>
		</footer>
	<?php endif; ?>
</article>