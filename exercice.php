

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

class voitureAvecConstructeur {
    // creation des attributs
    public $couleur;
    public $marque;
    public $model;
    // constructor avk des paramettre au choix
    public function __construct($color, $brand, $model){
        // affecter aux attributs les paramettre du constructeur

        $this->couleur = $color;
        $this->marque = $brand;
        $this->model = $model;

    }
    // methode hors la constructor
    public function rouler()
    {

        echo 'je roule <br>';
    }
    public function accelerer()
    {


        echo 'jaccelere <br>';
    }
    public function freiner()
    {


        echo 'je freine <br>';
    }
}



// creer voiture

$voiture2 = new voitureAvecConstructeur("citroen", "c4", "rouge");
$voiture2->rouler();
$voiture2->accelerer();
$voiture2->freiner();
?>






<?php
class Moule{
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
;
?> 