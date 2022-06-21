<?php

include("conexion.php");

$ID = $_POST['ID'];

    $nombre = $_POST['nombre'];
    $email = $_POST['precio'];
    $query_update = "UPDATE productos SET nombre='$nombre', precio='$precio' WHERE id = '$ID'";
    try{
        $result_update = mysqli_query($connection, $query_update);

    }catch(PDOException $exeption){
        return $exeption->getMessage();
    }
  

    if($result_update == 1){
        header("Location: ../ver_producto.php");
    }
    
    