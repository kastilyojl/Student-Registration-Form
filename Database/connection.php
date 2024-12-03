<?php

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = '';

    $connection = mysqli_connect($host, $user, $password, $database);

    if(mysqli_connect_error()) {
        echo 'Unable to connect to MySql!';
    }
?>