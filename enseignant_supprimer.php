<?php 

$serveur="localhost";
$utilisateur="root";
$mot_de_passe="";
$base="gestion_etudiant";

$connect=mysqli_connect($serveur,$utilisateur,$mot_de_passe,$base);

$numero=$_POST["numEns"];
$query="UPDATE `module`
SET `numero_enseignant` = NULL 
WHERE `numero_enseignant` = '$numero';
DELETE FROM `enseignant` WHERE `numero_enseignant`='$numero'";

$sql = mysqli_query($connect, $query);

if($sql){
  echo '<h2>Enseignant supprimé avec success</h2>';
} else {
  die("Erreur: " .mysqli_error());
}  
?>