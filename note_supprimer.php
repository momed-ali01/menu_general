<?php 
$_SERVER="localhost";
$utilisateur="root";
$mot_de_passe="";
$base="gestion_etudiant";

$connect=mysqli_connect($_SERVER,$utilisateur,$mot_de_passe,$base);

@$num=$_POST["number"];
$query=mysqli_query($connect," DELETE  FROM note WHERE num_note='$num'");

?>