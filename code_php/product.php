<?php

$conection = include 'connection.php';
$query_p = 'SELECT * FROM product';
$sentencia = $conection->prepare($query_p);
$sentencia->execute();