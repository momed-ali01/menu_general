<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Modifier Etudiant</title>
</head>

<body>
  <?php 
    $serveur='localhost';
    $utilisateur='root';
    $mot_de_passe='';
    $base='gestion_etudiant';
    $connect=mysqli_connect($serveur,$utilisateur,$mot_de_passe,$base);

    $numEtu=$_POST['numEtu'];
    
    $requete = "SELECT * FROM etudiant WHERE `numero_etudiant`='$numEtu'";
    $resultat = mysqli_query($connect, $requete);
    if(mysqli_num_rows($resultat) > 0) {
        $ligne = mysqli_fetch_row($resultat); 
    ?>
  <center>
    <h3 align="center">Modification d'un Etudiant</h3>
    <form action="etudiant_modifier.php" method="POST">
      <table border="2" cellpadding="3" cellspacing="1">
        <tr>
          <td>Numero etudiant</td>
          <td><input type="number" name="numero_etudiant" value="<?= $ligne[0] ?>" /></td>
        </tr>
        <tr>
          <td>Nom:</td>
          <td><input type="text" name="nom_etudiant" value="<?= $ligne[1] ?>" /></td>
        </tr>
        <tr>
          <td>Mot de passe:</td>
          <td>
            <input type="password" name="passe_etudiant" value="<?= $ligne[2] ?>" />
          </td>
        </tr>
        <tr>
          <td>Sexe:</td>
          <td>
            <?php if($ligne[3] = "Masculin") { ?>
            <input type="radio" name="sexe_etudiant" value="Masculin" class="input-radio" checked />Masculin
            <input type="radio" name="sexe_etudiant" value="Feminin" class="input-radio" />Feminin
            <?php } else { ?>
            <input type="radio" name="sexe_etudiant" value="Masculin" class="input-radio" />Masculin
            <input type="radio" name="sexe_etudiant" value="Feminin" class="input-radio" checked />Feminin
            <?php } ?>
          </td>
        </tr>
        <tr>
          <td>Numero de Filiere:</td>
          <td><input type="number" name="num_filiere" value="<?= $ligne[6] ?>" /></td>
        </tr>
        <tr>
          <td>Email:</td>
          <td><input type="email" name="email_etudiant" value="<?= $ligne[4] ?>" /></td>
        </tr>
        <tr>
          <td>Adresse:</td>
          <td><input type="text" name="adresse_etudiant" value="<?= $ligne[5] ?>" /></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="submit" value="Envoyer" name="submit" />
            <input type="reset" value="Annuler" />
          </td>
        </tr>
      </table>
    </form>
  </center>
  <?php } ?>
</body>

</html>
<?php
if(isset($_POST['submit'])){
    
    $connect=mysqli_connect('localhost','root','','gestion_etudiant');

    $numero_etudiant=$_POST["numero_etudiant"];
    $nom=$_POST["nom_etudiant"];
    $password=$_POST["passe_etudiant"];
    $sexe=$_POST["sexe_etudiant"];
    $numFil=$_POST["num_filiere"];
    $email=$_POST["email_etudiant"];
    $adresse=$_POST["adresse_etudiant"];


    $query = "UPDATE `etudiant` SET `nom_etudiant`='$nom',`passe_etudiant`='$password',`sexe_etudiant`='$sexe',`email_etudiant`='$email',`adresse_etudiant`='$adresse',`num_filiere`='$numFil' WHERE `numero_etudiant`='$numero_etudiant'";

    $result = mysqli_query($connect, $query);
    if($result) {
        echo '<h2>Etudiant modifié avec success</h2>';
    } else {
        die('Erreur: ' . mysqli_error($connect)); 
    }
}

?>