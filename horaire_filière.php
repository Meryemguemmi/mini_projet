<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  
}
#customers td{
    margin-bottom: 22px;
    font-size: 20px;

}
#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #04AA6D;
  color: white;
  font-size: 30px;
}
h1{
    text-align: center;
    margin-bottom: 70px;
    /*font-family:'DancingScript-Regular' ;*/
    font-size: 60px;
    color:#8FBC8F ;
    text-align: center;
    margin-left: 20px;
    margin-bottom: 50px;


}
.button {
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
    margin-left:750px;
    margin-top:50px;
  }
  .button:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
  }
</style>
</head>
<body>

<h1>Charge Horaire Des Modules</h1>

<table id="customers">
    <tr>
        <th>Modules</th>
        <th>Charge Horaire</th>
    </tr>
    <?php
  
    include("connexion.php");
    $sql="SELECT `nom`,`heure_par_module` FROM `module` WHERE 1;" ;
    $result=mysqli_query($link,$sql);
    while($data=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$data['nom']."</td>";
        echo "<td>".$data['heure_par_module']."h </td>";
        echo "</tr>";
    }
    ?>
</table>
<a class="button" href="menu_admin.php">Revenir Au Menu</a>

</body>
</html>