<?php
include("connexion.php");
$Id_A = $_POST['Id_A'];
$password = $_POST['password'];
if (empty($Id_A) or empty($password)) {
    header('Location: login_error.php');
}
else{
$sql = "select * from `administration` where Id_A='".$Id_A."'";
$result = mysqli_query($link,$sql);
$row = mysqli_fetch_assoc($result);

if($row['password']==$password){
    session_start();
    $_SESSION['Id_A']=$row['Id_A'];
    $_SESSION['password']=$row['password'];
    header("Location: menu_admin.php");
    }
    else
    {     header('Location: login_error.php');}
    
}
?>