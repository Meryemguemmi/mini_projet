<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <style type="text/css">
body
{
     background-image: url("menu.jpg") ;
     background-size: 1400px;
}
h1
{
  padding: 10px;
  background-color: #8FBC8F;
  border-radius: 3px;
  background-size: 50px;
  color: white;
  text-align: CENTER;
  letter-spacing: 5px;
}
a {
    display: block;
    color: whitesmoke;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    margin-top: 70px;


}
table{margin: auto;
      width: 100%;
      text-align: left;}

a:hover{
  background-color: #DEF3E0;
  color: #27ae60;
background-size: 20px
}
  td
  {
    font-size: 25px;
    margin-top: 100px;
  }
  #deconnexion
  {

    background-color: #8FBC8F; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
    margin-left: 600px;
    margin-top: 50px;
  }
  #deconnexion:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
  }
  

 
</style>
</head>
<body>
    <h1>MENU:</h1>
    <table>
    <tr><td><a href="sem_fil_mod.php">Modules De Chaque Semestre</a></td></tr>
    <tr><td><a href="horaire_filière.php">Charge Horaire Par Module</a></td></tr>
    <tr><td><a href="horaire_enseignant.php">Charge Horaire Par Enseignant</a></td></tr>
    <tr><td><a href="taux_occupation.php">Taux D'Occupation De Salles</a></td></tr>
   </table>
   <a href="deconnexion.php" id="deconnexion">Déconnecter</a>
