<?php
/**
 * Template Name: Hospedaje
 *
 * This is the template that displays full width page without sidebar
 *
 * @package dazzling
 */

get_header(); ?>



<div id="content" class="site-content container">
	<div id="primary" class="content-area col-sm-12 col-md-12">
		<main id="main" class="site-main internas" role="main">

<div class="paqueteshome galeriadefotos">
	<header>Hospedaje</header>

<section>
	<article>
<?php echo do_shortcode( ' [gallery_bank type="images" format="thumbnail" title="true" desc="false" responsive="true" display="all" sort_by="random" animation_effect="" album_title="true" album_id="1"]' ); ?>
</article></section>
	
</div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
