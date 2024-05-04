<?php

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'one_db_ver1';

    $connection = mysqli_connect($host, $user, $password, $database);

    if(mysqli_connect_error()) {
        echo 'Unable to connect to MySql!';
    }
?>