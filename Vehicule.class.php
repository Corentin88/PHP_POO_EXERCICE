<?php
class Vehicule {
    private $couleur;
    private $poids;
private function __construct($couleur = '' , $poids = '')
{
    $this->couleur = $couleur;
    $this->poids = $poids;
}
    public function rouler() {
        echo "Le véhicule roule.\n";
    }

    public function ajouter_personne($poids_personne) {
        $this->poids += $poids_personne;
    }

    // Getters et Setters
    public function getCouleur() {
        return $this->couleur;
    }

    public function setCouleur($couleur) {
        $this->couleur = $couleur;
    }

    public function getPoids() {
        return $this->poids;
    }

    public function setPoids($poids) {
        $this->poids = $poids;
    }
}




?>
