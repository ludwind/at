<?php
/**
 * Dashboard Administration Screen
 *
 * @package WordPress
 * @subpackage Administration
 */

/** Load WordPress Bootstrap */
require_once( dirname( __FILE__ ) . '/admin.php' );

/** Load WordPress dashboard API */
require_once(ABSPATH . 'wp-admin/includes/dashboard.php');

wp_dashboard_setup();

wp_enqueue_script( 'dashboard' );
if ( current_user_can( 'edit_theme_options' ) )
	wp_enqueue_script( 'customize-loader' );
if ( current_user_can( 'install_plugins' ) )
	wp_enqueue_script( 'plugin-install' );
if ( current_user_can( 'upload_files' ) )
	wp_enqueue_script( 'media-upload' );
add_thickbox();

if ( wp_is_mobile() )
	wp_enqueue_script( 'jquery-touch-punch' );

$title = __('Dashboard');
$parent_file = 'index.php';

$help = '<p>' . __( 'Welcome to your WordPress Dashboard! This is the screen you will see when you log in to your site, and gives you access to all the site management features of WordPress. You can get help for any screen by clicking the Help tab in the upper corner.' ) . '</p>';

// Not using chaining here, so as to be parseable by PHP4.
$screen = get_current_screen();

$screen->add_help_tab( array(
	'id'      => 'overview',
	'title'   => __( 'Overview' ),
	'content' => $help,
) );

// Help tabs

$help  = '<p>' . __( 'The left-hand navigation menu provides links to all of the WordPress administration screens, with submenu items displayed on hover. You can minimize this menu to a narrow icon strip by clicking on the Collapse Menu arrow at the bottom.' ) . '</p>';
$help .= '<p>' . __( 'Links in the Toolbar at the top of the screen connect your dashboard and the front end of your site, and provide access to your profile and helpful WordPress information.' ) . '</p>';

$screen->add_help_tab( array(
	'id'      => 'help-navigation',
	'title'   => __( 'Navigation' ),
	'content' => $help,
) );

$help  = '<p>' . __( 'You can use the following controls to arrange your Dashboard screen to suit your workflow. This is true on most other administration screens as well.' ) . '</p>';
$help .= '<p>' . __( '<strong>Screen Options</strong> - Use the Screen Options tab to choose which Dashboard boxes to show.' ) . '</p>';
$help .= '<p>' . __( '<strong>Drag and Drop</strong> - To rearrange the boxes, drag and drop by clicking on the title bar of the selected box and releasing when you see a gray dotted-line rectangle appear in the location you want to place the box.' ) . '</p>';
$help .= '<p>' . __( '<strong>Box Controls</strong> - Click the title bar of the box to expand or collapse it. Some boxes added by plugins may have configurable content, and will show a &#8220;Configure&#8221; link in the title bar if you hover over it.' ) . '</p>';

$screen->add_help_tab( array(
	'id'      => 'help-layout',
	'title'   => __( 'Layout' ),
	'content' => $help,
) );

$help  = '<p>' . __( 'The boxes on your Dashboard screen are:' ) . '</p>';
if ( current_user_can( 'edit_posts' ) )
	$help .= '<p>' . __( '<strong>At A Glance</strong> - Displays a summary of the content on your site and identifies which theme and version of WordPress you are using.' ) . '</p>';
	$help .= '<p>' . __( '<strong>Activity</strong> - Shows the upcoming scheduled posts, recently published posts, and the most recent comments on your posts and allows you to moderate them.' ) . '</p>';
if ( is_blog_admin() && current_user_can( 'edit_posts' ) )
	$help .= '<p>' . __( "<strong>Quick Draft</strong> - Allows you to create a new post and save it as a draft. Also displays links to the 5 most recent draft posts you've started." ) . '</p>';
if ( ! is_multisite() && current_user_can( 'install_plugins' ) )
	$help .= '<p>' . __( '<strong>WordPress News</strong> - Latest news from the official WordPress project, the <a href="https://planet.wordpress.org/">WordPress Planet</a>, and popular and recent plugins.' ) . '</p>';
else
	$help .= '<p>' . __( '<strong>WordPress News</strong> - Latest news from the official WordPress project, the <a href="https://planet.wordpress.org/">WordPress Planet</a>.' ) . '</p>';
if ( current_user_can( 'edit_theme_options' ) )
	$help .= '<p>' . __( '<strong>Welcome</strong> - Shows links for some of the most common tasks when setting up a new site.' ) . '</p>';

$screen->add_help_tab( array(
	'id'      => 'help-content',
	'title'   => __( 'Content' ),
	'content' => $help,
) );

unset( $help );

$screen->set_help_sidebar(
	'<p><strong>' . __( 'For more information:' ) . '</strong></p>' .
	'<p>' . __( '<a href="https://codex.wordpress.org/Dashboard_Screen" target="_blank">Documentation on Dashboard</a>' ) . '</p>' .
	'<p>' . __( '<a href="https://wordpress.org/support/" target="_blank">Support Forums</a>' ) . '</p>'
);

include( ABSPATH . 'wp-admin/admin-header.php' );
?>


<div class="wrap">
	<h2>Bienvenido(a), <?php global $current_user; if ( isset($current_user) ) { echo $current_user->display_name;}?></h2>

<head>
 <link rel="stylesheet" type="text/css" href="css/style.css">
</head>


<div class="tutoriales"><center><h3>¡Administrar este sitio web es fácil!</h3></br>Sigue las instrucciones que encontrarás a continuación:</center>

	<section class="ac-container">
		<div>
			<input id="ac-1" name="accordion-1" type="radio" checked />
			<label for="ac-1">¿Cómo agregar viajes en Aereo y terrestre?</label>
			<article class="ac-auto">
<!--<iframe width="320" height="215" src="https://www.youtube.com/embed/9aBMWcFRJvA" frameborder="0" allowfullscreen></iframe>-->
				<p><ol>
<li>Ingresa en el menu izquierdo a la seccion "Paginas".</li>
<li>Busca en el listado la opcion "Aereo" o "Terrestre".</li>
<li>Para borrar simplemente haz clic en el boton "-".</li>
<li>Para agregar nuevos viajes haz clic en "Add row"</li>
<li>Luego simplemente agrega la informacion en cada titular.</li>
<li>Para finalizar haz clic en "Actualizar".</li>
				</ol></p>
			</article>
		</div>
		
		<div>
			<input id="ac-2" name="accordion-1" type="radio" checked />
			<label for="ac-2">¿Cómo actualizar paquetes, eventos, productos y promociones?</label>
			<article class="ac-auto">
<!--<iframe width="320" height="215" src="https://www.youtube.com/embed/H4vmXmoBlGQ" frameborder="0" allowfullscreen></iframe>-->				
				<p><ol>
<li>Ingresa en el menu izquierdo a la seccion "Paginas"</li>
<li>Busca en el listado la opcion "paquetes", "eventos", "productos" o "promociones"</li>
<li>Para borrar simplemente haz clic en el boton "-"</li>
<li>Para agregar nuevos items haz clic en "Add row"</li>
<li>Luego en el boton "Anadir imagen" para cargar una fotografia.</li>
<li>En cada titular puedes llenar la informacion sobre cada item.</li>
<li>Para finalizar haz clic en "Actualizar".</li>
				</ol></p>
			</article>
		</div>		

		<div>
			<input id="ac-3" name="accordion-1" type="radio" checked />
			<label for="ac-3">¿Cómo actualizar la pagina de inicio?</label>
			<article class="ac-auto">
<!--<iframe width="320" height="215" src="https://www.youtube.com/embed/G8ricPrqxSg" frameborder="0" allowfullscreen></iframe>-->				
				<p><ol>
<li>Ingresa en el menu izquierdo a la seccion "Paginas".</li>
<li>Busca en el listado la opcion "Inicio".</li>
<li>Para borrar simplemente haz clic en el boton "-".</li>
<li>Para agregar imagenes nuevas haz clic en "Add row".</li>
<li>Luego en el boton "Anadir imagen" para cargar una fotografia.</li>
<li>En la opcion "Select" puedes elegir la pestana a la cual deseas enlazar la imagen.</li>
<li>Para finalizar haz clic en "Actualizar".</li>
				</ol></p>
			</article>
		</div>
		
		<div>
			<input id="ac-4" name="accordion-1" type="radio" />
			<label for="ac-4">¿Cómo actualizar fotografias?</label>
			<article class="ac-auto">
<!--<iframe width="320" height="215" src="https://www.youtube.com/embed/QjpAjaJaMJ0" frameborder="0" allowfullscreen></iframe>-->
				<p><ol>
<li>Ingresa en el menu izquierdo a la seccion "Banco de galerias".</li>
<li>Busca en el listado la opcion de icono "Demo Album".</li>
<li>Para borrar simplemente haz clic en el icono "Basurero".</li>
<li>Para agregar imagenes nuevas haz clic en "Add files" en la caja amarilla en la parte superior.</li>
<li>Elige la imagen para agregar y espera a que finalize su carga.</li>
<li>No es necesario agregar ningun titular o descripcion, basta solamente con la imagen.</li>
<li>Para finalizar haz clic en "Guardar Album" en la parte superior.</li>
				</ol></p>
			</article>
		</div>
	</section>

</div>


</div><!-- wrap -->

<?php
require( ABSPATH . 'wp-admin/admin-footer.php' );
