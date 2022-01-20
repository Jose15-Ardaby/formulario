<?php include ('process.php'); 
    if(isset($_GET['interaccion'])){
      $inter=$_GET['interaccion'];
    }
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="./css/styles.css">
<link rel="icon" href="./css/favicon.ico">
</head>
<title>ClickLab</title>
<img src='./css/logo.jpg' width=15%>
<body>
<form action="./process.php" method="post">
  <input type='hidden' value='<?php echo $inter; ?>' name='interaccion'>
  <table>
    <tr>
  <th class='input-group' colspan=3>
    <label for="name">Nombre Completo*:</label>
    <input type="text" name="nombre" value="" class="input" required>
  </th>
  </tr>
  <tr>
  <th>
    <label for="ciudad">Ciudad*:</label>
    <input type="text"  name="ciudad" value="" class="input" required>
  </th>
  <th>
    <label for="delegacion">Delegación*:</label>
    <input type="text"  name="delegacion" class="input" required>
</th>
  <th>
    <label for="codigo_p">Código Postal*:</label>
    <input type="text" name="codigo_p" class="input" required>
</th>
</tr>
<tr>
  <th>
    <label for="colonia">Colonia*:</label>
    <input type="text"  name="colonia" class="input" required>
</th>
  <th>
    <label for="movil">Teléfono Móvil*:</label>
    <input type="text"  name="movil" class="input" required>
</th>
  <th>
    <label for="fijo">Teléfono Fijo:</label>
    <input type="text"  name="fijo" class="input">
</th>
</tr>
<tr>
  <th>
    <label for="correo">Correo electrónico*:</label>
    <input type="mail"  name="correo" placeholder='Ejem: example@gmail.com' class="input" required>
</th>
  <th>
    <label for="t_examen">Tipo de examen:</label>
    <select name='t_examen' class="input">
        <option value=null selected>---------</option>
        <option>Covid-19</option>
        <option>Examen de sangre</option>
        <option>Orina</option>
        <option>Glucosa</option>
    </select>
</th>
  <th>
    <label for="enterado">Enterado a través de:</label>
    <select name='enterado' class="input">
        <option value=null selected>---------</option>
        <option>Facebook</option>
        <option>Twitter</option>
        <option>Whatsapp</option>
        <option>Pagina web</option>
        <option>Publicidad</option>
        <option>Otros</option>
    </select>
</th>
</tr>
<tr>
<th>
    <label for="campaña">Campaña:</label>
    <select name='campaña' class="input">
        <option value=null selected>---------</option>
        <option value='506'>ClickLab-Head Land</option>
    </select>
</th>
<th>
    <label for="agente">Agente:</label>
    <select name='agente' class="input">
        <option>
       <?php try{
          $agente=$_GET['agente'];
            }
              catch(Exception $e){$agente="-----";
            }
              if(empty($agente)){echo "---------";
          }
else{
  echo $agente;  
} ?>
        </option>
        
    </select>
</th>
<th>
<label for='seguimiento'>¿Requiere seguimiento?<br>
<input type='radio' name='seguimiento' value='s' checked>Sí
<input type='radio' name='seguimiento' value='n'>No
          </th>
</tr>
<tr>
  <th colspan=3>
<div class="input-group">
      <button class="edit_btn" type="submit" name="guardar">Guardar</button>
</div></th>
</tr>
<label>* Datos obligatorios</label>
 </table>
</form>
</body>
</html>