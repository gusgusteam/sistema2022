<?php  

// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];   // receptor
$correo2 = $_POST['correo2']; // remitente
$mensaje = $_POST['mensaje'];
$asunto2 = $_POST['asunto'];

// Datos para el correo
$destinatario = $correo;
$asunto = $asunto2;

$carta = "De: $nombre \n";
$carta .= "Correo: $correo2 \n";
$carta .= "Telefono: 00000 \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:mensaje-de-envio.html');

?>