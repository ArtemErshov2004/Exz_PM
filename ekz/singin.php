<?php

require_once 'connect.php';

$Email = $_POST['Email'];
$Password = $_POST['Parol'];

$check_user = mysqli_query($connect, "SELECT * FROM `abiturients` WHERE `Email` = '$Email' AND `Parol` = '$Password'");

if (mysqli_num_rows($check_user) > 0) {
        header('Location: index.php');
}
else {
        echo "<script>alert('Неверный логин или пароль!');</script>";
        
    }
?>