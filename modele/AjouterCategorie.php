<?php  

function insert($nom)
{
require("connexionDB.php");
$req = $pdo->prepare("INSERT INTO categorie(nom) VALUES(?)");
$req->execute(array($nom));
return $req;
}

function exist($nom)
{
require("connexionDB.php");
$req = $pdo->prepare("SELECT * FROM categorie WHERE nom = ? ");
$req->execute(array($nom));
return $req;
}

function liste()
{
require("connexionDB.php");
$req = $pdo->prepare("SELECT * FROM categorie");
$req->execute();
return $req;
}

function editer($idCategorie)
{
require("connexionDB.php");
$req = $pdo->prepare("SELECT * FROM categorie WHERE idCategorie = ?");
$req->execute(array($idCategorie));
return $req;
}

function update($nom,$idCategorie)
{
require("connexionDB.php");
$req = $pdo->prepare("UPDATE categorie SET nom=? WHERE idCategorie = ?");
$req->execute(array($nom,$idCategorie));
return $req;
}

function delete($idCategorie)
{
require("connexionDB.php");
$req = $pdo->prepare("DELETE FROM categorie WHERE idCategorie = ?");
$req->execute(array($idCategorie));
return $req;
}

?>