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

<?php if( have_rows('sliders') ): while ( have_rows('sliders') ) : the_row();
		$sliderimage = get_sub_field('imagen');
		$sliderenlace = get_sub_field('enlace');
?>
  <div data-img="<?php echo $sliderimage['url']; ?>"><a href="<?php echo $sliderenlace?>"></a></div>
<?php endwhile; else : endif; ?>	
</div>

<div class="homespiffs">
	<a href="<?php echo get_site_url(); ?>/cotizar"><img src="wp-content/themes/aeroterrestre/img/home/cotizar.png"></a>
	<a href="<?php echo get_site_url(); ?>/hospedaje"><img src="wp-content/themes/aeroterrestre/img/home/fotos.png"></a>
	<a href="<?php echo get_site_url(); ?>/aero"><img src="wp-content/themes/aeroterrestre/img/home/vuelos.png"></a>
</div>

<!-- ------ paquetes -------- -->
<div class="paqueteshome">
	<header>paquetes completos</header>
	<ul>

<?php if(get_field('slide_images', 'option')): 

            $i = 0;

            ?>

             <?php while(has_sub_field('slide_images', 'option')): 

     $i++;     

     if( $i > 40 )

     {

         break;

     }

     ?>

         <div class="item"><img src="<?php the_sub_field('image_to_slide'); ?>" alt="" /></div>

     <?php endwhile; ?>

     <?php endif; ?>







<?php
$i = 0;
if( have_rows('repeatermain', 37) ): while ( have_rows('repeatermain', 37) ) : the_row();
		$image = get_sub_field('imgprincipal');
		$titulo = get_sub_field('titulo');
		$descripcion = get_sub_field('descripcion');
		$precio = get_sub_field('precio');
		$i++;
		 if( $i > 4 ){break;}
?>
        <li><a href="<?php echo get_site_url(); ?>/aero"><img src="<?php echo $image['url']; ?>"></a>
		<h1><?php echo $titulo?></h1><span><?php echo $descripcion?></span><h2><?php echo $precio?></h2>
		<a href="<?php echo get_site_url(); ?>/aero"><img src="wp-content/themes/aeroterrestre/img/vermas.jpg"></a>
		</li>
<?php endwhile; else : endif; ?>
		
    </ul>
</div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
