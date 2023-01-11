<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="moncv.css" type="text/css">
    <title>Séances De Rattrapages</title>
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
    <?php session_start();
include("connexion.php"); ?>
    
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
<a href="deconnexion.php" >Déconnecter</a>
</body>
</html>    
