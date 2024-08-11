<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechercher Module</title>
</head>
<body>
<?php
$serveur="localhost";
$utilisateur="root";
$mot_de_passe="";
$base="gestion_etudiant";

$connect=mysqli_connect($serveur,$utilisateur,$mot_de_passe,$base);
$num=$_POST["codeMod"];

$query=mysqli_query($connect," SELECT * FROM module WHERE codemodule='$num'"); ?>
    <center>
    <h3>Recherche d'une module</h3>  
    <table border=2 cellpadding="10%" cellspacing="5%">
        <tr>
            <td>Code module </td>
            <td>Nom module</td>
            <td>Coefficient</td>
            <td>Volume Horaire</td>
        </tr>
    <?php while($lign=mysqli_fetch_row($query))  {?>
        <tr>
            <td><?= $lign[0]; ?></td>
            <td><?= $lign[1]; ?></td>
            <td><?= $lign[2]; ?></td>
            <td><?= $lign[3]; ?></td>
        </tr>
        <?php } ?>
    </table>
    </center>
</body>
</html>
