<?php
/**
 * Template Name: Terrestre
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
	<header>terrestre</header>
	<table><tbody>
	<tr>
		<th>Viaje</th>
		<th>Ciudad de Origen</th>
		<th>Ciudad de Destino</th>
		<th>Precio</th>
	</tr>
<?php if( have_rows('informacion') ): while ( have_rows('informacion') ) : the_row();
		$viaje = get_sub_field('viaje');
		$origen = get_sub_field('origen');
		$destino = get_sub_field('destino');
		$tiempo = get_sub_field('tiempo_estimado');
?>
	<tr>
		<td><?php echo $viaje?></td>
		<td><?php echo $origen?></td>
		<td><?php echo $destino?></td>
		<td><?php echo $tiempo?></td>
	</tr>
<?php endwhile; else : endif; ?>	</tbody></table>
	<div class="bterrestreaereo"><a href="<?php echo get_site_url(); ?>/cotizar">reservar</a></div>
	
</div>




		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
