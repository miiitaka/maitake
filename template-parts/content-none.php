<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * @package    WordPress
 * @subpackage Maitake
 * @since      1.0.0
 */
?>
<section>
	<header>
		<h1>Nothing Found</h1>
	</header>

	<div>
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
			<p><?php printf( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
		<?php elseif ( is_search() ) : ?>
			<p>'Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>
			<?php get_search_form(); ?>
		<?php else : ?>
			<p>It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.</p>
			<?php get_search_form(); ?>
		<?php endif; ?>
	</div>
</section>