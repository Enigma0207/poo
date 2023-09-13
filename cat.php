<?php         

class chat{
    private $nom;
    private $couleur;
    private $age;
    private $race;

// constructeur
    public function __construct($nom, $couleur, $race,$age){

        $this->nom = $nom;
        $this->couleur = $couleur;
        $this->race = $race;
        $this->age = $age;

    }

    //creer le geter et seter de la proprieté age 
    // le geter son role c'est de recuperer la valeur de la proprieter declare avec le mot clé private

    public function getAge(){ //pour recuperer l'age
        return $this->age;
    }
    public function setAge($newAge){ //pour modifier l'age
        $this->age = $newAge;
    }
}

// creer un chat

$chat1 = new chat("alin", "beige", "siamois", 3);

// chat1->=4;
echo $chat1->getAge(). "<br>";
$chat1->setAge(4). "<br>";
// je vais afficher encore si la modification est passée apret setAge, on doit encre recuperer avec getAge pour aficher
echo $chat1->getAge();
