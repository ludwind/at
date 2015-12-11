<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package dazzling
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div class="header-at"><header>
	<section>
		<a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_site_url(); ?>/wp-content/themes/aeroterrestre/img/logo-at.png"/></a>
	</section>
	<aside>
		<ul>
			<li><img src="<?php echo get_site_url(); ?>/wp-content/themes/aeroterrestre/img/tel.png"/></li>
			<li><span>502 </span>4015-4340</li>
			<li><a href="<?php echo get_site_url(); ?>/cotizar">Cotiza ahora</a></li>
		</ul>
	</aside>
</header></div>

<div id="page" class="hfeed site">

	<nav class="navbar navbar-default menu-at" role="navigation">
		<div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			    <span class="sr-only">Toggle navigation</span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			  </button>



			</div>
				<?php dazzling_header_menu(); ?>
		</div>
	</nav><!-- .site-navigation -->
