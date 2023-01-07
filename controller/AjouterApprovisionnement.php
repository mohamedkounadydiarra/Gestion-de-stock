<?php 
require("../modele/AjouterProduit.php");

//traitement pour l'insertion
if (isset($_POST['enregistrer'])) 
{

if(!empty($_POST['quantite']) and !empty($_POST['idProduit']))	
{

$quantite = htmlspecialchars($_POST['quantite']);
$idProduit = $_POST['idProduit'];


//la requette d'insertion dans la base de donnée
$approvisionnement = approvisionnement($quantite,$idProduit);

$succes="approvisionnement effectuer avec sucssè !";


}else{$error = "remplissez tous les champs";}

}
?>