<?php
/**
 * The template for displaying the header
 *
 * @package    WordPress
 * @subpackage Maitake
 * @since      Maitake 1.0.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#444444">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="layout-header">
		<?php
		$description = get_bloginfo( 'description', 'display' );
		if ( $description || is_customize_preview() ) {
			echo '<section class="layout-header-description">';
			echo '<p>' . esc_html( $description ) . '</p>';
			echo '</section>';
		}
		?>

		<?php
			if ( function_exists( 'the_custom_header_markup' ) ) {
				if ( is_header_video_active() && has_header_video() ) {
					echo '<section class="layout-header-image custom-header-video">';
				} else {
					echo '<section class="layout-header-image">';
				}
				the_custom_header_markup();
				echo '</section>';
			}  elseif ( get_header_image() ) {
				$format  = '<section class="layout-header-image">';
				$format .= '<a href="' . esc_url( home_url( '/' ) ) . '">';
				$format .= '<img src="' . get_header_image() . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '">';
				$format .= '</a></section>';
				echo $format;
			}
		?>
		<section class="layout-header-global">
			<header class="layout-header-logo">
				<?php
					if ( is_front_page() && is_home() ) {
						$format = '<h1 class="layout-header-title">';
					} else {
						$format = '<p class="layout-header-title">';
					}

					$format .= '<a href="' . esc_url( home_url( '/' ) ) . '">';

					if ( has_custom_logo() ) {
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$image   = wp_get_attachment_image_src( $custom_logo_id , 'full' );
						$format .= '<img src="' . $image[0] . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '" class="layout-header-logo">';
					} else {
						$format .= '<span class="layout-header-name">' . esc_html( get_bloginfo( 'name' ) ) . '</span>';
					}

					if ( is_front_page() && is_home() ) {
						$format .= '</a></h1>';
					} else {
						$format .= '</a></p>';
					}
					echo $format;
				?>
			</header>
			<aside class="layout-header-search">
				<?php get_search_form(); ?>
			</aside>
			<?php do_action( 'layout-header-hook' ); ?>
		</section>


		<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<nav id="header-nav-switch" class="header-nav-menu-button">
				<span class="header-nav-button">Menu</span>
			</nav>
			<nav class="layout-header-nav">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'primary'
				) );
				?>
			</nav>
		<?php endif; ?>
	</div>

	<div class="layout-wrapper">
		<?php do_action( 'layout-wrapper-hook' ); ?>
		<div class="layout-contents">
			<?php do_action( 'layout-content-hook' ); ?>
			<main>