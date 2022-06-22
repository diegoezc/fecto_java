<?php
include("conexion.php");

$ID = $_POST['ID'];
$query = "DELETE FROM productos WHERE ID='$ID'";

try{
    $result = mysqli_query($connection,$query);
}catch(PDOException $exception){
    return $exception->getMessage();
}

if($result){
    header("Location: ../ver_producto.php");
}
