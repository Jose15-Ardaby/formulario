<?php
    include ('conexion.php');
    
   
    if(isset($_POST['guardar'])){
        
        $stm="INSERT INTO clicklb () VALUES ('');";
        $conn->query($stm);
         echo'<script type="text/javascript">
        window.location.href="index.php";
        </script>';
    }
?>
