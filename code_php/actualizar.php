<?php

include("conexion.php");

$ID = $_POST['ID'];

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query_update = "UPDATE usuario SET nombre='$nombre', correo='$email', contrasena='$password' WHERE id = '$ID'";
    try{
        $result_update = mysqli_query($connection, $query_update);

    }catch(PDOException $exeption){
        return $exeption->getMessage();
    }
  

    if($result_update == 1){
        header("Location: ../ver_usuario.php");
    }
    
    

    
    


