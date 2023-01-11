<?php
include("connexion.php");
session_start();
$Semestre = $_GET['nom_S'];
$Filière = $_GET['nom_F'];
$Module = $_GET['nom'];
$Date = $_GET['date'];
$Local = $_GET['local'];


$sql = " INSERT INTO rattrapage  (Id_R,Semestre,Filière,Module,Date,Local) Values('1','$Semestre','$Filière','$Module','$Date','$Local')" ;

$result = mysqli_query($link,$sql);
$row = mysqli_fetch_assoc($result);

 header('Location: ratt.php');}
    

?>