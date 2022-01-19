 <?php

$dsn = 'sqlsrv:server=10.170.12.113;database=CRM';
$usuario = 'sa';
$contraseña = 'Primus90.$@';
$conn='';

try {
    $conn = new PDO($dsn, $usuario, $contraseña);
    //echo 'Conexion exitosa';
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}

/*$sth = $conn->prepare('SELECT * FROM tb_contactos WHERE Contant_Id=?');
$sth->execute();
$row = $sth->fetchAll();
var_dump($row);*/

?>
