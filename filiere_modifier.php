<?php 
$serveur="localhost";
$utilisateur="root";
$mot_de_passe="";
$base="gestion_etudiant";
$connect=mysqli_connect($serveur,$utilisateur,$mot_de_passe,$base);


$numFil = $_POST["numFil"];
$nomFil = $_POST["nomFil"];

$query = "UPDATE filiere SET nom_filiere ='$nomFil' WHERE num_filiere = '$numFil'";


$sql = mysqli_query($connect, $query);

if($sql) {
    echo '<h2>Filiere modifié avec success</h2>';
} else {
    die('Erreur' . mysqli_error());
}

?>