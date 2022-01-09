<style type="text/css">

body {

	background-color: aqua;

}

</style>

<?php

if(isset($_POST['correoinsertado'])) {



$email_to = "arezZasesino@gmail.com";//Correo al que se enviara el correo

$email_subject = "Pagina WEB Formulario";//Asunto que se enviara al correo



//Validamos los datos insertados

if(!isset($_POST['nombreinsertado']) ||

!isset($_POST['correoinsertado']) ||

!isset($_POST['telefonoinsertado']) ||

!isset($_POST['mensajeinsertado'])) {



echo "<b>Lamentablemente no se envio tu correo intenta mas tarde. </b><br />";

echo "Verifica tus datos antes de darle a enviar, por favor <br />";

die();

}



$email_message = "----------Detalles Mensaje:----------<br>";

$email_message .= "Nombre: " . $_POST['nombreinsertado'] . "<br>";

$email_message .= "E-mail: " . $_POST['correoinsertado'] . "<br>";

$email_message .= "Teléfono: " . $_POST['telefonoinsertado'] . "<br>";

$email_message .= "Mensaje: " . $_POST['mensajeinsertado'] . "<br>";







$remitente="arezZYoutube@arezZ.com";

$headers = "MIME-Version: 1.0\r\n";

$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

$headers .= "From: Mensaje-Contacto-arezZ <$remitente>\r\n";

$headers .= "Reply-To: $remitente\r\n";

$headers .= "Return-path: $remitente\r\n";

//$headers .= "Bcc: copiamensaje@misitio.com\r\n";//enviar copia a otro correo

@mail($email_to, $email_subject, $email_message, $headers);



echo "<center>";

echo 

'

<h2>Correo Enviado</h2>

<h3>Te contactaremos dentro de 24 horas</h5>

<h1>arezZ estuvo aqui</h1>





';

echo "<center>";

}

?>