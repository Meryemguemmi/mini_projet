<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="moncv.css" type="text/css">
    <title>Emploi du Temps</title>
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
  background-color: #49925C;
  color: white;
}
h2
{
  text-align: center;
  color: #1A682F;
}
#titre {
 padding: 10px;
  background-color:  #49925C;
  border-radius: 3px;
  background-size: 50px;
  color: white;
  text-align: CENTER;
  letter-spacing: 5px;
}
h1
{
    padding: 10px;
  color: #2D422E;
  border-radius: 3px;
  background-size: 50px;
}
</style>
</head>
<body>
    <?php session_start();
include("connexion.php"); ?>
    <h1 id="titre">EMPLOI DU TEMPS DE L'ANNEE SCOLAIRE 2022/2023</h1>
    <h2>Semestre 1</h2>
  <table id="customers"  width="60%" border="3" cellspacing="2" cellpadding="8" align="center">
<tr>
<th align="center"> Jour/Date</th>
<th align="center"> 9:00h --> 11:00h</th>
        <th align="center"> 11:15h --> 13:00h</th>
        <th align="center"> 14:00h --> 16:00h</th>
        <th align="center"> 16:15h --> 18:00h</th></tr>

    <tr>
        <th align="center"> Lundi </th>
        <?php
        $sql= "select * from `module` where id_M='9'";
        $result= mysqli_query($link,$sql);
        while ($data=mysqli_fetch_assoc ($result)) {
            echo "<td><center>".$data['nom']."<h5>salle 5</h5></center> </td>";
        }
        ?>
        <?php
        $sql= "select * from `module` where id_M='8'";
        $result= mysqli_query($link,$sql);
        while ($data=mysqli_fetch_assoc ($result)) {
            echo "<td><center>".$data['nom']." <h5>amphi B</h5> </center></td>";
        }
        ?>
        <?php
        $sql= "select * from `module` where id_M='11'";
        $result= mysqli_query($link,$sql);
        while ($data=mysqli_fetch_assoc ($result)) {
            echo "<td><center>".$data['nom']." <h5>amphi A </h5> </center></td>";
        }
        ?>
        <td><center> __</center></td>
    </tr>
    <tr>
        <th align="center"> Mardi </th>
        <?php
        $sql= "select * from `module` where id_M='8'";
        $result= mysqli_query($link,$sql);
        while ($data=mysqli_fetch_assoc ($result)) {
            echo "<td><center> TD ".$data['nom']."<h5>salle 1 </h5</center></td>";
        }
        ?>
        <?php
        $sql= "select * from `module` where id_M='11'";
        $result= mysqli_query($link,$sql);
        while ($data=mysqli_fetch_assoc ($result)) {
            echo "<td><center> TD ".$data['nom']."<h5>amphi B </h5</center></td>";
        }
        ?>
        <td><center> __</center></td>
        <td><center> __</center></td>
    </tr>
    <tr>
        <th align="center"> Mercredi </th>
<td><center> __</center></td>
        <?php
        $sql= "select * from `module` where id_M='6'";
        $result= mysqli_query($link,$sql);
        while ($data=mysqli_fetch_assoc ($result)) {
            echo "<td><center>".$data['nom']."<h5>amphi C</h5></center> </td>";
        }
        ?>
        <?php
        $sql= "select * from `module` where id_M='8'";
        $result= mysqli_query($link,$sql);
        while ($data=mysqli_fetch_assoc ($result)) {
            echo "<td><center> TP ".$data['nom']." <h5>salle 6</h5> </center></td>";
        }
        ?>
        <?php
        $sql= "select * from `module` where id_M='7'";
        $result= mysqli_query($link,$sql);
        while ($data=mysqli_fetch_assoc ($result)) {
            echo "<td><center>".$data['nom']." <h5>amphi B </h5> </center></td>";
        }
        ?>
        </tr>
    <tr>
        <th align="center"> Jeudi </th>
        <?php
        $sql= "select * from `module` where id_M='15'";
        $result= mysqli_query($link,$sql);
        while ($data=mysqli_fetch_assoc ($result)) {
            echo "<td><center>".$data['nom']."<h5>amphi C</h5></center> </td>";
        }
        ?>
        <?php
        $sql= "select * from `module` where id_M='6'";
        $result= mysqli_query($link,$sql);
        while ($data=mysqli_fetch_assoc ($result)) {
            echo "<td><center> TP ".$data['nom']." <h5>salle 6</h5> </center></td>";
        }
        ?>
        <?php
        $sql= "select * from `module` where id_M='7'";
        $result= mysqli_query($link,$sql);
        while ($data=mysqli_fetch_assoc ($result)) {
            echo "<td><center>TP ".$data['nom']." <h5>amphi A </h5> </center></td>";
        }
        ?>
        <td><center> __</center></td>
        </tr>
    <tr>
        <th align="center"> Vendredi </th>
    <?php
        $sql= "select * from `module` where id_M='11'";
        $result= mysqli_query($link,$sql);
        while ($data=mysqli_fetch_assoc ($result)) {
            echo "<td><center>TP ".$data['nom']." <h5>salle 2</h5> </center></td>";
        }
        ?>
        <?php
        $sql= "select * from `module` where id_M='6'";
        $result= mysqli_query($link,$sql);
        while ($data=mysqli_fetch_assoc ($result)) {
            echo "<td><center>TD ".$data['nom']." <h5>amphi D</h5> </center></td>";
        }
        ?>
        <td><center> __</center></td>
        <td><center> __</center></td>
    </tr>              
           



</tr>
</table>

    <h2>Semestre 5</h2>
    <table id="customers"  width="60%" border="3" cellspacing="2" cellpadding="8" align="center">  
    <tr>
        <th align="center"> Jour/Date</th>
        <th align="center"> 9:00h --> 11:00h</th>
        <th align="center"> 11:15h --> 13:00h</th>
        <th align="center"> 14:00h --> 16:00h</th>
        <th align="center"> 16:15h --> 18:00h</th></tr>

    <tr>
        <th align="center"> Lundi </th>
        <?php
        $sql= "select * from `module` where id_M='10'";
        $result= mysqli_query($link,$sql);
        while ($data=mysqli_fetch_assoc ($result)) {
            echo "<td><center>".$data['nom']."<h5>amphi A</h5></center> </td>";
        }
        ?>
        <?php
        $sql= "select * from `module` where id_M='9'";
        $result= mysqli_query($link,$sql);
        while ($data=mysqli_fetch_assoc ($result)) {
            echo "<td><center>".$data['nom']." <h5>salle 3</h5> </center></td>";
        }
        ?>
        <?php
        $sql= "select * from `module` where id_M='4'";
        $result= mysqli_query($link,$sql);
        while ($data=mysqli_fetch_assoc ($result)) {
            echo "<td><center>".$data['nom']." <h5>amphi B </h5> </center></td>";
        }
        ?>
       <?php
        $sql= "select * from `module` where id_M='4'";
        $result= mysqli_query($link,$sql);
        while ($data=mysqli_fetch_assoc ($result)) {
            echo "<td><center> TD".$data['nom']." <h5>amphi B </h5> </center></td>";
        }
        ?>
    </tr>
    <tr>
        <th align="center"> Mardi </th>
        <?php
        $sql= "select * from `module` where id_M='1'";
        $result= mysqli_query($link,$sql);
        while ($data=mysqli_fetch_assoc ($result)) {
            echo "<td><center> ".$data['nom']."<h5>amphi D </h5</center></td>";
        }
        ?>
        <?php
        $sql= "select * from `module` where id_M='3'";
        $result= mysqli_query($link,$sql);
        while ($data=mysqli_fetch_assoc ($result)) {
            echo "<td><center> TD  ".$data['nom']."<h5>salle 5 </h5</center></td>";
        }
        ?>
         <?php
        $sql= "select * from `module` where id_M='3'";
        $result= mysqli_query($link,$sql);
        while ($data=mysqli_fetch_assoc ($result)) {
            echo "<td><center>  ".$data['nom']."<h5>amphi B </h5</center></td>";
        }
        ?>
        <td><center> __</center></td>
    </tr>
    <tr>
        <th align="center"> Mercredi </th>

        <?php
        $sql= "select * from `module` where id_M='1'";
        $result= mysqli_query($link,$sql);
        while ($data=mysqli_fetch_assoc ($result)) {
            echo "<td><center> TP".$data['nom']."<h5>salle 3</h5></center> </td>";
        }
        ?>
        <?php
        $sql= "select * from `module` where id_M='2'";
        $result= mysqli_query($link,$sql);
        while ($data=mysqli_fetch_assoc ($result)) {
            echo "<td><center> TP ".$data['nom']." <h5>salle 1</h5> </center></td>";
        }
        ?>
        <?php
        $sql= "select * from `module` where id_M='2'";
        $result= mysqli_query($link,$sql);
        while ($data=mysqli_fetch_assoc ($result)) {
            echo "<td><center>".$data['nom']." <h5>amphi C </h5> </center></td>";
        }
        ?>
        <td><center> __</center></td></tr>
    <tr>
        <th align="center"> Jeudi </th>
        <?php
        $sql= "select * from `module` where id_M='5'";
        $result= mysqli_query($link,$sql);
        while ($data=mysqli_fetch_assoc ($result)) {
            echo "<td><center>".$data['nom']."<h5>salle 3</h5></center> </td>";
        }
        ?>
        <?php
        $sql= "select * from `module` where id_M='5'";
        $result= mysqli_query($link,$sql);
        while ($data=mysqli_fetch_assoc ($result)) {
            echo "<td><center> TP ".$data['nom']." <h5>salle 3</h5> </center></td>";
        }
        ?>
        <?php
        $sql= "select * from `module` where id_M='10'";
        $result= mysqli_query($link,$sql);
        while ($data=mysqli_fetch_assoc ($result)) {
            echo "<td><center>TD ".$data['nom']." <h5>amphi D</h5> </center></td>";
        }
        ?>
        <td><center> __</center></td>
        </tr>
    <tr>
        <th align="center"> Vendredi </th>
    <?php
        $sql= "select * from `module` where id_M='16'";
        $result= mysqli_query($link,$sql);
        while ($data=mysqli_fetch_assoc ($result)) {
            echo "<td><center> ".$data['nom']." <h5>amphi B</h5> </center></td>";
        }
        ?>
        <?php
        $sql= "select * from `module` where id_M='16'";
        $result= mysqli_query($link,$sql);
        while ($data=mysqli_fetch_assoc ($result)) {
            echo "<td><center>TD ".$data['nom']." <h5>amphi B</h5> </center></td>";
        }
        ?>
        <td><center> __</center></td>
        <td><center> __</center></td>
    </tr></table>       

<br><br><br>
<h2>Séances De Rattrapages</h2>
    <table id="customers"  width="60%" border="3" cellspacing="2" cellpadding="8" align="center">   
    <tr align="center">
        <th align="center"> Semestre</th>
        <th align="center"> Filière</th>
        <th align="center"> Module</th>
        <th align="center"> Date</th>
        <th align="center"> Local</th></tr>

    </tr>
        <tr> 
        <?php
        $sql= "select * from `rattrapage` where Id_R='1'";
        $result= mysqli_query($link,$sql);
        while ($data=mysqli_fetch_assoc ($result)) {
            echo "<td><center>".$data['Semestre']."</center> </td>";
            echo "<td><center>".$data['Filière']."</center> </td>";
            echo "<td><center>".$data['Module']."</center> </td>";
            echo "<td><center>".$data['Date']."</center> </td>";
            echo "<td><center>".$data['Local']."</center> </td>";
        }
        ?></tr>
    <tr>
    <?php
        $sql= "select * from `rattrapage` where Id_R='2'";
        $result= mysqli_query($link,$sql);
        while ($data=mysqli_fetch_assoc ($result)) {
            echo "<td><center>".$data['Semestre']."</center> </td>";
            echo "<td><center>".$data['Filière']."</center> </td>";
            echo "<td><center>".$data['Module']."</center> </td>";
            echo "<td><center>".$data['Date']."</center> </td>";
            echo "<td><center>".$data['Local']."</center> </td>";
        }
        ?></tr>
        <tr>
    <?php
        $sql= "select * from `rattrapage` where Id_R='3'";
        $result= mysqli_query($link,$sql);
        while ($data=mysqli_fetch_assoc ($result)) {
            echo "<td><center>".$data['Semestre']."</center> </td>";
            echo "<td><center>".$data['Filière']."</center> </td>";
            echo "<td><center>".$data['Module']."</center> </td>";
            echo "<td><center>".$data['Date']."</center> </td>";
            echo "<td><center>".$data['Local']."</center> </td>";
        }
        ?>     </tr>
    

   <tr>
    <?php
        $sql= "select * from `rattrapage` where Id_R='4'";
        $result= mysqli_query($link,$sql);
        while ($data=mysqli_fetch_assoc ($result)) {
            echo "<td><center>".$data['Semestre']."</center> </td>";
            echo "<td><center>".$data['Filière']."</center> </td>";
            echo "<td><center>".$data['Module']."</center> </td>";
            echo "<td><center>".$data['Date']."</center> </td>";
            echo "<td><center>".$data['Local']."</center> </td>";
        }
        ?> </tr>         
        

</table>       

   


</body>

</html>
