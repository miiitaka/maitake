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
	<link rel="alternate" hreflang="<?php bloginfo( 'language' ) ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="layout-header">
		<header class="layout-header-global">
			<?php
				if ( is_front_page() && is_home() ) {
					$format = '<h1 class="layout-header-title">';
				} else {
					$format = '<p class="layout-header-title">';
				}

				if ( get_header_image() ) {
					$format .= '<a href="' . esc_url( home_url( '/' ) ) . '">';
					$format .= '<img src="' . get_header_image() . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '" class="layout-header-image">';
				} else {
					$format .= '<a href="' . esc_url( home_url( '/' ) ) . '">';

						if ( has_custom_logo() ) {
							$custom_logo_id = get_theme_mod( 'custom_logo' );
							$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
							$format .= '<img src="' . $image[0] . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '" class="layout-header-logo">';
						} else {
							$format .= '<span class="layout-header-name">' . esc_html( get_bloginfo( 'name' ) ) . '</span>';
						}
				}

				if ( is_front_page() && is_home() ) {
					$format .= '</h1></a>';
				} else {
					$format .= '</p></a>';
				}
				echo $format;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) {
					echo '<p>' . esc_html( $description ) . '</p>';
				}
			?>
		</header>

		<?php if ( has_nav_menu( 'primary' ) ) : ?>
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
		<div class="layout-contents">
			<main>
