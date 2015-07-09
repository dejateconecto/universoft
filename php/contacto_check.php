<!DOCTYPE html PUBLIC>
<html>
<head>
	<meta charset = "utf-8"/>
	<title>Universoft</title>
	<meta name = "desciption" content = "Soluciones para tu empresa, hay cosas que sencillamente no pueden esperar">

	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<link rel="icon" type="image/png" href="../img/ollin.png" />

	<?php
		header('Content-Type: text/html; charset=UTF-8'); 
	?>

</head>

<body>
	<header><h1>Universoft</h1></header>
		<nav>
			<ul>
				<li><a href="../index.html">Inicio</a></li>
				<li><a href="../pags/nosotros.html">Nosotros</a></li>
				<li><a href="../pags/servicios.html">Servicios</a>
					<ul>
						<li><a href="../pags/servicios.html">Página Web</a></li>
						<li><a href="../pags/servicios.html">Sitio Administrativo</a></li>
						<li><a href="../pags/servicios.html">Sitio de Comercio Electrónico</a></li>
					</ul>
				</li>
				<li><a href="../pags/contacto.html">Contacto</a></li>
			</ul>	
		</nav>	
	<section id="contenido">
		<section id="center">
			<article>
				<h1>Contacto</h1><br/>
				<?php 
				require_once('class.phpmailer.php');
				require_once('PHPMailerAutoload.php');
				$email = $_POST['email_txt'];


					if(	isset($_POST['nombre_txt']) && !empty($_POST['nombre_txt']) &&
						isset($_POST['app_txt']) && !empty($_POST['app_txt']) &&
						isset($_POST['apm_txt']) && !empty($_POST['apm_txt']) &&
						isset($_POST['tel_txt']) && !empty($_POST['tel_txt']) &&
						isset($_POST['email_txt']) && !empty($_POST['email_txt']) &&
						isset($_POST['comentarios_txa']) && !empty($_POST['comentarios_txa']) 
					  ){

					  	$body = utf8_decode("Has recibido una petición de: <br><br> 
						Nombre: ".$_POST['nombre_txt']."<br>
						Contraseña: ".$_POST['app_txt']."<br>
						");

					  	$mail = new PHPMailer();
						$mail->IsMail();
						$mail->IsHTML(true);
						$mail->setFrom('dan_freski@hotmail.com');
						$mail->addAddress('universoft@outlook.com');
						$mail->Subject = utf8_decode('Universoft petición');
						$mail->Body = $body;

						if (!$mail->send()) {
						echo "Error: " . $mail->ErrorInfo;
						} 

						else{ 
							
						 echo "Tu petición ha sido enviada, pronto nos comunicaremos contigo."; } 
						
						} ?>
						
						<input type = "button" onclick = "location.href='../index.html'" value = "Regresar" class = "cambio">
						
						
					    
			</article>
		</section>
		<aside>
			Redes sociales:
			<br/><br/>
			<!-- Twitter -->
			<script src="http://platform.twitter.com/widgets.js"></script>
			<a href="http://twitter.com/share" class = "twitter-share-button" data-text = "Diseño web #HayCosasQueNoPuedenEsperar" data-count = "vertical">Twittear</a>
			 

			<!-- Facebook -->
			<!-- Esto es lo que no sirve Nanis, lo checas porfis  :) I love you so much! -->
			<!-- <div id="fb-root"></div>
			<script src="http://connect.facebook.net/es_LA/all.js#xfbml=1"></script>
			<div class="fb-like" data-href="https://www.facebook.com/CelexUpiicsa" data-layout="box_count" data-action="like" data-show-faces="false" data-share="false"></div> -->
		</aside>
	</section>
	<footer>Soluciones web al alcance de tu navegador.</footer>
</body>
</html>