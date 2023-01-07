<?php 
require("../modele/AjouterProduit.php");
$idApprovisionnement = $_GET['idApprovisionnement'];
$delete = deleteApprovisionnement($idApprovisionnement);
header("location:../pages/ListeApprovisionnement.php");
?>