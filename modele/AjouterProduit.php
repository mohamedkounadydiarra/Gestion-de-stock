<?php  

function insert($designation,$quantite,$stockMin,$idCategorie)
{
require("connexionDB.php");
$req = $pdo->prepare("INSERT INTO produit(designation,quantite,stockMin,idCategorie) VALUES(?,?,?,?)");
$req->execute(array($designation,$quantite,$stockMin,$idCategorie));
return $req;
}

function exist($designation)
{
require("connexionDB.php");
$req = $pdo->prepare("SELECT * FROM produit WHERE designation = ? ");
$req->execute(array($designation));
return $req;
}

function menuederoulantCategorie()
{
require("connexionDB.php");
$req = $pdo->prepare("SELECT * FROM categorie");
$req->execute();
return $req;
}

function liste()
{
require("connexionDB.php");
$req = $pdo->prepare("
SELECT idProduit,designation,quantite,stockMin,categorie.idCategorie,categorie.nom FROM produit
INNER JOIN categorie ON  categorie.idCategorie = produit.idCategorie ORDER BY idProduit DESC

");
$req->execute();
return $req;
}

function editer($idProduit)
{
require("connexionDB.php");
//cette requette fais reference a la recuperation des encianne valeur du formulaire avant la mise a jour
$req = $pdo->prepare("SELECT * FROM produit WHERE idProduit = ?");
$req->execute(array($idProduit));
return $req;
}

function update($designation,$quantite,$stockMin,$idCategorie,$idProduit)
{
// et cette requette fais la mise a jour 
require("connexionDB.php");
$req = $pdo->prepare("UPDATE produit SET designation= ?,quantite= ?,stockMin= ?,idCategorie= ? WHERE idProduit = ?");
$req->execute(array($designation,$quantite,$stockMin,$idCategorie,$idProduit));
return $req;
}

function delete($idProduit)
{
require("connexionDB.php");
$req = $pdo->prepare("DELETE FROM produit WHERE idProduit = ?");
$req->execute(array($idProduit));
return $req;
}



//     code APPROVISIONNEMENT

function approvisionnement($quantite,$idProduit)
{
require("connexionDB.php");
// cette requette permet dinserer les donnee dans la table approvisionnement
$req = $pdo->prepare("INSERT INTO approvisionnement(quantite,idProduit)VALUES(?,?)");
$req->execute(array($quantite,$idProduit));

// cette deuxieme requette est pour mettre a jour le stock
$miseAjours = $pdo->prepare("UPDATE produit SET quantite = quantite + ? WHERE idProduit = ?");
$miseAjours->execute(array($quantite,$idProduit));

}

function listeApprovisionnement()
{
require("connexionDB.php");
$req = $pdo->prepare("
SELECT idApprovisionnement,dateApprovisionnement,approvisionnement.quantite,produit.idProduit,produit.designation FROM approvisionnement
INNER JOIN produit ON produit.idProduit = approvisionnement.idProduit ORDER BY idApprovisionnement DESC
");
$req->execute();
return $req;
}

// le calcul des approvisionnement 
function sommeAppro()
{
require("connexionDB.php");
$req = $pdo->prepare("SELECT * FROM approvisionnement WHERE idProduit = 18");
$req->execute();
$appro = $req->fetchAll();
return count($appro);
}

function deleteApprovisionnement($idApprovisionnement)
{
require("connexionDB.php");
$req = $pdo->prepare("DELETE FROM approvisionnement WHERE idApprovisionnement = ?");
$req->execute(array($idApprovisionnement));
return $req;
}

function vente($quantite,$type,$prixUnitaire,$idProduit)
{
require("connexionDB.php");
// cette requette permet dinserer les donnee dans la table approvisionnement
$req = $pdo->prepare("INSERT INTO sortie(quantite,types,prixUnitaire,idProduit)VALUES(?,?,?,?)");
$req->execute(array($quantite,$type,$prixUnitaire,$idProduit));

// cette deuxieme requette est pour mettre a jour le stock

$miseAjours = $pdo->prepare("UPDATE produit SET quantite = quantite - ? WHERE idProduit = ?");
$miseAjours->execute(array($quantite,$idProduit));

}

function listeVente()
{
require("connexionDB.php");
$req = $pdo->prepare("
SELECT idSortie,sortie.quantite,types,dateSortie,prixUnitaire,produit.idProduit,produit.designation FROM sortie
INNER JOIN produit ON sortie.idProduit = produit.idProduit ORDER BY idSortie DESC
");
$req->execute();
return $req;
}

// le calcul des vente total pour un produit donné

function TotalVente($idSortie)
{
require("connexionDB.php");
$req = $pdo->prepare("SELECT * FROM sortie WHERE idSortie = ?");
$req->execute(array($idSortie));
$TotalVente = $req->fetch();
$calcul = $TotalVente['quantite']*$TotalVente['prixUnitaire'];
return $calcul;
}

// Projection sur les produit

function somme()
{
require("connexionDB.php");
$req = $pdo->prepare("SELECT * FROM produit");
$req->execute();
$totale = $req->fetchAll();
return count($totale);
}

function sommeVente()
{
require("connexionDB.php");
$req = $pdo->prepare("SELECT * FROM sortie WHERE idProduit = 18");
$req->execute();
$vente = $req->fetchAll();
return count($vente);
}








?>