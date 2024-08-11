<?php

$serveur="localhost";
$utilisateur="root";
$mot_de_passe="";
$base="gestion_etudiant";

$connect=mysqli_connect($serveur,$utilisateur,$mot_de_passe,$base);

$num=$_POST["code"];
$nom=$_POST["nom"];
$coeff=$_POST["coeff"];
$vol=$_POST["volume"];
$numEns=$_POST["numEns"];

$query=" INSERT INTO module VALUES ('$num','$nom','$coeff','$vol','$numEns')";

if(mysqli_query($connect, $query)) {
    echo '<h2>Module ajouté avec success</h2>';
} else {
    die("Erreur: " . mysqli_error());
}

?>