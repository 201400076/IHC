<?php
	if (isset($_POST['fname'])){
		$nombres=$_POST['fname'];
		$email_cliente=$_POST['email'];
		$telefono=$_POST['phone'];
		$subject=$_POST['subject'];
		$mensaje=$_POST['message'];

		
	/*SIGUE RECOLECTANDO DATOS PARA FUNCION MAIL*/
	$message = '';
	$message .= '<p>Hola, ha sido registrado un nuevo mensaje desde el formulario de contacto del sitio web, según el detalle siguiente:</p> ';
	$message .= '<p>Cliente: '.$nombres.'</p> ';
	$message .= '<p>Email: '.$email_cliente.'</p> ';
	$message .= '<p>Teléfono: '.$telefono.'</p> ';
	$message .= '<p>Mensaje: '.$mensaje.'</p> ';
	
	

	
/* 	$header = "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html; charset=UTF-8\r\n";
	$header .= "From: ". $nombres . " <" . $email_cliente . ">\r\n";
	$email='carlosgrageda55@gmai.com';//Ingresa tu dirección de correo */
	
			
	if (true){
		echo 'success';
	}	 else {
		echo 'No se pudo enviar el mensaje.';
	}
	/*FINALIZA RECOLECTANDO DATOS PARA FUNCION MAIL*/
	
	
	}
?>