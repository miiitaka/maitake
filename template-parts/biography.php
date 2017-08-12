<?php
/**
 * The template part for displaying an Author biography
 *
 * @package    WordPress
 * @subpackage Maitake
 * @since      1.0.0
 */
?>

<div class="author-info">
	<div class="author-avatar">
		<a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
			<?php
				echo get_avatar( get_the_author_meta( 'user_email' ), 60, '', esc_html( get_the_author() ) );
			?>
		</a>
	</div>

	<div class="author-description">
		<h2 class="author-title">
			Author:&nbsp;
			<a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
				<span id="author-name"><?php esc_html( the_author() ); ?></span>
			</a>
		</h2>
		<p class="author-biography">
			<?php esc_html( the_author_meta( 'description' ) ); ?>
		</p>
	</div>
</div>