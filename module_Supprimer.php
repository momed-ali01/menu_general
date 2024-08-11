<?php 

$_SERVER="localhost";
$utilisateur="root";
$mot_de_passe="";
$base="gestion_etudiant";

$connect=mysqli_connect($_SERVER,$utilisateur,$mot_de_passe,$base);

  @$num=$_POST["Numero"];
 $query=mysqli_query($connect,"  DELETE FROM module WHERE code_module='$num'");
 ?>