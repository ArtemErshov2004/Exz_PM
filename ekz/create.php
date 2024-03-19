<?php

require_once 'connect.php';

$Familia = $_POST['Familia'];
$Ima = $_POST['Ima'];
$Otchestvo = $_POST['Otchestvo'];
$Data_Rojdenia = $_POST['Data_Rojdenia'];
$Adres = $_POST['Adres'];
$Email = $_POST['Email'];
$Password = $_POST['Parol'];

mysqli_query($connect, query: "INSERT INTO `abiturients` (`Kod_Abiturienta`, `Familia`, `Ima`, `Otchestvo`, `Data_Rojdenia`, `Adres`, `Email`, `Parol`) VALUES (NULL, '$Familia', '$Ima', '$Otchestvo', '$Data_Rojdenia', '$Adres', '$Email', '$Password')" );
header('Location: avtoriz.php');