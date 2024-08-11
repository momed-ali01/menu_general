<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche d'un Etudiant</title>
</head>
<body>
<?php
$serveur="localhost";
$utilisateur="root";
$mot_de_passe="";
$base="gestion_etudiant";

$connect=mysqli_connect($serveur,$utilisateur,$mot_de_passe,$base);
$num=$_POST["number"];

$query=mysqli_query($connect," SELECT * FROM etudiant WHERE numero_etudiant='$num'"); ?>
    <center>
    <h3 align=center >Recherche d'un etudiant</h3>  
    <table border=2 cellpadding="10%" cellspacing="5%">
        <tr>
            <td>Numero: </td>
            <td>Nom: </td>
            <td>Mot de passe: </td>
            <td>Sexe: </td>
            <td>Email: </td>
            <td>Adresse: </td>
        </tr>
    <?php while($lign=mysqli_fetch_row($query))  {?>
        <tr>
            <td><?= $lign[0]; ?></td>
            <td><?= $lign[1]; ?></td>
            <td><?= $lign[2]; ?></td>
            <td><?= $lign[3]; ?></td>
            <td><?= $lign[4]; ?></td>
            <td><?= $lign[5]; ?></td>
        </tr>
        <?php } ?>
    </table>
    </center>
</body>
</html>
