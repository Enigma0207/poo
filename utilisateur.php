<?php
session_start();
// de creer la classe Utilisateur avec les proprietes:
// nom, prenom, email, mot de passe
// les methodes : inscription, connexion, deconnexion
include "database.php";
class Utilisateur{
    private $nom;
    private $prenom;
    private $email;
    private $mdp;

    public function __construct($nom, $prenom, $email, $password){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->mdp = $password;
    }
    // methode inscription
    public function inscription(){
        // creer une instance DbConnect
        $dbConnect = new DbConnect();
        // se conecter a la bd
        $db = $dbConnect->dbConnexion(); // methode 1
        // $db = $dbConnect->connexionDataBase; // methode 2
        // preparer la requete
        $request = $db->prepare("INSERT INTO `utilisateur`(`nom`, `prenom`, `email`, `mdp`) VALUES (?,?,?,?)");
        try{
            // executer la requete
            $request->execute(array($this->nom, $this->prenom, $this->email, $this->mdp));
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    // une methode stiatique c'est une methode qui appartient a la classe elle meme et pas aux instances de cette classe
    // une methode statique peut etre executee sans instancier la classe qui l'encapsule
    // methode connexion
    public static function connexion($email, $password){
        // creer une instance DbConnect
        $dbConnect = new DbConnect();
        $db = $dbConnect->dbConnexion();
        // preparer la requete
        $request = $db->prepare("SELECT * FROM utilisateur WHERE email = ?");
        // executer la requete
        try{
            $request->execute(array($email));
            $user = $request->fetch();

            if(empty($user)){ // si $user est vide
                echo "utilisateur inconnue";
            }else{ // sinon
                if(password_verify($password, $user['mdp'])){
                    // creation des variables de session et redirection vers la bonne page
                    $_SESSION['prenom'] = $user['prenom'];
                    header("Location:accueil.php");

                }else{
                    echo "mot de passe incorrect";
                }
            }
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

}
