<?php
//Datos de conexion
$servername = "localhost";
$username = "root";
$password = "";

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
$ip               = $_SERVER['REMOTE_SERVER'];
$navegador        = $_SERVER['HTTP_USER_AGENT'];
$ver_contrato     = '0';
$fecha_contrato   = '1990-01-01';
$nro_contrato     = '0';




try {
  //Conexion a la base de datos MySQL mediante PDO
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //Ejecucion de la consulta
  $sql = "INSERT INTO inscritos VALUES ( '', $curso, $nombre_completo, $ci, $forma_pago, $fecha_nacimiento, $direccion, $celular, $correo, $fecha_inscripcion, $ip, $navegador, $ver_contrato, $fecha_contrato, $nro_contrato )";
  $conn->exec($sql);
  echo "Exito de consulta";

} catch(PDOException $e) {
  echo "Error de Conexion : " . $e->getMessage();
}
