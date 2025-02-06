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

	<header class="page-header post-header">
		<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
		<ul class="post-meta">
			<li>
				<time datetime="<?php the_modified_time( get_option( 'date_format' ) . ' ' . get_option( 'time_format' ) ); ?>" class="post-modified-time">Update date&nbsp;:&nbsp;<?php the_modified_time( get_option( 'date_format' ) . ' ' . get_option( 'time_format' ) ); ?></time>
				<time datetime="<?php the_time( get_option( 'date_format' ) . ' ' . get_option( 'time_format' ) ); ?>" class="post-time">Release date&nbsp;:&nbsp;<?php the_time( get_option( 'date_format' ) . ' ' . get_option( 'time_format' ) ); ?></time>
			</li>
			<?php if ( has_tag() ) : ?>
				<li class="post-tags"><?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?></li>
			<?php endif; ?>
		</ul>
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
			<?php edit_post_link( sprintf( 'Edit "%s"', get_the_title() ), '<p>', '</p>' ); ?>
		</footer>
	<?php endif; ?>
</article>