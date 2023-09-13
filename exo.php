<?php
abstract class FormeGeometrique {
    protected $surface;
    protected $perimetre;

    public abstract function calculerSurface();
    public abstract function calculerPerimetre();
}

class Rectangle extends FormeGeometrique {
    protected $longueur;
    protected $largeur;

    public function __construct($longueur, $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function calculerSurface() {
        $this->surface = $this->longueur * $this->largeur;
        return $this->surface;
    }

    public function calculerPerimetre() {
        $this->perimetre = 2 * ($this->longueur + $this->largeur);
        return $this->perimetre;
    }
}

class Cercle extends FormeGeometrique {
    protected $rayon;

    public function __construct($rayon) {
        $this->rayon = $rayon;
    }

    public function calculerSurface() {
        $this->surface = M_PI * pow($this->rayon, 2);
        return $this->surface;
    }

    public function calculerPerimetre() {
        $this->perimetre = 2 * M_PI * $this->rayon;
        return $this->perimetre;
    }
}

// Exemple d'utilisation
$rectangle = new Rectangle(5, 10);
echo "Rectangle - Surface : " . $rectangle->calculerSurface() . "\n";
echo "Rectangle - Périmètre : " . $rectangle->calculerPerimetre() . "\n";

$cercle = new Cercle(3);
echo "Cercle - Surface : " . $cercle->calculerSurface() . "\n";
echo "Cercle - Périmètre : " . $cercle->calculerPerimetre() . "\n";
?>
