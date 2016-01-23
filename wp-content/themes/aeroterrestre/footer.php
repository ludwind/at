<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package dazzling
 */
?>
	</div><!-- #content -->

<div class="actividades-extremas"><a href="<?php echo get_site_url(); ?>/promociones/"><img src="<?php echo get_site_url(); ?>/wp-content/themes/aeroterrestre/img/actividades-extremas.jpg"></a></div>

<div class="prefoot"><ul>
    <li><a href="<?php echo get_site_url(); ?>/aero">Aéreo</a></li>
	<li><a href="<?php echo get_site_url(); ?>/terrestre">Terrestre</a></li>
	<li><a href="<?php echo get_site_url(); ?>/paquetes">Paquetes</a></li>
	<li><a href="<?php echo get_site_url(); ?>/promociones">Promociones</a></li>
	<li><a href="<?php echo get_site_url(); ?>/eventos">Eventos</a></li>
	<li><a href="<?php echo get_site_url(); ?>/productos">Productos</a></li>
</ul></div>


	<div id="footer-area">
		<div class="container footer-inner">
			<?php get_sidebar( 'footer' ); ?>
			
			<div class="footin">
				<aside>aeroterrestre 2015</aside>
				<section>desarrollado por <a href="http://allabout.company/" target="_blank">allabout</a></section>
			</div>
			
		</div>

		<footer id="colophon" class="site-footer" role="contentinfo">

		</footer><!-- #colophon -->
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>