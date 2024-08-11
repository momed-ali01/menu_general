<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Affichage Filiere</title>
</head>

<body>
  <table border=1 cellpadding="10%" cellspacing="5%">
    <tr>
      <td>Numero filiere</td>
      <td>Nom filiere</td>
    </tr>
    <?php 
$serveur="localhost";
$utilisateur="root";
$mot_de_passe="";
$base="gestion_etudiant";
$connect=mysqli_connect($serveur,$utilisateur,$mot_de_passe,$base);

$query="SELECT * FROM filiere";
$result = mysqli_query($connect, $query);
?>

    <?php while($ligne = mysqli_fetch_row($result)){ ?>
    <tr>
      <td><?= $ligne[0]; ?></td>
      <td><?= $ligne[1]; ?></td>
    </tr>
    <?php } ?>
  </table>
</body>

</html>