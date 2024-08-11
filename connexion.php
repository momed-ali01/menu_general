<?php 
// connexion
$serveur="localhost";
$utilisateur="root";
$mot_de_passe="";
$base="gestion_etudiant";
$connect=mysqli_connect($serveur,$utilisateur,$mot_de_passe,$base);

// verification de la connexion
if(!$connect){
    die("Connexion echouer");
}

//Recuperation des donnees du fichier index.html ou connexion.html
$nom = $_POST["nom"];
$password = $_POST["password"];

// execution de la requete select
$query = mysqli_query($connect, "SELECT * FROM etudiant WHERE nom_etudiant = '$nom' AND passe_etudiant = '$password'");

// verification si la requete select s'est bien executer
if (mysqli_fetch_row($query) == 0){ 
    echo "Le nom et le mot de passe sont incorrects";
} else { // sinon, la requete select n'est pas executer
    header("Location:Menu_Generale.html");
    exit();
}

?>