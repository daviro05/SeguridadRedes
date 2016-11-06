<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];
$mensaje = "Nombre: ".$nombre."   Email: ".$email."   Password: ".$password;

$file = fopen("correos.txt", "a");
fwrite($file, $mensaje. PHP_EOL);
fclose($file);

header("Location:index.php?finalizado=true&nombre=$nombre&email=$email");
?>