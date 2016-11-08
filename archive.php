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
				the_archive_title( '<h1 class="archive-title">', '</h1>' );
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