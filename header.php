<?php
/**
 * The template for displaying the header
 *
 * @package     WordPress
 * @subpackage  Maitake
 * @since       Maitake 1.0.0
 */
?><!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="alternate" hreflang="<?php bloginfo( 'language' ) ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<?php if ( is_front_page() && is_home() ) : ?>
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		<?php else : ?>
			<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></p>
		<?php endif;

		$description = get_bloginfo( 'description', 'display' );
		if ( $description || is_customize_preview() ) : ?>
			<p><?php echo $description; ?></p>
		<?php endif; ?>
	</header>

	<?php if ( has_nav_menu( 'primary' ) ) : ?>
		<nav>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'primary'
				 ) );
			?>
		</nav>
	<?php endif; ?>