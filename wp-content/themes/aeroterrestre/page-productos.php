<?php
/**
 * Template Name: Productos
 *
 * This is the template that displays full width page without sidebar
 *
 * @package dazzling
 */

get_header(); ?>



<div id="content" class="site-content container">
	<div id="primary" class="content-area col-sm-12 col-md-12">
		<main id="main" class="site-main internas" role="main">

<div class="paqueteshome">
	<header>Productos</header>

<section>
<?php if( have_rows('repeatermain') ): while ( have_rows('repeatermain') ) : the_row();
		$image = get_sub_field('imgprincipal');
		$titulo = get_sub_field('titulo');
		$descripcion = get_sub_field('descripcion');
		$precio = get_sub_field('precio');
?>
	<article>
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
			<h1><?php echo $titulo?></h1>
			<span><?php echo $descripcion?></span>
			<h2><?php echo $precio?></h2>
			<a href="<?php echo get_site_url(); ?>/cotizar">solicitar</a>
	</article>
<?php endwhile; else : endif; ?>
</section>
	
</div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
