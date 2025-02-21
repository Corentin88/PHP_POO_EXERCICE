<?php
require_once "Vehicule.class.php";


class Quatre_roues extends Vehicule
{
    private $nombrePortes;

    public function __construct($couleur, $poids, $nombrePortes)
    {
        parent::__construct($couleur, $poids);
        $this->nombrePortes = $nombrePortes;
    }


    public function getNombrePortes()
    {
        return $this->nombrePortes;
    }

    public function setNombrePorte($nombrePortes)
    {
        $this->nombrePortes = $nombrePortes;
    }
    public function ajouter_personne($poids_personne) {
        $this->poids += $poids_personne;
        echo "Ajout d'une personne de $poids_personne kg. Nouveau poids du véhicule : " . $this->getPoids() . " kg.<br>";
    }
}
