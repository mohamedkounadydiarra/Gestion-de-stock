<?php 
require("../modele/AjouterCategorie.php");

//traitement pour l'insertion de la categorie
if (isset($_POST['enregistrer'])) 
{

if(!empty($_POST['nom']))	
{

$nom = htmlspecialchars($_POST['nom']);

//la requette de verification si elle existe pas deja dans la base
$exist = exist($nom);

if($exist->rowCount()== 0)
{
//la requette d'insertion dans la base de donnée
$insert = insert($nom);

$succes="categorie creer avec sucssè !";

}else{ $error = "cette categorie existe déjà !"; }

}

}
?>