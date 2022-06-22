<?php

use LDAP\Result;

include('conexion.php');

$nombre = $_POST['nombre'];
$cantidad = $_POST['cantidad'];
$categoria = $_POST['categoria'];

$query = "INSERT INTO mercancia(nombre,cantidad,categoria) VALUES ('$nombre', '$cantidad', '$categoria')";
$result= mysqli_query($connection, $query);

if(!$result){
    die("Query failed");

}
header("Location: ../ver_mercancia.php");