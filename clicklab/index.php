<?php include ('process.php'); ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="./css/styles.css">
<link rel="icon" href="./css/favicon.ico">
</head>
<title>ClickLab</title>

<form action="./process.php" method="post">
  <table>
    <tr>
  <th>
    <label for="name">Nombre Completo:</label>
    <input type="text" name="nombre" value="">
  </th>
  <th>
    <label for="ciudad">Ciudad:</label>
    <input type="text"  name="ciudad" value="">
  </th>
  <th>
    <label for="delegacion">Delegacion:</label>
    <input type="text"  name="delegacion">
</th>
</tr>
<tr>
  <th>
    <label for="codigo_p">Codigo Postal:</label>
    <input type="text" name="codigo_p" placeholder='Ejem: example@gmail.com'>
</th>
  <th>
    <label for="colonia">Colonia:</label>
    <input type="text"  name="colonia">
</th>
  <th>
    <label for="movil">Telefono Movil:</label>
    <input type="text"  name="movil">
</th>
</tr>
  <th>
    <label for="fijo">Telefono Fijo:</label>
    <input type="text"  name="fijo">
</th>
  <th>
    <label for="correo">Correo electronico:</label>
    <input type="mail"  name="correo">
</th>
  <th>
    <label for="t_examen">Tipo de examen:</label>
    <select name='t_examen'>
        <option value=null selected>---------</option>
        <option>Covid-19</option>
        <option>Examen de sangre</option>
        <option>Orina</option>
        <option>Glucosa</option>
    </select>
</th>
</tr>
<tr>
  <th>
    <label for="enterado">Enterado a travez de:</label>
    <select name='enterado'>
        <option value=null selected>---------</option>
        <option>Facebook</option>
        <option>Twitter</option>
        <option>Whatsapp</option>
        <option>Pagina web</option>
        <option>Publicidad</option>
        <option>Otros</option>
    </select>
</th>
<th>
    <label for="campaña">Campaña:</label>
    <select name='campaña'>
        <option value=null selected>---------</option>
        <option>Covid-19</option>
        <option>Examen de sangre</option>
        <option>Orina</option>
        <option>Glucosa</option>
    </select>
</th>
<th>
    <label for="agente">Agente:</label>
    <select name='agente'>
        <option value=null selected>---------</option>
        <option>Covid-19</option>
        <option>Examen de sangre</option>
        <option>Orina</option>
        <option>Glucosa</option>
    </select>
</th>
</tr>
<tr>
  <th colspan=3>
<div class="input-group">
      <button class="edit_btn" type="submit" name="guardar">Guardar</button>
</div></th>
</tr>
 </table>
</form>
</html>