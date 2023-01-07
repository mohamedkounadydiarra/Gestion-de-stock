<?php

function  authentification($identifiant,$passwordCrypte)
{
require("connexionDB.php");
$req = $pdo->prepare("SELECT * FROM admin WHERE identifiant = ? AND passwords = ?");
$req->execute(array($identifiant,$passwordCrypte));
return $req;
}