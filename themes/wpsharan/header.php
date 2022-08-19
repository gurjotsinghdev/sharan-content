<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wpsharan
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

<body>
<div id="page" class="site">
	<header id="header" class="primary-header">
		<div class="site-branding">
			<h2 class="logo">wpsharan</h2>
			
			<div class="hamburger" onclick="myFunction(this)">
					<div class="bar1"></div>
					<div class="bar2"></div>
					<div class="bar3"></div>
			</div>
			<nav class="mobile">
				
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
			</nav>

			<nav class="desktop">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
			</nav>
			
	</header>
