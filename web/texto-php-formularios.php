<?php
$pagina = "gracias.html";
Header("Location: $pagina");
?>
<?php
$para = 'marta.92el@gmail.com';
$asunto = 'Mensaje desde Landing Page Wonderbox';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellidos'];
$mail = $_POST['email'];

$contenido = "Este mensaje fue enviado por " . $nombre . " \r\n";
$contenido .= "Sus apellidos son: " . $apellido . " \r\n";
$contenido .= "Su e-mail es: " . $mail . " \r\n";
mail($para, $asunto, $contenido);
?>
