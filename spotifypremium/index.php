<html>
<head>
<meta name="viewport" content="width=device-width, minimum-scale=0.4, maximum-scale=2.0" />
<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="./css/estilo.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="./css/estilo_movil.css" media="handheld" />
</head>
<body>
<div id="principal">
<?php
    $finalizado = isset($_GET['finalizado']) ? $_GET['finalizado'] : false ;
    $nombre     = isset($_GET['nombre']) ? $_GET['nombre'] : null ;
    $email      = isset($_GET['email']) ? $_GET['email'] : null ;

    if($finalizado == false){
?>
 <form id="contact_form" action="conseguir_premium.php" method="POST" enctype="multipart/form-data">
        <img src="./img/spotify.jpg">
        <br>
        <div class="row">
            <input id="name" class="input" name="nombre" type="text" value="" size="30" placeholder="Nombre" required="required" /><br />
        </div>
        <div class="row">
             <input type="number" name="edad" min="18" max="99" step="1" size="30" placeholder="Edad" required="required"><br />
        </div>
        <div class="row">
            <input id="email" class="input" name="email" type="text" value="" size="30" placeholder="Email" required="required"/><br />
        </div>
        <div class="row">
            <input id="password" class="input" name="password" type="password" value="" size="30" placeholder="Password" required="required"/><br />
        </div>
        <br>
        <input type="hidden" name="action" value="submit"/>
        <input id="submit_button" type="submit" value="Conseguir Premium" />
    </form>
    <?php
        }
        else{
    ?>
        <form id="contact_form" action="https://www.spotify.com/es/" method="POST" enctype="multipart/form-data">
            <img src="./img/spotify.jpg">
            <br>
            <p>¡Muchas gracias <b><?php echo $nombre ?></b>!</p>
            <p>Hemos enviado un correo a tu dirección<br><b><?php echo $email ?></b></p>
            <p>En el encontrarás los datos de tu cuenta premium!</p>
            <br>
            <input id="submit_button" type="submit" value="Finalizar" />
        </form>
    <?php
        }
    ?>
</div>
</body>
</html>