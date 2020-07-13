<!DOCTYPE html>
<!--This is the template header -->
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="format-detection" content="telephone=no">

	<?php
	if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {
		$favicon = get_option( 'theme_favicon' );
		if ( ! empty( $favicon ) ) {
			?>
			<link rel="shortcut icon" href="<?php echo esc_url( $favicon ); ?>" />
			<?php
		}
	}

	if ( is_singular() && pings_open( get_queried_object() ) ) {
		?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php
	}

	wp_head();
	?>
</head>
<body <?php body_class(); ?>>

<?php
get_template_part( 'assets/' . INSPIRY_DESIGN_VARIATION . '/partials/header' );
