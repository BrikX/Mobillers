<?php

function check($valor){
    if($valor){
      $valor = 'Si';
    }
    return $valor;
}

$nom = $_POST["nom"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$tipo = $_POST["tipo"];

$opcion = $_POST['opcion'];
//echo $opcion;

switch ($opcion){
  case 1:
    $android = $_POST['android'];
    $ios = $_POST['ios'];
    $usuarios = $_POST['usuarios'];
    if( $usuarios == 1 ){
      $usuarios = 'Con registro de usuarios';
    }elseif ( $usuarios == 2 ){
      $usuarios = 'Sin registro de usuarios';
    }

    $integracion = $_POST['integracion'];
    if( $integracion == 1 ){
      $integracion = 'Si';
    }elseif ($integracion == 2) {
      $integracion = 'No';
    }elseif ($integracion == 3){
      $integracion = 'No lo se aun';
    }

    $notificacion = $_POST['notificacion'];
    if( $notificacion == 1 ){
      $notificacion = 'Si';
    }elseif ( $notificacion == 2 ){
      $notificacion = 'No';
    }

    $ideap = $_POST['ideap'];
    $analisis = $_POST['analisis'];
    $appdesarrollo = $_POST['appdesarrollo'];
    $appdesarrollada = $_POST['appdesarrollada'];

    $tiempoproyecto = $_POST['tiempoproyecto'];
    if( $tiempoproyecto == 1 ){
      $tiempoproyecto = 'Necesito el presupuesto urgente!';
    }elseif ( $tiempoproyecto == 2 ){
      $tiempoproyecto = 'Necesito el presupuesto dentro de los 10 dias';
    }

    $tiempoapp = $_POST['tiempoapp'];
    if( $tiempoapp == 1 ){
      $tiempoapp = 'Urgente';
    }elseif ($tiempoapp == 2) {
      $tiempoapp = 'Dentro de los proximos 3 meses';
    }elseif ($tiempoapp == 3) {
      $tiempoapp = 'Dentro de los proximos 12 meses';
    }

    $similapp = $_POST['similapp'];

    
    $mens = '
    <p>
    Android: '.check($android).'
    </p>
    <p>
    Ios: '.check($ios).'
    </p>
    <p>
    Usuarios: '.$usuarios.'
    </p>
    <p>
    Integracion a un sitio web/sistema: '.$integracion.'
    </p>
    <p>
    Notificacion a usuarios: '.$notificacion.'
    </p>
    <p>
    Idea: '.check($ideap).' 
    </p>
    <p>
    Boceto/Analisis funcional: '.check($analisis).' 
    </p>
    <p>
    Aplicacion en desarrollo: '.check($appdesarrollo).' 
    </p>
    <p>
    Aplicacion ya desarrollada: '.check($appdesarrollada).' 
    </p>
    <p>
    Tiempo de proyecto: '.$tiempoproyecto.'
    </p>
    <p>
    Tiempo para finalizar la App: '.$tiempoapp.'
    </p>
     <p>
    Tiempo de proyecto: '.$tiempoproyecto.'
    </p>
    <p>
    Apps similares: '.$similapp.'
    </p>
    ';

    /* $uiux = check($_POST['uiux']);
    $prototipos = check($_POST['prototipos']);
    $marketing = check($_POST['marketing']);
    $tengotodo = check($_POST['tengotodo']);
    $laidea = $_POST['idea'];    
    $mens = '
    <p>
    Parto de una idea: '.$uiux.'
    </p>
    <p>
    Tengo una marca: '.$prototipos.'
    </p>
    <p>
    Busco un partnership: '.$marketing.'
    </p>
    <p>
    Tengo Todo: '.$tengotodo.'
    </p>
    <p>
    Idea: '.$laidea.'
    </p>
*/   

  break;
  case 2:
    $usuarios = $_POST['usuarios2'];
    if( $usuarios == 1 ){
      $usuarios = 'Con registro de usuarios';
    }elseif ( $usuarios == 2 ){
      $usuarios = 'Sin registro de usuarios';
    }

    $integracion = $_POST['integracion2'];
    if( $integracion == 1 ){
      $integracion = 'Si';
    }elseif ($integracion == 2) {
      $integracion = 'No';
    }elseif ($integracion == 3) {
      $integracion = 'No lo se aun';
    }

    $notificacion = $_POST['notificacion2'];
    if( $notificacion == 1 ){
      $notificacion = 'Si';
    }elseif ( $notificacion == 2 ){
      $notificacion = 'No';
    }

    $ideap = $_POST['ideap2'];
    $analisis = $_POST['analisis2'];
    $appdesarrollo = $_POST['appdesarrollo2'];
    $appdesarrollada = $_POST['appdesarrollada2'];

    $tiempoproyecto = $_POST['tiempoproyecto2'];
    if( $tiempoproyecto == 1 ){
      $tiempoproyecto = 'Necesito el presupuesto urgente!';
    }elseif ( $tiempoproyecto == 2 ){
      $tiempoproyecto = 'Necesito el presupuesto dentro de los 10 dias';
    }

    $tiempoapp = $_POST['tiempoapp2'];
    if( $tiempoapp == 1 ){
      $tiempoapp = 'Urgente';
    }elseif ($tiempoapp == 2) {
      $tiempoapp = 'Dentro de los proximos 3 meses';
    }elseif ($tiempoapp == 3){
      $tiempoapp = 'Dentro de los proximos 12 meses';
    }

    $similapp = $_POST['similapp2'];
 
    $mens = '
    <p>
    Usuarios: '.$usuarios.'
    </p>
    <p>
    Integracion a un sitio web/sistema: '.$integracion.'
    </p>
    <p>
    Notificacion a usuarios: '.$notificacion.'
    </p>
    <p>
    Idea: '.check($ideap).' 
    </p>
    <p>
    Boceto/Analisis funcional: '.check($analisis).' 
    </p>
    <p>
    Aplicacion en desarrollo: '.check($appdesarrollo).' 
    </p>
    <p>
    Aplicacion ya desarrollada: '.check($appdesarrollada).' 
    </p>
    <p>
    Tiempo de proyecto: '.$tiempoproyecto.'
    </p>
    <p>
    Tiempo para finalizar la App: '.$tiempoapp.'
    </p>
    <p>
    Apps similares: '.$similapp.'
    </p>
    ';

 /* $wallostand = $_POST['wallostand'];
    if( $wallostand == 1 ){
      $wallostand = 'Video Wall';
    }else{
      $wallostand = 'Stand Alone';
    }
    $adminremota = $_POST['adminremota'];
    $instalacion = $_POST['instalacion'];
    $cantpantallas = $_POST['cantpantallas'];
    $laidea = $_POST['idea'];
    $mens = '
    <p>
    VideoWall o Stand: '.$wallostand.'
    </p>
    <p>
    Administracion Remota: '.check($adminremota).'
    </p>
    <p>
    Instalacion: '.check($instalacion).'
    </p>
    <p>
    Cantidad Pantallas: '.$cantpantallas.'
    </p>
    <p>
    Idea: '.$laidea.'
    </p>';
 */
  break;
  case 3:
    $laidea = $_POST['idea'];
    $mens = '<p>Idea: '.$laidea.'</p>';
  break;
}

/*
$opciones = $_POST["opciones"];
$uiux = $_POST['uiux'];
$prototipos = $_POST['prototipos'];
$marketing = $_POST['marketing'];
$tengotodo = $_POST['tengotodo'];
$wallostand = $_POST['wallostand'];
$adminremota = $_POST['adminremota'];
$instalacion = $_POST['instalacion'];
$cantpantallas = $_POST['cantpantallas'];
$idea = $_POST['idea'];
$proyecto = $_POST['proyecto'];
*/



//echo 'Nom: '.$nom.' <br />Email: '.$email.' <br />Tel: '.$tel.' <br />Tipo: '.$tipo.' <br />Opciones: '.$opciones <br />UIUX: '.$uiux.' <br />Prototipos: '.$prototipos.' <br />Marketing:'.$marketing.' <br /> VideoWall o Stand:'.$wallostand.' <br />Administracion Remota: '.$adminremota.' <br />Instalacion: '.$instalacion.' <br />Cantidad Pantallas: '.$cantpantallas.' <br />Mensaje: '.$idea;

$to = 'info@mobillers.com';

$subject = 'Solicitar Presupuesto';

$message = '
<html>
<head>
  <title>Solicitar Presupuesto</title>
</head>
<body>
  <p>
  Nombre: '.$nom.'
  </p>
  <p>
  Email: '.$email.'
  </p>
  <p>
  Telefono: '.$tel.'
  </p>
  <p>
  Tipo: '.$tipo.'
  </p>
  '.$mens.'  
</body>
</html>
';

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

$headers[] = 'To: Info <info@mobillers.com>';

$headers[] = 'From: Mobillers Web <info@mobillers.com>';

mail($to, $subject, $message, implode("\r\n", $headers));

echo "Gracias por su mensaje.<br />A la brevedad nos pondremos en contacto.";


?>
