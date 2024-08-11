<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechercher Filiere</title>
</head>
<body>
<?php
$serveur="localhost";
$utilisateur="root";
$mot_de_passe="";
$base="gestion_etudiant";

$connect=mysqli_connect($serveur,$utilisateur,$mot_de_passe,$base);
$num=$_POST["numFil"];

$query=mysqli_query($connect," SELECT * FROM filiere WHERE num_filiere ='$num'"); ?>
    <center>
    <h3>Recherche d'un filiere</h3>  
    <table border=2 cellpadding="10%" cellspacing="5%">
        <tr>
            <td>Numero filiere</td>
            <td>Nom filiere</td>
        </tr>
    <?php while($lign=mysqli_fetch_row($query))  {?>
        <tr>
            <td><?= $lign[0]; ?></td>
            <td><?= $lign[1]; ?></td>
        </tr>
      <?php } ?>
    </table>
    </center>
</body>
</html>
