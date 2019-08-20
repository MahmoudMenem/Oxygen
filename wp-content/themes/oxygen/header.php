<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oxygen
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/owl.theme.default.min.css">

	<!-- Theme style  -->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css">
	<!-- Modernizr JS -->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/modernizr-2.6.2.min.js"></script>

	<?php wp_head(); ?>
</head>

<div class="gtco-loader"></div>
 <nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			<div class="row">
				<div class="col-xs-2">
					<div id="gtco-logo"><a href="index.html">Oxygen.</a></div>
				</div>
				<div class="col-xs-8 text-center menu-1">

				<?php 
				
					wp_nav_menu(array(

					))
				
				?>
					<!-- <ul>
						<li class="active"><a href="index.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li class="has-dropdown">
							<a href="services.html">Services</a>
							<ul class="dropdown">
								<li><a href="#">Web Design</a></li>
								<li><a href="#">eCommerce</a></li>
								<li><a href="#">Branding</a></li>
								<li><a href="#">API</a></li>
							</ul>
						</li>
						<li class="has-dropdown">
							<a href="#">Tools</a>
							<ul class="dropdown">
								<li><a href="#">HTML5</a></li>
								<li><a href="#">CSS3</a></li>
								<li><a href="#">Sass</a></li>
								<li><a href="#">jQuery</a></li>
							</ul>
						</li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
 -->
				</div>
				
				<!-- <div class="col-xs-2 text-right hidden-xs menu-2">
					<ul>
						<li class="btn-cta"><a href="#"><span>Register</span></a></li>
					</ul>
				</div> -->
			</div>
			
		</div>
	</nav>

