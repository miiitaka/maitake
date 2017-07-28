<?php
/**
 * The template part for displaying content-home
 *
 * @package      WordPress
 * @subpackage   Maitake
 * @since        1.0.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		if ( ( function_exists( 'has_post_thumbnail' ) ) && ( has_post_thumbnail() ) ) {
			echo sprintf( '<figure><a href="%s">', esc_url ( get_permalink () ) );
			the_post_thumbnail ( 'full', array( 'alt' => the_title_attribute ( 'echo=0' ) ) );
			echo '</a></figure>';
		}
	?>
	<header>
		<?php
			esc_html( the_title( sprintf( '<h2 class="list-post-title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ) );
		?>
	</header>
	<footer>
		<time class="list-post-time"><?php the_time( get_option( 'date_format' ) . ' ' . get_option( 'time_format' ) ); ?></time>
	</footer>
	<?php if ( get_the_category() ) : ?>
		<div class="list-post-categories">
			<?php the_category( ' ' ); ?>
		</div>
	<?php endif; ?>
</article>