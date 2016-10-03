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
		<h1>Oops! That page can&rsquo;t be found.</h1>
	</header>

	<div class="page-content">
		<p>It looks like nothing was found at this location. Maybe try a search?</p>
		<?php get_search_form(); ?>
	</div>
</section>

<?php get_footer();