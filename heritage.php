<!-- nouvelle laisson -->
<?php
// classe humain quin est mere de magicien et paticier
class Humain {

    // on declare les deux attributs protected a une portée jusqu'au fille seulement c'est private mais aller jussqu'a lenfant
    protected $nom;
    protected $prenom;

// il faut constructor pour initialiser les
    public function __construct($nom1, $prenom1){
        $this->nom = $nom1;
        $this->prenom = $prenom1;
        
    }
// on donne une methode a la mere qui sera aussi herité par les filles
    public function dormir(){

    echo 'je fais dodo';
   }

}
// on cree une classe magicien fille de humain grace a EXTENDS, heritera les attributs et proprierté du parent

class Magicien extends Humain{
// $baguette;on lui cree un constructeur car il ne provient pas du parent, cest  attribut au magicien seul
    public $baguette;
    public function __construct($nom1, $prenom1, $baguette1){
       
        // ou $this->nom = $nom1;
        // $this->prenom = $prenom1;
           $this->baguett = $baguette1;
        // appeler le constructeur de parent et lui passer le deux paramettre de parent
    parent::__construct($nom1, $prenom1);
    
        
    }
// faire un gateau est la methode au magicien
    public function faireUnTourDeMagie() {
       echo'bonjour cest '.$this->prenom. " " .$this->nom. ' ' ." jai de la". $this->baguette. "whaouuu voici un petit lapin sorti du chapeau";

    }

}
   // class patissier
class Patissier extends Humain{
    // onfait plus apl au constructeur ici car $batteur a deja une valeur
       public $batteur = "electrique";
//    methode de paticierele
       public function faireDeBonGateau() {
       echo' bonjour cest'. " ".$this->prenom. " ". $this->nom. " ". "jai un suppeur batteur ". $this->batteur. " miam voici un delicieux gateau";
 
       }
}


// instancier un magicien
       $magic = new Magicien ("le magicien","julien",  "baguette de sureau");
       $magic->faireUnTourDeMagie();

    echo "<br>";

// creer une patissiere

       $patissiere = new Patissier ("cherie","nawel");
       $patissiere->faireDeBonGateau();

