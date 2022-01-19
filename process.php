<?php
    include ('conexion.php');
    
    $id='';
    $nombre='';
    $apellido='';
    $perfil='';
    $propietario='';
    $numero='';
    $horario='';
    $correo='';
    $tipo_lead='';
    $estado_lead='';
    $notas='';
    $whats='';
    $llamada='';
    $mail='';
    $objecion='';
    $d_fuente_1='';
    $d_fuente_2='';
    $fecha_u_acti='';
    $fecha_crea='';

    $update=false;
    
    if(isset($_POST['update'])){
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
        $direccion=$_POST['direccion'];
        mysqli_query($db, "UPDATE tb_contactos SET Nombre='$nombre',Apellido='$apellido' WHERE Conctant_Id=$id");
        echo'<script type="text/javascript">
        window.location.href="index.php";
        </script>';
    }
   
    if(isset($_POST['guardar'])){
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $perfil=$_POST['perfil'];
        $propietario=$_POST['propietario_c'];
        $numero=$_POST['numero'];
        $horario=$_POST['horario_c'];
        $correo=$_POST['correo'];
        $tipo_lead=$_POST['tipo_lead'];
        $estado_lead=$_POST['estado_lead'];
        $notas=$_POST['notas_c'];
        $whats=$_POST['estatus_w'];
        $llamada=$_POST['estatus_l'];
        $mail=$_POST['estatus_m'];
        $objecion=$_POST['objecion'];
        $d_fuente_1=$_POST['desglose_fuente1'];
        $d_fuente_2=$_POST['desglose_fuente2'];
        $fecha_u_acti=$_POST['fecha_actividad'];
        $fecha_crea=$_POST['fecha_creacion'];
        sqlsrv_query($conn,"INSERT INTO tb_contactos (Nombre,Apellido,Perfil
        ,Propietario_del_contacto,Numero_de_telefono,Horario_de_conacto,Correo,Tipo_de_Lead
        ,Estado_del_lead,Notas_del_Contacto,Status_de_Whatsapp,Status_de_Llamada,Status_de_Mail
        ,Objecion,Desglose_de_fuente_original_1,Desglose_de_fuente_original_2,Fecha_de_la_ultima_actividad
        ,Fecha_de_creacion) VALUES ('$nombre','$apellido','$perfil','$propietario','$numero','$horario',
            '$correo','$tipo_lead','$estado_lead','$notas','$whats','$llamada','$mail','$objecion',
                '$d_fuente_1','$d_fuente_2','$fecha_u_acti','$fecha_crea');");
         /*echo'<script type="text/javascript">
        window.location.href="index.php";
        </script>';*/
    }
?>
