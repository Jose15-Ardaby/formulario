<?php
    include ('conexion.php');
    
    //$params=array($ID);

    /*if(isset($_POST['nuevo'])){
        $sqlIn="EXEC STOR_IN ";
    }*/
    
    if(isset($_GET['guardar'])){
        
        $sqlUp="EXEC STOR_IN ";
    }
   
    /*if(isset($_GET['buscar'])){
        $ID=htmlspecialchars($_GET['id']);
        $params=array($ID);
        //echo "<script type='text/javascript'>alert('$ID');</script>";
        //$sqlVi="EXEC STOR_SL ID=? ";
        $sqlVi="SELECT * FROM tb_contactos WHERE ID=?";
          if( $stmt=sqlsrv_query($conn,$sqlVi,$params)) {
              $row=sqlsvr_fetch_array($stmt);
              return $row;
              echo "<script type='text/javascript'>
        window.location.href='index.php';
        </script>";
        }else{
             die( print_r( sqlsrv_errors(), true));
        }
    }*/
?>
