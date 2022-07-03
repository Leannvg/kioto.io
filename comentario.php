<?php
$nombre = $_POST['Nombre'];
$email = $_POST['E-mail'];

$comentario = "<h1>".$nombre."</h1>";
$comentario .= "<p>Mail del usuario: ".$email."</p>";
$comentario .= "<hr/>";
$comentario .= $_POST['Comentario'];

$para = 'cronos414@gmail.com';
$asunto = 'Comentario Kiotorando';

$headers = "Mime-version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $email\r\n";
$headers .= "To: $para\r\n";

mail( $para, $asunto, $comentario, $headers );
header( "Location: graciascomentario.html" );

?>