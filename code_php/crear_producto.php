<?php

use LDAP\Result;

include('conexion.php');

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];

$query = "INSERT INTO productos(nombre,precio) VALUES ('$nombre', '$precio')";
$result= mysqli_query($connection, $query);

if(!$result){
    die("Query failed");

}
header("Location: ../ver_producto.php");