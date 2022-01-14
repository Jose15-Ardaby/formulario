<?php
include ('process.php'); ?>
<link href="/css/style.css" rel="stylesheet" type="text/css">
<form action="./process.php" method="get">
<ul>
  <li>
    <label for="name">Buscar:</label>
    <input type="text" id="identi" name="id">
    <input type="submit" class="btn" name="buscar" value="Buscar">
  </li></ul>
</form>

<form action="/my-handling-form-page" method="post">
  <table>
    <tr>
  <th>
    <label for="name">Nombre:</label>
    <input type="text" name="nombre" value="<?php echo $row['Nombre']; ?>">
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
    <input type="submit" class="btn" name="Guardar" value="Guardar">
</th>
</tr>
 
</table></form>