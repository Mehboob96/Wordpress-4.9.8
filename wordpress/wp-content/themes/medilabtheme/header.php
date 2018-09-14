<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<?php wp_head(); ?>
<body <?php body_class(); ?>>
	<header>
		<div class="wrapper cf">
			<!-- <h1><a href="#" title=""><img src="#" alt="MediLab Logo"></a></h1> -->
			<h1><a href="#" title="">Medilab <sup class="plus">+</sup></a></h1>
			<nav class="primary-nav" id="primary-nav">
				<?php wp_nav_menu(array(
					'menu_class'		=> 'menu-pages',
					'container'			=> false,
					'theme_location'	=> 'headerMenuLocation',

				)); ?>
				<!--
				<ul class="menu-pages">
					<li><a href="#home" title="Home">Home</a></li>
					<li><a href="#services" title="Services">Services</a></li>
					<li><a href="#about" title="About">About</a></li>
					<li><a href="#testimonial" title="Testimonial">Testimonial</a></li>
					<li><a href="#contact" title="Contact">Contact</a></li>
				</ul>
			-->
				<a href="javascript:void(0);" class="icon"><i class="fa fa-bars"></i></a>
			</nav>
		</div>
	</header>