 <?php

 //phpinfo();

$dsn = 'sqlsrv:server=10.170.12.113;database=CRM';
$usuario = 'sa';
$contraseña = 'Primus90.$@';
$conn='';

try {
    $conn = new PDO($dsn, $usuario, $contraseña);
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}
///$conexion=new PDO("sqlsrv:server=10.170.12.113;database=CRM","sa","Primus90.$@");
/*$consulta=$conn->prepare("Select * from tb_contactos");
$consulta->execute();
$datos=$consulta->fetchAll(PDO::FETCH_ASSOC);
var_dump($datos);*/

?>
