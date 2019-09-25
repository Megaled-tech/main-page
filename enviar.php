<?php
//VALIDACIÓN DE CMAPOS
if(empty($_REQUEST['name']) || empty($_REQUEST['email']) || empty($_REQUEST['subject']) || empty($_REQUEST['message']))
{
	echo "<script> window.location ='contact.html';</script>";
}else{
		//RECEPCIÓN DE DATOS
		$nom=$_POST['name'];
		$email=$_POST['email'];
		$asu=$_POST['subject'];
		$msj=$_POST['message'];

		//CORREO DESTINO
		//$cor="comercial@megaled.com.co";
		$cor="diegoferchb@hotmail.com";
		
		//ENVIO DE CORREO
		$de .="MIME-Version: 1.0\n"; 
		$de .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$de .= "Content-type: text/html; charset=UTF-8\r\n"; 
		$de .="From: http://www.megaled.com.co <comercial@megaled.com.co>\r\n";
		//ASUNTO
		$asunto="Usuario en contacto.";
		
		//MENSAJE
		$mensaje="
					Mensaje de:<b>".$nom."</b>
					<br><br>
					<b>DATOS DE CONTACTO</b><br>
					Nombre: <b>".$nom."</b><br>
					Correo: <b>".$email."</b><br>
					Asunto: <b>".$asu."</b><br><br>
					Mensaje: <b>".$msj."</b><br><br>
					<hr>
					<a href='http://megaled.com.co' target='_blank'>http://megaled.com.co</a>
				";

		//ENVIO DE CORREO
		mail($cor, $asunto, $mensaje, $de) or die('Hubo un error');	
		
		//SCRIPT DE CONFIRMACIÓN
		echo "<script>alert(\"Su mensaje ha sido enviado, gracias por contactarnos, pronto estaremos en contacto con usted.\\n|| http://www.megaled.com.co ||\");</script>";
		echo "<script> window.location='contact.html';</script>";
	}
?>