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
$num=$_POST["numNote"];

$query=mysqli_query($connect," SELECT * FROM note WHERE num_note='$num'"); ?>
    <center>
    <h3>Recherche d'une module</h3>  
    <table border=2 cellpadding="10%" cellspacing="5%">
        <tr>
            <td>Numero note</td>
            <td>Controle Continue</td>
            <td>Controle Finale</td>
            <td>Semestre</td>
            <td>Date</td>
        </tr>
    <?php while($lign=mysqli_fetch_row($query))  {?>
        <tr>
            <td><?= $lign[0]; ?></td>
            <td><?= $lign[1]; ?></td>
            <td><?= $lign[2]; ?></td>
            <td><?= $lign[3]; ?></td>
            <td><?= $lign[4]; ?></td>
        </tr>
        <?php } ?>
    </table>
    </center>
</body>
</html>
