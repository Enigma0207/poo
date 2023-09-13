<?php

require_once "utilisateur.php";
if(isset($_POST['inscription'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['mdp'];

    $mdp = password_hash($password, PASSWORD_DEFAULT);
    $user = new Utilisateur($nom, $prenom, $email, $mdp);
    $user->inscription();
}

if(isset($_POST['connexion'])){
    $email = $_POST['email'];
    $password = $_POST['mdp'];
    // appel de la methode statique connexion
    Utilisateur::connexion($email, $password);
}