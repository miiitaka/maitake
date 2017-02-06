<?php
/**
 * The template used for displaying page content
 *
 * @package    WordPress
 * @subpackage Maitake
 * @since      1.0.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		if ( ( function_exists( 'has_post_thumbnail' ) ) && ( has_post_thumbnail() ) ) {
			echo '<figure class="post-thumbnail">';
			the_post_thumbnail ( 'full', array( 'alt' => the_title_attribute ( 'echo=0' ) ) );
			echo '</figure>';
		}
	?>

	<header class="page-header">
		<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
	</header>

	<?php do_action( 'layout-post-hook' ); ?>

	<div class="page-content">
		<?php
			the_content();
			get_template_part( 'template-parts/link-pages' );
		?>
	</div>

	<?php if ( is_user_logged_in() ) : ?>
		<footer class="page-footer">
			<?php
				edit_post_link( sprintf( 'Edit "%s"', get_the_title() ), '<p>', '</p>' );
			?>
		</footer>
	<?php endif; ?>
</article>