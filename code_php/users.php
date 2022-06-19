<?php

$conection = include 'connection.php';
$query = 'SELECT * FROM users';
$sentencia = $conection->prepare($query);
$sentencia->execute();