<?php

/**
 * creer une classe abstraite FormeGeometrique
 * avec les attribut suivants:
 * 1) Surface
 * 2) perimetre
 * 
 * creer la classe Rectangle fille de FormeGeometrique avec les attributs suivant:
 * 1) longueur
 * 2) largeur
 * et les methodes calculerSurface et calculerPerimetre
 * 
 * creer la classe Cercle fille de FormeGeometrique avec les proprietes suivantes:
 * 1) rayon
 * et les methodes calculerSurface et calculerPerimetre
 */
// classe abstract
abstract class FormeGeometrique {
    // deux paramettre
    protected $surface;
    protected $perimetre;

     public function __construct($x, $y){
        $this->surface = $x;
        $this->perimetre = $y;
        
    }

    // public abstract function calculerSurface();
    // public abstract function calculerPerimetre();

}

// classe rectangle, fille de class mere FormeGeometrique
class Rectangle extends FormeGeometrique {
    // proprieté a lui seul,on met en private pck ils n'on auraont pas d'enfant
        private $longueur;
        private $largeur;
    public function __construct($long, $larg){
       
        $this->longueur = $long;
        $this->largeur = $larg;

  }
//   ou


//    les methodes calculerSurface et calculerPerimetre


// 1.alculerSurface
public function calculerSurface() {
     $this->surface = $this->longueur * $this->largeur ;
      return $this->surface;

    }


    // 2.calculerPerimetre

    public function calculerPerimetre() {
    $this->perimetre = 2 * ($this->longueur + $this->largeur) ;
      return $this->perimetre;

    }


}

// ..........

// classe Cercle fille de FormeGeometrique
class Cercle extends FormeGeometrique {
    // proprieté a lui seul
        private $rayon;
    public function __construct($rayon){
        $this->rayon = $rayon;

  }


//  les methodes calculerSurface et calculerPerimetre


// 1.alculerSurface
public function calculerSurface() {
        $this->surface = M_PI * pow($this->rayon, 2);
        return $this->surface;
    }


// 2.calculerPerimetre

   public function calculerPerimetre() {
        $this->perimetre = 2 * M_PI * $this->rayon;
        return $this->perimetre;
    }


}

// intencier



$Rectangle1 =new Rectangle(2, 3);
echo "cercle-surface :".$Rectangle1->calculerSurface()."<br>";
echo "cercle-surface :".$Rectangle1->calculerPerimetre();

$Cercle1 =new cercle(5);
echo "cercle-surface :".$Cercle1->calculerSurface() ."<br>";
echo "cercle-surface :".$Cercle1->calculerPerimetre() ."<br>";

