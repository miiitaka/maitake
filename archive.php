<?php
/**
 * The template for displaying archive pages
 *
 * @link       https://codex.wordpress.org/Template_Hierarchy
 * @package    WordPress
 * @subpackage Maitake
 * @since      1.0.0
 */
get_header(); ?>

<?php if ( have_posts() ) : ?>
	<section class="archive-wrapper">
		<header>
			<?php
				if ( is_author() ) {
					the_archive_title( '<h1 class="archive-title author-title">', '</h1>' );
				} elseif ( is_category() ) {
					the_archive_title( '<h1 class="archive-title category-title">', '</h1>' );
				} elseif ( is_date() ) {
					the_archive_title( '<h1 class="archive-title date-title">', '</h1>' );
				} elseif ( is_tag() ) {
					the_archive_title( '<h1 class="archive-title tag-title">', '</h1>' );
				} else {
					the_archive_title( '<h1 class="archive-title category-title">', '</h1>' );
				}
				the_archive_description( '<div class="archive-description">', '</div>' );
			?>
		</header>

		<ul class="layout-container-list">
			<?php while ( have_posts() ) : the_post(); ?>
				<li>
					<?php get_template_part( 'template-parts/content-home', get_post_format() ); ?>
				</li>
			<?php endwhile; ?>
		</ul>

		<?php get_template_part( 'template-parts/pagination' ); ?>
	</section>
<?php else : ?>
	<?php get_template_part( 'template-parts/content', 'none' ); ?>
<?php endif; ?>

<?php get_footer();
