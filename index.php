<?php include ('process.php'); ?>
<?php
/*if(isset($_GET['buscar'])){
  $id=$_GET['id'];
  //$params=array($id);
  //$sqlVi="EXEC STOR_SL ID=? ";
  $sqlVi="SELECT * FROM tb_contactos WHERE ID=$id";
  $stmt=sqlsrv_query($conn,$sqlVi)
    if(sqlsrv_num_rows($stmt)==1){
        $row=sqlsvr_fetch_array($stmt);
      }
}*/
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="./css/styles.css">
</head>
<form method="get">
<ul>
  <li>
    <label for="name">Buscar:</label>
    <input type="text" id="identi" name="id">
    <input type="hidden" name="buscar" value="#">
    <button class="btn" type="submit">Buscar</button>
  </li></ul>
</form>

<form action="./process.php" method="post">
  <table>
    <tr>
  <th>
    <label for="name">Nombre:</label>
    <input type="text" name="nombre">
  </th>
  <th>
    <label for="mail">Apellido:</label>
    <input type="text"  name="apellido">
  </th>
  <th>
    <label for="msg">Perfil:</label>
    <input type="text"  name="perfil">
</th>
</tr>
<tr>
  <th>
    <label for="mail">Propietario del contacto:</label>
    <input type="text" name="propietario_c">
</th>
  <th>
    <label for="mail">Número de telefono:</label>
    <input type="text"  name="numero">
</th>
  <th>
    <label for="mail">Horario de contacto:</label>
    <input type="text"  name="horario_c">
</th>
</tr>
  <th>
    <label for="mail">Correo:</label>
    <input type="text"  name="correo">
</th>
  <th>
    <label for="mail">Tipo de Lead:</label>
    <input type="text"  name="tipo_lead">
</th>
  <th>
    <label for="mail">Estado de Lead:</label>
    <input type="text"  name="estado_lead">
</th>
</tr>
<tr>
  <th>
    <label for="mail">Notas del contacto:</label>
    <input type="text"  name="notas_c">
</th>
  <th>
    <label for="mail">Estatus de Whatsapp:</label>
    <input type="text"  name="estatus_w">
</th>
  <th>
    <label for="mail">Estatus de llamada:</label>
    <input type="text"  name="estatus_l">
</th>
</tr>
<tr>
  <th>
    <label for="mail">Estatus de email:</label>
    <input type="text"  name="estatus_m">
</th>
  <th>
    <label for="mail">Objeción:</label>
    <input type="text" id="mail" name="objecion">
</th>
  <th>
    <label for="mail">Notas de objeción:</label>
    <input type="text" id="mail" name="notas_o">
</th>
</tr>
<tr>
  <th>
    <label for="mail">Desglose de fuente original 1:</label>
    <input type="text" name="desglose_fuente1">
</th>
  <th>
    <label for="mail">Desglose de fuente original 2:</label>
    <input type="text" name="desglose_fuente2" >
</th>
  <th>
    <label for="mail">Fecha de la ultima actividad:</label>
    <input type="text" name="fecha_actividad">
</th>
</tr>
<tr>
  <th>
    <label for="mail">Fecha de creación:</label>
    <input type="text"  name="fecha_creacion">
</th>
<th><input type="submit" class="edit_btn" name="Guardar" value="Guardar"></th>
</tr>
 </table>
</form>
</html>