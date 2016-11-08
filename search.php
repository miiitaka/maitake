<?php
/**
 * The template for displaying search results pages
 *
 * @package    WordPress
 * @subpackage Maitake
 * @since      1.0.0
 */
get_header(); ?>

<?php if ( have_posts() ) : ?>
	<section class="search-result">
		<header>
			<h1 class="search-result-title"><?php printf( 'Search Results for: %s', esc_html( get_search_query() ) ); ?></h1>
		</header>

		<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'search' );
			endwhile;

			get_template_part( 'template-parts/pagination' );
		?>
	</section>
<?php else : ?>
	<?php get_template_part( 'template-parts/content', 'none' ); ?>
<?php endif; ?>

<?php get_footer();