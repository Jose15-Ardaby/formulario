 <?php
class Cconexion{
    function ConexionBD(){
$contraseña = "Primus90.$@";
$usuario = "sa";
$nombreBaseDeDatos = "CRM";
# Puede ser 127.0.0.1 o el nombre de tu equipo; o la IP de un servidor remoto
$rutaServidor = "qa.ardabytec.vip";
try {
    $conn = new PDO("sqlsrv:server=$rutaServidor;database=$nombreBaseDeDatos", $usuario, $contraseña);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h1>Success</h1>";
} catch (Exception $e) {
    echo "Ocurrió un error con la base de datos: " . $e->getMessage();
}}}
?>
