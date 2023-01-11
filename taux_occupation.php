
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="taux_occ.css" type="text/css">
    <title>Taux d'Occupation Des Salles</title>
     <style type="text/css">
table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top: 0px;
}

table td, table th {
  border: 1px solid #ddd;
  padding: 8px;
}

table tr:nth-child(even){background-color: #f2f2f2;}

table tr:hover {background-color: #ddd;}

table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
h1
{
    padding: 8px;
  color: #8FBC8F;
  border-radius: 3px;
  background-size: 50px;
  text-align: CENTER;
  letter-spacing: 5px;
  margin-bottom: -150px;
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
<h1 >Taux d'Occupation Des Salles </h1><br>
<div id="formulaire"> 
<form  method="post" enctype="multipart/form-data" method="get">
            
            <table>
                <tr> <th> Salles/Amphis </th>
                <th> Taux D'Occupation (%) </th>
            </tr>
            
                <tr>
            <td> Salle 1 </td><br>
            

                        <?php
                                session_start();
                                    include("connexion.php");
                                    $sql1="SELECT * FROM `local` where id_L='1' ";
                                    $res= mysqli_query($link, $sql1);
                                    while($data=mysqli_fetch_assoc($res)){
                                        echo "<td>".$data['taux_occupation']."  %</td>";
                                    }
                                ?></tr>
                                <tr>
            <td> Salle 2 </td><br>
            

                        <?php
                                
                                    $sql2="SELECT * FROM `local` where id_L='2' ";
                                    $res= mysqli_query($link, $sql2);
                                    while($data=mysqli_fetch_assoc($res)){
                                        echo "<td>".$data['taux_occupation']."  %</td>";
                                    }
                                ?></tr> 
                   <tr>
            <td> Salle 3 </td><br>
            

                        <?php
                                    $sql1="SELECT * FROM `local` where id_L='3' ";
                                    $res= mysqli_query($link, $sql1);
                                    while($data=mysqli_fetch_assoc($res)){
                                        echo "<td>".$data['taux_occupation']."  %</td>";
                                    }
                                ?></tr>
                                <tr>
            <td> Salle 4 </td><br>
            

                        <?php
                                
                                    $sql2="SELECT * FROM `local` where id_L='4' ";
                                    $res= mysqli_query($link, $sql2);
                                    while($data=mysqli_fetch_assoc($res)){
                                        echo "<td>".$data['taux_occupation']."  %</td>";
                                    }
                                ?></tr> 
                                   <tr>
            <td> Salle 5 </td><br>
            

                        <?php
                                    $sql1="SELECT * FROM `local` where id_L='5' ";
                                    $res= mysqli_query($link, $sql1);
                                    while($data=mysqli_fetch_assoc($res)){
                                        echo "<td>".$data['taux_occupation']."  %</td>";
                                    }
                                ?></tr>
                                <tr>
            <td> Salle 6 </td><br>
            

                        <?php
                                
                                    $sql2="SELECT * FROM `local` where id_L='7' ";
                                    $res= mysqli_query($link, $sql2);
                                    while($data=mysqli_fetch_assoc($res)){
                                        echo "<td>".$data['taux_occupation']."  %</td>";
                                    }
                                ?></tr> 
                                   <tr>
            <td> Amphi A </td><br>
            

                        <?php
                                    $sql1="SELECT * FROM `local` where id_L='8' ";
                                    $res= mysqli_query($link, $sql1);
                                    while($data=mysqli_fetch_assoc($res)){
                                        echo "<td>".$data['taux_occupation']."  %</td>";
                                    }
                                ?></tr>
                                <tr>
            <td> Amphi B </td><br>
            

                        <?php
                                
                                    $sql2="SELECT * FROM `local` where id_L='9' ";
                                    $res= mysqli_query($link, $sql2);
                                    while($data=mysqli_fetch_assoc($res)){
                                        echo "<td>".$data['taux_occupation']."  %</td>";
                                    }
                                ?></tr> 
                                   <tr>
            <td> Amphi C </td><br>
            

                        <?php
                                    $sql1="SELECT * FROM `local` where id_L='10' ";
                                    $res= mysqli_query($link, $sql1);
                                    while($data=mysqli_fetch_assoc($res)){
                                        echo "<td>".$data['taux_occupation']."  %</td>";
                                    }
                                ?></tr>
                                <tr>
            <td> Amphi D </td><br>
            

                        <?php
                                
                                    $sql2="SELECT * FROM `local` where id_L='11' ";
                                    $res= mysqli_query($link, $sql2);
                                    while($data=mysqli_fetch_assoc($res)){
                                        echo "<td>".$data['taux_occupation']."  %</td>";
                                    }
                                ?></tr> 



            </table>
            <a href="menu_admin.php"> Revenir au menu </a>
        </form>
    </div>
</body>
</html>

            
