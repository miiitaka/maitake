<?php
/**
 * The main template file
 *
 * @link       http://codex.wordpress.org/Template_Hierarchy
 * @package    WordPress
 * @subpackage Maitake
 * @since      1.0.0
 */
get_header(); ?>

<?php if ( have_posts() ) : ?>
	<section>
		<?php if ( is_home() && ! is_front_page() ) : ?>
			<header>
				<h1><?php single_post_title(); ?></h1>
			</header>
		<?php endif; ?>

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