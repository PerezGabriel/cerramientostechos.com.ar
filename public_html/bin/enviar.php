<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv=</"Content-Type" content="text/html; charset=iso-8859-1" />
<title>Safety Computer - Enviado con Exito</title><link rel="stylesheet" type="text/css" href= "../estilos.css">
</head>
<body>
<table border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td>
<div align="left"></div>
<div id="contenedor_mensaje">
<div id="cajamensaje">
<?php
$nombre = $_POST['name'];
$telefono = $_POST['phone'];
$mail = $_POST['email'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";
$mensaje = "Este mensaje fue enviado por " . $nombre . "\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "su tel es: " . $telefono . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());


$para = 'informes@taller-americano.com.ar';
$asunto = 'www.Taller-Americano.com.ar';

mail($para, $asunto, utf8_decode($mensaje), $header);


?>
</div>
</div>
</div>
</td>
</tr>
</table>
</body>