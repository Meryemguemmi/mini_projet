
<?php
include("connexion.php");
$email = $_POST['email'];
$password = $_POST['password'];
if (empty($email) or empty($password)) {
    header('Location: login_error.php');
}
else{
$sql = "select * from `enseignant` where email='".$email."'";
$result = mysqli_query($link,$sql);
$row = mysqli_fetch_assoc($result);

if($row['password']==$password){
    session_start();
    $_SESSION['email']=$row['email'];
    $_SESSION['password']=$row['password'];
    header("Location: formulaire.php");
    }
    else
    {     header('Location: login_error.php');}
    
}
?>