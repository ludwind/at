<?php
/**
 * Template Name: Home
 *
 * This is the template that displays full width page without sidebar
 *
 * @package dazzling
 */

get_header(); ?>

<!-- fotorama -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> <!-- 33 KB -->
<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> <!-- 16 KB -->


<div id="content" class="site-content container">
	<div id="primary" class="content-area col-sm-12 col-md-12">
		<main id="main" class="site-main" role="main">


<!-- sliders -->
<div class="fotorama">
  <div data-img="wp-content/themes/aeroterrestre/img/sliders/cayos.jpg"><a href="<?php echo get_site_url(); ?>/aero/"></a></div>
  <div data-img="wp-content/themes/aeroterrestre/img/sliders/monterrico.jpg"><a href="<?php echo get_site_url(); ?>/aero/"></a></div>
  <div data-img="wp-content/themes/aeroterrestre/img/sliders/livingstones.jpg"><a href="<?php echo get_site_url(); ?>/aero/"></a></div>

<!--
  <a href="<?php echo get_site_url(); ?>/aero"><img src="wp-content/themes/aeroterrestre/img/sliders/cayos.jpg"></a>
  <a href="<?php echo get_site_url(); ?>/aero"><img src="wp-content/themes/aeroterrestre/img/sliders/monterrico.jpg"></a>
  <a href="<?php echo get_site_url(); ?>/aero"><img src="wp-content/themes/aeroterrestre/img/sliders/livingstones.jpg"></a>-->
</div>

<div class="homespiffs">
	<a href="<?php echo get_site_url(); ?>/cotizar"><img src="wp-content/themes/aeroterrestre/img/home/cotizar.png"></a>
	<a href="<?php echo get_site_url(); ?>/hospedaje"><img src="wp-content/themes/aeroterrestre/img/home/hospedaje.png"></a>
	<a href="<?php echo get_site_url(); ?>/aero"><img src="wp-content/themes/aeroterrestre/img/home/vuelos.png"></a>
</div>

<!-- ------ paquetes -------- -->
<div class="paqueteshome">
	<header>paquetes completos</header>
	<ul>
        <li><a href="<?php echo get_site_url(); ?>/aero"><img src="wp-content/themes/aeroterrestre/img/home/paquetes_panajachel.jpg"></a>
		<h1>panajachel</h1><span>paquetes completos de bus, hospedaje y actividades desde</span><h2>$499.99</h2>
		<a href="<?php echo get_site_url(); ?>/aero"><img src="wp-content/themes/aeroterrestre/img/vermas.jpg"></a>
		</li>

        <li><a href="<?php echo get_site_url(); ?>/aero"><img src="wp-content/themes/aeroterrestre/img/home/semuc-champey.jpg"></a>
		<h1>semuc champey</h1><span>paquetes completos de bus, hospedaje y actividades desde</span><h2>$799.99</h2>
		<a href="<?php echo get_site_url(); ?>/aero"><img src="wp-content/themes/aeroterrestre/img/vermas.jpg"></a>
		</li>
		
        <li><a href="<?php echo get_site_url(); ?>/aero"><img src="wp-content/themes/aeroterrestre/img/home/tikal.jpg"></a>
		<h1>tikal petén</h1><span>paquetes completos de bus, hospedaje y actividades desde</span><h2>$999.99</h2>
		<a href="<?php echo get_site_url(); ?>/aero"><img src="wp-content/themes/aeroterrestre/img/vermas.jpg"></a>
		</li>
		
        <li><a href="<?php echo get_site_url(); ?>/aero"><img src="wp-content/themes/aeroterrestre/img/home/antigua.jpg"></a>
		<h1>antigua guatemala</h1><span>paquetes completos de bus, hospedaje y actividades desde</span><h2>$199.99</h2>
		<a href="<?php echo get_site_url(); ?>/aero"><img src="wp-content/themes/aeroterrestre/img/vermas.jpg"></a>
		</li>		
		
    </ul>
</div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
