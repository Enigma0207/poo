<?php
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

// classe fille de FormeGeometrique
class Rectangle extends FormeGeometrique {
    // proprieté a lui seul
        protected $longueur;
        protected $largeur;
    public function __construct($long, $larg){
       
        $this->longueur = $long;
        $this->largeur = $larg;

  }


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

// classe fille de FormeGeometrique
class Cercle extends FormeGeometrique {
    // proprieté a lui seul
        protected $rayon;
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

