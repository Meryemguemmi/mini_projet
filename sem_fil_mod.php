<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style_sem.css" type="text/css">
    <title>Affichage Des Modules</title>
</head>
<body>
   <?php session_start();
    include("connexion.php"); ?>
    <nav>
    <ul >
    <h1><li ><a href="#Semestre1">Semestre1</a></li>
    <li ><a href="#Semestre5">Semestre5</a></li></h1>
    </ul>
</nav>
<a name="Semestre1"><h1>Semestre 1</h1></a>
<div>
<?php
        $sql2 = "select * from `module` where id_M in ('6','7','8','9','11')";
        $result2 = mysqli_query($link,$sql2);
        while ($data2=mysqli_fetch_assoc ($result2)) {
            echo "<tr><br>";
            echo "<td>".$data2['nom']."</td><br>";
            echo "</tr>";
        }
        ?>
<div>

<a name="Semestre5"><h1>Semestre 5</h1></a>
<h3>Filière Génie Industriel </h3>
<div >
<?php

$sql3 = "select * from `module` where id_M in ('1','2','3','4','5','9','10')";
        $result3 = mysqli_query($link,$sql3);
        while ($data3=mysqli_fetch_assoc ($result3)) {
            echo "<tr><br>";
            echo "<td>".$data3['nom']."</td><br>";
            echo "</tr>";
        }
        ?>
</div>

<h3>Filière Génie Eléctrique </h3>
<div>
<?php

$sql4 = "select * from `module` where id_M in ('2','3','9','15','16')";
        $result4 = mysqli_query($link,$sql4);
        while ($data4=mysqli_fetch_assoc ($result4)) {
            echo "<tr><br>";
            echo "<td>".$data4['nom']."</td><br>";
            echo "</tr>";
        }
        ?>
</div>
<h3>Filière Génie Civil </h3>
<div>
<?php

$sql5 = "select * from `module` where id_M in ('3','9','13','14','16')";
        $result5 = mysqli_query($link,$sql5);
        while ($data5=mysqli_fetch_assoc ($result5)) {
            echo "<tr><br>";
            echo "<td>".$data5['nom']."</td><br>";
            echo "</tr>";
        }
        ?>
        </div>
<h3>Filière Génie Informatique </h3>
<div>    
<?php

$sql6 = "select * from `module` where id_M in ('1','2','3','4','5','9','15')";
        $result6 = mysqli_query($link,$sql6);
        while ($data6=mysqli_fetch_assoc ($result6)) {
            echo "<tr><br>";
            echo "<td>".$data6['nom']."</td><br>";
            echo "</tr>";
        }
        ?>
    </div> 
    <div id="lien"><a href="menu_admin.php">Revenir Au Menu</a></div>
 </body> 
 </html >