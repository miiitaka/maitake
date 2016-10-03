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

	<header>
		<h1><?php printf( 'Search Results for: %s', esc_html( get_search_query() ) ); ?></h1>
	</header>

	<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', 'search' );
		endwhile;

		the_posts_pagination( array(
			'prev_text'          => 'Previous page',
			'next_text'          => 'Next page',
			'before_page_number' => 'Page',
		) );
	?>

<?php else : ?>
	<?php get_template_part( 'template-parts/content', 'none' ); ?>
<?php endif; ?>

<?php get_footer();