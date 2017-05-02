<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package beverage
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="format-detection" content="telephone=no">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">

	<div class="container">

		<div class="header__logo">
			<p><span>К</span>арелия</p>
			<p><span>к</span>вас</p>
		</div>

		<nav class="header__navigation">

			<a href="#" id="header-burger" class="header__trigger">

				<span></span>

				<span></span>

				<span></span>

			</a>

			<!--<ul class="header__nav">
				<li><a href="#product">Наша продукция</a></li>
				<li><a href="#beverage">Живой квас</a></li>
				<li><a href="#kegs">Термокеги</a></li>
				<li><a href="#partnership">Партнерство</a></li>
				<li><a href="#contacts">Контакты</a></li>
			</ul>-->

			<?php wp_nav_menu( array(
				'theme_location'  => '',
				'menu'            => 'Primary Menu',
				'container'       => 'ul',
				'container_class' => 'header__nav',
				'menu_class'	  => 'header__nav'
			) ); ?>


		</nav>

	</div>

</header>
