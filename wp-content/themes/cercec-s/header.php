<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cercec_S
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="container site">
	<div style="display: none" id="search-form-overlay"><?php get_search_form(); ?></div>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cercec-s' ); ?></a>
	<header id="masthead" class="site-header">
		<nav class="navbar navbar-expand-lg navbar-light navbar-custom py-3" role="navigation">
			<div class="container">
				<div class="site-menu">
					<div class="site-branding">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php echo get_template_directory_uri()?>/assets/brand/logo-cercec.svg" width="219" height="95" alt="Logo du CERCEC">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="bs-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

					</div>
					<div class="menus-container">
						<div class="menus">
							<?php
							wp_nav_menu( array(
								'menu'				=> 'Secondaire',
								'theme_location'	=> 'secondary',
								'depth'				=> 2, // 1 = with dropdowns, 0 = no dropdowns.
								'container'			=> 'div',
								'container_class'	=> 'collapse navbar-collapse secondary-menu',
								'container_id'		=> 'bs-navbar-collapse-2',
								'menu_class'		=> 'navbar-nav ml-auto',
								'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
								'walker'			=> new WP_Bootstrap_Navwalker()
							) );
							?>
							<?php 
							wp_nav_menu( array(
								'menu'				=> 'Primary',
								'theme_location'	=> 'primary',
								'depth'				=> 2, // 1 = with dropdowns, 0 = no dropdowns.
								'container'			=> 'div',
								'container_class'	=> 'collapse navbar-collapse primary-menu',
								'container_id'		=> 'bs-navbar-collapse-1',
								'menu_class'		=> 'navbar-nav ml-auto',
								'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
								'walker'			=> new WP_Bootstrap_Navwalker()
							) );
							?>
						</div>
						<div class="tools-container">
							<?php 
								wp_nav_menu( array(
									'menu'				=> 'Tools',
									'theme_location'	=> 'tools',
									'depth'				=> 2, // 1 = with dropdowns, 0 = no dropdowns.
									'container'			=> 'div',
									'container_class'	=> 'collapse navbar-collapse tools-menu',
									'container_id'		=> 'bs-navbar-collapse-1',
									'menu_class'		=> 'navbar-nav',
									'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
									'walker'			=> new WP_Bootstrap_Navwalker()
								) );
							?>
						</div>
					</div>
				</div>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="container site-content">

