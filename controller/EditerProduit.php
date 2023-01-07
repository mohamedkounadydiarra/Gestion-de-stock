<?php 
require("../modele/AjouterProduit.php");
$idProduit = $_GET['idProduit'];
//traitement pour l'insertion de la categorie
if (isset($_POST['update'])) 
{

if(!empty($_POST['designation']) and !empty($_POST['quantite']) and !empty($_POST['stockMin']) and !empty($_POST['idCategorie']))	
{

$designation = htmlspecialchars($_POST['designation']);
$quantite = htmlspecialchars($_POST['quantite']);
$stockMin = htmlspecialchars($_POST['stockMin']);
$idCategorie = htmlspecialchars($_POST['idCategorie']);


if($quantite > $stockMin )
{
//la requette d'insertion dans la base de donnée
$updateProduit = update($designation,$quantite,$stockMin,$idCategorie,$idProduit);

$succes="produit mise à jour avec sucssè !";

}else{ $error = "la quantite min doit etre inferieur"; }



}

}
?>