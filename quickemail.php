<?php
//echo $_POST['num'];

$to = 'mail@mobillers.com';

$subject = 'Solicitar Llamado';

$message = '
<html>
<head>
  <title>Solicitar Llamado</title>
</head>
<body>
  <p>
  Teléfono: '.$_POST["num"].'
  </p>
</body>
</html>
';

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

$headers[] = 'To: Info <mail@mobillers.com>';

$headers[] = 'From: Solicitar Llamado <mail@mobillers.com>';

mail($to, $subject, $message, implode("\r\n", $headers));

echo "Gracias por su mensaje.<br />A la brevedad nos pondremos en contacto.";

?>
