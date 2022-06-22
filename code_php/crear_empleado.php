<?php

use LDAP\Result;

include('conexion.php');

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$CI = $_POST['CI'];

$query = "INSERT INTO empleado(nombre,correo,CI) VALUES ('$nombre', '$correo', '$CI')";
$result= mysqli_query($connection, $query);

if(!$result){
    die("Query failed");

}
header("Location: ../ver_empleado.php");