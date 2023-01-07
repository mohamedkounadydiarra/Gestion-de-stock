<?php 
require("../modele/AjouterCategorie.php");
$idCategorie = $_GET['idCategorie'];
//traitement pour l'insertion de la categorie
if (isset($_POST['update'])) 
{

if(!empty($_POST['nom']))	
{

$nom = htmlspecialchars($_POST['nom']);
//la requette de mise a jour dans la base de donnée
$updateCategorie = update($nom,$idCategorie);

$succes="categorie mise à jour avec sucssè !";

}

}
?>