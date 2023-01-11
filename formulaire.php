<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="style.css" type="text/css">
    <title>form</title>
</style>
</head>
<body>
<h1 class="titre"> Ajouter   Rattrapage </h1>
<div id="formulaire"> 
<form  method="post" enctype="multipart/form-data"action="ratt.php" method="GET">
            
            <label class="field_lab">Semestre</label>
	        <select class="field" name="semestre">
								<?php
                                session_start();
                                    include("connexion.php");
									$sql1="SELECT * FROM `semestre` ";
									$res= mysqli_query($link, $sql1);
									while($data=mysqli_fetch_assoc($res)){
										$nom_S=$data['nom'];
                                        $id_S=$data['id_S'];
										echo "<option value=".$nom_S.">$nom_S</option>";
									}
								?>
	        </select><br><br>
            <label class="field_lab">filière</label>
            <select class="field" name="filière">
								<?php
                                session_start();
                                    include("connexion.php");
									$sql2="SELECT * FROM `filière` ";
									$res= mysqli_query($link, $sql2);
									while($data=mysqli_fetch_assoc($res)){
										$nom_F=$data['nom'];
                                        $id_F=$data['id_F'];
										echo "<option value=".$nom_F.">$nom_F</option>";
									}
								?>
	        </select><br><br>
            <label class="field_lab">module</label>
            <select class="field" name="module">
								<?php
                                session_start();
                                    include("connexion.php");
									$sql3="SELECT * FROM `module` ";
									$res= mysqli_query($link, $sql3);
									while($data=mysqli_fetch_assoc($res)){
										$nom=$data['nom'];
                                        $id_M=$data['id_M'];
										echo "<option value=".$id_M.">$nom</option>";
									}
								?>
	        </select><br><br>
            <label class="field_lab">Date </label>
            <input class="field" type="date" id="start" name="date"> <br><br>
            <label class="field_lab" >local </label>
            <select class="field" name="local">
								<?php
                                    include("connexion.php");
									$sql3="SELECT * FROM `local` ";
									$res= mysqli_query($link, $sql3);
									while($data=mysqli_fetch_assoc($res)){
										$local=$data['local'];
										echo "<option value=".$local.">$local</option>";
										
									}
								?>
	        </select><br><br>
           
            

            <input type="submit" name="enregistrer" value="Enregistrer" class="button"  >
            
            
        </form>
								</div>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
 integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
 crossorigin="anonymous">
</body>
</html>