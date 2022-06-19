<?php
$config = include "config.php";
$connection = mysqli_connect($config['host'], $config['user_name'], $config['user_password'], $config['database']);
