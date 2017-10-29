<?php

/*

Plugin Name: Nubis Email - Jose Vallejo
Plugin URI: http://www.nubis.com
Description: Envio de email de contacto
Author: Jose Vallejo
Version: 0.1
Author URI: http://www.nubis.com


*/

function sendEmail($atts){

	$submit = false;
	$to = 'xxxxxxxx@gmail.com';
	$subject = 'Email desde prueba wordpress';
	$message = 'Este es un email enviado desde wordpress';


	if(isset($_POST['nubis_submit'])){
		//enviar el email
		wp_mail($to,$subject,$message);
		$submit = true;
	}

	if($submit){

		//funcion para incorporar un script de forma segura
		wp_enqueue_style('popup-css','/wp-content/plugins/nubisemail/popup.css' );
		wp_enqueue_script('popup','/wp-content/plugins/nubisemail/popup.js');
	}

	?>

	<form action="" id="nubis_email" method="post">
		<input type="submit" name="nubis_submit" value="Contacto">
	</form>

	<?php


}


add_shortcode("nubis_email","sendEmail");

// activar shortcodes en widgets de texto
add_filter('widget_text','do_shortcode');

?>