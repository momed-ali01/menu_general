<?php 
$_SERVER="localhost";
$utilisateur="root";
$mot_de_passe="";
$base="gestion_etudiant";
$connect=mysqli_connect($_SERVER,$utilisateur,$mot_de_passe,$base);


$num=$_POST["numero"];
$nom=$_POST["nom"];

$query = "INSERT INTO filiere VALUES ('$num', '$nom')";
if(mysqli_query($connect,$query)){
  echo '<h2>Filiere ajouté success</h2>';
} else {
  die("Erreur :" .mysqli_error());
}
?>