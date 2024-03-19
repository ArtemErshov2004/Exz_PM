<?php

    $connect = mysqli_connect('localhost', 'root', '', 'exz');

    if (!$connect) {
        die('Error connect to DataBase');
    }
?>