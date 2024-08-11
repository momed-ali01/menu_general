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
// $numEns=$_POST["numEns"];

$query = "UPDATE module SET nommodule='$nom', coeffmodule='$coeff',volumehoraire='$vol' WHERE codemodule='$num'";

$sql = mysqli_query($connect, $query);

if($sql) {
    echo '<h2>Module modifié avec success</h2>';
} else {
    die('Erreur' . mysqli_error());
}

?>