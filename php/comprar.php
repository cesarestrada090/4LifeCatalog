<?php

/* Formulario de contacto HTML5, PHP Y Bootstraps
  Creado por: www.render2web.com
  Version: 1.1 */

//Comprobamos que se haya presionado el boton enviar
//Guardamos en variables los datos enviados
$ciudad = $_POST['ciudad'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$montoTotal = $_POST['montoTotal'];

///Validamos del lado del servidor que el nombre y el email no estén vacios
if ($direccion == '') {
    echo "Debe ingresar su nombre";
} else if ($telefono == '') {
    echo "Debe ingresar su email";
} else {
	echo 4;
    $para = "cesarestrada090@gmail.com"; //Email al que se enviará
    $asunto = "COMPRA PRODUCTO ".$producto; //Puedes cambiar el asunto del mensaje desde aqui
    //Este sería el cuerpo del mensaje
    $msj = "
		<table border='0' cellspacing='3' cellpadding='2'>
		  <tr>
			<td width='30%' align='left' bgcolor='#f0efef'><strong>Telefono:</strong></td>
			<td width='80%' align='left'>$telefono</td>
		  </tr>
		  <tr>
			<td align='left' bgcolor='#f0efef'><strong>producto</strong></td>
			<td align='left'>$producto</td>
		  </tr>
		   <tr>
			<td width='30%' align='left' bgcolor='#f0efef'><strong>cantidad:</strong></td>
			<td width='70%' align='left'>$cantidad</td>
		  </tr>
		  <tr>
			<td width='30%' align='left' bgcolor='#f0efef'><strong>montoTotal:</strong></td>
			<td width='70%' align='left'>$montoTotal</td>
		  </tr>
		  <tr>
			<td width='30%' align='left' bgcolor='#f0efef'><strong>ciudad:</strong></td>
			<td width='70%' align='left'>$ciudad</td>
		  </tr>
		  <tr>
			<td width='30%' align='left' bgcolor='#f0efef'><strong>Direccion:</strong></td>
			<td width='70%' align='left'>$direccion</td>
		  </tr>
	</table>	
";
$nombre="4Life Peru";
$email="pedidos@4lifeperudelivery.com";
//Cabeceras del correo
    $headers = "From: $nombre <$email>\r\n"; //Quien envia?
    $headers .= "X-Mailer: PHP5\n";
    $headers .= 'MIME-Version: 1.0' . "\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //
//Comprobamos que los datos enviados a la función MAIL de PHP estén bien y si es correcto enviamos
    if (mail($para, $asunto, $msj, $headers)) {
        echo "Su mensaje se ha enviado correctamente";
        echo "<br />";
        echo '<a href="../formulario_contacto.html">Volver</a>';
    }
}
?>