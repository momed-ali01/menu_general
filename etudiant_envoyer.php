<?php 

$serveur="localhost";
$utilisateur="root";
$mot_de_passe="";
$base="gestion_etudiant";
$connect=mysqli_connect($serveur,$utilisateur,$mot_de_passe,$base);

$num=$_POST["number"];
$nom=$_POST["Name"];
$password=$_POST["password"];
$Sexe=$_POST["Sexe"];
$filiere=$_POST["filiere"];
$Email=$_POST["email"];
$adresse=$_POST["Adresse"];
$envoyer=$_POST["Envoyer"];


$query="INSERT INTO etudiant VALUES('$num','$nom','$password','$Sexe','$Email','$adresse','$filiere')";
if(mysqli_query($connect, $query)){
  echo '<h2>Etudiant ajouté avec Succcess</h2>';
} else {
  die ('Erreur: ' . mysqli_error());
}
?>