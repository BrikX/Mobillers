<?php

$to = 'mail@mobillers.com';

$subject = 'Formulario de Contacto';

$message = '
<html>
<head>
  <title>Formulario de Contacto</title>
</head>
<body>
  <p>
  Nombre: '.$_POST["nomape"].'
  </p>
  <p>
  Telefono: '.$_POST["tel"].'
  </p>
  <p>
  Email: '.$_POST["emailf"].'
  </p>
  <p>
  Mensaje: '.$_POST["consulta"].'
  </p>
</body>
</html>
';

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

$headers[] = 'To: Info <mail@mobillers.com>';

$headers[] = 'From: Contacto <mail@mobillers.com>';

mail($to, $subject, $message, implode("\r\n", $headers));

echo "Gracias por su mensaje.<br />A la brevedad nos pondremos en contacto.";

?>
