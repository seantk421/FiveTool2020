<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FiveToolAgency
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'fivetoolagency' ); ?></a>

	<header id="masthead" class="site-header">

		<nav id="site-navigation" class="navbar is-fixded-top" role="navigation" aria-label="main navigation">	
			<div class="navbar-brand">
				<?php the_custom_logo(); ?>
				<a role="button" class="navbar-burger" aria-controls="primary-menu" aria-expanded="false" data-target="navMenu" aria-label="menu">
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
					<span aria-hidden="true"></span>
				</a>	
			</div>
			<div class="navbar-menu">
				<div class="navbar-end">
					<?php
						wp_nav_menu( array(
							'theme_location'    => 'primary',
							'depth'             => 2,
							'container'         => false,
							// 'items_wrap'     => 'div',
							'menu_class'        => 'navbar-end',
							'menu_id'           => 'primary-menu',
							'after'             => "</div>",
							'walker'            => new Navwalker())
						);
					?>
				</div>
			</div>
		</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
