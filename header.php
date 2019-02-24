<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" width="device-width" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header id="dsa-page-header">
			<a href="<?php echo home_url(); ?>"><img id="dsa-site-icon" src="<?php echo get_site_icon_url(); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a>
			<?php
			if ( has_nav_menu( 'header_menu' ) ) {
				wp_nav_menu( array(
					'theme_location' => 'header_menu',
					'container'      => 'nav',
				) );
			}
			?>
		</header>
