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
	<header id="header" class="grid">
		<div class="logo">
			<h2 class="logo">wpsharan</h2>
		</div>
		<div class="header-right">
			<input type="checkbox" name="" id="" class="check">
			<nav class="header-menu">	
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'	 => 'menu-items',        
				)
			);
			?>
			</nav>
			<div class="ham-menu" >
					<span class="line line1"></span>
					<span class="line line2"></span>
					<span class="line line3"></span>
			</div>
			
		

		</div>	
	</header>
