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
	<?php the_post_thumbnail( array( '350', 'auto' ), array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
	<header>
		<?php the_title( sprintf( '<h2><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header>
</section>