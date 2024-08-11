<?php 
$serveur="localhost";
$utilisateur="root";
$mot_de_passe="";
$base="gestion_etudiant";

$connect=mysqli_connect($serveur,$utilisateur,$mot_de_passe,$base);

$numero=$_POST["Numero"];
$nom=$_POST["Nom"];
$password=$_POST["Password"];
$sexe=$_POST["Sexe"];
$email=$_POST["Email"];
$adresse=$_POST["Address"];
$tel=$_POST["Address"];
$grade=$_POST["Grade"];

$query = "UPDATE `enseignant` 
SET `nom_enseignant` = '$nom',
`passe_enseignant` = '$password',
`sexe_enseignant` = '$sexe',
`email_enseignant` = '$email',
`adresse_enseignant` = '$adresse',
`tel_enseignant` = '$tel',
`grade_enseignant` = '$grade'
WHERE `numero_enseignant` = '$numero';";

$sql = mysqli_query($connect, $query);

if($sql) {
    echo '<h2>Enseignant modifié avec success</h2>';
} else {
    die('Erreur' . mysqli_error());
}

?>