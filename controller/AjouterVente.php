<?php 
require("../modele/AjouterProduit.php");

//traitement pour l'insertion
if (isset($_POST['vente'])) 
{

if(!empty($_POST['quantite']) and !empty($_POST['idProduit']) and !empty($_POST['type']) and !empty($_POST['prixUnitaire']))	
{

$quantite = htmlspecialchars($_POST['quantite']);
$idProduit = $_POST['idProduit'];
$type = $_POST['type'];
$prixUnitaire = $_POST['prixUnitaire'];


//la requette d'insertion dans la base de donnée
$venteProduit = vente($quantite,$type,$prixUnitaire,$idProduit);

$succes="vente effectuer avec sucssè !";


}else{$error = "remplissez tous les champs";}

}
?>