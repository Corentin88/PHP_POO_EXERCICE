<?php
require_once "Vehicule.class.php";

class Deux_roues extends Vehicule {
    private $cylindree;

    public function __construct($couleur, $poids )
    {
        parent::__construct($couleur, $poids);
    }

    public function mettre_essence($nombre_litre) {
        $this->setPoids($this->getPoids() + $nombre_litre);
        echo "Ajout de $nombre_litre litres d'essence. Nouveau poids : " . $this->getPoids() . " kg.<br>";    }

    public function getCylindree() {
        return $this->cylindree;
    }

    public function setCylindree($cylindree) {
        $this->cylindree = $cylindree;
    }
    public function ajouter_personne($poids_personne)
    {
        $poids_total = $poids_personne + 2;
        $this->poids += $poids_total;
        echo "Ajout d'une personne de $poids_personne kg. Nouveau poids : " . $this->getPoids() . " kg.<br>";
    }
}
?>