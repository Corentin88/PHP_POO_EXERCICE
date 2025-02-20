<?php
require_once "Vehicule.class.php";

class Deux_roues extends Vehicule {
    private $cylindree;

    public function mettre_essence($nombre_litre) {
        echo "Ajout de $nombre_litre litres d'essence.\n";
    }

    // Getters et Setters
    public function getCylindree() {
        return $this->cylindree;
    }

    public function setCylindree($cylindree) {
        $this->cylindree = $cylindree;
    }
}
?>