<?php 
require("../modele/AjouterCategorie.php");
$idCategorie = $_GET['idCategorie'];
$delete = delete($idCategorie);
header("location:../pages/ListeCategorie.php");
?>