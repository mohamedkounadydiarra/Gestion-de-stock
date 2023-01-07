<?php 
require("modele/authentification.php");

if(isset($_POST['connexion']))
{
if(isset($_POST['identifiant']) and isset($_POST['passwords']))
{
   if(!empty($_POST['identifiant']) and !empty($_POST['passwords']))
   {
    //la recuperation des variable et le cryptage du password en sha1
    $identifiant = htmlspecialchars($_POST['identifiant']);
    $passwords = htmlspecialchars($_POST['passwords']);
    $passwordCrypte = sha1($passwords);
    $auth = authentification($identifiant,$passwordCrypte);

    if($auth->rowCount()==1)
    {
    // recuperation des session
    session_start();
    $_SESSION['autoriser'] = "OUI";
    $resultat = $auth->fetch();
    $_SESSION['identifiant'] = $resultat['identifiant'];
    $_SESSION['passwords'] = $resultat['passwords'];

    header("location:pages/index.php");

    }else{ $error = "mot de passe ou identifient incorecte"; }

   }
} 

}