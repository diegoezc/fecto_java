<?php
include("conexion.php");

$ID = $_POST['ID'];
$query = "DELETE FROM usuario WHERE ID='$ID'";

try{
    $result = mysqli_query($connection,$query);
}catch(PDOException $exception){
    return $exception->getMessage();
}

if($result){
    header("Location: ../ver_usuario.php");
}
