<?php 
$serveur="localhost";
$utilisateur="root";
$mot_de_passe="";
$base="gestion_etudiant";

$connect=mysqli_connect($serveur,$utilisateur,$mot_de_passe,$base);

$numNote = $_POST["numNote"];
$control_continu = $_POST["CC"];
$control_final = $_POST["CF"];
$semestre = $_POST["semestre"];
$date = $_POST["date"];
$numEtu =$_POST["numEtu"];
$codeMod = $_POST["codeMod"];

$query =  "INSERT INTO note VALUES ('$numNote', '$control_continu', '$control_final', '$semestre', '$date','$numEtu','$codeMod')";

if(mysqli_query($connect, $query)) {
  echo '<h2>Note ajouté avec success</h2>';
} else {
  die("Erreur: " . mysqli_error());
}
?>