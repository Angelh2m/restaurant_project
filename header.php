<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package restaurant
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,800" rel="stylesheet">
	<?php wp_head(); ?>

</head>

<body <?php body_class(''); ?>>
<div>
	<header class="navigation">
		<div class="mobileNav">
			<div id="nav">
				<div class="mobileNav-top_bar"></div>
				<div class="mobileNav-middle_bar"></div>
				<div class="mobileNav-bottom_bar"></div>
			</div>
		</div>

		<div class="navigation__header" id='brand_container'>

			<img
			src="<?php bloginfo('template_url'); ?>/img/logo.png"
			alt="logo"
			class="navigation__logo" id="logo">

			<!-- Navigation -->
			<div id="navigation-menu">
				<ul>
					<!-- <li><a  href="#restaurant"> Home </a></li> -->
					<li><a id="home" href="#" > Home </a></li>
					<li><a id="nav_restaurant" href="#restaurant" class=""> The restaurant</a> </a></li>
					<li><a id="nav_foodMenu" href="#menu"> Menu </a></li>
					<li><a id="nav_drinksMenu" href="#drinks"> Drinks </a></li>

					<li><a id="nav_reservations" href="#reservations"> Reservations </a></li>
				</ul>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
