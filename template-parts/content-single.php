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
		<p>
			<time class="post-modified-time">最終更新日&nbsp;:&nbsp;<?php the_modified_time( get_option( 'date_format' ) ); ?></time>
			<time class="post-time">記事公開日&nbsp;:&nbsp;<?php the_time( get_option( 'date_format' ) ); ?></time>
		</p>
	</header>

	<?php
	if ( ( function_exists( 'has_post_thumbnail' ) ) && ( has_post_thumbnail() ) ) {
		echo sprintf( '<figure><a href="%s">', esc_url ( get_permalink () ) );
		the_post_thumbnail ( 'full', array( 'alt' => the_title_attribute ( 'echo=0' ) ) );
		echo '</figure>';
	}
	?>

	<div>
		<?php
			the_content();

			wp_link_pages( array(
				'before'      => 'Pages:',
				'after'       => '',
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