<?php 
require("../modele/AjouterProduit.php");

//traitement pour l'insertion de la categorie
if (isset($_POST['enregistrer'])) 
{

if(!empty($_POST['designation']) and !empty($_POST['quantite']) and !empty($_POST['stockMin']) and !empty($_POST['idCategorie']))	
{

$designation = htmlspecialchars($_POST['designation']);
$quantite = htmlspecialchars($_POST['quantite']);
$stockMin = htmlspecialchars($_POST['stockMin']);
$idCategorie = htmlspecialchars($_POST['idCategorie']);

//la requette de verification si elle existe pas deja dans la base
$exist = exist($designation);

if($exist->rowCount()== 0)
{

if($quantite > $stockMin )
{
//la requette d'insertion dans la base de donnée
$insert = insert($designation,$quantite,$stockMin,$idCategorie);

$succes="produit creer avec sucssè !";

}else{ $error = "la quantite min doit etre inferieur"; }

}else{ $error = "cet produit existe déjà !"; }

}

}
?>