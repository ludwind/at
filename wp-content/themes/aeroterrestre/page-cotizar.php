<?php
/**
 * Template Name: Cotizar
 *
 * This is the template that displays full width page without sidebar
 *
 * @package dazzling
 */

get_header(); ?>



<div id="content" class="site-content container">
	<div id="primary" class="content-area col-sm-12 col-md-12">
		<main id="main" class="site-main internas" role="main">

<div class="paqueteshome cotizar">
	<header>Cotizar / Reservar</header>
	<section><?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }?></section>
<aside>
	
</aside>
	
</div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
