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

$query = "UPDATE note SET controle_continu='$control_continu', controle_finale='$control_final', semestre='$semestre', annee='$date' WHERE num_note='$numNote'";

$sql = mysqli_query($connect, $query);

if($sql) {
    echo '<h2>Note modifié avec success</h2>';
} else {
    die('Erreur' . mysqli_error());
}

?>