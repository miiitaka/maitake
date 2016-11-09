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
	<header>
		<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
	</header>

	<?php the_post_thumbnail( 'post-thumbnail', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>

	<div>
		<?php
			the_content();
			wp_link_pages( array(
				'before'      => '<div><span>Pages:</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span>Page</span>',
				'separator'   => '<span>, </span>',
			) );
		?>
	</div>

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

</article><!-- #post-## -->
