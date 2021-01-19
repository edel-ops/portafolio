<?php
error_reporting(0);
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su email es: " . $email . " \r\n";
$message .= "Asunto: " . $subject . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'ebonilla6@gmail.com';
$asunto = 'Mensaje de prueba';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");

echo 'mensaje enviado';

?>
