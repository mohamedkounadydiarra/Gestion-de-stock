<?php 
require("../modele/AjouterProduit.php");
$idProduit = $_GET['idProduit'];
$delete = delete($idProduit);
header("location:../pages/ListeProduit.php");
?>