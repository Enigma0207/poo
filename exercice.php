

<?php

// creez une classe Voiture avec les attributs suivants:

// couleur,marque,model

//et les methodes suivantes:

// rouler,accelerer,freiner



//creez une voiture de marque peugeot de model 308 et de couleur noir



// pour la methode rouler afficher le texte "je roule"

// pour la methode accelerer afficher le texte "J'accelere"

// pour la methode freiner afficher le texte "Je freine"
// class Voiture
// {
    // attribue
    // public $couler;
    // // public $marque;
    // public $model;

    // methode
    // public function rouler()
    // {

        // echo $this->marque. " ". $this->model ." ".  $this->couler. " " . 'je roule  <br>';
    // }
    // public function accelerer()
    // {


    //     echo 'jaccelere <br>';
    // }
    // public function freiner()
    // {


    //     echo 'je freine <br>';
    // }


// }
//instancie une classe
// $voiture1 = new Voiture();

// $voiture1->couler = "noire";
// $voiture1->marque = "peugeot";
// $voiture1->model = "207";
// modification de proprieté voiture
// $voiture1->rouler();
// $voiture1->accelerer();
// $voiture1->freiner();



//  CONSTRUCT

// class voitureAvecConstructeur {
//     // creation des attributs
//     public $couleur;
//     public $marque;
//     public $model;
//     // constructor avk des paramettre au choix
//     public function __construct($color, $brand, $model){
//         // affecter aux attributs les paramettre du constructeur

//         $this->couleur = $color;
//         $this->marque = $brand;
//         $this->model = $model;

//     }
//     // methode hors la constructor
//     public function rouler()
//     {

//         echo 'je roule <br>';
//     }
//     public function accelerer()
//     {


//         echo 'jaccelere <br>';
//     }
//     public function freiner()
//     {


//         echo 'je freine <br>';
//     }
// }



// // creer voiture

// $voiture2 = new voitureAvecConstructeur("citroen", "c4", "rouge");
// $voiture2->rouler();
// $voiture2->accelerer();
// $voiture2->freiner();
// ?>






<?php
// class Moule{
    // attributs du gateau
    // public $gout;
    // public $texture;

    // les methodes du gateau
    // public function nourrir()
    // {
        // echo "je suis un gateau au " . $this->gout . " " . $this->texture . " je vous regale <br>";
//     }
// }
// creer un gateau au chocolat fondant
// $gateauAuChocolat = new Moule(); // instancier un objet
// $gateauAuChocolat->gout = "chocolat";
// $gateauAuChocolat->texture = "fondant";
// $gateauAuChocolat->nourrir();

// $gateauAuCitron = new Moule(); // instancier un objet
// $gateauAuCitron->gout = "citron";
// $gateauAuCitron->texture = "fondant";
// $gateauAuCitron->nourrir();

// NOTION DE PORTEE PUBLIC ET PRIVATE
// avec private $marque;
// geter= lecture de l'attribut en privée ; le seter affecte une valeur a la variable


// CONSTRUCTEUR

// class voitureAvecConstructeur {

 
// }
// ;





// EXERCICE AVEC STATIC
// de creer une methode deposer qui prend 1 parametres :  le montant a deposer pour ajouter la somme dans le compte concerne

// une methode retirer qui prend 1 parametres: le montant a retirer elle permet de retirer le montant du compte concerne

// une methode transferer qui prend 3 parametres le numero de compte destinataire, le montant et le numero de compte expediteur elle permet de transferer un montant d'un compte a un autre




 class compteBancaire {
    // declarer les proprietéz normales
    private $numero;
    private $nom;
    private $solde;
    // on ceer un tableau vide contenant la liste de compte bancaire pour la methode 
    public static $listCompt=[];

    //    declarer une proprieteb static unitialiser a 0
     public static $nombreDeCompte =0;
     
     public function __construct($solde,$nom){
         
        self::$nombreDeCompte++; // self est utilisé pour la méthode et la proprieté statique, ici nous permet d'auto incrementer
        
        $this->numero = "FR 76 00".self::$nombreDeCompte;
        // kan on ouvtre le compte le solde est egale au solde initial
        $this->solde =  $solde;
      
        $this->nom =  $nom;
        array_push(self::$listCompt, $this);

        
    }

   // creer un geter qui permet de recuperer le numero de compte
    public function getNumero(){
        return $this->numero;
    } 


    // 1.methode DEPOSER.
    public function deposer($montant) {
        // si le montant déposé est >0,  $this->solde(montant actuel+montant deposé)
        if ($montant > 0) {
            $this->solde += $montant;
            echo "Dépôt de $montant € effectué avec succès. Nouveau solde : $this->solde €";
        } else {
            echo "Le montant du dépôt doit être supérieur à zéro.";
        }
    }
    // 1.methode DEPOSER.
    public function retirer($montant) {
        if ($montant > 0) {
            if ($this->solde >= $montant) {
                $this->solde -= $montant;
                echo "Retrait de $montant € effectué avec succès. Nouveau solde : $this->solde €";
            } else {
                echo "Solde insuffisant pour effectuer le retrait.";
            }
        } else {
            echo "Le montant du retrait doit être supérieur à zéro.";
        }
    }
    // 1.methode TRANSFERER.
    // parametre $numero cest pour savoir le compte ou transferer le montant
    public function transferer($numero, $montant) {
        if ($montant > 0 && $this->solde >= $montant) {
            foreach(self:: $listCompt as $compte){
            //   var_dump( $compte);
            // si le numero asocié au $compte == $numero
            if($compte->numero == $numero){
                $compte->solde+=$montant;
                $this->solde-=$montant;
                return;
            }
        }
    }

   


  }
    public function getSolde(){
        return $this->solde;
    }

 }
 
// J'ai ajouté les méthodes retirer et transferer en plus de la méthode deposer. La méthode retirer permet de retirer un montant du compte, 
// et la méthode transferer permet de transférer un montant vers un autre compte. Notez que la méthode transferer prend désormais un seul 
// paramètre pour représenter le compte destinataire, plutôt que deux.

// Vous pouvez utiliser ces méthodes de la manière suivante :



$compte1 = new compteBancaire(1000, "John Doe");
$compte2 = new compteBancaire(500, "Jane Smith");

$compte1->deposer(200); // Dépose 200 € sur le compte 1
echo "numero de compte de john ".$compte1->getNumero() ."<br>";
echo $compte1->getSolde() ."<br>";
$compte1->retirer(50);  // Retire 50 € du compte 1
echo  "numero de compte de john ".$compte1->getNumero() ."<br>";
echo $compte1->getSolde() ."<br>";

$compte1->transferer($compte2->getNumero(), 100); // Transfère 100 € du compte 1 au compte 2
echo  "numero de compte de john ". $compte2->getNumero() ."<br>";
echo  "numero de compte de jane ".$compte2->getSolde() ."<br>";




// chaque compte bancaire est fixixé par cette chaine de caractere "FR 76 00 "
// creer un compte kludgfidehfuhelifk







?> 