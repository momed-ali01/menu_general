<?php 

$serveur="localhost";
$utilisateur="root";
$mot_de_passe="";
$base="gestion_etudiant";

$connect=mysqli_connect($serveur,$utilisateur,$mot_de_passe,$base);

$numero=$_POST["numero"];
$query="DELETE FROM etudiant WHERE numero_etudiant='$numero'";

if(mysqli_query($connect, $query)){
  echo '<h2>Etudiant supprimé avec success</h2>';
} else {
  die("Erreur: " .mysqli_error());
}  
?>