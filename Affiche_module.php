<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage Module</title>
</head>
<body>
<?php
$serveur="localhost";
$utilisateur="root";
$mot_de_passe="";
$base="gestion_etudiant";

$connect=mysqli_connect($serveur,$utilisateur,$mot_de_passe,$base);
$query = "SELECT * FROM module";
$result = mysqli_query($connect, $query);
?>
<table border = 1 cellpadding="10%" cellspacing="5%">
<tr> 
    <td>Code Module</td>
    <td>Nom</td>
    <td>Coefficient</td>
    <td>Volume Horaire </td>
</tr>
<?php while($lign=mysqli_fetch_row($result)){ ?>    
    <tr>
        <td><?= $lign['0']; ?></td>
        <td><?= $lign['1']; ?></td>
        <td><?= $lign['2']; ?></td>
        <td><?= $lign['3']; ?></td>
    </tr>
<?php } ?>
</table>
</body>
</html>