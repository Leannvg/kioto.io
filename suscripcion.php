<?php
$nombre = $_POST['Nombre-o-Alias'];
$apellido = $_POST['Apellido'];
$telefono = $_POST['Telefono'];
$email = $_POST['Email'];
$eres = $_POST['Eres'];
$empresa = $_POST['Empresa'];
$suscripcion = $_POST['Suscripcion'];

$comentario = "<h1>".$nombre." ".$apellido."</h1>";
$comentario .= "<p>Mail del usuario: ".$email."</p>";
$comentario .= "<p>Teléfono: ".$telefono."</p>";
$comentario .= "<p>El usuario es: ".$eres."</p>";
$comentario .= "<p>Nombre de la empresa: ".$empresa."</p>";
$comentario .= "<p>Suscripción para: ".$suscripcion."</p>";

$para = 'cronos414@gmail.com';
$asunto = 'Suscripción Kiotorando';

$headers = "Mime-version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $email\r\n";
$headers .= "To: $para\r\n";

mail( $para, $asunto, $comentario, $headers );
header( "Location: graciasformulario.html" );

?>