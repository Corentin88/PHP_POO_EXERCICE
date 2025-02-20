<?php
require_once "QuatreRoues.class.php";


class Camion extends Quatre_roues {
    private $longueur;

    public function ajouter_remorque($longueur_remorque) {
        $this->longueur += $longueur_remorque;
    }

    // Getters et Setters
    public function getLongueur() {
        return $this->longueur;
    }

    public function setLongueur($longueur) {
        $this->longueur = $longueur;
    }
}
?>