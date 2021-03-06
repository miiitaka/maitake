<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package    WordPress
 * @subpackage Maitake
 * @since      1.0.0
 */
get_header(); ?>

<section>
	<header>
		<h1>お探しのページは見つかりませんでした。</h1>
	</header>

	<div class="page-content">
		<div class="page-404-search">
			<?php get_search_form(); ?>
		</div>
	</div>

	<?php
	if ( is_active_sidebar( '404-footer-1' )  ) {
		dynamic_sidebar( '404-footer-1' );
	}
	?>
</section>

<?php get_footer();