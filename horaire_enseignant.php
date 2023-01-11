<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>list_etudiants</title>
    <style type="text/css">
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
h1
{
    padding: 10px;
  color: #8FBC8F;
  border-radius: 3px;
  background-size: 50px;
  text-align: CENTER;
  letter-spacing: 5px;
}
a {
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
  a:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
  }

</style>
</head>
<body>
    <h1>CHARGE HORAIRE PAR ENSEIGNANT</h1>
<table id="customers">
    <tr>
        <th>Nom Enseignant</th>
        <th>Charge Horaire</th>
    </tr>
    <?php
    include("connexion.php");
    $sql="SELECT `nom_E`,SUM(`heure_par_module`) FROM `enseignant`,`module`,`enseigner` WHERE enseignant.Id_E=enseigner.Id_E and module.id_M=enseigner.Id_E GROUP BY `nom_E`";
    $result=mysqli_query($link,$sql);
    while($data=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$data['nom_E']."</td>";
        echo "<td>".$data['SUM(`heure_par_module`)']." h</td>";
        echo "</tr>";
    }
    ?>
</table>
<a href="menu_admin.php">Revenir Au Menu</a>
</body>
</html>
