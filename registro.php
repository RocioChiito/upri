<?php
//Datos de conexion
$servername = "localhost";
$username = "bett0";
$password = "123";
$dbname ="upri";

//Variables enviados del archivo index.html
$curso            = addslashes($_POST['course']);
$nombre_completo  = addslashes($_POST['name']);
$ci               = addslashes($_POST['ci']);
$forma_pago       = addslashes($_POST['paymentPlan']);
$fecha_nacimiento = addslashes($_POST['date']);
$direccion        = addslashes($_POST['address']);
$celular          = addslashes($_POST['mobile']);
$correo           = addslashes($_POST['email']);

//Variables que se genera de manera automatica
$fecha_inscripcion= date('Y-m-d H:i:s');
$ip               = $_SERVER['REMOTE_ADDR'];
$navegador        = $_SERVER['HTTP_USER_AGENT'];
$ver_contrato     = '0';
$fecha_contrato   = '1990-01-01';
$nro_contrato     = '0';




//////////////////correo
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer;
//Servidor
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->isSMTP();
$mail->Mailer = "smtp";
$mail->Host       = 'smtp.gmail.com';
$mail->SMTPAuth   = true;
$mail->Username   = 'unidaddepostgradoyrelacionesin@gmail.com';
$mail->Password   = 'Unidaddepostgrado123';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port       = 587;

//Envios
$mail->setFrom('postgradoumsavirtual@gmail.com', 'Unidad de Postgrado y Relaciones Internacionales');
$mail->addAddress('postgradoumsavirtual@gmail.com');
$mail->addReplyTo('postgradoumsavirtual@gmail.com', 'Información');

//Contenido
$mail->isHTML(true);
$mail->Subject = 'UPRI - Inscripcion al curso Doctorado: Derecho Constitucional y Administrativo';

try {
  //Conexion a la base de datos MySQL mediante PDO
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //Ejecucion de la consulta
  $sql = "INSERT INTO inscritos (curso, nombre_completo, ci, forma_pago, fecha_nacimiento, direccion, celular, correo, fecha_inscripcion, ip, navegador, ver_contrato, fecha_contrato, nro_contrato) ".
         " VALUES (  '$curso', '$nombre_completo', '$ci', '$forma_pago', '$fecha_nacimiento', '$direccion', '$celular', '$correo', '$fecha_inscripcion', '$ip', '$navegador', '$ver_contrato', '$fecha_contrato', '$nro_contrato' );";
  //echo $sql;
  $conn->exec($sql);

  //Enviar Correo
  $mail->Body    = ''.
  '<center><h2>'.
  'Universidad Mayor de San Andr&eacute;s<br>'.
  'Facultad de Derecho y Ciencias Pol&iacute;ticas<br>'.
  'Unidad de Postgrado y Relaciones Internacionales<br>'.
  '<h2><center><br><br>'.
  '<b>Curso:</b>"'.$curso.'"<br><br>'.
  '<b>Usted est&aacute; inscrito en el curso virtual "'.$curso.'"</b><br><br>'.
  '<table width="100%">'.
  '<tr><th colspan="2">'.
  'DATOS PERSONALES'.
  '</th></tr>'.
  '<tr><td><b>Nombre:</b></td> <td>'.$nombre_completo.'</td></tr>'.
  '<tr><td><b>CI:</b></td> <td> '.$ci.'</td></tr>'.
  '<tr><td><b>Fecha de Nacimiento: </b></td> <td>'.$fecha_nacimiento.'</td></tr>'.
  '<tr><td><b>Dirección:</b></td> <td> '.$direccion.'</td></tr>'.
  '<tr><td><b>Celular:</b></td> <td> '.$celular.'</td></tr>'.
  '<tr><td><b>E-mail:</b></td> <td> '.$correo.'</td></tr>'.
  '</table><br><br>'.
  '<b>La Administraci&oacute;n se contactara con usted para proceder con su inscripci&oacute;n</b><br><br>'.
  '<b>Gracias por usar nuestro sistema !</b><br>'.
  '<b>Que tenga un buen d&iacute;a.</b><br><br>'.
  '<b>Mas Informaci&oacute;n: <a href="postgradoumsavirtual@gmail.com" target="_blank">postgradoumsavirtual@gmail.com</a></b><br>';
  //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

  $mail->addAddress($correo, $nombre_completo);
  $mail->send();

  echo "BIEN";

} catch(PDOException $e) {
  //echo "Error de Conexion : " . $e->getMessage();
  echo "ERROR";
}
