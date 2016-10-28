<?php
/**
 * The template part for displaying content-home
 *
 * @package      WordPress
 * @subpackage   Maitake
 * @since        1.0.0
 */
?>
<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		if ( ( function_exists( 'has_post_thumbnail' ) ) && ( has_post_thumbnail() ) ) {
			echo sprintf( '<figure><a href="%s">', esc_url ( get_permalink () ) );
			the_post_thumbnail ( 'full', array( 'alt' => the_title_attribute ( 'echo=0' ) ) );
			echo '</figure>';
		}
	?>
	<header>
		<?php
			the_title( sprintf( '<h2 class="list-post-title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' );
		?>
	</header>
	<footer>
		<p class="list-post-time">
			<time><?php the_time( get_option( 'date_format' ) ); ?></time>
		</p>
	</footer>
</section>