<?php
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$asunto = $_POST ['asunto'];
	$mensaje =$_POST['mensaje'];

	if (mail('riossant14@gmail.com', $asunto, $mensaje)) {
		echo "Correo enviado";
		else "No se ha enviado correctamente";
	}
?>