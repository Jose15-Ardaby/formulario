<?php
    include ('conexion.php');
    
    $id='';
    $nombre='';
    $ciudad='';
    $delegacion='';
    $codigoP='';
    $colonia='';
    $movil='';
    $fijo='';
    $correo='';
    $examen='';
    $informacion='';
    $campaña='';
    $agente='';
    $seguir='';
    $inter='';

    if(isset($_POST['guardar'])){
        $nombre=$_POST['nombre'];
        $name=explode(' ',$nombre);
        $ciudad=$_POST['ciudad'];
        $delegacion=$_POST['delegacion'];
        $codigoP=$_POST['codigo_p'];
        $colonia=$_POST['colonia'];
        $movil=$_POST['movil'];
        $fijo=$_POST['fijo'];
        $correo=$_POST['correo'];
        $examen=$_POST['t_examen'];
        $informacion=$_POST['enterado'];
        $campaña=$_POST['campaña'];
        $agente=$_POST['agente'];
        $seguir=$_POST['seguimiento'];
        $inter=$_POST['interaccion'];
        
        $stm="INSERT INTO clicklb (Nombre,Apellido_Paterno,Apellido_Materno,Ciudad,Delegacion,CodigoPostal,
        Colonia,TelefonoMovil,TelefonoFijo,Correo,TipoExamen,MedioInformacion,Campaña,Agente,Seguimiento,InteraccionId) VALUES ('$name[0]','$name[1]','$name[2]',
        '$ciudad','$delegacion','$codigoP','$colonia','$movil','$fijo','$correo','$examen','$informacion','$campaña','$agente','$seguir','$inter');";
        $conn->query($stm);
        echo'<script type="text/javascript">
        alert("Su registro a sido añadido con exito");
        window.close();
        </script>';
    }
?>
