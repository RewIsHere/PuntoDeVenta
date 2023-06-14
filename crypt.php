<?php $contrasena = "Prueba1234";

// Generar el hash bcrypt de la contraseña
$hash = password_hash($contrasena, PASSWORD_BCRYPT);

// Imprimir el hash
echo $hash;
