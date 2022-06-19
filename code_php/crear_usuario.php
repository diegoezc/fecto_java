<?php

use LDAP\Result;

include('conexion.php');

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO usuario(nombre,correo,contrasena) VALUES ('$nombre', '$email', '$password')";
$result= mysqli_query($connection, $query);

if(!$result){
    die("Query failed");

}
header("Location: ../ver_usuario.php");