<?php
$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$detalle_form = $_POST['detalle'];
$cuerpo_mail = "Nombre: ". $nombre_form .  "\r\n" . "Apellido: " . $apellido_form . "\r\n" . "Detalle: " . $detalle_form;
mail ("palaciostomas73@gmail.com", "mensaje enviado desde mi sitio web", $cuerpo_mail);
$conexion = mysqli_connect("localhost" , "id19928355_pruebas_admin" , "c8n+\i)qP>1XoC[Z" , "id19928355_pruebas") or exit ("No se pudo conectar a la base de datos");
mysqli_query($conexion, "INSERT INTO clientes VALUES (DEFAULT, '$nombre_form', '$apellido_form',  '$detalle_form'  )");
mysqli_close($conexion); 
header("Location: contacto.php?ok");
 ?>