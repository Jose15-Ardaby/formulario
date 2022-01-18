 <?php

$conexion=new PDO("sqlsrv:server=10.170.12.113;database=CRM","sa","Primus90.$@");
$consulta=$conexion->prepare("Select * from tb_hubspot_tw");
$consulta->execute();
$datos=$consulta->fetchAll(PDO::FETCH_ASSOC);
var_dump($datos);

?>
