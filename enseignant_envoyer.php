<?php 

$serveur="localhost";
$utilisateur="root";
$mot_de_passe="";
$base="gestion_etudiant";
$connect=mysqli_connect($serveur,$utilisateur,$mot_de_passe,$base);

$numEns=$_POST["numEns"];
$nomEns=$_POST["nomEns"];
$password=$_POST["password"];
$sexe=$_POST["Sexe"];
$email=$_POST["email"];
$adresse=$_POST["adresse"];
$telEns=$_POST["telEns"];
$grade=$_POST["grade"];


$query="INSERT INTO enseignant VALUES('$numEns','$nomEns','$password','$sexe','$email','$adresse','$telEns','$grade')";

if(mysqli_query($connect, $query)){
  echo '<h2>Enseignant ajouté avec Succcess</h2>';
} else {
  die ('Erreur: ' . mysqli_error());
}
?>